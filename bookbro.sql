-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 09:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation`
--

CREATE TABLE `admin_operation` (
  `admin_id` int(11) NOT NULL,
  `operation` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `author_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `author_details`) VALUES
(1, 'HUMAYUN AHMED', 'good man'),
(2, 'KAZI NAZRUL ISLAM', 'good man'),
(3, 'JAFOR IQBAL', 'good man');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bk_name` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `country` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `book_type` varchar(10) NOT NULL,
  `no_of_views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bk_name`, `category`, `author`, `description`, `quantity`, `price`, `img_path`, `date`, `country`, `language`, `book_type`, `no_of_views`) VALUES
(1, 'Misir Ali Somogro', 'NOVELS', 'JAFOR IQBAL', 'ASDASDASDASDASDASDAD', 10, 200, 'images/bk1.jpg', '2017-12-05', 'BANGLADESH', 'BANGLA', 'NEW', 12),
(2, 'Lilabotir Mrittu', 'STORY', 'HUMAYUN AHMED', 'adasdasdasd', 20, 250, 'images/bk2.jpg', '2017-12-05', 'BANGLADESH', 'BANGLA', 'NEW', 6),
(3, 'Akjon Himu Abong Kyekti ', 'NOVELS', 'JAFOR IQBAL', 'asadadasdasd', 15, 240, 'images/bk3.jpg', '2017-12-05', 'BANGLADESH', 'BANGLA', 'NEW', 13),
(4, 'Abong Himu', 'NOVELS', 'JAFOR IQBAL', 'szadfdsfs', 15, 350, 'images/bk4.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 5),
(5, 'Nishithini', 'STORY', 'HUMAYUN AHMED', 'dasdasdas', 25, 320, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 3),
(6, 'Lilabotir Mrittu 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 1),
(7, 'Mrittu 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 8),
(8, 'Lilabotir 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 0),
(9, 'Jajabor Mrittu 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 1),
(10, 'Amar golpo', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'NOVELS'),
(2, 'HORROR'),
(3, 'POEMS'),
(4, 'LITERATURE'),
(5, 'EDUCATION'),
(6, 'STORY');

-- --------------------------------------------------------

--
-- Table structure for table `featured_books`
--

CREATE TABLE `featured_books` (
  `id` int(11) NOT NULL,
  `bk_name` varchar(50) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_books`
--

INSERT INTO `featured_books` (`id`, `bk_name`, `book_id`) VALUES
(3, 'Misir Ali Somogro', 1),
(5, 'Mrittu 2', 7),
(4, 'Jajabor Mrittu 2', 9);

-- --------------------------------------------------------

--
-- Table structure for table `new_bk_transactions`
--

CREATE TABLE `new_bk_transactions` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `old_bk_transactions`
--

CREATE TABLE `old_bk_transactions` (
  `seller_user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `buyer_user_id` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE `tempcart` (
  `id` int(11) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_type` varchar(20) NOT NULL,
  `book_qty` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`id`, `session_id`, `book_id`, `book_type`, `book_qty`, `user_id`) VALUES
(5, 'dtchb0rd55o3rtuq5lqleub1o4', 7, 'NEW', 4, NULL),
(6, 'dtchb0rd55o3rtuq5lqleub1o4', 9, 'NEW', 2, NULL),
(19, 'dtchb0rd55o3rtuq5lqleub1o4', 1, 'NEW', 1, NULL),
(23, 'dtchb0rd55o3rtuq5lqleub1o4', 3, 'NEW', 1, NULL),
(24, 'dtchb0rd55o3rtuq5lqleub1o4', 5, 'NEW', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`,`author_name`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`,`category_name`);

--
-- Indexes for table `featured_books`
--
ALTER TABLE `featured_books`
  ADD PRIMARY KEY (`id`,`bk_name`),
  ADD UNIQUE KEY `book_id` (`book_id`);

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`,`email`,`mobile_no`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `featured_books`
--
ALTER TABLE `featured_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
