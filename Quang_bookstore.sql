-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 06, 2021 at 05:46 PM
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
(6, 'Gotōge Koyoharu', 'Chi tiết', 'tacgiakoyoharu.jpg'),
(25, 'Hans Christian Andersen', '                                       \r\n                                    ', 'tacgiaHansChristianAndersen.jpg');

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
(16, 'chiquang'),
(17, 'khachhang'),
(18, 'minhphat'),
(19, 'nguyenvana'),
(24, 'chiquang01'),
(25, 'chithien'),
(26, 'admin');

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
(24, 1, 1, '2021-12-06 19:50:48'),
(25, 41, 1, '2021-12-06 20:23:32'),
(25, 44, 1, '2021-12-06 20:23:34');

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
(1, 18),
(2, 12),
(2, 38),
(3, 6),
(3, 14),
(3, 32),
(5, 2),
(5, 9),
(5, 19),
(5, 20),
(5, 21),
(5, 24),
(5, 25),
(5, 31),
(5, 36),
(6, 1),
(6, 10),
(6, 19),
(6, 21),
(6, 24),
(7, 33),
(7, 41),
(8, 23),
(8, 25),
(8, 28),
(8, 29),
(8, 30),
(8, 32),
(8, 37),
(9, 3),
(9, 4),
(9, 8),
(9, 10),
(9, 11),
(9, 19),
(9, 22),
(9, 36),
(10, 15),
(11, 16),
(11, 25),
(11, 34),
(11, 35),
(15, 26),
(15, 39),
(16, 26),
(17, 44),
(18, 7),
(18, 13),
(23, 40),
(25, 42),
(26, 43),
(28, 5);

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
(16, 'Tên Khách Hàng', '0123456789', 'khachhang@gmail.com', 'Quận 10, TP Hồ Chí Minh', '0000-00-00', 'khachhang'),
(24, 'Nguyễn Văn A', '0909112233', 'nguyenvana@gmail.com', '213123', '2021-11-01', 'nguyenvana'),
(29, 'Đoàn Chí Quang', '0384327229', 'chiquang321@gmail.com', '', NULL, 'chiquang01'),
(30, 'Nguyễn Chí Thiện', '0384327229', 'nguyenchithien@gmail.com', '', NULL, 'chithien'),
(31, 'Dzeam Techie', '0384327229', 'dzeamtechie@gmail.com', 'Hồ Chí Minh', '2001-07-12', 'admin');

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
(9, 'Đoàn Chí Quang', '0384327229', 'chiquang127@gmail.com', 'Hồ Chí Minh', '2001-07-12', '2021-11-03', 'chiquang'),
(10, 'Phan Minh Phát', '0909112233', 'phanminhphat2001@gmail.com', 'Hồ Chí Minh', '2001-09-14', '2021-11-07', 'minhphat'),
(12, 'Dzeam Techie', '0384327229', 'dzeamtechie@gmail.com', 'Hồ Chí Minh', '2001-07-12', '2018-01-01', 'admin');

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
(153, 1, 9, 10000, 90000, 20, 0),
(154, 3, 2, 88000, 176000, 20, 0),
(154, 4, 5, 92000, 460000, 20, 0),
(154, 6, 1, 34000, 34000, 20, 0),
(154, 41, 1, 12000, 12000, 20, 1),
(155, 3, 1, 88000, 88000, 20, 1),
(155, 4, 1, 92000, 92000, 20, 1),
(155, 41, 1, 12000, 12000, 20, 1),
(156, 1, 1, 10000, 10000, 20, 1),
(156, 9, 3, 240000, 720000, 20, 1),
(157, 9, 2, 240000, 480000, 20, 1),
(157, 15, 1, 57600, 57600, 20, 1),
(157, 19, 2, 60000, 120000, 20, 1),
(158, 7, 1, 43000, 43000, 20, 1),
(158, 8, 3, 123000, 369000, 20, 1),
(159, 41, 9, 12000, 108000, 20, 1),
(160, 31, 14, 100000, 1400000, 20, 1),
(161, 41, 10, 12000, 120000, 20, 0),
(162, 24, 1, 12000, 12000, 20, 0),
(162, 25, 1, 50200, 50200, 20, 0),
(162, 27, 1, 100000, 100000, 20, 0),
(162, 28, 1, 112000, 112000, 20, 0),
(163, 28, 1, 112000, 112000, 20, 0),
(163, 30, 6, 100100, 600600, 20, 0),
(163, 32, 4, 200000, 800000, 20, 0),
(164, 31, 5, 100000, 500000, 20, 0),
(165, 1, 5, 10000, 50000, 20, 1),
(166, 1, 1, 10000, 10000, 20, 1),
(167, 31, 1, 100000, 100000, 20, 1),
(168, 1, 1, 10000, 10000, 20, 1),
(168, 2, 1, 10000, 10000, 20, 0),
(169, 1, 1, 10000, 10000, 20, 0),
(170, 1, 1, 10000, 10000, 20, 0),
(171, 1, 1, 10000, 10000, 20, 0);

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
UPDATE product
   SET sold = sold + 		NEW.quantity
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
(153, '2021-01-06', 72000, 25000, 0, 97000, NULL, 'chiquang', NULL, 4, NULL, NULL),
(154, '2021-08-03', 545600, 25000, 0, 570600, NULL, 'khachhang', NULL, 4, NULL, NULL),
(155, '2021-10-07', 153600, 0, 0, 153600, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(156, '2021-07-05', 584000, 25000, 0, 609000, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(157, '2021-09-14', 526080, 0, 0, 526080, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(158, '2021-05-03', 329600, 25000, 0, 354600, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(159, '2021-04-13', 86400, 25000, 0, 111400, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(160, '2021-03-03', 1120000, 25000, 200000, 945000, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(161, '2020-01-06', 96000, 25000, 0, 121000, NULL, 'khachhang', NULL, 4, NULL, NULL),
(162, '2020-02-06', 219360, 25000, 0, 244360, NULL, 'khachhang', NULL, 4, NULL, NULL),
(163, '2020-05-06', 1210080, 0, 0, 1210080, NULL, 'khachhang', NULL, 4, NULL, NULL),
(164, '2020-06-06', 400000, 25000, 0, 425000, NULL, 'khachhang', NULL, 4, NULL, NULL),
(165, '2020-12-06', 40000, 25000, 0, 65000, NULL, 'chiquang01', NULL, 4, NULL, NULL),
(166, '2020-11-06', 8000, 25000, 0, 33000, NULL, 'chithien', NULL, 4, NULL, NULL),
(167, '2021-12-06', 80000, 25000, 0, 105000, NULL, 'chithien', NULL, 4, NULL, NULL),
(168, '2021-12-06', 16000, 25000, 0, 41000, NULL, 'chithien', NULL, 4, NULL, NULL),
(169, '2021-12-06', 8000, 25000, 0, 33000, NULL, 'chithien', NULL, 4, NULL, NULL),
(170, '2021-12-06', 8000, 0, 0, 8000, 'chiquang', NULL, NULL, 4, 8000, 0),
(171, '2021-12-06', 8000, 25000, 0, 33000, NULL, 'admin', NULL, 4, NULL, NULL);

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
  `publishdate` date DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `esrbID` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `sold` int(11) NOT NULL,
  `authorID` int(11) DEFAULT NULL,
  `publisherID` int(11) DEFAULT NULL,
  `saleID` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `price`, `pagenumber`, `publishdate`, `language`, `esrbID`, `image`, `sold`, `authorID`, `publisherID`, `saleID`, `status`) VALUES
(1, 'Hành Trình Của Người Bán Hàng Vĩ Đại', '<div class=\"product_view_tab_content_ad\" style=\"margin: 0px; padding: 0px; overflow: hidden; max-height: 600px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 13px;\"><div id=\"product_tabs_description_contents\" style=\"margin: 20px 0px 0px; padding: 0px; line-height: 25px;\"><div id=\"desc_content\" class=\"std\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">“Hành Trình Của Người Bán Hàng Vĩ Đại” là một câu chuyện và cũng là một hành trình về một chàng thanh niên trẻ trong sự nghiệp chinh phục chính mình trở thành một “người bán hàng vĩ đại”.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Tại sao lại là người bán hàng vĩ đại? Bởi vì thứ mặt hàng chàng thanh niên ấy bán không chỉ là những thứ vật chất có thể cầm nắm và định giá dễ dàng, mà đó là công cuộc “bán mình” – bán giá trị của chính mình. Đó là một câu chuyện với ngôn ngữ giản dị, những cuộc đối thoại chân thật với những thông điệp gần gũi, dễ tiếp nhận và dễ vận dụng. Đọc xong trang cuối cùng của cuốn sách, tôi đã có thể mỉm cười và hài lòng với những thông điệp mà mình nhận được từ tác giả cuốn sách - anh Nguyễn Anh Dũng cũng là người Sáng lập Sbooks.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Cuốn sách sẽ giúp bạn giải quyết được những câu hỏi mà dường như bạn còn rối rắm trong quá trình bán hàng và phát triển bản thân mình, và nếu bạn đang còn những băn khoăn như “Hạnh phúc là gì? Phải làm sao để có được hạnh phúc? Tôi có thể trở thành một người bán hàng vĩ đại không? Giá trị thật sự của tôi nằm ở đâu?”</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Những câu hỏi ấy không chỉ được đặt ra để bỏ lửng ở đó, tác giả cuốn sách “Hành Trình Của Người Bán Hàng Vĩ Đại” thông qua đó cũng đã định hướng giúp độc giả đến với cách trả lời các câu hỏi ấy bằng mô hình 7S với 7 từ khóa cô đọng, hữu ích và bằng những ví dụ thực tiễn nhất,… Bạn sẽ biết mình cần chuẩn bị những gì để bước chân vào thương trường, những quy luật tất yếu, những mánh khóe gian xảo và cả cách để đối mặt với chúng mà không làm mất đi giá trị cốt lõi của doanh nghiệp mình hướng đến. Quan trọng nhất là bạn sẽ được nghe về câu chuyện thực tế của một chàng trai trẻ được nhắc đến trong sách có hành trình xây dựng doanh nghiệp tầm cỡ quốc tế với sứ mệnh cao cả, để từ đó bạn dễ dàng trở nên đột phá trên hành trình của chính bạn. Mỗi sự gặp gỡ trong đời đều mang đến cho ta những trải nghiệm giá trị. Nhưng không phải ai cũng có cơ may để có những sự gặp gỡ giá trị, và cuộc gặp gỡ với “Hành Trình Của Người Bán Hàng Vĩ Đại” có thể sẽ chính là cuộc gặp gỡ “định mệnh” khiến bạn thay đổi nhiều mặt về bản thân bạn lẫn cho sự nghiệp kinh doanh của bạn và cho chính cuộc đời của bạn.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Tất cả đã sẵn sàng, hành động hay không là phụ thuộc vào quyền của bạn. Chúc bạn nhận được nhiều giá trị từ “Hành Trình Của Người Bán Hàng Vĩ Đại”.</p><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; font-size: 1em;\"></div></div></div></div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 13px;\"></div><div style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: sans-serif; font-size: 13px; overflow-y: hidden;\"><div class=\"product_view_tab_content_ad_more\" style=\"margin: -600px 0px 0px; padding: 0px;\"><div class=\"product_view_tab_content_additional\" style=\"margin: 0px; padding: 0px; border-bottom: 1px solid rgb(193, 193, 193);\"><table class=\"data-table table-additional\" style=\"margin: 10px 0px; padding: 0px; border-spacing: 0px; max-width: 100%; background: transparent; border: none; empty-cells: show; width: 1200px; box-shadow: none;\"><colgroup style=\"margin: 0px; padding: 0px;\"><col width=\"25%\" style=\"margin: 0px; padding: 0px;\"><col style=\"margin: 0px; padding: 0px;\"></colgroup><tbody style=\"margin: 0px; padding: 0px;\"><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Mã hàng</th><td class=\"data_sku\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">9786047776245</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Nhà Cung Cấp</th><td class=\"data_supplier_list\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\"><a class=\"xem-chi-tiet\" href=\"https://www.fahasa.com/all-category.html?supplier_list=1228062&amp;fhs_campaign=ATTRIBUTE_PRODUCT\" style=\"margin: 0px; padding: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(36, 137, 244); transition: all 300ms ease-in 0s;\">CÔNG TY TNHH PHÁT HÀNH S BOOKS</a></td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Tác giả</th><td class=\"data_author\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">Nguyễn Anh Dũng</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">NXB</th><td class=\"data_publisher\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">NXB Thế Giới</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Năm XB</th><td class=\"data_publish_year\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">2020</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Trọng lượng (gr)</th><td class=\"data_weight\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">250</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Kích Thước Bao Bì</th><td class=\"data_size\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">20 x 13 cm</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Số trang</th><td class=\"data_qty_of_page\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">220</td></tr><tr style=\"margin: 0px; padding: 0px;\"><th class=\"table-label\" style=\"margin: 0px; padding: 4px; text-align: left; vertical-align: baseline; font-weight: normal; border: none; line-height: 1.6; white-space: nowrap; color: rgb(119, 119, 119); font-size: 1.1em;\">Hình thức</th><td class=\"data_book_layout\" style=\"margin: 0px; padding: 4px; vertical-align: top; border: none; font-size: 1.1em;\">Bìa Cứng</td></tr></tbody></table></div><div class=\"clear\" style=\"margin: 0px; padding: 0px; clear: both;\"></div><div id=\"product_tabs_description_contents\" style=\"margin: 20px 0px 0px; padding: 0px; line-height: 25px;\"><div id=\"desc_content\" class=\"std\" style=\"margin: 0px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">“Hành Trình Của Người Bán Hàng Vĩ Đại” là một câu chuyện và cũng là một hành trình về một chàng thanh niên trẻ trong sự nghiệp chinh phục chính mình trở thành một “người bán hàng vĩ đại”.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Tại sao lại là người bán hàng vĩ đại? Bởi vì thứ mặt hàng chàng thanh niên ấy bán không chỉ là những thứ vật chất có thể cầm nắm và định giá dễ dàng, mà đó là công cuộc “bán mình” – bán giá trị của chính mình. Đó là một câu chuyện với ngôn ngữ giản dị, những cuộc đối thoại chân thật với những thông điệp gần gũi, dễ tiếp nhận và dễ vận dụng. Đọc xong trang cuối cùng của cuốn sách, tôi đã có thể mỉm cười và hài lòng với những thông điệp mà mình nhận được từ tác giả cuốn sách - anh Nguyễn Anh Dũng cũng là người Sáng lập Sbooks.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Cuốn sách sẽ giúp bạn giải quyết được những câu hỏi mà dường như bạn còn rối rắm trong quá trình bán hàng và phát triển bản thân mình, và nếu bạn đang còn những băn khoăn như “Hạnh phúc là gì? Phải làm sao để có được hạnh phúc? Tôi có thể trở thành một người bán hàng vĩ đại không? Giá trị thật sự của tôi nằm ở đâu?”</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Những câu hỏi ấy không chỉ được đặt ra để bỏ lửng ở đó, tác giả cuốn sách “Hành Trình Của Người Bán Hàng Vĩ Đại” thông qua đó cũng đã định hướng giúp độc giả đến với cách trả lời các câu hỏi ấy bằng mô hình 7S với 7 từ khóa cô đọng, hữu ích và bằng những ví dụ thực tiễn nhất,… Bạn sẽ biết mình cần chuẩn bị những gì để bước chân vào thương trường, những quy luật tất yếu, những mánh khóe gian xảo và cả cách để đối mặt với chúng mà không làm mất đi giá trị cốt lõi của doanh nghiệp mình hướng đến. Quan trọng nhất là bạn sẽ được nghe về câu chuyện thực tế của một chàng trai trẻ được nhắc đến trong sách có hành trình xây dựng doanh nghiệp tầm cỡ quốc tế với sứ mệnh cao cả, để từ đó bạn dễ dàng trở nên đột phá trên hành trình của chính bạn. Mỗi sự gặp gỡ trong đời đều mang đến cho ta những trải nghiệm giá trị. Nhưng không phải ai cũng có cơ may để có những sự gặp gỡ giá trị, và cuộc gặp gỡ với “Hành Trình Của Người Bán Hàng Vĩ Đại” có thể sẽ chính là cuộc gặp gỡ “định mệnh” khiến bạn thay đổi nhiều mặt về bản thân bạn lẫn cho sự nghiệp kinh doanh của bạn và cho chính cuộc đời của bạn.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-size: 1em; text-align: justify;\">Tất cả đã sẵn sàng, hành động hay không là phụ thuộc vào quyền của bạn. Chúc bạn nhận được nhiều giá trị từ “Hành Trình Của Người Bán Hàng Vĩ Đại”.</p></div></div></div></div>', 16, 10000, 200, '2021-11-29', 'Vietnamese', 1, 'hanhtrinhcuanguoibanhangvidai.jpg', 36, 3, 14, 'discount20', 1),
(2, 'Nhà Giả Kim (Tái Bản 2020)', '', 149, 10000, 200, '2021-12-06', 'Vietnamese', 1, 'nhagiakim.jpg', 1, 3, 14, 'discount20', 1),
(3, 'Nghĩ Giàu & Làm Giàu (Tái Bản 2020)', '', 27, 88000, 151, '2021-12-06', 'Vietnamese', 1, 'nghigiaulamgiau_110k-01_bia-1.jpg', 8, 3, 14, 'discount20', 1),
(4, 'D. Trump - Nghệ Thuật Đàm Phán (Tái Bản 2020)', '', 74, 92000, 545, '2021-11-28', 'Vietnamese', 1, 'image_195509_1_49918.jpg', 6, 3, 14, 'discount20', 1),
(5, 'Bách Khoa Thư Trẻ Em - Cuốn Sách Lí Giải Vạn Vật', '', 32, 32000, 122, '2021-12-06', 'Vietnamese', 1, 'bach-khoa-thu-tia-1.jpg', 0, 3, 14, 'discount20', 1),
(6, 'Ngữ Văn 10 - Tập 1 (2021)', '', 101, 34000, 545, '2044-02-04', 'Vietnamese', 1, 'image_242931.jpg', 1, 3, 14, 'discount20', 1),
(7, 'Bách Khoa Vũ Trụ - Mở Mang Kiến Thức, Khơi Dậy Tiềm Năng', '', 99, 43000, 321, '2021-11-28', 'Vietnamese', 1, '8936071672629.jpg', 1, 3, 14, 'discount20', 1),
(8, 'Who? Chuyện Kể Về Danh Nhân Thế Giới: Vincent Van Gogh (Tái Bản 2019)', '', 97, 123000, 121, '2021-12-07', 'Vietnamese', 1, 'image_182456.jpg', 3, 3, 14, 'discount20', 1),
(9, 'Lãnh Đạo Bằng Câu Hỏi', '', 95, 240000, 545, '2043-10-05', 'Vietnamese', 1, '94efc3aa91376fc18e8e580396369f0f.jpg', 5, 3, 14, 'discount20', 1),
(10, 'Danh Nhân Thế Giới: Sutơ (Tái Bản 2019)', '', 100, 500000, 215, '2043-10-09', 'Vietnamese', 1, 'image_181943.jpg', 0, 3, 14, 'discount20', 1),
(11, 'Who? Chuyện Kể Về Danh Nhân Thế Giới: Steve Jobs (Tái Bản 2019)', NULL, 100, 21000, 545, '0000-00-00', 'Vietnamese', 1, 'image_187127.jpg', 0, 3, 14, 'discount20', 1),
(12, '10 Vạn Câu Hỏi Vì Sao - Khám Phá Trái Đất (Tái Bản 2018)', NULL, 100, 23000, 235, '0000-00-00', 'Vietnamese', 1, '10cauhoi.jpg', 0, 3, 14, 'discount20', 1),
(13, 'Geography Encyclopedia - Bách Khoa Toàn Thư Về Địa Lý', NULL, 100, 67500, 566, '0000-00-00', 'Vietnamese', 1, 'image_195509_1_18112.jpg', 0, 3, 14, 'discount20', 1),
(14, 'Sự Trỗi Dậy Và Suy Tàn Của Đế Chế Thứ Ba - Lịch Sử Đức Quốc Xã (Tái Bản)', NULL, 100, 34500, 878, '0000-00-00', 'Vietnamese', 1, 'image_244718_1_4985.jpg', 0, 3, 14, 'discount20', 1),
(15, 'Khoa Học & Nghệ Thuật Của Việc Ra Quyết Định', NULL, 99, 57600, 694, '2044-01-08', 'Vietnamese', 1, '8ec379f2d6649317cee9b11cf5922708.jpg', 1, 3, 14, 'discount20', 1),
(16, 'Danh Tướng Việt Nam Trong Lịch Sử - Tập 2', NULL, 100, 55000, 242, '0000-00-00', 'Vietnamese', 1, 'image_244718_1_3333.jpg', 0, 3, 14, 'discount20', 1),
(17, 'Tuổi Trẻ Đáng Giá Bao Nhiêu (Tái Bản 2021)', NULL, 100, 45000, 854, '0000-00-00', 'Vietnamese', 1, 'image_239651.jpg', 0, 3, 14, 'discount20', 1),
(18, 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', '', 100, 45000, 987, '2021-12-06', 'Vietnamese', 1, 'image_180164jpg.jpg', 0, 3, 15, 'discount20', 1),
(19, 'Đắc Nhân Tâm (Khổ Lớn) (Tái Bản)', NULL, 98, 60000, 654, '2044-01-06', 'Vietnamese', 1, '9558a365adde6688d4c71a200d78310c.jpg', 2, 3, 14, 'discount20', 1),
(20, 'Đàn Ông Sao Hỏa Đàn Bà Sao Kim', NULL, 100, 34000, 87, '0000-00-00', 'Vietnamese', 1, 'image_183259.jpg', 0, 3, 14, 'discount20', 1),
(21, 'Tôi Tự Học (Tái Bản 2021)', NULL, 100, 455000, 354, '0000-00-00', 'Vietnamese', 1, 'image_226326.jpg', 0, 3, 14, 'discount20', 1),
(22, 'Nhà Quản Lý Linh Hoạt', NULL, 100, 29000, 412, '0000-00-00', 'Vietnamese', 1, 'image_234634.jpg', 0, 3, 14, 'discount20', 1),
(23, 'The Alchemist (Size:11x17.5cm)', NULL, 100, 110000, 481, '0000-00-00', 'English', 1, 'image_92663.jpg', 0, 3, 14, 'discount20', 1),
(24, 'P.S. I Love You', NULL, 99, 12000, 211, '0000-00-00', 'English', 1, 'image_128884.jpg', 1, 3, 14, 'discount20', 1),
(25, '20,000 Leagues Under the Sea', NULL, 99, 50200, 100, '0000-00-00', 'English', 1, 'cover-cust-7150.jpg', 1, 3, 14, 'discount20', 1),
(26, 'For Whom the Bell Tolls', NULL, 100, 25000, 154, '2044-02-04', 'English', 1, 'image_105432.jpg', 0, 3, 14, 'discount20', 1),
(27, 'The Most Dangerous Game', NULL, 99, 100000, 655, '0000-00-00', 'English', 1, 'cover-orig-23924.jpg', 1, 3, 14, 'discount20', 1),
(28, 'The Woman in White', NULL, 98, 112000, 125, '2044-04-07', 'English', 1, 'cover-orig-1809.jpg', 2, 3, 14, 'discount20', 1),
(29, 'Antonina', NULL, 100, 210000, 221, '0000-00-00', 'English', 1, 'cover-orig-1783.jpg', 0, 3, 14, 'discount20', 1),
(30, 'Armadale', NULL, 94, 100100, 121, '0000-00-00', 'English', 1, 'cover-orig-1784.jpg', 6, 3, 14, 'discount20', 1),
(31, 'The Guilty River', NULL, 80, 100000, 328, '0000-00-00', 'English', 1, 'cover-orig-1793.jpg', 20, 3, 14, 'discount20', 1),
(32, 'The Grammar of English Grammars', NULL, 96, 200000, 218, '0000-00-00', 'English', 1, 'cover-auto-8325.jpg', 4, 3, 14, 'discount20', 1),
(33, 'At the Mountains of Madness', NULL, 100, 300000, 248, '0000-00-00', 'English', 1, 'cover-orig-13235.jpg', 0, 3, 14, 'discount20', 1),
(34, 'The Art of War', NULL, 100, 400000, 415, '2044-01-09', 'English', 1, 'cover-cust-7088.jpg', 0, 3, 14, 'discount20', 1),
(35, 'Paws off the Boss', NULL, 100, 500000, 214, '0000-00-00', 'English', 1, '41mbN6puSFL.jpeg', 0, 3, 14, 'discount20', 1),
(36, 'Think Big', NULL, 100, 600000, 100, '0000-00-00', 'English', 1, 'think_big_1_2018_08_21_15_04_15.jpg', 0, 3, 14, 'discount20', 1),
(37, 'Elon Musk: How the Billionaire CEO of SpaceX and Tesla is Shaping our Future', NULL, 100, 250000, 151, '0000-00-00', 'English', 1, 'image_140812.jpg', 0, 3, 14, 'discount20', 1),
(38, 'Les Simpson - Spécial fêtes - tome 4 Font la nouba ! 4', NULL, 100, 145000, 325, '0000-00-00', 'France', 1, 'image_240361.jpg', 0, 3, 14, 'discount20', 1),
(39, 'Gaston', '', 100, 15000, 158, '2021-12-03', 'France', 1, 'image_240363.jpg', 0, 3, 14, 'discount20', 1),
(40, 'Bestiaire indien', NULL, 100, 50000, 54, '0000-00-00', 'France', 1, 'image_232362.jpg', 0, 3, 14, 'discount20', 1),
(41, 'Naruto', '', 126, 12000, 100, '2021-11-30', 'Vietnamese', 2, 'naruto.jpg', 24, 5, 15, 'discount20', 1),
(42, 'Bạch Tuyết và Bảy Chú Lùn', '                                       \r\n                                    ', 150, 20000, 23, '2021-11-30', 'Vietnamese', 1, 'bachtuyetva7chulun.jpg', 0, 3, 15, 'discount20', 1),
(43, 'Cô Bé Bán Diêm', '                                       \r\n                                    ', 150, 17000, 23, '2021-11-30', 'Vietnamese', 1, 'cobebandiem.jpg', 0, 25, 15, 'discount20', 1),
(44, 'Những Giấc Mơ Xanh', '                                       \r\n                                    ', 150, 30000, 45, '2021-12-01', 'Vietnamese', 1, 'nhunggiacmoxanh.jpg', 0, 3, 14, 'discount20', 1);

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
(14, 'NXB Hà Nội', 'Address', NULL),
(15, 'NXB TH HCM', 'Address', NULL);

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
(21, 155, 3, 5, 'Giao hàng nhanh', '2021-12-06 18:50:39'),
(26, 155, 4, 4, 'Hay', '2021-12-06 18:51:50'),
(32, 156, 9, 4, 'Đóng gói không tốt\r\n', '2021-12-06 18:59:02'),
(34, 155, 41, 5, 'Tuyệt vời', '2021-12-06 19:05:15'),
(38, 157, 9, 4, 'Sách khá hay', '2021-12-06 19:09:17'),
(44, 157, 15, 4, 'Hay', '2021-12-06 19:27:59'),
(45, 157, 19, 5, 'Hay', '2021-12-06 19:28:06'),
(46, 158, 7, 5, 'Tốt', '2021-12-06 19:28:15'),
(47, 158, 8, 5, 'Giao nhanh', '2021-12-06 19:28:24'),
(48, 159, 41, 5, 'Giao nhanh', '2021-12-06 19:28:29'),
(49, 160, 31, 5, 'Giao nhanh, sách hay', '2021-12-06 19:28:42'),
(50, 165, 1, 1, 'Đóng gói tệ, giao hàng lâu', '2021-12-06 19:36:12'),
(56, 167, 31, 3, 'Sách khá hay', '2021-12-06 19:57:03'),
(58, 168, 2, 4, 'Hay\r\n', '2021-12-06 20:15:08'),
(59, 169, 1, 4, 'Sách hay', '2021-12-06 20:18:34'),
(61, 171, 1, 5, 'Quá hay', '2021-12-06 23:43:15');

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
('discount20', 'Giảm 20%', 0, 20, '2021-11-01', '2021-12-10', 0, 0, 0),
('discount50', 'Giảm 50%', 0, 50, '2021-11-10', '2021-12-10', 0, 0, 0),
('freeshipping', 'Miễn phí vận chuyển', -2, NULL, '2021-11-16', '2021-12-10', 100000, NULL, 1),
('freeshipping-12', 'Free Shipping tháng 12', 50, NULL, '2021-11-30', '2021-11-04', 50000, NULL, 1),
('SN2021', 'Sinh nhật 2021', 7, 50, '2021-10-05', '2021-12-17', 1000000, 200000, 2);

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
(155, 'freeshipping'),
(157, 'freeshipping'),
(160, 'SN2021'),
(163, 'freeshipping');

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
('admin', '$2y$10$78LgWhbqq6E/EuFBMB3hcOmWVf8y7bdF2kg6MtX.gxFXK88Laqe..', 'dzeamtechie@gmail.com', '2021-12-06', 1, 'user1-128x128.jpg'),
('chiquang', '$2y$10$o8FRAijSWv3lCYmGDyEkWeG.GGkx692Ab2uapvvwyAEqMIX3Y2xFO', 'chiquang127@gmail.com', '2021-11-14', 1, 'user1-128x128.jpg'),
('chiquang01', '$2y$10$mY3.jtCoBeNI7KagjjF6QOrFlqDmfx9aMpCCV5/SiP0Vo39Z6sRHy', 'chiquang321@gmail.com', '2021-12-06', 1, 'user1-128x128.jpg'),
('chithien', '$2y$10$jACncVlIuPu7m9QSVPrsv.i/VElR12uNDKwI7I9d1uuANxdvq4YcG', 'nguyenchithien@gmail.com', '2021-12-06', 1, 'user5-128x128.jpg'),
('khachhang', '$2y$10$fEaOkSRDcCvBgp9qB9jUFO5NKKBcXemXh/2IGjaltDTeKrE73lx5S', 'khachhang@gmai.com', '2021-11-21', 1, 'user3-128x128.jpg'),
('minhphat', '$2y$10$fBBYoXiIIyyDVKEJUQ/Y5ef3HF/Kp1TMSx.kfymymRP1uAN6csbdW', 'phanminhphat2001@gmail.com', '2021-11-14', 0, 'user4-128x128.jpg'),
('nguyenvana', '$2y$10$/9v0INkZnTFomnoblHPpqu2ye3Ih0CTHJzcSTsGwL.AxsZFm8mPpu', 'nguyenvana@gmail.com', '2021-11-25', 0, 'user5-128x128.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `esrb`
--
ALTER TABLE `esrb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
