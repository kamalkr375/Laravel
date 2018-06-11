-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 07:46 AM
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
-- Database: `laraveltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `job_title`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abhi', 'admin@gmail.com', '$2y$10$I03QhNt8841jOS4Vf4Ckm.SKC9erbUPEqPEqlo.S6xGT0IQtX/p0a', 'Developer', 'ZadBHtHBxoONTl4PD8EistQ2mrbgJqdGUqjS7lMS4YavYTcZSvdC1J79zPWf', '2018-03-17 17:05:10', '2018-03-17 17:05:10');

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
(7, 'vz', 'asdf', 'adsfa', 'sadf', 'download_banner-1522331075.jpg', '2018-03-29 08:14:35', '2018-03-29 08:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `large_banner_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_banner_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_banner_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bgcolor_id` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `large_banner_1`, `large_banner_2`, `large_banner_3`, `small_banner`, `icon`, `bgcolor_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 'sadf', 'adf', 'asdf', 'mys1522331187.jpg', NULL, NULL, NULL, NULL, 2, 0, '2018-03-29 08:16:27', '2018-03-29 08:16:27'),
(7, '12', 'adfadfdfs', 'asdf', 'mys1522331192.jpg', NULL, NULL, NULL, NULL, 2, 0, '2018-03-29 08:16:32', '2018-03-29 08:16:44'),
(8, 'sadf', 'adfadfdfsaa', 'asdf', 'mys1522331197.jpg', NULL, NULL, NULL, NULL, 2, 0, '2018-03-29 08:16:37', '2018-03-29 08:16:37');

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
(11, '2018_03_30_060920_create_subcategory_filter_attributes', 6);

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
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `large_banner_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_banner_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_banner_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `description`, `large_banner_1`, `large_banner_2`, `large_banner_3`, `status`, `created_at`, `updated_at`) VALUES
(2, 6, 'aadfa', 'a', 'a', NULL, NULL, NULL, 1, '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(3, 7, 'Testing', 'am', 'akdk', 'download_banner1522671576.jpg', 'downo21522671576.jpg', 'images1522671576.jpg', 0, '2018-04-02 06:49:36', '2018-04-02 06:49:36');

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
(2, 2, 'f1', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(3, 2, 'f2', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(4, 2, 'f3', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(5, 3, 'f1', '2018-04-02 06:49:36', '2018-04-02 06:49:36');

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
(1, 2, 'fa1', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(2, 2, 'fa2', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(3, 3, 'f2a', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(4, 3, 'f2b', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(5, 4, 'a3', '2018-04-02 00:08:21', '2018-04-02 00:08:21'),
(6, 5, 'a1', '2018-04-02 06:49:36', '2018-04-02 06:49:36'),
(7, 5, 'f2', '2018-04-02 06:49:36', '2018-04-02 06:49:36'),
(8, 5, 'a2', '2018-04-02 06:49:36', '2018-04-02 06:49:36');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`),
  ADD KEY `brands_name_index` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_name_index` (`name`(191)),
  ADD KEY `categories_status_index` (`status`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory_filters`
--
ALTER TABLE `subcategory_filters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategory_filter_attributes`
--
ALTER TABLE `subcategory_filter_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
