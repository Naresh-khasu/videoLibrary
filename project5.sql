-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 04:51 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ram', 'ram'),
(2, 'brad', 'brad');

-- --------------------------------------------------------

--
-- Table structure for table `computer1`
--

CREATE TABLE `computer1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer1`
--

INSERT INTO `computer1` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(23, 'Flat Design ChatBox - HTML & CSS_HD.mp4', 'http://127.0.0.1/project5/recently/teacher/.videos/computer/1/.Flat Design ChatBox - HTML & CSS_HD.mp4', 'ravi', '0000-00-00 00:00:00', 'css'),
(24, '3D Flip Hover Effects - CSS3 Hover Effects - Pure Html CSS 3D Flipping Image - H_HD.mp4', 'http://127.0.0.1/project5/recently/teacher/.videos/computer/1/.3D Flip Hover Effects - CSS3 Hover Effects - Pure Html CSS 3D Flipping Image - H_HD.mp4', 'ravi', '0000-00-00 00:00:00', '3d flip');

-- --------------------------------------------------------

--
-- Table structure for table `computer2`
--

CREATE TABLE `computer2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer2`
--

INSERT INTO `computer2` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, 'akhir tada.mp3', 'localhost/project5/recently/teacher/videos/computer/first/.akhir tada.mp3', '', '0000-00-00 00:00:00', ''),
(2, 'China Company.MP3', 'localhost/project5/recently/teacher/videos/computer/2/.China Company.MP3', '', '0000-00-00 00:00:00', ''),
(3, '2.jpg', 'localhost/project5/recently/teacher/videos/computer/2/.2.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer3`
--

CREATE TABLE `computer3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer3`
--

INSERT INTO `computer3` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, '3.jpg', 'localhost/project5/recently/teacher/videos/computer/3/.3.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer4`
--

CREATE TABLE `computer4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer4`
--

INSERT INTO `computer4` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, '4.jpg', 'localhost/project5/recently/teacher/videos/computer/4/.4.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer5`
--

CREATE TABLE `computer5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer5`
--

INSERT INTO `computer5` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, '5.jpg', 'localhost/project5/recently/teacher/videos/computer/5/.5.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer6`
--

CREATE TABLE `computer6` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer6`
--

INSERT INTO `computer6` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, '6.jpg', 'localhost/project5/recently/teacher/videos/computer/6/.6.jpg', '', '0000-00-00 00:00:00', ''),
(2, '16.jpg', 'localhost/project5/recently/teacher/videos/computer/6/.16.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer7`
--

CREATE TABLE `computer7` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer7`
--

INSERT INTO `computer7` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, '7.jpg', 'localhost/project5/recently/teacher/videos/computer/7/.7.jpg', '', '0000-00-00 00:00:00', ''),
(2, '14.jpg', 'localhost/project5/recently/teacher/videos/computer/7/.14.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer8`
--

CREATE TABLE `computer8` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer8`
--

INSERT INTO `computer8` (`id`, `name`, `url`, `author`, `date`, `keyword`) VALUES
(1, '8.jpg', 'localhost/project5/recently/teacher/videos/computer/8/.8.jpg', '', '0000-00-00 00:00:00', ''),
(2, '20.jpg', 'localhost/project5/recently/teacher/videos/computer/8/.20.jpg', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `vid`, `question`, `reply`) VALUES
(2, 8, 'link?', 'reply new'),
(3, 5, 'question', 'animation'),
(4, 5, 'what is this', 'this is hamburg'),
(5, 5, 'hamburg', 'this is hamburg'),
(6, 5, 'what is html', 'this is html');

-- --------------------------------------------------------

--
-- Table structure for table `student_accounts`
--

CREATE TABLE `student_accounts` (
  `registration` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `batch` year(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dp` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`registration`, `fname`, `lname`, `faculty`, `batch`, `username`, `password`, `dp`) VALUES
