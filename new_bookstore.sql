-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 27, 2021 at 09:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
  `detail` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `detail`, `image`) VALUES
(3, 'Tô Hoài', 'Chi tiết', 'tacgiatohoai.jpg'),
(4, 'Hồ Anh Thái', 'Chi tiết', 'tacgiahoanhthai.jpg'),
(5, 'Kishimoto Masashi', 'Chi tiết', 'tacgiakishimoto.jpg'),
(6, 'Gotōge Koyoharu', 'Chi tiết', 'tacgiakoyoharu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`) VALUES
(6, 'khachhang');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE `cartdetail` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` text DEFAULT NULL,
  `parentID` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `detail`, `parentID`, `image`) VALUES
(1, 'Sách tiếng Việt', '', NULL, ''),
(2, 'Thiếu Nhi', NULL, 1, NULL),
(3, 'Giáo Khoa - Tham khảo', NULL, 1, NULL),
(5, 'Văn Học', '', 1, ''),
(6, 'Tâm Lý - Kỹ Năng Sống', NULL, 1, NULL),
(7, 'Manga - Comic', NULL, 1, NULL),
(8, 'Sách Học Ngoại Ngữ', NULL, 1, NULL),
(9, 'Kinh Tế', '', 1, ''),
(10, 'Khoa Học Kỹ Thuật', NULL, 1, NULL),
(11, 'Văn Hóa - Nghệ Thuật - Du Lịch', NULL, 1, NULL),
(12, 'Từ Điển', '', 1, ''),
(13, 'Thể Dục Thể Thao - Giải Trí', NULL, 1, NULL),
(14, 'Âm Nhạc - Mỹ Thuật - Thời Trang', NULL, 1, NULL),
(15, 'Báo - Tạp Chí', NULL, 1, NULL),
(16, 'Giáo Trình', '', 1, ''),
(17, 'Truyện Thiếu Nhi', NULL, 2, NULL),
(18, 'Kiến Thức Bách Khoa', NULL, 2, NULL),
(19, 'Kiến Thức - Kỹ Năng Sống Cho Trẻ', '', 2, ''),
(20, 'Tô Màu, Luyện Chữ', NULL, 2, NULL),
(21, 'Từ Điển Thiếu Nhi', NULL, 2, NULL),
(22, 'Flashcard - Thẻ Học Thông Minh', NULL, 2, NULL),
(23, 'Tạp Chí Thiếu Nhi', '', 2, ''),
(24, 'Sách Nói', NULL, 2, NULL),
(25, 'Truyện Tranh Thiếu Nhi', NULL, 17, NULL),
(26, 'Truyện Đọc Thiếu Nhi', '', 17, ''),
(27, 'Kiến Thức Khoa Học - Tự Nhiên', NULL, 18, NULL),
(28, 'Bách Khoa Tri Thức - Câu Hỏi Vì Sao', NULL, 18, NULL),
(29, 'Sách Tranh Kỹ Năng Sống Cho Trẻ', NULL, 19, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `categoryID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`categoryID`, `productID`) VALUES
(1, 17);

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
(16, 'Nguyễn Văn A', '0123456789', 'khachhang@gmai.com', '', NULL, 'khachhang');

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
(8, 'Dzeam Techie', '0707061515', 'dzeamtechie@gmail.com', 'Hồ Chí Minh', '2001-01-01', '2021-11-01', 'admin'),
(9, 'Đoàn Chí Quang', '0384327229', 'chiquang127@gmail.com', 'Hồ Chí Minh', '2001-07-12', '2021-11-03', 'chiquang'),
(10, 'Phan Minh Phát', '0909112233', 'phanminhphat2001@gmail.com', 'Hồ Chí Minh', '2001-09-14', '2021-11-07', 'minhphat'),
(11, 'Nguyễn Văn A', '0384327221', 'nguyenvana@gmail.com', 'Hồ Chí Minh', '1999-06-23', '2021-11-25', 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `esrb`
--

CREATE TABLE `esrb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `esrb`
--

INSERT INTO `esrb` (`id`, `name`, `detail`, `image`) VALUES
(1, 'Everyone', 'Content is generally suitable for all ages. May contain minimal cartoon, fantasy or mild violence and/or infrequent use of mild language.', 'E.svg'),
(2, 'Everyone 10+', 'Content is generally suitable for ages 10 and up. May contain more cartoon, fantasy or mild violence, mild language and/or minimal suggestive themes.', 'E10plus.svg'),
(3, 'Teen', 'Content is generally suitable for ages 13 and up. May contain violence, suggestive themes, crude humor, minimal blood, simulated gambling and/or infrequent use of strong language.', 'T.svg'),
(4, 'Mature 17+', 'Content is generally suitable for ages 17 and up. May contain intense violence, blood and gore, sexual content and/or strong language.', 'M.svg'),
(5, 'Adults Only 18+', 'Content suitable only for adults ages 18 and up. May include prolonged scenes of intense violence, graphic sexual content and/or gambling with real currency.', 'AO.svg');

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

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `subtotal` double NOT NULL,
  `discount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderID`, `productID`, `quantity`, `price`, `subtotal`, `discount`) VALUES
(74, 17, 1, 50000, 50000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subtotal` double NOT NULL,
  `shippingfee` double NOT NULL,
  `discount` double NOT NULL,
  `total` double NOT NULL,
  `employee_username` varchar(50) DEFAULT NULL,
  `customer_username` varchar(50) DEFAULT NULL,
  `customerID` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `moneyinput` double DEFAULT NULL,
  `moneyoutput` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`id`, `date`, `subtotal`, `shippingfee`, `discount`, `total`, `employee_username`, `customer_username`, `customerID`, `status`, `moneyinput`, `moneyoutput`) VALUES
