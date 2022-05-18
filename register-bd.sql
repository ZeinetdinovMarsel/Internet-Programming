-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2022 г., 14:10
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register-bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `game`
--

CREATE TABLE `game` (
  `id` int UNSIGNED NOT NULL,
  `rightansw` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idquestion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `game`
--

INSERT INTO `game` (`id`, `rightansw`, `idquestion`) VALUES
(1, '96', 'Какое число или числа вы видите? Введите Ваш ответ без пробелов.'),
(2, '9', 'Какое число вы видите?'),
(3, '3', 'Выберите ответ'),
(4, '13', 'Какое число или числа вы видите? Введите Ваш ответ без пробелов.'),
(5, '1', 'Выберите ответ'),
(6, '5', 'Какое число вы видите?'),
(7, '9', 'Какое число вы видите?'),
(8, '136', 'Какое число или числа вы видите? Введите Ваш ответ без пробелов.'),
(9, '360', 'Какое число или числа вы видите? Введите Ваш ответ без пробелов.'),
(10, '1', 'Выберите ответ'),
(11, '36', 'Какое число или числа вы видите? Введите Ваш ответ без пробелов.'),
(12, '9', 'Какое число вы видите?'),
(13, '3', 'Выберите ответ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `gamescore` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `highscore` varchar(150) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL DEFAULT '0',
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `admin`, `gamescore`, `highscore`, `image`) VALUES
(110, 'admin', '55d60ddf7f40de6f463010360e98434c', 'Админ', 1, '0', '0', 'upload/avatars/1652871885XmFPEaWww5EuO43Id-oEYSo2lSUQYtJtgoQNZDblm01p0Nq57ydIewxea5GEEyqXiFHH2JzHyaNsq1bYFoFR4oGh.jpg'),
(111, 'newuser', '7f431cd7a43d4ae69b3e6ac0da2bce7d', 'Николя', NULL, '6', '6', 'upload/avatars/1652871983spiral-37.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `game`
--
ALTER TABLE `game`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `game`
--
ALTER TABLE `game`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
