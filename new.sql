-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2019 г., 10:22
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
-- База данных: `new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attendance`
--

CREATE TABLE `attendance` (
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` varchar(255) DEFAULT 'Не задано',
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attendance`
--

INSERT INTO `attendance` (`student_id`, `subject_id`, `date`, `value`, `teacher_id`) VALUES
(1, 1, '2019-12-06', 'Был(а)', 1),
(1, 3, '2019-09-03', 'Был(а)', 1),
(2, 1, '2019-12-06', 'Был(а)', 1),
(3, 1, '2019-12-06', 'Был(а)', 3),
(3, 3, '2019-12-06', 'Не был(а)', 1),
(3, 4, '2019-12-06', 'Был(а)', 2),
(4, 1, '2019-12-03', 'Был(а)', 3),
(4, 3, '2019-12-06', 'Был(а)', 1),
(4, 4, '2019-12-05', 'Не был(а)', 2),
(4, 6, '2019-12-06', 'Был(а)', 4);

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
('teacherRole', '1', 1575833831),
('teacherRole', '2', 1575834975),
('teacherRole', '3', 1575834982),
('teacherRole', '4', 1575834987),
('userRole', '5', 1575839754),
('userRole', '6', 1575839760),
('userRole', '7', 1575839766),
('userRole', '8', 1575839777),
('userRole', '9', 1575839781);

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
('/attendance/*', 2, NULL, NULL, NULL, 1575833703, 1575833703),
('/teacher/*', 2, NULL, NULL, NULL, 1575833697, 1575833697),
('teacherAccess', 2, NULL, NULL, NULL, 1575833795, 1575833795),
('teacherRole', 1, NULL, NULL, NULL, 1575833809, 1575833809),
('userAccess', 2, NULL, NULL, NULL, 1575839730, 1575839730),
('userRole', 1, NULL, NULL, NULL, 1575839743, 1575839743);

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
('userAccess', '/attendance/*'),
('teacherAccess', '/teacher/*'),
('teacherRole', 'teacherAccess'),
('userRole', 'userAccess');

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
  `group_title` varchar(255) NOT NULL,
  `group_status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`group_id`, `group_title`, `group_status`) VALUES
(1, 'МатематикаГ', 1),
(2, 'ФизикаГ', 1),
(3, 'БиологияГ', 1);

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
('m000000_000000_base', 1575668876),
('m140506_102106_rbac_init', 1575833223),
('m140602_111327_create_menu_table', 1575833211),
('m160312_050000_create_user', 1575833211),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1575833223),
('m180523_151638_rbac_updates_indexes_without_prefix', 1575833224),
('m191205_183111_create_students_table', 1575668877),
('m191205_183150_create_groups_table', 1575668877),
('m191205_183655_create_junction_table_for_students_and_groups_tables', 1575668878),
('m191205_183813_create_teachers_table', 1575668878),
('m191205_183850_create_subjects_table', 1575668878),
('m191205_183902_create_junction_table_for_teachers_and_subjects_tables', 1575668878),
('m191206_212054_create_junction_table_for_teachers_and_groups_tables', 1575668879),
('m191206_212851_create_junction_table_for_students_and_subjects_tables', 1575668880);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_sname` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`student_id`, `student_fname`, `student_sname`, `status`, `user_id`) VALUES
(1, 'Гарри', 'Поттер', 1, 5),
(2, 'Гарри', 'неПоттер', 1, 6),
(3, 'Рон', 'Уизли', 1, 7),
(4, 'Гермиона', 'Нормальная', 1, 8),
(5, 'Неучится', 'Инактив', 0, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `students_groups`
--

CREATE TABLE `students_groups` (
  `student_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students_groups`
--

INSERT INTO `students_groups` (`student_id`, `group_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_title`) VALUES
(6, 'Биология'),
(3, 'Высшая математика'),
(1, 'Дискретная математика\r\n'),
(2, 'Мат. анализ'),
(4, 'Физика'),
(5, 'Химия');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_fname` varchar(255) NOT NULL,
  `teacher_sname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_fname`, `teacher_sname`, `user_id`) VALUES
(1, 'Джон', 'Математик', 1),
(2, 'Альберт', 'Физик', 2),
(3, 'Антон', 'Математик', 3),
(4, 'Чарли', 'Биолог', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `teachers_groups`
--

CREATE TABLE `teachers_groups` (
  `teacher_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers_groups`
--

INSERT INTO `teachers_groups` (`teacher_id`, `group_id`, `subject_id`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 1, 3),
(1, 2, 3),
(2, 2, 4),
(3, 2, 1),
(4, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `teachers_subjects`
--

CREATE TABLE `teachers_subjects` (
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers_subjects`
--

INSERT INTO `teachers_subjects` (`teacher_id`, `subject_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 3),
(4, 6);

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
(1, 'teacher1', '5PLq-g2SwlUye7Jn9uxY-uF1ylYTfMmc', '$2y$13$Goz3qy/FGDkNt53y.SefSeIrmW0DJyDvjYQGvXmgJs9n.XwRxsnGS', NULL, 'teacher@m.com', 10, 1575833641, 1575833641),
(2, 'teacher2', '7UqHSw9X00WUeyCa0Ve_-SzArsQllxMP', '$2y$13$wGaaPhnR7l1HrMJsWZiyNuWU1J/QXO/ZSGF8GWonct00JlP2bC3Zm', NULL, 'teacher2@m.com', 10, 1575834221, 1575834221),
(3, 'teacher3', 'cvH1ok-pIEe26wkLBVMubMLHD73BSQFN', '$2y$13$Lb57rI95pCm8dzdPiqzqJuhlSuFvGAQsmMEakCz1ClLykJfJK/OSO', NULL, 'teacher22@m.com', 10, 1575834240, 1575834240),
(4, 'teacher4', 'BnO9637e3W7hd0tK5wOgbocMYAZZ-E4H', '$2y$13$nbXgO1Mx3rAECBJXUmNOYu6p2hLwqem91FoEbARxc0jHOz5IT0C8S', NULL, '1teacher22@m.com', 10, 1575834252, 1575834252),
(5, 'user1', 'HtkJ9ui5I7Je0BfVgQL8kZX_bGLmzlzz', '$2y$13$SEbMjv0cDM0lD95HbRHXFu..w5LShIDdMHAk4nJHXnmgaHRqTpAda', NULL, 'user1@e.ru', 10, 1575839523, 1575839523),
(6, 'user2', '-OMHmsAfWYEwYnrbOFcoP4pDhFNvhwMD', '$2y$13$gnWEjY7c5mSjpnZ4VdXQeuuPKwHEpUUGbtfOdKH50XsehnJwn8cnm', NULL, 'user21@e.ru', 10, 1575839535, 1575839535),
(7, 'user3', 'WeaSmIqcHuvJzdkGAgB-SqQ3r7hW0RFv', '$2y$13$cneMxXSXHJ2fJRda4h4.SOcvhDCZb7f06.CFjH1i.2XeOkW1qjwbq', NULL, 'user121@e.ru', 10, 1575839546, 1575839546),
(8, 'user4', 'dvu-lwwYwF5tJqqPb97qU94-c79-bml0', '$2y$13$m/yBWyMPo/N7ueBF3McShey8aMyIlca8kVqQIBQrNvNrjuRchL./m', NULL, 'user1121@e.ru', 10, 1575839556, 1575839556),
(9, 'user5', '6yOQsxEwqDOYKDwUdF5uKeZxDcGOCU_A', '$2y$13$ek/kVyX4JcmCmITyWKR/Se2zlg.NbrVZ/6.NqlAAoa9eysX37lzF2', NULL, 'user11121@e.ru', 10, 1575839569, 1575839569);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`student_id`,`subject_id`,`date`),
  ADD KEY `idx-attendance-student_id` (`student_id`),
  ADD KEY `idx-attendance-subject_id` (`subject_id`),
  ADD KEY `idx-attendance-date` (`date`),
  ADD KEY `idx-attendance-teacher_id` (`teacher_id`);

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
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_title` (`group_title`);

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
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `students_groups`
--
ALTER TABLE `students_groups`
  ADD PRIMARY KEY (`student_id`,`group_id`),
  ADD KEY `idx-students_groups-student_id` (`student_id`),
  ADD KEY `idx-students_groups-group_id` (`group_id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_title` (`subject_title`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `teachers_groups`
--
ALTER TABLE `teachers_groups`
  ADD PRIMARY KEY (`teacher_id`,`group_id`,`subject_id`),
  ADD KEY `idx-teachers_groups-teacher_id` (`teacher_id`),
  ADD KEY `idx-teachers_groups-group_id` (`group_id`),
  ADD KEY `idx-teachers_groups-subject_id` (`subject_id`);

--
-- Индексы таблицы `teachers_subjects`
--
ALTER TABLE `teachers_subjects`
  ADD PRIMARY KEY (`teacher_id`,`subject_id`),
  ADD KEY `idx-teachers_subjects-teacher_id` (`teacher_id`),
  ADD KEY `idx-teachers_subjects-subject_id` (`subject_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk-attendance-student_id` FOREIGN KEY (`student_id`) REFERENCES `students_groups` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-attendance-subject_id` FOREIGN KEY (`subject_id`) REFERENCES `teachers_groups` (`subject_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-attendance-teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teachers_groups` (`teacher_id`) ON DELETE CASCADE;

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
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_students_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `students_groups`
--
ALTER TABLE `students_groups`
  ADD CONSTRAINT `fk-students_groups-group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-students_groups-student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `fk_teachers_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `teachers_groups`
--
ALTER TABLE `teachers_groups`
  ADD CONSTRAINT `fk-teachers_groups-group_id` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-teachers_groups-subject_id` FOREIGN KEY (`subject_id`) REFERENCES `teachers_subjects` (`subject_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk-teachers_groups-teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teachers_subjects` (`teacher_id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `teachers_subjects`
--
ALTER TABLE `teachers_subjects`
  ADD CONSTRAINT `fk-teachers_subjects-subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-teachers_subjects-teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
