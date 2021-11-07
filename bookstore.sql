  -- phpMyAdmin SQL Dump
  -- version 5.0.2
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1:3307
  -- Generation Time: Nov 06, 2021 at 06:01 PM
  -- Server version: 10.4.14-MariaDB
  -- PHP Version: 7.4.10

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Database: `bookstore`
  --

  -- --------------------------------------------------------

  --
  -- Table structure for table `author`
  --

  CREATE TABLE `author` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `detail` text DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `author`
  --

  INSERT INTO `author` (`id`, `name`, `detail`) VALUES
  (3, 'Phan Minh Phát', 'Chi tiết lịch sử'),
  (4, 'Phan Minh Phát 2', '123123123'),
  (5, 'alex', 'alex'),
  (6, 'Phan Minh Phát', 'Chi tiết lịch sử');

  -- --------------------------------------------------------

  --
  -- Table structure for table `category`
  --

  CREATE TABLE `category` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `detail` text DEFAULT NULL,
    `parentID` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `category`
  --

  INSERT INTO `category` (`id`, `name`, `detail`, `parentID`) VALUES
  (1, 'Lịch sử', 'Chi tiết lịch sử34', 0),
  (2, 'Lịch sử', 'Chi tiết lịch sử', 0);

  -- --------------------------------------------------------

  --
  -- Table structure for table `category_product`
  --

  CREATE TABLE `category_product` (
    `categoryID` int(11) NOT NULL,
    `productID` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  -- --------------------------------------------------------

  --
  -- Table structure for table `customer`
  --

  CREATE TABLE `customer` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `email` varchar(50) DEFAULT NULL,
    `address` varchar(255) NOT NULL,
    `birth` date DEFAULT NULL,
    `username` varchar(50) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `customer`
  --

  INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `address`, `birth`, `username`) VALUES
  (14, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', 'sfgdfgydfg', '2021-11-17', 'minhphat');

  -- --------------------------------------------------------

  --
  -- Table structure for table `employee`
  --

  CREATE TABLE `employee` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `email` varchar(50) DEFAULT NULL,
    `address` varchar(255) NOT NULL,
    `birth` date DEFAULT NULL,
    `joindate` date NOT NULL,
    `username` varchar(50) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `employee`
  --

  INSERT INTO `employee` (`id`, `name`, `phone`, `email`, `address`, `birth`, `joindate`, `username`) VALUES
  (7, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', 'sdfsdf', '2021-11-06', '2021-11-06', 'minhphat');

  -- --------------------------------------------------------

  --
  -- Table structure for table `import`
  --

  CREATE TABLE `import` (
    `id` int(11) NOT NULL,
    `date` date NOT NULL,
    `total` int(11) NOT NULL,
    `employee_username` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `import`
  --

  INSERT INTO `import` (`id`, `date`, `total`, `employee_username`) VALUES
  (21, '2021-11-06', 500000, 'minhphat');

  -- --------------------------------------------------------

  --
  -- Table structure for table `importdetail`
  --

  CREATE TABLE `importdetail` (
    `importID` int(11) NOT NULL,
    `productID` int(11) NOT NULL,
    `quantity` int(11) NOT NULL,
    `price` double NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `importdetail`
  --

  INSERT INTO `importdetail` (`importID`, `productID`, `quantity`, `price`) VALUES
  (21, 3, 10, 50000);

  -- --------------------------------------------------------

  --
  -- Table structure for table `orderdetail`
  --

  CREATE TABLE `orderdetail` (
    `orderID` int(11) NOT NULL,
    `productID` int(11) NOT NULL,
    `quantity` int(11) NOT NULL,
    `price` double NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `orderdetail`
  --

  INSERT INTO `orderdetail` (`orderID`, `productID`, `quantity`, `price`) VALUES
  (5, 3, 45, 50000);

  -- --------------------------------------------------------

  --
  -- Table structure for table `ordertb`
  --

  CREATE TABLE `ordertb` (
    `id` int(11) NOT NULL,
    `date` date NOT NULL,
    `total` double NOT NULL,
    `employee_username` varchar(50) DEFAULT NULL,
    `customer_username` varchar(50) DEFAULT NULL,
    `customerID` int(11) DEFAULT NULL,
    `status` tinyint(4) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `ordertb`
  --

  INSERT INTO `ordertb` (`id`, `date`, `total`, `employee_username`, `customer_username`, `customerID`, `status`) VALUES
  (5, '2021-11-06', 2250000, 'minhphat', NULL, 14, 3);

  -- --------------------------------------------------------

  --
  -- Table structure for table `permission`
  --

  CREATE TABLE `permission` (
    `id` int(11) NOT NULL,
    `permission` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  -- --------------------------------------------------------

  --
  -- Table structure for table `product`
  --

  CREATE TABLE `product` (
    `id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` text DEFAULT NULL,
    `quantity` int(11) NOT NULL,
    `price` double NOT NULL,
    `pagenumber` int(11) DEFAULT NULL,
    `image` varchar(50) DEFAULT NULL,
    `authorID` int(11) DEFAULT NULL,
    `publisherID` int(11) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `product`
  --

  INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `price`, `pagenumber`, `image`, `authorID`, `publisherID`) VALUES
  (3, '10 vạn câu hỏi vì sao 2', '10 vạn câu hỏi vì sao....', 55, 50000, 344, '', 4, 14),
  (4, 'Lịch sử', '.............', 22, 5000450, 233, '', 3, 14),
  (5, 'Lịch sử', '10 vạn câu hỏi vì sao....', 0, 50000, 2344, '', 3, 14),
  (6, '10 vạn câu hỏi vì sao', '10 vạn câu hỏi vì sao....', 0, 50000, 2000, 'Untitled__4_-removebg-preview.png', 3, 14),
  (7, 'Phan Minh Phát', '123', 0, 50000, 200, 'SlickGantt.png', 3, 14),
  (8, '333333333', '10 vạn câu hỏi vì sao....', 0, 50000, 2000, 'Untitled (7).png', 5, 14),
  (9, 'Lịch sử', '123', 0, 50000, 200, 'n.png', 3, 14);

  -- --------------------------------------------------------

  --
  -- Table structure for table `publisher`
  --

  CREATE TABLE `publisher` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `detail` text DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `publisher`
  --

  INSERT INTO `publisher` (`id`, `name`, `detail`) VALUES
  (14, 'Lịch sử', '214234'),
  (15, 'Phan Minh Phát', 'Chi tiết lịch sử'),
  (16, 'Phan Minh Phát', 'Chi tiết lịch sử');

  -- --------------------------------------------------------

  --
  -- Table structure for table `role`
  --

  CREATE TABLE `role` (
    `name` varchar(50) NOT NULL,
    `detail` varchar(50) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `role`
  --

  INSERT INTO `role` (`name`, `detail`) VALUES
  ('admin', 'admin'),
  ('customer', 'customer');

  -- --------------------------------------------------------

  --
  -- Table structure for table `user`
  --

  CREATE TABLE `user` (
    `username` varchar(50) NOT NULL,
    `password` varchar(100) NOT NULL,
    `email` varchar(150) NOT NULL,
    `date` date NOT NULL DEFAULT current_timestamp(),
    `status` tinyint(4) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `user`
  --

  INSERT INTO `user` (`username`, `password`, `email`, `date`, `status`) VALUES
  ('minhphat', '$2y$10$lUt3jDUtcW6UZkIMBPM3POoO4CIT.pOAyuoDTu1O7JsPes5wamGbK', 'phanminhphat2001@gmail.com', '2021-11-06', 1);

  -- --------------------------------------------------------

  --
  -- Table structure for table `userrole`
  --

  CREATE TABLE `userrole` (
    `username` varchar(50) NOT NULL,
    `rolename` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Dumping data for table `userrole`
  --

  INSERT INTO `userrole` (`username`, `rolename`) VALUES
  ('minhphat', 'admin'),
  ('minhphat', 'customer');

  -- --------------------------------------------------------

  --
  -- Table structure for table `user_permission`
  --

  CREATE TABLE `user_permission` (
    `username` varchar(50) NOT NULL,
    `permissionID` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `author`
  --
  ALTER TABLE `author`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `category`
  --
  ALTER TABLE `category`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `category_product`
  --
  ALTER TABLE `category_product`
    ADD PRIMARY KEY (`categoryID`,`productID`),
    ADD KEY `productID` (`productID`);

  --
  -- Indexes for table `customer`
  --
  ALTER TABLE `customer`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `username` (`username`);

  --
  -- Indexes for table `employee`
  --
  ALTER TABLE `employee`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `username` (`username`);

  --
  -- Indexes for table `import`
  --
  ALTER TABLE `import`
    ADD PRIMARY KEY (`id`),
    ADD KEY `employee_username` (`employee_username`);

  --
  -- Indexes for table `importdetail`
  --
  ALTER TABLE `importdetail`
    ADD PRIMARY KEY (`importID`,`productID`),
    ADD KEY `productID` (`productID`);

  --
  -- Indexes for table `orderdetail`
  --
  ALTER TABLE `orderdetail`
    ADD PRIMARY KEY (`orderID`,`productID`),
    ADD KEY `productID` (`productID`);

  --
  -- Indexes for table `ordertb`
  --
  ALTER TABLE `ordertb`
    ADD PRIMARY KEY (`id`),
    ADD KEY `employee_username` (`employee_username`),
    ADD KEY `customer_username` (`customer_username`),
    ADD KEY `customerID` (`customerID`);

  --
  -- Indexes for table `permission`
  --
  ALTER TABLE `permission`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `product`
  --
  ALTER TABLE `product`
    ADD PRIMARY KEY (`id`),
    ADD KEY `authorID` (`authorID`),
    ADD KEY `publisherID` (`publisherID`);

  --
  -- Indexes for table `publisher`
  --
  ALTER TABLE `publisher`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `role`
  --
  ALTER TABLE `role`
    ADD PRIMARY KEY (`name`);

  --
  -- Indexes for table `user`
  --
  ALTER TABLE `user`
    ADD PRIMARY KEY (`username`),
    ADD UNIQUE KEY `email` (`email`);

  --
  -- Indexes for table `userrole`
  --
  ALTER TABLE `userrole`
    ADD PRIMARY KEY (`username`,`rolename`),
    ADD KEY `rolename` (`rolename`);

  --
  -- Indexes for table `user_permission`
  --
  ALTER TABLE `user_permission`
    ADD PRIMARY KEY (`username`,`permissionID`),
    ADD KEY `permissionID` (`permissionID`);

  --
  -- AUTO_INCREMENT for dumped tables
  --

  --
  -- AUTO_INCREMENT for table `author`
  --
  ALTER TABLE `author`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

  --
  -- AUTO_INCREMENT for table `category`
  --
  ALTER TABLE `category`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

  --
  -- AUTO_INCREMENT for table `customer`
  --
  ALTER TABLE `customer`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

  --
  -- AUTO_INCREMENT for table `employee`
  --
  ALTER TABLE `employee`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

  --
  -- AUTO_INCREMENT for table `import`
  --
  ALTER TABLE `import`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

  --
  -- AUTO_INCREMENT for table `ordertb`
  --
  ALTER TABLE `ordertb`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  --
  -- AUTO_INCREMENT for table `permission`
  --
  ALTER TABLE `permission`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT for table `product`
  --
  ALTER TABLE `product`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

  --
  -- AUTO_INCREMENT for table `publisher`
  --
  ALTER TABLE `publisher`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

  --
  -- Constraints for dumped tables
  --

  --
  -- Constraints for table `category_product`
  --
  ALTER TABLE `category_product`
    ADD CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `category_product_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `customer`
  --
  ALTER TABLE `customer`
    ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `employee`
  --
  ALTER TABLE `employee`
    ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `import`
  --
  ALTER TABLE `import`
    ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`employee_username`) REFERENCES `employee` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `importdetail`
  --
  ALTER TABLE `importdetail`
    ADD CONSTRAINT `importdetail_ibfk_1` FOREIGN KEY (`importID`) REFERENCES `import` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `importdetail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `orderdetail`
  --
  ALTER TABLE `orderdetail`
    ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `orderdetail_ibfk_3` FOREIGN KEY (`orderID`) REFERENCES `ordertb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `ordertb`
  --
  ALTER TABLE `ordertb`
    ADD CONSTRAINT `ordertb_ibfk_1` FOREIGN KEY (`employee_username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `ordertb_ibfk_2` FOREIGN KEY (`customer_username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `ordertb_ibfk_3` FOREIGN KEY (`customerID`) REFERENCES `customer` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

  --
  -- Constraints for table `product`
  --
  ALTER TABLE `product`
    ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`authorID`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`publisherID`) REFERENCES `publisher` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

  --
  -- Constraints for table `userrole`
  --
  ALTER TABLE `userrole`
    ADD CONSTRAINT `userrole_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `userrole_ibfk_2` FOREIGN KEY (`rolename`) REFERENCES `role` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

  --
  -- Constraints for table `user_permission`
  --
  ALTER TABLE `user_permission`
    ADD CONSTRAINT `user_permission_ibfk_1` FOREIGN KEY (`permissionID`) REFERENCES `permission` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `user_permission_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
