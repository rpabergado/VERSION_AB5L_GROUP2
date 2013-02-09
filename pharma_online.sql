-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2013 at 11:38 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pharma_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `avails`
--

CREATE TABLE IF NOT EXISTS `avails` (
  `User_ID` int(10) NOT NULL,
  `Item_ID` int(10) NOT NULL,
  `Avails_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avails`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_ID` int(3) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `category`
--


-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `Item_ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'should be unique primary key',
  `Coupon_Name` varchar(20) NOT NULL,
  `Coupon_Code` varchar(20) NOT NULL,
  `Item_Price` int(6) NOT NULL,
  `Item_Quantity` int(10) NOT NULL,
  `Item_Availability` tinyint(1) NOT NULL,
  `Coupon_Discount` int(3) NOT NULL,
  `User_ID` int(10) NOT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6000000000 ;

--
-- Dumping data for table `coupon`
--


-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE IF NOT EXISTS `drug` (
  `Item_ID` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'should be unique primary key',
  `Drug_BrandName` varchar(20) NOT NULL,
  `Drug_GenericName` varchar(20) NOT NULL,
  `Item_Price` float NOT NULL,
  `Item_Quantity` int(15) NOT NULL,
  `Item_Availability` tinyint(1) NOT NULL,
  `Drug_Distributor` varchar(20) NOT NULL,
  `Drug_DForm` varchar(20) NOT NULL,
  `Drug_Description` varchar(1000) NOT NULL,
  `Drug_SideEffects` varchar(1000) DEFAULT NULL,
  `User_ID` int(10) NOT NULL,
  `Category_ID` int(3) NOT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4000000002 ;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Item_ID`, `Drug_BrandName`, `Drug_GenericName`, `Item_Price`, `Item_Quantity`, `Item_Availability`, `Drug_Distributor`, `Drug_DForm`, `Drug_Description`, `Drug_SideEffects`, `User_ID`, `Category_ID`) VALUES
(4000000000, 'a', 'a', 3, 4, 1, 'aa', 'a', 'a', 'a', 1000000000, 5),
(4000000001, 'q', 'q', 2, 2, 1, 'q', 'q', 'qq', 'q', 1000000000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `made_up_of`
--

CREATE TABLE IF NOT EXISTS `made_up_of` (
  `Summary_Sales_ID` int(10) NOT NULL,
  `Transaction_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `made_up_of`
--


-- --------------------------------------------------------

--
-- Table structure for table `summary_sales`
--

CREATE TABLE IF NOT EXISTS `summary_sales` (
  `Summary_Sales_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Summary_Sales_Month` varchar(15) NOT NULL,
  `Summary_Sales_Year` varchar(4) NOT NULL,
  `Summary_Sales_Total` float NOT NULL,
  `User_ID` int(10) NOT NULL,
  PRIMARY KEY (`Summary_Sales_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8000000000 ;

--
-- Dumping data for table `summary_sales`
--


-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `Testimonial_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Testimonial_Author` varchar(50) NOT NULL,
  `Testimonial_DPosting` date NOT NULL,
  `Testimonial_Body` varchar(1000) NOT NULL,
  `User_ID` int(10) NOT NULL,
  PRIMARY KEY (`Testimonial_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9000000000 ;

--
-- Dumping data for table `testimonial`
--


-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `Transaction_ID` int(15) NOT NULL AUTO_INCREMENT,
  `Transaction_Saddress` varchar(50) NOT NULL,
  `Transaction_PayType` varchar(20) NOT NULL,
  `Transaction_Total` float NOT NULL,
  `Transaction_Date` date NOT NULL,
  `Customer_NameOnCard` varchar(15) NOT NULL,
  `Card_Number` varchar(16) NOT NULL,
  `Issuing_Bank` varchar(50) NOT NULL,
  `CVV2_Number` varchar(4) NOT NULL,
  `Card_Type` varchar(50) NOT NULL,
  `Transaction_Dpercentage` int(3) DEFAULT NULL,
  `User_ID` int(10) NOT NULL,
  `Summary_Sales_ID` int(10) NOT NULL,
  PRIMARY KEY (`Transaction_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100000000000000 ;

--
-- Dumping data for table `transaction`
--


-- --------------------------------------------------------

--
-- Table structure for table `used_in`
--

CREATE TABLE IF NOT EXISTS `used_in` (
  `Transaction_ID` int(10) NOT NULL,
  `Item_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_in`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'should be unique primary key',
  `User_FName` varchar(50) NOT NULL,
  `User_LName` varchar(50) NOT NULL,
  `User_MName` varchar(50) DEFAULT NULL,
  `User_Address` varchar(100) NOT NULL,
  `User_Eaddress` varchar(50) NOT NULL,
  `User_Password` varchar(100) NOT NULL,
  `User_Role` varchar(10) NOT NULL,
  `User_Points` int(10) DEFAULT '0',
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `Customer_Eaddress` (`User_Eaddress`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000000006 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_FName`, `User_LName`, `User_MName`, `User_Address`, `User_Eaddress`, `User_Password`, `User_Role`, `User_Points`) VALUES
(1000000000, 'Jorge', 'Interno', 'Urtola', 'Los Banos, Laguna', 'jminterno@gmail.com', 'e6cb1087a8096d2d9ba69999c708cab2d9bd15db', 'admin', 0),
(1000000001, 'Mar Jhel', 'Marinay', 'Inocentes', 'Los Banos, Laguna', 'marinaymarjhel@gmail.com', 'e6cb1087a8096d2d9ba69999c708cab2d9bd15db', 'user', 0),
(1000000002, 'Jan', 'Banares', 'S', 'Los Banos, Laguna', 'jdsbanares@gmail.com', 'e6cb1087a8096d2d9ba69999c708cab2d9bd15db', 'user', 0),
(1000000003, 'Ivan Lyndon', 'Matabang', 'G', 'Los Banos, Laguna', 'ivan.matabang@gmail.com', 'e6cb1087a8096d2d9ba69999c708cab2d9bd15db', 'user', 0),
(1000000004, 'Jonathan', 'Maranan', 'Pumar', 'Los Banos, Laguna', 'jonathanmaranan@gmail.com', 'e6cb1087a8096d2d9ba69999c708cab2d9bd15db', 'user', 0),
(1000000005, 'Cherry', 'Aran', 'U', 'Los Banos, Laguna', 'cmuaran@gmail.com', 'e6cb1087a8096d2d9ba69999c708cab2d9bd15db', 'user', 0);
