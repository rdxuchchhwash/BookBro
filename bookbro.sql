-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 09:08 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'rdxuchchhhwash', '12341234'),
(2, 'abir', '12341234'),
(4, 'ali', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_records`
--

CREATE TABLE `admin_records` (
  `record_id` int(10) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `operation` varchar(40) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_records`
--

INSERT INTO `admin_records` (`record_id`, `admin_id`, `operation`, `time`, `date`) VALUES
(1, 0, 'ADDED CATEGORY', '07:36:29', '2017-12-23'),
(2, 0, 'ADDED CATEGORY', '07:36:43', '2017-12-23'),
(3, 0, 'ADDED CATEGORY', '07:37:01', '2017-12-23'),
(4, 0, 'ADDED CATEGORY', '07:37:14', '2017-12-23'),
(5, 0, 'ADDED CATEGORY', '07:37:36', '2017-12-23'),
(6, 0, 'ADDED CATEGORY', '07:37:48', '2017-12-23'),
(7, 0, 'ADDED CATEGORY', '07:39:09', '2017-12-23'),
(8, 0, 'ADDED CATEGORY', '07:40:00', '2017-12-23'),
(9, 0, 'ADDED AUTHOR', '07:41:30', '2017-12-23'),
(10, 0, 'ADDED AUTHOR', '07:43:12', '2017-12-23'),
(11, 0, 'ADDED AUTHOR', '07:43:55', '2017-12-23'),
(12, 0, 'ADDED NEW BOOK', '07:49:04', '2017-12-23'),
(13, 0, 'ADDED AUTHOR', '07:52:32', '2017-12-23'),
(14, 0, 'ADDED AUTHOR', '07:53:16', '2017-12-23'),
(15, 0, 'ADDED AUTHOR', '07:58:37', '2017-12-23'),
(16, 0, 'ADDED NEW BOOK', '07:59:49', '2017-12-23'),
(17, 0, 'ADDED NEW BOOK', '08:01:30', '2017-12-23'),
(18, 0, 'BOOK REMOVED', '08:01:46', '2017-12-23'),
(19, 0, 'ADDED NEW BOOK', '08:02:45', '2017-12-23'),
(20, 0, 'ADDED NEW BOOK', '08:04:56', '2017-12-23'),
(21, 0, 'ADDED NEW BOOK', '08:06:26', '2017-12-23'),
(22, 0, 'ADDED CATEGORY', '08:07:34', '2017-12-23'),
(23, 0, 'ADDED NEW BOOK', '08:09:02', '2017-12-23'),
(24, 0, 'ADDED AUTHOR', '08:14:22', '2017-12-23'),
(25, 0, 'ADDED NEW BOOK', '08:15:16', '2017-12-23'),
(26, 0, 'ADDED NEW BOOK', '08:16:57', '2017-12-23'),
(27, 0, 'ADDED NEW BOOK', '08:18:35', '2017-12-23'),
(28, 0, 'ADDED CATEGORY', '08:19:05', '2017-12-23'),
(29, 0, 'ADDED NEW BOOK', '08:20:16', '2017-12-23'),
(30, 0, 'ADDED NEW BOOK', '08:30:51', '2017-12-23'),
(31, 0, 'ADDED NEW BOOK', '08:34:57', '2017-12-23'),
(32, 0, 'ADDED NEW BOOK', '08:37:23', '2017-12-23'),
(33, 0, 'ADDED NEW BOOK', '08:37:58', '2017-12-23'),
(34, 0, 'ADDED NEW BOOK', '08:42:09', '2017-12-23'),
(35, 0, 'BOOK REMOVED', '08:43:14', '2017-12-23'),
(36, 0, 'ADMIN LOGOUT', '08:43:49', '2017-12-23'),
(37, 4, 'ADMIN LOGIN', '08:43:56', '2017-12-23'),
(38, 4, 'BOOK REMOVED', '08:44:15', '2017-12-23'),
(39, 4, 'BOOK REMOVED', '08:44:22', '2017-12-23'),
(40, 4, 'ADDED NEW BOOK', '08:45:08', '2017-12-23'),
(41, 4, 'ADDED NEW BOOK', '08:46:16', '2017-12-23'),
(42, 4, 'ADDED NEW BOOK', '08:49:21', '2017-12-23'),
(43, 4, 'ADDED NEW BOOK', '08:50:12', '2017-12-23'),
(44, 4, 'ADDED NEW BOOK', '08:51:11', '2017-12-23'),
(45, 4, 'ADDED NEW BOOK', '08:51:48', '2017-12-23'),
(46, 4, 'ADDED NEW BOOK', '08:52:35', '2017-12-23'),
(47, 4, 'ADDED NEW BOOK', '08:53:37', '2017-12-23'),
(48, 4, 'ADDED NEW BOOK', '08:55:31', '2017-12-23'),
(49, 4, 'ADDED NEW BOOK', '08:56:41', '2017-12-23'),
(50, 4, 'ADDED NEW BOOK', '08:58:15', '2017-12-23'),
(51, 4, 'ADDED NEW BOOK', '09:00:30', '2017-12-23'),
(52, 4, 'ADDED NEW BOOK', '09:01:17', '2017-12-23'),
(53, 4, 'ADDED NEW BOOK', '09:02:15', '2017-12-23'),
(54, 4, 'ADDED NEW BOOK', '09:02:56', '2017-12-23');

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
(1, 'Muhammed Zafar Iqbal ', 'Muhammed Zafar Iqbal is a Bangladeshi author, physicist, professor and activist. He is a professor o'),
(2, 'Humayun Ahmed', 'Humayun Ahmed was a Bangladeshi writer, dramatist, screenwriter, filmmaker, song writer, scholar, an'),
(3, 'Kazi Nazrul Islam', 'Kazi Nazrul Islam was a Bengali Poet, Writer, Musician, and Revolutionary. He is the national poet o'),
(4, 'Zahir Raihan', 'Zahir Raihan was a Bangladeshi novelist, writer and filmmaker. He is most notable for his documentar'),
(5, 'Rabindranath Tagore', 'Rabindranath Tagore FRAS, also written RavÄ«ndranÄtha ThÄkura, sobriquet Gurudev, was an Indian po'),
(6, 'Other', 'This category is for those books where author is not given.'),
(7, 'Charles Dickens', 'Charles John Huffam Dickens was an English writer and social critic. ');

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
(1, 'Hiji Biji', 'Fiction', 'Humayun Ahmed', 'You will definitely love to read Hiji Biji.', 3, 120, 'images/1.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(5, 'Borof Gola nodi', 'Fiction', 'Muhammed Zafar Iqbal', 'You will definitely love to read  Borof Gola nodi.', 5, 145, 'images/2.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(6, 'Neuron er Onuronon', 'Education', 'Muhammed Zafar Iqbal', 'Neuron er Onuronon  Is one of the best writings of all time.', 8, 120, 'images/6.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(7, 'The Science Of Getting Rich', 'Education', 'Other', 'The Science Of Getting Rich You will definitely love to read.', 10, 335, 'images/7.jpg', '2017-12-23', 'America', 'English', 'NEW', 0),
(8, 'A tale of two cities', 'Novel', 'Charles Dickens', 'A tale of two cities Is one of the best writings of all time.', 5, 250, 'images/8.jpg', '2017-12-23', 'England', 'English', 'NEW', 0),
(9, 'Mrityukshuda', 'Story', 'Kazi Nazrul Islam', 'Mrityukshuda Is one of the best writings of all time.', 4, 800, 'images/9.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(10, 'Amar gonit', 'Education', 'Muhammed Zafar Iqbal', 'Amar gonit will teach you maths.', 3, 99, 'images/10.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(11, 'Shotto Kothon', 'Islamic books', 'Other', 'Shotto Kothon is an islamic book.', 5, 350, 'images/11.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(12, 'Niá¸¥sanga grahacÄrÄ«', 'Sci-Fi', 'Muhammed Zafar Iqbal', 'Niá¸¥sanga grahacÄrÄ« is sci fi book.', 5, 120, 'images/12.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(13, 'Baba Jokhon Choto', 'Education', 'Other', 'Baba Jokhon Choto tokhon dada onek boro.', 2, 80, 'images/13.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(14, 'Opekkha', 'Fiction', 'Humayun Ahmed', 'Waiting....', 3, 150, 'images/14.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(15, 'Kobi', 'Fiction', 'Humayun Ahmed', 'Baba Jokhon Choto tokhon Kobi onek boro.', 5, 500, 'images/15.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(16, 'Brishti o meghmala', 'Fiction', 'Muhammed Zafar Iqbal', 'Brishti o meghmala Brishti o meghmala Brishti o meghmala.', 3, 140, 'images/16.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(17, 'Kichu shoishob', 'Horror', 'Humayun Ahmed', 'Kichu shoishob kere ney shob.', 3, 125, 'images/17.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(18, 'Noboni', 'Story', 'Humayun Ahmed', 'Noboni', 1, 111, 'images/18.jpg', '2017-12-23', 'Bangadesh', 'Bangla', 'NEW', 0),
(19, 'Gitanjali', 'Novel', 'Rabindranath Tagore', 'Gitanjali got the the novel.', 3, 800, 'images/19.jpg', '2017-12-23', 'India', 'English', 'NEW', 0);

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
(1, 'Horror'),
(2, 'Sci-Fi'),
(3, 'Education'),
(4, 'Thriller'),
(5, 'Story'),
(6, 'Development'),
(7, 'History'),
(8, 'Fiction'),
(9, 'Novel'),
(10, 'Islamic books');

-- --------------------------------------------------------

--
-- Table structure for table `featured_books`
--

CREATE TABLE `featured_books` (
  `id` int(11) NOT NULL,
  `bk_name` varchar(50) NOT NULL,
  `book_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin_records`
--
ALTER TABLE `admin_records`
  ADD PRIMARY KEY (`record_id`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_records`
--
ALTER TABLE `admin_records`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `featured_books`
--
ALTER TABLE `featured_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