(10002, 'reshma', 'gurung', 'civil', 2012, 'reshma', 'a66cfd3d771703664d7ba768b8a7f835', ''),
(20005, 'sangen', 'rai', 'computer', 2015, 'sangen', '0fedd5ad7e7f1bd88e274469cccc0bda', ''),
(50008, 'nikesh', 'balami', '', 0000, '', '', ''),
(50009, 'yuhanna', 'kapali', 'computer', 2015, 'yuhanna', 'a1f0187d51e4cfe06599809d1fe75821', ''),
(56474, 'naresh', 'naresh', 'civil', 2011, 'naresh', '7cb4ffbb2635356600af00166decc350', ''),
(500010, 'sunil', 'pathak', '', 0000, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_dp`
--

CREATE TABLE `st_dp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_accounts`
--

CREATE TABLE `teacher_accounts` (
  `teacherId` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_accounts`
--

INSERT INTO `teacher_accounts` (`teacherId`, `fname`, `lname`, `username`, `password`, `dp`) VALUES
(5004, 'jack', 'smith', 'jack', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', ''),
(10005, 'sunil', 'pathak', 'sunil', 'b0b86080c976aa7651bffe0801644d74', ''),
(40009, 'sangen', 'sangen', '', '', ''),
(423424, 'ravi', 'ravi', 'ravi', '63dd3e154ca6d948fc380fa576343ba6', 'video-library-logo-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `author`, `keyword`, `faculty`, `sem`, `question`, `reply`) VALUES
(5, '(3) Hamburger Icon Animation - HTML & CSS - YouTube.MP4', 'ravi', 'hamburg', 'computer', '1', '', ''),
(6, 'Navigation Hover Effect - YouTube.MP4', 'ravi', 'navigation', 'computer', '6', '', ''),
(8, '(3) Cool Link Hover Effect - HTML & CSS - YouTube.MP4', 'jack', 'link', 'computer', '2', '', ''),
(9, '(3) 10 Stunning CSS 3D Effect You Must See - YouTube.MP4', 'ravi', 'stunning', 'computer', '4', '', ''),
(10, '(3) Custom HTML5 Video Player - #JavaScript30 11_30 - YouTube.MP4', 'ravi', 'html', 'computer', '3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `videotest`
--

CREATE TABLE `videotest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videotest`
--

INSERT INTO `videotest` (`id`, `name`, `url`) VALUES
(1, '0', '0'),
(2, '0', '0'),
(3, '1', '0'),
(4, '0', '0'),
(5, 'Baaghi_2016_-_Sab_Tera_(mp3.pm).mp3', ''),
(6, 'Folder.jpg', ''),
(7, 'AlbumArtSmall.jpg', 'localhost/project5/MyFiles/.AlbumArtSmall.jpg'),
(8, 'Aashu jhardin ma.mp3', 'localhost/project5/MyFiles/.Aashu jhardin ma.mp3'),
(9, 'akhir tada.mp3', 'localhost/project5/recently/teacher/videos/.akhir tada.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer1`
--
ALTER TABLE `computer1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer2`
--
ALTER TABLE `computer2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer3`
--
ALTER TABLE `computer3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer4`
--
ALTER TABLE `computer4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer5`
--
ALTER TABLE `computer5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer6`
--
ALTER TABLE `computer6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer7`
--
ALTER TABLE `computer7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer8`
--
ALTER TABLE `computer8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD PRIMARY KEY (`registration`);

--
-- Indexes for table `st_dp`
--
ALTER TABLE `st_dp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_accounts`
--
ALTER TABLE `teacher_accounts`
  ADD PRIMARY KEY (`teacherId`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videotest`
--
ALTER TABLE `videotest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computer1`
--
ALTER TABLE `computer1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `computer2`
--
ALTER TABLE `computer2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `computer3`
--
ALTER TABLE `computer3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `computer4`
--
ALTER TABLE `computer4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `computer5`
--
ALTER TABLE `computer5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `computer6`
--
ALTER TABLE `computer6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computer7`
--
ALTER TABLE `computer7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computer8`
--
ALTER TABLE `computer8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `st_dp`
--
ALTER TABLE `st_dp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `videotest`
--
ALTER TABLE `videotest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
