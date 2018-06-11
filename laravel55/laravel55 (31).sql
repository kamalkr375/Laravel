-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 12:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel55`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `password`, `job_title`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Abhi', 'admin@gmail.com', '$2y$10$I03QhNt8841jOS4Vf4Ckm.SKC9erbUPEqPEqlo.S6xGT0IQtX/p0a', 'Developer', 'ZadBHtHBxoONTl4PD8EistQ2mrbgJqdGUqjS7lMS4YavYTcZSvdC1J79zPWf', 0, '2018-03-17 17:05:10', '2018-03-17 17:05:10'),
(3, 2, 'Abhishek', 'test@gmail.com', '$2y$10$KcDi6qqKpEGzX/iiJIdFMOW6lnWaGoAGFJF9R0Ie2j/RLpR5BgpA6', '', NULL, 1, '2018-05-09 05:33:31', '2018-05-09 05:33:31'),
(4, 1, 'Leena', 'leena@finessse.digital', '$2y$10$rasYYsfXxow48/trEwA5wOwgxIiQvgHD9JoJu5/f4u94O9/Crjmra', '', NULL, 1, '2018-05-15 01:11:06', '2018-05-15 01:11:06'),
(5, 2, 'Abhishek', 'kumkum@gmail.com', '$2y$10$NxCXyzVT2txo0waKJgeuCOZ4UBaV.JxV95ObwRHTFus58GcKSvNSa', '', NULL, 1, '2018-05-15 05:13:25', '2018-05-15 05:13:25'),
(6, 2, 'Abhishek', 'ad@gmail.com', '$2y$10$m7nzPc0hv4iQzlDJnkEaO.mtvDEhPIs.rQ0lkTOQQf30.XtU9wFKK', '', NULL, 1, '2018-05-15 05:23:16', '2018-05-15 05:23:16'),
(7, 3, 'neha', 'neha@gmail.com', '$2y$10$Cd09.GzYUNu6aCCRppkHZuojhSomtZ1i.NAnLRqudq0aLFnMb20iC', '', NULL, 1, '2018-05-15 08:15:31', '2018-05-15 08:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 0, NULL, NULL),
(2, 'Add Admin User', 1, NULL, NULL),
(3, 'View Admin User', 1, NULL, NULL),
(4, 'Affiliate', 0, NULL, NULL),
(5, 'Add Affiliate', 4, NULL, NULL),
(6, ' View Affiliate', 4, NULL, NULL),
(7, 'Blog', 0, NULL, NULL),
(8, 'Add Blog', 7, NULL, NULL),
(9, 'View Blog', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `admin_id`, `admin_menu_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2018-05-09 05:33:31', '2018-05-09 05:33:31'),
(2, 3, 3, '2018-05-09 05:33:31', '2018-05-09 05:33:31'),
(3, 3, 5, '2018-05-09 05:33:31', '2018-05-09 05:33:31'),
(4, 3, 6, '2018-05-09 05:33:31', '2018-05-09 05:33:31'),
(5, 3, 9, '2018-05-09 05:33:31', '2018-05-09 05:33:31'),
(6, 4, 3, '2018-05-15 01:11:06', '2018-05-15 01:11:06'),
(7, 4, 6, '2018-05-15 01:11:06', '2018-05-15 01:11:06'),
(8, 4, 9, '2018-05-15 01:11:06', '2018-05-15 01:11:06'),
(9, 5, 2, '2018-05-15 05:13:25', '2018-05-15 05:13:25'),
(10, 5, 3, '2018-05-15 05:13:25', '2018-05-15 05:13:25'),
(11, 6, 5, '2018-05-15 05:23:16', '2018-05-15 05:23:16'),
(12, 6, 6, '2018-05-15 05:23:16', '2018-05-15 05:23:16'),
(13, 7, 3, '2018-05-15 08:15:31', '2018-05-15 08:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affiliates`
--

INSERT INTO `affiliates` (`id`, `name`, `address`, `phone_number`, `website`, `commission`, `created_at`, `updated_at`) VALUES
(2, 'Nitay', 'Nitay Goranga', '8978787867', 'http://www.google.com', 10, '2018-05-16 07:09:54', '2018-05-16 07:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_tracking` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `url`, `event_tracking`, `alt_tag`, `banner`, `created_at`, `updated_at`) VALUES
(2, 'Title 2s', 'urls', 'event trackings', 'alt tags', 'images1526539986.jpg', '2018-05-17 01:06:54', '2018-05-17 01:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `short_description`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Airtel', 're6', 'Full Desc', 'short Descad', 'love-1522043546.png', '2018-03-26 00:22:26', '2018-03-26 07:11:36'),
(7, 'vz', 'asdf', 'adsfa', 'sadf', 'download_banner-1522331075.jpg', '2018-03-29 08:14:35', '2018-03-29 08:14:35'),
(9, 'dkdkd dafssa', 'dkdkd-dafssa', '<p>dkdkkd</p>', '<p>dkdk</p>', '', '2018-05-23 07:32:08', '2018-05-23 07:32:26'),
(10, 'euheuh', 'euheuh', '<p>wnmd wnd</p>', '<p>jdwkjdw</p>', '', '2018-05-29 00:03:46', '2018-05-29 00:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `meta_description`, `icon`, `discount_type`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Category-2', 'adfadfdfs', 'asdf', NULL, '', '', 0, '2018-03-29 08:16:32', '2018-03-29 08:16:44'),
(8, 'Category-3', 'adfadfdfsaa', 'asdf', NULL, '', '', 0, '2018-03-29 08:16:37', '2018-03-29 08:16:37'),
(9, 'Category-4', 'dsafsaf', 'adsfsaf', NULL, '', '', 0, '2018-04-06 02:54:18', '2018-04-06 03:55:50'),
(10, 'Birthday', 'birthday', 'testing123', NULL, '', '', 1, '2018-05-15 01:07:06', '2018-05-15 01:07:06'),
(11, 'Test1', 'test1', 'meta desc', 'downo21527149707.jpg', '', '', 1, '2018-05-24 02:45:07', '2018-05-24 02:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Red', 1, '2018-04-06 01:58:27', '2018-04-06 01:59:50'),
(3, 'Green', 1, '2018-04-06 02:10:17', '2018-04-06 02:10:17'),
(4, 'Blue', 1, '2018-04-06 02:10:40', '2018-04-06 02:10:40'),
(5, 'qee', 0, '2018-04-10 04:54:04', '2018-04-10 04:54:04'),
(6, 'Green1', 1, '2018-04-10 04:54:29', '2018-04-10 04:54:29'),
(7, 'green', 1, '2018-04-10 05:01:08', '2018-04-10 05:01:08'),
(8, 'green', 1, '2018-04-10 06:05:05', '2018-04-10 06:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Boys', 'boysd', 'Boy descs', 0, '2018-04-05 02:49:46', '2018-04-17 04:13:44'),
(2, 'test', 'testts', 'test desc', 0, '2018-04-17 04:06:26', '2018-04-17 04:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_16_171026_create_admins_table', 1),
(5, '2018_03_21_095228_create_vendors_table', 2),
(6, '2018_03_23_080837_create_brands_table', 3),
(7, '2018_03_28_074843_create_categories_table', 4),
(8, '2018_03_30_055257_create_subcategories_table', 5),
(9, '2018_03_30_060600_create_subcategory_filters_table', 5),
(11, '2018_03_30_060920_create_subcategory_filter_attributes', 6),
(12, '2018_04_05_070107_create_genders_table', 7),
(13, '2018_04_05_112719_create_colors_table', 8),
(14, '2018_04_06_122444_create_occasions_table', 9),
(15, '2018_04_09_050020_create_relations_table', 10),
(24, '2018_04_09_080256_create_products_table', 11),
(25, '2018_04_10_071039_create_product_occasions_table', 11),
(26, '2018_04_10_071302_create_product_relations_table', 11),
(27, '2018_04_11_081352_create_product_filter_attributes_table', 11),
(28, '2018_05_08_051900_create_roles_table', 12),
(29, '2018_05_08_061415_create_role_admins_table', 12),
(30, '2018_05_08_104412_create_admin_menus_table', 13),
(32, '2018_05_09_070717_create_admin_permissions_table', 14),
(33, '2018_05_15_051949_create_careers_table', 15),
(34, '2018_05_16_074926_create_affiliates_table', 15),
(35, '2018_05_17_043053_create_banners_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `occasions`
--

CREATE TABLE `occasions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `slug`, `description`, `banner_1`, `banner_2`, `banner_3`, `banner_4`, `banner_5`, `gender_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'occasion-1', 'a', 'odesdadf', 'download1523100959.jpg', 'download_banner1523100959.jpg', 'archieslogo1523103517.png', 'mys1523100959.jpg', NULL, 1, 0, '2018-04-07 06:05:59', '2018-04-07 06:49:08'),
(2, 'occasion-2', 'oc1', 'oc description', 'download_banner1523278534.jpg', 'download_banner1523278534.jpg', 'downo21523278534.jpg', 'images1523278535.jpg', 'mys1523278535.jpg', 1, 1, '2018-04-09 07:25:35', '2018-04-09 07:25:35'),
(3, 'Name 2-2', 'slug-2-2', 'desc update', 'download_banner1523961005.jpg', 'archieslogo1523960463.png', 'Beach Fireworks  Pink HD Wallpaper1523960463.jpg', 'download1523960463.jpg', 'downo21523960463.jpg', 2, 0, '2018-04-17 04:51:03', '2018-04-17 05:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$0zxsCl2JmrVVZVdb0Zby/uBFmUsDCRQOaOCKWMZGeElfzRY5fjkee', '2018-03-22 02:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `info` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_combo` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantity_limitation_without_inventory` int(11) NOT NULL,
  `negative_quantity_allow` int(11) NOT NULL,
  `inr_price` double(8,2) NOT NULL,
  `new` int(11) NOT NULL,
  `home_menu` int(11) NOT NULL,
  `hot_seller` int(11) NOT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rack` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `title`, `info`, `description`, `code`, `barcode`, `category_id`, `subcategory_id`, `brand_id`, `vendor_id`, `gender_id`, `images`, `is_combo`, `quantity`, `quantity_limitation_without_inventory`, `negative_quantity_allow`, `inr_price`, `new`, `home_menu`, `hot_seller`, `discount_type`, `discount`, `rack`, `status`, `created_at`, `updated_at`) VALUES
(2, 'testingup', 'sldkup', 'kdkdup', 'kdkdkup', 'kdkup', 'dkdkkup', 'barcode67up', 7, 7, 1, 2, 1, '', 1, 233, 1, 0, 75550.90, 1, 0, 1, 'price', '455', 'dkdkup', 0, '2018-04-12 01:07:52', '2018-04-13 00:41:48'),
(3, 'abhi', 'abhi', NULL, NULL, NULL, 'asdfsa', 'adfssa', 7, 8, 1, 7, 1, '{\"1\":{\"priority\":1,\"type\":\"img\",\"name\":\"image-1\",\"value\":\"download1527486406.jpg\"},\"2\":{\"priority\":2,\"type\":\"img\",\"name\":\"image-2\",\"value\":\"download_banner1527486406.jpg\"},\"3\":{\"priority\":3,\"type\":\"img\",\"name\":\"image-3\",\"value\":\"downo21527486406.jpg\"},\"4\":{\"priority\":4,\"type\":\"video\",\"name\":4,\"value\":\"vddd\"},\"5\":{\"priority\":5,\"type\":\"video\",\"name\":5,\"value\":\"video2\"}}', 1, 34, 1, 1, 43.00, 1, 1, 1, 'price', '45', NULL, 1, '2018-05-28 00:16:46', '2018-05-28 00:16:46'),
(4, 'product-1', 'product-1', 'title-1', 'info-1', 'desc-1', 'productcode-1', 'barcode-1', 11, 17, 9, 7, 1, '{\"1\":{\"priority\":1,\"type\":\"video\",\"name\":1,\"value\":\"video1\"},\"2\":{\"priority\":2,\"type\":\"video\",\"name\":3,\"value\":\"video2\"},\"3\":{\"priority\":3,\"type\":\"img\",\"name\":\"image-5\",\"value\":\"downo21527509728.jpg\"},\"4\":{\"priority\":4,\"type\":\"video\",\"name\":7,\"value\":\"video4\"},\"5\":{\"priority\":5,\"type\":\"img\",\"name\":\"image-10\",\"value\":\"archieslogo1527509729.png\"}}', 1, 34, 0, 0, 34.00, 1, 1, 1, 'price', '45', 'rack-1', 1, '2018-05-28 00:24:11', '2018-05-28 06:45:29'),
(7, 'product-2', 'product-2', 'titel-2', 'info-2', 'prodict-desc 2', 'productcode-2', 'barcode-2', 11, 17, 9, 7, 1, '{\"1\":{\"priority\":1,\"type\":\"video\",\"name\":3,\"value\":\"video1\"},\"2\":{\"priority\":2,\"type\":\"video\",\"name\":5,\"value\":\"video2\"},\"3\":{\"priority\":3,\"type\":\"img\",\"name\":\"image-6\",\"value\":\"downo21527510664.jpg\"},\"4\":{\"priority\":4,\"type\":\"video\",\"name\":7,\"value\":\"video4\"}}', 1, 45, 0, 0, 33.00, 1, 1, 1, 'price', '50', 'rake-2', 1, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(8, 'dkk', 'j', NULL, 'k', 'kk', 'k', 'k', 11, 17, 9, 7, 1, '{\"1\":{\"priority\":1,\"type\":\"video\",\"name\":1,\"value\":\"video1\"},\"2\":{\"priority\":2,\"type\":\"video\",\"name\":2,\"value\":\"video2\"},\"3\":{\"priority\":3,\"type\":\"img\",\"name\":\"image-3\",\"value\":\"images1527510927.jpg\"}}', 0, 34, 0, 0, 67.00, 0, 0, 0, 'price', '45', 'k', 1, '2018-05-28 07:03:43', '2018-05-28 07:05:27'),
(9, 'Green Owl Mug', 'green-owl-mug', NULL, NULL, NULL, '83e8320eh', '239e83hfdjfh', 9, 20, 1, 7, 1, '{\"1\":{\"priority\":1,\"type\":\"img\",\"name\":\"image-1\",\"value\":\"index1B1527573304.jpg\"},\"2\":{\"priority\":2,\"type\":\"img\",\"name\":\"image-2\",\"value\":\"index21527573306.jpg\"}}', 1, 100, 1, 1, 499.00, 1, 1, 1, NULL, NULL, '453s', 1, '2018-05-29 00:25:07', '2018-05-29 00:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_filter_attributes`
--

CREATE TABLE `product_filter_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `subcategory_filter_id` int(10) UNSIGNED NOT NULL,
  `subcategory_filter_attribute_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_filter_attributes`
--

INSERT INTO `product_filter_attributes` (`id`, `product_id`, `subcategory_filter_id`, `subcategory_filter_attribute_id`, `created_at`, `updated_at`) VALUES
(12, 2, 4, 5, '2018-04-13 00:41:49', '2018-04-13 00:41:49'),
(13, 2, 5, 7, '2018-04-13 00:41:49', '2018-04-13 00:41:49'),
(32, 4, 17, 32, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(33, 4, 17, 33, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(34, 4, 18, 35, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(35, 7, 17, 32, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(36, 7, 17, 34, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(37, 7, 18, 35, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(40, 8, 17, 32, '2018-05-28 07:05:28', '2018-05-28 07:05:28'),
(41, 8, 18, 35, '2018-05-28 07:05:28', '2018-05-28 07:05:28'),
(42, 9, 19, 36, '2018-05-29 00:25:08', '2018-05-29 00:25:08'),
(43, 9, 19, 37, '2018-05-29 00:25:08', '2018-05-29 00:25:08'),
(44, 9, 20, 38, '2018-05-29 00:25:08', '2018-05-29 00:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_occasions`
--

CREATE TABLE `product_occasions` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_occasions`
--

INSERT INTO `product_occasions` (`id`, `product_id`, `occasion_id`, `created_at`, `updated_at`) VALUES
(10, 2, 1, '2018-04-13 00:41:49', '2018-04-13 00:41:49'),
(23, 4, 2, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(24, 4, 3, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(25, 7, 2, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(28, 8, 1, '2018-05-28 07:05:27', '2018-05-28 07:05:27'),
(29, 8, 2, '2018-05-28 07:05:27', '2018-05-28 07:05:27'),
(30, 9, 1, '2018-05-29 00:25:07', '2018-05-29 00:25:07'),
(31, 9, 2, '2018-05-29 00:25:07', '2018-05-29 00:25:07'),
(32, 9, 3, '2018-05-29 00:25:07', '2018-05-29 00:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_relations`
--

CREATE TABLE `product_relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `relation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_relations`
--

INSERT INTO `product_relations` (`id`, `product_id`, `relation_id`, `created_at`, `updated_at`) VALUES
(10, 2, 2, '2018-04-13 00:41:49', '2018-04-13 00:41:49'),
(23, 4, 1, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(24, 4, 3, '2018-05-28 06:45:29', '2018-05-28 06:45:29'),
(25, 7, 2, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(26, 7, 3, '2018-05-28 07:01:04', '2018-05-28 07:01:04'),
(29, 8, 2, '2018-05-28 07:05:28', '2018-05-28 07:05:28'),
(30, 8, 3, '2018-05-28 07:05:28', '2018-05-28 07:05:28'),
(31, 9, 1, '2018-05-29 00:25:07', '2018-05-29 00:25:07'),
(32, 9, 2, '2018-05-29 00:25:07', '2018-05-29 00:25:07'),
(33, 9, 3, '2018-05-29 00:25:07', '2018-05-29 00:25:07'),
(34, 9, 4, '2018-05-29 00:25:08', '2018-05-29 00:25:08'),
(35, 9, 5, '2018-05-29 00:25:08', '2018-05-29 00:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `city_relationship` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `name`, `slug`, `description`, `banner`, `gender_id`, `city_relationship`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Relation-1', 're', 'desc', 'mys1523278695.jpg', 1, 1, 1, '2018-04-09 07:28:15', '2018-04-09 07:28:15'),
(2, 'Relation-2', 'r2', 're slug', 'Beach Fireworks  Pink HD Wallpaper1523278720.jpg', 1, 1, 1, '2018-04-09 07:28:40', '2018-04-09 07:28:40'),
(3, 'Relation-2', 'relation-2', 'description-2', 'Beach Fireworks  Pink HD Wallpaper1523962023.jpg', 1, 0, 1, '2018-04-17 05:17:04', '2018-04-17 05:31:07'),
(4, 're', 'res', 'resdd', 'Beach Fireworks  Pink HD Wallpaper1523962919.jpg', 2, 0, 1, '2018-04-17 05:31:59', '2018-04-17 05:33:11'),
(5, 'adfas', 's', 'dd', 'archieslogo1523963011.png', 1, 1, 0, '2018-04-17 05:33:31', '2018-04-17 05:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', '2018-05-07 18:30:00', NULL),
(2, 'Master Admin', '2018-05-07 18:30:00', NULL),
(3, 'Affiliate', NULL, NULL),
(4, 'SEO', NULL, NULL),
(5, 'Vendor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_admins`
--

CREATE TABLE `role_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `discount_type`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(7, 7, 'Subcategory-2', 'kdkd', NULL, NULL, 1, '2018-04-10 06:27:25', '2018-04-10 06:28:25'),
(8, 7, 'subcat-1', 'subcat-1-slug', NULL, NULL, 1, '2018-04-17 00:34:09', '2018-04-17 03:58:30'),
(9, 7, 'watches', 'watches', NULL, NULL, 1, '2018-05-23 02:13:55', '2018-05-23 02:13:55'),
(10, 7, 'watchesss', 'watchesss', NULL, NULL, 1, '2018-05-23 02:14:41', '2018-05-23 02:14:41'),
(11, 8, 'watchesss', 'watchessxyz', NULL, NULL, 1, '2018-05-23 02:17:23', '2018-05-23 02:17:23'),
(12, 7, 'addd', 'addd', NULL, NULL, 1, '2018-05-23 23:29:28', '2018-05-23 23:29:28'),
(20, 9, 'mugs', 'mugs', NULL, NULL, 1, '2018-05-29 00:07:51', '2018-05-29 00:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_filters`
--

CREATE TABLE `subcategory_filters` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory_filters`
--

INSERT INTO `subcategory_filters` (`id`, `subcategory_id`, `name`, `created_at`, `updated_at`) VALUES
(4, 7, 'filter-2', '2018-04-10 06:28:25', '2018-04-10 06:28:25'),
(5, 7, 'filter-3', '2018-04-10 06:28:25', '2018-04-10 06:28:25'),
(9, 8, 'f1add', '2018-04-17 03:58:30', '2018-04-17 03:58:30'),
(10, 8, 'f22w', '2018-04-17 03:58:30', '2018-04-17 03:58:30'),
(11, 11, 'leather', '2018-05-23 02:17:23', '2018-05-23 02:17:23'),
(19, 20, 'Att1', '2018-05-29 00:07:51', '2018-05-29 00:07:51'),
(20, 20, 'Att2', '2018-05-29 00:07:51', '2018-05-29 00:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_filter_attributes`
--

CREATE TABLE `subcategory_filter_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `subcategory_filter_id` int(10) UNSIGNED NOT NULL,
  `filter_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory_filter_attributes`
--

INSERT INTO `subcategory_filter_attributes` (`id`, `subcategory_filter_id`, `filter_value`, `created_at`, `updated_at`) VALUES
(4, 4, 'attribute-1', '2018-04-10 06:28:25', '2018-04-10 06:28:25'),
(5, 4, 'attribute-2', '2018-04-10 06:28:25', '2018-04-10 06:28:25'),
(7, 5, 'attribute-3', NULL, NULL),
(14, 9, 'a1adfsa', '2018-04-17 03:58:30', '2018-04-17 03:58:30'),
(15, 9, 'a2', '2018-04-17 03:58:30', '2018-04-17 03:58:30'),
(16, 10, 'a21', '2018-04-17 03:58:30', '2018-04-17 03:58:30'),
(17, 10, 'a22', '2018-04-17 03:58:30', '2018-04-17 03:58:30'),
(18, 11, 'steel', '2018-05-23 02:17:23', '2018-05-23 02:17:23'),
(36, 19, 'Black', '2018-05-29 00:07:51', '2018-05-29 00:07:51'),
(37, 19, 'Blue', '2018-05-29 00:07:51', '2018-05-29 00:07:51'),
(38, 20, 'cylinder', '2018-05-29 00:07:51', '2018-05-29 00:07:51'),
(39, 20, 'conical', '2018-05-29 00:07:51', '2018-05-29 00:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abhi', 'user@gmail.com', '$2y$10$XZGeUc2IaxEJ9aY8tnpS5eiKoIRpcaZ41Szhi8qS/xXXAVegXOzdm', 'ifSzSZsIb2siCOa9RRue0yHPSXUlIHffXUxGjRtikjy07xy5ozxi262N56FT', '2018-03-16 11:56:15', '2018-03-16 11:56:15'),
(2, 'Poonam', 'poonam@gmail.com', '$2y$10$UCajxfjiDBB8bbHdlCHh.eKZVwTwg1giZ8GnPT7RbZCJikHaretsG', 'TOQAGId1AMIXPfekwRAYk5BzB5MWhDhp6HNczM2xmuxcancpM7FhMkJjMy9v', '2018-03-16 12:04:01', '2018-03-16 12:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `address`, `phone_number`, `website`, `created_at`, `updated_at`) VALUES
(7, 'Archies', 'archies Address', '+91-11 4949 8888', 'https://www.archiesonline.com', '2018-05-24 23:04:42', '2018-05-24 23:04:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affiliates_name_index` (`name`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`),
  ADD KEY `brands_name_index` (`name`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `careers_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_name_index` (`name`(191)),
  ADD KEY `categories_status_index` (`status`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colors_name_index` (`name`),
  ADD KEY `colors_status_index` (`status`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genders_slug_unique` (`slug`),
  ADD KEY `genders_name_index` (`name`),
  ADD KEY `genders_status_index` (`status`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `occasions_slug_unique` (`slug`),
  ADD KEY `occasions_name_index` (`name`),
  ADD KEY `occasions_status_index` (`status`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_category_id_index` (`category_id`),
  ADD KEY `products_subcategory_id_index` (`subcategory_id`),
  ADD KEY `products_brand_id_index` (`brand_id`),
  ADD KEY `products_vendor_id_index` (`vendor_id`),
  ADD KEY `products_gender_id_index` (`gender_id`),
  ADD KEY `products_inr_price_index` (`inr_price`),
  ADD KEY `products_new_index` (`new`),
  ADD KEY `products_discount_type_index` (`discount_type`),
  ADD KEY `products_discount_index` (`discount`),
  ADD KEY `products_status_index` (`status`);

--
-- Indexes for table `product_filter_attributes`
--
ALTER TABLE `product_filter_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_filter_attributes_product_id_foreign` (`product_id`),
  ADD KEY `product_filter_attributes_filter_id_index` (`subcategory_filter_id`),
  ADD KEY `product_filter_attributes_attribute_id_index` (`subcategory_filter_attribute_id`);

--
-- Indexes for table `product_occasions`
--
ALTER TABLE `product_occasions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_occasions_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_relations`
--
ALTER TABLE `product_relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_relations_product_id_foreign` (`product_id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `relations_slug_unique` (`slug`),
  ADD KEY `relations_name_index` (`name`),
  ADD KEY `relations_city_relationship_index` (`city_relationship`),
  ADD KEY `relations_status_index` (`status`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_admins`
--
ALTER TABLE `role_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`),
  ADD KEY `subcategories_name_index` (`name`),
  ADD KEY `subcategories_status_index` (`status`);

--
-- Indexes for table `subcategory_filters`
--
ALTER TABLE `subcategory_filters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_filters_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `subcategory_filters_name_index` (`name`);

--
-- Indexes for table `subcategory_filter_attributes`
--
ALTER TABLE `subcategory_filter_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_filter_attributes_subcategory_filter_id_foreign` (`subcategory_filter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendors_name_index` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_filter_attributes`
--
ALTER TABLE `product_filter_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_occasions`
--
ALTER TABLE `product_occasions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_relations`
--
ALTER TABLE `product_relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_admins`
--
ALTER TABLE `role_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcategory_filters`
--
ALTER TABLE `subcategory_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcategory_filter_attributes`
--
ALTER TABLE `subcategory_filter_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_filter_attributes`
--
ALTER TABLE `product_filter_attributes`
  ADD CONSTRAINT `product_filter_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_occasions`
--
ALTER TABLE `product_occasions`
  ADD CONSTRAINT `product_occasions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_relations`
--
ALTER TABLE `product_relations`
  ADD CONSTRAINT `product_relations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategory_filters`
--
ALTER TABLE `subcategory_filters`
  ADD CONSTRAINT `subcategory_filters_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategory_filter_attributes`
--
ALTER TABLE `subcategory_filter_attributes`
  ADD CONSTRAINT `subcategory_filter_attributes_subcategory_filter_id_foreign` FOREIGN KEY (`subcategory_filter_id`) REFERENCES `subcategory_filters` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
