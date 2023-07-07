-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 06:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_registerations`
--

CREATE TABLE `activity_registerations` (
  `id` int(50) NOT NULL,
  `activityTitle` varchar(50) NOT NULL,
  `activityType` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_registerations`
--

INSERT INTO `activity_registerations` (`id`, `activityTitle`, `activityType`, `fname`, `lname`, `email`) VALUES
(7, 'HandBall/', 'Group_Activities', 'jon', 'snow', 'jon@gmail.com'),
(8, 'Surfing/', 'Individual_Activites', 'steve', 'rogers', 'steve@gmail.com'),
(9, 'Surfing/', 'Individual_Activites', 'Jake', 'gyllenhal', 'jake@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `adminrecord`
--

CREATE TABLE `adminrecord` (
  `id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminrecord`
--

INSERT INTO `adminrecord` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `group_posts`
--

CREATE TABLE `group_posts` (
  `id` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_posts`
--

INSERT INTO `group_posts` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'Hand Ball', 'Keeps us Fit', 'https://spunout.ie/wp-content/uploads/elementor/thumbs/shutterstock_100982254-1-pws9oyot0lnaqt1caxm43nsqazrrntuqkmurlifb94.jpg'),
(3, 'Soccer/', 'Keeps the legs strong', 'https://img.freepik.com/free-photo/male-soccer-football-player-training-action-isolated-gradient-studio-neon-light_155003-15990.jpg?w=2000'),
(4, 'Base Ball', 'Great Sport', 'https://static01.nyt.com/images/2020/08/24/sports/24mlb-kepner-1/merlin_176084667_69b1099b-0b7e-41ce-bfdf-e407899f10dc-articleLarge.jpg?quality=75&auto=webp&disable=upscale'),
(5, 'Basket Ball', 'Great Sport', 'https://i.guim.co.uk/img/media/9a137bb107eb9df91aa6054a60d4ad8ce7783f60/0_55_4585_2752/master/4585.jpg?width=620&quality=85&auto=format&fit=max&s=8074e6bdbb132fbbd57cea1f53d4058f');

-- --------------------------------------------------------

--
-- Table structure for table `individual_posts`
--

CREATE TABLE `individual_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individual_posts`
--

INSERT INTO `individual_posts` (`id`, `title`, `description`, `image_url`) VALUES
(4, 'Running', 'Running helps to increase stamina', 'https://img.freepik.com/premium-photo/man-with-runner-street-be-running-exercise_34237-256.jpg?w=200'),
(6, 'Surfing', 'Surfing is a great activity', 'https://i1.adis.ws/i/canon/canon-pro-ben-thouard-surfing-eos-1d-x-mark-iii-1-1140x760?$og-image$'),
(7, 'Workout/', 'We have Professional Trainers', 'https://cdn.lifehack.org/wp-content/uploads/2018/03/workout-routines-for-men-1024x768.jpeg'),
(9, 'Golf/', 'Great Sport', 'https://golfpannonia.hu/cmd-media/2019/01/first-try-golf-oktatasi-program-pannonia-golf-club.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registerations`
--

CREATE TABLE `registerations` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerations`
--

INSERT INTO `registerations` (`id`, `fname`, `lname`, `email`, `phone`) VALUES
(1, 'jon', 'snow', 'jon@gmail.com', '35435453'),
(2, 'Rob', 'stark', 'rob5@gmail.com', '55565899'),
(7, 'haris', 'ada', 'wq@gmail.com', '87379'),
(8, 'steve', 'rogers', 'steve@gmail.com', '9876372'),
(9, 'Jake', 'gyllenhal', 'jake@gmail.com', '983774');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_registerations`
--
ALTER TABLE `activity_registerations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminrecord`
--
ALTER TABLE `adminrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_posts`
--
ALTER TABLE `group_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_posts`
--
ALTER TABLE `individual_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerations`
--
ALTER TABLE `registerations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_registerations`
--
ALTER TABLE `activity_registerations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adminrecord`
--
ALTER TABLE `adminrecord`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group_posts`
--
ALTER TABLE `group_posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `individual_posts`
--
ALTER TABLE `individual_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registerations`
--
ALTER TABLE `registerations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
