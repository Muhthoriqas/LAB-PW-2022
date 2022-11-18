-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 01:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Blackwing', 'Nevalley@fs.co', '$2y$10$N8DTYwwQvW2zbgC.9KLCRewfekj7xElzYe6WbxW6rf1/r1yshFEIm'),
(2, 'Apin', 'Ney@fs.co', '$2y$10$wCfTqFB2Sw7oCsMen1zGnu0oJ40FQkpGLoqq6W9zJ2MNjo41aaHwy'),
(3, 'I pintar', 'Newqewy@fs.co', '$2y$10$ek//uXTu33SPQEyPHB8cV.mwVu89whdFgwkn78iIKF/XV0n1QepHK'),
(4, 'Upil', 'Naninuna@ad.co', '$2y$10$C50k8RWStJGK265oKaz.C.ssxkhzDCs5F0Kom0s33dCU4UbfkYZnW'),
(5, 'Jopin', 'Nauna@ad.co', '$2y$10$EjIikBdLRnhpmXeMr9EeD.OckWkPxaRMk.fnQ7j51ALH64FdMuik6'),
(6, 'Dapid', 'dapidd@jo.co', '$2y$10$UtWklYk8x5s3oOLOJZKiDuACQxcBiJoB2aSEGefBTV530CB1pSdP.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
