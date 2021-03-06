<?php
/**
*
* @package Support Toolkit - Clear Extensions
* @version $Id$
* @copyright (c) 2014 Sheer
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class clear_extensions
{
	function run_tool(&$error)
	{
		global $cache, $db, $template;

		$uids = request_var('marked_name', array('', ''));

		$remove_phpbbex_ext = array_keys($uids, 'phpBBex/phpBBext', true);
		foreach ($remove_phpbbex_ext as $remove_key)
		{
			unset($uids[$remove_key]);
		}

		if (empty($uids))
		{
			$error[] = 'NO_EXT_SELECTED';
			trigger_error('NO_EXT_SELECTED', E_USER_WARNING);
		}

		if (confirm_box(true))
		{
			$sql = 'SELECT ext_name FROM ' . EXT_TABLE . '
				WHERE ' . $db->sql_in_set('ext_name', $uids, false);
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$ext_name = explode('/', $row['ext_name']);
				$keyword = '*'. $ext_name[1] .'*';
				$sql = 'DELETE FROM ' . MIGRATIONS_TABLE . '
					WHERE migration_name ' . $db->sql_like_expression(str_replace('*', $db->get_any_char(), $keyword));
				$db->sql_query($sql);
			}
			$db->sql_freeresult($result);

			$sql = 'DELETE FROM ' . EXT_TABLE . '
				WHERE ' . $db->sql_in_set('ext_name', $uids, false);
			$db->sql_query($sql);
			if (empty($error))
			{
				// Purge the cache
				$cache->purge();
				trigger_error('CLEAR_EXT_SUCCESS');
			}
		}
		else
		{
			$hidden = build_hidden_fields(array('marked_name' => $uids));
			confirm_box(false, 'EXT_DELETE', $hidden, 'confirm_body.html', STK_DIR_NAME . '/index.' . PHP_EXT . '?c=admin&amp;t=clear_extensions&amp;submit=' . true);
		}
	}

	function display_options()
	{
		global $db, $template, $user, $cache;

		$off = request_var('off', false);

		page_header($user->lang['CLEAR_EXTENSIONS']);
		$no_composer = false;

		if ($off)
		{
			$uids = request_var('marked_name', array('', ''));

			$remove_phpbbex_ext = array_keys($uids, 'phpBBex/phpBBext', true);
			foreach ($remove_phpbbex_ext as $remove_key)
			{
				unset($uids[$remove_key]);
			}

			if (empty($uids))
			{
				$error[] = 'NO_EXT_SELECTED';
				trigger_error('NO_EXT_SELECTED', E_USER_WARNING);
			}
			if (confirm_box(true))
			{
				$sql = 'UPDATE ' . EXT_TABLE . '
					SET ext_active = 0
					WHERE ' . $db->sql_in_set('ext_name', $uids, false);
				$db->sql_query($sql);
				$cache->purge(); // Purge the cache
				trigger_error('OFF_EXT_SUCCESS');
			}
			else
			{
				$hidden = build_hidden_fields(array('marked_name' => $uids));
				confirm_box(false, 'EXT_OFF', $hidden, 'confirm_body.html', STK_DIR_NAME . '/index.' . PHP_EXT . '?c=admin&amp;t=clear_extensions&amp;off=' . true);
			}
		}

		$sql = 'SELECT *
			FROM ' . EXT_TABLE;
		$result = $db->sql_query($sql);
		while ($row = $db->sql_fetchrow($result))
		{
			$path = explode('/', $row['ext_name']);
			$display_name = $root = $missing_path = '';
			$phpbbex = ($row['ext_name'] === 'phpBBex/phpBBext') ? true : false;
			foreach($path as $key => $ext_path)
			{
				if($dir = @opendir(PHPBB_ROOT_PATH . 'ext/'.$root.$ext_path))
				{
					$file = readdir($dir);
					$root = $ext_path.'/';
				}
				else
				{
					$missing_path = $ext_path;
					break;
				}
			}

			if(!$missing_path)
			{
				if (file_exists(PHPBB_ROOT_PATH . 'ext/'.$row['ext_name'].'/composer.json'))
				{
					$buffer = file_get_contents(PHPBB_ROOT_PATH . 'ext/'.$row['ext_name'].'/composer.json');
					if ($buffer)
					{
						$obj = json_decode($buffer);
						$display_name = $obj->{'extra'}->{'display-name'};
					}

				}
				else
				{
					$no_composer = true;
				}
			}

			$template->assign_block_vars('row', array(
				'EXT_NAME'			=> $row['ext_name'],
				'MISSING_PATH'		=> ($missing_path) ? $missing_path : '',
				'NO_COMPOSER'		=> ($no_composer) ? true : false,
				'DISPLAY_NAME'		=> ($display_name) ? $display_name : sprintf($user->lang['NO_COMPOSER'], $row['ext_name']),
				'PHPBBEX_EXT'		=> $phpbbex,
				'S_ACTIVE'			=> $row['ext_active'],
				'EXT_MISSING_PATH'	=> ($missing_path) ? sprintf($user->lang['EXT_MISSING_PATH'], $row['ext_name']) : '',
			));
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'S_ACTION'		=> append_sid(STK_ROOT_PATH . 'index.' . PHP_EXT, 'c=admin&amp;t=clear_extensions'),
		));

		$template->set_filenames(array(
			'body' => 'tools/clear_extensions.html',
		));

		page_footer();
	}
}
