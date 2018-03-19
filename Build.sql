-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-08-24 05:03:20
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Build`
--

-- --------------------------------------------------------

--
-- 表的结构 `Job`
--

CREATE TABLE `Job` (
  `JID` varchar(100) NOT NULL,
  `JName` varchar(100) NOT NULL,
  `JLocation` varchar(100) NOT NULL,
  `JSalary` varchar(40) NOT NULL,
  `JPostTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `JDescription` text NOT NULL,
  `JUID` varchar(100) NOT NULL,
  `Jcategories` varchar(100) NOT NULL,
  `JLang` varchar(20) NOT NULL,
  `JSkill` varchar(50) NOT NULL,
  `JType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `User`
--

CREATE TABLE `User` (
  `UMail` varchar(50) NOT NULL,
  `UPass` varchar(16) NOT NULL,
  `UID` varchar(100) NOT NULL,
  `UFname` varchar(30) NOT NULL,
  `ULname` varchar(30) NOT NULL,
  `UDoB` date NOT NULL,
  `UAdress` varchar(200) NOT NULL,
  `Utype` int(1) NOT NULL,
  `Uphone` varchar(20) NOT NULL,
  `Unationality` varchar(30) NOT NULL,
  `Uoccupation` varchar(30) NOT NULL,
  `Uintro` text NOT NULL,
  `UOralLang` varchar(20) NOT NULL,
  `UReadLang` varchar(20) NOT NULL,
  `UName` varchar(20) NOT NULL,
  `UAge` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `User`
--

INSERT INTO `User` (`UMail`, `UPass`, `UID`, `UFname`, `ULname`, `UDoB`, `UAdress`, `Utype`, `Uphone`, `Unationality`, `Uoccupation`, `Uintro`, `UOralLang`, `UReadLang`, `UName`, `UAge`) VALUES
('', '', '599e3f1122534', '', '', '1992-01-01', '', 1, '', '', '', '', '', '', '', 0),
('', '', '599e3f3d4921b', '', '', '1992-01-01', '', 1, '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Job`
--
ALTER TABLE `Job`
  ADD PRIMARY KEY (`JID`),
  ADD KEY `User_Post_Job` (`JUID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UID`);

--
-- 限制导出的表
--

--
-- 限制表 `Job`
--
ALTER TABLE `Job`
  ADD CONSTRAINT `User_Post_Job` FOREIGN KEY (`JUID`) REFERENCES `User` (`UID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
