-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 06, 2026 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eproject-sem1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `permission` varchar(20) NOT NULL,
  `user_name` varchar(90) NOT NULL,
  `password` varchar(200) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `permission`, `user_name`, `password`, `updated_at`, `created_at`) VALUES
(9999, 'Owner', 'tinvu11', '$2y$10$K4rkMRiIBdlmsU9ervOBn.X64c3AMAKv5bi33wXMr0Ih3ewxCsXce', '2026-03-04 10:06:37', '2026-03-04 10:06:37'),
(111, 'Nhân viên quét dọn', 'QuynhAnCut', '$2y$10$ClrX3He6Os7W3/EsSqId9OrfFo2Qjw3cTlF8y9IdBG3Sg0hKHHnzu', '2026-03-04 11:27:13', '2026-03-04 11:26:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(90) NOT NULL,
  `cat_price` float DEFAULT NULL,
  `cat_image` varchar(200) DEFAULT NULL,
  `cat_description` varchar(90) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_combo`
--

CREATE TABLE `tbl_combo` (
  `id` int(11) NOT NULL,
  `combo_img` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_combo`
--

INSERT INTO `tbl_combo` (`id`, `combo_img`, `description`, `price`, `status`) VALUES
(2, '1772266552_1991065385_amazing-forest-sunset.jpg', 'combo-weekend special', 20, 'Expired');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_delivery`
--

CREATE TABLE `tbl_delivery` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `phone_numbers` int(11) DEFAULT NULL,
  `store_name` varchar(90) DEFAULT NULL,
  `customer_address` varchar(200) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `order_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `user_id`, `content`, `updated_at`, `created_at`) VALUES
(1, 490, 'hi', '2026-03-04 15:09:02', '2026-03-04 15:09:02'),
(2, 490, 'hello', '2026-03-04 15:09:10', '2026-03-04 15:09:10'),
(6, 503, 'Ngạc nhiên chưa', '2026-03-06 12:36:19', '2026-03-06 12:36:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `img_description` varchar(200) DEFAULT NULL
) ENGINE=Aria DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `img`, `img_description`) VALUES
(7, '1594865330_1706490104_avatar.jpeg', NULL),
(8, '1594868913_896437039_2.jpg', 'perfect pizza'),
(9, '1772195353_528831258_amazing-forest-sunset.jpg', NULL),
(10, '1772195392_221661473_kitten-3840x2160-adorable-minimalist-cute-charming-26370.jpg', 'hello hihi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_details` int(11) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `prd_name` varchar(500) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `prd_img` varchar(200) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `dish_name` varchar(90) NOT NULL,
  `price` float DEFAULT NULL,
  `sold` float DEFAULT NULL,
  `inventory` double NOT NULL,
  `customer_reviews` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `menu`, `prd_img`, `cat_id`, `dish_name`, `price`, `sold`, `inventory`, `customer_reviews`) VALUES
