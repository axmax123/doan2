-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2020 lúc 10:39 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thietbii`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `full_name`) VALUES
(3, 'admin@gmail.com', '1234567', 'acb zyz');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL,
  `masanpham` int(11) NOT NULL,
  `tensanpham` varchar(1000) NOT NULL,
  `giasanpham` int(11) NOT NULL,
  `soluongsanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `madonhang`, `masanpham`, `tensanpham`, `giasanpham`, `soluongsanpham`) VALUES
(1, 2, 2, 'TOKIBOKI', 12000, 2),
(2, 3, 3, 'Trà sữa trân châu đường đen', 12000, 2),
(3, 5, 3, 'Điện thoại iPhone 11 Pro Max 64GB', 135960000, 4),
(4, 5, 1, 'Điện thoại Samsung Galaxy A51 (8GB/128GB)', 7790000, 1),
(5, 5, 7, 'Điện thoại iPhone 7 Plus 32GB', 9490000, 1),
(6, 6, 1, 'Điện thoại Samsung Galaxy A51 (8GB/128GB)', 23370000, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `tenkhachhang`, `sodienthoai`, `email`) VALUES
(6, 'A', 11285, 'axmax129@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `tenloaisanpham` varchar(200) NOT NULL,
  `hinhanhloaisanpham` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `tenloaisanpham`, `hinhanhloaisanpham`) VALUES
(1, 'Điện thoại', 'https://www.freeiconspng.com/uploads/mobile-phone-cell-icon-25.png'),
(2, 'Laptop ', 'https://www.freeiconspng.com/uploads/laptop-png-5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `giasanpham` int(15) NOT NULL,
  `hinhanhsanpham` varchar(200) NOT NULL,
  `motasanpham` varchar(10000) NOT NULL,
  `idsanpham` int(3) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `giasanpham`, `hinhanhsanpham`, `motasanpham`, `idsanpham`, `updated_at`, `created_at`) VALUES
