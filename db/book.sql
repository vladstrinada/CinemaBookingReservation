-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 05 2017 г., 22:48
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `No` int(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`No`, `status`, `title`, `price`) VALUES
(1, 'NOW SHOWING', 'BladeRunner', '20'),
(2, 'NOW SHOWING', 'Thor:Ragnarok', '15'),
(4, 'NOW SHOWING', 'Listy do M.3', '15'),
(3, 'NOW SHOWING', 'Geostorm', '15'),
(5, 'NOW SHOWING', 'Liga Sprawiedliwosci', '15'),
(6, 'NOW SHOWING', 'Pila:Dziedzictwo', '18'),
(7, 'SOON', 'Gwiezdne Wojny: Ostatni Jedi', '20'),
(8, 'SOON', 'Paddington 2', '20'),
(9, 'SOON', 'Pierwsza Gwiazdka', '20');

-- --------------------------------------------------------

--
-- Структура таблицы `register`
--

CREATE TABLE `register` (
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `name` varchar(50) NOT NULL COMMENT 'name',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL COMMENT 'password',
  `address` varchar(50) NOT NULL COMMENT 'address',
  `contact` varchar(50) NOT NULL COMMENT 'contact'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `register`
--

INSERT INTO `register` (`userid`, `name`, `email`, `password`, `address`, `contact`) VALUES
('AbhijeetMuneshwar', 'Abhijeet Ashok Muneshwar', 'openingknots@gmail.com', 'ABHIJ33T@1', 'Sphurti Vihar, B wing, Survey no. 16, 4/3, 2nd flo', '9174112881'),
('jareker', 'vlad', 'perkin7772@gmail.com', '123', 'Wittiga 4 ,320', '1234567890'),
('jarekj', 'Jarek', 'strinada.vlad@mail.ru', '123', 'Wittiga 4 ,320', '2131313131'),
('jarekkk', 'vlad', 'perkin7772@gmail.com', '123', 'Wittiga 4 ,320', '1234567890'),
('markas', 'Vladyslav', '131@mail.com', '12345', 'Edwarda Wittiga, 4', '2131313131'),
('markasok', 'Vladyslav', 'perkin7772@gmail.com', '123', 'Edwarda Wittiga, 4', '2131313131'),
('markasss', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313131'),
('markc', 'Mark', 'vlad@i.com', '1234', 'Wittiga 4 ,320', '1234567890'),
('markcasr', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313131'),
('markcc', 'Vladyslav', 'strinada.vlad@mail.ru', '123', 'Wittiga 4 ,320', '1234567890'),
('markccc', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313131'),
('Mohit', 'Abhijeet Ashok Muneshwar', 'openingknots@gmail.com', 'Mohit', 'Sphurti Vihar, B wing, Survey no. 16, 4/3, 2nd flo', '9174112881'),
('suyash', 'Suyash', 'suyash@gmal.com', 'suyash', 'NITK', '7984561200'),
('user', 'Vladyslav', 'vlad@i.com', '1234', 'Edwarda Wittiga, 4', '1234567890'),
('useraa', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313132'),
('useraaa', 'Vladyslav', '131@mail.com', '12345', 'Edwarda Wittiga, 4', '1234567890'),
('useruser', 'Vladyslav', 'strinada.vlad@mail.ru', '1234', 'Edwarda Wittiga, 4', '2131313131'),
('vlados', 'Vladyslav', 'perkin7772@gmail.com', '12345', 'Wittiga 4 ,320', '2131313131'),
('vladss', 'Vladyslav', 'strinada.vlad@mail.ru', '123456', 'Edwarda Wittiga, 4', '2131313131'),
('vladstr', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313131'),
('vladstrinada', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313131'),
('vladv', 'Vladyslav', 'perkin7772@gmail.com', '123456', 'Edwarda Wittiga, 4', '2131313131'),
('vladvlad', 'Vladyslav', 'vladloz@gmail.com', '12345', 'Edwarda Wittiga, 4', '1234567890'),
('vladyslavs', 'Vladyslav', 'perkin7772@gmail.com', '1234', 'Edwarda Wittiga, 4', '2131313131');

-- --------------------------------------------------------

--
-- Структура таблицы `seat`
--

CREATE TABLE `seat` (
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `number` int(10) NOT NULL COMMENT 'seat number',
  `PNR` varchar(13) NOT NULL COMMENT 'PNR',
  `date` date NOT NULL COMMENT 'date of booking',
  `PTR` varchar(13) NOT NULL COMMENT 'PTR',
  `time` time NOT NULL COMMENT 'time of booking',
  `movie_name` varchar(50) NOT NULL COMMENT 'moviename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `seat`
--

INSERT INTO `seat` (`userid`, `number`, `PNR`, `date`, `PTR`, `time`, `movie_name`) VALUES
('markasss', 5, '2017-11-26-5', '2017-11-26', '13:00:00:5', '13:00:00', 'BladeRunner'),
('markasss', 15, '2017-11-26-15', '2017-11-26', '13:00:00:15', '13:00:00', 'BladeRunner'),
('vlados', 2, '2017-11-26-2', '2017-11-26', '15:00:00:2', '15:00:00', 'Geostorm'),
('vlados', 4, '2017-11-26-4', '2017-11-26', '15:00:00:4', '15:00:00', 'Geostorm'),
('vladstrinada', 5, '2017-11-26-5', '2017-11-26', '15:00:00:5', '15:00:00', 'Thor:Ragnarok'),
('vladstrinada', 6, '2017-11-26-6', '2017-11-26', '15:00:00:6', '15:00:00', 'Thor:Ragnarok'),
('vladyslavs', 4, '2017-11-27-4', '2017-11-27', '13:00:00:4', '13:00:00', 'BladeRunner'),
('vladyslavs', 5, '2017-11-27-5', '2017-11-27', '13:00:00:5', '13:00:00', 'BladeRunner');

-- --------------------------------------------------------

--
-- Структура таблицы `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `movie` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `time`
--

INSERT INTO `time` (`id`, `movie`, `date`, `time`) VALUES
(1, 'Blade Runner 2049', '2017-11-27', '13:00:00'),
(2, 'Blade Runner 2049', '2017-11-27', '12:00:00'),
(3, 'Blade Runner 2049', '2017-11-28', '18:00:00'),
(4, 'Thor:Ragnarok', '2017-11-14', '00:00:50'),
(5, 'Thor:Ragnarok', '2017-11-13', '00:00:50'),
(6, 'Geostorm', '2017-11-15', '00:00:50'),
(7, 'Listy do M.3', '2017-11-15', '00:00:50'),
(8, 'Listy do M.3', '2017-11-16', '00:00:50'),
(9, 'Listy do M.3', '2017-11-16', '00:00:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Индексы таблицы `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
