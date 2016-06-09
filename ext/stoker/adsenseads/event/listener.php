<?php
/**
*
* @package phpBB Extension - Adsense & Ads
* @copyright (c) 2016 Stoker http://www.phpbb3bbcodes.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace stoker\adsenseads\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\cache\driver\driver_interface */
	protected $cache;
	
	/** @var \phpbb\auth\auth */
	protected $auth;
	
	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\config\db_text */
	protected $config_text;
	
	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;
	
	/** @var \phpbb\db\driver\driver */
	protected $db;

	/**
	* Constructor
	*
	* @param \phpbb\cache\driver\driver_interface $cache             Cache driver interface
	* @param \phpbb\request\request				$request
	* @param \phpbb\template\template			$template
	* @param \phpbb\user						$user
	* @param \phpbb\auth\auth					$auth
	* @param \phpbb\db\driver\driver			$db
	* @param \phpbb\config\config				$config
	*/
	public function __construct(\phpbb\cache\driver\driver_interface $cache, \phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db)
	{
		$this->cache = $cache;
		$this->auth = $auth;
		$this->config = $config;
		$this->config_text = $config_text;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->db = $db;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.permissions'						=> 'add_permission',
			'core.page_header_after'				=> 'page_header_after',
		);
	}

	/**
	* Add permissions
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function add_permission($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_see_ads'] = array('lang' => 'ACL_U_SEE_ADS', 'cat' => 'misc');
		$event['permissions'] = $permissions;
	}
	
	public function page_header_after($event)
	{		
		$adsense_data = $this->cache->get('_adsense_data');

		if ($adsense_data === false)
		{
			$adsense_data = $this->config_text->get_array(array(
				'adblock_warn_text',
				'adblock_ad_text',
				'noscript_warn_text',
				'header_ad_text',
				'footer_ad_text',
				'topicfirst_ad_text',
				'topicmid_ad_text',
				'topiclast_ad_text',
				'search_ad_text',
				'total_topic_block_text',
			));

			$this->cache->put('_adsense_data', $adsense_data);
		}
		
		$adblock_warn_text = $this->config_text->get('adblock_warn_text');
		$adblock_ad_text = $this->config_text->get('adblock_ad_text');
		$noscript_warn_text = $this->config_text->get('noscript_warn_text');
		$header_ad_text = $this->config_text->get('header_ad_text');
		$footer_ad_text = $this->config_text->get('footer_ad_text');
		$topicfirst_ad_text = $this->config_text->get('topicfirst_ad_text');
		$topicmid_ad_text = $this->config_text->get('topicmid_ad_text');
		$topiclast_ad_text = $this->config_text->get('topiclast_ad_text');
		$search_ad_text = $this->config_text->get('search_ad_text');
		$total_topic_block_text = $this->config_text->get('total_topic_block_text');
		
		$this->template->assign_vars(array(
			'U_SEE_ADS' 					=> ($this->auth->acl_get('u_see_ads')) ? true : false,
			'ENABLE_ADSENSE_TESTMODE'		=> $this->config['enable_adsense_testmode'],
			'ENABLE_ADBLOCK_WARN'			=> $this->config['enable_adblock_warn'],
			'ENABLE_ADBLOCK_DETECTOR'		=> $this->config['enable_adblock_detector'],
			'ENABLE_NOSCRIPT_WARN'			=> $this->config['enable_noscript_warn'],
			'ENABLE_HEADER_AD' 				=> $this->config['enable_header_ad'],
			'ENABLE_FOOTER_AD' 				=> $this->config['enable_footer_ad'],
			'ENABLE_TOPICFIRST_AD' 			=> $this->config['enable_topicfirst_ad'],
			'ENABLE_TOPICMID_AD' 			=> $this->config['enable_topicmid_ad'],
			'ENABLE_TOPICLAST_AD' 			=> $this->config['enable_topiclast_ad'],
			'ENABLE_SEARCH_AD' 				=> $this->config['enable_search_ad'],
			'ENABLE_TOTAL_TOPIC_BLOCK' 		=> $this->config['enable_total_topic_block'],
			
			'ADBLOCK_WARN_TEXT'			=> htmlspecialchars_decode($adsense_data['adblock_warn_text']),
			'ADBLOCK_AD_TEXT'			=> htmlspecialchars_decode($adsense_data['adblock_ad_text']),
            'NOSCRIPT_WARN_TEXT'		=> htmlspecialchars_decode($adsense_data['noscript_warn_text']),
            'HEADER_AD_TEXT'			=> htmlspecialchars_decode($adsense_data['header_ad_text']),
            'FOOTER_AD_TEXT'			=> htmlspecialchars_decode($adsense_data['footer_ad_text']),
            'TOPICFIRST_AD_TEXT'		=> htmlspecialchars_decode($adsense_data['topicfirst_ad_text']),
            'TOPICMID_AD_TEXT'			=> htmlspecialchars_decode($adsense_data['topicmid_ad_text']),
            'TOPICLAST_AD_TEXT'			=> htmlspecialchars_decode($adsense_data['topiclast_ad_text']),
            'SEARCH_AD_TEXT'			=> htmlspecialchars_decode($adsense_data['search_ad_text']),
			'TOTAL_TOPIC_BLOCK_TEXT'	=> htmlspecialchars_decode($adsense_data['total_topic_block_text']),
			
		));
	}
}
