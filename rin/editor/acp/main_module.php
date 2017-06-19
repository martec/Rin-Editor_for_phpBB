<?php

namespace rin\editor\acp;

class main_module
{
	public $u_action;
	public $tpl_name;
	public $page_title;

	/** @var \phpbb\language\language */
	protected $language;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var string */
	protected $phpbb_root_path;

	/** @var string */
	protected $php_ext;

	/** @var string */
	protected $phpbb_log;

	public function main($id, $mode)
	{
		global $phpbb_root_path, $phpEx, $phpbb_log, $phpbb_container;

		$this->language = $phpbb_container->get('language');
		$this->template = $phpbb_container->get('template');
		$this->request	= $phpbb_container->get('request');
		$this->config	= $phpbb_container->get('config');
		$this->user		= $phpbb_container->get('user');
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext	= $phpEx;
		$this->phpbb_log  = $phpbb_log;

		$this->tpl_name = 'rin_editor_body';
		$this->page_title = $this->language->lang('ACP_RCE_TITLE');

		add_form_key('rin_editor_settings');

		$rce_config = array(
			'RCE_enb_quick'					=> array('default' => 1,					'validation' => array()),
			'RCE_language'					=> array('default' => '',					'validation' => array()),
			'RCE_mobm_source'				=> array('default' => 1,					'validation' => array()),
			'RCE_smiley_sc'					=> array('default' => 0,					'validation' => array()),
			'RCE_autosave'					=> array('default' => 1,					'validation' => array()),
			'RCE_autosave_message'			=> array('default' => 0,					'validation' => array()),
			'RCE_height'					=> array('default' => 250,					'validation' => array('num', false, 0, 500)),
			'RCE_quickquote'				=> array('default' => 1,					'validation' => array()),
			'RCE_supsment'					=> array('default' => 0,					'validation' => array()),
			'RCE_rmv_buttons'				=> array('default' => 'Subscript,Superscript',
																						'validation' => array('string', false, 0, 255)),
			'RCE_rules'						=> array('default' => '',					'validation' => array('string', false, 0, 255)),
			'RCE_rules_des'					=> array('default' => 'flash',				'validation' => array('string', false, 0, 255)),
			'RCE_imgurapi'					=> array('default' => '',					'validation' => array('string', false, 0, 255)),
			'RCE_skin'						=> array('default' => 'moonocolor',			'validation' => array('string', false, 0, 255)),
		);

		if ($this->request->is_set_post('submit'))
		{
			if (!function_exists('validate_data'))
			{
				include($this->phpbb_root_path . 'includes/functions_user.' . $this->php_ext);
			}

			$rce_new_config = array();
			$validation = array();
			foreach ($rce_config as $key => $value)
			{
				$rce_new_config[$key] = $this->request->variable($key, $value['default'], is_string($value['default']));
				if (!empty($value['validation']))
				{
					$validation[$key] = $value['validation'];
				}
			}

			$error = validate_data($rce_new_config, $validation);

			if (!check_form_key('rin_editor_settings'))
			{
				$error[] = 'FORM_INVALID';
			}

			if (empty($error))
			{
				// Set the options the user configured
				foreach ($rce_new_config as $config_name => $config_value)
				{
					if ($config_name == 'RCE_language') {
						if ($config_value == 'Default') {
							$config_value = '';
						}
					}
					$this->config->set($config_name, $config_value);
				}

				// Add an entry into the log table
				$this->phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'RCE CONFIG UPDATE', false, array($this->user->data['username']));

				trigger_error($this->language->lang('RCE_SETTING_SAVED') . adm_back_link($this->u_action));
			}

			// Replace "error" strings with their real, localised form
			$error = array_map(array($this->user, 'lang'), $error);
		}

		foreach (array_keys($rce_config) as $key)
		{
			$this->template->assign_var(strtoupper($key), $this->config[$key]);
		}

		function array_to_options($value, $arr, $id)
		{
			$s_array_to_options = '<select id="' . $id . '" name="' . $id . '">';
			foreach ($arr as $opt)
			{
				$s_array_to_options .= '<option value="' . $opt . '"' . (($value == $opt) ? ' selected="selected"' : '') . '>' . $opt . '</option>';
			}

			$s_array_to_options .= '</select>';

			return $s_array_to_options;
		}

		$lang_opts = array('Default', 'af', 'ar', 'bg', 'bn', 'bs', 'ca', 'cs', 'cy', 'da', 'de', 'el', 'en', 'en-au', 'en-ca', 'en-gb', 'eo', 'es', 'et', 'eu', 'fa', 'fi', 'fo', 'fr', 'fr-ca', 'gl', 'gu', 'he', 'hi', 'hr', 'hu', 'id', 'is', 'it', 'ja', 'ka', 'km', 'ko', 'ku', 'lt', 'lv', 'mk', 'mn', 'ms', 'nb', 'nl', 'no', 'pl', 'pt', 'pt-br', 'ro', 'ru', 'si', 'sk', 'sl', 'sq', 'sr', 'sr-latn', 'sv', 'th', 'tr', 'tt', 'ug', 'uk', 'vi', 'zh', 'zh-cn');
		$this->template->assign_vars(array(
			'RCE_LANG_SELECT'	=> array_to_options($this->config['RCE_language'], $lang_opts, 'RCE_language'),
			'RCE_ROOT_PATH'		=> $this->phpbb_root_path,
			'U_ACTION'			=> $this->u_action,
		));
	}
}