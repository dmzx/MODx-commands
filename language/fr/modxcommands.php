<?php
/**
*
* MODx commands extension for the phpBB Forum Software package.
* French translation by discovery & Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 dmzx	<http://www.dmzx-web.net>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'MODX_FIND'				 	=> 'Trouver',
	'MODX_ADD_AFTER'			=> 'Ajouter après',
	'MODX_ADD_BEFORE'			=> 'Ajouter avant',
	'MODX_REPLACE_WITH'		 	=> 'Remplacer par',
	'MODX_DELETE'				=> 'Supprimer',
	'MODX_IN_LINE_FIND'		 	=> 'Dans la ligne trouver',
	'MODX_IN_LINE_ADD_AFTER'	=> 'Dans la ligne ajouter après',
	'MODX_IN_LINE_ADD_BEFORE'	=> 'Dans la ligne ajouter avant',
	'MODX_IN_LINE_REPLACE_WITH' => 'Dans la ligne remplacer par',
	'MODX_CMD'					=> 'Commandes MODX',
	'BBCODE21_FIND'			 	=> '[b]Trouver[/b] : [i][size=85]peut correspondre à un résultat partiel dans une ligne de code ou à une ligne de code entière.[/size][/i]',
	'BBCODE21_AFTER'			=> '[b][color=#008000]Ajouter après[/color][/b] : [i][size=85]ajouter ce code sur une nouvelle ligne, située après les lignes de code précédemment trouvées.[/size][/i]',
	'BBCODE21_BEFORE'			=> '[b][color=#BF0080]Ajouter avant[/color][/b] : [i][size=85]ajouter ce code sur une nouvelle ligne, située avant les lignes de code précédemment trouvées.[/size][/i]',
	'BBCODE21_REPLACE'			=> '[b][color=#BF0000]Remplacer par[/b][/color] : [i][size=85]remplacer les lignes de code précédemment trouvées par celles ci-dessous.[/size][/i]',
	'BBCODE21_DELETE'			=> '[b][color=#FF0000]Supprimer[/b][/color] : [i][size=85]supprimer les lignes de code ci-dessous.[/size][/i]',
	'BBCODE21_INFIND'			=> '[b][color=#BF0080]Dans la ligne trouver[/b][/color] : [i][size=85]correspond à un résultat partiel d’une ligne de code dans laquelle des actions sont à effectuer.[/size][/i]',
	'BBCODE21_INAFTER'			=> '[b][color=#BF0080]Dans la ligne ajouter après[/b][/color]',
	'BBCODE21_INBEFORE'		 	=> '[b][color=#BF0080]Dans la ligne ajouter avant[/b][/color]',
	'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]Dans la ligne remplacer par[/b][/color]',
));
