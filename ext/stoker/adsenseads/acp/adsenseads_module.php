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
* @package acp
*/
class adsenseads_module
{
    /** @var \phpbb\cache\driver\driver_interface */
	protected $cache;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string */
	public $u_action;

    public function main($id, $mode)
    {	
        global $cache, $config, $db, $config_text, $request, $template, $user, $phpbb_container;
	
		$this->cache = $cache;
        $this->config = $config;
		$this->config_text = $phpbb_container->get('config_text');
		$this->db = $db;
        $this->request = $request;
        $this->template = $template;
        $this->user = $user;

        $this->user->add_lang_ext('stoker/adsenseads', 'adsenseads_acp');

        $this->tpl_name = 'acp_adsenseads';
        $this->page_title = $this->user->lang('ACP_ADSENSEADS');

        $form_key = 'acp_adsenseads';
        add_form_key($form_key);

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

        if ($this->request->is_set_post('submit'))
        {
            if (!check_form_key($form_key))
            {
                trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
            }

            $this->config->set('enable_adsense_testmode', $this->request->variable('enable_adsense_testmode', 0));
            $this->config->set('enable_adblock_warn', $this->request->variable('enable_adblock_warn', 0));
			$this->config->set('enable_adblock_detector', $this->request->variable('enable_adblock_detector', 0));
            $this->config->set('enable_noscript_warn', $this->request->variable('enable_noscript_warn', 0));
            $this->config->set('enable_header_ad', $this->request->variable('enable_header_ad', 0));
            $this->config->set('enable_footer_ad', $this->request->variable('enable_footer_ad', 0));
            $this->config->set('enable_topicfirst_ad', $this->request->variable('enable_topicfirst_ad', 0));
            $this->config->set('enable_topicmid_ad', $this->request->variable('enable_topicmid_ad', 0));
            $this->config->set('enable_topiclast_ad', $this->request->variable('enable_topiclast_ad', 0));
            $this->config->set('enable_search_ad', $this->request->variable('enable_search_ad', 0));
			$this->config->set('enable_total_topic_block', $this->request->variable('enable_total_topic_block', 0));

			$this->config_text->set_array(array(
				'adblock_warn_text'			=> $this->request->variable('adblock_warn_text', '', true),
				'adblock_ad_text'			=> $this->request->variable('adblock_ad_text', '', true),
				'noscript_warn_text'		=> $this->request->variable('noscript_warn_text', '', true),
				'header_ad_text'			=> $this->request->variable('header_ad_text', '', true),
				'footer_ad_text'			=> $this->request->variable('footer_ad_text', '', true),
				'topicfirst_ad_text'		=> $this->request->variable('topicfirst_ad_text', '', true),
				'topicmid_ad_text'			=> $this->request->variable('topicmid_ad_text', '', true),
				'topiclast_ad_text'			=> $this->request->variable('topiclast_ad_text', '', true),
				'search_ad_text'			=> $this->request->variable('search_ad_text', '', true),
				'total_topic_block_text'	=> $this->request->variable('total_topic_block_text', '', true),
			));

			// Destroy any cached adsense data
			$this->cache->destroy('_adsense_data');

            trigger_error($this->user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
        }

        $this->template->assign_vars(array(
            'ENABLE_ADSENSE_TESTMODE'	=> (!empty($this->config['enable_adsense_testmode'])) ? true : false,
            'ENABLE_ADBLOCK_WARN'		=> (!empty($this->config['enable_adblock_warn'])) ? true : false,
			'ENABLE_ADBLOCK_DETECTOR'	=> (!empty($this->config['enable_adblock_detector'])) ? true : false,
            'ENABLE_NOSCRIPT_WARN'		=> (!empty($this->config['enable_noscript_warn'])) ? true : false,
            'ENABLE_HEADER_AD'			=> (!empty($this->config['enable_header_ad'])) ? true : false,
            'ENABLE_FOOTER_AD'			=> (!empty($this->config['enable_footer_ad'])) ? true : false,
            'ENABLE_TOPICFIRST_AD'		=> (!empty($this->config['enable_topicfirst_ad'])) ? true : false,
            'ENABLE_TOPICMID_AD'		=> (!empty($this->config['enable_topicmid_ad'])) ? true : false,
            'ENABLE_TOPICLAST_AD'		=> (!empty($this->config['enable_topiclast_ad'])) ? true : false,
            'ENABLE_SEARCH_AD'			=> (!empty($this->config['enable_search_ad'])) ? true : false,
			'ENABLE_TOTAL_TOPIC_BLOCK'	=> (!empty($this->config['enable_total_topic_block'])) ? true : false,
            
            'ADBLOCK_WARN_TEXT'			=> $adsense_data['adblock_warn_text'],
			'ADBLOCK_AD_TEXT'			=> $adsense_data['adblock_ad_text'],
            'NOSCRIPT_WARN_TEXT'		=> $adsense_data['noscript_warn_text'],
            'HEADER_AD_TEXT'			=> $adsense_data['header_ad_text'],
            'FOOTER_AD_TEXT'			=> $adsense_data['footer_ad_text'],
            'TOPICFIRST_AD_TEXT'		=> $adsense_data['topicfirst_ad_text'],
            'TOPICMID_AD_TEXT'			=> $adsense_data['topicmid_ad_text'],
            'TOPICLAST_AD_TEXT'			=> $adsense_data['topiclast_ad_text'],
            'SEARCH_AD_TEXT'			=> $adsense_data['search_ad_text'],
			'TOTAL_TOPIC_BLOCK_TEXT'	=> $adsense_data['total_topic_block_text'],

            'U_ACTION'					=> $this->u_action,
        ));
    }
}
 