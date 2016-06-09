<?php
/**
*
* @package phpBB Extension - Adsense & Ads
* @copyright (c) 2016 Stoker http://www.phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace stoker\adsenseads\migrations;

class module_data extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_ADSENSEADS'
			)),
			array('module.add', array(
				'acp',
				'ACP_ADSENSEADS',
				array(
					'module_basename'	=> '\stoker\adsenseads\acp\adsenseads_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
	
	public function revert_data()
	{
		return array(
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_ADSENSEADS'
			)),
			array('module.remove', array(
				'acp',
				'ACP_ADSENSEADS',
				array(
					'module_basename'	=> '\stoker\adsenseads\acp\adsenseads_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
