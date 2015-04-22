<?php
/**
*
* @package MODX commands
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
			'MODX_FIND'				 => 'Find',
			'MODX_ADD_AFTER'			=> 'Add after',
			'MODX_ADD_BEFORE'			=> 'Add before',
			'MODX_REPLACE_WITH'		 => 'Replace with',
			'MODX_DELETE'				=> 'Delete',
			'MODX_IN_LINE_FIND'		 => 'In line find',
			'MODX_IN_LINE_ADD_AFTER'	=> 'In line add after',
			'MODX_IN_LINE_ADD_BEFORE'	=> 'In line add before',
			'MODX_IN_LINE_REPLACE_WITH' => 'In line replace with',
			'MODX_CMD'					=> 'MODx command',
			'BBCODE21_FIND'			 => '[b]Find[/b] [i][size=85]This may be a partial find and not the whole line[/size][/i]',
			'BBCODE21_AFTER'			=> '[b][color=#008000]Add after[/color][/b] [i][size=85]Add these lines on a new blank line after the preceding line(s) to find[/size][/i]',
			'BBCODE21_BEFORE'			=> '[b][color=#BF0080]Add before[/color][/b] [i][size=85]Add these lines on a new blank line before the preceding line(s) to find[/size][/i]',
			'BBCODE21_REPLACE'			=> '[b][color=#BF0000]Replace with[/b][/color] [i][size=85]Replace the preceding lines with the following[/size][/i]',
			'BBCODE21_DELETE'			=> '[b][color=#FF0000]Delete[/b][/color] [i][size=85]Remove the preceding lines[/size][/i]',
			'BBCODE21_INFIND'			=> '[b][color=#BF0080]In line find[/b][/color] [i][size=85]This is a partial match of a line for in-line operations[/size][/i]',
			'BBCODE21_INAFTER'			=> '[b][color=#BF0080]In line add after[/b][/color]',
			'BBCODE21_INBEFORE'		 => '[b][color=#BF0080]In line add before[/b][/color]',
			'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]In line replace with[/b][/color]',

));
