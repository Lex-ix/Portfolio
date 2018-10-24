-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 08:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `title`, `content`, `deleted_at`, `updated_at`) VALUES
(1, 'about_me', 'Jalapeno ham hock ball tip sirloin capicola, shank burgdoggen landjaeger bacon prosciutto chuck pork loin beef kielbasa shankle short Credits @YouriVDS', NULL, '2018-10-24 17:31:34'),
(2, 'contact_me', 'Jalapeno ham hock ball tip sirloin capicola, shank burgdoggen landjaeger bacon prosciutto chuck pork loin beef kielbasa shankle short ribs. Shank shankle pork pork belly. Landjaeger beef ribs meatball pancetta boudin. Hamburger pastrami bacon frankfurter. Shoulder flank landjaeger beef, andouille drumstick strip steak ribeye corned beef prosciutto Spicy jalapeno ham hock ball tip sirloin capicola, shank burgdoggen landjaeger bacon prosciutto chuck pork loin beef kielbasa shankle short ribs. Shank shankle pork pork belly. Landjaeger beef ribs meatball pancetta boudin. Hamburger pastrami bacon frankfurter. Shoulder flank landjaeger beef, andouille drumstick strip steak ribeye corned beef prosciutto. ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
