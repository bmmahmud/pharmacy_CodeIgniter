-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 04:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `itentity` varchar(20) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `itentity`, `username`, `password`) VALUES
(1, '', 'admin', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `create_generic_name`
--

CREATE TABLE `create_generic_name` (
  `generic_id` int(100) NOT NULL,
  `generic_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_generic_name`
--

INSERT INTO `create_generic_name` (`generic_id`, `generic_name`) VALUES
(1, 'Antiviral'),
(7, 'Paracetamol'),
(8, 'Amlodipine'),
(9, 'Calcium Carbonate'),
(10, 'Flucloxacillin Sodium'),
(11, 'Halazone'),
(12, 'Diclofenac Potassium'),
(13, 'Ranitidine');

-- --------------------------------------------------------

--
-- Table structure for table `create_medicine_name`
--

CREATE TABLE `create_medicine_name` (
  `medicine_name_id` int(20) NOT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `medicine_presentation_id` int(15) DEFAULT NULL,
  `medicine_presentation_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_medicine_name`
--

INSERT INTO `create_medicine_name` (`medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `medicine_presentation_id`, `medicine_presentation_name`) VALUES
(1, 'Antiva®', NULL, 'Antiviral', NULL, NULL),
(2, 'Napa Extra', NULL, 'Paracetamol', NULL, NULL),
(3, 'Ace Plus', NULL, 'Paracetamol', NULL, NULL),
(6, 'Amdocal 10', NULL, 'Amlodipine', NULL, NULL),
(7, 'Amdocal 5', NULL, 'Amlodipine', NULL, NULL),
(8, 'Notem Plus', NULL, 'Paracetamol', NULL, NULL),
(9, 'A Cal', NULL, 'Calcium Carbonate', NULL, NULL),
(10, 'Eflucin', NULL, 'Flucloxacillin Sodium', NULL, NULL),
(11, 'Faxilin', NULL, 'Flucloxacillin Sodium', NULL, NULL),
(12, 'Halone', NULL, 'Halazone', NULL, NULL),
(13, 'Kalinac', NULL, 'Diclofenac Potassium', NULL, NULL),
(14, 'Ranitid', NULL, 'Ranitidine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `create_medicine_presentation`
--

CREATE TABLE `create_medicine_presentation` (
  `medicine_presentation_id` int(20) NOT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_medicine_presentation`
--

INSERT INTO `create_medicine_presentation` (`medicine_presentation_id`, `medicine_presentation`) VALUES
(1, 'Capsule'),
(2, 'Tablet'),
(4, 'Liquid / Syrup'),
(5, 'Oral Suspension');

-- --------------------------------------------------------

--
-- Table structure for table `create_product_category`
--

CREATE TABLE `create_product_category` (
  `record_id` int(100) NOT NULL,
  `product_category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_product_category`
--

INSERT INTO `create_product_category` (`record_id`, `product_category`) VALUES
(1, 'Surgical Product'),
(3, 'Savlon');

-- --------------------------------------------------------

--
-- Table structure for table `create_product_name`
--

CREATE TABLE `create_product_name` (
  `record_id` int(100) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_product_name`
--

INSERT INTO `create_product_name` (`record_id`, `product_category`, `product_name`) VALUES
(1, 'Surgical Product', 'Sterile Surgical Gloves');

-- --------------------------------------------------------

--
-- Table structure for table `create_supplier`
--

CREATE TABLE `create_supplier` (
  `supplier_id` int(100) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `previous_due` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_supplier`
--

INSERT INTO `create_supplier` (`supplier_id`, `supplier_name`, `mobile`, `address`, `previous_due`) VALUES
(1, 'Unilever Bangladesh Limited', ' +880 2 988 8452  ', 'ZN Tower, Plot# 02  \r\nRoad # 08, Gulshan - 1  \r\nDhaka - 1212.  ', 0),
(2, 'ACI Pharmaceuticals', '(+8802) 8878603', '89 Gulshan Ave, Dhaka 1212', 0),
(3, 'Square Pharmaceuticals', '+88-02-8833047-56', '48, Mohakhali C/A Dhaka 1212', 0),
(4, 'Beximco Pharmaceuticals Ltd.', '02-58611001', 'Dhaka', 0),
(5, 'Acme Laboratories Limited.', '', '', 0),
(6, 'Jayson Pharma Ltd.', '', '', 0),
(7, 'Kumudini Pharma Ltd.', '', '', 0),
(8, 'Innova Pharmaceuticals Limited.', '', '', 0),
(9, 'Opsonin Pharma Ltd.', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `insert_purchase_info`
--

CREATE TABLE `insert_purchase_info` (
  `purchase_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `invoice_id` int(20) DEFAULT NULL,
  `particulars` varchar(50) DEFAULT NULL,
  `medicine_presentation_id` int(20) DEFAULT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL,
  `medicine_name_id` int(20) DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `supplier_id` int(20) DEFAULT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `purchase_price` float DEFAULT NULL,
  `unit_sales_price` float DEFAULT NULL,
  `unit` varchar(11) NOT NULL,
  `purchase_paid` float DEFAULT NULL,
  `purchase_due` float DEFAULT NULL,
  `expiredate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_purchase_info`
--

INSERT INTO `insert_purchase_info` (`purchase_id`, `date`, `invoice_id`, `particulars`, `medicine_presentation_id`, `medicine_presentation`, `medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `supplier_id`, `supplier_name`, `unit_price`, `qty`, `purchase_price`, `unit_sales_price`, `unit`, `purchase_paid`, `purchase_due`, `expiredate`) VALUES
(10, '2019-04-28', NULL, 'Purchase Medicine', 2, 'Tablet', 3, 'Ace Plus', 7, 'Paracetamol', 5, 'Square Pharmaceuticals Ltd.', 2.52, 189, 504, 3, 'Pcs', 350, 154, '2021-01-01'),
(12, '2019-04-27', NULL, 'Purchase Medicine', 2, 'Tablet', 2, 'Napa Extra', 7, 'Paracetamol', 4, 'Beximco Pharmaceuticals Ltd.', 2.5, 200, 500, 3, 'Pcs', 300, 200, '2020-01-01'),
(13, '2019-04-05', NULL, 'Purchase Medicine', NULL, 'Tablet', NULL, 'Amdocal 10', NULL, 'Amlodipine', NULL, 'Beximco Pharmaceuticals Ltd.', 6, 60, 360, 7, 'Pcs', 300, 60, '2019-04-01'),
(20, '2019-04-06', NULL, 'Updated Purchase', NULL, 'Tablet', NULL, 'Amdocal 5', NULL, 'Amlodipine', NULL, 'Beximco Pharmaceuticals Ltd.', 4, 200, 800, 4.5, '5 gm', 500, 300, '2019-04-30'),
(22, '2019-04-12', NULL, 'Purchase Medicine', 1, 'Capsule', 1, 'Antiva®', 1, 'Antiviral', 1, 'Unilever Bangladesh Limited', 4, 100, 400, 5, '10 gm', 300, 100, '2019-05-31'),
(23, '2019-04-28', NULL, 'Purchase Medicine', 2, 'Tablet', 9, 'A Cal', 9, 'Calcium Carbonate', 5, 'Acme Laboratories Limited.', 1, 100, 100, 1, '250 mg', 100, 0, '2019-06-01'),
(24, '2019-04-28', NULL, 'Purchase Medicine', 5, 'Oral Suspension', 10, 'Eflucin', 10, 'Flucloxacillin Sodium', 6, 'Jayson Pharma Ltd.', 61, 1, 61, 62, '125 mg/5 ml', 61, 0, '2019-06-30'),
(25, '2019-04-28', NULL, 'Purchase Medicine', 1, 'Capsule', 11, 'Faxilin', 10, 'Flucloxacillin Sodium', 7, 'Kumudini Pharma Ltd.', 10, 26, 280, 11, '500 mg', 200, 80, '2020-03-31'),
(26, '2019-04-28', NULL, 'Purchase Medicine', 2, 'Tablet', 12, 'Halone', 11, 'Halazone', 8, 'Innova Pharmaceuticals Limited.', 6, 30, 180, 6, '7.5 mg', 150, 30, '2019-04-28'),
(27, '2019-04-28', NULL, 'Purchase Medicine', 2, 'Tablet', 13, 'Kalinac', 12, 'Diclofenac Potassium', 3, 'Square Pharmaceuticals', 4, 50, 200, 3, '50 mg', 200, 0, '2019-04-30'),
(28, '2019-04-27', NULL, 'Updated Purchase', NULL, 'Tablet', NULL, 'Ranitid', NULL, 'Ranitidine', NULL, 'Opsonin Pharma Ltd.', 2.2, 150, 330, 2.5, '150 mg', 300, 30, '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `sales_product`
--

CREATE TABLE `sales_product` (
  `sales_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `invoice` int(20) DEFAULT NULL,
  `particular` varchar(50) DEFAULT NULL,
  `customer_email` varchar(30) NOT NULL,
  `medicine_presentation_id` int(20) DEFAULT NULL,
  `medicine_presentation` varchar(50) DEFAULT NULL,
  `medicine_name_id` int(20) DEFAULT NULL,
  `medicine_name` varchar(50) DEFAULT NULL,
  `generic_id` int(20) DEFAULT NULL,
  `generic_name` varchar(50) DEFAULT NULL,
  `qty` int(20) DEFAULT NULL,
  `unit_sales_price` float DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `total_discount` float DEFAULT NULL,
  `discount_price` float DEFAULT NULL,
  `sales_paid` float DEFAULT NULL,
  `sales_due` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_product`
--

INSERT INTO `sales_product` (`sales_id`, `date`, `invoice`, `particular`, `customer_email`, `medicine_presentation_id`, `medicine_presentation`, `medicine_name_id`, `medicine_name`, `generic_id`, `generic_name`, `qty`, `unit_sales_price`, `total_price`, `total_amount`, `total_discount`, `discount_price`, `sales_paid`, `sales_due`) VALUES
(1, '2019-04-27', 1, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 5, 3, 15, 95, 5, 90, 0, NULL),
(2, '2019-04-27', 1, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 0, 'Amdocal 10', NULL, 'Amlodipine', 10, 7, 70, 95, 5, 90, 0, NULL),
(3, '2019-04-27', 1, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Capsule', 1, 'Antiva®', NULL, 'Antiviral', 2, 5, 10, 95, 5, 90, 0, NULL),
(4, '2019-04-27', 2, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Capsule', 11, 'Faxilin', NULL, 'Flucloxacillin Sodium', 2, 11, 22, 39, 7, 32, 0, NULL),
(5, '2019-04-27', 2, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 12, 'Halone', NULL, 'Halazone', 2, 6, 12, 39, 7, 32, 0, NULL),
(6, '2019-04-27', 2, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 0, 'Ranitid', NULL, 'Ranitidine', 2, 2.5, 5, 39, 7, 32, 0, NULL),
(7, '2019-04-28', 3, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Capsule', 11, 'Faxilin', NULL, 'Flucloxacillin Sodium', 2, 11, 22, 114, 4, 110, 0, NULL),
(8, '2019-04-28', 3, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Oral Suspension', 10, 'Eflucin', NULL, 'Flucloxacillin Sodium', 1, 62, 62, 114, 4, 110, 0, NULL),
(9, '2019-04-28', 3, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 13, 'Kalinac', NULL, 'Diclofenac Potassium', 6, 3, 18, 114, 4, 110, 0, NULL),
(10, '2019-04-28', 3, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 12, 'Halone', NULL, 'Halazone', 2, 6, 12, 114, 4, 110, 0, NULL),
(11, '2019-04-27', 4, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 13, 'Kalinac', NULL, 'Diclofenac Potassium', 10, 3, 30, 30, 0, 30, 30, NULL),
(12, '2019-04-27', 5, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 2, 3, 6, 6, 0, 6, 6, NULL),
(13, '2019-04-27', 6, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 2, 3, 6, 6, 0, 6, 6, NULL),
(14, '2019-04-27', 7, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 2, 3, 6, 6, 0, 6, 6, NULL),
(15, '2019-04-27', 8, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 2, 3, 6, 6, 0, 6, 6, NULL),
(16, '2019-04-27', 9, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 2, 3, 6, 6, 0, 6, 6, NULL),
(17, '2019-04-27', 10, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 2, 3, 6, 6, 0, 6, 6, NULL),
(18, '2019-04-27', 11, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(19, '2019-04-27', 12, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(20, '2019-04-27', 13, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(21, '2019-04-27', 14, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(22, '2019-04-27', 15, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(23, '2019-04-27', 16, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(24, '2019-04-27', 17, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(25, '2019-04-27', 18, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(26, '2019-04-27', 19, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(27, '2019-04-27', 20, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(28, '2019-04-27', 21, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(29, '2019-04-27', 22, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Oral Suspension', 10, 'Eflucin', NULL, 'Flucloxacillin Sodium', 1, 62, 62, 62, 0, 62, 62, NULL),
(30, '2019-04-27', 23, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Oral Suspension', 10, 'Eflucin', NULL, 'Flucloxacillin Sodium', 1, 62, 62, 62, 0, 62, 62, NULL),
(31, '2019-04-27', 24, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(32, '2019-04-27', 25, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 10, 3, 30, 30, 0, 30, 30, NULL),
(33, '2019-04-27', 26, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Tablet', 3, 'Ace Plus', NULL, 'Paracetamol', 1, 3, 3, 3, 0, 3, 3, NULL),
(34, '2019-04-28', 27, 'Sales Medicine', 'bmmahmud@gmail.com', NULL, 'Capsule', 11, 'Faxilin', NULL, 'Flucloxacillin Sodium', 2, 11, 22, 22, 0, 22, 22, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `identity` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `identity`, `username`, `password`) VALUES
(1, '', 'staff', 'aaa'),
(4, 'Staff', 'ashik', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_generic_name`
--
ALTER TABLE `create_generic_name`
  ADD PRIMARY KEY (`generic_id`);

--
-- Indexes for table `create_medicine_name`
--
ALTER TABLE `create_medicine_name`
  ADD PRIMARY KEY (`medicine_name_id`),
  ADD KEY `FK` (`generic_id`,`medicine_presentation_id`);

--
-- Indexes for table `create_medicine_presentation`
--
ALTER TABLE `create_medicine_presentation`
  ADD PRIMARY KEY (`medicine_presentation_id`);

--
-- Indexes for table `create_product_category`
--
ALTER TABLE `create_product_category`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `create_product_name`
--
ALTER TABLE `create_product_name`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `create_supplier`
--
ALTER TABLE `create_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `insert_purchase_info`
--
ALTER TABLE `insert_purchase_info`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `FK` (`medicine_presentation_id`,`medicine_name_id`,`generic_id`,`supplier_id`);

--
-- Indexes for table `sales_product`
--
ALTER TABLE `sales_product`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `FK` (`medicine_presentation_id`,`medicine_name_id`,`generic_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_generic_name`
--
ALTER TABLE `create_generic_name`
  MODIFY `generic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `create_medicine_name`
--
ALTER TABLE `create_medicine_name`
  MODIFY `medicine_name_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `create_medicine_presentation`
--
ALTER TABLE `create_medicine_presentation`
  MODIFY `medicine_presentation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `create_product_category`
--
ALTER TABLE `create_product_category`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `create_product_name`
--
ALTER TABLE `create_product_name`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_supplier`
--
ALTER TABLE `create_supplier`
  MODIFY `supplier_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insert_purchase_info`
--
ALTER TABLE `insert_purchase_info`
  MODIFY `purchase_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sales_product`
--
ALTER TABLE `sales_product`
  MODIFY `sales_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
