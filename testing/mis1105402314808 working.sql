-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: 173.201.88.100
-- Generation Time: Mar 16, 2011 at 12:23 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis1105402314808`
--

-- --------------------------------------------------------

--
-- Table structure for table `columns`
--

CREATE TABLE `columns` (
  `columnID` int(255) NOT NULL auto_increment,
  `csvHeader` varchar(255) NOT NULL,
  `tableField` varchar(255) NOT NULL,
  `table` varchar(255) NOT NULL,
  PRIMARY KEY  (`columnID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `columns`
--

INSERT INTO `columns` VALUES(1, 'ID', 'ID', 'participant');
INSERT INTO `columns` VALUES(2, 'Date Updated', 'Date_Updated', 'participant');
INSERT INTO `columns` VALUES(3, 'Date Added', 'Date_Added', 'participant');
INSERT INTO `columns` VALUES(4, 'FOCUS_ID', 'FOCUS_ID', 'participant');
INSERT INTO `columns` VALUES(5, 'ParticipationDate1', 'Participation_Date_1', 'participant');
INSERT INTO `columns` VALUES(6, 'Participation Date 2', 'Participation_Date _2', 'participant');
INSERT INTO `columns` VALUES(7, 'State', 'State', 'participant');
INSERT INTO `columns` VALUES(8, 'City', 'City', 'participant');
INSERT INTO `columns` VALUES(9, 'Referal', 'Referal', 'participant');
INSERT INTO `columns` VALUES(10, 'Computer/Internet', 'Computer/Internet', 'QuestionsYN');
INSERT INTO `columns` VALUES(11, 'smartphone', 'smartphone', 'QuestionsYN');
INSERT INTO `columns` VALUES(12, 'What kind of phone', 'What_kind_of_phone', 'QuestionsYN');
INSERT INTO `columns` VALUES(13, 'Future focus Groups', 'Future_focus_Groups', 'QuestionsYN');
INSERT INTO `columns` VALUES(14, 'Future Interviews', 'Future_Interviews', 'QuestionsYN');
INSERT INTO `columns` VALUES(15, 'Future Studies', 'Future_Studies', 'QuestionsYN');
INSERT INTO `columns` VALUES(16, 'Receive Status updates', 'Receive_Status_updates', 'QuestionsYN');
INSERT INTO `columns` VALUES(17, 'Receive announcement when system launches', 'Receive_announcement_at_system_launch', 'QuestionsYN');
INSERT INTO `columns` VALUES(18, 'Surveys', 'Surveys', 'QuestionsYN');
INSERT INTO `columns` VALUES(19, 'Who Treats Your Diabetes1?', 'Who_Treats_Your_Diabetes1?', 'TreatmentInfo');
INSERT INTO `columns` VALUES(20, 'Who Treats Your Diabetes2?', 'Who_Treats_Your_Diabetes2?', 'TreatmentInfo');
INSERT INTO `columns` VALUES(21, 'How long with diabetes?', 'How_long_with_diabetes?', 'TreatmentInfo');
INSERT INTO `columns` VALUES(22, 'What type of diabetes do you have?', 'What_type_of_diabetes_do_you_have?', 'TreatmentInfo');
INSERT INTO `columns` VALUES(23, 'Treatment1', 'Treatment1', 'TreatmentInfo');
INSERT INTO `columns` VALUES(24, 'Treatment2', 'Treatment2', 'TreatmentInfo');
INSERT INTO `columns` VALUES(25, 'Treatment3', 'Treatment3', 'TreatmentInfo');
INSERT INTO `columns` VALUES(26, 'Experience with Computers', 'Exp_with_Computers', 'ExpQuestions');
INSERT INTO `columns` VALUES(27, 'I feel confident browsing the internet:', 'conf_Browsing_Internet', 'ExpQuestions');
INSERT INTO `columns` VALUES(28, 'I feel confident surfing the internet:', 'conf_surfing_internet:', 'ExpQuestions');
INSERT INTO `columns` VALUES(30, 'I feel confident making changes on a web page:', 'conf_making_changing_webpage', 'ExpQuestions');
INSERT INTO `columns` VALUES(31, 'I feel confident downloading from another computer:', 'conf_downloading_from_computer', 'ExpQuestions');
INSERT INTO `columns` VALUES(32, 'I feel confident scanning pictures to save on the computer:', 'conf_scan_pics', 'ExpQuestions');
INSERT INTO `columns` VALUES(33, 'I feel confident recovering a file I accidentally deleted:', 'conf_recovering_file', 'ExpQuestions');
INSERT INTO `columns` VALUES(34, 'I feel confident finding information on the internet:', 'conf_finding_info', 'ExpQuestions');
INSERT INTO `columns` VALUES(35, 'I like working with computers', 'like_working_with_computers', 'ExpQuestions');
INSERT INTO `columns` VALUES(36, 'I look forward to those aspects of my job that require me to use a computer', 'look_forward_jobaspects_computer', 'ExpQuestions');
INSERT INTO `columns` VALUES(37, '"Once I start working on the computer I find it hard to stop"', 'hard_to_stop_working_with_computers', 'ExpQuestions');
INSERT INTO `columns` VALUES(38, 'Using a computer is frustrating for me:', 'computer_are_frustrating', 'ExpQuestions');
INSERT INTO `columns` VALUES(39, 'I get bored quickly when working on a computer:', 'quickly_bored_with_computers', 'ExpQuestions');
INSERT INTO `columns` VALUES(40, 'Computers are somewhat intimidating to me:', 'computers_intimidate_me', 'ExpQuestions');
INSERT INTO `columns` VALUES(41, 'I feel apprehensive about using computers:', 'apprehensive_using_computers', 'ExpQuestions');
INSERT INTO `columns` VALUES(42, 'It scares me to think that I could cause the computer to destroy a large amount of information by hitting the wrong key:', 'scared_to_destroy_info', 'ExpQuestions');
INSERT INTO `columns` VALUES(43, 'I hesitate to use a computer for fear of making mistakes I cannot correct:', 'fear_making_mistakes', 'ExpQuestions');
INSERT INTO `columns` VALUES(29, 'I feel confident creating a web page for the internet:', 'conf_creating_webpage', 'ExpQuestions');
INSERT INTO `columns` VALUES(44, 'What is your Gender', 'What_is_your_Gender', 'demographics');
INSERT INTO `columns` VALUES(45, 'In what year were you born?', 'Birth_year_range', 'demographics');
INSERT INTO `columns` VALUES(46, 'Please select your highest completed level of education', 'highest_edu_level', 'demographics');
INSERT INTO `columns` VALUES(47, 'Income Level', 'Income_level', 'demographics');
INSERT INTO `columns` VALUES(48, 'What is your marital status', 'marital_status', 'demographics');
INSERT INTO `columns` VALUES(49, 'Family Status1', 'Family_Status1', 'demographics');
INSERT INTO `columns` VALUES(50, 'Family Status2', 'Family_Status2', 'demographics');

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

