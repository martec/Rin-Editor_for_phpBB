<?php
/**
 *
 * Auto Groups. An extension for the phpBB Forum Software package.
 * French translation by Xavier Olland & Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	// Front
	'RCE_RESTORE'					=> 'Restaurer',
	'RCE_MORE'						=> 'Plus',
	'RCE_INSERT_A_VIDEO'			=> 'Insérer une vidéo',
	'RCE_ENTER_URL'					=> 'Saisir l’URL:',
	'RCE_ENTER_THE_IMAGE_URL'		=> 'Saisir l’URL de l’image :',
	'RCE_DESCRIPTION_OPTIONAL'		=> 'Description (facultatif) :',
	'RCE_INSERT'					=> 'Insérer',
	'RCE_VIDEO_URL'					=> 'URL ou ID de la vidéo :',
	'RCE_QUICK_QUOTE'				=> 'Citation',
	'RCE_UPLOADING'					=> ' images en cours d’envoi…',
	'RCE_FAIL'						=> 'Échec de l’envoi des fichiers :',

	// ACP
	'ACP_RCE_TITLE'			=>	'Éditeur Rin (par CKEditor)',
	'ACP_RCE_SETTING'		=>	'Paramètres',
	'RCE_CONFIG_UPDATE'		=>	'Paramètres de l’éditeur Rin mis à jour avec succès !',
	'RCE_SETTING_SAVED'		=>	'Les paramètres de l’éditeur ont été enregistrés avec succès !',
	'RCE_LANGUAGE_TITLE'	=>	'Langue de l’éditeur Rin :',
	'RCE_LANGUAGE_DESC'		=>	'Permet de définir la langue de l’éditeur Rin.<br /><strong>Information :</strong> Sélectionner « Default » pour utiliser la langue du navigateur.',
	'RCE_BBCODE_TITLE'		=>	'Choix du BBCode :',
	'RCE_BBCODE_DESC'		=>	'Permet de sélectionner le BBCode pour lequel les permissions de groupes pourront être modifiées.',
	'RCE_PBBCODE_TITLE'		=>	'Permissions de groupes pour ',
	'RCE_PBBCODE_DESC'		=>	'Permet de sélectionner le ou les groupe(s) qui auront accès au BBCode précédemment sélectionné.<br /><strong>Information :</strong> Si aucun groupe n’est sélectionné tous les groupes auront la permission d’utiliser ce BBCode.',
	'RCE_MOBMS_TITLE'		=>	'Mode « Source » sur Mobile :',
	'RCE_MOBMS_DESC'		=>	'Permet de choisir si l’éditeur Rin est chargé en mode « Source » lorsque la page est consulté depuis un périphérique mobile.',
	'RCE_ENBQUICK_TITLE'	=>	'Réponse rapide & modification rapide :',
	'RCE_ENBQUICK_DESC'		=>	'Permet d’afficher l’éditeur Rin dans la réponse rapide et lors de la modification rapide.<br /><strong>Information :</strong> Pour profiter de l’éditeur Rin dans la modification rapide il est nécessaire d’installer l’extension « <a href="https://www.phpbb.com/customise/db/extension/quickedit">Quick Edit</a> ».',
	'RCE_SCSMILEY_TITLE'	=>	'Style de la boite de smileys façon SCEditor :',
	'RCE_SCSMILEY_DESC'		=>	'Permet d’afficher la boite de smileys façon SCEditor en lieu et place du style de CKEditor.',
	'RCE_AUTOSAVE_TITLE'	=>	'Sauvegarde automatique :',
	'RCE_AUTOSAVE_DESC'		=>	'Permet d’activer la sauvegarde automatique du contenu du message.',
	'RCE_AUTOSAVEMSG_TITLE' =>	'Notification de la sauvegarde automatique :',
	'RCE_AUTOSAVEMSG_DESC'	=>	'Permet d’afficher les notifications de la sauvegarde automatique des messages.',
	'RCE_QUICKQUOTE_TITLE'	=>	'Citation rapide :',
	'RCE_QUICKQUOTE_DESC'	=>	'Permet d’activer les citations rapides, fonctionnalité disponible en sélectionnant du texte dans un message.',
	'RCE_SUPSMENT_TITLE'	=>	'Support de l’extension « Simple mentions » :',
	'RCE_SUPSMENT_DESC'		=>	'Permet d’activer la prise en charge de l’extension « Simple mentions ».<br /><strong>Information :</strong> Au préalable d’activer cette option il est nécessaire d’installer l’extension « <a href="https://www.phpbb.com/customise/db/extension/simple_mentions/">Simple mentions</a> ».',
	'RCE_HEIGHT_TITLE'		=>	'Hauteur de l’éditeur :',
	'RCE_HEIGHT_DESC'		=>	'Permet de définir la hauteur de l’éditeur en pixel.',
	'RCE_MAX_HEIGHT_TITLE'	=>	'Hauteur maximale de l’éditeur :',
	'RCE_MAX_HEIGHT_DESC'	=>	'Permet de définir la hauteur maximale de l’éditeur en pixel.',
	'RCE_SUPEXT_TITLE'		=>	'Support d’autres extensions :',
	'RCE_SUPEXT_DESC'		=>	'Permet d’activer la prise en charge des extensions ajoutant de nouveaux boutons de BBCodes.<br /><strong>Information :</strong> Cette fonctionnalité ne fonctionne pas dans le PCA (panneau d’administration), la modification rapide et la réponse rapide.',
	'RCE_DESNOPOP_TITLE'	=>	'Désactivation des pop-ups d’aide :',
	'RCE_DESNOPOP_DESC'		=>	'Permet de désactiver l’affichage des pop-ups d’aide des boutons personnalisés.',
	'RCE_PARTIAL_TITLE'		=>	'Mode partiel :',
	'RCE_PARTIAL_DESC'		=>	'Permet de désactiver la conversion des tag « quote » et « code » en <a href="https://fr.wikipedia.org/wiki/What_you_see_is_what_you_get">WYSIWYG</a> » (comme dans Xenforo).',
	'RCE_SELTXT_TITLE'		=>	'Désactivation du remplacement du texte sélectionné :',
	'RCE_SELTXT_DESC'		=>	'Permet de ne pas remplacer le texte sélectionné lors de l’utilisation des BBCodes.<br /><strong>Information :</strong> Cette fonctionnalité peut provoquer certains bogues.',
	'RCE_RMV_ACP_COLOR_TITLE'	=>	'Masquer le sélecteur de couleurs du PCA :',
	'RCE_RMV_ACP_COLOR_DESC'	=>	'Permet de masquer le sélecteur de couleurs dans le panneau d’administration.',
	'RCE_CACHE_TITLE'		=>	'Durée du cache :',
	'RCE_CACHE_DESC'		=>	'Permet de définir le temps en secondes du cache. Saisir la valeur 0 pour désactiver cette fonctionnalité. Valeur maximale possible : 86400 (une journée).<br /><strong>Information :</strong> Afin de ne pas affecter les performances du forum il est recommandé de définir le cache une fois tous les autres paramètres configurés.',
	'RCE_IMGUR_TITLE'		=>	'API du service « imgur » :',
	'RCE_IMGUR_DESC'		=>	'Permet de saisir l’ID client de l’API du service « imgur ».<br /><strong>Information :</strong> Pour se procurer un ID client imgur merci de consulter le site Web : <a href="https://imgur.com/register/api_anon">https://imgur.com/register/api_anon</a>.',
	'RCE_STYLE_TITLE'		=>	'Sélection du style de l’éditeur Rin :',
	'RCE_STYLE_DESC'		=>	'Permet de sélectionner un habillage pour l’éditeur Rin.',
	'RCE_SKIN_TITLE'		=>	'Déclinaisons du style ',
	'RCE_SKIN_DESC'			=>	'Permet de sélectionner une déclinaison de l’habillage de l’éditeur.<br /><strong>Information :</strong> Leur emplacement se trouve dans le répertoire : ./ext/rin/editor/styles/all/template/js/skins/',
	'RCE_TXTA_TITLE'		=>	'Couleur de la zone de texte pour le style ',
	'RCE_TXTA_DESC'			=>	'Permet de définir la zone de texte en noir.',
	'RCE_BUT_TITLE'			=>	'Emplacement des icones pour les BBCodes personnalisés :',
	'RCE_BUT_DESC'			=>	'./ext/rin/editor/styles/all/template/js/icons/<br />Dimensions : 16 x 16 px<br />Nom du fichier : Identique au nom du BBcode<br />Extension du fichier: *.png',
));
