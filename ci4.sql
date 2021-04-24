-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 06:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-04-23-094205', 'App\\Database\\Migrations\\UsersTable', 'default', 'App', 1619171404, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `nis`, `email`, `password`, `role`) VALUES
(1, 'Administrator', 0, 'admin@gmail.com', '$2y$10$0p.KHY4jBjdKcpZNUiSIouazQvrQyDAld3DrpP/dlMnGadCK5o1Qy', 'admin'),
(2, 'Lisda Widiastuti', 201403080, 'lisda.ltt@gmail.com', '$2y$10$NkoPc0YsTWPD7gcgjNh5vu8DEDfkeFlY0EBi.T6OEt25lNh7AMXKW', 'siswa'),
(3, 'sheena', 4321, 'sheena@gmail.com', '$2y$10$kWev1fpRxHEE96DLpu5KE.DMMbngJWbDKetgIotFJLb0M5Gwdpi3q', 'siswa'),
(5, 'rosid', 9090, 'rosid@gmail.com', '$2y$10$KF9hTPQjWDoxrNORn8gr4e2co4nCXRIfdQ4LS0CEgPEFTJw57Qzbe', 'siswa'),
(6, 'ibu', 6789, 'ibu@gmail.com', '$2y$10$VNRxkBBec0duxWP3CXrTB.YVjPzf8di6aL03.BSgiPOqrQo.SqEm2', 'siswa'),
(7, 'Lisda Widiastuti', 0, 'lisda.ltt@bsi.ac.id', '$2y$10$cwCNeKPPmJslNroymcZ2Te41UlvaMFSVmO86OU6igiJjlmp0eeXyS', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
