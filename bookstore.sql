-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 02, 2021 at 01:29 PM
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
(6, 'hello'),
(8, 'minhphat'),
(9, 'phanminhphat');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE `cartdetail` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartdetail`
--

INSERT INTO `cartdetail` (`cartID`, `productID`, `quantity`, `date`) VALUES
(9, 17, 3, '2021-12-02 15:48:32');

--
-- Triggers `cartdetail`
--
DELIMITER $$
CREATE TRIGGER `insertCartDetail` BEFORE INSERT ON `cartdetail` FOR EACH ROW BEGIN
  IF NEW.quantity > (SELECT quantity FROM product WHERE NEW.productID = id)
  THEN
   SIGNAL SQLSTATE '02000' SET MESSAGE_TEXT = 'Warning: Quantity not enough!';
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateCartDetail` BEFORE UPDATE ON `cartdetail` FOR EACH ROW BEGIN
  IF NEW.quantity > (SELECT quantity FROM product WHERE NEW.productID = id)
  THEN
   SIGNAL SQLSTATE '02000' SET MESSAGE_TEXT = 'Warning: Quantity not enough!';
  END IF;
END
$$
DELIMITER ;

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
(1, 17),
(1, 19),
(3, 19),
(5, 19);

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
(15, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', 'ưetrfwe', '2021-11-26', 'minhphat'),
(16, 'Phan Minh Phát', '0707061515', 'myphan2710@gmail.com', '', NULL, 'phanminhphat'),
(17, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', 'fsfeesdffe', '2021-12-01', 'minhphat123');

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
(8, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', '123', '2021-11-26', '2021-11-26', 'minhphat'),
(9, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', 'fdsfsd', '2021-12-01', '2021-12-01', 'minhphat123'),
(10, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', '4535345', '2021-12-02', '2021-12-02', 'phanminhphat');

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

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`id`, `date`, `total`, `employee_username`) VALUES
(31, '2021-12-01', 500000, 'minhphat123'),
(32, '2021-12-01', 200000, 'minhphat123'),
(33, '2021-12-02', 4000000, 'minhphat123'),
(34, '2021-12-02', 4000000, 'minhphat123'),
(35, '2021-12-02', 2000000, 'minhphat123'),
(36, '2021-12-02', 10000, 'minhphat123'),
(37, '2021-12-02', 10000, 'minhphat123'),
(40, '2021-12-02', 2786000, 'phanminhphat'),
(41, '2021-12-02', 2786000, 'phanminhphat'),
(42, '2021-12-02', 2786000, 'phanminhphat');

--
-- Triggers `import`
--
DELIMITER $$
CREATE TRIGGER `deleteImport` BEFORE DELETE ON `import` FOR EACH ROW DELETE FROM orderdetail
WHERE orderID = OLD.id
$$
DELIMITER ;

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
(33, 17, 10, 200000),
(34, 17, 10, 200000),
(35, 17, 10, 200000),
(37, 1123, 1, 10000),
(40, 3, 10, 20000),
(40, 4, 10, 23000),
(40, 5, 4, 300000),
(40, 6, 34, 34000),
(41, 3, 10, 20000),
(41, 4, 10, 23000),
(41, 5, 4, 300000),
(41, 6, 34, 34000),
(42, 3, 10, 20000),
(42, 4, 10, 23000),
(42, 5, 4, 300000),
(42, 6, 34, 34000);

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
  `discount` double DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderID`, `productID`, `quantity`, `price`, `subtotal`, `discount`, `status`) VALUES
(79, 17, 1, 50000, 50000, 50, 0),
(80, 17, 39, 50000, 1950000, 50, 0),
(80, 38, 1, 123, 123, 20, 0),
(81, 17, 39, 50000, 1950000, 50, 0),
(81, 38, 1, 123, 123, 20, 0),
(82, 17, 40, 50000, 2000000, 50, 0),
(82, 38, 1, 123, 123, 20, 0),
(83, 17, 40, 50000, 2000000, 50, 0),
(83, 38, 1, 123, 123, 20, 0);

--
-- Triggers `orderdetail`
--
DELIMITER $$
CREATE TRIGGER `deleteOrderDetail` BEFORE DELETE ON `orderdetail` FOR EACH ROW UPDATE product
   SET quantity = quantity + 		OLD.quantity
   WHERE id = OLD.productID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertOrderDetail` BEFORE INSERT ON `orderdetail` FOR EACH ROW BEGIN
  IF NEW.quantity > (SELECT quantity FROM product WHERE NEW.productID = id)
  THEN
   SIGNAL SQLSTATE '02000' SET MESSAGE_TEXT = 'Warning: Quantity not enough!';
  END IF;
UPDATE product
   SET quantity = quantity - 		NEW.quantity
   WHERE id = NEW.productID;
END
$$
DELIMITER ;

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
(79, '2021-12-01', 25000, 0, 0, 25000, 'minhphat123', 'phanminhphat', NULL, 4, 25000, 0),
(80, '2021-12-01', 975099, 0, 0, 975099, NULL, 'phanminhphat', NULL, 0, NULL, NULL),
(81, '2021-12-01', 975099, 25000, 0, 975099, NULL, 'phanminhphat', NULL, 0, NULL, NULL),
(82, '2021-12-01', 1000099, 0, 200000, 800099, NULL, 'phanminhphat', NULL, 0, NULL, NULL),
(83, '2021-12-01', 1000099, 0, 210000, 790099, NULL, 'phanminhphat', NULL, 0, NULL, NULL);

--
-- Triggers `ordertb`
--
DELIMITER $$
CREATE TRIGGER `deleteOrder` BEFORE DELETE ON `ordertb` FOR EACH ROW DELETE FROM orderdetail
WHERE orderID = OLD.id
$$
DELIMITER ;

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
(2, 'add'),
(3, 'update'),
(4, 'delete');

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
  `publishdate` date DEFAULT NULL,
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
(3, 'Tô Hoài', NULL, 30, 20000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'Hồ Anh Thái', NULL, 30, 23000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 'Kishimoto Masashi', NULL, 12, 300000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'Gotōge Koyoharu', NULL, 102, 34000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(17, 'a - 10 vạn câu hỏi vì sao', 'Haha', 60, 50000, 200, '2021-11-17', 'Vietnamese', 5, '1620484.jpg', 5, 14, 'discount50', 1),
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
(38, 'Đoàn Chí Quang', '                                       \r\n                                    ', 3, 123, 12313, '2021-11-27', 'Viedsdaa', 1, '', 3, 14, 'discount20', 0),
(1123, 'Phanvsadjfhsdjkf', '', 1, 10000, 200, '2021-12-02', 'Vietnamese', 1, 'Untitled Diagram-Use Case.drawio.png', 3, 14, '121231344', 0);

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
(14, 'Lịch sử', '214234', NULL),
(15, 'Phan Minh Phát', 'Chi tiết lịch sử', NULL),
(16, 'Phan Minh Phát', 'Chi tiết lịch sử', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `orderID`, `productID`, `rating`, `comment`, `date`) VALUES
(18, 79, 17, 5, 'sdfsfsfs', '2021-12-01 14:25:27'),
(19, 79, 38, 5, 'đầ', '2021-12-02 12:27:28'),
(20, 83, 17, 3, 'aaaaaaaaaaaaa', '2021-12-07 13:10:51');

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
('customer', 'customer'),
('staff.product', '...'),
('staff.user', 'Chi tiết lịch sử');

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
('customer', 2),
('staff.product', 2),
('staff.product', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `minorder` double DEFAULT NULL,
  `maxsale` double DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `name`, `quantity`, `discount`, `startdate`, `enddate`, `minorder`, `maxsale`, `type`) VALUES
('121231344', '121231344', 22, 30, '2021-11-30', '2021-12-10', 20000, 10000, 3),
('121855184', 'voucher121855184', 5, 20, '2021-11-17', '2021-12-16', 100000, 20000, 3),
('discount20', 'giảm 20%', 0, 20, '2021-11-01', '2021-12-04', 0, 0, 0),
('discount50', 'Giam gia 50%', 0, 50, '2021-11-10', '2021-12-03', 0, 0, 0),
('freeshipping', 'Miễn phí vận chuyển', 4, NULL, '2021-11-16', '2021-12-10', 100000, NULL, 1),
('freeshipping-12', 'Free Shipping tháng 12', 50, NULL, '2021-11-30', '2021-11-04', 50000, NULL, 1),
('SN2021', 'Sinh nhật 2021', 8, 50, '2021-10-05', '2021-12-17', 1000000, 200000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sale_order`
--

CREATE TABLE `sale_order` (
  `orderID` int(11) NOT NULL,
  `saleID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_order`
--

INSERT INTO `sale_order` (`orderID`, `saleID`) VALUES
(80, 'freeshipping'),
(82, 'freeshipping'),
(82, 'SN2021'),
(83, '121231344'),
(83, 'freeshipping'),
(83, 'SN2021');

--
-- Triggers `sale_order`
--
DELIMITER $$
CREATE TRIGGER `insertsaleorder` BEFORE INSERT ON `sale_order` FOR EACH ROW UPDATE sale
 SET quantity = quantity - 1
 WHERE id = NEW.saleID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sale_user`
--

CREATE TABLE `sale_user` (
  `username` varchar(50) NOT NULL,
  `saleID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_user`
--

INSERT INTO `sale_user` (`username`, `saleID`) VALUES
('phanminhphat', 'SN2021');

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
('hello', 'hello', 'hello@gmail.com', '2021-11-20', 1, '1620484.jpg'),
('minhphat', 'minhphat', 'ưdrfsdf', '2021-11-26', 1, NULL),
('minhphat123', '123', '324123', '2021-11-13', 1, NULL),
('phanminhphat', '$2y$10$r7c2fuHg5z0nIqQCv4IOdOkrspTcWx9YCJ2FadebbvF.U30XmQZpO', 'myphan2710@gmail.com', '2021-11-26', 1, '1620484.jpg');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `addUser` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO `cart` (`id`, `username`) VALUES (NULL, NEW.username)
$$
DELIMITER ;

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
('phanminhphat', 'admin');

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
  ADD PRIMARY KEY (`id`,`username`),
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderID` (`orderID`,`productID`),
  ADD KEY `productID` (`productID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `esrb`
--
ALTER TABLE `esrb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orderdetail` (`orderID`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `orderdetail` (`productID`);

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
