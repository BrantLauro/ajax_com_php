-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 06:12 AM
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
-- Database: `db_comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `like_val` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `like_val`) VALUES
(1, 'lucas', 'lucas', NULL),
(2, 'Lucas', 'Lucas', 0),
(3, 'Thiafo', 'oi', NULL),
(4, 'Bruno Mars', 'Come to Brazil', NULL),
(5, 'Bruno', 'Carai', NULL),
(6, 'Marcos', 'Marconi', NULL),
(7, 'Papagaio', 'Marmota', NULL),
(8, 'Marcos', 'Marcos', NULL),
(9, 'Caraio', 'Caraio', NULL),
(10, 'Olk', 'Olk', 1),
(11, 'dsa', 'dfsa', 0),
(13, 'Lucas', 'Lucas', NULL),
(14, 'Mamãe eu quero', 'mamãe eu quero mama', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replys`
--

CREATE TABLE `replys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `replys`
--

INSERT INTO `replys` (`id`, `name`, `comment`, `comment_id`) VALUES
(1, 'asd', 'asd', 14),
(2, 'fdsa', 'fsda', 14),
(3, 'sda', 'das', 14),
(4, 'fsda', 'fsda', 14),
(5, 'loiro', 'brant', 14),
(6, 'fsa', 'fsad', 13),
(7, 'fasd', 'fsad', 14),
(8, 'Facista', 'hahahahha', 14),
(9, 'div', 'div', 14),
(10, 'gasdf', 'gdf', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replys`
--
ALTER TABLE `replys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `replys`
--
ALTER TABLE `replys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `replys`
--
ALTER TABLE `replys`
  ADD CONSTRAINT `replys_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
