-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 03:06 PM
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
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`VariableID`, `VariableCode`, `VariableName`, `Speciation`, `VariableunitsID`, `SampleMedium`, `ValueType`, `IsRegular`, `TimeSupport`, `TimeunitsID`, `DataType`, `GeneralCategory`, `NoDataValue`) VALUES
(1, 'YST', 'Phosphorus, total', 'P', 206, 'Surface Water', 'Field Observation', 1, 0, 105, 'Unknown', 'Water Quality', -9999),
(3, 'YSTSD', 'Secchi depth', 'Unknown', 52, 'Surface Water', 'Field Observation', 0, 0, 100, 'Average', 'Water Quality', -9999),
(6, 'chl-a', 'Chlorophyll a', 'Not Applicable', 320, 'Surface Water', 'Field Observation', 0, 0, 106, 'Incremental', 'Water Quality', -9999),
(7, 'ph-ppb', 'Phosphorus, total', 'P', 199, 'Surface Water', 'Sample', 0, 0, 106, 'Incremental', 'Water Quality', -9999),
(8, 'flo', 'Discharge', 'Not Applicable', 35, 'Surface Water', 'Field Observation', 0, 0, 106, 'Incremental', 'Hydrology', -9999),
(9, 'hrt', 'Hydraulic_Residence_Time', 'Not Applicable', 107, 'Surface Water', 'Model Simulation Result', 0, 0, 107, 'Average', 'Hydrology', -9999),
(10, 'P_ret', 'Phosphorus_Retention_Coefficient', 'Not Applicable', 137, 'Surface Water', 'Derived Value', 0, 0, 107, 'Unknown', 'Water Quality', -9999),
(12, 'pripro', 'Primary Productivity', 'Unknown', 137, 'Surface Water', 'Unknown', 0, 0, 107, 'Unknown', 'Water Quality', -9999),
(13, 'carl', 'Carlson_TSI', 'Not Applicable', 137, 'Surface Water', 'Field Observation', 0, 0, 106, 'Incremental', 'Water Quality', -9999),
(14, 'burns', 'Burns_TLI', 'Not Applicable', 137, 'Surface Water', 'Field Observation', 0, 0, 106, 'Incremental', 'Water Quality', -9999),
(15, 'naum', 'Naumann_TI', 'Not Applicable', 137, 'Surface Water', 'Field Observation', 0, 0, 106, 'Incremental', 'Water Quality', -9999);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
