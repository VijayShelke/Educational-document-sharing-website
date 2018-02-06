-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2014 at 04:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `auid` int(10) unsigned NOT NULL COMMENT 'unique_id for user',
  `ausername` varchar(100) NOT NULL,
  `apassword` varchar(100) CHARACTER SET big5 COLLATE big5_bin NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `ainstitute` int(11) NOT NULL,
  `astudent` int(11) NOT NULL,
  PRIMARY KEY (`auid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`auid`, `ausername`, `apassword`, `aemail`, `ainstitute`, `astudent`) VALUES
(1, 'vijay', '*8857754DDE6637BDA2C', 'vdshelke126@gmail.co', 1, 1),
(2, 'ajinkya', '*3568C24824B9A5F1DA2', 'alphaaj6525@gmail.com', 2, 2),
(3, 'asdf', '*7F0C90A004C46C64A0EB9DDDCE5DE0DC437A635C', 'vd@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'USA'),
(91, 'INDIA');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `institute_code` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `NoOfDownloads` int(11) DEFAULT NULL,
  `filetype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `institute_code`, `amount`, `date`, `course`, `subject`, `topic`, `NoOfDownloads`, `filetype`) VALUES
(1, 'Instruction set.pdf', '5', 8, '2014-07-21', 'engg', 'fcn', 'unit 3', 0, 'application/pdf'),
(2, 'Register Set.ppt', '5', 3, '2014-07-21', 'ppt presentation', 'sub', 'tname', 0, 'application/vnd.ms-powerpoint'),
(3, 'fcn online 2nd.docx', '5', 4, '2014-07-22', 'fcn online', 'fcn', 'fcn chapter3', 0, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `image` mediumblob NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `name`, `image`, `type`) VALUES
(13, 'Screenshot (9).png', 0x433a77616d70096d707068704239442e746d70, 'image/png'),
(17, '123_battery.png', 0x433a77616d70096d70706870453837422e746d70, 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE IF NOT EXISTS `institute` (
  `iuid` int(11) NOT NULL AUTO_INCREMENT,
  `iusername` varchar(100) NOT NULL,
  `ipass` varchar(100) NOT NULL,
  `iname` varchar(500) NOT NULL,
  `iemail` varchar(500) NOT NULL,
  `iaddress` varchar(500) NOT NULL,
  `icity` varchar(500) NOT NULL,
  `istate` varchar(500) NOT NULL,
  `icountry` varchar(500) NOT NULL,
  `ipincode` int(11) NOT NULL,
  PRIMARY KEY (`iuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`iuid`, `iusername`, `ipass`, `iname`, `iemail`, `iaddress`, `icity`, `istate`, `icountry`, `ipincode`) VALUES
(4, 'ferguson.edu@gmail.com', '123', 'Fergusson College', 'ferguson.edu@gmail.com', 'sfjlughwig', 'pune', 'Andra Pradesh', 'USA', 443201),
(5, 'exabyte.acadamy@gmail.com', '1234', 'Exabyte Acadamy', 'exabyte.acadamy@gmail.com', 'ambegaon bru.', 'pune', 'Maharashtra', 'INDIA', 411039),
(6, 'educa.free@educamail.com', 'alpha', 'educa', 'educa.free@educamail.com', 'pict', 'pune', 'Maharashtra', 'INDIA', 411043),
(7, 'pict@edu.com', '12345', 'pict', 'pict@edu.com', 'asg', 'pune', 'Maharashtra', 'INDIA', 443201),
(8, 'educaa.free@educamail.com', '12345', 'educa', 'educaa.free@educamail.com', 'khd;f', 'akola', 'Maharashtra', 'INDIA', 443201),
(9, 'a@gmail.com', '123', 'rohit', 'a@gmail.com', 'dsgfh', 'pune', 'Maharashtra', 'USA', 443201),
(10, 'mit@edu.com', 'mit', 'MIT', 'mit@edu.com', 'khothrud', 'pune', 'Maharashtra', 'INDIA', 441043),
(11, 'vdshelke126@rediffmail.com', 'timepass', 'time pass', 'vdshelke126@rediffmail.com', 'mumbai', 'akola', 'Nagaland', 'USA', 411043);

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE IF NOT EXISTS `pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `institute_code` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `NoOfDownloads` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `name`, `institute_code`, `amount`, `date`, `course`, `subject`, `topic`, `NoOfDownloads`) VALUES
(1, 'Wren-and-martin-english-grammar-ebook.pdf', '', 0, '0000-00-00', '', '', '', 0),
(2, 'ashwamegh.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ashwamegh.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ashwamegh.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ashwamegh.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'kartik.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'fcn unit 3.pdf', '5', 10, '2014-07-16', 'BVP', 'Pi', 'Electrical', 0),
(10, 'fcn unit 3.pdf', '5', 10, '2014-07-16', 'BVP', 'Pi', 'Electrical', 0),
(11, 'fcn unit 3.pdf', '5', 10, '2014-07-16', 'BVP', 'Pi', 'Electrical', 0),
(12, 'fcn unit 3.pdf', '5', 8, '2014-07-16', '', 'Pi', 'Electrical', 0),
(13, 'fcn unit 3.pdf', '5', 8, '2014-07-16', '', 'Pi', 'Electrical', 0),
(14, 'ashwamegh.pdf', '5', 3, '2014-07-17', '', 'Pi', 'networking', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppt`
--

CREATE TABLE IF NOT EXISTS `ppt` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `institute_code` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `course` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `NoOfDownloads` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(50) NOT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`) VALUES
(1, 'Andra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jammu and Kashmir'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madya Pradesh'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Orissa'),
(21, 'Punjab'),
(22, 'Rajasthan'),
(23, 'Sikkim'),
(24, 'Tamil Nadu'),
(25, 'Tripura'),
(26, 'Uttaranchal'),
(27, 'Uttar Pradesh'),
(28, 'West Bengal'),
(29, 'Andaman and Nicobar Islands'),
(30, 'Chandigarh'),
(31, 'Dadar and Nagar Haveli'),
(32, 'Daman and Diu'),
(33, 'Delhi'),
(34, 'Lakshadeep'),
(35, 'Pondicherry');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `suid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id',
  `susername` varchar(100) NOT NULL COMMENT 'user name',
  `spass` varchar(100) NOT NULL,
  `sgender` varchar(10) NOT NULL,
  `sdob` date NOT NULL,
  `semail` varchar(100) NOT NULL,
  `scollname` varchar(100) NOT NULL,
  `scity` varchar(100) NOT NULL,
  `sstate` varchar(100) NOT NULL,
  `scountry` varchar(100) NOT NULL,
  `pincode` int(11) DEFAULT NULL,
  PRIMARY KEY (`suid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`suid`, `susername`, `spass`, `sgender`, `sdob`, `semail`, `scollname`, `scity`, `sstate`, `scountry`, `pincode`) VALUES
(38, 'vdshelke126@rediffmail.com', '2424', '', '0000-00-00', 'vdshelke126@rediffmail.com', '', 'pune', 'Maharashtra', 'INDIA', NULL),
(39, 'sonutayde@gmail.com', 'alpha', '', '0000-00-00', 'sonutayde@gmail.com', '', 'pune', 'Maharashtra', 'INDIA', NULL),
(40, 'vdshelke126@gmail.com', '2424', '', '0000-00-00', 'vdshelke126@gmail.com', '', 'pune', 'Maharashtra', 'INDIA', NULL),
(41, 'vdhelke126@rediffmail.com', '23', '', '0000-00-00', 'vdhelke126@rediffmail.com', '', '23', 'Andra Pradesh', 'USA', NULL),
(42, 'ikartiknikas@gmail.com', 'kartiknikas', '', '0000-00-00', 'ikartiknikas@gmail.com', '', 'mehkar', 'Maharashtra', 'INDIA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`tid`, `tname`) VALUES
(1, 'c'),
(2, 'c++');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE IF NOT EXISTS `word` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `institute_code` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `NoOfDownloads` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`id`, `name`, `institute_code`, `amount`, `date`, `course`, `subject`, `topic`, `NoOfDownloads`) VALUES
(1, 'fcn online 2nd.docx', '5', 2, '2014-07-17', '', 'fcn', '', 0),
(2, 'ashwamegh.docx', '5', 2, '2014-07-17', '', 'Pi', 'Electrical', 0),
(3, 'ashwamegh.docx', '5', 2, '2014-07-17', 'study', 'Pi', 'Electrical', 0),
(4, 'ashwamegh.docx', '5', 6, '2014-07-17', 'IIT-JEE', 'Electronics', 'Electrical', 0),
(5, 'ashwamegh.docx', '5', 10, '2014-07-17', 'IIT-JEE', 'Pi', 'Electrical', 0),
(6, 'ashwamegh.docx', '5', 2, '2014-07-17', 'anything extra', 'Pi', 'Electrical', 0),
(7, 'ashwamegh.docx', '5', 2, '2014-07-17', 'IIT-JEE', 'Electronics', 'Electrical', 0);
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
