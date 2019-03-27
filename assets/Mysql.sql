CREATE TABLE `customer_info  ` (
  `customer_id ` int(20),
  `customer_name ` varchar(50),
  `customer_mobile ` varchar(50),
  `customer_address ` varchar(50),
  PRIMARY KEY (`customer_id `)
);

CREATE TABLE `sales_product` (
  `sales_id` int(20),
  `date` date,
  `invoice_id` int(20),
  `particular` varchar(50),
  `customer_id` int(20),
  `customer_name` varchar(50),
  `medicine_presentation_id ` int(20) ,
  `` varchar(50),
  `medicine_name_id` int(20),
  `medicine_name` varchar(50),
  `generic_id` int(20),
  `generic_name` varchar(50),
  `qty` int(20),
  `unit_sales_price` float,
  `price` float,
  `total_discount` float,
  `discount_price` float,
  `sales_paid` float,
  `sales_due` float,
  PRIMARY KEY (`sales_id`),
  KEY `FK` (`customer_id`, `medicine_presentation_id`, `medicine_name_id`,`generic_id`)
);

CREATE TABLE `create_generic` (
  `generic_id` int(20),
  `generic_name` varchar(50),
  PRIMARY KEY (`generic_id`)
);

CREATE TABLE `create_medicine_presentation` (
  `medicine_presentation_id` int(20),
  `medicine_presentation` varchar(50),
  PRIMARY KEY (`medicine_presentation_id`)
);

CREATE TABLE `create_medicine_name` (
  `medicine_name_id` int(20),
  `medicine_name` varchar(50),
  `generic_id ` int(20),
  `generic_name` varchar(50),
  `medicine_presentation_id` int(15),
  `medicine_presentation_name` varchar(50),
  PRIMARY KEY (`medicine_name_id`),
  KEY `FK` (`generic_id`, `medicine_presentation_id`)
);

CREATE TABLE `create_supplier  ` (
  ` supplier_id ` int(20),
  ` supplier_name ` varchar(50),
  ` supplier_phone ` varchar(50),
  ` supplier_address ` varchar(50),
  ` previous_due  ` float,
  PRIMARY KEY (` supplier_id `)
);

CREATE TABLE `insert_purchase_info` (
  `purchase_id` int(20),
  `date` date,
  `invoice_id` int(20),
  `particulars` varchar(50),
  `medicine_presentation_id` int(20) ,
  `medicine_presentation` varchar(50),
  `medicine_name_id` int(20),
  `medicine_name` varchar(50),
  `generic_id` int(20),
  `generic_name` varchar(50),
  `supplier_id` int(20),
  `supplier_name` varchar(50),
  `unit` varchar(50),
  `unit_price` float,
  `qty` float,
  `purchase_price` float,
  `unit_sales_price` float,
  `purchase_paid` float,
  `purchase_due` float,
  `expiredate` date,
  PRIMARY KEY (`purchase_id`),
  KEY `FK` (`medicine_presentation_id`, `medicine_name_id`, `generic_id`, `supplier_id`)
);

