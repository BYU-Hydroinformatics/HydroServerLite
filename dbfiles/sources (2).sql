-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 03:05 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yellowstone`
--

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`SourceID`, `Organization`, `SourceDescription`, `SourceLink`, `ContactName`, `Phone`, `Email`, `Address`, `City`, `State`, `ZipCode`, `Citation`, `MetadataID`) VALUES
(2, 'Dr. Millers Research ', 'For several years Dr. Miller has been studying the trophic state of around 40 lakes in Yellowstone National Park', 'http://www.byu.edu', 'Woodruff Miller', '801-422-6331', 'wood_miller@byu.edu', 'BYU', 'Provo', 'UT', '84606', '', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
