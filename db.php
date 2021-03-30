-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 30 2021 г., 03:44
-- Версия сервера: 5.5.62
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `firstbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods_list`
--

CREATE TABLE `goods_list` (
`id` int(10) UNSIGNED NOT NULL,
`SKU` varchar(16) NOT NULL,
`name` varchar(255) NOT NULL,
`price` int(10) UNSIGNED NOT NULL,
`availability` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods_list`
--

INSERT INTO `goods_list` (`id`, `SKU`, `name`, `price`, `availability`) VALUES
(1, 'Z-001534', 'Опрыскиватель для мотоблока с компрессором Бут (50 литров)', 2940, '+'),
(2, 'Z-001535', 'Опрыскиватель для мотоблока с компрессором Бут (80 литров)', 3690, '+'),
(3, 'Z-001564', 'Грабли для трактора ворошилки польские 4 колесные \"Солнышко\"', 7680, '+'),
(4, 'Z-001574', 'Косилка для мотоблока роторная MB-2060 (с отключаемым редуктором)', 4310, '+'),
(5, 'Z-001618', 'Инкубатор для яиц бытовой автоматический MS 48', 2290, '+'),
(6, 'Z-001623', 'Перосъемная машина СО-550K', 9885, '+'),
(7, 'Z-001629', 'Корморезка электрическая \"Зубренок\" бункер из нержавейки', 3990, '+'),
(8, 'Z-001632', 'Зернодробилка электрическая бытовая \"Зубренок\"-350', 1730, '+'),
(9, 'Z-001640', 'Лопата отвал для снега на минитрактор Mesim-2.5', 13990, '+'),
(10, 'Z-001650', 'Косилка измельчитель для минитрактора роторная садовая КПС-1,8', 23510, '+');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_list`
--

CREATE TABLE `orders_list` (
`id` int(11) NOT NULL,
`productName` varchar(128) NOT NULL,
`comment` varchar(1024) NOT NULL,
`paymentMethod` varchar(32) NOT NULL,
`status` varchar(32) NOT NULL,
`orderTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_list`
--

INSERT INTO `orders_list` (`id`, `productName`, `comment`, `paymentMethod`, `status`, `orderTime`) VALUES
(1, 'Опрыскиватель для мотоблока с компрессором Бут (50 литров)', '', 'card', 'in process', '2021-03-29 18:46:26'),
(2, 'Грабли для трактора ворошилки польские 4 колесные \"Солнышко\"', '', 'cash', 'paid', '2021-03-29 18:46:26'),
(3, 'Грабли для трактора ворошилки польские 4 колесные \"Солнышко\"', '', 'card', 'paid', '2021-03-29 18:48:22'),
(4, 'Лопата отвал для снега на минитрактор Mesim-2.5', 'Прошу упаковать в красивую коробку))', 'cash', 'paid', '2021-03-29 18:48:22'),
(5, 'Косилка измельчитель для минитрактора роторная садовая КПС-1,8', '', 'card', 'in process', '2021-03-29 18:49:28'),
(6, 'Косилка измельчитель для минитрактора роторная садовая КПС-1,8', '', 'cash', 'paid', '2021-03-29 18:49:28'),
(7, 'Косилка для мотоблока роторная MB-2060 (с отключаемым редуктором)', '', 'card', 'in process', '2021-03-29 18:51:20'),
(8, 'Лопата отвал для снега на минитрактор Mesim-2.5', 'Какого цвета?', 'card', 'paid', '2021-03-29 18:54:10'),
(9, 'Лопата отвал для снега на минитрактор Mesim-2.5', '', 'card', 'paid', '2021-03-29 18:54:10'),
(10, 'Лопата отвал для снега на минитрактор Mesim-2.5', '', 'card', 'paid', '2021-03-29 18:54:55'),
(11, 'Лопата отвал для снега на минитрактор Mesim-2.5', '', 'cash', 'in process', '2021-03-29 18:54:55'),
(12, 'Перосъемная машина СО-550K', '', 'card', 'in process', '2021-03-29 18:55:43'),
(13, 'Опрыскиватель для мотоблока с компрессором Бут (50 литров)', '', 'card', 'paid', '2021-03-29 18:55:43');

-- --------------------------------------------------------

--
-- Структура таблицы `partners_list`
--

CREATE TABLE `partners_list` (
`id` int(10) UNSIGNED NOT NULL,
`name` varchar(64) NOT NULL,
`orderId` int(10) UNSIGNED NOT NULL,
`phone` varchar(16) NOT NULL,
`mailing address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners_list`
--

INSERT INTO `partners_list` (`id`, `name`, `orderId`, `phone`, `mailing address`) VALUES
(1, 'Андрей Серый', 1, '380931636164', 'Новомосковск. Новая Почта. отделение №3'),
(2, 'Ярослав Власов', 2, '380663947615', 'Новомосковск. Новая Почта. отделение №2'),
(3, 'Андрей Серый', 3, '380931636164', 'Новомосковск. Новая Почта. отделение №3'),
(4, 'Станислав Антонов', 4, '380631156782', 'Новомосковск. Новая Почта. отделение №4'),
(5, 'Юрий Иванов', 5, '380508229350', 'Новомосковск. Новая Почта. отделение №1'),
(6, 'Ярослав Власов', 6, '380663947615', 'Новомосковск. Новая Почта. отделение №2'),
(7, 'Сергей Смирнов', 7, '380672355512', 'Новомосковск. Новая Почта. отделение №2'),
(8, 'Александр Тихий', 8, '380502224510', 'Новомосковск. Новая Почта. отделение №3'),
(9, 'Роман Мирный', 9, '380735678349', 'Новомосковск. Новая Почта. отделение №4'),
(10, 'Роман Мирный', 10, '380735678349', 'Новомосковск. Новая Почта. отделение №4'),
(11, 'Владислав Павлюк', 11, '380934844250', 'Новомосковск. Новая Почта. отделение №1'),
(12, 'Дмитрий Тесленко', 12, '380665678210', 'Новомосковск. Новая Почта. отделение №3'),
(13, 'Ольга Луцкая', 13, '380735677350', 'Новомосковск. Новая Почта. отделение №1');

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
`id` int(10) UNSIGNED NOT NULL,
`partnerId` int(10) UNSIGNED NOT NULL,
`paymentMethod` varchar(32) NOT NULL,
`paymentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`sum` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payments`
--

INSERT INTO `payments` (`id`, `partnerId`, `paymentMethod`, `paymentTime`, `sum`) VALUES
(1, 2, 'card', '2021-03-29 23:38:58', '2940'),
(2, 3, 'card', '2021-03-29 23:38:58', '3690'),
(3, 4, 'card', '2021-03-29 23:38:58', '13990'),
(4, 6, 'cash', '2021-03-29 23:38:58', '3990'),
(5, 8, 'cash', '2021-03-29 23:38:58', '7680'),
(6, 9, 'card', '2021-03-29 23:38:58', '1730'),
(7, 10, 'card', '2021-03-29 23:38:58', '4310'),
(8, 12, 'cash', '2021-03-29 23:38:58', '3990');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods_list`
--
ALTER TABLE `goods_list`
ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_list`
--
ALTER TABLE `orders_list`
ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners_list`
--
ALTER TABLE `partners_list`
ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods_list`
--
ALTER TABLE `goods_list`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `orders_list`
--
ALTER TABLE `orders_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `partners_list`
--
ALTER TABLE `partners_list`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;