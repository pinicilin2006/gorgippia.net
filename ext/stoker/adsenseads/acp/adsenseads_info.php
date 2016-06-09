<?php
/**
*
* @package phpBB Extension - Adsense & Ads
* @copyright (c) 2016 Stoker http://www.phpbb3bbcodes.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace stoker\adsenseads\acp;

/**
* @package module_install
*/
class adsenseads_info
{
	function module()
	{
		return array(
			'filename'	=> '\stoker\adsenseads\acp\xmas_module',
			'title'		=> 'ACP_ADSENSEADS',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_ADSENSEADS_SETTINGS',
					'auth' => 'ext_stoker/adsenseads && acl_a_board',
					'cat' => array('ACP_ADSENSEADS')
				),
			),
		);
	}
}
