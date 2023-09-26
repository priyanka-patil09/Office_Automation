-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 09:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_master`
--

CREATE TABLE `billing_master` (
  `BillId` bigint(255) NOT NULL,
  `BillName` varchar(255) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `billing_master`
--

INSERT INTO `billing_master` (`BillId`, `BillName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Paytm', 0, 1, 1, '2023-09-17 10:50:56', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 08:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `budget_master`
--

CREATE TABLE `budget_master` (
  `BudgetId` bigint(255) NOT NULL,
  `BudgetName` varchar(255) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `budget_master`
--

INSERT INTO `budget_master` (`BudgetId`, `BudgetName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Monthly', 0, 1, 1, '2023-09-17 11:36:00', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 09:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_master`
--

CREATE TABLE `emp_master` (
  `UnitId` bigint(255) NOT NULL,
  `UnitName` varchar(255) NOT NULL,
  `ShortName` varchar(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `emp_master`
--

INSERT INTO `emp_master` (`UnitId`, `UnitName`, `ShortName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'KG', 'kilogram', 0, 1, 1, '2020-07-11 08:37:35', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:37:35'),
(2, 'DOZEN', 'Dozen', 0, 1, 1, '2020-07-11 08:37:52', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:37:52'),
(3, 'GM', 'Gram', 0, 1, 1, '2020-07-11 08:38:32', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:38:32'),
(4, 'PC', 'pisces', 0, 1, 1, '2020-07-11 08:38:57', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:38:57'),
(5, 'MG', 'Miligram', 0, 1, 1, '2020-07-11 08:41:32', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:41:32'),
(6, 'T', 'tonne', 0, 1, 1, '2020-07-11 08:42:24', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:42:24'),
(7, 'BOX', 'box', 0, 1, 1, '2020-07-11 08:42:31', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:42:31'),
(8, 'KL', 'kilolitre', 0, 1, 1, '2020-07-11 08:44:03', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:44:03'),
(9, 'L', 'litre', 0, 1, 1, '2020-07-11 08:44:37', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:44:37'),
(10, 'ML', 'millilitre', 0, 1, 1, '2020-07-11 08:45:18', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:45:18'),
(11, 'KM', 'Kilometer', 0, 1, 1, '2020-07-11 08:46:40', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:46:40'),
(12, 'M', 'metre', 0, 1, 1, '2020-07-11 08:47:15', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:47:15'),
(13, 'CM', 'centimetre', 0, 1, 1, '2020-07-11 08:48:00', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:48:00'),
(14, 'MM', 'millimetre', 0, 1, 1, '2020-07-11 08:48:40', 1, NULL, NULL, NULL, NULL, NULL, '2020-07-11 06:48:40'),
(15, 'Nos', 'Nos', 0, 1, 1, '2020-08-01 05:20:52', 1, NULL, NULL, NULL, NULL, NULL, '2020-08-01 05:20:52'),
(16, 'dssssssss', 'dsds', 0, 1, 1, '2023-04-20 11:03:46', 1, '2023-04-20 11:05:03', 1, NULL, NULL, NULL, '2023-04-20 09:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priority_master`
--

CREATE TABLE `priority_master` (
  `PrioId` bigint(255) NOT NULL,
  `PrioName` varchar(255) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `priority_master`
--

INSERT INTO `priority_master` (`PrioId`, `PrioName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'In Due Work', 0, 1, 1, '2023-09-17 08:51:45', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 06:51:45'),
(2, '65koi', 0, 1, 1, '2023-09-26 07:05:11', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-26 05:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `projaccess_master`
--

CREATE TABLE `projaccess_master` (
  `ProjAccId` bigint(255) NOT NULL,
  `ProjAccName` varchar(255) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `projaccess_master`
--

INSERT INTO `projaccess_master` (`ProjAccId`, `ProjAccName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'hello', 0, 1, 1, '2023-09-17 11:17:50', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 09:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `projtype_master`
--

CREATE TABLE `projtype_master` (
  `ProjTypeId` bigint(255) NOT NULL,
  `ProjTypeName` varchar(255) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `projtype_master`
--

INSERT INTO `projtype_master` (`ProjTypeId`, `ProjTypeName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Mini Project', 0, 1, 1, '2023-09-17 11:48:58', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 09:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `remainder_master`
--

CREATE TABLE `remainder_master` (
  `RemainId` bigint(255) NOT NULL,
  `RemainName` varchar(255) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `remainder_master`
--

INSERT INTO `remainder_master` (`RemainId`, `RemainName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Wake Up', 0, 1, 1, '2023-09-17 08:51:05', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 06:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE `status_master` (
  `StatusId` bigint(255) NOT NULL,
  `StatusName` varchar(255) DEFAULT NULL,
  `ColorCode` varchar(50) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `status_master`
--

INSERT INTO `status_master` (`StatusId`, `StatusName`, `ColorCode`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Active', '#4dff00', 0, 1, 1, '2023-09-17 07:32:12', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 05:32:12'),
(2, 'Expired', '#ff0000', 0, 1, 1, '2023-09-17 12:29:37', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 10:29:37'),
(3, 'hjkhjhj', '#ff0000', 0, 1, 1, '2023-09-26 07:02:41', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-26 05:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `tags_master`
--

CREATE TABLE `tags_master` (
  `TagsId` bigint(255) NOT NULL,
  `TagsName` varchar(255) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tags_master`
--

INSERT INTO `tags_master` (`TagsId`, `TagsName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'welcome', 0, 1, 1, '2023-09-17 11:59:43', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 09:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `task_master`
--

CREATE TABLE `task_master` (
  `TaskId` bigint(255) NOT NULL,
  `TaskName` varchar(255) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `task_master`
--

INSERT INTO `task_master` (`TaskId`, `TaskName`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'Designing Forms', 0, 1, 1, '2023-09-17 10:27:35', 1, NULL, NULL, NULL, NULL, NULL, '2023-09-17 08:27:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_master`
--
ALTER TABLE `billing_master`
  ADD PRIMARY KEY (`BillId`);

--
-- Indexes for table `budget_master`
--
ALTER TABLE `budget_master`
  ADD PRIMARY KEY (`BudgetId`);

--
-- Indexes for table `emp_master`
--
ALTER TABLE `emp_master`
  ADD PRIMARY KEY (`UnitId`);

--
-- Indexes for table `priority_master`
--
ALTER TABLE `priority_master`
  ADD PRIMARY KEY (`PrioId`);

--
-- Indexes for table `projaccess_master`
--
ALTER TABLE `projaccess_master`
  ADD PRIMARY KEY (`ProjAccId`);

--
-- Indexes for table `projtype_master`
--
ALTER TABLE `projtype_master`
  ADD PRIMARY KEY (`ProjTypeId`);

--
-- Indexes for table `remainder_master`
--
ALTER TABLE `remainder_master`
  ADD PRIMARY KEY (`RemainId`);

--
-- Indexes for table `status_master`
--
ALTER TABLE `status_master`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `tags_master`
--
ALTER TABLE `tags_master`
  ADD PRIMARY KEY (`TagsId`);

--
-- Indexes for table `task_master`
--
ALTER TABLE `task_master`
  ADD PRIMARY KEY (`TaskId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_master`
--
ALTER TABLE `billing_master`
  MODIFY `BillId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `budget_master`
--
ALTER TABLE `budget_master`
  MODIFY `BudgetId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_master`
--
ALTER TABLE `emp_master`
  MODIFY `UnitId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `priority_master`
--
ALTER TABLE `priority_master`
  MODIFY `PrioId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projaccess_master`
--
ALTER TABLE `projaccess_master`
  MODIFY `ProjAccId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projtype_master`
--
ALTER TABLE `projtype_master`
  MODIFY `ProjTypeId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `remainder_master`
--
ALTER TABLE `remainder_master`
  MODIFY `RemainId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_master`
--
ALTER TABLE `status_master`
  MODIFY `StatusId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags_master`
--
ALTER TABLE `tags_master`
  MODIFY `TagsId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_master`
--
ALTER TABLE `task_master`
  MODIFY `TaskId` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
