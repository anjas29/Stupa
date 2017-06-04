-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2017 at 10:09 PM
-- Server version: 5.7.17-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stupa`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `grade`, `created_at`, `updated_at`) VALUES
(1, 'A', 7, '2017-05-02 14:42:15', '2017-05-02 14:42:15'),
(2, 'B', 7, '2017-05-02 14:42:15', '2017-05-02 14:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_code`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '0001', 'MATHEMATICS', 'MATHEMATICS', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(2, '0002', 'NATURAL SCIENCES', 'NATURAL SCIENCES', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(3, '0003', 'SOCIAL SCIENCES', 'SOCIAL SCIENCES', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(4, '0004', 'ENGLISH', 'ENGLISH', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(5, '0005', 'INDONESIAN', 'INDONESIAN', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(6, '0006', 'JAVANESE', 'JAVANESE', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(7, '0007', 'ART', 'ART', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(8, '0008', 'SPORTS', 'SPORTS', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(9, '0009', 'ISLAMIC STUDIES', 'ISLAMIC STUDIES', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(10, '0010', 'CITIZENSHIP EDUCATION', 'CITIZENSHIP EDUCATION', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(11, '0011', 'GUIDANCE COUNSELING', 'GUIDANCE COUNSELING', '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(12, '0012', 'INFORMATION TECHNOLOGY', 'INFORMATION TECHNOLOGY', '2017-05-02 14:42:21', '2017-05-02 14:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `detail_course`
--

CREATE TABLE `detail_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `period_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_course`
--

INSERT INTO `detail_course` (`id`, `class_id`, `course_id`, `teacher_id`, `period_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(2, 1, 2, 2, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(3, 1, 3, 3, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(4, 1, 4, 4, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(5, 1, 5, 5, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(6, 1, 6, 6, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(7, 1, 7, 7, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(8, 1, 8, 8, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(9, 1, 9, 9, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(10, 1, 10, 10, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(11, 1, 11, 11, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(12, 1, 12, 12, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(13, 2, 1, 1, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(14, 2, 2, 2, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(15, 2, 3, 3, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(16, 2, 4, 4, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(17, 2, 5, 5, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(18, 2, 6, 6, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(19, 2, 7, 7, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(20, 2, 8, 8, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(21, 2, 9, 9, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(22, 2, 10, 10, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(23, 2, 11, 11, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22'),
(24, 2, 12, 12, 4, '2017-05-02 14:42:22', '2017-05-02 14:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `detail_present`
--

CREATE TABLE `detail_present` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `present_id` int(10) UNSIGNED NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2017_04_24_110912_crate_table_teachers', 1),
(34, '2017_04_24_110934_crate_table_students', 1),
(35, '2017_04_24_111037_create_table_course', 1),
(36, '2017_04_24_111100_create_table_detail_course', 1),
(37, '2017_04_24_112113_create_table_present', 1),
(38, '2017_04_24_112145_creat_table_detail_present', 1),
(39, '2017_04_29_201731_create_table_classes', 1),
(40, '2017_04_30_031032_create_table_period', 1);

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
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`id`, `year`, `semester`, `status`, `created_at`, `updated_at`) VALUES
(1, '2015/2016', '1', 0, '2017-05-02 14:42:12', '2017-05-02 14:42:12'),
(2, '2015/2016', '2', 0, '2017-05-02 14:42:12', '2017-05-02 14:42:12'),
(3, '2016/2017', '1', 0, '2017-05-02 14:42:12', '2017-05-02 14:42:12'),
(4, '2016/2017', '2', 1, '2017-05-02 14:42:12', '2017-05-02 14:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `present`
--

CREATE TABLE `present` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail_course_id` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_number`, `username`, `password`, `class_id`, `name`, `gender`, `address`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '7487', '7487', '$2y$10$Y8ruBQlVPOVS7Q/vlI/MjuQjtjcuBYFGToYCcXGuI/G15qxU09n/2', 1, 'ADILLA HAFIZH AFIFAH', 'Male', '-', 'O0sxQDoAQRhu3M69SVYydZrclBRV7IEAHtdPUMOYes4wUsh4qKDC3QqJ4leG', NULL, '2017-05-02 14:42:15', '2017-05-02 14:42:15'),
(2, '7488', '7488', '$2y$10$Gii3oSRyDbJdUPOIU6jPAOiaXru9/ytWcM//FDcoiyPbyrIWXSabK', 1, 'AFIFFULLAH', 'Female', '-', 'Nb69np5NM6B0deiYxYUjsvxlsEmzWAzgPwd22mNeH6Cppo5TynvSEnwF3Tmm', NULL, '2017-05-02 14:42:15', '2017-05-02 14:42:15'),
(3, '7489', '7489', '$2y$10$OO.RGnDpmy8jYm81xYGTjOw/bEgcnlFkMTvS.2zs1/iGWI3VGIoxK', 1, 'AFINA NAURATUL HASNA', 'Female', '-', '9Xb34BaRadnQiGyvlGwNTFQ0cXbwQog6UaGSGaUPT0qfgNuvmvvdxWRlaODK', NULL, '2017-05-02 14:42:15', '2017-05-02 14:42:15'),
(4, '7490', '7490', '$2y$10$ghhBX0HQixs52tVWpW4UMuiBtDJa.emPUyCWp3UfbhfvoGxjPas3G', 1, 'ALFIONITA NURFADHILA RAMADHANI', 'Male', '-', 'dZqdOGvUansZE4x5D394JbqoP7366eG9MsYTqPcHGpYjmXzR5goCC1rc7jBz', NULL, '2017-05-02 14:42:15', '2017-05-02 14:42:15'),
(5, '7491', '7491', '$2y$10$eD/wA0Cc36phfzhUuwTVfuAn9lFBFgPj3Zd74lJE/fdFmsnLjZXra', 1, 'ALIF VIVIAN ADYATMA', 'Female', '-', 'dFJh7Bsf5Lse53VkShOgMJ2r3qlvwaOblb75ADGymYdcjoGs03g2tIXID3jc', NULL, '2017-05-02 14:42:16', '2017-05-02 14:42:16'),
(6, '7492', '7492', '$2y$10$ginXIiCeXAe4wLKGQYkvSOVcN0TzBr1yVkmD5M8GCUFvff70viY/u', 1, 'ARCINDY ERSA PUTRILIA', 'Female', '-', 'rAYZNmsEOkFn5no2uTr5wpzkiQ8Kac5iQWOtxK135fMjOQyHkM7wcnDcKc5u', NULL, '2017-05-02 14:42:16', '2017-05-02 14:42:16'),
(7, '7493', '7493', '$2y$10$fvScCjanjhbK7aQhsTd9DONglHOYW9g9F6XVCkTq2bqCnJQ12qsQi', 1, 'BAGUS ACHMAD ADIDANA NUGRAHA', 'Male', '-', '4zV8epfroA4e9g6xVkTivAcJVgzNC8TqIiT4Gzfr1FF2APR6SJHsx5pLOQKe', NULL, '2017-05-02 14:42:16', '2017-05-02 14:42:16'),
(8, '7494', '7494', '$2y$10$FbOU9C2pN1yxiATIXwqVvuF7Wq0YQ1nxuDA1otvqAkMWzTwdrmwZm', 1, 'EMANDEN STEFY ALYANISA', 'Female', '-', 'VhyyjI7kbMfVQq4EDxSKWzN9FmmjbeSAXuIc6LmjXWisMIrJWZX3Gha78eGU', NULL, '2017-05-02 14:42:16', '2017-05-02 14:42:16'),
(9, '7495', '7495', '$2y$10$Y.nAoV0/W9alySN.0r8GMur2f3k649u53F2PhnQi8v2c.R6UqdpXm', 1, 'ESA OCTAVIA BINTANG AZZAHRA', 'Female', '-', '7WvC06zSNhJLQB4CkbitWdpkqZ3hNioKzpXZhPAA2vul5d1Oi63Ru8Mtezux', NULL, '2017-05-02 14:42:16', '2017-05-02 14:42:16'),
(10, '7496', '7496', '$2y$10$pHBsrKqcY/ae9xfJPVSoteWKLJKODdJyWFxPY4HK7ajjWNTMY3.XC', 1, 'FAATIKAH SALMAA AL HUSNA', 'Female', '-', 'kXtyrvFcDHUlHBxIe5k8ExGhDo3TyaU3jKg6qvgi3BJ5rv5U2HKyAiEsB86P', NULL, '2017-05-02 14:42:16', '2017-05-02 14:42:16'),
(11, '7497', '7497', '$2y$10$OVmpu9iMwPewAv2sRMSv.urQ3ijBhF.baVpURIorI2zLcqraFSQE2', 1, 'HASNA QONITAH', 'Female', '-', 'ynlPTTGrvONzDExUEIl6FdUpyKVz9a2hV7oMnXAswl6LyL4Dx34IRxSzdryq', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(12, '7498', '7498', '$2y$10$li4Ue8fyi3HJIg7UPITceO8PcGGmAF6mdZOR837jDMx5A2OGaVNae', 1, 'MUHAMMAD FANDANY MAHENDRATAMA', 'Male', '-', 'f1qqvSNy7Mr3Yt0rcSREkTuOFkdF3KE1Bxd116pxnhnbOfo4j5c1JwffalQf', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(13, '7499', '7499', '$2y$10$hKrOr/.RrqX0faR7g8jDN.CJax6A5AW.fq6XeGCm.c98pEvV.NCeC', 1, 'MUHAMMAD RAIHAN', 'Male', '-', 'dWvoGEErkMCHg8bigeO0dvK3xaLrV64nUActMnwDKyg2HXDhpIDeqy2HnRIo', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(14, '7500', '7500', '$2y$10$e4hIyvVUWpC0jw46WAf3t.WA31TuQ1XZrgGsCJVTawCRG.kqHgwhu', 1, 'NABIL YASIR ILMI', 'Female', '-', 'AglohtpRqULrUiQ0o1lp0EKAvrmnnNv6dHb8dHPxyaze2whxK5j7lgZqdolp', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(15, '7501', '7501', '$2y$10$OFyvo0wUKNIUhgExTyBOyeI8icwNyZMXTitZpzIlKMbnODcehqdh.', 1, 'NAJMA ALYA JASMINE', 'Female', '-', 'Efv3izNJl7RrAxRv1OQa3zHFdKAXHdFC1cd1RkiocOVlMOGa3pKo7whPhAd6', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(16, '7502', '7502', '$2y$10$0/c.vhfvpwH4NRBU7hUd0.YknCSFn8dZHyNGqBqJz8bwR8ztZf4eu', 1, 'NALA AGHNIYA AHSAN', 'Female', '-', 'iK1DY1hzCM36AWDM7XTQvFUGYiPm5n69ZDJxVCZh0POJ386phvtYjhJezLZv', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(17, '7503', '7503', '$2y$10$P.yvw2QQtj0Ys/3opXlMfOCJPIXspHBE91ky8aUpYq7MNtQai1MgW', 1, 'NIKEN SEPTIANA KHUZAIMAH', 'Female', '-', 'XOyxKbygVaUrHO6fMxZh0VxtUr9H7UgpcRDjRWrgaxa6LSm4lJkudgqS5swh', NULL, '2017-05-02 14:42:17', '2017-05-02 14:42:17'),
(18, '7504', '7504', '$2y$10$SEGSywyPo.vbnjdsAJKtKuHf5/W7W3J7gVvTfzL76HMHCPGGuIRae', 1, 'NOVELLIA ARDHYA DEWANTI', 'Female', '-', 'QdEg3Vzq7Kghz6EzFs21DNUpBO142e5A71HzPsmoTSxSGU3Y51MUzhnyKQOL', NULL, '2017-05-02 14:42:18', '2017-05-02 14:42:18'),
(19, '7505', '7505', '$2y$10$thWNyQ15oPVg0yVo4BrDg.XuexKgj9fMDRcCbrbcqwEkeQLLZqwPe', 1, 'PRADITA SEPTIANI SIREGAR', 'Female', '-', 'a9SsSfCTZWzEyaA7QpcMbuwx3mXAdxm7db3JmNYCVI4fHbOaVXgauBuCx26g', NULL, '2017-05-02 14:42:18', '2017-05-02 14:42:18'),
(20, '7506', '7506', '$2y$10$p92y0wp8Cd7h5yeE114xAOVUW9sXl4rE9UIcdPsarHxdi/XFR790W', 1, 'QANITA ALCIENAMORA PERWIRA', 'Female', '-', 'mw3GwAUts6OWzLIEgaWIqXpRWCLsgOr37qcwZpIyn4gpJXoFL8TxBNdbBp3K', NULL, '2017-05-02 14:42:18', '2017-05-02 14:42:18'),
(21, '7514', '7514', '$2y$10$AVKC4CGe3kTxnO7l9gYW2.e.68tUtMKxh1MOmdwThPE1JS5GsIg2G', 2, 'AJENG DHIYAA PUTRI QONITA', 'Female', '-', 'CV2sSYr9YXCtg3wegO2L2nqkMqVZIPKpIVLLq6F3a7buJ2kXpaZHjtTG4bxo', NULL, '2017-05-02 14:42:18', '2017-05-02 14:42:18'),
(22, '7515', '7515', '$2y$10$5jqdkJEO.OqFNNl5ejtaRes5oy5/XnPQDzHnE1PYpe5mWEb4cYnkC', 2, 'ARVIN BRAVEANTO', 'Male', '-', 'jfS8GtI8yvwmK35EdrBtRDXM4cbgrM7PgO9wauXYSs7k5FpjarTQuQ8CZoyF', NULL, '2017-05-02 14:42:18', '2017-05-02 14:42:18'),
(23, '7516', '7516', '$2y$10$sbDlLCoOtrI3K2Cy9.XKk.zTIUUb2w2SA0bcMkJaxzLV9eW09pEju', 2, 'ASA PENANTIAN', 'Male', '-', 'pTlIGQB5tz2PNUZhcgcjkvI9bJkP67SsOEjOtQYhV7ynpwEipGpR5CasYIib', NULL, '2017-05-02 14:42:18', '2017-05-02 14:42:18'),
(24, '7517', '7517', '$2y$10$DVehUOvQCTku/nVN9M3G9OzYpdeXEcHkfpVN044y.fMNN76Y7cqcq', 2, 'DIKA NOER CANDRA WINDRA RENNY', 'Female', '-', 'msKYi58Sh9RfX87ZpRUaWoQNX5UmdeMKNOY1e3HLqdH8g3SCkdaKDr8fiCmP', NULL, '2017-05-02 14:42:19', '2017-05-02 14:42:19'),
(25, '7518', '7518', '$2y$10$wlZ6EG7ogXHxr8VFA5hzaemeE3pOZ6FBy8wU/cPQXJSj62K5IFH7y', 2, 'ELSA SILFIANA SHOLIHAH', 'Female', '-', 'oKwaRONEp9rl5s9PYd15ItYYzSTjriDU445x1UunVCw0wOQXbZW5wvqQSTRq', NULL, '2017-05-02 14:42:19', '2017-05-02 14:42:19'),
(26, '7519', '7519', '$2y$10$os63aTqM.tPj3AjEQuqRWO/1/NB2UfNMVtE7ZyPt41aQH0cjJJfiu', 2, 'EMMYLIA ESTU PUTRI', 'Female', '-', '0MoOLQSuZQ1sopFQn1hkBajJbunfM2uAZbZ8tDEvcSQp2nJ0Dy4nJ0uGbOU2', NULL, '2017-05-02 14:42:19', '2017-05-02 14:42:19'),
(27, '7520', '7520', '$2y$10$e.UzYkz0HyN2b1poOhlr.uTR8I5.YgLzcNdRxb9U9Qw8JgOCRUqCm', 2, 'FITRA RIZKY HENDRAWAN', 'Male', '-', 'zM1b5j9zJxz35VNpfl5pBVR9z1fSQTcsSVE07USbplTMqoUqRa6WR54kDTUO', NULL, '2017-05-02 14:42:19', '2017-05-02 14:42:19'),
(28, '7521', '7521', '$2y$10$2jEk2WeYnKpjAJRS08HOzeTM.5mMQJgdxknPnHq79/rJLTocwq0Bu', 2, 'HERLINA SULISTYA PUTRI', 'Female', '-', 'fkH2au6NDsDuU3wugKaD4EAOxQtiojS2j9YjXnAiPPN8hiCLhLqcQIjN22DX', NULL, '2017-05-02 14:42:19', '2017-05-02 14:42:19'),
(29, '7522', '7522', '$2y$10$dTo.JhsMnhUNjWG3u0UcQeQLzoufFXzBcdb0lEeoi3QlkMm3rgLzO', 2, 'HUSNA SABILA ASYA HIDA', 'Female', '-', 'Cdy4XamNYMxNGVxOzUWzKmYOk7dqsYtciYmYX5Z6l8P8oYdcYmTlrpGKK3Cl', NULL, '2017-05-02 14:42:19', '2017-05-02 14:42:19'),
(30, '7523', '7523', '$2y$10$V0LLAcVwmEHJrd.99bTzoeWrTf8jXtThgQAKa8/ifpSeWtoSvDnTi', 2, 'INTAN MUNDZIROH', 'Female', '-', '64ZvUXvxAlItTj869KXb2Y3Wl5UqXdoA8XG6kLgWhkwpIwrPH2qrJ9JTL94o', NULL, '2017-05-02 14:42:20', '2017-05-02 14:42:20'),
(31, '7524', '7524', '$2y$10$x.pIQMx3I3Su75wHlMTB3eR8Uk/pPtKbfGovxYq6WtAI8eBUmN8yu', 2, 'KAFITA HERDANIA', 'Female', '-', 'YYutVZ7yRXVad84faD1RElS0BvYXb8y2rx2EmoQkbSVtaqHaxMtBfHGrAgYn', NULL, '2017-05-02 14:42:20', '2017-05-02 14:42:20'),
(32, '7525', '7525', '$2y$10$HPK0laJpFI6upTwksndjFuJR8YPiGP2oZR50sueSCELDWuWgFySMm', 2, 'KAMALIA PUTRI NURUL AINI', 'Female', '-', 'PxsQDPmj6nkNnwYtiy9ii0KVTj5nto6JdyHQPBWgU2YzVSSdRDRIT0VxjpTf', NULL, '2017-05-02 14:42:20', '2017-05-02 14:42:20'),
(33, '7526', '7526', '$2y$10$boXK1QU81XJYvO5P26zpH.SFV1FhfPSe1N166MQG4Zzrwd///C.y6', 2, 'LAELA ANJASARI PUTRI', 'Female', '-', '5M2mz0i44Fj0QdnpgDPtPEaFRYNjPBnWfBxnUDIuEX9PFPD8ycyynz4hHfnG', NULL, '2017-05-02 14:42:20', '2017-05-02 14:42:20'),
(34, '7527', '7527', '$2y$10$Frv.xM4hvtFBny.YVlO5yuTB0l4H48l/vo8ckFG74Ght2LdOZ2qiy', 2, 'LINTANG RISANG AYU ARDITA GUNAWAN', 'Female', '-', '6Hf9F9NqDLvSdi8kdUyGEZeWZIASc5abeT7n3ToFB0DQdG287UtEeXbYzsAv', NULL, '2017-05-02 14:42:20', '2017-05-02 14:42:20'),
(35, '7528', '7528', '$2y$10$Bzh1UIVC20Bm8IduaVSVYed.CRepXslSVL8TDHS1YTY/GSzbugOMG', 2, 'LUKMANSYAH', 'Male', '-', '3f8OhxGxOTpKpKh4vDW7oABxrp1o6hcvYJuriBj1TVv4yuMNf1BoIRxTHAz5', NULL, '2017-05-02 14:42:20', '2017-05-02 14:42:20'),
(36, '7529', '7529', '$2y$10$xsfTeydMfBPHgVv64SQp6uKxK0thcrAzmqlpe0PG3IVk2oiboBT7.', 2, 'LURU LARASATI', 'Female', '-', 'Bju1AhqQhsMFp7wJ48wbPZJcUrOOCAJCstEsFbd12rdIFAgRbITeImt4nUY7', NULL, '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(37, '7530', '7530', '$2y$10$HozgbYmcIMwAGsatdsfv4eV.JBZ2K5ychtjZZu9rzrUVyguJIBE0m', 2, 'LUTHFIAH PUTRI HASNA ALIMARWANSYAH', 'Female', '-', 'NF6ylxYSZxm7WouWP7RitIr3tDRnXQZNcu3npPCGJXNrAgNK6BtyfluqY1Nm', NULL, '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(38, '7531', '7531', '$2y$10$Me3Lg53E4sFqLbVKqSaTTu5uYheS9rHAWINCFERcs5M8XFXadv37G', 2, 'MUHAMMAD DAFFAAUSHAF RAFSANJANI', 'Male', '-', 'XbiAZUVOd5yRyK2fJTWellsbHkKOyI0qGDb2KGyPJkBA75zoXsxY6QwMBeDg', NULL, '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(39, '7532', '7532', '$2y$10$PoBoaXOjOFME4bSoJYRPG.Aba9JHnydLiq4IE6gWteBELf6JFPywC', 2, 'MUHAMMAD HUSNI ALWI', 'Male', '-', 'NmYu4NpsEtiavpWMD5lqRGVHmTUAWP0VPs3iXici9xrlRcPoKTU7lAwwE3h0', NULL, '2017-05-02 14:42:21', '2017-05-02 14:42:21'),
(40, '7533', '7533', '$2y$10$IHgrw.ofpMw8JGra2A5dQ.R0ybkf6J2Q8H.fEJwXHLXoFwW4nGNiO', 2, 'MUHAMMAD IQBAL KHATAMI', 'Male', '-', 'SN8GWhVAfeCdTZX56ahKBE6WZa5JSAlJhKiq4V1MCrIhsuKBXumZTDMlxjqX', NULL, '2017-05-02 14:42:21', '2017-05-02 14:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_number`, `username`, `password`, `name`, `gender`, `level`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '19690417 199412 2 003', '196904171994122003', '$2y$10$Ke61QFfUmL1Vmqr6t20axeNz/6hmD4TmWASsia1DjnVjbOmVHpUKG', 'DWI RITA SUWANDARI, S. PD.', 'Female', 'Mathematics Teacher', '-', NULL, '2017-05-02 14:42:13', '2017-05-02 14:42:13'),
(2, '19651018 199702 2 002', '196510181997022002', '$2y$10$LT31toqzrxf16qb1JzaOPeWNXrlXmxzE3SABlSeTJmrjPK5ASPTv6', 'RETNO TITISARI, S. PD.', 'Female', 'Natural Sciences Teacher', '-', NULL, '2017-05-02 14:42:13', '2017-05-02 14:42:13'),
(3, '19690728 199412 2 001', '196907281994122001', '$2y$10$fXGpiVsxm8WTIPXYcqIFxuS8h6ilAMBRpERBOJhftk8IAtlFtip.K', 'SULISTIYANI, S. PD.', 'Female', 'Social Sciences Teacher', '-', NULL, '2017-05-02 14:42:13', '2017-05-02 14:42:13'),
(4, '19600817 199412 1 001', '196008171994121001', '$2y$10$o0ERtRH60VoGeOfXTo5hq.JVM5QV0jn0IEdiXYYFXb7L4Krxoaz6K', 'DRS. AGUS RIWARSA', 'Male', 'English Teacher', '-', NULL, '2017-05-02 14:42:13', '2017-05-02 14:42:13'),
(5, '19590622 198103 1 011', '195906221981031011', '$2y$10$X8UlX9/XhvArm8401J7YkOxBREKybyLqTEWfDWsnDTIXxQG8TOwba', 'DRS. HERI SUMANTO, S.  PD.', 'Male', 'Indonesian Teacher', '-', NULL, '2017-05-02 14:42:13', '2017-05-02 14:42:13'),
(6, '19670222 199203 2 013', '196702221992032013', '$2y$10$8xJAvd86dr0AJh734KLXEO3U9b9LLedEGj.tZyXnWeYjarZWXB3nS', 'DRA. TITIK PURWANINGSIH', 'Female', 'Javanese Teacher', '-', NULL, '2017-05-02 14:42:13', '2017-05-02 14:42:13'),
(7, '19671216 199412 2 002', '196712161994122002', '$2y$10$OMpXguIZRj0r69mndqqRPuGpldaebYfR2yhQdu0DDj.fKRITw0ydq', 'DRA. FRANSISCHA WIDIYATI', 'Female', 'Art Teacher', '-', NULL, '2017-05-02 14:42:14', '2017-05-02 14:42:14'),
(8, '19630319 199412 1 001', '196303191994121001', '$2y$10$qzL1lSHoxVQwFEIfHXpvS.SAH0S1DeiSyCffn3kBieZCtFpnp6CuK', 'DRS. JAKA PUJI UTAMA', 'Male', 'Sposrts Teacher', '-', NULL, '2017-05-02 14:42:14', '2017-05-02 14:42:14'),
(9, '19670218 199303 2 003', '196702181993032003', '$2y$10$tqFDcXAevHDkyEJYs/eWle9/IZzGdB7C/OO/ErJ1LhVuXLMlfkdaG', 'DRA. ISTINGANAH', 'Female', 'Islamic Studies Teacher', '-', NULL, '2017-05-02 14:42:14', '2017-05-02 14:42:14'),
(10, '19590107 198803 1 004', '195901071988031004', '$2y$10$KYEl3q6z3E7mK1/vmc9SIuObw8DXKMCwpRh6KU2iYmejpnRRSdzwS', 'DRS. SARINDI', 'Female', 'Citizen Education Teacher', '-', NULL, '2017-05-02 14:42:14', '2017-05-02 14:42:14'),
(11, '19610616 198602 2 003', '196106161986022003', '$2y$10$g.hipqPXSPB5mipK6gpTBOWRrpavrf8aF0oSCBGc39xDXSxNFN9My', 'SITI AMINAH, S. PD.', 'Female', 'Guidance Conseling Teacher', '-', NULL, '2017-05-02 14:42:14', '2017-05-02 14:42:14'),
(12, '19670813 199412 1 002', '196708131994121002', '$2y$10$alxqrX/1/Rkw15xXDzb/f.IdUdBQ97s92fiE21s6ayKieQ/riDdZe', 'DRS. RADEN TOTO WIDHI DARMANTO', 'Male', 'Inforation Technology Teacher', '-', NULL, '2017-05-02 14:42:14', '2017-05-02 14:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '$2y$10$at64ICwamYYJXiB.6fdmqOZt44g6lvkdYcyJGhMCeDg7QBN90dWz6', 'Qd8FgB5Nz3heFUYhX71YS6Gilbr2Tu252KtEcqQ4ucBR6Y9Vcl6utheCIt64', 'omKrMhrBZIdQmnDak17kRPbo9G9M7vOVp1jUyKvHmxkaaByCUJFjBlRKoe9R', '2017-05-02 14:42:12', '2017-05-02 14:42:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_course`
--
ALTER TABLE `detail_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_present`
--
ALTER TABLE `detail_present`
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
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `present`
--
ALTER TABLE `present`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_username_unique` (`username`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_username_unique` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `detail_course`
--
ALTER TABLE `detail_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `detail_present`
--
ALTER TABLE `detail_present`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `present`
--
ALTER TABLE `present`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
