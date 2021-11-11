-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2021 at 12:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_details` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `address_details`, `phone_no`, `pincode`) VALUES
(11, 1, 'Village-Fazalpur ,Post-katsihi, Dist.-Purba Bardhaman.Pin code-713422\r\nVillage-Fazalpur ,Post-katsihi, Dist.-Purba Bardhaman.Pin code-713422', '9775803936', '713422'),
(12, 4, 'Village-Fazalpur ,Post-katsihi, Dist.-Purba Bardhaman.Pin code-713422\r\nVillage-Fazalpur ,Post-katsihi, Dist.-Purba Bardhaman.Pin code-713422', '9775803936', '713422');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`) VALUES
(16, 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`coupon_id`, `coupon_name`, `coupon_value`, `coupon_status`) VALUES
(1, 'saikat ka dhaba', 10, 'active'),
(2, 'sept ka dhamaka', 23, 'close');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ammount` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `address` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `ammount`, `order_date`, `address`, `status`, `payment_method`) VALUES
('618bdb39bf27d', 1, 3600, '2021-11-10', 11, 1, 'Debit Card'),
('618be260575ad', 4, 495, '2021-11-10', 12, 1, 'Debit Card'),
('618bf2421f6d8', 4, 200, '2021-11-10', 12, 1, 'NEFT');

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(7, '618b6a98c7a76', 3, 5),
(8, '618b6a98c7a76', 5, 3),
(9, '618b73f7b0845', 3, 5),
(10, '618b73f7b0845', 5, 3),
(11, '618b75c24f3c6', 3, 5),
(12, '618b75c24f3c6', 5, 3),
(13, '618b75e361946', 3, 5),
(14, '618b75e361946', 5, 3),
(15, '618b76079be95', 3, 5),
(16, '618b76079be95', 5, 3),
(17, '618b76079be95', 6, 4),
(18, '618b77fb309c4', 3, 5),
(19, '618b77fb309c4', 5, 3),
(20, '618b77fb309c4', 6, 4),
(21, '618b9b5d683b4', 5, 2),
(22, '618ba538da207', 5, 3),
(23, '618ba54511220', 5, 3),
(24, '618ba77f590c4', 5, 3),
(25, '618bae109d29c', 5, 3),
(26, '618bae109d29c', 10, 1),
(27, '618bdb39bf27d', 3, 5),
(28, '618bdb39bf27d', 5, 3),
(29, '618bdb39bf27d', 6, 4),
(30, '618be260575ad', 5, 1),
(31, '618be260575ad', 10, 1),
(32, '618bf2421f6d8', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `descriptions` text NOT NULL,
  `bg_img` varchar(255) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `category`, `price`, `descriptions`, `bg_img`, `availability`) VALUES
(1, 'Chicken Fried Rice + Chilli Chicken', 'Chicken', 300, 'A delicious dish .', 'https://b.zmtcdn.com/data/dish_photos/797/720da0b0558466da0c8649352137e797.jpg?fit=around|130:130&crop=130:130;*,*', 1),
(3, 'Tandoori Chicken', 'Chicken', 350, 'Our signature spicy tender pieces of chicken marinated in our signature spice based marinade. Roasted to perfection in our traditional charcoal tandoor. Served with yogurt based mint chutney on the side. Can be optioned as hlf or full chicken', 'https://b.zmtcdn.com/data/dish_photos/f47/c42b8c0018fcdd767648d49f1d9b5f47.jpg?fit=around|130:130&crop=130:130;*,*', 1),
(4, 'Crispy Chicken Double Patty + Crispy Chicken Double Patty', 'Burger', 238, 'Crispy Chicken Double Patty + Crispy Chicken Double Patty', 'https://b.zmtcdn.com/data/dish_photos/6ce/435c1e40ec02fa7053a661c92ed1d6ce.jpg?fit=around|130:130&crop=130:130;*,*', 1),
(5, 'Crispy Veg Double Patty + Crispy Veg Double Patty', 'Burger', 150, 'Crispy Veg Double Patty + Crispy Veg Double Patty', 'https://b.zmtcdn.com/data/dish_photos/271/f1a890e477fd9081846dbb24a82e5271.jpg?fit=around|130:130&crop=130:130;*,*', 1),
(6, 'Tandoori Chicken [Half]', 'Biryani', 350, 'CHEF\'S SPECIAL', 'https://b.zmtcdn.com/data/dish_photos/249/5ce4a3b085b04e3903c1a1ad4c690249.jpg?fit=around|130:130&crop=130:130;*,*', 1),
(7, 'Kolkata Biryani', 'Biryani', 250, 'Delicious Biryani', 'https://b.zmtcdn.com/data/dish_images/2a24c5264606bd78622267d28a3726821634805216.png', 1),
(8, 'Lighter Fried Rice', 'Fried Rice', 200, 'Most people don\'t associate the words \"fried\" and \"light\", but with a little guidance, fried rice can actually be a healthy main course or side dish. Plus, the ability to incorporate leftovers of virtually any type—meat or vegetable—makes fried rice dishes a great go-to in a time crunch.\r\n\r\nFirst up, bring a favorite takeout dinner packed with fresh veggies and tofu to the table in about 15 minutes.', 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2Fupdated_main_images%2Foh3468p158-tofu-fried-rice-new-x_0.jpg%3Fitok%3DCVfXdPcV&w=200&c=s', 1),
(10, '2 of 22\r\nShrimp Fried Rice', 'Fried Rice', 345, 'This shrimp fried rice dish is best if you use day-old rice. Cook it and spread in a single layer on a baking sheet to cool completely. Then refrigerate overnight to allow it to lose any excess moisture.', 'https://b.zmtcdn.com/data/o2_assets/e444ade83eb22360b6ca79e6e777955f1632716661.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_title` varchar(255) NOT NULL,
  `review_text` text NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_id`, `product_id`, `rating`, `review_title`, `review_text`, `review_date`) VALUES
(1, 1, 3, 4, 'just wow', 'very very good quality i love it very much', '2021-11-11'),
(2, 4, 3, 5, 'Much Better', 'very testy and delicious ,i will order it agian ..', '2021-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `user_entries`
--

CREATE TABLE `user_entries` (
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_entries`
--

INSERT INTO `user_entries` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'saikat chattejee', 'saikat@gmail.com', 'saikat12'),
(2, 'rubun chatterjee', 'rubun@gmail.com', 'rubun12'),
(4, 'souvik chattejee', 'souvik@gmail.com', 'souvik12'),
(5, 'Babu Chatterjee', 'babu@gmail.com', 'babu12'),
(24, 'Bulai Chatterjee', 'bulai@gmaill.com', 'bulai12');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`) VALUES
(18, 4, 8),
(19, 4, 8),
(20, 2, 5),
(21, 2, 7),
(22, 2, 6),
(23, 2, 10),
(24, 1, 3),
(25, 1, 1),
(26, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user_entries`
--
ALTER TABLE `user_entries`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_entries`
--
ALTER TABLE `user_entries`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
