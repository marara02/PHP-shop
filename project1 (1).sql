-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 21 2020 г., 19:55
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

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
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'luna', '143Qwerty'),
(2, 'mnz', 'marara'),
(3, 'nura', 'bruh');

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
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(50) NOT NULL,
  `news_text` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_text`, `img`) VALUES
(1, 'Bakery products', 'NEW catalog', 'https://images.pexels.com/photos/917302/pexels-photo-917302.jpeg?cs=srgb&dl=silver-fork-and-knife-on-round-plate-with-cupcake-917302.jpg&fm=jpg'),
(2, 'Natural Products', 'Eco system from villages 180', 'https://images.pexels.com/photos/3772492/pexels-photo-3772492.jpeg?cs=srgb&dl=milk-and-honey-on-wooden-tray-3772492.jpg&fm=jpg'),
(3, 'Columbia Coffee', 'New cost 1500', 'https://picsum.photos/350/250/?image=431'),
(4, 'Sales to fruits and vegetables', '50% of sale', 'image/fff.jpg'),
(5, 'Aromo tea from India', 'New Cost', 'https://images.pexels.com/photos/1417945/pexels-photo-1417945.jpeg?cs=srgb&dl=peppermint-tea-on-teacup-1417945.jpg&fm=jpg'),
(6, 'Switzerland chocolate', 'Minimum cost 450', 'https://images.pexels.com/photos/1022417/pexels-photo-1022417.jpeg?cs=srgb&dl=close-up-photo-of-hershey-s-bars-near-jars-1022417.jpg&fm=jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
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
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `u_fullname` varchar(50) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_telnum` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE `vacancy` (
  `vac_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `vacancy`
--

INSERT INTO `vacancy` (`vac_id`, `position`, `salary`, `description`) VALUES
(1, 'SMM Analyst', 100000, 'Maintaining client retention and client satisfaction\r\nUnderstanding the client\'s business and working towards achieving their KPIs'),
(2, 'Head manager', 150000, 'Plan and promote the daily schedule of employees and the business, interview, hire, and coordinate employees, create and maintain budgets, and coordinate with and report to senior management in the company'),
(3, 'Stocker', 200000, 'Responsible for receiving merchandise, unloading or unpacking it, marking it with codes to be identified, stocking shelves, and helping customers place orders. Works in stores, warehouses, stockrooms, and other storage facilities.'),
(4, 'Project manager', 90000, 'Planning, Executing, and Closing Projects — defining the project, building its comprehensive work plan, and managing to the budget. Managing Teams — facilitating commitment and productivity, removing obstacles, and motivating team members.'),
(5, 'Accountant', 110000, 'preparing accounts and tax returns. administering payrolls and controlling income and expenditure. auditing financial information. compiling and presenting reports, budgets, business plans, commentaries and financial statements.'),
(6, 'Business analyst', 200000, 'helping businesses implement technology solutions in a cost-effective way by determining the requirements of a project or program, and communicating them clearly to stakeholders, facilitators and partners.'),
(7, 'HR manager', 190000, 'Develops policy and directs and coordinates human resources activities, such as employment, compensation, labor relations, benefits, training, and employee services by performing the following duties'),
(8, 'Call center operator', 125000, 'Obtains client information by answering telephone calls; interviewing clients; verifying information. ... Informs clients by explaining procedures; answering questions; providing information. Maintains communication equipment by reporting problems.'),
(9, 'Analyst', 95000, 'Gathers, interprets, and uses complex data to develop actionable steps that will improve processes and optimize results. Day-to-day, he or she assesses company and client needs, receives robust information, and analyzes it, looking for telltale trends or areas for improvement.'),
(10, 'Marketing manager', 70000, 'Oversee the promotion of a business, service, product or brand. Depending on the organization, they may be managing the marketing of a whole line of products and services, or be focused on one particular thing to promote. They may also be in charge of a staff of marketing assistants.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`vac_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `catalog` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
