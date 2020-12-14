-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Дек 14 2020 г., 13:21
-- Версия сервера: 5.7.30
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `path_small` varchar(100) NOT NULL,
  `path_big` varchar(100) NOT NULL,
  `size` int(10) NOT NULL DEFAULT '400',
  `name` varchar(100) NOT NULL,
  `count` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path_small`, `path_big`, `size`, `name`, `count`) VALUES
(1, 'small/', 'big/', 400, '1.jpg', 0),
(2, 'small/', 'big/', 400, '2.jpg', 0),
(3, 'small/', 'big/', 400, '3.jpg', 0),
(4, 'small/', 'big/', 400, '4.jpg', 0),
(5, 'small/', 'big/', 400, '5.jpg', 0),
(6, 'small/', 'big/', 400, '6.jpg', 0),
(7, 'small/', 'big/', 400, '7.jpg', 0),
(8, 'small/', 'big/', 400, '8.jpg', 0),
(9, 'small/', 'big/', 400, '9.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
