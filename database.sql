-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 09:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfilm`
--
CREATE DATABASE IF NOT EXISTS `webfilm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webfilm`;

-- --------------------------------------------------------

--
-- Table structure for table `table_actor`
--

CREATE TABLE `table_actor` (
  `actor_id` varchar(255) NOT NULL,
  `actor_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `category_id` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_comment`
--

CREATE TABLE `table_comment` (
  `comment_id` varchar(255) NOT NULL,
  `film_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_film`
--

CREATE TABLE `table_film` (
  `film_id` varchar(255) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `film_name_img` varchar(255) NOT NULL,
  `film_name_trailer` varchar(255) NOT NULL,
  `film_link_video` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `actor_id` varchar(255) NOT NULL,
  `film_view` int(11) NOT NULL,
  `film_year` int(11) NOT NULL,
  `film_rating` int(11) NOT NULL,
  `film_day_update` date NOT NULL,
  `film_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `active_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_actor`
--
ALTER TABLE `table_actor`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD UNIQUE KEY `film_id` (`film_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `table_film`
--
ALTER TABLE `table_film`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `category_id_fk` (`category_id`),
  ADD KEY `actor_id_fk` (`actor_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD CONSTRAINT `film_id_fk` FOREIGN KEY (`film_id`) REFERENCES `table_film` (`film_id`),
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `table_user` (`user_id`);

--
-- Constraints for table `table_film`
--
ALTER TABLE `table_film`
  ADD CONSTRAINT `actor_id_fk` FOREIGN KEY (`actor_id`) REFERENCES `table_actor` (`actor_id`),
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `table_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
