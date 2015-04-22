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
			'MODX_FIND'				 => 'Trouver',
			'MODX_ADD_AFTER'			=> 'Ajouter après',
			'MODX_ADD_BEFORE'			=> 'Ajouter avant',
			'MODX_REPLACE_WITH'		 => 'Remplacer par',
			'MODX_DELETE'				=> 'Supprimer',
			'MODX_IN_LINE_FIND'		 => 'Dans la ligne trouver',
			'MODX_IN_LINE_ADD_AFTER'	=> 'Dans la ligne ajouter après',
			'MODX_IN_LINE_ADD_BEFORE'	=> 'Dans la ligne ajouter avant',
			'MODX_IN_LINE_REPLACE_WITH' => 'Dans la ligne remplacer par',
			'MODX_CMD'					=> 'MODx command',
			'BBCODE21_FIND'			 => '[b]Trouver[/b] [i][size=85]ceci peut ne correspondre qu’à un résultat partiel et non à la ligne entière.[/size][/i]',
			'BBCODE21_AFTER'			=> '[b][color=#008000]Ajouter après[/color][/b] [i][size=85]ajoutez ces/cette ligne(s) sur une nouvelle ligne vierge et après les lignes que vous aviez à trouver précédemment.[/size][/i]',
			'BBCODE21_BEFORE'			=> '[b][color=#BF0080]Ajouter avant[/color][/b] [i][size=85]ajoutez ces/cette ligne(s) sur une nouvelle ligne vierge et avant les lignes que vous aviez à trouver précédemment.[/size][/i]',
			'BBCODE21_REPLACE'			=> '[b][color=#BF0000]Remplacer par[/b][/color] [i][size=85]remplacez les lignes que vous aviez à trouver précédemment par les lignes suivantes.[/size][/i]',
			'BBCODE21_DELETE'			=> '[b][color=#FF0000]Supprimer[/b][/color] [i][size=85]Supprimez les lignes qui précédent.[/size][/i]',
			'BBCODE21_INFIND'			=> '[b][color=#BF0080]Dans la ligne trouver[/b][/color] [i][size=85]ceci correspond à un résultat partiel de la ligne dans laquelle il faut effectuer les opérations.[/size][/i]',
			'BBCODE21_INAFTER'			=> '[b][color=#BF0080]Dans la ligne ajouter après[/b][/color]',
			'BBCODE21_INBEFORE'		 => '[b][color=#BF0080]Dans la ligne ajouter avant[/b][/color]',
			'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]Dans la ligne remplacer par[/b][/color]',

));
