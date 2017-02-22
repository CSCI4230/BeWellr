-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 01:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bewellr`
--

-- --------------------------------------------------------

--
-- Table structure for table `preassessment`
--

CREATE TABLE `preassessment` (
  `questionid` int(200) NOT NULL,
  `question` text NOT NULL,
  `student` int(1) NOT NULL,
  `worker` int(1) NOT NULL,
  `retired` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preassessment`
--

INSERT INTO `preassessment` (`questionid`, `question`, `student`, `worker`, `retired`) VALUES
(1, 'I treat difficult situations as possible opportunities.', 1, 1, 1),
(2, 'My schoolwork prepares me to do important work.', 1, 0, 0),
(3, 'What I do at work is important.', 0, 1, 0),
(4, 'I support laws that protect our environment', 1, 1, 1),
(5, 'I make an effort to stay in contact with my family/friends.', 1, 1, 1),
(6, 'I expend moderate amounts of energy when I am physically active', 1, 1, 1),
(7, 'I consult a higher power for answers.', 1, 1, 1),
(8, 'I manage life’s situations well.', 1, 1, 1),
(9, 'I enjoy the schoolwork I do.', 1, 0, 0),
(10, 'I enjoy the work I do.', 0, 1, 0),
(11, 'I recycle.', 1, 1, 1),
(12, 'I have beneficial communication with family/friends.', 1, 1, 1),
(13, 'I work at improving my verbal skills/vocabulary', 1, 1, 1),
(14, 'I incorporate physical activity into my day.', 1, 1, 1),
(15, 'I am involved in religious activities.', 1, 1, 1),
(16, 'I cope well with problems I experience in life.', 1, 1, 1),
(17, 'I am inspired by the work I do at school.', 1, 0, 0),
(18, 'I am inspired by what I do at work.', 0, 1, 0),
(19, 'I support political candidates that favor healthy environment policy', 1, 1, 1),
(20, 'I have pleasant interactions with family and friends.', 1, 1, 1),
(21, 'I work at improving my writing skills.', 1, 1, 1),
(22, 'I eat whole (unprocessed) foods.', 1, 1, 1),
(23, 'I manage stressful situations well.', 1, 1, 1),
(24, 'My schoolwork is satisfying.', 1, 0, 0),
(25, 'The work I do is satisfying.', 0, 1, 0),
(26, 'I display affection toward loved ones', 1, 1, 1),
(27, 'I read.', 1, 0, 0),
(28, 'I develop my spirituality', 0, 1, 0),
(29, 'I make healthy food choices', 1, 1, 1),
(30, 'I pray/talk to a higher power.', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preassessment`
--
ALTER TABLE `preassessment`
  ADD PRIMARY KEY (`questionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preassessment`
--
ALTER TABLE `preassessment`
  MODIFY `questionid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