CREATE TABLE `demographics` (
  `demographicsID` int(45) NOT NULL auto_increment,
  `What_is_your_Gender` varchar(45) default NULL,
  `Birth_year_range` varchar(45) default NULL,
  `highest_edu_level` varchar(45) default NULL,
  `Income_level` varchar(45) default NULL,
  `marital_status` varchar(45) default NULL,
  `Family_Status1` varchar(45) default NULL,
  `Family_Status2` varchar(45) default NULL,
  PRIMARY KEY  (`demographicsID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` VALUES(1, 'Male', '1925-1945', 'Advanced Degree', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(2, 'Female', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(3, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(4, 'Female', '1946-1964', 'High School or GED', '"Under $10000"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(5, 'Male', '1946-1964', 'Bachelor''s Degree', '"$60000- $99999"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(6, 'Female', '1946-1964', 'Advanced Degree', '"$10000- $29000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(7, 'Female', '1925-1945', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with members 65 and over', 'Household with one or more full-time workers');
INSERT INTO `demographics` VALUES(8, 'Male', '1946-1964', 'High School or GED', '"$10000- $29000"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(9, 'Male', '1946-1964', 'Advanced Degree', '"$10000- $29000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(10, 'Female', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(11, 'Male', '1946-1964', 'Bachelor''s Degree', '"$10000- $29000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(12, 'Female', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(13, 'Male', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(14, 'Male', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(15, 'Male', '1925-1945', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(16, 'Male', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(17, 'Male', '1925-1945', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(18, 'Male', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(19, 'Male', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(20, 'Female', '1925-1945', 'High School or GED', '"$10000- $29000"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(21, 'Male', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(22, 'Female', '1946-1964', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(23, 'Male', '1946-1964', 'Advanced Degree', '"Under $10000"', 'Single', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(24, 'Female', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(25, 'Female', '1925-1945', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(26, 'Female', '1925-1945', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(27, 'Female', '1925-1945', 'Bachelor''s Degree', '"$30000- $59000"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(28, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(29, 'Female', '1965-1983', 'Bachelor''s Degree', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(30, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(31, 'Male', '1925-1945', 'Advanced Degree', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(32, 'Male', '1925-1945', 'High School or GED', '"$10000- $29000"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(33, 'Female', '1965-1983', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(34, 'Female', '1925-1945', 'High School or GED', '"Under $10000"', 'Single', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(35, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(36, 'Male', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(37, 'Female', '1925-1945', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(38, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(39, 'Female', '1946-1964', 'Advanced Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(40, 'Female', '1946-1964', 'Bachelor''s Degree', '"$10000- $29000"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(41, 'Female', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(42, 'Female', '1946-1964', 'Advanced Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(43, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(44, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(45, 'Male', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Single', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(46, 'Male', '1946-1964', 'Bachelor''s Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(47, 'Female', '1965-1983', 'High School or GED', '"$10000- $29000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(48, 'Male', '1925-1945', 'Bachelor''s Degree', 'I prefer not to disclose', 'Single', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(49, 'Male', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(50, 'Female', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(51, 'Male', '1946-1964', 'High School or GED', '"$100000 and above"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(52, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(53, 'Female', '1946-1964', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(54, 'Female', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(55, 'Female', '1946-1964', 'Advanced Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(56, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(57, 'Female', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(58, 'Male', '1946-1964', 'Advanced Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(59, 'Male', '1946-1964', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(60, 'Male', '1946-1964', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(61, 'Male', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(62, 'Female', '1946-1964', 'Bachelor''s Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(63, 'Male', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(64, 'Female', '1965-1983', 'High School or GED', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(65, 'Male', '1965-1983', 'Bachelor''s Degree', '"$10000- $29000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(66, 'Male', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(67, 'Female', '1925-1945', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(68, 'Female', '1946-1964', 'Advanced Degree', 'I prefer not to disclose', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(69, 'Male', '1946-1964', 'High School or GED', '"Under $10000"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(70, 'Male', '1925-1945', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(71, 'Male', '1925-1945', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(72, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(73, 'Male', '1946-1964', 'Bachelor''s Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(74, 'Male', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(75, 'Male', '1946-1964', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', 'Household with one or more full-time workers');
INSERT INTO `demographics` VALUES(76, 'Female', '1946-1964', 'Advanced Degree', '"$30000- $59000"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(77, 'Female', '1965-1983', 'High School or GED', '"$10000- $29000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(78, 'Male', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(79, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(80, 'Male', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(81, 'Female', '1965-1983', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(82, 'Male', '1985', '', '', '', '', '');
INSERT INTO `demographics` VALUES(83, 'Male', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(84, 'Male', '1965-1983', 'High School or GED', '"$10000- $29000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(85, 'Male', '1965-1983', 'Bachelor''s Degree', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(86, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(87, 'Female', '1946-1964', 'Advanced Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(88, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(89, 'Female', '1984-2000', 'High School or GED', '"$10000- $29000"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(90, 'Female', '1965-1983', 'High School or GED', '"$10000- $29000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(91, 'Female', '1965-1983', 'Bachelor''s Degree', '"$30000- $59000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(92, 'Female', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(93, 'Female', '1965-1983', 'Advanced Degree', '"$10000- $29000"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(94, 'Male', '1946-1964', 'High School or GED', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(95, 'Male', '1946-1964', 'Advanced Degree', '"$100000 and above"', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(96, 'Male', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(97, 'Female', '1965-1983', 'Bachelor''s Degree', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(98, 'Male', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(99, 'Female', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(100, 'Male', '1965-1983', 'High School or GED', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(101, 'Female', '1946-1964', 'High School or GED', '"$30000- $59000"', 'Single', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(102, 'Male', '1925-1945', 'Bachelor''s Degree', '"$100000 and above"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(103, 'Male', '1946-1964', 'Advanced Degree', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(104, 'Female', '1946-1964', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(105, 'Male', '1946-1964', 'High School or GED', '"$10000- $29000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(106, 'Male', '1965-1983', 'High School or GED', '"$60000- $99999"', 'Single', 'Other', '');
INSERT INTO `demographics` VALUES(107, 'Female', '1946-1964', 'Advanced Degree', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(108, 'Female', '1946-1964', 'Some College', '"Under $10000"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(109, 'Male', '1946-1964', 'Advanced Degree', '"$100000 and above"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(110, 'Male', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(111, 'Female', '1946-1964', 'High School or GED', '"$60000- $99999"', 'Married', 'Other', '');
INSERT INTO `demographics` VALUES(112, 'Female', '1965-1983', 'Bachelor''s Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(113, 'Female', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(114, 'Female', '1925-1945', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(115, 'Male', '1946-1964', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(116, 'Male', '1946-1964', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married with children under age 18', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(117, 'Male', '1946-1964', 'Advanced Degree', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(118, 'Female', '1946-1964', 'High School or GED', '"$10000- $29000"', 'Single', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(119, 'Male', '1946-1964', 'Bachelor''s Degree', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(120, 'Male', '1965-1983', 'Bachelor''s Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(121, 'Male', '1925-1945', 'Advanced Degree', '"$60000- $99999"', 'Married', 'Household with members 65 and over', '');
INSERT INTO `demographics` VALUES(122, 'Female', '1946-1964', 'High School or GED', 'I prefer not to disclose', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(123, 'Male', '1965-1983', 'High School or GED', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(124, 'Male', '1946-1964', 'Advanced Degree', '"$60000- $99999"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(125, 'Female', '1946-1964', 'Bachelor''s Degree', '"$100000 and above"', 'Married', 'Household with one or more full-time workers', '');
INSERT INTO `demographics` VALUES(126, 'Male', '1946-1964', 'Bachelor''s Degree', '"$30000- $59000"', 'Married', 'Household with one or more full-time workers', '');

-- --------------------------------------------------------

--
-- Table structure for table `ExpQuestions`
--

CREATE TABLE `ExpQuestions` (
  `ExpQuestionsID` int(45) NOT NULL auto_increment,
  `Exp_with_Computers` varchar(45) default NULL,
  `conf_Browsing_Internet` varchar(45) default NULL,
  `conf_surfing_internet:` varchar(45) default NULL,
  `conf_creating_webpage` varchar(45) default NULL,
  `conf_making_changing_webpage` varchar(45) default NULL,
  `conf_downloading_from_computer` varchar(45) default NULL,
  `conf_scan_pics` varchar(45) default NULL,
  `conf_recovering_file` varchar(45) default NULL,
  `conf_finding_info` varchar(45) default NULL,
  `like_working_with_computers` varchar(45) default NULL,
  `look_forward_jobaspects_computer` varchar(45) default NULL,
  `hard_to_stop_working_with_computers` varchar(45) default NULL,
  `computer_are_frustrating` varchar(45) default NULL,
  `quickly_bored_with_computers` varchar(45) default NULL,
  `computers_intimidate_me` varchar(45) default NULL,
  `apprehensive_using_computers` varchar(45) default NULL,
  `scared_to_destroy_info` varchar(45) default NULL,
  `fear_making_mistakes` varchar(45) default NULL,
  PRIMARY KEY  (`ExpQuestionsID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `ExpQuestions`
--

INSERT INTO `ExpQuestions` VALUES(1, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(2, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(3, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(4, 'Some experience', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '4 - Agree');
INSERT INTO `ExpQuestions` VALUES(5, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(6, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(7, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(8, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(9, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(10, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(11, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(12, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(13, 'Some experience', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(14, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(15, 'Some experience', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(16, 'Some experience', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(17, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(18, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(19, 'Very limited', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(20, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(21, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(22, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(23, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(24, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(25, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(26, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '2 - Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(27, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(28, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(29, 'Quite a lot', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree');
INSERT INTO `ExpQuestions` VALUES(30, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree');
INSERT INTO `ExpQuestions` VALUES(31, 'Some experience', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(32, 'Very limited', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree');
INSERT INTO `ExpQuestions` VALUES(33, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(34, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(35, 'Some experience', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(36, 'Some experience', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(37, 'Quite a lot', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '4 - Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(38, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(39, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(40, 'Some experience', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(41, 'Some experience', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(42, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(43, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(44, 'Some experience', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(45, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(46, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(47, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(48, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(49, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(50, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(51, 'Some experience', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(52, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '5 - Strongly Agree', '2 - Disagree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(53, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '4 - Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(54, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(55, 'Some experience', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(56, 'Quite a lot', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(57, 'Some experience', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(58, 'Quite a lot', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(59, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(60, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(61, 'Quite a lot', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(62, 'Quite a lot', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(63, 'Some experience', '4 - Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(64, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(65, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(66, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(67, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(68, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(69, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(70, 'Very limited', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(71, 'Quite a lot', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(72, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree');
INSERT INTO `ExpQuestions` VALUES(73, 'Quite a lot', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(74, 'None', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree');
INSERT INTO `ExpQuestions` VALUES(75, 'Very limited', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(76, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(77, 'Very limited', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '1 - Strongly Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(78, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(79, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(80, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(81, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(82, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(83, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(84, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(85, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(86, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(87, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(88, 'Some experience', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree');
INSERT INTO `ExpQuestions` VALUES(89, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(90, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(91, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(92, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(93, 'Extensive', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree');
INSERT INTO `ExpQuestions` VALUES(94, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(95, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(96, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(97, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(98, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(99, 'Quite a lot', '5 - Strongly Agree', '4 - Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '2 - Disagree', '1 - Strongly Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(100, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '2 - Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(101, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(102, 'Quite a lot', '4 - Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '4 - Agree', '1 - Strongly Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(103, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(104, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(105, 'Some experience', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(106, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(107, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(108, 'Quite a lot', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(109, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(110, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '4 - Agree', '2 - Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(111, 'Quite a lot', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(112, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(113, 'Some experience', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree');
INSERT INTO `ExpQuestions` VALUES(114, 'Quite a lot', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(115, 'Quite a lot', '4 - Agree', '4 - Agree', '1 - Strongly Disagree', '2 - Disagree', '2 - Disagree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(116, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '2 - Disagree', '3 - Neither Disagree nor Agree', '2 - Disagree', '1 - Strongly Disagree', '4 - Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(117, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '4 - Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(118, 'Some experience', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(119, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(120, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '2 - Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(121, 'Some experience', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '2 - Disagree', '1 - Strongly Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '4 - Agree', '5 - Strongly Agree', '1 - Strongly Disagree', '4 - Agree', '4 - Agree', '4 - Agree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(122, 'Some experience', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '4 - Agree', '2 - Disagree', '2 - Disagree');
INSERT INTO `ExpQuestions` VALUES(123, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '5 - Strongly Agree', '3 - Neither Disagree nor Agree', '1 - Strongly Disagree', '5 - Strongly Agree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(124, 'Extensive', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(125, 'Quite a lot', '5 - Strongly Agree', '5 - Strongly Agree', '2 - Disagree', '2 - Disagree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '5 - Strongly Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '3 - Neither Disagree nor Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');
INSERT INTO `ExpQuestions` VALUES(126, 'Quite a lot', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '5 - Strongly Agree', '4 - Agree', '4 - Agree', '3 - Neither Disagree nor Agree', '4 - Agree', '2 - Disagree', '2 - Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree', '1 - Strongly Disagree');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `participantID` int(45) NOT NULL auto_increment,
  `ID` varchar(45) default NULL,
  `Date_Updated` varchar(45) default NULL,
  `Date_Added` varchar(45) default NULL,
  `FOCUS_ID` varchar(45) default NULL,
  `Participation_Date_1` varchar(45) default NULL,
  `Participation_Date _2` varchar(45) default NULL,
  `State` varchar(45) default NULL,
  `City` varchar(45) default NULL,
  `Referal` varchar(45) default NULL,
  PRIMARY KEY  (`participantID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` VALUES(1, '1', '', '', '', '', '', 'Iowa', 'Des Moines', 'Flyer');
INSERT INTO `participant` VALUES(2, '2', '9-Dec-10', '', '23', '20-Oct-10', '', 'Iowa', 'Mingo', 'Email');
INSERT INTO `participant` VALUES(3, '3', '', '', '8', '22-Sep-10', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(4, '4', '', '', '1', '20-Sep-10', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(5, '5', '', '', '', '', '', 'Iowa', 'Johnston', 'Email');
INSERT INTO `participant` VALUES(6, '9', '', '', '', '', '', 'Iowa', 'Carlisle', 'Phone Call');
INSERT INTO `participant` VALUES(7, '11', '', '', '9', '22-Sep-10', '', 'Iowa', 'Polk City', 'Phone Call');
INSERT INTO `participant` VALUES(8, '15', '', '', '', '', '', 'Iowa', 'Des Moines', 'Phone Call');
INSERT INTO `participant` VALUES(9, '16', '', '', '10', '22-Sep-10', '', 'Iowa', 'Des Moines', 'Phone Call');
INSERT INTO `participant` VALUES(10, '19', '16-Dec-10', '', '39', '15-Dec-10', '', 'Iowa', 'Urbandale', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(11, '21', '', '', '', '', '', 'Iowa', 'HUXLEY', 'Email');
INSERT INTO `participant` VALUES(12, '22', '', '', '2', '20-Sep-10', '', 'Iowa', 'Huxley', 'Email');
INSERT INTO `participant` VALUES(13, '24', '', '', '', '', '', 'Iowa', 'Pella', 'Phone Call');
INSERT INTO `participant` VALUES(14, '30', '9-Dec-10', '', '3', '20-Sep-10', '8-Dec-10', 'Iowa', 'Indianola', 'Phone Call');
INSERT INTO `participant` VALUES(15, '31', '', '', '', '', '', 'Iowa', 'Urbandale', 'Phone Call');
INSERT INTO `participant` VALUES(16, '32', '9-Dec-10', '', '20', '19-Oct-10', '', 'Iowa', 'Milo', 'Phone Call');
INSERT INTO `participant` VALUES(17, '33', '9-Dec-10', '', '11', '22-Sep-10', '6-Dec-10', 'Iowa', 'Des Moines', 'Phone Call');
INSERT INTO `participant` VALUES(18, '34', '', '', '12', '22-Sep-10', '', 'Iowa', 'guthrie center', 'Email');
INSERT INTO `participant` VALUES(19, '36', '', '', '13', '22-Sep-10', '', 'Iowa', 'des moines', 'Phone Call');
INSERT INTO `participant` VALUES(20, '37', '', '', '14', '22-Sep-10', '', 'Iowa', 'Des Moines', 'Phone Call');
INSERT INTO `participant` VALUES(21, '38', '', '', '15', '22-Sep-10', '', 'Iowa', 'Des Moines', 'Phone Call');
INSERT INTO `participant` VALUES(22, '39', '', '', '6', '20-Sep-10', '', 'Iowa', 'Indianola', 'Phone Call');
INSERT INTO `participant` VALUES(23, '40', '', '', '', '', '', 'Iowa', 'Prairie City', 'Phone Call');
INSERT INTO `participant` VALUES(24, '43', '3-Dec-10', '', '16', '22-Sep-10', '1-Dec-10', 'Iowa', 'Ankeny', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(25, '44', '', '', '5', '20-Sep-10', '', 'Iowa', 'Ankeny', 'Kathy Calkin');
INSERT INTO `participant` VALUES(26, '47', '16-Dec-10', '', '42', '15-Dec-10', '', 'Iowa', 'Urbandale', 'Email');
INSERT INTO `participant` VALUES(27, '52', '', '', '', '', '', 'Iowa', 'Johnston', 'TCOYD');
INSERT INTO `participant` VALUES(28, '56', '9-Dec-10', '', '25', '20-Oct-10', '8-Dec-10', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(29, '67', '9-Dec-10', '', '17', '19-Oct-10', '', 'Iowa', 'Ankeny', 'TCOYD');
INSERT INTO `participant` VALUES(30, '78', '', '', '', '', '', 'Iowa', 'Waukee', 'TCOYD');
INSERT INTO `participant` VALUES(31, '79', '16-Dec-10', '', '44', '15-Dec-10', '', 'Iowa', 'Knoxville', 'TCOYD');
INSERT INTO `participant` VALUES(32, '81', '', '', '', '', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(33, '84', '', '', '', '', '', 'Iowa', 'Bloomfield', 'TCOYD');
INSERT INTO `participant` VALUES(34, '86', '', '', '', '', '', 'Iowa', 'Ames', 'TCOYD');
INSERT INTO `participant` VALUES(35, '92', '', '', '', '', '', 'Arizona', 'Phoenix', 'TCOYD');
INSERT INTO `participant` VALUES(36, '99', '15-Dec-10', '27-Oct-10', '37', '13-Dec-10', '', 'Iowa', 'CUMMING', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(37, '101', '', '', '', '', '', 'Iowa', 'urbandale', 'TCOYD');
INSERT INTO `participant` VALUES(38, '102', '', '', '', '', '', 'Iowa', 'West Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(39, '103', '9-Dec-10', '', '21', '19-Oct-10', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(40, '106', '27-Dec-10', '', '32', '13-Dec-10', '17-Dec-10', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(41, '107', '', '', '22', '19-Oct-10', '', 'Iowa', 'urbandale', 'TCOYD');
INSERT INTO `participant` VALUES(42, '110', '', '', '', '', '', 'Iowa', 'Johnston', 'TCOYD');
INSERT INTO `participant` VALUES(43, '114', '', '', '', '', '', 'Iowa', 'carilise', 'TCOYD');
INSERT INTO `participant` VALUES(44, '120', '16-Dec-10', '', '41', '15-Dec-10', '', 'Iowa', 'Carlisle', 'TCOYD');
INSERT INTO `participant` VALUES(45, '124', '3-Dec-10', '', '26', '20-Oct-10', '1-Dec-10', 'Iowa', 'Adel', 'TCOYD');
INSERT INTO `participant` VALUES(46, '125', '', '', '', '', '', 'Iowa', 'oelwein', 'TCOYD');
INSERT INTO `participant` VALUES(47, '126', '27-Dec-10', '', '38', '13-Dec-10', '18-Dec-10', 'Iowa', 'Oskaloosa', 'TCOYD');
INSERT INTO `participant` VALUES(48, '127', '9-Dec-10', '', '27', '6-Dec-10', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(49, '129', '', '', '', '', '', 'Iowa', 'Knoxville', 'TCOYD');
INSERT INTO `participant` VALUES(50, '130', '', '19-Oct-10', '', '', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(51, '132', '', '19-Oct-10', '', '', '', 'Florida', 'Bradenton', 'TCOYD');
INSERT INTO `participant` VALUES(52, '133', '', '19-Oct-10', '', '', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(53, '137', '', '10-Nov-10', '', '', '', 'Iowa', 'Nevada', 'Email');
INSERT INTO `participant` VALUES(54, '144', '', '15-Nov-10', '', '', '', 'Iowa', 'Greenfield', 'Email');
INSERT INTO `participant` VALUES(55, '164', '', '10-Nov-10', '', '', '', 'Iowa', 'Urbandale', 'Email');
INSERT INTO `participant` VALUES(56, '168', '9-Dec-10', '15-Nov-10', '35', '8-Dec-10', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(57, '171', '', '10-Nov-10', '', '', '', 'Iowa', 'Urbandale', 'Email');
INSERT INTO `participant` VALUES(58, '195', '9-Dec-10', '15-Nov-10', '34', '8-Dec-10', '', 'Utah', 'Urbandale', 'Email');
INSERT INTO `participant` VALUES(59, '197', '', '3-Dec-10', '', '', '', 'Iowa', 'Ankeny', 'Mercy Employee');
INSERT INTO `participant` VALUES(60, '199', '9-Dec-10', '3-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(61, '200', '9-Dec-10', '3-Dec-10', '', '', '', 'Iowa', 'Urbandale', 'Email');
INSERT INTO `participant` VALUES(62, '204', '', '3-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(63, '205', '', '3-Dec-10', '', '', '', 'Iowa', 'marshalltown', '');
INSERT INTO `participant` VALUES(64, '184', '', '14-Dec-10', '', '', '', 'Iowa', 'Ankeny', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(65, '206', '', '14-Dec-10', '', '', '', 'Iowa', 'Leon', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(66, '111', '', '14-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(67, '213', '', '15-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(68, '212', '', '27-Dec-10', '', '', '', 'Iowa', 'West Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(69, '215', '', '27-Dec-10', '', '', '', 'Iowa', 'Newton', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(70, '219', '', '27-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(71, '218', '', '27-Dec-10', '', '', '', 'Iowa', 'Ottumwa', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(72, '217', '', '27-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(73, '223', '', '27-Dec-10', '', '', '', 'Iowa', 'Indianola', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(74, '222', '', '27-Dec-10', '', '', '', 'Iowa', 'Centerville', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(75, '221', '', '4-Jan-11', '', '', '', 'Iowa', 'Bondurant', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(76, '226', '', '4-Jan-11', '', '', '', 'Iowa', 'Des Moines', 'Website');
INSERT INTO `participant` VALUES(77, '229', '', '10-Jan-11', '', '', '', 'Iowa', 'blairstown', 'Website');
INSERT INTO `participant` VALUES(78, '6', '', '', '', '', '', 'Iowa', 'Urbandale', 'Email');
INSERT INTO `participant` VALUES(79, '8', '27-Dec-10', '', '48', '18-Dec-10', '', 'Iowa', 'Clive', 'Phone Call');
INSERT INTO `participant` VALUES(80, '12', '27-Dec-10', '', '19', '19-Oct-10', '17-Dec-10', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(81, '13', '', '', '7', '20-Sep-10', '', 'Iowa', 'Des Moines', 'Flyer');
INSERT INTO `participant` VALUES(82, '14', '27-Dec-10', '', '47', '17-Dec-10', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(83, '20', '', '', '', '', '', 'Iowa', 'Johnston', 'Cheryl Pike');
INSERT INTO `participant` VALUES(84, '26', '27-Dec-10', '', '49', '18-Dec-10', '', 'Iowa', 'West Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(85, '27', '', '', '', '', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(86, '35', '', '', '4', '20-Sep-10', '', 'Iowa', 'Stanhope', 'Phone Call');
INSERT INTO `participant` VALUES(87, '45', '', '', '', '', '', 'Iowa', 'Minburn', 'Email');
INSERT INTO `participant` VALUES(88, '53', '', '', '', '', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(89, '71', '', '', '', '', '', 'Iowa', 'Ames', 'TCOYD');
INSERT INTO `participant` VALUES(90, '74', '3-Dec-10', '', '29', '1-Dec-10', '17-Dec-10', 'Iowa', 'Kellogg', 'TCOYD');
INSERT INTO `participant` VALUES(91, '76', '', '', '', '', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(92, '100', '', '', '', '', '', 'Iowa', 'West Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(93, '104', '', '', '', '', '', 'Iowa', 'Maxwell', 'TCOYD');
INSERT INTO `participant` VALUES(94, '113', '', '', '', '', '', 'Oklahoma', '', 'TCOYD');
INSERT INTO `participant` VALUES(95, '116', '', '', '', '', '', 'Iowa', 'West Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(96, '117', '', '', '', '', '', 'Indiana', 'Hartford City', 'TCOYD');
INSERT INTO `participant` VALUES(97, '118', '', '', '', '', '', 'Iowa', 'Stratford', 'TCOYD');
INSERT INTO `participant` VALUES(98, '121', '', '', '28', '1-Dec-10', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(99, '128', '', '', '', '', '', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(100, '134', '27-Dec-10', '', '18', '19-Oct-10', '17-Dec-10', 'Iowa', 'Des Moines', 'TCOYD');
INSERT INTO `participant` VALUES(101, '138', '27-Dec-10', '10-Nov-10', '36', '8-Dec-10', '18-Dec-10', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(102, '142', '6-Dec-10', '3-Dec-10', '30', '6-Dec-10', '', 'Iowa', 'Clive', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(103, '186', '9-Dec-10', '15-Nov-10', '33', '8-Dec-10', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(104, '187', '27-Dec-10', '3-Dec-10', '46', '17-Dec-10', '', 'Iowa', 'Johnston', 'Email');
INSERT INTO `participant` VALUES(105, '46', '16-Dec-10', '14-Dec-10', '100', '15-Dec-10', '', 'Iowa', 'Des Moines', 'Wife');
INSERT INTO `participant` VALUES(106, '216', '', '15-Dec-10', '', '', '', 'Iowa', 'Ankeny', 'Flyer-Mercy North');
INSERT INTO `participant` VALUES(107, '232', '', '4-Jan-11', '', '', '', 'Iowa', 'Clive', 'Phone Call');
INSERT INTO `participant` VALUES(108, '233', '', '19-Jan-11', '', '', '', 'Iowa', 'Des Moines', 'Flyer');
INSERT INTO `participant` VALUES(109, '48', '9-Dec-10', '', '24', '20-Oct-10', '', 'Iowa', 'Bondurant', 'Email');
INSERT INTO `participant` VALUES(110, '139', '', '3-Dec-10', '', '', '', 'Iowa', 'Cumming', 'Email');
INSERT INTO `participant` VALUES(111, '140', '', '10-Nov-10', '', '', '', 'Arizona', 'Tucson', 'Email');
INSERT INTO `participant` VALUES(112, '141', '', '10-Nov-10', '', '', '', 'Alaska', 'Kodiak', 'Email');
INSERT INTO `participant` VALUES(113, '143', '', '10-Nov-10', '', '', '', 'Iowa', 'New Sharon', 'Email');
INSERT INTO `participant` VALUES(114, '146', '', '10-Nov-10', '', '', '', 'Iowa', 'urbandale', 'Email');
INSERT INTO `participant` VALUES(115, '148', '', '10-Nov-10', '', '', '', 'Iowa', 'Johnston', 'Email');
INSERT INTO `participant` VALUES(116, '150', '', '3-Dec-10', '', '', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(117, '153', '6-Dec-10', '15-Nov-10', '31', '6-Dec-10', '', 'Iowa', 'Ankeny', 'Email');
INSERT INTO `participant` VALUES(118, '158', '', '10-Nov-10', '', '', '', 'Iowa', 'Creston', 'Email');
INSERT INTO `participant` VALUES(119, '160', '', '18-Nov-10', '', '', '', 'Iowa', 'des moines', 'Email');
INSERT INTO `participant` VALUES(120, '163', '', '10-Nov-10', '', '', '', 'Iowa', 'Des Moines', 'Email');
INSERT INTO `participant` VALUES(121, '166', '', '18-Nov-10', '', '', '', 'Iowa', 'clive', 'Email');
INSERT INTO `participant` VALUES(122, '172', '', '15-Nov-10', '', '', '', 'Iowa', 'Oskaloosa', 'Email');
INSERT INTO `participant` VALUES(123, '188', '', '15-Nov-10', '', '', '', 'Iowa', 'Altoona', 'Email');
INSERT INTO `participant` VALUES(124, '207', '16-Dec-10', '9-Dec-10', '45', '15-Dec-10', '', 'Iowa', 'Des Moines', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(125, '28', '', '14-Dec-10', '', '', '', 'Iowa', 'Clive', 'Dr. Bhargava');
INSERT INTO `participant` VALUES(126, '227', '', '4-Jan-11', '', '', '', 'Iowa', 'Des Moines', 'Website');

-- --------------------------------------------------------

--
-- Table structure for table `QuestionsYN`
--

CREATE TABLE `QuestionsYN` (
  `QuestionYNid` int(45) NOT NULL auto_increment,
  `Computer/Internet` enum('Yes','No') default NULL,
  `smartphone` enum('Yes','No') default NULL,
  `What_kind_of_phone` enum('X','') default NULL,
  `Future_focus_Groups` enum('X','') default NULL,
  `Future_Interviews` enum('X','') default NULL,
  `Future_Studies` enum('X','') default NULL,
  `Receive_Status_updates` enum('X','') default NULL,
  `Receive_announcement_at_system_launch` enum('X','') default NULL,
  `Surveys` enum('X','') default NULL,
  PRIMARY KEY  (`QuestionYNid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `QuestionsYN`
--

INSERT INTO `QuestionsYN` VALUES(1, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(2, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(3, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(4, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(5, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(6, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(7, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(8, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(9, 'Yes', 'No', '', '', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(10, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(11, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(12, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(13, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(14, 'Yes', 'No', '', 'X', 'X', 'X', '', 'X', '');
INSERT INTO `QuestionsYN` VALUES(15, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(16, 'Yes', 'No', '', 'X', '', 'X', '', '', '');
INSERT INTO `QuestionsYN` VALUES(17, 'Yes', 'No', '', 'X', '', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(18, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(19, 'Yes', 'No', '', '', '', '', '', 'X', '');
INSERT INTO `QuestionsYN` VALUES(20, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(21, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(22, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(23, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(24, 'Yes', 'No', '', 'X', '', '', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(25, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(26, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(27, 'Yes', 'No', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(28, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(29, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(30, 'Yes', 'No', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(31, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(32, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(33, 'Yes', 'No', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(34, 'Yes', 'No', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(35, 'Yes', 'No', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(36, 'Yes', 'No', '', '', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(37, 'Yes', 'No', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(38, 'Yes', 'No', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(39, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(40, 'Yes', 'No', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(41, 'Yes', 'No', '', '', '', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(42, 'Yes', 'No', '', 'X', 'X', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(43, 'Yes', 'No', '', 'X', '', '', '', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(44, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(45, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(46, 'Yes', 'No', '', '', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(47, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(48, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(49, 'Yes', 'No', '', '', '', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(50, 'Yes', 'No', '', '', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(51, 'Yes', 'No', '', '', 'X', '', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(52, 'Yes', 'No', '', 'X', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(53, 'Yes', 'No', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(54, 'Yes', 'No', '', '', '', '', 'X', '', '');
INSERT INTO `QuestionsYN` VALUES(55, 'Yes', 'No', '', '', 'X', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(56, 'Yes', 'No', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(57, 'Yes', 'No', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(58, 'Yes', 'No', '', '', 'X', '', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(59, 'Yes', 'No', '', '', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(60, 'Yes', 'No', '', 'X', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(61, 'Yes', 'No', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(62, 'Yes', 'No', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(63, 'Yes', 'No', '', '', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(64, 'Yes', 'No', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(65, 'Yes', 'No', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(66, 'Yes', 'No', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(67, 'Yes', 'No', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(68, 'Yes', 'No', '', '', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(69, 'Yes', 'No', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(70, 'Yes', 'No', '', '', '', '', '', 'X', '');
INSERT INTO `QuestionsYN` VALUES(71, 'Yes', 'No', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(72, 'Yes', 'No', '', '', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(73, 'Yes', 'No', '', '', '', '', 'X', '', '');
INSERT INTO `QuestionsYN` VALUES(74, 'Yes', 'No', '', '', '', '', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(75, 'No', 'No', '', 'X', 'X', '', '', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(76, 'Yes', 'No', '', 'X', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(77, 'Yes', 'No', '', '', '', '', 'X', '', 'X');
INSERT INTO `QuestionsYN` VALUES(78, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(79, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(80, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(81, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(82, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(83, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(84, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(85, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(86, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(87, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(88, 'Yes', 'Yes', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(89, 'Yes', 'Yes', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(90, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(91, 'Yes', 'Yes', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(92, 'Yes', 'Yes', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(93, 'Yes', 'Yes', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(94, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(95, 'Yes', 'Yes', '', '', 'X', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(96, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(97, 'Yes', 'Yes', '', 'X', 'X', '', '', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(98, 'Yes', 'Yes', '', 'X', '', 'X', 'X', '', 'X');
INSERT INTO `QuestionsYN` VALUES(99, 'Yes', 'Yes', '', 'X', '', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(100, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(101, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(102, 'Yes', 'Yes', '', 'X', '', '', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(103, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(104, 'Yes', 'Yes', '', '', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(105, 'Yes', 'Yes', '', 'X', 'X', 'X', 'X', 'X', '');
INSERT INTO `QuestionsYN` VALUES(106, 'Yes', 'Yes', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(107, 'Yes', 'Yes', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(108, 'Yes', 'Yes', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(109, 'Yes', '', '', 'X', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(110, 'Yes', '', '', '', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(111, 'Yes', '', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(112, 'Yes', '', '', '', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(113, 'Yes', '', '', '', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(114, 'Yes', '', '', '', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(115, 'Yes', '', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(116, 'Yes', '', '', '', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(117, 'Yes', '', '', '', '', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(118, 'Yes', '', '', 'X', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(119, 'Yes', '', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(120, 'Yes', '', '', '', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(121, 'Yes', '', '', 'X', 'X', '', 'X', 'X', 'X');
INSERT INTO `QuestionsYN` VALUES(122, 'Yes', '', '', '', '', '', '', '', 'X');
INSERT INTO `QuestionsYN` VALUES(123, 'Yes', '', '', '', '', '', '', '', '');
INSERT INTO `QuestionsYN` VALUES(124, 'Yes', '', '', 'X', '', 'X', '', 'X', '');
INSERT INTO `QuestionsYN` VALUES(125, '', '', '', '', '', '', 'X', '', 'X');
INSERT INTO `QuestionsYN` VALUES(126, 'Yes', '', '', '', '', '', 'X', 'X', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `TreatmentInfo`
--

CREATE TABLE `TreatmentInfo` (
  `TreatmentID` int(45) NOT NULL auto_increment,
  `Who_Treats_Your_Diabetes1?` varchar(45) default NULL,
  `Who_Treats_Your_Diabetes2?` varchar(45) default NULL,
  `How_long_with_diabetes?` varchar(45) default NULL,
  `What_type_of_diabetes_do_you_have?` varchar(45) default NULL,
  `Treatment1` varchar(45) default NULL,
  `Treatment2` varchar(45) default NULL,
  `Treatment3` varchar(45) default NULL,
  PRIMARY KEY  (`TreatmentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `TreatmentInfo`
--

INSERT INTO `TreatmentInfo` VALUES(1, 'Endocrinologist ', '', '>15-20 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(2, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(3, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(4, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(5, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(6, 'Family Practice Physician', '', '0-5 years', 'border line', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(7, 'Endocrinologist ', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(8, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(9, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(10, 'Endocrinologist', '', '>20 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(11, 'Family Practice Physician', 'Endocrinologist', '>20 years', 'Type 2', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(12, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(13, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(14, 'Endocrinologist', '', '5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(15, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(16, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(17, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(18, 'Family Practice Physician', 'Endocrinologist', '>5-10 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(19, 'Family Practice Physician', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(20, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(21, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(22, 'Family Practice Physician', 'Endocrinologist', '0-5 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(23, 'Family Practice Physician', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(24, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(25, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(26, 'Endocrinologist', '', '>20 years', 'Type 1', 'One Insulin shot', 'Insulin pump', '');
INSERT INTO `TreatmentInfo` VALUES(27, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(28, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(29, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(30, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(31, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(32, 'Endocrinologist', '', '>20 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(33, 'Endocrinologist', '', '>10-15 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(34, 'Endocrinologist', '', '>20 years', 'Type 2', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(35, 'Family Practice Physician', 'myself', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(36, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(37, 'Endocrinologist', '', '>20 years', 'Type 2', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(38, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(39, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(40, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(41, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(42, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(43, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(44, 'Endocrinologist', '', '>20 years', 'Type 1 & Type 2', 'Pills', 'Insulin pump', '');
INSERT INTO `TreatmentInfo` VALUES(45, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(46, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(47, 'Other', 'Nurse Practitioner', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(48, 'Family Practice Physician', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(49, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(50, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(51, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(52, 'Endocrinologist', '', '0-5 years', 'Type 1', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(53, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(54, 'Endocrinologist', '', '>5-10 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(55, 'Family Practice Physician', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(56, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(57, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(58, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(59, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(60, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(61, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(62, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(63, 'Endocrinologist', '', '>20 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(64, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(65, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(66, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(67, 'Family Practice Physician', 'Endocrinologist', '>5-10 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(68, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(69, 'Endocrinologist', 'Internist', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', 'Other injections');
INSERT INTO `TreatmentInfo` VALUES(70, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(71, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(72, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(73, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(74, 'Endocrinologist', '', '>20 years', 'Type 2', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(75, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'Pills', 'Insulin pump', 'Other injections');
INSERT INTO `TreatmentInfo` VALUES(76, '1 test was 101 - pre diabetic', '', '0-5 years', 'pre diabetic', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(77, 'Family Practice Physician', 'me and my husband', '>15-20 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(78, 'Endocrinologist ', '', '0-5 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(79, 'Other', 'I have no insurance see Dr. Angel as needed (', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(80, 'Endocrinologist ', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(81, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(82, 'Endocrinologist', '', '>15-20 years', 'Type 1', 'Pills', 'Insulin pump', '');
INSERT INTO `TreatmentInfo` VALUES(83, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(84, 'Endocrinologist', '', '>15-20 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(85, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(86, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(87, 'Endocrinologist', '', '>15-20 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(88, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(89, 'Family Practice Physician', 'Endocrinologist', '>20 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(90, 'Endocrinologist', '', '>10-15 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(91, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(92, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Other injections', '', '');
INSERT INTO `TreatmentInfo` VALUES(93, 'Family Practice Physician', 'Endocrinologist', '0-5 years', 'Type 2', 'Pills', 'More than one insulin shot', 'Insulin pump');
INSERT INTO `TreatmentInfo` VALUES(94, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(95, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(96, 'Endocrinologist', '', '>20 years', 'Type 2', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(97, 'Other', 'Physicians Assistant', '0-5 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(98, 'Endocrinologist', '', '>10-15 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(99, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(100, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(101, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'One Insulin shot', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(102, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(103, 'Endocrinologist', '', '>5-10 years', 'latent autoimmune diabetes in adults (LADA)', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(104, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(105, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(106, 'Family Practice Physician', '', '0-5 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(107, 'Internist', '', '0-5 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(108, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(109, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(110, 'Endocrinologist', '', '0-5 years', 'Type 1', 'More than one insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(111, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(112, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'One Insulin shot', '', '');
INSERT INTO `TreatmentInfo` VALUES(113, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(114, 'Endocrinologist', '', '>20 years', 'Type 1', 'One Insulin shot', 'Insulin pump', '');
INSERT INTO `TreatmentInfo` VALUES(115, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(116, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(117, 'Family Practice Physician', 'Endocrinologist', '>10-15 years', 'Type 2', 'Pills', 'One Insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(118, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'None', '', '');
INSERT INTO `TreatmentInfo` VALUES(119, 'Endocrinologist', '', '>5-10 years', 'Type 2', 'More than one insulin shot', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(120, 'Endocrinologist', '', '>20 years', 'Type 1', 'Insulin pump', '', '');
INSERT INTO `TreatmentInfo` VALUES(121, 'Family Practice Physician', '', '>5-10 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(122, 'Endocrinologist', '', '0-5 years', 'Type 2', 'Pills', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(123, 'Family Practice Physician', '', '>10-15 years', 'Type 2', 'Pills', '', '');
INSERT INTO `TreatmentInfo` VALUES(124, 'Endocrinologist', '', '>20 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
INSERT INTO `TreatmentInfo` VALUES(125, 'Endocrinologist', '', '>5-10 years', 'Type 1', 'More than one insulin shot', 'Other injections', '');
INSERT INTO `TreatmentInfo` VALUES(126, 'Endocrinologist', '', '>10-15 years', 'Type 2', 'Pills', 'More than one insulin shot', '');
