-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 21 2016 г., 08:02
-- Версия сервера: 5.6.26
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id_city` int(128) NOT NULL,
  `id_country` int(128) NOT NULL,
  `city_name` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id_city`, `id_country`, `city_name`) VALUES
(1, 1, 'Киев'),
(2, 1, 'Харьков'),
(3, 1, 'Львов'),
(4, 3, 'Стамбул'),
(5, 3, 'Анкара'),
(6, 2, 'Москва'),
(7, 2, 'Саратов');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id_country` int(128) NOT NULL,
  `country_name` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id_country`, `country_name`) VALUES
(1, 'Украина'),
(2, 'Россия'),
(3, 'Турция');

-- --------------------------------------------------------

--
-- Структура таблицы `invites`
--

CREATE TABLE IF NOT EXISTS `invites` (
  `invite` varchar(128) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_status` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `invites`
--

INSERT INTO `invites` (`invite`, `status`, `date_status`) VALUES
('1a100d2c0dab19c4430e7d73762b3423', 0, '2016-06-20'),
('52c69e3a57331081823331c4e69d3f2e', 0, '0000-00-00'),
('5b1b68a9abf4d2cd155c81a9225fd158', 0, '0000-00-00'),
('6d071901727aec1ba6d8e2497ef5b709', 0, '0000-00-00'),
('73882ab1fa529d7273da0db6b49cc4f3', 0, '0000-00-00'),
('96e79218965eb72c92a549dd5a330112', 0, '2016-06-20'),
('a28f05f5f45fe2d8a900736c8935fe44', 0, '0000-00-00'),
('e3ceb5881a0a1fdaad01296d7554868d', 0, '0000-00-00'),
('f63f4fbc9f8c85d409f2f59f2b9e12d5', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(128) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` char(15) CHARACTER SET utf8 NOT NULL,
  `phone` char(20) NOT NULL,
  `id_country` int(64) NOT NULL,
  `id_city` int(64) NOT NULL,
  `invite` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `phone`, `id_country`, `id_city`, `invite`) VALUES
(23, 'dfdfdff', 'f63f4fbc9f8c85d', '(777) 777-77-77', 1, 2, 'f63f4fbc9f8c'),
(24, 'dfdddd', 'f63f4fbc9f8c85d', '(777) 777-77-77', 1, 2, 'f63f4fbc9f8c'),
(25, 'dffffff', 'f63f4fbc9f8c85d', '(777) 777-77-77', 1, 1, 'f63f4fbc9f8c'),
(26, 'dfffff', 'f63f4fbc9f8c85d', '(777) 777-77-77', 1, 2, 'f63f4fbc9f8c'),
(27, 'fhhhhh', 'f63f4fbc9f8c85d', '(777) 777-77-77', 1, 2, 'e3ceb5881a0a');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id_country`);

--
-- Индексы таблицы `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`invite`),
  ADD UNIQUE KEY `invite` (`invite`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id_country` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
