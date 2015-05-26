<?php
/**
*
* @package MODX commands
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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
			'MODX_FIND'				 => 'ابحث عن',
			'MODX_ADD_AFTER'			=> 'أضف بعد',
			'MODX_ADD_BEFORE'			=> 'أضف قبل',
			'MODX_REPLACE_WITH'		 => 'استبدل بـ',
			'MODX_DELETE'				=> 'احذف',
			'MODX_IN_LINE_FIND'		 => 'ابحث بنفس السطر عن',
			'MODX_IN_LINE_ADD_AFTER'	=> 'بنفس السطر , أضف بعد',
			'MODX_IN_LINE_ADD_BEFORE'	=> 'بنفس السطر , أضف قبل',
			'MODX_IN_LINE_REPLACE_WITH' => 'بنفس السطر , استبدل بـ',
			'MODX_CMD'					=> 'أوامر الهاكات',
			'BBCODE21_FIND'			 => '[b]ابحث عن[/b] [i][size=85]قد يكون البحث جزئي وليس بحث عن السطر كله[/i]',
			'BBCODE21_AFTER'			=> '[b][color=#008000]أضف بعد[/color][/b] [i][size=85]أضف هذه السطور في سطر جديد بعد السطور المطلوب البحث عنها سابقاً[/size][/i]',
			'BBCODE21_BEFORE'			=> '[b][color=#BF0080]أضف قبل[/color][/b] [i][size=85]أضف هذه السطور في سطر جديد قبل السطور المطلوب البحث عنها سابقاً[/size][/i]',
			'BBCODE21_REPLACE'			=> '[b][color=#BF0000]استبدل بـ[/b][/color] [i][size=85]استبدل السطور أعلاه بالسطور التالية[/size][/i]',
			'BBCODE21_DELETE'			=> '[b][color=#FF0000]احذف[/b][/color] [i][size=85]احذف السطور السابقة[/size][/i]',
			'BBCODE21_INFIND'			=> '[b][color=#BF0080]ابحث بنفس السطر عن[/b][/color] [i][size=85]هذا بحث جزئي للسطر من عملية بحث عن سطر كامل[/size][/i]',
			'BBCODE21_INAFTER'			=> '[b][color=#BF0080]بنفس السطر , أضف بعد[/b][/color]',
			'BBCODE21_INBEFORE'		 => '[b][color=#BF0080]بنفس السطر , أضف قبل[/b][/color]',
			'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]بنفس السطر , استبدل بـ[/b][/color]',

));
