-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 25 2019 г., 18:33
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attendance`
--

CREATE TABLE `attendance` (
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attendance`
--

INSERT INTO `attendance` (`user_id`, `date`, `value`) VALUES
(1, '2019-11-01', 'Не был(а)'),
(1, '2019-11-02', 'Был(а)'),
(1, '2019-11-06', 'Был(а)'),
(1, '2019-11-08', 'Не был(а)'),
(1, '2019-11-11', 'Был(а)'),
(2, '2019-11-01', 'Был(а)'),
(2, '2019-11-06', 'Был(а)'),
(3, '2019-11-01', 'Был(а)'),
(3, '2019-11-04', 'Был(а)'),
(4, '2019-11-01', 'Был(а)'),
(5, '2019-11-01', 'Был(а)'),
(6, '2019-11-01', 'Был(а)'),
(6, '2019-11-11', 'Был(а)');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('adminRole', '3', 1574678008),
('studentRole', '1', 1574677995),
('teacherRole', '2', 1574678003);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, NULL, NULL, NULL, 1574677671, 1574677671),
('/attendance/*', 2, NULL, NULL, NULL, 1574677751, 1574677751),
('/attendance/index', 2, NULL, NULL, NULL, 1574677717, 1574677717),
('/attendance/show', 2, NULL, NULL, NULL, 1574677741, 1574677741),
('/attendance/upd', 2, NULL, NULL, NULL, 1574677737, 1574677737),
('/attendance/update', 2, NULL, NULL, NULL, 1574677731, 1574677731),
('/rbac/*', 2, NULL, NULL, NULL, 1574677686, 1574677686),
('adminAccess', 2, NULL, NULL, NULL, 1574677877, 1574678046),
('adminRole', 1, NULL, NULL, NULL, 1574677944, 1574678066),
('AttendaceReadAccess', 2, NULL, NULL, NULL, 1574677821, 1574678052),
('AttendanceUpdateAccess', 2, NULL, NULL, NULL, 1574677850, 1574678059),
('studentRole', 1, NULL, NULL, NULL, 1574677982, 1574677982),
('teacherRole', 1, NULL, NULL, NULL, 1574677956, 1574677956);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('adminAccess', '/admin/*'),
('AttendanceUpdateAccess', '/attendance/*'),
('AttendaceReadAccess', '/attendance/index'),
('AttendaceReadAccess', '/attendance/show'),
('adminAccess', '/rbac/*'),
('adminRole', 'adminAccess'),
('studentRole', 'AttendaceReadAccess'),
('adminAccess', 'AttendanceUpdateAccess'),
('teacherRole', 'AttendanceUpdateAccess');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `groups_users`
--

CREATE TABLE `groups_users` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1574673828),
('m140506_102106_rbac_init', 1574677121),
('m140602_111327_create_menu_table', 1574677115),
('m160312_050000_create_user', 1574677115),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1574677121),
('m180523_151638_rbac_updates_indexes_without_prefix', 1574677121),
('m191125_092225_create_users_table', 1574673829),
('m191125_092229_create_groups_table', 1574673829),
('m191125_092236_create_groups_users_table', 1574673829),
('m191125_092241_create_attendance_table', 1574673829);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'student', 'WSnVKDiWsRCmUG2Vz_gsf3q_ByimRJDY', '$2y$13$WM2436JG6iWL1gXEcS.z1e86th.UOZ6sIHjQtcCgfGRJW2zvjcNVC', NULL, 's@r.u', 10, 1574677577, 1574677577),
(2, 'teacher', 'qwW0qfvDbMJPj7d9AajzskbmTiC6DjGr', '$2y$13$rdOhfR/JT/PY2r5d8OPY3egPJkpEBsGQNIPKR9bfmfogyb/nwGYii', NULL, 'sq@r.u', 10, 1574677618, 1574677618),
(3, 'admin', 'QzD3eOSIOXl0bx7M1pScRX4VkVxmmW9E', '$2y$13$7JNi2ljjTauAogjEfnvdQeaUHDuyvmNVHbhiW5XCbJdY/adkb2VUa', NULL, 's@r.ru', 10, 1574677632, 1574677632);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `status`) VALUES
(1, 'Гарри', 1),
(2, 'Поттер', 1),
(3, 'Питер', 1),
(4, 'Паркер', 1),
(5, 'Крутой', 1),
(6, 'Мужик', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`user_id`,`date`),
  ADD KEY `idx-attendance-user_id` (`user_id`),
  ADD KEY `idx-attendance-date` (`date`);

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Индексы таблицы `groups_users`
--
ALTER TABLE `groups_users`
  ADD PRIMARY KEY (`user_id`,`group_id`),
  ADD KEY `idx-groups_users-user_id` (`user_id`),
  ADD KEY `idx-groups_users-group_id` (`group_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk-attendance-user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups_users`
--
ALTER TABLE `groups_users`
  ADD CONSTRAINT `fk-groups_users-group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-groups_users-user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
