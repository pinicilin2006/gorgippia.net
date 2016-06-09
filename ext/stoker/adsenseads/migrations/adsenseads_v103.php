<?php
/**
*
* @package phpBB Extension - Adsense & Ads
* @copyright (c) 2016 Stoker http://www.phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace stoker\adsenseads\migrations;

class adsenseads_v103 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add config
			array('config.add', array('enable_total_topic_block', 0)),
			array('config.add', array('enable_adblock_detector', 0)),
			// Add config text
			array('config_text.add', array('total_topic_block_text', '')),
		);
	}
	
	public function revert_data()
	{
		return array(
			// Remove config
			array('config.remove', array('enable_total_topic_block', 0)),
			array('config.remove', array('enable_adblock_detector', 0)),
			// Remove config text
			array('config_text.remove', array('total_topic_block_text')),
		);
	}
}
