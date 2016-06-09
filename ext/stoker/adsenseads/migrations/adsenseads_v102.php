<?php
/**
*
* @package phpBB Extension - Adsense & Ads
* @copyright (c) 2016 Stoker http://www.phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace stoker\adsenseads\migrations;

class adsenseads_v102 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add config
			array('config.add', array('enable_adsense_testmode', 0)),
			array('config.add', array('enable_adblock_warn', 0)),
			array('config.add', array('enable_noscript_warn', 0)),
			array('config.add', array('enable_header_ad', 0)),
			array('config.add', array('enable_footer_ad', 0)),
			array('config.add', array('enable_topicfirst_ad', 0)),
			array('config.add', array('enable_topicmid_ad', 0)),
			array('config.add', array('enable_topiclast_ad', 0)),
			array('config.add', array('enable_search_ad', 0)),
			// Add config text
			array('config_text.add', array('adblock_warn_text', '')),
			array('config_text.add', array('adblock_ad_text', '')),
			array('config_text.add', array('noscript_warn_text', '')),
			array('config_text.add', array('header_ad_text', '')),
			array('config_text.add', array('footer_ad_text', '')),
			array('config_text.add', array('topicfirst_ad_text', '')),
			array('config_text.add', array('topicmid_ad_text', '')),
			array('config_text.add', array('topiclast_ad_text', '')),
			array('config_text.add', array('search_ad_text', '')),
			// Add permissions
			array('permission.add', array('u_see_ads')),
			// Set permissions
			array('permission.permission_set', array('GUESTS', 'u_see_ads', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_see_ads', 'group')),
			array('permission.permission_set', array('NEWLY_REGISTERED', 'u_see_ads', 'group')),
			array('permission.permission_set', array('BOTS', 'u_see_ads', 'group', false)),
		);
	}
	
	public function revert_data()
	{
		return array(
			// Remove config
			array('config.remove', array('enable_adsense_testmode', 0)),
			array('config.remove', array('enable_adblock_warn', 0)),
			array('config.remove', array('enable_noscript_warn', 0)),
			array('config.remove', array('enable_header_ad', 0)),
			array('config.remove', array('enable_footer_ad', 0)),
			array('config.remove', array('enable_topicfirst_ad', 0)),
			array('config.remove', array('enable_topicmid_ad', 0)),
			array('config.remove', array('enable_topiclast_ad', 0)),
			array('config.remove', array('enable_search_ad', 0)),
			// Remove config text
			array('config_text.remove', array('adblock_warn_text')),
			array('config_text.remove', array('adblock_ad_text')),
			array('config_text.remove', array('noscript_warn_text')),
			array('config_text.remove', array('header_ad_text')),
			array('config_text.remove', array('footer_ad_text')),
			array('config_text.remove', array('topicfirst_ad_text')),
			array('config_text.remove', array('topicmid_ad_text')),
			array('config_text.remove', array('topiclast_ad_text')),
			array('config_text.remove', array('search_ad_text')),
			// Remove permissions
			array('permission.remove', array('u_see_ads')),
			// Unset permissions
			array('permission.permission_unset', array('GUESTS', 'u_see_ads', 'group')),
			array('permission.permission_unset', array('REGISTERED', 'u_see_ads', 'group')),
			array('permission.permission_unset', array('NEWLY_REGISTERED', 'u_see_ads', 'group')),
			array('permission.permission_unset', array('BOTS', 'u_see_ads', 'group')),
		);
	}
}
