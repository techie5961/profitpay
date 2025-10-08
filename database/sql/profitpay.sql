-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2025 at 04:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profitpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `tag`, `email`, `role`, `password`, `name`, `remember_token`, `status`, `updated`, `date`) VALUES
(1, 'master', 'master@gmail.com', 'Master Admin', '$2y$12$5ES5aCYmK3ZNHuHaGyV2eOHAq.S2VV4Z67furbqQ5vJ.61UD3xFQi', 'David James', 'dSF5sBVFGCQ4g3eRe3AQ6PB9qvfmUlBpnaaNaBqEWS9e8QrCWitt6Kwe2dul', 'active', '2025-08-24 06:57:37', '2025-08-24 06:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `topic` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`topic`)),
  `article` text DEFAULT NULL,
  `votes` int(11) NOT NULL DEFAULT 0,
  `winner` varchar(255) NOT NULL DEFAULT 'false',
  `upvotes` int(11) NOT NULL DEFAULT 0,
  `downvotes` int(11) DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `topic`, `article`, `votes`, `winner`, `upvotes`, `downvotes`, `status`, `updated`, `date`) VALUES
(6, 2, '{\"id\":6,\"topic\":\"The poor little girl\",\"winner_id\":null,\"status\":\"active\",\"updated\":\"2025-09-29 13:41:13\",\"date\":\"2025-09-29 13:41:13\"}', 'Welcome to Gboard clipboard, any text you copy will be saved here.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Touch and hold a clip to pin it. Unpinned clips will be deleted after 1 hour.Use the edit icon to pin, add or delete clips.', 1, 'false', 0, 0, 'active', '2025-09-30 11:56:34', '2025-09-30 11:56:34'),
(7, 2, '{\"id\":4,\"topic\":\"Use the edit icon to pin, add or delete clips.\",\"winner_id\":null,\"status\":\"active\",\"updated\":\"2025-09-29 13:40:59\",\"date\":\"2025-09-29 13:40:59\"}', 'Test notification', 1, 'false', 0, 0, 'active', '2025-10-01 09:40:43', '2025-10-01 09:40:43'),
(8, 1, '{\"id\":6,\"topic\":\"The poor little girl\",\"winner_id\":null,\"status\":\"active\",\"updated\":\"2025-09-29 13:41:13\",\"date\":\"2025-09-29 13:41:13\"}', 'Document Upload\r\nAdditional documentation needed to speed up your KYC process.\r\n\r\nBusiness Registration/Incorporation Certificate\r\n\r\nCERTIFICATE - DEV ...\r\nDelete\r\nArticle of Association\r\n\r\nChoose File to Upload (required)\r\nNo file chosen\r\nOperating Business Utility Bill\r\n\r\nChoose File to Upload (required)\r\nNo file chosen\r\nCAC Status Report\r\n\r\nChoose File to Upload (optional)\r\nNo file chosen\r\nAdditional Documents\r\n\r\nChoose File to Upload (0 of 5) (optional)\r\nNo file chosen\r\nMinimum 1, Maximum 5 documents\r\nFile should be in .png .jpg or .pdf format\r\nMax file size is 50mb', 1, 'false', 0, 0, 'active', '2025-10-02 12:58:38', '2025-10-02 12:58:38'),
(11, 8, '{\"id\":6,\"topic\":\"The poor little girl\",\"winner_id\":null,\"status\":\"active\",\"updated\":\"2025-09-29 13:41:13\",\"date\":\"2025-09-29 13:41:13\"}', 'Cf', 0, 'false', 0, 0, 'active', '2025-10-02 13:16:39', '2025-10-02 13:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `article_topics`
--

CREATE TABLE `article_topics` (
  `id` bigint(20) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `winner_id` bigint(20) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_topics`
--

INSERT INTO `article_topics` (`id`, `topic`, `winner_id`, `status`, `updated`, `date`) VALUES
(3, 'The poor little girl', NULL, 'active', '2025-09-29 12:40:35', '2025-09-29 12:40:35'),
(4, 'Use the edit icon to pin, add or delete clips.', NULL, 'active', '2025-09-29 12:40:59', '2025-09-29 12:40:59'),
(5, 'The poor little girl', NULL, 'active', '2025-09-29 12:41:10', '2025-09-29 12:41:10'),
(6, 'The poor little girl', NULL, 'active', '2025-09-29 12:41:13', '2025-09-29 12:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `article_votes`
--

CREATE TABLE `article_votes` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `article_id` bigint(20) DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'success',
  `updated` time NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article_votes`
--

INSERT INTO `article_votes` (`id`, `user_id`, `article_id`, `json`, `status`, `updated`, `date`) VALUES
(23, 2, 7, NULL, 'success', '23:13:10', '2025-10-01 22:13:10'),
(24, 2, 6, NULL, 'success', '23:13:14', '2025-10-01 22:13:14'),
(25, 1, 8, NULL, 'success', '13:59:27', '2025-10-02 12:59:27'),
(26, 8, 10, NULL, 'success', '14:15:04', '2025-10-02 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `package` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`package`)),
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `vendor_id`, `package`, `json`, `status`, `updated`, `date`) VALUES
(1, '7747558592A84BBDD882', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-03 21:29:38', '2025-09-03 21:29:38'),
(2, '0C08F656A395956416DC', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-03 21:36:16', '2025-09-03 21:36:16'),
(3, 'BB986659076BC373D162', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:12:48', '2025-09-04 03:12:48'),
(4, '5F24B972CDF410965168', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:12:52', '2025-09-04 03:12:52'),
(5, '5EB5A58B5EF3DFB84D65', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:01', '2025-09-04 03:13:01'),
(6, '909A5958551D9AEE88DF', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:05', '2025-09-04 03:13:05'),
(7, '2C69EA92BECEAC8FEB50', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:08', '2025-09-04 03:13:08'),
(8, '66D6615E88C4E93E80B6', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:12', '2025-09-04 03:13:12'),
(9, '43114BFA9971D0A66955', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 03:13:15', '2025-09-04 03:13:15'),
(10, '9D8F3780F0A5E417C7E4', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 03:13:18', '2025-09-04 03:13:18'),
(11, 'A77EF3BB2C02D86EB0C1', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 03:13:21', '2025-09-04 03:13:21'),
(12, '5080E8A39F69599555AF', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 03:13:25', '2025-09-04 03:13:25'),
(15, '370DFAE47A096B5BB72C', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 15:59:42', '2025-09-04 15:59:42'),
(16, '9F1EE1F77D615A3881ED', '0', '{\"id\":8,\"name\":\"T\",\"type\":\"paid\",\"cost\":5,\"cashback\":2,\"subordinate\":2,\"first_indirect\":2,\"free_data\":5,\"article_writing\":5,\"earning_per_click\":5,\"tiktok_monitizing\":5,\"casino_game\":5,\"daily_advert\":5,\"status\":\"active\",\"updated\":\"2025-09-16 13:06:15\",\"date\":\"2025-09-16 13:06:15\"}', NULL, 'redeemed', '2025-09-16 12:06:37', '2025-09-16 12:06:37'),
(17, 'E125FAFDEB8C615FDA94', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"type\":\"paid\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 23:07:01\",\"date\":\"2025-08-31 23:07:01\"}', NULL, 'redeemed', '2025-09-16 12:06:49', '2025-09-16 12:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT 'success'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `ip`, `updated`, `date`, `status`) VALUES
(1, 2, '192.168.200.111', '2025-09-28 09:51:25', '2025-09-28 09:51:25', 'success'),
(2, 2, '192.168.200.111', '2025-09-28 09:51:29', '2025-09-28 09:51:29', 'success'),
(3, 2, '192.168.200.111', '2025-09-28 09:51:36', '2025-09-28 09:51:36', 'success'),
(4, 2, '192.168.200.111', '2025-09-28 09:51:39', '2025-09-28 09:51:39', 'success'),
(5, 2, '192.168.200.111', '2025-09-29 09:33:25', '2025-09-29 09:33:25', 'success'),
(6, 2, '192.168.96.117', '2025-10-01 22:25:34', '2025-10-01 22:25:34', 'success'),
(7, 2, '192.168.101.92', '2025-10-02 12:21:58', '2025-10-02 12:21:58', 'success'),
(8, 2, '192.168.220.189', '2025-10-04 10:52:55', '2025-10-04 10:52:55', 'success'),
(9, 2, '192.168.221.196', '2025-10-07 17:53:59', '2025-10-07 17:53:59', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unread',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `status`, `updated`, `date`) VALUES
(1, '<strong class=\"font-1 c-green\">techie_innovations</strong> Just spinned and won', 'read', '2025-09-28 10:05:09', '2025-09-28 10:05:09'),
(2, '<strong class=\"font-1 c-green\">techie_innovations</strong> Just placed a withdrawal request', 'read', '2025-09-28 10:05:42', '2025-09-28 10:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'paid',
  `cost` float DEFAULT NULL,
  `cashback` float DEFAULT NULL,
  `subordinate` float DEFAULT NULL,
  `first_indirect` float DEFAULT NULL,
  `free_data` float DEFAULT NULL,
  `article_writing` float DEFAULT NULL,
  `earning_per_click` float DEFAULT NULL,
  `tiktok_monitizing` float DEFAULT NULL,
  `casino_game` float DEFAULT NULL,
  `daily_advert` float DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `type`, `cost`, `cashback`, `subordinate`, `first_indirect`, `free_data`, `article_writing`, `earning_per_click`, `tiktok_monitizing`, `casino_game`, `daily_advert`, `status`, `updated`, `date`) VALUES
(5, 'Alpha Package', 'paid', 3000, 500, 2500, 1500, 1, 5000, 200, 1000, 5000, 400, 'active', '2025-08-31 22:07:01', '2025-08-31 22:07:01'),
(9, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:17:43', '2025-09-27 22:17:43'),
(10, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:17:48', '2025-09-27 22:17:48'),
(11, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:17:51', '2025-09-27 22:17:51'),
(12, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:17:57', '2025-09-27 22:17:57'),
(13, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:18:02', '2025-09-27 22:18:02'),
(14, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:18:05', '2025-09-27 22:18:05'),
(15, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:18:08', '2025-09-27 22:18:08'),
(16, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:18:11', '2025-09-27 22:18:11'),
(18, 'David James', 'paid', 5000, 500, 5404, 4545, 4545, 45454, 4845, 45454, 4545, 40497, 'active', '2025-09-27 22:18:16', '2025-09-27 22:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8fRzVnOzFelJn63iWkQHTFJ0aVqW3o4pRj18cVRK', NULL, '192.168.221.196', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRGs5VjZXV2dxWlpNY2FWRWRzZHhzeW9yTThJcWdGUk91SGxZcEw5diI7czo1MjoibG9naW5fdXNlcnNfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU2OiJodHRwczovLzE5Mi4xNjguMjIxLjIwNC9wcm9maXRwYXkvcHVibGljL3VzZXJzL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759931637);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `json`, `updated`, `date`) VALUES
(1, 'general_settings', '{\"spin_minimum\":\"500\",\"spin_maximum\":\"1500\",\"whatsapp_group\":\"https:\\/\\/zentrolix-site.int.ng\\/admins\\/login\",\"whatsapp_channel\":\"https:\\/\\/zentrolix-site.int.ng\\/admins\\/login\",\"telegram_group\":\"https:\\/\\/zentrolix-site.int.ng\\/admins\\/login\",\"ad_number\":\"07035074663\"}', '2025-09-23 10:48:23', '2025-09-08 18:00:00'),
(2, 'finance_settings', '{\"wallets\":{\"activities\":{\"minimum\":\"1000\",\"portal\":\"open\"},\"affiliate\":{\"minimum\":\"2500\",\"portal\":\"open\"}},\"vtu\":{\"airtime\":\"open\",\"data\":\"open\"}}', '2025-10-04 18:22:57', '2025-09-19 10:47:33'),
(3, 'clubconnect_api_balance', '{\"balance\":\"19.65\"}', '2025-10-04 20:21:58', '2025-10-04 20:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `reward` float DEFAULT NULL,
  `limit` bigint(20) DEFAULT NULL,
  `completed` bigint(20) NOT NULL DEFAULT 0,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `uniqid`, `category`, `title`, `link`, `reward`, `limit`, `completed`, `json`, `status`, `updated`, `date`) VALUES
(1, 'TSK68BAC07C051B9', 'Whatsapp/Group Join', 'Whatsapp/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 200, 5585, 1, NULL, 'active', '2025-09-05 17:50:36', '2025-09-05 17:50:36'),
(2, 'TSK68BAC098B4879', 'Whatsapp/Group Join', 'Whatsapp/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 200, 5585, 1, NULL, 'active', '2025-09-05 17:51:04', '2025-09-05 17:51:04'),
(4, 'TSK68BAC11C9B929', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 55, 8885, 1, NULL, 'active', '2025-09-05 17:53:16', '2025-09-05 17:53:16'),
(5, 'TSK68BAC1380B3DE', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 255, 55, 55, NULL, 'completed', '2025-09-05 21:41:20', '2025-09-05 17:53:44'),
(6, 'TSK68BD49A1880A7', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:17', '2025-09-07 16:00:17'),
(7, 'TSK68BD49A576269', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:21', '2025-09-07 16:00:21'),
(8, 'TSK68BD49ABDBABA', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:27', '2025-09-07 16:00:27'),
(9, 'TSK68BD49AF53FBB', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:31', '2025-09-07 16:00:31'),
(10, 'TSK68BD49B2CC18C', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 2, NULL, 'active', '2025-09-07 16:00:34', '2025-09-07 16:00:34'),
(11, 'TSK68BD4AD6EACD5', 'Whatsapp/Save Contact', 'Whatsapp/Save Contact', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 2, NULL, 'active', '2025-09-07 16:05:26', '2025-09-07 16:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `task_proofs`
--

CREATE TABLE `task_proofs` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `uniqid` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'success',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_proofs`
--

INSERT INTO `task_proofs` (`id`, `user_id`, `task_id`, `json`, `uniqid`, `status`, `updated`, `date`) VALUES
(1, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4768A9D15', 'success', '2025-09-07 15:50:48', '2025-09-07 15:50:48'),
(2, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4804A4EE9', 'success', '2025-09-07 15:53:24', '2025-09-07 15:53:24'),
(3, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":2,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD480B1DD57', 'success', '2025-09-07 15:53:31', '2025-09-07 15:53:31'),
(4, 2, 4, '{\"id\":4,\"uniqid\":\"TSK68BAC11C9B929\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":55,\"limit\":8885,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:53:16\",\"date\":\"2025-09-05 10:53:16\"}', 'PRF68BD48CA54467', 'success', '2025-09-07 15:56:42', '2025-09-07 15:56:42'),
(5, 2, 2, '{\"id\":2,\"uniqid\":\"TSK68BAC098B4879\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:51:04\",\"date\":\"2025-09-05 10:51:04\"}', 'PRF68BD48CFC5855', 'success', '2025-09-07 15:56:47', '2025-09-07 15:56:47'),
(6, 2, 1, '{\"id\":1,\"uniqid\":\"TSK68BAC07C051B9\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:50:36\",\"date\":\"2025-09-05 10:50:36\"}', 'PRF68BD48D6336FB', 'success', '2025-09-07 15:56:54', '2025-09-07 15:56:54'),
(7, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":3,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4920E4496', 'success', '2025-09-07 15:58:08', '2025-09-07 15:58:08'),
(8, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":4,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4927A399A', 'success', '2025-09-07 15:58:15', '2025-09-07 15:58:15'),
(9, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":54,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD494F06261', 'success', '2025-09-07 15:58:55', '2025-09-07 15:58:55'),
(10, 2, 11, '{\"id\":11,\"uniqid\":\"TSK68BD4AD6EACD5\",\"category\":\"Whatsapp\\/Save Contact\",\"title\":\"Whatsapp\\/Save Contact\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 09:05:26\",\"date\":\"2025-09-07 09:05:26\"}', 'PRF68BEB19910C81', 'success', '2025-09-08 17:36:09', '2025-09-08 17:36:09'),
(11, 1, 11, '{\"id\":11,\"uniqid\":\"TSK68BD4AD6EACD5\",\"category\":\"Whatsapp\\/Save Contact\",\"title\":\"Whatsapp\\/Save Contact\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 17:05:26\",\"date\":\"2025-09-07 17:05:26\"}', 'PRF68C95EE8C24D1', 'success', '2025-09-16 11:58:16', '2025-09-16 11:58:16'),
(12, 1, 10, '{\"id\":10,\"uniqid\":\"TSK68BD49B2CC18C\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 17:00:34\",\"date\":\"2025-09-07 17:00:34\"}', 'PRF68C95EF18CFD3', 'success', '2025-09-16 11:58:25', '2025-09-16 11:58:25'),
(13, 2, 10, '{\"id\":10,\"uniqid\":\"TSK68BD49B2CC18C\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 17:00:34\",\"date\":\"2025-09-07 17:00:34\"}', 'PRF68CFF6EE17A50', 'success', '2025-09-21 12:00:30', '2025-09-21 12:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `gateway` varchar(255) NOT NULL DEFAULT 'automatic',
  `amount` float DEFAULT NULL,
  `svg` text DEFAULT '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M72,104a8,8,0,0,1,8-8h96a8,8,0,0,1,0,16H80A8,8,0,0,1,72,104Zm8,40h96a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16ZM232,56V208a8,8,0,0,1-11.58,7.15L192,200.94l-28.42,14.21a8,8,0,0,1-7.16,0L128,200.94,99.58,215.15a8,8,0,0,1-7.16,0L64,200.94,35.58,215.15A8,8,0,0,1,24,208V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56Zm-16,0H40V195.06l20.42-10.22a8,8,0,0,1,7.16,0L96,199.06l28.42-14.22a8,8,0,0,1,7.16,0L160,199.06l28.42-14.22a8,8,0,0,1,7.16,0L216,195.06Z"></path></svg>',
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'success',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `type`, `class`, `gateway`, `amount`, `svg`, `json`, `status`, `updated`, `date`) VALUES
(1, 2, 'Task Reward', 'credit', 'automatic', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:50:48', '2025-09-07 15:50:48'),
(2, 2, 'Task Reward', 'credit', 'automatic', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:53:24', '2025-09-07 15:53:24'),
(3, 2, 'Task Reward', 'credit', 'automatic', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":2,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:53:31', '2025-09-07 15:53:31'),
(4, 2, 'Task Reward', 'credit', 'automatic', 55, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":4,\"uniqid\":\"TSK68BAC11C9B929\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":55,\"limit\":8885,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:53:16\",\"date\":\"2025-09-05 10:53:16\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:56:42', '2025-09-07 15:56:42'),
(5, 2, 'Task Reward', 'credit', 'automatic', 200, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":2,\"uniqid\":\"TSK68BAC098B4879\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:51:04\",\"date\":\"2025-09-05 10:51:04\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:56:47', '2025-09-07 15:56:47'),
(6, 2, 'Task Reward', 'credit', 'automatic', 200, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":1,\"uniqid\":\"TSK68BAC07C051B9\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:50:36\",\"date\":\"2025-09-05 10:50:36\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:56:54', '2025-09-07 15:56:54'),
(7, 2, 'Task Reward', 'credit', 'automatic', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":3,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:58:08', '2025-09-07 15:58:08'),
(8, 2, 'Task Reward', 'credit', 'automatic', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":4,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:58:15', '2025-09-07 15:58:15'),
(9, 2, 'Task Reward', 'credit', 'automatic', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":54,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:58:55', '2025-09-07 15:58:55'),
(10, 2, 'Task Reward', 'credit', 'automatic', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":11,\"uniqid\":\"TSK68BD4AD6EACD5\",\"category\":\"Whatsapp\\/Save Contact\",\"title\":\"Whatsapp\\/Save Contact\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 09:05:26\",\"date\":\"2025-09-07 09:05:26\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 17:36:09', '2025-09-08 17:36:09'),
(11, 2, 'Spin Reward', 'credit', 'automatic', 1220, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1220,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:46:03', '2025-09-08 18:46:03'),
(12, 2, 'Spin Reward', 'credit', 'automatic', 746, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":746,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:46:56', '2025-09-08 18:46:56'),
(13, 2, 'Spin Reward', 'credit', 'automatic', 1106, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1106,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:46:59', '2025-09-08 18:46:59'),
(14, 2, 'Spin Reward', 'credit', 'automatic', 1234, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1234,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:01', '2025-09-08 18:47:01'),
(15, 2, 'Spin Reward', 'credit', 'automatic', 908, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":908,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:03', '2025-09-08 18:47:03'),
(16, 2, 'Spin Reward', 'credit', 'automatic', 512, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":512,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:05', '2025-09-08 18:47:05'),
(17, 2, 'Spin Reward', 'credit', 'automatic', 900, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":900,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:08', '2025-09-08 18:47:08'),
(18, 2, 'Spin Reward', 'credit', 'automatic', 565, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":565,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:21', '2025-09-08 18:47:21'),
(19, 2, 'Spin Reward', 'credit', 'automatic', 1012, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1012,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:26', '2025-09-08 18:47:26'),
(20, 2, 'Spin Reward', 'credit', 'automatic', 692, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":692,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:31', '2025-09-08 18:47:31'),
(21, 2, 'Spin Reward', 'credit', 'automatic', 880, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":880,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:47', '2025-09-08 18:47:47'),
(22, 2, 'Spin Reward', 'credit', 'automatic', 668, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":668,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:48:46', '2025-09-08 18:48:46'),
(23, 2, 'Spin Reward', 'credit', 'automatic', 893, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":893,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:22', '2025-09-08 18:49:22'),
(24, 2, 'Spin Reward', 'credit', 'automatic', 636, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":636,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:27', '2025-09-08 18:49:27'),
(25, 2, 'Spin Reward', 'credit', 'automatic', 789, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":789,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:29', '2025-09-08 18:49:29'),
(26, 2, 'Spin Reward', 'credit', 'automatic', 889, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":889,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:41', '2025-09-08 18:49:41'),
(27, 2, 'Spin Reward', 'credit', 'automatic', 1273, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1273,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-09 16:05:35', '2025-09-09 16:05:35'),
(28, 2, 'Spin Reward', 'credit', 'automatic', 1087, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1087,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-10 15:31:36', '2025-09-10 15:31:36'),
(29, 1, 'Spin Reward', 'credit', 'automatic', 1238, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1238,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-16 11:57:59', '2025-09-16 11:57:59'),
(30, 1, 'Task Reward', 'credit', 'automatic', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":11,\"uniqid\":\"TSK68BD4AD6EACD5\",\"category\":\"Whatsapp\\/Save Contact\",\"title\":\"Whatsapp\\/Save Contact\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 17:05:26\",\"date\":\"2025-09-07 17:05:26\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-16 11:58:16', '2025-09-16 11:58:16'),
(31, 1, 'Task Reward', 'credit', 'automatic', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":10,\"uniqid\":\"TSK68BD49B2CC18C\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 17:00:34\",\"date\":\"2025-09-07 17:00:34\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-16 11:58:25', '2025-09-16 11:58:25'),
(32, 2, 'Activities Withdrawal', 'debit', 'automatic', 5002, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'success', '2025-09-19 13:20:00', '2025-09-19 13:20:00'),
(33, 2, 'Activities Withdrawal', 'debit', 'automatic', 1000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'rejected', '2025-09-19 13:20:19', '2025-09-19 13:20:19'),
(34, 2, 'Activities Withdrawal', 'debit', 'automatic', 1000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'success', '2025-09-19 13:20:37', '2025-09-19 13:20:37'),
(35, 2, 'Activities Withdrawal', 'debit', 'automatic', 1000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'rejected', '2025-09-19 13:22:23', '2025-09-19 13:22:23'),
(36, 2, 'Activities Withdrawal', 'debit', 'automatic', 5000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'success', '2025-09-19 13:22:46', '2025-09-19 13:22:46'),
(42, 2, 'Activities Withdrawal', 'debit', 'manual', 1000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'success', '2025-09-20 10:12:34', '2025-09-20 10:12:34'),
(43, 2, 'Activities Withdrawal', 'debit', 'manual', 1000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'rejected', '2025-09-20 10:14:55', '2025-09-20 10:14:55'),
(44, 2, 'Activities Withdrawal', 'debit', 'manual', 5000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'rejected', '2025-09-20 10:15:20', '2025-09-20 10:15:20'),
(45, 2, 'Activities Withdrawal', 'debit', 'manual', 5000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'success', '2025-09-20 10:15:47', '2025-09-20 10:15:47'),
(46, 2, 'Direct Commission', 'credit', 'automatic', 2500, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z\"></path></svg>', '{\"data\":{\"type\":\"referral_commission\",\"level\":\"direct\",\"user_id\":3},\"wallet\":\"affiliate_balance\"}', 'success', '2025-09-21 09:31:10', '2025-09-21 09:31:10'),
(47, 3, 'Direct Commission', 'credit', 'automatic', 2500, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z\"></path></svg>', '{\"data\":{\"type\":\"referral_commission\",\"level\":\"direct\",\"user_id\":4},\"wallet\":\"affiliate_balance\"}', 'success', '2025-09-21 09:33:17', '2025-09-21 09:33:17'),
(48, 3, 'Direct Commission', 'credit', 'automatic', 2500, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z\"></path></svg>', '{\"data\":{\"type\":\"referral_commission\",\"level\":\"direct\",\"user_id\":5},\"wallet\":\"affiliate_balance\"}', 'success', '2025-09-21 09:34:55', '2025-09-21 09:34:55'),
(49, 3, 'Direct Commission', 'credit', 'automatic', 2500, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z\"></path></svg>', '{\"data\":{\"type\":\"referral_commission\",\"level\":\"direct\",\"user_id\":6},\"wallet\":\"affiliate_balance\"}', 'success', '2025-09-21 09:35:58', '2025-09-21 09:35:58'),
(50, 3, 'Direct Commission', 'credit', 'automatic', 2500, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z\"></path></svg>', '{\"data\":{\"type\":\"referral_commission\",\"level\":\"direct\",\"user_id\":7},\"wallet\":\"affiliate_balance\"}', 'success', '2025-09-21 09:38:07', '2025-09-21 09:38:07'),
(51, 2, 'First Indirect Commission', 'credit', 'automatic', 1500, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z\"></path></svg>', '{\"data\":{\"type\":\"referral_commission\",\"level\":\"first_indirect\",\"user_id\":7},\"wallet\":\"affiliate_balance\"}', 'success', '2025-09-21 09:38:07', '2025-09-21 09:38:07'),
(52, 2, 'Task Reward', 'credit', 'automatic', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":10,\"uniqid\":\"TSK68BD49B2CC18C\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 17:00:34\",\"date\":\"2025-09-07 17:00:34\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-21 12:00:30', '2025-09-21 12:00:30'),
(53, 7, 'Spin Reward', 'credit', 'automatic', 1249, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1249,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-23 11:24:25', '2025-09-23 11:24:25'),
(54, 2, 'Spin Reward', 'credit', 'automatic', 1089, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1089,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-28 10:05:09', '2025-09-28 10:05:09'),
(55, 2, 'Activities Withdrawal', 'debit', 'manual', 1000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z\"></path></svg>', '{\"data\":{\"bank\":{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}},\"wallet\":\"activities_balance\"}', 'pending', '2025-09-28 10:05:42', '2025-09-28 10:05:42'),
(56, 2, 'Airtime Topup', 'debit', 'automatic', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z\"></path></svg>', '{\"data\":\"{\\\"orderid\\\":\\\"6696744236\\\",\\\"statuscode\\\":\\\"100\\\",\\\"status\\\":\\\"ORDER_RECEIVED\\\",\\\"productname\\\":\\\"50 Credit\\\",\\\"amount\\\":\\\"48.1500015258789\\\",\\\"mobilenetwork\\\":\\\"AirTel\\\",\\\"mobilenumber\\\":\\\"09013350351\\\",\\\"walletbalance\\\":\\\"19.901985168457\\\"}\",\"wallet\":\"activities_wallet\"}', 'success', '2025-10-04 11:48:52', '2025-10-04 11:48:52'),
(57, 2, 'Airtime Topup', 'debit', 'automatic', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\"}', 'success', '2025-10-04 11:50:58', '2025-10-04 11:50:58');
INSERT INTO `transactions` (`id`, `user_id`, `type`, `class`, `gateway`, `amount`, `svg`, `json`, `status`, `updated`, `date`) VALUES
(58, 2, 'Airtime Topup', 'debit', 'automatic', 2000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\"}', 'success', '2025-10-04 11:51:57', '2025-10-04 11:51:57'),
(59, 2, 'Airtime Topup', 'debit', 'automatic', 2000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\"}', 'success', '2025-10-04 11:52:48', '2025-10-04 11:52:48'),
(60, 2, 'Airtime Topup', 'debit', 'automatic', 2000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\",\"body\":{\"number\":\"09013350351\",\"network\":\"MTN\",\"amount\":\"2000\"}}', 'success', '2025-10-04 19:38:39', '2025-10-04 19:38:39'),
(61, 2, 'Airtime Topup', 'debit', 'automatic', 2000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\",\"body\":{\"number\":\"09013350351\",\"network\":\"Airtel\",\"amount\":\"2000\"}}', 'success', '2025-10-04 19:39:00', '2025-10-04 19:39:00'),
(62, 2, 'Data Bundle', 'debit', 'automatic', 2000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M135.16,84.42a8,8,0,0,0-14.32,0l-72,144a8,8,0,0,0,14.31,7.16L77,208h102.1l13.79,27.58A8,8,0,0,0,200,240a8,8,0,0,0,7.15-11.58ZM128,105.89,155.06,160H100.94ZM85,192l8-16h70.1l8,16Zm74.54-98.26a32,32,0,1,0-63,0,8,8,0,1,1-15.74,2.85,48,48,0,1,1,94.46,0,8,8,0,0,1-7.86,6.58,8.74,8.74,0,0,1-1.43-.13A8,8,0,0,1,159.49,93.74ZM64.15,136.21a80,80,0,1,1,127.7,0,8,8,0,0,1-12.76-9.65,64,64,0,1,0-102.18,0,8,8,0,0,1-12.76,9.65Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\",\"body\":{\"number\":\"09013350351\",\"network\":\"Airtel\",\"amount\":\"2000\"}}', 'success', '2025-10-04 20:27:28', '2025-10-04 20:27:28'),
(63, 2, 'Data Bundle', 'debit', 'automatic', 3000, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M135.16,84.42a8,8,0,0,0-14.32,0l-72,144a8,8,0,0,0,14.31,7.16L77,208h102.1l13.79,27.58A8,8,0,0,0,200,240a8,8,0,0,0,7.15-11.58ZM128,105.89,155.06,160H100.94ZM85,192l8-16h70.1l8,16Zm74.54-98.26a32,32,0,1,0-63,0,8,8,0,1,1-15.74,2.85,48,48,0,1,1,94.46,0,8,8,0,0,1-7.86,6.58,8.74,8.74,0,0,1-1.43-.13A8,8,0,0,1,159.49,93.74ZM64.15,136.21a80,80,0,1,1,127.7,0,8,8,0,0,1-12.76-9.65,64,64,0,1,0-102.18,0,8,8,0,0,1-12.76,9.65Z\"></path></svg>', '{\"data\":\"{\\\"status\\\":\\\"ORDER_RECEIVED\\\"}\",\"wallet\":\"activities_wallet\",\"body\":{\"number\":\"09013350351\",\"network\":\"Airtel\",\"amount\":\"3000\"}}', 'success', '2025-10-04 20:27:54', '2025-10-04 20:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `package` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`package`)),
  `coupon` varchar(255) DEFAULT NULL,
  `deposit_balance` float DEFAULT 0,
  `activities_balance` float DEFAULT 0,
  `affiliate_balance` float NOT NULL DEFAULT 0,
  `bank` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`bank`)),
  `ref` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` text NOT NULL DEFAULT 'avatar.svg',
  `type` varchar(255) DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uniqid`, `name`, `email`, `username`, `phone`, `package`, `coupon`, `deposit_balance`, `activities_balance`, `affiliate_balance`, `bank`, `ref`, `email_verified_at`, `password`, `photo`, `type`, `remember_token`, `status`, `created_at`, `updated_at`, `json`, `updated`, `date`) VALUES
(1, 'USR68B9A5424F8BB', 'David James', 'abakpadavid05@gmail.com', 'Blaady05', 9013350351, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', '370DFAE47A096B5BB72C', 0, 1838, 0, '{\"account_number\":\"8118768360\",\"bank_name\":\"OPay Digital Services Limited (OPay)\",\"account_name\":\"David James\"}', NULL, NULL, '$2y$12$kkeWYHnVjPd9OIBPcJdL..yfbAjdt83X77L0Pge.mymx7cFw.Zsj2', 'avatar.svg', 'user', '2TamLHtAd7cek5c26GUHhxnZVXNLqNQKboITDnG46WiNT0Y5wRXIAJam7Kiq', 'active', NULL, NULL, NULL, '2025-09-16 11:58:25', '2025-09-04 21:42:10'),
(2, 'USR68B9A5E137162', 'David James', 'techie5961@gmail.com', 'techie_innovations', 9013350351, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', '5080E8A39F69599555AF', 10000, 488582, 5000, '{\"account_number\":\"5005016577\",\"bank_name\":\"Access Bank (Diamond)\",\"account_name\":\"David James\"}', NULL, NULL, '$2y$12$bgIwXIIsxLbae8yg6XNl3.yMRRjwHxeSf4R980vFK8W5Oh9DxGudq', 'avatar.svg', 'user', 'csFUuWDmx1GXmDA1OD6YbmgbaEsPrXhhtAX8mZ6tmSCtcCArMdO10FDz7r3M', 'active', NULL, NULL, NULL, '2025-09-28 10:05:09', '2025-09-04 21:44:49'),
(3, 'USR68CFD3EE2B7DD', 'David Abakpa', 'ocheemmanuel@gmail.com', 'abakpa', 7035864553, '{\"id\":5,\"name\":\"Alpha Package\",\"type\":\"paid\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 23:07:01\",\"date\":\"2025-08-31 23:07:01\"}', 'E125FAFDEB8C615FDA94', 500, 1000, 10500, NULL, 'techie_innovations', NULL, '$2y$12$AwI3olBYnb1fv4A/72d5OOAn464RNrRzecGqkwoOCDxe4w5E6WbPm', 'avatar.svg', 'vendor', 'nIeWjayr5OIgnQFxXKK8Dk4xhfkuquslbqwYhcVKZ2gug66Fyu7DqPYOEox4', 'banned', NULL, NULL, NULL, '2025-09-21 09:31:10', '2025-09-21 09:31:10'),
(4, 'USR68CFD46CE1A9D', 'Daniel James', 'daniel@gmail.com', 'james', 84653181663, '{\"id\":8,\"name\":\"T\",\"type\":\"paid\",\"cost\":5,\"cashback\":2,\"subordinate\":2,\"first_indirect\":2,\"free_data\":5,\"article_writing\":5,\"earning_per_click\":5,\"tiktok_monitizing\":5,\"casino_game\":5,\"daily_advert\":5,\"status\":\"active\",\"updated\":\"2025-09-16 13:06:15\",\"date\":\"2025-09-16 13:06:15\"}', '9F1EE1F77D615A3881ED', 0, 2, 0, NULL, 'abakpa', NULL, '$2y$12$kyw7nRTMXZnjZPIk8nssGuV6HQjWsrcz84Yy8Fab6g2m2.GXP2XtW', 'avatar.svg', 'vendor', NULL, 'active', NULL, NULL, NULL, '2025-09-21 09:33:17', '2025-09-21 09:33:17'),
(5, 'USR68CFD4CF1551D', 'Jonathan De', 'jonathan@gmail.com', 'jonathan', 70156868963, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', 'A77EF3BB2C02D86EB0C1', 0, 500, 0, NULL, 'abakpa', NULL, '$2y$12$d1BwwVHRbNDGRo4Xtf40G.bOawSxixr45Rr2.BUhJlqLdto7CtElW', 'avatar.svg', 'user', NULL, 'active', NULL, NULL, NULL, '2025-09-21 09:34:55', '2025-09-21 09:34:55'),
(6, 'USR68CFD50DD9E40', 'Emmanuel Hudson', 'hudson@gmail.com', 'hudson', 8053846274, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', '9D8F3780F0A5E417C7E4', 0, 500, 0, NULL, 'abakpa', NULL, '$2y$12$MBhBwqU5/KNWqT0pv1dIcuryZEc1XbwcTYgRu7xoYzQfEPf10mxjm', 'avatar.svg', 'user', NULL, 'active', NULL, NULL, NULL, '2025-09-21 09:35:58', '2025-09-21 09:35:58'),
(7, 'USR68CFD58F0428B', 'Hojlund Rasmussen', 'hojlund@gmail.com', 'hojlund', 901338496, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', '43114BFA9971D0A66955', 0, 1749, 0, '{\"account_number\":\"5005016577\",\"bank_name\":\"Standard Chartered Bank\",\"account_name\":\"DAVID JAMES ABAKPA\"}', 'abakpa', NULL, '$2y$12$tFLgRZMhCPnQcDz83FWwM.muqtawm579BGh.L75x5XiA52lGs7u2q', 'avatar.svg', 'user', NULL, 'active', NULL, NULL, NULL, '2025-09-23 11:24:25', '2025-09-21 09:38:07'),
(8, 'USR68D493F4A5153', 'David Abakpa', 'emmanueloche@gmail.com', 'emmydoo', 9013350351, '{\"id\":8,\"name\":\"T\",\"type\":\"paid\",\"cost\":5,\"cashback\":2,\"subordinate\":2,\"first_indirect\":2,\"free_data\":5,\"article_writing\":5,\"earning_per_click\":5,\"tiktok_monitizing\":5,\"casino_game\":5,\"daily_advert\":5,\"status\":\"active\",\"updated\":\"2025-09-16 13:06:15\",\"date\":\"2025-09-16 13:06:15\"}', 'null', 0, 2, 0, NULL, NULL, NULL, '$2y$12$p.yrydRTXabmgMFHL.nVU.IXWPtDrgpJWCcfSaLv/zYe88U70qKEy', 'avatar.svg', 'user', 'WauX3vQoh37o1J7RM5bQ4uNwcd0HOKwiQe9he5WZhwrxtahjONnIaSTqM8cY', 'active', NULL, NULL, NULL, '2025-09-24 23:59:33', '2025-09-24 23:59:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_topics`
--
ALTER TABLE `article_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_votes`
--
ALTER TABLE `article_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_proofs`
--
ALTER TABLE `task_proofs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `article_topics`
--
ALTER TABLE `article_topics`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `article_votes`
--
ALTER TABLE `article_votes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `task_proofs`
--
ALTER TABLE `task_proofs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
