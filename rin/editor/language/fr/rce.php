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
	'RCE_RESTORE'					=> 'Restaurer',
	'RCE_MORE'						=> 'Plus',
	'RCE_INSERT_A_VIDEO'			=> 'Insérer une vidéo',
	'RCE_ENTER_URL'					=> 'Saisir l&#39;URL:',
	'RCE_ENTER_THE_IMAGE_URL'		=> 'Saisir l&#39;URL de l&#39;image:',
	'RCE_DESCRIPTION_OPTIONAL'		=> 'Description (optionel):',
	'RCE_INSERT'					=> 'Insérer',
	'RCE_VIDEO_URL'					=> 'URL ou ID de la vidéo:',
	'RCE_QUICK_QUOTE'				=> 'Citation',

	// ACP
	'ACP_RCE_TITLE'			=>	'Rin Editor (Powerd by CKEditor)',
	'ACP_RCE_SETTING'		=>	'Paramètres Rin Editor',
	'RCE_CONFIG_UPDATE'		=>	'Paramètres de l&#39;éditeur mis à jour',
	'RCE_SETTING_SAVED'		=>	'Paramètres enregistrés!',
	'RCE_LANGUAGE_TITLE'	=>	'Langue du Rin Editor',
	'RCE_LANGUAGE_DESC'		=>	'Définissez la langue du Rin Editor.<br /><strong>PS.</strong> Utilisez &#39;Default&#39; pour utiliser la langue du navigateur.',
	'RCE_BBCODE_TITLE'		=>	'Choix BBCode',
	'RCE_BBCODE_DESC'		=>	'Choisissez le BBCode pour lequel vous voulez changez les permissions de groupes.',
	'RCE_PBBCODE_TITLE'		=>	'Permissions de groupes pour ',
	'RCE_PBBCODE_DESC'		=>	'Sélectionnez le groupe auquel vous souhaitez donner l&#39;accès au BBCode personnalisé.<br /><strong>PS.</strong> Si vous ne sélectionnez aucun groupe, tous les groupes auront la permission d&#39;utiliser ce BBCode.',
	'RCE_MOBMS_TITLE'		=>	'Mode "source" sur Mobile',
	'RCE_MOBMS_DESC'		=>	'Choisissez "oui" pour désactiver l&#39;éditeur sur mobile',
	'RCE_ENBQUICK_TITLE'	=>	'Réponses rapides',
	'RCE_ENBQUICK_DESC'		=>	'Choisissez "oui" pour afficher l&#39;éditeur sur les réponses rapides.',
	'RCE_SCSMILEY_TITLE'	=>	'Style SCEditor pour la Smile Box',
	'RCE_SCSMILEY_DESC'		=>	'Choisissez "oui" si vous préférez les smilies SCEditor aux smilies CKEditor.',
	'RCE_AUTOSAVE_TITLE'	=>	'Sauvegarde automatique',
	'RCE_AUTOSAVE_DESC'		=>	'Choisissez "oui" pour activez la sauvegarde automatique.',
	'RCE_AUTOSAVEMSG_TITLE' =>	'Notification de sauvegarde automatique',
	'RCE_AUTOSAVEMSG_DESC'	=>	'Choisissez "oui" pour montrer les notifications de sauvegarde.',
	'RCE_QUICKQUOTE_TITLE'	=>	'Citation rapide',
	'RCE_QUICKQUOTE_DESC'	=>	'Choisissez "oui" pour activez les citations rapides.',
	'RCE_SUPSMENT_TITLE'	=>	'Support pour l&#39;extension "Simple mentions"',
	'RCE_SUPSMENT_DESC'		=>	'Choisissez "oui" pour supporter l&#39;extension "Simple mentions".<br /><strong>PS.</strong> Pour utilisez ce paramètre, vous devez d&#39;abord installer l&#39;extension <a href="https://www.phpbb.com/customise/db/extension/simple_mentions/">Simple mentions</a>.',
	'RCE_HEIGHT_TITLE'		=>	'Hauteur de l&#39;éditeur',
	'RCE_HEIGHT_DESC'		=>	'Définissez la hauteur de l&#39;éditeur (en px).',
	'RCE_MAX_HEIGHT_TITLE'	=>	'Hauteur maximum de l&#39;éditeur',
	'RCE_MAX_HEIGHT_DESC'	=>	'Définissez la hauteur maximum de l&#39;éditeur (en px).',
	'RCE_SUPEXT_TITLE'		=>	'Support des extensions',
	'RCE_SUPEXT_DESC'		=>	'Choisissez "oui" pour supporter les boutons des extensions.<br /><strong>PS.</strong> Cette fonctionnalité en fonctionne pas dans le PCA, l&#39;édition rapide, ni la réponse rapide.',
	'RCE_DESNOPOP_TITLE'	=>	'Désactivation des pop-up d&#39;aide',
	'RCE_DESNOPOP_DESC'		=>	'Choisissez "oui" pour désactiver les pop-up d&#39;aide des boutons personnalisés.',
	'RCE_PARTIAL_TITLE'		=>	'Mode partiel',
	'RCE_PARTIAL_DESC'		=>	'Choisissez "oui" pour désactiver la conversion des tag "quote" et "code" en WYSIWYG (comme dans Xenforo).',
	'RCE_SELTXT_TITLE'		=>	'Ne pas remplacer le texte sélectionné',
	'RCE_SELTXT_DESC'		=>	'Choisissez "oui" si vous ne voulez pas que le texte sélectionné soit remplacé lors de l&#39;utilisation de boutons personnaliés.<br /><strong>PS.</strong> Cette fonctionnalité peut provoquer certains bugs.',
	'RCE_RMV_ACP_COLOR_TITLE'	=>	'Enlever le choix de couleur du PCA',
	'RCE_RMV_ACP_COLOR_DESC'	=>	'Choisissez "oui" enlever le choix de couleur du PCA.',
	'RCE_CACHE_TITLE'		=>	'Cache',
	'RCE_CACHE_DESC'		=>	'Définissez le temps du cache (en secondes). Saisissez 0 pour déactiver la fonctionnalité. Valeur maximum: 86400.<br /><strong>PS.</strong> Il est recommandé d&#39;utiliser le cache une fois la configuration complète pour ne pas affecter les performances.',
	'RCE_IMGUR_TITLE'		=>	'API Imgur',
	'RCE_IMGUR_DESC'		=>	'Saisissez ici l&#39;API imgur (Client ID).<br /><strong>PS.</strong>Vous pouvez obtenir un client ID sur <a href="https://imgur.com/register/api_anon">https://imgur.com/register/api_anon</a> (oauth2 sans callback)',
	'RCE_STYLE_TITLE'		=>	'Réglages du thème',
	'RCE_STYLE_DESC'		=>	'Sélectionnez le thème pour lequel vous voulez changer le style de l&#39;éditeur',
	'RCE_SKIN_TITLE'		=>	'Style pour ',
	'RCE_SKIN_DESC'			=>	'Choisissez le style. <br /><strong>Emplacement des styles:</strong> root/ext/rin/editor/styles/all/template/js/skins/',
	'RCE_TXTA_TITLE'		=>	'Couleur de la zone de texte pour',
	'RCE_TXTA_DESC'			=>	'Choisissez "oui" pour avoir la zone de texte en noir.',
	'RCE_BUT_TITLE'			=>	'Emplacement des icones pour les BBCodes personnalisés',
	'RCE_BUT_DESC'			=>	'root/ext/rin/editor/styles/all/template/js/icons<br />(Dimension: 16x16 px, Nome de fichier: Identique au nom du BBcode, Extension de fichier: png.)',
));
