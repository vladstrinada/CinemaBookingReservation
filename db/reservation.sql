-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 10 2017 г., 14:59
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
-- База данных: `reservation`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aas`
--

CREATE TABLE `aas` (
  `id` int(11) NOT NULL,
  `cinema2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `aas`
--

INSERT INTO `aas` (`id`, `cinema2`) VALUES
(0, 25);

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`ID`, `name`, `username`, `email`, `password`) VALUES
(1, 'rosefield', 'rosefield', 'rosfild@yahoo.com', 'e0aed95f55d475196df96cb022438851'),
(13, 'anglakas', 'anglakas', 'abegail_espinol@yahoo.com', 'f970e2767d0cfe75876ea857f92e319b'),
(12, 'asdasdas', 'asdasdasd', 'arfhielduton@gmail.com', 'f970e2767d0cfe75876ea857f92e319b'),
(14, 'Vladyslav Strinada', 'Vladyslav', 'perkin7772@gmail.com', '5ebe2294ecd0e0f08eab7690d2a6ee69'),
(15, 'Jaroslaw', 'Jaroslaw', 'strinada.vlad@mail.ru', '5ebe2294ecd0e0f08eab7690d2a6ee69'),
(16, 'Mark Chuleika', 'MarkChul', 'mar@i.com', '8aab264665f2085687d9eeca4c67a691'),
(17, 'Danilo Lebediev', 'DanchikL', 'dan@i.com', '5ebe2294ecd0e0f08eab7690d2a6ee69'),
(18, 'Vovan Sinkievich', 'VovanSink', 'vovan@mail.ru', '5ebe2294ecd0e0f08eab7690d2a6ee69');

-- --------------------------------------------------------

--
-- Структура таблицы `cinema1`
--

