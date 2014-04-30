-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 07:43 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cis`
--
CREATE DATABASE IF NOT EXISTS `cis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cis`;

-- --------------------------------------------------------

--
-- Table structure for table `cap`
--

CREATE TABLE IF NOT EXISTS `cap` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `capCompany` varchar(60) NOT NULL,
  `contactName` text NOT NULL,
  `email` text NOT NULL,
  `others` text,
  `corporateDetailsId` int(11) NOT NULL,
  `facultyDetailsId` int(11) NOT NULL,
  `studentDetailsId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `capCompany_unq` (`capCompany`),
  KEY `facultyDetailsId_FK` (`facultyDetailsId`),
  KEY `studentDetailsId_FK` (`studentDetailsId`),
  KEY `corporateDetailsId_FK` (`corporateDetailsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `cap`
--

INSERT INTO `cap` (`id`, `capCompany`, `contactName`, `email`, `others`, `corporateDetailsId`, `facultyDetailsId`, `studentDetailsId`) VALUES
(13, 'harsha', 'harsha', 'kongaharsha@gmail.com', '', 39, 29, 17),
(14, 'harsha1', 'harsha', 'kongaharsha@gmail.com', 'kjahkjfhlk', 40, 30, 18),
(15, 'def', 'fgh', 'def@fgh.in', '', 41, 31, 19),
(17, 'xxxx', 'yyy', 'xxxx@yyy.in', '', 44, 34, 22),
(18, 'abc', 'defg', 'abc@xyz.in', '', 45, 35, 23),
(19, 'pqr', 'priyanka', 'priyanka@gmail.com', '', 46, 36, 24),
(20, 'pri', 'pri', 'pri@n.in', '', 47, 37, 25),
(21, '', 'bhavana', '', '', 48, 38, 26),
(22, 'Cisco', 'Bhavana', 'bh@gmail.com', '', 49, 39, 27),
(23, 'IBM', 'Bhavana', '92.bhavana@gmail.com', '', 50, 40, 28);

-- --------------------------------------------------------

--
-- Table structure for table `capmba`
--

CREATE TABLE IF NOT EXISTS `capmba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capCompany` varchar(60) NOT NULL,
  `contactName` text NOT NULL,
  `email` text NOT NULL,
  `others` text,
  `corporateDetailsId` int(11) NOT NULL,
  `facultyDetailsId` int(11) NOT NULL,
  `studentDetailsId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `capmba`
--

INSERT INTO `capmba` (`id`, `capCompany`, `contactName`, `email`, `others`, `corporateDetailsId`, `facultyDetailsId`, `studentDetailsId`) VALUES
(1, 'abc', 'def', 'abc@xyz.in', '', 1, 1, 1),
(2, 'pqr', 'stu', 'pqr@an.in', '', 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cName` varchar(25) NOT NULL,
  `cDescription` varchar(500) DEFAULT NULL,
  `tags` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cName`),
  UNIQUE KEY `cName_UNIQUE` (`cName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cName`, `cDescription`, `tags`) VALUES
('Cisco', 'gjhg', 'core'),
('Facebook', 'Website', 'Core'),
('Google', 'hahaha', 'Core'),
('Microsoft', 'Coding company', 'Core'),
('Musigma', 'Chilled out', 'Dream Company'),
('Zynga', 'Fruity', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contactName` varchar(40) NOT NULL,
  `cName` varchar(45) NOT NULL,
  `officeName` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `mobileNumber` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `engineering` char(1) DEFAULT NULL,
  `mtech` char(1) DEFAULT NULL,
  `mba` char(1) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contactName`,`cName`,`officeName`),
  KEY `fk2_idx` (`cName`),
  KEY `fk3_idx` (`officeName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corporatedetails`
--

CREATE TABLE IF NOT EXISTS `corporatedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `experts_nomination` tinyint(1) NOT NULL,
  `fdp` tinyint(1) NOT NULL,
  `adjunct_faculty` tinyint(1) NOT NULL,
  `sibtc` tinyint(4) NOT NULL,
  `ioisepicd` tinyint(1) NOT NULL,
  `glcbil` tinyint(1) NOT NULL,
  `erf` tinyint(1) NOT NULL,
  `soets` tinyint(1) NOT NULL,
  `jpd` tinyint(1) NOT NULL,
  `wwafcmmpfce` tinyint(1) NOT NULL,
  `owppfifadp` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `corporatedetails`
--

INSERT INTO `corporatedetails` (`id`, `experts_nomination`, `fdp`, `adjunct_faculty`, `sibtc`, `ioisepicd`, `glcbil`, `erf`, `soets`, `jpd`, `wwafcmmpfce`, `owppfifadp`) VALUES
(38, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1),
(40, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1),
(41, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(45, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(46, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(47, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `corporatedetailsmba`
--

CREATE TABLE IF NOT EXISTS `corporatedetailsmba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noetbos` tinyint(1) NOT NULL,
  `mdp` tinyint(1) NOT NULL,
  `vfm` tinyint(1) NOT NULL,
  `sibmc` tinyint(1) NOT NULL,
  `ioise` tinyint(1) NOT NULL,
  `glcbil` tinyint(1) NOT NULL,
  `ecoe` tinyint(1) NOT NULL,
  `soe` tinyint(1) NOT NULL,
  `iwaasbse` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `corporatedetailsmba`
--

INSERT INTO `corporatedetailsmba` (`id`, `noetbos`, `mdp`, `vfm`, `sibmc`, `ioise`, `glcbil`, `ecoe`, `soe`, `iwaasbse`) VALUES
(1, 1, 0, 1, 0, 0, 0, 0, 0, 0),
(2, 1, 0, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE IF NOT EXISTS `dummy` (
  `id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `name`) VALUES
('2014-04-30 09:56:54', 'bhavana'),
('2014-04-30 10:00:23', 'arabi');

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

CREATE TABLE IF NOT EXISTS `facultydetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `edp` tinyint(1) NOT NULL,
  `consultancy` tinyint(1) NOT NULL,
  `mentorship` tinyint(1) NOT NULL,
  `sabbatical` tinyint(1) NOT NULL,
  `sponsored_research` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `facultydetails`
--

INSERT INTO `facultydetails` (`id`, `edp`, `consultancy`, `mentorship`, `sabbatical`, `sponsored_research`) VALUES
(28, 0, 0, 1, 1, 0),
(29, 0, 0, 1, 0, 1),
(30, 0, 0, 1, 0, 1),
(31, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(33, 0, 0, 0, 0, 0),
(34, 0, 0, 1, 0, 0),
(35, 0, 0, 1, 0, 0),
(36, 0, 0, 0, 0, 1),
(37, 0, 0, 0, 0, 1),
(38, 0, 0, 0, 0, 0),
(39, 0, 0, 1, 1, 0),
(40, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facultydetailsmba`
--

CREATE TABLE IF NOT EXISTS `facultydetailsmba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mdpcpcstp` tinyint(1) NOT NULL,
  `c` tinyint(1) NOT NULL,
  `pm` tinyint(1) NOT NULL,
  `sii` tinyint(1) NOT NULL,
  `cmempfce` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `facultydetailsmba`
--

INSERT INTO `facultydetailsmba` (`id`, `mdpcpcstp`, `c`, `pm`, `sii`, `cmempfce`) VALUES
(1, 0, 0, 1, 0, 0),
(2, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `interactionlog`
--

CREATE TABLE IF NOT EXISTS `interactionlog` (
  `ilID` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` varchar(20) DEFAULT NULL,
  `ilCName` varchar(45) NOT NULL,
  `ilContact` varchar(45) DEFAULT NULL,
  `ilPeople` varchar(45) DEFAULT NULL,
  `ilLocation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ilCName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='				';

--
-- Dumping data for table `interactionlog`
--

INSERT INTO `interactionlog` (`ilID`, `date`, `ilCName`, `ilContact`, `ilPeople`, `ilLocation`) VALUES
('2014-04-30 10:11:42', '2014-05-01', 'Cisco', 'Mani', 'monkey', 'On Campus'),
('2014-04-30 10:46:39', '2014-04-10', 'Facebook', 'Anita', 'Rakesh', 'Company'),
('2014-04-30 10:11:42', '2014-04-02', 'Google', 'dsj', 'kfnk', 'On campus'),
('2014-04-30 10:11:42', '2014-04-30', 'Microsoft', 'bhanu', 'Ashwini', 'On Campus'),
('2014-04-30 10:11:42', '2014-05-01', 'Musigma', 'Kamala', 'Ramesh', 'On Campus'),
('2014-04-30 10:11:42', '2014-04-30', 'Zynga', 'Vishwak', 'Priyanka', 'On Campus');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `officeName` varchar(25) NOT NULL,
  `cName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `lastEdited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(45) NOT NULL,
  PRIMARY KEY (`officeName`,`cName`),
  KEY `fk1_idx` (`cName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `industry_visit` tinyint(1) NOT NULL,
  `workshops` tinyint(1) NOT NULL,
  `mini_projects` tinyint(1) NOT NULL,
  `in_plant_training` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `industry_visit`, `workshops`, `mini_projects`, `in_plant_training`) VALUES
(16, 0, 0, 1, 0),
(17, 0, 1, 0, 1),
(18, 0, 1, 0, 1),
(19, 0, 0, 0, 0),
(20, 0, 0, 0, 0),
(21, 0, 0, 0, 0),
(22, 0, 0, 0, 0),
(23, 1, 1, 1, 0),
(24, 0, 0, 0, 0),
(25, 0, 0, 0, 0),
(26, 1, 0, 0, 0),
(27, 1, 1, 0, 0),
(28, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetailsmba`
--

CREATE TABLE IF NOT EXISTS `studentdetailsmba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iv` tinyint(1) NOT NULL,
  `ws` tinyint(1) NOT NULL,
  `p` tinyint(1) NOT NULL,
  `si` tinyint(1) NOT NULL,
  `pp` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `studentdetailsmba`
--

INSERT INTO `studentdetailsmba` (`id`, `iv`, `ws`, `p`, `si`, `pp`) VALUES
(1, 1, 0, 0, 0, 0),
(2, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE IF NOT EXISTS `userprofiles` (
  `upID` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upName` varchar(20) NOT NULL,
  `upUserName` varchar(45) NOT NULL,
  `upPassword` varchar(45) NOT NULL,
  `privileges` varchar(20) NOT NULL,
  PRIMARY KEY (`upUserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`upID`, `upName`, `upUserName`, `upPassword`, `privileges`) VALUES
('2014-04-30 10:08:47', 'Ashwini', 'ashwini@gmail.com', 'yyy', 'admin'),
('2014-04-30 10:05:00', 'Bhavana', 'bhavana@gmail.com', 'xxx', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cap`
--
ALTER TABLE `cap`
  ADD CONSTRAINT `corporateDetailsId_FK` FOREIGN KEY (`corporateDetailsId`) REFERENCES `corporatedetails` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `facultyDetailsId_FK` FOREIGN KEY (`facultyDetailsId`) REFERENCES `facultydetails` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentDetailsId_FK` FOREIGN KEY (`studentDetailsId`) REFERENCES `studentdetails` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`cName`) REFERENCES `company` (`cName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`officeName`) REFERENCES `offices` (`officeName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `interactionlog`
--
ALTER TABLE `interactionlog`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`ilCName`) REFERENCES `company` (`cName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`cName`) REFERENCES `company` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