(17, 'pizza', '1589551868_1739024570_V1.png', 1, 'PIZZA 4 CHEESE', 8, 200, 100, 'Taste like chicken'),
(18, 'pizza', '1589552222_1195760323_V2.png', 1, 'CHEESY BITES TRIO SHRIMP', 9, NULL, 100, 'Best with beer'),
(19, 'pizza', '1589552320_203753091_V3.png', 1, 'SEAFOOD DELUXE', 9, NULL, 100, 'Almost perfect'),
(20, 'preminum', '1589552380_1468727117_V4.png', 1, 'SUPER SUPREME', 10, NULL, 100, 'Nothing to complain'),
(21, 'pizza', '1589552475_318866219_V5.png', 1, 'SEAFOOD PESTO', 8, NULL, 100, 'Like the first love in rainy day'),
(22, 'preminum', '1589552559_662166398_V6.png', 1, 'SUPREME', 11, NULL, 100, 'Clumsy love'),
(23, 'pizza', '1589552656_208777355_V7.png', 1, 'OCEAN DELIGHT', 12, NULL, 100, 'Bring ocean to your mouth'),
(24, 'pizza', '1589552723_562593966_V11.png', 2, 'SUPREME MEAT LOVER\'S', 14, NULL, 100, 'First kiss from crystal maiden'),
(25, 'pizza', '1589552872_508925465_H9.jpg', 2, 'CHICKEN SUPREME', 14, NULL, 100, 'More protein than beef 11 time'),
(28, 'pizza', '1589553220_150326650_v13.png', 1, 'CHEESE LOVER’S', 10, NULL, 100, 'Cheese lover\'s for cheese lover\'s'),
(27, 'preminum', '1589553135_1185640104_v12.png', 2, 'HAWAIIAN PARADISE', 14, NULL, 100, 'Never trust commercial?? You have to think again!!!'),
(29, 'garlic breads', '1589553458_420032847_1.jpg', 3, 'Double-Garlic & Herb Bread', 7, NULL, 100, 'Good for health'),
(30, 'garlic breads', '1589553708_1008758410_2.jpg', 3, 'Roasted Garlic Cheesy Bread', 5, NULL, 100, 'Bake your own bread or chop up a store-bought loaf for this tasty cheese'),
(31, 'garlic breads', '1589553748_1966478009_3.jpg', 3, 'Asiago Herb Hoagie Rolls', 6, NULL, 100, 'Imagine the smell in your kitchen when these babies are in the oven. Yes please!'),
(32, 'garlic breads', '1589553838_1885190516_4.jpg', 3, '. Caprese Garlic Bread', 6, NULL, 100, 'Here’s a two-ingredient addition that transforms your garlic bread tenfold'),
(33, 'garlic breads', '1589554008_278258767_5.jpg', 3, 'Garlic Cheddar Swirl Brioche Rolls', 8, NULL, 100, 'Try this unique way to eat bread'),
(34, 'garlic breads', '1589554292_172188745_6.jpg', 3, 'Roasted Garlic, Sun-Dried Tomato + Basil Filled Pane Bianco:', 7, NULL, 100, 'Perfect'),
(35, 'garlic breads', '1589554333_832547195_8.jpg', 3, 'Garlic + Cheddar Bay Biscuits', 11, NULL, 100, 'The cheese and bread become one… so good'),
(36, 'garlic breads', '1589555194_748199081_9.jpg', 3, 'Mushroom + Gruyere Bruschetta', 9, NULL, 100, 'The nutty gruyere, the earthy mushrooms… this duo couldn’t possibly get any better.'),
(37, 'garlic breads', '1589555245_1381287296_10.jpg', 3, 'Garlic Beer Pita Bread', 9, NULL, 100, 'Yup, this pita bread has beer in it — a delicious wheat beer, to be exact'),
(38, 'garlic breads', '1589555287_825810529_12.jpg', 3, 'Cheesy Stuffed Garlic Bread', 8, NULL, 100, 'Party-perfect, and ready to go'),
(39, 'pizza sandwiches', '1589556283_2065470709_1.jpg', 4, 'Philly Cheesesteak', 11, NULL, 100, 'Papa\'s signature dough stuffed with tender steak that melts in your mouth'),
(40, 'pizza sandwiches', '1589556482_1744077887_2.jpg', 4, 'Grilled BBQ Chicken & Bacon', 14, NULL, 100, 'I\'m not gonna lie. You mút try it once'),
(41, 'pizza sandwiches', '1589556536_657717306_3.jpg', 4, 'Meatball & Pepperoni', 12, NULL, 100, 'The ultimate pizza sandwich with spicy pepperoni,'),
(42, 'pizza sandwiches', '1589556606_1444147998_4.jpg', 4, 'Italian', 9, NULL, 100, 'A beautiful combination of Papa\'s own salami, sausage, banana peppers'),
(43, 'pizza sandwiches', '1589556706_1236404346_5.jpg', 4, 'Black Forest Ham', 10, NULL, 100, '11/10'),
(44, 'pizza sandwiches', '1589556803_253955065_6.jpg', 4, 'Tuna', 9, NULL, 100, 'Delicious and cheap such as your ex'),
(45, 'desserts', '1589556958_604188394_1.jpg', 4, 'Keto Berry-Pecan Cheesecake Bars', 5, NULL, 100, 'ese cheesecake bars are an excellent sweet on a low-carb or keto lifestyle.'),
(46, 'desserts', '1589557034_1218181175_2.jpg', 5, 'Epic Rainbow Cake', 7, NULL, 100, 'I\'ve never seen a dessert get so much camera attention!'),
(47, 'desserts', '1589557358_1196311935_3.jpg', 5, 'Doberge Cake', 7, NULL, 100, 'It\'s my husband\'s all-time favorite and has become a birthday tradition.'),
(49, 'desserts', '1589560266_1723204721_5.jpg', 5, 'No-Bake Greek Yogurt Cheesecake', 7, NULL, 100, 'This no-bake Greek yogurt cheesecake is perfect for parties'),
(50, 'desserts', '1589560323_1991646377_6.jpg', 5, 'Double Layer Pumpkin Cheesecake', 9, NULL, 100, 'great alternative to pumpkin pie, especially for those cheesecake fans out there'),
(51, 'desserts', '1589560380_1129603657_7.jpg', 5, 'Sam\'s Famous Carrot Cake', 7, NULL, 100, 'Carrot cake legacy will always live on! Enjoy!'),
(52, 'desserts', '1589560466_1936571661_10.jpg', 5, 'Tiramisu Layer Cake', 5, NULL, 100, 'Fancy taste without all the work.'),
(53, 'desserts', '1589560563_564133495_12.jpg', 5, 'Banana Cake VI', 9, NULL, 100, 'Better Than Sex'),
(55, 'beverages', '1589560749_1744949101_1.jpg', 5, 'Brown coffee', 3, NULL, 100, 'Brown coffee for coffee lover'),
(56, 'beverages', '1589560793_2081334026_2.jpeg', 5, 'Mojito', 4, NULL, 100, 'Cold enough for freezing your mind'),
(57, 'beverages', '1589560853_1304336388_2.jpg', 5, 'Milk shake', 4, NULL, 100, 'Milk with little bit of Mint'),
(58, 'beverages', '1589560923_576496339_3.jpg', 5, 'Saigon\'s coffee', 4, NULL, 100, 'Coffee and a lot of milk'),
(59, 'beverages', '1589560989_219685872_4.jpg', 5, 'Latte', 4, NULL, 100, 'Lightly and warmish for you in cold winter'),
(60, 'beverages', '1589561063_1132581057_5.jpg', 5, 'Black coffee', 3, NULL, 100, 'Bitter, bitter, and bitter more'),
(61, 'beverages', '1772806163_1164299920_f.jpg', 5, 'Espresso', 100, NULL, 100, 'Taste like chicken \"very nice\"');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `feed_back` varchar(200) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `password`, `feed_back`, `phone_number`, `email`, `remember_token`, `updated_at`, `created_at`) VALUES
(488, 'tinvu', '$2y$10$tir5zdiU743uqlUs3BbLw.ftGPdbumRz1Aysib52NF3xGV7MytoLS', '', '0987654321', 'vutin686@gmail.com', NULL, '2026-02-28 10:00:25', '2026-02-27 02:29:42'),
(489, 'tinvu11', '$2y$10$rVT4m0rYCOgSCiDP6vl8LOnHprLA1cXgvY43p2IG3WBhALpDwgJnu', NULL, '1111111111', 'vutin686@gmail.com', NULL, '2026-02-27 03:13:06', '2026-02-27 03:13:06'),
(490, 'tinvu111', '$2y$10$/hlvNaYIxX1csnwKOh63AuzKjMXDJc625hIfk33WVpACApfHPTZFO', 'à', '2222222222', 'vutin686@gmail.com', 'Mo1OFeaKUcASPQV8kKeAIRPaVydwLoryREXwtu4N3Xk8Nz3z5yna7aHNseKz', '2026-03-04 10:46:54', '2026-02-28 08:58:17'),
(503, 'buihuongquynh', '$2y$10$1QYbBl1OmKvidVET9zwcpuLu3jvw4YBbPtxnkJV6ZCdEwEIvl6gSe', NULL, '0166740701', 'buihuongquynh822@gmail.com', 'AAzH1BKYdCCONSAMl5ksmMTSwpeQxyhdLMZhvQMmo5dfEXvtR2KknavDx5Gb', '2026-03-06 12:33:46', '2026-03-06 12:33:46'),
(504, 'buihuongquynh', '$2y$10$4lsy966TJMxNYTWuHKUH3.aHXNSPu7PRbW6kucAHVqSJCDxclKhLK', NULL, '0166740701', 'buihuongquynh822@gmail.com', NULL, '2026-03-06 12:34:05', '2026-03-06 12:34:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_combo`
--
ALTER TABLE `tbl_combo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_combo`
--
ALTER TABLE `tbl_combo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT cho bảng `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
