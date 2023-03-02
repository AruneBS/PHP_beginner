-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2023 at 10:29 AM
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
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `user_id` varchar(300) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `name`, `user_id`, `created_at`) VALUES
(5, 'Lietuviska', '13', '2023-02-20'),
(7, 'Best Top', '11', '2023-02-20'),
(38, 'Vasara', '11', '2023-03-02'),
(39, 'Dance', '16', '2023-03-02'),
(40, 'Gimtadienis', '15', '2023-03-02'),
(41, 'Mamontovas', '15', '2023-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `author` varchar(300) NOT NULL,
  `album` varchar(300) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `youtube_link` varchar(300) NOT NULL,
  `playlist_id` int(250) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `photo`, `title`, `author`, `album`, `year`, `youtube_link`, `playlist_id`, `created_at`) VALUES
(38, '1677741590.jpeg', 'Išminčius nebeliūdi', 'Kedrostuburas', 'Nux Lux', 2021, 'youtube.com', NULL, '2023-03-02'),
(39, '1677741969.jpeg', 'Dar ilgai', 'A.Mamontovas', 'Elektromechaninis', 2020, 'yourtube.com', NULL, '2023-03-02'),
(40, '1677742021.jpeg', 'Vėjas', 'A.Mamontovas', 'Elektromechaninis', 2020, 'youtube.com', NULL, '2023-03-02'),
(41, '1677742103.jpeg', 'Love On Top', 'Beyonce', '4', 2011, 'youtube.com', NULL, '2023-03-02'),
(42, '1677742196.jpeg', 'Safe and Sound', 'Capital Cities', 'In aTidla Wave of Mystery', 2014, 'Youtube.com', NULL, '2023-03-02'),
(43, '1677742335.jpg', 'Can We Try', 'Benny Sings', 'Art', 2011, 'youtube.com', NULL, '2023-03-02'),
(44, '1677742409.jpeg', 'Kangaroo Court', 'Capital Cities', 'In a Tidla Wave of Mystery', 2014, 'youtube.com', NULL, '2023-03-02'),
(45, '1677742480.jpeg', 'Tell me your story', 'Justinas Jarutis', 'Justinas Jarutis', 2018, 'youtube.com', NULL, '2023-03-02'),
(46, '1677742561.jpeg', 'Rugpjūtis', 'Justinas Jarutis & Jessica Shy', 'Justinas Jarutis', 2021, 'youtube.com', NULL, '2023-03-02'),
(47, '1677742617.jpg', 'All We Do for Love', 'Benny Sings', 'Art', 2011, 'youtube.com', NULL, '2023-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `song_playlist`
--

CREATE TABLE `song_playlist` (
  `id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song_playlist`
--

INSERT INTO `song_playlist` (`id`, `song_id`, `playlist_id`) VALUES
(5, 7, 28),
(6, 9, 28),
(7, 11, 28),
(8, 12, 28),
(9, 19, 29),
(10, 20, 29),
(13, 2, 31),
(14, 13, 31),
(15, 17, 31),
(16, 19, 32),
(17, 20, 32),
(18, 2, 33),
(19, 11, 33),
(20, 13, 33),
(21, 16, 33),
(22, 17, 33),
(23, 11, 34),
(24, 13, 34),
(25, 16, 34),
(26, 17, 34),
(27, 23, 34),
(28, 24, 34),
(29, 25, 34),
(30, 11, 35),
(31, 13, 35),
(32, 17, 35),
(33, 24, 35),
(34, 25, 35),
(35, 11, 36),
(36, 13, 36),
(37, 14, 36),
(38, 17, 36),
(39, 25, 36),
(40, 11, 37),
(41, 13, 37),
(42, 15, 37),
(43, 44, 38),
(44, 45, 38),
(45, 46, 38),
(46, 41, 39),
(47, 42, 39),
(48, 44, 39),
(49, 46, 39),
(50, 41, 40),
(51, 42, 40),
(52, 43, 40),
(53, 44, 40),
(54, 45, 40),
(55, 46, 40),
(56, 39, 41),
(57, 40, 41);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, '', '', 'arune@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1, '2023-02-15'),
(9, '', 'Jonas12', 'jonas@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 0, '2023-02-20'),
(11, '', 'Aruneb', 'arune@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2023-02-21'),
(13, 'Mantas', 'MantaBlack', 'mantas@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 0, '2023-02-21'),
(14, 'Adomas', 'AdomasSy', 'adomas@gmail.com', '95192c98732387165bf8e396c0f2dad2', 0, '2023-02-22'),
(15, 'Auguste', 'Guste', 'auguste@gmail.com', 'c8758b517083196f05ac29810b924aca', 0, '2023-02-25'),
(16, 'Aidas', 'Aidukas', 'aidas@gmail.com', 'cee8d6b7ce52554fd70354e37bbf44a2', 0, '2023-02-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dainu grojarastis` (`playlist_id`);

--
-- Indexes for table `song_playlist`
--
ALTER TABLE `song_playlist`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `song_playlist`
--
ALTER TABLE `song_playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `dainu grojarastis` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
