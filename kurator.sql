-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 08 2015 г., 00:34
-- Версия сервера: 5.5.46-0+deb8u1
-- Версия PHP: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kurator`
--
CREATE DATABASE IF NOT EXISTS `kurator` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kurator`;

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE IF NOT EXISTS `address` (
`id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `region_id` int(40) NOT NULL,
  `city_id` int(11) NOT NULL,
  `street` varchar(40) NOT NULL,
  `house` varchar(5) NOT NULL,
  `room` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `address`
--

REPLACE INTO `address` (`id`, `country_id`, `region_id`, `city_id`, `street`, `house`, `room`) VALUES
(1, 1, 1, 1, 'Сомпа', '13', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `base`
--

CREATE TABLE IF NOT EXISTS `base` (
`id` int(11) NOT NULL,
  `base` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `base`
--

REPLACE INTO `base` (`id`, `base`) VALUES
(1, 'основное'),
(2, 'среднее');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

REPLACE INTO `city` (`id`, `city`) VALUES
(1, 'Johvi');

-- --------------------------------------------------------

--
-- Структура таблицы `countriy`
--

CREATE TABLE IF NOT EXISTS `countriy` (
`id` int(11) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countriy`
--

REPLACE INTO `countriy` (`id`, `country`) VALUES
(1, 'Estonia');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `groupname` varchar(40) NOT NULL,
  `begin_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `begin_month` int(11) NOT NULL,
  `end_month` int(11) NOT NULL,
  `base` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

REPLACE INTO `groups` (`id`, `code`, `groupname`, `begin_year`, `end_year`, `begin_month`, `end_month`, `base`) VALUES
(5, '2KTVR', 'Tarkvaraarendaja', 2015, 2018, 9, 6, 1),
(6, '1KTVR', 'Tarkvaraarendaja', 2015, 2017, 9, 6, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `kurator`
--

CREATE TABLE IF NOT EXISTS `kurator` (
`id` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kurator`
--

REPLACE INTO `kurator` (`id`, `id_teacher`, `id_group`) VALUES
(4, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress_id` int(11) NOT NULL,
  `info` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
`id` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phone`
--

REPLACE INTO `phone` (`id`, `phone`) VALUES
(1, '565509987'),
(2, '56509987');

-- --------------------------------------------------------

--
-- Структура таблицы `phone_owner`
--

CREATE TABLE IF NOT EXISTS `phone_owner` (
`id` int(11) NOT NULL,
  `phone_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `parents_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`id` int(11) NOT NULL,
  `region` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region`
--

REPLACE INTO `region` (`id`, `region`) VALUES
(1, 'Ida-Viruvaa');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL,
  `register` int(11) NOT NULL,
  `personal_code` varchar(11) NOT NULL,
  `family` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address_id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

REPLACE INTO `students` (`id`, `register`, `personal_code`, `family`, `name`, `address_id`, `id_group`, `info`) VALUES
(3, 1, '12121212121', 'Петров', 'Петр', 1, 5, 'текст');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`id` int(11) NOT NULL,
  `family` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher`
--

REPLACE INTO `teacher` (`id`, `family`, `name`) VALUES
(3, 'Melnikov', 'Juri');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
 ADD PRIMARY KEY (`id`), ADD KEY `city_id` (`city_id`), ADD KEY `country_id` (`country_id`), ADD KEY `region_id` (`region_id`);

--
-- Индексы таблицы `base`
--
ALTER TABLE `base`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countriy`
--
ALTER TABLE `countriy`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD KEY `groupname` (`groupname`), ADD KEY `base` (`base`);

--
-- Индексы таблицы `kurator`
--
ALTER TABLE `kurator`
 ADD PRIMARY KEY (`id`), ADD KEY `id_teacher` (`id_teacher`), ADD KEY `id_group` (`id_group`);

--
-- Индексы таблицы `parents`
--
ALTER TABLE `parents`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`), ADD KEY `adress_id` (`adress_id`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `phone_owner`
--
ALTER TABLE `phone_owner`
 ADD PRIMARY KEY (`id`), ADD KEY `parents_id` (`parents_id`), ADD KEY `teacher_id` (`teacher_id`), ADD KEY `student_id` (`student_id`), ADD KEY `phone_id` (`phone_id`);

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_code` (`personal_code`), ADD KEY `groupname` (`id_group`), ADD KEY `address_id` (`address_id`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `base`
--
ALTER TABLE `base`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `countriy`
--
ALTER TABLE `countriy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `kurator`
--
ALTER TABLE `kurator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `parents`
--
ALTER TABLE `parents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `phone_owner`
--
ALTER TABLE `phone_owner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `address`
--
ALTER TABLE `address`
ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countriy` (`id`),
ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`),
ADD CONSTRAINT `address_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`base`) REFERENCES `base` (`id`);

--
-- Ограничения внешнего ключа таблицы `kurator`
--
ALTER TABLE `kurator`
ADD CONSTRAINT `kurator_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`),
ADD CONSTRAINT `kurator_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id`);

--
-- Ограничения внешнего ключа таблицы `parents`
--
ALTER TABLE `parents`
ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Ограничения внешнего ключа таблицы `phone_owner`
--
ALTER TABLE `phone_owner`
ADD CONSTRAINT `phone_owner_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`),
ADD CONSTRAINT `phone_owner_ibfk_2` FOREIGN KEY (`parents_id`) REFERENCES `parents` (`id`),
ADD CONSTRAINT `phone_owner_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
ADD CONSTRAINT `phone_owner_ibfk_4` FOREIGN KEY (`phone_id`) REFERENCES `phone` (`id`);

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
