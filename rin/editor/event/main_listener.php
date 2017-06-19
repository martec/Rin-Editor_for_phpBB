<?php

namespace rin\editor\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;
	/** @var \phpbb\request\request_interface */
	protected $request;	
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;
	/** @var \phpbb\config\config */
	protected $config;
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	protected $root_path;

	public function htmlspecialchars_uni($message)
	{
		$message = preg_replace("#&(?!\#[0-9]+;)#si", "&amp;", $message); // Fix & but allow unicode
		$message = str_replace("<", "&lt;", $message);
		$message = str_replace(">", "&gt;", $message);
		$message = str_replace("\"", "&quot;", $message);
		return $message;
	}

	/**
	 * Load common files during user setup
	 *
	 * @param \phpbb\event\data $event The event object
	 * @access public
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'rin/editor',
			'lang_set' => 'rce',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function __construct(\phpbb\auth\auth $auth, \phpbb\request\request_interface $request, \phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\config\config $config, \phpbb\user $user, $root_path)
	{
		$this->auth = $auth;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->config = $config;
		$this->db = $db;
		$this->root_path = $root_path;
	}

	static public function getSubscribedEvents()
	{
		$Default_Event = array(
			'core.user_setup' => 'load_language_on_setup',
			'core.display_custom_bbcodes' => 'initialize_rceditor',
			'core.viewtopic_modify_page_title' => 'initialize_rceditor',
			'core.viewtopic_post_rowset_data' => 'initialize_rcequickquote',
		);

		return $Default_Event;
	}

	public function initialize_rcequickquote($event)
	{
		$data = $event['rowset_data'];

		$this->template->assign_block_vars('RCE_POST_ROW',array(
			'RCE_POST_ID'		=> $data['post_id'],
			'RCE_USERNAME'		=> $data['username'],
			'RCE_POST_TIME'		=> $data['post_time'],
			'RCE_USER_ID'		=> $data['user_id'],
		));
	}

	public function initialize_rceditor($event, $eventname)
	{
		$rceqenb = true;
		$bbcode_status = $smilies_status = $img_status = $url_status = $flash_status = $quote_status = '';
		$quick_quote_page = false;

		if ((!$this->config['RCE_enb_quick'] || !$this->config['allow_quick_reply']) && $eventname == 'core.viewtopic_modify_page_title') {
			 $rceqenb = false;
			 $this->template->assign_vars(array('RCE_LOAD'	=> $rceqenb,));
			 return;
		}

		if ($eventname == 'core.viewtopic_modify_page_title') {
			$bbcode_status = ($this->config['allow_bbcode'] && $this->auth->acl_get('f_bbcode', $this->request->variable('f', 0))) ? true : false;
			$smilies_status	= ($this->config['allow_smilies'] && $this->auth->acl_get('f_smilies', $this->request->variable('f', 0))) ? true : false;
			$img_status	= ($bbcode_status && $this->auth->acl_get('f_img', $this->request->variable('f', 0))) ? true : false;
			$url_status	= ($this->config['allow_post_links']) ? true : false;
			$flash_status = ($bbcode_status && $this->auth->acl_get('f_flash', $this->request->variable('f', 0)) && $this->config['allow_post_flash']) ? true : false;
			$quote_status = true;
			$quick_quote_page = true;
		}

		// We need to get all smilies with url and code
		$sql = 'SELECT smiley_url, code, display_on_posting, emotion
			FROM ' . SMILIES_TABLE . '
			GROUP BY smiley_url';
		// Caching the smilies for 10 minutes should be okay
		// they don't get changed so often
		$result = $this->db->sql_query($sql, 600);
		while ($row = $this->db->sql_fetchrow($result))
		{
			if (intval($row['display_on_posting'])) {
				$this->template->assign_block_vars('RCE_EMOTICONS', array('code' => $this->htmlspecialchars_uni($row['code']), 'url' => $this->root_path . $this->config['smilies_path'] . '/' . $row['smiley_url'], 'name' => $row['emotion']));
			}
			else {
				$this->template->assign_block_vars('RCE_EMOTICONS_PLUS', array('code' => $this->htmlspecialchars_uni($row['code']), 'url' => $this->root_path . $this->config['smilies_path'] . '/' . $row['smiley_url'], 'name' => $row['emotion']));
			}
		}

		$fontsizes = array(50, 85, 100, 150, 200);

		foreach ($fontsizes as &$fontsize) {
			$this->template->assign_block_vars('RCE_FONT_SIZES', array('size' => $fontsize));
		}

		$this->template->assign_vars(array(
			'RCE_LOAD'						=> $rceqenb,
			'RCE_QQ_PAGE'					=> $quick_quote_page,
			'RCE_LANGUAGE'					=> $this->config['RCE_language'],
			'RCE_MOBM_SOURCE'				=> $this->config['RCE_mobm_source'],
			'RCE_SMILEY_SC'					=> $this->config['RCE_smiley_sc'],
			'RCE_AUTOSAVE'					=> $this->config['RCE_autosave'],
			'RCE_AUTOSAVE_MESSAGE'			=> $this->config['RCE_autosave_message'],
			'RCE_HEIGHT'					=> $this->config['RCE_height'],
			'RCE_RMV_BUTTONS'				=> $this->config['RCE_rmv_buttons'],
			'RCE_RULES'						=> $this->config['RCE_rules'],
			'RCE_RULES_DES'					=> $this->config['RCE_rules_des'],
			'RCE_IMGURAPI'					=> $this->config['RCE_imgurapi'],
			'RCE_SKIN'						=> $this->config['RCE_skin'],
			'RCE_QUICK_QUOTE'				=> $this->config['RCE_quickquote'],
			'RCE_SUP_SMENT'					=> $this->config['RCE_supsment'],
			'RCE_ROOT_PATH'					=> $this->root_path,
			'RCE_SMILEY_PATH'				=> $this->root_path . $this->config['smilies_path'] . '/',
			'RCE_MAX_NAME_CARACT'			=> $this->config['max_name_chars'],
			'RCE_MAX_FONT_SIZE'				=> $this->config['max_post_font_size'],
			'RCE_BBCODE_STATUS'				=> $bbcode_status,
			'RCE_SMILIES_STATUS'			=> $smilies_status,
			'RCE_IMG_STATUS'				=> $img_status,
			'RCE_URL_STATUS'				=> $url_status,
			'RCE_FLASH_STATUS'				=> $flash_status,
			'RCE_QUOTE_STATUS'				=> $quote_status,
		));
	}
}
