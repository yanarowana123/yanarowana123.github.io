-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 02 2015 г., 22:29
-- Версия сервера: 5.5.35-33.0-log
-- Версия PHP: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `host1366642_red`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(1) NOT NULL,
  `part` int(1) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `client_id` int(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `answer` text NOT NULL,
  `view` smallint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `date` int(10) NOT NULL DEFAULT '0',
  `yes` smallint(1) NOT NULL DEFAULT '0',
  `poll` smallint(1) NOT NULL DEFAULT '0',
  `poll_yes` smallint(1) NOT NULL DEFAULT '0',
  `poll_no` smallint(1) NOT NULL DEFAULT '0',
  `poll_count` smallint(1) NOT NULL DEFAULT '0',
  `comments` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `part`, `username`, `client_id`, `text`, `answer`, `view`, `ip`, `date`, `yes`, `poll`, `poll_yes`, `poll_no`, `poll_count`, `comments`) VALUES
(2, 0, 'admin', 0, 'епапапапапапапапапапапапа', '', 1, '31.128.180.140', 1403338312, 1, 0, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `answers_poll`
--

CREATE TABLE IF NOT EXISTS `answers_poll` (
  `id` int(1) NOT NULL,
  `user_id` int(1) NOT NULL DEFAULT '0',
  `date` int(10) NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `answer_id` int(1) NOT NULL DEFAULT '0',
  `poll` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `answers_poll`
--

INSERT INTO `answers_poll` (`id`, `user_id`, `date`, `ip`, `answer_id`, `poll`) VALUES
(1, 1, 1402869028, '31.128.180.140', 1, 2),
(2, 1, 1403338319, '31.128.180.140', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `antivirus`
--

CREATE TABLE IF NOT EXISTS `antivirus` (
  `id` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  `size` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=1361 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `antivirus`
--

INSERT INTO `antivirus` (`id`, `filename`, `time`, `size`) VALUES
(1, '/home/sistem/domains/sistem.hhos.ru/public_html/mix', 0, 0),
(2, 'login', 0, 0),
(3, 'login/index.php', 1402854736, 2254),
(4, 'login/login.php', 1402854736, 1245),
(5, 'login/login_ru.php', 1402854736, 1292),
(6, 'ReadMe.txt', 1402854644, 747),
(7, 'law', 0, 0),
(8, 'law/law.php', 1402854735, 27),
(9, 'law/index.php', 1402854735, 219),
(10, 'law/law_ru.php', 1402854735, 27),
(11, 'contacts', 0, 0),
(12, 'contacts/contacts_ru.php', 1402854697, 4295),
(13, 'contacts/index.php', 1402854698, 228),
(14, 'contacts/contacts.php', 1402854697, 4184),
(15, 'adminpanel', 0, 0),
(16, 'modules', 0, 0),
(17, 'adminpanel/modules/error.php', 1402854652, 172),
(18, 'adminpanel/modules/mailto.php', 1402854652, 3237),
(19, 'adminpanel/modules/news.php', 1402854652, 5136),
(20, 'adminpanel/modules/fake.php', 1402854652, 2918),
(21, 'adminpanel/modules/add_page.php', 1402854651, 6303),
(22, 'adminpanel/modules/serverip.php', 1402854652, 315),
(23, 'adminpanel/modules/referals.php', 1402854652, 1756),
(24, 'adminpanel/modules/admin_answers.php', 1402854651, 2822),
(25, 'adminpanel/modules/deposits.php', 1402854651, 9606),
(26, 'adminpanel/modules/edit.php', 1402854652, 10503),
(27, 'adminpanel/modules/users.php', 1402854653, 11427),
(28, 'adminpanel/modules/settings.php', 1402854653, 26082),
(29, 'adminpanel/modules/index.php', 1402854652, 5285),
(30, 'adminpanel/modules/edit_news.php', 1402854652, 5701),
(31, 'adminpanel/modules/edit_user.php', 1402854652, 14892),
(32, 'adminpanel/modules/edit_answers.php', 1402854652, 3402),
(33, 'adminpanel/modules/reftop.php', 1402854652, 1822),
(34, 'adminpanel/modules/paysystems.php', 1402854652, 5282),
(35, 'adminpanel/modules/pages.php', 1402854652, 4747),
(36, 'adminpanel/modules/logip.php', 1402854652, 3200),
(37, 'adminpanel/modules/phpinf.php', 1402854652, 133),
(38, 'adminpanel/modules/change_pass.php', 1402854651, 1940),
(39, 'adminpanel/modules/install.php', 1402854652, 3501),
(40, 'adminpanel/modules/ps_edit.php', 1402854652, 4190),
(41, 'adminpanel/modules/blacklist.php', 1402854651, 2428),
(42, 'adminpanel/modules/index.html', 1402854652, 143),
(43, 'adminpanel/modules/edit_content.php', 1402854652, 6051),
(44, 'adminpanel/modules/plan_edit.php', 1402854652, 9163),
(45, 'adminpanel/modules/plans.php', 1402854652, 10205),
(46, 'adminpanel/modules/rss.php', 1402854652, 1591),
(47, 'adminpanel/modules/antivirus.php', 1402854651, 7337),
(48, 'adminpanel/modules/serverinf.php', 1402854652, 1974),
(49, 'installs', 0, 0),
(50, 'adminpanel/installs/pclzip.lib.php', 1402854651, 107711),
(51, 'adminpanel/installs/index.html', 1402854651, 143),
(52, 'adminpanel/index.php', 1402854645, 3589),
(53, 'editor', 0, 0),
(54, 'adminpanel/editor/tiny_mce_prototype_src.js', 1402854647, 107318),
(55, 'adminpanel/editor/tiny_mce_jquery_src.js', 1402854646, 348232),
(56, 'adminpanel/editor/tiny_mce_src.js', 1402854647, 368262),
(57, 'classes', 0, 0),
(58, 'dom', 0, 0),
(59, 'adminpanel/editor/classes/dom/DOMUtils.js', 1402854656, 60084),
(60, 'adminpanel/editor/classes/dom/XMLWriter.js', 1402854657, 4267),
(61, 'adminpanel/editor/classes/dom/TreeWalker.js', 1402854657, 1662),
(62, 'adminpanel/editor/classes/dom/Serializer.js', 1402854657, 28085),
(63, 'adminpanel/editor/classes/dom/Range.js', 1402854656, 18050),
(64, 'adminpanel/editor/classes/dom/StringWriter.js', 1402854657, 4827),
(65, 'adminpanel/editor/classes/dom/TridentSelection.js', 1402854657, 10574),
(66, 'adminpanel/editor/classes/dom/Sizzle.js', 1402854657, 26684),
(67, 'adminpanel/editor/classes/dom/Element.js', 1402854656, 5395),
(68, 'adminpanel/editor/classes/dom/ScriptLoader.js', 1402854656, 7001),
(69, 'adminpanel/editor/classes/dom/Schema.js', 1402854656, 4823),
(70, 'adminpanel/editor/classes/dom/Selection.js', 1402854656, 20162),
(71, 'adminpanel/editor/classes/dom/RangeUtils.js', 1402854656, 7017),
(72, 'adminpanel/editor/classes/dom/EventUtils.js', 1402854656, 8311),
(73, 'adminpanel/editor/classes/Formatter.js', 1402854654, 46815),
(74, 'adminpanel/editor/classes/CommandManager.js', 1402854653, 1608),
(75, 'adminpanel/editor/classes/LegacyInput.js', 1402854653, 1497),
(76, 'adminpanel/editor/classes/Editor.js', 1402854653, 77792),
(77, 'xml', 0, 0),
(78, 'adminpanel/editor/classes/xml/Parser.js', 1402854659, 2953),
(79, 'adminpanel/editor/classes/Developer.js', 1402854653, 2579),
(80, 'adminpanel/editor/classes/WindowManager.js', 1402854654, 5457),
(81, 'adapter', 0, 0),
(82, 'prototype', 0, 0),
(83, 'adminpanel/editor/classes/adapter/prototype/adapter.js', 1402854671, 958),
(84, 'jquery', 0, 0),
(85, 'adminpanel/editor/classes/adapter/jquery/adapter.js', 1402854671, 8382),
(86, 'adminpanel/editor/classes/adapter/jquery/jquery.tinymce.js', 1402854671, 10243),
(87, 'util', 0, 0),
(88, 'adminpanel/editor/classes/util/JSONP.js', 1402854659, 702),
(89, 'adminpanel/editor/classes/util/Cookie.js', 1402854659, 3271),
(90, 'adminpanel/editor/classes/util/JSONRequest.js', 1402854659, 2390),
(91, 'adminpanel/editor/classes/util/URI.js', 1402854659, 7532),
(92, 'adminpanel/editor/classes/util/Dispatcher.js', 1402854659, 2837),
(93, 'adminpanel/editor/classes/util/JSON.js', 1402854659, 1871),
(94, 'adminpanel/editor/classes/util/XHR.js', 1402854659, 2090),
(95, 'adminpanel/editor/classes/UndoManager.js', 1402854654, 3951),
(96, 'adminpanel/editor/classes/ControlManager.js', 1402854653, 14313),
(97, 'adminpanel/editor/classes/EditorManager.js', 1402854653, 11987),
(98, 'adminpanel/editor/classes/EditorCommands.js', 1402854653, 12684),
(99, 'adminpanel/editor/classes/AddOnManager.js', 1402854653, 2783),
(100, 'ui', 0, 0),
(101, 'adminpanel/editor/classes/ui/MenuButton.js', 1402854658, 3550),
(102, 'adminpanel/editor/classes/ui/Button.js', 1402854657, 2203),
(103, 'adminpanel/editor/classes/ui/Menu.js', 1402854658, 4703),
(104, 'adminpanel/editor/classes/ui/SplitButton.js', 1402854659, 3480),
(105, 'adminpanel/editor/classes/ui/ListBox.js', 1402854658, 10218),
(106, 'adminpanel/editor/classes/ui/NativeListBox.js', 1402854659, 5617),
(107, 'adminpanel/editor/classes/ui/Container.js', 1402854658, 1728),
(108, 'adminpanel/editor/classes/ui/Separator.js', 1402854659, 1173),
(109, 'adminpanel/editor/classes/ui/Control.js', 1402854658, 5380),
(110, 'adminpanel/editor/classes/ui/MenuItem.js', 1402854658, 2017),
(111, 'adminpanel/editor/classes/ui/Toolbar.js', 1402854659, 2872),
(112, 'adminpanel/editor/classes/ui/DropMenu.js', 1402854658, 11140),
(113, 'adminpanel/editor/classes/ui/ColorSplitButton.js', 1402854658, 7052),
(114, 'firebug', 0, 0),
(115, 'adminpanel/editor/classes/firebug/firebug-lite.js', 1402854657, 107337),
(116, 'adminpanel/editor/classes/Popup.js', 1402854654, 13156),
(117, 'adminpanel/editor/classes/tinymce.js', 1402854654, 17161),
(118, 'adminpanel/editor/classes/ForceBlocks.js', 1402854653, 23075),
(119, 'plugins', 0, 0),
(120, 'noneditable', 0, 0),
(121, 'adminpanel/editor/plugins/noneditable/editor_plugin.js', 1402854665, 1364),
(122, 'adminpanel/editor/plugins/noneditable/editor_plugin_src.js', 1402854665, 2408),
(123, 'media', 0, 0),
(124, 'img', 0, 0),
(125, 'adminpanel/editor/plugins/media/img/quicktime.gif', 1402854679, 303),
(126, 'adminpanel/editor/plugins/media/img/trans.gif', 1402854680, 43),
(127, 'adminpanel/editor/plugins/media/img/windowsmedia.gif', 1402854680, 415),
(128, 'adminpanel/editor/plugins/media/img/flv_player.swf', 1402854680, 11668),
(129, 'adminpanel/editor/plugins/media/img/realmedia.gif', 1402854680, 439),
(130, 'adminpanel/editor/plugins/media/img/shockwave.gif', 1402854680, 387),
(131, 'adminpanel/editor/plugins/media/img/flash.gif', 1402854679, 241),
(132, 'js', 0, 0),
(133, 'adminpanel/editor/plugins/media/js/media.js', 1402854680, 19194),
(134, 'adminpanel/editor/plugins/media/js/embed.js', 1402854680, 2011),
(135, 'css', 0, 0),
(136, 'adminpanel/editor/plugins/media/css/media.css', 1402854679, 1287),
(137, 'adminpanel/editor/plugins/media/css/content.css', 1402854679, 536),
(138, 'adminpanel/editor/plugins/media/editor_plugin.js', 1402854665, 8146),
(139, 'adminpanel/editor/plugins/media/editor_plugin_src.js', 1402854665, 12532),
(140, 'adminpanel/editor/plugins/media/media.htm', 1402854665, 33484),
(141, 'langs', 0, 0),
(142, 'adminpanel/editor/plugins/media/langs/en_dlg.js', 1402854680, 2838),
(143, 'adminpanel/editor/plugins/media/langs/ru_dlg.js', 1402854680, 4378),
(144, 'legacyoutput', 0, 0),
(145, 'adminpanel/editor/plugins/legacyoutput/editor_plugin.js', 1402854665, 1777),
(146, 'adminpanel/editor/plugins/legacyoutput/editor_plugin_src.js', 1402854665, 4926),
(147, 'template', 0, 0),
(148, 'js', 0, 0),
(149, 'adminpanel/editor/plugins/template/js/template.js', 1402854685, 2884),
(150, 'adminpanel/editor/plugins/template/blank.htm', 1402854669, 344),
(151, 'css', 0, 0),
(152, 'adminpanel/editor/plugins/template/css/template.css', 1402854685, 298),
(153, 'adminpanel/editor/plugins/template/editor_plugin.js', 1402854669, 3302),
(154, 'adminpanel/editor/plugins/template/template.htm', 1402854669, 1472),
(155, 'adminpanel/editor/plugins/template/editor_plugin_src.js', 1402854669, 5144),
(156, 'langs', 0, 0),
(157, 'adminpanel/editor/plugins/template/langs/en_dlg.js', 1402854685, 655),
(158, 'adminpanel/editor/plugins/template/langs/ru_dlg.js', 1402854686, 655),
(159, 'fullpage', 0, 0),
(160, 'adminpanel/editor/plugins/fullpage/fullpage.htm', 1402854663, 26351),
(161, 'js', 0, 0),
(162, 'adminpanel/editor/plugins/fullpage/js/fullpage.js', 1402854678, 16313),
(163, 'css', 0, 0),
(164, 'adminpanel/editor/plugins/fullpage/css/fullpage.css', 1402854678, 3168),
(165, 'adminpanel/editor/plugins/fullpage/editor_plugin.js', 1402854663, 2876),
(166, 'adminpanel/editor/plugins/fullpage/editor_plugin_src.js', 1402854663, 4438),
(167, 'langs', 0, 0),
(168, 'adminpanel/editor/plugins/fullpage/langs/en_dlg.js', 1402854679, 2453),
(169, 'adminpanel/editor/plugins/fullpage/langs/ru_dlg.js', 1402854679, 2453),
(170, 'layer', 0, 0),
(171, 'adminpanel/editor/plugins/layer/editor_plugin.js', 1402854664, 3432),
(172, 'adminpanel/editor/plugins/layer/editor_plugin_src.js', 1402854664, 5522),
(173, 'advlist', 0, 0),
(174, 'adminpanel/editor/plugins/advlist/editor_plugin.js', 1402854660, 2039),
(175, 'adminpanel/editor/plugins/advlist/editor_plugin_src.js', 1402854660, 4254),
(176, 'nonbreaking', 0, 0),
(177, 'adminpanel/editor/plugins/nonbreaking/editor_plugin.js', 1402854665, 952),
(178, 'adminpanel/editor/plugins/nonbreaking/editor_plugin_src.js', 1402854665, 1580),
(179, 'style', 0, 0),
(180, 'js', 0, 0),
(181, 'adminpanel/editor/plugins/style/js/props.js', 1402854684, 31123),
(182, 'css', 0, 0),
(183, 'adminpanel/editor/plugins/style/css/props.css', 1402854683, 872),
(184, 'adminpanel/editor/plugins/style/editor_plugin.js', 1402854668, 938),
(185, 'adminpanel/editor/plugins/style/editor_plugin_src.js', 1402854668, 1592),
(186, 'langs', 0, 0),
(187, 'adminpanel/editor/plugins/style/langs/en_dlg.js', 1402854684, 1593),
(188, 'adminpanel/editor/plugins/style/langs/ru_dlg.js', 1402854684, 4569),
(189, 'adminpanel/editor/plugins/style/props.htm', 1402854668, 28950),
(190, 'iespell', 0, 0),
(191, 'adminpanel/editor/plugins/iespell/editor_plugin.js', 1402854663, 909),
(192, 'adminpanel/editor/plugins/iespell/editor_plugin_src.js', 1402854663, 1537),
(193, 'cyberfm', 0, 0),
(194, 'js', 0, 0),
(195, 'adminpanel/editor/plugins/cyberfm/js/jquery.paginator.js', 1402854676, 8746),
(196, 'adminpanel/editor/plugins/cyberfm/js/jquery.dirs.js', 1402854676, 2046),
(197, 'adminpanel/editor/plugins/cyberfm/js/jquery-1.3.2.pack.js', 1402854675, 57290),
(198, 'adminpanel/editor/plugins/cyberfm/js/swfobject.js', 1402854676, 10226),
(199, 'adminpanel/editor/plugins/cyberfm/js/jquery.uploadify.js', 1402854676, 10578),
(200, 'adminpanel/editor/plugins/cyberfm/js/index.html', 1402854675, 44),
(201, 'adminpanel/editor/plugins/cyberfm/js/jquery-1.4.2.min.js', 1402854675, 72482),
(202, 'adminpanel/editor/plugins/cyberfm/js/jquery.core.js', 1402854675, 16048),
(203, 'adminpanel/editor/plugins/cyberfm/editor_plugin.js', 1402854662, 2309),
(204, 'adminpanel/editor/plugins/cyberfm/config.php', 1402854662, 5075),
(205, 'adminpanel/editor/plugins/cyberfm/index.php', 1402854662, 3192),
(206, 'adminpanel/editor/plugins/cyberfm/editor_plugin_src.js', 1402854662, 2099),
(207, 'lang', 0, 0),
(208, 'adminpanel/editor/plugins/cyberfm/lang/ru-utf-8.js', 1402854676, 3361),
(209, 'adminpanel/editor/plugins/cyberfm/lang/index.html', 1402854676, 44),
(210, 'pages', 0, 0),
(211, 'default', 0, 0),
(212, 'adminpanel/editor/plugins/cyberfm/pages/default/Thumbs.db', 1402854690, 5120),
(213, 'img', 0, 0),
(214, 'adminpanel/editor/plugins/cyberfm/pages/default/img/Thumbs.db', 1402854695, 19456),
(215, 'adminpanel/editor/plugins/cyberfm/pages/default/img/ajax-loader.gif', 1402854694, 1849),
(216, 'adminpanel/editor/plugins/cyberfm/pages/default/img/map_jpg.psd', 1402854695, 82619),
(217, 'adminpanel/editor/plugins/cyberfm/pages/default/img/map.jpg', 1402854694, 4582),
(218, 'adminpanel/editor/plugins/cyberfm/pages/default/img/big-ajax-loader.gif', 1402854694, 3208),
(219, 'adminpanel/editor/plugins/cyberfm/pages/default/img/arrow_right.gif', 1402854694, 54),
(220, 'adminpanel/editor/plugins/cyberfm/pages/default/img/map.gif', 1402854694, 3282),
(221, 'adminpanel/editor/plugins/cyberfm/pages/default/img/index.html', 1402854694, 44),
(222, 'adminpanel/editor/plugins/cyberfm/pages/default/img/map_gif.psd', 1402854695, 57984),
(223, 'adminpanel/editor/plugins/cyberfm/pages/default/img/error_thumbnails.gif', 1402854694, 3883),
(224, 'adminpanel/editor/plugins/cyberfm/pages/default/img/slider_knob.gif', 1402854695, 60),
(225, 'css', 0, 0),
(226, 'adminpanel/editor/plugins/cyberfm/pages/default/css/general.css', 1402854693, 7121),
(227, 'adminpanel/editor/plugins/cyberfm/pages/default/css/index.html', 1402854693, 44),
(228, 'ext', 0, 0),
(229, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/Thumbs.db', 1402854694, 51200),
(230, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/rtf.gif', 1402854694, 645),
(231, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/ppt.gif', 1402854694, 1052),
(232, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/cf.gif', 1402854693, 140),
(233, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/dt.gif', 1402854693, 140),
(234, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/txt.gif', 1402854694, 347),
(235, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/mxl.gif', 1402854693, 140),
(236, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/mp3.gif', 1402854693, 608),
(237, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/xls.gif', 1402854694, 640),
(238, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/dbf.gif', 1402854693, 157),
(239, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/md.gif', 1402854693, 140),
(240, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/png.gif', 1402854694, 125),
(241, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/wav.gif', 1402854694, 608),
(242, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/bmp.gif', 1402854693, 125),
(243, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/html.gif', 1402854693, 240),
(244, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/ini.gif', 1402854693, 347),
(245, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/doc.gif', 1402854693, 645),
(246, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/dll.gif', 1402854693, 626),
(247, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/gif.gif', 1402854693, 125),
(248, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/zip.gif', 1402854694, 603),
(249, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/docx.gif', 1402854693, 645),
(250, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/swf.gif', 1402854694, 633),
(251, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/cdr.gif', 1402854693, 569),
(252, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/htm.gif', 1402854693, 240),
(253, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/exe.gif', 1402854693, 115),
(254, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/xml.gif', 1402854694, 592),
(255, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/shs.gif', 1402854694, 133),
(256, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/jpg.gif', 1402854693, 125),
(257, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/pdf.gif', 1402854694, 625),
(258, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/avi.gif', 1402854693, 572),
(259, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/tif.gif', 1402854694, 124),
(260, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/cd.gif', 1402854693, 140),
(261, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/epf.gif', 1402854693, 140),
(262, 'adminpanel/editor/plugins/cyberfm/pages/default/ext/rar.gif', 1402854694, 603),
(263, 'adminpanel/editor/plugins/cyberfm/pages/default/icons.png', 1402854690, 4525),
(264, 'adminpanel/editor/plugins/cyberfm/pages/default/favicon.ico', 1402854690, 1150),
(265, 'adminpanel/editor/plugins/cyberfm/pages/default/index.html', 1402854690, 3378),
(266, 'adminpanel/editor/plugins/cyberfm/pages/index.html', 1402854676, 44),
(267, 'includes', 0, 0),
(268, 'drivers', 0, 0),
(269, 'adminpanel/editor/plugins/cyberfm/includes/drivers/ErrorManager_Driver.php', 1402854689, 506),
(270, 'adminpanel/editor/plugins/cyberfm/includes/drivers/SessionManager_Driver.php', 1402854689, 463),
(271, 'ErrorManager', 0, 0),
(272, 'adminpanel/editor/plugins/cyberfm/includes/drivers/ErrorManager/ErrorManager_Default_Driver.php', 1402854692, 564),
(273, 'adminpanel/editor/plugins/cyberfm/includes/drivers/ImageManager_Driver.php', 1402854689, 688),
(274, 'SessionManager', 0, 0),
(275, 'adminpanel/editor/plugins/cyberfm/includes/drivers/SessionManager/SessionManager_Joomla_1_5_tinymce_Driver.php', 1402854692, 1757),
(276, 'adminpanel/editor/plugins/cyberfm/includes/drivers/SessionManager/SessionManager_Sample_Driver.php', 1402854692, 541),
(277, 'adminpanel/editor/plugins/cyberfm/includes/drivers/SessionManager/index.html', 1402854692, 44),
(278, 'ImageManager', 0, 0),
(279, 'adminpanel/editor/plugins/cyberfm/includes/drivers/ImageManager/ImageManager_ImageMagick_Driver.php', 1402854692, 2339),
(280, 'adminpanel/editor/plugins/cyberfm/includes/drivers/ImageManager/ImageManager_GD2_Driver.php', 1402854692, 4407),
(281, 'adminpanel/editor/plugins/cyberfm/includes/drivers/ImageManager/index.html', 1402854692, 44),
(282, 'adminpanel/editor/plugins/cyberfm/includes/drivers/index.html', 1402854689, 44),
(283, 'adminpanel/editor/plugins/cyberfm/includes/Manager.php', 1402854674, 717),
(284, 'adminpanel/editor/plugins/cyberfm/includes/FileManager.php', 1402854674, 5798),
(285, 'adminpanel/editor/plugins/cyberfm/includes/ErrorManager.php', 1402854674, 1344),
(286, 'tasks', 0, 0),
(287, 'adminpanel/editor/plugins/cyberfm/includes/tasks/lang.php', 1402854690, 693),
(288, 'adminpanel/editor/plugins/cyberfm/includes/tasks/conf.php', 1402854689, 681),
(289, 'adminpanel/editor/plugins/cyberfm/includes/tasks/get_info.php', 1402854690, 893),
(290, 'adminpanel/editor/plugins/cyberfm/includes/tasks/upload.php', 1402854690, 2454),
(291, 'adminpanel/editor/plugins/cyberfm/includes/tasks/create_folder.php', 1402854689, 503),
(292, 'adminpanel/editor/plugins/cyberfm/includes/tasks/del_file.php', 1402854689, 609),
(293, 'adminpanel/editor/plugins/cyberfm/includes/tasks/get_folder_list.php', 1402854690, 570),
(294, 'adminpanel/editor/plugins/cyberfm/includes/tasks/script.php', 1402854690, 652),
(295, 'adminpanel/editor/plugins/cyberfm/includes/tasks/rename_file.php', 1402854690, 765),
(296, 'adminpanel/editor/plugins/cyberfm/includes/tasks/page.php', 1402854690, 724),
(297, 'adminpanel/editor/plugins/cyberfm/includes/tasks/check_upload.php', 1402854689, 826),
(298, 'adminpanel/editor/plugins/cyberfm/includes/tasks/rename_dir.php', 1402854690, 627),
(299, 'adminpanel/editor/plugins/cyberfm/includes/tasks/del_dir.php', 1402854689, 607),
(300, 'adminpanel/editor/plugins/cyberfm/includes/tasks/css.php', 1402854689, 691),
(301, 'adminpanel/editor/plugins/cyberfm/includes/tasks/download_file.php', 1402854689, 2026),
(302, 'adminpanel/editor/plugins/cyberfm/includes/tasks/index.html', 1402854690, 44),
(303, 'adminpanel/editor/plugins/cyberfm/includes/tasks/get_file_list.php', 1402854690, 3061),
(304, 'adminpanel/editor/plugins/cyberfm/includes/SessionManager.php', 1402854674, 1089),
(305, 'drivers_bak', 0, 0),
(306, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/ErrorManager_Driver.php', 1402854689, 506),
(307, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/SessionManager_Driver.php', 1402854689, 463),
(308, 'ErrorManager', 0, 0),
(309, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/ErrorManager/ErrorManager_Default_Driver.php', 1402854692, 564),
(310, 'SessionManager', 0, 0),
(311, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/SessionManager/SessionManager_Joomla_1_5_tinymce_Driver.php', 1402854692, 1757),
(312, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/SessionManager/SessionManager_Sample_Driver.php', 1402854692, 541),
(313, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/SessionManager/index.html', 1402854692, 44),
(314, 'adminpanel/editor/plugins/cyberfm/includes/drivers_bak/index.html', 1402854689, 44),
(315, 'adminpanel/editor/plugins/cyberfm/includes/index.html', 1402854674, 44),
(316, 'adminpanel/editor/plugins/cyberfm/includes/ImageManager.php', 1402854674, 1706),
(317, 'autosave', 0, 0),
(318, 'adminpanel/editor/plugins/autosave/editor_plugin.js', 1402854661, 3525),
(319, 'adminpanel/editor/plugins/autosave/editor_plugin_src.js', 1402854661, 13825),
(320, 'images', 0, 0),
(321, 'langs', 0, 0),
(322, 'adminpanel/editor/plugins/autosave/langs/en.js', 1402854674, 259),
(323, 'wordcount', 0, 0),
(324, 'adminpanel/editor/plugins/wordcount/editor_plugin.js', 1402854669, 1517),
(325, 'adminpanel/editor/plugins/wordcount/editor_plugin_src.js', 1402854669, 2678),
(326, 'inlinepopups', 0, 0),
(327, 'skins', 0, 0),
(328, 'clearlooks2', 0, 0),
(329, 'img', 0, 0),
(330, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/alert.gif', 1402854695, 818),
(331, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/horizontal.gif', 1402854695, 769),
(332, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/vertical.gif', 1402854695, 92),
(333, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/buttons.gif', 1402854695, 1195),
(334, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/button.gif', 1402854695, 280),
(335, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/confirm.gif', 1402854695, 915),
(336, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/img/corners.gif', 1402854695, 911),
(337, 'adminpanel/editor/plugins/inlinepopups/skins/clearlooks2/window.css', 1402854691, 6803),
(338, 'adminpanel/editor/plugins/inlinepopups/editor_plugin.js', 1402854664, 10677),
(339, 'adminpanel/editor/plugins/inlinepopups/template.htm', 1402854664, 13265),
(340, 'adminpanel/editor/plugins/inlinepopups/editor_plugin_src.js', 1402854664, 18089),
(341, 'insertdatetime', 0, 0),
(342, 'adminpanel/editor/plugins/insertdatetime/editor_plugin.js', 1402854664, 1931),
(343, 'adminpanel/editor/plugins/insertdatetime/editor_plugin_src.js', 1402854664, 2942),
(344, 'table', 0, 0),
(345, 'js', 0, 0),
(346, 'adminpanel/editor/plugins/table/js/cell.js', 1402854684, 8849),
(347, 'adminpanel/editor/plugins/table/js/row.js', 1402854684, 7552),
(348, 'adminpanel/editor/plugins/table/js/merge_cells.js', 1402854684, 593),
(349, 'adminpanel/editor/plugins/table/js/table.js', 1402854685, 14439),
(350, 'css', 0, 0),
(351, 'adminpanel/editor/plugins/table/css/table.css', 1402854684, 183),
(352, 'adminpanel/editor/plugins/table/css/row.css', 1402854684, 331),
(353, 'adminpanel/editor/plugins/table/css/cell.css', 1402854684, 221),
(354, 'adminpanel/editor/plugins/table/editor_plugin.js', 1402854669, 13418),
(355, 'adminpanel/editor/plugins/table/editor_plugin_src.js', 1402854669, 30184),
(356, 'adminpanel/editor/plugins/table/cell.htm', 1402854669, 6998),
(357, 'langs', 0, 0),
(358, 'adminpanel/editor/plugins/table/langs/en_dlg.js', 1402854685, 2210),
(359, 'adminpanel/editor/plugins/table/langs/ru_dlg.js', 1402854685, 8278),
(360, 'adminpanel/editor/plugins/table/row.htm', 1402854669, 6060),
(361, 'adminpanel/editor/plugins/table/merge_cells.htm', 1402854669, 1387),
(362, 'adminpanel/editor/plugins/table/table.htm', 1402854669, 8794),
(363, 'visualchars', 0, 0),
(364, 'adminpanel/editor/plugins/visualchars/editor_plugin.js', 1402854669, 1345),
(365, 'adminpanel/editor/plugins/visualchars/editor_plugin_src.js', 1402854669, 2182),
(366, 'example', 0, 0),
(367, 'img', 0, 0),
(368, 'adminpanel/editor/plugins/example/img/example.gif', 1402854678, 87),
(369, 'js', 0, 0),
(370, 'adminpanel/editor/plugins/example/js/dialog.js', 1402854678, 628),
(371, 'adminpanel/editor/plugins/example/dialog.htm', 1402854663, 930),
(372, 'adminpanel/editor/plugins/example/editor_plugin.js', 1402854663, 860),
(373, 'adminpanel/editor/plugins/example/editor_plugin_src.js', 1402854663, 3072),
(374, 'langs', 0, 0),
(375, 'adminpanel/editor/plugins/example/langs/en.js', 1402854678, 82),
(376, 'adminpanel/editor/plugins/example/langs/en_dlg.js', 1402854678, 85),
(377, 'tabfocus', 0, 0),
(378, 'adminpanel/editor/plugins/tabfocus/editor_plugin.js', 1402854668, 1417),
(379, 'adminpanel/editor/plugins/tabfocus/editor_plugin_src.js', 1402854668, 2704),
(380, 'advimage', 0, 0),
(381, 'img', 0, 0),
(382, 'adminpanel/editor/plugins/advimage/img/sample.gif', 1402854672, 1624),
(383, 'js', 0, 0),
(384, 'adminpanel/editor/plugins/advimage/js/image.js', 1402854672, 12496),
(385, 'css', 0, 0),
(386, 'adminpanel/editor/plugins/advimage/css/advimage.css', 1402854672, 685),
(387, 'adminpanel/editor/plugins/advimage/editor_plugin.js', 1402854660, 788),
(388, 'adminpanel/editor/plugins/advimage/editor_plugin_src.js', 1402854660, 1436),
(389, 'adminpanel/editor/plugins/advimage/image.htm', 1402854660, 11583),
(390, 'langs', 0, 0),
(391, 'adminpanel/editor/plugins/advimage/langs/en_dlg.js', 1402854672, 1328),
(392, 'adminpanel/editor/plugins/advimage/langs/ru_dlg.js', 1402854673, 5363),
(393, 'paste', 0, 0),
(394, 'js', 0, 0),
(395, 'adminpanel/editor/plugins/paste/js/pastetext.js', 1402854681, 920),
(396, 'adminpanel/editor/plugins/paste/js/pasteword.js', 1402854681, 1698),
(397, 'adminpanel/editor/plugins/paste/editor_plugin.js', 1402854666, 13269),
(398, 'adminpanel/editor/plugins/paste/pastetext.htm', 1402854667, 1235),
(399, 'adminpanel/editor/plugins/paste/editor_plugin_src.js', 1402854666, 32473),
(400, 'langs', 0, 0),
(401, 'adminpanel/editor/plugins/paste/langs/en_dlg.js', 1402854682, 232),
(402, 'adminpanel/editor/plugins/paste/langs/ru_dlg.js', 1402854682, 839),
(403, 'adminpanel/editor/plugins/paste/pasteword.htm', 1402854667, 804),
(404, 'bbcode', 0, 0),
(405, 'adminpanel/editor/plugins/bbcode/editor_plugin.js', 1402854662, 3224),
(406, 'adminpanel/editor/plugins/bbcode/editor_plugin_src.js', 1402854661, 4473),
(407, 'advlink', 0, 0),
(408, 'js', 0, 0),
(409, 'adminpanel/editor/plugins/advlink/js/advlink.js', 1402854673, 17762),
(410, 'adminpanel/editor/plugins/advlink/link.htm', 1402854660, 15326),
(411, 'css', 0, 0),
(412, 'adminpanel/editor/plugins/advlink/css/advlink.css', 1402854673, 488),
(413, 'adminpanel/editor/plugins/advlink/editor_plugin.js', 1402854660, 973),
(414, 'adminpanel/editor/plugins/advlink/editor_plugin_src.js', 1402854660, 1693),
(415, 'langs', 0, 0),
(416, 'adminpanel/editor/plugins/advlink/langs/en_dlg.js', 1402854673, 1724),
(417, 'adminpanel/editor/plugins/advlink/langs/ru_dlg.js', 1402854673, 5951),
(418, 'save', 0, 0),
(419, 'adminpanel/editor/plugins/save/editor_plugin.js', 1402854667, 1569),
(420, 'adminpanel/editor/plugins/save/editor_plugin_src.js', 1402854667, 2629),
(421, 'xhtmlxtras', 0, 0),
(422, 'js', 0, 0),
(423, 'adminpanel/editor/plugins/xhtmlxtras/js/cite.js', 1402854687, 569),
(424, 'adminpanel/editor/plugins/xhtmlxtras/js/ins.js', 1402854687, 1811),
(425, 'adminpanel/editor/plugins/xhtmlxtras/js/abbr.js', 1402854687, 569),
(426, 'adminpanel/editor/plugins/xhtmlxtras/js/acronym.js', 1402854686, 587),
(427, 'adminpanel/editor/plugins/xhtmlxtras/js/element_common.js', 1402854687, 7475),
(428, 'adminpanel/editor/plugins/xhtmlxtras/js/del.js', 1402854687, 1814),
(429, 'adminpanel/editor/plugins/xhtmlxtras/js/attributes.js', 1402854687, 3923),
(430, 'css', 0, 0),
(431, 'adminpanel/editor/plugins/xhtmlxtras/css/popup.css', 1402854686, 523),
(432, 'adminpanel/editor/plugins/xhtmlxtras/css/attributes.css', 1402854686, 208),
(433, 'adminpanel/editor/plugins/xhtmlxtras/editor_plugin.js', 1402854670, 2861),
(434, 'adminpanel/editor/plugins/xhtmlxtras/del.htm', 1402854670, 7165),
(435, 'adminpanel/editor/plugins/xhtmlxtras/ins.htm', 1402854670, 7167),
(436, 'adminpanel/editor/plugins/xhtmlxtras/editor_plugin_src.js', 1402854670, 4430),
(437, 'adminpanel/editor/plugins/xhtmlxtras/attributes.htm', 1402854670, 6151),
(438, 'adminpanel/editor/plugins/xhtmlxtras/abbr.htm', 1402854670, 6179),
(439, 'langs', 0, 0),
(440, 'adminpanel/editor/plugins/xhtmlxtras/langs/en_dlg.js', 1402854687, 1127),
(441, 'adminpanel/editor/plugins/xhtmlxtras/langs/ru_dlg.js', 1402854687, 3074),
(442, 'adminpanel/editor/plugins/xhtmlxtras/cite.htm', 1402854670, 6179),
(443, 'adminpanel/editor/plugins/xhtmlxtras/acronym.htm', 1402854670, 6191),
(444, 'fullscreen', 0, 0),
(445, 'adminpanel/editor/plugins/fullscreen/editor_plugin.js', 1402854663, 3487),
(446, 'adminpanel/editor/plugins/fullscreen/fullscreen.htm', 1402854663, 3517),
(447, 'adminpanel/editor/plugins/fullscreen/editor_plugin_src.js', 1402854663, 5351),
(448, 'emotions', 0, 0),
(449, 'img', 0, 0),
(450, 'adminpanel/editor/plugins/emotions/img/smiley-undecided.gif', 1402854677, 337),
(451, 'adminpanel/editor/plugins/emotions/img/smiley-surprised.gif', 1402854677, 342),
(452, 'adminpanel/editor/plugins/emotions/img/smiley-wink.gif', 1402854677, 351),
(453, 'adminpanel/editor/plugins/emotions/img/smiley-laughing.gif', 1402854677, 344),
(454, 'adminpanel/editor/plugins/emotions/img/smiley-innocent.gif', 1402854676, 336),
(455, 'adminpanel/editor/plugins/emotions/img/smiley-kiss.gif', 1402854677, 338),
(456, 'adminpanel/editor/plugins/emotions/img/smiley-frown.gif', 1402854676, 340),
(457, 'adminpanel/editor/plugins/emotions/img/smiley-tongue-out.gif', 1402854677, 328),
(458, 'adminpanel/editor/plugins/emotions/img/smiley-sealed.gif', 1402854677, 325),
(459, 'adminpanel/editor/plugins/emotions/img/smiley-cool.gif', 1402854676, 354),
(460, 'adminpanel/editor/plugins/emotions/img/smiley-cry.gif', 1402854676, 329),
(461, 'adminpanel/editor/plugins/emotions/img/smiley-foot-in-mouth.gif', 1402854676, 344),
(462, 'adminpanel/editor/plugins/emotions/img/smiley-embarassed.gif', 1402854676, 331),
(463, 'adminpanel/editor/plugins/emotions/img/smiley-smile.gif', 1402854677, 345),
(464, 'adminpanel/editor/plugins/emotions/img/smiley-money-mouth.gif', 1402854677, 321),
(465, 'adminpanel/editor/plugins/emotions/img/smiley-yell.gif', 1402854677, 336),
(466, 'js', 0, 0),
(467, 'adminpanel/editor/plugins/emotions/js/emotions.js', 1402854677, 563),
(468, 'adminpanel/editor/plugins/emotions/emotions.htm', 1402854662, 4525),
(469, 'adminpanel/editor/plugins/emotions/editor_plugin.js', 1402854662, 676),
(470, 'adminpanel/editor/plugins/emotions/editor_plugin_src.js', 1402854662, 1262),
(471, 'langs', 0, 0),
(472, 'adminpanel/editor/plugins/emotions/langs/en_dlg.js', 1402854677, 423),
(473, 'adminpanel/editor/plugins/emotions/langs/ru_dlg.js', 1402854677, 1286),
(474, 'preview', 0, 0),
(475, 'adminpanel/editor/plugins/preview/preview.html', 1402854667, 647),
(476, 'adminpanel/editor/plugins/preview/editor_plugin.js', 1402854667, 1051),
(477, 'adminpanel/editor/plugins/preview/example.html', 1402854667, 759),
(478, 'adminpanel/editor/plugins/preview/editor_plugin_src.js', 1402854667, 1693),
(479, 'jscripts', 0, 0),
(480, 'adminpanel/editor/plugins/preview/jscripts/embed.js', 1402854682, 2011),
(481, 'spellchecker', 0, 0),
(482, 'img', 0, 0),
(483, 'adminpanel/editor/plugins/spellchecker/img/Thumbs.db', 1402854683, 3072),
(484, 'adminpanel/editor/plugins/spellchecker/img/wline.gif', 1402854683, 46),
(485, 'css', 0, 0),
(486, 'adminpanel/editor/plugins/spellchecker/css/content.css', 1402854683, 99),
(487, 'adminpanel/editor/plugins/spellchecker/editor_plugin.js', 1402854668, 6777),
(488, 'classes', 0, 0),
(489, 'utils', 0, 0),
(490, 'adminpanel/editor/plugins/spellchecker/editor_plugin_src.js', 1402854668, 11306),
(491, 'includes', 0, 0),
(492, 'contextmenu', 0, 0),
(493, 'adminpanel/editor/plugins/contextmenu/editor_plugin.js', 1402854662, 2140),
(494, 'adminpanel/editor/plugins/contextmenu/editor_plugin_src.js', 1402854662, 4325),
(495, 'print', 0, 0),
(496, 'adminpanel/editor/plugins/print/editor_plugin.js', 1402854667, 492),
(497, 'adminpanel/editor/plugins/print/editor_plugin_src.js', 1402854667, 915),
(498, 'directionality', 0, 0),
(499, 'adminpanel/editor/plugins/directionality/editor_plugin.js', 1402854662, 1333),
(500, 'adminpanel/editor/plugins/directionality/editor_plugin_src.js', 1402854662, 2156),
(501, 'autoresize', 0, 0),
(502, 'adminpanel/editor/plugins/autoresize/editor_plugin.js', 1402854661, 1222),
(503, 'adminpanel/editor/plugins/autoresize/editor_plugin_src.js', 1402854661, 3892),
(504, 'searchreplace', 0, 0),
(505, 'js', 0, 0),
(506, 'adminpanel/editor/plugins/searchreplace/js/searchreplace.js', 1402854683, 3493),
(507, 'css', 0, 0),
(508, 'adminpanel/editor/plugins/searchreplace/css/searchreplace.css', 1402854683, 182),
(509, 'adminpanel/editor/plugins/searchreplace/editor_plugin.js', 1402854668, 1031),
(510, 'adminpanel/editor/plugins/searchreplace/editor_plugin_src.js', 1402854668, 1699),
(511, 'adminpanel/editor/plugins/searchreplace/searchreplace.htm', 1402854668, 4883),
(512, 'langs', 0, 0),
(513, 'adminpanel/editor/plugins/searchreplace/langs/en_dlg.js', 1402854683, 484),
(514, 'adminpanel/editor/plugins/searchreplace/langs/ru_dlg.js', 1402854683, 1346),
(515, 'pagebreak', 0, 0),
(516, 'img', 0, 0),
(517, 'adminpanel/editor/plugins/pagebreak/img/trans.gif', 1402854681, 43),
(518, 'adminpanel/editor/plugins/pagebreak/img/pagebreak.gif', 1402854681, 325),
(519, 'css', 0, 0),
(520, 'adminpanel/editor/plugins/pagebreak/css/content.css', 1402854681, 171),
(521, 'adminpanel/editor/plugins/pagebreak/editor_plugin.js', 1402854666, 1463),
(522, 'adminpanel/editor/plugins/pagebreak/editor_plugin_src.js', 1402854666, 2322),
(523, 'advhr', 0, 0),
(524, 'js', 0, 0),
(525, 'adminpanel/editor/plugins/advhr/js/rule.js', 1402854671, 1365),
(526, 'css', 0, 0),
(527, 'adminpanel/editor/plugins/advhr/css/advhr.css', 1402854671, 245),
(528, 'adminpanel/editor/plugins/advhr/editor_plugin.js', 1402854659, 847),
(529, 'adminpanel/editor/plugins/advhr/editor_plugin_src.js', 1402854659, 1498),
(530, 'adminpanel/editor/plugins/advhr/rule.htm', 1402854659, 2693),
(531, 'langs', 0, 0),
(532, 'adminpanel/editor/plugins/advhr/langs/en_dlg.js', 1402854671, 94),
(533, 'adminpanel/editor/plugins/advhr/langs/ru_dlg.js', 1402854671, 189),
(534, 'utils', 0, 0),
(535, 'adminpanel/editor/utils/validate.js', 1402854655, 5208),
(536, 'adminpanel/editor/utils/editable_selects.js', 1402854655, 2087),
(537, 'adminpanel/editor/utils/mctabs.js', 1402854655, 1948),
(538, 'adminpanel/editor/utils/form_utils.js', 1402854655, 5706),
(539, 'adminpanel/editor/tiny_mce_popup.js', 1402854647, 5197),
(540, 'themes', 0, 0),
(541, 'advanced', 0, 0),
(542, 'img', 0, 0),
(543, 'adminpanel/editor/themes/advanced/img/icons.gif', 1402854687, 11794),
(544, 'adminpanel/editor/themes/advanced/img/colorpicker.jpg', 1402854687, 3189),
(545, 'adminpanel/editor/themes/advanced/editor_template_src.js', 1402854670, 35370),
(546, 'js', 0, 0),
(547, 'adminpanel/editor/themes/advanced/js/anchor.js', 1402854688, 928),
(548, 'adminpanel/editor/themes/advanced/js/color_picker.js', 1402854688, 11523),
(549, 'adminpanel/editor/themes/advanced/js/about.js', 1402854688, 2198),
(550, 'adminpanel/editor/themes/advanced/js/source_editor.js', 1402854688, 1567),
(551, 'adminpanel/editor/themes/advanced/js/charmap.js', 1402854688, 15394),
(552, 'adminpanel/editor/themes/advanced/js/link.js', 1402854688, 5115),
(553, 'adminpanel/editor/themes/advanced/js/image.js', 1402854688, 6336),
(554, 'adminpanel/editor/themes/advanced/source_editor.htm', 1402854671, 1215),
(555, 'adminpanel/editor/themes/advanced/link.htm', 1402854671, 2622),
(556, 'skins', 0, 0),
(557, 'default', 0, 0),
(558, 'img', 0, 0),
(559, 'adminpanel/editor/themes/advanced/skins/default/img/items.gif', 1402854695, 70),
(560, 'adminpanel/editor/themes/advanced/skins/default/img/menu_check.gif', 1402854695, 70),
(561, 'adminpanel/editor/themes/advanced/skins/default/img/buttons.png', 1402854695, 3274),
(562, 'adminpanel/editor/themes/advanced/skins/default/img/tabs.gif', 1402854696, 1326),
(563, 'adminpanel/editor/themes/advanced/skins/default/img/progress.gif', 1402854695, 1787),
(564, 'adminpanel/editor/themes/advanced/skins/default/img/menu_arrow.gif', 1402854695, 68),
(565, 'adminpanel/editor/themes/advanced/skins/default/content.css', 1402854691, 1442),
(566, 'adminpanel/editor/themes/advanced/skins/default/dialog.css', 1402854691, 5733),
(567, 'adminpanel/editor/themes/advanced/skins/default/ui.css', 1402854691, 15843),
(568, 'o2k7', 0, 0),
(569, 'img', 0, 0),
(570, 'adminpanel/editor/themes/advanced/skins/o2k7/img/button_bg_silver.png', 1402854696, 5358),
(571, 'adminpanel/editor/themes/advanced/skins/o2k7/img/button_bg_black.png', 1402854696, 3736),
(572, 'adminpanel/editor/themes/advanced/skins/o2k7/img/button_bg.png', 1402854696, 5859),
(573, 'adminpanel/editor/themes/advanced/skins/o2k7/content.css', 1402854691, 1453),
(574, 'adminpanel/editor/themes/advanced/skins/o2k7/dialog.css', 1402854691, 5756),
(575, 'adminpanel/editor/themes/advanced/skins/o2k7/ui.css', 1402854691, 15239),
(576, 'adminpanel/editor/themes/advanced/skins/o2k7/ui_black.css', 1402854691, 1662),
(577, 'adminpanel/editor/themes/advanced/skins/o2k7/ui_silver.css', 1402854691, 824),
(578, 'adminpanel/editor/themes/advanced/color_picker.htm', 1402854670, 2941),
(579, 'adminpanel/editor/themes/advanced/about.htm', 1402854670, 2999),
(580, 'adminpanel/editor/themes/advanced/anchor.htm', 1402854670, 1058),
(581, 'adminpanel/editor/themes/advanced/charmap.htm', 1402854670, 2397),
(582, 'adminpanel/editor/themes/advanced/editor_template.js', 1402854670, 22219),
(583, 'adminpanel/editor/themes/advanced/image.htm', 1402854671, 4471),
(584, 'langs', 0, 0),
(585, 'adminpanel/editor/themes/advanced/langs/en.js', 1402854688, 1957),
(586, 'adminpanel/editor/themes/advanced/langs/ru.js', 1402854688, 6995),
(587, 'adminpanel/editor/themes/advanced/langs/en_dlg.js', 1402854688, 1774),
(588, 'adminpanel/editor/themes/advanced/langs/ru_dlg.js', 1402854688, 5280),
(589, 'simple', 0, 0),
(590, 'img', 0, 0),
(591, 'adminpanel/editor/themes/simple/img/Thumbs.db', 1402854688, 3584),
(592, 'adminpanel/editor/themes/simple/img/icons.gif', 1402854688, 1440),
(593, 'adminpanel/editor/themes/simple/editor_template_src.js', 1402854671, 3288),
(594, 'skins', 0, 0),
(595, 'default', 0, 0),
(596, 'adminpanel/editor/themes/simple/skins/default/content.css', 1402854691, 538),
(597, 'adminpanel/editor/themes/simple/skins/default/ui.css', 1402854691, 2137),
(598, 'o2k7', 0, 0),
(599, 'img', 0, 0),
(600, 'adminpanel/editor/themes/simple/skins/o2k7/img/button_bg.png', 1402854696, 5102),
(601, 'adminpanel/editor/themes/simple/skins/o2k7/content.css', 1402854691, 478),
(602, 'adminpanel/editor/themes/simple/skins/o2k7/ui.css', 1402854691, 2375),
(603, 'adminpanel/editor/themes/simple/editor_template.js', 1402854671, 2222),
(604, 'langs', 0, 0),
(605, 'adminpanel/editor/themes/simple/langs/en.js', 1402854688, 331),
(606, 'adminpanel/editor/themes/simple/langs/ru.js', 1402854688, 929),
(607, 'langs', 0, 0),
(608, 'adminpanel/editor/langs/ru.js', 1402854654, 16676),
(609, 'adminpanel/adminstation.php', 1402854645, 5421),
(610, 'adminpanel/login.php', 1402854648, 1762),
(611, 'uninstalls', 0, 0),
(612, 'images', 0, 0),
(613, 'adminpanel/images/Thumbs.db', 1402854651, 105472),
(614, 'adminpanel/images/input.gif', 1402854649, 94),
(615, 'adminpanel/images/save.gif', 1402854650, 707),
(616, 'adminpanel/images/ban.gif', 1402854648, 109),
(617, 'adminpanel/images/edit_small.gif', 1402854649, 218),
(618, 'adminpanel/images/logo.jpg', 1402854650, 4505),
(619, 'adminpanel/images/bg_head.gif', 1402854649, 286),
(620, 'adminpanel/images/status.gif', 1402854650, 335),
(621, 'adminpanel/images/view.gif', 1402854651, 460),
(622, 'adminpanel/images/index_bg.gif', 1402854649, 50),
(623, 'adminpanel/images/user.gif', 1402854650, 335),
(624, 'adminpanel/images/clock_ico.png', 1402854649, 872),
(625, 'adminpanel/images/user.png', 1402854650, 728),
(626, 'adminpanel/images/help.gif', 1402854649, 750),
(627, 'adminpanel/images/ban.png', 1402854649, 731),
(628, 'adminpanel/images/index_down_left.gif', 1402854649, 72),
(629, 'adminpanel/images/cancel_btn.png', 1402854649, 840),
(630, 'adminpanel/images/index_down_right.gif', 1402854649, 72),
(631, 'adminpanel/images/admin.gif', 1402854648, 324),
(632, 'adminpanel/images/no_delite.gif', 1402854650, 401),
(633, 'adminpanel/images/moder.png', 1402854650, 753),
(634, 'adminpanel/images/edit_ico.png', 1402854649, 1731),
(635, 'adminpanel/images/serverip_ico.png', 1402854650, 583),
(636, 'adminpanel/images/admin.png', 1402854648, 773),
(637, 'adminpanel/images/index_left_bg.gif', 1402854649, 65),
(638, 'adminpanel/images/login.jpg', 1402854650, 4027),
(639, 'adminpanel/images/index_right_bg.gif', 1402854649, 65),
(640, 'adminpanel/images/home.gif', 1402854649, 779),
(641, 'adminpanel/images/loader.gif', 1402854650, 1542),
(642, 'adminpanel/images/menu.gif', 1402854650, 123),
(643, 'adminpanel/images/stat_menu.gif', 1402854650, 1491),
(644, 'adminpanel/images/prew.gif', 1402854650, 537),
(645, 'adminpanel/images/search.gif', 1402854650, 644),
(646, 'adminpanel/images/index_up_left.gif', 1402854649, 73),
(647, 'adminpanel/images/del_ico.png', 1402854649, 1133),
(648, 'adminpanel/images/input_line.gif', 1402854649, 49),
(649, 'adminpanel/images/moder.gif', 1402854650, 326),
(650, 'adminpanel/images/no_install.gif', 1402854650, 379),
(651, 'adminpanel/images/del.gif', 1402854649, 222),
(652, 'adminpanel/images/comment_small.gif', 1402854649, 156),
(653, 'adminpanel/images/button_bg.gif', 1402854649, 439),
(654, 'adminpanel/images/help_ico.png', 1402854649, 3571),
(655, 'ico', 0, 0),
(656, 'adminpanel/images/ico/Thumbs.db', 1402854656, 34816),
(657, 'adminpanel/images/ico/xls.png', 1402854656, 609),
(658, 'adminpanel/images/ico/mp3.png', 1402854655, 681),
(659, 'adminpanel/images/ico/del.png', 1402854655, 954),
(660, 'adminpanel/images/ico/xml.png', 1402854656, 664),
(661, 'adminpanel/images/ico/acrobat.png', 1402854655, 598),
(662, 'adminpanel/images/ico/bug_error.png', 1402854655, 818),
(663, 'adminpanel/images/ico/add.png', 1402854655, 289),
(664, 'adminpanel/images/ico/gif.png', 1402854655, 735),
(665, 'adminpanel/images/ico/php.png', 1402854656, 597),
(666, 'adminpanel/images/ico/doc.png', 1402854655, 597),
(667, 'adminpanel/images/ico/swf.png', 1402854656, 576),
(668, 'adminpanel/images/ico/folder_bug.png', 1402854655, 776),
(669, 'adminpanel/images/ico/html.png', 1402854655, 525),
(670, 'adminpanel/images/ico/folder.png', 1402854655, 484),
(671, 'adminpanel/images/ico/zip.png', 1402854656, 670),
(672, 'adminpanel/images/ico/video.png', 1402854656, 615),
(673, 'adminpanel/images/ico/img.png', 1402854655, 467),
(674, 'adminpanel/images/ico/psd.png', 1402854656, 519),
(675, 'adminpanel/images/ico/css.png', 1402854655, 495),
(676, 'adminpanel/images/ico/jpg.png', 1402854655, 553),
(677, 'adminpanel/images/ico/no.png', 1402854656, 369),
(678, 'adminpanel/images/ico/index.html', 1402854655, 143),
(679, 'adminpanel/images/ico/txt.png', 1402854656, 424),
(680, 'adminpanel/images/ico/js.png', 1402854655, 645),
(681, 'adminpanel/images/logo_down.jpg', 1402854650, 5210),
(682, 'adminpanel/images/delite_small.gif', 1402854649, 166),
(683, 'adminpanel/images/exit.gif', 1402854649, 677),
(684, 'adminpanel/images/edit.gif', 1402854649, 558),
(685, 'adminpanel/images/no_edit.gif', 1402854650, 546),
(686, 'adminpanel/images/antivirus.gif', 1402854648, 1391),
(687, 'adminpanel/images/index_up_right.gif', 1402854649, 74),
(688, 'adminpanel/images/lia.gif', 1402854650, 125),
(689, 'adminpanel/images/ip.png', 1402854650, 1033),
(690, 'adminpanel/images/partners.gif', 1402854650, 347),
(691, 'adminpanel/images/li.gif', 1402854650, 132),
(692, 'adminpanel/images/ip.gif', 1402854649, 206),
(693, 'adminpanel/images/index.html', 1402854649, 143),
(694, 'adminpanel/images/partners.png', 1402854650, 874),
(695, 'adminpanel/images/error.gif', 1402854649, 454),
(696, 'adminpanel/images/no_view.gif', 1402854650, 462),
(697, 'adminpanel/images/status.png', 1402854650, 634),
(698, 'adminpanel/images/pay.png', 1402854650, 595),
(699, 'adminpanel/images/cencel_ico.gif', 1402854649, 552),
(700, 'adminpanel/images/delite.gif', 1402854649, 554),
(701, 'adminpanel/images/phpinfo_ico.png', 1402854650, 538),
(702, 'adminpanel/images/install.gif', 1402854649, 362),
(703, 'del', 0, 0),
(704, 'adminpanel/del/user.php', 1402854646, 887),
(705, 'adminpanel/del/news.php', 1402854645, 566),
(706, 'adminpanel/del/answers.php', 1402854645, 908),
(707, 'adminpanel/del/page.php', 1402854646, 1056),
(708, 'adminpanel/del/output.php', 1402854646, 1055),
(709, 'adminpanel/del/ps.php', 1402854646, 999),
(710, 'adminpanel/del/index.html', 1402854645, 143),
(711, 'adminpanel/del/plans.php', 1402854646, 964),
(712, 'files', 0, 0),
(713, 'adminpanel/files/jquery.js', 1402854648, 73569),
(714, 'adminpanel/files/alt.js', 1402854648, 5724),
(715, 'adminpanel/files/styles.css', 1402854648, 5874),
(716, 'adminpanel/files/favicon.ico', 1402854648, 1150),
(717, 'adminpanel/files/index.html', 1402854648, 143),
(718, 'adminpanel/cron.php', 1402854645, 182),
(719, 'adminpanel/.DS_Store', 1402854645, 6154),
(720, 'top', 0, 0),
(721, 'top/top_ru.php', 1402854739, 27),
(722, 'top/index.php', 1402854738, 219),
(723, 'top/top.php', 1402854738, 27),
(724, 'help', 0, 0),
(725, 'help/help_ru.php', 1402854719, 27),
(726, 'help/help.php', 1402854719, 27),
(727, 'help/index.php', 1402854719, 221),
(728, 'news', 0, 0),
(729, 'news/news.php', 1402854736, 2816),
(730, 'news/index.php', 1402854736, 220),
(731, 'news/news_ru.php', 1402854736, 2811),
(732, 'diz', 0, 0),
(733, 'js', 0, 0),
(734, 'rev-slider', 0, 0),
(735, 'diz/js/rev-slider/jquery.themepunch.revolution.min.js', 1402854715, 81228),
(736, 'diz/js/rev-slider/jquery.themepunch.plugins.min.js', 1402854715, 64424),
(737, 'diz/js/jquery-1.10.2.min.js', 1402854706, 93113),
(738, 'diz/js/jquery.easing.1.3.js', 1402854706, 8301),
(739, 'diz/js/jquery.countTo.js', 1402854706, 4014),
(740, 'diz/js/bootstrap.js', 1402854705, 60539),
(741, 'diz/js/jquery.appear.js', 1402854705, 1485),
(742, 'diz/js/owl.carousel.js', 1402854706, 39370),
(743, 'diz/js/jquery.isotope.js', 1402854706, 44738),
(744, 'diz/js/jquery.prettyPhoto.js', 1402854706, 22071),
(745, 'diz/js/jquery.mapmarker.js', 1402854706, 2429),
(746, 'diz/js/jquery.sticky.js', 1402854706, 4376),
(747, 'diz/js/jquery.mb.YTPlayer.js', 1402854706, 39421),
(748, 'diz/js/.DS_Store', 1402854705, 6152),
(749, 'diz/js/jquery.parallax-1.1.3.js', 1402854706, 1916),
(750, 'diz/js/scripts.js', 1402854706, 7993),
(751, 'diz/js/modernizr-latest.js', 1402854706, 52770),
(752, 'diz/js/SmoothScroll.js', 1402854706, 7697),
(753, 'diz/js/waypoints.min.js', 1402854706, 8051),
(754, 'fonts', 0, 0),
(755, 'diz/fonts/fontawesome-webfont.ttf', 1402854700, 80652),
(756, 'diz/fonts/glyphicons-halflings-regular.eot-.html', 1402854701, 13022),
(757, 'diz/fonts/fontawesome-webfont.woff', 1402854700, 44432),
(758, 'diz/fonts/glyphicons-halflings-regular.html', 1402854701, 13022),
(759, 'diz/fonts/fontawesome-webfont.eot', 1402854700, 38205),
(760, 'diz/fonts/fontawesome-webfont.svg', 1402854700, 202561),
(761, 'diz/fonts/glyphicons-halflings-regular.svg.html', 1402854701, 13022),
(762, 'diz/fonts/fontawesome-webfont.eot-.html', 1402854700, 13022),
(763, 'diz/fonts/glyphicons-halflings-regular-2.html', 1402854700, 13022),
(764, 'diz/fonts/glyphicons-halflings-regular-3.html', 1402854700, 13022),
(765, 'css', 0, 0),
(766, 'player', 0, 0),
(767, 'diz/css/player/ytp-regular.html', 1402854710, 13022),
(768, 'diz/css/player/ytp-regular-2.html', 1402854710, 13022),
(769, 'diz/css/player/YTPlayer.css', 1402854710, 9478),
(770, 'diz/css/owl.carousel.css', 1402854699, 6172),
(771, 'diz/css/style.css', 1402854699, 65835),
(772, 'diz/css/prettyPhoto.css', 1402854699, 20074),
(773, 'diz/css/settings.css', 1402854699, 43130),
(774, 'diz/css/font-awesome.css', 1402854699, 22969),
(775, 'diz/css/responsive.css', 1402854699, 16840),
(776, 'images', 0, 0),
(777, 'diz/css/images/raster.html', 1402854710, 13022),
(778, 'diz/css/images/raster@2x.html', 1402854710, 13022),
(779, 'diz/css/reset.css', 1402854699, 1550),
(780, 'diz/css/grabbing.html', 1402854699, 13022),
(781, 'diz/css/animate.min.css', 1402854699, 41626),
(782, 'diz/css/.DS_Store', 1402854699, 6148),
(783, 'diz/css/bootstrap.css', 1402854699, 129979),
(784, 'images', 0, 0),
(785, 'rev-slider', 0, 0),
(786, 'diz/images/rev-slider/boxed_bgtile.html', 1402854712, 13022),
(787, 'diz/images/rev-slider/gridtile_3x3_white.html', 1402854712, 13022),
(788, 'diz/images/rev-slider/arrow_left.html', 1402854711, 13022),
(789, 'diz/images/rev-slider/earth.png', 1402854712, 294936),
(790, 'diz/images/rev-slider/coloredbg.html', 1402854712, 13022),
(791, 'diz/images/rev-slider/bullets2.html', 1402854712, 13022),
(792, 'diz/images/rev-slider/bullets.html', 1402854712, 13022),
(793, 'diz/images/rev-slider/arrow_right2.html', 1402854712, 13022),
(794, 'diz/images/rev-slider/navigdots.html', 1402854713, 13022),
(795, 'diz/images/rev-slider/bullet_boxed.html', 1402854712, 13022),
(796, 'diz/images/rev-slider/leftarrow.png', 1402854712, 4783),
(797, 'diz/images/rev-slider/timer.png', 1402854713, 125),
(798, 'diz/images/rev-slider/gridtile.html', 1402854712, 13022),
(799, 'diz/images/rev-slider/small_left_boxed.html', 1402854713, 13022),
(800, 'diz/images/rev-slider/slide3.jpg', 1402854713, 65014),
(801, 'diz/images/rev-slider/shadow3.html', 1402854713, 13022),
(802, 'diz/images/rev-slider/small_left.html', 1402854713, 13022),
(803, 'diz/images/rev-slider/loader.gif', 1402854712, 3208),
(804, 'diz/images/rev-slider/girl.png', 1402854712, 207182),
(805, 'diz/images/rev-slider/slide1.jpg', 1402854713, 697407),
(806, 'diz/images/rev-slider/gull.png', 1402854712, 7275),
(807, 'diz/images/rev-slider/small_right.html', 1402854713, 13022),
(808, 'diz/images/rev-slider/bullet.png', 1402854712, 3043),
(809, 'diz/images/rev-slider/balon.png', 1402854712, 30711),
(810, 'diz/images/rev-slider/large_right.html', 1402854712, 13022),
(811, 'diz/images/rev-slider/shadow2.html', 1402854713, 13022),
(812, 'diz/images/rev-slider/rightarrow.png', 1402854713, 3027),
(813, 'diz/images/rev-slider/shadow1.html', 1402854713, 13022),
(814, 'diz/images/rev-slider/write.png', 1402854714, 271538),
(815, 'diz/images/rev-slider/small_right_boxed.html', 1402854714, 13022),
(816, 'diz/images/rev-slider/gridtile_3x3.html', 1402854712, 13022),
(817, 'diz/images/rev-slider/arrowright.html', 1402854711, 13022);
INSERT INTO `antivirus` (`id`, `filename`, `time`, `size`) VALUES
(818, 'diz/images/rev-slider/slide2.jpg', 1402854713, 226634),
(819, 'diz/images/rev-slider/arrow_right.html', 1402854712, 13022),
(820, 'diz/images/rev-slider/arrowleft.html', 1402854711, 13022),
(821, 'diz/images/rev-slider/large_left.html', 1402854712, 13022),
(822, 'diz/images/rev-slider/navigdots_bgtile.html', 1402854713, 13022),
(823, 'diz/images/rev-slider/gridtile_white.html', 1402854712, 13022),
(824, 'diz/images/rev-slider/arrow_left2.html', 1402854711, 13022),
(825, 'diz/images/screenshots.png', 1402854704, 545369),
(826, 'timeline', 0, 0),
(827, 'diz/images/timeline/img6.jpg', 1402854714, 157084),
(828, 'diz/images/timeline/img2.jpg', 1402854714, 79299),
(829, 'diz/images/timeline/img4.jpg', 1402854714, 86190),
(830, 'diz/images/timeline/img5.jpg', 1402854714, 103434),
(831, 'diz/images/timeline/img1.jpg', 1402854714, 151275),
(832, 'diz/images/timeline/img3.jpg', 1402854714, 91587),
(833, 'diz/images/balloon.png', 1402854701, 178585),
(834, 'diz/images/logo.png', 1402854703, 4493),
(835, 'diz/images/toons.png', 1402854704, 22604),
(836, 'diz/images/bg6.jpg', 1402854703, 616581),
(837, 'diz/images/pattern.png', 1402854704, 213),
(838, 'diz/images/loading.gif', 1402854703, 32668),
(839, 'diz/images/bg2.jpg', 1402854702, 132633),
(840, 'prettyPhoto', 0, 0),
(841, 'dark_square', 0, 0),
(842, 'diz/images/prettyPhoto/dark_square/sprite.png', 1402854716, 3507),
(843, 'diz/images/prettyPhoto/dark_square/loader.gif', 1402854716, 2545),
(844, 'diz/images/prettyPhoto/dark_square/btnNext.png', 1402854716, 1411),
(845, 'diz/images/prettyPhoto/dark_square/btnPrevious.png', 1402854716, 1442),
(846, 'dark_rounded', 0, 0),
(847, 'diz/images/prettyPhoto/dark_rounded/sprite.png', 1402854716, 4076),
(848, 'diz/images/prettyPhoto/dark_rounded/loader.gif', 1402854716, 2545),
(849, 'diz/images/prettyPhoto/dark_rounded/btnNext.png', 1402854716, 1411),
(850, 'diz/images/prettyPhoto/dark_rounded/contentPattern.png', 1402854716, 130),
(851, 'diz/images/prettyPhoto/dark_rounded/btnPrevious.png', 1402854716, 1442),
(852, 'default', 0, 0),
(853, 'diz/images/prettyPhoto/default/sprite_next.png', 1402854716, 1358),
(854, 'diz/images/prettyPhoto/default/default_thumb.png', 1402854716, 1537),
(855, 'diz/images/prettyPhoto/default/sprite_prev.png', 1402854716, 1376),
(856, 'diz/images/prettyPhoto/default/sprite.png', 1402854716, 6682),
(857, 'diz/images/prettyPhoto/default/loader.gif', 1402854716, 6331),
(858, 'diz/images/prettyPhoto/default/sprite_y.png', 1402854716, 1162),
(859, 'diz/images/prettyPhoto/default/sprite_x.png', 1402854716, 1097),
(860, 'light_square', 0, 0),
(861, 'diz/images/prettyPhoto/light_square/sprite.png', 1402854718, 3507),
(862, 'diz/images/prettyPhoto/light_square/btnNext.png', 1402854717, 1411),
(863, 'diz/images/prettyPhoto/light_square/btnPrevious.png', 1402854717, 1442),
(864, 'light_rounded', 0, 0),
(865, 'diz/images/prettyPhoto/light_rounded/sprite.png', 1402854717, 4099),
(866, 'diz/images/prettyPhoto/light_rounded/loader.gif', 1402854717, 2545),
(867, 'diz/images/prettyPhoto/light_rounded/btnNext.png', 1402854717, 1411),
(868, 'diz/images/prettyPhoto/light_rounded/btnPrevious.png', 1402854717, 1442),
(869, 'facebook', 0, 0),
(870, 'diz/images/prettyPhoto/facebook/contentPatternLeft.png', 1402854717, 137),
(871, 'diz/images/prettyPhoto/facebook/sprite.png', 1402854717, 4227),
(872, 'diz/images/prettyPhoto/facebook/loader.gif', 1402854717, 2545),
(873, 'diz/images/prettyPhoto/facebook/btnNext.png', 1402854716, 845),
(874, 'diz/images/prettyPhoto/facebook/contentPatternBottom.png', 1402854717, 142),
(875, 'diz/images/prettyPhoto/facebook/contentPatternRight.png', 1402854717, 136),
(876, 'diz/images/prettyPhoto/facebook/default_thumbnail.gif', 1402854717, 227),
(877, 'diz/images/prettyPhoto/facebook/btnPrevious.png', 1402854716, 828),
(878, 'diz/images/prettyPhoto/facebook/contentPatternTop.png', 1402854717, 142),
(879, 'diz/images/text.png', 1402854704, 17712),
(880, 'diz/images/big-image.jpg', 1402854703, 15872),
(881, 'portfolio', 0, 0),
(882, 'diz/images/portfolio/4.jpg', 1402854711, 62051),
(883, 'diz/images/portfolio/6.jpg', 1402854711, 28724),
(884, 'diz/images/portfolio/1.jpg', 1402854711, 22949),
(885, 'diz/images/portfolio/3.jpg', 1402854711, 31582),
(886, 'diz/images/portfolio/5.jpg', 1402854711, 65285),
(887, 'diz/images/portfolio/2.jpg', 1402854711, 36056),
(888, 'team', 0, 0),
(889, 'diz/images/team/4.jpg', 1402854714, 20811),
(890, 'diz/images/team/1.jpg', 1402854714, 23452),
(891, 'diz/images/team/3.jpg', 1402854714, 20558),
(892, 'diz/images/team/2.jpg', 1402854714, 23864),
(893, 'clients', 0, 0),
(894, 'clients-say', 0, 0),
(895, 'diz/images/clients/clients-say/1.jpg', 1402854715, 54300),
(896, 'diz/images/clients/clients-say/3.jpg', 1402854715, 53889),
(897, 'diz/images/clients/clients-say/2.jpg', 1402854715, 14960),
(898, 'our-clients', 0, 0),
(899, 'diz/images/clients/our-clients/logo5.png', 1402854715, 2189),
(900, 'diz/images/clients/our-clients/logo6.png', 1402854715, 3241),
(901, 'diz/images/clients/our-clients/logo3.png', 1402854715, 3029),
(902, 'diz/images/clients/our-clients/logo4.png', 1402854715, 2883),
(903, 'diz/images/clients/our-clients/logo1.png', 1402854715, 2387),
(904, 'diz/images/clients/our-clients/logo2.png', 1402854715, 1603),
(905, 'diz/images/bg1.jpg', 1402854702, 320905),
(906, 'diz/images/bg7.jpg', 1402854703, 161339),
(907, 'diz/images/.DS_Store', 1402854701, 6156),
(908, 'diz/images/timeline-bg.jpg', 1402854704, 14260),
(909, 'diz/images/img-1.jpg', 1402854703, 99948),
(910, 'gradient', 0, 0),
(911, 'diz/images/gradient/g30.html', 1402854711, 13022),
(912, 'diz/images/gradient/g40.html', 1402854711, 13022),
(913, 'diz/images/bg3.jpg', 1402854702, 253338),
(914, 'font', 0, 0),
(915, 'diz/font/revicons90c6.html', 1402854700, 13022),
(916, 'diz/font/revicons90c6-2.html', 1402854700, 13022),
(917, 'diz/font/revicons90c6-3.html', 1402854700, 13022),
(918, 'diz/font/revicons.eot-5510888.html', 1402854699, 13022),
(919, 'diz/font/revicons.svg-5510888.html', 1402854699, 13022),
(920, 'diz/.DS_Store', 1402854698, 6150),
(921, 'diz/index.html', 1402854699, 91654),
(922, 'template_ru.php', 1402854644, 8158),
(923, 'sitemap.xml', 1402854643, 0),
(924, 'reminder', 0, 0),
(925, 'reminder/reminder_ru.php', 1402854737, 3248),
(926, 'reminder/index.php', 1402854737, 228),
(927, 'reminder/reminder.php', 1402854737, 4027),
(928, 'exit.php', 1402854643, 296),
(929, 'deposits', 0, 0),
(930, 'deposits/deposits.php', 1402854698, 3385),
(931, 'deposits/index.php', 1402854698, 229),
(932, 'deposits/deposits_ru.php', 1402854698, 3398),
(933, 'outputs', 0, 0),
(934, 'outputs/index.php', 1402854736, 251),
(935, 'outputs/outputs.php', 1402854736, 1458),
(936, 'outputs/outputs_ru.php', 1402854736, 1458),
(937, 'withdrawal', 0, 0),
(938, 'withdrawal/withdrawal.php', 1402854739, 11572),
(939, 'withdrawal/withdrawal_ru.php', 1402854739, 11342),
(940, 'withdrawal/index.php', 1402854739, 232),
(941, 'transfer', 0, 0),
(942, 'transfer/transfer_ru.php', 1402854739, 6415),
(943, 'transfer/index.php', 1402854739, 229),
(944, 'transfer/transfer.php', 1402854739, 6376),
(945, 'templ.php', 1402854644, 27283),
(946, 'registration', 0, 0),
(947, 'registration/registration.php', 1402854737, 6308),
(948, 'registration/index.php', 1402854737, 236),
(949, 'registration/registration_ru.php', 1402854737, 6129),
(950, 'peresult.php', 1402854643, 1232),
(951, 'favicon.ico', 1402854643, 1406),
(952, 'index.php', 1402854643, 135),
(953, 'about', 0, 0),
(954, 'about/index.php', 1402854644, 223),
(955, 'about/about.php', 1402854644, 27),
(956, 'about/about_ru.php', 1402854644, 27),
(957, 'answers', 0, 0),
(958, 'answers/answers_list_ru.php', 1402854696, 17006),
(959, 'answers/answers_ru.php', 1402854696, 139),
(960, 'answers/comments_ru.php', 1402854696, 18933),
(961, 'answers/index.php', 1402854696, 227),
(962, 'answers/answers.php', 1402854696, 103),
(963, 'answers/comments.php', 1402854696, 18841),
(964, 'answers/answers_list.php', 1402854696, 16916),
(965, 'error_log', 1402854643, 565),
(966, '.ftpquota', 1402854643, 15),
(967, 'backup', 0, 0),
(968, 'deposit', 0, 0),
(969, 'deposit/index.php', 1402854698, 227),
(970, 'deposit/deposit.php', 1402854698, 6542),
(971, 'deposit/deposit_ru.php', 1402854698, 6665),
(972, 'images', 0, 0),
(973, 'images/Thumbs.db', 1402854720, 199680),
(974, 'img', 0, 0),
(975, 'images/img/Thumbs.db', 1402854732, 18944),
(976, 'images/img/index.html', 1402854732, 159),
(977, 'images/input.gif', 1402854720, 94),
(978, 'images/asubm.gif', 1402854719, 195),
(979, 'images/bg.jpg', 1402854719, 755),
(980, 'images/code.jpg', 1402854720, 1856),
(981, 'images/bgclockline.gif', 1402854719, 102),
(982, 'images/no.gif', 1402854720, 391),
(983, 'images/yes.gif', 1402854721, 414),
(984, 'images/logo.png', 1402854720, 11651),
(985, 'images/222.png', 1402854719, 19684),
(986, 'images/cancel_btn.png', 1402854719, 840),
(987, 'images/sep.gif', 1402854720, 60),
(988, 'images/en.png', 1402854720, 656),
(989, 'thumbs', 0, 0),
(990, 'images/thumbs/index.html', 1402854734, 159),
(991, 'images/adminstation.png', 1402854719, 2421),
(992, 'images/hline.gif', 1402854720, 44),
(993, 'images/ddos.png', 1402854720, 9874),
(994, 'images/loader.gif', 1402854720, 673),
(995, 'images/menu.gif', 1402854720, 599),
(996, 'images/enter.gif', 1402854720, 423),
(997, 'images/cancel_ico.png', 1402854720, 1101),
(998, 'images/as.gif', 1402854719, 715),
(999, 'images/title_bg.gif', 1402854720, 132),
(1000, 'images/del.gif', 1402854720, 227),
(1001, 'images/ru.png', 1402854720, 403),
(1002, 'images/strike.gif', 1402854720, 43),
(1003, 'images/edit.gif', 1402854720, 218),
(1004, 'images/rss.gif', 1402854720, 366),
(1005, 'images/wait_ico.png', 1402854721, 882),
(1006, 'images/ssl.png', 1402854720, 10965),
(1007, 'images/yes_ico.png', 1402854721, 643),
(1008, 'images/from_ico.png', 1402854720, 724),
(1009, 'flags', 0, 0),
(1010, 'images/flags/Thumbs.db', 1402854731, 278016),
(1011, 'images/flags/FM.gif', 1402854724, 911),
(1012, 'images/flags/AD.gif', 1402854721, 947),
(1013, 'images/flags/OM.gif', 1402854728, 1004),
(1014, 'images/flags/CU.gif', 1402854723, 1006),
(1015, 'images/flags/GB.gif', 1402854724, 1006),
(1016, 'images/flags/SD.gif', 1402854729, 1006),
(1017, 'images/flags/PH.gif', 1402854728, 1006),
(1018, 'images/flags/AL.gif', 1402854721, 1005),
(1019, 'images/flags/GN.gif', 1402854724, 902),
(1020, 'images/flags/BM.gif', 1402854722, 1000),
(1021, 'images/flags/SM.gif', 1402854730, 871),
(1022, 'images/flags/KZ.gif', 1402854726, 1004),
(1023, 'images/flags/CO.gif', 1402854723, 999),
(1024, 'images/flags/SR.gif', 1402854730, 942),
(1025, 'images/flags/KG.gif', 1402854726, 1004),
(1026, 'images/flags/KR.gif', 1402854726, 1004),
(1027, 'images/flags/TW.gif', 1402854731, 587),
(1028, 'images/flags/DZ.gif', 1402854723, 1001),
(1029, 'images/flags/CG.gif', 1402854722, 1001),
(1030, 'images/flags/HT.gif', 1402854725, 1006),
(1031, 'images/flags/NR.gif', 1402854728, 1003),
(1032, 'images/flags/LA.gif', 1402854726, 893),
(1033, 'images/flags/CL.gif', 1402854723, 211),
(1034, 'images/flags/ZW.gif', 1402854732, 1006),
(1035, 'images/flags/TN.gif', 1402854731, 1005),
(1036, 'images/flags/FK.gif', 1402854724, 926),
(1037, 'images/flags/JO.gif', 1402854725, 1006),
(1038, 'images/flags/GS.gif', 1402854725, 962),
(1039, 'images/flags/TK.gif', 1402854731, 543),
(1040, 'images/flags/AR.gif', 1402854721, 1006),
(1041, 'images/flags/MT.gif', 1402854727, 855),
(1042, 'images/flags/LY.gif', 1402854727, 576),
(1043, 'images/flags/FR.gif', 1402854724, 1006),
(1044, 'images/flags/AQ.gif', 1402854721, 990),
(1045, 'images/flags/LU.gif', 1402854727, 1006),
(1046, 'images/flags/AM.gif', 1402854721, 1006),
(1047, 'images/flags/ET.gif', 1402854723, 1006),
(1048, 'images/flags/KP.gif', 1402854726, 1006),
(1049, 'images/flags/WS.gif', 1402854732, 994),
(1050, 'images/flags/PK.gif', 1402854728, 1004),
(1051, 'images/flags/UM.gif', 1402854731, 925),
(1052, 'images/flags/ZA.gif', 1402854732, 1006),
(1053, 'images/flags/KE.gif', 1402854726, 1003),
(1054, 'images/flags/TH.gif', 1402854730, 1006),
(1055, 'images/flags/IL.gif', 1402854725, 1006),
(1056, 'images/flags/LS.gif', 1402854726, 925),
(1057, 'images/flags/MA.gif', 1402854727, 1139),
(1058, 'images/flags/NU.gif', 1402854728, 289),
(1059, 'images/flags/SK.gif', 1402854730, 1006),
(1060, 'images/flags/WF.gif', 1402854732, 336),
(1061, 'images/flags/BR.gif', 1402854722, 1006),
(1062, 'images/flags/NZ.gif', 1402854728, 1005),
(1063, 'images/flags/EC.gif', 1402854723, 1006),
(1064, 'images/flags/PT.gif', 1402854729, 1000),
(1065, 'images/flags/NE.gif', 1402854728, 904),
(1066, 'images/flags/YU.gif', 1402854732, 1006),
(1067, 'images/flags/US.gif', 1402854731, 1006),
(1068, 'images/flags/GH.gif', 1402854724, 911),
(1069, 'images/flags/QA.gif', 1402854729, 596),
(1070, 'images/flags/IO.gif', 1402854725, 1070),
(1071, 'images/flags/YE.gif', 1402854732, 1006),
(1072, 'images/flags/PF.gif', 1402854728, 1006),
(1073, 'images/flags/SG.gif', 1402854729, 1005),
(1074, 'images/flags/KI.gif', 1402854726, 1006),
(1075, 'images/flags/TG.gif', 1402854730, 1006),
(1076, 'images/flags/ER.gif', 1402854723, 1006),
(1077, 'images/flags/RW.gif', 1402854729, 929),
(1078, 'images/flags/FO.gif', 1402854724, 1006),
(1079, 'images/flags/unknown.gif', 1402854731, 54),
(1080, 'images/flags/AI.gif', 1402854721, 967),
(1081, 'images/flags/SO.gif', 1402854730, 998),
(1082, 'images/flags/AT.gif', 1402854722, 1006),
(1083, 'images/flags/MU.gif', 1402854727, 892),
(1084, 'images/flags/BW.gif', 1402854722, 999),
(1085, 'images/flags/TM.gif', 1402854731, 927),
(1086, 'images/flags/BE.gif', 1402854722, 1003),
(1087, 'images/flags/VG.gif', 1402854732, 1006),
(1088, 'images/flags/MM.gif', 1402854727, 919),
(1089, 'images/flags/IE.gif', 1402854725, 1006),
(1090, 'images/flags/EG.gif', 1402854723, 1006),
(1091, 'images/flags/GT.gif', 1402854725, 1006),
(1092, 'images/flags/CY.gif', 1402854723, 1005),
(1093, 'images/flags/TV.gif', 1402854731, 1006),
(1094, 'images/flags/PY.gif', 1402854729, 1006),
(1095, 'images/flags/GE.gif', 1402854724, 581),
(1096, 'images/flags/GY.gif', 1402854725, 1006),
(1097, 'images/flags/DO.gif', 1402854723, 936),
(1098, 'images/flags/CK.gif', 1402854723, 1006),
(1099, 'images/flags/HU.gif', 1402854725, 1006),
(1100, 'images/flags/GI.gif', 1402854724, 1004),
(1101, 'images/flags/LV.gif', 1402854727, 999),
(1102, 'images/flags/NG.gif', 1402854728, 898),
(1103, 'images/flags/RE.gif', 1402854729, 863),
(1104, 'images/flags/AU.gif', 1402854722, 1006),
(1105, 'images/flags/AF.gif', 1402854721, 1006),
(1106, 'images/flags/PN.gif', 1402854728, 937),
(1107, 'images/flags/SE.gif', 1402854729, 1006),
(1108, 'images/flags/GU.gif', 1402854725, 1006),
(1109, 'images/flags/SZ.gif', 1402854730, 924),
(1110, 'images/flags/LR.gif', 1402854726, 917),
(1111, 'images/flags/VE.gif', 1402854732, 1006),
(1112, 'images/flags/VN.gif', 1402854732, 999),
(1113, 'images/flags/FI.gif', 1402854723, 1004),
(1114, 'images/flags/UY.gif', 1402854731, 1006),
(1115, 'images/flags/IN.gif', 1402854725, 1006),
(1116, 'images/flags/CN.gif', 1402854723, 579),
(1117, 'images/flags/SB.gif', 1402854729, 1006),
(1118, 'images/flags/IQ.gif', 1402854725, 1006),
(1119, 'images/flags/JM.gif', 1402854725, 1006),
(1120, 'images/flags/AG.gif', 1402854721, 949),
(1121, 'images/flags/ZM.gif', 1402854732, 926),
(1122, 'images/flags/MH.gif', 1402854727, 968),
(1123, 'images/flags/SL.gif', 1402854730, 1006),
(1124, 'images/flags/PM.gif', 1402854728, 1006),
(1125, 'images/flags/GD.gif', 1402854724, 959),
(1126, 'images/flags/AO.gif', 1402854721, 1006),
(1127, 'images/flags/GQ.gif', 1402854724, 929),
(1128, 'images/flags/BV.gif', 1402854722, 934),
(1129, 'images/flags/HR.gif', 1402854725, 1006),
(1130, 'images/flags/SN.gif', 1402854730, 923),
(1131, 'images/flags/PE.gif', 1402854728, 1006),
(1132, 'images/flags/MZ.gif', 1402854728, 1006),
(1133, 'images/flags/ES.gif', 1402854723, 1006),
(1134, 'images/flags/UG.gif', 1402854731, 1006),
(1135, 'images/flags/BO.gif', 1402854722, 1006),
(1136, 'images/flags/AS.gif', 1402854721, 1050),
(1137, 'images/flags/SI.gif', 1402854729, 1006),
(1138, 'images/flags/AZ.gif', 1402854722, 1006),
(1139, 'images/flags/CF.gif', 1402854722, 1006),
(1140, 'images/flags/DJ.gif', 1402854723, 915),
(1141, 'images/flags/JP.gif', 1402854726, 596),
(1142, 'images/flags/MS.gif', 1402854727, 1006),
(1143, 'images/flags/VA.gif', 1402854731, 1004),
(1144, 'images/flags/KY.gif', 1402854726, 1005),
(1145, 'images/flags/NO.gif', 1402854728, 1004),
(1146, 'images/flags/AW.gif', 1402854722, 1006),
(1147, 'images/flags/BY.gif', 1402854722, 1006),
(1148, 'images/flags/BS.gif', 1402854722, 1004),
(1149, 'images/flags/MQ.gif', 1402854727, 961),
(1150, 'images/flags/FJ.gif', 1402854723, 1006),
(1151, 'images/flags/EE.gif', 1402854723, 1006),
(1152, 'images/flags/UA.gif', 1402854731, 1006),
(1153, 'images/flags/HK.gif', 1402854725, 1005),
(1154, 'images/flags/AN.gif', 1402854721, 1006),
(1155, 'images/flags/BI.gif', 1402854722, 1006),
(1156, 'images/flags/DE.gif', 1402854723, 1003),
(1157, 'images/flags/RO.gif', 1402854729, 1006),
(1158, 'images/flags/TR.gif', 1402854731, 995),
(1159, 'images/flags/CR.gif', 1402854723, 1006),
(1160, 'images/flags/KW.gif', 1402854726, 915),
(1161, 'images/flags/CM.gif', 1402854723, 1006),
(1162, 'images/flags/LB.gif', 1402854726, 1006),
(1163, 'images/flags/MR.gif', 1402854727, 897),
(1164, 'images/flags/BF.gif', 1402854722, 1006),
(1165, 'images/flags/RU.gif', 1402854729, 1006),
(1166, 'images/flags/LT.gif', 1402854726, 631),
(1167, 'images/flags/TF.gif', 1402854730, 863),
(1168, 'images/flags/VU.gif', 1402854732, 964),
(1169, 'images/flags/BA.gif', 1402854722, 1006),
(1170, 'images/flags/LK.gif', 1402854726, 1006),
(1171, 'images/flags/CH.gif', 1402854723, 998),
(1172, 'images/flags/IS.gif', 1402854725, 1006),
(1173, 'images/flags/TT.gif', 1402854731, 1006),
(1174, 'images/flags/PW.gif', 1402854729, 855),
(1175, 'images/flags/GW.gif', 1402854725, 913),
(1176, 'images/flags/NF.gif', 1402854728, 1006),
(1177, 'images/flags/CZ.gif', 1402854723, 1006),
(1178, 'images/flags/KH.gif', 1402854726, 1006),
(1179, 'images/flags/PA.gif', 1402854728, 1006),
(1180, 'images/flags/TC.gif', 1402854730, 1004),
(1181, 'images/flags/UZ.gif', 1402854731, 920),
(1182, 'images/flags/VC.gif', 1402854732, 938),
(1183, 'images/flags/TD.gif', 1402854730, 902),
(1184, 'images/flags/NC.gif', 1402854728, 1006),
(1185, 'images/flags/YT.gif', 1402854732, 472),
(1186, 'images/flags/LI.gif', 1402854726, 897),
(1187, 'images/flags/LC.gif', 1402854726, 1006),
(1188, 'images/flags/CI.gif', 1402854723, 1006),
(1189, 'images/flags/MN.gif', 1402854727, 1006),
(1190, 'images/flags/GM.gif', 1402854724, 897),
(1191, 'images/flags/IT.gif', 1402854725, 1006),
(1192, 'images/flags/BJ.gif', 1402854722, 1005),
(1193, 'images/flags/NI.gif', 1402854728, 901),
(1194, 'images/flags/CV.gif', 1402854723, 1006),
(1195, 'images/flags/PS.gif', 1402854729, 902),
(1196, 'images/flags/BB.gif', 1402854722, 1006),
(1197, 'images/flags/PL.gif', 1402854728, 1006),
(1198, 'images/flags/TO.gif', 1402854731, 591),
(1199, 'images/flags/MG.gif', 1402854727, 1005),
(1200, 'images/flags/SC.gif', 1402854729, 977),
(1201, 'images/flags/IR.gif', 1402854725, 1006),
(1202, 'images/flags/SV.gif', 1402854730, 901),
(1203, 'images/flags/CD.gif', 1402854722, 908),
(1204, 'images/flags/GL.gif', 1402854724, 1003),
(1205, 'images/flags/BG.gif', 1402854722, 1006),
(1206, 'images/flags/NP.gif', 1402854728, 563),
(1207, 'images/flags/MX.gif', 1402854727, 1006),
(1208, 'images/flags/DM.gif', 1402854723, 960),
(1209, 'images/flags/PG.gif', 1402854728, 947),
(1210, 'images/flags/SY.gif', 1402854730, 907),
(1211, 'images/flags/BH.gif', 1402854722, 998),
(1212, 'images/flags/MK.gif', 1402854727, 971),
(1213, 'images/flags/PR.gif', 1402854728, 1006),
(1214, 'images/flags/NL.gif', 1402854728, 1006),
(1215, 'images/flags/GR.gif', 1402854724, 1006),
(1216, 'images/flags/VI.gif', 1402854732, 1006),
(1217, 'images/flags/index.html', 1402854725, 159),
(1218, 'images/flags/KM.gif', 1402854726, 940),
(1219, 'images/flags/SH.gif', 1402854729, 942),
(1220, 'images/flags/ID.gif', 1402854725, 1005),
(1221, 'images/flags/GP.gif', 1402854724, 997),
(1222, 'images/flags/BN.gif', 1402854722, 1006),
(1223, 'images/flags/SA.gif', 1402854729, 1004),
(1224, 'images/flags/MP.gif', 1402854727, 1006),
(1225, 'images/flags/MD.gif', 1402854727, 1006),
(1226, 'images/flags/GF.gif', 1402854724, 322),
(1227, 'images/flags/TZ.gif', 1402854731, 1005),
(1228, 'images/flags/BT.gif', 1402854722, 1006),
(1229, 'images/flags/HM.gif', 1402854725, 937),
(1230, 'images/flags/NA.gif', 1402854728, 1006),
(1231, 'images/flags/BZ.gif', 1402854722, 1006),
(1232, 'images/flags/CA.gif', 1402854722, 1005),
(1233, 'images/flags/ML.gif', 1402854727, 902),
(1234, 'images/flags/MO.gif', 1402854727, 1005),
(1235, 'images/flags/MW.gif', 1402854727, 893),
(1236, 'images/flags/MV.gif', 1402854727, 914),
(1237, 'images/flags/GA.gif', 1402854724, 1006),
(1238, 'images/flags/HN.gif', 1402854725, 896),
(1239, 'images/flags/BD.gif', 1402854722, 1005),
(1240, 'images/flags/MY.gif', 1402854728, 1006),
(1241, 'images/flags/AE.gif', 1402854721, 898),
(1242, 'images/flags/TJ.gif', 1402854730, 907),
(1243, 'images/flags/KN.gif', 1402854726, 971),
(1244, 'images/flags/CC.gif', 1402854722, 953),
(1245, 'images/flags/DK.gif', 1402854723, 1001),
(1246, 'images/flags/ST.gif', 1402854730, 946),
(1247, 'images/flags/TL.gif', 1402854731, 940),
(1248, 'images/flags/MC.gif', 1402854727, 1005),
(1249, 'images/bgclocklinepercent.gif', 1402854719, 103),
(1250, 'images/status_ico.png', 1402854720, 859),
(1251, 'images/no_ico.png', 1402854720, 840),
(1252, 'images/subm.gif', 1402854720, 314),
(1253, 'smiles', 0, 0),
(1254, 'images/smiles/Thumbs.db', 1402854734, 45056),
(1255, 'images/smiles/15.gif', 1402854733, 482),
(1256, 'images/smiles/11.gif', 1402854733, 1066),
(1257, 'images/smiles/28.gif', 1402854734, 698),
(1258, 'images/smiles/21.gif', 1402854733, 974),
(1259, 'images/smiles/19.gif', 1402854733, 677),
(1260, 'images/smiles/12.gif', 1402854733, 698),
(1261, 'images/smiles/25.gif', 1402854734, 698),
(1262, 'images/smiles/08.gif', 1402854733, 696),
(1263, 'images/smiles/13.gif', 1402854733, 699),
(1264, 'images/smiles/10.gif', 1402854733, 690),
(1265, 'images/smiles/05.gif', 1402854733, 985),
(1266, 'images/smiles/22.gif', 1402854733, 698),
(1267, 'images/smiles/26.gif', 1402854734, 897),
(1268, 'images/smiles/09.gif', 1402854733, 696),
(1269, 'images/smiles/06.gif', 1402854733, 705),
(1270, 'images/smiles/27.gif', 1402854734, 946),
(1271, 'images/smiles/07.gif', 1402854733, 699),
(1272, 'images/smiles/04.gif', 1402854733, 689),
(1273, 'images/smiles/14.gif', 1402854733, 1088),
(1274, 'images/smiles/16.gif', 1402854733, 696),
(1275, 'images/smiles/01.gif', 1402854733, 1131),
(1276, 'images/smiles/02.gif', 1402854733, 1104),
(1277, 'images/smiles/03.gif', 1402854733, 1067),
(1278, 'images/smiles/18.gif', 1402854733, 708),
(1279, 'images/smiles/23.gif', 1402854734, 705),
(1280, 'images/smiles/index.html', 1402854734, 143),
(1281, 'images/smiles/24.gif', 1402854734, 697),
(1282, 'images/smiles/17.gif', 1402854733, 699),
(1283, 'images/smiles/20.gif', 1402854733, 698),
(1284, 'images/index.html', 1402854720, 159),
(1285, 'images/proc_ico.png', 1402854720, 624),
(1286, 'images/partners.png', 1402854720, 26033),
(1287, 'images/122.png', 1402854719, 9035),
(1288, 'images/zoomin.cur', 1402854721, 326),
(1289, 'images/to_ico.png', 1402854720, 726),
(1290, 'pmresult.php', 1402854644, 1871),
(1291, 'backup.php', 1402854643, 2234),
(1292, 'cfg.php', 1402854833, 1911),
(1293, 'stat', 0, 0),
(1294, 'stat/auth.php', 1402854738, 1524),
(1295, 'stat/auth_ru.php', 1402854738, 1378),
(1296, 'stat/index.php', 1402854738, 221),
(1297, 'stat/enter.php', 1402854738, 831),
(1298, 'stat/stat.php', 1402854738, 991),
(1299, 'stat/percent.php', 1402854738, 817),
(1300, 'stat/percent_ru.php', 1402854738, 694),
(1301, 'stat/stat_ru.php', 1402854738, 1033),
(1302, 'stat/out.php', 1402854738, 817),
(1303, 'stat/out_ru.php', 1402854738, 694),
(1304, 'stat/enter_ru.php', 1402854738, 708),
(1305, 'stat/depo_ru.php', 1402854738, 865),
(1306, 'stat/depo.php', 1402854738, 989),
(1307, 'faq', 0, 0),
(1308, 'faq/faq_ru.php', 1402854718, 27),
(1309, 'faq/faq.php', 1402854718, 27),
(1310, 'faq/index.php', 1402854718, 219),
(1311, 'ref', 0, 0),
(1312, 'ref/ref_ru.php', 1402854737, 3371),
(1313, 'ref/index.php', 1402854737, 219),
(1314, 'ref/ref.php', 1402854737, 2816),
(1315, 'banners', 0, 0),
(1316, 'banners/index.php', 1402854697, 227),
(1317, 'banners/banners_ru.php', 1402854697, 27),
(1318, 'banners/banners.php', 1402854697, 27),
(1319, 'ini.php', 1402854643, 8228),
(1320, 'cgi-bin', 0, 0),
(1321, 'robots.txt', 1402854644, 246),
(1322, 'activate.php', 1402854643, 1098),
(1323, 'captcha.php', 1402854643, 2097),
(1324, 'install.php', 1402854643, 26706),
(1325, 'includes', 0, 0),
(1326, 'includes/left_ru.php', 1402854734, 5771),
(1327, 'includes/auth.php', 1402854734, 1499),
(1328, 'includes/auth_ru.php', 1402854734, 1469),
(1329, 'errors', 0, 0),
(1330, 'includes/errors/500.php', 1402854735, 818),
(1331, 'includes/errors/400.php', 1402854735, 844),
(1332, 'includes/errors/db.php', 1402854735, 1039),
(1333, 'includes/errors/401.php', 1402854735, 861),
(1334, 'includes/errors/404.php', 1402854735, 915),
(1335, 'includes/errors/tehwork.php', 1402854735, 866),
(1336, 'includes/errors/403.php', 1402854735, 726),
(1337, 'includes/errors/banip.php', 1402854735, 780),
(1338, 'includes/errors/banlogin.php', 1402854735, 769),
(1339, 'includes/errors/index.html', 1402854735, 159),
(1340, 'includes/cpayeer.php', 1402854734, 4363),
(1341, 'includes/index.php', 1402854734, 26),
(1342, 'includes/left.php', 1402854734, 2434),
(1343, 'includes/index.html', 1402854734, 159),
(1344, 'files', 0, 0),
(1345, 'files/styles.css', 1402854719, 1827),
(1346, 'files/favicon.ico', 1402854718, 1406),
(1347, 'files/pngfix.js', 1402854718, 8925),
(1348, 'files/scripts.js', 1402854719, 21142),
(1349, 'files/index.html', 1402854718, 159),
(1350, 'img.php', 1402854643, 798),
(1351, 'profile', 0, 0),
(1352, 'profile/profile_ru.php', 1402854737, 4398),
(1353, 'profile/profile.php', 1402854737, 4050),
(1354, 'profile/index.php', 1402854737, 226),
(1355, 'template.php', 1402854644, 4716),
(1356, 'rss.xml', 1402854643, 1691),
(1357, 'enter', 0, 0),
(1358, 'enter/index.php', 1402854718, 222),
(1359, 'enter/enter.php', 1402854718, 9723),
(1360, 'enter/enter_ru.php', 1402854718, 9543);

-- --------------------------------------------------------

--
-- Структура таблицы `blacklist_ip`
--

CREATE TABLE IF NOT EXISTS `blacklist_ip` (
  `id` int(1) NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `comment` varchar(150) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `id` int(50) NOT NULL,
  `ip` char(15) NOT NULL DEFAULT '',
  `sid` char(32) NOT NULL DEFAULT '',
  `code` char(5) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `captcha`
--

INSERT INTO `captcha` (`id`, `ip`, `sid`, `code`) VALUES
(28, '31.128.180.140', '7842a8473b0eca3500fb0f307167bf7a', 'Ca5K7'),
(29, '85.192.186.33', '44f779b1fd8263c5ffeace899654df7f', '7Qmz3'),
(30, '31.128.180.140', 'c0f7f879b988a220d6ec174c860d7a76', 'uKG49'),
(31, '83.149.8.45', '0cd977b7e5e27139dfb0894c79930786', '3NRt8'),
(33, '193.41.77.87', 'cfb4f3a37ca774a0e54058b011ee55dd', '8854U'),
(34, '31.128.180.140', '75e608f8f46972e71b50d31a881986f2', '636fX'),
(40, '31.128.180.140', '7eef3178d35fb28d0edc6b6fad440c8d', 'Rx8YK'),
(41, '31.128.180.140', 'e6c496cd4fb5cbe02d97d07d7635f2f1', '97LHS'),
(44, '31.128.180.140', 'b7205c70fe0bd91cc47c575fd79898d9', 'zVvSQ'),
(45, '31.128.180.140', 'ef99f60dca0c6fd5ad8115fb8a915a5e', 'ybC8M');

-- --------------------------------------------------------

--
-- Структура таблицы `deposits`
--

CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(1) NOT NULL,
  `username` char(30) NOT NULL DEFAULT '',
  `user_id` int(1) NOT NULL DEFAULT '0',
  `date` int(1) NOT NULL DEFAULT '0',
  `plan` smallint(1) NOT NULL DEFAULT '0',
  `sum` decimal(10,2) NOT NULL DEFAULT '0.00',
  `paysys` smallint(1) NOT NULL DEFAULT '0',
  `status` smallint(1) NOT NULL DEFAULT '0',
  `count` int(1) NOT NULL DEFAULT '0',
  `lastdate` int(10) NOT NULL DEFAULT '0',
  `nextdate` int(10) NOT NULL DEFAULT '0',
  `reinvest` decimal(5,2) NOT NULL DEFAULT '0.00',
  `bot` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `enter`
--

CREATE TABLE IF NOT EXISTS `enter` (
  `id` int(5) NOT NULL,
  `login` char(20) NOT NULL DEFAULT '',
  `sum` decimal(9,2) NOT NULL DEFAULT '0.00',
  `date` int(10) NOT NULL DEFAULT '0',
  `status` smallint(1) NOT NULL DEFAULT '0',
  `purse` char(50) NOT NULL DEFAULT '',
  `service` char(50) NOT NULL DEFAULT '',
  `paysys` char(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `enter`
--

INSERT INTO `enter` (`id`, `login`, `sum`, `date`, `status`, `purse`, `service`, `paysys`) VALUES
(1, 'admin', '10.00', 1403700108, 1, '', 'bal', 'QIWI');

-- --------------------------------------------------------

--
-- Структура таблицы `geoip_db`
--

CREATE TABLE IF NOT EXISTS `geoip_db` (
  `start` bigint(10) unsigned NOT NULL,
  `end` bigint(10) unsigned NOT NULL,
  `cc` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `logip`
--

CREATE TABLE IF NOT EXISTS `logip` (
  `id` int(50) NOT NULL,
  `user_id` int(5) NOT NULL DEFAULT '0',
  `date` int(10) NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `logip`
--

INSERT INTO `logip` (`id`, `user_id`, `date`, `ip`) VALUES
(1, 1, 1402866985, '31.128.180.140'),
(2, 1, 1402867325, '31.128.180.140'),
(3, 1, 1402867734, '31.128.180.140'),
(4, 1, 1402868364, '31.128.180.140'),
(5, 1, 1402868546, '31.128.180.140'),
(6, 1, 1402868965, '31.128.180.140'),
(7, 1, 1402869212, '31.128.180.140'),
(8, 1, 1402869267, '31.128.180.140'),
(9, 1, 1402901057, '31.128.180.140'),
(10, 1, 1402911300, '31.128.180.140'),
(11, 1, 1402936207, '83.149.9.158'),
(12, 1, 1402950304, '193.41.77.87'),
(13, 1, 1403012605, '185.25.19.64'),
(14, 1, 1403013728, '31.128.180.140'),
(15, 1, 1403013789, '193.41.77.87'),
(16, 1, 1403338274, '31.128.180.140'),
(17, 1, 1403465342, '31.128.180.140'),
(18, 1, 1403700045, '31.128.180.140'),
(19, 1, 1403795158, '31.128.180.140'),
(20, 1, 1403796998, '31.128.180.140'),
(21, 1, 1403845950, '31.128.180.140'),
(22, 1, 1403848393, '31.128.180.140'),
(23, 1, 1403848489, '31.128.180.140'),
(24, 1, 1403850125, '31.128.180.140'),
(25, 1, 1403850361, '31.128.180.140'),
(26, 1, 1403850627, '31.128.180.140'),
(27, 1, 1403852123, '31.128.180.140'),
(28, 1, 1403879785, '31.128.180.140'),
(29, 1, 1403883141, '31.128.180.140'),
(30, 1, 1403885237, '31.128.180.140'),
(31, 1, 1435859070, '31.128.180.140');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(1) NOT NULL,
  `subject` varchar(100) NOT NULL DEFAULT '',
  `msg` text NOT NULL,
  `keywords` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `subject_en` varchar(100) NOT NULL DEFAULT '',
  `msg_en` text NOT NULL,
  `keywords_en` varchar(250) NOT NULL DEFAULT '',
  `description_en` varchar(250) NOT NULL DEFAULT '',
  `date` char(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `output`
--

CREATE TABLE IF NOT EXISTS `output` (
  `id` int(5) NOT NULL,
  `login` char(30) NOT NULL DEFAULT '',
  `sum` decimal(10,2) NOT NULL DEFAULT '0.00',
  `purse` char(25) NOT NULL DEFAULT '',
  `paysys` smallint(1) NOT NULL DEFAULT '0',
  `date` int(10) NOT NULL DEFAULT '0',
  `status` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `output`
--

INSERT INTO `output` (`id`, `login`, `sum`, `purse`, `paysys`, `date`, `status`) VALUES
(1, 'admin', '10.00', 'P8598568', 2, 1403020800, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` smallint(1) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `keywords` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `title_en` varchar(50) NOT NULL DEFAULT '',
  `keywords_en` varchar(250) NOT NULL DEFAULT '',
  `description_en` varchar(250) NOT NULL DEFAULT '',
  `body_en` text NOT NULL,
  `path` varchar(20) NOT NULL DEFAULT '',
  `type` smallint(1) NOT NULL DEFAULT '0',
  `part` smallint(1) NOT NULL DEFAULT '0',
  `view` smallint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `keywords`, `description`, `body`, `title_en`, `keywords_en`, `description_en`, `body_en`, `path`, `type`, `part`, `view`) VALUES
(1, 'Главная страница', '', '', '', 'Welcome', '', '', '', '', 0, 0, 1),
(2, 'Авторизация', '', '', '', 'Login', '', '', '', 'login', 2, 0, 1),
(3, 'Регистрация', '', '', '', 'Registration', '', '', '', 'registration', 2, 2, 1),
(4, 'Восстановление пароля', '', '', '', 'Forgot your password?', '', '', '', 'reminder', 2, 2, 1),
(5, 'Профиль', '', '', '', 'Profile', '', '', '', 'profile', 2, 0, 1),
(6, 'Пополнение баланса', '', '', '', 'Add money', '', '', '', 'enter', 2, 5, 1),
(7, 'Вывод средств', '', '', '', 'Withdraw', '', '', '', 'withdrawal', 2, 5, 1),
(8, 'Новости', '', '', '', 'News', '', '', '', 'news', 2, 0, 1),
(9, 'Контакты', '', '', '', 'Contact us', '', '', '', 'contacts', 0, 0, 1),
(10, 'Правила проекта', '', '', '', 'Rules', '', '', '', 'law', 1, 0, 1),
(11, 'Помощь', '', '', '', 'Help', '', '', '', 'help', 1, 0, 1),
(12, 'Партнерская программа', '', '', '', 'Your referrals', '', '', '', 'ref', 0, 5, 1),
(13, 'Депозиты', '', '', '', 'Deposits', '', '', '', 'deposit', 2, 5, 1),
(14, 'Статистика', '', '', '', 'History', '', '', '', 'stat', 2, 5, 1),
(15, 'Ваши депозиты', '', '', '', 'Your deposits', '', '', '', 'deposits', 2, 5, 1),
(16, 'О нас', '', '', '', 'About us', '', '', '', 'about', 1, 0, 1),
(17, 'FAQ', '', '', '', 'FAQ', '', '', '', 'faq', 1, 0, 1),
(18, 'Отзывы', '', '', '', 'Reviews', '', '', '', 'answers', 2, 0, 1),
(19, 'Рейтинги', '', '', '', 'Our rating', '', '', '', 'top', 1, 0, 1),
(20, 'Баннера', '', '', '', 'Banners', '', '', '', 'banners', 1, 0, 1),
(21, 'Перевод средств другому пользователю', '', '', '', 'Transfer of funds to another user', '', '', '', 'transfer', 1, 0, 1),
(22, 'Инвестиционная программа', '', '', '', '', '', '', '', 'plans', 1, 0, 1),
(23, 'Договор публичной оферты', '', '', '', '', '', '', '', 'rules', 1, 0, 1),
(24, 'РЕГЛАМЕНТ ПРОВЕДЕНИЯ ТРАНЗАКЦИЙ', '', '', '', '', '', '', '', 'reglament', 1, 0, 1),
(25, 'Политика конфиденциальности', '', '', '', '', '', '', '', 'privacypolicy', 1, 0, 1),
(26, 'Партнерская программа', '', '', '', '', '', '', '', 'partners', 1, 0, 1),
(27, 'ZEPPELIN CARS – аренда элитных автомобилей', '', '', '', '', '', '', '', 'order', 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `paysystems`
--

CREATE TABLE IF NOT EXISTS `paysystems` (
  `id` smallint(1) NOT NULL,
  `name` char(20) NOT NULL DEFAULT '',
  `purse` char(50) NOT NULL DEFAULT '',
  `abr` char(10) NOT NULL DEFAULT '',
  `percent` decimal(5,2) NOT NULL DEFAULT '0.00',
  `comment` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `paysystems`
--

INSERT INTO `paysystems` (`id`, `name`, `purse`, `abr`, `percent`, `comment`) VALUES
(1, 'PerfectMoney', '', 'PM', '1.00', ''),
(2, 'PAYEER.com', '', 'PE', '1.00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `id` smallint(1) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `minsum` decimal(10,2) NOT NULL DEFAULT '0.00',
  `maxsum` decimal(10,2) NOT NULL DEFAULT '0.00',
  `percent` decimal(5,2) NOT NULL DEFAULT '0.00',
  `bonusdeposit` decimal(5,2) NOT NULL DEFAULT '0.00',
  `bonusbalance` decimal(5,2) NOT NULL DEFAULT '0.00',
  `period` smallint(1) NOT NULL DEFAULT '0',
  `days` smallint(1) NOT NULL DEFAULT '0',
  `back` smallint(1) NOT NULL DEFAULT '1',
  `reinvest` smallint(1) NOT NULL DEFAULT '0',
  `weekend` smallint(1) NOT NULL DEFAULT '0',
  `status` smallint(1) NOT NULL DEFAULT '0',
  `close` smallint(1) NOT NULL DEFAULT '0',
  `close_percent` decimal(5,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `plans`
--

INSERT INTO `plans` (`id`, `name`, `minsum`, `maxsum`, `percent`, `bonusdeposit`, `bonusbalance`, `period`, `days`, `back`, `reinvest`, `weekend`, `status`, `close`, `close_percent`) VALUES
(1, 'lrdpro', '1.00', '10.00', '1.00', '0.00', '0.00', 1, 1, 0, 0, 0, 0, 0, '0.00'),
(2, 'vip1', '0.10', '10.00', '10.00', '0.00', '0.00', 1, 10, 0, 0, 0, 0, 0, '0.00'),
(3, 'vip2', '0.10', '10.00', '10.00', '0.00', '0.00', 1, 1, 0, 0, 0, 0, 0, '0.00');

-- --------------------------------------------------------

--
-- Структура таблицы `reflevels`
--

CREATE TABLE IF NOT EXISTS `reflevels` (
  `id` smallint(1) NOT NULL DEFAULT '0',
  `sum` decimal(5,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `reflevels`
--

INSERT INTO `reflevels` (`id`, `sum`) VALUES
(1, '10.00');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` smallint(1) NOT NULL,
  `cfgname` varchar(50) NOT NULL DEFAULT '',
  `data` varchar(255) NOT NULL DEFAULT '',
  `description` char(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `cfgname`, `data`, `description`) VALUES
(1, 'adminmail', 'fff@mail.ru', 'E-mail администратора'),
(2, 'cfgLiberty', '', 'LibertyReserve кошелек'),
(3, 'cfgPerfect', 'U3580269', 'PerfectMoney кошелек'),
(4, 'cfgPAYEE_NAME', '', 'PAYEE_NAME в PM и LR для приема средств'),
(5, 'cfgLRsecword', '', 'Security Word LibertyReserve'),
(6, 'ALTERNATE_PHRASE_HASH', '', 'MD5 ALTERNATE_PHRASE_HASH для PM'),
(7, 'cfgAutoPay', 'off', 'Автовыплаты (on - включены; off - вЫключены)'),
(8, 'cfgPMID', '', 'ID PerfectMoney'),
(9, 'cfgPMpass', '', 'Пароль от PerfectMoney'),
(10, 'cfgLRkey', '', 'Ключ от LibertyReserve'),
(11, 'cfgMinOut', '1.00', 'Минимальная сумма на вывод'),
(12, 'cfgPercentOut', '0', 'Процент, который высчитывает система при выводе'),
(13, 'cfgLang', 'ru', 'Язык по умолчанию'),
(14, 'datestart', '1402854862', 'Дата старта проекта'),
(15, 'fakeusers', '0', 'Накрутка фэйковых пользователей'),
(16, 'fakeactiveusers', '0', 'Накрутка фэйковых активных пользователей'),
(17, 'fakeonline', '0', 'Накрутка пользователей онлайн'),
(18, 'fakedeposits', '0', 'Накрутка суммы депозитов'),
(19, 'fakewithdraws', '0', 'Накрутка суммы вывода'),
(20, 'autopercent', 'on', 'Вкл/Выкл начисление процентов'),
(21, 'cfgOutAdminPercent', '0.00', 'Процент перевода на админский кошелек'),
(22, 'AdminPMpurse', '', 'PerfectMoney админский счет'),
(23, 'AdminLRpurse', '', 'LibertyReserve'),
(24, 'cfgReInv', 'off', 'Реинвестиции (on - включены; off - вЫключены)'),
(25, 'cfgSSL', 'off', 'Работа по https:// (on - включено; off - вЫключено'),
(26, 'cfgMailConf', 'off', 'Подтверждение регистрации по e-mail (on - включено'),
(27, 'cfgTrans', 'off', 'Включение перевода денег между пользователями (on'),
(28, 'cfgTransPercent', '0', 'Процент от суммы перевода системе'),
(29, 'cfgInstant', 'off', 'Включение выплат инстантом (on - включено; off - в'),
(30, 'cfgOnOff', 'on', 'Включение/выключение сайта (on - включено; off - в'),
(31, 'cfgMaxOut', '10000', 'Максимум на вывод средств'),
(32, 'cfgCountOut', '1', 'Кол-во раз вывода средств в сутки одним пользовате'),
(33, 'cfgPEsid', '3580269', 'ID магазина в системе PAYEER'),
(34, 'cfgPEkey', 'kdheoe', 'Секретный ключ в системе PAYEER'),
(35, 'cfgAutoPayPE', 'off', 'Автовыплаты PAYEER (on - включены; off - вЫключены'),
(36, 'cfgPEAcc', 'P8596534', 'Номер счета PAYEER'),
(37, 'cfgPEidAPI', '', 'Номер магазина в API в системе Payeer'),
(38, 'cfgPEapiKey', '', 'Секретный ключ в API в системе Payeer');

-- --------------------------------------------------------

--
-- Структура таблицы `stat`
--

CREATE TABLE IF NOT EXISTS `stat` (
  `id` int(10) NOT NULL,
  `user_id` int(1) NOT NULL DEFAULT '0',
  `date` int(1) NOT NULL DEFAULT '0',
  `plan` smallint(1) NOT NULL DEFAULT '0',
  `sum` decimal(10,2) NOT NULL DEFAULT '0.00',
  `paysys` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `stat`
--

INSERT INTO `stat` (`id`, `user_id`, `date`, `plan`, `sum`, `paysys`) VALUES
(1, 1, 1403884559, 3, '1.00', 0),
(2, 1, 1403884560, 3, '0.00', 0),
(3, 1, 1403884571, 3, '0.00', 0),
(4, 1, 1403884630, 3, '1.00', 0),
(5, 1, 1403884631, 3, '0.00', 0),
(6, 1, 1403884671, 3, '0.00', 0),
(7, 1, 1403884675, 3, '1.00', 0),
(8, 1, 1403884675, 3, '0.00', 0),
(9, 1, 1403884696, 3, '1.00', 0),
(10, 1, 1403884696, 3, '0.00', 0),
(11, 1, 1403885000, 3, '0.00', 0),
(12, 1, 1403885004, 3, '1.00', 0),
(13, 1, 1403885005, 3, '0.00', 0),
(14, 1, 1403885059, 10, '8.00', 0),
(15, 1, 1403969569, 3, '1.00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(5) NOT NULL,
  `to` char(30) NOT NULL DEFAULT '',
  `from` char(30) NOT NULL DEFAULT '',
  `sum` decimal(9,2) NOT NULL DEFAULT '0.00',
  `date` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(1) NOT NULL,
  `login` char(20) NOT NULL DEFAULT '',
  `pass` char(32) NOT NULL DEFAULT '',
  `mail` char(30) NOT NULL DEFAULT '',
  `reg_time` int(10) NOT NULL DEFAULT '0',
  `go_time` int(10) NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `status` smallint(1) NOT NULL DEFAULT '0',
  `comment` char(150) NOT NULL DEFAULT '',
  `pm_balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `lr_balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ref` int(1) NOT NULL DEFAULT '0',
  `ref_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `reftop` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ref_percent` decimal(10,2) NOT NULL DEFAULT '0.00',
  `lr` char(10) NOT NULL DEFAULT '',
  `pm` char(10) NOT NULL DEFAULT '',
  `pe` char(50) NOT NULL DEFAULT '',
  `icq` char(20) DEFAULT NULL,
  `skype` char(50) DEFAULT NULL,
  `active` smallint(1) NOT NULL DEFAULT '0',
  `bot` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `mail`, `reg_time`, `go_time`, `ip`, `status`, `comment`, `pm_balance`, `lr_balance`, `ref`, `ref_money`, `reftop`, `ref_percent`, `lr`, `pm`, `pe`, `icq`, `skype`, `active`, `bot`) VALUES
(1, 'admin', '944c8b9674cc7897bd8fd40627aedbd7', 'fff@mail.ru', 1402854862, 1435865215, '31.128.180.140', 1, '', '89.00', '0.00', 0, '0.00', '0.00', '0.00', '', 'U8568958', 'P8598568', '', '', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `answers_poll`
--
ALTER TABLE `answers_poll`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `antivirus`
--
ALTER TABLE `antivirus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blacklist_ip`
--
ALTER TABLE `blacklist_ip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`id`), ADD KEY `ip` (`ip`), ADD KEY `sid` (`sid`);

--
-- Индексы таблицы `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `enter`
--
ALTER TABLE `enter`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `geoip_db`
--
ALTER TABLE `geoip_db`
  ADD KEY `start` (`start`), ADD KEY `end` (`end`);

--
-- Индексы таблицы `logip`
--
ALTER TABLE `logip`
  ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `paysystems`
--
ALTER TABLE `paysystems`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reflevels`
--
ALTER TABLE `reflevels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `answers_poll`
--
ALTER TABLE `answers_poll`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `antivirus`
--
ALTER TABLE `antivirus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1361;
--
-- AUTO_INCREMENT для таблицы `blacklist_ip`
--
ALTER TABLE `blacklist_ip`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `captcha`
--
ALTER TABLE `captcha`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `enter`
--
ALTER TABLE `enter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `logip`
--
ALTER TABLE `logip`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `output`
--
ALTER TABLE `output`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` smallint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `paysystems`
--
ALTER TABLE `paysystems`
  MODIFY `id` smallint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `plans`
--
ALTER TABLE `plans`
  MODIFY `id` smallint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` smallint(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT для таблицы `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
