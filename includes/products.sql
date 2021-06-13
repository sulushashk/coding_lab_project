-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2021 г., 19:28
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES
(1, 1, 'iPhone 12 Pro', '128 GB, \"Pacific Blue\" .', 1500, '1.jpg', 1),
(2, 1, 'IPhone 11 Pro', '128 GB, Graphite .', 1200, '2.jpg', 1),
(3, 1, 'iPhone 12 Pro', '128 GB, Gold .', 1300, '3.jpg', 1),
(4, 1, 'iPhone 12 Pro', '256 GB, Silver .', 1300, '4.jpg', 1),
(5, 1, 'iPhone 11 Pro', '256 GB, \"Pacific Blue\" .', 1200, '5.jpg', 1),
(6, 1, 'iPhone 12 Pro', '256 GB, Gold .', 1300, '6.jpg', 1),
(7, 1, 'iPhone 12 Pro', '512 GB, Silver .', 1700, '7.jpg', 1),
(8, 1, 'iPhone 12 Pro', '512 GB, Gold .', 1700, '8.jpg', 1),
(9, 1, 'iPhone 12 Pro', '512 GB, Graphite .', 1700, '9.jpg', 1),
(10, 2, 'iPad Air 4', '64GB, \"Pacific Blue\" . ', 1380, 'i1.jpg', 1),
(11, 2, 'iPad Air 4', '64GB, Graphite . Apple Inc Technology', 1380, 'i2.jpg', 1),
(12, 2, 'iPad Air 4', '64GB, Gold . Apple Inc Technology', 1380, 'i3.jpg', 1),
(13, 2, 'iPad Air 4', '64GB, \"Pacific Blue\" . Apple Inc Technology', 1580, 'i4.jpg', 1),
(14, 2, 'iPad Air 4', '64GB, 256 GB, Silver . Apple Inc Technology', 1580, 'i5.jpg', 1),
(15, 2, 'iPad Air 4', '64GB, Gold . Apple Inc Technology', 1580, 'i6.jpg', 1),
(16, 2, 'iPad Air 4', '64GB, Silver . Apple Inc Technology', 1580, 'i7.jpg', 1),
(17, 2, 'iPad Air 4', '64GB, 512 GB, Gold . Apple Inc Technology', 1780, 'i8.jpg', 1),
(18, 2, 'iPad Air 4', '64GB, 512 GB, Graphite . Apple Inc Technology', 1700, 'i9.jpg', 1),
(19, 3, 'MacBook Pro 13\" с Touch Bar', '8 ГБ, 256 ГБ, Apple M1', 1700, 'm1.jpg', 1),
(20, 3, 'MacBook Pro 13\" с Touch Bar', '8 ГБ, 512 ГБ, Apple M1', 1887, 'm2.jpg', 1),
(21, 3, 'MacBook Pro 13\" с Touch Bar', '8 ГБ, 256 ГБ, Apple M1', 1700, 'm3.jpg', 1),
(22, 3, 'MacBook Pro 16\" с Touch Bar', '16 ГБ, 512 ГБ, Intel Core i7', 1887, 'm4.jpg', 1),
(23, 3, '>MacBook Pro 13\" с Touch Bar', '8 ГБ, 512 ГБ, Intel Core i5', 2290, 'm5.jpg', 1),
(24, 3, 'MacBook Pro 13\" с Touch Bar', '16 ГБ, 512 ГБ, Intel Core i5', 2590, 'm6.jpg', 1),
(25, 3, 'MacBook Pro 13\" с Touch Bar', '8 ГБ, 512 ГБ, Intel Core i5', 2490, 'm7.jpg', 1),
(26, 3, 'MacBook Pro 13\" с Touch Bar', '16 ГБ, 512 ГБ, Intel Core i5', 2590, 'm8.jpg', 1),
(27, 3, 'MacBook Pro 16\" с Touch Bar', '16 ГБ, 1 ТБ, Intel Core i9', 2790, 'm9.jpg', 1),
(28, 4, 'Apple Airpods headphonesh', 'Wireless Charging function', 280, 'a1.jpg', 1),
(29, 4, 'Apple Airpods headphonesh', ' Wireless Charging function', 289, 'a2.jpg', 1),
(30, 4, 'Apple Airpods headphonesh', 'Wireless Charging function', 280, 'a3.jpg', 1),
(31, 4, 'Apple Airpods headphoneshwith', 'Wireless Charging function', 280, 'a4.jpg', 1),
(32, 4, 'APPLE AirPods Max headphones', 'With large ear cushions', 716, 'a5.jpg', 1),
(33, 4, 'APPLE AirPods Max headphones', 'With large ear cushions', 720, 'a6.jpg', 1),
(34, 4, 'APPLE AirPods Max headphones', 'With large ear cushions', 280, 'a7.jpg', 1),
(35, 4, 'APPLE AirPods Max headphones', 'With large ear cushions', 720, 'a8.jpg', 1),
(36, 4, 'APPLE AirPods Max headphones', 'With large ear cushions', 790, 'a9.jpg', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
