<?php

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

$lang = array_merge($lang, array(
	// Front
	'RCE_RESTORE'					=> 'Restore',
	'RCE_MORE'						=> 'More',
	'RCE_INSERT_A_VIDEO'			=> 'Insert a video',
	'RCE_YOUTUBE'					=> 'Youtube',
	'RCE_VIMEO'						=> 'Vimeo',
	'RCE_DAILYMOTION'				=> 'Dailymotion',
	'RCE_ENTER_URL'					=> 'Enter URL:',
	'RCE_ENTER_THE_IMAGE_URL'		=> 'Enter the image URL:',
	'RCE_DESCRIPTION_OPTIONAL'		=> 'Description (optional):',
	'RCE_INSERT'					=> 'Insert',
	'RCE_VIDEO_TYPE'				=> 'Video Type:',
	'RCE_VIDEO_URL'					=> 'Video URL:',
	'RCE_QUICK_QUOTE'				=> 'Quote Text',

	// ACP
	'ACP_RCE_TITLE'			=>	'Rin Editor (Powerd by CKEditor)',
	'ACP_RCE_SETTING'		=>	'Settings related to the Rin Editor',
	'RCE_SETTING_SAVED'		=>	'Settings have been saved successfully!',
	'RCE_LANGUAGE_TITLE'	=>	'Language of Rin Editor',
	'RCE_LANGUAGE_DESC'		=>	'Set here language of Rin Editor. Ps. Use default if you want editor detect browser language.',
	'RCE_MOBMS_TITLE'		=>	'Source Mode in Mobile',
	'RCE_MOBMS_DESC'		=>	'Set to yes if you want load Rin Editor in Source Mode when using mobile device.',
	'RCE_ENBQUICK_TITLE'	=>	'Show Rin Editor in quick reply and quick edit',
	'RCE_ENBQUICK_DESC'		=>	'Set to yes if you want to show the Rin Editor in quick reply and quick edit.',
	'RCE_SCSMILEY_TITLE'	=>	'SCEditor style like Smile Box',
	'RCE_SCSMILEY_DESC'		=>	'Set to yes if you want to use Smile Box like SCEditor instead CKEditor style.',
	'RCE_AUTOSAVE_TITLE'	=>	'Autosave Feature',
	'RCE_AUTOSAVE_DESC'		=>	'Set to no if you want disable autosave feature.',
	'RCE_AUTOSAVEMSG_TITLE' =>	'Autosaved Notification',
	'RCE_AUTOSAVEMSG_DESC'	=>	'Set to yes if you want show autosaved notification.',
	'RCE_QUICKQUOTE_TITLE'	=>	'Quick Quote Feature',
	'RCE_QUICKQUOTE_DESC'	=>	'Set to no if you do not want enable quick quote feature.',
	'RCE_SUPSMENT_TITLE'	=>	'Active support for Simple mentions extension',
	'RCE_SUPSMENT_DESC'		=>	'Set to no if you do not want enable support for Simple mentions extension feature.<br /><strong>Ps.</strong> Before active this feature, you need to install Simple mentions extension. https://www.phpbb.com/customise/db/extension/simple_mentions/',
	'RCE_HEIGHT_TITLE'		=>	'Height of the editor',
	'RCE_HEIGHT_DESC'		=>	'Set the height of the editor (value in px).',
	'RCE_BUTTONS_TITLE'		=>	'Remove buttons',
	'RCE_BUTTONS_DESC'		=>	'Enter the button name. You must make sure the rule is valid and safe—no validation is performed. Separate buttons with "," but <strong>without space</strong>.<br /><strong>Example:</strong> Subscript,Superscript<br /><strong>Button list:</strong> Bold,Italic,Underline,Strike,Subscript,Superscript,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,Font,FontSize,TextColor,removeFormat,HorizontalRule,<br />Image,Link,Unlink,Video,Smiley,Imgur,NumberedList,BulletedList,Blockquote,Code,SpecialChar,PasteText,PasteFromWord,Undo,Redo,Maximize,Source',
	'RCE_RULES_TITLE'		=>	'Add new button',
	'RCE_RULES_DESC'		=>	'Enter the button name. You must make sure the rule is valid and safe—no validation is performed. Separate buttons with "," but <strong>without space</strong>.<br /><strong>Example:</strong> spoiler,test<br /><strong>Location to put image button:</strong> root/ext/rin/editor/styles/all/template/js/icons (Dimension: 16x16 px, File name: Exactly same of button name, File extension: png.)',
	'RCE_RULESDESF_TITLE'	=>	'Add new button with Description',
	'RCE_IMGUR_TITLE'		=>	'Imgur',
	'RCE_IMGUR_DESC'		=>	'Set here API of imgur (Client ID).<br /><strong>Ps.</strong> You can get client id in https://imgur.com/register/api_anon (oauth2 without callback)',
	'RCE_SKIN_TITLE'		=>	'Change Skin',
	'RCE_SKIN_DESC'			=>	'Enter the Skin name. <br /><strong>Location to put new skin:</strong> root/ext/rin/editor/styles/all/template/js/skins/',
));
