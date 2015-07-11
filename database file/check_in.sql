-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 08:51 PM
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
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_warden_code` int(11) NOT NULL,
  `from_warden` varchar(30) NOT NULL,
  `to_roll_no` int(11) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `last_date` date NOT NULL,
  `remark` varchar(200) NOT NULL,
  `date_submit` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `from_warden_code`, `from_warden`, `to_roll_no`, `file_name`, `last_date`, `remark`, `date_submit`) VALUES
(108, 99100, 'Pradeep Kumar', 131410, '0900766b813eb617.pdf', '2015-06-11', 'do any 3ques', '2015-06-06'),
(109, 99100, 'Pradeep Kumar', 131411, '0900766b813eb617.pdf', '2015-06-11', 'do any 3ques', '2015-06-06'),
(110, 99100, 'Pradeep Kumar', 131412, '0900766b813eb617.pdf', '2015-06-11', 'do any 3ques', '2015-06-06'),
(111, 99100, 'Pradeep Kumar', 131413, '0900766b813eb617.pdf', '2015-06-11', 'do any 3ques', '2015-06-06'),
(112, 99100, 'Pradeep Kumar', 131414, '0900766b813eb617.pdf', '2015-06-11', 'do any 3ques', '2015-06-06'),
(113, 99100, 'Pradeep Kumar', 131415, '0900766b813eb617.pdf', '2015-06-11', 'do any 3ques', '2015-06-06'),
(114, 99100, 'Pradeep Kumar', 131416, 'DBMS (11B11CI312) T-2 October, 2012 (Sem 3).pdf', '2015-06-09', 'within 10 days', '2015-06-06'),
(115, 99100, 'Pradeep Kumar', 131416, 'Untitled.png', '2015-06-10', 'opo', '2015-06-06');

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
-- Table structure for table `hostel_application`
--

CREATE TABLE IF NOT EXISTS `hostel_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` int(11) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `warden_code` varchar(40) NOT NULL,
  `from_hostel` varchar(50) NOT NULL,
  `to_hostel` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_submit` date NOT NULL,
  `date_status_change` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_last_seen` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hostel_application`
--

