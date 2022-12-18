-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 09:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `just library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Edition` varchar(20) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `Title`, `Publisher`, `Edition`, `Price`) VALUES
(111, 'Computer Skills', 'Random House', 'First', 21),
(112, 'Introduction To C++', 'Willy And Sons', 'First', 15),
(114, 'Database Concepts', 'Random House', 'Second', 33),
(211, 'Guide To Oracle', 'Random House', 'Third', 27),
(421, 'Data Structure', 'Pearson', 'Second', 42);

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `Num` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` int(15) NOT NULL,
  `BDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`Num`, `Name`, `Phone`, `BDate`) VALUES
(1, 'Rami', 2545644, '1988-05-28'),
(2, 'Ola', 9872422, '1987-02-24'),
(5, 'Eyad', 5489720, '1985-08-10'),
(7, 'Ahmad', 3448445, '1991-10-16'),
(9, 'Qusai', 5436247, '1996-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `ID` int(10) NOT NULL,
  `Num` int(5) NOT NULL,
  `Out_Date` date NOT NULL,
  `Due-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`ID`, `Num`, `Out_Date`, `Due-Date`) VALUES
(111, 5, '2013-10-25', '2013-11-04'),
(111, 7, '2013-10-27', '2013-11-05'),
(211, 5, '2013-10-25', '2013-11-10'),
(421, 1, '2013-10-30', '2013-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `ID` int(10) NOT NULL,
  `Num` int(5) NOT NULL,
  `SDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`ID`, `Num`, `SDate`) VALUES
(111, 5, '2013-11-02'),
(114, 9, '2013-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
