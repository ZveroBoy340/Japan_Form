-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2021 г., 17:30
-- Версия сервера: 5.7.29
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `japan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `billing`
--

INSERT INTO `billing` (`id`, `name`, `country`, `city`, `address`, `apartment`, `delivery_date`) VALUES
(185, 'fghfgh', 'Japan', 'fghfgh', 'fghfgh', 'Not filled', '2021-02-02'),
(186, 'fghfgh', 'Japan', 'fghgf', 'hfghfgh', 'Not filled', '2021-02-02'),
(187, 'rtygfhfg dfgfdg', 'Japan', 'fghfgh', 'fghfgh', 'Not filled', '2021-02-02'),
(188, 'fghfgh dfgfg', 'Japan', 'fghfgh', 'fghfgh', 'Not filled', '2021-02-02'),
(189, 'hgfh hfghfgh', 'Japan', 'hfgh', 'gfhgh', 'Not filled', '2021-02-02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
