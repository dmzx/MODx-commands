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
	       'MODX_FIND'                 => 'Encontrar',
		   'MODX_ADD_AFTER'            => 'Añadir después',
		   'MODX_ADD_BEFORE'           => 'Añadir antes',
		   'MODX_REPLACE_WITH'         => 'Reemplazar por',
		   'MODX_DELETE'               => 'Borrar',
		   'MODX_IN_LINE_FIND'         => 'En la línea, encontrar',
		   'MODX_IN_LINE_ADD_AFTER'    => 'En la línea, añadir después',
		   'MODX_IN_LINE_ADD_BEFORE'   => 'En la línea, añadir antes',
		   'MODX_IN_LINE_REPLACE_WITH' => 'En la línea, reemplazar por',
           'MODX_CMD'                  => 'Comando MODx',
           'BBCODE21_FIND'             => '[b]Encontrar[/b] [i][size=85]Esto puede ser un búsqueda parcial y no toda la línea[/size][/i]',
           'BBCODE21_AFTER'            => '[b][color=#008000]Añadir después[/color][/b] [i][size=85]Añadir estas líneas en una nueva línea en blanco, después de la línea anteriormente encontrada[/size][/i]',
           'BBCODE21_BEFORE'           => '[b][color=#BF0080]Añadir antes[/color][/b] [i][size=85]Añadir estas líneas en una nueva línea en blanco, antes de la línea anteriormente encontrada[/size][/i]',
           'BBCODE21_REPLACE'          => '[b][color=#BF0000]Reemplazar por[/b][/color] [i][size=85]Reemplace las líneas anteriores con las siguientes[/size][/i]',
           'BBCODE21_DELETE'           => '[b][color=#FF0000]Borrar[/b][/color] [i][size=85]Elimine las líneas en cuestión[/size][/i]',
           'BBCODE21_INFIND'           => '[b][color=#BF0080]En la línea, encontrar[/b][/color] [i][size=85]Esta es una búsqueda parcial de una línea, para operaciones en dicha línea[/size][/i]',
           'BBCODE21_INAFTER'          => '[b][color=#BF0080]En la línea, añadir después[/b][/color]',
           'BBCODE21_INBEFORE'         => '[b][color=#BF0080]En la línea, añadir antes[/b][/color]',
           'BBCODE21_INREPLACE'        => '[b][color=#BF0080]En la línea, reemplazar por[/b][/color]',
	
));
