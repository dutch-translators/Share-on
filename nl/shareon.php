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
	'SO_SELECT'				=> 'Delen via',
	'SHARE_TOPIC'			=> 'Deel dit onderwerp via',
	'SHARE_POST'			=> 'Deel dit bericht via',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Delen via Facebook',
	'SHARE_ON_TWITTER'		=> 'Delen via Twitter',
	'SHARE_ON_TUENTI'		=> 'Delen via Tuenti',
	'SHARE_ON_DIGG'			=> 'Delen via Digg',
	'SHARE_ON_REDDIT'		=> 'Delen via Reddit',
	'SHARE_ON_DELICIOUS'	=> 'Delen via Delicious',
	'SHARE_ON_VK'			=> 'Delen via VK',
	'SHARE_ON_TUMBLR'		=> 'Delen via Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Delen via Google+',
	'SHARE_ON_WHATSAPP'		=> 'Delen via Whatsapp',
	'SHARE_ON_POCKET'		=> 'Delen via Pocket',
));
