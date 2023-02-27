-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2023 at 12:16 AM
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
(2, 'Chill', '9', '2023-02-20'),
(3, 'Dance', '9', '2023-02-20'),
(5, 'Lietuviska', '13', '2023-02-20'),
(7, 'Best Top', '11', '2023-02-20'),
(12, 'A.Mamontovas', '13', '2023-02-21'),
(25, 'Vasara', '11', '2023-02-22'),
(27, 'Atostogos', '11', '2023-02-22'),
(28, 'Vasarotojai', '14', '2023-02-22'),
(32, 'Mamontovas', '11', '2023-02-25'),
(33, 'Mano', '15', '2023-02-25');

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
(2, '', 'Kill Bill', 'SZA', 'SOS', 2022, 'www.youtube.com', 25, '2023-02-21'),
(7, '', 'Big Brown Eyes', 'Benny Sings', 'Art', 2011, 'youtube.com', 2, '2023-02-21'),
(11, '', 'Daydream', 'Lily Meola', 'Daydream', 2021, 'youtube.com', 7, '2023-02-22'),
(13, '', 'Running Up That Hill', 'Kate Bush', 'Hounds of Love', 1985, 'youtube.com', 27, '2023-02-22'),
(14, '', 'Good as Hell', 'Lizzo', 'Coconut Oil-EP', 2016, 'youtube.com', 3, '2023-02-22'),
(15, '', 'Gyvenimas', 'FC Baseball', 'Vorai', 2021, 'youtube.com', 5, '2023-02-22'),
(16, '', 'Mūzos', 'FC Basball', 'Vorai', 2016, 'Youtube.com', 5, '2023-02-22'),
(17, '', 'Cherry on Top', 'Lou Hayter', 'Private Sunshine', 2021, 'youtube.com', 27, '2023-02-22'),
(18, '', 'Drinkee', 'Sofi Tukker', 'Soft animals', 2016, 'youtube.com', 3, '2023-02-22'),
(19, '', 'Vėjas', 'Andrius Mamontovas', 'Elektromechaninis', 2020, 'youtube.com', 12, '2023-02-22'),
(20, '', 'Ar tu matai?', 'Andrius Mamontovas', 'Elektromechaninis', 2021, 'youtube.com', 12, '2023-02-22');

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
(4, 2, 28),
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
(22, 17, 33);

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
(15, 'Auguste', 'Guste', 'auguste@gmail.com', 'c8758b517083196f05ac29810b924aca', 1, '2023-02-25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `song_playlist`
--
ALTER TABLE `song_playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `dainu grojarastis` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
