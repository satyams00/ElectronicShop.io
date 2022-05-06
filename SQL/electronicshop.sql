-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 12:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronicshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_page`
--

CREATE TABLE `product_page` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `no_of_rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_page`
--

INSERT INTO `product_page` (`id`, `image`, `title`, `price`, `description`, `rating`, `no_of_rating`) VALUES
(1, 'product/61fce38f1c40a.jpg', 'Boat HeadPhone navy blue', 1299, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '2', ''),
(2, 'product/61fce3c125f2a.jpeg', 'HeadPhone pink', 2999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '3', ''),
(3, 'product/61fce3d63d920.png', 'Boat blue headphone', 999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '4', ''),
(4, 'product/61fce41447e8f.jpeg', 'Oppo F19 pro', 16999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '5', ''),
(5, 'product/61fce45548ca7.png', 'New Laptop', 45999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '2', ''),
(6, 'product/61fce478ac500.jpg', 'Samsung', 25999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '3', ''),
(7, 'product/61fce4901fb46.jpeg', 'Black HeadPhone', 9999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '4', ''),
(8, 'product/61fce4c255068.png', 'Asus Laptop', 50999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '4', ''),
(9, 'product/61fce4de44367.jpg', 'One Plus', 56999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '5', ''),
(10, 'product/61fce521395e2.jpg', 'LENOVO Laptop ', 36000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '5', ''),
(11, 'product/61fce55cc260f.jpeg', 'iPhone 13', 89000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '3', ''),
(12, 'product/61fce56f55fd5.png', 'HP laptop', 67999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '2', ''),
(13, 'product/61fce585267e2.jpg', 'OPPO A74', 63999, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '1', ''),
(14, 'product/61fce5b44e582.jpg', 'Mi Notebook Ultra ', 45000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '3', ''),
(15, 'product/61fce5cdf09b9.jpg', 'Samsung 5G', 76000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '4', ''),
(16, 'product/61fce609510b1.jpg', 'iPhone 10', 56000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat dolor natus consequatur, in accusamus a architecto molestiae totam ad adipisci sint error ipsam eligendi officia nesciunt incidunt, quas ratione quis, tenetur itaque sunt. Dolore harum cupiditate doloribus incidunt quaerat qui est, pariatur deleniti eius voluptas!', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `starr`
--

CREATE TABLE `starr` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `starr`
--

INSERT INTO `starr` (`id`, `Name`, `ProductName`, `Email`, `Rating`, `Review`) VALUES
(1, 'Rname', '', 'Remail', 0, 'Review'),
(2, 'Rname', '', 'Remail', 0, 'Review'),
(3, 'Satyam', '', 'SS@hd.ch', 0, 'Satyabjcskbcni sn cd  dskc s s'),
(4, 'Satyam', '', 'SS@hd.ch', 0, 'Satyabjcskbcni sn cd  dskc s s'),
(10, 'ASJKL', '', '', 0, 'ASDFGHJKL;'),
(12, 'ashjk', '', 'sdfgh@gh.gf', 0, 'ASDL;'),
(26, 'Satyam', '', 'ssingh2002000200@asbd.ciksn', 0, 'xhhhjnksjedkdaklwnklndw kl qkn qkl qwkmlwqkldwqklmqwdmkldwqmlkmkldasklmasdmlksad'),
(27, 'Satyam', '', 'ssinfhwhb@jhds.dhb', 1, 'dbchbj'),
(28, 'wefsyg', '', 'hjbfbhj@fghjk.cub', 1, 'mndfi'),
(29, '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `pass`, `email`) VALUES
(1, 'Admin', 'pass', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_page`
--
ALTER TABLE `product_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starr`
--
ALTER TABLE `starr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_page`
--
ALTER TABLE `product_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `starr`
--
ALTER TABLE `starr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
