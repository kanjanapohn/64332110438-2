-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 04:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `post_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `post_id`, `id`) VALUES
(7, 'หนีไปปปป', 4, 2),
(8, 'ให้ดวงอาทิตย์อาบน้ำถ้าจะดี', 5, 2),
(9, 'ขี้เกียจเหมือนกันประเด็น55555', 6, 2),
(10, '55555555', 7, 2),
(11, 'นั้นสิๆๆๆๆๆๆๆๆๆๆ', 8, 2),
(12, 'ต้องนอนสิ ไม่งั้นง่วง', 9, 1),
(13, '17 พ.ย. 2023', 10, 1),
(14, 'นอนนนนน', 11, 1),
(16, '444', 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `detail` longtext DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `detail`, `id`) VALUES
(4, 'อยากเรียนวิศวะคอม เรียนอยากไหม?', 'กำลังเลอยู่ว่าจะเรียนดีไหม ช่วยแนะนำหน่อยยยย', 1),
(5, 'ทำไงให้ดวงอาทิตย์ไม่ร้อน', 'แดดประเทศไทยร้อนเกิ้นนนนน', 1),
(6, 'ฮาวทูไม่ขี้เกียจ', 'แออมโซๆขี้เกียจสุดๆๆๆๆๆ', 1),
(7, 'อยากอยู่เฉยๆแล้วรวย ควรทำไง', '55555555555', 1),
(8, 'ทำไมอาจารย์ต้องสั่งการบ้าน?', 'วายยย ยูดูแด็ดดทีเชอร์', 1),
(9, 'ทำไมมนุษย์ต้องนอน', 'ตอนนี้ก็ง่วงเหมือนกันแฮะะะะ', 2),
(10, 'ลอยกระทงปีนี้วันที่เท่าไหร่นะ?', 'ไม่อยากหาให้กูเกิ้ล คึคึคึคึคึ', 2),
(11, 'วันหยุดทำไรดีฮะ?', 'ช่วยหน่อยยย', 2),
(14, 'yyyy', 'rrrr', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kanjanaporn', 'mieawkk5@gmail.com', '1234'),
(2, 'J.M', 'mieawphaisawan@gmail.com', '6789'),
(5, 'สมหญิง', 'pp@gmail.com', '7777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
