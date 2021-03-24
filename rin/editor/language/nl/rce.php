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
	'RCE_RESTORE'					=> 'Herstellen',
	'RCE_MORE'						=> 'Meer',
	'RCE_INSERT_A_VIDEO'			=> 'Voeg een video in',
	'RCE_ENTER_URL'					=> 'URL invoeren:',
	'RCE_ENTER_THE_IMAGE_URL'		=> 'Voer de afbeelding URL in:',
	'RCE_DESCRIPTION_OPTIONAL'		=> 'Beschrijving (optioneel):',
	'RCE_INSERT'					=> 'Invoegen',
	'RCE_VIDEO_URL'					=> 'Video URL of ID:',
	'RCE_QUICK_QUOTE'				=> 'Citaat Tekst',
	'RCE_UPLOADING'					=> ' afbeeldingen worden geüpload…',
	'RCE_FAIL'						=> 'Uploaden mislukt:',

	// ACP
	'ACP_RCE_TITLE'			=>	'Rin Editor (Aangedreven door CKEditor)',
	'ACP_RCE_SETTING'		=>	'Instellingen met betrekking tot de Rin Editor',
	'RCE_CONFIG_UPDATE'		=>	'Bijgewerkte Rin Editor instellingen',
	'RCE_SETTING_SAVED'		=>	'De instellingen zijn succesvol opgeslagen!',
	'RCE_LANGUAGE_TITLE'	=>	'Taal van Rin Editor',
	'RCE_LANGUAGE_DESC'		=>	'Stel hier de taal van Rin Editor in.<br><strong>PS.</strong> Gebruik standaard als u wilt dat de editor de browsertaal detecteert.',
	'RCE_BBCODE_TITLE'		=>	'BBCode keuze',
	'RCE_BBCODE_DESC'		=>	'Kies voor welke BBCode je de groepspermissies wilt wijzigen.',
	'RCE_PBBCODE_TITLE'		=>	'Groep permissies voor ',
	'RCE_PBBCODE_DESC'		=>	'Selecteer groepen die je toestemming wilt geven om aangepaste BBCode te gebruiken. Druk op Ctrl en klik om groepen te deselecteren.<br><strong>Ps.</strong> Als je geen enkele groep selecteert, hebben alle groepen toestemming om deze BBCode te gebruiken.',
	'RCE_MOBMS_TITLE'		=>	'Bronmodus in mobiel',
	'RCE_MOBMS_DESC'		=>	'Stel in op ja als u Rin Editor in de bronmodus wilt laden bij gebruik van een mobiel apparaat.',
	'RCE_ENBQUICK_TITLE'	=>	'Toon Rin Editor in snelle reactie en snel bewerken',
	'RCE_ENBQUICK_DESC'		=>	'Stel in op ja als u de Rin Editor wilt weergeven in snelle reactie en snel bewerken.',
	'RCE_SCSMILEY_TITLE'	=>	'SCEditor stijl zoals Smiley Box',
	'RCE_SCSMILEY_DESC'		=>	'Stel in op ja als u Smiley Box zoals SCEditor in plaats van CKEditor stijl wilt gebruiken.',
	'RCE_AUTOSAVE_TITLE'	=>	'Automatisch opslaan functie',
	'RCE_AUTOSAVE_DESC'		=>	'Stel in op nee als u de functie voor automatisch opslaan wilt uitschakelen.',
	'RCE_AUTOSAVEMSG_TITLE' =>	'Automatisch opgeslagen melding',
	'RCE_AUTOSAVEMSG_DESC'	=>	'Stel automatisch opslaan meldingstype in.',
	'RCE_AUTOSAVE_NOTIFCAT' =>	'Notificatie',
	'RCE_AUTOSAVE_STATUS'	=>	'Status bar',
	'RCE_AUTOSAVE_NONE' 	=>	'Geen',
	'RCE_QUICKQUOTE_TITLE'	=>	'Snelle citaat functie',
	'RCE_QUICKQUOTE_DESC'	=>	'Stel in op nee als u de functie voor snel citaat niet wilt inschakelen.',
	'RCE_QUICKREPLY_TITLE'	=>	'Snelle reactie functie',
	'RCE_QUICKREPLY_DESC'	=>	'Stel in op nee als u de functie voor snelle reactie niet wilt inschakelen.',
	'RCE_SUPSMENT_TITLE'	=>	'Actieve ondersteuning voor de extensie “Simple mentions”',
	'RCE_SUPSMENT_DESC'		=>	'Stel in op nee als u geen ondersteuning voor de extensie “Simple mentions” wilt.<br><strong>Ps.</strong> Voordat u deze functie activeert, moet u de extensie “Simple mentions” installeren. <p><a href="https://www.phpbb.com/customise/db/extension/simple_mentions/" target="_blank">https://www.phpbb.com/customise/db/extension/simple_mentions/</a></p>',
	'RCE_ACOMEMOJI_TITLE'	=>	'Actieve ondersteuning voor Emoji Automatisch aanvullen',
	'RCE_ACOMEMOJI_DESC'	=>	'Stel in op nee als u de functie Emoji Automatisch aanvullen niet wilt inschakelen.',
	'RCE_HEIGHT_TITLE'		=>	'Hoogte van de editor',
	'RCE_HEIGHT_DESC'		=>	'Stel de hoogte van de editor in (waarde in px).',
	'RCE_MAX_HEIGHT_TITLE'	=>	'Max hoogte van de editor',
	'RCE_MAX_HEIGHT_DESC'	=>	'Stel de maximale hoogte van de editor in (waarde in px).',
	'RCE_SUPEXT_TITLE'		=>	'Actieve ondersteuning voor externe extensie knoppen',
	'RCE_SUPEXT_DESC'		=>	'Stel in op ja als u ondersteuning voor externe extensie knoppen wilt inschakelen.<br><strong>Ps.</strong> Deze functie werkt niet in Beheerderspaneel, Snelle reactie en Snel bewerken.',
	'RCE_DESNOPOP_TITLE'	=>	'Geen pop-up met beschrijving voor aangepaste knoppen',
	'RCE_DESNOPOP_DESC'		=>	'Stel in op ja als u geen pop-up met beschrijving wilt',
	'RCE_PARTIAL_TITLE'		=>	'Gedeeltelijke modus',
	'RCE_PARTIAL_DESC'		=>	'Stel in op ja als u de functie Gedeeltelijke modus wilt inschakelen.<br><strong>Ps.</strong> Deze functie converteert geen quote tag en code tag in WYSIWYG stijl zoals in Xenforo.',
	'RCE_SELTXT_TITLE'		=>	'Vervang de geselecteerde tekst niet',
	'RCE_SELTXT_DESC'		=>	'Stel in op ja als u niet wilt dat de geselecteerde tekst wordt vervangen wanneer de aangepaste knop wordt geactiveerd.<br><strong>Ps.</strong> Het inschakelen van deze functie kan enkele bugs tot gevolg hebben.',
	'RCE_RMV_ACP_COLOR_TITLE'	=>	'Verwijder de Beheerderspaneel kleurkiezer',
	'RCE_RMV_ACP_COLOR_DESC'	=>	'Stel in op ja als u de beheerderspaneel kleurkiezer wilt verwijderen.',
	'RCE_CACHE_TITLE'		=>	'Cache',
	'RCE_CACHE_DESC'		=>	'Stel de cachetijd in seconden in. Stel 0 in om deze functie uit te schakelen. De maximaal toegestane waarde is 86400.<br><strong>Ps.</strong> Nadat het volledig is geconfigureerd, wordt het sterk aanbevolen om de cache te gebruiken om de prestaties niet te belemmeren.',
	'RCE_IMGUR_TITLE'		=>	'Imgur',
	'RCE_IMGUR_DESC'		=>	'Stel hier de API van imgur (Client-ID) in.<br><strong>Ps.</strong> U kunt een client ID krijgen in <p><a href="https://imgur.com/register/api_anon" target="_blank">https://imgur.com/register/api_anon</a></p> (oauth2 without callback)',
	'RCE_STYLE_TITLE'		=>	'Kies Stijl',
	'RCE_STYLE_DESC'		=>	'Kies voor welke stijl u het thema van de editor wilt wijzigen.',
	'RCE_SKIN_TITLE'		=>	'Thema voor voor ',
	'RCE_SKIN_DESC'			=>	'Voer de thema naam in. <br><strong>Locatie om nieuw thema te plaatsen:</strong> root/ext/rin/editor/styles/all/template/js/skins/',
	'RCE_TXTA_TITLE'		=>	'Tekstgebied kleur voor ',
	'RCE_TXTA_DESC'			=>	'Stel in op ja als u de kleur van het tekstgebied wilt wijzigen in zwart.',
	'RCE_BUT_TITLE'			=>	'Locatie om pictogrammen voor aangepaste BBCodes te plaatsen',
	'RCE_BUT_DESC'			=>	'root/ext/rin/editor/styles/all/template/js/skins/[your_skin]/icons<br>(Afmeting: 16x16 px, bestandsnaam: exact hetzelfde als bbcodenaam, bestandsextensie: png.)',
));
