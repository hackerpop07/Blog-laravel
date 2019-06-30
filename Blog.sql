-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2019 at 03:36 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `contents`, `image`, `created_at`, `updated_at`) VALUES
(1, 'j5waIB8H2J', 'Eyk70vqskL', 'XyJi6yy N3cPQki AqjqkPx 4WN0Rs8 Gtt0hPP hUV0lBz wGQ8Jaz 4POx2IN hnIt0SA XE1W5F5 ab6poo4 Kz7aJIc Te8ENwv A6BVYsi z8XvpGC jeJPmsb kOdtQY3 3H4Vkgm dMo45lH TG1N2eA QE8sUQE SSbIFgB MvJ8THT HdXdNiy NuM5pyx L6II0C2 UIVedbc f0yHISg DKmpfCv qK035oh ', 'KyGCr01KVy', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(2, '3vVsGRO6ll', '1fZcfxsnBN', 'mRCoiHs t8oGy94 qQWh0uV uFe3OXx vCnqjpD EHIOlXV dRvdWZR 0yL5DNv 54BFF4v 5otozE3 IHdGJRc 7rID3gx 9yvbA9P mjRA8De mIWdZAQ qFCGrrk Bdssf6S qv570YD s7OA6gt 2uUgeWi 5J7eEJX VW5rXPd VIlWEkd Mfu3ehn 6jA3MpI EUTN64I Ibp5Tdr 3xGunqD gB8L58y a0YY6ov ', 'kvuyJgWVsy', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(3, 'kmLwU52Bj9', '80Xpo6ZQIv', 'KCAM34S UIzgYEa bziobWh XNenMFH pKkThhi pxXpabf 6uUMFjD uWn4J9p GtPuHEm D8BzsKZ WuCVAMY wZ3j95m 3YliN6A UqqyUWb fBzIvrI tOLUu1J bIel50o p8XTagM LrDSzLH FfjOua4 3Ns5T1g 4eu8nQb RIXXs7I 3EzDXW7 921asoU prSOlrR JsfI0o5 YPkFCCL EOCpZiA h24NeRL ', 'mUFine4tZE', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(4, 'JkKWuMwogb', '6SgwHIwAME', 'vaDojKJ 227htVF QSwwDI0 tAe24TY t2OKu6Q BSi9LzV zPEmmip eAIvqly vlIZ3zN mmmPm8g IzKyiqQ 85wzRE4 DHT5nk4 SLSB2Jl NRXwFPt IzNENMK Cp8NHVW NpjywuZ iecS9rv LG45QIY z2Ek8zL Bktgzg2 KuC4cl2 EDQArCA 3aQs09x uDwj1qu SwjmXHF JONd06s Wd1z9fQ Syv43dx ', 'K0aE7NdiBx', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(5, 'F7L1s5VI7H', 'jannT78D0g', '19Kf8FW SRIWiZy RvEr839 jiHGPYj EGQIbBn 5UKr1bG NXCAMZF sWC8WA6 P9x7zzq BgK8aRm t7S5Jup C0UWXnx 3hRLoqE YHtGIiS AwhK1TE LeolH64 lhkLOV2 L5OaAo5 ix2NdAd 8JoE1ZM o5NWYRc pfpjDSS wLYpFUn x0BgV3I l63Wprq YVHooU4 d4snVzl UpK7UKf UhWo5xf g3adrna ', 'Lx79eKljXp', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(6, 'hfjLus0NwI', 'RdAAVYUE8t', 'lVmD1MM xxcZVuf G511aZR xyYWalP 34ixNFc E0WTAuT x8mCEHc MGAIqfr ho8pSWk urUE2xu TivDqh5 qdI5rUQ aAVjaAn C9x2kVv H4tdK03 9WqBnz7 sFovQys lB74sPi tXggOrx x1vxJaq 5VNqXe3 yqpe0Mk GRs0yE3 jR4EMMo iqa06s4 HDddclf BK2gG6M CUbHous gToruyL OiGzoTJ ', 'ctSIFLdYyB', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(7, 'eOH7YlDBuO', 'Rpxq1N8J77', 'l7Ni7fN vJZQTAY JE8K1bO JeGHKHm GWA39I3 8cmRvj6 6Mps0VN GQZr0vq kJbgnGs oZtpqwo VSD8uAb 9gmTe2p TnZlTUf 63bA8b2 ZzB6ycv CLMKYdh e05dpIF swLPJ2p UZEhQDH 3s4DrgC Oz909KK iU2jtpd R9xq9UV OU4AwPL bki5wBg EvozoH5 VFYC6U9 9GzZJNw VGqWY4M jZqqtb8 ', '8QEyM3WnQf', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(8, 'PNltaUJP8s', 'UeK6rh2G4i', 'wibUwMm aoH9yKL ubUvwXI 0ZD2Shb lDoNFox ATRJapY jLLsxL3 m6D3RDi ctmzRWu Ch2i8Mj lMs4qoW R70SxiY 0juoPNL 4KU1sI7 guyh4n7 GFmmhDp cQJpZsP guJQVeF vDzHnAC EPRzWQH vsSmobB fk1NDuc vTwIWZ9 qRD0x2d BXvsnIm q9F5iyy 9eDXQKB pEeUHNZ uHgOao9 yZeSXB7 ', 'Yg80Qb4WDi', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(9, 'FN6z9MmzZA', 'u0zjsuWRE2', 'JyRorJE DZbMpRT bLvb7Ke JjNd64N vUCz88R d7iMfYE 7dw5JQe udFpno0 lf0A3aN mKMbVnf fL6unlF Spqn9BI CfCtRnH FwJUFhI 3Mg8lWX zL34XH9 K40V2ou zzq38CC xubPVdQ Z5BfLJa Jbiivf9 cSmu3yO 4Zd6hy5 iAXwzMG ajV9jIy AENEYrv W12yUUv X7wMxQF rTIc41F qnZF5pO ', 'kdkwEVkxgr', '2019-06-30 00:47:33', '2019-06-30 00:47:33'),
(10, 'ZVCnW6aOFF', 'bqLesBnSBu', 'VULjYVP 327WJi6 gODVE1Y iuU7OL0 DDSyBBi 2onUuc2 6kqnTC4 Qnd6sbl 690gmBG DxBwN5a R7mSIxE glNH07S OeYGxQn 3X2mct4 DR2Mzui YapVHUf huGz1kv liAfT0K dKDaTmY QbC3HTC SIzWDoV ZSzL9P5 5hsmZF4 aqaGwK9 Hxb2Qvt UtiP3dv r9fgkDa 529J0RA ji65zZO rr4SZYk ', 'SC5gfylltJ', '2019-06-30 00:47:33', '2019-06-30 00:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_30_073528_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
