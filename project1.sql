-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 19 2020 г., 09:15
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`category_id`, `category_name`) VALUES
(1, 'Flour products'),
(2, 'Meat'),
(3, 'Seafood'),
(4, 'Fruits'),
(5, 'Vegetables'),
(6, 'Drinks');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telnum` varchar(10) NOT NULL,
  `address` varchar(90) NOT NULL,
  `Total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `amount`, `category_id`, `img`) VALUES
(1, 'Red Velvet', 2000, 10, 1, 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2004/1/23/1/ss1d26_red_velvet_cake.jpg.rend.hgtvcom.616.462.suffix/1371584132020.jpeg'),
(2, 'Voopie', 3000, 10, 1, 'https://img-global.cpcdn.com/recipes/8b9897d93350ccfe/751x532cq70/shokoladnyi-tort-vupi-pai-ili-bashnia-svobodnogho-padieniia-%D0%BE%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D0%BE%D0%B5-%D1%84%D0%BE%D1%82%D0%BE-%D1%80%D0%B5%D1%86%D0%B5%D0%BF%D1%82%D0%B0.jpg'),
(3, 'Japanese Cake', 1500, 10, 1, 'https://chef.tm/public/pics/288/288521_0.jpg'),
(4, 'Cookies', 500, 10, 1, 'image/cook.jpg'),
(5, 'Cupcakes', 150, 10, 1, 'image/cap.jpg'),
(6, 'Bread ', 100, 10, 1, 'https://www.biggerbolderbaking.com/wp-content/uploads/2020/04/Hearty-Yeast-Free-Bread-WS-Thumbnail.jpg'),
(7, 'Beef', 2800, 15, 2, 'image/beef.jpg'),
(8, 'Whole Chicken', 900, 10, 2, 'image/chicken.jpg'),
(9, 'Chicken Breast', 1200, 12, 2, 'image/chicken.jpg'),
(10, 'Chicken Legs', 1000, 20, 2, 'image/chicken.jpg'),
(11, 'Sheep Meat', 1500, 10, 2, 'image/sheep.jpg'),
(12, 'Horse Meat', 1450, 20, 2, 'image/horse.jpg'),
(13, 'Duck Meat', 890, 10, 2, 'image/duck.jpg'),
(14, 'Goat Meat', 1200, 10, 2, 'image/goat.jpg'),
(15, 'Abalone', 200000, 50, 3, 'https://www.giovannisfishmarket.com/content/docs/public/shared_images/abalone1002.jpg'),
(16, 'Crab', 25000, 15, 3, 'https://www.giovannisfishmarket.com/content/docs/public/shared_images/crab1001.jpg'),
(17, 'Lobster', 60000, 5, 3, 'https://www.giovannisfishmarket.com/content/docs/public/shared_images/lobster1001.jpg'),
(18, 'Oysters', 15000, 50, 3, 'https://www.giovannisfishmarket.com/content/docs/public/shared_images/oysters1001.jpg'),
(19, 'Shrimp', 13000, 100, 3, 'https://www.giovannisfishmarket.com/content/docs/public/shared_images/shrimp1001.jpg'),
(20, 'Tuna', 15000, 30, 3, 'https://www.giovannisfishmarket.com/content/cachedthumbnails/1423.size-180-file-1423-png.png'),
(21, 'Banana', 600, 75, 4, 'https://i5.walmartimages.ca/images/Enlarge/580/6_r/875806_R.jpg'),
(22, 'Strawberries', 3500, 12, 4, 'https://i5.walmartimages.ca/images/Enlarge/094/582/6000200094582.jpg'),
(23, 'Pears', 2000, 20, 4, 'https://i5.walmartimages.ca/images/Enlarge/-40/242/999999-40242.jpg'),
(24, 'Apple', 1800, 25, 4, 'https://5.imimg.com/data5/LM/DU/MY-22954806/apple-fruit-500x500.jpg'),
(25, 'Grapefruit', 2300, 5, 4, 'https://befreshcorp.net/wp-content/uploads/2017/07/product-packshot-Grapefruit.jpg'),
(26, 'Plum', 2500, 23, 4, 'https://i5.walmartimages.ca/images/Enlarge/_40/426/40426.jpg'),
(27, 'Tomato', 2500, 30, 5, 'https://i5.walmartimages.ca/images/Enlarge/094/511/6000200094511.jpg'),
(28, 'Carrot', 1200, 10, 5, 'https://www.jessicagavin.com/wp-content/uploads/2019/02/carrots-7-1200.jpg'),
(29, 'Onion', 1200, 10, 5, 'https://cdn.shopify.com/s/files/1/1537/5553/products/00613_15abd93a-e239-45df-acdb-8485b40d546a_grande.jpg?v=1486440965'),
(30, 'Sweet potato', 1000, 30, 5, 'https://i5.walmartimages.ca/images/Enlarge/-40/747/999999-40747.jpg'),
(31, 'Cabbage', 2400, 40, 5, 'https://i5.walmartimages.ca/images/Enlarge/272/109/6000191272109.jpg'),
(32, 'Asparagus', 3500, 50, 5, 'https://i5.walmartimages.ca/images/Enlarge/094/414/6000200094414.jpg'),
(33, 'Nestea Lemon', 900, 100, 6, 'https://i5.walmartimages.ca/images/Enlarge/762/243/762243.jpg'),
(34, 'Green tea', 5000, 5, 6, 'https://images-na.ssl-images-amazon.com/images/I/91JMy2ISDaL._SL1500_.jpg'),
(35, 'Hot Chocolate', 4500, 7, 6, 'https://images-na.ssl-images-amazon.com/images/I/81ZQ2GHB7%2BL._SX425_.jpg'),
(36, 'Coffee', 5000, 30, 6, 'https://i5.walmartimages.ca/images/Enlarge/078/971/6000201078971.jpg\r\n'),
(37, 'Water', 3500, 20, 6, 'https://netstorage-nur.akamaized.net/images/pogudx28tfo00q7lp.jpg?imwidth=900'),
(38, 'Shake', 5000, 10, 6, 'https://cache.sporter.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/satled-caramel-shake.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telnum` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `email`, `telnum`, `password`) VALUES
(1, 'Marzhan Nuraly', 'nuraly@gmail.com', 0, '123456789');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `catalog` (`category_id`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `catalog` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
