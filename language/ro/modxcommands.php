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
		   'MODX_FIND'				 => 'Caută',
		   'MODX_ADD_AFTER'			=> 'Adaugă după',
		   'MODX_ADD_BEFORE'		   => 'Adaugă înainte',
		   'MODX_REPLACE_WITH'		 => 'Înlocuieşte cu',
		   'MODX_DELETE'			   => 'Şterge',
		   'MODX_IN_LINE_FIND'		 => 'În linie caută',
		   'MODX_IN_LINE_ADD_AFTER'	=> 'În linie adaugă după',
		   'MODX_IN_LINE_ADD_BEFORE'   => 'În linie adaugă înainte',
		   'MODX_IN_LINE_REPLACE_WITH' => 'În linie înlocuieşte cu',
		   'MODX_CMD'				  => 'Comenzi MODx ',
		   'BBCODE21_FIND'			 => '[b]Caută[/b] [i][size=85]Poate fi doar o parte a unei linii intregi.[/size][/i]',
		   'BBCODE21_AFTER'			=> '[b][color=#008000]Adaugă după[/color][/b] [i][size=85]Lipiti intr-o linie noua[/size][/i]',
		   'BBCODE21_BEFORE'		   => '[b][color=#BF0080]Adaugă înainte[/color][/b] [i][size=85]Lipiti intr-o linie noua.[/size][/i]',
		   'BBCODE21_REPLACE'		  => '[b][color=#BF0000]Înlocuieşte cu[/b][/color] [i][size=85]RInlocuieste codul[/size][/i]',
		   'BBCODE21_DELETE'		   => '[b][color=#FF0000]Şterge[/b][/color] [i][size=85]Sterge urmatoarea linie[/size][/i]',
		   'BBCODE21_INFIND'		   => '[b][color=#BF0080]În linie caută[/b][/color] [i][size=85]Poate fi o parte a unei linii intregi[/size][/i]',
		   'BBCODE21_INAFTER'		  => '[b][color=#BF0080]În linie adaugă după[/b][/color]',
		   'BBCODE21_INBEFORE'		 => '[b][color=#BF0080]În linie adaugă înainte[/b][/color]',
		   'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]În linie înlocuieşte cu[/b][/color]',

));