(1, 'Điện thoại Samsung Galaxy A51 (8GB/128GB)', 7790000, 'https://mamarijuana.com/wp-content/uploads/2016/12/info444444.jpg', 'Mặt trước của Galaxy A51 8GB nổi bật với màn hình tràn viền vô cực Infinity-O kế thừa từ series S, Note cao cấp.', 1, '2020-08-29', '0000-00-00'),
(2, 'Điện thoại OPPO Reno3', 849000777, 'https://specials-images.forbesimg.com/imageserve/5ddb4391d39f77000643731e/960x0.jpg?fit=scale', 'Xu thế nhiều camera đang \"nở rộ\" và trên \"đứa con cưng của mình\" thì OPPO đã mang tới cho người dùng cụm 4 camera chất lượng ở mặt sau máy.', 1, '2020-07-23', '0000-00-00'),
(3, 'Điện thoại iPhone 11 Pro Max 64GB', 33990000, 'https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-black-400x460.png', 'Chắc chắn lý do lớn nhất mà bạn muốn nâng cấp lên iPhone 11 Pro Max chính là cụm camera mới được Apple nâng cấp rất nhiều.', 1, '0000-00-00', '0000-00-00'),
(4, 'Đặc điểm nổi bật của iPhone 11 64GB', 19490000, 'https://cdn.tgdd.vn/Products/Images/42/153856/TimerThumb/iphone-11-(18).jpg', 'Sau bao nhiêu chờ đợi cũng như đồn đoán thì cuối cùng Apple đã chính thức giới thiệu bộ 3 siêu phẩm iPhone 11 mạnh mẽ nhất của mình vào tháng 9/2019. Có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như chiếc iPhone Xr năm ngoái, đó chính là phiên bản iPhone 11 64GB.', 1, '0000-00-00', '0000-00-00'),
(5, 'Điện thoại iPhone 11 Pro Max 512GB\r\n\r\n', 39990000, 'https://cdn.tgdd.vn/Products/Images/42/210654/iphone-11-pro-max-512gb-gold-400x460.png', 'Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple.', 1, '0000-00-00', '0000-00-00'),
(6, 'Điện thoại iPhone SE 128GB (2020)\r\n', 14490000, 'https://cdn.tgdd.vn/Products/Images/42/222629/iphone-se-128gb-2020-261720-101730-400x460.png', 'Sau bao ngày chờ đợi, iPhone SE 2020 cuối cùng đã được ra mắt làm thỏa mãn triệu tín đồ Táo khuyết. Sở hữu thiết kế siêu nhỏ gọn như iPhone 8, chip A13 Bionic cho hiệu năng khủng như iPhone 11, nhưng iPhone SE 2020 lại có một mức giá tốt đến bất ngờ.', 1, '0000-00-00', '0000-00-00'),
(7, 'Điện thoại iPhone 7 Plus 32GB', 9490000, 'https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus-gold-400x460-400x460.png', 'Mặc dù giữ nguyên vẻ bề ngoài so với dòng điện thoại iPhone đời trước, bù lại iPhone 7 Plus 32GB lại được trang bị nhiều nâng cấp đáng giá như camera kép đầu tiên cũng như cấu hình mạnh mẽ.', 1, '0000-00-00', '0000-00-00'),
(8, 'Điện thoại Samsung Galaxy A21s (6GB/64GB)', 5690000, 'https://cdn.tgdd.vn/Products/Images/42/219314/samsung-galaxy-a21s-055620-045627-400x460.png', 'Samsung Galaxy A21s là chiếc điện thoại tầm trung mới của Samsung, mang trong mình có thiết kế màn hình nốt ruồi thời thượng, cùng cụm 4 camera sau độ phân giải lên đến 48 MP hỗ trợ nhiều tính năng chụp ảnh hấp dẫn.', 1, '0000-00-00', '0000-00-00'),
(9, 'Điện thoại Samsung Galaxy S20 Ultra', 21990000, 'https://cdn.tgdd.vn/Products/Images/42/217937/samsung-galaxy-s20-ultra-400x460-1-400x460.png', 'Samsung Galaxy S20 Ultra siêu phẩm công nghệ hàng đầu của Samsung mới ra mắt với nhiều đột phá công nghệ, màn hình tràn viền không khuyết điểm, hiệu năng đỉnh cao, camera độ phân giải siêu khủng 108 MP cùng khả năng zoom 100X thách thức mọi giới hạn smartphone.', 1, '0000-00-00', '0000-00-00'),
(10, 'Laptop HP 15s fq0004TU N5000/4GB/512GB/Win10 (1A0D5PA)\r\n\r\n', 8890000, 'https://cdn.tgdd.vn/Products/Images/44/224010/hp-15s-fq0004tu-n5000-1a0d5pa-224010-600x600.jpg', 'Laptop HP 15s fq0004TU (1A0D5PA) có cấu hình vừa đủ cho nhu cầu làm việc văn phòng và học tập, thuộc phân khúc tầm trung phù hợp với các bạn sinh viên và nhân viên văn phòng.', 2, '0000-00-00', '0000-00-00'),
(11, 'Laptop HP 15s fq1105TU i5 1035G1/8GB/512GB/Win10 (193P7PA)\r\n', 16490000, 'https://cdn.tgdd.vn/Products/Images/44/223682/hp-15s-fq1105tu-i5-193p7pa-17-600x600.jpg', 'Laptop HP 15s fq1105TU i5 (193P7PA) là chiếc máy tính xách tay lí tưởng dành cho học sinh sinh viên hay dân văn phòng. Máy có vi xử lí gen 10 mạnh mẽ, ổ cứng SSD cực nhanh cùng với thiết kế gọn nhẹ, cơ động để có thể đồng hành cùng bạn mọi lúc mọi nơi.', 2, '0000-00-00', '0000-00-00'),
(12, 'Laptop Acer Nitro AN515 43 R9FD R5 3550H/8GB/512GB/4GB GTX1650/Win10 (NH.Q6ZSV.003)\r\n', 19490000, 'https://cdn.tgdd.vn/Products/Images/44/221409/acer-nitro-an515-43-r5-nhq6zsv003-600x600.jpg', 'Laptop Acer Nitro AN515 (NH.Q6ZSV.003) phiên bản 2019 là mẫu laptop gaming tầm trung có thiết kế hầm hố, cấu hình mạnh, đồ họa mượt mà với card màn hình Geforce GTX 1650. Đây là chiếc laptop không chỉ phù hợp cho chơi game mà còn làm việc, thiết kế đồ họa tốt. ', 2, '0000-00-00', '0000-00-00'),
(13, 'Laptop Acer Nitro 5 AN515 55 58A7 i5 10300H 8GB/512GB/4GB GTX1650/Win10 (NH.Q7RSV.002)', 23290000, 'https://cdn.tgdd.vn/Products/Images/44/223539/acer-nitro-5-an515-55-58a7-i5-nhq7rsv002-223539-600x600.jpg', 'Laptop Acer Nitro 5 AN515 55 58A7 i5 (NH.Q7RSV.002) là phiên bản mới của dòng Nitro 5, gây ấn tượng bởi diện mạo hoàn toàn mới cùng hiệu năng mạnh mẽ với vi xử lí thế hệ mới, thỏa sức chiến game.', 2, '0000-00-00', '0000-00-00'),
(14, 'Laptop Asus Gaming ROG Strix G531G i7 9750H/8GB/512GB/4GB GTX1650/Win10 (AL017T)\r\n', 27990000, 'https://cdn.tgdd.vn/Products/Images/44/204388/asus-gaming-rog-strix-g531g-i7-9750h-8gb-512gb-gtx-6-600x600.jpg', 'Laptop ASUS ROG Strix G G531GT-AL017T là một trong những hiện thân của phong cách tối giản, điểm nhấn được tạo nên chỉ bởi các dải đèn và đèn nền bàn phím RGB trầm tĩnh và cực chất. Chiếc laptop này tập trung tối đa vào trải nghiệm của game thủ, mang trong mình những công nghệ tiên tiến nhất ở đầu thế kỷ 21.', 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'ad@gmail.com', '2020-07-01 06:44:37', '12345', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
