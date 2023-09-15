-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2023 at 04:27 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phucuong_phucuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `advises`
--

CREATE TABLE `advises` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advises`
--

INSERT INTO `advises` (`id`, `name`, `phone`, `content`, `created_at`, `updated_at`, `address`) VALUES
(23, 'Nguyen Quang Hai', '0359808267', 'a', '2023-09-07 19:38:20', '2023-09-07 19:38:20', 'Thái Nguyên');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `multiImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `status`, `type`, `created_at`, `updated_at`, `multiImage`, `link`) VALUES
(5, 'banner1', 'banners/September2023/tuFhKO5Cv7WLBzt1sqie.png', 'ACTIVE', 'banner', '2023-09-06 18:26:00', '2023-09-06 19:00:05', NULL, NULL),
(6, 'khuyến mãi 1', 'banners/September2023/ppIhf33BP5B7qjrkm5hE.png', 'ACTIVE', 'promotion', '2023-09-06 19:00:00', '2023-09-12 19:52:11', NULL, 'https://demophucuong.kennatech.vn/khuyen-mai'),
(7, 'khuyến mãi 2', 'banners/September2023/jvbFP2rwA5l4eEq31e8x.png', 'ACTIVE', 'promotion', '2023-09-06 19:09:00', '2023-09-12 19:52:19', NULL, 'https://demophucuong.kennatech.vn/khuyen-mai');

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `name` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `id_book`, `name`, `price`, `qty`, `total`, `created_at`, `updated_at`) VALUES
(1, 80, 'Sữa Hallo Baby 1 Infant Formula', 750000, 2, 1500000, '2023-09-07 01:59:41', '2023-09-07 01:59:41'),
(2, 80, 'Sữa Hallo Baby 3 Infant Formula', 710000, 2, 1420000, '2023-09-07 01:59:41', '2023-09-07 01:59:41'),
(3, 85, 'Sữa Hallo Baby 2 Infant Formula', 730000, 1, 730000, '2023-09-07 02:02:50', '2023-09-07 02:02:50'),
(4, 86, 'Sữa Hallo Baby 1 Infant Formula', 750000, 1, 750000, '2023-09-07 02:08:53', '2023-09-07 02:08:53'),
(5, 87, 'Sữa Hallo Baby 1 Infant Formula', 750000, 1, 750000, '2023-09-07 02:09:16', '2023-09-07 02:09:16'),
(6, 88, 'Sữa Hallo Baby 2 Infant Formula', 730000, 2, 1460000, '2023-09-07 02:21:17', '2023-09-07 02:21:17'),
(7, 88, 'Sữa Hallo Baby 3 Infant Formula', 710000, 1, 710000, '2023-09-07 02:21:17', '2023-09-07 02:21:17'),
(8, 90, 'Sữa Hallo Baby 2 Infant Formula', 730000, 1, 730000, '2023-09-07 02:22:57', '2023-09-07 02:22:57'),
(9, 91, 'Sữa Hallo Baby 1 Infant Formula', 750000, 2, 1500000, '2023-09-07 19:22:52', '2023-09-07 19:22:52'),
(10, 92, 'Sữa Hallo Baby 2 Infant Formula', 730000, 4, 2920000, '2023-09-07 19:30:11', '2023-09-07 19:30:11'),
(11, 92, 'Sữa Hallo Baby 3 Infant Formula', 710000, 2, 1420000, '2023-09-07 19:30:11', '2023-09-07 19:30:11'),
(12, 93, 'Sữa Hallo Baby 1 Infant Formula', 750000, 3, 2250000, '2023-09-08 19:44:53', '2023-09-08 19:44:53'),
(13, 94, 'Sữa Hallo Baby 1 Infant Formula', 750000, 2, 1500000, '2023-09-09 00:37:02', '2023-09-09 00:37:02'),
(14, 95, 'Sữa Hallo Baby 2 Infant Formula', 730000, 3, 2190000, '2023-09-09 01:17:33', '2023-09-09 01:17:33'),
(15, 96, 'Sữa Hallo Baby 3 Infant Formula', 710000, 3, 2130000, '2023-09-09 19:15:19', '2023-09-09 19:15:19'),
(16, 97, 'Sữa Hallo Baby 2 Infant Formula', 730000, 2, 1460000, '2023-09-11 02:07:55', '2023-09-11 02:07:55'),
(17, 98, 'Sữa Hallo Baby 2 Infant Formula', 730000, 1, 730000, '2023-09-11 02:38:51', '2023-09-11 02:38:51'),
(18, 99, 'Hallo Baby MAMA', 550000, 1, 550000, '2023-09-14 00:54:26', '2023-09-14 00:54:26'),
(19, 99, 'Sữa Hallo Baby 1 Infant Formula', 699000, 1, 699000, '2023-09-14 00:54:26', '2023-09-14 00:54:26'),
(20, 100, 'Sữa Hallo Baby 3 Infant Formula', 700000, 1, 700000, '2023-09-14 00:55:33', '2023-09-14 00:55:33'),
(21, 101, 'Sữa Hallo Baby 2 Infant Formula', 699000, 1, 699000, '2023-09-14 18:31:29', '2023-09-14 18:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `phone`, `address1`, `services`, `subtotal`, `created_at`, `updated_at`, `content`, `status`) VALUES
(88, 'vanhuy', '0456464356', 'Thái Nguyên', 'Sữa Hallo Baby 2 Infant Formula,  Sữa Hallo Baby 3 Infant Formula,', '2,170,000', '2023-09-07 02:21:17', '2023-09-08 00:09:35', 's', 'huy-don'),
(90, 'vanhuy', '0335147577', 'Thái Nguyên', 'Sữa Hallo Baby 2 Infant Formula,', '730,000', '2023-09-07 02:22:57', '2023-09-07 04:12:55', 'd', 'dang-gui'),
(92, 'Nguyen Quang Hai', '0359808267', 'Thái Nguyên', 'Sữa Hallo Baby 2 Infant Formula,  Sữa Hallo Baby 3 Infant Formula,', '4,340,000', '2023-09-07 19:30:11', '2023-09-07 19:30:11', 'a', 'moi-dat'),
(95, 'Nguyễn Văn Bảo', '092375466', 'THÁI BÌNH', 'Sữa Hallo Baby 2 Infant Formula,', '2,190,000', '2023-09-09 01:17:33', '2023-09-09 01:17:33', 'NGÕ 12', 'moi-dat'),
(99, 'Nguyen Quang Hai', '0359808267', 'Thái Nguyên', 'Hallo Baby MAMA,  Sữa Hallo Baby 1 Infant Formula,', '1,249,000', '2023-09-14 00:54:26', '2023-09-14 00:54:26', 'mua hàng', 'moi-dat'),
(100, 'Nguyen Quang Hai', '0359808267', 'Thái Nguyên', 'Sữa Hallo Baby 3 Infant Formula,', '700,000', '2023-09-14 00:55:33', '2023-09-14 00:55:33', 'a', 'moi-dat'),
(101, 'hh', '02234', '11234', 'Sữa Hallo Baby 2 Infant Formula,', '699,000', '2023-09-14 18:31:29', '2023-09-14 18:31:29', '09', 'moi-dat');

-- --------------------------------------------------------

--
-- Table structure for table `camketsanphams`
--

CREATE TABLE `camketsanphams` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link1` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link4` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link5` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `camketsanphams`
--

INSERT INTO `camketsanphams` (`id`, `title`, `field1`, `field2`, `field3`, `image`, `call_url`, `created_at`, `updated_at`, `link1`, `link2`, `link3`, `link4`, `link5`, `field4`, `field5`, `icon1`, `icon2`, `icon3`, `icon4`, `icon5`) VALUES
(1, 'DƯỠNG CHẤT NỔI BẬT', 'CPP: Giúp trẻ cải thiện chiều cao', 'Lactoferrin: Kháng thể tuyệt vời cho đề kháng khỏe mạnh', 'Chất béo OPO: Tăng hấp thu canxi, giảm táo bón', 'cam-ket-san-pham/September2023/pX2ELXuTPscHrzKlyFAG.png', '/product/arla-baby-me-2-600', '2023-08-30 19:01:00', '2023-09-09 02:34:43', '/posts/mach-me-cach-chon-sua-tang-chieu-cao-cho-be-3-tuoi-phu-hop-nhat', '/posts/sua-cao-nang-luong-cho-be-su-dung-sao-de-hieu-qua', '/posts/mach-me-cach-chon-sua-tang-chieu-cao-cho-be-3-tuoi-phu-hop-nhat', '/posts/dau-la-sua-phat-trien-tri-nao-cho-be-8-tuoi-tot-nhat-tren-thi-truong-hien-nay', '/posts/sua-cao-nang-luong-cho-be-su-dung-sao-de-hieu-qua', 'DHA: Tác động tích cực đến khả năng nhận thức', 'Lợi khuẩn Bifidobacterium: Cải thiện tiêu hóa', 'cam-ket-san-pham/September2023/l05rjN4jBgjRhQB3KbDq.png', 'cam-ket-san-pham/September2023/0ogSSIjHpBUW7FdUZjnk.png', 'cam-ket-san-pham/September2023/XYR27RbygI5UwfwdORJ3.png', 'cam-ket-san-pham/September2023/B1Wo7WRFv8h53UqeCjsV.png', 'cam-ket-san-pham/September2023/rSkaXts1gzYBItSr72kB.png'),
(2, 'CAM KẾT CỦA ARLA', 'Nguồn gốc rõ ràng', 'Cam kết chất lượng', 'Cam kết pháp lý', 'cam-ket-san-pham/August2023/juTk4rFH157ITJPizQlB.png', '/product/arla-baby-me-1-600', '2023-08-30 19:02:00', '2023-09-09 00:00:07', '/about/cam-ket', '/about/gioi-thieu', '/about/ve-chung-toi', NULL, NULL, '', '', 'cam-ket-san-pham/September2023/rDWVvCZIdmjZSIo9mGEi.png', 'cam-ket-san-pham/September2023/1IxeQ82fcsutv7UKfYjY.png', 'cam-ket-san-pham/September2023/xLKOZ31nW7UEam7B62CS.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Tin tức', 'tin-tuc', '2023-06-01 19:44:55', '2023-06-04 18:11:18'),
(3, NULL, 1, 'Thông báo', 'thong-bao', '2023-08-31 02:01:24', '2023-08-31 02:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"width\":\"310\",\"height\":\"206\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '{}', 2),
(46, 6, 'title', 'text', 'Tiêu đề', 1, 1, 1, 1, 1, 1, '{}', 3),
(47, 6, 'excerpt', 'text_area', 'Mô tả', 0, 0, 1, 1, 1, 1, '{}', 4),
(48, 6, 'body', 'rich_text_box', 'Nội dung', 0, 0, 1, 1, 1, 1, '{}', 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 8),
(52, 6, 'status', 'select_dropdown', 'Trạng thái', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 11),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(55, 6, 'image', 'image', 'Hình ảnh', 0, 0, 1, 1, 1, 1, '{}', 13),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'title', 'text', 'Tiêu đề', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'image', 'image', 'Hình ảnh', 0, 1, 1, 1, 1, 1, '{\"quality\":\"100%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"cropped\",\"crop\":{\"width\":\"1920\",\"height\":\"735\"}}]}', 3),
(59, 7, 'status', 'select_dropdown', 'Trạng thái', 0, 1, 1, 1, 1, 1, '{\"default\":\"ACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 5),
(60, 7, 'type', 'select_dropdown', 'Loại banner', 0, 1, 1, 1, 1, 1, '{\"default\":\"banner\",\"options\":{\"promotion\":\"Banner khuy\\u1ebfn m\\u00e3i\",\"banner\":\"Banner ch\\u00ednh\"}}', 6),
(61, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 7),
(62, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(63, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 8, 'title', 'text', 'Tiêu đề', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 2),
(65, 8, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:services,slug\"},\"display\":{\"width\":\"6\"}}', 3),
(66, 8, 'desc', 'text_area', 'Mô tả', 0, 0, 1, 1, 1, 1, '{}', 6),
(67, 8, 'price', 'text', 'Giá sản phẩm', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 4),
(68, 8, 'image', 'image', 'Hình ảnh', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"width\":\"322\",\"height\":\"215\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}],\"display\":{\"width\":\"4\"}}', 7),
(69, 8, 'body', 'rich_text_box', 'Nội dung', 0, 0, 1, 1, 1, 1, '{}', 9),
(70, 8, 'status', 'select_dropdown', 'Trạng thái', 0, 1, 1, 1, 1, 1, '{\"default\":\"ACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"},\"display\":{\"width\":\"4\"}}', 10),
(71, 8, 'type', 'text', 'Type', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 11),
(72, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{\"display\":{\"width\":\"4\"}}', 12),
(73, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(74, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(75, 9, 'name', 'text', 'Họ Tên', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 2),
(76, 9, 'phone', 'text', 'Số điện thoại', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 3),
(82, 9, 'services', 'text_area', 'Sản phẩm', 0, 0, 0, 0, 0, 1, '{}', 10),
(83, 9, 'subtotal', 'text', 'Tổng chi phí', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 11),
(84, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{\"display\":{\"width\":\"4\"}}', 12),
(85, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(86, 9, 'content', 'text_area', 'Ghi chú', 0, 0, 1, 1, 1, 1, '{}', 9),
(89, 7, 'multiImage', 'media_picker', 'Nhiều hình ảnh', 0, 0, 0, 0, 0, 1, '{\"max\":10,\"min\":0,\"expanded\":true,\"show_folders\":true,\"show_toolbar\":true,\"allow_upload\":true,\"allow_move\":true,\"allow_delete\":true,\"allow_create_folder\":true,\"allow_rename\":true,\"allow_crop\":true,\"allowed\":[],\"hide_thumbnails\":false,\"quality\":90,\"watermark\":{\"source\":\"...\",\"position\":\"top-left\",\"x\":0,\"y\":0}}', 9),
(90, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(91, 10, 'name', 'text', 'Họ Tên', 0, 1, 1, 1, 1, 1, '{}', 2),
(92, 10, 'phone', 'text', 'Số điện thoại', 0, 1, 1, 1, 1, 1, '{}', 3),
(95, 10, 'content', 'text', 'Nội Dung', 0, 1, 1, 1, 1, 1, '{}', 5),
(96, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(97, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(98, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(99, 11, 'questions', 'text', 'Câu hỏi thường gặp', 0, 1, 1, 1, 1, 1, '{}', 4),
(100, 11, 'answer', 'text_area', 'Câu trả lời', 0, 0, 1, 1, 1, 1, '{}', 5),
(101, 11, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 7),
(102, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 8),
(103, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(104, 9, 'status', 'select_dropdown', 'Trạng thái', 0, 1, 1, 1, 1, 1, '{\"default\":\"moi-dat\",\"options\":{\"moi-dat\":\"M\\u1edbi \\u0111\\u1eb7t\",\"dang-gui\":\"\\u0110ang g\\u1eedi\",\"da-giao\":\"Ho\\u00e0n th\\u00e0nh\",\"huy-don\":\"H\\u1ee7y \\u0111\\u01a1n\"},\"display\":{\"width\":\"4\"}}', 14),
(105, 9, 'address1', 'text', 'Địa chỉ', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"12\"}}', 4),
(107, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(108, 12, 'title', 'text', 'Tiêu đề', 0, 1, 1, 1, 1, 1, '{}', 2),
(109, 12, 'field1', 'text', 'Nội dung 1', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"7\"}}', 3),
(110, 12, 'field2', 'text', 'Nội dung 2', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"7\"}}', 5),
(111, 12, 'field3', 'text', 'Nội dung 3', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"7\"}}', 7),
(112, 12, 'image', 'image', 'Hình ảnh', 0, 1, 1, 1, 1, 1, '{}', 18),
(113, 12, 'call_url', 'text', 'Call Url', 0, 0, 0, 0, 0, 1, '{}', 19),
(114, 12, 'created_at', 'timestamp', 'Ngày tạo', 0, 1, 1, 1, 0, 1, '{}', 20),
(115, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 21),
(127, 11, 'name', 'text', 'Họ Tên', 0, 1, 1, 1, 1, 1, '{}', 2),
(128, 11, 'image', 'image', 'Ảnh đại diện', 0, 0, 1, 1, 1, 1, '{}', 3),
(130, 11, 'rate', 'text', 'Sao đánh giá', 0, 0, 1, 1, 1, 1, '{}', 6),
(135, 8, 'service_belongstomany_question_relationship', 'relationship', 'Review sản phẩm', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Question\",\"table\":\"questions\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"questions\",\"pivot_table\":\"service_questions\",\"pivot\":\"1\",\"taggable\":\"0\"}', 14),
(136, 12, 'link1', 'text', 'Link1', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"5\"}}', 4),
(137, 12, 'link2', 'text', 'Link2', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"5\"}}', 6),
(138, 12, 'link3', 'text', 'Link3', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"5\"}}', 8),
(139, 7, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 4),
(140, 8, 'multi_img', 'media_picker', 'Ảnh liên quan', 0, 0, 1, 1, 1, 1, '{\"max\":10,\"min\":0,\"expanded\":true,\"show_folders\":true,\"show_toolbar\":true,\"allow_upload\":true,\"allow_move\":true,\"allow_delete\":true,\"allow_create_folder\":true,\"allow_rename\":true,\"allow_crop\":true,\"allowed\":[],\"hide_thumbnails\":false,\"quality\":90,\"watermark\":{\"source\":\"...\",\"position\":\"top-left\",\"x\":0,\"y\":0},\"display\":{\"width\":\"8\"}}', 8),
(141, 5, 'view', 'text', 'View', 0, 1, 0, 1, 0, 1, '{}', 16),
(142, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(143, 14, 'name', 'text', 'Tên Khách Hàng', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 2),
(144, 14, 'phone', 'text', 'Số điện thoại', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 3),
(145, 14, 'state', 'text', 'Tỉnh', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 4),
(146, 14, 'district', 'text', 'Huyện', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 5),
(147, 14, 'ward', 'text', 'Xã', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 6),
(148, 14, 'address', 'text', 'Địa chỉ chi tiết', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\"}}', 7),
(150, 14, 'number', 'text', 'Số lượng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 11),
(151, 14, 'name_shop', 'text', 'Tên Shop', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 8),
(152, 14, 'phone_shop', 'text', 'Số điện thoại Shop', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 9),
(153, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 18),
(154, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 19),
(155, 14, 'product_mama', 'text', 'Hallo Baby Mama', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 10),
(156, 14, 'product1', 'text', 'Hallo Baby 1', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 12),
(157, 14, 'hallo_1', 'text', 'Số lượng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 13),
(158, 14, 'product2', 'text', 'Hallo Baby 2', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 14),
(159, 14, 'hallo_2', 'text', 'Số lượng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 15),
(160, 14, 'product3', 'text', 'Hallo Baby 3', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 16),
(161, 14, 'hallo_3', 'text', 'Số lượng', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"2\"}}', 17),
(162, 10, 'address', 'text', 'Địa chỉ', 0, 1, 1, 1, 1, 1, '{}', 4),
(163, 12, 'link4', 'text', 'Link4', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"5\"}}', 10),
(164, 12, 'link5', 'text', 'Link5', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"5\"}}', 12),
(165, 12, 'field4', 'text', 'Field4', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"7\"}}', 9),
(166, 12, 'field5', 'text', 'Field5', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"7\"}}', 11),
(167, 12, 'icon1', 'image', 'Icon1', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 13),
(168, 12, 'icon2', 'image', 'Icon2', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 14),
(169, 12, 'icon3', 'image', 'Icon3', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 15),
(170, 12, 'icon4', 'image', 'Icon4', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 16),
(171, 12, 'icon5', 'image', 'Icon5', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"8\"}}', 17),
(172, 6, 'type', 'select_dropdown', 'Thể loại', 0, 1, 1, 1, 1, 1, '{\"default\":\"thong-tin\",\"options\":{\"thong-tin\":\"Th\\u00f4ng tin\",\"ban-hang\":\"Ch\\u00ednh s\\u00e1ch b\\u00e1n h\\u00e0ng\",\"khach-hang\":\"H\\u1ed7 tr\\u1ee3 kh\\u00e1ch h\\u00e0ng\"}}', 10),
(173, 8, 'promotional', 'text', 'Giá khuyến mại', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-06-01 19:44:56', '2023-09-07 00:47:14'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-06-01 19:44:56', '2023-09-12 01:05:12'),
(7, 'banners', 'banners', 'Banner', 'Banners', 'voyager-photos', 'App\\Banner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-02 00:31:56', '2023-09-06 19:17:21'),
(8, 'services', 'services', 'Sản phẩm', 'Sản phẩm', 'voyager-thumbs-up', 'App\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-02 00:55:36', '2023-09-14 00:30:34'),
(9, 'books', 'books', 'Đơn hàng', 'Đơn hàng', 'voyager-basket', 'App\\Book', NULL, 'App\\Admin\\Controllers\\AdminOrderController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-03 02:34:16', '2023-09-07 02:43:24'),
(10, 'advises', 'advises', 'Yêu cầu tư vấn', 'Yêu cầu tư vấn', 'voyager-mail', 'App\\Advise', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-04 18:38:03', '2023-09-07 19:37:47'),
(11, 'questions', 'questions', 'Đánh giá sản phẩm', 'Đánh giá sản phẩm', 'voyager-chat', 'App\\Question', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-04 19:09:52', '2023-09-05 02:48:43'),
(12, 'camketsanphams', 'cam-ket-san-pham', 'Cam kết sản phẩm', 'Cam kết sản phẩm', NULL, 'App\\Camketsanpham', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-08-30 19:00:30', '2023-09-08 20:54:08'),
(14, 'vouchers', 'vouchers', 'Đăng ký nhận Voucher', 'Đăng ký nhận Voucher', 'voyager-buy', 'App\\Voucher', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-09-07 18:05:57', '2023-09-07 18:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'home_menu', '2023-06-02 00:24:51', '2023-06-02 00:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-06-01 19:44:55', '2023-06-01 19:44:55', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 10, '2023-06-01 19:44:55', '2023-09-13 21:27:13', 'voyager.media.index', NULL),
(3, 1, 'Tài khoản', '', '_self', 'voyager-person', '#000000', 31, 2, '2023-06-01 19:44:55', '2023-06-05 00:21:00', 'voyager.users.index', 'null'),
(4, 1, 'Phân quyền', '', '_self', 'voyager-lock', '#000000', 31, 1, '2023-06-01 19:44:55', '2023-06-05 00:21:09', 'voyager.roles.index', 'null'),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2023-06-01 19:44:55', '2023-09-13 21:27:13', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.bread.index', NULL),
(10, 1, 'Cấu hình hệ thống', '', '_self', 'voyager-settings', '#000000', NULL, 12, '2023-06-01 19:44:55', '2023-09-13 21:27:13', 'voyager.settings.index', 'null'),
(11, 1, 'Danh mục bài viết', '', '_self', 'voyager-categories', '#000000', 23, 1, '2023-06-01 19:44:55', '2023-08-30 19:14:08', 'voyager.categories.index', 'null'),
(12, 1, 'Bài viết', '', '_self', 'voyager-news', '#000000', 23, 2, '2023-06-01 19:44:56', '2023-08-30 19:14:08', 'voyager.posts.index', 'null'),
(13, 1, 'Trang nội dung', '', '_self', 'voyager-file-text', '#000000', 23, 3, '2023-06-01 19:44:56', '2023-08-30 19:14:32', 'voyager.pages.index', 'null'),
(14, 2, 'Trang chủ', '/', '_self', NULL, '#000000', NULL, 1, '2023-06-02 00:25:14', '2023-06-02 00:26:31', NULL, ''),
(15, 2, 'Cam kết', '/page/cam-ket', '_self', NULL, '#000000', 32, 2, '2023-06-02 00:25:26', '2023-09-14 19:29:40', NULL, ''),
(17, 2, 'Giới thiệu', '/page/gioi-thieu', '_self', NULL, '#000000', 32, 1, '2023-06-02 00:25:59', '2023-09-14 19:29:33', NULL, ''),
(18, 2, 'Đăng kí đại lý', '/contact', '_self', NULL, '#000000', NULL, 6, '2023-06-02 00:26:11', '2023-08-27 20:54:37', NULL, ''),
(19, 2, 'Bài viết', '/posts', '_self', NULL, '#000000', NULL, 4, '2023-06-02 00:26:29', '2023-08-27 20:53:56', NULL, ''),
(20, 1, 'Banners', '', '_self', 'voyager-photos', NULL, NULL, 2, '2023-06-02 00:31:56', '2023-08-30 19:14:04', 'voyager.banners.index', NULL),
(21, 1, 'Sản phẩm', '', '_self', 'voyager-browser', '#000000', NULL, 4, '2023-06-02 00:55:36', '2023-08-30 19:14:10', 'voyager.services.index', 'null'),
(22, 2, 'Sản phẩm', '/products', '_self', NULL, '#000000', NULL, 3, '2023-06-02 01:20:25', '2023-08-31 01:20:15', NULL, ''),
(23, 1, 'Quản lý nội dung', '', '_self', 'voyager-categories', '#000000', NULL, 3, '2023-06-03 02:26:26', '2023-08-30 19:14:10', NULL, ''),
(24, 1, 'Đơn hàng', '', '_self', 'voyager-basket', '#000000', NULL, 6, '2023-06-03 02:34:16', '2023-09-05 02:46:56', 'voyager.books.index', 'null'),
(25, 1, 'Yêu cầu tư vấn', '', '_self', 'voyager-mail', NULL, NULL, 8, '2023-06-04 18:38:03', '2023-09-13 21:27:13', 'voyager.advises.index', NULL),
(26, 1, 'Đánh giá sản phẩm', '', '_self', 'voyager-chat', '#000000', NULL, 5, '2023-06-04 19:09:52', '2023-09-05 02:46:56', 'voyager.questions.index', 'null'),
(31, 1, 'Quản lý tài khoản', '', '_self', 'voyager-categories', '#000000', NULL, 9, '2023-06-05 00:20:35', '2023-09-13 21:27:13', NULL, ''),
(32, 2, 'Giới thiệu', '#', '_self', NULL, '#000000', NULL, 2, '2023-08-27 20:52:19', '2023-08-30 20:30:05', NULL, ''),
(36, 1, 'Cam kết sản phẩm', '', '_self', 'voyager-star', '#000000', 23, 4, '2023-08-30 19:00:31', '2023-08-30 19:15:54', 'voyager.cam-ket-san-pham.index', 'null'),
(37, 2, 'Về chúng tôi', '/page/ve-chung-toi', '_self', NULL, '#000000', 32, 3, '2023-08-30 20:30:57', '2023-09-14 19:29:46', NULL, ''),
(38, 2, 'Khuyến mãi', '/voucher', '_self', NULL, '#000000', NULL, 5, '2023-08-30 20:45:13', '2023-09-14 00:26:38', NULL, ''),
(40, 1, 'Đăng ký nhận Voucher', '', '_self', NULL, '#000000', 47, 1, '2023-09-07 18:05:58', '2023-09-13 21:28:00', 'voyager.vouchers.index', 'null'),
(43, 2, 'Hallo Baby MAMA', '/product/hallo-baby-mama', '_self', NULL, '#000000', 22, 1, '2023-09-11 20:38:54', '2023-09-11 20:38:58', NULL, ''),
(44, 2, 'Sữa Hallo Baby 1 Infant Formula', '/product/sua-bot-hallo-baby-1', '_self', NULL, '#000000', 22, 2, '2023-09-11 20:39:40', '2023-09-11 20:39:44', NULL, ''),
(45, 2, 'Sữa Hallo Baby 2 Infant Formula', '/product/sua-hallo-baby-2-infant-formula', '_self', NULL, '#000000', 22, 3, '2023-09-11 20:40:21', '2023-09-11 20:40:25', NULL, ''),
(46, 2, ' Sữa Hallo Baby 3 Infant Formula', '/product/sua-hallo-baby-3-infant-formula', '_self', NULL, '#000000', 22, 4, '2023-09-11 20:40:49', '2023-09-11 20:40:53', NULL, ''),
(47, 1, 'Đăng ký nhận Voucher', '', '_self', 'voyager-buy', '#000000', NULL, 7, '2023-09-13 21:27:00', '2023-09-13 21:28:15', NULL, ''),
(48, 1, 'Thống kê Voucher', '/admin/report', '_self', NULL, '#000000', 47, 2, '2023-09-13 21:27:45', '2023-09-13 21:27:52', NULL, ''),
(49, 1, 'Cập nhật sitemap', '/sitemap-create', '_self', 'Voyager', '#000000', NULL, 13, '2023-09-14 18:48:15', '2023-09-14 18:48:15', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`, `type`) VALUES
(6, 1, 'Về chúng tôi', NULL, '<p><strong>C&ocirc;ng Ty Cổ Phần Anh Ph&uacute; Cường: Kết Nối Sự Tinh Hoa Của Sữa Arla Với Người Ti&ecirc;u D&ugrave;ng Việt Nam</strong></p>\n<p>Trong h&agrave;nh tr&igrave;nh chắp c&aacute;nh giấc mơ về sức khỏe v&agrave; dinh dưỡng, C&ocirc;ng Ty Cổ Phần Anh Ph&uacute; Cường đ&atilde; vươn m&igrave;nh th&agrave;nh một t&ecirc;n tuổi đ&aacute;ng tin cậy, đồng h&agrave;nh c&ugrave;ng người ti&ecirc;u d&ugrave;ng Việt Nam trong việc cung cấp những sản phẩm sữa tinh hoa từ tập đo&agrave;n sữa h&agrave;ng đầu thế giới - Arla.</p>\n<p><strong>Arla - Tinh Hoa Của Sữa Thế Giới</strong></p>\n<p>Với hơn 100 năm lịch sử gắn liền với sứ mệnh mang đến dinh dưỡng v&agrave; hương vị tuyệt vời, Arla đ&atilde; ghi dấu ấn của m&igrave;nh trong danh s&aacute;ch \"Top 5 C&ocirc;ng Ty Sản Xuất Sữa Lớn Nhất Thế Giới\". Với trụ sở tại Đan Mạch, Arla kh&ocirc;ng chỉ đại diện cho sự ho&agrave;n hảo trong sản phẩm sữa m&agrave; c&ograve;n phản &aacute;nh sự tận t&acirc;m, chất lượng v&agrave; sự đổi mới kh&ocirc;ng ngừng trong ng&agrave;nh c&ocirc;ng nghiệp thực phẩm.</p>\n<p>Sứ mệnh của Arla kh&ocirc;ng chỉ đơn thuần l&agrave; sản xuất sữa, m&agrave; c&ograve;n l&agrave; việc tạo ra những sản phẩm sữa tươi, sữa tiệt tr&ugrave;ng, ph&ocirc; mai, bơ... chất lượng cao, mang đến hương vị tự nhi&ecirc;n v&agrave; dinh dưỡng đa dạng. Sự hiện diện của sản phẩm Arla đ&atilde; vươn ra hơn 100 quốc gia tr&ecirc;n thế giới, thể hiện l&ograve;ng tin v&agrave; sự ưa chuộng từ ph&iacute;a người ti&ecirc;u d&ugrave;ng tr&ecirc;n khắp c&aacute;c ch&acirc;u lục.</p>\n<p><strong>Anh Ph&uacute; Cường - Sự Kết Nối Từ Tr&aacute;i Tim Đến Tận Tay</strong></p>\n<p>Với tầm nh&igrave;n thấu hiểu v&agrave; l&ograve;ng đam m&ecirc; về dinh dưỡng, C&ocirc;ng Ty Cổ Phần Anh Ph&uacute; Cường đ&atilde; trở th&agrave;nh cầu nối uy t&iacute;n giữa sản phẩm sữa Arla v&agrave; người ti&ecirc;u d&ugrave;ng tại thị trường Việt Nam. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ đơn thuần l&agrave; một doanh nghiệp ph&acirc;n phối, m&agrave; c&ograve;n l&agrave; người bạn đồng h&agrave;nh với sự quan t&acirc;m tận t&acirc;m đến sức khỏe của mỗi gia đ&igrave;nh.</p>\n<p>Ch&uacute;ng t&ocirc;i cam kết mang đến những sản phẩm sữa chất lượng cao, đảm bảo nguồn gốc v&agrave; t&iacute;nh an to&agrave;n thực phẩm, đồng thời thấu hiểu v&agrave; đ&aacute;p ứng đa dạng nhu cầu của người ti&ecirc;u d&ugrave;ng. Mạng lưới ph&acirc;n phối rộng khắp của ch&uacute;ng t&ocirc;i đảm bảo rằng mỗi sản phẩm Arla đạt tới mọi hộ gia đ&igrave;nh tại Việt Nam, mang đến hương vị v&agrave; gi&aacute; trị thực sự.</p>\n<p><strong>Tương lai Hứa Hẹn</strong></p>\n<p>C&ugrave;ng với sự phấn đấu kh&ocirc;ng ngừng, C&ocirc;ng Ty Cổ Phần Anh Ph&uacute; Cường tự tin tiếp tục l&agrave; người đồng h&agrave;nh đ&aacute;ng tin cậy của người ti&ecirc;u d&ugrave;ng Việt Nam. Ch&uacute;ng t&ocirc;i cam kết kh&ocirc;ng ngừng ho&agrave;n thiện để mang đến sự tinh t&uacute;y từ sản phẩm sữa Arla v&agrave; g&oacute;p phần l&agrave;m cho mỗi bữa ăn trở th&agrave;nh một trải nghiệm dinh dưỡng đầy &yacute; nghĩa.</p>', NULL, 've-chung-toi', NULL, NULL, 'ACTIVE', '2023-08-28 20:25:20', '2023-09-12 01:05:26', 'thong-tin'),
(7, 1, 'Cam kết', NULL, '<p>Arla Foods l&agrave; tập đo&agrave;n sữa v&agrave; c&aacute;c sản phẩm từ sữa thuộc top 5 c&ocirc;ng ty sản xuất sữa lớn nhất thế giới c&oacute; trụ sở tại Đan Mạch. Arla c&oacute; lịch sử hơn 100 năm, chuy&ecirc;n sản xuất c&aacute;c sản phẩm từ sữa như sữa tươi, sữa tiệt tr&ugrave;ng, ph&ocirc; mai, bơ&hellip; sản phẩm Arla hiện diện ở hơn 100 quốc gia tr&ecirc;n thế giới.</p>\n<p><img class=\"aligncenter size-large wp-image-4777\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-1024x654.png.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-1024x654.png.webp 1024w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-300x192.png.webp 300w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-768x491.png.webp 768w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1.png.webp 1626w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p>Arla nổi tiếng tr&ecirc;n to&agrave;n cầu nhờ v&agrave;o ch&iacute;nh s&aacute;ch sản xuất bảo vệ m&ocirc;i trường, sự tự nhi&ecirc;n v&agrave; an to&agrave;n của sản phẩm. Chất lượng sản phẩm của Arla được kiểm so&aacute;t chặt chẽ theo quy tr&igrave;nh &ldquo;From Cow To You&rdquo; &ndash; từ trang trại đến b&agrave;n ăn, kh&ocirc;ng sử dụng kh&aacute;ng sinh v&agrave; Hormones tăng trưởng trong qu&aacute; tr&igrave;nh chăn nu&ocirc;i b&ograve;. Với hơn 11,200 người n&ocirc;ng d&acirc;n trải d&agrave;i tr&ecirc;n khắp ch&acirc;u &Acirc;u, Arla đảm bảo cho ra đời những sản phẩm đạt ti&ecirc;u chuẩn chất lượng cao.</p>\n<p><img class=\"aligncenter size-full wp-image-4778\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM.png.webp\" sizes=\"(max-width: 817px) 100vw, 817px\" srcset=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM.png.webp 817w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM-300x190.png.webp 300w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM-768x486.png.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p>Từ th&aacute;ng 8/2018, Đại T&acirc;n Việt được uỷ quyền l&agrave; nh&agrave; ph&acirc;n phối ch&iacute;nh thức của Arla tại Việt Nam. Với vai tr&ograve; n&agrave;y, Đại T&acirc;n Việt sẽ trở th&agrave;nh cầu nối đưa c&aacute;c sản phẩm từ sữa chất lượng quốc tế của Arla đến gần hơn với người ti&ecirc;u d&ugrave;ng Việt Nam.</p>\n<p><img class=\"aligncenter size-full wp-image-4775\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY.png.webp\" sizes=\"(max-width: 857px) 100vw, 857px\" srcset=\"https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY.png.webp 857w, https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY-300x233.png.webp 300w, https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY-768x596.png.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p>Qu&yacute; kh&aacute;ch h&agrave;ng doanh nghiệp c&oacute; thể li&ecirc;n hệ email&nbsp;order@newviet.vn&nbsp;để biết th&ecirc;m chi tiết về c&aacute;c sản phẩm từ tập đo&agrave;n sữa Arla.</p>', NULL, 'cam-ket', NULL, NULL, 'ACTIVE', '2023-08-28 20:53:23', '2023-09-12 01:05:33', 'thong-tin'),
(8, 1, 'Giới thiệu', 'Giới thiệu', '<p>Arla Foods &ndash; tập đo&agrave;n sữa v&agrave; c&aacute;c sản phẩm từ sữa thuộc top 5 c&ocirc;ng ty sản xuất sữa lớn nhất thế giới c&oacute; trụ sở tại Đan Mạch. Arla c&oacute; lịch sử hơn 100 năm, chuy&ecirc;n sản xuất c&aacute;c sản phẩm từ sữa như sữa tươi, sữa tiệt tr&ugrave;ng, ph&ocirc; mai, bơ&hellip; sản phẩm Arla hiện diện ở hơn 100 quốc gia tr&ecirc;n thế giới.</p>\n<p>Arla Pro, thương hiệu mới của tập đo&agrave;n Arla Foods, giải ph&aacute;p dịch vụ thực phẩm trọn g&oacute;i h&agrave;ng đầu tại Việt Nam, chuy&ecirc;n cung cấp c&aacute;c sản phẩm cao cấp từ sữa (ph&ocirc; mai, bơ, sữa UTH) c&oacute; th&agrave;nh phần v&agrave; hương vị ho&agrave;n to&agrave;n tự nhi&ecirc;n cho c&aacute;c nh&agrave; h&agrave;ng, kh&aacute;ch sạn, tiệm b&aacute;nh&hellip;tr&ecirc;n khắp thế giới. Chất lượng sản phẩm cao, văn h&oacute;a đổi mới v&agrave; dịch vụ tuyệt hảo ch&iacute;nh l&agrave; điều m&agrave; c&aacute;c đầu bếp chuy&ecirc;n nghiệp v&agrave; chủ doanh nghiệp dịch vụ thực phẩm c&oacute; thể mong đợi khi quyết định lựa chọn Arla Pro.</p>\n<p><img class=\"aligncenter size-large wp-image-5393\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-768x512.jpg.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Vừa</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;qua,&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">Arla</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;Pro&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">lần</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">đầu</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">ti&ecirc;n</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">ra</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">mắt</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">tại</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Việt</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;Nam&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">dưới</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">sự</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">hợp</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">t&aacute;c</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">tổ</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">chức</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">của</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">c&ocirc;ng</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;ty New Viet Dairy (</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Đại</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">T&acirc;n</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Việt</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">).</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Sự</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">kiện</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">đ&atilde;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">diễn</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">ra</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">th&agrave;nh</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">c&ocirc;ng</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">tại</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">H&agrave;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Nội</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;(29/10)&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">v&agrave;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;TP.&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Hồ</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"SpellingError BCX0 SCXW219934227\">Ch&iacute;</span></span><span class=\"TextRun BCX0 SCXW219934227\" lang=\"EN-US\" xml:lang=\"EN-US\"><span class=\"NormalTextRun BCX0 SCXW219934227\">&nbsp;Minh (05/11).</span></span></p>\n<p>Trong buổi ra mắt, kh&aacute;ch mời tham dự dự kiện đ&atilde; được trải nghiệm v&agrave; lắng nghe những chia sẻ hữu &iacute;ch từ c&aacute;c si&ecirc;u đầu bếp trong việc chế biến c&aacute;c m&oacute;n ăn thơm ngon từ sản phẩm của Arla Pro, g&oacute;p phần tăng th&ecirc;m gi&aacute; trị cho người l&agrave;m ra m&oacute;n ăn v&agrave; người điều h&agrave;nh dịch vụ thực phẩm.</p>\n<p><img class=\"aligncenter size-large wp-image-5394\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-768x512.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921.jpg.webp 1440w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5395\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-768x512.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487.jpg.webp 1440w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p>New Viet Dairy h&acirc;n hạnh được ủy quyền l&agrave; nh&agrave; ph&acirc;n phối ch&iacute;nh thức cho Arla Pro tại Việt Nam, c&ugrave;ng đồng h&agrave;nh v&agrave; trực tiếp gửi gắm niềm đam m&ecirc; thực phẩm chất lượng cao đến với thế giới của c&aacute;c đầu bếp chuy&ecirc;n nghiệp.</p>\n<p>C&ugrave;ng&nbsp;xem&nbsp;lại&nbsp;một&nbsp;v&agrave;i&nbsp;khoảnh&nbsp;khắc&nbsp;trong&nbsp;&ldquo;Arla&nbsp;Pro Launch Vietnam 2019&rdquo;.</p>\n<p><img class=\"aligncenter size-large wp-image-5396\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-768x512.jpg.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5397\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-768x512.jpg.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5398\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-768x512.jpg.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5399\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-768x512.jpg.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5400\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-768x512.jpg.webp 768w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5401\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94100-1024x576.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94100-1024x576.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/GA94100-300x169.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/GA94100-768x432.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/GA94100.jpg.webp 1936w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>\n<p>&nbsp;</p>\n<p><img class=\"aligncenter size-large wp-image-5403\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94373-1024x569.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94373-1024x569.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/GA94373-300x167.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/GA94373-768x427.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/GA94373.jpg.webp 1946w\" alt=\"\" width=\"60%\" loading=\"lazy\"></p>', NULL, 'gioi-thieu', NULL, NULL, 'ACTIVE', '2023-08-30 20:29:35', '2023-09-12 01:05:39', 'thong-tin'),
(9, 1, 'Phương thức thanh toán', NULL, '<p>Trong ch&iacute;nh s&aacute;ch giao h&agrave;ng của Hallo Baby, phương thức thanh to&aacute;n được đưa ra rất cụ thể v&agrave; trải nghiệm mua sắm của kh&aacute;ch h&agrave;ng được đặt l&ecirc;n h&agrave;ng đầu. C&aacute;c phương thức thanh to&aacute;n chấp nhận tại cửa h&agrave;ng bao gồm tiền mặt, chuyển khoản v&agrave; thanh to&aacute;n bằng thẻ t&iacute;n dụng.</p>\n<p>Đối với thanh to&aacute;n bằng tiền mặt, kh&aacute;ch h&agrave;ng sẽ tiến h&agrave;nh thanh to&aacute;n ngay tại cửa h&agrave;ng khi nhận sản phẩm. Nếu kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; đủ tiền mặt, cửa h&agrave;ng sẽ kh&ocirc;ng thực hiện giao h&agrave;ng.</p>\n<p>Kh&aacute;ch h&agrave;ng cũng c&oacute; thể thanh to&aacute;n bằng chuyển khoản ng&acirc;n h&agrave;ng. Sau khi kh&aacute;ch h&agrave;ng ho&agrave;n tất qu&aacute; tr&igrave;nh đặt h&agrave;ng v&agrave; thanh to&aacute;n, cửa h&agrave;ng sẽ tiến h&agrave;nh x&aacute;c nhận đơn h&agrave;ng v&agrave; gửi sản phẩm tới địa chỉ kh&aacute;ch h&agrave;ng đ&atilde; cung cấp trong đơn h&agrave;ng.</p>\n<p>Nếu kh&aacute;ch h&agrave;ng chọn thanh to&aacute;n bằng thẻ t&iacute;n dụng, họ sẽ phải cung cấp th&ocirc;ng tin thẻ v&agrave; x&aacute;c nhận việc thanh to&aacute;n. Sau khi x&aacute;c nhận thanh to&aacute;n, cửa h&agrave;ng sẽ thực hiện giao h&agrave;ng tới địa chỉ được cung cấp trong đơn h&agrave;ng.</p>\n<p>Với c&aacute;c phương thức thanh to&aacute;n n&agrave;y, kh&aacute;ch h&agrave;ng c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi mua sắm tại cửa h&agrave;ng, v&igrave; tất cả c&aacute;c th&ocirc;ng tin v&agrave; giao dịch thanh to&aacute;n đều được bảo mật v&agrave; đảm bảo an to&agrave;n. Cửa h&agrave;ng cũng lu&ocirc;n sẵn s&agrave;ng hỗ trợ kh&aacute;ch h&agrave;ng trong việc chọn lựa phương thức thanh to&aacute;n ph&ugrave; hợp nhất.</p>', NULL, 'phuong-thuc-thanh-toan', NULL, NULL, 'ACTIVE', '2023-09-12 00:37:03', '2023-09-12 01:05:49', 'ban-hang'),
(10, 1, 'Giao hàng và đổi trả', NULL, '<p>Ch&iacute;nh s&aacute;ch giao h&agrave;ng của Hallo Baby c&oacute; những th&ocirc;ng tin sau đ&acirc;y:</p>\n<p>1. Thời gian giao h&agrave;ng:<br>&ndash; Nội th&agrave;nh H&agrave; Nội v&agrave; TP. Hồ Ch&iacute; Minh: 1-2 ng&agrave;y l&agrave;m việc.<br>&ndash; C&aacute;c tỉnh th&agrave;nh kh&aacute;c: 2-3 ng&agrave;y l&agrave;m việc.</p>\n<p>2. Ph&iacute; giao h&agrave;ng:<br>&ndash; Tại H&agrave; Nội v&agrave; TP. Hồ Ch&iacute; Minh: Miễn ph&iacute; với đơn h&agrave;ng từ 2.000.000₫ trở l&ecirc;n. Ph&iacute; 30.000₫ với đơn h&agrave;ng dưới 2.000.000₫.<br>&ndash; C&aacute;c tỉnh th&agrave;nh kh&aacute;c: Ph&iacute; ship được t&iacute;nh theo biểu ph&iacute; của đơn vị vận chuyển.</p>\n<p>3. H&igrave;nh thức giao h&agrave;ng:<br>&ndash; Cửa h&agrave;ng sử dụng dịch vụ vận chuyển của c&aacute;c đối t&aacute;c uy t&iacute;n như Viettel Post, VNPost, Giao h&agrave;ng nhanh (GHN) v&agrave; Ship COD.<br>&ndash; Kh&aacute;ch h&agrave;ng sẽ nhận được th&ocirc;ng tin theo d&otilde;i đơn h&agrave;ng qua tin nhắn hoặc email.</p>\n<p>4. Thủ tục đổi trả h&agrave;ng:<br>&ndash; Đổi h&agrave;ng: Kh&aacute;ch h&agrave;ng c&oacute; thể đổi h&agrave;ng trong v&ograve;ng 7 ng&agrave;y kể từ khi nhận h&agrave;ng. Điều kiện trả h&agrave;ng đ&uacute;ng sản phẩm nhận được, kh&ocirc;ng bị hỏng h&oacute;c, c&ograve;n nguy&ecirc;n tem, m&aacute;c.<br>&ndash; Trả lại h&agrave;ng: Nếu sản phẩm kh&ocirc;ng đạt y&ecirc;u cầu, kh&aacute;ch h&agrave;ng c&oacute; thể trả lại trong v&ograve;ng 3 ng&agrave;y kể từ khi nhận được sản phẩm.</p>\n<p>Với c&aacute;c th&ocirc;ng tin tr&ecirc;n, Ch&iacute;nh s&aacute;ch giao h&agrave;ng của Hallo Baby đảm bảo sự tiện lợi cho kh&aacute;ch h&agrave;ng. Kh&aacute;ch h&agrave;ng c&oacute; thể y&ecirc;n t&acirc;m mua sắm sản phẩm ở cửa h&agrave;ng n&agrave;y m&agrave; kh&ocirc;ng phải lo lắng về vấn đề giao h&agrave;ng v&agrave; đổi trả h&agrave;ng.</p>', NULL, 'giao-hang-va-doi-tra', NULL, NULL, 'ACTIVE', '2023-09-12 00:39:06', '2023-09-12 01:05:55', 'ban-hang'),
(11, 1, 'Bảo mật thông tin', NULL, '<p>Ch&iacute;nh s&aacute;ch bảo mật cửa h&agrave;ng Hallo Baby l&agrave; một trong những ưu ti&ecirc;n h&agrave;ng đầu của cửa h&agrave;ng. Ch&uacute;ng t&ocirc;i cam kết đảm bảo an to&agrave;n v&agrave; bảo vệ th&ocirc;ng tin của kh&aacute;ch h&agrave;ng tại cửa h&agrave;ng.</p>\n<p>Th&ocirc;ng tin kh&aacute;ch h&agrave;ng được sử dụng trong mục đ&iacute;ch cung cấp sản phẩm v&agrave; dịch vụ tốt nhất cho kh&aacute;ch h&agrave;ng. Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng cho bất kỳ b&ecirc;n thứ ba n&agrave;o m&agrave; kh&ocirc;ng được sự đồng &yacute; của kh&aacute;ch h&agrave;ng.</p>\n<p>Cửa h&agrave;ng đảm bảo rằng th&ocirc;ng tin kh&aacute;ch h&agrave;ng sẽ được bảo mật v&agrave; bảo vệ th&ocirc;ng qua việc sử dụng c&aacute;c biện ph&aacute;p ph&ugrave; hợp để ngăn chặn việc truy cập tr&aacute;i ph&eacute;p hoặc sử dụng sai mục đ&iacute;ch. Cửa h&agrave;ng cũng cấp cho nh&acirc;n vi&ecirc;n chỉ được truy cập v&agrave;o th&ocirc;ng tin kh&aacute;ch h&agrave;ng để thực hiện nhiệm vụ v&agrave; c&aacute;c tr&aacute;ch nhiệm kh&aacute;c li&ecirc;n quan đến cung cấp sản phẩm v&agrave; dịch vụ.</p>\n<p>Để đảm bảo an to&agrave;n v&agrave; bảo vệ th&ocirc;ng tin của kh&aacute;ch h&agrave;ng, cửa h&agrave;ng đề nghị kh&aacute;ch h&agrave;ng kh&ocirc;ng chia sẻ th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh với bất kỳ ai nhằm tr&aacute;nh những rủi ro kh&ocirc;ng mong muốn xảy ra.</p>\n<p>Ch&iacute;nh s&aacute;ch bảo mật cửa h&agrave;ng Hallo Baby được xem như th&ocirc;ng tin quan trọng, được cập nhật v&agrave; thực thi định kỳ để đảm bảo rằng cửa h&agrave;ng lu&ocirc;n đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn cao nhất về bảo mật th&ocirc;ng tin v&agrave; bảo vệ quyền ri&ecirc;ng tư của kh&aacute;ch h&agrave;ng.</p>', NULL, 'bao-mat-thong-tin', NULL, NULL, 'ACTIVE', '2023-09-12 00:40:10', '2023-09-12 01:06:01', 'ban-hang'),
(12, 1, 'Hướng dẫn mua hàng', NULL, '<p>Xin ch&agrave;o qu&yacute; kh&aacute;ch h&agrave;ng, để tiện lợi hơn trong việc đặt mua c&aacute;c sản phẩm của Hallo Baby, qu&yacute; kh&aacute;ch c&oacute; thể đặt h&agrave;ng trực tiếp tr&ecirc;n website, li&ecirc;n hệ với bộ phận b&aacute;n h&agrave;ng qua hotline hoặc đến tham quan v&agrave; mua sản phẩm trực tiếp tại hệ thống c&aacute;c cửa h&agrave;ng Hallo Baby.</p>\n<p>C&Aacute;CH 1 &ndash; ĐẶT H&Agrave;NG QUA ĐIỆN THOẠI</p>\n<p>Thời gian phục vụ đặt h&agrave;ng từ 8h00 đến 21h150 tất cả c&aacute;c ng&agrave;y trong tuần</p>\n<p>Hotline: 19008690</p>\n<p>C&Aacute;CH 2 &ndash; ĐẶT H&Agrave;NG QUA WEBSITE</p>\n<p><br>Bước 1: Click chọn sản phẩm cần mua</p>\n<p>Bước 2: Nhấn n&uacute;t &ldquo;Th&ecirc;m v&agrave;o giỏ h&agrave;ng&ldquo;</p>\n<p><img src=\"https://demophucuong.kennatech.vn/storage/pages/September2023/screenshot_16945053732.png\" alt=\"\" width=\"1314\" height=\"507\"><br>Bước 3: Điền th&ocirc;ng tin c&aacute; nh&acirc;n ch&iacute;nh x&aacute;c v&agrave;o &ocirc; đặt h&agrave;ng</p>\n<p>Sau khi ho&agrave;n tất đặt h&agrave;ng,Hallo Baby sẽ gửi th&ocirc;ng b&aacute;o đặt h&agrave;ng th&agrave;nh c&ocirc;ng. Tiếp sau đ&oacute; bộ phận b&aacute;n h&agrave;ng sẽ li&ecirc;n hệ lại với kh&aacute;ch h&agrave;ng để th&ocirc;ng b&aacute;o thời gian giao h&agrave;ng.</p>', NULL, 'huong-dan-mua-hang', NULL, NULL, 'ACTIVE', '2023-09-12 00:53:33', '2023-09-12 01:06:10', 'khach-hang'),
(13, 1, 'Chính sách xử lý khiếu nại', NULL, '<p>&ndash; Tiếp nhận mọi khiếu nại của kh&aacute;ch h&agrave;ng li&ecirc;n quan đến việc sử dụng dịch vụ của c&ocirc;ng ty.</p>\n<p>&ndash; Tất cả mọi trường hơp bảo h&agrave;nh, qu&yacute; kh&aacute;ch c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để l&agrave;m thủ tục bảo h&agrave;nh.</p>\n<p>&ndash; Thời gian giải quyết khiếu nại trong thời hạn tối đa l&agrave; 03 (ba) ng&agrave;y l&agrave;m việc kể từ khi nhận được khiếu nại của của kh&aacute;ch h&agrave;ng. Trong trường hợp bất khả kh&aacute;ng 2 b&ecirc;n sẽ tự thương lượng.</p>', NULL, 'chinh-sach-xu-ly-khieu-nai', NULL, NULL, 'ACTIVE', '2023-09-12 01:00:15', '2023-09-12 01:06:16', 'khach-hang'),
(14, 1, 'Chính sách bảo hành', NULL, '<p><strong>1. Trường hợp được bảo h&agrave;nh:</strong></p>\n<p>&ndash; Sản phẩm vừa được giao kh&ocirc;ng đ&uacute;ng như h&igrave;nh ảnh cung cấp hoặc tr&ecirc;n website</p>\n<p><strong>2. Trường hợp kh&ocirc;ng được bảo h&agrave;nh:</strong></p>\n<p>&ndash; Sản phẩm bị trầy xước do qu&aacute; tr&igrave;nh sử dụng l&acirc;u ng&agrave;y</p>\n<p>&ndash; Sản phẩm bị bể m&oacute;p, biến dạng do bị va đập</p>\n<p>&ndash; Sản phẩm bị bong tem m&aacute;c của nh&agrave; sản suất</p>\n<p><strong>3. Điều kiện đổi trả h&agrave;ng hoặc ho&agrave;n tiền 100%:</strong></p>\n<p>&ndash; Sản phẩm ph&aacute;t hiện bị lỗi của nh&agrave; sản xuất khi nhận h&agrave;ng.</p>\n<p>&ndash; Sản phẩm kh&ocirc;ng giống với sản phẩm m&agrave; Qu&yacute; kh&aacute;ch đ&atilde; đặt h&agrave;ng tr&ecirc;n website của ch&uacute;ng t&ocirc;i.</p>\n<p>Lưu &yacute;:</p>\n<p>&ndash; Kh&aacute;ch h&agrave;ng cần đổi trả h&agrave;ng trong v&ograve;ng 02 ng&agrave;y l&agrave;m việc t&iacute;nh từ thời điểm qu&yacute; kh&aacute;ch nhận h&agrave;ng.</p>\n<p>&ndash; Sản phẩm đổi trả cần nguy&ecirc;n vẹn nh&atilde;n m&aacute;c, hộp, bao b&igrave; gốc của sản phẩm như khi Qu&yacute; kh&aacute;ch nhận h&agrave;ng l&uacute;c đầu</p>', NULL, 'chinh-sach-bao-hanh', NULL, NULL, 'ACTIVE', '2023-09-12 01:01:49', '2023-09-12 01:06:22', 'khach-hang');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'browse_bread', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(3, 'browse_database', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(4, 'browse_media', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(5, 'browse_compass', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(6, 'browse_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(7, 'read_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(8, 'edit_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(9, 'add_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(10, 'delete_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(11, 'browse_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(12, 'read_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(13, 'edit_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(14, 'add_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(15, 'delete_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(16, 'browse_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(17, 'read_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(18, 'edit_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(19, 'add_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(20, 'delete_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(21, 'browse_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(22, 'read_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(23, 'edit_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(24, 'add_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(25, 'delete_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(26, 'browse_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(27, 'read_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(28, 'edit_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(29, 'add_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(30, 'delete_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(31, 'browse_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(32, 'read_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(33, 'edit_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(34, 'add_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(35, 'delete_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(36, 'browse_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(37, 'read_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(38, 'edit_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(39, 'add_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(40, 'delete_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(41, 'browse_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(42, 'read_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(43, 'edit_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(44, 'add_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(45, 'delete_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(46, 'browse_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(47, 'read_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(48, 'edit_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(49, 'add_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(50, 'delete_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(51, 'browse_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(52, 'read_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(53, 'edit_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(54, 'add_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(55, 'delete_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(56, 'browse_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(57, 'read_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(58, 'edit_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(59, 'add_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(60, 'delete_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(61, 'browse_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(62, 'read_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(63, 'edit_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(64, 'add_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(65, 'delete_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(66, 'browse_camketsanphams', 'camketsanphams', '2023-08-30 19:00:30', '2023-08-30 19:00:30'),
(67, 'read_camketsanphams', 'camketsanphams', '2023-08-30 19:00:30', '2023-08-30 19:00:30'),
(68, 'edit_camketsanphams', 'camketsanphams', '2023-08-30 19:00:30', '2023-08-30 19:00:30'),
(69, 'add_camketsanphams', 'camketsanphams', '2023-08-30 19:00:30', '2023-08-30 19:00:30'),
(70, 'delete_camketsanphams', 'camketsanphams', '2023-08-30 19:00:30', '2023-08-30 19:00:30'),
(76, 'browse_vouchers', 'vouchers', '2023-09-07 18:05:58', '2023-09-07 18:05:58'),
(77, 'read_vouchers', 'vouchers', '2023-09-07 18:05:58', '2023-09-07 18:05:58'),
(78, 'edit_vouchers', 'vouchers', '2023-09-07 18:05:58', '2023-09-07 18:05:58'),
(79, 'add_vouchers', 'vouchers', '2023-09-07 18:05:58', '2023-09-07 18:05:58'),
(80, 'delete_vouchers', 'vouchers', '2023-09-07 18:05:58', '2023-09-07 18:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(4, 1),
(4, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(14, 1),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(76, 1),
(76, 3),
(78, 1),
(78, 3),
(80, 1),
(80, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`, `view`) VALUES
(9, 1, 1, 'SỮA BỘT CHO BÉ VÀ NHỮNG KIẾN THỨC MẸ PHẢI NẰM LÒNG', '', 'Các bác sĩ và chuyên gia đều khuyên rằng, sữa mẹ là sữa tốt nhất cho trẻ và nên cho trẻ bú sữa mẹ hoàn toàn trong 6 tháng đầu sau sinh. Tuy nhiên, không phải mẹ nào cũng có đủ sữa cho con (vì cơ địa ít sữa, vì bệnh nên mất sữa…)', '<div id=\"tat-ca-thong-tin-ve-sua-bot\" class=\"#tat-ca-thong-tin-ve-sua-bot\">\n<h2><strong>1. Tất cả th&ocirc;ng tin về sữa bột</strong></h2>\n</div>\n<div id=\"sua-bot-la-gi\" class=\"#sua-bot-la-gi\">\n<h3><strong>1.1 Sữa bột l&agrave; g&igrave;?</strong></h3>\n</div>\n<p>C&aacute;c b&aacute;c sĩ v&agrave; chuy&ecirc;n gia đều khuy&ecirc;n rằng, sữa mẹ l&agrave; sữa tốt nhất cho trẻ v&agrave; n&ecirc;n cho trẻ b&uacute; sữa mẹ ho&agrave;n to&agrave;n trong 6 th&aacute;ng đầu sau sinh. Tuy nhi&ecirc;n, kh&ocirc;ng phải mẹ n&agrave;o cũng c&oacute; đủ sữa cho con (v&igrave; cơ địa &iacute;t sữa, v&igrave; bệnh n&ecirc;n mất sữa&hellip;) n&ecirc;n c&aacute;c mẹ đ&atilde; t&igrave;m đến sữa bột cho b&eacute; để bổ sung đầy đủ dưỡng chất, đảm bảo b&eacute; ph&aacute;t triển to&agrave;n diện.</p>\n<p><img src=\"https://suahoanggia.vn/uploaded/images/sua-bot-cho-be-va-nhung-kien-thuc-me-phai-nam-long-1.jpg\" alt=\"Sữa bột l&agrave; sản phẩm sản xuất từ sữa b&ograve;, d&ecirc;, cừu&hellip; ở dạng bột kh&ocirc; cung cấp nhiều dinh dưỡng\"></p>\n<p><em>Sữa bột l&agrave; sản phẩm sản xuất từ sữa b&ograve;, d&ecirc;, cừu&hellip; ở dạng bột kh&ocirc; cung cấp nhiều dinh dưỡng</em></p>\n<p>Sữa bột l&agrave; sản phẩm sản xuất từ sữa ở dạng bột kh&ocirc;, được thực hiện bằng c&aacute;ch l&agrave;m bốc hơi sữa để kh&ocirc; sau đ&oacute; nghiền nhỏ v&agrave; t&aacute;n th&agrave;nh bột. Mục đ&iacute;ch của sữa dạng bột l&agrave; phục vụ cho việc bảo quản, t&iacute;ch trữ v&agrave; sử dụng v&igrave; n&oacute; c&oacute; thời hạn sử dụng l&acirc;u hơn hẳn so với sữa nước v&agrave; kh&ocirc;ng cần bảo quản lạnh.</p>\n<p>Sữa bột cũng l&agrave; loại sữa duy nhất được cộng đồng y khoa cho ph&eacute;p sử dụng song song với sữa mẹ cho b&eacute; dưới 1 tuổi dưới g&oacute;c độ dinh dưỡng chứ kh&ocirc;ng phải sữa bột pha sẵn hay sữa nước.</p>\n<div id=\"thanh-phan-cua-sua-bot\" class=\"#thanh-phan-cua-sua-bot\">\n<h3><strong>1.2 Th&agrave;nh phần của sữa bột</strong></h3>\n</div>\n<p>Th&agrave;nh phần ch&iacute;nh tạo n&ecirc;n c&aacute;c sản phẩm sữa bột ch&iacute;nh l&agrave; từ sữa của c&aacute;c loại động vật như b&ograve;, d&ecirc;, cừu&hellip; được bổ sung th&ecirc;m c&aacute;c vitamin, kho&aacute;ng chất v&agrave; được chiết xuất theo c&ocirc;ng thức h&oacute;a học đặc biệt để mang đến những th&agrave;nh phần gần giống với sữa mẹ nhất nhằm&nbsp;<strong>cung cấp 1 phần dinh dưỡng&nbsp;</strong>b&ecirc;n cạnh sữa mẹ trong trường hợp mẹ &iacute;t sữa, bị mất sữa hoặc bị c&aacute;c bệnh truyền nhiễm như HIV, AIDS&hellip;)</p>\n<p>Theo Viện Nhi khoa Mỹ (AAP), sữa bột cho b&eacute; phải c&oacute; đủ th&agrave;nh phần dinh dưỡng: Chất đạm, chất b&eacute;o, acid linoleic, vitamin (A, C, D, E, B1, B6, B12&hellip;), acid folic, niacin, c&aacute;c kho&aacute;ng chất như sắt, kẽm, mangan&hellip; Trong đ&oacute;, h&agrave;m lượng c&aacute;c th&agrave;nh phần phải trong giới hạn cho ph&eacute;p v&agrave; an to&agrave;n.</p>\n<div id=\"phan-loai-sua-bot\" class=\"#phan-loai-sua-bot\">\n<h3><strong>1.3 Ph&acirc;n loại sữa bột</strong></h3>\n</div>\n<p>Sữa bột cho b&eacute; được chia l&agrave;m rất nhiều loại nhưng c&oacute; thể kể đến 3 loại ch&iacute;nh, đ&oacute; l&agrave;:</p>\n<p>- Sữa bột c&oacute; gốc từ sữa của c&aacute;c loại động vật c&oacute; v&uacute;: Loại sữa n&agrave;y c&oacute; nguồn gốc từ sữa b&ograve;, d&ecirc;, cừu&hellip; cung cấp h&agrave;m lượng dinh dưỡng cao v&agrave; hầu hết c&aacute;c b&eacute; đều d&ugrave;ng tốt, nhưng c&oacute; một số b&eacute; c&oacute; khả năng dị ứng với protein trong sữa.</p>\n<p>- Sữa bột &iacute;t g&acirc;y dị ứng: Loại sữa n&agrave;y d&ugrave;ng cho c&aacute;c b&eacute; dị ứng với sữa động vật v&agrave; sữa đậu n&agrave;nh.</p>\n<p>- Sữa bột với c&ocirc;ng thức đặc biệt: Cho trẻ nhẹ c&acirc;n v&agrave; suy dinh dưỡng hoặc những đối tượng ri&ecirc;ng kh&aacute;c.</p>\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những loại sữa bột chứa đạm thủy ph&acirc;n, trong đ&oacute; protein đ&atilde; được bẻ nhỏ để b&eacute; dễ ti&ecirc;u h&oacute;a, tăng sức đề kh&aacute;ng một c&aacute;ch tối ưu nhất.</p>', 'posts/August2023/vMJGJ1dAaOESvpasf1qK.jpg', 'sua-bot-cho-be-va-nhung-kien-thuc-me-phai-nam-long', '', '', 'PUBLISHED', 1, '2023-08-27 20:34:27', '2023-09-11 19:58:19', 10),
(10, 1, 1, 'SỮA CAO NĂNG LƯỢNG CHO BÉ: SỬ DỤNG SAO ĐỂ HIỆU QUẢ?', '', 'Sữa cao năng lượng được thiết kế để cung cấp năng lượng, chất đạm, vitamin và khoáng chất mà bé cần để bắt kịp sự tăng trưởng và phát triển', '<div class=\"post-bound\">\n<div class=\"post-content\">\n<p dir=\"ltr\">Sữa cao năng lượng được thiết kế để cung cấp năng lượng, chất đạm, vitamin v&agrave; kho&aacute;ng chất m&agrave; b&eacute; cần để bắt kịp sự tăng trưởng v&agrave; ph&aacute;t triển. T&igrave;m hiểu chi tiết về sữa cao năng lượng cũng như c&aacute;ch sử dụng sữa cao năng lượng cho b&eacute; hiệu quả trong b&agrave;i viết dưới đ&acirc;y.</p>\n<h2 dir=\"ltr\"><strong>Sữa cao năng lượng l&agrave; g&igrave;?</strong></h2>\n<h3 dir=\"ltr\"><strong>Định nghĩa</strong></h3>\n<p dir=\"ltr\">Sữa cao năng lượng l&agrave; loại sữa cung cấp năng lượng cao hơn 100kcal/100ml sữa - chỉ số cao hơn nhiều khi so s&aacute;nh với sữa mẹ v&agrave; sữa c&ocirc;ng thức (khoảng 67 - 75kcal/100ml). Sữa cao năng lượng cho b&eacute; c&oacute; nguồn năng lượng cao vượt trội gi&uacute;p trẻ bổ sung kịp thời năng lượng, tăng c&acirc;n tốt, bắt kịp đ&agrave; tăng trưởng theo đ&uacute;ng lứa tuổi.</p>\n<p dir=\"ltr\"><img src=\"https://lh4.googleusercontent.com/Lx6duYVChjVLJUmahHSfmJnnRRq31w4xwYCCUtVzxFIv94_Tc4M2Q9_FcfErKwbHKT29fgTjt7auoeXg2zkvyW8WhuxTXiLTnTK9hG9IhRU3rnIJl6hgVmb-EIZXG00fewQ1XJm1KqchxlkmLKHstzA\"></p>\n<h3 dir=\"ltr\"><strong>Ph&acirc;n biệt sữa cao năng lượng với sữa c&ocirc;ng thức</strong></h3>\n<p dir=\"ltr\">Hiện nay tr&ecirc;n thị trường c&oacute; rất nhiều loại sữa c&ocirc;ng thức với c&ocirc;ng dụng tương đồng sữa cao năng lượng như sữa d&agrave;nh cho trẻ biếng ăn, sữa cho trẻ sinh non, sữa d&agrave;nh cho trẻ trong thời gian phục hồi...</p>\n<p dir=\"ltr\">Yếu tố r&otilde; r&agrave;ng nhất để ph&acirc;n biệt đ&oacute; l&agrave; th&ocirc;ng tin về chỉ số dinh dưỡng:</p>\n<p dir=\"ltr\"><strong>1. Năng lượng</strong></p>\n<ul dir=\"ltr\">\n<li role=\"presentation\">Năng lượng &gt;=100kcal/100ml th&igrave; đ&oacute; l&agrave; sữa cao năng lượng</li>\n<li role=\"presentation\">Năng lượng từ 70 - 75kcal/100ml l&agrave; c&aacute;c loại&nbsp;<strong>sữa tăng c&acirc;n cho b&eacute;</strong>, sữa cho trẻ biếng ăn</li>\n<li role=\"presentation\">Năng lượng khoảng 67 - 68kcal/100ml l&agrave; sữa mẹ v&agrave; sữa c&ocirc;ng thức chuẩn kh&aacute;c.</li>\n</ul>\n<p dir=\"ltr\"><strong>2. Protein:&nbsp;</strong>Sữa cao năng lượng thường c&oacute; h&agrave;m lượng protein cao hơn so với sữa th&ocirc;ng thường, khoảng 3,5-4g/100ml.</p>\n<p dir=\"ltr\"><strong>3. Chất b&eacute;o:</strong>&nbsp;Sữa cao năng lượng thường c&oacute; h&agrave;m lượng chất b&eacute;o cao hơn so với sữa th&ocirc;ng thường, khoảng 3,5-4g/100ml.</p>\n<p dir=\"ltr\"><strong>4. C&aacute;c vitamin v&agrave; kho&aacute;ng chất:</strong>&nbsp;Sữa cao năng lượng thường tập trung cung cấp năng lượng từ chất b&eacute;o, protein v&agrave; carbohydrate n&ecirc;n c&oacute; thể thiếu hụt một số chất dinh dưỡng quan trọng kh&aacute;c như vitamin, kho&aacute;ng chất v&agrave; chất xơ.</p>\n<h2 dir=\"ltr\"><strong>C&oacute; n&ecirc;n cho b&eacute; uống sữa cao năng lượng?</strong></h2>\n<p dir=\"ltr\">Việc cho b&eacute; uống sữa cao năng lượng hay kh&ocirc;ng cần được kiểm tra v&agrave; khuyến nghị bởi b&aacute;c sĩ. B&aacute;c sĩ sẽ đưa ra đ&aacute;nh gi&aacute; v&agrave; chỉ định cho b&eacute; dựa tr&ecirc;n t&igrave;nh trạng sức khỏe v&agrave; c&acirc;n nặng.</p>\n<p dir=\"ltr\"><img src=\"https://lh6.googleusercontent.com/fGzV_MmiUzQwTJj6lhRz0P-2RH82r82ZtVrggQ4hFh0B8fx6NAU3WNsoWunDEgJ0wgkZEiFQ9Q7KwlroDXjj-Z9TZnED0u8sVaRDc1R145YOe1fma7-q72TqJN36vhP9zHaVjyX3XcpkTbMeZnxXhcY\"></p>\n<p dir=\"ltr\">C&aacute;c trường hợp sau đ&acirc;y thường được khuyến nghị sử dụng sữa cao năng lượng:</p>\n<ul dir=\"ltr\">\n<li role=\"presentation\">Trẻ suy dinh dưỡng: Nếu b&eacute; c&oacute; t&igrave;nh trạng suy dinh dưỡng, thiếu c&acirc;n so với c&acirc;n nặng chuẩn theo lứa tuổi, sữa cao năng lượng c&oacute; thể gi&uacute;p b&eacute; tăng c&acirc;n tốt. Sữa n&agrave;y cung cấp nhiều protein v&agrave; chất b&eacute;o hơn, gi&uacute;p b&eacute; hấp thụ năng lượng v&agrave; dinh dưỡng cần thiết.</li>\n<li role=\"presentation\"><strong>Trẻ biếng ăn</strong>: Nếu b&eacute; c&oacute; xu hướng biếng ăn v&agrave; kh&ocirc;ng đủ năng lượng từ chế độ ăn h&agrave;ng ng&agrave;y, sữa cao năng lượng c&oacute; thể l&agrave; một lựa chọn hợp l&yacute; để bổ sung th&ecirc;m dinh dưỡng cho b&eacute;. T&igrave;nh trạng biếng ăn bao gồm biếng ăn t&acirc;m l&yacute;, sinh l&yacute; v&agrave; đặc biệt l&agrave; bệnh l&yacute;.</li>\n<li role=\"presentation\">Trẻ cần phục hồi sau bệnh: Sau khi trải qua một đợt bệnh, b&eacute; c&oacute; thể cần bổ sung năng lượng v&agrave; dinh dưỡng để phục hồi sức khỏe. Sữa cao năng lượng c&oacute; thể gi&uacute;p b&eacute; hồi phục nhanh ch&oacute;ng.</li>\n</ul>\n<p dir=\"ltr\">Nhiều chuy&ecirc;n gia cho rằng, sữa d&agrave;nh cho trẻ chậm tăng c&acirc;n, lười ăn kh&ocirc;ng nhất thiết phải l&agrave; sữa cao năng lượng. Cha mẹ c&oacute; thể lựa chọn c&aacute;c loại sữa tăng c&acirc;n cho b&eacute; (với mức năng lượng 70 - 75kcal/100ml); sữa bổ sung kẽm, lysine (k&iacute;ch th&iacute;ch b&eacute; ăn ngon miệng) hay c&aacute;c loại sữa tốt cho hệ ti&ecirc;u h&oacute;a, sữa m&aacute;t...để sử dụng l&acirc;u d&agrave;i thay v&igrave; sữa cao năng lượng.</p>\n<p dir=\"ltr\">Tự &yacute; cho b&eacute; uống sữa cao năng lượng m&agrave; kh&ocirc;ng c&oacute; sự tư vấn v&agrave; hướng dẫn của chuy&ecirc;n gia y tế c&oacute; thể g&acirc;y ra c&aacute;c vấn đề sức khỏe kh&aacute;c:</p>\n<ul dir=\"ltr\">\n<li role=\"presentation\">B&eacute; biếng ăn hơn: Nếu lạm dụng sữa cao năng lượng, d&ugrave;ng n&oacute; thay thế bữa ăn ch&iacute;nh trong thời gian d&agrave;i c&oacute; thể g&acirc;y ra t&igrave;nh trạng thiếu vitamin, chất xơ, kẽm, sắt...l&agrave;m trẻ mất c&acirc;n bằng dinh dưỡng, ch&aacute;n ăn v&agrave; ph&aacute;t triển kh&ocirc;ng đồng đều.</li>\n<li role=\"presentation\">Tăng c&acirc;n, b&eacute;o ph&igrave;: Khi b&eacute; đ&atilde; bắt kịp c&acirc;n nặng l&yacute; tưởng m&agrave; cha mẹ vẫn tiếp tục d&ugrave;ng loại sữa n&agrave;y sẽ khiến b&eacute; thừa năng lượng, g&acirc;y t&igrave;nh trạng tăng c&acirc;n, b&eacute;o ph&igrave; v&agrave; k&eacute;o theo h&agrave;ng loạt c&aacute;c bệnh kh&aacute;c như tim mạch, tiểu đường, khung xương...</li>\n<li role=\"presentation\">Rối loạn ti&ecirc;u h&oacute;a: Việc ti&ecirc;u thụ qu&aacute; nhiều chất b&eacute;o v&agrave; năng lượng từ sữa cao năng lượng c&oacute; thể khiến b&eacute; bị t&aacute;o b&oacute;n, kh&oacute; ti&ecirc;u. Ngo&agrave;i ra, sữa cao năng lượng thường kh&ocirc;ng d&ugrave;ng đường lactose, nếu sử dụng thời gian d&agrave;i cơ thể sẽ giảm tiết enzyme lactase - enzyme ti&ecirc;u h&oacute;a lactose đặc hiệu, g&acirc;y ra c&aacute;c triệu chứng rối loạn ti&ecirc;u h&oacute;a đặc trưng: s&ocirc;i bụng, ti&ecirc;u chảy, ph&acirc;n n&aacute;t... khi quay về sử dụng sữa th&ocirc;ng thường.</li>\n<li role=\"presentation\">Rối loạn chức năng gan: Một số sữa cao năng lượng c&oacute; thể chứa c&aacute;c th&agrave;nh phần đặc biệt hoặc chất phụ gia c&oacute; thể g&acirc;y t&aacute;c động ti&ecirc;u cực đến gan, đặc biệt l&agrave; khi d&ugrave;ng trong thời gian d&agrave;i v&agrave; kh&ocirc;ng theo hướng dẫn của b&aacute;c sĩ.</li>\n</ul>\n<p dir=\"ltr\">T&oacute;m lại, c&oacute; cho b&eacute; uống sữa cao năng lượng hay kh&ocirc;ng phụ thuộc v&agrave;o đ&aacute;nh gi&aacute; v&agrave; chỉ định của b&aacute;c sĩ. H&atilde;y lu&ocirc;n thảo luận với b&aacute;c sĩ để c&oacute; được đ&aacute;nh gi&aacute; v&agrave; hướng dẫn ph&ugrave; hợp cho trường hợp cụ thể của b&eacute;.</p>\n<h2 dir=\"ltr\"><strong>Uống sữa cao năng lượng đ&uacute;ng c&aacute;ch</strong></h2>\n<p dir=\"ltr\"><img src=\"https://lh5.googleusercontent.com/YUcsj3G2gTVqo1sn2LX03mglBitwl8_Ns4uS__INyJjcRCdXHFLwD5su6cmgyZKU0njLvyMWnG_lpJvGdRpsD_8gBzIXJR40aanG9h3NkMPbnV5XnSPXoc3wHuA-7h1btyjb0SMwn9QaqHKbvdI7x4g\"></p>\n<p dir=\"ltr\">Bổ sung sữa cao năng lượng v&agrave;o khẩu phần ăn l&agrave; một giải ph&aacute;p hiệu quả để b&eacute; bắt kịp đ&agrave; tăng trưởng. Tuy nhi&ecirc;n, phải uống sữa cao năng lượng đ&uacute;ng c&aacute;ch mới c&oacute; thể ph&aacute;t huy tối đa hiệu quả của loại sữa n&agrave;y.</p>\n</div>\n</div>', 'posts/August2023/nUeufI6EzD2Na36Ta3Da.JPG', 'sua-cao-nang-luong-cho-be-su-dung-sao-de-hieu-qua', '', '', 'PUBLISHED', 1, '2023-08-27 20:35:32', '2023-09-14 03:07:51', 21),
(11, 1, 1, 'MÁCH MẸ CÁCH CHỌN SỮA TĂNG CHIỀU CAO CHO BÉ 3 TUỔI PHÙ HỢP NHẤT', '', 'Bé được 3 tuổi, rất nhiều gia đình đã có xu hướng tìm hiểu và bổ sung sữa tăng chiều cao cho bé. Bởi lẽ, chiều cao luôn là yếu tố ngoại hình được quan tâm hàng đầu ở trẻ nhỏ. Nó không chỉ thể hiện bé cao lớn khỏe mạnh mà còn mang lại rất nhiều lợi ích cho cuộc sống sau này của trẻ.', '<div id=\"tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\" class=\"#tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\">\n<div id=\"tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\" class=\"#tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\">\n<h2><strong>I. Tại sao 3 tuổi được xem l&agrave; giai đoạn v&agrave;ng ph&aacute;t triển chiều cao cho b&eacute;?</strong></h2>\n</div>\n</div>\n<p>B&eacute; được 3 tuổi, rất nhiều gia đ&igrave;nh đ&atilde; c&oacute; xu hướng t&igrave;m hiểu v&agrave; bổ sung sữa tăng chiều cao cho b&eacute;. Bởi lẽ, chiều cao lu&ocirc;n l&agrave; yếu tố ngoại h&igrave;nh được quan t&acirc;m h&agrave;ng đầu ở trẻ nhỏ. N&oacute; kh&ocirc;ng chỉ thể hiện b&eacute; cao lớn khỏe mạnh m&agrave; c&ograve;n mang lại rất nhiều lợi &iacute;ch cho cuộc sống sau n&agrave;y của trẻ.</p>\n<p>Theo thống k&ecirc; của viện dinh dưỡng quốc gia, chiều cao trung b&igrave;nh của&nbsp; trẻ em Việt Nam lu&ocirc;n nằm trong top thấp nhất thế giới. Ch&iacute;nh v&igrave; vậy, việc cải thiện chiều cao của con em được cha mẹ rất quan t&acirc;m khi b&eacute; c&ograve;n nhỏ. Vậy ba mẹ liệu đ&atilde; hiểu r&otilde; về c&aacute;c giai đoạn ph&aacute;t triển chiều cao của b&eacute;?&nbsp;</p>\n<p><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi%20(1).jpeg\" alt=\"Sữa tăng chiều cao cho b&eacute; 3 tuổi\"></p>\n<p>Việc nắm r&otilde; th&ocirc;ng tin về giai đoạn ph&aacute;t triển chiều cao của b&eacute; l&agrave; c&aacute;ch gi&uacute;p ba mẹ lựa chọn sữa v&agrave; bổ sung dinh dưỡng tốt nhất cho con ngay từ sớm.</p>\n<p>Mặt kh&aacute;c, b&eacute; 3 tuổi nằm trong giai đoạn ph&aacute;t triển \"v&agrave;ng\" từ 0-3 tuổi của bất kỳ đứa b&eacute; n&agrave;o. Giai đoạn n&agrave;y b&eacute; ph&aacute;t triển rất nhanh về thể chất cũng như tinh thần. Về chiều cao, b&eacute; c&oacute; thể tăng 25cm trong năm đầu ti&ecirc;n v&agrave; 10cm mỗi năm trong 2 năm tiếp theo. Nếu giai đoạn n&agrave;y, b&eacute; được bổ sung dinh dưỡng đầy đủ c&oacute; thể quyết định đến 60% khả năng tăng trưởng chiều cao của b&eacute; trong tương lai.</p>\n<div id=\"yeu-to-anh-huong-den-su-phat-trien-chieu-cao-cua-be-3-tuoi\" class=\"#yeu-to-anh-huong-den-su-phat-trien-chieu-cao-cua-be-3-tuoi\">\n<h2><strong>II. Yếu tố ảnh hưởng đến sự ph&aacute;t triển chiều cao của b&eacute; 3 tuổi</strong></h2>\n</div>\n<p>Sự tăng trưởng về thể chất, tầm v&oacute;c của b&eacute; ảnh hưởng bởi rất nhiều yếu tố kh&aacute;c nhau. Trong đ&oacute;, c&oacute; những yếu tố ba mẹ c&oacute; thể gi&uacute;p b&eacute; cải thiện được, c&oacute; yếu tố bất biến. C&ugrave;ng xem đ&acirc;u l&agrave; yếu tố ảnh hưởng đến sự ph&aacute;t triển chiều cao ở b&eacute;:</p>\n<h3><strong>1. Chế độ dinh dưỡng</strong></h3>\n<p><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi-a%20(1)(1).jpg\" alt=\"Sữa ph&aacute;t triển chiều cao cho b&eacute; 3 tuổi\"></strong></p>\n<p>Nhiều nghi&ecirc;n cứu đ&atilde; chỉ ra, chiều cao của&nbsp; b&eacute; bị ảnh hưởng bởi 23% yếu tố di truyền, dinh dưỡng đ&oacute;ng g&oacute;p đến 32%, thể dục thể thao v&agrave; c&aacute;c yếu tố kh&aacute;c quyết định 20% c&ograve;n lại. Như vậy c&oacute; thể thấy vai tr&ograve; của dinh dưỡng t&aacute;c động rất lớn đến sự ph&aacute;t triển chiều cao ở b&eacute;.</p>\n<h3><strong>2. Yếu tố di truyền</strong></h3>\n<p>Gen ảnh hưởng kh&aacute; nhiều đến sự ph&aacute;t triển chiều cao của b&eacute;. Nếu bố mẹ hay c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh ch&oacute; chiều cao khi&ecirc;m tốn th&igrave; con c&aacute;i sẽ c&oacute; sự hạn chế về sự ph&aacute;t triển chiều cao.</p>\n<h3><strong>3. M&ocirc;i trường sống</strong></h3>\n<p><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi-b%20(1).jpg\" alt=\"M&ocirc;i trường sống đến sự ph&aacute;t triển chiều cao cho b&eacute; 3 tuổi\"></strong></p>\n<p>&Ocirc; nhiễm m&ocirc;i trường khiến b&eacute; thường xuy&ecirc;n tiếp x&uacute;c với chất độc hại v&agrave; dễ sinh bệnh. C&ugrave;ng với đ&oacute;, việc sử dụng nhiều loại thuốc để điều trị bệnh khiến b&eacute; bị ảnh hưởng rất nhiều về sự ph&aacute;t triển chiều cao.</p>\n<p>Nh&igrave;n chung, trong tất cả c&aacute;c yếu tố cơ bản ảnh hưởng đến sự ph&aacute;t triển chiều cao của b&eacute; th&igrave; chế độ dinh dưỡng đ&oacute;ng vai tr&ograve; quan trọng nhất. C&ugrave;ng với đ&oacute;, việc tạo dựng th&oacute;i quen tập thể dục thể thao sẽ gi&uacute;p b&eacute; ph&aacute;t triển chiều cao tối ưu nhất c&oacute; thể.</p>\n<h3><strong>4. Th&oacute;i quen sinh hoạt, vận động kh&ocirc;ng l&agrave;nh mạnh</strong></h3>\n<p>Th&oacute;i quen b&eacute; lười vận động v&agrave; đi ngủ muộn khiến cơ thể b&eacute; bị thụ động, c&aacute;c khối cơ &iacute;t c&oacute; cơ hội hoạt động v&agrave; ph&aacute;t triển. B&ecirc;n cạnh đ&oacute;, th&oacute;i quen b&eacute; thường xuy&ecirc;n đi ngủ muộn ảnh hưởng đến hoocmon sinh trưởng của b&eacute;. Từ đ&oacute; khiến b&eacute; gặp nhiều cản trở về sự ph&aacute;t triển chiều cao.&nbsp;</p>\n<div id=\"tieu-chi-lua-chon-sua-tang-chieu-cao-cho-be-3-tuoi\" class=\"#tieu-chi-lua-chon-sua-tang-chieu-cao-cho-be-3-tuoi\">\n<h2><strong>III. Ti&ecirc;u ch&iacute; lựa chọn sữa tăng chiều cao cho b&eacute; 3 tuổi</strong></h2>\n</div>\n<h3><strong>1. Hợp với lứa tuổi v&agrave; sức khỏe của b&eacute;</strong></h3>\n<p>Kh&ocirc;ng tự nhi&ecirc;n m&agrave; c&aacute;c nh&agrave; sản xuất thường ph&acirc;n loại c&aacute;c sản phẩm của m&igrave;nh theo độ tuổi để b&aacute;n ra thị trường. Một sản phẩm sữa ph&ugrave; hợp với lứa tuổi sẽ tốt với hệ ti&ecirc;u h&oacute;a v&agrave; tăng hiệu quả khi b&eacute; sử dụng. B&ecirc;n cạnh đ&oacute;, sữa cần đ&aacute;p ứng những nh&oacute;m chất dinh dưỡng cơ bản gi&uacute;p b&eacute; 3 tuổi ph&aacute;t triển đều. Chỉ như vậy, khi cơ thể b&eacute; ph&aacute;t triển khỏe mạnh sẽ x&acirc;y dựng nền m&oacute;ng cho sự ph&aacute;t triển chiều cao của b&eacute;.</p>\n<h3><strong>2. Th&agrave;nh phần của sữa</strong></h3>\n<p><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi%20(1).png\" alt=\"Ch&uacute; &yacute; đến th&agrave;nh phần của sữa\"></strong></p>\n<p>Trước hết cha mẹ cần hiểu như thế n&agrave;o được xem l&agrave; sản phẩm sữa tăng chiều cao cho b&eacute;. Sữa tăng chiều cao cho b&eacute; kh&ocirc;ng chỉ đ&aacute;p ứng đủ về h&agrave;m lượng canxi trong sữa. Một số th&agrave;nh phần rất quan trọng khiến b&eacute; c&oacute; thể tăng khả năng hấp thụ được canxi tốt hơn như: vitamin D, K, magie. Đ&acirc;y đều l&agrave; những chất cơ bản v&agrave; cần thiết gi&uacute;p hệ ti&ecirc;u h&oacute;a của b&eacute; c&oacute; thể hấp thụ được canxi tốt hơn.</p>\n<h3><strong>3. Thương hiệu sữa v&agrave; nguồn gốc xuất xứ r&otilde; r&agrave;ng</strong></h3>\n<ul>\n<li>Một thương hiệu sữa lớn ch&iacute;nh l&agrave; một lời cam kết v&ocirc; h&igrave;nh về chất lượng sản phẩm sữa tốt. Bởi thương hiệu sữa lớn sẽ đủ nguồn lực để đ&aacute;p ứng c&ocirc;ng nghệ sản xuất sữa hiện đại, c&aacute;c kiểm duyệt nghi&ecirc;m ngặt để cho ra đời sản phẩm sữa chất lượng.</li>\n<li>Nguồn gốc xuất xứ: ở đ&acirc;y chỉ một địa chỉ mua sản phẩm ch&iacute;nh h&atilde;ng chất lượng cao. Bởi thực tế bạn c&oacute; thể thấy một thương hiệu sữa nổi tiếng sẽ k&egrave;m theo việc sữa bị nhập lậu, h&agrave;ng giả h&agrave;ng nh&aacute;i xuất hiện nhiều tr&ecirc;n thị trường. Nếu mua phải sản phẩm sữa kh&ocirc;ng chất lượng sẽ kh&ocirc;ng gi&uacute;p b&eacute; 3 tuổi ph&aacute;t triển chiều cao. B&ecirc;n cạnh đ&oacute; c&ograve;n ảnh hưởng kh&ocirc;ng tốt đến t&igrave;nh trạng sức khỏe của b&eacute;.</li>\n</ul>\n<div id=\"thoi-diem-tot-nhat-de-uong-sua-tang-chieu-cao-cho-be-3-tuoi\" class=\"#thoi-diem-tot-nhat-de-uong-sua-tang-chieu-cao-cho-be-3-tuoi\">\n<h2><strong>IV. Thời điểm tốt nhất để uống sữa tăng chiều cao cho b&eacute; 3 tuổi</strong></h2>\n</div>\n<p>Giai đoạn trước 3 tuổi, sữa đ&oacute;ng vai tr&ograve; ch&iacute;nh trong chế độ dinh dưỡng của b&eacute;. Đến 3 tuổi, phần lớn b&eacute; đ&atilde; c&oacute; thể ăn uống gần giống với người lớn. Việc thay đổi nguồn dinh dưỡng bổ sung gi&uacute;p b&eacute; bổ sung h&agrave;m lượng canxi dồi d&agrave;o v&agrave; nạp v&agrave;o cơ thể đa dạng nguồn dưỡng chất kh&aacute;c nhau. Ch&iacute;nh sự thay đổi n&agrave;y khiến lượng sữa cung cấp cho b&eacute; một ng&agrave;y c&agrave;ng giảm đi.&nbsp;</p>\n<p><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi-a%20(1).jpg\" alt=\"Sữa tăng chiều cao cho b&eacute; 3 tuổi\"></p>\n<p>C&aacute;c chuy&ecirc;n gia dinh dưỡng cũng khuy&ecirc;n rằng ba mẹ kh&ocirc;ng n&ecirc;n bổ sung qu&aacute; nhiều sữa cho b&eacute;. Thay v&agrave;o đ&oacute;, mỗi ng&agrave;y n&ecirc;n bổ sung cho b&eacute; lượng sữa nhất định v&agrave; v&agrave;o c&aacute;c thời điểm gi&uacute;p cơ thể b&eacute; hấp thụ dinh dưỡng tốt.</p>\n<p>Nhiều nghi&ecirc;n cứu đ&atilde; chỉ ra rằng thời điểm tốt nhất uống&nbsp;sữa tăng chiều cao&nbsp;cho b&eacute; l&agrave; trước khi đi ngủ 2 tiếng v&agrave;o buổi tối. Bởi, hormone sinh trưởng được tiết ra nhiều nhất l&uacute;c b&eacute; trong trạng th&aacute;i ngủ s&acirc;u. Thời gian từ 22 giờ đến 2 giờ s&aacute;ng l&agrave; thời gian v&agrave;ng với sự ph&aacute;t triển chiều cao của b&eacute;.</p>\n<p>Ngo&agrave;i ra, b&eacute; c&oacute; thể uống sữa v&agrave; bất kể thời gian n&agrave;o để cung cấp năng lượng cho cơ thể. Tuy nhi&ecirc;n, kh&ocirc;ng n&ecirc;n cho b&eacute; uống sữa khi đ&oacute;i v&igrave; dễ khiến b&eacute; đau bụng, đầy bụng.</p>', 'posts/August2023/FThwgvQAuuaXemlZiCIe.jpg', 'mach-me-cach-chon-sua-tang-chieu-cao-cho-be-3-tuoi-phu-hop-nhat', '', '', 'PUBLISHED', 1, '2023-08-27 20:36:35', '2023-09-14 19:35:54', 12),
(12, 1, 1, 'ĐÂU LÀ SỮA PHÁT TRIỂN TRÍ NÃO CHO BÉ 8 TUỔI TỐT NHẤT TRÊN THỊ TRƯỜNG HIỆN NAY', '', 'Sữa đặc biệt cần thiết cho sự phát triển trí não của trẻ. Với mong muốn con mình có tư duy nhanh nhẹn, biết tò mò khám phá thế giới, cha mẹ luôn muốn tìm cho bé nhà mình dòng sữa chất lượng nhất.', '<div id=\"I-vai-tro-cua-sua-voi-su-phat-trien-tri-nao-cho-be-8-tuoi\" class=\"#I-vai-tro-cua-sua-voi-su-phat-trien-tri-nao-cho-be-8-tuoi\">\n<h2 dir=\"ltr\"><strong>I. Vai tr&ograve; của sữa với sự ph&aacute;t triển tr&iacute; n&atilde;o cho b&eacute; 8 tuổi</strong></h2>\n</div>\n<p dir=\"ltr\"><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-cho-tre-8-tuoi-phat-trien-tri-nao-3.jpg\" alt=\"Vai tr&ograve; của sữa với sự ph&aacute;t triển tr&iacute; n&atilde;o cho b&eacute; 8 tuổi\"></strong></p>\n<p dir=\"ltr\">Theo điều tra của Viện Dinh dưỡng Quốc gia, trung b&igrave;nh cứ 4 trẻ, lại c&oacute; 1 trẻ bị&nbsp;<strong>suy dinh dưỡng thể thấp c&ograve;i</strong>, những trẻ n&agrave;y thường k&egrave;m theo chậm ph&aacute;t triển về thể lực lẫn tr&iacute; tuệ. Những điều n&agrave;y được c&aacute;c chuy&ecirc;n gia khẳng định rằng c&oacute; li&ecirc;n quan mật thiết đến chế độ dinh dưỡng của trẻ m&agrave; cụ thể nhất l&agrave; sữa, nguồn dinh dưỡng thiết yếu gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện, th&ocirc;ng minh v&agrave; ghi nhớ l&acirc;u hơn.</p>\n<p dir=\"ltr\">Tuy nhi&ecirc;n, nhiều phụ huynh kh&ocirc;ng biết rằng, chế độ dinh dưỡng đặc biệt l&agrave; sữa, đ&oacute;ng vai tr&ograve; quan trọng gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện, cao hơn v&agrave; th&ocirc;ng minh hơn.</p>\n<p dir=\"ltr\">Cụ thể, sữa v&agrave; chế phẩm từ sữa gi&uacute;p ph&aacute;t triển tr&iacute; n&atilde;o v&igrave; ch&uacute;ng chứa nhiều vitamin v&agrave; kho&aacute;ng chất thiết yếu như: canxi, phốt pho, vitamin A v&agrave; D c&oacute; lợi cho cơ, xương v&agrave; răng; protein v&agrave; hydrocarbon gi&uacute;p tăng trưởng nhanh; chất b&eacute;o v&agrave; DHA, choline tốt cho n&atilde;o bộ của trẻ&hellip;</p>\n<p dir=\"ltr\">PGS.TS.BS L&ecirc; Bạch Mai, Nguy&ecirc;n Ph&oacute; Viện trưởng Viện Dinh dưỡng Quốc gia cho biết, khuyến nghị sử dụng sữa v&agrave; chế phẩm từ sữa h&agrave;ng ng&agrave;y cho trẻ em từ 3 tuổi trở l&ecirc;n như sau:</p>\n<p dir=\"ltr\"><strong>Trẻ 8-9 tuổi:&nbsp;</strong>5 đơn vị sữa v&agrave; chế phẩm sữa, tương đương 30g ph&ocirc; mai (2 miếng ph&ocirc; mai), 100ml sữa chua (1 hộp sữa chua) v&agrave; 200ml sữa dạng lỏng (2 ly sữa nhỏ).</p>\n<p dir=\"ltr\">Theo PGS.TS.BS L&ecirc; Bạch Mai, mẹ n&ecirc;n cho trẻ d&ugrave;ng cả 3 loại sản phẩm (sữa dạng lỏng, ph&ocirc; mai, sữa chua) để tối ưu h&oacute;a th&agrave;nh phần dinh dưỡng của từng loại, gi&uacute;p trẻ ph&aacute;t triển tr&iacute; n&atilde;o v&agrave; chiều cao tốt nhất.&nbsp;</p>\n<div id=\"II-sua-phat-trien-tri-nao-cho-be-8-tuoi-can-co-duong-chat-vang-nao\" class=\"#II-sua-phat-trien-tri-nao-cho-be-8-tuoi-can-co-duong-chat-vang-nao\">\n<h2 dir=\"ltr\"><strong>II. Sữa ph&aacute;t triển tr&iacute; n&atilde;o cho b&eacute; 8 tuổi cần c&oacute; &ldquo;dưỡng chất v&agrave;ng&rdquo; n&agrave;o?</strong></h2>\n</div>\n<p dir=\"ltr\">Sữa được coi l&agrave; nguồn dinh dưỡng tốt nhất cho sự ph&aacute;t triển to&agrave;n diện n&oacute;i chung v&agrave; sự ph&aacute;t triển tr&iacute; n&atilde;o n&oacute;i ri&ecirc;ng cho b&eacute; 8 tuổi, ch&iacute;nh l&agrave; nh&oacute;m những &ldquo;dưỡng chất v&agrave;ng&rdquo; như: DHA, ARA, Lutein, Cholin&hellip; Do đ&oacute;, để lựa chọn sữa ph&aacute;t triển tr&iacute; n&atilde;o cho trẻ, mẹ chỉ cần căn cứ v&agrave;o h&agrave;m lượng v&agrave; tỷ lệ những dưỡng chất kể tr&ecirc;n l&agrave; đ&atilde; c&oacute; thể gi&uacute;p b&eacute; y&ecirc;u th&ocirc;ng minh vượt trội.</p>\n<p dir=\"ltr\">Theo tổ chức Y tế thế giới WHO, sữa mẹ ch&iacute;nh l&agrave; sữa ph&aacute;t triển tr&iacute; n&atilde;o tốt nhất cho b&eacute; y&ecirc;u. V&igrave; vậy, &iacute;t nhất trong 6 th&aacute;ng đầu đời, trẻ n&ecirc;n được b&uacute; mẹ ho&agrave;n to&agrave;n. Việc b&uacute; mẹ nếu được k&eacute;o d&agrave;i trong 2 năm đầu đời th&igrave; kh&ocirc;ng c&ograve;n g&igrave; tuyệt vời bằng. Nhưng khi trẻ ở độ tuổi lớn hơn, mẹ kh&ocirc;ng c&ograve;n sữa, th&igrave; việc lựa chọn những d&ograve;ng sữa c&oacute; c&ocirc;ng thức th&agrave;nh phần giống với sữa mẹ, gi&uacute;p trẻ ph&aacute;t triển tr&iacute; n&atilde;o l&agrave; v&ocirc; c&ugrave;ng cần thiết. Vậy, trong sữa tốt cho sự ph&aacute;t triển tr&iacute; n&atilde;o của trẻ cần c&oacute; những dưỡng chất quan trọng n&agrave;o?</p>\n<p dir=\"ltr\"><img src=\"https://suahoanggia.vn/uploaded/images/sua-cho-tre-8-tuoi-phat-trien-tri-nao-01.jpg\" alt=\"Sữa ph&aacute;t triển tr&iacute; n&atilde;o cho b&eacute; 8 tuổi cần c&oacute; &ldquo;dưỡng chất v&agrave;ng&rdquo; n&agrave;o?\"></p>\n<p dir=\"ltr\"><strong>Vitamin E, D, A</strong></p>\n<p dir=\"ltr\">C&aacute;c nghi&ecirc;n cứu khoa học cũng chứng minh được rằng nguồn vitamin E tự nhi&ecirc;n tập trung h&agrave;m lượng lớn ở những v&ugrave;ng n&atilde;o li&ecirc;n quan đến khả năng ghi nhớ, thị gi&aacute;c v&agrave; khả năng ng&ocirc;n ngữ.</p>\n<p dir=\"ltr\"><strong>Lutein</strong></p>\n<p dir=\"ltr\">Đ&acirc;y l&agrave; một hợp chất Carotenoid được chứng minh l&agrave; tồn tại nhiều nhất trong n&atilde;o v&agrave; điểm v&agrave;ng của mắt. Cholin</p>\n<p dir=\"ltr\">Với t&aacute;c dụng tăng khả năng ghi nhớ v&igrave; đ&acirc;y ch&iacute;nh l&agrave; nguồn cung cấp gốc methyl để tạo Lipoprotein &ndash; chất dẫn truyền thần kinh quan trọng h&agrave;ng đầu trong n&atilde;o bộ của trẻ. Trong sữa mẹ, Lutein, vitamin E tự nhi&ecirc;n v&agrave; DHA được kết hợp với tỷ lệ ho&agrave;n hảo, ph&ugrave; hợp với từng b&eacute; n&ecirc;n c&oacute; thể hỗ trợ hệ thần kinh ph&aacute;t triển một c&aacute;ch tối ưu.</p>\n<p dir=\"ltr\"><strong>DHA, ARA</strong></p>\n<p dir=\"ltr\">Nh&oacute;m axit b&eacute;o kh&ocirc;ng no DHA, ARA l&agrave; th&agrave;nh phần ch&iacute;nh x&acirc;y dựng n&atilde;o bộ v&agrave; v&otilde;ng mạc mắt của b&eacute;. Trong đ&oacute;, DHA ch&iacute;nh l&agrave; th&agrave;nh phần kh&ocirc;ng thể thiếu trong cả v&otilde;ng mạc, vỏ n&atilde;o v&agrave; hệ thần kinh trung ương. C&ograve;n ARA (arachidonic acid) lại l&agrave; một loại a-xit b&eacute;o kh&ocirc;ng sinh cholesterol. Đ&acirc;y cũng l&agrave; loại axit b&eacute;o omega-6 c&oacute; vai tr&ograve; chủ chốt trong việc h&igrave;nh th&agrave;nh, ho&agrave;n thiện v&agrave; ph&aacute;t triển hệ thần kinh trung ương của trẻ.</p>\n<p dir=\"ltr\">Trẻ em Mỹ ti&ecirc;u thụ trung b&igrave;nh từ 30mg đến 50mg DHA mỗi ng&agrave;y bằng việc uống sữa bổ sung v&agrave; ăn c&aacute;c thực phẩm gi&agrave;u DHA. Ch&iacute;nh v&igrave; thế, trẻ em tại Việt Nam cũng cần phải cung cấp đầy đủ lượng sữa c&oacute; th&agrave;nh phần DHA để ho&agrave;n thiện tr&iacute; n&atilde;o v&agrave; tăng chỉ số IQ.</p>\n<p dir=\"ltr\"><strong>Vitamin v&agrave; chất xơ</strong></p>\n<p dir=\"ltr\">Vitamin v&agrave; chất xơ c&oacute; vai tr&ograve; th&uacute;c đẩy sự th&egrave;m ăn ở trẻ, hỗ trợ qu&aacute; tr&igrave;nh chuyển h&oacute;a năng lượng, hấp thu c&aacute;c dưỡng chất cần thiết gi&uacute;p trẻ ăn ngon miệng, c&oacute; hệ ti&ecirc;u h&oacute;a khỏe mạnh, tăng cường sức đề kh&aacute;ng, tăng c&acirc;n hợp l&yacute; v&agrave; ph&aacute;t triển một c&aacute;ch to&agrave;n diện.</p>', 'posts/August2023/AtdZpgKZnIYhgwUc7HWF.jpg', 'dau-la-sua-phat-trien-tri-nao-cho-be-8-tuoi-tot-nhat-tren-thi-truong-hien-nay', '', '', 'PUBLISHED', 0, '2023-08-27 20:38:23', '2023-09-11 02:22:16', 28),
(14, 1, 3, 'THÔNG BÁO TUYỂN ĐẠI LÝ', '', 'Thông báo về việc tuyển đại lý phân phối sản phẩm sữa ARLA chất lượng cao. Chúng tôi mời các đơn vị và cá nhân quan tâm đáp ứng yêu cầu sau đây và tham gia cùng chúng tôi trong hành trình cung cấp sản phẩm sữa tươi và bột ARLA đến tay người tiêu dùng tại thị trường miền Bắc.', '<p>TH&Ocirc;NG B&Aacute;O TUYỂN ĐẠI L&Yacute; SỮA ARLA</p>\n<p>C&ocirc;ng ty Cổ phần Anh Ph&uacute; Cường - đại diện cho sản phẩm sữa ARLA tại khu vực miền Bắc, th&ocirc;ng b&aacute;o về việc tuyển đại l&yacute; ph&acirc;n phối sản phẩm sữa ARLA chất lượng cao. Ch&uacute;ng t&ocirc;i mời c&aacute;c đơn vị v&agrave; c&aacute; nh&acirc;n quan t&acirc;m đ&aacute;p ứng y&ecirc;u cầu sau đ&acirc;y v&agrave; tham gia c&ugrave;ng ch&uacute;ng t&ocirc;i trong h&agrave;nh tr&igrave;nh cung cấp sản phẩm sữa tươi v&agrave; bột ARLA đến tay người ti&ecirc;u d&ugrave;ng tại thị trường miền Bắc.</p>\n<p>Y&ecirc;u cầu Đại l&yacute; ARLA:</p>\n<ol>\n<li>Cam kết chất lượng: Đội ngũ đại l&yacute; cần cam kết cung cấp sản phẩm ARLA chất lượng, kh&ocirc;ng đổi, v&agrave; đảm bảo vệ sinh an to&agrave;n thực phẩm.</li>\n<li>Hiểu biết về sản phẩm: C&aacute;c đại l&yacute; cần c&oacute; kiến thức cơ bản về sản phẩm sữa ARLA, ưu điểm v&agrave; c&aacute;ch sử dụng để tư vấn cho kh&aacute;ch h&agrave;ng một c&aacute;ch chuy&ecirc;n nghiệp.</li>\n<li>Khả năng ph&acirc;n phối: Đại l&yacute; cần c&oacute; khả năng ph&acirc;n phối sản phẩm đến c&aacute;c cửa h&agrave;ng, si&ecirc;u thị, nh&agrave; h&agrave;ng, v&agrave; c&aacute;c địa điểm ti&ecirc;u d&ugrave;ng kh&aacute;c tr&ecirc;n địa b&agrave;n miền Bắc.</li>\n<li>Kỹ năng giao tiếp v&agrave; hợp t&aacute;c: C&oacute; khả năng giao tiếp tốt, thương lượng gi&aacute; cả v&agrave; điều khoản hợp đồng một c&aacute;ch c&ocirc;ng bằng. Sẵn s&agrave;ng hợp t&aacute;c với c&ocirc;ng ty để tạo dựng mối quan hệ thương mại bền vững.</li>\n</ol>\n<p>Quyền lợi của Đại l&yacute; ARLA:</p>\n<ol>\n<li>Sản phẩm uy t&iacute;n: Đại l&yacute; sẽ đại diện cho một thương hiệu sữa danh tiếng với lịch sử l&acirc;u đời v&agrave; chất lượng được c&ocirc;ng nhận.</li>\n<li>Hỗ trợ kỹ thuật: Ch&uacute;ng t&ocirc;i cung cấp hỗ trợ kỹ thuật, đ&agrave;o tạo sản phẩm, v&agrave; tư vấn marketing để đảm bảo sự th&agrave;nh c&ocirc;ng của bạn.</li>\n<li>Lợi nhuận hấp dẫn: Đại l&yacute; sẽ c&oacute; cơ hội kiếm lợi nhuận hấp dẫn từ việc ph&acirc;n phối sản phẩm ARLA tại miền Bắc.</li>\n</ol>\n<p>Li&ecirc;n hệ v&agrave; nộp đơn:</p>\n<p>C&aacute;c đơn vị v&agrave; c&aacute; nh&acirc;n quan t&acirc;m vui l&ograve;ng gửi th&ocirc;ng tin qua form <a href=\"https://demophucuong.kennatech.vn/contact\">tại đ&acirc;y</a>.</p>\n<p>C&ocirc;ng ty Cổ phần Anh Ph&uacute; Cường<br>Địa chỉ: Số 8, T&ocirc;n Thất Thuyết, Mỹ Đ&igrave;nh 2, Nam Từ Li&ecirc;m, H&agrave; Nội<br>Số điện thoại: 19008285<br>Email:&nbsp;contact@hallobaby.vn</p>\n<p>Ch&uacute;ng t&ocirc;i rất mong đ&oacute;n ch&agrave;o sự tham gia của c&aacute;c bạn để c&ugrave;ng x&acirc;y dựng sự thịnh vượng cho thương hiệu sữa ARLA tại miền Bắc.</p>', 'posts/September2023/QLEQH5sOpDZjdHbN7aoc.png', 'thong-bao-tuyen-dai-ly', '', '', 'PUBLISHED', 0, '2023-08-31 02:04:02', '2023-09-12 00:30:39', 6),
(15, 1, 1, '5 lý do mẹ nên chọn sữa bột cao cấp cho trẻ trên 1 tuổi', '5 lý do mẹ nên chọn sữa bột cao cấp cho trẻ trên 1 tuổi', 'Khi trẻ bắt đầu vào giai đoạn ăn dặm, việc đảm bảo cung cấp đầy đủ dưỡng chất thông qua khẩu phần ăn hằng ngày không phải là một điều dễ dàng. Các mẹ thường xuyên phải cân bằng dưỡng chất đồng thời phải đa dạng các món ăn để trẻ hấp thu tốt. Tuy nhiên tình trạng biếng ăn thường gặp ở trẻ luôn chực chờ và gây ra tình trạng thiếu dưỡng chất. Vì thế việc lựa chọn sữa bột cho trẻ là giải pháp bổ sung dưỡng chất vô cùng hiệu quả và thuận lợi.', '<p>1. Lựa chọn sữa bột chất lượng cao thuận tiện cho việc chăm s&oacute;c b&eacute;</p>\n<p>Khi d&ugrave;ng sữa bột chất lượng cao cho trẻ việc chăm s&oacute;c trẻ sẽ trở n&ecirc;n thuận tiện hơn cho mẹ. Cha mẹ hay bất k&igrave; người lớn n&agrave;o cũng c&oacute; thể chăm s&oacute;c trẻ, cho trẻ b&uacute; b&igrave;nh v&agrave;o bất kỳ thời gian n&agrave;o, gi&uacute;p giảm &aacute;p lực việc chăm s&oacute;c con cho mẹ, b&eacute; lại l&agrave;m quen được với sự chăm s&oacute;c của c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh. V&agrave; việc chuẩn bị bữa ăn cho b&eacute; cũng trở n&ecirc;n đơn giản, dễ d&agrave;ng hơn.</p>\n<p>2. Hỗ trợ tốt nhất cho hệ ti&ecirc;u h&oacute;a của trẻ</p>\n<p>Trẻ nhỏ, hệ ti&ecirc;u h&oacute;a c&ograve;n rất non yếu v&agrave; dễ bị t&aacute;c động, v&igrave; vậy mẹ cần chọn sữa bột chất lượng cao cho b&eacute; để đảm bảo hệ ti&ecirc;u h&oacute;a của b&eacute; được hỗ trợ tốt nhất. Những sản phẩm sữa cao cấp kh&ocirc;ng g&acirc;y ra những t&igrave;nh trạng về ti&ecirc;u h&oacute;a như t&aacute;o b&oacute;n, n&ocirc;n trớ hay ti&ecirc;u chảy m&agrave; gi&uacute;p b&eacute; hấp thu tốt hơn, tăng cường miễn dịch v&agrave; gi&uacute;p b&eacute; tăng c&acirc;n đều đặn.</p>\n<p>3. Gi&uacute;p b&eacute; ph&aacute;t triển tốt</p>\n<p>Việc sử dụng sữa bột cao cấp cho trẻ tr&ecirc;n một tuổi sẽ l&agrave; nguồn bổ sung nhiều dưỡng chất quan trọng cần thiết cho sự ph&aacute;t triển của trẻ cả về thể chất v&agrave; tr&iacute; n&atilde;o. Những sản phẩm sữa cao cấp lu&ocirc;n bổ sung những dưỡng chất quan trọng như vitamin A, C, D, K, E v&agrave; c&aacute;c vi chất như canxi, sắt, natri, optipro, protein, DHA, ARA.</p>\n<p>4. Gi&uacute;p b&eacute; tăng c&acirc;n đều</p>\n<p>Nguồn dinh dưỡng hằng ng&agrave;y ch&iacute;nh l&agrave; nguồn cung cấp năng lượng để trẻ tăng c&acirc;n v&agrave; ph&aacute;t triển chiều cao. Tuy nhi&ecirc;n kh&ocirc;ng phải trẻ n&agrave;o cũng hứng th&uacute; với những thực phẩm hằng ng&agrave;y, v&agrave; nhiều trẻ biếng ăn dẫn đến t&igrave;nh trạng sụt c&acirc;n hay kh&ocirc;ng thay đổi c&acirc;n nặng t&iacute;ch cực theo sự ph&aacute;t triển của cơ thể. Nhưng sữa bột cao cấp vừa c&oacute; t&aacute;c dụng hỗ trợ hệ ti&ecirc;u h&oacute;a, vừa bổ sung lượng dưỡng chất lớn để tăng cường khả năng hấp thu gi&uacute;p trẻ tăng c&acirc;n đều, ph&aacute;t triển tốt về thể lực v&agrave; tr&iacute; tuệ.</p>\n<p>5. An t&acirc;m về chất lượng sản phẩm</p>\n<p>V&agrave; l&yacute; do v&ocirc; c&ugrave;ng quan trọng m&agrave; c&aacute;c mẹ n&ecirc;n chọn sữa bột cao cấp cho c&aacute;c b&eacute; đ&oacute; ch&iacute;nh l&agrave; an t&acirc;m về chất lượng sản phẩm. Tr&ecirc;n thị trường hiện nay c&oacute; v&ocirc; số c&aacute;c sản phẩm sữa bột d&agrave;nh cho trẻ em, tuy nhi&ecirc;n c&aacute;c mẹ n&ecirc;n thận trọng, v&agrave; kiểm tra kỹ lưỡng để chọn được những sản phẩm tốt nhất. Kh&ocirc;ng n&ecirc;n chỉ tập trung ch&uacute; &yacute; về gi&aacute; cả sản phẩm m&agrave; quan trọng h&atilde;y ch&uacute; &yacute; đến th&agrave;nh phần dưỡng chất v&agrave; nguồn gốc xuất xứ của sản phẩm.</p>', 'posts/September2023/UjyUeY6lo46AT5UPaook.png', '5-ly-do-me-nen-chon-sua-bot-cao-cap-cho-tre-tren-1-tuoi', 'Khi trẻ bắt đầu vào giai đoạn ăn dặm, việc đảm bảo cung cấp đầy đủ dưỡng chất thông qua khẩu phần ăn hằng ngày không phải là một điều dễ dàng. Các mẹ thường xuyên phải cân bằng dưỡng chất đồng thời phải đa dạng các món ăn để trẻ hấp thu tốt. Tuy nhiên tình trạng biếng ăn thường gặp ở trẻ luôn chực chờ và gây ra tình trạng thiếu dưỡng chất. Vì thế việc lựa chọn sữa bột cho trẻ là giải pháp bổ sung dưỡng chất vô cùng hiệu quả và thuận lợi.', '', 'PUBLISHED', 0, '2023-09-07 00:59:21', '2023-09-08 02:03:49', 2),
(16, 1, 1, 'Nên cho bé uống sữa công thức đến mấy tuổi?', 'Nên cho bé uống sữa công thức đến mấy tuổi?', 'Trẻ nên uống sữa công thức đến mấy tuổi là thắc mắc của nhiều cha mẹ vì hiện nay trên thị trường có rất nhiều loại sữa công thức khác nhau và có thể được dùng đến khi trẻ 6 tuổi. Để biết nên cho bé uống sữa công thức đến mấy tuổi, trước tiên cần tìm hiểu sữa công thức là gì, dùng sữa công thức trong trường hợp nào và dùng bao nhiêu?', '<p><em>Trẻ n&ecirc;n uống sữa c&ocirc;ng thức đến mấy tuổi l&agrave; thắc mắc của nhiều cha mẹ v&igrave; hiện nay tr&ecirc;n thị trường c&oacute; rất nhiều loại sữa c&ocirc;ng thức kh&aacute;c nhau v&agrave; c&oacute; thể được d&ugrave;ng đến khi trẻ 6 tuổi. Để biết n&ecirc;n cho b&eacute; uống sữa c&ocirc;ng thức đến mấy tuổi, trước ti&ecirc;n cần t&igrave;m hiểu sữa c&ocirc;ng thức l&agrave; g&igrave;, d&ugrave;ng sữa c&ocirc;ng thức trong trường hợp n&agrave;o v&agrave; d&ugrave;ng bao nhi&ecirc;u?</em></p>\n<p>1. Sữa c&ocirc;ng thức l&agrave; g&igrave;?<br>Sữa c&ocirc;ng thức hay c&ograve;n gọi l&agrave; sữa bột (tiếng Anh l&agrave; baby formula) l&agrave; sản phẩm d&ugrave;ng cho trẻ sơ sinh dưới 12 th&aacute;ng tuổi. C&aacute;c nh&agrave; khoa học đ&atilde; nghi&ecirc;n cứu v&agrave; t&igrave;m ra c&ocirc;ng thức h&oacute;a học của loại sữa n&agrave;y sao cho gần giống với sữa mẹ nhất. Sữa c&ocirc;ng thức c&oacute; thể d&ugrave;ng thay thế cho sữa mẹ một phần hoặc ho&agrave;n to&agrave;n.</p>\n<p>D&ograve;ng sữa c&ocirc;ng thức c&oacute; thể thay thế ho&agrave;n to&agrave;n sữa mẹ d&agrave;nh cho trẻ dưới 6 th&aacute;ng tuổi c&oacute; th&agrave;nh phần dinh dưỡng gần giống với sữa mẹ nhất, để đảm bảo cung cấp đầy đủ những dưỡng chất cần thiết cho trẻ, đ&oacute; l&agrave; sữa c&ocirc;ng thức 1. D&ograve;ng sản phẩm n&agrave;y được sản xuất dưới nhiều dạng kh&aacute;c nhau như sữa bột (d&ugrave;ng để pha với nước), sữa nước (c&oacute; thể pha với một lượng nước theo y&ecirc;u cầu) v&agrave; sữa nước d&ugrave;ng được ngay (kh&ocirc;ng cần pha th&ecirc;m nước hay qua c&aacute;c bước chế biến).</p>\n<p>2. Cho trẻ uống sữa c&ocirc;ng thức trong trường hợp n&agrave;o?<br>Sữa mẹ l&agrave; rất tốt đối với trẻ sơ sinh v&agrave; trẻ nhỏ. Trẻ phải được b&uacute; sữa mẹ ho&agrave;n to&agrave;n trong &iacute;t nhất 6 th&aacute;ng đầu đời để ph&aacute;t triển cả về thể chất lẫn tinh thần. Ở nh&oacute;m trẻ kh&ocirc;ng được b&uacute; sữa mẹ, tỉ lệ bị suy dinh dưỡng thể thấp c&ograve;i v&agrave; mắc c&aacute;c bệnh như suyễn, ch&agrave;m, dị ứng, b&eacute;o ph&igrave;, tiểu đường type 1, ... cao hơn.</p>\n<p>Hiện nay, với sự ph&aacute;t triển của y học, sữa c&ocirc;ng thức 1 với th&agrave;nh phần dưỡng chất gần tương đương với sữa mẹ c&oacute; thể được d&ugrave;ng cho trẻ sơ sinh dưới 6 th&aacute;ng tuổi trong trường hợp trẻ kh&ocirc;ng được b&uacute; sữa mẹ ho&agrave;n to&agrave;n.</p>\n<p>Lượng sữa c&ocirc;ng thức được khuyến c&aacute;o cho trẻ sơ sinh dưới 6 th&aacute;ng tuổi cụ thể như sau:</p>\n<ul>\n<li>Dưới 1 th&aacute;ng tuổi: Trẻ b&uacute; khoảng 60ml/ lần, cho trẻ b&uacute; từ 8 - 10 lần/ ng&agrave;y v&agrave; tổng lượng sữa trong ng&agrave;y l&agrave; khoảng 480ml.</li>\n<li>Từ 1 - 2 th&aacute;ng tuổi: Trẻ b&uacute; khoảng 90ml/ lần, cho trẻ b&uacute; từ 7 - 10 lần/ ng&agrave;y v&agrave; tổng lượng sữa trong ng&agrave;y l&agrave; khoảng 630ml.</li>\n<li>Từ 2 - 4 th&aacute;ng tuổi: Trẻ b&uacute; khoảng 120ml/ lần, cho trẻ b&uacute; từ 6 - 10 lần/ng&agrave;y v&agrave; tổng lượng sữa trong ng&agrave;y l&agrave; khoảng 720ml.</li>\n<li>Từ 4 - 6 th&aacute;ng tuổi: Trẻ b&uacute; khoảng 150ml/ lần, cho trẻ b&uacute; từ 6 - 8 lần/ ng&agrave;y v&agrave; tổng lượng sữa trong ng&agrave;y l&agrave; khoảng 900ml.</li>\n</ul>\n<p>3. N&ecirc;n cho b&eacute; uống sữa c&ocirc;ng thức đến mấy tuổi?<br>C&oacute; 2 d&ograve;ng sữa c&ocirc;ng thức d&agrave;nh cho trẻ sơ sinh dưới 12 th&aacute;ng tuổi, đ&oacute; l&agrave; sữa c&ocirc;ng thức 1 d&agrave;nh cho trẻ từ 0 đến 6 th&aacute;ng tuổi v&agrave; sữa c&ocirc;ng thức 2 d&agrave;nh cho trẻ từ 6 đến 12 th&aacute;ng tuổi.</p>\n<p>Đặc điểm của sữa c&ocirc;ng thức 1 l&agrave; c&oacute; th&agrave;nh phần v&agrave; tỷ lệ c&aacute;c chất dinh dưỡng tương đương với sữa mẹ, ph&ugrave; hợp với khả năng hấp thu v&agrave; chuyển h&oacute;a của cơ thể trẻ trong giai đoạn n&agrave;y để kh&ocirc;ng ảnh hưởng đến hệ ti&ecirc;u h&oacute;a của trẻ.</p>\n<p>Kh&ocirc;ng được d&ugrave;ng sữa c&ocirc;ng thức 2 hay c&aacute;c loại sữa bột nguy&ecirc;n kem, sữa tươi, sữa đặc cho trẻ dưới 6 th&aacute;ng tuổi v&igrave; hệ ti&ecirc;u h&oacute;a của trẻ c&ograve;n non yếu, chưa ti&ecirc;u h&oacute;a được sữa tươi ho&agrave;n to&agrave;n.</p>\n<p>N&ecirc;n chuyển sang sữa c&ocirc;ng thức 2 khi trẻ được 6 th&aacute;ng tuổi. Đặc điểm của sữa c&ocirc;ng thức 2 l&agrave; th&agrave;nh phần v&agrave; h&agrave;m lượng c&aacute;c chất dinh dưỡng cao hơn so với sữa c&ocirc;ng thức 1. Đặc biệt l&agrave; chất đạm, ph&ugrave; hợp với sự ph&aacute;t triển v&agrave; tăng trưởng của trẻ trong giai đoạn n&agrave;y. Nếu vẫn cho trẻ uống sữa c&ocirc;ng thức 1 th&igrave; c&oacute; thể kh&ocirc;ng đảm bảo được lượng dinh dưỡng cần thiết cho trẻ.</p>\n<p>Tuy nhi&ecirc;n, trẻ dưới 12 th&aacute;ng tuổi vẫn chưa được d&ugrave;ng sữa tươi v&igrave; l&uacute;c n&agrave;y hệ ti&ecirc;u h&oacute;a của trẻ vẫn đang trong giai đoạn ho&agrave;n thiện. Sữa tươi với h&agrave;m lượng đạm v&agrave; c&aacute;c chất kho&aacute;ng cao, c&oacute; thể ảnh hưởng đến thận của trẻ v&agrave; g&acirc;y thiếu sắt. H&agrave;m lượng chất b&eacute;o trong sữa tươi cũng kh&ocirc;ng ph&ugrave; hợp cho trẻ dưới 1 tuổi.</p>\n<p>Từ 1 tuổi trở đi, c&oacute; thể cho trẻ d&ugrave;ng sữa tươi hoặc c&aacute;c loại sữa c&oacute; h&agrave;m lượng chất b&eacute;o ph&ugrave; hợp v&agrave; đảm bảo cho trẻ 1 chế độ ăn c&acirc;n bằng, đầy đủ c&aacute;c dưỡng chất cần thiết.</p>\n<p>Cần lưu &yacute; lượng sữa cho trẻ từ 1 tuổi trở l&ecirc;n tối đa l&agrave; 1.000ml/ ng&agrave;y để kh&ocirc;ng l&agrave;m dư năng lượng v&agrave; để trẻ c&oacute; cảm gi&aacute;c th&egrave;m ăn những loại thức ăn kh&aacute;c. B&ecirc;n cạnh đ&oacute;, cũng kh&ocirc;ng n&ecirc;n cho trẻ d&ugrave;ng sữa &iacute;t b&eacute;o hoặc sữa t&aacute;ch b&eacute;o dưới 2 tuổi v&igrave; trẻ trong giai đoạn n&agrave;y vẫn cần một lượng chất b&eacute;o cao, trừ trường hợp trẻ bị thừa c&acirc;n, b&eacute;o ph&igrave;, tăng huyết &aacute;p hoặc bệnh tim bẩm sinh.</p>\n<p>Từ 2 tuổi trở đi, để biết sử dụng loại sữa n&agrave;o ph&ugrave; hợp cho trẻ, cha mẹ n&ecirc;n tham khảo &yacute; kiến tư vấn của b&aacute;c sĩ chuy&ecirc;n khoa dinh dưỡng. Nhưng cần nhớ rằng, sữa mẹ lu&ocirc;n l&agrave; sự lựa chọn tốt nhất cho trẻ sơ sinh v&agrave; trẻ nhỏ dưới 2 tuổi.</p>\n<p>Khi lựa chọn sữa c&ocirc;ng thức cho con, nhiều bậc phụ huynh quan t&acirc;m n&ecirc;n cho b&eacute; uống sữa c&ocirc;ng thức đến mấy tuổi. Thực tế, sữa c&ocirc;ng thức l&agrave; d&agrave;nh cho trẻ sơ sinh v&agrave; trẻ dưới 12 th&aacute;ng tuổi khi trẻ kh&ocirc;ng được b&uacute; sữa mẹ. Từ 12 th&aacute;ng tuổi, trẻ c&oacute; thể uống được sữa tươi kết hợp với chế độ ăn c&acirc;n bằng để đảm bảo sự ph&aacute;t triển sự to&agrave;n diện sau n&agrave;y.</p>', 'posts/September2023/fwPe2ArVwM0YcQyrAIwI.png', 'nen-cho-be-uong-sua-cong-thuc-den-may-tuoi', 'Trẻ nên uống sữa công thức đến mấy tuổi là thắc mắc của nhiều cha mẹ vì hiện nay trên thị trường có rất nhiều loại sữa công thức khác nhau và có thể được dùng đến khi trẻ 6 tuổi. Để biết nên cho bé uống sữa công thức đến mấy tuổi, trước tiên cần tìm hiểu sữa công thức là gì, dùng sữa công thức trong trường hợp nào và dùng bao nhiêu?', '', 'PUBLISHED', 0, '2023-09-07 01:02:13', '2023-09-08 02:02:15', NULL);
INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`, `view`) VALUES
(17, 1, 1, 'Nên cho bé uống sữa công thức đến mấy tuổi? Muộn nhất là khi nào?', 'Nên cho bé uống sữa công thức đến mấy tuổi? Muộn nhất là khi nào?', 'Trong trường hợp nguồn sữa mẹ bị hạn chế thì sữa công thức là sự lựa chọn thay thế tốt nhất. Tuy nhiên, những bà mẹ mới có em bé lần đầu tiên vẫn thắc mắc nên cho bé uống sữa công thức đến mấy tuổi. Hãy cùng AVAKids giải đáp thắc mắc qua bài viết dưới đây nhé!', '<p><em>Trong trường hợp nguồn sữa mẹ bị hạn chế th&igrave; sữa c&ocirc;ng thức l&agrave; sự lựa chọn thay thế tốt nhất. Tuy nhi&ecirc;n, những b&agrave; mẹ mới c&oacute; em b&eacute; lần đầu ti&ecirc;n vẫn thắc mắc n&ecirc;n cho b&eacute; uống sữa c&ocirc;ng thức đến mấy tuổi. H&atilde;y c&ugrave;ng AVAKids giải đ&aacute;p thắc mắc qua b&agrave;i viết dưới đ&acirc;y nh&eacute;!</em></p>\n<p>1. N&ecirc;n cho b&eacute; d&ugrave;ng sữa c&ocirc;ng thức khi n&agrave;o? Dấu hiệu cho thấy trẻ cần bổ sung sữa c&ocirc;ng thức</p>\n<p>Sữa c&ocirc;ng thức (t&ecirc;n tiếng Anh l&agrave; Baby formula) hay sữa bột cho b&eacute; l&agrave; sản phẩm sữa từ động vật được xử l&yacute; v&agrave; bổ sung th&ecirc;m c&aacute;c chất dinh dưỡng cần thiết cho cơ thể th&ocirc;ng qua c&aacute;c d&acirc;y chuyền sản xuất như protein, carbohydrate, chất b&eacute;o, canxi, chất kho&aacute;ng,&hellip;</p>\n<p>Sữa c&ocirc;ng thức l&agrave; phương &aacute;n thay thế để l&agrave;m thức ăn cho trẻ sơ sinh v&agrave; trẻ nhỏ. V&igrave; c&oacute; th&agrave;nh phần giống với sữa mẹ, n&ecirc;n c&aacute;c mẹ c&oacute; thể sử dụng sữa c&ocirc;ng thức để thay thế một phần hoặc ho&agrave;n to&agrave;n cho sữa mẹ.</p>\n<p>C&aacute;c trường hợp cần cho trẻ uống sữa c&ocirc;ng thức:</p>\n<ul>\n<li>Mẹ gặp vấn đề về sức khoẻ, kh&ocirc;ng thể cho trẻ b&uacute;: Trong trường hợp mẹ mắc phải một số vấn đề về tuyến v&uacute; hay một số bệnh l&yacute; phải d&ugrave;ng thuốc v&agrave; kh&ocirc;ng c&oacute; sữa để cung cấp cho b&eacute;, mẹ c&oacute; thể d&ugrave;ng sữa c&ocirc;ng thức để thay thế.</li>\n<li>Mẹ kh&ocirc;ng đủ lượng sữa cho trẻ: Nếu mẹ kh&ocirc;ng thể tiết đủ sữa cho b&eacute; hoặc từng phẫu thuật ngực th&igrave; c&oacute; khả năng mẹ kh&ocirc;ng c&oacute; đủ lượng sữa để đ&aacute;p ứng đủ nhu cầu của con. V&igrave; vậy, mẹ c&oacute; thể cho con b&uacute; th&ecirc;m sữa c&ocirc;ng thức.</li>\n<li>Muốn bổ sung th&ecirc;m c&aacute;c th&agrave;nh phần dinh dưỡng kh&aacute;c cho trẻ: V&igrave; sữa c&ocirc;ng thức chứa nhiều th&agrave;nh phần dinh dưỡng m&agrave; sữa mẹ kh&ocirc;ng c&oacute;, mẹ c&oacute; thể cho con uống xen kẽ sữa c&ocirc;ng thức để đảm bảo cơ thể con c&oacute; đầy đủ chất dinh dưỡng.</li>\n<li>Hỗ trợ th&uacute;c đẩy sự ph&aacute;t triển của trẻ trong giai đoạn thanh thiếu ni&ecirc;n: Để con ph&aacute;t triển nhanh về cả chiều cao lẫn c&acirc;n nặng, mẹ n&ecirc;n bổ sung th&ecirc;m cho con sữa c&ocirc;ng thức chứa nhiều kho&aacute;ng chất v&agrave; canxi.</li>\n<li>Sữa c&ocirc;ng thức l&agrave; sự lựa chọn cần thiết cho trẻ sinh non hoặc c&oacute; bệnh l&yacute; đặc biệt để gi&uacute;p b&eacute; tăng c&acirc;n.</li>\n<li>Trẻ đi tiểu &iacute;t, mỗi ng&agrave;y mẹ thay t&atilde; ướt cho con dưới 6 lần.</li>\n<li>Trẻ quấy kh&oacute;c v&agrave; đ&oacute;i bụng ngay sau khi vừa được b&uacute; mẹ.</li>\n<li>Mẹ kh&ocirc;ng thể ở gần con li&ecirc;n tục, v&iacute; dụ như phải đi l&agrave;m sớm, l&uacute;c n&agrave;y sẽ cần cho b&eacute; uống th&ecirc;m sữa c&ocirc;ng thức.</li>\n<li>Nếu như mẹ sinh đ&ocirc;i hoặc ba, sữa mẹ sẽ kh&ocirc;ng đủ cho c&aacute;c b&eacute;, vậy n&ecirc;n cần cho b&eacute; uống th&ecirc;m c&aacute;c loại sữa c&ocirc;ng thức.</li>\n<li>Mẹ muốn ngủ nhiều hơn: Nhiều mẹ c&oacute; thể quen với việc dậy ban đ&ecirc;m để cho trẻ b&uacute;, nhưng đối một số người kh&aacute;c điều n&agrave;y rất kh&oacute;. Vậy n&ecirc;n, sữa c&ocirc;ng thức sẽ l&agrave; một sự lựa chọn tốt cho b&eacute; khi mẹ ngủ.</li>\n</ul>\n<p>2. N&ecirc;n cho b&eacute; uống sữa c&ocirc;ng thức đến mấy tuổi?</p>\n<p>Sữa bột 1 v&agrave; sữa bột 2 l&agrave; hai loại sữa ph&ugrave; hợp với em b&eacute; dưới 12 th&aacute;ng tuổi. Sữa c&ocirc;ng thức 1 d&agrave;nh cho trẻ từ l&uacute;c mới sinh đến khi 6 th&aacute;ng tuổi, c&ograve;n sữa c&ocirc;ng thức 2 d&agrave;nh cho trẻ từ 6 đến khi 1 năm tuổi.</p>\n<p>Trẻ sơ sinh c&oacute; thể uống sữa c&ocirc;ng thức trong 12 th&aacute;ng đầu đời. Bắt đầu từ 12 th&aacute;ng trở đi, c&aacute;c mẹ n&ecirc;n kết hợp th&ecirc;m nhiều loại thực phẩm kh&aacute;c, chẳng hạn như ch&aacute;o tươi, ngũ cốc, bột ăn dặm, b&aacute;nh ăn dặm cho b&eacute;,... Từ đ&oacute;, mẹ c&oacute; thể giảm hoặc cắt ho&agrave;n to&agrave;n sữa c&ocirc;ng thức.</p>\n<p>Nếu gia đ&igrave;nh c&oacute; điều kiện, bố mẹ c&oacute; thể cho con uống đến giai đoạn thanh thiếu ni&ecirc;n, hoặc chỉ cần cho b&eacute; uống sữa c&ocirc;ng thức đến 3 - 4 tuổi đều được. N&oacute;i chung, điều n&agrave;y phụ thuộc v&agrave;o quan điểm v&agrave; điều kiện kinh tế của mỗi gia đ&igrave;nh.</p>\n<p>Tr&ecirc;n thị trường hiện nay c&oacute; rất nhiều loại sữa cho mọi độ tuổi kh&aacute;c nhau d&agrave;nh cho mọi đối tượng, chẳng hạn sữa bầu, sữa bột cho b&eacute; 1 tuổi, sữa cho b&eacute; tr&ecirc;n hoặc dưới 1 tuổi, sữa cho người trung ni&ecirc;n, thanh thiếu ni&ecirc;n,... Do đ&oacute;, thực tế kh&ocirc;ng c&oacute; giới hạn số tuổi uống sữa c&ocirc;ng thức.</p>', 'posts/September2023/fE6vnM7c44DwwIXMvUyD.png', 'nen-cho-be-uong-sua-cong-thuc-den-may-tuoi-muon-nhat-la-khi-nao', 'Trong trường hợp nguồn sữa mẹ bị hạn chế thì sữa công thức là sự lựa chọn thay thế tốt nhất. Tuy nhiên, những bà mẹ mới có em bé lần đầu tiên vẫn thắc mắc nên cho bé uống sữa công thức đến mấy tuổi. Hãy cùng AVAKids giải đáp thắc mắc qua bài viết dưới đây nhé!', '', 'PUBLISHED', 0, '2023-09-07 01:07:03', '2023-09-08 19:47:22', 1),
(18, 1, 1, 'Sữa bột là gì? Thành phần và cách sử dụng sữa bột', 'Sữa bột là gì? Thành phần và cách sử dụng sữa bột', 'Sữa bột hiện nay là loại thực phẩm không thể thiếu trong các gia đình có trẻ sơ sinh và trẻ nhỏ. Vậy “Sữa bột là gì” và “Sữa bột làm từ gì?”, bài viết sẽ cung cấp các thông tin chi tiết nhất về vấn đề này. Hãy đọc để tìm hiểu kỹ thông tin nhé!', '<p><em>sữa bột l&agrave; sữa c&oacute; nguồn gốc từ động vật đ&atilde; qua c&aacute;c quy tr&igrave;nh xử l&yacute; như tiệt tr&ugrave;ng, sấy kh&ocirc; bằng phương ph&aacute;p bay hơi. Nhờ phương ph&aacute;p chế biến n&agrave;y sữa bột sẽ được giữ nguy&ecirc;n c&aacute;c dưỡng chất cần thiết cho trẻ v&agrave; thời gian bảo quản sẽ l&acirc;u hơn.</em></p>\n<p>Đối tượng sử dụng ch&iacute;nh của sữa c&ocirc;ng thức l&agrave; trẻ sơ sinh v&agrave; trẻ nhỏ. Đ&acirc;y được xem l&agrave; giải ph&aacute;p dinh dưỡng tuyệt vời cho con trong trường hợp mẹ kh&ocirc;ng đủ sữa hoặc mẹ kh&ocirc;ng c&oacute; sữa cho con b&uacute;</p>\n<p>Sữa c&ocirc;ng thức hay sữa bột được coi l&agrave; sản phẩm kh&ocirc;ng thể thiếu cho trẻ nhỏ hiện nay. Sữa c&ocirc;ng thức được m&ocirc; tả gần nhất với sữa mẹ để hỗ trợ, cung cấp c&aacute;c chất dinh dưỡng đầy đủ cho con. Sữa c&ocirc;ng thức lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu của c&aacute;c mẹ v&igrave; t&iacute;nh an to&agrave;n, hiệu quả v&agrave; tiện dụng m&agrave; n&oacute; đem lại. Một thức uống dinh dưỡng ngon l&agrave;nh m&agrave; lại v&ocirc; c&ugrave;ng đơn giản để chế biến.</p>\n<p><strong>Th&agrave;nh phần trong sữa bột d&agrave;nh cho trẻ sơ sinh v&agrave; trẻ nhỏ</strong><br>C&aacute;c loại sữa bột phải được kiểm tra gắt gao v&agrave; tu&acirc;n thủ rất nhiều quy định khắt khe từ kh&acirc;u sản xuất đến kh&acirc;u ph&acirc;n phối. Điều n&agrave;y đảm bảo cho chất lượng sữa lu&ocirc;n đạt c&aacute;c ti&ecirc;u chuẩn tốt nhất, chất lượng tuyệt đối v&agrave; an to&agrave;n khi sử dụng cho trẻ nhỏ. Vậy sữa bột l&agrave;m từ g&igrave;? N&oacute; c&oacute; thật sự tốt cho em b&eacute; kh&ocirc;ng?</p>\n<p>Viện nhi khoa Mỹ (AAP) đ&atilde; khẳng định sữa bột nhất định phải c&oacute; c&aacute;c th&agrave;nh phần dinh dưỡng như: Chất đạm, c&aacute;c loại vitamin v&agrave; kho&aacute;ng chất, acid linoleic, canxi&hellip;</p>\n<p><strong>Dưới đ&acirc;y l&agrave; một số th&agrave;nh phần nổi bật v&agrave; rất quan trọng với con c&oacute; trong sữa bột.</strong></p>\n<p><em>Canxi &ndash; Gi&uacute;p con c&oacute; một hệ xương chắc khỏe</em></p>\n<p>Canxi trong sữa dồi d&agrave;o<br>Sữa lu&ocirc;n được biết đến l&agrave; nguồn bổ sung canxi dồi d&agrave;o cho b&eacute;. Nhờ c&oacute; canxi gi&uacute;p con cao lớn v&agrave; c&oacute; một khung xương chắc chắn, khỏe mạnh. Canxi c&ograve;n l&agrave; một th&agrave;nh phần rất quan trọng tham gia cấu th&agrave;nh n&ecirc;n hệ thần kinh ở trẻ. Một trong những dấu hiệu cho thấy con thiếu canxi đ&oacute; l&agrave; việc con hay kh&oacute;c đ&ecirc;m, dễ bị giật m&igrave;nh v&agrave; thường xuy&ecirc;n c&aacute;u gắt.</p>\n<p><em>DHA &ndash; Tăng cường tr&iacute; n&atilde;o v&agrave; thị lực cho con</em></p>\n<p>Sữa bột chứ DHA gi&uacute;p tăng cường tr&iacute; n&atilde;o<br>Trong những năm th&aacute;ng đầu đời của con, DHA được t&igrave;m thấy nhiều ở v&otilde;ng mạc. Điều n&agrave;y cho thấy DHA đ&oacute;ng vai tr&ograve; rất lớn trong qu&aacute; tr&igrave;nh ho&agrave;n thiện thần kinh thị lực của con, ảnh hưởng trực tiếp đến chức năng nh&igrave;n của trẻ. Ngo&agrave;i ra DHA lu&ocirc;n l&agrave; chất rất cần thiết cho sự ph&aacute;t triển n&atilde;o bộ của con.</p>\n<p>C&aacute;c nghi&ecirc;n cứu đ&atilde; chứng minh rằng b&eacute; được bổ sung đủ DHA trong qu&aacute; tr&igrave;nh ph&aacute;t triển sẽ nhạy b&eacute;n v&agrave; c&oacute; chỉ số tr&iacute; tuệ (IQ) cao hơn những trẻ kh&ocirc;ng c&oacute; đủ DHA. C&aacute;c d&ograve;ng sữa c&ocirc;ng thức hiện nay cũng rất ch&uacute; trọng về vấn đề n&agrave;y, vậy n&ecirc;n c&aacute;c h&atilde;ng sữa lu&ocirc;n cố gắng tối ưu h&oacute;a c&ocirc;ng thức để đảm bảo con lu&ocirc;n c&oacute; đủ DHA để lớn l&ecirc;n thật th&ocirc;ng minh v&agrave; khỏe mạnh.</p>\n<p><em>Vitamin &ndash; Hỗ trợ tăng đề kh&aacute;ng cho con</em></p>\n<p>Sữa bột chứa vitamin gi&uacute;p b&eacute; tăng sức đề kh&aacute;ng<br>Vitamin đ&oacute;ng vai tr&ograve; như những chất x&uacute;c t&aacute;c m&agrave; cơ thể kh&ocirc;ng tự tổng hợp được. Do đ&oacute;, việc bổ sung Vitamin l&agrave; v&ocirc; c&ugrave;ng cần thiết. Tuy h&agrave;m lượng Vitamin trong cơ thể l&agrave; rất &iacute;t nhưng lại chi phối hoạt động sống của tất cả c&aacute;c cơ quan. Vitamin như một tấm l&aacute; chắn th&eacute;p của c&aacute;c tế b&agrave;o nhờ khả năng bảo vệ tế b&agrave;o khỏi sự tấn c&ocirc;ng của c&aacute;c t&aacute;c nh&acirc;n g&acirc;y nhiễm tr&ugrave;ng v&agrave; chữa l&agrave;nh c&aacute;c tế b&agrave;o bị thương.&nbsp;</p>\n<p><em>Thời điểm th&iacute;ch hợp để sử dụng sữa bột cho trẻ sơ sinh</em><br>Sữa l&agrave; loại thực phẩm gi&agrave;u dinh dưỡng cho trẻ nhưng nếu mẹ kh&ocirc;ng sử dụng đ&uacute;ng c&aacute;ch th&igrave; sẽ kh&ocirc;ng ph&aacute;t huy được hết c&ocirc;ng dụng của sữa. Dưới đ&acirc;y l&agrave; những gợi &yacute; về thời điểm d&ugrave;ng sữa hợp l&yacute; cho con:</p>\n<p>Sau ăn s&aacute;ng<br>Bữa s&aacute;ng l&agrave; bữa ăn quan trọng nhất trong ng&agrave;y v&igrave; n&oacute; cung cấp đến 30% năng lượng cho cơ thể. Ăn s&aacute;ng như một bước nạp năng lượng cho c&aacute;c cơ quan chức năng được k&iacute;ch hoạt để chạy trong cả ng&agrave;y d&agrave;i. Uống một cốc sữa ấm c&aacute;ch bữa ăn từ 1- 2 tiếng đồng hồ gi&uacute;p cho dạ d&agrave;y c&oacute; khả năng ph&acirc;n giải protein tốt hơn, nhờ đ&oacute; gi&uacute;p tăng khả năng ti&ecirc;u h&oacute;a ở trẻ.</p>\n<p>C&aacute;c nghi&ecirc;n cứu đ&atilde; cho thấy uống sữa trước khi ngủ gi&uacute;p cải thiện chất lượng giấc ngủ tốt hơn. C&aacute;c hợp chất Serotonin c&oacute; trong sữa l&agrave;m giảm căng thẳng v&agrave; giải ph&oacute;ng c&aacute;c hormone gi&uacute;p b&eacute; nhanh ch&igrave;m v&agrave;o giấc ngủ. Mẹ n&ecirc;n cho b&eacute; uống sữa trước khi đi ngủ khoảng 2 tiếng để tr&aacute;nh trường hợp trẻ bị kh&oacute; ti&ecirc;u dẫn đến rối loạn ti&ecirc;u h&oacute;a.</p>\n<p><em>Hướng dẫn mẹ c&aacute;ch pha sữa c&ocirc;ng thức cho trẻ sơ sinh v&agrave; trẻ nhỏ</em></p>\n<p>C&aacute;ch pha sữa c&ocirc;ng thức cho trẻ sơ sinh<br>Đối với c&aacute;c mẹ bỉm th&igrave; việc pha sữa cho con đ&atilde; trở th&agrave;nh những th&oacute;i quen thường ng&agrave;y. Để đảm bảo sữa lu&ocirc;n đạt chất lượng tốt nhất v&agrave; an to&agrave;n với trẻ th&igrave; mẹ cần lưu &yacute; c&aacute;c bước sau khi tiến h&agrave;nh pha sữa cho con.</p>\n<p>Xem kỹ hạn sử dụng được in tr&ecirc;n bao b&igrave; hộp sữa.<br>Trước khi pha sữa cho con mẹ lưu &yacute; phải rửa tay thật sạch v&agrave; lau kh&ocirc;.<br>Tiệt tr&ugrave;ng b&igrave;nh sữa v&agrave; c&aacute;c dụng cụ mẹ d&ugrave;ng để pha sữa cho trẻ.<br>Pha sữa cho trẻ theo tỉ lệ v&agrave; c&ocirc;ng thức được ghi tr&ecirc;n vỏ lon.<br>Chọn lựa loại sữa bột ph&ugrave; hợp cho b&eacute;<br>Sự đa dạng của c&aacute;c loại sữa bột hiện nay khiến c&aacute;c mẹ phải đau đầu mỗi khi nghĩ đến việc phải chọn sữa cho con.</p>\n<p>Dựa tr&ecirc;n lời khuy&ecirc;n của c&aacute;c chuy&ecirc;n gia dinh dưỡng, c&aacute;c mẹ n&ecirc;n xem x&eacute;t c&aacute;c ti&ecirc;u ch&iacute; sau để lựa chọn loại sữa ph&ugrave; hợp nhất cho con.</p>\n<p>Độ tuổi của con: Ở &nbsp;mỗi độ tuổi, nhu cầu dinh dưỡng của con lại tăng l&ecirc;n. Do đ&oacute;, mẹ cần đọc kĩ số th&aacute;ng tuổi quy định tr&ecirc;n vỏ lon sữa để c&oacute; thể chọn đ&uacute;ng loại sữa cho con m&igrave;nh.</p>\n<p>Nguồn gốc v&agrave; th&agrave;nh phần của sữa: &ldquo;Sữa bột l&agrave;m từ g&igrave;?&rdquo; l&agrave; c&acirc;u hỏi mẹ cần ch&uacute; &yacute; mỗi khi c&acirc;n nhắc chọn sữa bột. Mỗi loại sữa đều c&oacute; c&aacute;c c&ocirc;ng thức ri&ecirc;ng v&agrave; sự ph&ugrave; hợp của mỗi đứa trẻ l&agrave; kh&aacute;c nhau. Do đ&oacute;, mẹ n&ecirc;n đọc kỹ bảng th&agrave;nh phần trước khi ra quyết định.</p>\n<p>Thể trạng của con: Sự ph&aacute;t triển của mỗi đứa trẻ l&agrave; kh&aacute;c nhau n&ecirc;n mẹ cần theo s&aacute;t c&aacute;c chỉ số sức khỏe của con để biết con đang thiếu v&agrave; cần bổ sung c&aacute;c dưỡng chất g&igrave;, từ đ&oacute; chọn được loại sữa ph&ugrave; hợp.</p>\n<p>Dưới đ&acirc;y l&agrave; một số điều mẹ cần lưu &yacute; khi pha sữa cho con:</p>\n<p>Trong trường hợp con kh&ocirc;ng uống hết mẹ c&oacute; thể bảo quản sữa trong tủ lạnh tối đa 24 tiếng. Nếu qu&aacute; thời gian th&igrave; mẹ n&ecirc;n đổ sữa đi v&agrave; tuyệt đối kh&ocirc;ng cho con sử dụng.<br>Mỗi loại sữa sẽ c&oacute; những c&aacute;ch pha ri&ecirc;ng, do đ&oacute; mẹ kh&ocirc;ng n&ecirc;n &aacute;p dụng c&ocirc;ng thức chung cho mọi loại sữa.<br>Lu&ocirc;n đảm bảo vệ sinh an to&agrave;n thực phẩm trong suốt qu&aacute; tr&igrave;nh pha sữa v&agrave; cho con sử dụng sữa.</p>', 'posts/September2023/moYT6Xzqoqh4lhxugFFf.png', 'sua-bot-la-gi-thanh-phan-va-cach-su-dung-sua-bot', 'Sữa bột hiện nay là loại thực phẩm không thể thiếu trong các gia đình có trẻ sơ sinh và trẻ nhỏ. Vậy “Sữa bột là gì” và “Sữa bột làm từ gì?”, bài viết sẽ cung cấp các thông tin chi tiết nhất về vấn đề này. Hãy đọc để tìm hiểu kỹ thông tin nhé!', '', 'PUBLISHED', 0, '2023-09-07 01:09:53', '2023-09-08 02:00:57', 2),
(19, 1, 1, 'Chọn sữa phù hợp từng giai đoạn phát triển của trẻ', 'Chọn sữa phù hợp từng giai đoạn phát triển của trẻ', 'Sữa là một trong những loại thực phẩm tốt nhất trong chế độ ăn uống hàng ngày, bởi vì trong sữa có chứa đầy đủ các chất dinh dưỡng cần thiết cho sự phát triển cũng như mọi hoạt động của cơ thể.', '<p>Sữa l&agrave; một trong những loại thực phẩm tốt nhất trong chế độ ăn uống h&agrave;ng ng&agrave;y, bởi v&igrave; trong sữa c&oacute; chứa đầy đủ c&aacute;c chất dinh dưỡng cần thiết cho sự ph&aacute;t triển cũng như mọi hoạt động của cơ thể. Chất đạm trong sữa dễ hấp thu. Tuy nhi&ecirc;n, trẻ ở m&ocirc;̃i giai đoạn, m&ocirc;̃i đ&ocirc;̣ tu&ocirc;̉i c&acirc;̀n li&ecirc;̀u lượng, loại sữa, cách u&ocirc;́ng như th&ecirc;́ nào thì kh&ocirc;ng phải ai cũng bi&ecirc;́t.</p>\n<p>Trẻ sơ sinh mới ch&agrave;o đời th&igrave; thức ăn đầu ti&ecirc;n v&agrave; tốt nhất cho b&eacute; l&agrave; sữa mẹ. Bộ m&aacute;y ti&ecirc;u h&oacute;a c&ograve;n non nớt nhưng trẻ đ&atilde; c&oacute; thể ho&agrave;n to&agrave;n hấp thu v&agrave; chuyển h&oacute;a tốt sữa mẹ. Sữa mẹ c&ograve;n gi&uacute;p b&eacute; tăng cường sức đề kh&aacute;ng chống lại bệnh tật m&agrave; kh&ocirc;ng c&oacute; một loại sữa n&agrave;o c&oacute; thể thay thế được.</p>\n<p>Nhưng tr&ecirc;n thực tế, cũng c&oacute; một số trường hợp b&agrave; mẹ bị bệnh kh&ocirc;ng thể cho con b&uacute; được hoặc một số b&agrave; mẹ thiếu, hoặc kh&ocirc;ng c&oacute; sữa th&igrave; đ&agrave;nh phải cho trẻ ăn c&aacute;c loại sữa bột c&ocirc;ng thức d&agrave;nh cho trẻ nhỏ. V&igrave; vậy, các bạn n&ecirc;n nắm được m&ocirc;̣t s&ocirc;́ lưu ý khi cho bé u&ocirc;́ng sữa tùy theo đ&ocirc;̣ tu&ocirc;̉i của bé.</p>\n<p>Đối với trẻ dưới 6 th&aacute;ng tuổi</p>\n<p>D&ugrave;ng c&aacute;c loại sữa c&ocirc;ng thức I: Đặc điểm của c&aacute;c loại sữa n&agrave;y l&agrave; c&oacute; th&agrave;nh phần c&aacute;c chất dinh dưỡng gần với sữa mẹ, c&aacute;c chất dinh dưỡng ở c&aacute;c tỷ lệ c&acirc;n đối hợp l&yacute;, ph&ugrave; hợp với sự hấp thu v&agrave; chuyển h&oacute;a ở trẻ, &iacute;t g&acirc;y n&ecirc;n t&igrave;nh trạng rối loạn ti&ecirc;u h&oacute;a.</p>\n<p>Ở lứa tuổi n&agrave;y kh&ocirc;ng n&ecirc;n d&ugrave;ng sữa b&ograve; tươi, sữa đặc c&oacute; đường, sữa bột nguy&ecirc;n kem hoặc c&aacute;c loại sữa bột c&ocirc;ng thức d&agrave;nh cho trẻ tr&ecirc;n 6 th&aacute;ng. Khi mua sữa th&igrave; phải xem hạn d&ugrave;ng v&agrave; pha sữa đ&uacute;ng theo tỷ lệ hướng dẫn ghi tr&ecirc;n vỏ hộp, chỉ n&ecirc;n d&ugrave;ng nước để pha (nước đun s&ocirc;i để nguội bớt) kh&ocirc;ng được d&ugrave;ng nước s&ocirc;i hoặc đun s&ocirc;i sữa v&igrave; sẽ l&agrave;m mất hoặc hao hụt c&aacute;c vitamin v&agrave; kho&aacute;ng chất c&oacute; trong sữa. Số lượng sữa uống h&agrave;ng ng&agrave;y t&ugrave;y theo từng th&aacute;ng tuổi:</p>\n<p>Trẻ sơ sinh (1 th&aacute;ng tuổi): 60-80ml/ bữa x 7-8 bữa/ng&agrave;y (500-600ml/ng&agrave;y).</p>\n<p>Trẻ từ 2-4 th&aacute;ng tuổi: 100-120ml/bữa x 6-7 bữa/ng&agrave;y (700-800ml/ng&agrave;y).</p>\n<p>Trẻ 5-6 th&aacute;ng: 150-180ml/bữa x 5-6 bữa/ng&agrave;y (800-1.000ml/ng&agrave;y).</p>\n<p>Đối với trẻ 6-12 th&aacute;ng</p>\n<p>Ngo&agrave;i c&aacute;c bữa ăn bổ sung như bột, ch&aacute;o xay, trẻ vẫn cần phải uống th&ecirc;m 500-600ml sữa/ng&agrave;y, chia l&agrave;m 3-4 bữa t&ugrave;y theo mức độ uống của trẻ.</p>\n<p>Giai đoạn n&agrave;y d&ugrave;ng sang c&ocirc;ng thức sữa loại II. Sữa loại n&agrave;y c&oacute; th&agrave;nh phần c&aacute;c chất dinh dưỡng cao hơn sữa c&ocirc;ng thức loại I, nhất l&agrave; chất đạm để ph&ugrave; hợp với sự tăng trưởng v&agrave; ph&aacute;t triển của trẻ, nếu vẫn cứ d&ugrave;ng sữa c&ocirc;ng thức I th&igrave; trẻ sẽ chậm lớn do thiếu chất đạm. Cũng như sữa loại I, khi pha sữa chỉ n&ecirc;n d&ugrave;ng nước ấm v&agrave; pha theo tỷ lệ đ&atilde; hướng dẫn.</p>\n<p>Trẻ từ 1 - 5 tuổi</p>\n<p>Chế độ ăn ch&iacute;nh h&agrave;ng ng&agrave;y l&agrave; ch&aacute;o, cơm, m&igrave;, s&uacute;p, b&uacute;n, phở... trẻ vẫn cần 400-500ml sữa/ng&agrave;y, l&uacute;c n&agrave;y c&oacute; thể d&ugrave;ng tất cả c&aacute;c loại sữa d&agrave;nh cho trẻ tr&ecirc;n 1 tuổi, sữa b&ograve; tiệt tr&ugrave;ng, sữa bột nguy&ecirc;n kem, sữa đậu n&agrave;nh, sữa chua.</p>\n<p>Trẻ ở lứa tuổi tiểu học v&agrave; trung học cơ sở (6-14 tuổi)</p>\n<p>Ngo&agrave;i chế độ ăn h&agrave;ng ng&agrave;y vẫn cần cho trẻ uống sữa v&igrave; đ&acirc;y l&agrave; nguồn cung cấp canxi gi&uacute;p trẻ ph&aacute;t triển chiều cao, nhất l&agrave; những trẻ kh&ocirc;ng chịu ăn t&ocirc;m, cua, c&aacute; h&agrave;ng ng&agrave;y. Tuy nhi&ecirc;n, cần phải lưu &yacute; đến t&igrave;nh trạng dinh dưỡng của trẻ để chọn c&aacute;c loại sữa cho ph&ugrave; hợp.</p>\n<p>Nếu trẻ ph&aacute;t triển b&igrave;nh thường th&igrave; c&oacute; thể uống c&aacute;c loại sữa bột nguy&ecirc;n kem, sữa tươi tiệt tr&ugrave;ng, sữa đặc c&oacute; đường... nhưng nếu trẻ ở trong t&igrave;nh trạng thừa c&acirc;n hoặc b&eacute;o ph&igrave; th&igrave; lại chỉ được d&ugrave;ng c&aacute;c loại sữa bột t&aacute;ch bơ, sữa tươi kh&ocirc;ng đường, sữa đậu n&agrave;nh kh&ocirc;ng đường v&agrave; một số lượng kh&ocirc;ng qu&aacute; 300-400ml/ng&agrave;y. C&ograve;n đối với trẻ bị thiếu dinh dưỡng th&igrave; lại chọn c&aacute;c loại sữa gi&agrave;u năng lượng (sữa đặc biệt d&agrave;nh cho trẻ suy dinh dưỡng), khi pha c&oacute; đậm độ năng lượng l&agrave; 1ml cung cấp 1kcal v&agrave; c&aacute;c loại sữa n&agrave;y chứa nhiều c&aacute;c vi chất dinh dưỡng hơn, gi&uacute;p cho trẻ mau ch&oacute;ng phục hồi dinh dưỡng, số lượng uống kh&ocirc;ng hạn chế, c&oacute; thể uống 500-800ml/ng&agrave;y.</p>', 'posts/September2023/9mn8FxxgEgYGgaA0D0VO.png', 'chon-sua-phu-hop-tung-giai-doan-phat-trien-cua-tre', 'Sữa là một trong những loại thực phẩm tốt nhất trong chế độ ăn uống hàng ngày, bởi vì trong sữa có chứa đầy đủ các chất dinh dưỡng cần thiết cho sự phát triển cũng như mọi hoạt động của cơ thể.', '', 'PUBLISHED', 0, '2023-09-07 01:12:19', '2023-09-11 02:13:36', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `answer`, `status`, `created_at`, `updated_at`, `name`, `image`, `rate`) VALUES
(4, 'Giao hàng nhanh, dùng thấy rất ok nha!', 'Cảm ơn bạn!', 'ACTIVE', '2023-09-05 02:47:00', '2023-09-08 01:49:07', 'hocnguyen99', 'questions/September2023/mvgXu3fq26yRLJCmIqjF.jpg', 5),
(5, 'Đóng gói cẩn thận. Rất hài lòng. Bộ Sản phẩm này được tư tận tình chi tiết nên tôi tin tưởng đặt mua. kết quả khiến tôi rất hài lòng', 'Cỏ cảm ơn bạn đã phản hồi lại ạ  Trong quá trình sử dụng sản phẩm cần hỗ trợ thêm bạn liên hệ để chúng mình hỗ trợ cho bạn nhé. Cảm ơn bạn đã ủng hộ!', 'ACTIVE', '2023-09-05 02:49:00', '2023-09-08 01:46:13', 'Thu nguyễn', 'questions/September2023/BdlU6YkG2Ys0rIY6CFQa.jpg', 5),
(6, 'Được tư vấn nên tôi đã tin tưởng mua cho con sử dụng một thời gian, kết quả mang lại rất tốt. sẽ tiếp tục sử dụng.', 'Cảm ơn bạn', 'ACTIVE', '2023-09-05 19:13:00', '2023-09-08 01:48:12', 'Quang Minh', 'questions/September2023/RZiDW5bRhImWdlq8awK1.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Develop', 'Develop', '2023-06-01 19:44:55', '2023-09-14 18:34:30'),
(3, 'Admin', 'Admin (full quyền)', '2023-09-09 01:15:42', '2023-09-14 18:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `multi_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `desc`, `price`, `image`, `body`, `status`, `type`, `created_at`, `updated_at`, `multi_img`, `promotional`) VALUES
(8, 'Hallo Baby MAMA', 'hallo-baby-mama', 'Hallo Baby Mama được sản xuất từ sữa bò và các chất xơ, vitamin và khoáng chất được khuyên dùng cho phụ nữ có thai và cho con bú.', 550000, 'services/September2023/Rq7i0yTKCNTYJMv7dOTB.png', '<h2><span id=\"Gioi_thieu_ve_sua_Hallo_Baby_Mama\">Giới thiệu về sữa Hallo Baby Mama</span></h2>\n<p>Sữa Hallo Baby Mama l&agrave; sản phẩm sữa d&agrave;nh cho mẹ bầu v&agrave; cho con b&uacute; được sản xuất tại Đức với c&aacute;c th&agrave;nh phần được lựa chọn kỹ c&agrave;ng v&agrave; đảm bảo chất lượng.</p>\n<p>Sữa Hallo Baby Mama chứa c&aacute;c vitamin v&agrave; kho&aacute;ng chất cần thiết cho sự ph&aacute;t triển của thai nhi v&agrave; sữa mẹ. Ngo&agrave;i ra, sản phẩm c&ograve;n bổ sung c&aacute;c chất xơ gi&uacute;p ti&ecirc;u h&oacute;a tốt hơn, t&aacute;i tạo tế b&agrave;o v&agrave; tăng cường khả năng miễn dịch cho cả mẹ v&agrave; b&eacute;.</p>\n<p>Sữa Hallo Baby Mama được sản xuất bằng c&ocirc;ng nghệ ti&ecirc;n tiến, đảm bảo sự an to&agrave;n v&agrave; tươi ngon của sản phẩm. Sản phẩm kh&ocirc;ng chứa chất bảo quản v&agrave; kh&ocirc;ng chứa gluten, đảm bảo an to&agrave;n cho sức khỏe của mẹ v&agrave; b&eacute;.</p>\n<p>Sữa Hallo Baby Mama c&ograve;n được thiết kế với hương vị thơm ngon v&agrave; dễ uống, gi&uacute;p mẹ dễ d&agrave;ng ti&ecirc;u thụ sản phẩm v&agrave; c&oacute; đủ năng lượng để chăm s&oacute;c cho b&eacute; y&ecirc;u của m&igrave;nh.</p>\n<p>Với sự kết hợp ho&agrave;n hảo của c&aacute;c th&agrave;nh phần dinh dưỡng cần thiết, sự an to&agrave;n v&agrave; tươi ngon, Sữa Hallo Baby Mama l&agrave; lựa chọn ho&agrave;n hảo cho mẹ bầu v&agrave; cho con b&uacute;, gi&uacute;p hỗ trợ sự ph&aacute;t triển to&agrave;n diện v&agrave; khỏe mạnh cho b&eacute; y&ecirc;u của bạn!</p>\n<h2><span id=\"Thanh_phan_va_cong_dung_cua_sua_Hallo_Baby_Mama\">Th&agrave;nh phần v&agrave; c&ocirc;ng dụng của sữa Hallo Baby Mama</span></h2>\n<p>Sữa Hallo Baby Mama l&agrave; một sản phẩm sữa d&agrave;nh cho phụ nữ đang mang thai hoặc cho con b&uacute;. Sữa n&agrave;y được chứa đựng một số th&agrave;nh phần ch&iacute;nh sau đ&acirc;y:</p>\n<p>&ndash; DHA (docosahexaenoic acid): một loại axit b&eacute;o omega-3 quan trọng cho sự ph&aacute;t triển n&atilde;o bộ v&agrave; thị lực của trẻ sơ sinh.</p>\n<p>&ndash; Calcium: gi&uacute;p x&acirc;y dựng v&agrave; duy tr&igrave; xương v&agrave; răng chắc khỏe cho thai nhi.</p>\n<p>&ndash; Acid folic: gi&uacute;p ph&aacute;t triển tim, n&atilde;o bộ v&agrave; c&aacute;c cơ quan kh&aacute;c của thai nhi.</p>\n<p>&ndash; Vitamin D: hỗ trợ cơ thể hấp thụ calci v&agrave; phospho, gi&uacute;p x&acirc;y dựng xương v&agrave; răng khỏe mạnh.</p>\n<p>&ndash; Protein: l&agrave;m nền tảng cho sự ph&aacute;t triển v&agrave; ph&aacute;t triển của tế b&agrave;o v&agrave; m&ocirc;.</p>\n<p>Sữa Hallo Baby Mama c&oacute; nhiều c&ocirc;ng dụng cho mẹ v&agrave; b&eacute; như sau:</p>\n<p>&ndash; Hỗ trợ sự tăng trưởng v&agrave; ph&aacute;t triển b&igrave;nh thường của thai nhi, đặc biệt l&agrave; n&atilde;o bộ v&agrave; thị lực.</p>\n<p>&ndash; Bổ sung canxi để ph&aacute;t triển xương v&agrave; răng khỏe mạnh cho thai nhi.</p>\n<p>&ndash; Gi&uacute;p giảm nguy cơ đột quỵ v&agrave; c&aacute;c bệnh tim mạch cho mẹ.</p>\n<p>&ndash; Ph&ograve;ng ngừa thiếu m&aacute;u v&agrave; đảm bảo thai nhi ph&aacute;t triển b&igrave;nh thường.</p>\n<p>&ndash; Cung cấp dinh dưỡng cần thiết cho mẹ v&agrave; gi&uacute;p mẹ giữ được sức khỏe tốt trong suốt thời gian mang thai.</p>\n<p>V&igrave; vậy, c&aacute;c phụ nữ mang thai n&ecirc;n bổ sung sữa Hallo Baby Mama để đảm bảo sự ph&aacute;t triển v&agrave; sức khỏe của thai nhi v&agrave; bản th&acirc;n m&igrave;nh.</p>\n<h2><span id=\"Uu_diem_cua_sua_Hallo_Baby_Mama\">Ưu điểm của sữa Hallo Baby Mama</span></h2>\n<p>Sữa Hallo Baby Mama l&agrave; một sản phẩm sữa d&agrave;nh cho phụ nữ mang thai v&agrave; cho con b&uacute; được sản xuất bởi c&ocirc;ng ty Hallo. Sản phẩm n&agrave;y c&oacute; nhiều ưu điểm vượt trội so với c&aacute;c loại sữa th&ocirc;ng thường kh&aacute;c.</p>\n<p>Đầu ti&ecirc;n, Sữa Hallo Baby Mama chứa đầy đủ c&aacute;c chất dinh dưỡng cần thiết cho cả mẹ v&agrave; b&eacute;, bao gồm protein, canxi, sắt, vitamin D v&agrave; acid folic. Những chất dinh dưỡng n&agrave;y đ&oacute;ng vai tr&ograve; quan trọng trong việc ph&aacute;t triển to&agrave;n diện của thai nhi.</p>\n<p>Tiếp theo, sản phẩm n&agrave;y được chế biến từ nguồn nguy&ecirc;n liệu tự nhi&ecirc;n, kh&ocirc;ng chứa ho&aacute; chất độc hại hay phẩm m&agrave;u nh&acirc;n tạo, đảm bảo an to&agrave;n cho sức khỏe của mẹ v&agrave; con. Điều n&agrave;y gi&uacute;p cho mẹ c&oacute; thể y&ecirc;n t&acirc;m sử dụng sản phẩm m&agrave; kh&ocirc;ng lo bị ảnh hưởng đến sức khỏe của b&eacute;.</p>\n<p>B&ecirc;n cạnh đ&oacute;, Sữa Hallo Baby Mama c&oacute; hương vị thơm ngon, dễ uống v&agrave; c&oacute; dạng bột gi&uacute;p mang lại sự tiện lợi cho người sử dụng. Mẹ c&oacute; thể dễ d&agrave;ng điều chỉnh lượng sữa cần d&ugrave;ng cho b&eacute; m&igrave;nh m&agrave; kh&ocirc;ng lo l&atilde;ng ph&iacute;.</p>\n<p>Ngo&agrave;i ra, Sữa Hallo Baby Mama c&oacute; gi&aacute; th&agrave;nh hợp l&yacute;, ph&ugrave; hợp với nhu cầu v&agrave; điều kiện t&agrave;i ch&iacute;nh của đại đa số người d&ugrave;ng. Sản phẩm được sản xuất theo ti&ecirc;u chuẩn v&agrave; quy tr&igrave;nh kiểm định nghi&ecirc;m ngặt, đảm bảo chất lượng tốt nhất để mang lại sự h&agrave;i l&ograve;ng cho người sử dụng.</p>\n<p>V&igrave; vậy, nếu bạn đang mang thai hoặc đang t&igrave;m kiếm một sản phẩm sữa cho con b&uacute;, h&atilde;y c&acirc;n nhắc sử dụng Sữa Hallo Baby Mama để đảm bảo cho sức khỏe của mẹ v&agrave; b&eacute;.</p>\n<h2><span id=\"Cach_su_dung_va_bao_quan_sua_Hallo_Baby_Mama\">C&aacute;ch sử dụng v&agrave; bảo quản sữa Hallo Baby Mama</span></h2>\n<p>Sữa Hallo Baby Mama l&agrave; sản phẩm sữa d&agrave;nh cho phụ nữ mang thai v&agrave; cho con b&uacute;, được sản xuất v&agrave; ph&acirc;n phối bởi c&ocirc;ng ty Hallo Baby. Đ&acirc;y l&agrave; loại sữa gi&agrave;u c&aacute;c chất dinh dưỡng cần thiết cho cả mẹ v&agrave; b&eacute;, bao gồm vitamin, kho&aacute;ng chất, đạm, chất b&eacute;o v&agrave; c&aacute;c hợp chất chống oxy h&oacute;a.</p>\n<p>C&aacute;ch sử dụng sữa Hallo Baby Mama rất đơn giản. Bạn chỉ cần uống một hoặc hai lần mỗi ng&agrave;y, t&ugrave;y v&agrave;o hướng dẫn của b&aacute;c sĩ hoặc chuy&ecirc;n gia dinh dưỡng. Sữa Hallo Baby Mama c&oacute; thể được uống trực tiếp hoặc pha với nước hoặc sữa kh&aacute;c.</p>\n<p>Cần lưu &yacute; rằng sữa Hallo Baby Mama chỉ n&ecirc;n được sử dụng dưới sự gi&aacute;m s&aacute;t của b&aacute;c sĩ hoặc chuy&ecirc;n gia dinh dưỡng. Bạn cũng n&ecirc;n tu&acirc;n thủ đầy đủ hướng dẫn v&agrave; liều lượng được chỉ định tr&ecirc;n bao b&igrave; sản phẩm.</p>\n<p>Đối với bảo quản, sữa Hallo Baby Mama n&ecirc;n được bảo quản ở nhiệt độ ph&ograve;ng hoặc trong tủ lạnh. Nếu sử dụng sữa đ&atilde; mở, n&ecirc;n đ&oacute;ng k&iacute;n bao b&igrave; v&agrave; bảo quản trong tủ lạnh hoặc nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t.</p>\n<p>Bạn n&ecirc;n kiểm tra hạn sử dụng tr&ecirc;n bao b&igrave; sản phẩm trước khi sử dụng. Nếu sản phẩm đ&atilde; qu&aacute; hạn, bạn n&ecirc;n vứt bỏ để đảm bảo sức khỏe của mẹ v&agrave; b&eacute;.</p>\n<p>T&oacute;m lại, sữa Hallo Baby Mama l&agrave; sản phẩm sữa dinh dưỡng tốt cho phụ nữ mang thai v&agrave; cho con b&uacute;, nhưng cần tu&acirc;n thủ đầy đủ hướng dẫn v&agrave; chỉ định của b&aacute;c sĩ hoặc chuy&ecirc;n gia dinh dưỡng. Khi bảo quản, bạn n&ecirc;n lưu &yacute; đảm bảo nhiệt độ v&agrave; hạn sử dụng để đảm bảo chất lượng sản phẩm.</p>\n<h2><span id=\"Nhan_xet_va_danh_gia_sua_Hallo_Baby_Mama_tu_cac_ba_me_su_dung_san_pham\">Nhận x&eacute;t v&agrave; đ&aacute;nh gi&aacute; sữa Hallo Baby Mama từ c&aacute;c b&agrave; mẹ sử dụng sản phẩm</span></h2>\n<p>Sữa Hallo Baby Mama l&agrave; một sản phẩm sữa bột d&agrave;nh cho trẻ em được nhiều b&agrave; mẹ tin tưởng v&agrave; sử dụng. C&aacute;c b&agrave; mẹ đ&atilde; thử nghiệm sản phẩm n&agrave;y v&agrave; chia sẻ những nhận x&eacute;t v&agrave; đ&aacute;nh gi&aacute; kh&aacute;c nhau về sữa Hallo Baby Mama.</p>\n<p>C&aacute;c b&agrave; mẹ đều đồng &yacute; rằng sữa Hallo Baby Mama mang lại nhiều lợi &iacute;ch cho sức khỏe của trẻ. Sản phẩm chứa c&aacute;c th&agrave;nh phần cần thiết cho sự ph&aacute;t triển của trẻ như protein, canxi v&agrave; vitamin. Sữa cũng rất dễ ti&ecirc;u h&oacute;a, gi&uacute;p trẻ ăn ngon miệng v&agrave; tăng cường đề kh&aacute;ng.</p>\n<p>Nhiều b&agrave; mẹ cũng nhận thấy rằng sữa Hallo Baby Mama c&oacute; m&ugrave;i vị rất tốt v&agrave; trẻ em th&iacute;ch. C&aacute;c b&agrave; mẹ cho biết rằng sản phẩm n&agrave;y kh&ocirc;ng g&acirc;y t&aacute;o b&oacute;n cho trẻ, đ&oacute; l&agrave; một dấu hiệu kh&aacute; quan trọng trong việc giữ cho b&eacute; khỏe mạnh.</p>\n<p>Tuy nhi&ecirc;n, một số b&agrave; mẹ cũng lưu &yacute; rằng sữa Hallo Baby Mama c&oacute; gi&aacute; cả đắt hơn so với c&aacute;c sản phẩm sữa bột kh&aacute;c tr&ecirc;n thị trường. Tuy nhi&ecirc;n, họ cho rằng đ&oacute; l&agrave; một khoản đầu tư đ&aacute;ng gi&aacute; để gi&uacute;p trẻ ph&aacute;t triển tốt hơn.</p>\n<p>Về tổng thể, sữa Hallo Baby Mama được đ&aacute;nh gi&aacute; cao bởi c&aacute;c b&agrave; mẹ v&igrave; t&iacute;nh chất dinh dưỡng v&agrave; an to&agrave;n của sản phẩm. Tuy nhi&ecirc;n, gi&aacute; cả c&oacute; thể l&agrave; một chướng ngại đối với một số gia đ&igrave;nh. Nếu bạn đang t&igrave;m kiếm một sản phẩm sữa bột tốt cho con của m&igrave;nh, sữa Hallo Baby Mama l&agrave; một lựa chọn tuyệt vời.</p>', 'ACTIVE', NULL, '2023-09-05 20:04:00', '2023-09-07 20:55:24', '[\"services/image_2023-09-07_112221471.png\",\"services/image_2023-09-07_112606822.png\",\"services/image_2023-09-07_112419187.png\",\"services/image_2023-09-07_112329710.png\"]', NULL),
(9, 'Sữa Hallo Baby 1 Infant Formula', 'sua-bot-hallo-baby-1', 'Sữa Hallo Baby 1 Infant Formula là loại sữa dành cho trẻ sơ sinh, được sản xuất và nhập khẩu từ Đức.', 750000, 'services/September2023/QA15nkdPnfOZZB7dx328.png', '<h2><span id=\"Gioi_thieu_ve_Sua_Hallo_Baby_1_Infant_Formula\">Giới thiệu về Sữa Hallo Baby 1 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 1 Infant Formula l&agrave; loại sữa d&agrave;nh cho trẻ sơ sinh, được sản xuất v&agrave; nhập khẩu từ Đức. Với th&agrave;nh phần ch&iacute;nh l&agrave; sữa b&ograve; tươi nguy&ecirc;n chất v&agrave; c&aacute;c kho&aacute;ng chất cần thiết cho sự ph&aacute;t triển của b&eacute; như đạm, tinh bột, lipid, lactose, Canxi, Vitamin D3 v&agrave; nhiều vitamin v&agrave; kho&aacute;ng chất kh&aacute;c.</p>\n<p>Sữa Hallo Baby 1 Infant Formula được thiết kế đặc biệt để hỗ trợ sự ph&aacute;t triển v&agrave; tăng cường hệ miễn dịch cho b&eacute; sơ sinh. N&oacute; l&agrave; sản phẩm ho&agrave;n hảo cho c&aacute;c mẹ bỉm sữa kh&ocirc;ng thể cung cấp đủ lượng sữa cho con y&ecirc;u của m&igrave;nh hoặc v&igrave; nhiều l&yacute; do kh&aacute;c như sức khỏe hay nguồn dinh dưỡng k&eacute;m.</p>\n<p>Sữa Hallo Baby 1 Infant Formula c&oacute; hương vị thơm ngon, dễ uống v&agrave; dễ hấp thụ. N&oacute; cung cấp cho b&eacute; c&aacute;c dưỡng chất cần thiết để tăng cường hệ miễn dịch, hỗ trợ sự ph&aacute;t triển n&atilde;o bộ v&agrave; xương khớp.</p>\n<p>Xuất hiện tr&ecirc;n thị trường Việt Nam, Sữa Hallo Baby 1 Infant Formula đ&atilde; được c&aacute;c b&aacute;c sĩ khuy&ecirc;n d&ugrave;ng v&agrave; được c&aacute;c b&agrave; mẹ tin d&ugrave;ng. N&oacute; l&agrave; sản phẩm an to&agrave;n v&agrave; tin cậy cho b&eacute; sơ sinh, gi&uacute;p b&eacute; ph&aacute;t triển to&agrave;n diện v&agrave; khỏe mạnh.</p>\n<h2><span id=\"Thanh_phan_chinh_cua_Sua_Hallo_Baby_1_Infant_Formula\">Th&agrave;nh phần ch&iacute;nh của Sữa Hallo Baby 1 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 1 Infant Formula l&agrave; sản phẩm sữa c&ocirc;ng thức d&agrave;nh cho trẻ sơ sinh từ 0-6 th&aacute;ng tuổi. Th&agrave;nh phần ch&iacute;nh của sản phẩm n&agrave;y bao gồm:<br>&ndash; Protein sữa: Sữa Hallo Baby 1 Infant Formula chứa 80% protein sữa, tương đương với sữa mẹ tự nhi&ecirc;n. Protein sữa gi&uacute;p cung cấp c&aacute;c dưỡng chất cần thiết cho sự ph&aacute;t triển to&agrave;n diện của trẻ, đặc biệt l&agrave; hệ thần kinh v&agrave; cơ bắp.<br>&ndash; Carbohydrate: Sữa Hallo Baby 1 Infant Formula sử dụng lactose l&agrave;m nguồn carbohydrate. Lactose cung cấp năng lượng cho cơ thể, gi&uacute;p trẻ tăng c&acirc;n v&agrave; ph&aacute;t triển chiều cao.<br>&ndash; Chất b&eacute;o: Sữa Hallo Baby 1 Infant Formula chứa c&aacute;c acid b&eacute;o kh&ocirc;ng b&atilde;o h&ograve;a như DHA, ARA, EPA, c&oacute; vai tr&ograve; quan trọng trong sự ph&aacute;t triển của n&atilde;o bộ, thị lực v&agrave; hệ miễn dịch của trẻ.<br>&ndash; Vitamin v&agrave; kho&aacute;ng chất: Sữa Hallo Baby 1 Infant Formula cung cấp đầy đủ c&aacute;c vitamin v&agrave; kho&aacute;ng chất cần thiết cho sự ph&aacute;t triển của trẻ, bao gồm vitamin A, B, C, D, E, kho&aacute;ng chất như canxi, sắt, kẽm,&hellip;<br>&ndash; Probiotics: Sữa Hallo Baby 1 Infant Formula c&ograve;n chứa c&aacute;c probiotics (vi khuẩn c&oacute; lợi) gi&uacute;p c&acirc;n bằng hệ vi sinh đường ruột, tăng cường sức đề kh&aacute;ng cho trẻ.</p>\n<p>Sản phẩm Sữa Hallo Baby 1 Infant Formula được sản xuất theo ti&ecirc;u chuẩn chất lượng cao v&agrave; được sử dụng rộng r&atilde;i trong việc bổ sung dinh dưỡng cho trẻ sơ sinh.</p>\n<h2><span id=\"Loi_ich_cua_Sua_Hallo_Baby_1_Infant_Formula\">Lợi &iacute;ch của Sữa Hallo Baby 1 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 1 Infant Formula l&agrave; một sản phẩm dinh dưỡng được thiết kế đặc biệt cho c&aacute;c b&eacute; từ 0 &ndash; 6 th&aacute;ng tuổi. Được sản xuất từ những nguy&ecirc;n liệu tự nhi&ecirc;n v&agrave; đảm bảo chất lượng cao, sữa Hallo Baby 1 Infant Formula mang lại nhiều lợi &iacute;ch cho sức khỏe v&agrave; ph&aacute;t triển của trẻ nhỏ.</p>\n<p>Đầu ti&ecirc;n l&agrave; sữa Hallo Baby 1 Infant Formula cung cấp cho b&eacute; tất cả c&aacute;c dưỡng chất cần thiết để b&eacute; ph&aacute;t triển một c&aacute;ch to&agrave;n diện. Sản phẩm bao gồm c&aacute;c loại vi chất, protein, vitamin v&agrave; kho&aacute;ng chất, gi&uacute;p hỗ trợ việc tăng trưởng chiều cao v&agrave; c&acirc;n nặng cho b&eacute;.</p>\n<p>Thứ hai, sữa Hallo Baby 1 Infant Formula ph&ugrave; hợp với hệ ti&ecirc;u h&oacute;a của b&eacute; v&agrave; dễ d&agrave;ng ti&ecirc;u h&oacute;a. Từ đ&oacute;, b&eacute; sẽ kh&ocirc;ng bị đầy hơi, ti&ecirc;u chảy hay t&aacute;o b&oacute;n như c&aacute;c sản phẩm sữa kh&aacute;c.</p>\n<p>Ngo&agrave;i ra, sữa Hallo Baby 1 Infant Formula c&ograve;n gi&uacute;p tăng cường hệ miễn dịch của trẻ. Sản phẩm chứa c&aacute;c th&agrave;nh phần dinh dưỡng c&oacute; t&iacute;nh chất kh&aacute;ng khuẩn gi&uacute;p bảo vệ b&eacute; khỏi c&aacute;c bệnh truyền nhiễm.</p>\n<p>Cuối c&ugrave;ng, sữa Hallo Baby 1 Infant Formula được sản xuất theo ti&ecirc;u chuẩn chất lượng cao v&agrave; an to&agrave;n cho b&eacute;. Với sự chăm s&oacute;c, n&acirc;ng niu kỹ lưỡng, sản phẩm lu&ocirc;n đảm bảo mang lại những gi&aacute; trị dinh dưỡng cao nhất cho trẻ nhỏ.</p>\n<p>Với c&aacute;c lợi &iacute;ch tr&ecirc;n, sữa Hallo Baby 1 Infant Formula đ&atilde; trở th&agrave;nh lựa chọn h&agrave;ng đầu của c&aacute;c bậc cha mẹ trong việc dinh dưỡng v&agrave; ph&aacute;t triển to&agrave;n diện cho b&eacute; y&ecirc;u của m&igrave;nh.</p>\n<h2><span id=\"Huong_dan_su_dung_Sua_Hallo_Baby_1_Infant_Formula\">Hướng dẫn sử dụng Sữa Hallo Baby 1 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 1 Infant Formula l&agrave; sản phẩm sữa bột d&agrave;nh cho trẻ sơ sinh từ 0-6 th&aacute;ng tuổi. Đ&acirc;y l&agrave; sản phẩm của c&ocirc;ng ty Mead Johnson, một trong những thương hiệu sữa chăm s&oacute;c sức khỏe cho trẻ em h&agrave;ng đầu tr&ecirc;n thị trường.</p>\n<p>Sữa Hallo Baby 1 Infant Formula được chứa đầy đủ c&aacute;c chất dinh dưỡng cần thiết cho sự ph&aacute;t triển to&agrave;n diện của b&eacute;, trong đ&oacute; bao gồm DHA, ARA, c&aacute;c vitamin v&agrave; kho&aacute;ng chất kh&ocirc;ng thể thiếu. Sản phẩm kh&ocirc;ng chứa chất bảo quản, kh&ocirc;ng chứa gluten v&agrave; kh&ocirc;ng GMO.</p>\n<p>Việc sử dụng Sữa Hallo Baby 1 Infant Formula rất đơn giản. Bạn cần pha sữa theo hướng dẫn tr&ecirc;n bao b&igrave;. Đầu ti&ecirc;n, bạn cần rửa tay sạch v&agrave; chuẩn bị c&aacute;c dụng cụ cần thiết bao gồm b&igrave;nh pha sữa, muỗng đong sữa, nước s&ocirc;i v&agrave; sữa Hallo Baby 1 Infant Formula. Sau đ&oacute;, bạn h&atilde;y đo lượng sữa cần pha v&agrave; cho v&agrave;o b&igrave;nh pha sữa, sau đ&oacute; đo nước s&ocirc;i theo tỷ lệ hướng dẫn tr&ecirc;n bao b&igrave; v&agrave; đổ v&agrave;o b&igrave;nh pha sữa. Sau đ&oacute;, bạn d&ugrave;ng muỗng đong sữa để khuấy đều hỗn hợp. Khi sữa đ&atilde; đủ nhiệt độ ấm, bạn h&atilde;y cho b&eacute; uống.</p>\n<p>Để bảo quản Sữa Hallo Baby 1 Infant Formula, bạn cần lưu &yacute; để sản phẩm được bảo quản đ&uacute;ng c&aacute;ch v&agrave; sử dụng trong thời gian ngắn nhất sau khi mở nắp. Sau khi sử dụng, bạn cần vệ sinh b&igrave;nh sữa cẩn thận trước khi sử dụng lần sau.</p>\n<p>T&oacute;m lại, sữa Hallo Baby 1 Infant Formula l&agrave; sản phẩm sữa bột chăm s&oacute;c sức khỏe trẻ em tốt nhất cho b&eacute; từ 0-6 th&aacute;ng tuổi. Với hướng dẫn sử dụng đơn giản v&agrave; đầy đủ c&aacute;c chất dinh dưỡng cần thiết, sản phẩm n&agrave;y sẽ gi&uacute;p b&eacute; ph&aacute;t triển to&agrave;n diện v&agrave; khỏe mạnh.</p>\n<h2><span id=\"Tong_ket_ve_Sua_Hallo_Baby_1_Infant_Formula\">Tổng kết về Sữa Hallo Baby 1 Infant Formula.</span></h2>\n<p>Sữa Hallo Baby 1 Infant Formula l&agrave; một trong những loại sữa d&agrave;nh cho trẻ sơ sinh được nhiều b&agrave; mẹ tin d&ugrave;ng. Sữa n&agrave;y được sản xuất bởi c&ocirc;ng ty Hallo Baby, với nguồn nguy&ecirc;n liệu chủ yếu l&agrave; từ sữa b&ograve; v&agrave; được nhập khẩu từ c&aacute;c nước sản xuất uy t&iacute;n.</p>\n<p>Sữa Hallo Baby 1 Infant Formula l&agrave; loại sữa được thiết kế đặc biệt cho trẻ sơ sinh từ 0-6 th&aacute;ng tuổi, cung cấp đầy đủ dưỡng chất v&agrave; nguy&ecirc;n tố dinh dưỡng cần thiết cho sự ph&aacute;t triển của b&eacute;. Ngo&agrave;i ra, sản phẩm c&ograve;n bổ sung c&aacute;c th&agrave;nh phần gi&uacute;p tăng cường khả năng miễn dịch, hỗ trợ sự ph&aacute;t triển n&atilde;o bộ v&agrave; thị gi&aacute;c của trẻ.</p>\n<p>Sữa Hallo Baby 1 Infant Formula được sản xuất trong m&ocirc;i trường nghi&ecirc;m ngặt, đảm bảo vệ sinh v&agrave; an to&agrave;n để sử dụng cho trẻ sơ sinh. Sản phẩm n&agrave;y cũng được kiểm định bởi c&aacute;c tổ chức chuy&ecirc;n m&ocirc;n về chất lượng sản phẩm.</p>\n<p>B&ecirc;n cạnh đ&oacute;, c&ocirc;ng ty Hallo Baby cũng lu&ocirc;n tập trung v&agrave;o nghi&ecirc;n cứu v&agrave; ph&aacute;t triển sản phẩm mới để đ&aacute;p ứng nhu cầu của c&aacute;c b&agrave; mẹ v&agrave; sự ph&aacute;t triển của trẻ. Sản phẩm được đ&oacute;ng g&oacute;i theo th&ugrave;ng v&agrave; t&uacute;i tiện lợi, dễ d&agrave;ng cho việc lưu trữ v&agrave; sử dụng.</p>\n<p>T&oacute;m lại, Sữa Hallo Baby 1 Infant Formula l&agrave; một sản phẩm chất lượng, đ&aacute;p ứng nhu cầu dinh dưỡng v&agrave; sức khỏe của trẻ sơ sinh từ 0-6 th&aacute;ng tuổi. Nếu bạn đang t&igrave;m kiếm một loại sữa cho b&eacute; của m&igrave;nh, th&igrave; Sữa Hallo Baby 1 Infant Formula sẽ l&agrave; một lựa chọn tuyệt vời.</p>', 'ACTIVE', NULL, '2023-09-05 20:07:00', '2023-09-14 00:56:40', '[\"services/image_2023-09-07_112221471.png\",\"services/image_2023-09-07_112419187.png\",\"services/image_2023-09-07_112329710.png\",\"services/image_2023-09-07_112606822.png\"]', NULL),
(10, 'Sữa Hallo Baby 2 Infant Formula', 'sua-hallo-baby-2-infant-formula', 'Sữa công thức Hallo Baby 2 được sản xuất từ ​​sữa bò và các chất xơ, vitamin và khoáng chất khuyên dùng cho trẻ từ 12 – 36 tháng', 730000, 'services/September2023/6Tpx6UxhbjCVMFLC39Z3.png', '<div class=\"milk-one\">\n<h4>Hallo Baby 2 Infant Formula</h4>\n<p>&ndash; Xuất xứ: Đan Mạch</p>\n<p>&ndash; Sữa c&ocirc;ng thức Hallo Baby 2 được sản xuất từ ​​sữa b&ograve; v&agrave; c&aacute;c chất xơ, vitamin v&agrave; kho&aacute;ng chất khuy&ecirc;n d&ugrave;ng cho trẻ từ 12 &ndash; 36 th&aacute;ng.</p>\n<p>&ndash; Khối lượng: 800 g</p>\n<p><strong>Sữa c&ocirc;ng thức Hallo Baby 2 được sản xuất từ ​​sữa b&ograve; v&agrave; c&aacute;c chất xơ, vitamin v&agrave; kho&aacute;ng chất khuy&ecirc;n d&ugrave;ng cho trẻ từ 12 &ndash; 36 th&aacute;ng.</strong></p>\n<p><strong>Cảnh b&aacute;o:</strong>&nbsp;Thực hiện theo c&aacute;c hướng dẫn chuẩn bị, bảo quản v&agrave; vứt bỏ sản phẩm một c&aacute;ch cẩn thận v&igrave; việc chuẩn bị v&agrave; bảo quản kh&ocirc;ng ph&ugrave; hợp c&oacute; thể g&acirc;y nguy hiểm cho sức khỏe của em b&eacute;.</p>\n<p><strong>Khẩu phần ăn cho b&eacute; với Hallo Baby 2 Infant Formula:</strong></p>\n<p>Hallo Baby 2 Infant Formula th&iacute;ch hợp cho việc sử dụng dinh dưỡng đặc biệt cho trẻ từ 12 &ndash; 36 th&aacute;ng tuổi.</p>\n<p>Hallo Baby 2 Infant Formula được cung cấp đầy đủ c&aacute;c dưỡng chất gi&uacute;p b&eacute; ph&aacute;t triển to&agrave;n diện, b&eacute; tăng c&acirc;n, tăng chiều cao, ph&aacute;t triển tr&iacute; n&atilde;o th&ocirc;ng minh.</p>\n<p>Hallo baby 2 Infant Formula l&agrave; lựa chọn số 1 của c&aacute;c b&agrave; mẹ tại Đan Mạch d&agrave;nh cho trẻ nhỏ giai đoạn từ 12 &ndash; 36 th&aacute;ng tuổi.</p>\n<p>Sản phẩm được sản xuất tại Arla Foods thuộc top 10 nh&agrave; m&aacute;y sữa lớn nhất thế giới với 18.765 nh&acirc;n vi&ecirc;n, doanh thu h&agrave;ng năm khoảng 12,4 tỷ USD</p>\n<p>Bảng dưới đ&acirc;y bao gồm c&aacute;c hướng dẫn về liều lượng. Tuy nhi&ecirc;n, sự th&egrave;m ăn của trẻ sẽ quyết định đến số lượng cần thiết.</p>\n<p>Lu&ocirc;n sử dụng muỗng đo lường k&egrave;m theo. Mỗi muỗng chứa 4,3 g Hallo Baby 2 Infant Formula.</p>\n</div>\n<div class=\"py-2\">\n<h4>Danh s&aacute;ch th&agrave;nh phần cụ thể chứa trong Hallo Baby 2 Infant Formula:</h4>\n<p>Sữa t&aacute;ch b&eacute;o, Lactose, Dầu thực vật (dầu đậu n&agrave;nh, dầu dừa, dầu hướng dương, dầu ng&ocirc;), GOS, OPO, bột Whey protein c&ocirc; đặc, Whey protein thủy ph&acirc;n c&ocirc; đặc, FOS, CPP,.</p>\n<p>Kho&aacute;ng chất: Canxi photphat, Kali photphat, Natri clorua, Magie Clorua, Canxi Cacbonat, Magie sunfat, Kali Clorua, Sulfat sắt, Kẽm sulfat, Sulfat Cupric, Mangan sulfat, Kali iotua, Natri selen.</p>\n<p>Vitamin: Vitamin A acetate, Cholrcalciferol, di-a-tocopherol acetate, hỗn hợp tocopherol concentrate, phytomenadione, L-ascorbic acid, Ascorbyl palmitate, Thiamine hydrochloride, Rioflavin, Niacinamide, Calcium D-Pantothenate, Pyridoxine hydrochloride, D-biotin, Folic acid, Cyanocobalamine, Lexitin đậu n&agrave;nh, ARA, DHA, Choline clorua.</p>\n<p>Nucleotides: Edenosine 5&rsquo;-monophosphate, Cytidine 5&rsquo;-monophosphate, Guanosin 5&rsquo;-monophosphate, Inosine 5&rsquo;-monophosphate, Uridine 5&rsquo;-monophosphate, Lactoferrin, Taurine, Inositol, L-Carnitine, Lutein, Bifidobacterium animalis BB-12.</p>\n</div>', 'ACTIVE', NULL, '2023-09-05 20:08:00', '2023-09-14 00:43:30', '[\"services/image_2023-09-07_112221471.png\",\"services/image_2023-09-07_112419187.png\",\"services/image_2023-09-07_112329710.png\",\"services/image_2023-09-07_112606822.png\"]', 699000),
(11, 'Sữa Hallo Baby 3 Infant Formula', 'sua-hallo-baby-3-infant-formula', 'Sữa Hallo Baby 3 Infant Formula là loại sữa dành cho trẻ từ 10 tháng tuổi trở lên, được sản xuất bởi công ty FrieslandCampina', 710000, 'services/September2023/X9rB6YHFn7yO5Bk2ZvJb.png', '<h2><span id=\"Gioi_thieu_ve_Sua_Hallo_Baby_3_Infant_Formula\">Giới thiệu về Sữa Hallo Baby 3 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; loại sữa d&agrave;nh cho trẻ từ 10 th&aacute;ng tuổi trở l&ecirc;n, được sản xuất bởi c&ocirc;ng ty FrieslandCampina. Sản phẩm n&agrave;y được chứng nhận đạt ti&ecirc;u chuẩn chất lượng cao v&agrave; đảm bảo đầy đủ dinh dưỡng cho b&eacute;.</p>\n<p>Đặc điểm của Sữa Hallo Baby 3 Infant Formula l&agrave; chứa c&ocirc;ng thức ph&ugrave; hợp với sự ph&aacute;t triển to&agrave;n diện của b&eacute;, bao gồm c&aacute;c th&agrave;nh phần như DHA, protein cao cấp, chất xơ, c&aacute;c vitamin v&agrave; kho&aacute;ng chất c&oacute; lợi cho sự ph&aacute;t triển tr&iacute; n&atilde;o, hệ ti&ecirc;u h&oacute;a v&agrave; hệ miễn dịch của b&eacute;.</p>\n<p>Ngo&agrave;i ra, Sữa Hallo Baby 3 Infant Formula c&ograve;n c&oacute; hương vị thơm ngon v&agrave; dễ uống, kh&ocirc;ng g&acirc;y kh&oacute; chịu hay kh&oacute; ti&ecirc;u h&oacute;a cho b&eacute;. Đồng thời, sản phẩm n&agrave;y cũng được đ&oacute;ng g&oacute;i tiện lợi cho c&aacute;c b&agrave; mẹ dễ d&agrave;ng sử dụng v&agrave; mang theo khi đưa trẻ đi du lịch hay đi chơi.</p>\n<p>T&oacute;m lại, Sữa Hallo Baby 3 Infant Formula l&agrave; một lựa chọn tốt v&agrave; đ&aacute;ng tin cậy cho c&aacute;c bậc phụ huynh trong việc bảo vệ sức khỏe v&agrave; sự ph&aacute;t triển to&agrave;n diện cho b&eacute; y&ecirc;u của m&igrave;nh.</p>\n<h2><span id=\"Thanh_phan_cua_Sua_Hallo_Baby_3_Infant_Formula\">Th&agrave;nh phần của Sữa Hallo Baby 3 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; sản phẩm dinh dưỡng được sản xuất cho trẻ sơ sinh từ 12 th&aacute;ng tuổi trở l&ecirc;n. Th&agrave;nh phần của sữa n&agrave;y bao gồm:</p>\n<p>1. Chất đạm: Sữa Hallo Baby 3 Infant Formula chứa protein sữa để hỗ trợ việc ph&aacute;t triển cơ bắp, tăng cường sức khỏe v&agrave; th&uacute;c đẩy sự ph&aacute;t triển của b&eacute;.</p>\n<p>2. Chất b&eacute;o: Sữa Hallo Baby 3 Infant Formula cung cấp c&aacute;c loại chất b&eacute;o kh&aacute;c nhau như axit b&eacute;o kh&ocirc;ng no, axit b&eacute;o no đơn, axit b&eacute;o no đa, omega-3, omega-6 v&agrave; omega-9 để gi&uacute;p trẻ ph&aacute;t triển tr&iacute; n&atilde;o v&agrave; hệ thần kinh.</p>\n<p>3. Carbohydrates: Sữa Hallo Baby 3 Infant Formula chứa lactose v&agrave; maltodextrin để cung cấp năng lượng cho trẻ.</p>\n<p>4. Vitamin v&agrave; kho&aacute;ng chất: Sữa Hallo Baby 3 Infant Formula chứa c&aacute;c vitamin v&agrave; kho&aacute;ng chất như vitamin A, C, D, E, K, B1, B2, B3, B5, B6, B7, B9, B12, canxi, sắt, magi&ecirc;, kẽm, đồng, iốt, molypden để gi&uacute;p hỗ trợ đ&aacute;p ứng nhu cầu dinh dưỡng của trẻ.</p>\n<p>Sữa Hallo Baby 3 Infant Formula cam kết kh&ocirc;ng chứa gluten, laktosa kh&ocirc;ng ti&ecirc;u h&oacute;a hoặc một số th&agrave;nh phần kh&ocirc;ng được chấp nhận kh&aacute;c, đảm bảo giữ cho trẻ em của bạn được cung cấp sức khỏe v&agrave; dinh dưỡng tốt nhất.</p>\n<h2><span id=\"Cac_thanh_phan_dinh_duong_trong_Sua_Hallo_Baby_3_Infant_Formula\">C&aacute;c th&agrave;nh phần dinh dưỡng trong Sữa Hallo Baby 3 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; loại sữa d&agrave;nh cho b&eacute; từ 12 th&aacute;ng đến 3 tuổi, được sản xuất v&agrave; nhập khẩu từ Đức. Sữa Hallo Baby 3 Infant Formula được l&agrave;m từ c&aacute;c th&agrave;nh phần dinh dưỡng cần thiết để gi&uacute;p b&eacute; ph&aacute;t triển v&agrave; khỏe mạnh.</p>\n<p>Đầu ti&ecirc;n, sữa Hallo Baby 3 Infant Formula chứa đầy đủ c&aacute;c chất đạm cần thiết như protein. Đ&acirc;y l&agrave; th&agrave;nh phần quan trọng nhất trong việc x&acirc;y dựng v&agrave; ph&aacute;t triển c&aacute;c tế b&agrave;o trong cơ thể của b&eacute;. Protein c&oacute; thể gi&uacute;p b&eacute; phục hồi nhanh ch&oacute;ng v&agrave; tăng cường sức đề kh&aacute;ng cho cơ thể.</p>\n<p>Thứ hai, sữa Hallo Baby 3 Infant Formula cũng c&oacute; chứa c&aacute;c chất b&eacute;o, carbohydrate v&agrave; vitamin. Chất b&eacute;o c&oacute; vai tr&ograve; quan trọng trong việc cung cấp năng lượng cho cơ thể của b&eacute; v&agrave; gi&uacute;p giữ cho da v&agrave; t&oacute;c của b&eacute; tr&ocirc;ng khỏe mạnh. Carbohydrate cung cấp năng lượng dồi d&agrave;o cho cơ thể, v&agrave; vitamin gi&uacute;p tăng cường hệ miễn dịch cho b&eacute;.</p>\n<p>Cuối c&ugrave;ng, sữa Hallo Baby 3 Infant Formula cũng chứa c&aacute;c kho&aacute;ng chất cần thiết cho sự ph&aacute;t triển của b&eacute;, như canxi, sắt v&agrave; kẽm. Canxi l&agrave; th&agrave;nh phần quan trọng trong việc x&acirc;y dựng xương v&agrave; răng, trong khi sắt gi&uacute;p cơ thể hấp thu oxy tốt hơn v&agrave; kẽm c&oacute; t&aacute;c dụng gi&uacute;p tăng cường chức năng miễn dịch của cơ thể.</p>\n<p>T&oacute;m lại, sữa Hallo Baby 3 Infant Formula l&agrave; một giai đoạn quan trọng trong việc gi&uacute;p b&eacute; ph&aacute;t triển v&agrave; khỏe mạnh. Với c&aacute;c th&agrave;nh phần dinh dưỡng đầy đủ, sữa Hallo Baby 3 Infant Formula gi&uacute;p b&eacute; nhận được sự ph&aacute;t triển tối đa trong qu&aacute; tr&igrave;nh lớn l&ecirc;n.</p>\n<h2><span id=\"Cong_dung_cua_Sua_Hallo_Baby_3_Infant_Formula\">C&ocirc;ng dụng của Sữa Hallo Baby 3 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; loại sữa c&ocirc;ng thức d&agrave;nh cho trẻ từ 12 th&aacute;ng đến 36 th&aacute;ng tuổi. Sản phẩm n&agrave;y được sản xuất với c&ocirc;ng nghệ ti&ecirc;n tiến, sử dụng c&aacute;c th&agrave;nh phần chất lượng cao, gi&uacute;p cung cấp đầy đủ dinh dưỡng cho sự ph&aacute;t triển của trẻ.</p>\n<p>C&ocirc;ng dụng của Sữa Hallo Baby 3 Infant Formula rất đa dạng. Đầu ti&ecirc;n l&agrave; gi&uacute;p tăng cường hệ miễn dịch cho trẻ nhỏ, gi&uacute;p chống lại c&aacute;c bệnh tật như cảm c&uacute;m, vi&ecirc;m đường h&ocirc; hấp v&agrave; c&aacute;c bệnh nhiễm tr&ugrave;ng kh&aacute;c. Khả năng hấp thu v&agrave; ti&ecirc;u h&oacute;a của trẻ cũng được tăng cường, gi&uacute;p trẻ ph&aacute;t triển chiều cao v&agrave; c&acirc;n nặng tốt hơn.</p>\n<p>Ngo&agrave;i ra, Sữa Hallo Baby 3 Infant Formula c&ograve;n gi&uacute;p cải thiện chức năng n&atilde;o bộ, hỗ trợ sự ph&aacute;t triển tr&iacute; tuệ v&agrave; thị lực của trẻ. C&aacute;c th&agrave;nh phần trong sữa cũng gi&uacute;p bảo vệ ung thư v&agrave; giảm nguy cơ bệnh tim mạch cho trẻ.</p>\n<p>Đặc biệt, Sữa Hallo Baby 3 Infant Formula c&ograve;n c&oacute; thể gi&uacute;p giảm triệu chứng dị ứng thực phẩm ở trẻ nhỏ, nhờ v&agrave;o c&aacute;c th&agrave;nh phần kh&ocirc;ng g&acirc;y dị ứng như protein sữa b&ograve; hydrolyzed. Sản phẩm n&agrave;y cũng dễ ti&ecirc;u h&oacute;a v&agrave; kh&ocirc;ng g&acirc;y đầy hơi, buồn n&ocirc;n hay ti&ecirc;u chảy cho trẻ.</p>\n<p>T&oacute;m lại, Sữa Hallo Baby 3 Infant Formula l&agrave; một sản phẩm rất tốt cho sự ph&aacute;t triển v&agrave; tăng cường sức khỏe của trẻ nhỏ. Với c&aacute;c th&agrave;nh phần dinh dưỡng tối ưu, c&ocirc;ng thức nghi&ecirc;n cứu kỹ lưỡng v&agrave; an to&agrave;n, sản phẩm n&agrave;y đ&aacute;p ứng được c&aacute;c y&ecirc;u cầu của mẹ v&agrave; b&eacute; về dinh dưỡng v&agrave; sức khỏe.</p>\n<h2><span id=\"Huong_dan_su_dung_Sua_Hallo_Baby_3_Infant_Formula\">Hướng dẫn sử dụng Sữa Hallo Baby 3 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; sản phẩm sữa c&ocirc;ng thức d&agrave;nh cho trẻ từ 1 đến 3 tuổi, được sản xuất v&agrave; nhập khẩu từ Đức với c&aacute;c th&agrave;nh phần cần thiết để gi&uacute;p b&eacute; ph&aacute;t triển tốt nhất.</p>\n<p>Để sử dụng Sữa Hallo Baby 3 Infant Formula, đầu ti&ecirc;n cần tiệt tr&ugrave;ng b&igrave;nh sữa, b&igrave;nh sữa v&agrave; tay sạch sẽ. Tiếp theo, đo lượng nước cần cho b&eacute; tương ứng với bảng chỉ dẫn tr&ecirc;n bao b&igrave; sản phẩm. Sau đ&oacute;, d&ugrave;ng th&igrave;a bột sữa theo tỷ lệ đ&uacute;ng với chỉ dẫn tr&ecirc;n bao b&igrave; sản phẩm v&agrave; đổ v&agrave;o b&igrave;nh sữa.</p>\n<p>Sau khi đổ bột sữa v&agrave;o b&igrave;nh, đậy nắp b&igrave;nh v&agrave; lắc đều cho bột sữa tan đều. Sau đ&oacute;, đun s&ocirc;i nước hoặc h&acirc;m n&oacute;ng nước đến khoảng 40 độ C v&agrave; cho nước v&agrave; bột sữa v&agrave;o b&igrave;nh sữa đ&atilde; đựng sẵn. Sau đ&oacute;, lắc đều v&agrave; thử nhiệt độ nước để đảm bảo nước đ&atilde; được h&ograve;a tan đều.</p>\n<p>Trước khi đưa b&igrave;nh sữa cho b&eacute;, cần kiểm tra lại nhiệt độ của sữa, v&igrave; b&eacute; chỉ n&ecirc;n uống sữa ở nhiệt độ ph&ugrave; hợp để đảm bảo b&eacute; tr&aacute;nh khỏi vi&ecirc;m đường ti&ecirc;u h&oacute;a. Ngo&agrave;i ra, cũng cần phải giữ b&igrave;nh sữa vệ sinh v&agrave; thường xuy&ecirc;n kiểm tra b&igrave;nh sữa để đảm bảo sản phẩm lu&ocirc;n đảm bảo an to&agrave;n tuyệt đối cho b&eacute;.</p>\n<p>T&oacute;m lại, khi sử dụng Sữa Hallo Baby 3 Infant Formula, bạn cần ch&uacute; &yacute; đến một số điểm quan trọng như vệ sinh, nhiệt độ v&agrave; c&aacute;c chỉ dẫn đ&uacute;ng đắn để đảm bảo b&eacute; sẽ được cung cấp đầy đủ dinh dưỡng v&agrave; an to&agrave;n tuyệt đối.</p>\n<h2><span id=\"Tac_dung_phu_va_luu_y_khi_su_dung_Sua_Hallo_Baby_3_Infant_Formula\">T&aacute;c dụng phụ v&agrave; lưu &yacute; khi sử dụng Sữa Hallo Baby 3 Infant Formula</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; một loại sữa d&agrave;nh cho trẻ em từ 1 đến 3 tuổi. Tuy nhi&ecirc;n, t&aacute;c dụng phụ của sữa n&agrave;y c&oacute; thể g&acirc;y ra một số vấn đề cho sức khỏe của trẻ nhỏ nếu kh&ocirc;ng sử dụng đ&uacute;ng c&aacute;ch.</p>\n<p>Một trong những t&aacute;c dụng phụ ch&iacute;nh của sữa Hallo Baby 3 Infant Formula l&agrave; ti&ecirc;u chảy v&agrave; kh&oacute; ti&ecirc;u, đặc biệt l&agrave; khi trẻ sử dụng qu&aacute; nhiều hoặc vượt qu&aacute; liều lượng được khuyến c&aacute;o. Ngo&agrave;i ra, trẻ cũng c&oacute; thể bị t&aacute;o b&oacute;n do th&agrave;nh phần sữa Hallo Baby 3 Infant Formula kh&aacute;c nhau.</p>\n<p>Ngo&agrave;i ra, sữa Hallo Baby 3 Infant Formula cũng c&oacute; thể g&acirc;y ra dị ứng đối với một số trẻ em, g&acirc;y ra c&aacute;c triệu chứng như da kh&ocirc;, ngứa, v&agrave; ph&aacute;t ban. Trong trường hợp n&agrave;y, phụ huynh n&ecirc;n ngưng sử dụng sữa v&agrave; tham khảo &yacute; kiến ​​ của b&aacute;c sĩ để được thăm kh&aacute;m v&agrave; điều trị kịp thời.</p>\n<p>Để đảm bảo an to&agrave;n v&agrave; sức khỏe cho trẻ nhỏ, phụ huynh n&ecirc;n tu&acirc;n thủ c&aacute;c hướng dẫn đ&uacute;ng c&aacute;ch sử dụng được đưa ra tr&ecirc;n bao b&igrave; v&agrave; hạn chế sử dụng qu&aacute; mức liều lượng khuyến c&aacute;o. Ngo&agrave;i ra, phụ huynh cũng n&ecirc;n thỉnh thoảng kiểm tra trẻ để đảm bảo sức khỏe tốt v&agrave; ph&aacute;t hiện vấn đề sớm, nếu c&oacute;.</p>\n<p>T&oacute;m lại, sữa Hallo Baby 3 Infant Formula c&oacute; t&aacute;c dụng phụ kh&aacute; đ&aacute;ng lo ngại đối với trẻ nhỏ nếu kh&ocirc;ng sử dụng đ&uacute;ng c&aacute;ch. N&ecirc;n đảm bảo tu&acirc;n thủ đ&uacute;ng hướng dẫn để tr&aacute;nh g&acirc;y hại cho sức khỏe của trẻ.</p>\n<h2><span id=\"Tong_ket_ve_Sua_Hallo_Baby_3_Infant_Formula\">Tổng kết về Sữa Hallo Baby 3 Infant Formula.</span></h2>\n<p>Sữa Hallo Baby 3 Infant Formula l&agrave; d&ograve;ng sản phẩm sữa c&ocirc;ng thức cho trẻ em từ 1-3 tuổi, được sản xuất bởi c&ocirc;ng ty Hallo Baby. Đ&acirc;y l&agrave; một loại sữa chuẩn Quốc tế, đ&aacute;p ứng đầy đủ c&aacute;c y&ecirc;u cầu dinh dưỡng của trẻ trong độ tuổi n&agrave;y.</p>\n<p>Sản phẩm n&agrave;y c&oacute; th&agrave;nh phần ch&iacute;nh gồm: sữa bột nguy&ecirc;n kem, lactose, dầu thực vật, vitamin v&agrave; kho&aacute;ng chất cần thiết. Đặc biệt, Sữa Hallo Baby 3 Infant Formula c&ograve;n được bổ sung th&ecirc;m chất xơ v&agrave; taurin, gi&uacute;p trẻ ph&aacute;t triển to&agrave;n diện hơn.</p>\n<p>Sữa Hallo Baby 3 Infant Formula được sản xuất tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ hiện đại, đảm bảo an to&agrave;n thực phẩm v&agrave; chất lượng đồng đều. Sản phẩm được đ&oacute;ng g&oacute;i k&iacute;n đ&aacute;o, đảm bảo sự tươi ngon v&agrave; dễ d&agrave;ng sử dụng.</p>\n<p>Theo đ&aacute;nh gi&aacute; từ c&aacute;c b&aacute;c sĩ chuy&ecirc;n khoa dinh dưỡng, Sữa Hallo Baby 3 Infant Formula c&oacute; thể cung cấp đủ chất dinh dưỡng cho trẻ trong độ tuổi n&agrave;y. Ngo&agrave;i ra, sản phẩm c&ograve;n gi&uacute;p tăng cường hệ miễn dịch, hỗ trợ sự ph&aacute;t triển của n&atilde;o bộ v&agrave; tăng cường sức đề kh&aacute;ng cho trẻ.</p>\n<p>Tuy nhi&ecirc;n, khi sử dụng Sữa Hallo Baby 3 Infant Formula, c&aacute;c bậc phụ huynh cần lưu &yacute; pha chế đ&uacute;ng hướng dẫn tr&ecirc;n bao b&igrave; sản phẩm để đảm bảo c&acirc;n bằng dinh dưỡng cho trẻ. Nếu pha chế kh&ocirc;ng đ&uacute;ng c&aacute;ch c&oacute; thể g&acirc;y độc hại cho sức khỏe của b&eacute;.</p>\n<p>T&oacute;m lại, Sữa Hallo Baby 3 Infant Formula l&agrave; một sản phẩm được đ&aacute;nh gi&aacute; cao về độ an to&agrave;n thực phẩm v&agrave; chất lượng dinh dưỡng. Đ&acirc;y l&agrave; một lựa chọn tốt cho bậc phụ huynh muốn cung cấp đầy đủ dinh dưỡng v&agrave; bảo vệ sức khỏe cho con em m&igrave;nh.</p>', 'ACTIVE', NULL, '2023-09-05 20:09:00', '2023-09-14 00:30:52', '[\"services/image_2023-09-07_112221471.png\",\"services/image_2023-09-07_112329710.png\",\"services/image_2023-09-07_112419187.png\",\"services/image_2023-09-07_112606822.png\"]', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `service_questions`
--

CREATE TABLE `service_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_questions`
--

INSERT INTO `service_questions` (`id`, `service_id`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 7, 4, NULL, NULL),
(2, 7, 5, NULL, NULL),
(3, 6, 4, NULL, NULL),
(4, 5, 6, NULL, NULL),
(5, 8, 4, NULL, NULL),
(6, 8, 5, NULL, NULL),
(7, 9, 4, NULL, NULL),
(8, 10, 6, NULL, NULL),
(9, 11, 4, NULL, NULL),
(10, 11, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'CÔNG TY CỔ PHẦN ANH PHÚ CƯỜNG', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'CÔNG TY CỔ PHẦN ANH PHÚ CƯỜNG', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/September2023/fnIlkKcnJ8c2bqVHKSrW.png', '', 'image', 3, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Admin panel', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Admin panel. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(13, 'site.address', 'address', 'Số 181 ngõ 254 Minh Khai, phường Mai Động, quận Hoàng Mai, thành phố Hà Nội', NULL, 'text', 8, 'Site'),
(14, 'site.phone', 'phone', '19008690', NULL, 'text', 9, 'Site'),
(15, 'site.email', 'email', 'contact@hallobaby.vn', NULL, 'text', 10, 'Site'),
(18, 'site.breadcrumb', 'breadcrumb', 'settings/August2023/8Bpn3FGS1hJYRwIRM58c.png', NULL, 'image', 13, 'Site'),
(20, 'site.facebook', 'link facebook', 'https://www.facebook.com/kennatech.vn/', NULL, 'text', 14, 'Site'),
(21, 'site.zalo', 'Link zalo', 'https://zalo.me/', NULL, 'text', 15, 'Site'),
(22, 'site.img-cart', 'img-cart', 'settings/September2023/mu82OEoXW6cnzkpKIBNj.png', NULL, 'image', 16, 'Site'),
(23, 'site.ĐKKD', 'ĐKKD', '0106473207', NULL, 'text', 17, 'Site'),
(24, 'site.date', 'date', '04/03/2014', NULL, 'text', 18, 'Site'),
(27, 'site-en.title_en', 'title_en', 'ANH PHU CUONG JOINT STOCK COMPANY', NULL, 'text', 21, 'Site_en'),
(28, 'site-en.address_en', 'address_en', 'No. 181, lane 254 Minh Khai, Mai Dong ward, Hoang Mai district, Hanoi city', NULL, 'text', 22, 'Site_en');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(31, 'camketsanphams', 'title', 2, 'en', 'ARLA\'s COMMITMENT', '2023-09-07 20:12:16', '2023-09-07 20:44:11'),
(32, 'camketsanphams', 'field1', 2, 'en', 'Verified origin', '2023-09-07 20:12:16', '2023-09-07 20:44:11'),
(33, 'camketsanphams', 'field2', 2, 'en', 'Commitment to quality', '2023-09-07 20:12:16', '2023-09-07 20:44:11'),
(34, 'camketsanphams', 'field3', 2, 'en', 'Legal commitment', '2023-09-07 20:12:16', '2023-09-07 20:44:11'),
(35, 'menu_items', 'title', 14, 'en', 'Home', '2023-09-07 20:37:58', '2023-09-07 20:37:58'),
(36, 'menu_items', 'title', 32, 'en', 'About', '2023-09-07 20:38:08', '2023-09-07 20:38:08'),
(37, 'menu_items', 'title', 17, 'en', 'About', '2023-09-07 20:38:22', '2023-09-07 20:38:22'),
(38, 'menu_items', 'title', 15, 'en', 'Commit', '2023-09-07 20:38:37', '2023-09-07 20:38:37'),
(39, 'menu_items', 'title', 37, 'en', 'About us', '2023-09-07 20:38:54', '2023-09-07 20:38:54'),
(40, 'menu_items', 'title', 22, 'en', 'Products', '2023-09-07 20:39:14', '2023-09-07 20:39:14'),
(41, 'menu_items', 'title', 19, 'en', 'Posts', '2023-09-07 20:39:24', '2023-09-07 20:39:24'),
(42, 'menu_items', 'title', 38, 'en', 'Promotion', '2023-09-07 20:39:36', '2023-09-07 20:39:36'),
(43, 'menu_items', 'title', 18, 'en', 'Agent registration', '2023-09-07 20:40:24', '2023-09-07 20:40:24'),
(44, 'camketsanphams', 'title', 1, 'en', 'OUTSTANDING NUTRIENTS', '2023-09-07 20:45:03', '2023-09-07 20:45:03'),
(45, 'camketsanphams', 'field1', 1, 'en', 'CPP: Help children improve their height', '2023-09-07 20:45:03', '2023-09-07 20:45:03'),
(46, 'camketsanphams', 'field2', 1, 'en', 'Lactoferrin: Excellent antibody for healthy resistance', '2023-09-07 20:45:03', '2023-09-08 18:09:47'),
(47, 'camketsanphams', 'field3', 1, 'en', 'OPO fat: Increases calcium absorption, reduces constipation', '2023-09-07 20:45:03', '2023-09-08 18:09:47'),
(48, 'services', 'title', 11, 'en', 'Hallo Baby 3 Infant Formula', '2023-09-07 20:53:21', '2023-09-07 20:53:21'),
(49, 'services', 'price', 11, 'en', '710000', '2023-09-07 20:53:21', '2023-09-07 20:53:21'),
(50, 'services', 'desc', 11, 'en', 'Hallo Baby 3 Infant Formula milk is a type of milk for children 10 months and older, produced by FrieslandCampina company.', '2023-09-07 20:53:21', '2023-09-07 20:53:21'),
(51, 'services', 'body', 11, 'en', '<p>About Hallo Baby 3 Infant Formula</p>\n<p>Hallo Baby 3 Infant Formula milk is a type of milk for children 10 months and older, produced by FrieslandCampina company. This product is certified to meet high quality standards and ensures complete nutrition for your baby.</p>\n<p>The characteristic of Hallo Baby 3 Infant Formula Milk is that it contains a formula suitable for the baby\'s comprehensive development, including ingredients such as DHA, high-quality protein, fiber, vitamins and minerals that are beneficial for development. baby\'s brain, digestive system and immune system.</p>\n<p>In addition, Hallo Baby 3 Infant Formula Milk also has a delicious taste and is easy to drink, without causing discomfort or difficulty digesting the baby. At the same time, this product is also conveniently packaged for mothers to easily use and carry when taking their children to travel or go out.</p>\n<p>In short, Hallo Baby 3 Infant Formula Milk is a good and reliable choice for parents in protecting the health and comprehensive development of their babies.</p>\n<p>Ingredients of Hallo Baby 3 Infant Formula</p>\n<p>Hallo Baby 3 Infant Formula is a nutritional product formulated for infants 12 months of age and older. The ingredients of this milk include:</p>\n<p>1. Protein: Hallo Baby 3 Infant Formula contains milk protein to support muscle development, enhance health and promote baby\'s growth.</p>\n<p>2. Fat: Hallo Baby 3 Infant Formula provides different types of fats such as unsaturated fatty acids, monounsaturated fatty acids, polyunsaturated fatty acids, omega-3, omega-6 and omega-9 to help children develop. brain and nervous system development.</p>\n<p>3. Carbohydrates: Hallo Baby 3 Infant Formula milk contains lactose and maltodextrin to provide energy for children.</p>\n<p>4. Vitamins and minerals: Hallo Baby 3 Infant Formula milk contains vitamins and minerals such as vitamins A, C, D, E, K, B1, B2, B3, B5, B6, B7, B9, B12, calcium, iron , magnesium, zinc, copper, iodine, molybdenum to help support your child\'s nutritional needs.</p>\n<p>Hallo Baby 3 Infant Formula milk is committed to being free of gluten, indigestible laktosa or some other unacceptable ingredients, ensuring to keep your children provided with the best health and nutrition.</p>\n<p>Nutritional ingredients in Hallo Baby 3 Infant Formula Milk</p>\n<p>Hallo Baby 3 Infant Formula milk is milk for babies from 12 months to 3 years old, produced and imported from Germany. Hallo Baby 3 Infant Formula milk is made from essential nutritional ingredients to help your baby grow and stay healthy.</p>\n<p>First, Hallo Baby 3 Infant Formula milk contains all the necessary nutrients such as protein. This is the most important ingredient in building and developing cells in your baby\'s body. Protein can help your baby recover quickly and strengthen the body\'s resistance.</p>\n<p>Second, Hallo Baby 3 Infant Formula milk also contains fats, carbohydrates and vitamins. Fats play an important role in providing energy for your baby\'s body and help keep your baby\'s skin and hair looking healthy. Carbohydrates provide abundant energy for the body, and vitamins help strengthen your baby\'s immune system.</p>\n<p>Finally, Hallo Baby 3 Infant Formula also contains minerals necessary for your baby\'s development, such as calcium, iron and zinc. Calcium is an important ingredient in building bones and teeth, while iron helps the body absorb oxygen better and zinc helps strengthen the body\'s immune function.</p>\n<p>In short, Hallo Baby 3 Infant Formula milk is an important stage in helping your baby grow and stay healthy. With complete nutritional ingredients, Hallo Baby 3 Infant Formula milk helps your baby receive maximum development while growing up.</p>\n<p>Uses of Hallo Baby 3 Infant Formula Milk</p>\n<p>Hallo Baby 3 Infant Formula is a formula milk for children from 12 months to 36 months old. This product is manufactured with advanced technology, using high quality ingredients, to help provide adequate nutrition for children\'s development.</p>\n<p>The uses of Hallo Baby 3 Infant Formula are very diverse. The first is to help strengthen the immune system of young children, helping to fight diseases such as colds, respiratory infections and other infections. Children\'s ability to absorb and digest is also enhanced, helping children develop better height and weight.</p>\n<p>In addition, Hallo Baby 3 Infant Formula also helps improve brain function, supporting the intellectual development and vision of children. Components in milk also help protect against cancer and reduce the risk of cardiovascular disease for children.</p>\n<p>In particular, Hallo Baby 3 Infant Formula can also help reduce food allergy symptoms in young children, thanks to hypoallergenic ingredients such as hydrolyzed cow\'s milk protein. This product is also easy to digest and does not cause bloating, nausea or diarrhea in children.</p>\n<p>In short, Hallo Baby 3 Infant Formula is a very good product for the development and health promotion of young children. With optimal nutritional ingredients, carefully researched formula and safety, this product meets the requirements of mother and baby for nutrition and health.</p>\n<p>How to use Hallo Baby 3 Infant Formula</p>\n<p>Hallo Baby 3 Infant Formula milk is a product</p>', '2023-09-07 20:53:21', '2023-09-08 01:57:20'),
(52, 'services', 'title', 10, 'en', 'Hallo Baby 2 Formula', '2023-09-07 20:53:50', '2023-09-07 20:54:33'),
(53, 'services', 'price', 10, 'en', '730000', '2023-09-07 20:53:50', '2023-09-07 20:53:50'),
(54, 'services', 'desc', 10, 'en', 'Hallo Baby 2 formula milk is made from cow\'s milk and contains fibre, vitamins and minerals recommended for children 12 - 36 months', '2023-09-07 20:53:50', '2023-09-07 20:54:33'),
(55, 'services', 'body', 10, 'en', '<div class=\"milk-one\">\n<p>Hallo Baby 2 Infant Formula</p>\n<p>&ndash; Origin: Denmark</p>\n<p>&ndash; Hallo Baby 2 formula milk is made from cow\'s milk and contains fiber, vitamins and minerals recommended for children from 12 - 36 months.</p>\n<p>&ndash; Weight: 800 g</p>\n<p>Hallo Baby 2 formula milk is made from cow\'s milk and contains fibre, vitamins and minerals recommended for children 12 - 36 months.</p>\n<p>Warning: Follow product preparation, storage and disposal instructions carefully as improper preparation and storage may endanger your baby\'s health.</p>\n<p>Baby food servings with Hallo Baby 2 Infant Formula:</p>\n<p>Hallo Baby 2 Infant Formula is suitable for special nutritional use for children aged 12 - 36 months.</p>\n<p>Hallo Baby 2 Infant Formula is provided with a full range of nutrients to help your baby develop comprehensively, gain weight, increase height, and develop a smart brain.</p>\n<p>Hallo baby 2 Infant Formula is the number 1 choice of mothers in Denmark for children aged 12 - 36 months.</p>\n<p>Products produced at Arla Foods are among the top 10 largest dairy factories in the world with 18,765 employees and annual revenue of about 12.4 billion USD.</p>\n<p>The table below includes dosage instructions. However, the child\'s appetite will determine the amount needed.</p>\n<p>Always use the included measuring spoon. Each scoop contains 4.3 g of Hallo Baby 2 Infant Formula.</p>\n<p>List of specific ingredients contained in Hallo Baby 2 Infant Formula:</p>\n<p>Skimmed milk, Lactose, Vegetable oil (soybean oil, coconut oil, sunflower oil, corn oil), GOS, OPO, Whey protein powder concentrate, Whey protein hydrolyzate concentrate, FOS, CPP,.</p>\n<p>Minerals: Calcium phosphate, Potassium phosphate, Sodium chloride, Magnesium Chloride, Calcium Carbonate, Magnesium sulfate, Potassium Chloride, Iron sulfate, Zinc sulfate, Cupric sulfate, Manganese sulfate, Potassium iodide, Sodium selenium.</p>\n<p>Vitamins: Vitamin A acetate, Cholrcalciferol, di-a-tocopherol acetate, mixed tocopherol concentrate, phytomenadione, L-ascorbic acid, Ascorbyl palmitate, Thiamine hydrochloride, Rioflavin, Niacinamide, Calcium D-Pantothenate, Pyridoxine hydrochloride, D-biotin, Folic acid, Cyanocobalamine, Soy Lecithin, ARA, DHA, Choline chloride.</p>\n<p>Nucleotides: Edenosine 5\'-monophosphate, Cytidine 5\'-monophosphate, Guanosine 5\'-monophosphate, Inosine 5\'-monophosphate, Uridine 5\'-monophosphate, Lactoferrin, Taurine, Inositol, L-Carnitine, Lutein, Bifidobacterium animalis BB-12.</p>\n</div>', '2023-09-07 20:53:50', '2023-09-08 01:56:51'),
(56, 'services', 'title', 9, 'en', 'Hallo Baby 1 Infant Formula', '2023-09-07 20:55:05', '2023-09-07 20:55:05'),
(57, 'services', 'price', 9, 'en', '750000', '2023-09-07 20:55:05', '2023-09-07 20:55:05'),
(58, 'services', 'desc', 9, 'en', 'Hallo Baby 1 Infant Formula is a milk for babies, produced and imported from Germany.', '2023-09-07 20:55:05', '2023-09-07 20:55:05'),
(59, 'services', 'body', 9, 'en', '<p>About Hallo Baby 1 Infant Formula</p>\n<p>Hallo Baby 1 Infant Formula is a milk for babies, produced and imported from Germany. With the main ingredient is pure fresh cow\'s milk and essential minerals for baby\'s development such as protein, starch, lipid, lactose, Calcium, Vitamin D3 and many other vitamins and minerals.</p>\n<p>Hallo Baby 1 Infant Formula is specially designed to support the development and strengthen the immune system of newborn babies. It is the perfect product for mothers who cannot provide enough milk for their babies or for other reasons such as poor health or nutrition.</p>\n<p>Hallo Baby 1 Infant Formula is delicious, easy to drink and easy to absorb. It provides the baby with essential nutrients to strengthen the immune system, support the development of the brain and bones.</p>\n<p>Appearing on the Vietnamese market, Hallo Baby 1 Infant Formula has been recommended by doctors and trusted by mothers. It is a safe and reliable product for babies, helping them to develop comprehensively and healthy.</p>\n<p>Main ingredients of Hallo Baby 1 Infant Formula</p>\n<p>Hallo Baby 1 Infant Formula is a baby formula for babies from 0-6 months old. The main ingredients of this product include:<br>Milk Protein: Hallo Baby 1 Infant Formula contains 80% milk protein, equivalent to natural breast milk. Milk proteins help provide essential nutrients for the comprehensive development of children, especially the nervous and muscular systems.<br>Carbohydrates: Hallo Baby 1 Infant Formula uses lactose as a carbohydrate source. Lactose provides energy for the body, helps children gain weight and grow taller.<br>Fat: Hallo Baby 1 Infant Formula contains unsaturated fatty acids such as DHA, ARA, EPA, which play an important role in the development of the baby\'s brain, eyesight and immune system.<br>- Vitamins and minerals: Hallo Baby 1 Infant Formula provides a full range of vitamins and minerals necessary for the development of children, including vitamins A, B, C, D, E, minerals such as calcium, iron, zinc,&hellip;<br>- Probiotics: Hallo Baby 1 Infant Formula also contains probiotics (beneficial bacteria) to help balance the intestinal microflora and strengthen the child\'s resistance.</p>\n<p>Hallo Baby 1 Infant Formula is manufactured to high quality standards and is widely used in infant nutrition.</p>\n<p>Benefits of Hallo Baby 1 Infant Formula</p>\n<p>Hallo Baby 1 Infant Formula milk is a nutritional product specially designed for babies from 0 - 6 months old. Made from natural ingredients and guaranteed high quality, Hallo Baby 1 Infant Formula milk brings many benefits to the health and development of children.</p>\n<p>First, Hallo Baby 1 Infant Formula milk provides your baby with all the necessary nutrients for their comprehensive development. The product includes micronutrients, proteins, vitamins and minerals, helping to support your baby\'s height and weight growth.</p>\n<p>Second, Hallo Baby 1 Infant Formula milk is suitable for the baby\'s digestive system and is easily digested. From there, your baby will not have flatulence, diarrhea or constipation like other dairy products.</p>\n<p>In addition, Hallo Baby 1 Infant Formula milk also helps strengthen the child\'s immune system. The product contains nutritional ingredients with antibacterial properties to help protect your baby from infectious diseases.</p>\n<p>Finally, Hallo Baby 1 Infant Formula milk is manufactured according to high quality standards and is safe for babies. With careful care and nurturing, the product is always guaranteed to bring the highest nutritional value to children.</p>\n<p>With the above benefits, Hallo Baby 1 Infant Formula milk has become the top choice of parents for nutrition and comprehensive development of their babies.</p>\n<p>Instructions for using Hallo Baby 1 Infant Formula</p>\n<p>Hallo Baby 1 Infant Formula is a powdered milk product for infants from 0-6 months old. This is a product of Mead Johnson company, one of the leading children\'s health care milk brands on the market.</p>\n<p>Hallo Baby 1 Infant Formula milk is full of essential nutrients for your baby\'s comprehensive development, including DHA, ARA, indispensable vitamins and minerals. The product contains no preservatives, no gluten and no GMO.</p>\n<p>Using Hallo Baby 1 Infant Formula is very simple. You need to mix the milk according to the instructions on the package. First, you need to wash your hands and prepare the necessary tools including milk bottles, milk measuring spoons, boiling water and Hallo Baby 1 Infant Formula milk. Then, measure the amount of milk you need to mix and put it in the milk bottle, then measure the boiling water according to the ratio instructions on the packaging and pour it into the milk bottle. Then, use a milk measuring spoon to stir the mixture evenly. When the milk is warm enough, give it to your baby to drink.</p>\n<p>To preserve Hallo Baby 1 Infant Formula, you need to be careful so that the product is stored properly and used within the shortest time after opening. After use, you need to clean the milk bottle carefully before using it next time.</p>\n<p>In short, Hallo Baby 1 Infant Formula milk is a health care powdered milk product</p>', '2023-09-07 20:55:05', '2023-09-08 01:56:31'),
(60, 'services', 'title', 8, 'en', 'Hallo Baby MAMA', '2023-09-07 20:55:24', '2023-09-07 20:55:24'),
(61, 'services', 'price', 8, 'en', '550000', '2023-09-07 20:55:24', '2023-09-07 20:55:24'),
(62, 'services', 'desc', 8, 'en', 'Hallo Baby Mama is made from cow\'s milk and contains fiber, vitamins and minerals recommended for pregnant and lactating women.', '2023-09-07 20:55:24', '2023-09-07 20:55:24'),
(63, 'services', 'body', 8, 'en', '<p><span style=\"color: rgb(0, 0, 0);\"><strong>Introducing Hallo Baby Mama</strong></span></p>\n<p>Hallo Baby Mama is a milk product for pregnant and lactating mothers made in Germany with carefully selected ingredients and quality assurance.</p>\n<p>Hallo Baby Mama milk contains vitamins and minerals necessary for fetal development and breast milk. In addition, the product also adds fiber to help better digestion, cell regeneration and enhance immunity for both mother and baby.</p>\n<p>Hallo Baby Mama milk is produced using advanced technology, ensuring the safety and freshness of the product. The product does not contain preservatives and is gluten-free, ensuring safety for the health of mother and baby.</p>\n<p>Hallo Baby Mama milk is also designed with a delicious taste and easy to drink, making it easy for mothers to consume products and have enough energy to care for their baby.</p>\n<p>With the perfect combination of essential nutrients, safety and freshness, Hallo Baby Mama Milk is the perfect choice for pregnant and lactating mothers, helping to support the holistic and healthy growth for your baby!</p>\n<p><strong>Ingredients and uses of Hallo Baby Mama milk</strong></p>\n<p>Hallo Baby Mama milk is a milk product for pregnant or breastfeeding women. This milk contains some of the following main ingredients:</p>\n<p>DHA (docosahexaenoic acid): an omega-3 fatty acid important for infant brain and vision development.</p>\n<p>&ndash; Calcium: helps build and maintain strong bones and teeth for the fetus.</p>\n<p>&ndash; Folic acid: helps develop the heart, brain and other organs of the fetus.</p>\n<p>&ndash; Vitamin D: helps the body absorb calcium and phosphorus, helping to build healthy bones and teeth.</p>\n<p>&ndash; Protein: forms the basis for the growth and development of cells and tissues.</p>\n<p>Hallo Baby Mama milk has many uses for mother and baby as follows:</p>\n<p>&ndash; Supports normal growth and development of the fetus, especially the brain and eyesight.</p>\n<p>&ndash; Supplement calcium to develop healthy bones and teeth for the fetus.</p>\n<p>&ndash; Helps reduce the risk of stroke and cardiovascular diseases for mothers.</p>\n<p>&ndash; Prevent anemia and ensure normal fetal development.</p>\n<p>&ndash; Provides necessary nutrition for the mother and helps her maintain good health throughout pregnancy.</p>\n<p>Therefore, pregnant women should supplement with Hallo Baby Mama milk to ensure the development and health of the fetus and themselves.</p>\n<p><strong>Advantages of Hallo Baby Mama milk</strong></p>\n<p>Hallo Baby Mama milk is a milk product for pregnant and lactating women produced by Hallo company. This product has many outstanding advantages compared to other conventional milks.</p>\n<p>First, Hallo Baby Mama Milk contains all the nutrients needed by both mother and baby, including protein, calcium, iron, vitamin D and folic acid. These nutrients play an important role in the comprehensive development of the fetus.</p>\n<p>Next, this product is made from natural ingredients, does not contain harmful chemicals or artificial colors, ensuring safety for the health of mother and child. This helps mothers feel secure in using the product without worrying about it affecting their baby\'s health.</p>\n<p>Besides, Hallo Baby Mama Milk has a delicious taste, is easy to drink and comes in powder form to help bring convenience to users. Mothers can easily adjust the amount of milk they need for their baby without worrying about wasting it.</p>\n<p>In addition, Hallo Baby Mama Milk has a reasonable price, suitable for the needs and financial conditions of the majority of users. Products are manufactured under strict standards and testing processes, ensuring the best quality to bring satisfaction to users.</p>\n<p>So, if you are pregnant or looking for a breastfeeding product, consider using Hallo Baby Mama Milk to ensure the health of mother and baby.</p>\n<p>How to use and preserve Hallo Baby Mama milk</p>\n<p>Hallo Baby Mama milk is a milk product for pregnant and lactating women, produced and distributed by the company Hallo Baby. This milk is rich in essential nutrients for both mother and baby, including vitamins, minerals, protein, fat and antioxidant compounds.</p>\n<p>How to use Hallo Baby Mama milk is very simple. You only need to take it once or twice a day, depending on the instructions of your doctor or dietitian. Hallo Baby Mama can be taken directly or mixed with water or other milk.</p>\n<p>It should be noted that Hallo Baby Mama milk should only be used under the supervision of a doctor or nutritionist. You should also fully follow the instructions and dosage indicated on the product packaging.</p>\n<p>As for storage, Hallo Baby Mama milk should be stored at room temperature or in the refrigerator. If using opened milk, it should be tightly closed and stored in the refrigerator or in a cool, dry place.</p>\n<p>You should check the expiration date on the product packaging before using. If the product has expired, you should throw it away to ensure the health of mother and baby.</p>\n<p>In summary, Hallo Baby Mama milk is a good nutritional milk product for pregnant and lactating women, but it is necessary to fully follow the instructions and instructions of a doctor or nutritionist. When storing, you should pay attention to ensure the temperature and shelf life to ensure product quality.</p>\n<p>Reviews and reviews of Hallo Baby milk</p>', '2023-09-07 20:55:24', '2023-09-08 01:56:00'),
(64, 'posts', 'title', 9, 'en', 'POWDERED MILK FOR BABYS AND THE KNOWLEDGE THAT MOTHERS MUST BE HEARD', '2023-09-07 21:00:49', '2023-09-07 21:00:49'),
(65, 'posts', 'excerpt', 9, 'en', 'Doctors and experts all recommend that breast milk is the best milk for babies and that babies should be exclusively breastfed for the first 6 months after birth. However, not all mothers can have enough milk for their children (because of low milk supply, because of illness, they lose milk ...)', '2023-09-07 21:00:49', '2023-09-07 21:01:10'),
(66, 'posts', 'body', 9, 'en', '<div id=\"tat-ca-thong-tin-ve-sua-bot\" class=\"#tat-ca-thong-tin-ve-sua-bot\">\n<h2><strong>1. Tất cả th&ocirc;ng tin về sữa bột</strong></h2>\n</div>\n<div id=\"sua-bot-la-gi\" class=\"#sua-bot-la-gi\">\n<h3><strong>1.1 Sữa bột l&agrave; g&igrave;?</strong></h3>\n</div>\n<p>C&aacute;c b&aacute;c sĩ v&agrave; chuy&ecirc;n gia đều khuy&ecirc;n rằng, sữa mẹ l&agrave; sữa tốt nhất cho trẻ v&agrave; n&ecirc;n cho trẻ b&uacute; sữa mẹ ho&agrave;n to&agrave;n trong 6 th&aacute;ng đầu sau sinh. Tuy nhi&ecirc;n, kh&ocirc;ng phải mẹ n&agrave;o cũng c&oacute; đủ sữa cho con (v&igrave; cơ địa &iacute;t sữa, v&igrave; bệnh n&ecirc;n mất sữa&hellip;) n&ecirc;n c&aacute;c mẹ đ&atilde; t&igrave;m đến sữa bột cho b&eacute; để bổ sung đầy đủ dưỡng chất, đảm bảo b&eacute; ph&aacute;t triển to&agrave;n diện.</p>\n<p><img src=\"https://suahoanggia.vn/uploaded/images/sua-bot-cho-be-va-nhung-kien-thuc-me-phai-nam-long-1.jpg\" alt=\"Sữa bột l&agrave; sản phẩm sản xuất từ sữa b&ograve;, d&ecirc;, cừu&hellip; ở dạng bột kh&ocirc; cung cấp nhiều dinh dưỡng\"></p>\n<p><em>Sữa bột l&agrave; sản phẩm sản xuất từ sữa b&ograve;, d&ecirc;, cừu&hellip; ở dạng bột kh&ocirc; cung cấp nhiều dinh dưỡng</em></p>\n<p>Sữa bột l&agrave; sản phẩm sản xuất từ sữa ở dạng bột kh&ocirc;, được thực hiện bằng c&aacute;ch l&agrave;m bốc hơi sữa để kh&ocirc; sau đ&oacute; nghiền nhỏ v&agrave; t&aacute;n th&agrave;nh bột. Mục đ&iacute;ch của sữa dạng bột l&agrave; phục vụ cho việc bảo quản, t&iacute;ch trữ v&agrave; sử dụng v&igrave; n&oacute; c&oacute; thời hạn sử dụng l&acirc;u hơn hẳn so với sữa nước v&agrave; kh&ocirc;ng cần bảo quản lạnh.</p>\n<p>Sữa bột cũng l&agrave; loại sữa duy nhất được cộng đồng y khoa cho ph&eacute;p sử dụng song song với sữa mẹ cho b&eacute; dưới 1 tuổi dưới g&oacute;c độ dinh dưỡng chứ kh&ocirc;ng phải sữa bột pha sẵn hay sữa nước.</p>\n<div id=\"thanh-phan-cua-sua-bot\" class=\"#thanh-phan-cua-sua-bot\">\n<h3><strong>1.2 Th&agrave;nh phần của sữa bột</strong></h3>\n</div>\n<p>Th&agrave;nh phần ch&iacute;nh tạo n&ecirc;n c&aacute;c sản phẩm sữa bột ch&iacute;nh l&agrave; từ sữa của c&aacute;c loại động vật như b&ograve;, d&ecirc;, cừu&hellip; được bổ sung th&ecirc;m c&aacute;c vitamin, kho&aacute;ng chất v&agrave; được chiết xuất theo c&ocirc;ng thức h&oacute;a học đặc biệt để mang đến những th&agrave;nh phần gần giống với sữa mẹ nhất nhằm&nbsp;<strong>cung cấp 1 phần dinh dưỡng&nbsp;</strong>b&ecirc;n cạnh sữa mẹ trong trường hợp mẹ &iacute;t sữa, bị mất sữa hoặc bị c&aacute;c bệnh truyền nhiễm như HIV, AIDS&hellip;)</p>\n<p>Theo Viện Nhi khoa Mỹ (AAP), sữa bột cho b&eacute; phải c&oacute; đủ th&agrave;nh phần dinh dưỡng: Chất đạm, chất b&eacute;o, acid linoleic, vitamin (A, C, D, E, B1, B6, B12&hellip;), acid folic, niacin, c&aacute;c kho&aacute;ng chất như sắt, kẽm, mangan&hellip; Trong đ&oacute;, h&agrave;m lượng c&aacute;c th&agrave;nh phần phải trong giới hạn cho ph&eacute;p v&agrave; an to&agrave;n.</p>\n<div id=\"phan-loai-sua-bot\" class=\"#phan-loai-sua-bot\">\n<h3><strong>1.3 Ph&acirc;n loại sữa bột</strong></h3>\n</div>\n<p>Sữa bột cho b&eacute; được chia l&agrave;m rất nhiều loại nhưng c&oacute; thể kể đến 3 loại ch&iacute;nh, đ&oacute; l&agrave;:</p>\n<p>- Sữa bột c&oacute; gốc từ sữa của c&aacute;c loại động vật c&oacute; v&uacute;: Loại sữa n&agrave;y c&oacute; nguồn gốc từ sữa b&ograve;, d&ecirc;, cừu&hellip; cung cấp h&agrave;m lượng dinh dưỡng cao v&agrave; hầu hết c&aacute;c b&eacute; đều d&ugrave;ng tốt, nhưng c&oacute; một số b&eacute; c&oacute; khả năng dị ứng với protein trong sữa.</p>\n<p>- Sữa bột &iacute;t g&acirc;y dị ứng: Loại sữa n&agrave;y d&ugrave;ng cho c&aacute;c b&eacute; dị ứng với sữa động vật v&agrave; sữa đậu n&agrave;nh.</p>\n<p>- Sữa bột với c&ocirc;ng thức đặc biệt: Cho trẻ nhẹ c&acirc;n v&agrave; suy dinh dưỡng hoặc những đối tượng ri&ecirc;ng kh&aacute;c.</p>\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những loại sữa bột chứa đạm thủy ph&acirc;n, trong đ&oacute; protein đ&atilde; được bẻ nhỏ để b&eacute; dễ ti&ecirc;u h&oacute;a, tăng sức đề kh&aacute;ng một c&aacute;ch tối ưu nhất.</p>', '2023-09-07 21:00:49', '2023-09-07 21:00:49'),
(67, 'posts', 'slug', 9, 'en', 'powdered-milk-for-babys-and-the-knowledge-that-mothers-must-be-heard', '2023-09-07 21:00:49', '2023-09-07 21:00:49'),
(68, 'pages', 'title', 8, 'en', 'To introduce', '2023-09-08 00:39:44', '2023-09-08 02:14:39'),
(69, 'pages', 'body', 8, 'en', '<p>Arla Foods - a dairy and dairy products corporation in the top 5 largest dairy companies in the world headquartered in Denmark. Arla has a history of more than 100 years, specializing in the production of dairy products such as fresh milk, sterilized milk, cheese, butter... Arla products are present in more than 100 countries around the world.</p>\n<p>Arla Pro, a new brand of Arla Foods Group, the leading full-service food service solution in Vietnam, specializes in providing premium dairy products (cheese, butter, UTH milk) with ingredients and flavors. completely natural taste for restaurants, hotels, bakeries&hellip; around the world. High product quality, a culture of innovation and excellent service are what professional chefs and foodservice business owners can expect when choosing Arla Pro.</p>\n<p><img class=\"aligncenter size-large wp-image-5393\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4435-768x512.jpg.webp 768w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p>Recently, &nbsp;Arla Pro first opened in Vietnam Vietnam under the cooperation organization of New Viet Dairy (Dai Tan Viet) company. The event was successful atHanoi (October 29) and TP. Ho Chi Minh (November 5).</p>\n<p>During the launch, guests attending the event experienced and listened to useful sharing from super chefs in preparing delicious dishes from Arla Pro products, contributing to adding value. for food makers and food service operators.</p>\n<p><img class=\"aligncenter size-large wp-image-5394\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921-768x512.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4921.jpg.webp 1440w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5395\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487-768x512.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4487.jpg.webp 1440w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p>New Viet Dairy is pleased to be authorized as the official distributor for Arla Pro in Vietnam, accompanying and directly sending the passion for high quality food to the world of professional chefs.</p>\n<p>Let\'s review review a several moments &nbsp;in &ldquo;Arla Pro Launch Vietnam 2019&rdquo;.</p>\n<p><img class=\"aligncenter size-large wp-image-5396\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7864-768x512.jpg.webp 768w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5397\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4595-768x512.jpg.webp 768w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5398\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/IMG_7917-768x512.jpg.webp 768w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5399\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_5140-768x512.jpg.webp 768w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5400\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-1024x683.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-1024x683.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-300x200.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/TRU_4685-768x512.jpg.webp 768w\" alt=\"\" width=\"620\" height=\"414\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5401\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94100-1024x576.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94100-1024x576.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/GA94100-300x169.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/GA94100-768x432.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/GA94100.jpg.webp 1936w\" alt=\"\" width=\"620\" height=\"349\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5402\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/GA92739-1024x576.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/GA92739-1024x576.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/GA92739-300x169.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/GA92739-768x432.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/GA92739.jpg.webp 1968w\" alt=\"\" width=\"620\" height=\"349\" loading=\"lazy\"></p>\n<p><img class=\"aligncenter size-large wp-image-5403\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94373-1024x569.jpg.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2019/11/GA94373-1024x569.jpg.webp 1024w, https://www.newviet.net/wp-content/uploads/2019/11/GA94373-300x167.jpg.webp 300w, https://www.newviet.net/wp-content/uploads/2019/11/GA94373-768x427.jpg.webp 768w, https://www.newviet.net/wp-content/uploads/2019/11/GA94373.jpg.webp 1946w\" alt=\"\" width=\"620\" height=\"345\" loading=\"lazy\"></p>', '2023-09-08 00:39:44', '2023-09-08 02:14:40'),
(70, 'pages', 'slug', 8, 'en', 'gioi-thieu', '2023-09-08 00:39:44', '2023-09-08 00:39:44'),
(71, 'pages', 'title', 7, 'en', 'Commit', '2023-09-08 00:40:26', '2023-09-08 02:15:29'),
(72, 'pages', 'body', 7, 'en', '<p>Arla Foods is a dairy and dairy products group in the top 5 largest dairy companies in the world, headquartered in Denmark. Arla has a history of more than 100 years, specializing in the production of dairy products such as fresh milk, sterilized milk, cheese, butter... Arla products are present in more than 100 countries around the world.</p>\n<p><img class=\"aligncenter size-large wp-image-4777\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-1024x654.png.webp\" sizes=\"(max-width: 620px) 100vw, 620px\" srcset=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-1024x654.png.webp 1024w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-300x192.png.webp 300w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1-768x491.png.webp 768w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.26-AM-1.png.webp 1626w\" alt=\"\" width=\"620\" height=\"396\" loading=\"lazy\"></p>\n<p>Arla is known globally for its production policy that protects the environment, the naturalness and safety of its products. The quality of Arla\'s products is strictly controlled according to the \"From Cow To You\" process - from farm to fork, without using antibiotics and Growth Hormones in the process of raising cows. With more than 11,200 farmers spread across Europe, Arla ensures products that meet high quality standards.</p>\n<p><img class=\"aligncenter size-full wp-image-4778\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM.png.webp\" sizes=\"(max-width: 817px) 100vw, 817px\" srcset=\"https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM.png.webp 817w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM-300x190.png.webp 300w, https://www.newviet.net/wp-content/uploads/2018/08/Screen-Shot-2018-08-29-at-10.04.53-AM-768x486.png.webp 768w\" alt=\"\" width=\"817\" height=\"517\" loading=\"lazy\"></p>\n<p>Since August 2018, Dai Tan Viet has been authorized to be the official distributor of Arla in Vietnam. In this role, Dai Tan Viet will become a bridge to bring Arla\'s international quality dairy products closer to Vietnamese consumers.</p>\n<p><img class=\"aligncenter size-full wp-image-4775\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY.png.webp\" sizes=\"(max-width: 857px) 100vw, 857px\" srcset=\"https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY.png.webp 857w, https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY-300x233.png.webp 300w, https://www.newviet.net/wp-content/uploads/2018/08/FINAL-ARTWORK_FS-CATALOG_SIDE-A_FOR-MY-768x596.png.webp 768w\" alt=\"\" width=\"857\" height=\"665\" loading=\"lazy\"></p>\n<p>Corporate customers can contact email order@newviet.vn for more details about products from Arla dairy group.</p>', '2023-09-08 00:40:26', '2023-09-08 02:15:29'),
(73, 'pages', 'slug', 7, 'en', 'cam-ket', '2023-09-08 00:40:26', '2023-09-08 00:40:26'),
(74, 'pages', 'title', 6, 'en', 'About us', '2023-09-08 00:40:38', '2023-09-08 02:16:02'),
(75, 'pages', 'body', 6, 'en', '<p><strong>Anh Phu Cuong Joint Stock Company: Connecting the Essence of Arla Milk with Vietnamese Consumers</strong></p>\n<p>In the journey to fulfill the dream of health and nutrition, Anh Phu Cuong Joint Stock Company has established itself as a trusted name, accompanying Vietnamese consumers in providing elite dairy products. from the world\'s leading dairy group - Arla.</p>\n<p><strong>Arla - The Essence of World Milk</strong></p>\n<p>With more than 100 years of history associated with the mission of bringing great nutrition and taste, Arla has made its mark on the list of \"Top 5 Largest Dairy Companies in the World\". With headquarters in Denmark, Arla not only represents excellence in dairy products but also reflects dedication, quality and continuous innovation in the food industry.</p>\n<p>Arla\'s mission is not simply to produce milk, but also to create high-quality fresh milk, pasteurized milk, cheese, butter... products, providing natural flavors and diverse nutrition. form. The presence of Arla products has reached more than 100 countries around the world, demonstrating trust and preference from consumers across continents.</p>\n<p><strong>Mr. Phu Cuong - The Connection From Heart To Hand</strong></p>\n<p>With an understanding vision and passion for nutrition, Anh Phu Cuong Joint Stock Company has become a reputable bridge between Arla dairy products and consumers in the Vietnamese market. We are not simply a distribution business, but also a companion with dedicated attention to the health of each family.</p>\n<p>We are committed to providing high quality dairy products, ensuring origin and food safety, while understanding and meeting diverse consumer needs. Our extensive distribution network ensures that each Arla product reaches every household in Vietnam, delivering real taste and value.</p>\n<p><strong>Future Promises</strong></p>\n<p>With constant striving, Anh Phu Cuong Joint Stock Company confidently continues to be a reliable companion of Vietnamese consumers. We are committed to continuous improvement to bring the essence of Arla dairy products and contribute to making every meal a meaningful nutritional experience.</p>', '2023-09-08 00:40:38', '2023-09-08 02:16:02'),
(76, 'pages', 'slug', 6, 'en', 've-chung-toi', '2023-09-08 00:40:38', '2023-09-08 00:40:38'),
(77, 'questions', 'name', 6, 'en', 'Quang Minh', '2023-09-08 01:39:04', '2023-09-08 01:39:04'),
(78, 'questions', 'questions', 6, 'en', 'After receiving advice, I trusted it and bought it for my child to use for a while, and the results were very good. will continue to use.', '2023-09-08 01:39:04', '2023-09-08 01:48:12'),
(79, 'questions', 'answer', 6, 'en', 'Thank you', '2023-09-08 01:39:04', '2023-09-08 01:48:12'),
(80, 'questions', 'name', 5, 'en', 'Thu Nguyen', '2023-09-08 01:43:01', '2023-09-08 01:46:13'),
(81, 'questions', 'questions', 5, 'en', 'Careful packing. Very pleased. This set of products is carefully detailed, so I trust to order. The result makes me very satisfied', '2023-09-08 01:43:01', '2023-09-08 01:45:38'),
(82, 'questions', 'answer', 5, 'en', 'Thank you for your feedback. If you need additional support while using the product, please contact us so we can support you. Thanks for your support!', '2023-09-08 01:43:01', '2023-09-08 01:45:38'),
(83, 'questions', 'name', 4, 'en', 'hocnguyen99', '2023-09-08 01:45:01', '2023-09-08 01:45:01'),
(84, 'questions', 'questions', 4, 'en', 'Fast delivery, very good to use!', '2023-09-08 01:45:01', '2023-09-08 01:45:01'),
(85, 'questions', 'answer', 4, 'en', 'Thank you for your trust!', '2023-09-08 01:45:01', '2023-09-08 01:45:01'),
(86, 'categories', 'name', 3, 'en', 'Notification', '2023-09-08 01:57:59', '2023-09-08 01:57:59'),
(87, 'categories', 'slug', 3, 'en', 'thong-bao', '2023-09-08 01:57:59', '2023-09-08 01:57:59'),
(88, 'categories', 'name', 1, 'en', 'News', '2023-09-08 01:58:09', '2023-09-08 01:58:09'),
(89, 'categories', 'slug', 1, 'en', 'tin-tuc', '2023-09-08 01:58:09', '2023-09-08 01:58:09'),
(90, 'posts', 'title', 19, 'en', 'Choose the right milk for each stage of your child\'s development', '2023-09-08 02:00:20', '2023-09-08 02:00:20'),
(91, 'posts', 'excerpt', 19, 'en', 'Milk is one of the best foods in the daily diet, because milk contains all the nutrients necessary for development as well as all body activities.', '2023-09-08 02:00:20', '2023-09-08 02:00:20');
INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(92, 'posts', 'body', 19, 'en', '<p>Milk is one of the best foods in the daily diet, because milk contains all the nutrients necessary for growth and all body activities. Protein in milk is easily absorbed. However, not everyone knows what dosage, type of milk, and how to drink it for children at each stage and age.</p>\n<p>For newborn babies, the first and best food for them is breast milk. The digestive system is still immature, but the baby can completely absorb and metabolize breast milk well. Breast milk also helps babies increase their resistance to diseases that no other type of milk can replace.</p>\n<p>But in reality, there are some cases where mothers are sick and cannot breastfeed, or some mothers lack or do not have milk so they have to feed their babies formula milk. Therefore, you should know some notes when giving your baby milk depending on the baby\'s age.</p>\n<p>For children under 6 months old</p>\n<p>Using formula I: The characteristics of these types of milk are that they have a nutritional composition close to breast milk, nutrients in reasonable balance ratios, suitable for absorption and metabolism. In children, it rarely causes digestive disorders.</p>\n<p>At this age, you should not use fresh cow\'s milk, sweetened condensed milk, whole milk powder or formula milk for children over 6 months. When buying milk, you must check the expiration date and mix the milk according to the instructions on the box. You should only use water to mix (boil water to cool it down). Do not use boiling water or boil the milk because it will destroy or loss of vitamins and minerals in milk. The amount of milk to drink daily depends on each month of age:</p>\n<p>Newborns (1 month old): 60-80ml/meal x 7-8 meals/day (500-600ml/day).</p>\n<p>Children from 2-4 months old: 100-120ml/meal x 6-7 meals/day (700-800ml/day).</p>\n<p>Children 5-6 months: 150-180ml/meal x 5-6 meals/day (800-1,000ml/day).</p>\n<p>For children 6-12 months</p>\n<p>In addition to additional meals such as flour and ground porridge, children still need to drink 500-600ml of milk/day, divided into 3-4 meals depending on the child\'s drinking level.</p>\n<p>At this stage, use type II milk formula. This type of milk has a higher nutritional composition than type I formula milk, especially protein to suit the growth and development of children. If you continue to use formula I milk, your baby will grow slowly due to lack of nutrients. protein. Just like type I milk, when mixing milk, you should only use warm water and mix according to the instructed ratio.</p>\n<p>Children from 1 - 5 years old</p>\n<p>The main daily diet is porridge, rice, noodles, soup, vermicelli, pho... children still need 400-500ml of milk/day, at this time they can use all types of milk for children over 1 year old, cow\'s milk. pasteurized, whole milk powder, soy milk, yogurt.</p>\n<p>Children of elementary and middle school age (6-14 years old)</p>\n<p>In addition to the daily diet, it is still necessary for children to drink milk because this is a source of calcium to help children grow taller, especially children who refuse to eat shrimp, crab, and fish every day. However, it is necessary to pay attention to the child\'s nutritional status to choose appropriate milk types.</p>\n<p>If the child is developing normally, he/she can drink whole milk powder, sterilized fresh milk, sweetened condensed milk... but if the child is overweight or obese, he/she can only use powdered milk. cup of butter, unsweetened fresh milk, unsweetened soy milk and an amount not exceeding 300-400ml/day. As for malnourished children, choose energy-rich milk (special milk for malnourished children). When mixed, the energy density is 1ml providing 1kcal and these milks contain many vitamins and minerals. More nutrients, helping children quickly recover nutrition, unlimited drinking quantity, can drink 500-800ml/day.</p>', '2023-09-08 02:00:20', '2023-09-08 02:00:20'),
(93, 'posts', 'slug', 19, 'en', 'choose-the-right-milk-for-each-stage-of-your-child-s-development', '2023-09-08 02:00:20', '2023-09-08 02:00:20'),
(94, 'posts', 'meta_description', 19, 'en', 'Milk is one of the best foods in the daily diet, because milk contains all the nutrients necessary for development as well as all body activities.', '2023-09-08 02:00:20', '2023-09-08 02:00:20'),
(95, 'posts', 'seo_title', 19, 'en', 'Choose the right milk for each stage of your child\'s development', '2023-09-08 02:00:20', '2023-09-08 02:00:20'),
(96, 'posts', 'title', 18, 'en', 'What is powdered milk? Ingredients and usage of powdered milk', '2023-09-08 02:00:57', '2023-09-08 02:00:57'),
(97, 'posts', 'excerpt', 18, 'en', 'Milk powder is now an indispensable food in families with babies and young children. So \'What is milk powder\' and \'What is milk powder made of?\', the article will provide the most detailed information on this issue. Please read to find out the information carefully!', '2023-09-08 02:00:57', '2023-09-08 02:00:57'),
(98, 'posts', 'body', 18, 'en', '<p>Powdered milk is milk derived from animals that has gone through processing processes such as sterilization and drying by evaporation. Thanks to this processing method, powdered milk will retain the essential nutrients for children and its preservation time will be longer.</p>\n<p>The main users of formula milk are infants and young children. This is considered a great nutritional solution for children in cases where the mother does not have enough milk or the mother does not have milk to breastfeed</p>\n<p>Formula milk or powdered milk is considered an indispensable product for young children today. Formula milk is described as closest to breast milk in supporting and providing adequate nutrients for the baby. Formula milk is always the top choice of mothers because of its safety, effectiveness and convenience. A delicious nutritious drink that is extremely simple to prepare.</p>\n<p>Ingredients in powdered milk for infants and young children<br>Powdered milk must be strictly inspected and comply with many strict regulations from production to distribution. This ensures that milk quality always meets the best standards, absolute quality and safety when used for children. So what is milk powder made from? Is it really good for the baby?</p>\n<p>The American Academy of Pediatrics (AAP) has confirmed that powdered milk must have nutritional ingredients such as: Protein, vitamins and minerals, linoleic acid, calcium...</p>\n<p>Below are some outstanding and very important ingredients for babies in powdered milk.</p>\n<p>Calcium - Helps your child have strong bones</p>\n<p>Calcium in milk is abundant<br>Milk is always known as a rich source of calcium for babies. Thanks to calcium helps children grow tall and have a strong and healthy skeleton. Calcium is also a very important component of the nervous system in children. One of the signs that your child lacks calcium is that he often cries at night, is easily startled and is often irritable.</p>\n<p>DHA - Enhances brain and eyesight for children</p>\n<p>Milk powder contains DHA to help strengthen the brain<br>During the first years of a baby\'s life, DHA is found in abundance in the retina. This shows that DHA plays a huge role in the process of perfecting the child\'s optic nerve, directly affecting the child\'s visual function. In addition, DHA is always a very important substance for the development of the baby\'s brain.</p>\n<p>Studies have proven that babies who are supplemented with enough DHA during development will be sharper and have a higher intellectual quotient (IQ) than children who do not have enough DHA. Current formula milk lines also pay great attention to this issue, so dairy companies always try to optimize the formula to ensure that children always have enough DHA to grow up smart and healthy.</p>\n<p>Vitamins - Support to increase resistance for children</p>\n<p>Milk powder contains vitamins to help children increase resistance<br>Vitamins act as catalysts that the body cannot synthesize on its own. Therefore, vitamin supplementation is extremely necessary. Although the vitamin content in the body is very small, it governs the vital activities of all organs. Vitamins are like an iron shield for cells thanks to their ability to protect cells from attacks by infectious agents and heal injured cells.</p>\n<p>When is the right time to use infant formula?<br>Milk is a nutritious food for babies, but if the mother does not use it properly, it will not promote the full benefits of milk. Here are some suggestions on the right time to give milk to your baby:</p>\n<p>After breakfast<br>Breakfast is the most important meal of the day because it provides up to 30% of the body\'s energy. Breakfast as a refueling step for the functional organs to be activated to run all day long. Drinking a cup of warm milk 1-2 hours before meals helps the stomach have a better ability to break down protein, thereby helping to increase digestion in children.</p>\n<p>Studies have shown that drinking milk before bed improves sleep quality. Serotonin compounds found in milk reduce stress and release hormones that help your baby fall asleep quickly. Mothers should give the baby milk to drink about 2 hours before going to bed to avoid indigestion leading to digestive disorders.</p>\n<p>Instruct mothers how to mix formula milk for infants and young children</p>\n<p>How to prepare formula milk for infants<br>For mothers, mixing milk for their babies has become a daily habit. To ensure that the milk is always of the best quality and safe for the baby, the mother needs to pay attention to the following steps when preparing formula for her baby.</p>\n<p>Look carefully at the expiration date printed on the milk carton packaging.<br>Before preparing milk for your baby, remember to wash your hands thoroughly and dry them.<br>Sterilize milk bottles and tools used by mothers to prepare milk for their babies.<br>Mix milk for your baby according to the ratio and formula written on the can.<br>Choose the right type of milk powder for your baby<br>The variety of powdered milk today makes mothers have a headache when thinking about choosing milk for their babies.</p>\n<p>Based on the advice of nutritionists, mothers should consider the following criteria to choose the most suitable milk for their children.</p>\n<p>Your child\'s age: At &nbsp;each age, your child\'s nutritional needs increase. Therefore, mothers need to carefully read the number of months of age specified on the milk can to be able to choose the right type of milk for their baby.</p>\n<p>Origin and ingredients</p>', '2023-09-08 02:00:57', '2023-09-08 02:00:57'),
(99, 'posts', 'slug', 18, 'en', 'what-is-powdered-milk-ingredients-and-usage-of-powdered-milk', '2023-09-08 02:00:57', '2023-09-08 02:00:57'),
(100, 'posts', 'meta_description', 18, 'en', 'Milk powder is now an indispensable food in families with babies and young children. So \'What is milk powder\' and \'What is milk powder made of?\', the article will provide the most detailed information on this issue. Please read to find out the information carefully!', '2023-09-08 02:00:57', '2023-09-08 02:00:57'),
(101, 'posts', 'seo_title', 18, 'en', 'What is powdered milk? Ingredients and usage of powdered milk', '2023-09-08 02:00:57', '2023-09-08 02:00:57'),
(102, 'posts', 'title', 17, 'en', 'How old should I give my baby formula? When is the latest?', '2023-09-08 02:01:33', '2023-09-08 02:01:33'),
(103, 'posts', 'excerpt', 17, 'en', 'In case the source of breast milk is limited, formula is the best alternative. However, mothers who have just had a baby for the first time still wonder how much formula should be given to their babies until how old they are. Let\'s answer questions with AVAKids through the article below!', '2023-09-08 02:01:33', '2023-09-08 02:01:33'),
(104, 'posts', 'body', 17, 'en', '<p>In cases where breast milk supply is limited, formula milk is the best alternative. However, new mothers with a baby for the first time still wonder how old they should be to give formula milk. Let\'s answer questions with AVAKids through the article below!</p>\n<p>1. When should baby use formula milk? Signs that your baby needs formula milk</p>\n<p>Formula milk (English name is Baby formula) or baby milk powder is a dairy product from animals that is processed and added with necessary nutrients for the body through production lines such as protein, carbohydrates, and protein. , fat, calcium, minerals,...</p>\n<p>Formula milk is an alternative to making food for babies and young children. Because of the similar composition to breast milk, mothers can use formula to partially or completely replace breast milk.</p>\n<p>Cases in which it is necessary to give formula milk to babies:</p>\n<p>Mother has health problems, cannot breastfeed: In case the mother has some problems with the mammary glands or some medical conditions that require medication and does not have milk to provide for the baby, the mother can use milk. recipe for substitution.<br>If you can\'t produce enough milk for your baby or have had breast surgery, it\'s likely that you don\'t have enough milk to meet your baby\'s needs. Therefore, the mother can breastfeed her baby with formula.<br>Want to add other nutritional ingredients for babies: Because formula milk contains many nutrients that breast milk does not have, mothers can give formula milk alternately to ensure that the baby\'s body has enough nutrients. nutrition.<br>Support to promote the development of children during adolescence: In order for children to grow quickly in both height and weight, mothers should supplement with formula milk containing many minerals and calcium.<br>Formula milk is a necessary choice for babies born prematurely or with special medical conditions to help them gain weight.<br>Children urinate less, each day the mother changes wet diapers for children less than 6 times.<br>Babies are fussy and hungry right after being breastfed.<br>Mothers can not be near the baby constantly, for example, have to go to work early, at this time will need to give the baby more formula.<br>If the mother has twins or three, breast milk will not be enough for the baby, so it is necessary to give the baby more formula.<br>Mom wants more sleep: Many moms can get used to getting up at night to feed their baby, but for others this is difficult. Therefore, formula milk will be a good choice for the baby when the mother sleeps.<br>2. To what age should baby drink formula?</p>\n<p>Milk powder 1 and formula 2 are two types of milk suitable for babies under 12 months old. Formula 1 is for babies from birth to 6 months old, and formula 2 is for babies 6 to 1 year old.</p>\n<p>Infants can drink formula for the first 12 months of life. Starting from 12 months onwards, mothers should combine more other foods, such as fresh porridge, cereals, weaning powder, baby cakes,... From there, mothers can reduce or completely cut off formula.</p>\n<p>If the family can afford it, parents can let their children drink until they are teenagers, or just give them formula until 3-4 years old. In general, this depends on the perspective and economic condition of each family.</p>\n<p>On the market today, there are many different types of milk for all ages for all audiences, such as pregnant milk, powdered milk for 1-year-old babies, milk for babies over or under 1 year old, milk for middle-aged people, young adults. teenagers,... Therefore, there is actually no age limit for drinking formula milk.</p>', '2023-09-08 02:01:33', '2023-09-08 02:01:33'),
(105, 'posts', 'slug', 17, 'en', 'how-old-should-i-give-my-baby-formula-when-is-the-latest', '2023-09-08 02:01:33', '2023-09-08 02:01:33'),
(106, 'posts', 'meta_description', 17, 'en', 'In case the source of breast milk is limited, formula is the best alternative. However, mothers who have just had a baby for the first time still wonder how much formula should be given to their babies until how old they are. Let\'s answer questions with AVAKids through the article below!', '2023-09-08 02:01:33', '2023-09-08 02:01:33'),
(107, 'posts', 'seo_title', 17, 'en', 'How old should I give my baby formula? When is the latest?', '2023-09-08 02:01:33', '2023-09-08 02:01:33'),
(108, 'posts', 'title', 16, 'en', 'How old should I give my baby formula?', '2023-09-08 02:02:15', '2023-09-08 02:02:15'),
(109, 'posts', 'excerpt', 16, 'en', 'How many parents should drink formula until the age of formula is a question of many parents because there are many different types of formula on the market today and can be used when the child is 6 years old. To know how old to give your baby formula to, first you need to find out what formula is, in which case and how much to use it?', '2023-09-08 02:02:15', '2023-09-08 02:02:15'),
(110, 'posts', 'body', 16, 'en', '<p>Up to what age should children drink formula milk is a question of many parents because currently on the market there are many different types of formula milk and can be used until children are 6 years old. To know how old you should give your baby formula milk, first you need to find out what formula milk is, in what cases to use formula milk and how much to use?</p>\n<p>1. What is formula milk?<br>Formula milk, also known as powdered milk (baby formula in English), is a product used for infants under 12 months old. Scientists have researched and found the chemical formula of this milk so that it is most similar to breast milk. Formula milk can be used as a partial or complete replacement for breast milk.</p>\n<p>The line of formula milk that can completely replace breast milk for babies under 6 months old has the nutritional composition closest to breast milk, to ensure that it provides all the necessary nutrients for babies, that is, formula milk. Formula 1. This product line is produced in many different forms such as powdered milk (used to mix with water), liquid milk (can be mixed with the required amount of water) and instant broth (no need to mix). adding water or going through processing steps).</p>\n<p>2. In what cases should children drink formula milk?<br>Breast milk is very good for babies and young children. Babies must be exclusively breastfed for at least the first 6 months of life to develop both physically and mentally. In the group of children who are not breastfed, the rate of stunting and diseases such as asthma, eczema, allergies, obesity, type 1 diabetes, etc. is higher.</p>\n<p>Currently, with the development of medicine, formula 1 with a nutritional composition close to that of breast milk can be used for infants under 6 months of age in case the child is not exclusively breastfed.</p>\n<p>The recommended amount of formula milk for infants under 6 months old is as follows:</p>\n<p>Less than 1 month old: The baby sucks about 60ml/time, feeds him 8-10 times/day and the total amount of milk in the day is about 480ml.<br>From 1 to 2 months old: The baby sucks about 90ml/time, feeds him 7-10 times/day and the total amount of milk in the day is about 630ml.<br>From 2 to 4 months old: The baby suckles about 120ml/time, feeds him 6-10 times/day and the total amount of milk in the day is about 720ml.<br>From 4-6 months old: The baby suckles about 150ml/time, feeds him 6-8 times/day and the total amount of milk in the day is about 900ml.<br>3. Up to what age should babies drink formula?<br>There are 2 lines of infant formula for babies under 12 months old, which is formula 1 for babies from 0 to 6 months old and formula 2 for babies from 6 to 12 months old.</p>\n<p>The characteristic of formula 1 is that it has the same composition and ratio of nutrients as breast milk, suitable for the absorption and metabolism of the baby\'s body during this period so as not to affect the digestive system. of children.</p>\n<p>Do not use formula 2 or whole milk powder, fresh milk, condensed milk for babies under 6 months old because the baby\'s digestive system is still weak and cannot digest fresh milk completely.</p>\n<p>You should switch to formula 2 when your baby is 6 months old. The characteristics of formula 2 milk is that the composition and content of nutrients are higher than that of formula 1. Especially protein, suitable for the development and growth of children in this period. If you still give your baby formula 1, it may not be able to ensure the amount of nutrition the baby needs.</p>\n<p>However, children under 12 months of age are still not allowed to use fresh milk because at this time their digestive system is still in the maturing stage. Fresh milk, with its high protein and mineral content, can affect children\'s kidneys and cause iron deficiency. The fat content in fresh milk is also not suitable for children under 1 year old.</p>\n<p>From 1 year old onwards, children can be given fresh milk or milk with suitable fat content and ensure a balanced diet, full of necessary nutrients.</p>\n<p>It should be noted that the maximum amount of milk for children from 1 year of age and older is 1,000ml/day so as not to make excess energy and for children to have cravings for other foods. In addition, it is not recommended to give low-fat or skim milk to children under 2 years of age because children at this stage still need a high amount of fat, unless the child is overweight, obese, has high blood pressure or has diabetes. Congenital heart.</p>\n<p>From 2 years old onwards, to know which milk is suitable for children, parents should consult a nutritionist. But remember, breast milk is always the best choice for infants and children under 2 years old.</p>\n<p>When choosing formula milk for children, many parents are concerned about how old they should give their baby formula. In fact, formula is intended for infants and children under 12 months of age when they are not breastfed. From 12 months old, children can drink fresh milk combined with a balanced diet to ensure their comprehensive development later.</p>', '2023-09-08 02:02:15', '2023-09-08 02:02:15'),
(111, 'posts', 'slug', 16, 'en', 'how-old-should-i-give-my-baby-formula', '2023-09-08 02:02:15', '2023-09-08 02:02:15'),
(112, 'posts', 'meta_description', 16, 'en', 'How many parents should drink formula until the age of formula is a question of many parents because there are many different types of formula on the market today and can be used when the child is 6 years old. To know how old to give your baby formula to, first you need to find out what formula is, in which case and how much to use it?', '2023-09-08 02:02:15', '2023-09-08 02:02:15'),
(113, 'posts', 'seo_title', 16, 'en', 'How old should I give my baby formula?', '2023-09-08 02:02:15', '2023-09-08 02:02:15'),
(114, 'posts', 'title', 15, 'en', '5 reasons why mothers should choose high-quality formula for children over 1 year old', '2023-09-08 02:03:49', '2023-09-08 02:03:49'),
(115, 'posts', 'excerpt', 15, 'en', 'When children begin to enter the weaning stage, ensuring an adequate supply of nutrients through daily diets is not an easy thing. Mothers often have to balance nutrients and at the same time have to diversify dishes for children to absorb well. However, anorexia is common in children who are always waiting and cause a lack of nutrients. Therefore, choosing powdered milk for children is an extremely effective and convenient solution to supplement nutrients.', '2023-09-08 02:03:49', '2023-09-08 02:03:49'),
(116, 'posts', 'body', 15, 'en', '<p>1. Choose high quality powdered milk that is convenient for taking care of your baby</p>\n<p>When using high-quality powdered milk for children, taking care of the child will become more convenient for the mother. Parents or any adult can take care of the child, bottle-feed the child at any time, helping to reduce the pressure on the mother to take care of the child, and the baby can get used to the care of family members. in family. And preparing meals for your baby also becomes simpler and easier.</p>\n<p>2. Best support for children\'s digestive system</p>\n<p>Young children\'s digestive systems are still very weak and easily affected, so mothers need to choose high-quality powdered milk for their babies to ensure their baby\'s digestive system is best supported. High-quality dairy products do not cause digestive conditions such as constipation, vomiting or diarrhea, but help your baby absorb better, strengthen immunity and help your baby gain weight regularly.</p>\n<p>3. Help your baby develop well</p>\n<p>Using high-quality powdered milk for children over one year old will be a source of many important nutrients necessary for the child\'s physical and mental development. High-quality dairy products always supplement important nutrients such as vitamins A, C, D, K, E and micronutrients such as calcium, iron, sodium, optipro, protein, DHA, ARA.</p>\n<p>4. Helps your baby gain weight evenly</p>\n<p>Daily nutrition is the source of energy for children to gain weight and develop height. However, not all children are interested in everyday foods, and many children have anorexia leading to weight loss or not having positive weight changes according to their body\'s development. But high-quality powdered milk not only supports the digestive system, but also adds a large amount of nutrients to enhance absorption, helping children gain weight evenly and develop well physically and intellectually.</p>\n<p>5. Peace of mind about product quality</p>\n<p>And the extremely important reason that mothers should choose high-quality powdered milk for their babies is peace of mind about product quality. On the market today there are countless powdered milk products for children, however mothers should be cautious and check carefully to choose the best products. You should not only focus on the price of the product, but also pay attention to the nutritional ingredients and origin of the product.</p>', '2023-09-08 02:03:49', '2023-09-08 02:03:49'),
(117, 'posts', 'slug', 15, 'en', '5-reasons-why-mothers-should-choose-high-quality-formula-for-children-over-1-year-old', '2023-09-08 02:03:49', '2023-09-08 02:03:49'),
(118, 'posts', 'meta_description', 15, 'en', 'When children begin to enter the weaning stage, ensuring an adequate supply of nutrients through daily diets is not an easy thing. Mothers often have to balance nutrients and at the same time have to diversify dishes for children to absorb well. However, anorexia is common in children who are always waiting and cause a lack of nutrients. Therefore, choosing powdered milk for children is an extremely effective and convenient solution to supplement nutrients.', '2023-09-08 02:03:49', '2023-09-08 02:03:49'),
(119, 'posts', 'seo_title', 15, 'en', '5 reasons why mothers should choose high-quality formula for children over 1 year old', '2023-09-08 02:03:49', '2023-09-08 02:03:49'),
(120, 'posts', 'title', 14, 'en', 'ANNOUNCEMENT OF AGENT RECRUITMENT', '2023-09-08 02:04:15', '2023-09-08 02:04:15'),
(121, 'posts', 'excerpt', 14, 'en', 'Announcement on recruiting agents to distribute high quality ARLA dairy products. We invite interested units and individuals to meet the following requirements and join us in the journey of providing fresh milk and ARLA powder products to consumers in the Northern market.', '2023-09-08 02:04:15', '2023-09-08 02:04:15'),
(122, 'posts', 'body', 14, 'en', '<p>RECRUITMENT ANNOUNCEMENT FOR ARLA MILK AGENT</p>\n<p>Anh Phu Cuong Joint Stock Company - representing ARLA dairy products in the North, announces the recruitment of agents to distribute high quality ARLA dairy products. We invite interested entities and individuals to meet the following requirements and join us in our journey to provide ARLA fresh milk and powder to consumers in the Northern market.</p>\n<p>ARLA Dealer Requirements:</p>\n<p>Quality commitment: The dealer team needs to commit to providing quality, constant ARLA products, and ensuring food hygiene and safety.<br>Product knowledge: Agents need to have basic knowledge about ARLA dairy products, their advantages and how to use them to advise customers professionally.<br>Distribution ability: Agents need to be able to distribute products to stores, supermarkets, restaurants, and other consumer locations in the North.<br>Communication and cooperation skills: Able to communicate well, negotiate prices and contract terms fairly. Willing to cooperate with the company to create a sustainable commercial relationship.<br>Benefits of ARLA Agent:</p>\n<p>Prestigious products: The agent will represent a reputable dairy brand with a long history and recognized quality.<br>Technical Support: We provide technical support, product training, and marketing advice to ensure your success.<br>Attractive profits: Agents will have the opportunity to earn attractive profits from distributing ARLA products in the North.<br>Contact and apply:</p>\n<p>Interested units and individuals please submit information via the form here.</p>\n<p>Anh Phu Cuong Joint Stock Company<br>Address: No. 8, Ton That Thuyet, My Dinh 2, Nam Tu Liem, Hanoi<br>Phone number: 19008285<br>Email: contact@hallobaby.vn</p>\n<p>We look forward to welcoming your participation to build prosperity for the ARLA milk brand in the North.</p>', '2023-09-08 02:04:15', '2023-09-08 02:04:15'),
(123, 'posts', 'slug', 14, 'en', 'announcement-of-agent-recruitment', '2023-09-08 02:04:15', '2023-09-08 02:04:15'),
(124, 'posts', 'title', 12, 'en', 'WHAT IS THE BEST BRAIN DEVELOPMENT MILK FOR 8-YEAR-OLDS ON THE MARKET TODAY?', '2023-09-08 02:06:38', '2023-09-08 02:06:38'),
(125, 'posts', 'excerpt', 12, 'en', 'Milk is especially necessary for children\'s brain development. With the desire for their children to have agile thinking, curious to explore the world, parents always want to find for their baby the best quality milk.', '2023-09-08 02:06:38', '2023-09-08 02:06:38'),
(126, 'posts', 'body', 12, 'en', '<div id=\"I-vai-tro-cua-sua-voi-su-phat-trien-tri-nao-cho-be-8-tuoi\" class=\"#I-vai-tro-cua-sua-voi-su-phat-trien-tri-nao-cho-be-8-tuoi\">\n<h2 dir=\"ltr\">I. The role of milk in brain development for 8-year-old children</h2>\n</div>\n<p dir=\"ltr\"><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-cho-tre-8-tuoi-phat-trien-tri-nao-3.jpg\" alt=\"Vai tr&ograve; của sữa với sự ph&aacute;t triển tr&iacute; n&atilde;o cho b&eacute; 8 tuổi\"></strong></p>\n<p>According to a survey by the National Institute of Nutrition, on average, 1 in 4 children suffer from stunting, which is often accompanied by slow physical and mental development. These things are confirmed by experts to be closely related to children\'s nutrition, most specifically milk, an essential source of nutrition that helps children develop comprehensively, be intelligent and remember longer.</p>\n<p>However, many parents do not know that nutrition, especially milk, plays an important role in helping children develop comprehensively, grow taller and smarter.</p>\n<p>Specifically, milk and dairy products help develop the brain because they contain many essential vitamins and minerals such as calcium, phosphorus, vitamins A and D that are beneficial for muscles, bones and teeth; proteins and hydrocarbons for rapid growth; Fat and DHA, choline are good for children\'s brains&hellip;</p>\n<p>Associate Professor, Dr. Le Bach Mai, Former Deputy Director of the National Institute of Nutrition, said that recommendations for daily use of milk and dairy products for children aged 3 years and older are as follows:</p>\n<p>Children 8-9 years old: 5 units of milk and milk products, equivalent to 30g of cheese (2 pieces of cheese), 100ml of yogurt (1 box of yogurt) and 200ml of liquid milk (2 small glasses of milk).</p>\n<p>According to Associate Professor, Dr. Le Bach Mai, mothers should let their children use all 3 types of products (liquid milk, cheese, yogurt) to optimize the nutritional composition of each type, helping children develop their brain and brain. best height.</p>\n<div id=\"II-sua-phat-trien-tri-nao-cho-be-8-tuoi-can-co-duong-chat-vang-nao\" class=\"#II-sua-phat-trien-tri-nao-cho-be-8-tuoi-can-co-duong-chat-vang-nao\">\n<h2 dir=\"ltr\">II. What \"golden nutrients\" do brain development milk for 8-year-old children need?</h2>\n</div>\n<p>Milk is considered the best source of nutrition for comprehensive development in general and brain development in particular for 8-year-old children, containing a group of \"golden nutrients\" such as: DHA, ARA, Lutein, Choline... Therefore, to choose brain development milk for children, mothers only need to base on the content and ratio of the above nutrients to help their babies become exceptionally intelligent.</p>\n<p>According to the World Health Organization (WHO), breast milk is the best brain development milk for babies. Therefore, at least for the first 6 months of life, children should be exclusively breastfed. Breastfeeding, if continued for the first 2 years of life, is nothing more wonderful. But when the child is older and the mother no longer has milk, it is extremely necessary to choose milk formulas with ingredients similar to breast milk to help the child develop his or her brain. So, what important nutrients are needed in milk that is good for children\'s brain development?</p>\n<p dir=\"ltr\"><img src=\"https://suahoanggia.vn/uploaded/images/sua-cho-tre-8-tuoi-phat-trien-tri-nao-01.jpg\" alt=\"Sữa ph&aacute;t triển tr&iacute; n&atilde;o cho b&eacute; 8 tuổi cần c&oacute; &ldquo;dưỡng chất v&agrave;ng&rdquo; n&agrave;o?\"></p>\n<p dir=\"ltr\"><strong>Vitamin E, D, A</strong></p>\n<p dir=\"ltr\">Scientific studies have also proven that natural sources of vitamin E are concentrated in large concentrations in brain areas related to memory, vision and language abilities.</p>\n<p dir=\"ltr\"><strong>Lutein</strong></p>\n<p>This is a Carotenoid compound that has been shown to exist most abundantly in the brain and macula of the eye. Choline</p>\n<p>With the effect of increasing memory because this is the source of methyl radicals to create Lipoprotein - the most important neurotransmitter in the brain of children. In breast milk, Lutein, natural vitamin E and DHA are combined in the perfect ratio, suitable for each baby, so they can support the optimal development of the nervous system.</p>\n<p dir=\"ltr\"><strong>DHA, ARA</strong></p>\n<p>The unsaturated fatty acid group DHA and ARA are the main components of building the baby\'s brain and retina. In particular, DHA is an indispensable component in the retina, cerebral cortex and central nervous system. ARA (arachidonic acid) is a fatty acid that does not produce cholesterol. This is also an omega-6 fatty acid that plays a key role in forming, perfecting and developing a child\'s central nervous system.</p>\n<p>American children consume an average of 30mg to 50mg of DHA per day by drinking fortified milk and eating DHA-rich foods. Therefore, children in Vietnam also need to provide adequate amounts of milk containing DHA to perfect their brains and increase their IQ.</p>\n<p dir=\"ltr\"><strong>Vitamins and fiber</strong></p>\n<p dir=\"ltr\">Vitamins and fiber play a role in promoting children\'s appetite, supporting energy metabolism, absorbing necessary nutrients to help children eat well, have a healthy digestive system, and increase resistance. Gain weight appropriately and develop comprehensively.</p>', '2023-09-08 02:06:38', '2023-09-08 02:06:38'),
(127, 'posts', 'slug', 12, 'en', 'what-is-the-best-brain-development-milk-for-8-year-olds-on-the-market-today', '2023-09-08 02:06:38', '2023-09-08 02:06:38'),
(128, 'posts', 'title', 11, 'en', 'TIPS ON HOW TO CHOOSE THE MOST SUITABLE 3-YEAR-OLD HEIGHT-ENABLE MILK', '2023-09-08 02:09:57', '2023-09-08 02:09:57'),
(129, 'posts', 'excerpt', 11, 'en', 'Babies are 3 years old, many families tend to learn and supplement milk to increase their height. Because, height is always the most important appearance factor in young children. It not only shows that the baby is tall and healthy, but also brings a lot of benefits to the child\'s future life.', '2023-09-08 02:09:57', '2023-09-08 02:09:57'),
(130, 'posts', 'body', 11, 'en', '<div id=\"tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\" class=\"#tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\">\n<div id=\"tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\" class=\"#tai-sao-3-tuoi-duoc-xem-la-giai-doan-vang-phat-trien-chieu-cao-cho-be\">\n<h2>I. Why is 3 years old considered as the golden period of height development for children?</h2>\n</div>\n</div>\n<p>When the baby is 3 years old, many families tend to learn about and supplement milk to increase height for the baby. Because height is always the top appearance factor of concern for young children. It not only shows that the baby is tall and healthy, but also brings many benefits for the child\'s future life.</p>\n<p>According to statistics from the National Institute of Nutrition, the average height of &nbsp;Vietnamese children is always among the lowest in the world. Therefore, parents are very concerned about improving their children\'s height when they are young. So do parents clearly understand the stages of their baby\'s height development?</p>\n<p><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi%20(1).jpeg\" alt=\"Sữa tăng chiều cao cho b&eacute; 3 tuổi\"></p>\n<p>Knowing the information about the baby\'s height development stage is a way to help parents choose the best milk and nutritional supplement for their children from an early age.</p>\n<p>On the other hand, a 3-year-old is in the \"golden\" stage of development from 0-3 years of age of any baby. During this period, children develop very quickly physically and mentally. In terms of height, your baby can grow 25cm in the first year and 10cm per year for the next 2 years. If at this stage, the baby is supplemented with adequate nutrition, which can determine up to 60% of the baby\'s future growth.</p>\n<div id=\"yeu-to-anh-huong-den-su-phat-trien-chieu-cao-cua-be-3-tuoi\" class=\"#yeu-to-anh-huong-den-su-phat-trien-chieu-cao-cua-be-3-tuoi\">\n<h2>II. Factors affecting the height growth of 3-year-old children</h2>\n</div>\n<p>A baby\'s physical growth and stature are influenced by many different factors. Among them, there are factors that parents can help their children improve, and there are factors that are immutable. Let\'s see what factors affect height development in babies:</p>\n<h3>1. Nutrition</h3>\n<p><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi-a%20(1)(1).jpg\" alt=\"Sữa ph&aacute;t triển chiều cao cho b&eacute; 3 tuổi\"></strong></p>\n<p>Many studies have shown that a baby\'s height is influenced by 23% of genetic factors, nutrition contributes to 32%, sports and other factors determine the remaining 20%. Thus, it can be seen that the role of nutrition has a great impact on the growth of height in children.</p>\n<h3>2. Genetic factors</h3>\n<p>Genes have a great influence on the growth of a baby\'s height. If parents or members of the dog family are short in height, the children will have limitations in height growth.</p>\n<h3>3. Living environment</h3>\n<p><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi-b%20(1).jpg\" alt=\"M&ocirc;i trường sống đến sự ph&aacute;t triển chiều cao cho b&eacute; 3 tuổi\"></strong></p>\n<p>Environmental pollution causes children to be constantly exposed to toxic substances and easily cause illness. Along with that, the use of many drugs to treat diseases greatly affects the baby\'s height development.</p>\n<p>In general, of all the basic factors that affect a baby\'s height development, nutrition plays the most important role. Along with that, creating exercise habits will help your child develop the optimal height possible.</p>\n<h3>4. Unhealthy living and exercise habits</h3>\n<p>The baby\'s habit of being inactive and going to bed late makes the baby\'s body passive, the muscles have less opportunity to work and develop. Besides, the baby\'s habit of often going to bed late affects the baby\'s growth hormone. Thereby causing the baby to face many obstacles in height development.</p>\n<div id=\"tieu-chi-lua-chon-sua-tang-chieu-cao-cho-be-3-tuoi\" class=\"#tieu-chi-lua-chon-sua-tang-chieu-cao-cho-be-3-tuoi\">\n<h2>III. Criteria for choosing height-increasing milk for 3-year-old children</h2>\n</div>\n<h3>1. Suitable for the baby\'s age and health</h3>\n<p>It is not natural that manufacturers often classify their products by age to sell to the market. An age-appropriate dairy product will be good for the digestive system and increase effectiveness when used by your baby. Besides, milk needs to meet the basic nutrient groups to help a 3-year-old baby develop evenly. Only then, when the baby\'s body develops healthily, the foundation will be built for the baby\'s height development.</p>\n<h3>2. Ingredients of milk</h3>\n<p><strong><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi%20(1).png\" alt=\"Ch&uacute; &yacute; đến th&agrave;nh phần của sữa\"></strong></p>\n<p>First of all, parents need to understand what is considered a height increase milk product. Milk to increase height for babies not only meets the calcium content in milk. Some very important ingredients help your baby increase the ability to absorb calcium better such as: vitamin D, K, magnesium. These are all basic and necessary substances to help your baby\'s digestive system better absorb calcium.</p>\n<h3>3. Milk brand and clear origin</h3>\n<ul>\n<li>A big milk brand is an invisible commitment to good quality dairy products. Because big milk brands will have enough resources to meet modern milk production technology, strict censorship to produce quality dairy products.</li>\n<li>Origin: here is only one address to buy genuine high quality products. By the fact you can see a famous milk brand will be accompanied by smuggled milk, counterfeit goods appear on the market. If you buy low-quality milk products, it will not help your 3-year-old child grow taller. Besides, it also has a negative impact on the baby\'s health.</li>\n</ul>\n<div id=\"thoi-diem-tot-nhat-de-uong-sua-tang-chieu-cao-cho-be-3-tuoi\" class=\"#thoi-diem-tot-nhat-de-uong-sua-tang-chieu-cao-cho-be-3-tuoi\">\n<h2>IV. The best time to drink milk to increase height for 3-year-old children</h2>\n</div>\n<p>Before 3 years old, milk plays a major role in the baby\'s diet. By age 3, most children can eat and drink almost like adults. Changing the source of additional nutrients helps the baby to supplement abundant calcium content and load into the body a variety of different nutrient sources. This change causes the amount of milk provided to the baby to decrease each day.</p>\n<p><img src=\"https://suahoanggia.vn/uploaded/images/sua-tang-chieu-cao-cho-be-3-tuoi-a%20(1).jpg\" alt=\"Sữa tăng chiều cao cho b&eacute; 3 tuổi\"></p>\n<p>Nutrition experts also advise that parents should not supplement too much milk for their babies. Instead, every day you should supplement your baby with a certain amount of milk and at times to help your baby\'s body absorb nutrients well.</p>\n<p>Many studies have shown that the best time to drink height-increasing milk for your baby is 2 hours before going to bed in the evening. Because growth hormone is secreted the most when the baby is in a state of deep sleep. The time from 10 p.m. to 2 a.m. is the golden time for your baby\'s height development.</p>\n<p>In addition, babies can drink milk at any time to provide energy for the body. However, you should not give your baby milk when he is hungry because it can easily cause stomach pain and bloating.</p>', '2023-09-08 02:09:57', '2023-09-08 02:09:57'),
(131, 'posts', 'slug', 11, 'en', 'tips-on-how-to-choose-the-most-suitable-3-year-old-height-enable-milk', '2023-09-08 02:09:57', '2023-09-08 02:09:57'),
(132, 'posts', 'title', 10, 'en', 'HIGH ENERGY MILK FOR BABY: HOW TO USE IT EFFECTIVELY?', '2023-09-08 02:13:45', '2023-09-08 02:13:45'),
(133, 'posts', 'excerpt', 10, 'en', 'High-energy milk is designed to provide the energy, protein, vitamins and minerals your baby needs to keep up with growth and development.', '2023-09-08 02:13:45', '2023-09-08 02:13:45');
INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(134, 'posts', 'body', 10, 'en', '<div class=\"post-bound\">\n<div class=\"post-content\">\n<p dir=\"ltr\">High-energy milk is designed to provide the energy, protein, vitamins and minerals your baby needs to keep pace with growth and development. Learn more about high-energy milk as well as how to use high-energy milk effectively in the article below.</p>\n<h2 dir=\"ltr\">What is high-energy milk?</h2>\n<h3 dir=\"ltr\">Define</h3>\n<p dir=\"ltr\">High-calorie milk is milk that provides more energy than 100kcal/100ml milk - a much higher number when compared to breast milk and formula (about 67 - 75kcal/100ml). High-energy milk for babies has an outstanding source of high energy to help children timely supplement energy, gain weight well, catch up with growth momentum at the right age.</p>\n<p dir=\"ltr\"><img src=\"https://lh4.googleusercontent.com/Lx6duYVChjVLJUmahHSfmJnnRRq31w4xwYCCUtVzxFIv94_Tc4M2Q9_FcfErKwbHKT29fgTjt7auoeXg2zkvyW8WhuxTXiLTnTK9hG9IhRU3rnIJl6hgVmb-EIZXG00fewQ1XJm1KqchxlkmLKHstzA\"></p>\n<h3 dir=\"ltr\"><strong>Distinguishing high-energy milk from formula milkc</strong></h3>\n<p>Currently, on the market, there are many types of formula milk with similar uses to high-energy milk such as milk for anorexia children, milk for premature babies, milk for babies during recovery...</p>\n<p>The most obvious factor to differentiate is information about nutritional index:</p>\n<p dir=\"ltr\"><strong>1. Energy</strong></p>\n<ul dir=\"ltr\">\n<li role=\"presentation\">Energy &gt;=100kcal/100ml means it is high-energy milk</li>\n<li role=\"presentation\">Energy from 70 - 75kcal/100ml are types of weight gain milk for babies, milk for anorexic children</li>\n<li role=\"presentation\">Energy is about 67 - 68kcal/100ml for breast milk and other standard formula milk.</li>\n</ul>\n<p dir=\"ltr\"><strong>2. Protein:</strong> High-energy milk usually has a higher protein content than regular milk, about 3.5-4g/100ml.</p>\n<p dir=\"ltr\"><strong>3. Fat:</strong> &nbsp;High-calorie milk usually has a higher fat content than regular milk, about 3.5-4g/100ml.</p>\n<p dir=\"ltr\"><strong>4. Vitamins and Minerals:</strong> &nbsp;High-energy milk often focuses on providing energy from fat, protein and carbohydrates, so it may lack some other important nutrients such as vitamins, minerals and fiber.</p>\n<h2 dir=\"ltr\">Should babies drink high-energy milk?</h2>\n<p dir=\"ltr\">Whether or not to give your baby high-energy milk needs to be checked and recommended by a doctor. The doctor will make an assessment and prescribe for the baby based on the health status and weight.</p>\n<p dir=\"ltr\"><img src=\"https://lh6.googleusercontent.com/fGzV_MmiUzQwTJj6lhRz0P-2RH82r82ZtVrggQ4hFh0B8fx6NAU3WNsoWunDEgJ0wgkZEiFQ9Q7KwlroDXjj-Z9TZnED0u8sVaRDc1R145YOe1fma7-q72TqJN36vhP9zHaVjyX3XcpkTbMeZnxXhcY\"></p>\n<p>The following cases are often recommended to use high-energy milk:</p>\n<p>Malnourished children: If your baby is malnourished, underweight compared to the standard weight for his age, high-energy milk can help him gain weight well. This milk provides more protein and fat, helping your baby absorb the energy and nutrition he needs.<br>Anorexic: If your baby tends to be anorexic and doesn\'t get enough energy from their daily diet, high-energy milk can be a reasonable choice to supplement your baby\'s nutrition. Anorexia includes psychological, physiological and especially pathological anorexia.<br>Children needing to recover from illness: After experiencing an illness, your baby may need extra energy and nutrition to recover. High-energy milk can help your baby recover quickly.<br>Many experts believe that milk for children who are slow to gain weight and lazy to eat is not necessarily high-energy milk. Parents can choose weight gain milks for their babies (with an energy level of 70 - 75kcal/100ml); Milk supplemented with zinc, lysine (stimulates baby\'s appetite) or other types of milk that are good for the digestive system, cool milk... for long-term use instead of high-energy milk.</p>\n<p>Giving your baby high-energy milk without the advice and guidance of a medical professional can cause other health problems:</p>\n<p>Children lose their appetite: If you overuse high-energy milk and use it to replace main meals for a long time, it can cause a lack of vitamins, fiber, zinc, iron... causing nutritional imbalance in your child. loss of appetite and uneven growth.<br>Weight gain and obesity: When the baby has caught up to the ideal weight, if the parents continue to use this type of milk, the baby will have excess energy, causing weight gain, obesity and leading to a series of other diseases such as heart disease. cardiovascular, diabetes, skeleton...<br>Digestive disorders: Consuming too much fat and energy from high-energy milk can cause your baby to become constipated and have indigestion. In addition, high-energy milk often does not use lactose. If used for a long time, the body will reduce the secretion of the enzyme lactase - a specific lactose-digesting enzyme, causing typical symptoms of digestive disorders: bloating, diarrhea. flowing, crumbling... when returning to regular milk.<br>Liver dysfunction: Some high-energy milks may contain special ingredients or additives that can have negative effects on the liver, especially when used over a long period of time and not according to your doctor\'s instructions. doctor.<br>In short, whether to give your baby high-energy milk or not depends on the doctor\'s assessment and indications. Always talk to your doctor to get the right assessment and instructions for your baby\'s specific case.</p>\n<h2 dir=\"ltr\">Drink high-energy milk properly</h2>\n<p dir=\"ltr\"><img src=\"https://lh5.googleusercontent.com/YUcsj3G2gTVqo1sn2LX03mglBitwl8_Ns4uS__INyJjcRCdXHFLwD5su6cmgyZKU0njLvyMWnG_lpJvGdRpsD_8gBzIXJR40aanG9h3NkMPbnV5XnSPXoc3wHuA-7h1btyjb0SMwn9QaqHKbvdI7x4g\"></p>\n<p dir=\"ltr\">Adding high-energy milk to the diet is an effective solution for babies to catch up with growth. However, it is necessary to drink high-energy milk properly to maximize the effectiveness of this milk.</p>\n</div>\n</div>', '2023-09-08 02:13:45', '2023-09-08 02:13:45'),
(135, 'posts', 'slug', 10, 'en', 'high-energy-milk-for-baby-how-to-use-it-effectively', '2023-09-08 02:13:45', '2023-09-08 02:13:45'),
(136, 'data_rows', 'display_name', 107, 'en', 'Id', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(137, 'data_rows', 'display_name', 108, 'en', 'Tiêu đề', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(138, 'data_rows', 'display_name', 109, 'en', 'Nội dung 1', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(139, 'data_rows', 'display_name', 110, 'en', 'Nội dung 2', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(140, 'data_rows', 'display_name', 111, 'en', 'Nội dung 3', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(141, 'data_rows', 'display_name', 112, 'en', 'Hình ảnh', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(142, 'data_rows', 'display_name', 113, 'en', 'Call Url', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(143, 'data_rows', 'display_name', 114, 'en', 'Ngày tạo', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(144, 'data_rows', 'display_name', 115, 'en', 'Updated At', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(145, 'data_rows', 'display_name', 136, 'en', 'Link1', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(146, 'data_rows', 'display_name', 137, 'en', 'Link2', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(147, 'data_rows', 'display_name', 138, 'en', 'Link3', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(148, 'data_types', 'display_name_singular', 12, 'en', 'Cam kết sản phẩm', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(149, 'data_types', 'display_name_plural', 12, 'en', 'Cam kết sản phẩm', '2023-09-08 17:57:34', '2023-09-08 17:57:34'),
(150, 'camketsanphams', 'field4', 1, 'en', 'DHA: Positive impact on cognitive ability', '2023-09-08 18:09:47', '2023-09-08 18:09:47'),
(151, 'camketsanphams', 'field5', 1, 'en', 'Probiotic Bifidobacterium: Improves Digestion', '2023-09-08 18:09:47', '2023-09-08 18:09:47'),
(154, 'data_rows', 'display_name', 163, 'en', 'Link4', '2023-09-08 19:56:12', '2023-09-08 19:56:12'),
(155, 'data_rows', 'display_name', 164, 'en', 'Link5', '2023-09-08 19:56:12', '2023-09-08 19:56:12'),
(156, 'data_rows', 'display_name', 165, 'en', 'Field4', '2023-09-08 19:56:12', '2023-09-08 19:56:12'),
(157, 'data_rows', 'display_name', 166, 'en', 'Field5', '2023-09-08 19:56:12', '2023-09-08 19:56:12'),
(158, 'data_rows', 'display_name', 167, 'en', 'Icon1', '2023-09-08 19:58:15', '2023-09-08 19:58:15'),
(159, 'data_rows', 'display_name', 168, 'en', 'Icon2', '2023-09-08 19:58:15', '2023-09-08 19:58:15'),
(160, 'data_rows', 'display_name', 169, 'en', 'Icon3', '2023-09-08 19:58:15', '2023-09-08 19:58:15'),
(161, 'data_rows', 'display_name', 170, 'en', 'Icon4', '2023-09-08 19:58:15', '2023-09-08 19:58:15'),
(162, 'data_rows', 'display_name', 171, 'en', 'Icon5', '2023-09-08 19:58:15', '2023-09-08 19:58:15'),
(163, 'camketsanphams', 'field4', 2, 'en', 'Commitment to quality', '2023-09-08 21:11:03', '2023-09-09 01:48:03'),
(164, 'menu_items', 'title', 43, 'en', 'Hallo Baby MAMA', '2023-09-11 20:38:54', '2023-09-11 20:38:54'),
(165, 'menu_items', 'title', 44, 'en', 'Hallo Baby 1 Infant Formula', '2023-09-11 20:39:40', '2023-09-11 20:39:40'),
(166, 'menu_items', 'title', 45, 'en', 'Hallo Baby 2 Infant Formula', '2023-09-11 20:40:21', '2023-09-11 20:40:21'),
(167, 'menu_items', 'title', 46, 'en', 'Hallo Baby 3 Infant Formula', '2023-09-11 20:40:49', '2023-09-11 20:40:49'),
(168, 'pages', 'title', 9, 'en', 'Payment methods', '2023-09-12 00:37:03', '2023-09-12 00:37:03'),
(169, 'pages', 'body', 9, 'en', '<p>In Hallo Baby\'s delivery policy, payment methods are very specific and customer shopping experience is given top priority. Payment methods accepted at the store include cash, bank transfer and credit card payments.</p>\n<p>For cash payment, customers will make payment right at the store when receiving the product. If the customer does not have enough cash, the store will not make the delivery.</p>\n<p>Customers can also pay by bank transfer. After the customer completes the ordering and payment process, the store will confirm the order and send the product to the address the customer provided in the order.</p>\n<p>If customers choose to pay by credit card, they will have to provide card information and confirm payment. After confirming payment, the store will make delivery to the address provided in the order.</p>\n<p>With these payment methods, customers can feel completely secure when shopping at the store, because all information and payment transactions are kept confidential and secure. The store is also always ready to assist customers in choosing the most suitable payment method.</p>', '2023-09-12 00:37:03', '2023-09-12 00:37:03'),
(170, 'pages', 'slug', 9, 'en', 'payment-methods', '2023-09-12 00:37:03', '2023-09-12 00:37:03'),
(171, 'pages', 'title', 10, 'en', 'Delivery and returns', '2023-09-12 00:39:06', '2023-09-12 00:39:06'),
(172, 'pages', 'body', 10, 'en', '<p>Hallo Baby\'s delivery policy includes the following information:</p>\n<p>1. Delivery time:<br>&ndash; Inner city of Hanoi and City. Ho Chi Minh: 1-2 working days.<br>&ndash; Other provinces: 2-3 working days.</p>\n<p>2. Delivery fee:<br>&ndash; In Hanoi and City. Ho Chi Minh: Free with orders of 2,000,000 VND or more. Fee 30,000 VND for orders under 2,000,000 VND.<br>&ndash; Other provinces: Shipping fees are calculated according to the shipping unit\'s fee schedule.</p>\n<p>3. Delivery method:<br>&ndash; The store uses shipping services from reputable partners such as Viettel Post, VNPost, Quick Delivery (GHN) and Ship COD.<br>&ndash; Customers will receive order tracking information via text message or email.</p>\n<p>4. Procedures for returning goods:<br>&ndash; Exchange: Customers can exchange goods within 7 days of receiving the goods. Return conditions include the product received, not damaged, with tags intact.<br>&ndash; Return goods: If the product does not meet the requirements, customers can return it within 3 days of receiving the product.</p>\n<p>With the above information, Hallo Baby\'s delivery policy ensures convenience for customers. Customers can safely shop for products at this store without having to worry about delivery and return issues.</p>', '2023-09-12 00:39:06', '2023-09-12 00:39:06'),
(173, 'pages', 'slug', 10, 'en', 'delivery-and-returns', '2023-09-12 00:39:06', '2023-09-12 00:39:06'),
(174, 'pages', 'title', 11, 'en', 'Information security', '2023-09-12 00:40:10', '2023-09-12 00:40:10'),
(175, 'pages', 'body', 11, 'en', '<p>Hallo Baby store privacy policy is one of the store\'s top priorities. We are committed to ensuring safety and protecting customer information at the store.</p>\n<p>Customer information is used for the purpose of providing the best products and services to customers. We will not disclose customer personal information to any third party without the customer\'s consent.</p>\n<p>The store ensures that customer information will be kept secure and protected through the use of appropriate measures to prevent unauthorized access or misuse. Stores also grant employees access to customer information only to perform duties and other responsibilities related to providing products and services.</p>\n<p>To ensure safety and protect customer information, the store recommends that customers not share their personal information with anyone to avoid unwanted risks.</p>\n<p>The Hallo Baby store privacy policy is considered important information and is periodically updated and enforced to ensure that the store always meets the highest standards of information security and protection of customer privacy. client.</p>', '2023-09-12 00:40:10', '2023-09-12 00:56:35'),
(176, 'pages', 'slug', 11, 'en', 'information-security', '2023-09-12 00:40:11', '2023-09-12 00:40:11'),
(177, 'pages', 'title', 12, 'en', 'Shopping guide', '2023-09-12 00:53:33', '2023-09-12 00:53:33'),
(178, 'pages', 'body', 12, 'en', '<p>Hello customers, for more convenience in ordering Hallo Baby products, you can order directly on the website, contact the sales department via hotline or come visit and buy products online. Continued at Hallo Baby stores.</p>\n<p>METHOD 1 &ndash; ORDER BY PHONE</p>\n<p>Order service time is from 8:00 a.m. to 9:15 p.m. every day of the week</p>\n<p>Hotline: 19008690</p>\n<p>METHOD 2 &ndash; ORDER THROUGH WEBSITE</p>\n<p><br>Step 1: Click to select the product you want to buy</p>\n<p><img src=\"https://demophucuong.kennatech.vn/storage/pages/September2023/screenshot_16945053731.png\" alt=\"\" width=\"1314\" height=\"507\"></p>\n<p>Step 2: Click the &ldquo;Add to Cart&rdquo; button</p>\n<p><br>Step 3: Fill in accurate personal information in the order box</p>\n<p>After completing the order, Hallo Baby will send a notification of successful order. Next, the sales department will contact the customer to notify the delivery time.</p>', '2023-09-12 00:53:33', '2023-09-12 00:53:33'),
(179, 'pages', 'slug', 12, 'en', 'shopping-guide', '2023-09-12 00:53:33', '2023-09-12 00:53:33'),
(180, 'pages', 'title', 13, 'en', 'Complaint handling policy', '2023-09-12 01:00:15', '2023-09-12 01:00:15'),
(181, 'pages', 'body', 13, 'en', '<p>&ndash; Receive all customer complaints related to using the company\'s services.</p>\n<p>&ndash; In all warranty cases, you can contact us to complete warranty procedures.</p>\n<p>&ndash; The maximum time to resolve complaints is 03 (three) working days from receipt of the customer\'s complaint. In case of force majeure, the two parties will negotiate on their own.</p>', '2023-09-12 01:00:15', '2023-09-12 01:00:15'),
(182, 'pages', 'slug', 13, 'en', 'complaint-handling-policy', '2023-09-12 01:00:15', '2023-09-12 01:00:15'),
(183, 'pages', 'title', 14, 'en', 'Warranty Policy', '2023-09-12 01:01:49', '2023-09-12 01:01:49'),
(184, 'pages', 'body', 14, 'en', '<p><strong>1. Warranty cases:</strong></p>\n<p>&ndash; The newly delivered product does not match the image provided or on the website</p>\n<p><strong>2. Cases not covered by warranty:</strong></p>\n<p>&ndash; The product is scratched due to long-term use</p>\n<p>&ndash; The product is dented or deformed due to impact</p>\n<p>&ndash; The product has the manufacturer\'s label peeled off</p>\n<p><strong>3. Conditions for return or 100% refund:</strong></p>\n<p>&ndash; The product is found to have a manufacturer defect upon receipt.</p>\n<p>&ndash; The product is not the same as the product you ordered on our website.</p>\n<p>Note:</p>\n<p>&ndash; Customers need to return the goods within 02 working days from the time you receive the goods.</p>\n<p>&ndash; Returned products must have the original label, box, and packaging of the product intact as when you initially received the product</p>', '2023-09-12 01:01:49', '2023-09-12 01:01:49'),
(185, 'pages', 'slug', 14, 'en', 'warranty-policy', '2023-09-12 01:01:49', '2023-09-12 01:01:49'),
(186, 'data_rows', 'display_name', 44, 'en', 'ID', '2023-09-12 01:05:12', '2023-09-12 01:05:12'),
(187, 'data_rows', 'display_name', 45, 'en', 'Author', '2023-09-12 01:05:12', '2023-09-12 01:05:12'),
(188, 'data_rows', 'display_name', 46, 'en', 'Title', '2023-09-12 01:05:12', '2023-09-12 01:05:12'),
(189, 'data_rows', 'display_name', 47, 'en', 'Excerpt', '2023-09-12 01:05:12', '2023-09-12 01:05:12'),
(190, 'data_rows', 'display_name', 48, 'en', 'Body', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(191, 'data_rows', 'display_name', 55, 'en', 'Page Image', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(192, 'data_rows', 'display_name', 49, 'en', 'Slug', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(193, 'data_rows', 'display_name', 50, 'en', 'Meta Description', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(194, 'data_rows', 'display_name', 51, 'en', 'Meta Keywords', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(195, 'data_rows', 'display_name', 52, 'en', 'Status', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(196, 'data_rows', 'display_name', 53, 'en', 'Created At', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(197, 'data_rows', 'display_name', 54, 'en', 'Updated At', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(198, 'data_types', 'display_name_singular', 6, 'en', 'Page', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(199, 'data_types', 'display_name_plural', 6, 'en', 'Pages', '2023-09-12 01:05:13', '2023-09-12 01:05:13'),
(200, 'menu_items', 'title', 40, 'en', 'Đăng ký nhận Voucher', '2023-09-13 21:28:00', '2023-09-13 21:28:00'),
(201, 'menu_items', 'title', 47, 'en', 'Đăng ký nhận Voucher', '2023-09-13 21:28:15', '2023-09-13 21:28:15'),
(202, 'data_rows', 'display_name', 63, 'en', 'Id', '2023-09-14 00:29:40', '2023-09-14 00:29:40'),
(203, 'data_rows', 'display_name', 64, 'en', 'Tiêu đề', '2023-09-14 00:29:40', '2023-09-14 00:29:40'),
(204, 'data_rows', 'display_name', 65, 'en', 'Slug', '2023-09-14 00:29:40', '2023-09-14 00:29:40'),
(205, 'data_rows', 'display_name', 66, 'en', 'Mô tả', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(206, 'data_rows', 'display_name', 67, 'en', 'Giá sản phẩm', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(207, 'data_rows', 'display_name', 68, 'en', 'Hình ảnh', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(208, 'data_rows', 'display_name', 69, 'en', 'Nội dung', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(209, 'data_rows', 'display_name', 70, 'en', 'Trạng thái', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(210, 'data_rows', 'display_name', 71, 'en', 'Type', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(211, 'data_rows', 'display_name', 72, 'en', 'Created At', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(212, 'data_rows', 'display_name', 73, 'en', 'Updated At', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(213, 'data_rows', 'display_name', 140, 'en', 'Ảnh liên quan', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(214, 'data_rows', 'display_name', 135, 'en', 'Review sản phẩm', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(215, 'data_types', 'display_name_singular', 8, 'en', 'Sản phẩm', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(216, 'data_types', 'display_name_plural', 8, 'en', 'Sản phẩm', '2023-09-14 00:29:41', '2023-09-14 00:29:41'),
(217, 'data_rows', 'display_name', 173, 'en', 'Giá khuyến mại', '2023-09-14 00:30:34', '2023-09-14 00:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/August2023/Mu6oS0kT2I7A7kyyg4pk.png', NULL, '$2y$10$a9xrXCN4ZaPzlPVsmQ8A7eRyjWeNFYS5mHiN83YRv78IxdffOl65m', '61Bx0CfNq6puVczLJg1YkqeZ97KNCaEKCYxU8190zkkbveMChRBuUOygY0iY', '{\"locale\":\"vi\"}', '2023-06-01 19:44:56', '2023-08-27 17:59:41'),
(2, 3, 'content', 'content@admin.com', 'users/September2023/byWu7do0U8jWuofbj0wb.png', NULL, '$2y$10$zAofl6.0k4YnB2LP10V/muGfPBwK81eJYSsvFZuul/beYfJWWTrsi', NULL, '{\"locale\":\"vi\"}', '2023-09-09 01:16:13', '2023-09-09 01:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_mama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` bigint(20) DEFAULT NULL,
  `name_shop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_shop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hallo_1` bigint(20) DEFAULT NULL,
  `product2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hallo_2` bigint(20) DEFAULT NULL,
  `product3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hallo_3` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `name`, `phone`, `state`, `district`, `ward`, `address`, `product_mama`, `number`, `name_shop`, `phone_shop`, `created_at`, `updated_at`, `product1`, `hallo_1`, `product2`, `hallo_2`, `product3`, `hallo_3`) VALUES
(25, 'tes1', '0335444444', '201:Hà Nội', '1803:Huyện Ba Vì', '6349:Thị trấn Tây Đằng', '112, anhi', 'Hallo Baby MAMA', 100, 'tes1', '000000000', '2023-09-14 18:39:55', '2023-09-14 18:39:55', 'Hallo Baby 1', 200, 'Hallo Baby 2', 300, 'Hallo Baby 3', 400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advises`
--
ALTER TABLE `advises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camketsanphams`
--
ALTER TABLE `camketsanphams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_questions`
--
ALTER TABLE `service_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advises`
--
ALTER TABLE `advises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `camketsanphams`
--
ALTER TABLE `camketsanphams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_questions`
--
ALTER TABLE `service_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
