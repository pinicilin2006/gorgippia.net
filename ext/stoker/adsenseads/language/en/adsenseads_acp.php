<?php
/**
*
* @package phpBB Extension - Adsense & Ads
* @copyright (c) 2016 Stoker http://www.phpbb3bbcodes.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_ADSENSEADS_EXPHEAD'					=> 'Even though this EXT is optimized for Adsense, you can use any ads you like. Just note that the Ad Block Detector needs an ad that is in the Ad Blockers filters, like Asense.<br/>If you like to make some changes to the css you can edit this file: /ext/stoker/adsenseads/styles/prosilver/theme/adsenseads.css<br />If you want to use different images you can upload them here: /ext/stoker/adsenseads/styles/prosilver/theme/images and make sure to use the same name or rename them in adsenseads.css',
	'ACP_ADSENSEADS_DONATE'						=> 'Please consider a <a href="http://www.phpbb3bbcodes.com/donate.php" onclick="window.open(this.href);return false;"><strong>Donation</strong></a> if you like the Extension',
	'ACP_ADSENSEADS_HEAD1'						=> 'Overall settings',
	'ACP_ENABLE_ADSENSE_TESTMODE'				=> 'Enable testmode.',
	'ACP_ENABLE_ADSENSE_TESTMODE_EXPLAIN'		=> 'If enabled only <strong>admins</strong> can view the ads. Use it for testing.',
	'ACP_ENABLE_ADBLOCK_WARN'					=> 'Enable Ad Block warning',
	'ACP_ENABLE_ADBLOCK_WARN_EXPLAIN'			=> 'If enabled a warning will be displayed for visitors with an Ad Blocker enabled.',
	
	'ACP_ENABLE_ADBLOCK_DETECTOR'				=> 'Enable Ad Block detector.',
	'ACP_ENABLE_ADBLOCK_DETECTOR_EXPLAIN'		=> 'If enabled the script will detect if an Ad Blocker is used.',
	
	'ACP_ADBLOCK_WARN_TEXT'						=> 'Ad Block warning text.',
	'ACP_ADBLOCK_WARN_TEXT_EXPLAIN'				=> 'Warning text displayed for Ad Blockers. This text will be displayed in a BIG warning in the header. It can be bypassed by blocking an entire div, but most users dont know how to do this.<br />You can use HTML but notice that you cant use " signs. You have to use \' instead. This goes for links and styling.',
	
	'ACP_ENABLE_TOTAL_TOPIC_BLOCK'				=> 'Enable Topic Ad Block warning',
	'ACP_ENABLE_TOTAL_TOPIC_BLOCK_EXPLAIN'		=> 'Be careful! When you enable this users with Ad Block enabled or javascript disabled wont be able to read topics. Instead users with Ad Block enabled will see the message you define right beneath. With javascript they will see the noscript warning.',
	'ACP_TOTAL_TOPIC_BLOCK_TEXT'				=> 'Topic Ad Block warning text.',
	'ACP_TOTAL_TOPIC_BLOCK_TEXT_EXPLAIN'		=> 'Warning for Topic Ad Blockers. This text will be displayed instead of the entire topic.<br />You can use HTML but notice that you cant use " signs. You have to use \' instead. This goes for links and styling.',
	
	'ACP_ENABLE_ADBLOCK_AD'						=> 'Enable Ad Block detector',
	'ACP_ENABLE_ADBLOCK_AD_EXPLAIN'				=> 'If enabled the extension will detect users with Ad Block enabled.',
	'ACP_ADBLOCK_AD_TEXT'						=> 'Ad Block detector ad code.',
	'ACP_ADBLOCK_AD_TEXT_EXPLAIN'				=> 'Adsense code for the Adblock Detector. You need Adsense here for this to work, or another javascript ad. Cant be responsive. I suggest a text link banner.<br />You can use HTML but notice that you cant use " signs. You have to use \' instead. This goes for links and styling.',
	
	'ACP_ENABLE_NOSCRIPT_WARN'					=> 'Enable noscript warning',
	'ACP_ENABLE_NOSCRIPT_WARN_EXPLAIN'			=> 'If enabled a warning will be displayed for visitors with javascript disabled. With javascript Adsense Ads also will be disabled. This option will work without Ad Block enabled.',
	'ACP_NOSCRIPT_WARN_TEXT'					=> 'Noscript warning text',
	'ACP_NOSCRIPT_WARN_TEXT_EXPLAIN'			=> 'Warning for noscripters. You can use HTML.',
	'ACP_ADSENSEADS_HEAD2' 						=> 'Header Ads',
	'ACP_ENABLE_HEADER_AD'						=> 'Enable Ads in header',
	'ACP_ENABLE_HEADER_AD_EXPLAIN'				=> 'Will display an ad in the header. Above the Ad Block Detector code',
	'ACP_HEADER_AD_TEXT' 						=> 'Header ad code',
	'ACP_HEADER_AD_TEXT_EXPLAIN'				=> 'Code for header ad goes here. You can use HTML.',
	'ACP_ADSENSEADS_HEAD3' 						=> 'Footer Ads',
	'ACP_ENABLE_FOOTER_AD'						=> 'Enable Ads in footer',
	'ACP_ENABLE_FOOTER_AD_EXPLAIN'				=> 'Will display an ad in the footer.',
	'ACP_FOOTER_AD_TEXT' 						=> 'Footer ad code',
	'ACP_FOOTER_AD_TEXT_EXPLAIN'				=> 'Code for footer ad goes here. You can use HTML.',
	'ACP_ADSENSEADS_HEAD4' 						=> 'Viewtopic Ads',
	'ACP_ENABLE_TOPICFIRST_AD'					=> 'Viewtopic first row Ads',
	'ACP_ENABLE_TOPICFIRST_AD_EXPLAIN'			=> 'Will display an ad in viewtopic after first post.',
	'ACP_TOPICFIRST_AD_TEXT' 					=> 'Viewtopic first row ad code',
	'ACP_TOPICFIRST_AD_TEXT_EXPLAIN'			=> 'Code for Viewtopic first row ad goes here. You can use HTML.',
	'ACP_ENABLE_TOPICMID_AD'					=> 'Enable Ads in viewtopic midddle row',
	'ACP_ENABLE_TOPICMID_AD_EXPLAIN'			=> 'Will display an ad in viewtopic after fifth post if its not the last post.',
	'ACP_TOPICMID_AD_TEXT' 						=> 'Viewtopic middle row ad code',
	'ACP_TOPICMID_AD_TEXT_EXPLAIN'				=> 'Code for Viewtopic middle row ad goes here. You can use HTML.',
	'ACP_ENABLE_TOPICLAST_AD'					=> 'Enable Ads in viewtopic last row',
	'ACP_ENABLE_TOPICLAST_AD_EXPLAIN'			=> 'Will display an ad in viewtopic before last post if more than 1 post.',
	'ACP_TOPICLAST_AD_TEXT' 					=> 'Viewtopic last row ad code',
	'ACP_TOPICLAST_AD_TEXT_EXPLAIN'				=> 'Code for Viewtopic last row ad goes here. You can use HTML.',
	
	'ACP_ADSENSEADS_HEAD5' 						=> 'Search result Ads',
	'ACP_ENABLE_SEARCH_AD'						=> 'Enable Ads in search results',
	'ACP_ENABLE_SEARCH_AD_EXPLAIN'				=> 'Will display an ad in top of all search results',
	'ACP_SEARCH_AD_TEXT' 						=> 'VSearch result ad code',
	'ACP_SEARCH_AD_TEXT_EXPLAIN'				=> 'Code for Search result ad goes here. You can use HTML.',
));
