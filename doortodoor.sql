-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2021 at 08:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doortodoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

DROP TABLE IF EXISTS `company_info`;
CREATE TABLE IF NOT EXISTS `company_info` (
  `C_ID` int(11) NOT NULL AUTO_INCREMENT,
  `C_Name` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `PhoneNumber` int(20) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1028 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`C_ID`, `C_Name`, `Address`, `Email`, `PhoneNumber`) VALUES
(1021, 'Tools and Kits company ltd', 'Dhaka', 'company@gmail.com', 199237281),
(1022, 'Private Service provider ltd', 'Khilgao', 'private@gmail.com', 23827381),
(1024, 'Construction BD Ltd', 'Dhaka', 'construction@gmail.com', 199237281),
(1025, 'Secure Service Ltd', 'saver', 'Secure@gmail.com', 1820293),
(1026, 'DTD service Provider Ltd', 'Motijheel', 'dtd@gmail.com', 18372836),
(1023, 'Electrical BD ltd', 'gazipur', 'electrical@gmail.com', 9739862),
(1027, 'Wide Gas provider Ltd', 'Mohammodpur', 'Wide@gmail.com', 1872988264);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
CREATE TABLE IF NOT EXISTS `customer_info` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `AreaCode` varchar(256) NOT NULL,
  `PhoneNumber` int(30) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`CustomerID`, `CustomerName`, `Email`, `Password`, `Address`, `AreaCode`, `PhoneNumber`) VALUES
(16, 'Ahad', 'ahad@gmail.com', '16732euw', 'Dhaka', '123456efg', 178536437),
(17, 'Aman', 'aman@gmail.com', '138y9y12w', 'chittagong', '123456efg', 178536437),
(15, 'Rani', 'rani@gmail.com', '1382jwke', 'chittagong', 'kjdeeiw', 178536437),
(14, 'Ridhi', 'ridhi@gmail.com', '2yu23o8he', 'Rangpur', 'pi23di', 183874645),
(25, 'Tonmoy', 'tonmoy@gmail.com', 'gfwfli', 'Dhaka', '123456efg', 178536437),
(19, 'Rakhi', 'rakhi@gmail.com', '3i4yrehiw', 'chittagong', '123456efg', 178536437),
(20, 'Rohan', 'rohan@gmail.com', '23be3kj', 'chittagong', 'pi23di', 178536437),
(21, 'Ayeza khan', 'ayeza@gmail.com', 'j32hge', 'chittagong', '123456efg', 178536437),
(22, 'shuva', 'shuva@gmail.com', 'k3hel3', 'chittagong', '123456efg', 178536437),
(23, 'Bithi', 'bithi@gmail.com', '12345', 'dhaka', 'abc', 186358223),
(24, 'Amir', 'amir@gmail.com', '1234567', 'Rangpur', 'abcde', 178536437),
(26, 'shuva', 'su@gmail.com', 'kjwjgduwe', 'Dhaka', '123456efg', 178536437),
(27, 'ashik', 'ashik@gmail.com', '12345', 'Dhaka', '123456efg', 186275279),
(29, 'neha', 'neha@gmail.com', 'jweghl', 'Feni', 'pi23di', 178536437),
(30, 'milu', 'milu@gmail.com', 'kweggeu', 'Rangpur', '123456abc', 29749864),
(31, 'akash', 'akash12@gmail.com', 'kwgdj', 'tangail', '123456efg', 186275279),
(33, 'lamis', 'lamis@gmail.com', 'jhdw', 'Dhaka', '123456efg', 183874645),
(34, 'sumaiya ', 'sumu@gmail.com', 'kwhep', 'Dhaka', '123456abc', 183874645),
(35, 'Risha', 'risha@gmail.com', ',ndle', 'Dhaka', '123456efg', 183874645),
(36, 'Samia', 'samia@gmail.com', '567', 'Rangpur', 'A9', 1834568479),
(38, 'Sumaiya Binte Shahid', 'sumaiya69@gmail.com', '778', 'chittagong', '123456efg', 18878667),
(39, 'Bithi', 'bithi2@gmail.com', '12345', 'Savar, Dhaka', '12345abc', 1616223344),
(40, 'Risha', 'risha14@gmail.com', '12345', 'Dhaka', '12345abc', 1616223566),
(41, 'Monisa ', 'monisa@gmail.com', '54321', 'mirpur ', 'abc', 1612345678);

