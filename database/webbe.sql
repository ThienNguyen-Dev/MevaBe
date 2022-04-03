-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 05:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `chamsockhachhang`
--

CREATE TABLE `chamsockhachhang` (
  `ID_chamsockhachhang` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(245) DEFAULT NULL,
  `noidung` longtext DEFAULT NULL,
  `tieude_EN` varchar(245) DEFAULT NULL,
  `noidung_EN` longtext DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Ho tro khach hang';

--
-- Dumping data for table `chamsockhachhang`
--

INSERT INTO `chamsockhachhang` (`ID_chamsockhachhang`, `tieude`, `noidung`, `tieude_EN`, `noidung_EN`, `sapxep`, `visible`) VALUES
(1, 'Tháº¯c máº¯c khiáº¿u náº¡i', 'Äang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡i&nbsp;Äang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡iÄang cáº­p nháº­t ná»™i dung trang Tháº¯c máº¯c khiáº¿u náº¡i', 'Information transfer', '\r\n<h1 style=\"text-align: center;\"><img src=\"http://localhost/Editor/assets/the-tin-dung.jpg\" title=\"\" alt=\"\" /><br />\r\n	</h1>\r\n<h2 style=\"text-align: center;\">0o0o0o0o0o0o0o0o0o0o0o0o0o00o0o0Ã´0o0</h2>\r\n<h2 style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: Tahoma;\">QÃºy KhÃ¡ch CÃ³ Thá»ƒ Chuyá»ƒn Khoáº£ngQua CÃ¡c NgÃ¢n HÃ ng Sau</span></h2>\r\n<p style=\"text-align: center;\"><span style=\"font-weight: bold; color: rgb(255, 0, 0); font-size: 18pt;\">_Sacombank_</span></p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/Editor/assets/SACOMBANK_-_LOGO.jpg\" title=\"\" alt=\"\" width=\"470px\" /><br />\r\n	</p>\r\n<p>\r\n	<div style=\"text-align: center;\"><span style=\"font-weight: bold; font-family: Tahoma;\">TÃªn TÃ i Khoáº£n: Nguyá»…n Minh Máº«n</span></div><span style=\"font-weight: bold;\">\r\n		<div style=\"text-align: center;\"><span style=\"font-family: Tahoma;\">Sá»‘ TÃ i Khoáº£n: 06.005.08.99.147</span></div><span style=\"font-family: Tahoma;\">\r\n			<div style=\"text-align: center;\">Chi NhÃ¡nh: LÃª Trá»ng Táº¥n,p TÃ¢y Tháº¡nh,q TÃ¢n PhÃº</div></span></span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-weight: bold; color: rgb(255, 0, 0); font-size: 18pt;\">_ÄÃ´ng-Ã Bank</span></p>\r\n<h2 style=\"text-align: center;\"><img src=\"http://localhost/Editor/assets/DongA-Bank.jpg\" title=\"\" alt=\"\" width=\"0px\" height=\"0px\" /><img src=\"http://localhost/Editor/assets/DongA-Bank.jpg\" title=\"\" alt=\"\" width=\"470px\" /></h2>\r\n<h2>\r\n	<div style=\"text-align: center;\"><span style=\"font-size: 12pt; font-family: Tahoma;\">TÃªn TÃ i Khoáº£n: Nguyá»…n Minh Máº«n</span></div>\r\n	<div style=\"text-align: center;\"><span style=\"font-family: Tahoma; font-size: 12pt;\">Sá»‘ TÃ i Khoáº£n: 0106.290.509</span></div><span style=\"font-size: medium; font-family: Tahoma;\">\r\n		<div style=\"text-align: center; font-size: 12pt;\">Chi NhÃ¡nh: LÃª Trá»ng Táº¥n,p TÃ¢y Tháº¡nh,q TÃ¢n PhÃº</div></span></h2>\r\n<p>&nbsp;</p>\r\n<h1 style=\"text-align: center;\"><span style=\"font-size: 18pt; color: rgb(255, 0, 0);\">_Vietcombank_</span></h1>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/Editor/assets/vietcombank.jpg\" title=\"\" alt=\"\" width=\"470px\" /></p>\r\n<h2>\r\n	<div style=\"text-align: center;\"><span style=\"font-size: 12pt; font-family: Tahoma;\">T<span style=\"font-family: Tahoma;\">Ãªn TÃ i Khoáº£n: Nguyá»…n Minh Máº«n</span></span></div>\r\n	<div style=\"text-align: center;\"><span style=\"font-size: 12pt; font-family: Tahoma;\">Sá»‘ TÃ i Khoáº£n: 053.1000.286.067</span></div><span style=\"font-size: medium; font-family: Tahoma;\">\r\n		<div style=\"text-align: center;\">Chi NhÃ¡nh: LÃª Trá»ng Táº¥n,p TÃ¢y Tháº¡nh,q TÃ¢n PhÃº</div></span></h2>\r\n<h2 style=\"text-align: center;\">______oo00oo______</h2>\r\n<h1 style=\"text-align: center;\"><span style=\"font-family: Tahoma; font-size: 14pt;\">_Bong BÃ³ng 24h HÃ¢n Háº¡nh Phá»¥c Vá»¥ QÃºy KhÃ¡ch_</span></h1>\r\n<div style=\"text-align: center;\"><br />\r\n	</div>', 1, 1),
(2, 'Cam káº¿t hÃ i lÃ²ng', 'Äang cáº­p nháº­t ná»™i dung trang Cam káº¿t hÃ i lÃ²ng   ', NULL, NULL, 2, 1),
(3, 'HÆ°á»›ng dáº«n Ä‘áº·t hÃ ng', 'Äang cáº­p nháº­t trang hÆ°á»›ng dáº«n Ä‘áº·t hÃ ng ', NULL, NULL, 3, 1),
(4, 'HÆ°á»›ng dáº«n thanh toÃ¡n', 'Äang cáº­p nháº­t trang hÆ°á»›ng dáº«n thanh toÃ¡n', NULL, NULL, 4, 1),
(5, 'Báº£ng Ä‘á»“ Ä‘Æ°á»ng Ä‘i', '<img src=\"/Editor/assets/bando123.jpg\" title=\"\" alt=\"\" />', NULL, NULL, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID_chitietdonhang` int(10) UNSIGNED NOT NULL,
  `ID_donhang` int(10) UNSIGNED DEFAULT NULL,
  `tensanpham` varchar(245) DEFAULT NULL,
  `gia` double(10,0) DEFAULT NULL,
  `soluong` int(10) UNSIGNED DEFAULT NULL,
  `hinh` varchar(145) DEFAULT NULL,
  `sessionwork` varchar(245) DEFAULT NULL,
  `ID_thanhvien` int(10) UNSIGNED DEFAULT NULL,
  `ID_sanpham` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc1`
--

CREATE TABLE `danhmuc1` (
  `ID_danhmuc1` int(10) UNSIGNED NOT NULL,
  `tendanhmuc1` varchar(145) DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `visiblemenu1` tinyint(3) UNSIGNED DEFAULT NULL,
  `keyword` varchar(145) DEFAULT NULL,
  `visible1` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc1`
--

INSERT INTO `danhmuc1` (`ID_danhmuc1`, `tendanhmuc1`, `sapxep`, `visiblemenu1`, `keyword`, `visible1`) VALUES
(33, 'Mẹ', NULL, 1, 'San-pham-danh-cho-me', 1),
(34, 'Bé', NULL, 1, 'San-Pham-danh-cho-be', 2),
(35, 'Sản phẩm mới', NULL, 1, 'San-pham-moi', 1),
(36, 'Sản phẩm cũ', NULL, 1, 'San-pham-cu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc2`
--

CREATE TABLE `danhmuc2` (
  `ID_danhmuc2` int(10) UNSIGNED NOT NULL,
  `tendanhmuc2` varchar(145) DEFAULT NULL,
  `tendanhmuc2_EN` varchar(145) DEFAULT NULL,
  `ID_danhmuc1` int(10) UNSIGNED DEFAULT NULL,
  `visiblemenu2` tinyint(3) UNSIGNED DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `keyseo` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc2`
--

INSERT INTO `danhmuc2` (`ID_danhmuc2`, `tendanhmuc2`, `tendanhmuc2_EN`, `ID_danhmuc1`, `visiblemenu2`, `sapxep`, `keyseo`) VALUES
(23, 'Bỉm bé', NULL, 34, 1, NULL, 'Bim-be'),
(24, 'Bình Sữa', NULL, 34, 1, NULL, 'Do-cho-be'),
(28, 'Dinh Dưỡng Cho Bé', NULL, 34, 1, NULL, 'Dinh-duong-cho-be'),
(29, 'Đồ Dùng Cho Bé', NULL, 34, 1, NULL, 'Do-dung-cho-be'),
(30, 'Đồ Chơi', NULL, 34, 1, NULL, 'do-choi-cho-be'),
(31, 'Đồ Dùng Cho Mẹ', NULL, 33, 1, NULL, 'do-dung-cho-me'),
(32, 'Đồ Sơ Sinh', NULL, 33, 2, NULL, 'do-so-sinh'),
(33, 'Sữa', NULL, 34, 1, NULL, 'sua-cho-be'),
(34, 'Vitamin Cho Bé', NULL, 34, 2, NULL, 'vitamin-be'),
(35, 'Vitamin Cho Mẹ', NULL, 33, 1, NULL, 'vitamin-me'),
(40, 'Xe Đẩy Cho Bé', NULL, 34, 1, NULL, 'xe-day-be');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuctin`
--

CREATE TABLE `danhmuctin` (
  `ID_danhmuctin` int(10) UNSIGNED NOT NULL,
  `tendanhmuctin` varchar(145) DEFAULT NULL,
  `tendanhmuctin_EN` varchar(145) DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ID_donhang` int(10) UNSIGNED NOT NULL,
  `ID_thanhvien` int(10) UNSIGNED DEFAULT NULL,
  `firstname` varchar(145) DEFAULT NULL,
  `lastname` varchar(145) DEFAULT NULL,
  `companyname` varchar(245) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `address` varchar(245) DEFAULT NULL,
  `city` varchar(145) DEFAULT NULL,
  `country` varchar(145) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `card` text DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `totalprice` double(10,0) DEFAULT NULL,
  `sessionwork` varchar(245) DEFAULT NULL,
  `orderstatus` tinyint(3) UNSIGNED DEFAULT NULL,
  `ID_phuongthuc` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `ID_gioithieu` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(145) DEFAULT NULL,
  `noidung` longtext DEFAULT NULL,
  `tieude_EN` varchar(145) DEFAULT NULL,
  `noidung_EN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`ID_gioithieu`, `tieude`, `noidung`, `tieude_EN`, `noidung_EN`) VALUES
(1, 'Giá»›i thiá»‡u 123muanhanh.vn', '\r\n<p>Äang cáº­p nháº­t ná»™i dung giá»›i thiá»‡u vá» 123muanhanh.vn</p>         ', 'About us', 'Updating content...  ');

-- --------------------------------------------------------

--
-- Table structure for table `hotroonline`
--

CREATE TABLE `hotroonline` (
  `ID_hotro` int(10) UNSIGNED NOT NULL,
  `tennguoihotro` varchar(145) DEFAULT NULL,
  `nickyahoo` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `dienthoai` varchar(145) DEFAULT NULL,
  `tennguoihotro_EN` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotroonline`
--

INSERT INTO `hotroonline` (`ID_hotro`, `tennguoihotro`, `nickyahoo`, `email`, `visible`, `sapxep`, `dienthoai`, `tennguoihotro_EN`) VALUES
(1, 'Há»— trá»£ 1', 'nguyenluatsg', 'nguyenluatsg@yahoo.com', 1, 1, ' 090 960 0699', 'Support 1'),
(2, 'Há»— trá»£ 2', 'nptai', 'nptai@yahoo.com', 1, 2, '0945861290', 'Support 2');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `ID_lienhe` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(145) DEFAULT NULL,
  `diachi` varchar(245) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `dienthoai` varchar(45) DEFAULT NULL,
  `noidung` longtext DEFAULT NULL,
  `ngaylienhe` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`ID_lienhe`, `hoten`, `diachi`, `email`, `dienthoai`, `noidung`, `ngaylienhe`) VALUES
(2, 'Nguyá»…n PhÃ¡t TÃ i', '129 Phan VÄƒn HÃ¢n', 'nguyenphattai@gmail.com', '0945861290', 'Äang test thá»­ Form khÃ¡ch hÃ ng liÃªn há»‡ qua Email', NULL),
(3, 'Nguyá»…n PhÃ¡t TÃ i', 'd dsksdj', 'nguyenphattai@gmail.com', '0945861290', 'test mail', NULL),
(4, 'Nguyá»…n PhÃ¡t TÃ i', 'd dsksdj', 'nguyenphattai@gmail.com', '0945861290', 'test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `ID_phuongthuc` int(10) UNSIGNED NOT NULL,
  `tenphuongthuc` varchar(145) DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL,
  `tenphuongthuc_EN` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ID_sanpham` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) DEFAULT NULL,
  `tensanpham_EN` varchar(255) DEFAULT NULL,
  `hinhsanpham` varchar(145) DEFAULT NULL,
  `gia` double(10,0) DEFAULT NULL,
  `chitietsanpham` longtext DEFAULT NULL,
  `chitietsanpham_EN` longtext DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  `kiemduyet` tinyint(3) UNSIGNED DEFAULT NULL,
  `sanphammoi` tinyint(3) UNSIGNED DEFAULT NULL,
  `ID_danhmuc1` int(10) UNSIGNED DEFAULT NULL,
  `ID_danhmuc2` int(10) UNSIGNED DEFAULT NULL,
  `thongsokythuat` longtext DEFAULT NULL,
  `giakm` double(10,0) DEFAULT NULL,
  `solanxem` int(10) UNSIGNED DEFAULT 0,
  `thongsokythuat_EN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID_sanpham`, `tensanpham`, `tensanpham_EN`, `hinhsanpham`, `gia`, `chitietsanpham`, `chitietsanpham_EN`, `ngaycapnhat`, `kiemduyet`, `sanphammoi`, `ID_danhmuc1`, `ID_danhmuc2`, `thongsokythuat`, `giakm`, `solanxem`, `thongsokythuat_EN`) VALUES
(70, 'Bỉm Tã Super Daddy Magic Slim Hàn Quốc Siêu Thấm Chống Tràn, L Quần 24M', 'Super Daddy Magic Slim', 'bim1.jpg', 715000, 'Hàng tặng miếng thay đổi theo từng đợt nhập hàng\r\n\r\nTã quần Bobby Mega Jumbo M120/L104 mới\r\n- Mỏng không tưởng, thấm hút bất ngờ là cuộc cách mạng của ngành tã trẻ em.\r\n- Với công nghệ ép lõi đột phá từ Nhật Bản giúp tã quần Bobby:\r\n- Siêu mềm, mỏng chỉ 3mm\r\n- Thoáng khí gấp 2 lần \r\n- Thấm hút vượt trội và tuyệt đối không vón cục\r\n- Đệm lưng thấm mồ hôi\r\n- 3.000 lỗ thấm siêu tốc\r\n- Hệ thun xốp- co giãn mềm mại\r\n- Dải băng dính cuốn miếng tã tiện lợi\r\n- Hương trà xanh Nhật Bản dịu mát.\r\n\r\nTHÔNG TIN THƯƠNG HIỆU \r\nBobby là thương hiệu nổi tiếng của công ty Diana, thuộc tập đoàn Unicharm Nhật Bản, chuyên cung cấp những sản phẩm chất lượng cao cấp dành cho trẻ em. Ra mắt thị trường Việt Nam từ năm 2003, Bobby trở thành thương hiệu tã giấy được ưa chuộng và tin dùng bởi sự sáng tạo độc đáo và đầy yêu thương dành cho trẻ em, với thiết kế các loại tã giấy màng đáy thoáng khí dạng vải, đem đến sự khô thoáng và bảo vệ làn da của các bé.\r\nTháng 12 năm 2005, Bobby lại đi tiên phong trên thị trường Việt Nam bằng việc cải tiến sản phẩm tã giấy chống hăm 3 tác động với lõi bông siêu thấm, màng đáy thoáng khí dạng vải và tinh chất trà xanh.\r\nSử dụng dây chuyền sản xuất hiện đại kết hợp với thế mạnh là thành viên của tập đoàn hàng đầu thế giới Unicharm Nhật Bản, công ty Diana luôn đi đầu trong việc ứng dụng các công nghệ hiện đại trong lĩnh vực sản xuất các sản phẩm chăm sóc vệ sinh cá nhân để sáng tạo ra những sản phẩm chất lượng cao nhất, phù hợp nhất và Bobby là một minh chứng cho điều đó \r\n\r\n- Xuất xứ thương hiệu: Nhật Bản\r\n- Nơi sản xuất: Việt Nam \r\n- Hạn sử dụng: 4 năm kể từ NSX', NULL, '2022-03-08 06:56:03', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(71, 'Tã Vải Bambi Mio Rose-TGR Ban Ngày (2-4h) Cho Bé 3-12kg', 'Bambi Mio Rose-TGR', 'bim2.jpg', 425000, 'Hàng tặng miếng thay đổi theo từng đợt nhập hàng\r\n\r\nTã quần Bobby Mega Jumbo M120/L104 mới\r\n- Mỏng không tưởng, thấm hút bất ngờ là cuộc cách mạng của ngành tã trẻ em.\r\n- Với công nghệ ép lõi đột phá từ Nhật Bản giúp tã quần Bobby:\r\n- Siêu mềm, mỏng chỉ 3mm\r\n- Thoáng khí gấp 2 lần \r\n- Thấm hút vượt trội và tuyệt đối không vón cục\r\n- Đệm lưng thấm mồ hôi\r\n- 3.000 lỗ thấm siêu tốc\r\n- Hệ thun xốp- co giãn mềm mại\r\n- Dải băng dính cuốn miếng tã tiện lợi\r\n- Hương trà xanh Nhật Bản dịu mát.\r\n\r\nTHÔNG TIN THƯƠNG HIỆU \r\nBobby là thương hiệu nổi tiếng của công ty Diana, thuộc tập đoàn Unicharm Nhật Bản, chuyên cung cấp những sản phẩm chất lượng cao cấp dành cho trẻ em. Ra mắt thị trường Việt Nam từ năm 2003, Bobby trở thành thương hiệu tã giấy được ưa chuộng và tin dùng bởi sự sáng tạo độc đáo và đầy yêu thương dành cho trẻ em, với thiết kế các loại tã giấy màng đáy thoáng khí dạng vải, đem đến sự khô thoáng và bảo vệ làn da của các bé.\r\nTháng 12 năm 2005, Bobby lại đi tiên phong trên thị trường Việt Nam bằng việc cải tiến sản phẩm tã giấy chống hăm 3 tác động với lõi bông siêu thấm, màng đáy thoáng khí dạng vải và tinh chất trà xanh.\r\nSử dụng dây chuyền sản xuất hiện đại kết hợp với thế mạnh là thành viên của tập đoàn hàng đầu thế giới Unicharm Nhật Bản, công ty Diana luôn đi đầu trong việc ứng dụng các công nghệ hiện đại trong lĩnh vực sản xuất các sản phẩm chăm sóc vệ sinh cá nhân để sáng tạo ra những sản phẩm chất lượng cao nhất, phù hợp nhất và Bobby là một minh chứng cho điều đó \r\n\r\n- Xuất xứ thương hiệu: Nhật Bản\r\n- Nơi sản xuất: Việt Nam \r\n- Hạn sử dụng: 4 năm kể từ NSX', NULL, '2022-03-08 06:56:03', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(72, 'Tã Vải Bambi Mio Y-Bear NSP41(suede Cloth) Ban Đêm (6-8h) Cho Bé 3-16kg', 'Bambi Mio Y-Bear NSP41(suede Cloth)', 'bim3.jpg', 635000, NULL, NULL, '2022-03-08 07:03:22', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(73, 'Tã Vải Bambi Mio Ban Đêm (6-8h) Cho Bé 3-16kg', 'Bambi Mio', 'bim4.jpg', 526000, NULL, NULL, '2022-03-08 07:03:22', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(74, 'Tã Vải Bambimio Ban Đêm Cho Bé 13 -24kg (6-8h)', 'Bambimio', 'bim5.jpg', 759000, 'BỈM VẢI BAMBI MIO- BẢO BỐI KHÔNG THỂ THIẾU TRONG\r\nMÙA ĐÔNG CHO BÉ YÊU CỦA MẸ. \r\n?‍?‍?‍?Nhiều mẹ bỉm sữa rất muốn mua bỉm vải dùng cho bé vì AN TOÀN VÀ TIẾT KIỆM nhưng mẹ lại LO LẮNG về vấn đề là mặc bỉm vải thì có mặc thêm quần ngoài ĐƯỢC KHÔNG?\r\n?Mẹ không phải LO LẮNG về VẤN ĐỀ NÀY mẹ nhé, vì bỉm vải Bambi Mio thiết kế nhỏ, gọn, trên mỗi bỉm có các hàng nút điều chỉnh size phù hợp với vòng mông và đùi của bé nên mẹ cho ? bé mặc quần thoải mái luôn ạ!\r\n?Đặc biệt bề mặt tiếp xúc với mông bé là vải suede cloth công nghệ cao giúp khô nhanh sau 30 giây nên mông và vùng kín của bé luôn luôn khô thoáng và chống hăm mẹ nhé! \r\n?Chất liệu vải 100% Cotton cao cấp, tự nhiên, mềm mại giúp cho bé luôn cảm thấy ấm áp trong mùa đông và loại bỏ hiện tượng hăm mông 100%. \r\n?Thời gian thay bỉm cho bé: Loại ban ngày 2-4 tiếng, loại ban đêm 6-8 tiếng các mẹ nhé! \r\n?‍?‍?‍?99% CÁC MẸ đều HÀI LÒNG SAU KHI CHO BÉ DÙNG! \r\nMẸ ĐÃ CÓ BỈM VẢI CHO BÉ CHO MÙA ĐÔNG SẮP ĐẾN CHƯA?\r\n➡️ĐẶT HÀNG TẠI LINK DƯỚI ĐỂ ĐƯỢC ƯU ĐÃI THÊM \r\n⇰ http://bambimio.com/t1a/coupon/thuan.bambi/\r\n☎️GỌI ĐIỆN ĐẶT HÀNG : 0938 608 140 / 0963 956 885\r\n-----------------------------------------------\r\nCAM KẾT KHI MUA HÀNG:\r\nHàng Việt Nam Chất Lượng Cao. \r\nMua 3 tã miễn phí ship.\r\nGiao hàng nhanh tận nhà, 2-4 ngày nhận được hàng \r\nĐược kiểm tra hàng trước khi thanh toán. \r\nĐược đổi trả hàng miễn phí do lỗi của nhà sản xuất.', NULL, '2022-03-08 07:07:15', 1, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(75, 'Tã Vải Bambi Mio Ngày Đêm Cho Bé 3-16kg (2-4 Tiếng)', 'Bambi Mio', 'bim6.jpg', NULL, NULL, NULL, '2022-03-08 07:07:15', 1, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(76, 'Bỉm Quần Bobby M60 Siêu Thấm (6-10kg)', 'Bobby M60', 'bim7.jpg', 458000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(77, 'Bỉm Bobby S24 Siêu Thấm (4 -8kg)', 'Bobby S24', 'bim8.jpg', 752000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(78, 'Bỉm Quần Huggies Size XL Cho Bé 12-17kg', 'Huggies Size XL', 'bim9.jpg', 526000, NULL, NULL, '2022-03-08 07:10:52', 2, NULL, 34, 23, NULL, NULL, 0, NULL),
(79, 'Bỉm Bobby M48 Siêu Thấm (6-10kg)', 'Bobby M48', 'bim10.jpg', 356000, NULL, NULL, '2022-03-08 07:10:52', 2, NULL, 34, 23, NULL, NULL, 0, NULL),
(80, 'Bỉm Quần Huggies Size M Cho Bé 5-10kg', 'Huggies Size M', 'bim11.jpg', 452000, NULL, NULL, '2022-03-08 07:10:52', 2, NULL, 34, 23, NULL, NULL, 0, NULL),
(81, 'Bỉm Dán Bobby XL62 Siêu Mỏng (12-17kg)', 'Bobby XL62', 'bim12.jpg', 453000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(82, 'Tã Quần Huggies Size XXL Cho Bé 15-25 Kg', 'Huggies Size', 'bim13.jpg', 125000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(83, 'Bỉm Quần Merries Pants M33 Cho Bé 6 – 11kg', 'Merries Pants M33', 'bim14.jpg', 252000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(84, 'Tã Bỉm Moony Natural Bông Organic Nội Địa Nhật, Tã dán', 'Moony Natural', 'bim15.jpg', 756000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(85, 'Bỉm Youli Nội Địa Trung Quốc', 'Youli ', 'bim16.jpg', 296000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(86, 'Bỉm Yubest Angel Nội Địa Trung Quốc', 'Yubest Angel', 'bim17.jpg', 635000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(87, 'Tã Quần Huggies Size S Cho Bé 4-8kg', 'Huggies Size S', 'bim18.jpg', 452000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(88, 'Tã Vải Bambimio Ban Ngày (2-4h) Cho Bé 3-16kg', 'Merries Pants M33', 'bim19.jpg', 252000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(89, 'Tã Quần Merries Size XXL Cho Bé 15 – 28kg', 'Merries Size XXL', 'bim20.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 23, NULL, NULL, 0, NULL),
(90, 'Nhiệt Ẩm Kế Nhật Tanita TT513 Đo Nhiệt Độ, Độ Ẩm', 'Tanita TT513', 'dodungbe1.jpg', 753000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(91, 'Enamel Pro Varnish Vecni-flour Hỗ Trợ ngừa Sâu Răng Cho Bé, Đỏ', 'Enamel Pro Varnish Vecni-flour ', 'dodungbe2.jpg		', 458000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(92, 'Xịt Chống Sâu Răng Hamikea Nhật Bản Cho Bé Từ 18 Tháng, Dâu', 'Huggies Size S', 'dodungbe3.jpg', 523000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(93, 'Bể Bơi Phao Thành Cao Trong Suốt Doctor Dolphin Cho Bé', 'Merries Pants M33', 'dodungbe4.jpg		', 453000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(94, 'Máy Xông Tinh Dầu Đuổi Muỗi Chính Hãng Của Nhật Bản', '', 'dodungbe5.jpg', 487000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(95, 'Núm Ti Nuk Nature Sense Silicones Cổ Rộng Của Đức, L, Núm Ti S2', 'Nuk Nature Sense Silicones', 'dodungbe6.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(96, 'Cốc Hút Và Hứng Sữa Silicone Dolphin', 'Silicone Dolphin', 'dodungbe7.jpg			', 456000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(97, 'Nước Muối Sinh Lý Physiodose Gilbert Pháp Cho Bé', 'Physiodose Gilbert', 'dodungbe8.jpg		', 632000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(98, 'Núm Bình Comotomo Siêu Mềm Cao Cấp Nhập Khẩu Từ Mỹ, 1 tia	', 'Comotomo ', 'dodungbe9.jpg		', 528000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(99, 'Tông Đơ Cắt Tóc Codol CHC-531 Hàn Quốc Chính Hãng\r\n', 'Codol ', 'dodungbe10.jpg		', 369000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(100, 'Tông Đơ Cắt Tóc Cho Bé Codos CHC 536 (dùng Sạc)', 'Codos', 'dodungbe11.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(101, 'Quấn Chũn, Nhộng Chũn Cocoon Chính Hãng, Nhộng size M (6-8 kg)', 'Silicone Dolphin', 'dodungbe12.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(102, 'Nhiệt Ẩm Kế Điện Tử Beurer HM16 Chính Hãng Của Đức', 'Beurer', 'dodungbe13.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(103, 'Hộp 2 Lọ Tinh Dầu Đuổi Muỗi Nhật Bản	', 'Comotomo', 'dodungbe14.jpg		', 528000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(104, 'Tông Đơ Cắt Tóc Chuyên Nghiệp Kato G10 Nhật Bản', 'Codol', 'dodungbe15.jpg		', 369000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(105, 'Cốc Hứng Sữa Silicone Mama\'s Choice Cho Mẹ', 'Silicone Mama\'s Choice', 'dodungbe16.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(106, 'Núm Ti Bình Sữa Moyuum Nội Địa Hàn Quốc, Size 3, 2 núm/vỉ', 'Moyuum', 'dodungbe17.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(107, 'Lăn Chống Muỗi Muhi 50ml Nhật Bản Hình Chim Cánh Cụt, 50ml', 'Beurer', 'dodungbe18.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(108, 'Kem Đánh Răng Nuốt Được Cho Bé Lion Của Nhật, Dâu', 'Lion', 'dodungbe19.jpg		', 528000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(109, 'Xe Đẩy 1 Chiều 2 Tư Thế Seebaby QQ2 Cho Bé, Xanh ngọc', 'Seebaby', 'dodungbe20.jpg		', 369000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 29, NULL, NULL, 0, NULL),
(110, 'Bình Sữa NuK PP Mickey Núm Ti Silicone S2 Cho Bé', 'NuK PP Mickey', 'binhsua1.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 24, NULL, NULL, 0, NULL),
(111, 'Bình Sữa Pigeon Nội Địa Nhật Cổ Rộng, 160ml', 'Pigeon', 'binhsua2.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 24, NULL, NULL, 0, NULL),
(112, 'Bình Sữa PPSU Hàn Quốc Mother K Cao Cấp, Kem, 180ml', 'Beurer', 'binhsua3.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 24, NULL, NULL, 0, NULL),
(113, 'Cốc Hứng Sữa Rảnh Tay Breast Pump Silicon BPA Free', 'Lion', 'binhsua4.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 24, NULL, NULL, 0, NULL),
(114, 'Bộ 2 Ti Giả Nuk Silicone Genius Nhập Khẩu Đức', 'Silicone', 'binhsua5.jpg	', 369000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 24, NULL, NULL, 0, NULL),
(115, 'Bộ 2 Ty Giả Cao Su Nuk Classic Cho Trẻ Em Của Đức, S2 6-18 tháng', 'Nuk Classic', 'binhsua6.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', 1, NULL, 34, 24, NULL, NULL, 0, NULL),
(116, 'Bình Sữa Thủy Tinh Nuk Nature Sense Cổ Rộng Núm Ti S1-M, Xanh, 240ml', 'Nuk Nature Sense', 'binhsua7.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(117, 'Bình Sữa Nuk Cổ Rộng Núm Silicone Siêu Mềm S1-M NU66132 150ml', 'Silicone', 'binhsua8.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(118, 'Bộ Ống Hút Thay Thế Cho Bé Ibyeol Friends Chính Hãng Hàn Quốc', 'Ibyeol', 'binhsua9.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(119, 'Núm Ty Cho Bé Ibyeol Friends Juju 5 Giai Đoạn Chính Hãng Hàn Quốc', 'Ibyeol Friends Juju', 'binhsua10.jpg	', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(120, 'Bình Ống Hút Tập Uống Ibyeol Friends PPSU Hàn Quốc, 200ml , Hồng', 'Ibyeol Friends PPSU', 'binhsua11.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(121, 'Bình Tập Uống Sữa Cho Bé Nuk PP Disney Của Đức', 'Nuk PP Disney', 'binhsua12.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(122, 'Bình Tập Uống Sữa Cho Bé Nuk PP Mickey Của Đức, Đỏ', 'Nuk PP Mickey', 'binhsua13.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(123, 'Bộ 2 Núm Ti Giả Chỉnh Nha Nuk Silicone Disney Sleeptime', 'Nuk Silicone Disney Sleeptime', 'binhsua14.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(124, 'Bộ 2 Ti Giả Nuk Silicone Mickey Sleeptime Cho Bé', 'Nuk Silicone Mickey Sleeptime', 'binhsua15.jpg	', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(125, 'Bộ 2 Ti Giả Nuk Cao Su Disney Sleeptime Cho Bé, S1: 0-6 tháng', 'Ibyeol Friends PPSU', 'binhsua16.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(126, 'Bộ 2 Núm Ti Nuk S2 Cao Su Dẹt Chỉnh Nha Của Đức, S', 'Nuk PP Disney', 'binhsua17.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(127, 'Núm Ti Nuk Cổ Rộng Số 2 Dành Cho Trẻ 6-18 Tháng, S', 'Nuk PP Mickey', 'binhsua18.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(128, 'Bộ 2 Núm Ti Nuk S1 Cao Su Dẹt Chỉnh Nha Nhập Khẩu Đức, L', 'Nuk S1', 'binhsua19.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(129, 'Nước Rửa Bình Sữa Và Rau Củ Combi 300 ML', 'Combi', 'binhsua20.jpg	', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 24, NULL, NULL, 0, NULL),
(130, 'Kẹo Gummy Healthy Care Omega3 250 Viên', 'Gummy Healthy Care Omega3', 'dinhduongbe1.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(131, 'Kẹo Dẻo Bổ Sung DHA Nature\'s Way Kids Smart Omega 3 High DHA, 180 viên', 'DHA Nature\'s Way Kids Smart Omega', 'dinhduongbe2.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(132, 'Kẹo Dẻo Lil Critter Gummie Vite Cho Trẻ Từ 2 - 4 Tuổi, 300 viên', 'Lil Critter Gummie Vite', 'dinhduongbe3.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(133, 'Nước Cốt Hầm Xương Hiroshi Nội Địa Nhật Bản, 1kg', 'Hiroshi', 'dinhduongbe4.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(134, 'Kẹo Vita Gummies Nature Way Bổ Sung Canxi + Vitamin D 60 Viên', 'Vita Gummies Nature Way', 'dinhduongbe5.jpg', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(135, 'Cốm Tăng Cân Bạch Mai Công Nghệ Bio Organic Cho Bé', 'Organic', 'dinhduongbe6.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(136, 'Kẹo Mama Ramune Bổ Sung Vitamin Cho Bé Của Nhật', 'Ramune', 'dinhduongbe7.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(137, 'Ngũ Cốc Sấy Khô Calbee Nhật Bản', 'Calbee', 'dinhduongbe8.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(138, 'Kẹo Dẻo Nature\'s Way Kids Smart Omega3 DHA Trio, 120 viên', 'Nature\'s Way Kids Smart Omega3', 'dinhduongbe9.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(139, 'Kẹo Hỗ Trợ Bổ Sung DHA Cho Bé Unimat Riken Của Nhật Bản', 'Unimat Riken', 'dinhduongbe10.jpg', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(140, 'Hạt Nêm Youki Nhật Bản 500g', 'Youki', 'dinhduongbe11.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(141, 'Kẹo Bổ Sung Sắt Và Vitamin C Nature’s Way Cho Bé', 'Vitamin C Nature’s Way', 'dinhduongbe12.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(142, 'Hồng Sâm Baby Hươu Cao Cổ Gold Kids', 'Gold Kids', 'dinhduongbe13.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(143, 'Kẹo Dẻo Cho Trẻ Bổ Sung Vitamin Focus Factor Kids Của Mỹ, 150 viên', 'Vitamin Focus Factor Kids', 'dinhduongbe14.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(144, 'Trà Hoa Quả Wakodo Nhật Bản', 'Wakodo', 'dinhduongbe15.jpg', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(145, 'Nước Tương Hữu Cơ Cho Bé Bebefood Hàn Quốc, Dùng cho Salad', 'Bebefood', 'dinhduongbe16.jpg', 126000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(146, 'Dầu Mè Ăn Dặm Cho Bé Bebefood Chính Hãng Hàn Quốc', 'Bebefood', 'dinhduongbe17.jpg', 456000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(147, 'Sữa Chua Khô Hữu Cơ Ăn Dặm Cho Bé Bebefood Hàn Quốc', 'Bebefood', 'dinhduongbe18.jpg', 632000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(148, 'Sữa Bột Tươi Nguyên Kem Oceania Gold', 'Oceania Gold', 'dinhduongbe19.jpg', 528000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL),
(149, 'Nước Hồng Sâm Hươu Cao Cổ Kanghwa Hàn Quốc Cho Trẻ Em\r\n', 'Kanghwa', 'dinhduongbe20.jpg', 369000, NULL, NULL, '2022-03-08 07:10:52', NULL, NULL, 34, 28, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `default_lang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `default_lang`) VALUES
(1, 'vietnam'),
(2, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `ID_slideshow` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(145) DEFAULT NULL,
  `hinh` varchar(145) DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `url` varchar(245) DEFAULT NULL,
  `tieude_EN` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`ID_slideshow`, `tieude`, `hinh`, `visible`, `sapxep`, `url`, `tieude_EN`) VALUES
(5, 'Slideshow 1', 'liveshow2_990_350_1.png', 1, 1, NULL, NULL),
(7, 'Slideshow 3', 'liveshow3_990_350_1.png', 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `ID_thanhvien` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(145) DEFAULT NULL,
  `diachi` varchar(245) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `dienthoai` varchar(45) DEFAULT NULL,
  `ngaydangky` datetime DEFAULT NULL,
  `username` varchar(145) DEFAULT NULL,
  `password` varchar(245) DEFAULT NULL,
  `accesslevel` tinyint(3) UNSIGNED DEFAULT 2,
  `active` tinyint(3) UNSIGNED DEFAULT 0,
  `randomkey` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`ID_thanhvien`, `hoten`, `diachi`, `email`, `dienthoai`, `ngaydangky`, `username`, `password`, `accesslevel`, `active`, `randomkey`) VALUES
(2, 'thien dep trai', 'nhà bên sông nhàaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'vuhongthien18@gmail.com', '987654321', NULL, 'vuhongthien19', 'vht111111', 2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `thongtin`
--

CREATE TABLE `thongtin` (
  `ID_thongtin` int(10) UNSIGNED NOT NULL,
  `tencongty` varchar(245) DEFAULT NULL,
  `logo` varchar(145) DEFAULT NULL,
  `diachi` varchar(245) DEFAULT NULL,
  `dienthoai` varchar(45) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `hotline` varchar(45) DEFAULT NULL,
  `tukhoa` text DEFAULT NULL,
  `motawebsite` text DEFAULT NULL,
  `tencongty_EN` varchar(145) DEFAULT NULL,
  `diachi_EN` varchar(255) DEFAULT NULL,
  `banner` varchar(145) DEFAULT NULL,
  `email1` varchar(145) DEFAULT NULL,
  `website1` varchar(245) DEFAULT NULL,
  `website2` varchar(245) DEFAULT NULL,
  `google` varchar(245) DEFAULT NULL,
  `facebook` varchar(245) DEFAULT NULL,
  `blog` varchar(245) DEFAULT NULL,
  `zopim` text DEFAULT NULL,
  `nganluong` varchar(245) DEFAULT NULL,
  `taikhoan` longtext DEFAULT NULL,
  `phivanchuyen` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongtin`
--

INSERT INTO `thongtin` (`ID_thongtin`, `tencongty`, `logo`, `diachi`, `dienthoai`, `email`, `hotline`, `tukhoa`, `motawebsite`, `tencongty_EN`, `diachi_EN`, `banner`, `email1`, `website1`, `website2`, `google`, `facebook`, `blog`, `zopim`, `nganluong`, `taikhoan`, `phivanchuyen`) VALUES
(1, '123muanhanh.vn', 'logo_123muanhanh11.png', '127/4/22 BÃ¬nh Lá»£i, PhÆ°á»ng 13, Quáº­n BÃ¬nh Tháº¡nh, TP.HCM', '0909 600990 - 0909  890889', 'info@123muanhanh.vn', '0945 861 290', 'giaÌ reÌ‰, khuyÃªÌn maÌƒi, mua nhanh', 'giaÌ reÌ‰, khuyÃªÌn maÌƒi, mua nhanh', 'Balloon 24 Ltd. Co', '266/10/25 Le Trong Tan, Tay Thanh Ward, Tan Phu, Ho Chi Minh City', '', 'tuvan@123muanhanh.vn', '123muanhanh.vn', NULL, 'https://www.google.com/+NguyenPhatTai', 'https://www.facebook.com/hocwebgiare', 'http://weblanhnghe.blogspot.com/', '<script type=\"text/javascript\">\r\nwindow.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=\r\nd.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.\r\n_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute(\'charset\',\'utf-8\');\r\n$.src=\'//v2.zopim.com/?2Ox1RcjKogMeQSsSUtdFhWrCtgAcP3JN\';z.t=+new Date;$.\r\ntype=\'text/javascript\';e.parentNode.insertBefore($,e)})(document,\'script\');\r\n</script>', 'nptai@yahoo.com', '\r\n<p>ChÃºc má»«ng Báº¡n Ä‘Ã£ Ä‘áº·t hÃ ng thÃ nh cÃ´ng, báº¡n hÃ£y chuyá»ƒn (hoáº·c ná»™p) tiá»n vÃ o tÃ i khoáº£n:</p>\r\n<p>\r\n	<table style=\"width: 100%; background-color: rgb(224, 255, 255); margin-top: 10px; margin-bottom: 10px; border: 1px solid black; border-collapse: collapse;\" cellspacing=\"10\">\r\n		<tbody>\r\n			<tr>\r\n				<td style=\"border: 1px solid black; padding-left: 10px; padding-top: 10px; letter-spacing: 0px; word-spacing: 0px; padding-bottom: 10px;\"><span roman=\"\" new=\"\" times=\"\">TÃªn tÃ i khoáº£n: <span style=\"font-weight: bold; color: rgb(255, 0, 0); font-family: Tahoma;\">NGUYá»„N PHÃT TÃ€I</span><br />\r\n						</span>Sá»‘ tÃ i khoáº£n: <span style=\"color: rgb(255, 0, 0); font-weight: bold; font-size: 12pt; font-family: \'Times New Roman\';\">4214946500142052</span><br />\r\n					NgÃ¢n hÃ ng: <span style=\"color: rgb(255, 0, 0); font-weight: bold;\">ACB - Chi NhÃ¡nh SÃ i GÃ²n - TP.HCM<br />\r\n						</span><br />\r\n					Hoáº·c<br />\r\n					<br />\r\n					TÃªn tÃ i khoáº£n: <span style=\"font-weight: bold; color: rgb(255, 0, 0);\">NGUYá»„N PHÃT TÃ€I</span><br />\r\n					Sá»‘ tÃ i khoáº£n: <span style=\"font-weight: bold; color: rgb(255, 0, 0);\">0107680667</span><br />\r\n					NgÃ¢n hÃ ng: <span style=\"font-weight: bold; color: rgb(255, 0, 0);\">Dong A - Chi NhÃ¡nh PhÃº Nhuáº­n - TP.HCM</span></td>\r\n			</tr>\r\n		</tbody>\r\n	</table></p>\r\n<div>\r\n	<table style=\"width: 100%; background-color: rgb(255, 255, 224); border: 1px solid black; border-collapse: collapse;\">\r\n		<tbody>\r\n			<tr>\r\n				<td style=\"border: 1px solid black; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; letter-spacing: 0px; word-spacing: 0px;\">\r\n					<div><span style=\"font-weight: bold; color: rgb(255, 0, 0);\">Trong pháº§n ná»™i dung chuyá»ƒn (ná»™p) tiá»n, báº¡n ghi rÃµ:</span><br />\r\n						Há» tÃªn - Sá»‘ Ä‘iá»‡n thoáº¡i - Email<br />\r\n						<span style=\"font-weight: bold; color: rgb(255, 0, 0);\">VÃ­ dá»¥:</span> Nguyá»…n VÄƒn A - ÄT: 0903 246357 - nguyenphana@gmail.com</div></td>\r\n			</tr>\r\n		</tbody>\r\n	</table></div>\r\n<div><br />\r\n	</div>\r\n<div>\r\n	<div style=\"text-align: justify;\">Khi Ä‘Ã£ hoÃ n táº¥t viá»‡c chuyá»ƒn (hoáº·c ná»™p) tiá»n theo hÆ°á»›ng dáº«n trÃªn, báº¡n vui lÃ²ng thÃ´ng bÃ¡o báº±ng cÃ¡ch gá»i Ä‘iá»‡n thoáº¡i Ä‘áº¿n sá»‘:<span style=\"font-weight: bold;\"> 0945 861 290</span> hoáº·c gá»­i email Ä‘áº¿n Ä‘á»‹a chá»‰ <span style=\"font-weight: bold;\">nguyenphattai@gmail.com</span></div></div>\r\n<p style=\"text-align: justify;\">ChÃºng tÃ´i sáº½ kiá»ƒm tra thÃ´ng tin theo thÃ´ng bÃ¡o cá»§a báº¡n, sau Ä‘Ã³ sáº½ chuyá»ƒn hÃ ng cho Báº¡n theo thÃ´ng tin Ä‘Äƒng kÃ½</p>   ', 'Äang cáº­p nháº­t thÃ´ng tin phÃ­ váº­n chuyá»ƒn');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinlienhe`
--

CREATE TABLE `thongtinlienhe` (
  `ID_thongtinlienhe` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(145) DEFAULT NULL,
  `noidungthongtin` longtext DEFAULT NULL,
  `tieude_EN` varchar(145) DEFAULT NULL,
  `noidungthongtin_EN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongtinlienhe`
--

INSERT INTO `thongtinlienhe` (`ID_thongtinlienhe`, `tieude`, `noidungthongtin`, `tieude_EN`, `noidungthongtin_EN`) VALUES
(1, 'ThÃ´ng tin liÃªn há»‡', '\r\n<div style=\"text-align: center;\">\r\n	<h1><span style=\"font-size: small; font-family: Tahoma;\"><span style=\"font-size: 10pt;\">123muanhanh.vn<br />\r\n				</span></span><span style=\"font-family: Tahoma; font-size: small; font-weight: normal;\">Äá»‹a chá»‰:127/4/22 BÃ¬nh Lá»£i, PhÆ°á»ng 13, Quáº­n BÃ¬nh Tháº¡nh, TP.HCM<br />\r\n			</span><span style=\"font-family: Tahoma; font-size: small; font-weight: normal;\">Äiá»‡n thoáº¡i: 0909 600990 - 0909 890889<br />\r\n			</span><span style=\"font-family: Tahoma; font-size: small; font-weight: normal;\">Email:</span><a href=\"mailto:info@123muanhanh.vn\" style=\"font-family: Tahoma; font-size: small; font-weight: normal;\">info@123muanhanh.vn</a><br />\r\n		<span style=\"font-family: Tahoma; font-size: small; font-weight: normal;\">Website:</span><span style=\"font-family: Tahoma; font-size: small; font-weight: normal;\"><a href=\"http://123muanhanh.vn/\" target=\"_blank\">123muanhanh.vn</a></span></h1></div>     ', NULL, '\r\n<div style=\"text-align: center;\"><span style=\"font-family: Tahoma; font-weight: bold;\">Balloon Co., Ltd. 24</span></div>\r\n<div style=\"text-align: center;\"><span style=\"font-family: Tahoma;\">Address: 266/10/25 Le Trong Tan, Tay Thanh Ward, Tan Phu, Ho Chi Minh City</span></div>\r\n<div style=\"text-align: center;\"><span style=\"font-family: Tahoma;\">Tel: 090974401 -0,933,774,401 - 0,838,162,122</span></div>\r\n<div style=\"text-align: center;\"><span style=\"font-family: Tahoma;\">Email: bongbong24h@yahoo.com</span></div>');

-- --------------------------------------------------------

--
-- Table structure for table `thuvienhinhsanpham`
--

CREATE TABLE `thuvienhinhsanpham` (
  `ID_thuvienhinhsanpham` int(10) UNSIGNED NOT NULL,
  `tenhinh` varchar(145) DEFAULT NULL,
  `hinh` varchar(145) DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL,
  `sapxep` int(10) UNSIGNED DEFAULT NULL,
  `ID_sanpham` int(10) UNSIGNED DEFAULT NULL,
  `tenhinh_EN` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `ID_tintuc` int(10) UNSIGNED NOT NULL,
  `tieudetin` varchar(245) DEFAULT NULL,
  `hinhtrichdan` varchar(145) DEFAULT NULL,
  `trichdantin` text DEFAULT NULL,
  `noidungtin` longtext DEFAULT NULL,
  `ngaydangtin` datetime DEFAULT NULL,
  `kiemduyet` tinyint(3) UNSIGNED DEFAULT NULL,
  `tieudetin_EN` varchar(245) DEFAULT NULL,
  `trichdantin_EN` text DEFAULT NULL,
  `noidungtin_EN` longtext DEFAULT NULL,
  `ID_danhmuctin` int(10) UNSIGNED DEFAULT NULL,
  `solanxem` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tuyendung`
--

CREATE TABLE `tuyendung` (
  `ID_tuyendung` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(245) DEFAULT NULL,
  `noidung` longtext DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  `visible` tinyint(3) UNSIGNED DEFAULT NULL,
  `tieude_EN` varchar(245) DEFAULT NULL,
  `noidung_EN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuyendung`
--

INSERT INTO `tuyendung` (`ID_tuyendung`, `tieude`, `noidung`, `ngaycapnhat`, `visible`, `tieude_EN`, `noidung_EN`) VALUES
(1, 'Tuyá»ƒn dá»¥ng', 'Äang cáº­p nháº­t thÃ´ng tin tuyá»ƒn dá»¥ng ', '2014-04-21 00:38:13', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chamsockhachhang`
--
ALTER TABLE `chamsockhachhang`
  ADD PRIMARY KEY (`ID_chamsockhachhang`) USING BTREE;

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID_chitietdonhang`) USING BTREE,
  ADD KEY `FK_chitietdonhang_1` (`ID_donhang`),
  ADD KEY `FK_chitietdonhang_2` (`ID_thanhvien`),
  ADD KEY `FK_chitietdonhang_3` (`ID_sanpham`);

--
-- Indexes for table `danhmuc1`
--
ALTER TABLE `danhmuc1`
  ADD PRIMARY KEY (`ID_danhmuc1`);

--
-- Indexes for table `danhmuc2`
--
ALTER TABLE `danhmuc2`
  ADD PRIMARY KEY (`ID_danhmuc2`),
  ADD KEY `FK_danhmuc2_1` (`ID_danhmuc1`);

--
-- Indexes for table `danhmuctin`
--
ALTER TABLE `danhmuctin`
  ADD PRIMARY KEY (`ID_danhmuctin`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID_donhang`) USING BTREE,
  ADD KEY `FK_donhang_1` (`ID_phuongthuc`),
  ADD KEY `FK_donhang_2` (`ID_thanhvien`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`ID_gioithieu`);

--
-- Indexes for table `hotroonline`
--
ALTER TABLE `hotroonline`
  ADD PRIMARY KEY (`ID_hotro`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`ID_lienhe`);

--
-- Indexes for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`ID_phuongthuc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID_sanpham`),
  ADD KEY `FK_sanpham_1` (`ID_danhmuc1`),
  ADD KEY `FK_sanpham_2` (`ID_danhmuc2`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`ID_slideshow`) USING BTREE;

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`ID_thanhvien`);

--
-- Indexes for table `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`ID_thongtin`);

--
-- Indexes for table `thongtinlienhe`
--
ALTER TABLE `thongtinlienhe`
  ADD PRIMARY KEY (`ID_thongtinlienhe`);

--
-- Indexes for table `thuvienhinhsanpham`
--
ALTER TABLE `thuvienhinhsanpham`
  ADD PRIMARY KEY (`ID_thuvienhinhsanpham`),
  ADD KEY `FK_thuvienhinhsanpham_1` (`ID_sanpham`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID_tintuc`),
  ADD KEY `FK_tintuc_1` (`ID_danhmuctin`);

--
-- Indexes for table `tuyendung`
--
ALTER TABLE `tuyendung`
  ADD PRIMARY KEY (`ID_tuyendung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chamsockhachhang`
--
ALTER TABLE `chamsockhachhang`
  MODIFY `ID_chamsockhachhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID_chitietdonhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `danhmuc1`
--
ALTER TABLE `danhmuc1`
  MODIFY `ID_danhmuc1` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `danhmuc2`
--
ALTER TABLE `danhmuc2`
  MODIFY `ID_danhmuc2` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `danhmuctin`
--
ALTER TABLE `danhmuctin`
  MODIFY `ID_danhmuctin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID_donhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `ID_gioithieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotroonline`
--
ALTER TABLE `hotroonline`
  MODIFY `ID_hotro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `ID_lienhe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `ID_phuongthuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID_sanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `ID_slideshow` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `ID_thanhvien` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `ID_thongtin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thongtinlienhe`
--
ALTER TABLE `thongtinlienhe`
  MODIFY `ID_thongtinlienhe` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thuvienhinhsanpham`
--
ALTER TABLE `thuvienhinhsanpham`
  MODIFY `ID_thuvienhinhsanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID_tintuc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tuyendung`
--
ALTER TABLE `tuyendung`
  MODIFY `ID_tuyendung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
