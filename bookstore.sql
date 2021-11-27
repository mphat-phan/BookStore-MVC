-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 26, 2021 at 02:39 PM
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
(4, 'Phan Minh Phát 2', '123123123', NULL),
(5, 'alex', 'alex', NULL),
(6, 'Phan Minh Phát', 'Chi tiết lịch sử', NULL),
(9, 'Lịch sử', 'Chi tiết lịch sử', '2447228.jpg'),
(10, '', '<b>étfsfsfsrfsf</b>', ''),
(11, 'Khaled Hosseini', '<h1 id=\"firstHeading\" class=\"firstHeading\" style=\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 0.25em; margin-left: 0px; padding: 0px; overflow: visible; border-bottom: 1px solid rgb(162, 169, 177); font-size: 1.8em; font-family: &quot;Linux Libertine&quot;, Georgia, Times, serif; line-height: 1.3;\">Khaled Hosseini</h1><div id=\"bodyContent\" class=\"vector-body\" style=\"font-size: calc(0.875em); line-height: 1.6; position: relative; z-index: 0; color: rgb(32, 33, 34); font-family: sans-serif;\"><div id=\"siteSub\" class=\"noprint\" style=\"font-size: 16.1px;\">From Wikipedia, the free encyclopedia</div><div id=\"siteSub\" class=\"noprint\" style=\"font-size: 16.1px;\"><p style=\"margin: 0.5em 0px; font-size: 17.5px;\"><b>Khaled Hosseini</b>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/Persian_language\" title=\"Persian language\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Persian</a>:&nbsp;<span lang=\"fa\" dir=\"rtl\">خالد حسینی</span>‎&nbsp;<small style=\"font-size: 14.875px;\"></small><span title=\"Representation in the International Phonetic Alphabet (IPA)\" class=\"IPA\"><a href=\"https://en.wikipedia.org/wiki/Help:IPA/Persian\" title=\"Help:IPA/Persian\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[ˈxɒled hoˈsejni]</a></span>;&nbsp;<span class=\"rt-commentedText nowrap\" style=\"white-space: nowrap;\"><span class=\"IPA nopopups noexcerpt\"><a href=\"https://en.wikipedia.org/wiki/Help:IPA/English\" title=\"Help:IPA/English\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">/<span style=\"border-bottom: 1px dotted;\"><span title=\"/ˈ/: primary stress follows\">ˈ</span><span title=\"\'h\' in \'hi\'\">h</span><span title=\"/ɑː/: \'a\' in \'father\'\">ɑː</span><span title=\"\'l\' in \'lie\'\">l</span><span title=\"/ɛ/: \'e\' in \'dress\'\">ɛ</span><span title=\"\'d\' in \'dye\'\">d</span></span><span class=\"wrap\" style=\"white-space: normal;\">&nbsp;</span><span style=\"border-bottom: 1px dotted;\"><span title=\"\'h\' in \'hi\'\">h</span><span title=\"/oʊ/: \'o\' in \'code\'\">oʊ</span><span title=\"/ˈ/: primary stress follows\">ˈ</span><span title=\"\'s\' in \'sigh\'\">s</span><span title=\"/eɪ/: \'a\' in \'face\'\">eɪ</span><span title=\"\'n\' in \'nigh\'\">n</span><span title=\"/i/: \'y\' in \'happy\'\">i</span></span>/</a></span></span>; born 4 March 1965) is an&nbsp;<a href=\"https://en.wikipedia.org/wiki/Afghan_Americans\" title=\"Afghan Americans\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Afghan-American</a>&nbsp;novelist and&nbsp;<a href=\"https://en.wikipedia.org/wiki/United_Nations_High_Commissioner_for_Refugees\" title=\"United Nations High Commissioner for Refugees\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">UNHCR</a>&nbsp;goodwill ambassador.<sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-1\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup><sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-2\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[2]</a></sup>&nbsp;His&nbsp;<a href=\"https://en.wikipedia.org/wiki/Debut_novel\" title=\"Debut novel\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">debut novel</a>&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/The_Kite_Runner\" title=\"The Kite Runner\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">The Kite Runner</a></i>&nbsp;(2003) was a critical and commercial success; the book, as well as his subsequent novels, have all been at least partially set in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Afghanistan\" title=\"Afghanistan\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Afghanistan</a>&nbsp;and have featured an&nbsp;<a href=\"https://en.wikipedia.org/wiki/Afghans\" title=\"Afghans\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Afghan</a>&nbsp;as the protagonist.</p><p style=\"margin: 0.5em 0px; font-size: 17.5px;\">Born in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Kabul\" title=\"Kabul\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Kabul</a>, Afghanistan, to a diplomat father, Hosseini spent some time living in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Iran\" title=\"Iran\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Iran</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/France\" title=\"France\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">France</a>. When Hosseini was 15, his family applied for asylum in the&nbsp;<a href=\"https://en.wikipedia.org/wiki/United_States\" title=\"United States\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">United States</a>, where he later became a naturalized citizen. Hosseini did not return to Afghanistan until 2003<sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-3\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[3]</a></sup>&nbsp;when he was 38, an experience similar to that of the protagonist in&nbsp;<i>The Kite Runner</i>. In later interviews, Hosseini admitted to feeling&nbsp;<a href=\"https://en.wikipedia.org/wiki/Survivor_guilt\" title=\"Survivor guilt\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">survivor\'s guilt</a>&nbsp;for having been able to leave the country prior to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Soviet_invasion_in_Afghanistan\" class=\"mw-redirect\" title=\"Soviet invasion in Afghanistan\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Soviet invasion</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Soviet%E2%80%93Afghan_War\" title=\"Soviet–Afghan War\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">subsequent</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/War_in_Afghanistan_(2001%E2%80%93present)\" class=\"mw-redirect\" title=\"War in Afghanistan (2001–present)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">wars</a>.</p><p style=\"margin: 0.5em 0px; font-size: 17.5px;\">After graduating from college, Hosseini worked as a physician in&nbsp;<a href=\"https://en.wikipedia.org/wiki/California\" title=\"California\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">California</a>, a situation he likened to \"an arranged marriage\".<sup id=\"cite_ref-dmiller_4-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-dmiller-4\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[4]</a></sup>&nbsp;The success of&nbsp;<i>The Kite Runner</i>&nbsp;meant he was able to retire from medicine in order to write full-time. His three novels have all reached various levels of critical and commercial success.<sup id=\"cite_ref-5\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-5\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[5]</a></sup>&nbsp;<i>The Kite Runner</i>&nbsp;spent 101 weeks on&nbsp;<a href=\"https://en.wikipedia.org/wiki/The_New_York_Times_Best_Seller_list\" title=\"The New York Times Best Seller list\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><i>The New York Times</i>&nbsp;Best Seller list</a>, including three weeks at number one.<sup id=\"cite_ref-6\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-6\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[6]</a></sup>&nbsp;His second novel,&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/A_Thousand_Splendid_Suns\" title=\"A Thousand Splendid Suns\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">A Thousand Splendid Suns</a></i>&nbsp;(2007), spent 103 weeks on the chart, including 15 at number one<sup id=\"cite_ref-7\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-7\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[7]</a></sup><sup id=\"cite_ref-8\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-8\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[8]</a></sup>&nbsp;while his third novel,&nbsp;<i>And the Mountains Echoed</i>&nbsp;(2013), remained on the chart for 33 weeks.<sup id=\"cite_ref-9\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-9\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[9]</a></sup><sup id=\"cite_ref-10\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-10\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[10]</a></sup>&nbsp;In addition to writing, Hosseini has advocated for refugees, including establishing with the UNHCR the Khaled Hosseini Foundation to support Afghan refugees returning to Afghanistan.<sup id=\"cite_ref-:0_11-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 14px;\"><a href=\"https://en.wikipedia.org/wiki/Khaled_Hosseini#cite_note-:0-11\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[11]</a></sup></p></div></div>                                       \r\n                                    ', 'uSAIvyK3_400x400.jpg'),
(12, 'Phan Minh Phát', '<b>dfsdfs</b>', 'Untitled Diagram-Use Case.drawio.png');

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
(4, 'Phan Minh Phát', '                                       \r\n                                    ', NULL, ''),
(5, 'Lịch sử', 'fsf', NULL, ''),
(6, 'Lịch sử Việt Nam', 'fsf', 5, '');

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
(4, 17),
(4, 19),
(4, 20);

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
(16, 'Phan Minh Phát', '0707061515', 'myphan2710@gmail.com', '', NULL, 'phanminhphat');

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
(8, 'Phan Minh Phát', '0707061515', 'phan@gmail.com', '123', '2021-11-26', '2021-11-26', 'minhphat');

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