CREATE TABLE `cinema1` (
  `No` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnums` int(225) NOT NULL,
  `ticketnum` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cinema1`
--

INSERT INTO `cinema1` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnums`, `ticketnum`) VALUES
(1, 'pics/showing/Frontera.jpg', 'NOW SHOWING', 'Blade Runner 2049', '350', '10:30:00', '12:30:00', '04:30:00', 'Cinema 1', 0, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `cinema2`
--

CREATE TABLE `cinema2` (
  `No` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cinema2`
--

INSERT INTO `cinema2` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, 'pics/showing/The Identical.jpg', 'NOW SHOWING', 'Thor : Ragnarok', '300', '01:00:00', '04:21:00', '10:30:00', 'Cinema 2', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `cinema3`
--

CREATE TABLE `cinema3` (
  `No` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cinema3`
--

INSERT INTO `cinema3` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, '', 'NOW SHOWING', 'Geostorm', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 3', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `cinema4`
--

CREATE TABLE `cinema4` (
  `No` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cinema4`
--

INSERT INTO `cinema4` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, '', 'NOW SHOWING', 'Listy do M.3', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 4', 25);

-- --------------------------------------------------------

--
-- Структура таблицы `cinema5`
--

CREATE TABLE `cinema5` (
  `No` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` datetime NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cinema5`
--

INSERT INTO `cinema5` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, '', 'NOW SHOWING', 'Liga sprawiedliwosci', '350', '2017-11-10 08:00:00', '12:30:00', '04:30:00', 'Cinema 5', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `cinema6`
--

CREATE TABLE `cinema6` (
  `No` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cinema6`
--

INSERT INTO `cinema6` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, '', 'NOW SHOWING', 'Pila dziedzictwo', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 6', 25);

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `Ticket_Number` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `cname` varchar(225) NOT NULL,
  `quantity` int(225) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `Time` time NOT NULL,
  `date` date NOT NULL,
  `Cinema` varchar(225) NOT NULL,
  `ticket_status` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`ID`, `Ticket_Number`, `username`, `cname`, `quantity`, `Title`, `price`, `Time`, `date`, `Cinema`, `ticket_status`) VALUES
(146, '12', 'asd', 'asd', 1, 'wd', '122', '10:00:00', '2014-10-22', 'df', 'active'),
(147, 'a0ytgiac', 'rosefield', 'rosefield uton', 1, ' Frontera', ' 350', '10:30:00', '2014-10-29', 'Cinema 2', 'Active'),
(148, 'yabf8k54', 'Jaroslaw', 'Jaro', 3, ' Maleficent', ' 350', '12:30:00', '2017-11-08', 'Cinema 3', 'Active'),
(149, 'u4cqscv2', 'Jaroslaw', 'Jaroslaw', 1, ' Frontera', ' 350', '12:30:00', '2017-11-08', 'Cinema 2', 'Active'),
(150, 'b3rkh6sb', 'Jaroslaw', 'Jaroslaw', 5, ' Frontera', ' 350', '12:30:00', '2017-11-08', 'Cinema 2', 'Active'),
(151, 'ihx34y0v', 'Jaroslaw', 'Jaroslaw', 5, ' Frontera', '1750', '04:30:00', '2017-11-08', 'Cinema 2', 'Active'),
(152, 'sniygwo5', 'Jaroslaw', 'Vladyslav', 3, ' The Identical', '  300', '01:00:00', '2017-11-08', 'Cinema 2', 'Active'),
(153, 'hsf3tvcb', 'Jaroslaw', 'Mark', 5, ' Geostorm', ' 350', '12:30:00', '2017-11-08', 'Cinema 3', 'Active'),
(154, 'i37pcff5', 'Jaroslaw', 'Vladyslav', 4, ' Liga sprawiedliwosci', ' 350', '08:00:00', '2017-11-08', 'Cinema 5', 'Active'),
(155, '8y2ema2s', 'Jaroslaw', 'Vladyslav', 4, ' Liga sprawiedliwosci', ' 350', '08:00:00', '2017-11-08', 'Cinema 5', 'Active'),
(156, 'wnzceqtu', 'Jaroslaw', 'Vladyslav', 4, ' Liga sprawiedliwosci', ' 350', '08:00:00', '2017-11-08', 'Cinema 5', 'Active'),
(157, 'csi5aawp', 'Jaroslaw', 'Chuj', 3, ' Geostorm', ' 350', '12:30:00', '2017-11-08', 'Cinema 3', 'Active'),
(158, 'c07g7jv3', '', 'Vladyslav', 1, ' Blade Runner 2049', '350', '04:30:00', '2017-11-10', '', 'Active'),
(159, '5dbj7rpy', '', 'Jaroslaw', 3, ' Liga sprawiedliwosci', '1050', '08:00:00', '2017-11-10', '', 'Active');

-- --------------------------------------------------------

--
-- Структура таблицы `movie_inventory`
--

CREATE TABLE `movie_inventory` (
  `No` int(11) NOT NULL,
  `Ticket_Number` varchar(225) NOT NULL,
  `Ticket_Status` varchar(225) NOT NULL,
  `Costumer_Name` varchar(225) NOT NULL,
  `Movie_Title` varchar(225) NOT NULL,
  `Cinema` varchar(225) NOT NULL,
  `Seat_Number` varchar(10) NOT NULL,
  `Date_Reserve` date NOT NULL,
  `Ticket_Price` int(225) NOT NULL,
  `Quantity` int(225) NOT NULL,
  `Total_Amount_Paid` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `movie_inventory`
--

INSERT INTO `movie_inventory` (`No`, `Ticket_Number`, `Ticket_Status`, `Costumer_Name`, `Movie_Title`, `Cinema`, `Seat_Number`, `Date_Reserve`, `Ticket_Price`, `Quantity`, `Total_Amount_Paid`) VALUES
(124, '411389', 'Void', 'carlo', 'carlo', 'cinema1', '2', '1900-01-09', 300, 1, 300),
(123, '489494', 'Void', 'carlo', 'carlo', 'cinema1', '1', '1900-01-09', 300, 1, 300);

-- --------------------------------------------------------

--
-- Структура таблицы `tiket`
--

CREATE TABLE `tiket` (
  `cinema1` int(11) NOT NULL,
  `cinema2` int(11) NOT NULL,
  `cinema3` int(11) NOT NULL,
  `cinema4` int(11) NOT NULL,
  `cinema5` int(11) NOT NULL,
  `cinema6` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tiket`
--

INSERT INTO `tiket` (`cinema1`, `cinema2`, `cinema3`, `cinema4`, `cinema5`, `cinema6`) VALUES
(20, 0, 23, 23, 25, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `upcoming1`
--

CREATE TABLE `upcoming1` (
  `No` int(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upcoming1`
--

INSERT INTO `upcoming1` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/bestofme.jpg', 'https://www.youtube.com/watch?v=WcIXCok9HPg', 'COMING SOON', 'all of me', 'October 2, 2014');

-- --------------------------------------------------------

--
-- Структура таблицы `upcoming2`
--

CREATE TABLE `upcoming2` (
  `No` int(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upcoming2`
--

INSERT INTO `upcoming2` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/beforeigotosleep.jpg', 'asasa', 'COMING SOON', 'Before I go to sleep', 'October 5, 2014');

-- --------------------------------------------------------

--
-- Структура таблицы `upcoming3`
--

CREATE TABLE `upcoming3` (
  `No` int(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upcoming3`
--

INSERT INTO `upcoming3` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/exist.jpg', 'asasasa', 'COMING SOON', 'Exist', 'October 10, 2014');

-- --------------------------------------------------------

--
-- Структура таблицы `upcoming4`
--

CREATE TABLE `upcoming4` (
  `No` int(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upcoming4`
--

INSERT INTO `upcoming4` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/greenprince.jpg', 'xaxax', 'COMING SOON', 'Green Prince', 'October 15, 2014');

-- --------------------------------------------------------

--
-- Структура таблицы `upcoming5`
--

CREATE TABLE `upcoming5` (
  `No` int(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upcoming5`
--

INSERT INTO `upcoming5` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/horns.jpg', 'aasas', 'COMING SOON', 'Horns', 'October 20, 2014');

-- --------------------------------------------------------

--
-- Структура таблицы `upcoming6`
--

CREATE TABLE `upcoming6` (
  `No` int(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `upcoming6`
--

INSERT INTO `upcoming6` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/marstothestars.jpg', 'asSSSAASSASAS', 'COMING SOON', 'Maps to the Stars', 'October 30, 2014');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Username` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `AdministratorPassword` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Username`, `Password`, `AdministratorPassword`) VALUES
('rosefield', 'rosefield', 'admin'),
('allen', 'allen', ''),
('carlo', 'carlo', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `cinema1`
--
ALTER TABLE `cinema1`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `cinema2`
--
ALTER TABLE `cinema2`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `cinema3`
--
ALTER TABLE `cinema3`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `cinema4`
--
ALTER TABLE `cinema4`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `cinema5`
--
ALTER TABLE `cinema5`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `cinema6`
--
ALTER TABLE `cinema6`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `movie_inventory`
--
ALTER TABLE `movie_inventory`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `upcoming1`
--
ALTER TABLE `upcoming1`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `upcoming2`
--
ALTER TABLE `upcoming2`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `upcoming3`
--
ALTER TABLE `upcoming3`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `upcoming4`
--
ALTER TABLE `upcoming4`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `upcoming5`
--
ALTER TABLE `upcoming5`
  ADD PRIMARY KEY (`No`);

--
-- Индексы таблицы `upcoming6`
--
ALTER TABLE `upcoming6`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `cinema1`
--
ALTER TABLE `cinema1`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `cinema2`
--
ALTER TABLE `cinema2`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `cinema3`
--
ALTER TABLE `cinema3`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `cinema4`
--
ALTER TABLE `cinema4`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `cinema5`
--
ALTER TABLE `cinema5`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `cinema6`
--
ALTER TABLE `cinema6`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT для таблицы `movie_inventory`
--
ALTER TABLE `movie_inventory`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT для таблицы `upcoming1`
--
ALTER TABLE `upcoming1`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `upcoming2`
--
ALTER TABLE `upcoming2`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `upcoming3`
--
ALTER TABLE `upcoming3`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `upcoming4`
--
ALTER TABLE `upcoming4`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `upcoming5`
--
ALTER TABLE `upcoming5`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `upcoming6`
--
ALTER TABLE `upcoming6`
  MODIFY `No` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
