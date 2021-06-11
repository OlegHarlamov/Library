-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2021 г., 10:04
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `libraryy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(64) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `author` varchar(64) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `content`, `author`, `image`) VALUES
(22, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nemo vitae ab expedita quas facere, cum, illo magnam rerum consequatur debitis modi maiores temporibus vel suscipit facilis doloremque aspernatur adipisci nobis.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nemo vitae ab expedita quas facere, cum, illo magnam rerum consequatur debitis modi maiores temporibus vel suscipit facilis doloremque aspernatur adipisci nobis.', 'Lorem ipsum', 'uploads/photo.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `profileimage` varchar(60) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `permission` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `profileimage`, `first_name`, `last_name`, `permission`) VALUES
(2, '123', '$2y$10$JDBCvCiy3BVfEK0Lg7nlkuR.VjWKwOannDn8eagf.nbh0TFpleHye', '', '123', '123', 0),
(3, 'admin', '$2y$10$4Ei4OJ/ISh4pwqpLnwqoA.rlBUR9x/gqVPD7Ziy2ViT8QdorBiVU.', '', 'ferds', 'wasd', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