--
-- Triggers `importdetail`
--
DELIMITER $$
CREATE TRIGGER `insertImportDetail` BEFORE INSERT ON `importdetail` FOR EACH ROW UPDATE product
   SET quantity = quantity + 		NEW.quantity
   WHERE id = NEW.productID
$$
DELIMITER ;

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
(17, '10 vạn câu hỏi vì sao', 'Haha', 0, 50000, 200, '2021-11-17', 'Vietnamese', 5, '', 5, 14, 'discount50', 1),
(19, 'Ngàn Mặt Trời Rực Rỡ', '<h1 id=\"firstHeading\" class=\"firstHeading\" style=\"color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 0.25em; margin-left: 0px; padding: 0px; overflow: visible; border-bottom: 1px solid rgb(162, 169, 177); font-size: 1.8em; font-family: &quot;Linux Libertine&quot;, &quot;Palatino Linotype&quot;, &quot;EB Garamond&quot;, &quot;Times New Roman&quot;, Times, serif; line-height: 1.3;\"><i>Ngàn mặt trời rực rỡ</i></h1><div id=\"bodyContent\" class=\"vector-body\" style=\"font-size: calc(0.875em); line-height: 1.6; position: relative; z-index: 0;\"><div id=\"siteSub\" class=\"noprint\" style=\"display: inline; font-size: 16.1px;\">Bách khoa toàn thư mở Wikipedia</div><div id=\"contentSub\" style=\"font-size: 14.7px; line-height: 1.2em; margin: 0px 0px 1.4em 1em; color: rgb(84, 89, 93); width: auto;\"></div><div id=\"contentSub2\" style=\"font-size: 14.7px; line-height: 1.2em; margin: 0px 0px 1.4em 1em; color: rgb(84, 89, 93); width: auto;\"></div><div id=\"jump-to-nav\"></div><a class=\"mw-jump-link\" href=\"https://vi.wikipedia.org/wiki/Ng%C3%A0n_m%E1%BA%B7t_tr%E1%BB%9Di_r%E1%BB%B1c_r%E1%BB%A1#mw-head\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: block; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px; padding: 0px; overflow: hidden; position: absolute !important;\">Bước tới điều hướng</a><a class=\"mw-jump-link\" href=\"https://vi.wikipedia.org/wiki/Ng%C3%A0n_m%E1%BA%B7t_tr%E1%BB%9Di_r%E1%BB%B1c_r%E1%BB%A1#searchInput\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: block; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px; padding: 0px; overflow: hidden; position: absolute !important;\">Bước tới tìm kiếm</a><div id=\"mw-content-text\" class=\"mw-body-content mw-content-ltr\" lang=\"vi\" dir=\"ltr\" style=\"direction: ltr;\"><div class=\"mw-parser-output\"><table class=\"infobox\" style=\"font-size: 0.88em; border: 1px solid rgb(170, 170, 170); border-spacing: 5px; background-color: rgb(249, 249, 249); margin: 5px 0px 5px 10px; color: black; float: right; clear: right; line-height: 1.25em; overflow-wrap: break-word; font-family: sans-serif; width: 22em;\"><tbody><tr><th colspan=\"2\" style=\"vertical-align: middle; text-align: center; padding: 12px; line-height: 1.1em; font-size: 20.79px; background: rgb(167, 219, 216); font-style: italic;\">Ngàn mặt trời rực rỡ</th></tr><tr><td colspan=\"2\" style=\"vertical-align: top; text-align: center;\">A Thousand Splendid Suns</td></tr><tr><th colspan=\"2\" style=\"vertical-align: super; text-align: center; padding: 5px; background: rgb(167, 219, 216); line-height: 1.5em;\">Thông tin sách</th></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Tác giả</th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/Khaled_Hosseini\" title=\"Khaled Hosseini\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Khaled Hosseini</a></td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Quốc gia</th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/Hoa_K%E1%BB%B3\" title=\"Hoa Kỳ\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Hoa Kỳ</a></td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Ngôn ngữ</th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Anh\" title=\"Tiếng Anh\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Tiếng Anh</a></td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Thể loại</th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BB%83u_thuy%E1%BA%BFt\" title=\"Tiểu thuyết\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Tiểu thuyết</a></td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Nhà xuất bản</th><td style=\"vertical-align: top;\">Riverhead Books</td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Ngày phát hành</th><td style=\"vertical-align: top;\">22 tháng 5 năm 2007</td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Kiểu sách</th><td style=\"vertical-align: top;\">In (bìa cứng &amp; bìa mềm)<br>Sách nói</td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\"><a href=\"https://vi.wikipedia.org/wiki/ISBN\" title=\"ISBN\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ISBN</a></th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BA%B7c_bi%E1%BB%87t:Ngu%E1%BB%93n_s%C3%A1ch/978-1-59448-950-1\" title=\"Đặc biệt:Nguồn sách/978-1-59448-950-1\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">978-1-59448-950-1</a></td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Cuốn trước</th><td style=\"vertical-align: top;\"><i><a href=\"https://vi.wikipedia.org/wiki/Ng%C6%B0%E1%BB%9Di_%C4%91ua_di%E1%BB%81u\" title=\"Người đua diều\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Người đua diều</a></i></td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Cuốn sau</th><td style=\"vertical-align: top;\"><i>And the Mountains Echoed</i></td></tr><tr><th colspan=\"2\" style=\"vertical-align: super; text-align: center; padding: 5px; background: rgb(167, 219, 216); line-height: 1.5em;\">Bản tiếng Việt</th></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Người dịch</th><td style=\"vertical-align: top;\">Nguyễn Thị Hương Thảo</td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Nhà&nbsp;xuất&nbsp;bản</th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/Nh%C3%A3_Nam_(c%C3%B4ng_ty)\" title=\"Nhã Nam (công ty)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Nhã Nam</a><br>Nhà xuất bản Văn học</td></tr><tr><th scope=\"row\" style=\"vertical-align: top; text-align: left; max-width: 140px; overflow-wrap: normal; padding-right: 0.8em; width: 8em;\">Ngày&nbsp;phát&nbsp;hành</th><td style=\"vertical-align: top;\"><a href=\"https://vi.wikipedia.org/wiki/2010\" title=\"2010\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2010</a></td></tr></tbody></table><p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif;\"><i><b>Ngàn mặt trời rực rỡ</b></i>&nbsp;là tiểu thuyết thứ hai phát hành năm&nbsp;<a href=\"https://vi.wikipedia.org/wiki/2007\" title=\"2007\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2007</a>&nbsp;của nhà văn&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Khaled_Hosseini\" title=\"Khaled Hosseini\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Khaled Hosseini</a>, một người&nbsp;<a href=\"https://vi.wikipedia.org/wiki/M%C4%A9\" class=\"mw-redirect\" title=\"Mĩ\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Mĩ</a>&nbsp;gốc&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Afghanistan\" title=\"Afghanistan\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Afghanistan</a>. Cuốn sách nhanh chóng trở thành tác phẩm bán chạy, tiếp nối sự thành công của tiểu thuyết&nbsp;<i><a href=\"https://vi.wikipedia.org/wiki/Ng%C6%B0%E1%BB%9Di_%C4%91ua_di%E1%BB%81u\" title=\"Người đua diều\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Người đua diều</a></i>&nbsp;năm&nbsp;<a href=\"https://vi.wikipedia.org/wiki/2003\" title=\"2003\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2003</a>&nbsp;của ông. Cả hai cuốn tiểu thuyết gộp lại bán được 38 triệu bản trên toàn thế giới. Năm&nbsp;<a href=\"https://vi.wikipedia.org/wiki/2010\" title=\"2010\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2010</a>,&nbsp;<i>Ngàn mặt trời rực rỡ</i>&nbsp;được dịch sang&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Vi%E1%BB%87t\" title=\"Tiếng Việt\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">tiếng Việt</a>.</p><div><br></div></div></div></div>                                       \r\n                                    ', 50, 100000, 522, '2021-11-10', 'Vietnamese', 2, 'image_181761.jpg', 11, 15, NULL, 0),
(20, '10 vạn câu hỏi vì sao', 'sdjghsjfhsdjg', 0, 50000, 2000, '2021-11-26', 'Vietnamese', 1, 'Untitled Diagram-Use Case.drawio.png', 4, 14, 'discount20', 0);

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
  `username` varchar(50) DEFAULT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
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
('discount20', 'giảm 20%', 0, 20, '2021-11-01', '2021-12-04', 0, 0, NULL),
('discount50', 'Giam gia 50%', 0, 50, '2021-11-10', '2021-12-03', 0, 0, NULL),
('SN2021', 'Sinh nhật 2021', 100, 50, '2021-10-05', '2021-11-30', 1000000, 200000, NULL);

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
('hello', 'hello', 'hello@gmail.com', '2021-11-20', 1, NULL),
('minhphat', 'minhphat', 'ưdrfsdf', '2021-11-26', 1, NULL),
('minhphat123', '123', '324123', '2021-11-13', 1, NULL),
('phanminhphat', '$2y$10$r7c2fuHg5z0nIqQCv4IOdOkrspTcWx9YCJ2FadebbvF.U30XmQZpO', 'myphan2710@gmail.com', '2021-11-26', 1, NULL);

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
  ADD KEY `username` (`username`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `esrb`
--
ALTER TABLE `esrb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ordertb`
--
ALTER TABLE `ordertb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `orderdetail` (`productID`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE SET NULL ON UPDATE SET NULL;

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
