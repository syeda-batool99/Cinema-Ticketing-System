-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 05:22 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phonenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `email`, `password`, `phonenumber`) VALUES
(1, 'maria', 'maria@db.com', '12345', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `payment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `bookings`
--
DELIMITER $$
CREATE TRIGGER `delete_booking` BEFORE DELETE ON `bookings` FOR EACH ROW update tickets set availabilty_status='AVAILABLE' where ticket_id=old.ticket_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `status` enum('SCREENING','NOT_SCREENING','BANNED','') NOT NULL,
  `release_date` date DEFAULT NULL,
  `cast` varchar(100) DEFAULT NULL,
  `img_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `language`, `genre`, `status`, `release_date`, `cast`, `img_url`) VALUES
(1, 'Avengers', 'Urdu', 'BollyWood Romance', 'SCREENING', '0000-00-00', 'Salman Khan', 'endgame-poster.jpg'),
(2, 'Ice Age', 'Urdu', 'BollyWood Romance', 'SCREENING', '0000-00-00', 'Salman Khan', 'ice-age.jpg'),
(3, 'Joker', 'Urdu', 'BollyWood Romance', 'SCREENING', '0000-00-00', 'Salman Khan', 'joker-poster.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `seat_no` varchar(20) NOT NULL,
  `screen` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `movie_id` int(20) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `availabilty_status` varchar(20) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `seat_no`, `screen`, `time`, `movie_id`, `price`, `availabilty_status`, `date`) VALUES
(15, 'A1', 1, '12:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(16, 'A2', 1, '12:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(17, 'A3', 1, '12:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(18, 'A4', 1, '12:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(19, 'A5', 1, '12:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(20, 'A1', 2, '4:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(21, 'A2', 2, '4:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(22, 'A3', 2, '4:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(23, 'A4', 2, '4:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(24, 'A5', 2, '4:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(25, 'A1', 3, '8:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(26, 'A2', 3, '8:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(27, 'A3', 3, '8:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(28, 'A4', 3, '8:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(29, 'A5', 3, '8:30 pm', 1, 700, 'AVAILABLE', '2019-12-22'),
(30, 'A1', 1, '4:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(31, 'A2', 1, '4:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(32, 'A3', 1, '4:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(33, 'A4', 1, '4:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(34, 'A5', 1, '4:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(35, 'A1', 2, '8:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(36, 'A2', 2, '8:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(37, 'A3', 2, '8:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(38, 'A4', 2, '8:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(39, 'A5', 2, '8:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(40, 'A1', 3, '12:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(41, 'A2', 3, '12:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(42, 'A3', 3, '12:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(43, 'A4', 3, '12:30 pm', 2, 700, 'AVAILABLE', '2019-12-22'),
(44, 'A5', 3, '12:30 pm', 2, 700, 'AVAILABLE', '2019-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phonenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `phonenumber`) VALUES
(1, 'jaffer', 'abbas', 'beastincarnate121@gmail.com', '12345', 2147483647),
(2, 'Syeda', 'Batool', 'abc@gmail.com', 'asdf', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `ticket_id_foreign_key` (`ticket_id`),
  ADD KEY `user_id_foeign_key` (`user_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id_foreign_key` (`booking_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `movie_id_foreign_key` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `ticket_id_foreign_key` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_foeign_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `booking_id_foreign_key` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `movie_id_foreign_key` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
