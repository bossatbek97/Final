-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 23 2016 г., 07:52
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dbtest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ernar`
--

CREATE TABLE `ernar` (
  `user_id` int(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ernar`
--

INSERT INTO `ernar` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@mail.ru', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`) VALUES
(2, 'Yelaman', 'bossatbek97@mail.ru', '202cb962ac59075b964b07152d234b70', 0),
(3, '1', '1@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(4, 'yernar', 'yernar.bossatbek@is.sdu.edu.kz', '202cb962ac59075b964b07152d234b70', 0),
(15, 'admin', 'admin@mail.ru', 'admin', 1),
(16, '2', '2@mail.ru', 'c81e728d9d4c2f636f067f89cc14862c', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ernar`
--
ALTER TABLE `ernar`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ernar`
--
ALTER TABLE `ernar`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
