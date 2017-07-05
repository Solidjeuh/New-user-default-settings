<?php
/**
*
* @package User Defaults Extension
* @copyright (c) 2016 david63
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* * @license GNU General Public License, version 2 (GPL-2.0)
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
	'APPROVE_NOTIFICATION'		=> 'Onderwerpen/berichten die zijn goedgekeurd of afgekeurd door een moderator',

	'CREATE_SUBSCRIBED_TOPIC'	=> 'Maak een onderwerp in een forum waar de gebruiker zich heeft geabonneerd',

	'DATE_FORMAT'				=> 'Gebruikers datum formaat',
	'DEFAULT_ADD_SIG'			=> 'Voeg gebruikers onderschrift toe',
	'DEFAULT_ALL_POSTS' 		=> '<strong>Standaard = Alle berichten</strong>',
	'DEFAULT_ALL_TOPICS' 		=> '<strong>Standaard = Alle onderwerpen</strong>',
	'DEFAULT_ASC' 				=> '<strong>Standaard = Oplopend</strong>',
	'DEFAULT_BBCODE'			=> 'Schakel BBCode in',
	'DEFAULT_DATE_FORMAT'		=> '<strong>Standaard = %s</strong>',
	'DEFAULT_DESC' 				=> '<strong>Standaard = Aflopend</strong>',
	'DEFAULT_EMAIL'				=> '<strong>Standaard = Email</strong>',
	'DEFAULT_NO'				=> '<strong>Standaard = Nee</strong>',
	'DEFAULT_NOTIFICATION'		=> '<strong>Standaard = Notificatie</strong>',
	'DEFAULT_POST_TIME' 		=> '<strong>Standaard = Post tijd</strong>',
	'DEFAULT_SMILIES'			=> 'Schakel smilies in',
	'DEFAULT_YES'				=> '<strong>Standaard = Ja</strong>',
	'DISABLE_CENSORS'			=> 'Schakel woord censuur in',
	'DISPLAY_SETTINGS'			=> 'Toon opties',

	'EMAIL'						=> 'Email',

	'GLOBAL_SETTINGS'			=> 'Globale instellingen',

	'MISC_NOTIFICATIONS'		=> 'Diverse notificaties',
	'MODERATOR_APPROVAL'		=> 'Een bericht of onderwerp heeft goedkeuring nodig',
	'MODERATOR_NOTIFICATIONS'	=> 'Moderatie Notificaties',
	'MODERATOR_REPORT'			=> 'Iemand rapporteert een bericht',

	'NOTIFICATION'				=> 'Notificaties',

	'POSTING_NOTIFICATIONS'		=> 'Plaats notificaties',
	'POSTING_SETTINGS'			=> 'Plaats standaards',

	'QUOTE_POST'				=> 'Citeert de gebruiker in een post',

	'REQUEST_GROUP'				=> 'Iemand vraagt aan om deel te nemen aan een groep die u leidt',
	'REPLY_BOOKMARK_TOPIC'		=> 'Reageert op een onderwerp dat de gebruiker als bladwijzer heeft',
	'REPLY_SUBSCRIBED_TOPIC'	=> 'Antwoord op een onderwerp waar de gebruiker zich heeft op geabonneerd',

	'SEND_PM'					=> 'Iemand stuurt de gebruiker een priv&eacute;bericht',

	'USER_ALLOW_PM'				=> 'Sta gebruikers toe om priv&eacuteberichten te verzenden',
	'USER_ALLOW_MASSEMAIL'		=> 'Beheerders kunnen informatie naar de gebruiker versturen',
	'USER_ALLOW_VIEWEMAIL'		=> 'De gebruiker kan per email worden gecontacteerd',
	'USER_DEFAULTS_EXPLAIN'		=> 'Stel hier de waarden in die u wilt als standaardwaarden voor <strong>nieuwe</strong> gebruikers.<br />Eventuele wijzigingen die via dit formulier worden gemaakt, zullen bestaande gebruikers<strong> niet </strong> be&iuml;nvloeden',
	'USER_NOTIFY'				=> 'Notificeer de gebruiker bij nieuwe antwoorden als standaard',
	'USER_NOTIFY_PM'			=> 'Gebruikers notificatie PB',

	'VERSION'					=> 'Versie',
	'VIEW_AVATARS'				=> 'Toon avatars',
	'VIEW_FLASH'				=> 'Toon Flash animaties',
	'VIEW_IMAGES'				=> 'Toon afbeeldingen binnen berichten',
	'VIEW_POSTS_DAYS' 			=> 'Toon berichten van eerdere dagen',
	'VIEW_POSTS_DIR' 			=> 'Toon de post sorteer richting',
	'VIEW_POSTS_KEY' 			=> 'Toon post sorteer richting op',
	'VIEW_SIGS'					=> 'Toon onderschriften',
	'VIEW_SMILIES'				=> 'Toon smilies als afbeeldingen',
	'VIEW_TOPICS_DAYS' 			=> 'Toon onderwerpen van eerdere dagen',
	'VIEW_TOPICS_DIR' 			=> 'Toon onderwerp sorteer richting',
	'VIEW_TOPICS_KEY' 			=> 'Toon onderwerp sorteer richting op',
));
