-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2022 lúc 03:31 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `x_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_phone` varchar(11) NOT NULL,
  `bill_email` varchar(50) NOT NULL,
  `bill_pttt` varchar(255) NOT NULL COMMENT '1.Thanh toán trực tiếp  2.Chuyển khoản     3.Thanh toán online',
  `ngaydathang` date NOT NULL DEFAULT current_timestamp(),
  `tonghang` int(20) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang xử lý\r\n2.Đang giao hang·\r\n3.Đã giao hàng',
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_kh`, `bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `ngaydathang`, `tonghang`, `bill_status`, `receive_name`, `receive_address`, `receive_phone`) VALUES
(1, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', '0', '2022-10-15', 69000000, 3, '', '', ''),
(2, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', '0', '2022-10-15', 0, 2, '', '', ''),
(3, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', '0', '2022-10-15', 0, 3, '', '', ''),
(4, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', '0', '2022-10-15', 22500000, 0, '', '', ''),
(5, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán online', '2022-10-15', 12000000, 0, '', '', ''),
(6, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán trực tiếp', '2022-10-16', 46500000, 0, '', '', ''),
(7, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán trực tiếp', '2022-10-16', 13231231, 0, '', '', ''),
(8, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán trực tiếp', '2022-10-16', 0, 0, '', '', ''),
(9, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Chuyển khoản ngân hàng', '2022-10-16', 24120000, 0, '', '', ''),
(10, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Chuyển khoản ngân hàng', '2022-10-16', 0, 0, '', '', ''),
(11, 0, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Chuyển khoản ngân hàng', '2022-10-16', 0, 0, '', '', ''),
(12, 0, '123', '1231', '123', '123', 'Chuyển khoản ngân hàng', '2022-10-16', 12000000, 0, '', '', ''),
(13, 0, '123', '1231', '123', '123', 'Chuyển khoản ngân hàng', '2022-10-16', 12000000, 0, '', '', ''),
(14, 1, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán trực tiếp', '2022-10-16', 58500000, 0, '', '', ''),
(15, 1, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán trực tiếp', '2022-10-16', 12000000, 0, '', '', ''),
(16, 1, 'nts', 'Hà nội', '012893493', 'syntph25892@fpt.edu.vn', 'Thanh toán trực tiếp', '2022-10-17', 12000000, 0, '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `id_kh`, `id_hh`, `ngay_bl`) VALUES
(1, 'đắt', 1, 3, '2022-10-13'),
(2, 'sản phẩm rất tốt', 1, 2, '2022-10-13'),
(3, '', 1, 3, '2022-10-13'),
(4, 'sdgsdgs', 1, 6, '2022-10-13'),
(5, 'dgjdgjdg', 1, 3, '2022-10-13'),
(6, 'abcsuidhs', 2, 2, '2022-10-13'),
(7, 'ẻqwerq', 1, 2, '2022-10-13'),
(8, '12313', 1, 3, '2022-10-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` int(20) NOT NULL,
  `so_luong` int(3) NOT NULL,
  `thanh_tien` int(20) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_kh`, `id_hh`, `hinh`, `ten_hh`, `don_gia`, `so_luong`, `thanh_tien`, `id_bill`) VALUES
(1, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 1),
(2, 1, 4, 'sanpham21.jpeg', 'chuột không dây', 12000000, 1, 12000000, 1),
(3, 1, 2, 'sanpham27.jpg', 'msi gf 63', 22500000, 1, 22500000, 1),
(4, 1, 2, 'sanpham27.jpg', 'msi gf 63', 22500000, 1, 22500000, 1),
(5, 1, 2, 'sanpham27.jpg', 'msi gf 63', 22500000, 1, 22500000, 4),
(6, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 5),
(7, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 6),
(8, 1, 2, 'sanpham27.jpg', 'msi gf 63', 22500000, 1, 22500000, 6),
(9, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 6),
(10, 1, 10, 'bongda.jpg', 'vcvcvc', 1231231, 1, 1231231, 7),
(11, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 7),
(12, 1, 4, 'sanpham21.jpeg', 'chuột không dây', 12000000, 1, 12000000, 9),
(13, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 9),
(14, 1, 6, 'sanpham18.jpeg', 'chuột không dây', 120000, 1, 120000, 9),
(17, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 14),
(18, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 14),
(19, 1, 2, 'sanpham27.jpg', 'msi gf 63', 22500000, 1, 22500000, 14),
(20, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 14),
(21, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 15),
(22, 1, 3, 'sanpham2.jpeg', 'samsung', 12000000, 1, 12000000, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) DEFAULT 0.00,
  `hinh` varchar(255) NOT NULL,
  `ngay_nhap` date DEFAULT current_timestamp(),
  `id_loai` int(11) NOT NULL,
  `dac_biet` tinyint(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `id_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`) VALUES
(1, 'iphone 14 promax', 49000000.00, 0.00, 'sanpham7.jpg', '2022-09-29', 1, 0, 3, 'iphone'),
(2, 'msi gf 63', 22500000.00, 0.00, 'sanpham27.jpg', NULL, 4, 1, 10, 'laptop'),
(3, 'samsung', 12000000.00, 0.00, 'sanpham2.jpeg', NULL, 1, 1, 11, '123'),
(4, 'chuột không dây', 12000000.00, 0.00, 'sanpham21.jpeg', NULL, 3, 1, 7, '123'),
(5, 'bàn phím cơ', 1000000.00, 0.00, 'sanpham43.jpg', NULL, 4, 1, 4, 'không'),
(6, 'chuột không dây', 120000.00, 0.00, 'sanpham18.jpeg', NULL, 3, 1, 0, 'jjjj'),
(10, 'Tai nghe không dây', 1231231.00, 0.00, 'sanpham38.jpeg', '2022-10-06', 2, 1, 0, 'Không có mô  tả cho mặt hàng này'),
(11, 'abc', 123.00, 0.00, 'sanpham24.jpg', '2022-10-06', 2, 1, 0, '123'),
(12, 'vcvcvc', 1231231.00, 0.00, 'ukca.jpg', '2022-10-06', 2, 1, 0, '1111'),
(13, 'vcvcvc123', 1231231.00, 0.00, 'anhtintuc3.jpg', '2022-10-06', 2, 1, 0, '1111'),
(14, 'Iphone 14 promax', 23000000.00, 0.00, 'sanpham5.jpg', '2022-10-08', 1, 1, 0, 'khong'),
(15, 'Asus Tuf Gaming', 23000000.00, 0.00, 'sanpham10.jpg', '2022-10-17', 11, 1, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `vai_tro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ho_ten`, `mat_khau`, `email`, `hinh`, `address`, `phone`, `vai_tro`) VALUES
(1, 'nts', '123456', 'syntph25892@fpt.edu.vn', 'bongda.jpg', 'Hà nội', '012893493', 'Quản trị'),
(2, 'Đỗ Văn Nam', '123', 'abc@gmail.com', 'ukca.jpg', 'Đà nẵng', '0321239162', 'Người dùng'),
(3, 'Nguyễn Trọng Sỹ', '123456', 'synt1403@gmail.com', 'anhmacdinh.jpg', 'Tây nguyên', '02141251', 'Người dùng'),
(4, 'Lê Thị', '123456', 'xyz@gmail.com', 'anhtintuc1.jpg', 'TP HCM', '037825687', 'Người dùng'),
(5, 'Đỗ Văn Nam', '1231231', 'sy032003@yahoo.com', 'bongda.jpg', 'Đồng Nai', '0321239162', 'Người dùng'),
(6, 'Nguyễn Trọng Sỹ', '123456', 'synt1403@gmail.com', 'logorog.png', 'Hà nội', '02141251', 'Người dùng'),
(7, 'Không tên', '123456', 'abcxcz@gmail.com', 'anhmacdinh.jpg', 'Hà nội', '0321239162', 'Người dùng'),
(9, 'Không tên', '123456', '123abc@gmail.com', 'anhmacdinh.jpg', '', '', 'Người dùng'),
(10, 'abc', '123', 'synt1403@gmail.com', 'anhmacdinh.jpg', '', '', 'Người dùng'),
(12, 'abc', '123', 'synt1403n@gmail.com', 'anhmacdinh.jpg', '', '', 'Người dùng'),
(13, 'qưe', '123', 'akmgka@adng.com', 'anhmacdinh.jpg', '', '', 'Người dùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id`, `ten_loai`) VALUES
(1, 'Điện thoại'),
(2, 'Tai nghe'),
(3, 'Chuột máy tính'),
(4, 'Bàn phím'),
(10, 'Phụ kiện'),
(11, 'Laptop'),
(14, 'Máy tính'),
(16, 'mnvdjvn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kh` (`id_kh`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_hh` (`id_hh`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `hang_hoa` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `hang_hoa` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_kh`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
