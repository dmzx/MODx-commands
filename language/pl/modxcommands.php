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
	'MODX_FIND'				 => 'Znajdź',
	'MODX_ADD_AFTER'			=> 'Dodaj po',
	'MODX_ADD_BEFORE'			=> 'Dodaj przed',
	'MODX_REPLACE_WITH'		 => 'Zamień z',
	'MODX_DELETE'				=> 'Usuń',
	'MODX_IN_LINE_FIND'		 => 'Znajdź w linii',
	'MODX_IN_LINE_ADD_AFTER'	=> 'Dodaj po w linii',
	'MODX_IN_LINE_ADD_BEFORE'	=> 'Dodaje przed w linii',
	'MODX_IN_LINE_REPLACE_WITH' => 'Zamień z w linii',
	'MODX_CMD'					=> 'Komendy MODx',
	'BBCODE21_FIND'			 => '[b]Znajdź[/b] [i][size=85]Może to być cała linia lub jej część.[/size][/i]',
	'BBCODE21_AFTER'			=> '[b][color=#008000]Dodaj po[/color][/b] [i][size=85]Dodaj tekst w nowej linii po tej, którą wcześniej znalazłeś.[/size][/i]',
	'BBCODE21_BEFORE'			=> '[b][color=#BF0080]Dodaj przed[/color][/b] [i][size=85]Dodaj tekst w nowej linii przed tą, którą wcześniej znalazłeś.[/size][/i]',
	'BBCODE21_REPLACE'			=> '[b][color=#BF0000]Zamień z[/b][/color] [i][size=85]Zamień całą linię, którą wcześniej znalazłeś.[/size][/i]',
	'BBCODE21_DELETE'			=> '[b][color=#FF0000]Usuń[/b][/color] [i][size=85]Usuń wskazane linie lub jej część.[/size][/i]',
	'BBCODE21_INFIND'			=> '[b][color=#BF0080]Znajdź w linii[/b][/color] [i][size=85]Jest to część linii.[/size][/i]',
	'BBCODE21_INAFTER'			=> '[b][color=#BF0080]Dodaj po w linii[/b][/color] [i][size=85]Dodaj tekst w tej samej linii po fragmencie, który wcześniej znalazłeś.[/size][/i]',
	'BBCODE21_INBEFORE'		 => '[b][color=#BF0080]Dodaje przed w linii[/b][/color] [i][size=85]Dodaj tekst w tej samej linii przed fragmentem, który wcześniej znalazłeś.[/size][/i]',
	'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]Zamień z w linii[/b][/color] [i][size=85]Zamień fragment linii, którą wcześniej znalazłeś.[/size][/i]',
));
