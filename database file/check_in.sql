-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 03:14 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `check_in`
--
CREATE DATABASE IF NOT EXISTS `check_in` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `check_in`;

-- --------------------------------------------------------

--
-- Table structure for table `guards`
--

CREATE TABLE IF NOT EXISTS `guards` (
  `guard_id` int(11) NOT NULL AUTO_INCREMENT,
  `guard_code` int(11) NOT NULL,
  `guard_name` varchar(50) NOT NULL,
  `guard_password` varchar(50) NOT NULL,
  PRIMARY KEY (`guard_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guards`
--

INSERT INTO `guards` (`guard_id`, `guard_code`, `guard_name`, `guard_password`) VALUES
(1, 55100, 'Guard 1', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE IF NOT EXISTS `leave_application` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_from_roll_no` int(11) NOT NULL,
  `leave_warden_code` varchar(50) NOT NULL,
  `leave_going_to` varchar(50) NOT NULL,
  `leave_from_date` date NOT NULL,
  `leave_till_date` date NOT NULL,
  `leave_other_info` varchar(400) NOT NULL,
  `leave_date_submit` datetime NOT NULL,
  `leave_date_status_change` datetime NOT NULL,
  `leave_status` int(11) NOT NULL,
  `leave_msg_from_warden` varchar(400) NOT NULL,
  `leave_seen` int(11) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`leave_id`, `leave_from_roll_no`, `leave_warden_code`, `leave_going_to`, `leave_from_date`, `leave_till_date`, `leave_other_info`, `leave_date_submit`, `leave_date_status_change`, `leave_status`, `leave_msg_from_warden`, `leave_seen`) VALUES
(5, 131416, '99100', 'shimla', '2015-03-12', '2015-03-12', 'sir\r\nplz grant me 5 days of holiday as i m really very bored with college studies.I wanna leave . \r\nThank you \r\nJoker', '2015-03-31 00:00:00', '0000-00-00 00:00:00', -1, '', -1),
(13, 111652, '99100', 'aa', '2015-03-27', '2015-03-04', 'I want to spend some tym with my gf so plz grant me 10 days of holiday.\r\n', '2015-03-31 00:00:00', '0000-00-00 00:00:00', -1, '', -1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_roll_no` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_password` varchar(50) NOT NULL,
  `student_year` varchar(100) NOT NULL,
  `student_semester` varchar(100) NOT NULL,
  `student_branch` varchar(100) NOT NULL,
  `student_parent_email` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_roll_no`, `student_name`, `student_email`, `student_password`, `student_year`, `student_semester`, `student_branch`, `student_parent_email`) VALUES
(1, 131416, 'prateek joshi', 'joshi.prateek15@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2', '4', 'IT', 'prateekthegreat15@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students_outside`
--

CREATE TABLE IF NOT EXISTS `students_outside` (
  `outside_id` int(11) NOT NULL AUTO_INCREMENT,
  `outside_roll_no` int(11) NOT NULL,
  `outside_date_out` datetime NOT NULL,
  `outside_date_in` datetime NOT NULL,
  `outside_date_allow` date NOT NULL,
  `outside_year` int(11) NOT NULL,
  `outside_gender` varchar(20) NOT NULL,
  PRIMARY KEY (`outside_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE IF NOT EXISTS `warden` (
  `warden_id` int(11) NOT NULL AUTO_INCREMENT,
  `warden_code` int(11) NOT NULL,
  `warden_name` varchar(50) NOT NULL,
  `warden_email` varchar(50) NOT NULL,
  `warden_password` varchar(50) NOT NULL,
  PRIMARY KEY (`warden_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`warden_id`, `warden_code`, `warden_name`, `warden_email`, `warden_password`) VALUES
(1, 99100, 'Pradeep Kumar', 'prateekthegreat15@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
