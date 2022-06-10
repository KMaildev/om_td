-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2022 at 08:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `om_td`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `photo`) VALUES
(1, 'uploads/files/b3vo02dml_61fau.jpg,uploads/files/74d8sqg1b3_w0ip.jpg,uploads/files/ds4eckivzul2ha0.jpg,uploads/files/8bvu1fgar2thzc0.jpg,uploads/files/43pvg0eqw_x8kjn.jpg,uploads/files/xd29sna8becw0o5.jpg,uploads/files/3yearx4dbw6sojt.jpg,uploads/files/3g67c0uqdbas4kv.jpg,uploads/files/hl9verzdsup4_f1.jpg,uploads/files/49cuzqgoax7t3jv.jpg,uploads/files/57_z04i8dbukpgq.jpg,uploads/files/iytr5dxl2kcezf0.jpg,uploads/files/2c08uqgyt4k9ef7.jpg,uploads/files/nio2l53rkxf4m9z.jpg,uploads/files/r8vesdcu537fylg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Thailand'),
(3, 'Malaysia'),
(4, 'Singapore'),
(5, 'Japan'),
(10, 'Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `cv_file` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `name`, `phone`, `cv_file`, `upload_date`) VALUES
(1, 'asdf', 'sadf', 'http://localhost/projects/om_td/uploads/34a1f857cbe3ce0d726362fa0734c147.docx', '2022/06/10');

-- --------------------------------------------------------

--
-- Table structure for table `employer_form`
--

CREATE TABLE `employer_form` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_category` varchar(255) DEFAULT NULL,
  `age_limit` varchar(255) DEFAULT NULL,
  `educational_requirement` varchar(255) DEFAULT NULL,
  `working_experience_requirement` varchar(255) DEFAULT NULL,
  `other_additional_requirement` varchar(255) DEFAULT NULL,
  `estimate_salary_offer` varchar(255) DEFAULT NULL,
  `other_allowance` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `interview_type` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_form`
--

INSERT INTO `employer_form` (`id`, `company_name`, `company_type`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `date`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'sad', 'asdf', 'asd@gmial.com', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asf', 'afs', 'afs', 'as', '2022/06/10');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `inquiry_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nrc_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `skill` text NOT NULL,
  `language` text DEFAULT NULL,
  `current_address` varchar(255) NOT NULL,
  `passport` text DEFAULT NULL,
  `expire_date` text DEFAULT NULL,
  `registration_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oversea_jobs`
--

CREATE TABLE `oversea_jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oversea_jobs`
--

INSERT INTO `oversea_jobs` (`id`, `name`, `description`, `country_id`) VALUES
(1, 'Hotel / Restaurant & Service', '<div style=\"text-align: justify;\"><font color=\"#202124\"><span style=\"font-size: 15px;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span></font></div>', 1),
(2, 'Electronic Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(3, 'Furniture Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(4, 'Super Market', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(5, 'Restaurants', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(6, 'Agriculture', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(7, 'Rubber Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(8, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(9, 'Restaurants', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(10, 'Hotel', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(11, 'Airport Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(12, 'Dubai Dry Dock Yard', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(13, 'Office Staff', '<div style=\"text-align: justify;\"><font color=\"#202124\"><span style=\"font-size: 15px;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span></font></div>', 3),
(14, 'Electronic Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(15, 'Furniture Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(16, 'Super Market', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(17, 'Restaurants', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(18, 'Agriculture', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(19, 'Rubber Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(20, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(21, 'Engineering Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(22, 'Building Materials Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(23, 'Car Services (Hyundai, Mercedes Benz, Nissan, Toyota ...etc...', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(24, 'Aluminium, Metal, Goldsmith & Glass', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(25, 'Steel Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(26, 'Hyper/ Super/ Mini market', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(27, 'Electrical / Electronic Products', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(28, 'Engineering', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(29, 'Construction / Construction Material Products', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(30, 'Office Staff', '<div style=\"text-align: justify;\"><font color=\"#202124\"><span style=\"font-size: 15px;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span></font></div>', 5),
(31, 'Electronic Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(32, 'Furniture Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(33, 'Restaurants', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(34, 'Agriculture', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(35, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(36, 'Engineering Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(37, 'Car Services (Hyundai, Mercedes Benz, Nissan, Toyota ...etc...', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(39, 'Garment / Sewing Factory Products', '<font color=\"#202124\"><span style=\"font-size: 15px;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span></font>', 1),
(40, 'Timber Mill/ Furniture Products', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(41, 'Live Stock/ Animal Feeds', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(43, 'Shipping', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 10),
(46, 'IT', '<span style=\"color: rgb(111, 111, 111); font-family: arial, helvetica, sans-serif, verdana, &quot;Open Sans&quot;; font-size: 16px; text-align: center; background-color: rgb(248, 221, 204);\">労働者の人権が尊重され、従業員が尊厳と敬意を持って扱われる職場環境を提供すること。</span>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2022-01-25 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$lVnOwXBFb8GZTrzI9KvY1OlcODngr/ujvpCPsEXb4ngiY5VaowEMu', NULL, NULL, '2022-04-26 23:53:12', 'c4d20456a09ea9db9fb19023f86b4fe1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_form`
--
ALTER TABLE `employer_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oversea_jobs`
--
ALTER TABLE `oversea_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employer_form`
--
ALTER TABLE `employer_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oversea_jobs`
--
ALTER TABLE `oversea_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
