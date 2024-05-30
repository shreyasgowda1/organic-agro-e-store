-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 10:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `timefrom` varchar(50) NOT NULL,
  `timeto` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `about` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `type`, `timefrom`, `timeto`, `image`, `city`, `address`, `about`) VALUES
(1, 'kmf', 'FERTILIZER', '10:30', '17:30', 'water-melon.jpg', 'Banglore', 'banglore', 'fertilizer shop');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `ownername`, `feedback`, `rating`) VALUES
(1, 'priya', 'peter', 'very good', 0),
(2, 'vaishak', 'yogitha', 'good product', 0),
(3, 'priya', 'abc', 'zfsdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notification` varchar(150) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `notification`, `date`) VALUES
(1, 'good morninf', 'hai', '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL,
  `blood` varchar(30) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `longi` varchar(30) NOT NULL,
  `latti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`firstname`, `secondname`, `id`, `username`, `email`, `phone`, `password`, `address`, `city`, `blood`, `qrcode`, `longi`, `latti`) VALUES
('suresh', 'p', 3, 'kushal', 'kushal', '9686036326', '202cb962ac59075b964b07152d234b70', '#38, A block, JP Nagar', 'mysuru', 'A-', 'qrcode.png', '', ''),
('yogitha', 'm', 4, 'yogitha', 'yogitha', '8884644589', '202cb962ac59075b964b07152d234b70', 'Kuvempu Nagar, Mysuru, Karnataka, India', 'mysuru', 'A+', 'qrcode.png', '', ''),
('sachin', 'bv', 6, 'sachinv', 'sachinv', '7090225253', '202cb962ac59075b964b07152d234b70', 'Vijay Nagar 2nd Stage, Vijayanagar, Mysuru, Karnataka, India', 'mysore', 'A+', 'qrcode.png', '76.6212961', '12.337741699999999');

-- --------------------------------------------------------

--
-- Table structure for table `ownernoti`
--

CREATE TABLE `ownernoti` (
  `id` int(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ndate` varchar(50) NOT NULL,
  `notification` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownernoti`
--

INSERT INTO `ownernoti` (`id`, `title`, `ndate`, `notification`) VALUES
(1, 'hai', '2020-05-22', 'bye');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `video` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `season` varchar(50) NOT NULL,
  `about` varchar(250) NOT NULL,
  `care` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ownername`, `name`, `type`, `photo`, `video`, `price`, `height`, `season`, `about`, `care`) VALUES
(1, 'peter', 'Water Melon', 'Fruit', 'water-melon.jpg', 'https://www.youtube.com/embed/p24nAxw99w0', '115', '20 inch', 'Summer', 'Everyone seems to love juicy watermelon in the summertime. Native to Africa, melons need warm temperatures (up to 80 degrees during the day) and a long growing season', 'Care seems to love juicy watermelon in the summertime. Native to Africa, melons need warm temperatures (up to 80 degrees during the day) and a long growing season'),
(2, 'yogitha', 'Green Plant', 'Plant', 'nursery-farms.jpg', 'https://www.youtube.com/embed/j9kxTQh0_K4', '50', '5.2', 'Mansoon', 'A nursery is a place where plants are propagated and grown to a desired age. ... Some of them specialize in one phase of the process: propagation, growing out, or retail sale; or in one type of plant: e.g., groundcovers, shade plants, or rock garden ', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `username`, `product_id`, `quantity`, `message`) VALUES
(1, 'priya', '1', '25', 'we want'),
(2, 'vaishak', '2', '', 'i need more information '),
(3, 'vaishak', '2', '10', ' i need more info');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(30) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `ownername`, `username`, `product_id`, `quantity`, `status`, `message`) VALUES
(1, 'peter', 'priya', '1', '25', 'approved ', 'ok'),
(2, 'yogitha', 'vaishak', '2', '10', 'approved ', 'this is tea plant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `secondname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(30) NOT NULL,
  `blood` varchar(30) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `secondname`, `email`, `phone`, `password`, `address`, `city`, `blood`, `otp`) VALUES
(2, 'priya', 'priya', 'john', 'priya', '8845651475', '202cb962ac59075b964b07152d234b70', 'Kuvempu Nagara, Mysuru, Karnataka, India', 'mysore', 'A+', 0),
(5, 'vaishak', 'vaishak', 'm', 'vaishak', '8884644589', '202cb962ac59075b964b07152d234b70', 'Kuvempu Nagara, Mysuru, Karnataka, India', 'mysuru', 'B+', 0),
(6, 'prasad', '', '', 'prasad@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 67035),
(7, 'sadsa', '', '', 'a@gmail.com', '', 'f970e2767d0cfe75876ea857f92e319b', '', '', '', 0),
(8, 'aa', '', '', 'prasadmp151@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 30936),
(9, 'a', '', '', 'prasadmp151@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 30936),
(10, 'd', '', '', 'prasad@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 67035),
(11, 'ss', '', '', 'pk@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 62920),
(12, 'as', '', '', 'prasadmp151@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', 30936),
(13, 'pk', '', '', 'prasad@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(14, 'x', '', '', 'pk@gmail.com', '', '698d51a19d8a121ce581499d7b701668', '', '', '', 0),
(15, 'ddd', '', '', 'a@gmail.com', '', '47bce5c74f589f4867dbd57e9ca9f808', '', '', '', 0),
(16, 'abc', '', '', 'prasadmp151@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(17, 'cbnvz', '', '', 'priyajoshna4@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(18, 'sachinbv', '', '', 'sachinsimha1997@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(19, 'we', '', '', 'prasadmp151@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(20, 'sachinb', '', '', 'sachinsimha1997@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownernoti`
--
ALTER TABLE `ownernoti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ownernoti`
--
ALTER TABLE `ownernoti`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
