-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 06:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingh`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `title`, `excerpt`, `image`, `price`, `location`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Paris Saint-germain', 'Paris Saint-germain 2020-21 Purple Mbappe Jersey Model psgmbappe', '7gFfIrNbN0.jpg', '15750', 'turkey', 'pelemall', '2022-03-16 20:13:12', '2022-03-16 20:13:12'),
(2, 'shopping shop', 'MAN KNITTING T-SHIRT MUSTARD', 'B8PO3BVBmJ.jpg', '9750', 'iraq', 'shopping shop', '2022-03-16 20:15:20', '2022-03-16 20:15:20'),
(3, 'SAPPHIRE', 'Taba Men\'s Boots SAPHIR', 'tX3EoZ6RU6.jpg', '23500', 'iraq', 'SAPPHIRE', '2022-03-16 20:16:25', '2022-03-16 20:16:25'),
(4, 'koton', 'Men\'s Black Leather Looking Belt 9KAM40220AA', 'VMk88UJeTq.jpg', '5000', 'iraq', 'koton', '2022-03-16 20:17:12', '2022-03-16 20:17:12'),
(5, 'puma', 'Unisex Sport Shoes - Turin II - 36696204', 'HxEwE5WCUQ.jpg', '61250', 'iraq', 'puma', '2022-03-16 20:18:06', '2022-03-16 20:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ayman othman', 'aymanOthman20@gmail.com', 'Hi Hoshmand This is succesfully', '2022-03-16 18:34:06', '2022-03-16 18:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `title`, `excerpt`, `image`, `price`, `location`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'apple', 'iPad Air (4rd generation)10.9-inch Wifi 64GB Apple Official warranty', 'WlmoDYST9C.jpg', '1410021', 'iraq', 'apple', '2022-03-16 20:22:11', '2022-03-16 20:22:11'),
(2, 'apple', 'IPAD MINI - 7.9 5TH GENERATION, WI-FI + CELLULAR, APPLE, WITH OFFICIAL WARRANTY - SMART BUY', 'HuI8xxBvqp.jpg', '788250', 'iraq', 'apple', '2022-03-16 20:23:17', '2022-03-16 20:23:17'),
(3, 'apple', ' APPLE iPHONE 12 PRO MAX eSIM-256GB APPLE OFFICIAL WARRANTY - SMARTBUY', 'JvAqYkLwsW.jpg', '2950250', 'iraq', 'apple', '2022-03-16 20:24:26', '2022-03-16 20:24:26'),
(4, 'apple', 'IPHONE 11 ESIM 128 GB APPLE WITH OFFICIAL WARRANTY - SMART BUY', 'm125X4WgfO.jpg', '1100500', 'iraq', 'apple', '2022-03-16 20:25:28', '2022-03-16 20:25:28'),
(5, 'apple', 'iPhone 8 Plus 128 GB Apple Official Warranty - SmartBuy', 'pOz4trfNjJ.jpg', '847750', 'iraq', 'apple', '2022-03-16 20:26:23', '2022-03-16 20:26:23');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_03_16_205059_create_contacts_table', 1),
(4, '2022_03_16_221212_create_clothes_table', 2),
(5, '2022_03_16_221234_create_electronics_table', 2),
(6, '2022_03_17_165541_create_sales_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `title`, `excerpt`, `price`, `quantity`, `location`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'koton', 'Men\'s Black Leather Looking Belt 9KAM40220AA', '5000', 4, 'iraq', 'koton', '2022-03-17 14:07:10', '2022-03-17 14:07:10'),
(2, 'apple', 'iPad Air (4rd generation)10.9-inch Wifi 64GB Apple Official warranty', '1410021', 1, 'iraq', 'apple', '2022-03-17 14:10:09', '2022-03-17 14:10:09'),
(3, 'apple', 'iPhone 8 Plus 128 GB Apple Official Warranty - SmartBuy', '847750', 5, 'iraq', 'apple', '2022-03-17 14:21:05', '2022-03-17 14:21:05'),
(4, 'shopping shop', 'MAN KNITTING T-SHIRT MUSTARD', '9750', 4, 'iraq', 'shopping shop', '2022-03-17 17:51:37', '2022-03-17 17:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'assets/img/user.svg',
  `rules` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `email`, `password`, `show_password`, `avatars`, `rules`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hoshmand kamal', '_hoshmand_', NULL, 'hoshmandG900@gmail.com', '$2y$10$K9ESbPLsJ.TbxjabIBKl0u0Q95QAqaY8ehrx9rafletPEOCcGqJrq', 'hoshmand12', 'YMv0G4ATEy.jpg', 0, NULL, '2022-03-16 18:09:32', '2022-03-17 12:31:27'),
(2, 'sabs Ali', 'sabs_20', NULL, 'sabsAli20@gmail.com', '$2y$10$WCQWak7QJgkPnjEtbubY7.aforY29yGPZK4MkPuFXW2LT316gbPUu', 'sabs@#$12', 'PhOprR1CnZ.jpg', 1, NULL, '2022-03-16 18:10:21', '2022-03-17 17:50:00'),
(3, 'Fazila Muhamad', 'Fazila', NULL, 'fazo@gmail.com', '$2y$10$uoEClDj6qrDihoX2Q6.nMui2WQv4axoH4WzlYxJ7yNFvQjV5gmd32', 'fazo1234', '5dHJG2eevO.jpg', 0, NULL, '2022-03-17 17:43:18', '2022-03-17 17:51:14'),
(4, 'lanya kamal', 'lani_20', NULL, 'lani20@gmail.com', '$2y$10$dIzKc6DTqNoywyzy8Vl5TuLNstwJhAq/Mo1nXDtWJtTRdcGp21/kC', 'washman99', 'PSd3fO5jBW.jpg', 0, NULL, '2022-03-17 17:46:28', '2022-03-17 17:46:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
