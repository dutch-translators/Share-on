<?php
/**
*
* Share On extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
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
	// ACP
	'SO_ACP'		=> 'Delen via',
	'SO_TITLE'		=> 'Delen via Instellingen',
	'SO_EXPLAIN'	=> 'Je kan hier instellen naar welke sociale media websites, de onderwerpen/berichten gedeeld kunnen worden..',
	'SHARE_ON_MOD'	=> 'Delen via',
	'SO_CONFIG'		=> 'Instellingen',
	'SO_SAVED'		=> 'Instellingen succesvol bijgewerkt.',
	'SO_SELECT'		=> 'Delen via',
	'SO_STATUS'		=> 'Inschakelen',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',
	'SO_WHATSAPP'	=> 'Whatsapp',
	'SO_POCKET'		=> 'Pocket',

	// Share Type
	'SO_TYPE'			=> 'Deel type',
	'SO_TYPE_EXPLAIN'	=> 'Je kan kiezen om alleen <strong>onderwerpen</strong> te delen, of je kan ieder <strong>bericht</strong> uit het onderwerp apart delen.',
));
