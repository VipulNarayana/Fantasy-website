-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2015 at 09:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `breaking news`
--

CREATE TABLE IF NOT EXISTS `breaking news` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(500) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `breaking news`
--

INSERT INTO `breaking news` (`SNo`, `News`) VALUES
(1, 'Russell blitz leads shaky KKR to win'),
(2, 'All-round Duminy sees Daredevils home'),
(3, 'Unbeaten teams aim to end each other''s run'),
(4, 'CSK make mockery of 184 chase'),
(5, 'The McCullum mystery in the IPL'),
(6, 'Royals clinch fourth win after close chase');

-- --------------------------------------------------------

--
-- Table structure for table `choosen`
--

CREATE TABLE IF NOT EXISTS `choosen` (
  `Name` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Role` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choosen`
--

INSERT INTO `choosen` (`Name`, `Price`, `Role`, `Value`) VALUES
('Abu Nechim', 6, 1, 0),
('Ashish Nehra', 8, 0, 1),
('Baba Aparajith', 6, 0, 0),
('Brendon McCullum', 10, 0, 2),
('Dwayne Bravo', 10, 0, 2),
('Francois du Plessis', 9, 0, 2),
('Matt Henry', 7, 0, 2),
('Mithun Manhas', 7, 0, 0),
('MS Dhoni', 10, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `csk`
--

CREATE TABLE IF NOT EXISTS `csk` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csk`
--

INSERT INTO `csk` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(24, 2, 'Andrew Tye', 0, 0, 1, 7, 0),
(21, 0, 'Ankush Bains', 0, 0, 0, 6, 0),
(2, 1, 'Ashish Nehra', 0, 0, 0, 8, 0),
(3, 0, 'Baba Aparajith', 0, 0, 0, 6, 0),
(4, 2, 'Brendon McCullum', 0, 0, 0, 10, 0),
(5, 2, 'Dwayne Bravo', 0, 0, 0, 10, 0),
(6, 2, 'Dwayne Smith', 0, 0, 0, 10, 0),
(25, 0, 'Eklavya Dwivedi', 0, 0, 2, 6, 0),
(7, 2, 'Francois du Plessis', 0, 0, 0, 9, 0),
(22, 1, 'Irfan Pathan', 0, 0, 0, 8, 0),
(8, 1, 'Ishwar Pandey', 0, 0, 0, 8, 0),
(20, 2, 'Kyle Abbott', 0, 0, 0, 8, 0),
(9, 2, 'Matt Henry', 0, 0, 0, 7, 0),
(18, 2, 'Michael Hussey', 0, 0, 0, 9, 0),
(10, 0, 'Mithun Manhas', 0, 0, 0, 7, 0),
(11, 1, 'Mohit Sharma', 0, 0, 0, 8, 0),
(1, 1, 'MS Dhoni', 0, 0, 0, 10, 0),
(12, 0, 'Pawan Negi', 0, 0, 0, 7, 0),
(23, 0, 'Pratyush Singh', 0, 0, 0, 6, 0),
(19, 0, 'Rahul Sharma', 0, 0, 0, 8, 0),
(13, 1, 'Ravichandran Ashwin', 0, 0, 0, 9, 0),
(14, 1, 'Ravindra Jadeja', 0, 0, 0, 10, 0),
(17, 0, 'Ronit More', 0, 0, 0, 6, 0),
(15, 2, 'Samuel Badree', 0, 0, 0, 8, 0),
(16, 1, 'Suresh Raina', 0, 0, 0, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dd`
--

CREATE TABLE IF NOT EXISTS `dd` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dd`
--

INSERT INTO `dd` (`SNo`, `Value`, `Name`, `Total_points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(33, 2, 'Albie Morkel', 0, 0, 3, 9, 1),
(40, 1, 'Amit Mishra', 0, 0, 1, 9, 1),
(34, 2, 'Angelo Mathews', 0, 0, 3, 10, 1),
(37, 0, 'CM Gautam', 0, 0, 2, 6, 1),
(41, 0, 'Domnic Joseph', 0, 0, 1, 6, 1),
(42, 2, 'Gurinder Sandhu', 0, 0, 1, 8, 1),
(43, 2, 'Imran Tahir', 0, 0, 1, 8, 1),
(44, 1, 'Jaidev Unadkat', 0, 0, 1, 7, 1),
(45, 0, 'Jayant Yadav', 0, 0, 1, 6, 1),
(32, 2, 'JP Duminy', 0, 0, 3, 10, 1),
(26, 1, 'Kedar Jafhv', 0, 0, 0, 7, 1),
(46, 0, 'KK Jiyaz', 0, 0, 1, 6, 1),
(38, 0, 'Kona Srikar Bharat', 0, 0, 2, 6, 1),
(27, 1, 'Manoj Tiwary', 0, 0, 0, 8, 1),
(35, 2, 'Marcus Stoinis', 0, 0, 3, 8, 1),
(28, 0, 'Mayank Agarwal', 0, 0, 0, 7, 1),
(47, 1, 'Mohammed Shami', 0, 0, 1, 9, 1),
(48, 2, 'Nathan Counter-Nile', 0, 0, 1, 9, 1),
(39, 2, 'Quinton de Kock', 0, 0, 2, 9, 1),
(29, 1, 'Saurabh Tiwary', 0, 0, 0, 8, 1),
(30, 0, 'Shreyas Iyer', 0, 0, 0, 6, 1),
(31, 2, 'Travis Head', 0, 0, 1, 8, 1),
(36, 1, 'Yuvraj SIngh', 0, 0, 3, 11, 1),
(49, 1, 'Zaheer Khan', 0, 0, 1, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE IF NOT EXISTS `fixtures` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Team1` varchar(30) NOT NULL,
  `Time` varchar(30) NOT NULL,
  `Team2` varchar(30) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`SNo`, `Team1`, `Time`, `Team2`) VALUES
(1, 'img/6.jpg', '19th apr,4 PM', 'img/0.jpg'),
(2, 'img/5.jpg', '19th apr,8PM', 'img/4.jpg'),
(3, 'img/1.jpg', '20th apr,8PM', 'img/2.jpg'),
(4, 'img/6.jpg', '21st apr,8PM', 'img/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kkr`
--

CREATE TABLE IF NOT EXISTS `kkr` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kkr`
--

INSERT INTO `kkr` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(56, 0, 'Aditya Garhwal', 0, 0, 3, 6, 2),
(57, 2, 'Andre Russell', 0, 0, 3, 8, 2),
(65, 2, 'Brad Hogg', 0, 0, 1, 8, 2),
(50, 2, 'Chris Lynn', 0, 0, 1, 8, 2),
(51, 1, 'Gautam Gambhir', 0, 0, 0, 10, 2),
(58, 2, 'James Neesham', 0, 0, 3, 8, 2),
(64, 0, 'KC Cariappa', 0, 0, 1, 6, 2),
(59, 0, 'Kuldeep Yadav', 0, 0, 3, 8, 2),
(52, 0, 'Manish Pandey', 0, 0, 0, 8, 2),
(63, 2, 'Morne Morkel', 0, 0, 1, 9, 2),
(62, 2, 'Pat Cummins', 0, 0, 1, 9, 2),
(66, 1, 'Piyush Chawla', 0, 0, 3, 9, 2),
(55, 1, 'Ronin Uthappa', 0, 0, 2, 9, 2),
(54, 2, 'Ryan ten Doeschate', 0, 0, 3, 8, 2),
(60, 2, 'Shakib Al Hasan', 0, 0, 3, 10, 2),
(67, 0, 'Sheldon Jackson', 0, 0, 2, 6, 2),
(70, 0, 'Sumit Narwal', 0, 0, 3, 6, 2),
(61, 2, 'Sunil Narine', 0, 0, 1, 11, 2),
(53, 0, 'Suryakumar Yadav', 0, 0, 0, 7, 2),
(69, 0, 'Vaibhav Patel', 0, 0, 3, 6, 2),
(68, 1, 'Yusuf Pathan', 0, 0, 3, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kxip`
--

CREATE TABLE IF NOT EXISTS `kxip` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kxip`
--

INSERT INTO `kxip` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(86, 1, 'Akshar Patel', 0, 0, 3, 9, 3),
(88, 0, 'Anureet Singh', 0, 0, 1, 6, 3),
(89, 2, 'Beuran Hendricks', 0, 0, 1, 7, 3),
(71, 2, 'David Miller', 0, 0, 0, 10, 3),
(72, 2, 'George Bailey', 0, 0, 0, 10, 3),
(78, 2, 'Glenn Maxwell', 0, 0, 3, 11, 3),
(73, 0, 'Gurkeerat Mann Singh', 0, 0, 0, 7, 3),
(79, 0, 'Karanveer Singh', 0, 0, 3, 7, 3),
(74, 0, 'Manan Vohra', 0, 0, 0, 8, 3),
(87, 2, 'Mitchell Johnson', 0, 0, 1, 9, 3),
(75, 1, 'Murali Vijay', 0, 0, 0, 8, 3),
(84, 0, 'Nikhil Shankar Naik', 0, 0, 2, 6, 3),
(90, 1, 'Parvinder Awana', 0, 0, 1, 8, 3),
(80, 0, 'Rishi Dhawan', 0, 0, 3, 8, 3),
(91, 0, 'Sandeep Sharma', 0, 0, 1, 8, 3),
(92, 0, 'Shardul Thakur', 0, 0, 1, 6, 3),
(76, 2, 'Shaun Marsh', 0, 0, 0, 9, 3),
(81, 0, 'Shivam Sharma', 0, 0, 3, 7, 3),
(82, 2, 'Thisara Perera', 0, 0, 3, 9, 3),
(77, 1, 'Virender Sehwag', 0, 0, 0, 10, 3),
(85, 1, 'Wriddhiman Saha', 0, 0, 2, 9, 3),
(83, 0, 'Yogesh Golwalkar', 0, 0, 3, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `S.No` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `screen` varchar(30) NOT NULL,
  PRIMARY KEY (`S.No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`S.No`, `username`, `password`, `email`, `screen`) VALUES
(28, 'harsha', 'harsha', 'harsha@gmail.com', 'harsha'),
(29, 'vipul', 'vipul', 'mnvipul@gmail.com', 'vipul'),
(30, 'kumar', 'kumar', 'kumar@gmail.com', 'kumar');

-- --------------------------------------------------------

--
-- Table structure for table `mi`
--

CREATE TABLE IF NOT EXISTS `mi` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) NOT NULL DEFAULT '4',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mi`
--

INSERT INTO `mi` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(93, 2, 'Aaron Finch', 0, 0, 0, 9, 4),
(111, 1, 'Abhimanyu Mithun', 0, 0, 1, 7, 4),
(106, 0, 'Aditya Tare', 0, 0, 2, 7, 4),
(94, 2, 'Aiden Blizard', 0, 0, 0, 7, 4),
(113, 0, 'Akshay wakare', 0, 0, 1, 6, 4),
(98, 1, 'Ambati Rayudu', 0, 0, 2, 8, 4),
(99, 2, 'Corey Anderson', 0, 0, 3, 9, 4),
(108, 1, 'Harbhajan Singh', 0, 0, 3, 9, 4),
(100, 0, 'Hardik Pandya', 0, 0, 3, 6, 4),
(101, 0, 'J Suchitch', 0, 0, 3, 6, 4),
(109, 0, 'Jaspirit Bumrah', 0, 0, 1, 7, 4),
(110, 2, 'Josh Hazzlewood', 0, 0, 1, 7, 4),
(102, 2, 'Kieron Pollard', 0, 0, 3, 9, 4),
(112, 2, 'Lasith Malinga', 0, 0, 1, 10, 4),
(95, 2, 'Lendl Simmons', 0, 0, 0, 9, 4),
(114, 2, 'Merchant de Lange', 0, 0, 1, 7, 4),
(115, 2, 'Mitchell Mcclenagen', 0, 0, 1, 8, 4),
(103, 0, 'Nitish Rana', 0, 0, 3, 6, 4),
(107, 1, 'Partiv Patel', 0, 0, 2, 7, 4),
(116, 0, 'Pawan Suyal', 0, 0, 1, 7, 4),
(117, 1, 'Pragyan Ojha', 0, 0, 1, 9, 4),
(96, 1, 'Rohit Sharma', 0, 0, 0, 10, 4),
(104, 0, 'Shreyas Gopal', 0, 0, 3, 7, 4),
(105, 0, 'Siddesh Dinesh Lad', 0, 0, 3, 6, 4),
(97, 0, 'Unmukt Chand', 0, 0, 0, 6, 4),
(144, 1, 'Vinay Kumar', 0, 0, 1, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orange cap`
--

CREATE TABLE IF NOT EXISTS `orange cap` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Team` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Runs` int(11) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orange cap`
--

INSERT INTO `orange cap` (`SNo`, `Team`, `Name`, `Runs`) VALUES
(1, 'img/3.jpg', 'George Bailey', 164),
(2, 'img/7.jpg', 'David Warner', 159),
(3, 'img/6.jpg', 'Ajinkya Rahane', 155);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `SNo` int(11) NOT NULL DEFAULT '0',
  `Value` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(35) NOT NULL DEFAULT '',
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL DEFAULT '0',
  `Price` int(11) NOT NULL DEFAULT '0',
  `path` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(93, 2, 'Aaron Finch', 0, 0, 0, 9, 'img/4.jpg'),
(127, 2, 'AB Devilliers', 0, 0, 2, 11, 'img/5.jpg'),
(111, 1, 'Abhimanyu Mithun', 0, 0, 1, 7, 'img/4.jpg'),
(163, 1, 'Abhishek Nayar', 0, 0, 3, 8, 'img/6.jpg'),
(134, 0, 'Abu Nechim', 0, 0, 1, 6, 'img/5.jpg'),
(135, 2, 'Adam Milne', 0, 0, 1, 7, 'img/5.jpg'),
(56, 0, 'Aditya Garhwal', 0, 0, 3, 6, 'img/2.jpg'),
(106, 0, 'Aditya Tare', 0, 0, 2, 7, 'img/4.jpg'),
(94, 2, 'Aiden Blizard', 0, 0, 0, 7, 'img/4.jpg'),
(162, 1, 'Ajinkya Rahane', 0, 0, 0, 10, 'img/6.jpg'),
(86, 1, 'Akshar Patel', 0, 0, 3, 9, 'img/3.jpg'),
(113, 0, 'Akshay wakare', 0, 0, 1, 6, 'img/4.jpg'),
(33, 2, 'Albie Morkel', 0, 0, 3, 9, 'img/1.jpg'),
(98, 1, 'Ambati Rayudu', 0, 0, 2, 8, 'img/4.jpg'),
(40, 1, 'Amit Mishra', 0, 0, 1, 9, 'img/1.jpg'),
(57, 2, 'Andre Russell', 0, 0, 3, 8, 'img/2.jpg'),
(24, 2, 'Andrew Tye', 0, 0, 1, 7, 'img/0.jpg'),
(34, 2, 'Angelo Mathews', 0, 0, 3, 10, 'img/1.jpg'),
(168, 0, 'Ankit Sharma', 0, 0, 1, 7, 'img/6.jpg'),
(21, 0, 'Ankush Bains', 0, 0, 0, 6, 'img/0.jpg'),
(88, 0, 'Anureet Singh', 0, 0, 1, 6, 'img/3.jpg'),
(2, 1, 'Ashish Nehra', 0, 0, 0, 8, 'img/0.jpg'),
(160, 0, 'Ashish Reddy', 0, 0, 1, 7, 'img/7.jpg'),
(136, 1, 'Ashok Dinda', 0, 0, 1, 8, 'img/5.jpg'),
(3, 0, 'Baba Aparajith', 0, 0, 0, 6, 'img/0.jpg'),
(169, 0, 'Barinder Singh', 0, 0, 1, 6, 'img/6.jpg'),
(170, 2, 'Ben Cutting', 0, 0, 1, 7, 'img/6.jpg'),
(89, 2, 'Beuran Hendricks', 0, 0, 1, 7, 'img/3.jpg'),
(159, 1, 'Bhuvneshwar Kumar', 0, 0, 1, 9, 'img/7.jpg'),
(65, 2, 'Brad Hogg', 0, 0, 1, 8, 'img/2.jpg'),
(4, 2, 'Brendon McCullum', 0, 0, 0, 10, 'img/0.jpg'),
(158, 0, 'Chama Milind', 0, 0, 1, 6, 'img/7.jpg'),
(126, 2, 'Chris Gayle', 0, 0, 3, 11, 'img/5.jpg'),
(50, 2, 'Chris Lynn', 0, 0, 1, 8, 'img/2.jpg'),
(167, 2, 'Christopher Morris', 0, 0, 3, 8, 'img/6.jpg'),
(37, 0, 'CM Gautam', 0, 0, 2, 6, 'img/1.jpg'),
(99, 2, 'Corey Anderson', 0, 0, 3, 9, 'img/4.jpg'),
(157, 2, 'Dale Steyn', 0, 0, 1, 10, 'img/7.jpg'),
(129, 2, 'Darren Sammy', 0, 0, 3, 9, 'img/5.jpg'),
(71, 2, 'David Miller', 0, 0, 0, 10, 'img/3.jpg'),
(145, 2, 'David Warner', 0, 0, 0, 10, 'img/7.jpg'),
(130, 2, 'David Wiese', 0, 0, 3, 8, 'img/5.jpg'),
(171, 0, 'Deepak Hooda', 0, 0, 3, 6, 'img/6.jpg'),
(19, 1, 'Dhawal Kulkarni', 0, 0, 1, 8, 'img/6.jpg'),
(132, 1, 'Dinesh Kartik', 0, 0, 2, 9, 'img/5.jpg'),
(172, 0, 'Dinesh Salhunke', 0, 0, 3, 6, 'img/6.jpg'),
(173, 0, 'Dishant Yagnik', 0, 0, 2, 7, 'img/6.jpg'),
(41, 0, 'Domnic Joseph', 0, 0, 1, 6, 'img/1.jpg'),
(5, 2, 'Dwayne Bravo', 0, 0, 0, 10, 'img/0.jpg'),
(6, 2, 'Dwayne Smith', 0, 0, 0, 10, 'img/0.jpg'),
(25, 0, 'Eklavya Dwivedi', 0, 0, 2, 6, 'img/0.jpg'),
(146, 2, 'Eoin Morgan', 0, 0, 0, 9, 'img/7.jpg'),
(7, 2, 'Francois du Plessis', 0, 0, 0, 9, 'img/0.jpg'),
(51, 1, 'Gautam Gambhir', 0, 0, 0, 10, 'img/2.jpg'),
(72, 2, 'George Bailey', 0, 0, 0, 10, 'img/3.jpg'),
(78, 2, 'Glenn Maxwell', 0, 0, 3, 11, 'img/3.jpg'),
(42, 2, 'Gurinder Sandhu', 0, 0, 1, 8, 'img/1.jpg'),
(73, 0, 'Gurkeerat Mann Singh', 0, 0, 0, 7, 'img/3.jpg'),
(150, 0, 'Hanuma Vihari', 0, 0, 0, 6, 'img/7.jpg'),
(108, 1, 'Harbhajan Singh', 0, 0, 3, 9, 'img/4.jpg'),
(100, 0, 'Hardik Pandya', 0, 0, 3, 6, 'img/4.jpg'),
(137, 0, 'Harshal Patel', 0, 0, 1, 6, 'img/5.jpg'),
(43, 2, 'Imran Tahir', 0, 0, 1, 8, 'img/1.jpg'),
(138, 0, 'Iqbal Abdullah', 0, 0, 1, 7, 'img/5.jpg'),
(22, 1, 'Irfan Pathan', 0, 0, 0, 8, 'img/0.jpg'),
(156, 1, 'Ishanth Sharma', 0, 0, 1, 8, 'img/7.jpg'),
(8, 1, 'Ishwar Pandey', 0, 0, 0, 8, 'img/0.jpg'),
(101, 0, 'J Suchitch', 0, 0, 3, 6, 'img/4.jpg'),
(44, 1, 'Jaidev Unadkat', 0, 0, 1, 7, 'img/1.jpg'),
(131, 0, 'Jalaj Saxena', 0, 0, 3, 7, 'img/5.jpg'),
(174, 2, 'James Faulkner', 0, 0, 3, 9, 'img/6.jpg'),
(58, 2, 'James Neesham', 0, 0, 3, 8, 'img/2.jpg'),
(109, 0, 'Jaspirit Bumrah', 0, 0, 1, 7, 'img/4.jpg'),
(45, 0, 'Jayant Yadav', 0, 0, 1, 6, 'img/1.jpg'),
(110, 2, 'Josh Hazzlewood', 0, 0, 1, 7, 'img/4.jpg'),
(32, 2, 'JP Duminy', 0, 0, 3, 10, 'img/1.jpg'),
(176, 2, 'Juan Theron', 0, 0, 1, 7, 'img/6.jpg'),
(177, 2, 'Kane Richardson', 0, 0, 1, 8, 'img/6.jpg'),
(187, 2, 'Kane Williamson', 0, 0, 3, 9, 'img/7.jpg'),
(79, 0, 'Karanveer Singh', 0, 0, 3, 7, 'img/3.jpg'),
(155, 1, 'Karn Sharma', 0, 0, 1, 8, 'img/7.jpg'),
(164, 0, 'Karun Nair', 0, 0, 3, 6, 'img/6.jpg'),
(64, 0, 'KC Cariappa', 0, 0, 1, 6, 'img/2.jpg'),
(26, 1, 'Kedar Jafhv', 0, 0, 0, 7, 'img/1.jpg'),
(147, 2, 'Kevin Pietersen', 0, 0, 0, 10, 'img/7.jpg'),
(102, 2, 'Kieron Pollard', 0, 0, 3, 9, 'img/4.jpg'),
(46, 0, 'KK Jiyaz', 0, 0, 1, 6, 'img/1.jpg'),
(38, 0, 'Kona Srikar Bharat', 0, 0, 2, 6, 'img/1.jpg'),
(59, 0, 'Kuldeep Yadav', 0, 0, 3, 8, 'img/2.jpg'),
(20, 2, 'Kyle Abbott', 0, 0, 0, 8, 'img/0.jpg'),
(112, 2, 'Lasith Malinga', 0, 0, 1, 10, 'img/4.jpg'),
(188, 1, 'Laxmi Ratan Shukla', 0, 0, 3, 7, 'img/7.jpg'),
(95, 2, 'Lendl Simmons', 0, 0, 0, 9, 'img/4.jpg'),
(189, 1, 'Lokesh Rahul', 0, 0, 2, 7, 'img/7.jpg'),
(74, 0, 'Manan Vohra', 0, 0, 0, 8, 'img/3.jpg'),
(118, 0, 'Mandeep Singh', 0, 0, 0, 7, 'img/5.jpg'),
(52, 0, 'Manish Pandey', 0, 0, 0, 8, 'img/2.jpg'),
(27, 1, 'Manoj Tiwary', 0, 0, 0, 8, 'img/1.jpg'),
(133, 0, 'Manvinder Bisla', 0, 0, 2, 7, 'img/5.jpg'),
(35, 2, 'Marcus Stoinis', 0, 0, 3, 8, 'img/1.jpg'),
(9, 2, 'Matt Henry', 0, 0, 0, 7, 'img/0.jpg'),
(28, 0, 'Mayank Agarwal', 0, 0, 0, 7, 'img/1.jpg'),
(114, 2, 'Merchant de Lange', 0, 0, 1, 7, 'img/4.jpg'),
(18, 2, 'Michael Hussey', 0, 0, 0, 9, 'img/0.jpg'),
(87, 2, 'Mitchell Johnson', 0, 0, 1, 9, 'img/3.jpg'),
(115, 2, 'Mitchell Mcclenagen', 0, 0, 1, 8, 'img/4.jpg'),
(139, 2, 'Mitchell Starc', 0, 0, 1, 9, 'img/5.jpg'),
(10, 0, 'Mithun Manhas', 0, 0, 0, 7, 'img/0.jpg'),
(47, 1, 'Mohammed Shami', 0, 0, 1, 9, 'img/1.jpg'),
(11, 1, 'Mohit Sharma', 0, 0, 0, 8, 'img/0.jpg'),
(190, 2, 'Moises Henriques', 0, 0, 3, 8, 'img/7.jpg'),
(63, 2, 'Morne Morkel', 0, 0, 1, 9, 'img/2.jpg'),
(1, 1, 'MS Dhoni', 0, 0, 3, 10, 'img/0.jpg'),
(75, 1, 'Murali Vijay', 0, 0, 0, 8, 'img/3.jpg'),
(161, 1, 'Naman Ojha', 0, 0, 2, 7, 'img/7.jpg'),
(48, 2, 'Nathan Counter-Nile', 0, 0, 1, 9, 'img/1.jpg'),
(119, 2, 'Nic Maddinson', 0, 0, 0, 7, 'img/5.jpg'),
(84, 0, 'Nikhil Shankar Naik', 0, 0, 2, 6, 'img/3.jpg'),
(103, 0, 'Nitish Rana', 0, 0, 3, 6, 'img/4.jpg'),
(178, 0, 'Pardeep Sahu', 0, 0, 3, 6, 'img/6.jpg'),
(107, 1, 'Partiv Patel', 0, 0, 2, 7, 'img/4.jpg'),
(154, 1, 'Parvez Rasool', 0, 0, 1, 7, 'img/7.jpg'),
(90, 1, 'Parvinder Awana', 0, 0, 1, 8, 'img/3.jpg'),
(62, 2, 'Pat Cummins', 0, 0, 1, 9, 'img/2.jpg'),
(12, 0, 'Pawan Negi', 0, 0, 0, 7, 'img/0.jpg'),
(116, 0, 'Pawan Suyal', 0, 0, 1, 7, 'img/4.jpg'),
(66, 1, 'Piyush Chawla', 0, 0, 3, 9, 'img/2.jpg'),
(117, 1, 'Pragyan Ojha', 0, 0, 1, 9, 'img/4.jpg'),
(191, 0, 'Prasanth Padmanabhan', 0, 0, 3, 6, 'img/7.jpg'),
(23, 0, 'Pratyush Singh', 0, 0, 0, 6, 'img/0.jpg'),
(153, 1, 'Praveen Kumar', 0, 0, 1, 8, 'img/7.jpg'),
(179, 0, 'Pravin Tambe', 0, 0, 1, 7, 'img/6.jpg'),
(39, 2, 'Quinton de Kock', 0, 0, 2, 9, 'img/1.jpg'),
(19, 0, 'Rahul Sharma', 0, 0, 1, 8, 'img/0.jpg'),
(180, 0, 'Rahul Tewatia', 0, 0, 1, 6, 'img/6.jpg'),
(181, 0, 'Rajat Bhatia', 0, 0, 3, 7, 'img/6.jpg'),
(192, 2, 'Ravi Bopara', 0, 0, 3, 8, 'img/7.jpg'),
(13, 1, 'Ravichandran Ashwin', 0, 0, 0, 9, 'img/0.jpg'),
(14, 1, 'Ravindra Jadeja', 0, 0, 0, 10, 'img/0.jpg'),
(148, 0, 'Ricky Bhui', 0, 0, 0, 6, 'img/7.jpg'),
(120, 2, 'Rilee Rossouw', 0, 0, 0, 8, 'img/5.jpg'),
(80, 0, 'Rishi Dhawan', 0, 0, 3, 8, 'img/3.jpg'),
(96, 1, 'Rohit Sharma', 0, 0, 0, 10, 'img/4.jpg'),
(55, 1, 'Ronin Uthappa', 0, 0, 2, 9, 'img/2.jpg'),
(17, 0, 'Ronit More', 0, 0, 0, 6, 'img/0.jpg'),
(54, 2, 'Ryan ten Doeschate', 0, 0, 3, 8, 'img/2.jpg'),
(182, 0, 'Sagar Trivedi', 0, 0, 3, 6, 'img/6.jpg'),
(15, 2, 'Samuel Badree', 0, 0, 0, 8, 'img/0.jpg'),
(91, 0, 'Sandeep Sharma', 0, 0, 1, 8, 'img/3.jpg'),
(140, 0, 'Sandeep Warrier', 0, 0, 1, 6, 'img/5.jpg'),
(166, 0, 'Sanju Samson', 0, 0, 2, 8, 'img/6.jpg'),
(121, 0, 'Sarfaraz Naushad Khan', 0, 0, 0, 6, 'img/5.jpg'),
(29, 1, 'Saurabh Tiwary', 0, 0, 0, 8, 'img/1.jpg'),
(141, 2, 'Sean Abbot', 0, 0, 1, 7, 'img/5.jpg'),
(60, 2, 'Shakib Al Hasan', 0, 0, 3, 10, 'img/2.jpg'),
(183, 2, 'Shane Watson', 0, 0, 3, 10, 'img/6.jpg'),
(92, 0, 'Shardul Thakur', 0, 0, 1, 6, 'img/3.jpg'),
(76, 2, 'Shaun Marsh', 0, 0, 0, 9, 'img/3.jpg'),
(67, 0, 'Sheldon Jackson', 0, 0, 2, 6, 'img/2.jpg'),
(149, 1, 'Shikhar Dhawan', 0, 0, 0, 10, 'img/7.jpg'),
(122, 0, 'Shishir Bhavane', 0, 0, 0, 6, 'img/5.jpg'),
(81, 0, 'Shivam Sharma', 0, 0, 3, 7, 'img/3.jpg'),
(104, 0, 'Shreyas Gopal', 0, 0, 3, 7, 'img/4.jpg'),
(30, 0, 'Shreyas Iyer', 0, 0, 0, 6, 'img/1.jpg'),
(105, 0, 'Siddesh Dinesh Lad', 0, 0, 3, 6, 'img/4.jpg'),
(152, 0, 'Siddharth Kaul', 0, 0, 1, 6, 'img/7.jpg'),
(165, 2, 'Steve smith', 0, 0, 3, 9, 'img/6.jpg'),
(184, 1, 'Stuart Binny', 0, 0, 3, 8, 'img/6.jpg'),
(123, 1, 'Subramaniam Badrinath', 0, 0, 0, 7, 'img/5.jpg'),
(70, 0, 'Sumit Narwal', 0, 0, 3, 6, 'img/2.jpg'),
(61, 2, 'Sunil Narine', 0, 0, 1, 11, 'img/2.jpg'),
(16, 1, 'Suresh Raina', 0, 0, 0, 11, 'img/0.jpg'),
(53, 0, 'Suryakumar Yadav', 0, 0, 0, 7, 'img/2.jpg'),
(82, 2, 'Thisara Perera', 0, 0, 3, 9, 'img/3.jpg'),
(185, 2, 'Tim Southee', 0, 0, 1, 8, 'img/6.jpg'),
(31, 2, 'Travis Head', 0, 0, 1, 8, 'img/1.jpg'),
(151, 2, 'Trent Boult', 0, 0, 1, 9, 'img/7.jpg'),
(97, 0, 'Unmukt Chand', 0, 0, 0, 6, 'img/4.jpg'),
(69, 0, 'Vaibhav Patel', 0, 0, 3, 6, 'img/2.jpg'),
(142, 1, 'Varun Aaron', 0, 0, 1, 8, 'img/5.jpg'),
(124, 0, 'Vijay Zol', 0, 0, 0, 7, 'img/5.jpg'),
(186, 0, 'Vikramjeet Malik', 0, 0, 1, 7, 'img/6.jpg'),
(144, 1, 'Vinay Kumar', 0, 0, 1, 9, 'img/4.jpg'),
(125, 1, 'Virat Kohli', 0, 0, 0, 10, 'img/5.jpg'),
(77, 1, 'Virender Sehwag', 0, 0, 0, 10, 'img/3.jpg'),
(85, 1, 'Wriddhiman Saha', 0, 0, 2, 9, 'img/3.jpg'),
(83, 0, 'Yogesh Golwalkar', 0, 0, 3, 6, 'img/3.jpg'),
(128, 0, 'Yogesh Takawale', 0, 0, 2, 7, 'img/5.jpg'),
(68, 1, 'Yusuf Pathan', 0, 0, 3, 10, 'img/2.jpg'),
(36, 1, 'Yuvraj SIngh', 0, 0, 3, 11, 'img/1.jpg'),
(143, 0, 'Yuzvendra Chahal', 0, 0, 1, 7, 'img/5.jpg'),
(49, 1, 'Zaheer Khan', 0, 0, 1, 9, 'img/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `points table`
--

CREATE TABLE IF NOT EXISTS `points table` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(20) NOT NULL,
  `PLD` int(11) NOT NULL,
  `PTS` int(11) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `points table`
--

INSERT INTO `points table` (`SNo`, `path`, `PLD`, `PTS`) VALUES
(1, 'img/6.jpg', 4, 8),
(2, 'img/0.jpg', 3, 6),
(3, 'img/2.jpg', 3, 4),
(4, 'img/1.jpg', 4, 4),
(5, 'img/7.jpg', 4, 2),
(6, 'img/3.jpg', 4, 2),
(7, 'img/5.jpg', 2, 2),
(8, 'img/4.jpg', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purple cap`
--

CREATE TABLE IF NOT EXISTS `purple cap` (
  `SNo` int(11) NOT NULL AUTO_INCREMENT,
  `Team` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Wickets` int(11) NOT NULL,
  PRIMARY KEY (`SNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `purple cap`
--

INSERT INTO `purple cap` (`SNo`, `Team`, `Name`, `Wickets`) VALUES
(1, 'img/1.jpg', 'Imran Tahir', 9),
(2, 'img/3.jpg', 'Sandeep Sharma', 7),
(3, 'img/1.jpg', 'JP Duminy', 7);

-- --------------------------------------------------------

--
-- Table structure for table `rcb`
--

CREATE TABLE IF NOT EXISTS `rcb` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Path` int(11) NOT NULL DEFAULT '5',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcb`
--

INSERT INTO `rcb` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `Path`) VALUES
(127, 2, 'AB Devilliers', 0, 0, 2, 11, 5),
(134, 0, 'Abu Nechim', 0, 0, 1, 6, 5),
(135, 2, 'Adam Milne', 0, 0, 1, 7, 5),
(136, 1, 'Ashok Dinda', 0, 0, 1, 8, 5),
(126, 2, 'Chris Gayle', 0, 0, 3, 11, 5),
(129, 2, 'Darren Sammy', 0, 0, 3, 9, 5),
(130, 2, 'David Wiese', 0, 0, 3, 8, 5),
(132, 1, 'Dinesh Kartik', 0, 0, 2, 9, 5),
(137, 0, 'Harshal Patel', 0, 0, 1, 6, 5),
(138, 0, 'Iqbal Abdullah', 0, 0, 1, 7, 5),
(131, 0, 'Jalaj Saxena', 0, 0, 3, 7, 5),
(118, 0, 'Mandeep Singh', 0, 0, 0, 7, 5),
(133, 0, 'Manvinder Bisla', 0, 0, 2, 7, 5),
(139, 2, 'Mitchell Starc', 0, 0, 1, 9, 5),
(119, 2, 'Nic Maddinson', 0, 0, 0, 7, 5),
(120, 2, 'Rilee Rossouw', 0, 0, 0, 8, 5),
(140, 0, 'Sandeep Warrier', 0, 0, 1, 6, 5),
(121, 0, 'Sarfaraz Naushad Khan', 0, 0, 0, 6, 5),
(141, 2, 'Sean Abbot', 0, 0, 1, 7, 5),
(122, 0, 'Shishir Bhavane', 0, 0, 0, 6, 5),
(123, 1, 'Subramaniam Badrinath', 0, 0, 0, 7, 5),
(142, 1, 'Varun Aaron', 0, 0, 1, 8, 5),
(124, 0, 'Vijay Zol', 0, 0, 0, 7, 5),
(125, 1, 'Virat Kohli', 0, 0, 0, 10, 5),
(128, 0, 'Yogesh Takawale', 0, 0, 2, 7, 5),
(143, 0, 'Yuzvendra Chahal', 0, 0, 1, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rr`
--

CREATE TABLE IF NOT EXISTS `rr` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) NOT NULL DEFAULT '6',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rr`
--

INSERT INTO `rr` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(2, 1, 'Abhishek Nayar', 0, 0, 3, 8, 6),
(1, 1, 'Ajinkya Rahane', 0, 0, 0, 10, 6),
(16, 0, 'Ankit Sharma', 0, 0, 1, 7, 6),
(17, 0, 'Barinder Singh', 0, 0, 1, 6, 6),
(18, 2, 'Ben Cutting', 0, 0, 1, 7, 6),
(6, 2, 'Christopher Morris', 0, 0, 3, 8, 6),
(7, 0, 'Deepak Hooda', 0, 0, 3, 6, 6),
(19, 1, 'Dhawal Kulkarni', 0, 0, 1, 8, 6),
(8, 0, 'Dinesh Salhunke', 0, 0, 3, 6, 6),
(14, 0, 'Dishant Yagnik', 0, 0, 2, 7, 6),
(15, 2, 'James Faulkner', 0, 0, 3, 9, 6),
(20, 2, 'Juan Theron', 0, 0, 1, 7, 6),
(21, 2, 'Kane Richardson', 0, 0, 1, 8, 6),
(3, 0, 'Karun Nair', 0, 0, 3, 6, 6),
(9, 0, 'Pardeep Sahu', 0, 0, 3, 6, 6),
(22, 0, 'Pravin Tambe', 0, 0, 1, 7, 6),
(23, 0, 'Rahul Tewatia', 0, 0, 1, 6, 6),
(10, 0, 'Rajat Bhatia', 0, 0, 3, 7, 6),
(11, 0, 'Sagar Trivedi', 0, 0, 3, 6, 6),
(5, 0, 'Sanju Samson', 0, 0, 2, 8, 6),
(12, 2, 'Shane Watson', 0, 0, 3, 10, 6),
(4, 2, 'Steve smith', 0, 0, 3, 9, 6),
(13, 1, 'Stuart Binny', 0, 0, 3, 8, 6),
(24, 2, 'Tim Southee', 0, 0, 1, 8, 6),
(25, 0, 'Vikramjeet Malik', 0, 0, 1, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `srh`
--

CREATE TABLE IF NOT EXISTS `srh` (
  `SNo` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Total_Points` int(11) NOT NULL DEFAULT '0',
  `GD_Points` int(11) NOT NULL DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `path` int(11) DEFAULT '7',
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `srh`
--

INSERT INTO `srh` (`SNo`, `Value`, `Name`, `Total_Points`, `GD_Points`, `Role`, `Price`, `path`) VALUES
(160, 0, 'Ashish Reddy', 0, 0, 1, 7, 7),
(159, 1, 'Bhuvneshwar Kumar', 0, 0, 1, 9, 7),
(158, 0, 'Chama Milind', 0, 0, 1, 6, 7),
(157, 2, 'Dale Steyn', 0, 0, 1, 10, 7),
(145, 2, 'David Warner', 0, 0, 0, 10, 7),
(146, 2, 'Eoin Morgan', 0, 0, 0, 9, 7),
(150, 0, 'Hanuma Vihari', 0, 0, 0, 6, 7),
(156, 1, 'Ishanth Sharma', 0, 0, 1, 8, 7),
(7, 2, 'Kane Williamson', 0, 0, 3, 9, 7),
(155, 1, 'Karn Sharma', 0, 0, 1, 8, 7),
(147, 2, 'Kevin Pietersen', 0, 0, 0, 10, 7),
(8, 1, 'Laxmi Ratan Shukla', 0, 0, 3, 7, 7),
(12, 1, 'Lokesh Rahul', 0, 0, 2, 7, 7),
(9, 2, 'Moises Henriques', 0, 0, 3, 8, 7),
(161, 1, 'Naman Ojha', 0, 0, 2, 7, 7),
(154, 1, 'Parvez Rasool', 0, 0, 1, 7, 7),
(10, 0, 'Prasanth Padmanabhan', 0, 0, 3, 6, 7),
(153, 1, 'Praveen Kumar', 0, 0, 1, 8, 7),
(11, 2, 'Ravi Bopara', 0, 0, 3, 8, 7),
(148, 0, 'Ricky Bhui', 0, 0, 0, 6, 7),
(149, 1, 'Shikhar Dhawan', 0, 0, 0, 10, 7),
(152, 0, 'Siddharth Kaul', 0, 0, 1, 6, 7),
(151, 2, 'Trent Boult', 0, 0, 1, 9, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
