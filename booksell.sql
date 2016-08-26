-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 01:42 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booksell`
--

-- --------------------------------------------------------

--
-- Table structure for table `buysell`
--

CREATE TABLE IF NOT EXISTS `buysell` (
  `Material_Id` int(11) NOT NULL,
  `Material_Name` varchar(100) NOT NULL,
  `Material_Details` varchar(500) NOT NULL,
  `Wanna` varchar(50) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Contact_No` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`Material_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buysell`
--

INSERT INTO `buysell` (`Material_Id`, `Material_Name`, `Material_Details`, `Wanna`, `Price`, `Photo`, `Username`, `Name`, `Contact_No`, `Email_ID`, `Image`) VALUES
(1, 'ANCI C', 'New', 'Exchange', 'N/A', 'UserImages/download.jpeg', 'kk', 'krishnakant Bhargava', '9589560755', 'kk@gmail.com', 'UserImages/Photo1317a.jpg'),
(2, 'java', 'E balagurusamy', 'Sell', '150', 'UserImages/javabok.jpeg', 'kamayani', 'kamayani sharma', '1234567890', 'kamayani@gmail.com', 'UserImages/kamayani.jpg'),
(3, 'php book', 'janet valade php 5 ', 'Exchange', 'N/A', 'UserImages/phpbook.jpeg', 'prateek', 'prateek shukla', '3216549875', 'prateek@gmail.com', 'UserImages/prateek.jpg'),
(4, 'Let us C', '12th edition', 'Sell', '120', 'UserImages/downloads.jpeg', 'naman', 'naman bhatt', '7894561230', 'naman@gmail.com', 'UserImages/Naman.jpg'),
(6, 'hacking book', 'old book', 'Donate', 'N/A', 'UserImages/images.jpg', 'naman', 'naman bhatt', '7894561230', 'naman@gmail.com', 'UserImages/Naman.jpg'),
(7, 'Malice toward none', 'biography of Abraham lincoln', 'Donate', 'N/A', 'UserImages/download.jpe', 'krribss', 'krribss', '8528528528', 'krribss@gmail.com', 'UserImages/10405435_699622053469657_4814360816263597388_n.jpg'),
(8, 'Drafter', '2 years old , in good condition', 'Donate', '', 'UserImages/drafter.jpeg', 'krribss', 'krribss', '8528528528', 'krribss@gmail.com', 'UserImages/10405435_699622053469657_4814360816263597388_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `learnteach`
--

CREATE TABLE IF NOT EXISTS `learnteach` (
  `User_ID` int(11) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `W_Teach` varchar(300) NOT NULL,
  `Activity` varchar(300) NOT NULL,
  `C_Details` varchar(300) NOT NULL,
  `Contact_No` varchar(100) NOT NULL,
  `Email_ID` varchar(300) NOT NULL,
  `User_Name` varchar(300) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learnteach`
--

INSERT INTO `learnteach` (`User_ID`, `Image`, `Name`, `W_Teach`, `Activity`, `C_Details`, `Contact_No`, `Email_ID`, `User_Name`) VALUES
(1, 'UserImages/Photo1317a.jpg', 'krishnakant Bhargava', 'Wants to Teach', 'Guitar', 'For Details Contact:', '9589560755', 'kk@gmail.com', 'kk'),
(2, 'UserImages/prateek.jpg', 'prateek shukla', 'Wants to Teach', 'Music', 'For Details Contact:', '3216549875', 'prateek@gmail.com', 'prateek'),
(3, 'UserImages/10405435_699622053469657_4814360816263597388_n.jpg', 'krribss', 'Wants to Teach', 'Dance', 'For Details Contact:', '8528528528', 'krribss@gmail.com', 'krribss'),
(5, 'UserImages/kamayani.jpg', 'kamayani sharma', 'Wants to Teach', 'Badminton', 'For Details Contact:', '1234567890', 'kamayani@gmail.com', 'kamayani'),
(6, 'UserImages/Naman.jpg', 'naman bhatt', 'Wants to Teach', 'French', 'For Details Contact:', '7894561230', 'naman@gmail.com', 'naman'),
(7, 'UserImages/Naman.jpg', 'naman bhatt', 'Wants to Teach', 'Java', 'For Details Contact:', '7894561230', 'naman@gmail.com', 'Naman'),
(8, 'UserImages/Naman.jpg', 'naman bhatt', 'Wants to Teach', 'Physics', 'For Details Contact:', '7894561230', 'naman@gmail.com', 'Naman'),
(10, 'UserImages/10405435_699622053469657_4814360816263597388_n.jpg', 'krribss', 'Wants to Teach', 'Mathematics', 'For Details Contact:', '8528528528', 'krribss@gmail.com', 'krribss'),
(11, 'UserImages/10405435_699622053469657_4814360816263597388_n.jpg', 'krribss', 'Wants to Teach', 'Rubik Cube', 'For Details Contact:', '8528528528', 'krribss@gmail.com', 'krribss'),
(12, 'UserImages/Photo1317a.jpg', 'krishnakant Bhargava', 'Wants to Teach', 'PHP', 'For Details Contact:', '9589560755', 'kk@gmail.com', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact_No` varchar(30) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Photo` varchar(500) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Gender`, `Contact_No`, `Email_ID`, `Username`, `Password`, `Photo`) VALUES
('kamayani sharma', 'Male', '1234567890', 'kamayani@gmail.com', 'kamayani', '123', 'UserImages/kamayani.jpg'),
('krishnakant Bhargava', 'Male', '9589560755', 'kk@gmail.com', 'kk', '123', 'UserImages/Photo1317a.jpg'),
('krribss', 'Male', '8528528528', 'krribss@gmail.com', 'krribss', '123', 'UserImages/10405435_699622053469657_4814360816263597388_n.jpg'),
('naman bhatt', 'Male', '7894561230', 'naman@gmail.com', 'naman', '123', 'UserImages/Naman.jpg'),
('prateek shukla', 'Male', '3216549875', 'prateek@gmail.com', 'prateek', '123', 'UserImages/prateek.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
