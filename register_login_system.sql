-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 09:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'mr', 'Dejan ', 'Zivkovic', 'dexi@gmail.com', '$2y$10$D/D6PIgfEAQbXe3GZMXNEu.bqwWXf8TCSsb1ADNfq6o2He3/xR29u', '2021-10-06 11:46:14'),
(4, 'mr', 'Melanija', 'Petrovic', 'melani@gmail.com', '$2y$10$jz1sloxMdZu0CjVM3DoF.u17wEaoe28wTBSTbKnXrmF0lndbhHwOu', '2021-10-06 12:16:06'),
(5, 'mr', 'Milosija', 'Miljakovic', 'milosija@gmail.com', '$2y$10$q9oA4TsGw4NeczgsyXpkouvFkAsgWNFsNmaqUS8uHxOJe/zqN2LoO', '2021-10-06 12:21:37'),
(6, 'mr', 'Boban', 'Bogdanovic', 'bobanarsenal87@gmail.com', '$2y$10$7jfC42Y.ZsamrgZJ2MQyGuG6Nmo404pooHOUdhZUXradiY.gf1Eiq', '2021-10-06 12:23:32'),
(7, 'mr', 'Milica', 'Mirkovic', 'milica@gmail.com', '$2y$10$7km88vHSkGA7ruaGoI0X.O5pEyjiStLWC6t7Bu8MLLX.f3hc9EUv2', '2021-10-06 12:24:47'),
(8, 'mr', 'Mina', 'Milosevic', 'mina@gmail.com', '$2y$10$8qRVkWD4xN1u/DKedvBxm.ouEpECLi3kJcoFknAibtKvAxNelJK.q', '2021-10-06 12:26:20'),
(9, 'mr', 'Miroslav', 'Jotic', 'mire66@gmail.com', '$2y$10$Up/avPmhb.2NyhKEDl62o.H.4.bsZsflkH/w/GiRHhadq/HN1Mcx6', '2021-10-06 12:52:24'),
(10, 'mr', 'Ivona', 'Ivezic', 'ivona@gmail.com', '$2y$10$I8dn437jw6mTy2LxdobS9.JbBR0ikyJ9IkOrPhLb2EC6brPTwFvrS', '2021-10-06 19:26:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
