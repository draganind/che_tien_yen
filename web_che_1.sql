-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 06:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_che`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'vietanh', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) UNSIGNED NOT NULL,
  `title_category_post` varchar(200) NOT NULL,
  `desc_category_post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`) VALUES
(7, 'Ahihi', 'uhuhu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `title_category_product` varchar(100) NOT NULL,
  `desc_category_product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category_product`, `title_category_product`, `desc_category_product`) VALUES
(23, 'Chè Tân Cương thượng hạng', ''),
(24, 'Chè Tân Cương đặc biệt', ''),
(25, 'Chè Tân Cương đặc sản', ''),
(27, 'Chè Tân Cương tước thiệt', ''),
(28, 'Tân Cương Phúc Vân Tiên', ''),
(29, 'Chè Tân Cương sắc xuân', ''),
(30, 'Trà túi lọc đặc biệt', ''),
(31, 'Trà Ô Long', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_password`, `customer_address`) VALUES
(1, 'Nguyễn Văn A', '65645645645', 'nguyenvana@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Hà nội '),
(2, 'Nguyễn Văn B', '0981794116', 'nguyenvanBictu@gmail.com', 'b3ccbda5083270bdb2a68c70098db7e6', 'Thái Nguyên');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`) VALUES
(1, '2161', '2/9/2023 11:35:38am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sodienthoai` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `noidung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_quantity`, `name`, `sodienthoai`, `email`, `diachi`, `noidung`) VALUES
(1, '6118', 61, 9, 'dasdas', '0254234536', 'dsadas@gmail.com', '645654645', 'fdfsfsdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `content_post` text NOT NULL,
  `image_post` varchar(200) NOT NULL,
  `id_category_post` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_category_post`) VALUES
(15, 'Chè Phú Lương, Thái Nguyên', '<p>V&ugrave;ng trồng ch&egrave; ở huyện Ph&uacute; Lương, tỉnh Th&aacute;i Nguy&ecirc;n r&ocirc;ng 4300 ha, sản lượng đạt đến 44.000 tấn mỗi năm...</p>\r\n', 'phuluong1636807555.jpg', 7),
(16, 'Cử nhân bỏ phố về quê ướp trà', '<p>L&ecirc; Sơn Hải trồng ch&egrave; theo c&aacute;ch truyền thống ở x&atilde; Quyết Thắng, th&agrave;nh phố Th&aacute;i Nguy&ecirc;n với kh&aacute;t vọng x&acirc;y dựng nh&atilde;n tr&agrave; hữu cơ.</p>\r\n', 'uoptra1636807717.jpg', 7),
(17, 'Quy trình sản xuất chè Thái Nguyên', '<p>T&acirc;n Cương l&agrave; v&ugrave;ng ch&egrave; theo phương ph&aacute;p canh t&aacute;c v&agrave; sản xuất an to&agrave;n, bền vững với n&ocirc;ng nghiệp ở Th&aacute;i Nguy&ecirc;n.</p>\r\n', 'tải xuống1636807831.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `title_product` varchar(255) NOT NULL,
  `price_product` varchar(100) NOT NULL,
  `desc_product` text NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `image_product` varchar(100) NOT NULL,
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `product_hot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `desc_product`, `quantity_product`, `image_product`, `id_category_product`, `product_hot`) VALUES
(48, 'TRÀ Ô LONG LỘC PHÁT', '400000', '<p>Trọng lượng: 1 kg</p>\r\n\r\n<p>- C&ocirc;ng dụng: Pha chế tr&agrave; sữa, tr&agrave; tr&aacute;i c&acirc;y, tr&agrave; uống hằng ng&agrave;y</p>\r\n\r\n<p>- Bảo quản: Nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh nắng - Th&agrave;nh phần: Tr&agrave; &ocirc; long - Nguồn gốc: Việt Nam</p>\r\n', 100, 'a29595a095b5bad5367c9f66c88575d61636802809.jpg', 31, 1),
(49, 'Trà Ô Long Sữa đặc biệt 250g', '250000', '<p>Tr&agrave; &Ocirc; Long sữa đặc biệt (Jin Xuan Milk Oolong) l&agrave; một loại tr&agrave; mang đến cảm gi&aacute;c dịu ngọt, hương thơm sữa h&ograve;a quyện với c&aacute;c sắc th&aacute;i thực vật tương tự như tr&agrave; xanh.</p>\r\n', 50, 'Tra-Olong-sua-dac-biet1636802732.png', 31, 1),
(50, '6 chai trà ô long Tea Plus 350ml', '29000', '<p>Với hương vị ngọt nhẹ thanh m&aacute;t, m&ugrave;i thơm đặc trưng của tr&agrave; &ocirc; long c&ugrave;ng hoạt chất OTTP gi&uacute;p hạn chế hấp thu chất ch&eacute;o. Tr&agrave; &ocirc; long Tea + gi&uacute;p l&agrave;m lắng nhẹ những cơn ưu tư mang đến cảm gi&aacute;c nhẹ nh&agrave;ng. Thưởng thức ngay mỗi ng&agrave;y để cuộc sống th&ecirc;m nhẹ. Cam kết sản phẩm chất lượng v&agrave; an to&agrave;n</p>\r\n', 100, '6-chai-tra-o-long-tea-plus-350ml-2021032903564060421636802654.jpg', 31, 0),
(51, 'Chè Tân Cương Lộc xuân 100g', '30000', '<p>Ch&egrave; T&acirc;n Cương Lộc xu&acirc;n 100g l&agrave; sản phẩm tr&agrave; T&acirc;n Cương, Th&aacute;i Nguy&ecirc;n đ&oacute;ng t&uacute;i nhỏ, th&iacute;ch hợp sử dụng h&agrave;ng ng&agrave;y, ch&egrave; đi lễ, gi&aacute; hợp l&yacute;, chất lượng ổn. Một trong những sản phẩm b&aacute;n chạy tr&ecirc;n hệ thống đại l&yacute;, si&ecirc;u thị của ch&egrave; Minh Cường</p>\r\n', 50, '11636802561.png', 29, 0),
(52, 'Sắc Ngọc Trà Xuân Tân Cương', '600000', '<p>100% Ch&egrave; b&uacute;p tự nhi&ecirc;n được tuyển chọn 1 t&ocirc;m 2 l&aacute; v&agrave; được c&aacute;c nghệ nh&acirc;n chế biến bằng phương ph&aacute;p truyền thống giữ nguy&ecirc;n hương vị tự nhi&ecirc;n của v&ugrave;ng ch&egrave; đặc sản T&acirc;n Cương Th&aacute;i Nguy&ecirc;n</p>\r\n', 100, '89361738304841636802470.jpg', 29, 1),
(53, 'TRÀ KIM TIÊN TÂN CƯƠNG THÁI NGUYÊN', '350000', '<p><strong>H&igrave;nh thức:</strong>&nbsp;Bao b&igrave;, đ&oacute;ng t&uacute;i theo y&ecirc;u cầu của kh&aacute;ch h&agrave;ng</p>\r\n\r\n<p><strong>Chất lượng:</strong>&nbsp;C&aacute;nh to, nước tr&agrave; đậm c&oacute; m&agrave;u xanh</p>\r\n\r\n<p><strong>Bảo quản:</strong>&nbsp;Để nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp</p>\r\n', 50, 'tra-kim-tien1636802369.jpg', 28, 0),
(54, 'TRÀ PHÚC VÂN TIÊN TÂN CƯƠNG THÁI NGUYÊN', '320000', '<p><strong>Trọng lượng:</strong>&nbsp;1KG</p>\r\n\r\n<p><strong>Nh&atilde;n hiệu:</strong>&nbsp;Tr&agrave; Vạn Ph&uacute;c</p>\r\n\r\n<p><strong>Xuất sứ:</strong>&nbsp;T&acirc;n Cương/Th&aacute;i Nguy&ecirc;n</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;Ch&egrave; ph&uacute;c v&acirc;n ti&ecirc;n b&uacute;p giang kh&ocirc;</p>\r\n', 50, 'tra-phuc-van-tien-icon-300x3001636802290.png', 28, 1),
(55, 'Chè Phúc Vân Tiên Hương Vị Đặc Biệt', '500000', '<p><strong>Ch&egrave; Ph&uacute;c V&acirc;n Ti&ecirc;n</strong>&nbsp;l&agrave; giống ch&egrave; v&ocirc; t&iacute;nh của Trung Quốc được chọn lọc từ tổ hợp lai hữu t&iacute;nh giữa mẹ l&agrave; giống ch&egrave; Ph&uacute;c Đỉnh Đại Bạch Tr&agrave; v&agrave; bố l&agrave; giống ch&egrave; V&acirc;n Nam l&aacute; to</p>\r\n', 50, 'che-phuc-van-tien-720-min1636802223.jpg', 28, 1),
(56, 'Chè Tân Cương Tước Thiệt 500gram', '300000', '<h2>Ch&egrave; T&acirc;n Cương Tước Thiệt 500gram : Ch&egrave; th&aacute;i nguy&ecirc;n nguy&ecirc;n liệu được trồng v&agrave; chăm s&oacute;c theo ti&ecirc;u chuẩn VietGAP với quy tr&igrave;nh trồng ch&egrave; hữu cơ tại v&ugrave;ng ch&egrave; đặc sản T&acirc;n Cương Th&aacute;i Nguy&ecirc;n.</h2>\r\n', 50, 'TCX0091636802126.jpg', 27, 0),
(57, 'Chè Tân Cương Tước Thiệt 100g - Chè Thái Nguyên Ngon', '60000', '<ol>\r\n	<li>Sản phẩm ch&egrave; t&acirc;n cương tước thiệt 100% sao chế thủ c&ocirc;ng truyền thống với c&aacute;ch đ&aacute;nh hương bằng lấy lửa tự nhi&ecirc;n . Sản phẩm ch&egrave; t&acirc;n cương Tước Thiệt kh&ocirc;ng chỉ thơm ngon , mẫu m&atilde; đẹp m&agrave; qu&yacute; kh&aacute;ch c&oacute; thể sử dụng l&agrave;m qu&agrave; biếu v&agrave; kh&aacute;ch h&agrave;ng cao cấp</li>\r\n</ol>\r\n', 100, 'tra-tan-cuong-thai-nguyen-tuoc-thiet-11636802054.jpg', 27, 1),
(58, 'Hộp Trà Tân Cương Tước Thiệt 500Gram', '300000', '<p>r&aacute;ng ấm pha tr&agrave; bằng nước s&ocirc;i</p>\r\n\r\n<p>-Cho khoảng 5 gam đến 7 gam tr&agrave; v&agrave;o ấm;</p>\r\n\r\n<p>-Chế nước s&ocirc;i v&agrave;o để l&agrave;m n&oacute;ng ấm v&agrave; đ&aacute;nh thức tr&agrave;, chắt hết nước trong ấm tr&agrave; bỏ đi;</p>\r\n\r\n<p>-Chế lượng nước s&ocirc;i vừa đủ- khoảng 150 ml- 250 ml t&ugrave;y theo sở trường đậm, nhạt;</p>\r\n\r\n<p>-H&atilde;m khoảng 5 ph&uacute;t;</p>\r\n\r\n<p>-R&oacute;t ra ch&eacute;n rồi thưởng thức..</p>\r\n', 100, 'tra-tan-cuong-tuoc-thiet-500g-11636801964.jpg', 27, 1),
(59, 'Hộp Chè Tân Cương Đặc Sản 100g', '36000', '<p>D&ograve;ng sản phẩm tr&agrave; đặc sản t&acirc;n cương được trồng thu h&aacute;i theo ti&ecirc;u chuẩn trồng tr&agrave; sạch vietgap tr&ecirc;n v&ugrave;ng nguy&ecirc;n liệu của c&ocirc;ng ty T&acirc;n Cương Xanh</p>\r\n', 50, 'hop-tra-dac-san-100g-11636801808.jpg', 25, 0),
(60, 'Trà (Chè) Tân Cương Thái Nguyên Loại Đặc Biệt', '300000', '<p><strong>Ch&egrave;&nbsp;(Tr&agrave;) T&acirc;n Cương Th&aacute;i&nbsp;Nguy&ecirc;n Loại&nbsp;Đặc&nbsp;Biệt&nbsp;</strong>được&nbsp;xếp v&agrave;o&nbsp;những&nbsp;loại&nbsp;tr&agrave; ngon nhất&nbsp;của&nbsp;<strong>C&ocirc;ng ty Ch&egrave;&nbsp;Th&agrave;nh&nbsp;C&ocirc;ng</strong>.</p>\r\n', 100, 'a1636801712.png', 24, 0),
(61, 'Việt Cổ trà đặc biệt - Trà nõn tôm Tân Cương', '750000', '<p>Từng n&otilde;n ch&egrave; được lựa chọn hết sức tỉ mỉ theo quy c&aacute;ch 1 t&ocirc;m 1 l&aacute; tr&ecirc;n c&aacute;c đồi ch&egrave; ngon nhất, sạch nhất của v&ugrave;ng tr&agrave; (ch&egrave;) T&acirc;n Cương Th&aacute;i Nguy&ecirc;n. Tr&agrave; (ch&egrave;) được sao tay bởi c&aacute;c nghệ nh&acirc;n.&nbsp;</p>\r\n', 50, 'vietco1636801614.png', 24, 1),
(62, 'Chè Đinh Tân Cương đặc biệt 200g', '790000', '<p>Sản phẩm Tr&agrave; Đinh T&acirc;n Cương&nbsp;được sản xuất từ nguy&ecirc;n liệu của v&ugrave;ng tr&agrave; t&acirc;n cương th&aacute;i nguy&ecirc;n nổi tiếng. Những b&uacute;p ch&egrave; t&acirc;n cương được h&aacute;i từ l&uacute;c s&aacute;ng sớm khi m&agrave; b&uacute;p tr&agrave; c&ograve;n đang ngậm sương, b&uacute;p ch&egrave; chưa h&eacute; tr&ocirc;ng giống như chiếc đinh n&ecirc;n sản phẩm c&ograve;n được gọi l&agrave; ch&egrave; đinh t&acirc;n cương</p>\r\n', 100, 'tra-dinh-thai-nguyen-101636801382.jpg', 24, 1),
(63, 'Chè Thái loại thượng hạng túi 200g', '96000', '<p>Sản ph&acirc;̉m&nbsp;<strong>Chè T&acirc;n Cương Thượng Hạng TC1- 100gram Hộp Thiếc&nbsp;</strong>là m&ocirc;̣t trong những sản ph&acirc;̉m quà tặng cao c&acirc;́p của C&ocirc;ng ty TNHH T&acirc;n Cương Xanh.</p>\r\n', 50, 'BTN00-2001636801189.jpg', 23, 0),
(64, 'Chè Tân Cương Thượng Hạng TC1- 100gram Hộp Thiếc', '58000', '<p>Sản ph&acirc;̉m&nbsp;<strong>Chè T&acirc;n Cương Thượng Hạng TC1- 100gram Hộp Thiếc&nbsp;</strong>là m&ocirc;̣t trong những sản ph&acirc;̉m quà tặng cao c&acirc;́p của C&ocirc;ng ty TNHH T&acirc;n Cương Xanh.</p>\r\n', 50, 'che-tan-cuong-thuong-hang-hop-thiec-1-800x800 (1)1636801073.jpg', 23, 1),
(65, 'Trà Tân Cương Thượng Hạng 500G', '200000', '<p>Tr&agrave; T&acirc;n Cương Thượng Hạng&nbsp;l&agrave; một loại ch&egrave; nổi tiếng được y&ecirc;u th&iacute;ch bởi chất lượng ch&egrave; tốt, ngon v&agrave; gi&aacute; th&agrave;nh hợp l&yacute;.&nbsp;Tr&agrave; T&acirc;n Cương Thượng Hạng&nbsp;khi được pha, r&oacute;t ra ch&eacute;n ch&egrave; c&oacute; vị thơm ng&aacute;t, m&agrave;u trong xanh &oacute;ng v&agrave;ng, tiền ch&aacute;t ngọt hậu, s&acirc;u lắng trong l&ograve;ng người thưởng thức.</p>\r\n', 100, 'tra_tan_cuong_thuong_hang_-_351636800917.jpg', 23, 0),
(66, 'Trà Tân Cương Thượng Hạng TC1 - 500gram - Tuyệt Phẩm Chè Thái Nguyên', '150000', '<p>Sản phẩm ch&egrave; th&aacute;i nguy&ecirc;n thượng hạng của T&acirc;n Cương Xanh l&agrave; sản phẩm b&aacute;n chạy nhất tr&ecirc;n thị trường bởi tr&agrave; đạt đầy đủ ti&ecirc;u ch&iacute; Hương - Sắc - Vị - Thần . Nước xanh , thơm , uống ngọt hậu s&acirc;u nơi cuống họng</p>\r\n', 50, 'tra-tan-cuong-thuong-hang-500g-11636800831.jpg', 23, 0),
(67, 'Trà thượng hạng - Chè sạch VietGap, hương vị hoàn hảo (1KG)', '1000000', '<p>Tr&agrave; thượng hạng l&agrave; sản phẩm c&oacute; hương vị thanh khiết</p>\r\n', 100, 'tra-thuong-hang-_544ad822de5b480cad643e3bbb6142c1_grande (1)1636798610.crdownload', 23, 1),
(68, 'Chè Tân Cương Thượng Hạng TC1 200gram Hộp Chè Thái Nguyên Vân Gỗ', '250000', '<p>ch&egrave; t&acirc;n cương th&aacute;i nguy&ecirc;n hay c&ograve;n gọi l&agrave; tr&agrave; t&acirc;n cương l&agrave; sản phẩm đặc sản nổi tiếng của tỉnh Th&aacute;i Nguy&ecirc;n . Ch&egrave; t&acirc;n cương c&ograve;n được mệnh danh l&agrave; đệ nhất danh tr&agrave; bởi hương vị thơm ngon</p>\r\n', 50, 'hop-che-tan-cuong-thuong-hang-200g-gia-go (1)1636798431.jpg', 23, 1),
(70, 'Combo 2 Hộp Trà Lipton Ice tea vị đào 14g x 16 gói & 1 bình thủy tinh cao cấp', '63000', '<p>Nổi bật l&agrave; hương đ&agrave;o thanh m&aacute;t kết hợp với mật ong - nguồn nguy&ecirc;n liệu cao cấp, tốt cho sức khỏe. Lipton tr&agrave; h&ograve;a tan c&ocirc;ng thức mới tăng th&ecirc;m 25% hương vị đ&agrave;o, v&agrave; h&agrave;m lượng vitamin C vượt trội. Thật tuyệt vời khi được thưởng thức 1 ly tr&agrave; đ&agrave;o m&aacute;t lạnh, chua ngọt đ&atilde; kh&aacute;t m&agrave; c&ograve;n tốt cho sức khỏe sau những giờ l&agrave;m việc căng thẳng hay trong thời tiết nắng gắt.B&ecirc;n cạnh đ&oacute; khi mua 2 hộp tr&agrave; Lipton Ice Tea c&ugrave;ng vị c&ograve;n được tặng ngay 1 b&igrave;nh thủy tinh cao cấp để l&agrave;m những m&oacute;n uống đ&atilde; kh&aacute;t tại nh&agrave;</p>\r\n', 50, '0006633_combo-2-hop-tra-lipton-ice-teavi-dao-14g-x-16-goi-1-binh-thuy-tinh-cao-cap_5101636798064.png', 30, 1),
(71, 'Trà Lipton Ice tea Vị chanh mật ong 14g x 16 gói', '37000', '', 100, '0006636_tra-lipton-ice-teavi-chanh-mat-ong-14g-x-16-goi_5101636797990.png', 30, 0),
(72, 'Trà sữa Lipton Matcha Latte 17g x 8 gói', '46000', '<p>100% matcha nguy&ecirc;n chất từ Nhật Bản. L&agrave; sự h&ograve;a quyện mịn m&agrave;ng của sữa thơm s&oacute;ng s&aacute;nh &amp; matcha thanh nhẹ. C&oacute; thể uống n&oacute;ng hoặc lạnh</p>\r\n', 100, '0003245_tra-sua-liptonmatcha-latte17g-x-8-goi_5101636797926.jpeg', 30, 0),
(73, 'Trà Lipton Nhãn Vàng 2g x 100 túi', '85000', '<h3>Đậm vị từ l&aacute; tr&agrave; tươi</h3>\r\n', 50, '0004455_tra-lipton-nhan-vang-2g-x-100-tui_5101636797842.jpeg', 30, 0),
(74, 'Trà Lipton Hoa Cúc 1g x 25 Gói', '51000', '<h1>Tr&agrave; hoa c&uacute;c t&uacute;i lọc, sử dụng dễ d&agrave;ng. Tr&agrave; Lipton thảo mộc hoa c&uacute;c mang lại cảm gi&aacute;c thư th&aacute;i, nhẹ nh&agrave;ng. Được l&agrave;m từ những b&ocirc;ng c&uacute;c tự nhi&ecirc;n, kh&ocirc;ng chứa caffeine. Vị ngọt nhẹ, hơi đắng, m&ugrave;i thảo mộc nhẹ nh&agrave;ng, hương vị h&agrave;i ho&agrave;. Ngon hơn khi d&ugrave;ng n&oacute;ng</h1>\r\n', 100, 'tra lipton1636797726.jpeg', 30, 0),
(75, 'Chè Tân Cương Thượng Hạng 500G - Tân Cương Xanh', '400000', '<p>Ch&egrave; t&acirc;n cương thượng hạng được sử dụng nguy&ecirc;n liệu sản xuất l&agrave; c&aacute;c b&uacute;p ch&egrave; t&acirc;n cương 1 t&ocirc;m 2 l&aacute; nguy&ecirc;n liệu tr&ecirc;n diện t&iacute;ch trồng ch&egrave; sạch Vietgap của c&ocirc;ng ty T&acirc;n Cương Xanh</p>\r\n', 100, 'tra-tan-cuong-thuong-hang-500g-11636798280.jpg', 23, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_category_post` (`id_category_post`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category_product` (`id_category_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`id_category_post`) REFERENCES `tbl_category_post` (`id_category_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_category_product`) REFERENCES `tbl_category_product` (`id_category_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
