<?php

########################################################################
# Extension Manager/Repository config file for ext: "rtehtmlarea"
#
# Auto generated 15-05-2008 15:08
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'htmlArea RTE',
	'description' => 'Rich Text Editor based on the open source htmlArea editor.',
	'category' => 'be',
	'shy' => 0,
	'dependencies' => 'cms',
	'conflicts' => 'rte_conf',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod2,mod3,mod4,mod5,mod6',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '1.8.1',
	'_md5_values_when_last_written' => 'a:412:{s:9:"ChangeLog";s:4:"4c8d";s:29:"class.tx_rtehtmlarea_base.php";s:4:"cbac";s:27:"class.tx_rtehtmlareaapi.php";s:4:"f273";s:21:"ext_conf_template.txt";s:4:"36fe";s:12:"ext_icon.gif";s:4:"2f41";s:17:"ext_localconf.php";s:4:"6998";s:14:"ext_tables.php";s:4:"4f9c";s:14:"ext_tables.sql";s:4:"2d74";s:13:"locallang.xml";s:4:"3cca";s:16:"locallang_db.xml";s:4:"a2a2";s:7:"tca.php";s:4:"3756";s:32:"pi2/class.tx_rtehtmlarea_pi2.php";s:4:"7ea3";s:17:"pi2/locallang.xml";s:4:"a0a7";s:34:"mod5/class.tx_rtehtmlarea_user.php";s:4:"f87b";s:14:"mod5/clear.gif";s:4:"cc11";s:13:"mod5/conf.php";s:4:"b639";s:18:"mod5/locallang.xml";s:4:"7a78";s:13:"mod5/user.php";s:4:"c45a";s:67:"extensions/TYPO3HtmlParser/class.tx_rtehtmlarea_typo3htmlparser.php";s:4:"7aab";s:59:"extensions/AboutEditor/class.tx_rtehtmlarea_abouteditor.php";s:4:"ec48";s:40:"extensions/AboutEditor/skin/htmlarea.css";s:4:"eb62";s:44:"extensions/AboutEditor/skin/images/about.gif";s:4:"1690";s:61:"extensions/UserElements/class.tx_rtehtmlarea_userelements.php";s:4:"82ed";s:41:"extensions/UserElements/skin/htmlarea.css";s:4:"d015";s:44:"extensions/UserElements/skin/images/user.gif";s:4:"bbb4";s:61:"extensions/DefaultColor/class.tx_rtehtmlarea_defaultcolor.php";s:4:"b4ef";s:37:"extensions/DefaultColor/locallang.xml";s:4:"3fb4";s:41:"extensions/DefaultColor/skin/htmlarea.css";s:4:"4759";s:49:"extensions/DefaultColor/skin/images/forecolor.gif";s:4:"dbc8";s:51:"extensions/DefaultColor/skin/images/hilitecolor.gif";s:4:"d97c";s:63:"extensions/DefaultInline/class.tx_rtehtmlarea_defaultinline.php";s:4:"f271";s:38:"extensions/DefaultInline/locallang.xml";s:4:"e592";s:42:"extensions/DefaultInline/skin/htmlarea.css";s:4:"5b38";s:45:"extensions/DefaultInline/skin/images/bold.gif";s:4:"94f2";s:47:"extensions/DefaultInline/skin/images/italic.gif";s:4:"f60c";s:54:"extensions/DefaultInline/skin/images/strikethrough.gif";s:4:"3fd0";s:50:"extensions/DefaultInline/skin/images/subscript.gif";s:4:"cedd";s:52:"extensions/DefaultInline/skin/images/superscript.gif";s:4:"8aea";s:50:"extensions/DefaultInline/skin/images/underline.gif";s:4:"81e6";s:57:"extensions/BlockStyle/class.tx_rtehtmlarea_blockstyle.php";s:4:"a516";s:35:"extensions/BlockStyle/locallang.xml";s:4:"26b8";s:51:"extensions/Acronym/class.tx_rtehtmlarea_acronym.php";s:4:"4486";s:36:"extensions/Acronym/skin/htmlarea.css";s:4:"6cf9";s:42:"extensions/Acronym/skin/images/acronym.gif";s:4:"1eaa";s:63:"extensions/BlockElements/class.tx_rtehtmlarea_blockelements.php";s:4:"4714";s:38:"extensions/BlockElements/locallang.xml";s:4:"8a29";s:42:"extensions/BlockElements/skin/htmlarea.css";s:4:"83ce";s:51:"extensions/BlockElements/skin/images/blockquote.gif";s:4:"34dc";s:47:"extensions/BlockElements/skin/images/indent.gif";s:4:"57df";s:58:"extensions/BlockElements/skin/images/insertOrderedList.gif";s:4:"eb1c";s:61:"extensions/BlockElements/skin/images/insertParagraphAfter.gif";s:4:"e335";s:62:"extensions/BlockElements/skin/images/insertParagraphBefore.gif";s:4:"9c42";s:60:"extensions/BlockElements/skin/images/insertUnorderedList.gif";s:4:"5620";s:54:"extensions/BlockElements/skin/images/justifyCenter.gif";s:4:"420d";s:52:"extensions/BlockElements/skin/images/justifyFull.gif";s:4:"b129";s:52:"extensions/BlockElements/skin/images/justifyLeft.gif";s:4:"3799";s:53:"extensions/BlockElements/skin/images/justifyRight.gif";s:4:"0662";s:48:"extensions/BlockElements/skin/images/outdent.gif";s:4:"4786";s:57:"extensions/TYPO3Image/class.tx_rtehtmlarea_typo3image.php";s:4:"711d";s:39:"extensions/TYPO3Image/skin/htmlarea.css";s:4:"fa33";s:43:"extensions/TYPO3Image/skin/images/image.gif";s:4:"c0f0";s:61:"extensions/DefaultImage/class.tx_rtehtmlarea_defaultimage.php";s:4:"32d8";s:41:"extensions/DefaultImage/skin/htmlarea.css";s:4:"eb4c";s:45:"extensions/DefaultImage/skin/images/image.gif";s:4:"c0f0";s:55:"extensions/TextStyle/class.tx_rtehtmlarea_textstyle.php";s:4:"cc5d";s:34:"extensions/TextStyle/locallang.xml";s:4:"23dd";s:53:"extensions/Language/class.tx_rtehtmlarea_language.php";s:4:"7325";s:37:"extensions/Language/skin/htmlarea.css";s:4:"f6b2";s:49:"extensions/Language/skin/images/left_to_right.gif";s:4:"1a1f";s:49:"extensions/Language/skin/images/right_to_left.gif";s:4:"2a38";s:59:"extensions/DefaultLink/class.tx_rtehtmlarea_defaultlink.php";s:4:"1c36";s:40:"extensions/DefaultLink/skin/htmlarea.css";s:4:"883b";s:43:"extensions/DefaultLink/skin/images/link.gif";s:4:"db9a";s:45:"extensions/DefaultLink/skin/images/unlink.gif";s:4:"86c4";s:59:"extensions/DefaultFont/class.tx_rtehtmlarea_defaultfont.php";s:4:"a695";s:36:"extensions/DefaultFont/locallang.xml";s:4:"8c90";s:67:"extensions/TableOperations/class.tx_rtehtmlarea_tableoperations.php";s:4:"f060";s:44:"extensions/TableOperations/skin/htmlarea.css";s:4:"7022";s:54:"extensions/TableOperations/skin/images/cell-delete.gif";s:4:"f371";s:60:"extensions/TableOperations/skin/images/cell-insert-after.gif";s:4:"2dd2";s:61:"extensions/TableOperations/skin/images/cell-insert-before.gif";s:4:"5d13";s:53:"extensions/TableOperations/skin/images/cell-merge.gif";s:4:"cb52";s:52:"extensions/TableOperations/skin/images/cell-prop.gif";s:4:"ca41";s:53:"extensions/TableOperations/skin/images/cell-split.gif";s:4:"0095";s:53:"extensions/TableOperations/skin/images/col-delete.gif";s:4:"da78";s:59:"extensions/TableOperations/skin/images/col-insert-after.gif";s:4:"80d8";s:60:"extensions/TableOperations/skin/images/col-insert-before.gif";s:4:"d47d";s:51:"extensions/TableOperations/skin/images/col-prop.gif";s:4:"b178";s:52:"extensions/TableOperations/skin/images/col-split.gif";s:4:"c168";s:55:"extensions/TableOperations/skin/images/insert_table.gif";s:4:"c01b";s:53:"extensions/TableOperations/skin/images/row-delete.gif";s:4:"a289";s:59:"extensions/TableOperations/skin/images/row-insert-above.gif";s:4:"1ef1";s:59:"extensions/TableOperations/skin/images/row-insert-under.gif";s:4:"9ad6";s:51:"extensions/TableOperations/skin/images/row-prop.gif";s:4:"5344";s:52:"extensions/TableOperations/skin/images/row-split.gif";s:4:"ebfd";s:53:"extensions/TableOperations/skin/images/table-prop.gif";s:4:"0a5c";s:56:"extensions/TableOperations/skin/images/table-restyle.gif";s:4:"9284";s:57:"extensions/TableOperations/skin/images/toggle-borders.gif";s:4:"50cb";s:59:"extensions/FindReplace/class.tx_rtehtmlarea_findreplace.php";s:4:"8d67";s:40:"extensions/FindReplace/skin/htmlarea.css";s:4:"43cc";s:43:"extensions/FindReplace/skin/images/find.gif";s:4:"827f";s:61:"extensions/SpellChecker/class.tx_rtehtmlarea_spellchecker.php";s:4:"981c";s:41:"extensions/SpellChecker/skin/htmlarea.css";s:4:"cedf";s:51:"extensions/SpellChecker/skin/images/spell-check.gif";s:4:"6e0a";s:61:"extensions/RemoveFormat/class.tx_rtehtmlarea_removeformat.php";s:4:"497d";s:41:"extensions/RemoveFormat/skin/htmlarea.css";s:4:"be33";s:45:"extensions/RemoveFormat/skin/images/clean.gif";s:4:"2a0f";s:53:"extensions/QuickTag/class.tx_rtehtmlarea_quicktag.php";s:4:"b5f7";s:37:"extensions/QuickTag/skin/htmlarea.css";s:4:"fc28";s:45:"extensions/QuickTag/skin/images/inserttag.gif";s:4:"a463";s:57:"extensions/DynamicCSS/class.tx_rtehtmlarea_dynamiccss.php";s:4:"6226";s:35:"extensions/DynamicCSS/locallang.xml";s:4:"26b8";s:55:"extensions/InlineCSS/class.tx_rtehtmlarea_inlinecss.php";s:4:"710a";s:34:"extensions/InlineCSS/locallang.xml";s:4:"82ed";s:61:"extensions/CharacterMap/class.tx_rtehtmlarea_charactermap.php";s:4:"d2a0";s:41:"extensions/CharacterMap/skin/htmlarea.css";s:4:"04d1";s:55:"extensions/CharacterMap/skin/images/insertCharacter.gif";s:4:"af19";s:61:"extensions/DefaultClean/class.tx_rtehtmlarea_defaultclean.php";s:4:"59a6";s:61:"extensions/InsertSmiley/class.tx_rtehtmlarea_insertsmiley.php";s:4:"5ad3";s:41:"extensions/InsertSmiley/skin/htmlarea.css";s:4:"fb52";s:46:"extensions/InsertSmiley/skin/images/smiley.gif";s:4:"c331";s:57:"extensions/TYPO3Color/class.tx_rtehtmlarea_typo3color.php";s:4:"7125";s:35:"extensions/TYPO3Color/locallang.xml";s:4:"377f";s:39:"extensions/TYPO3Color/skin/htmlarea.css";s:4:"fec1";s:47:"extensions/TYPO3Color/skin/images/forecolor.gif";s:4:"dbc8";s:49:"extensions/TYPO3Color/skin/images/hilitecolor.gif";s:4:"d97c";s:65:"extensions/InlineElements/class.tx_rtehtmlarea_inlineelements.php";s:4:"1d9e";s:39:"extensions/InlineElements/locallang.xml";s:4:"07c6";s:46:"extensions/InlineElements/res/pageTSConfig.txt";s:4:"d909";s:43:"extensions/InlineElements/skin/htmlarea.css";s:4:"978b";s:54:"extensions/InlineElements/skin/images/bidioverride.gif";s:4:"f38b";s:45:"extensions/InlineElements/skin/images/big.gif";s:4:"779b";s:46:"extensions/InlineElements/skin/images/bold.gif";s:4:"06ac";s:50:"extensions/InlineElements/skin/images/citation.gif";s:4:"b6eb";s:46:"extensions/InlineElements/skin/images/code.gif";s:4:"6057";s:52:"extensions/InlineElements/skin/images/definition.gif";s:4:"692d";s:53:"extensions/InlineElements/skin/images/deletedtext.gif";s:4:"4eec";s:50:"extensions/InlineElements/skin/images/emphasis.gif";s:4:"04c9";s:54:"extensions/InlineElements/skin/images/insertedtext.gif";s:4:"a624";s:48:"extensions/InlineElements/skin/images/italic.gif";s:4:"be83";s:50:"extensions/InlineElements/skin/images/keyboard.gif";s:4:"53ac";s:52:"extensions/InlineElements/skin/images/monospaced.gif";s:4:"78c0";s:51:"extensions/InlineElements/skin/images/quotation.gif";s:4:"7c62";s:48:"extensions/InlineElements/skin/images/sample.gif";s:4:"667c";s:47:"extensions/InlineElements/skin/images/small.gif";s:4:"e013";s:46:"extensions/InlineElements/skin/images/span.gif";s:4:"0dfa";s:55:"extensions/InlineElements/skin/images/strikethrough.gif";s:4:"73b1";s:48:"extensions/InlineElements/skin/images/strong.gif";s:4:"7f50";s:51:"extensions/InlineElements/skin/images/subscript.gif";s:4:"36c0";s:53:"extensions/InlineElements/skin/images/superscript.gif";s:4:"40c4";s:51:"extensions/InlineElements/skin/images/underline.gif";s:4:"dfac";s:50:"extensions/InlineElements/skin/images/variable.gif";s:4:"da61";s:55:"extensions/TYPO3Link/class.tx_rtehtmlarea_typo3link.php";s:4:"c199";s:38:"extensions/TYPO3Link/skin/htmlarea.css";s:4:"2a46";s:41:"extensions/TYPO3Link/skin/images/link.gif";s:4:"db9a";s:43:"extensions/TYPO3Link/skin/images/unlink.gif";s:4:"86c4";s:32:"pi3/class.tx_rtehtmlarea_pi3.php";s:4:"c4ba";s:25:"res/demo/pageTSConfig.txt";s:4:"ff8d";s:25:"res/demo/userTSConfig.txt";s:4:"2567";s:29:"res/advanced/pageTSConfig.txt";s:4:"7283";s:29:"res/advanced/userTSConfig.txt";s:4:"0aa6";s:36:"res/accessibilityicons/locallang.xml";s:4:"8211";s:39:"res/accessibilityicons/pageTSConfig.txt";s:4:"ddc3";s:39:"res/accessibilityicons/img/download.gif";s:4:"f6d9";s:44:"res/accessibilityicons/img/external_link.gif";s:4:"9e48";s:55:"res/accessibilityicons/img/external_link_new_window.gif";s:4:"6e8d";s:44:"res/accessibilityicons/img/internal_link.gif";s:4:"12b9";s:55:"res/accessibilityicons/img/internal_link_new_window.gif";s:4:"402a";s:35:"res/accessibilityicons/img/mail.gif";s:4:"d5a2";s:26:"res/image/pageTSConfig.txt";s:4:"d0d7";s:26:"res/contentcss/default.css";s:4:"c7b2";s:28:"res/contentcss/locallang.xml";s:4:"ec0e";s:39:"res/contentcss/img/red_arrow_bullet.gif";s:4:"82d6";s:25:"res/proc/pageTSConfig.txt";s:4:"757d";s:32:"res/indentalign/pageTSConfig.txt";s:4:"14d5";s:28:"res/typical/pageTSConfig.txt";s:4:"89ea";s:28:"res/typical/userTSConfig.txt";s:4:"64dc";s:29:"static/clickenlarge/setup.txt";s:4:"5681";s:14:"doc/manual.sxw";s:4:"28e2";s:16:"mod2/acronym.php";s:4:"7e21";s:41:"mod2/class.tx_rtehtmlarea_acronym_mod.php";s:4:"1e3f";s:14:"mod2/clear.gif";s:4:"cc11";s:13:"mod2/conf.php";s:4:"f442";s:18:"mod2/locallang.xml";s:4:"7dee";s:21:"mod3/browse_links.php";s:4:"7d2e";s:42:"mod3/class.tx_rtehtmlarea_browse_links.php";s:4:"4bc6";s:46:"mod3/class.tx_rtehtmlarea_dam_browse_links.php";s:4:"2ff9";s:14:"mod3/clear.gif";s:4:"cc11";s:13:"mod3/conf.php";s:4:"2f07";s:18:"mod3/locallang.xml";s:4:"040a";s:32:"pi1/class.tx_rtehtmlarea_pi1.php";s:4:"e8a5";s:17:"pi1/locallang.xml";s:4:"2e58";s:46:"mod4/class.tx_rtehtmlarea_dam_browse_media.php";s:4:"a68c";s:42:"mod4/class.tx_rtehtmlarea_select_image.php";s:4:"03ac";s:14:"mod4/clear.gif";s:4:"cc11";s:13:"mod4/conf.php";s:4:"0c60";s:18:"mod4/locallang.xml";s:4:"8995";s:21:"mod4/select_image.php";s:4:"a41f";s:29:"htmlarea/HTMLAREA_LICENSE.txt";s:4:"a10f";s:26:"htmlarea/htmlarea-gecko.js";s:4:"ddb2";s:23:"htmlarea/htmlarea-ie.js";s:4:"5d33";s:20:"htmlarea/htmlarea.js";s:4:"bf7c";s:30:"htmlarea/locallang_dialogs.xml";s:4:"eba4";s:26:"htmlarea/locallang_msg.xml";s:4:"7b6f";s:31:"htmlarea/locallang_tooltips.xml";s:4:"8b17";s:46:"htmlarea/plugins/TYPO3HtmlParser/locallang.xml";s:4:"8010";s:52:"htmlarea/plugins/TYPO3HtmlParser/typo3html-parser.js";s:4:"d035";s:44:"htmlarea/plugins/AboutEditor/about-editor.js";s:4:"aeb6";s:42:"htmlarea/plugins/AboutEditor/locallang.xml";s:4:"6dab";s:46:"htmlarea/plugins/AboutEditor/popups/about.html";s:4:"1710";s:43:"htmlarea/plugins/UserElements/locallang.xml";s:4:"33f9";s:46:"htmlarea/plugins/UserElements/user-elements.js";s:4:"91ca";s:46:"htmlarea/plugins/DefaultColor/default-color.js";s:4:"8621";s:43:"htmlarea/plugins/DefaultColor/locallang.xml";s:4:"c8d1";s:54:"htmlarea/plugins/DefaultColor/popups/select_color.html";s:4:"6c3c";s:48:"htmlarea/plugins/DefaultInline/default-inline.js";s:4:"ee0d";s:44:"htmlarea/plugins/DefaultInline/locallang.xml";s:4:"7b16";s:42:"htmlarea/plugins/BlockStyle/block-style.js";s:4:"ecc3";s:41:"htmlarea/plugins/BlockStyle/locallang.xml";s:4:"32ed";s:35:"htmlarea/plugins/Acronym/acronym.js";s:4:"9895";s:38:"htmlarea/plugins/Acronym/locallang.xml";s:4:"fead";s:48:"htmlarea/plugins/BlockElements/block-elements.js";s:4:"7f4a";s:44:"htmlarea/plugins/BlockElements/locallang.xml";s:4:"2f2c";s:41:"htmlarea/plugins/TYPO3Image/locallang.xml";s:4:"ab27";s:41:"htmlarea/plugins/TYPO3Image/typo3image.js";s:4:"039e";s:46:"htmlarea/plugins/DefaultImage/default-image.js";s:4:"4f07";s:43:"htmlarea/plugins/DefaultImage/locallang.xml";s:4:"1fdd";s:54:"htmlarea/plugins/DefaultImage/popups/insert_image.html";s:4:"f740";s:40:"htmlarea/plugins/TextStyle/locallang.xml";s:4:"ff67";s:40:"htmlarea/plugins/TextStyle/text-style.js";s:4:"5ea4";s:44:"htmlarea/plugins/ContextMenu/context-menu.js";s:4:"25d1";s:42:"htmlarea/plugins/ContextMenu/locallang.xml";s:4:"3ead";s:37:"htmlarea/plugins/Language/language.js";s:4:"0e80";s:39:"htmlarea/plugins/Language/locallang.xml";s:4:"9ca8";s:42:"htmlarea/plugins/SelectColor/locallang.xml";s:4:"9f9e";s:44:"htmlarea/plugins/SelectColor/select-color.js";s:4:"9dc1";s:44:"htmlarea/plugins/DefaultLink/default-link.js";s:4:"09c2";s:42:"htmlarea/plugins/DefaultLink/locallang.xml";s:4:"e233";s:45:"htmlarea/plugins/DefaultLink/popups/link.html";s:4:"21eb";s:44:"htmlarea/plugins/DefaultFont/default-font.js";s:4:"af07";s:42:"htmlarea/plugins/DefaultFont/locallang.xml";s:4:"a7f8";s:46:"htmlarea/plugins/TableOperations/locallang.xml";s:4:"e7ed";s:52:"htmlarea/plugins/TableOperations/table-operations.js";s:4:"a80f";s:57:"htmlarea/plugins/TableOperations/popups/insert_table.html";s:4:"9c35";s:44:"htmlarea/plugins/FindReplace/find-replace.js";s:4:"b5d9";s:41:"htmlarea/plugins/FindReplace/fr_engine.js";s:4:"095f";s:42:"htmlarea/plugins/FindReplace/locallang.xml";s:4:"f836";s:53:"htmlarea/plugins/FindReplace/popups/find_replace.html";s:4:"67ef";s:43:"htmlarea/plugins/SpellChecker/locallang.xml";s:4:"20d8";s:51:"htmlarea/plugins/SpellChecker/spell-check-logic.php";s:4:"1e72";s:51:"htmlarea/plugins/SpellChecker/spell-check-style.css";s:4:"82bd";s:47:"htmlarea/plugins/SpellChecker/spell-check-ui.js";s:4:"c99a";s:46:"htmlarea/plugins/SpellChecker/spell-checker.js";s:4:"d333";s:67:"htmlarea/plugins/SpellChecker/popups/spell-check-ui-iso-8859-1.html";s:4:"9980";s:56:"htmlarea/plugins/SpellChecker/popups/spell-check-ui.html";s:4:"749c";s:43:"htmlarea/plugins/RemoveFormat/locallang.xml";s:4:"aa85";s:46:"htmlarea/plugins/RemoveFormat/remove-format.js";s:4:"9b65";s:54:"htmlarea/plugins/RemoveFormat/popups/removeformat.html";s:4:"21aa";s:39:"htmlarea/plugins/QuickTag/locallang.xml";s:4:"2f53";s:38:"htmlarea/plugins/QuickTag/quick-tag.js";s:4:"2529";s:36:"htmlarea/plugins/QuickTag/tag-lib.js";s:4:"ba71";s:46:"htmlarea/plugins/QuickTag/popups/quicktag.html";s:4:"34c7";s:42:"htmlarea/plugins/DynamicCSS/dynamiccss.css";s:4:"8ff0";s:41:"htmlarea/plugins/DynamicCSS/dynamiccss.js";s:4:"d468";s:41:"htmlarea/plugins/DynamicCSS/locallang.xml";s:4:"b6bf";s:52:"htmlarea/plugins/DynamicCSS/img/red_arrow_bullet.gif";s:4:"82d6";s:39:"htmlarea/plugins/InlineCSS/inlinecss.js";s:4:"15d9";s:40:"htmlarea/plugins/InlineCSS/locallang.xml";s:4:"ee4c";s:46:"htmlarea/plugins/CharacterMap/character-map.js";s:4:"e007";s:43:"htmlarea/plugins/CharacterMap/locallang.xml";s:4:"7211";s:58:"htmlarea/plugins/CharacterMap/popups/select_character.html";s:4:"d54c";s:46:"htmlarea/plugins/DefaultClean/default-clean.js";s:4:"fd33";s:43:"htmlarea/plugins/DefaultClean/locallang.xml";s:4:"9e62";s:46:"htmlarea/plugins/InsertSmiley/insert-smiley.js";s:4:"78fa";s:43:"htmlarea/plugins/InsertSmiley/locallang.xml";s:4:"ed64";s:46:"htmlarea/plugins/InsertSmiley/smileys/0001.gif";s:4:"4aff";s:46:"htmlarea/plugins/InsertSmiley/smileys/0002.gif";s:4:"02c4";s:46:"htmlarea/plugins/InsertSmiley/smileys/0003.gif";s:4:"834f";s:46:"htmlarea/plugins/InsertSmiley/smileys/0004.gif";s:4:"fb6a";s:46:"htmlarea/plugins/InsertSmiley/smileys/0005.gif";s:4:"2a48";s:46:"htmlarea/plugins/InsertSmiley/smileys/0006.gif";s:4:"f970";s:46:"htmlarea/plugins/InsertSmiley/smileys/0007.gif";s:4:"97ee";s:46:"htmlarea/plugins/InsertSmiley/smileys/0008.gif";s:4:"10a6";s:46:"htmlarea/plugins/InsertSmiley/smileys/0009.gif";s:4:"1907";s:46:"htmlarea/plugins/InsertSmiley/smileys/0010.gif";s:4:"9ee6";s:46:"htmlarea/plugins/InsertSmiley/smileys/0011.gif";s:4:"ae73";s:46:"htmlarea/plugins/InsertSmiley/smileys/0012.gif";s:4:"f058";s:46:"htmlarea/plugins/InsertSmiley/smileys/0013.gif";s:4:"3ed8";s:46:"htmlarea/plugins/InsertSmiley/smileys/0014.gif";s:4:"a948";s:46:"htmlarea/plugins/InsertSmiley/smileys/0015.gif";s:4:"218d";s:46:"htmlarea/plugins/InsertSmiley/smileys/0016.gif";s:4:"3539";s:46:"htmlarea/plugins/InsertSmiley/smileys/0017.gif";s:4:"ee2e";s:46:"htmlarea/plugins/InsertSmiley/smileys/0018.gif";s:4:"8c66";s:46:"htmlarea/plugins/InsertSmiley/smileys/0019.gif";s:4:"ac36";s:46:"htmlarea/plugins/InsertSmiley/smileys/0020.gif";s:4:"71ef";s:54:"htmlarea/plugins/InsertSmiley/popups/insertsmiley.html";s:4:"5814";s:41:"htmlarea/plugins/TYPO3Color/locallang.xml";s:4:"3d3c";s:41:"htmlarea/plugins/TYPO3Color/typo3color.js";s:4:"4bc0";s:50:"htmlarea/plugins/InlineElements/inline-elements.js";s:4:"e316";s:45:"htmlarea/plugins/InlineElements/locallang.xml";s:4:"6f8c";s:44:"htmlarea/plugins/TYPO3Browsers/locallang.xml";s:4:"89b8";s:47:"htmlarea/plugins/TYPO3Browsers/typo3browsers.js";s:4:"a724";s:47:"htmlarea/plugins/TYPO3Browsers/img/download.gif";s:4:"f6d9";s:52:"htmlarea/plugins/TYPO3Browsers/img/external_link.gif";s:4:"9e48";s:63:"htmlarea/plugins/TYPO3Browsers/img/external_link_new_window.gif";s:4:"6e8d";s:52:"htmlarea/plugins/TYPO3Browsers/img/internal_link.gif";s:4:"12b9";s:63:"htmlarea/plugins/TYPO3Browsers/img/internal_link_new_window.gif";s:4:"402a";s:43:"htmlarea/plugins/TYPO3Browsers/img/mail.gif";s:4:"d5a2";s:40:"htmlarea/plugins/TYPO3Link/locallang.xml";s:4:"c39b";s:39:"htmlarea/plugins/TYPO3Link/typo3link.js";s:4:"63d4";s:50:"htmlarea/skins/default/htmlarea-edited-content.css";s:4:"8f6d";s:35:"htmlarea/skins/default/htmlarea.css";s:4:"aef4";s:48:"htmlarea/skins/default/images/definitionItem.gif";s:4:"33ae";s:48:"htmlarea/skins/default/images/definitionList.gif";s:4:"d5d1";s:42:"htmlarea/skins/default/images/ed_about.gif";s:4:"2763";s:42:"htmlarea/skins/default/images/ed_blank.gif";s:4:"0208";s:45:"htmlarea/skins/default/images/ed_color_bg.gif";s:4:"c6e2";s:45:"htmlarea/skins/default/images/ed_color_fg.gif";s:4:"5d7f";s:41:"htmlarea/skins/default/images/ed_copy.gif";s:4:"4f55";s:43:"htmlarea/skins/default/images/ed_custom.gif";s:4:"e7b2";s:40:"htmlarea/skins/default/images/ed_cut.gif";s:4:"1b00";s:43:"htmlarea/skins/default/images/ed_delete.gif";s:4:"926b";s:41:"htmlarea/skins/default/images/ed_help.gif";s:4:"e7fc";s:39:"htmlarea/skins/default/images/ed_hr.gif";s:4:"f384";s:41:"htmlarea/skins/default/images/ed_html.gif";s:4:"fa6e";s:42:"htmlarea/skins/default/images/ed_image.gif";s:4:"c0f0";s:50:"htmlarea/skins/default/images/ed_left_to_right.gif";s:4:"1a1f";s:41:"htmlarea/skins/default/images/ed_link.gif";s:4:"db9a";s:48:"htmlarea/skins/default/images/ed_list_bullet.gif";s:4:"5620";s:45:"htmlarea/skins/default/images/ed_list_num.gif";s:4:"eb1c";s:42:"htmlarea/skins/default/images/ed_paste.gif";s:4:"fbd2";s:41:"htmlarea/skins/default/images/ed_redo.gif";s:4:"e9e8";s:50:"htmlarea/skins/default/images/ed_right_to_left.gif";s:4:"2a38";s:41:"htmlarea/skins/default/images/ed_save.gif";s:4:"07ad";s:47:"htmlarea/skins/default/images/ed_splitblock.gif";s:4:"503e";s:45:"htmlarea/skins/default/images/ed_splitcel.gif";s:4:"2c04";s:41:"htmlarea/skins/default/images/ed_undo.gif";s:4:"b9ba";s:43:"htmlarea/skins/default/images/ed_unlink.gif";s:4:"86c4";s:53:"htmlarea/skins/default/images/fullscreen_maximize.gif";s:4:"2118";s:53:"htmlarea/skins/default/images/fullscreen_minimize.gif";s:4:"91d6";s:46:"htmlarea/skins/default/images/insert_table.gif";s:4:"c01b";s:54:"htmlarea/skins/default/images/UserElements/ed_user.gif";s:4:"bbb4";s:59:"htmlarea/skins/default/images/TYPO3ViewHelp/module_help.gif";s:4:"a500";s:52:"htmlarea/skins/default/images/Acronym/ed_acronym.gif";s:4:"1eaa";s:58:"htmlarea/skins/default/images/BlockElements/blockquote.gif";s:4:"34dc";s:54:"htmlarea/skins/default/images/BlockElements/indent.gif";s:4:"57df";s:68:"htmlarea/skins/default/images/BlockElements/insertParagraphAfter.gif";s:4:"e335";s:69:"htmlarea/skins/default/images/BlockElements/insertParagraphBefore.gif";s:4:"9c42";s:61:"htmlarea/skins/default/images/BlockElements/justifyCenter.gif";s:4:"420d";s:59:"htmlarea/skins/default/images/BlockElements/justifyFull.gif";s:4:"b129";s:59:"htmlarea/skins/default/images/BlockElements/justifyLeft.gif";s:4:"3799";s:60:"htmlarea/skins/default/images/BlockElements/justifyRight.gif";s:4:"0662";s:55:"htmlarea/skins/default/images/BlockElements/outdent.gif";s:4:"4786";s:58:"htmlarea/skins/default/images/SelectColor/CO-forecolor.gif";s:4:"dbc8";s:60:"htmlarea/skins/default/images/SelectColor/CO-hilitecolor.gif";s:4:"d97c";s:61:"htmlarea/skins/default/images/TableOperations/cell-delete.gif";s:4:"f371";s:67:"htmlarea/skins/default/images/TableOperations/cell-insert-after.gif";s:4:"2dd2";s:68:"htmlarea/skins/default/images/TableOperations/cell-insert-before.gif";s:4:"5d13";s:60:"htmlarea/skins/default/images/TableOperations/cell-merge.gif";s:4:"a2d2";s:59:"htmlarea/skins/default/images/TableOperations/cell-prop.gif";s:4:"ca41";s:60:"htmlarea/skins/default/images/TableOperations/cell-split.gif";s:4:"d87c";s:60:"htmlarea/skins/default/images/TableOperations/col-delete.gif";s:4:"da78";s:66:"htmlarea/skins/default/images/TableOperations/col-insert-after.gif";s:4:"80d8";s:67:"htmlarea/skins/default/images/TableOperations/col-insert-before.gif";s:4:"d47d";s:58:"htmlarea/skins/default/images/TableOperations/col-prop.gif";s:4:"b178";s:59:"htmlarea/skins/default/images/TableOperations/col-split.gif";s:4:"eacc";s:62:"htmlarea/skins/default/images/TableOperations/insert_table.gif";s:4:"c1db";s:60:"htmlarea/skins/default/images/TableOperations/row-delete.gif";s:4:"a289";s:66:"htmlarea/skins/default/images/TableOperations/row-insert-above.gif";s:4:"1ef1";s:66:"htmlarea/skins/default/images/TableOperations/row-insert-after.gif";s:4:"5e98";s:66:"htmlarea/skins/default/images/TableOperations/row-insert-under.gif";s:4:"9ad6";s:58:"htmlarea/skins/default/images/TableOperations/row-prop.gif";s:4:"5344";s:59:"htmlarea/skins/default/images/TableOperations/row-split.gif";s:4:"a712";s:60:"htmlarea/skins/default/images/TableOperations/table-prop.gif";s:4:"0a5c";s:63:"htmlarea/skins/default/images/TableOperations/table-restyle.gif";s:4:"9284";s:64:"htmlarea/skins/default/images/TableOperations/toggle-borders.gif";s:4:"50cb";s:53:"htmlarea/skins/default/images/FindReplace/ed_find.gif";s:4:"827f";s:58:"htmlarea/skins/default/images/SpellChecker/spell-check.gif";s:4:"6e0a";s:55:"htmlarea/skins/default/images/RemoveFormat/ed_clean.gif";s:4:"2a0f";s:54:"htmlarea/skins/default/images/QuickTag/ed_quicktag.gif";s:4:"a463";s:57:"htmlarea/skins/default/images/CharacterMap/ed_charmap.gif";s:4:"af19";s:56:"htmlarea/skins/default/images/InsertSmiley/ed_smiley.gif";s:4:"c331";s:61:"htmlarea/skins/default/images/InlineElements/bidioverride.gif";s:4:"f38b";s:52:"htmlarea/skins/default/images/InlineElements/big.gif";s:4:"779b";s:53:"htmlarea/skins/default/images/InlineElements/bold.gif";s:4:"06ac";s:57:"htmlarea/skins/default/images/InlineElements/citation.gif";s:4:"b6eb";s:53:"htmlarea/skins/default/images/InlineElements/code.gif";s:4:"6057";s:59:"htmlarea/skins/default/images/InlineElements/definition.gif";s:4:"692d";s:60:"htmlarea/skins/default/images/InlineElements/deletedtext.gif";s:4:"4eec";s:57:"htmlarea/skins/default/images/InlineElements/emphasis.gif";s:4:"04c9";s:61:"htmlarea/skins/default/images/InlineElements/insertedtext.gif";s:4:"a624";s:55:"htmlarea/skins/default/images/InlineElements/italic.gif";s:4:"be83";s:57:"htmlarea/skins/default/images/InlineElements/keyboard.gif";s:4:"53ac";s:59:"htmlarea/skins/default/images/InlineElements/monospaced.gif";s:4:"78c0";s:58:"htmlarea/skins/default/images/InlineElements/quotation.gif";s:4:"7c62";s:55:"htmlarea/skins/default/images/InlineElements/sample.gif";s:4:"667c";s:54:"htmlarea/skins/default/images/InlineElements/small.gif";s:4:"e013";s:53:"htmlarea/skins/default/images/InlineElements/span.gif";s:4:"0dfa";s:62:"htmlarea/skins/default/images/InlineElements/strikethrough.gif";s:4:"73b1";s:55:"htmlarea/skins/default/images/InlineElements/strong.gif";s:4:"7f50";s:58:"htmlarea/skins/default/images/InlineElements/subscript.gif";s:4:"36c0";s:60:"htmlarea/skins/default/images/InlineElements/superscript.gif";s:4:"40c4";s:58:"htmlarea/skins/default/images/InlineElements/underline.gif";s:4:"dfac";s:57:"htmlarea/skins/default/images/InlineElements/variable.gif";s:4:"da61";s:56:"htmlarea/skins/default/images/TYPO3Browsers/ed_image.gif";s:4:"c0f0";s:55:"htmlarea/skins/default/images/TYPO3Browsers/ed_link.gif";s:4:"db9a";s:57:"htmlarea/skins/default/images/TYPO3Browsers/ed_unlink.gif";s:4:"86c4";s:26:"htmlarea/popups/blank.html";s:4:"e697";s:32:"htmlarea/popups/editor_help.html";s:4:"398a";s:40:"mod6/class.tx_rtehtmlarea_parse_html.php";s:4:"865a";s:13:"mod6/conf.php";s:4:"2b05";s:19:"mod6/parse_html.php";s:4:"8e0e";}',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'php' => '5.1-0.0.0',
			'typo3' => '4.3.0-4.3.99',
		),
		'conflicts' => array(
			'rte_conf' => '',
		),
		'suggests' => array(
			'rtehtmlarea_api_manual' => '',
		),
	),
	'suggests' => array(
		'rtehtmlarea_api_manual' => '',
	),
);

?>