-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2015 at 03:12 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cpan`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `LevelId` int(11) NOT NULL AUTO_INCREMENT,
  `LevelName` varchar(20) NOT NULL,
  `Note` text NOT NULL,
  PRIMARY KEY (`LevelId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`LevelId`, `LevelName`, `Note`) VALUES
(1, 'Administrator', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `userlogin`
--
CREATE TABLE IF NOT EXISTS `userlogin` (
`UserId` int(11)
,`Name` varchar(50)
,`Email` varchar(50)
,`Password` varchar(40)
,`Level` int(11)
,`LevelName` varchar(20)
,`Status` int(11)
,`Picture` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Level` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Name`, `Email`, `Password`, `Picture`, `Level`, `Status`) VALUES
(1, 'John Doe', 'john@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'john.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Structure for view `userlogin`
--
DROP TABLE IF EXISTS `userlogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userlogin` AS select `a`.`UserId` AS `UserId`,`a`.`Name` AS `Name`,`a`.`Email` AS `Email`,`a`.`Password` AS `Password`,`a`.`Level` AS `Level`,`b`.`LevelName` AS `LevelName`,`a`.`Status` AS `Status`,`a`.`Picture` AS `Picture` from (`users` `a` join `level` `b` on((`a`.`Level` = `b`.`LevelId`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
