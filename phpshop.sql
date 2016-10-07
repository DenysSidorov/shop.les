-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 08 2016 г., 00:52
-- Версия сервера: 5.6.31
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`, `type`) VALUES
(1, 'Средняя стоимость гортензии составляет около 6,5 долларов за один цветок.', '2016-05-12 10:05:04', ' Гортензия — цветок, растущий в Азии, а также в Северной и Южной Америке. Название «гортензия» было дано в честь принцессы Гортензии — сестры принца Священной Римской империи Карла Генриха Нассау-Зигена. У большинства видов гортензии цветочные головки содержат два типа цветков: мелкие плодущие (фертильные) цветки в середине и крупные бесплодные (стерильные) цветки по краям. Средняя стоимость гортензии составляет около 6,5 долларов за один цветок.', ' Гортензия — цветок, растущий в Азии, а также в Северной и Южной Америке. Название «гортензия» было дано в честь принцессы Гортензии — сестры принца Священной Римской империи Карла Генриха Нассау-Зигена. У большинства видов гортензии цветочные головки содержат два типа цветков: мелкие плодущие (фертильные) цветки в середине и крупные бесплодные (стерильные) цветки по краям. Средняя стоимость гортензии составляет около 6,5 долларов за один цветок.', 'TopicAuthor', 'images/3.jpg', 'NewsPublication'),
(2, 'В мире осталось только два представителя этого цветка.', '2016-05-11 21:00:00', 'Цветок Миддлемиста красного, растет в Великобритании, Новой Зеландии. Его можно назвать бесценным, ведь его цена не установлена — Миддлемист просто невозможно купить. В мире осталось только два представителя этого цветка — он из них растет в Новой Зеландии, а второй уникальный экземпляр — в теплице в Великобритании.', 'Цветок Миддлемиста красного, растет в Великобритании, Новой Зеландии. Его можно назвать бесценным, ведь его цена не установлена — Миддлемист просто невозможно купить. В мире осталось только два представителя этого цветка — он из них растет в Новой Зеландии, а второй уникальный экземпляр — в теплице в Великобритании.', 'TopicAuthor', 'images/2.jpg', 'NewsPublication'),
(3, 'Это явление повело за собой ряд обширных экспериментов, которые проводились в нидерландской организации в 2004 году.', '2016-05-11 21:00:00', 'Талантливый голландец изобрел собственную технологию в мире цветов. Будучи владельцем одной цветочной компании, он выявил новый индивид — радужную розу. Это явление повело за собой ряд обширных экспериментов, которые проводились в нидерландской организации в 2004 году. Оказалось, что радужные цветы создавать — это целое искусство. Для этого требуется обладать навыками по смешиванию красок. Но такой букет заставит радоваться любого человека. Стоимость за один цветок достигает до 10 долларов. Растению присвоено седьмое место в рейтинге редких экземпляров.', 'Талантливый голландец изобрел собственную технологию в мире цветов. Будучи владельцем одной цветочной компании, он выявил новый индивид — радужную розу. Это явление повело за собой ряд обширных экспериментов, которые проводились в нидерландской организации в 2004 году. Оказалось, что радужные цветы создавать — это целое искусство. Для этого требуется обладать навыками по смешиванию красок. Но такой букет заставит радоваться любого человека. Стоимость за один цветок достигает до 10 долларов. Растению присвоено седьмое место в рейтинге редких экземпляров.', 'TopicAuthor', 'images/4.jpg', 'NewsPublication'),
(4, ' Среди тюльпанов этот цветок самый дорогой и его стоимость достигает до 20 долларов.', '2016-05-11 21:00:00', 'А если быть точнее, то одному из видов этого прекрасного растения. Его название — Король ночи. Такому наименованию поспособствовал темно-лиловый оттенок. Во время «тюльпанной лихорадки» луковицы этого сорта обменивали на стадо овец или 4 быка, 4 тонны пшеницы или 300 литрам вина. Среди тюльпанов этот цветок самый дорогой и его стоимость достигает до 20 долларов.', 'А если быть точнее, то одному из видов этого прекрасного растения. Его название — Король ночи. Такому наименованию поспособствовал темно-лиловый оттенок. Во время «тюльпанной лихорадки» луковицы этого сорта обменивали на стадо овец или 4 быка, 4 тонны пшеницы или 300 литрам вина. Среди тюльпанов этот цветок самый дорогой и его стоимость достигает до 20 долларов.', 'TopicAuthor', 'images/5.jpg', 'NewsPublication'),
(5, ' Растение было названо в честь талантливого французского поэта. Этот сорт роз нравится многим звездам мировой эстрады.', '2017-05-11 21:00:00', 'Именно она считается самой красивой розой в мире. Цветок легко узнать по большому бутону кремового цвета. Его в народе называют райской розой, благодаря очаровательному внешнему виду. Растение было названо в честь талантливого французского поэта. Этот сорт роз нравится многим звездам мировой эстрады. Одна роза равняется стоимости в 20 долларов.', 'Именно она считается самой красивой розой в мире. Цветок легко узнать по большому бутону кремового цвета. Его в народе называют райской розой, благодаря очаровательному внешнему виду. Растение было названо в честь талантливого французского поэта. Этот сорт роз нравится многим звездам мировой эстрады. Одна роза равняется стоимости в 20 долларов.', 'TopicAuthor', 'images/6.jpg', 'NewsPublication'),
(6, 'ершалась в Китае и длилась более 8 лет. Увидеть этот цветок считается настоящим счастьем. Это очень редкий вид и цветет он один раз в пять лет.', '2016-05-11 21:00:05', 'Лидером среди изысканных цветов мира является Shenzhen Nongke. Он также является сортом экзотического растения — орхидеи. Такой вид был выведен искусственно командой селекционеров. Процедура совершалась в Китае и длилась более 8 лет. Увидеть этот цветок считается настоящим счастьем. Это очень редкий вид и цветет он один раз в пять лет. Для его выращивания следует соблюдать очень трепетные условия. Его уход осуществляет одновременно несколько специалистов. Это растение относится и к самым элегантным. Оно дарится только по самому особому случаю. В 2005 году на аукционе за Shenzhen Nongke один из участников заплатил 202 000 долларов. В связи с этим цветок был признан самым дорогим растением в мире.', 'Лидером среди изысканных цветов мира является Shenzhen Nongke. Он также является сортом экзотического растения — орхидеи. Такой вид был выведен искусственно командой селекционеров. Процедура совершалась в Китае и длилась более 8 лет. Увидеть этот цветок считается настоящим счастьем. Это очень редкий вид и цветет он один раз в пять лет. Для его выращивания следует соблюдать очень трепетные условия. Его уход осуществляет одновременно несколько специалистов. Это растение относится и к самым элегантным. Оно дарится только по самому особому случаю. В 2005 году на аукционе за Shenzhen Nongke один из участников заплатил 202 000 долларов. В связи с этим цветок был признан самым дорогим растением в мире.', 'TopicAuthor', 'images/7.jpg', 'NewsPublication');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(13, 'Ноутбуки', 1, 1),
(14, 'Планшеты', 2, 1),
(15, 'Мониторы', 3, 1),
(16, 'Игровые компьютеры', 4, 1),
(17, 'TestCategoryOff', 5, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `description`, `is_new`, `is_recommended`, `status`, `image`) VALUES
(39, 'Ноутбук Lenovo Flex 10', 13, 1602042, 370, 0, 'Lenovo', 'Экран 10.1" (1366x768) HD LED, сенсорный, глянцевый / Intel Celeron N2830 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 / 1.2 кг / черный', 0, 0, 1, ''),
(40, 'Ноутбук Asus X751MA', 13, 2028367, 430, 1, 'Asus', 'Экран 17.3" (1600х900) HD+ LED, глянцевый / Intel Pentium N3540 (2.16 - 2.66 ГГц) / RAM 4 ГБ / HDD 1 ТБ / Intel HD Graphics / DVD Super Multi / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / DOS / 2.6 кг / белый', 1, 1, 1, ''),
(41, 'Samsung Galaxy Tab S 10.5 16GB', 14, 1129365, 780, 1, 'Samsung', 'Samsung Galaxy Tab S создан для того, чтобы сделать вашу жизнь лучше. Наслаждайтесь своим контентом с покрытием 94% цветов Adobe RGB и 100000:1 уровнем контрастности, который обеспечивается sAmoled экраном с функцией оптимизации под отображаемое изображение и окружение. Яркий 10.5” экран в ультратонком корпусе весом 467 г порадует вас высоким уровнем портативности. Работа станет проще вместе с Hancom Office и удаленным доступом к вашему ПК. E-Meeting и WebEx – отличные помощники для проведения встреч, когда вы находитесь вне офиса. Надежно храните ваши данные благодаря сканеру отпечатка пальцев.', 1, 1, 1, ''),
(42, 'Samsung Galaxy Tab S 8.4 16GB', 14, 1128670, 640.121, 1, 'Samsung', 'Экран 8.4" Super AMOLED (2560x1600) емкостный Multi-Touch / Samsung Exynos 5420 (1.9 ГГц + 1.3 ГГц) / RAM 3 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Bluetooth 4.0 / Wi-Fi 802.11 a/b/g/n/ac / основная камера 8 Мп, фронтальная 2.1 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / 294 г / белый', 1, 0, 1, ''),
(43, 'Gazer Tegra Note 7', 14, 683364, 210, 1, 'Gazer', 'Экран 7" IPS (1280x800) емкостный Multi-Touch / NVIDIA Tegra 4 (1.8 ГГц) / RAM 1 ГБ / 16 ГБ встроенной памяти + поддержка карт памяти microSD / Wi-Fi / Bluetooth 4.0 / основная камера 5 Мп, фронтальная - 0.3 Мп / GPS / ГЛОНАСС / Android 4.4.2 (KitKat) / вес 320 г', 1, 0, 1, ''),
(44, 'Монитор 23" Dell E2314H Black', 15, 355025, 175, 1, 'Dell', 'С расширением Full HD Вы сможете рассмотреть мельчайшие детали. Dell E2314H предоставит Вам резкое и четкое изображение, с которым любая работа будет в удовольствие. Full HD 1920 x 1080 при 60 Гц разрешение (макс.)', 0, 1, 1, ''),
(45, 'Компьютер Everest Game ', 16, 1563832, 1320, 1, 'Everest', 'Everest Game 9085 — это компьютеры премимум класса, собранные на базе эксклюзивных компонентов, тщательно подобранных и протестированных лучшими специалистами нашей компании. Это топовый сегмент систем, который отвечает наилучшим характеристикам показателей качества и производительности.', 1, 0, 1, ''),
(46, 'Ноутбук Acer TravelMate TMB115', 13, 1953213, 500, 1, 'Acer', 'Экран 11.6'''' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / Linpus / 1.32 кг / черный', 0, 0, 1, ''),
(47, 'Ноутбук ASUS TravelMate TMB115', 13, 1953213, 250, 1, 'Acer', 'Экран 11.6'''' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / Linpus / 1.32 кг / черный', 0, 0, 1, ''),
(48, 'Ноутбук DELL Aspire E3-112-C65X', 13, 2019487, 800, 1, 'Acer', 'Экран 11.6'''' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Linpus / 1.29 кг / серебристый', 0, 1, 1, ''),
(49, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 1839707, 395, 1, 'Asus', 'Экран 11.6" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 0, 1, ''),
(50, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 1839707, 395, 1, 'Asus', 'Экран 11.6" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 0, 1, ''),
(51, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 1839707, 395, 1, 'Asus', 'Экран 11.6" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 0, 1, ''),
(52, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 1839707, 395, 1, 'Asus', 'Экран 11.6" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 1, 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(46, 'ddddddddddddddd', '1331312', 'ddasdasd', 4, '2015-05-18 15:34:41', '{"44":3,"43":3}', 2),
(47, 'dasdasd', '231231231', 'asdasda1321321', 0, '0000-00-00 00:00:00', '{"53":1}', 1),
(48, 'asdasdasd', '123123123', 'asdasdas', 0, '2016-10-05 13:43:14', '{"53":1}', 1),
(49, 'asdad', 'asdasda', 'dasda', 0, '2016-10-05 13:44:29', '{"43":2,"42":2,"41":1,"45":1}', 1),
(50, 'asdasd', '132323', 'dasdasd', 0, '2016-10-05 13:44:59', '{"53":1}', 1),
(51, 'dasd', 'asdasd', '13asdas', 0, '2016-10-05 13:45:49', '{"43":2,"42":2,"41":1,"45":1}', 1),
(52, '13123', '13123123', '123131', 0, '2016-10-05 13:47:07', '{"43":2,"42":2,"41":1,"45":1}', 1),
(53, 'dadasdas', 'asdasdasdas', 'sdasdaas', 0, '2016-10-05 13:48:11', '{"52":1,"51":1}', 1),
(54, 'asdasdas', '1232321321', 'sadasdasda', 0, '2016-10-06 10:06:33', '{"53":1,"52":1}', 1),
(56, 'den', '111111', '', 0, '2016-10-07 11:17:32', '{"60":1,"58":1,"56":1}', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', ''),
(5, 'Денис', 'ss@ss.ss', 'PASSword', 'admin'),
(6, 'NaN', 'sadasd@sdad.asd', '1234566', ''),
(7, '123456', '123456@asd.asd', '123456', ''),
(8, 'viii', 'aaaaaa@aaa.aaa', '123456', ''),
(9, 'dasd', 'asd@sada.sadasd', '123456', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;