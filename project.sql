-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 07:22 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'currconve');

-- --------------------------------------------------------

--
-- Table structure for table `chf2inr`
--

CREATE TABLE IF NOT EXISTS `chf2inr` (
  `Date` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Open` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `High` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `Low` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Change` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chf2inr`
--

INSERT INTO `chf2inr` (`Date`, `Price`, `Open`, `High`, `Low`, `Change`) VALUES
('May 16', '67.642', '69.253', '70.225', '67.218', '-2.27'),
('Jun 16', '69.156', '67.618', '70.749', '67.414', '2.24'),
('Jul 16', '68.766', '69.118', '69.663', '67.429', '-0.56'),
('Aug 16', '68.069', '68.705', '70.164', '67.832', '-1.01'),
('Sep 16', '68.505', '68.052', '69.240', '67.672', '0.64'),
('Oct 16', '67.421', '68.393', '68.648', '66.781', '-1.58'),
('Nov 16', '67.412', '67.383', '70.082', '67.143', '-0.01'),
('Dec 16', '66.727', '67.415', '67.776', '65.594', '-1.02'),
('Jan 17', '68.242', '66.541', '68.487', '66.151', '2.27'),
('Feb 17', '66.340', '68.179', '68.381', '65.991', '-2.79'),
('Mar 17', '64.659', '66.302', '66.424', '64.637', '-2.53'),
('Apr 17', '64.600', '64.662', '65.342', '63.579', '-0.09'),
('May 17', '66.656', '64.638', '66.835', '63.747', '3.18'),
('Jun 17', '67.432', '66.663', '67.713', '65.977', '1.16'),
('Jul 17', '66.394', '67.412', '68.240', '65.965', '-1.54'),
('Aug 17', '66.696', '66.393', '67.889', '65.172', '0.45'),
('Sep 17', '67.455', '66.689', '67.819', '66.102', '1.14'),
('Oct 17', '64.899', '67.452', '67.473', '64.774', '-3.79'),
('Nov 17', '65.566', '64.906', '66.325', '64.326', '1.03'),
('Dec 17', '65.520', '65.555', '66.263', '64.460', '-0.07'),
('Jan 18', '68.231', '65.513', '68.462', '64.686', '4.14'),
('Feb 18', '69.034', '68.231', '69.760', '67.886', '1.18'),
('Mar 18', '68.569', '69.041', '69.839', '68.017', '-0.67'),
(NULL, 'Highest:70.749', 'Lowest:63.579', 'Difference:7.170', 'Average:67.130', 'Change %:-0.932');

-- --------------------------------------------------------

--
-- Table structure for table `cny2inr`
--

CREATE TABLE IF NOT EXISTS `cny2inr` (
  `Date` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `Open` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `High` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `Low` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Change` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cny2inr`
--

INSERT INTO `cny2inr` (`Date`, `Price`, `Open`, `High`, `Low`, `Change`) VALUES
('May 16', '10.2096', '10.2583', '10.3454', '10.1820', '-0.49'),
('Jun 16', '10.1539', '10.2030', '10.3270', '10.1203', '-0.55'),
('Jul 16', '10.0424', '10.1499', '10.1548', '9.9883', '-1.10'),
('Aug 16', '10.0269', '10.0503', '10.1274', '10.0095', '-0.15'),
('Sep 16', '9.9760', '10.0212', '10.0659', '9.9193', '-0.51'),
('Oct 16', '9.8417', '9.9698', '10.0247', '9.8326', '-1.35'),
('Nov 16', '9.9608', '9.8369', '9.9853', '9.7510', '1.21'),
('Dec 16', '9.7846', '9.9543', '9.9589', '9.7236', '-1.77'),
('Jan 17', '9.8109', '9.7804', '9.9891', '9.7740', '0.27'),
('Feb 17', '9.7157', '9.8236', '9.8341', '9.6830', '-0.97'),
('Mar 17', '9.4176', '9.7088', '9.7299', '9.3919', '-3.07'),
('Apr 17', '9.3262', '9.4036', '9.4711', '9.2741', '-0.97'),
('May 17', '9.4727', '9.3195', '9.4744', '9.2759', '1.57'),
('Jun 17', '9.5297', '9.4876', '9.5729', '9.4144', '0.60'),
('Jul 17', '9.5442', '9.5434', '9.5623', '9.4763', '0.15'),
('Aug 17', '9.7020', '9.5386', '9.7301', '9.4490', '1.65'),
('Sep 17', '9.8160', '9.7005', '9.9286', '9.6961', '1.18'),
('Oct 17', '9.7590', '9.8626', '9.9380', '9.7314', '-0.58'),
('Nov 17', '9.7523', '9.7614', '9.8757', '9.7215', '-0.07'),
('Dec 17', '9.8115', '9.7541', '9.8369', '9.6797', '0.61'),
('Jan 18', '10.1052', '9.8216', '10.1409', '9.7437', '2.99'),
('Feb 18', '10.3001', '10.0922', '10.3288', '10.0515', '1.93'),
('Mar 18', '10.3529', '10.3064', '10.3888', '10.2256', '0.51'),
(NULL, 'Highest:10.3888', 'Lowest:9.2741', 'Difference:1.1146', 'Average:9.8440', 'Change %:0.9047');

-- --------------------------------------------------------

--
-- Table structure for table `eur2inr`
--

CREATE TABLE IF NOT EXISTS `eur2inr` (
  `Date` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `Open` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `High` varchar(18) CHARACTER SET utf8 DEFAULT NULL,
  `Low` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `Change` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eur2inr`
--

INSERT INTO `eur2inr` (`Date`, `Price`, `Open`, `High`, `Low`, `Change`) VALUES
('May 16', '74.8165', '76.0040', '77.0325', '74.3160', '-1.68'),
('Jun 16', '74.9660', '74.7920', '76.9390', '73.9470', '0.20'),
('Jul 16', '74.4805', '74.9380', '75.4135', '73.4990', '-0.65'),
('Aug 16', '74.7355', '74.4460', '76.2765', '73.7990', '0.34'),
('Sep 16', '74.8155', '74.7040', '75.5175', '73.9720', '0.11'),
('Oct 16', '73.2275', '74.7510', '74.8565', '72.4860', '-2.12'),
('Nov 16', '72.6315', '73.2030', '75.6245', '71.8930', '-0.81'),
('Dec 16', '71.4610', '72.6010', '73.4570', '70.3540', '-1.61'),
('Jan 17', '72.9025', '71.5390', '73.3885', '70.7190', '2.02'),
('Feb 17', '70.5750', '72.8690', '73.0910', '70.2640', '-3.19'),
('Mar 17', '69.0955', '70.5220', '71.3035', '69.0590', '-2.10'),
('Apr 17', '70.0565', '69.1170', '70.7005', '67.9160', '1.39'),
('May 17', '72.5320', '70.1080', '73.0700', '69.7970', '3.53'),
('Jun 17', '73.8350', '72.5290', '74.1010', '71.7490', '1.80'),
('Jul 17', '76.0255', '73.8255', '76.0575', '73.3215', '2.97'),
('Aug 17', '76.1465', '75.9955', '77.2665', '74.6155', '0.16'),
('Sep 17', '77.1570', '76.1530', '77.9060', '75.8700', '1.33'),
('Oct 17', '75.4075', '77.1885', '77.4095', '75.2605', '-2.27'),
('Nov 17', '76.7690', '75.4080', '77.4000', '74.8680', '1.81'),
('Dec 17', '76.5950', '76.7690', '77.0140', '75.2180', '-0.23'),
('Jan 18', '78.9355', '76.6205', '79.6975', '75.8655', '3.06'),
('Feb 18', '79.5170', '78.8910', '80.4050', '78.4800', '0.74'),
('Mar 18', '80.5786', '79.5010', '81.0640', '79.2300', '1.34'),
(NULL, 'Highest:81.0640', 'Lowest:67.9160', 'Difference:13.1480', 'Average:74.6636', 'Change %:5.8900');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `username` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob` int(10) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `mob`, `feedback`) VALUES
('parth desa', 'pd@gmail.com', 2147483647, 'nice work karan!'),
('karan', 'www.badsahk@gmail.co', 2147483647, 'nice'),
('karan', 'www.acs@gmail.com', 2147483647, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `gbp2inr`
--

CREATE TABLE IF NOT EXISTS `gbp2inr` (
  `Date` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `Open` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `High` varchar(17) CHARACTER SET utf8 DEFAULT NULL,
  `Low` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Change` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gbp2inr`
--

INSERT INTO `gbp2inr` (`Date`, `Price`, `Open`, `High`, `Low`, `Change`) VALUES
('Mar 16', '95.152', '94.905', '96.699', '93.971', '0.25'),
('Apr 16', '97.070', '95.128', '97.545', '93.348', '2.02'),
('May 16', '97.305', '97.024', '99.234', '95.559', '0.24'),
('Jun 16', '89.854', '97.284', '101.048', '89.116', '-7.66'),
('Jul 16', '88.158', '89.827', '90.253', '86.251', '-1.89'),
('Aug 16', '87.989', '88.145', '89.549', '85.984', '-0.19'),
('Sep 16', '86.366', '87.976', '89.191', '85.972', '-1.84'),
('Oct 16', '81.650', '86.097', '86.175', '78.817', '-5.46'),
('Nov 16', '85.789', '81.577', '86.029', '81.399', '5.07'),
('Dec 16', '83.846', '85.763', '86.921', '82.883', '-2.26'),
('Jan 17', '84.927', '83.871', '86.231', '81.654', '1.29'),
('Feb 17', '82.609', '84.902', '85.717', '82.495', '-2.73'),
('Mar 17', '81.428', '82.575', '82.817', '79.532', '-1.43'),
('Apr 17', '83.259', '81.315', '83.433', '79.446', '2.25'),
('May 17', '83.153', '83.249', '84.629', '82.385', '-0.13'),
('Jun 17', '84.180', '83.147', '84.382', '81.237', '1.24'),
('Jul 17', '84.840', '84.110', '84.898', '82.677', '0.78'),
('Aug 17', '82.671', '84.797', '84.883', '81.821', '-2.56'),
('Sep 17', '87.496', '82.668', '88.461', '82.531', '5.84'),
('Oct 17', '86.007', '87.444', '87.541', '85.010', '-1.70'),
('Nov 17', '87.233', '85.999', '87.353', '84.230', '1.43'),
('Dec 17', '86.276', '87.225', '87.394', '85.216', '-1.10'),
('Jan 18', '90.190', '86.274', '91.197', '85.658', '4.54'),
('Feb 18', '89.733', '90.186', '91.582', '88.469', '-0.51'),
('Mar 18', '91.950', '89.754', '92.570', '89.487', '2.47'),
(NULL, 'Highest:101.048', 'Lowest:78.817', 'Difference:22.231', 'Average:87.165', 'Change %:-3.127');

-- --------------------------------------------------------

--
-- Table structure for table `usd2inr`
--

CREATE TABLE IF NOT EXISTS `usd2inr` (
  `Date` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `Price` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Open` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `High` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `Low` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `Change` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usd2inr`
--

INSERT INTO `usd2inr` (`Date`, `Price`, `Open`, `High`, `Low`, `Change`) VALUES
('May 16', '67.209', '66.425', '67.780', '66.235', '1.18'),
('Jun 16', '67.504', '67.207', '68.222', '66.451', '0.44'),
('Jul 16', '66.655', '67.524', '67.571', '66.625', '-1.26'),
('Aug 16', '66.973', '66.720', '67.370', '66.570', '0.48'),
('Sep 16', '66.556', '66.962', '67.148', '66.260', '-0.62'),
('Oct 16', '66.686', '66.556', '67.005', '66.373', '0.20'),
('Nov 16', '68.598', '66.685', '68.881', '66.227', '2.87'),
('Dec 16', '67.955', '68.595', '68.598', '67.318', '-0.94'),
('Jan 17', '67.515', '67.970', '68.516', '67.455', '-0.65'),
('Feb 17', '66.725', '67.675', '67.710', '66.615', '-1.17'),
('Mar 17', '64.860', '66.700', '66.900', '64.800', '-2.80'),
('Apr 17', '64.290', '64.820', '65.190', '63.940', '-0.88'),
('May 17', '64.510', '64.275', '65.025', '63.985', '0.34'),
('Jun 17', '64.620', '64.488', '64.840', '64.167', '0.17'),
('Jul 17', '64.200', '64.680', '64.935', '64.075', '-0.65'),
('Aug 17', '63.935', '64.105', '64.328', '63.565', '-0.41'),
('Sep 17', '65.310', '63.925', '65.895', '63.780', '2.15'),
('Oct 17', '64.750', '65.600', '65.642', '64.695', '-0.86'),
('Nov 17', '64.490', '64.710', '65.550', '64.280', '-0.40'),
('Dec 17', '63.840', '64.505', '64.730', '63.790', '-1.01'),
('Jan 18', '63.550', '63.860', '64.130', '63.250', '-0.45'),
('Feb 18', '65.210', '63.650', '65.320', '63.560', '2.61'),
('Mar 18', '65.025', '65.260', '65.480', '64.685', '-0.28'),
(NULL, 'Highest:68.881', 'Lowest:63.250', 'Difference:5.631', 'Average:65.694', 'Change %:-2.108');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `IFSC` varchar(20) NOT NULL,
  `acc_no` varchar(30) NOT NULL,
  `balance` int(10) NOT NULL,
  `credit` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `email`, `mobilenumber`, `password`, `bank_name`, `IFSC`, `acc_no`, `balance`, `credit`) VALUES
('bhut', 'www.abs@gmail.com', 9876332211, 'hello', 'SBI', '2122546789', '654323', 5994, 4006),
('karan', 'www.abc@gmail.com', 9876332211, 'hello', 'SBI', '2122546789', '654323', 6661, 3339);
