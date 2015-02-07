<?php
/**
*
* @package MODX commands
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
//'Page %s of %s' you can (and should) write'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g.'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g.,'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
'MODX_FIND'=>'Pronađi',
'MODX_ADD_AFTER'=>'Dodaj iza',
'MODX_ADD_BEFORE'=>'Dodaj ispred',
'MODX_REPLACE_WITH'=>'Zamijeni sa',
'MODX_DELETE'=>'Izbriši',
'MODX_IN_LINE_FIND'=>'Pronađi u retku',
'MODX_IN_LINE_ADD_AFTER'=>'U retku dodaj iza',
'MODX_IN_LINE_ADD_BEFORE'=>'U retku dodaj ispred',
'MODX_IN_LINE_REPLACE_WITH'=>'U retku zamijeni sa',
'MODX_CMD'=>'MODx naredba',
'BBCODE21_FIND'=>'[b]Pronađi[/b] [i][size=85]Moguće je da ćeš pronaći samo dio koda, ne cijeli/e redak/tke.[/size][/i]',
'BBCODE21_AFTER'=>'[b][color=#008000]Dodaj iza[/color][/b] [i][size=85]Dodaj ovaj/e redak/tke, iza pronađenog, u novi prazan redak.[/size][/i]',
'BBCODE21_BEFORE'=>'[b][color=#BF0080]Dodaj ispred[/color][/b] [i][size=85]Dodaj ovaj/e redak/tke, ispred pronađenog, u novi prazan redak.[/size][/i]',
'BBCODE21_REPLACE'=>'[b][color=#BF0000]Zamijeni sa[/b][/color] [i][size=85]Pronađeno zamijeni sa donjim retkom/dcima.[/size][/i]',
'BBCODE21_DELETE'=>'[b][color=#FF0000]Izbriši[/b][/color] [i][size=85]Izbriši pronađeno.[/size][/i]',
'BBCODE21_INFIND'=>'[b][color=#BF0080]Pronađi u retku[/b][/color] [i][size=85]U retku tražiš (samo) dio koda poradi čega je moguće (samo) parcijalno pronalaženje.[/size][/i]',
'BBCODE21_INAFTER'=>'[b][color=#BF0080]U retku dodaj iza[/b][/color]',
'BBCODE21_INBEFORE'=>'[b][color=#BF0080]U retku dodaj ispred[/b][/color]',
'BBCODE21_INREPLACE'=>'[b][color=#BF0080]U retku zamijeni sa[/b][/color]',

));
