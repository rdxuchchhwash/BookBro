-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 07:26 PM
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
(1, 'Misir Ali Somogro', 'NOVELS', 'JAFOR IQBAL', 'ASDASDASDASDASDASDAD', 16, 200, 'images/bk1.jpg', '2017-12-05', 'BANGLADESH', 'BANGLA', 'NEW', 401),
(2, 'Lilabotir Mrittu', 'STORY', 'HUMAYUN AHMED', 'adasdasdasd', 11, 250, 'images/bk2.jpg', '2017-12-05', 'BANGLADESH', 'BANGLA', 'NEW', 17),
(3, 'Akjon Himu Abong Kyekti ', 'NOVELS', 'JAFOR IQBAL', 'asadadasdasd', 15, 240, 'images/bk3.jpg', '2017-12-05', 'BANGLADESH', 'BANGLA', 'NEW', 25),
(4, 'Abong Himu', 'NOVELS', 'JAFOR IQBAL', 'szadfdsfs', 15, 350, 'images/bk4.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 15),
(5, 'Nishithini', 'STORY', 'HUMAYUN AHMED', 'dasdasdas', 16, 320, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 23),
(6, 'Lilabotir Mrittu 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 16, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 2),
(7, 'Mrittu 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 70),
(8, 'Lilabotir 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 5),
(9, 'Jajabor Mrittu 2', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 12),
(10, 'Amar golpo', 'STORY', 'HUMAYUN AHMED', 'dfsxgzdf', 20, 400, 'images/bk5.jpg', '2017-12-06', 'BANGLADESH', 'BANGLA', 'NEW', 1);

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
-- Table structure for table `oldbookstat`
--

CREATE TABLE `oldbookstat` (
  `old_book_id` int(10) NOT NULL,
  `book_status` varchar(20) NOT NULL,
  `old_book_seller_mail` varchar(50) NOT NULL,
  `seller_contact` varchar(20) NOT NULL,
  `seller_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) NOT NULL,
  `order_no` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `book_type` varchar(10) NOT NULL,
  `book_price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` date NOT NULL,
  `customerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_no`, `book_id`, `book_type`, `book_price`, `quantity`, `date`, `customerID`) VALUES
(1, 1, 1, 'NEW', 200, 2, '2017-12-14', 1),
(2, 1, 2, 'NEW', 250, 2, '2017-12-14', 1),
(3, 1, 3, 'NEW', 240, 2, '2017-12-14', 1),
(4, 1, 4, 'NEW', 350, 2, '2017-12-14', 1),
(5, 1, 5, 'NEW', 320, 2, '2017-12-14', 1),
(6, 1, 6, 'NEW', 400, 2, '2017-12-14', 1),
(7, 2, 1, 'NEW', 200, 2, '2017-12-14', 1),
(8, 2, 2, 'NEW', 250, 2, '2017-12-14', 1),
(9, 2, 3, 'NEW', 240, 2, '2017-12-14', 1),
(10, 2, 4, 'NEW', 350, 2, '2017-12-14', 1),
(11, 2, 5, 'NEW', 320, 2, '2017-12-14', 1),
(12, 2, 6, 'NEW', 400, 2, '2017-12-14', 1),
(13, 3, 2, 'NEW', 250, 5, '2017-12-14', 1),
(14, 3, 3, 'NEW', 240, 1, '2017-12-14', 1),
(15, 3, 4, 'NEW', 350, 1, '2017-12-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `userMail` varchar(50) NOT NULL,
  `book_id` int(11) NOT NULL,
  `review_des` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `userMail`, `book_id`, `review_des`, `username`, `date`, `status`) VALUES
(13, 'rdx.uchchhwash@gmail.com', 2, 'What A Interesting Book', 'Uchchhwash Chakraborty', '2017-12-13', 0),
(14, 'rdx.uchchhwash@gmail.com', 1, 'A very Good book', 'Uchchhwash Chakraborty', '2017-12-13', 1),
(15, 'rdx.uchchhwash@gmail.com', 4, 'This is a Very Good Book', 'Uchchhwash Chakraborty', '2017-12-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `total_cost` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `order_id`, `status`, `total_cost`, `customerID`, `date`) VALUES
(1, 1, 'PENDING', 3520, 1, '2017-12-14'),
(2, 2, 'PENDING', 3520, 1, '2017-12-14'),
(3, 3, 'PENDING', 1840, 1, '2017-12-14');

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
  `book_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`id`, `session_id`, `book_id`, `book_type`, `book_qty`, `book_price`) VALUES
(486, 'pvfqrc7s3toom226f79jpc0mb7', 7, 'NEW', 1, 400),
(487, 'pvfqrc7s3toom226f79jpc0mb7', 1, 'NEW', 1, 200),
(488, 'pvfqrc7s3toom226f79jpc0mb7', 3, 'NEW', 1, 240),
(489, 'pvfqrc7s3toom226f79jpc0mb7', 8, 'NEW', 1, 400);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `full_name`, `email`, `mobile_no`, `password`, `dob`, `gender`, `address`) VALUES
(1, 'Uchchhwash Chakraborty', 'rdx.uchchhwash@gmail.com', '01631666080', '12341234', '1996-04-10', 'MALE', 'KalaChandpur , Nadda , Dhaka'),
(3, 'Roachi Shome', 'roachi.shome@gmail.com', '01680798783', '12341234', '1996-09-03', 'MALE', 'Sylhet , B'),
(6, 'Showmik', 'showmik@gmail.com', '01612457896', '12341234', '1995-07-05', 'MALE', 'Sylhet , B'),
(7, 'Nayan', 'nayan@gmail.com', '01621457896', '12341234', '1996-12-10', 'MALE', 'Nadda , Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userMail` varchar(50) NOT NULL,
  `book_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userMail`, `book_id`, `status`) VALUES
(52, 'rdx.uchchhwash@gmail.com', 1, 0),
(53, 'rdx.uchchhwash@gmail.com', 3, 0),
(54, 'rdx.uchchhwash@gmail.com', 1, 0),
(55, 'rdx.uchchhwash@gmail.com', 2, 0),
(56, 'rdx.uchchhwash@gmail.com', 1, 0),
(57, 'rdx.uchchhwash@gmail.com', 4, 0),
(58, 'rdx.uchchhwash@gmail.com', 7, 0);

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
-- Indexes for table `oldbookstat`
--
ALTER TABLE `oldbookstat`
  ADD UNIQUE KEY `old_book_id` (`old_book_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