-- --------------------------------------------------------

--
-- Table structure for table `give_service`
--

DROP TABLE IF EXISTS `give_service`;
CREATE TABLE IF NOT EXISTS `give_service` (
  `CustomerID` int(11) NOT NULL,
  `Worker_ID` int(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `give_service`
--

INSERT INTO `give_service` (`CustomerID`, `Worker_ID`) VALUES
(29, 0),
(2, 29),
(2, 32);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Pay_ID` int(11) NOT NULL AUTO_INCREMENT,
  `InvoiceNumber` int(255) NOT NULL,
  `Cus_ID` int(255) NOT NULL,
  `W_ID` int(255) NOT NULL,
  `S_ID` varchar(256) NOT NULL,
  `PaymentMethod` varchar(256) NOT NULL,
  `Payment_date` text NOT NULL,
  PRIMARY KEY (`Pay_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `InvoiceNumber`, `Cus_ID`, `W_ID`, `S_ID`, `PaymentMethod`, `Payment_date`) VALUES
(1, 101, 23, 4, 'S13', 'BKASH', '2/3/2021'),
(2, 102, 24, 2, 'S13', 'Rocket', '5/02/2021');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Types_Of_Service` varchar(256) NOT NULL,
  `Cost` int(255) NOT NULL,
  `C_ID` int(255) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`S_ID`, `Types_Of_Service`, `Cost`, `C_ID`) VALUES
(12, 'Electrical', 3000, 1021),
(13, 'Plumber', 3500, 1021),
(21, 'Electrical', 30000, 1022),
(22, 'Gas', 25000, 1022),
(23, 'Plumber', 5000, 1022),
(24, 'Construction', 40000, 1022),
(16, 'Electrical', 30000, 1023),
(15, 'Construction', 60000, 1024),
(14, 'Gas', 5000, 1025),
(20, 'Electrical', 10000, 1025),
(1, 'Electrical', 10000, 1026),
(2, 'Plumber', 10000, 1026),
(3, 'Gas', 3000, 1026),
(9, 'Gas', 5000, 1027);

-- --------------------------------------------------------

--
-- Table structure for table `service_book`
--

DROP TABLE IF EXISTS `service_book`;
CREATE TABLE IF NOT EXISTS `service_book` (
  `Worker_information` varchar(256) NOT NULL,
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `AreaCode` varchar(256) NOT NULL,
  `Payment_Method` varchar(256) NOT NULL,
  `Preferred_schedule` text NOT NULL,
  `Required_Service_name` varchar(256) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_book`
--

INSERT INTO `service_book` (`Worker_information`, `CustomerID`, `CustomerName`, `Email`, `Password`, `AreaCode`, `Payment_Method`, `Preferred_schedule`, `Required_Service_name`) VALUES
('WorkerID: 4 , WorkerName: Mr osman , Expertise_service_name:  \r\n            plumber', 23, 'Bithi', 'bithi@gmail.com', '12345', 'abc', 'BKASH', ' 1/1/2021', 'plumber'),
('WorkerID: 6 , WorkerName: Alam , Expertise_service_name:  \r\n            Construction', 38, 'Sumaiya Binte Shahid', 'sumaiya69@gmail.com', '778', '123456efg', 'ROCKET', ' 2/04/2021', 'Construction'),
('WorkerID: 6 , WorkerName: Alam , Expertise_service_name:  \r\n            Construction', 41, 'Monisa ', 'monisa@gmail.com', '54321', 'abc', 'BKASH', ' 20/03/2021', 'Construction'),
('WorkerID: 5 , WorkerName: Sujon , Expertise_service_name:  \r\n            Construction', 40, 'Risha', 'risha14@gmail.com', '12345', '12345abc', 'ROCKET', ' 18/03/2021', 'Construction'),
('WorkerID: 3 , WorkerName: Mr Hasan , Expertise_service_name:  \r\n            Gas', 39, 'Bithi', 'bithi2@gmail.com', '12345', '12345abc', 'BANK', ' 22/03/2021', 'Gas'),
('WorkerID: 1 , WorkerName: Mr Rahim , Expertise_service_name:  \r\n            Electrical', 36, 'Bithi', 'bithi23@gmail.com', '12345', '12345abc', 'CASH ON DELIVERY', ' 20/03/2021', 'electrical'),
('WorkerID: 4 , WorkerName: Mr osman , Expertise_service_name:  \r\n            plumber', 35, 'Risha', 'risha@gmail.com', ',ndle', '123456efg', 'CASH ON DELIVERY', ' 17/03/2021', 'plumber');

-- --------------------------------------------------------

--
-- Table structure for table `service_invoice`
--

DROP TABLE IF EXISTS `service_invoice`;
CREATE TABLE IF NOT EXISTS `service_invoice` (
  `InvoiceNumber` int(255) NOT NULL AUTO_INCREMENT,
  `Cus_ID` int(255) NOT NULL,
  `W_ID` int(255) NOT NULL,
  `S_ID` varchar(255) NOT NULL,
  `Total_Cost` int(255) NOT NULL,
  `PaymentMethod` varchar(256) NOT NULL,
  `Invoice_Date` text NOT NULL,
  `Payment_Due_Date` text NOT NULL,
  PRIMARY KEY (`InvoiceNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_invoice`
--

INSERT INTO `service_invoice` (`InvoiceNumber`, `Cus_ID`, `W_ID`, `S_ID`, `Total_Cost`, `PaymentMethod`, `Invoice_Date`, `Payment_Due_Date`) VALUES
(101, 23, 4, 'S13', 1000, 'BKASH', '25/2/2021', '5/3/2021'),
(102, 24, 2, 'S13', 2000, 'Rocket', '27/01/2021', '06/02/2021');

-- --------------------------------------------------------

--
-- Table structure for table `worker_info`
--

DROP TABLE IF EXISTS `worker_info`;
CREATE TABLE IF NOT EXISTS `worker_info` (
  `Worker_ID` int(11) NOT NULL AUTO_INCREMENT,
  `WorkerName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `AreaCode` varchar(256) NOT NULL,
  `PhoneNumber` int(30) NOT NULL,
  `Salary` int(255) NOT NULL,
  `Expertise_service_name` varchar(256) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  PRIMARY KEY (`Worker_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_info`
--

INSERT INTO `worker_info` (`Worker_ID`, `WorkerName`, `Email`, `Address`, `AreaCode`, `PhoneNumber`, `Salary`, `Expertise_service_name`, `S_ID`, `C_ID`) VALUES
(1, 'Mr Rahim', 'rahim@gmail.com', 'kamarpara', '12345abc', 19726353, 30000, 'Electrical', 12, 1021),
(2, 'Mr Kamal', 'kamal@gmail.com', 'pakpara', '123456efg', 186358223, 20000, 'Plumber', 13, 1021),
(3, 'Mr Hasan', 'hasan@gmail.com', 'mulatol', '23456xyz', 1223222, 30000, 'Gas', 14, 1025),
(4, 'Mr osman', 'osman@gmail.com', 'munshipara', '123456efg', 18939123, 20000, 'plumber', 23, 1022),
(5, 'Sujon', 'sujon@gmail.com', 'Dhaka', '12345abc', 1874837938, 10000, 'Construction', 24, 1022),
(6, 'Alam', 'alam@gmail.com', 'Tangail', 'abc', 1984836475, 1500, 'Construction', 15, 1024),
(7, 'Bob', 'bob@gmail.com', 'Rangpur', '123456abc', 177756564, 2000, 'Electrical', 1, 1026),
(8, 'Hiron', 'hiron@gmail.com', 'Feni', 'abcde', 1837343463, 2000, 'Gas', 14, 1025);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