INSERT INTO `hostel_application` (`id`, `roll_no`, `student_name`, `warden_code`, `from_hostel`, `to_hostel`, `message`, `date_submit`, `date_status_change`, `status`, `date_last_seen`) VALUES
(1, 131416, 'prateek joshi', '99100', 'parmar bhawan 14c-29', 'Shastri bhawan h-11', 'change the hostel', '2015-06-04', '2015-07-05', 'Approve', '0000-00-00'),
(2, 131416, 'prateek joshi', '99100', '67', 'kdjk', 'hjhj', '2015-07-05', '0000-00-00', 'Under Review', '0000-00-00'),
(3, 131416, 'prateek joshi', '99100', 'shastri 45', 'parmar h-34', 'change it .', '2015-07-05', '0000-00-00', 'Under Review', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE IF NOT EXISTS `leave_application` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_from_roll_no` int(11) NOT NULL,
  `leave_student_name` varchar(50) NOT NULL,
  `leave_warden_code` varchar(50) NOT NULL,
  `leave_hostel_no` varchar(30) NOT NULL,
  `leave_going_to` varchar(50) NOT NULL,
  `leave_from_date` date NOT NULL,
  `leave_till_date` date NOT NULL,
  `leave_other_info` varchar(400) NOT NULL,
  `leave_date_submit` datetime NOT NULL,
  `leave_date_status_change` datetime NOT NULL,
  `leave_status` varchar(20) NOT NULL,
  `leave_type` varchar(100) NOT NULL,
  `leave_seen` varchar(30) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`leave_id`, `leave_from_roll_no`, `leave_student_name`, `leave_warden_code`, `leave_hostel_no`, `leave_going_to`, `leave_from_date`, `leave_till_date`, `leave_other_info`, `leave_date_submit`, `leave_date_status_change`, `leave_status`, `leave_type`, `leave_seen`) VALUES
(13, 111652, '', '99100', '', 'aa', '2015-03-27', '2015-03-04', 'I want to spend some tym with my gf so plz grant me 10 days of holiday.\r\n', '2015-03-31 00:00:00', '2015-06-06 00:00:00', 'Approve', 'leave', 'seen'),
(19, 131416, 'prateek joshi', '99100', '14c-31', 'New York', '2015-04-02', '2015-04-24', 'I m feeling really very sick and I need an urgent medical attention. Please approve my request asap', '2015-04-03 00:00:00', '2015-04-19 00:00:00', '  Reject  ', 'leave', 'seen'),
(20, 131416, 'prateek joshi', '99100', '13c-67', 'delhi', '2015-04-08', '2015-04-16', 'message', '2015-04-03 00:00:00', '2015-04-03 00:00:00', '  Reject  ', 'leave', 'seen'),
(21, 131416, 'prateek joshi', '99100', '98c', 'dubai', '2015-04-07', '2015-04-08', 'msg', '2015-04-05 00:00:00', '2015-04-05 00:00:00', '  Reject  ', 'leave', 'seen'),
(22, 131416, 'prateek joshi', '99100', 'qqw', 'london', '2015-04-08', '2015-04-30', 'hhh', '2015-04-05 00:00:00', '0000-00-00 00:00:00', 'Under Review', 'leave', 'Unseen'),
(23, 131416, 'prateek joshi', '99100', 'dfdf', 'fddf', '2015-04-01', '2015-05-01', 'wedwd', '2015-04-11 00:00:00', '2015-04-19 00:00:00', 'Approve', 'leave', 'seen'),
(26, 121416, 'satyam', '221', '14c-90', 'manali', '2015-04-07', '2015-04-27', 'hello', '2015-04-01 00:00:00', '0000-00-00 00:00:00', 'approved', 'leave', 'seen'),
(28, 131222, 'kishan keswani', '99100', '14c-56', 'delhi', '2015-06-03', '2015-06-25', 'I wanna repair my laptop', '2015-06-02 00:00:00', '2015-06-03 00:00:00', 'Approve', 'leave', 'seen'),
(29, 131416, 'prateek joshi', '99100', 'sdsdds', 'assa', '2015-07-02', '2015-07-08', 'dssdds', '2015-07-11 00:00:00', '0000-00-00 00:00:00', 'Under Review', '', 'Unseen'),
(30, 131222, 'kishan keswani', '99100', '14c-46', 'Alaska', '2015-07-21', '2015-07-24', 'I am coming alaska.', '2015-07-11 00:00:00', '0000-00-00 00:00:00', 'Under Review', '', 'Unseen');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_roll_no` int(11) NOT NULL,
  `from_name` varchar(30) NOT NULL,
  `to_roll_no` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_roll_no`, `from_name`, `to_roll_no`, `message`, `date`) VALUES
(33, 131416, 'prateek joshi', 131222, 'kioui', '2015-06-05'),
(34, 131416, 'prateek joshi', 0, '0', '2015-06-05'),
(35, 131222, 'kishan keswani', 131416, 'hello prateek , how are you ?', '2015-06-05'),
(36, 131416, 'prateek joshi', 131445, 'this is a test message', '2015-06-05'),
(37, 99100, 'Pradeep Kumar', 131222, 'mww edsdds', '2015-06-05'),
(38, 99100, 'Pradeep Kumar', 131222, 'mww edsdds', '2015-06-05'),
(39, 99100, 'Pradeep Kumar', 131222, 'sdsdvddfdf', '2015-06-05'),
(40, 99100, 'Pradeep Kumar', 131222, 'dssdsddsds', '2015-06-05'),
(41, 131416, 'prateek joshi', 99100, 'hello sir. this is a test message', '2015-06-05'),
(42, 99100, 'Pradeep Kumar', 131416, 'hell....test msg', '2015-07-05');

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
  `student_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_roll_no`, `student_name`, `student_email`, `student_password`, `student_year`, `student_semester`, `student_branch`, `student_parent_email`, `student_photo`) VALUES
(1, 131416, 'prateek joshi', 'joshi.prateek15@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2', '4', 'IT', 'prateekthegreat15@gmail.com', '131416.jpg'),
(2, 131222, 'kishan keswani', 'keswani@xmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '3', '2', 'cse', 'parent@juit.com', '131222.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students_outside`
--

CREATE TABLE IF NOT EXISTS `students_outside` (
  `outside_id` int(11) NOT NULL AUTO_INCREMENT,
  `outside_roll_no` int(11) NOT NULL,
  `outside_date_out` datetime NOT NULL,
  `outside_date_in` datetime DEFAULT NULL,
  `outside_date_allowed` date NOT NULL,
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
