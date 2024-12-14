-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 07:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_files`
--

CREATE TABLE `case_files` (
  `id` int(11) NOT NULL,
  `fir_number` varchar(50) NOT NULL,
  `crime_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fir_details` text NOT NULL,
  `case_doc` varchar(50) NOT NULL,
  `station_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `case_files`
--

INSERT INTO `case_files` (`id`, `fir_number`, `crime_type`, `status`, `fir_details`, `case_doc`, `station_id`) VALUES
(10, 'FIR123420230224103344', 'phishing', 'not started', 'this is a new case ', 'sivaram.pdf', '1234'),
(11, 'FIR123420230224104905', 'distributing child pornography', 'not started', 'he is the teeorist', 'jail.png', '1234'),
(12, 'FIR123420230224113015', 'Online Business Fraud', 'quaterly completed', 'this work is done in delhi', 'clipart.jpg', '1234'),
(13, 'FIR432120230224113248', 'identity theft', 'halfly completed', 'sdasds', 'people-register-online-registration-sign-up-user-i', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `cimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `name`, `ctype`, `cimage`) VALUES
(5, 'MUJTABA RAZA', 'Online Job Fraud', 'MUJTABA RAZA.png'),
(6, 'HOSSEIN PARVAR', 'identity theft', 'HOSSEIN PARVAR.PNG'),
(7, 'ROOZBEH SABAHI', 'Unauthorized access', 'ROOZBEH SABAHI.PNG'),
(8, 'JAMAL SAEED ABDUL RAHIM', 'hacking', 'abdulla.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `file_request`
--

CREATE TABLE `file_request` (
  `id` int(11) NOT NULL,
  `station_id` varchar(11) NOT NULL,
  `fir_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `file_request`
--

INSERT INTO `file_request` (`id`, `station_id`, `fir_id`, `status`) VALUES
(2, '621215R1', 1, 1),
(3, '1234', 1, 0),
(4, '4321', 2, 2),
(5, '4321', 3, 1),
(6, '1234', 8, 1),
(7, '1234', 6, 1),
(8, '1234', 7, 1),
(9, '4321', 10, 2),
(10, '4321', 4, 1),
(11, '4321', 1, 0),
(12, '4321', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `upload_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`id`, `sender`, `msg`, `upload_at`) VALUES
(1, '621207R1', 'hii', '2019-02-12 11:58:32'),
(2, '621207R1', 'my second msg', '2019-02-12 11:58:51'),
(3, '621215R1', 'my first reply', '2019-02-12 12:21:16'),
(4, '621215R1', 'r u got it ', '2019-02-12 12:21:41'),
(5, '1234', 'ertretertret', '2023-02-11 16:45:02'),
(6, '4321', 'what about tnagar case?', '2023-02-11 16:55:23'),
(7, '1234', 'hello', '2023-02-18 11:45:46'),
(8, '4321', 'hi', '2023-02-24 10:38:39'),
(9, '4321', 'hello', '2023-02-24 10:38:51'),
(10, '4321', 'i want the recent cyber criminals datas now', '2023-02-24 10:39:33'),
(11, '4321', 'ok', '2023-02-24 10:39:47'),
(12, '4321', 'hi', '2023-02-24 10:40:32'),
(13, '4321', 'hello', '2023-02-24 10:40:45'),
(14, '1234', 'what the case is this', '2023-02-24 10:42:54'),
(15, '1234', 'i dont know', '2023-02-24 10:43:37'),
(16, '4321', 'hello', '2023-02-24 10:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `day` varchar(5) NOT NULL,
  `month` varchar(10) NOT NULL,
  `nimage` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `year`, `day`, `month`, `nimage`, `location`, `descr`) VALUES
(3, 'Delhi Police To Partner With Truecaller To Curb Cy', '2023', '12', 'Feb', 'cybercrime.jpg', 'Delhi', 'The Delhi Police is all set to sign an MoU with caller ID verification platform Truecaller to help the public identify verified numbers and protect themselves from cyber frauds and scams relating to impersonation in the name of government officials'),
(5, 'NHRC Chief Calls for Strict Laws for Unlawful Inte', '2022', '9', 'May', 'cyber.PNG', 'bengalore', 'National Human Rights Commission (NHRC) chairperson Justice (Retd) Arun Kumar Mishra on Thursday called for a stringent law to deal with \"unlawful Internet behaviour and cyber crimes.\" He was speaking after the inauguration of the 25th All India Forensic Science Conference at the National Forensic Sciences University in Gandhinagar.'),
(7, '2 Cyber Thieves Dupe Elderly Man Of Rs 2.67 Crore,', '2022', '16', 'Jun', 'Capture.PNG', 'mumbai', 'The Noida Police has arrested two people, allegedly involved in duping a senior citizen of Rs 2.67 crore on the pretext of renewing his life insurance policy, almost two-and-a-half-year after the case was lodged, officials said on Monday.'),
(8, 'Hackers Using Trojanized macOS Apps to Deploy Evas', '2023', '12', 'Mar', 'tojan.PNG', 'calcutta', 'Jamf Threat Labs, which made the discovery, said the XMRig coin miner was executed as Final Cut Pro, a video editing software from Apple, which contained an unauthorized modification.');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `area` varchar(50) NOT NULL,
  `taluk` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `otp` varchar(5) NOT NULL DEFAULT '0000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`id`, `user_id`, `password`, `phone`, `area`, `taluk`, `dist`, `pincode`, `otp`) VALUES
(1, '1234', '1234', '9789445528', 'kattuputhur', 'thottiyam', 'trichy', '621207', '8525'),
(2, '4321', '4321', '9080183838', 'thottiyam', 'thottiyam', 'trichy', '621215', '5950');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `crime_type` varchar(50) NOT NULL,
  `crime_image` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `crime_details` text NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`id`, `first_name`, `last_name`, `mobile`, `email`, `crime_type`, `crime_image`, `location`, `crime_details`, `updated_at`) VALUES
(4, 'siva', 'raman', '9786576811', 'siva@gmail.com', 'hacking', '9786576811.jpg', 'chennai', 'someone take the control of my mobile phone completely', '2023-02-23 15:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `safety`
--

CREATE TABLE `safety` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `safety`
--

INSERT INTO `safety` (`id`, `message`, `reading_time`) VALUES
(1, 'please avoid to open unknown spam mails,spam mail links ', '2023-03-03 05:35:29'),
(2, 'dont open any unknown links send via whatsapp', '2023-03-04 06:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `address`) VALUES
(1, 'Naveen', 'T', '9789445528', 'naveen@fabsys.in', '1234', 'NO.57, PMG Complex, S Usman Road, Asoka Nagar, T Nagar, Chennai, Tamil Nadu 600017.'),
(2, 'soundh', 'p', '9876543210', 'soundh@gmail.com', '123', 'chennai'),
(3, 'venkat', 'krishna', '6369403084', 'venkat@gmail.com', '1234', 'chennai'),
(4, 'vaishu', 's', '9715522775', 'vaishu@gmail.com', '1234', 'chennai'),
(5, 'sangeetha', 'raj', '8685876882', 'sangeetha@gmail.com', '123', 'chennai\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_crime`
--

CREATE TABLE `user_crime` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `crime_type` varchar(50) NOT NULL,
  `crime_image` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `solution` varchar(200) NOT NULL DEFAULT 'nothing',
  `location` varchar(50) NOT NULL,
  `crime_details` text NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_crime`
--

INSERT INTO `user_crime` (`id`, `user_id`, `crime_type`, `crime_image`, `status`, `solution`, `location`, `crime_details`, `updated_at`) VALUES
(6, 5, 'hacking', 'sangeetha@gmail.com805.jpg', 'processing', '', 'chennai', 'my laptop was hacked by someone', '2023-02-23 17:18:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_files`
--
ALTER TABLE `case_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_request`
--
ALTER TABLE `file_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `safety`
--
ALTER TABLE `safety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_crime`
--
ALTER TABLE `user_crime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_files`
--
ALTER TABLE `case_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `file_request`
--
ALTER TABLE `file_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `police_station`
--
ALTER TABLE `police_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `safety`
--
ALTER TABLE `safety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_crime`
--
ALTER TABLE `user_crime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
