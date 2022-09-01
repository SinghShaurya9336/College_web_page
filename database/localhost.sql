-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2019 at 10:44 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `conid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`conid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`conid`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(3, 'Shubham', 'shu@877', '9765345656', 'Hello', '2019-08-17 19:41:53'),
(1, 'Shaurya', 'saur@123', '9648562439', 'Nothin to tell you', '2019-08-17 19:36:40'),
(4, 'Saurendra Pratap Singh ', 'saur@1223', '9765345656', 'thyersdgw4sgsdg ertwe qt q ', '2019-08-17 20:25:36'),
(5, 'Saurendra Pratap Singh ', 'saur@1223', '9765345656', 'Hiii bro', '2019-08-17 20:26:32'),
(6, 'Saurendra Pratap Singh ', 'saur@1223', '9765345656', 'Hiii bro', '2019-08-17 20:27:00'),
(8, 'Akhilesh ', 'arpitsingh82585@gmail.com', '9834423332', 'Hiii bro', '2019-08-18 12:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `pincode`, `city`, `address`, `filename`, `date`) VALUES
(1, 'Vinay Tiwari', 'Girish Tiwari', 'on', 'saur@1223', 'Vinay8953', '6388767957', '231001', 'Allahabad', 'Mirjapur', 'IMG_20190416_204544.jpg', '2019-08-16 21:11:30'),
(6, 'Shaurya', 'Ajad singh', 'male', 'saur@8953', '123456', '9765345656', '645676', 'Gorakhpur', 'Gorakhpur', 'IMG_20181110_100701_862.jpg', '2019-08-16 21:16:52'),
(4, 'Saurendra Pratap Singh ', 'Ajad singh', 'on', 'Saur@8953', '9787567', '9648562439', '221403', 'Varanasi', 'Bhishampur Sewapuri Varanasi', 'IMG_20181022_210615_674.jpg', '2019-08-16 19:51:03'),
(7, 'Manas Pandey', 'xywtgfd', 'male', 'manas@12233', '6876678', '6388767976', '221403', 'Ayodhya', 'Faizabad', '1558031247243.jpg', '2019-08-16 21:23:43'),
(9, 'Akhilesh Tiwari', 'gdffg', 'male', 'akhil@68765', '8675467876', '9648587767', '231075', 'Lucknow', 'Ayodhya', '1558031245992.jpg', '2019-08-16 21:28:21'),
(10, 'Eshanee Singh', 'Pradeep Singh', 'female', 'eshusingh@4345', 'eshu@2443', '9834423332', '221004', 'Varanasi', 'Durgakund Varanasi', '1559633147844.jpg', '2019-08-16 21:31:53');
