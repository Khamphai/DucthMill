-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 03:09 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Id_bill` int(10) NOT NULL,
  `date_send` date NOT NULL,
  `cus_id` int(10) NOT NULL,
  `emp_ip` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `vill_add` varchar(20) NOT NULL,
  `dist_add` varchar(20) NOT NULL,
  `prov_add` varchar(20) NOT NULL,
  `no_house` varchar(8) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `user_cus` varchar(20) NOT NULL,
  `password_cus` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `first_name`, `last_name`, `vill_add`, `dist_add`, `prov_add`, `no_house`, `phone`, `user_cus`, `password_cus`) VALUES
(1, 'bank', 'bank', 'bb', 'bb', 'bb', '11', '1111', 'bbbb', '123'),
(2, 'Test', 'Test', 'NA', 'ໄຊທານີ', '', '1212', '20123123', 'test', '123'),
(3, 'pa', 'svnb', 'tan', 'ໄຊທານີ', '', '128', '55845158', 'pa', '123');

-- --------------------------------------------------------

--
-- Table structure for table `detail_bill`
--

CREATE TABLE `detail_bill` (
  `quantity_bill` int(10) NOT NULL,
  `id_lading` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_invoice`
--

CREATE TABLE `detail_invoice` (
  `id_invoice_detail` int(10) NOT NULL,
  `id_invoice` int(10) DEFAULT NULL,
  `pro_id` int(10) DEFAULT NULL,
  `quantity_invoice` int(10) DEFAULT NULL,
  `cus_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_invoice`
--

INSERT INTO `detail_invoice` (`id_invoice_detail`, `id_invoice`, `pro_id`, `quantity_invoice`, `cus_id`) VALUES
(3, 6, 2, 1, 1),
(4, 6, 6, 1, 1),
(5, 6, 4, 1, 1),
(7, 7, 1, 4, 1),
(8, 7, 2, 1, 1),
(18, 9, 1, 2, 2),
(19, 8, 2, 1, 1),
(20, 8, 6, 1, 1),
(21, 9, 7, 1, 2),
(27, 10, 1, 4, 1),
(28, 10, 10, 1, 1),
(29, 10, 6, 4, 1),
(31, 10, 12, 1, 1),
(32, 10, 5, 1, 1),
(33, 11, 1, 1, 1),
(34, 12, 8, 1, 3),
(35, 12, 1, 4, 3),
(40, NULL, 2, 1, 3),
(41, NULL, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_lading`
--

CREATE TABLE `detail_lading` (
  `quantity_lading` int(10) NOT NULL,
  `id_lading` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `id_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pro`
--

CREATE TABLE `detail_pro` (
  `quatity_pro` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `ID_emp` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) DEFAULT 'emp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`ID_emp`, `first_name`, `last_name`, `phone`, `user_name`, `password`, `position`) VALUES
(1, 'numfon', 'sorinthabun', '02099876540', 'numfon', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(10) NOT NULL,
  `date_invoice` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cus_id` int(10) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `date_invoice`, `cus_id`, `status`) VALUES
(6, '2018-06-23 19:59:56', 1, 'Pending'),
(7, '2018-06-23 20:08:30', 1, 'Pending'),
(8, '2018-06-23 22:54:24', 1, 'Pending'),
(9, '2018-06-23 23:00:49', 2, 'Pending'),
(10, '2018-06-24 11:12:29', 1, 'Receive'),
(11, '2018-06-24 11:13:17', 1, 'Receive'),
(12, '2018-06-24 11:15:41', 3, 'Receive');

-- --------------------------------------------------------

--
-- Table structure for table `lading`
--

CREATE TABLE `lading` (
  `id_lad` int(10) NOT NULL,
  `date_lading` date NOT NULL,
  `id_emp` int(10) NOT NULL,
  `sell_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(10) NOT NULL,
  `name_pro` varchar(20) NOT NULL,
  `pro_date` date NOT NULL,
  `exprie` date NOT NULL,
  `id_type` int(10) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name_pro`, `pro_date`, `exprie`, `id_type`, `picture`, `price`) VALUES
(1, 'stawberry', '2018-06-08', '2018-06-30', 5, 'img7.jpg', 25000),
(2, 'all fruit', '2018-06-08', '2018-06-14', 3, 'img2.jpg', 10000),
(3, 'buberry', '2018-06-12', '2018-06-30', 3, 'img3.jpg', 12000),
(4, 'orange', '2018-06-03', '2018-06-30', 3, 'img4.jpg', 4000),
(5, 'chocolate', '2018-06-12', '2018-06-30', 4, 'img5.png', 8000),
(6, 'coffee', '2018-06-03', '2018-06-30', 4, 'img6.jpg', 20000),
(7, 'milk', '2018-06-08', '2018-06-30', 4, 'img7.jpg', 18000),
(8, 'stawberry', '2018-06-03', '2018-06-30', 4, 'img8.jpg', 13000),
(9, 'freshy', '2018-06-08', '2018-06-30', 5, 'img1.png', 2000),
(10, 'stawberry', '2018-06-03', '2018-06-30', 5, 'img2.jpg', 5000),
(11, 'coconut', '2018-06-08', '2018-06-30', 5, 'img3.jpg', 8000),
(12, 'all fruit', '2018-06-03', '2018-06-30', 5, 'img4.jpg', 1000),
(13, 'cereal', '2018-06-08', '2018-06-30', 5, 'img5.png', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sell_id` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `phone_sell` varchar(15) NOT NULL,
  `user_sell` varchar(20) NOT NULL,
  `pass_sell` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sell_id`, `f_name`, `L_name`, `phone_sell`, `user_sell`, `pass_sell`) VALUES
(1, 'pa', 'vathsana', '0209807894', 'pa', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `type_pro`
--

CREATE TABLE `type_pro` (
  `id_type` int(10) NOT NULL,
  `name_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_pro`
--

INSERT INTO `type_pro` (`id_type`, `name_type`) VALUES
(3, 'ນົມປ້ຽວ'),
(4, 'ນົມສົດ'),
(5, 'yogurt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Id_bill`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `emp_ip` (`emp_ip`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`quantity_bill`),
  ADD KEY `id_lading` (`id_lading`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `detail_invoice`
--
ALTER TABLE `detail_invoice`
  ADD PRIMARY KEY (`id_invoice_detail`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `detail_lading`
--
ALTER TABLE `detail_lading`
  ADD PRIMARY KEY (`quantity_lading`),
  ADD KEY `id_lading` (`id_lading`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `detail_pro`
--
ALTER TABLE `detail_pro`
  ADD PRIMARY KEY (`quatity_pro`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`ID_emp`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `lading`
--
ALTER TABLE `lading`
  ADD PRIMARY KEY (`id_lad`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `sell_id` (`sell_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `type_pro`
--
ALTER TABLE `type_pro`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `Id_bill` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `quantity_bill` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_invoice`
--
ALTER TABLE `detail_invoice`
  MODIFY `id_invoice_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `detail_lading`
--
ALTER TABLE `detail_lading`
  MODIFY `quantity_lading` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_pro`
--
ALTER TABLE `detail_pro`
  MODIFY `quatity_pro` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `ID_emp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `lading`
--
ALTER TABLE `lading`
  MODIFY `id_lad` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sell_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `type_pro`
--
ALTER TABLE `type_pro`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`emp_ip`) REFERENCES `emp` (`ID_emp`),
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);

--
-- Constraints for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `detail_bill_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `detail_bill_ibfk_2` FOREIGN KEY (`id_lading`) REFERENCES `lading` (`id_lad`);

--
-- Constraints for table `detail_invoice`
--
ALTER TABLE `detail_invoice`
  ADD CONSTRAINT `detail_invoice_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id_invoice`),
  ADD CONSTRAINT `detail_invoice_ibfk_3` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);

--
-- Constraints for table `detail_lading`
--
ALTER TABLE `detail_lading`
  ADD CONSTRAINT `detail_lading_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `detail_lading_ibfk_2` FOREIGN KEY (`id_lading`) REFERENCES `lading` (`id_lad`),
  ADD CONSTRAINT `detail_lading_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type_pro` (`id_type`);

--
-- Constraints for table `detail_pro`
--
ALTER TABLE `detail_pro`
  ADD CONSTRAINT `detail_pro_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`Id_bill`),
  ADD CONSTRAINT `detail_pro_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `detail_pro_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type_pro` (`id_type`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `lading`
--
ALTER TABLE `lading`
  ADD CONSTRAINT `lading_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `emp` (`ID_emp`),
  ADD CONSTRAINT `lading_ibfk_2` FOREIGN KEY (`sell_id`) REFERENCES `seller` (`sell_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_pro` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
