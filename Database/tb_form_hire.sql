-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_personprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_hire`
--

CREATE TABLE `tb_form_hire` (
  `Hire_ID` int(255) NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `subject_hire` text NOT NULL,
  `message_hire` text NOT NULL,
  `date_hire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_form_hire`
--

INSERT INTO `tb_form_hire` (`Hire_ID`, `name_client`, `email`, `phone_number`, `subject_hire`, `message_hire`, `date_hire`) VALUES
(1, 'Ananda Rauf Maududi', 'anandaraufm@gmail.com', '083879627956', 'Test Database', 'Test kirim', '0000-00-00 00:00:00'),
(2, 'Ananda Rauf Maududi', 'anandarauf2020@gmail.com', '083879627956', 'Test Kontak', 'Testing', '2022-06-21 21:04:56'),
(3, 'Ananda Rauf Maududi', 'anandarauf02@gmail.com', '083879627956', 'Testing kirim', 'Testing kirim', '2022-06-21 21:20:12'),
(4, 'Ananda Rauf Maududi', 'anandaraufdev@gmail.com', '083879627956', 'Test kirim', 'Test kirim', '2022-06-21 21:23:43'),
(5, 'Ananda Rauf Maududi', 'anandaraufm@gmail.com', '083879627956', 'Testing kirim kontak ', 'Test kontak', '2022-06-21 21:24:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_form_hire`
--
ALTER TABLE `tb_form_hire`
  ADD PRIMARY KEY (`Hire_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_form_hire`
--
ALTER TABLE `tb_form_hire`
  MODIFY `Hire_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