(74, '2021-11-22', 25000, 0, 0, 25000, 'admin', NULL, NULL, 4, 25000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `permission`) VALUES
(1, 'add'),
(2, 'delete'),
(3, 'update');

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
  `publishdate` date NOT NULL,
  `language` varchar(50) DEFAULT NULL,
  `esrbID` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `authorID` int(11) DEFAULT NULL,
  `publisherID` int(11) DEFAULT NULL,
  `saleID` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `price`, `pagenumber`, `publishdate`, `language`, `esrbID`, `image`, `authorID`, `publisherID`, `saleID`, `status`) VALUES
(17, 'a - 10 vạn câu hỏi vì sao', 'Haha', 100, 50000, 200, '2021-11-17', 'Vietnamese', 5, '1620484.jpg', 5, 14, 'discount50', 1),
(18, 'c -10 vạn câu hỏi vì sao', 'sdafsdfsf', 0, 100000, 200, '2021-11-09', 'Vietnamese', 1, '1952560.jpg', 3, 14, 'discount20', 1),
(19, 'b -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(20, 'd -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(21, 'e -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(22, 'f - 10 vạn câu hỏi vì sao', 'Haha', 0, 50000, 200, '2021-11-17', 'Vietnamese', 5, '1620484.jpg', 5, 14, 'discount50', 1),
(23, 'g -10 vạn câu hỏi vì sao', 'sdafsdfsf', 0, 100000, 200, '2021-11-09', 'Vietnamese', 1, '1952560.jpg', 3, 14, 'discount20', 1),
(24, 'h -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(25, 'i -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(26, 'j -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(27, 'a - 10 vạn câu hỏi vì sao', 'Haha', 0, 50000, 200, '2021-11-17', 'Vietnamese', 5, '1620484.jpg', 5, 14, 'discount50', 1),
(28, 'c -10 vạn câu hỏi vì sao', 'sdafsdfsf', 0, 100000, 200, '2021-11-09', 'Vietnamese', 1, '1952560.jpg', 3, 14, 'discount20', 1),
(29, 'b -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(30, 'd -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(31, 'e -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(32, 'f - 10 vạn câu hỏi vì sao', 'Haha', 0, 50000, 200, '2021-11-17', 'Vietnamese', 5, '1620484.jpg', 5, 14, 'discount50', 1),
(33, 'g -10 vạn câu hỏi vì sao', 'sdafsdfsf', 0, 100000, 200, '2021-11-09', 'Vietnamese', 1, '1952560.jpg', 3, 14, 'discount20', 1),
(34, 'h -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(35, 'i -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(36, 'j -10 vạn câu hỏi vì sao', 'ewqeqe', 0, 10000, 100, '2021-11-19', 'English', 5, '1952560.jpg', 5, 14, 'discount20', 1),
(38, 'Đoàn Chí Quang', '                                       \r\n                                    ', 0, 123, 12313, '2021-11-27', 'Viedsdaa', 1, '', 3, 14, 'discount20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `detail`, `image`) VALUES
(14, 'NXB Hà Nội', '214234', NULL),
(15, 'NXB TH HCM', 'Chi tiết lịch sử', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `productID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('admin', 'Quản lý cấp cao'),
('staff.import', 'Quản lý bên bộ phận nhập hàng'),
('staff.import.add', 'Nhân viên bên khu nhập hàng có chức năng thêm'),
('staff.import.delete', 'Nhân viên bên khu nhập hàng có chức năng xóa'),
('staff.import.update', 'Nhân viên bên khu nhập hàng có chức năng sửa'),
('staff.product', 'Quản lý bên bộ phận sản phẩm'),
('staff.product.add', 'Nhân viên bên khu sản phẩm có chức năng thêm'),
('staff.product.delete', 'Nhân viên bên khu sản phẩm có chức năng xóa'),
('staff.product.update', 'Nhân viên bên khu sản phẩm có chức năng sửa'),
('staff.receipt', 'Quản lý bên bộ phận hóa đơn'),
('staff.receipt.add', 'Nhân viên bên khu hóa đơn có chức năng thêm'),
('staff.receipt.delete', 'Nhân viên bên khu hóa đơn có chức năng xóa'),
('staff.receipt.update', 'Nhân viên bên khu hóa đơn có chức năng sửa'),
('staff.sell', 'Quản lý bên bộ phận bán hàng'),
('staff.user', 'Quản lý bên bộ phận thông tin người dùng'),
('staff.user.add', 'Nhân viên bên khu thông tin người dùng có chức năn'),
('staff.user.delete', 'Nhân viên bên khu thông tin người dùng có chức năn'),
('staff.user.update', 'Nhân viên bên khu thông tin người dùng có chức năn');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE `role_permission` (
  `rolename` varchar(50) NOT NULL,
  `permissionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`rolename`, `permissionID`) VALUES
('staff.import', 1),
('staff.import', 2),
('staff.import', 3),
('staff.import.add', 1),
('staff.import.delete', 2),
('staff.import.update', 3),
('staff.product', 1),
('staff.product', 2),
('staff.product', 3),
('staff.product.add', 1),
('staff.product.delete', 2),
('staff.product.update', 3),
('staff.receipt', 1),
('staff.receipt', 2),
('staff.receipt', 3),
('staff.receipt.add', 1),
('staff.receipt.delete', 2),
('staff.receipt.update', 3),
('staff.sell', 1),
('staff.sell', 2),
('staff.sell', 3),
('staff.user', 1),
('staff.user', 2),
('staff.user', 3),
('staff.user.add', 1),
('staff.user.delete', 2),
('staff.user.update', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` float NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `minorder` double NOT NULL,
  `maxsale` double NOT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `name`, `quantity`, `discount`, `startdate`, `enddate`, `minorder`, `maxsale`, `type`) VALUES
('discount20', 'Sale 20%', 0, 20, '2021-11-01', '2021-12-04', 0, 0, NULL),
('discount50', 'Sale 50%', 0, 50, '2021-11-10', '2021-11-17', 0, 0, NULL),
('SN2021', 'Birthday 2021', 100, 50, '2021-10-05', '2021-11-30', 1000000, 200000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sale_order`
--

CREATE TABLE `sale_order` (
  `orderID` int(11) NOT NULL,
  `saleID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sale_user`
--

CREATE TABLE `sale_user` (
  `username` varchar(50) NOT NULL,
  `saleID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `date`, `status`, `image`) VALUES
('admin', '$2y$10$GzNaFKxX8r8aMiF4LtjSIOVtviFN47NANXxKvQ8up5ZASxpvKoRbq', 'dzeamtechie@gmail.com', '2021-11-14', 1, NULL),
('chiquang', '$2y$10$o8FRAijSWv3lCYmGDyEkWeG.GGkx692Ab2uapvvwyAEqMIX3Y2xFO', 'chiquang127@gmail.com', '2021-11-14', 1, NULL),
('khachhang', '$2y$10$fEaOkSRDcCvBgp9qB9jUFO5NKKBcXemXh/2IGjaltDTeKrE73lx5S', 'khachhang@gmai.com', '2021-11-21', 1, NULL),
('minhphat', '$2y$10$fBBYoXiIIyyDVKEJUQ/Y5ef3HF/Kp1TMSx.kfymymRP1uAN6csbdW', 'phanminhphat2001@gmail.com', '2021-11-14', 0, NULL),
('nguyenvana', '$2y$10$/9v0INkZnTFomnoblHPpqu2ye3Ih0CTHJzcSTsGwL.AxsZFm8mPpu', 'nguyenvana@gmail.com', '2021-11-25', 0, NULL);

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
('admin', 'admin'),
('chiquang', 'staff.product.add'),
('minhphat', 'staff.product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`cartID`,`productID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentID` (`parentID`);

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
-- Indexes for table `esrb`
--
ALTER TABLE `esrb`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `publisherID` (`publisherID`),
  ADD KEY `saleID` (`saleID`),
  ADD KEY `esrbID` (`esrbID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`productID`,`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`rolename`,`permissionID`),
  ADD KEY `permissionID` (`permissionID`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_order`
--
ALTER TABLE `sale_order`
  ADD PRIMARY KEY (`orderID`,`saleID`),
  ADD KEY `saleID` (`saleID`);

--
-- Indexes for table `sale_user`
--
ALTER TABLE `sale_user`
  ADD PRIMARY KEY (`username`,`saleID`),
  ADD KEY `saleID` (`saleID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `esrb`
--
ALTER TABLE `esrb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD CONSTRAINT `cartdetail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartdetail_ibfk_3` FOREIGN KEY (`cartID`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parentID`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

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
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`publisherID`) REFERENCES `publisher` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`saleID`) REFERENCES `sale` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`esrbID`) REFERENCES `esrb` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`rolename`) REFERENCES `role` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_permission_ibfk_2` FOREIGN KEY (`permissionID`) REFERENCES `permission` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sale_order`
--
ALTER TABLE `sale_order`
  ADD CONSTRAINT `sale_order_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `ordertb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_order_ibfk_3` FOREIGN KEY (`saleID`) REFERENCES `sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sale_user`
--
ALTER TABLE `sale_user`
  ADD CONSTRAINT `sale_user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_user_ibfk_2` FOREIGN KEY (`saleID`) REFERENCES `sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userrole`
--
ALTER TABLE `userrole`
  ADD CONSTRAINT `userrole_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userrole_ibfk_2` FOREIGN KEY (`rolename`) REFERENCES `role` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
