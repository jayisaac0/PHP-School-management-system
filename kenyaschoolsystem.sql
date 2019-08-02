-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2019 at 07:07 AM
-- Server version: 8.0.17
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shophapo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admisioncategory`
--

CREATE TABLE `admisioncategory` (
  `admisioncategory_id` int(225) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_by` int(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admisioncategory`
--

INSERT INTO `admisioncategory` (`admisioncategory_id`, `category`, `created_by`) VALUES
(1, 'primary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignmentreplies`
--

CREATE TABLE `assignmentreplies` (
  `assignmentreplies_id` int(225) NOT NULL,
  `typedassignmentreply` longtext NOT NULL,
  `assignmetntref` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignmentreplies`
--

INSERT INTO `assignmentreplies` (`assignmentreplies_id`, `typedassignmentreply`, `assignmetntref`, `title`, `studentid`) VALUES
(2, 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.\r\n\r\nRaw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', '2345', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.', '150269'),
(3, 'Here is your submission', '1504241086', 'ABOUT THE CAFE', '150269'),
(4, 'ythgtdh', 'c', 'c', '150269');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignments_id` int(225) NOT NULL,
  `assignmetntref` varchar(15) NOT NULL,
  `employeeid` int(225) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `classdetails` varchar(50) NOT NULL,
  `assignmenttite` text NOT NULL,
  `typedassignment` text NOT NULL,
  `marks` varchar(25) NOT NULL,
  `duedate` varchar(50) NOT NULL,
  `assignmentfile` text NOT NULL,
  `year` varchar(15) NOT NULL,
  `created_by` varchar(90) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignments_id`, `assignmetntref`, `employeeid`, `classname`, `classdetails`, `assignmenttite`, `typedassignment`, `marks`, `duedate`, `assignmentfile`, `year`, `created_by`) VALUES
(1, 'rty', 150268, 'Class 1', 'blue', 'rt', '', '0', 'yt', 'IMG-20170521-WA0003.jpg', '2017', '13'),
(2, '12345', 150268, 'Class 1', 'blue', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.', '', '0', '12/12/2017', 'IMG-20170521-WA0009.jpg', '2017', '13'),
(4, '2345', 150268, 'Class 1', 'blue', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.', '1) W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. (2 marks)\r\n\r\n2) W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. (10 marks)\r\n\r\n3) W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. (10 marks)\r\n\r\n4) W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. (10 marks)\r\n\r\n5) W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. (10 marks)', '100 marks', '12/12/2017', 'db2a26b8-fedd-4e3e-b655-b38c640e9620.jpg', '2017', '13'),
(5, 'scas', 150268, 'Class 1', 'blue', 'ascacs', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.', '23', '08/14/2017 - 09', 'IMG-20170306-WA0004.jpg', '2017', '13'),
(6, 'c', 150268, 'Class 1', 'blue', 'c', 'c', 'c', '08/02/2017 - 08', '', '2017', '13'),
(8, '1504241086', 150268, 'Class 1', 'blue', 'ABOUT THE CAFE', '1. The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nIn addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.\r\n\r\n2. The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nIn addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.\r\n\r\n3. The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nIn addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.\r\n\r\n4. The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nIn addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.\r\n\r\nTYPED SUBMISSION ONLY', 'TOTAL MARKS (90 MARKS)', '09/01/2017 - 10/01/2017', 'IMG-20160206-WA0000.jpg', '2017', '13'),
(9, '1505760151', 150268, 'Class 1', 'blue', 'wvervew', 'dfvesfverv', 'erv', '08/29/2017 - 09/19/2017', '', '2017', '13');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `books_id` int(225) NOT NULL,
  `bookref` varchar(50) NOT NULL,
  `booktitle` text NOT NULL,
  `bookauthor` varchar(225) NOT NULL,
  `publishingyear` varchar(20) NOT NULL,
  `bookpages` varchar(10) NOT NULL,
  `bookcategory` varchar(225) NOT NULL,
  `booksubcategory` varchar(225) NOT NULL,
  `created_by` int(5) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`books_id`, `bookref`, `booktitle`, `bookauthor`, `publishingyear`, `bookpages`, `bookcategory`, `booksubcategory`, `created_by`) VALUES
(1, '123456', 'Baby sitter club', 'Anne .M. Martin', '2012', '250 pages', '1', '3', 18),
(3, '34324', 'Under shorne', 'write', '2012', '456 pages', 'Fictional', 'Black', 18);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `book_category_id` int(225) NOT NULL,
  `bookcategory` varchar(225) NOT NULL,
  `created_by` int(5) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`book_category_id`, `bookcategory`, `created_by`) VALUES
(1, 'Fictional', 18),
(2, 'Science', 18),
(3, 'Scientology', 18),
(4, 'Cosmology', 18),
(5, 'Psychology', 18);

-- --------------------------------------------------------

--
-- Table structure for table `book_sub_category`
--

CREATE TABLE `book_sub_category` (
  `book_sub_category_id` int(225) NOT NULL,
  `booksubcategory` varchar(225) NOT NULL,
  `created_by` int(5) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_sub_category`
--

INSERT INTO `book_sub_category` (`book_sub_category_id`, `booksubcategory`, `created_by`) VALUES
(1, 'Black', 18),
(2, 'Dome', 18),
(3, 'journal', 18);

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

CREATE TABLE `borrowed` (
  `borrowed_id` int(225) NOT NULL,
  `student` varchar(15) NOT NULL,
  `book` varchar(15) NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `timeborrowed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed`
--

INSERT INTO `borrowed` (`borrowed_id`, `student`, `book`, `created_by`) VALUES
(2, '150266', '123456', '17');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classes_id` int(225) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `classdetails` varchar(20) NOT NULL,
  `created_by` int(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classes_id`, `classname`, `classdetails`, `created_by`) VALUES
(1, 'Class 1', 'blue', 1),
(2, 'Class 2', 'blue', 1),
(3, 'Class 1', 'green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(225) NOT NULL,
  `country_name` varchar(225) NOT NULL,
  `created_by` int(225) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `created_by`) VALUES
(2, 'Kenya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employeeresponsibility`
--

CREATE TABLE `employeeresponsibility` (
  `employeeresponsibility_id` int(225) NOT NULL,
  `employeeid` int(225) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `classdetails` varchar(30) NOT NULL,
  `responsibility` varchar(30) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeresponsibility`
--

INSERT INTO `employeeresponsibility` (`employeeresponsibility_id`, `employeeid`, `classname`, `classdetails`, `responsibility`, `created_by`) VALUES
(19, 150268, 'Class 1', 'blue', 'Class head', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employees_id` int(225) NOT NULL,
  `employeeid` varchar(20) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `profileimage` varchar(200) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `classdetails` varchar(20) NOT NULL,
  `created_by` int(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employees_id`, `employeeid`, `title`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `mobilenumber`, `dateofbirth`, `nationality`, `profileimage`, `classname`, `classdetails`, `created_by`) VALUES
(1, '150268', 'Mr', 'Josphat', 'Morris', 'Young', 'male', 'jayis@gmail.com', '+254770396785', '21/02/1993', 'kenyan', 'pp.jpg', 'Class 1', 'blue', 1),
(2, '150275', 'miss', 'mre', 'tim', 'tim', 'female', 'jiei@gmail.com', '234567', '12/21/12', 'kenyan', '', 'Class 1', 'blue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feeref`
--

CREATE TABLE `feeref` (
  `feeref_id` int(10) NOT NULL,
  `classname` varchar(10) NOT NULL,
  `termone` varchar(10) NOT NULL,
  `termtwo` varchar(10) NOT NULL,
  `termthree` varchar(10) NOT NULL,
  `totalyearfee` varchar(10) NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeref`
--

INSERT INTO `feeref` (`feeref_id`, `classname`, `termone`, `termtwo`, `termthree`, `totalyearfee`, `created_by`) VALUES
(1, 'Class 1', '25000', '25000', '25000', '75000', '1'),
(2, 'Class 2', 'x', 'c', 'x', 'c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `highschoolmarks`
--

CREATE TABLE `highschoolmarks` (
  `highschoolmarks_id` int(225) NOT NULL,
  `year` varchar(5) NOT NULL,
  `term` varchar(25) NOT NULL,
  `studentid` varchar(225) NOT NULL,
  `classname` varchar(25) NOT NULL,
  `classdetails` varchar(25) NOT NULL,
  `mathematicspaperone` varchar(5) DEFAULT NULL,
  `mathematicspapertwo` varchar(5) DEFAULT NULL,
  `mathematicspaperthree` varchar(5) DEFAULT NULL,
  `mathematicsmarks` varchar(5) DEFAULT NULL,
  `mathematicsgrade` varchar(5) DEFAULT NULL,
  `englishpaperone` varchar(5) DEFAULT NULL,
  `englishpapertwo` varchar(5) DEFAULT NULL,
  `englishpaperthree` varchar(5) DEFAULT NULL,
  `englishmarks` varchar(5) DEFAULT NULL,
  `englishgrade` varchar(5) DEFAULT NULL,
  `kiswahilipaperone` varchar(5) DEFAULT NULL,
  `kiswahilipapertwo` varchar(5) DEFAULT NULL,
  `kiswahilipaperthree` varchar(5) DEFAULT NULL,
  `kiswahilimarks` varchar(5) DEFAULT NULL,
  `kiswahiligrade` varchar(5) DEFAULT NULL,
  `physicspaperone` varchar(5) DEFAULT NULL,
  `physicspapertwo` varchar(5) DEFAULT NULL,
  `physicspaperthree` varchar(5) DEFAULT NULL,
  `physicsmarks` varchar(5) DEFAULT NULL,
  `physicsgrade` varchar(5) DEFAULT NULL,
  `biologypaperone` varchar(5) DEFAULT NULL,
  `biologypapertwo` varchar(5) DEFAULT NULL,
  `biologypaperthree` varchar(5) DEFAULT NULL,
  `biologymarks` varchar(5) DEFAULT NULL,
  `biologygrade` varchar(5) DEFAULT NULL,
  `chemistrypaperone` varchar(5) DEFAULT NULL,
  `chemistrypapertwo` varchar(5) DEFAULT NULL,
  `chemistrypaperthree` varchar(5) DEFAULT NULL,
  `chemistrymarks` varchar(5) DEFAULT NULL,
  `chemistrygrade` varchar(5) DEFAULT NULL,
  `geographypaperone` varchar(5) DEFAULT NULL,
  `geographypapertwo` varchar(5) DEFAULT NULL,
  `geographypaperthree` varchar(5) DEFAULT NULL,
  `geographymarks` varchar(5) DEFAULT NULL,
  `geographygrade` varchar(5) DEFAULT NULL,
  `bstudiespaperone` varchar(5) DEFAULT NULL,
  `bstudiespapertwo` varchar(5) DEFAULT NULL,
  `bstudiespaperthree` varchar(5) DEFAULT NULL,
  `bstudiesmarks` varchar(5) DEFAULT NULL,
  `bstudiesgrade` varchar(5) DEFAULT NULL,
  `agriculturepaperone` varchar(5) DEFAULT NULL,
  `agriculturepapertwo` varchar(5) DEFAULT NULL,
  `agriculturepaperthree` varchar(5) DEFAULT NULL,
  `agriculturemarks` varchar(5) DEFAULT NULL,
  `agriculturegrade` varchar(5) DEFAULT NULL,
  `historypaperone` varchar(5) DEFAULT NULL,
  `historypapertwo` varchar(5) DEFAULT NULL,
  `historypaperthree` varchar(5) DEFAULT NULL,
  `historymarks` varchar(5) DEFAULT NULL,
  `historygrade` varchar(5) DEFAULT NULL,
  `religiouseducationpaperone` varchar(5) DEFAULT NULL,
  `religiouseducationpapertwo` varchar(5) DEFAULT NULL,
  `religiouseducationpaperthree` varchar(5) DEFAULT NULL,
  `religiouseducationmarks` varchar(5) DEFAULT NULL,
  `religiouseducationgrade` varchar(5) DEFAULT NULL,
  `foreignlanuagepaperone` varchar(5) DEFAULT NULL,
  `foreignlanuagepapertwo` varchar(5) DEFAULT NULL,
  `foreignlanuagepaperthree` varchar(5) DEFAULT NULL,
  `foreignlanuagemarks` varchar(5) DEFAULT NULL,
  `foreignlanuagegrade` varchar(5) DEFAULT NULL,
  `created_by` varchar(225) DEFAULT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `librarian_id` int(225) NOT NULL,
  `librarianid` varchar(20) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `profileimage` text NOT NULL,
  `created_by` int(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`librarian_id`, `librarianid`, `title`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `mobilenumber`, `dateofbirth`, `nationality`, `profileimage`, `created_by`) VALUES
(1, '1504289704', 'mr', 'John', 'Doe', 'Joe', 'male', 'jone@gmai.com', '+254770396785', '21/02/1993', 'american', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messageoftheday`
--

CREATE TABLE `messageoftheday` (
  `messageoftheday_id` int(225) NOT NULL,
  `messageoftheday` text NOT NULL,
  `target` varchar(20) NOT NULL,
  `messagestatus` varchar(20) NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messageoftheday`
--

INSERT INTO `messageoftheday` (`messageoftheday_id`, `messageoftheday`, `target`, `messagestatus`, `created_by`) VALUES
(1, 'About catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring service', 'student', 'active', '1'),
(2, 'About catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring service', 'both', 'active', '1'),
(3, 'good deary', 'both', 'active', '1');

-- --------------------------------------------------------

--
-- Table structure for table `myreportcard`
--

CREATE TABLE `myreportcard` (
  `myreportcard_id` int(225) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `term` varchar(15) NOT NULL,
  `year` varchar(5) NOT NULL,
  `myreportcards` longtext NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myreportcard`
--

INSERT INTO `myreportcard` (`myreportcard_id`, `studentid`, `classname`, `term`, `year`, `myreportcards`) VALUES
(5, '150269', 'Class 1', 'Term two', '2017', '&lt;section class=&quot;content invoice&quot;&gt;\r\n&lt;!-- title row --&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col-xs-12 invoice-header&quot;&gt;\r\n&lt;h1&gt;\r\n&lt;i&gt;&lt;img src=&quot;images/logo.gif&quot; style=&quot;width:100px;height:100px;&quot; /&gt;&lt;/i&gt;\r\n&lt;small class=&quot;pull-right&quot;&gt;Date: Class 1 Term two 2017&lt;/small&gt;\r\n&lt;/h1&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n&lt;!-- info row --&gt;\r\n&lt;div class=&quot;row invoice-info&quot;&gt;\r\n&lt;div class=&quot;col-sm-4 invoice-col&quot;&gt;\r\n&lt;address&gt;\r\n&lt;strong&gt;jane anne wai&lt;/strong&gt;\r\n&lt;br&gt;Class 1&lt;br&gt;New York, CA 94107\r\n&lt;br&gt;Phone: +254770396785&lt;br&gt;Email: jayrtg@gmail.com&lt;/address&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;div class=&quot;col-sm-4 invoice-col&quot;&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;div class=&quot;col-sm-4 invoice-col&quot;&gt;\r\n&lt;b&gt;Invoice #007612&lt;/b&gt;\r\n&lt;br&gt;\r\n&lt;br&gt;\r\n&lt;b&gt;Order ID:&lt;/b&gt; 4F3S8J\r\n&lt;br&gt;\r\n&lt;b&gt;Payment Due:&lt;/b&gt; 2/22/2014\r\n&lt;br&gt;\r\n&lt;b&gt;Account:&lt;/b&gt; 968-34567\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.row --&gt;\r\n\r\n&lt;!-- Table row --&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col-xs-12 table&quot;&gt;\r\n\r\n&lt;table class=&quot;table table-striped table-bordered dt-responsive nowrap&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;\r\n&lt;thead&gt;\r\n&lt;tr&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Subject&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Marks&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Marks&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Marks&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Total Marks&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;/thead&gt;\r\n \r\n\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;English&lt;/td&gt;\r\n&lt;td&gt;54&lt;/td&gt;\r\n&lt;td&gt;36&lt;/td&gt;\r\n&lt;td&gt;0&lt;/td&gt;\r\n&lt;td&gt;90&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.row --&gt;\r\n\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;!-- accepted payments column --&gt;\r\n&lt;div class=&quot;col-xs-6&quot;&gt;\r\n\r\n&lt;div class=&quot;table-responsive&quot;&gt;\r\n&lt;table class=&quot;table&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;th style=&quot;width:50%&quot;&gt;Total:&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;congradulations&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;congradulations&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;&lt;button class=&quot;btn btn-default&quot; onclick=&quot;window.print();&quot;&gt;&lt;i class=&quot;fa fa-print&quot;&gt;&lt;/i&gt; Print&lt;/button&gt;&lt;/th&gt;\r\n&lt;td&gt;&lt;button class=&quot;btn btn-primary pull-right&quot; style=&quot;margin-right: 5px;&quot; onclick=&quot;window.print();&quot;&gt;&lt;i class=&quot;fa fa-download&quot;&gt;&lt;/i&gt; Generate PDF&lt;/button&gt;&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;div class=&quot;col-xs-6&quot;&gt;\r\n&lt;div class=&quot;table-responsive&quot;&gt;\r\n&lt;table class=&quot;table&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;th style=&quot;width:50%&quot;&gt;Total:&lt;/th&gt;\r\n&lt;td&gt;$250.30&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;Average&lt;/th&gt;\r\n&lt;td&gt;$10.34&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;Grade:&lt;/th&gt;\r\n&lt;td&gt;$5.80&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;Position:&lt;/th&gt;\r\n&lt;td&gt;$265.24&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;/section&gt;'),
(6, '150269', 'Class 1', 'Term two', '2017', '&lt;section class=&quot;content invoice&quot;&gt;\r\n&lt;!-- title row --&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col-xs-12 invoice-header&quot;&gt;\r\n&lt;h1&gt;\r\n&lt;i&gt;&lt;img src=&quot;images/logo.gif&quot; style=&quot;width:100px;height:100px;&quot; /&gt;&lt;/i&gt;\r\n&lt;small class=&quot;pull-right&quot;&gt;Date: Class 1 Term two 2017&lt;/small&gt;\r\n&lt;/h1&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n&lt;!-- info row --&gt;\r\n&lt;div class=&quot;row invoice-info&quot;&gt;\r\n&lt;div class=&quot;col-sm-4 invoice-col&quot;&gt;\r\n&lt;address&gt;\r\n&lt;strong&gt;jane anne wai&lt;/strong&gt;\r\n&lt;br&gt;Class 1&lt;br&gt;New York, CA 94107\r\n&lt;br&gt;Phone: +254770396785&lt;br&gt;Email: jayrtg@gmail.com&lt;/address&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;div class=&quot;col-sm-4 invoice-col&quot;&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;div class=&quot;col-sm-4 invoice-col&quot;&gt;\r\n&lt;b&gt;Invoice #007612&lt;/b&gt;\r\n&lt;br&gt;\r\n&lt;br&gt;\r\n&lt;b&gt;Order ID:&lt;/b&gt; 4F3S8J\r\n&lt;br&gt;\r\n&lt;b&gt;Payment Due:&lt;/b&gt; 2/22/2014\r\n&lt;br&gt;\r\n&lt;b&gt;Account:&lt;/b&gt; 968-34567\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.row --&gt;\r\n\r\n&lt;!-- Table row --&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col-xs-12 table&quot;&gt;\r\n\r\n&lt;table class=&quot;table table-striped table-bordered dt-responsive nowrap&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;\r\n&lt;thead&gt;\r\n&lt;tr&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Subject&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Marks&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Marks&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Marks&lt;/th&gt;\r\n&lt;th style=&quot;width:20%;&quot;&gt;Total Marks&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;/thead&gt;\r\n \r\n\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;English&lt;/td&gt;\r\n&lt;td&gt;54&lt;/td&gt;\r\n&lt;td&gt;36&lt;/td&gt;\r\n&lt;td&gt;0&lt;/td&gt;\r\n&lt;td&gt;90&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.row --&gt;\r\n\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;!-- accepted payments column --&gt;\r\n&lt;div class=&quot;col-xs-6&quot;&gt;\r\n\r\n&lt;div class=&quot;table-responsive&quot;&gt;\r\n&lt;table class=&quot;table&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;th style=&quot;width:50%&quot;&gt;Total:&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;congradulations&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;congradulations&lt;/th&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;&lt;button class=&quot;btn btn-default&quot; onclick=&quot;window.print();&quot;&gt;&lt;i class=&quot;fa fa-print&quot;&gt;&lt;/i&gt; Print&lt;/button&gt;&lt;/th&gt;\r\n&lt;td&gt;&lt;button class=&quot;btn btn-primary pull-right&quot; style=&quot;margin-right: 5px;&quot; onclick=&quot;window.print();&quot;&gt;&lt;i class=&quot;fa fa-download&quot;&gt;&lt;/i&gt; Generate PDF&lt;/button&gt;&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;div class=&quot;col-xs-6&quot;&gt;\r\n&lt;div class=&quot;table-responsive&quot;&gt;\r\n&lt;table class=&quot;table&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;th style=&quot;width:50%&quot;&gt;Total:&lt;/th&gt;\r\n&lt;td&gt;$250.30&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;Average&lt;/th&gt;\r\n&lt;td&gt;$10.34&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;Grade:&lt;/th&gt;\r\n&lt;td&gt;$5.80&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;tr&gt;\r\n&lt;th&gt;Position:&lt;/th&gt;\r\n&lt;td&gt;$265.24&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.col --&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;/section&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` int(225) NOT NULL,
  `nationality` varchar(225) NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationality_id`, `nationality`, `created_by`) VALUES
(1, 'kenyan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(225) NOT NULL,
  `noticetitle` text NOT NULL,
  `noticedescription` text NOT NULL,
  `target` varchar(20) NOT NULL,
  `messagestatus` varchar(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `noticetitle`, `noticedescription`, `target`, `messagestatus`, `created_by`) VALUES
(1, 'fnoijkfn  fjkdf dsf', 'About catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring serviceAbout catring service', 'both', 'active', '1');

-- --------------------------------------------------------

--
-- Table structure for table `primaryschoolmarks`
--

CREATE TABLE `primaryschoolmarks` (
  `primaryschoolmarks_id` int(225) NOT NULL,
  `year` varchar(5) DEFAULT NULL,
  `term` varchar(15) DEFAULT NULL,
  `studentid` varchar(225) DEFAULT NULL,
  `classname` varchar(20) DEFAULT NULL,
  `classdetails` varchar(20) DEFAULT NULL,
  `mathematicsone` varchar(5) DEFAULT NULL,
  `mathematicstwo` varchar(5) DEFAULT NULL,
  `mathematicsthree` varchar(5) DEFAULT NULL,
  `mathematicstotal` varchar(5) DEFAULT NULL,
  `mathematicsremark` varchar(20) DEFAULT NULL,
  `englishone` varchar(5) DEFAULT NULL,
  `englishtwo` varchar(5) DEFAULT NULL,
  `englishthree` varchar(5) DEFAULT NULL,
  `englishtotal` varchar(5) DEFAULT NULL,
  `englishreview` varchar(20) DEFAULT NULL,
  `kiswahilione` varchar(5) DEFAULT NULL,
  `kiswahilitwo` varchar(5) DEFAULT NULL,
  `kiswahilithree` varchar(5) DEFAULT NULL,
  `kiswahilitotal` varchar(5) DEFAULT NULL,
  `kiswahiliremark` varchar(20) DEFAULT NULL,
  `scienceone` varchar(5) DEFAULT NULL,
  `sciencetwo` varchar(5) DEFAULT NULL,
  `sciencethree` varchar(5) DEFAULT NULL,
  `sciencetotal` varchar(5) DEFAULT NULL,
  `scienceremark` varchar(20) DEFAULT NULL,
  `sstudiesone` varchar(5) DEFAULT NULL,
  `sstudiestwo` varchar(5) DEFAULT NULL,
  `sstudiesthree` varchar(5) DEFAULT NULL,
  `sstudiestotal` varchar(5) DEFAULT NULL,
  `sstudiesremark` varchar(20) DEFAULT NULL,
  `created_by` varchar(20) NOT NULL,
  `time_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primaryschoolmarks`
--

INSERT INTO `primaryschoolmarks` (`primaryschoolmarks_id`, `year`, `term`, `studentid`, `classname`, `classdetails`, `mathematicsone`, `mathematicstwo`, `mathematicsthree`, `mathematicstotal`, `mathematicsremark`, `englishone`, `englishtwo`, `englishthree`, `englishtotal`, `englishreview`, `kiswahilione`, `kiswahilitwo`, `kiswahilithree`, `kiswahilitotal`, `kiswahiliremark`, `scienceone`, `sciencetwo`, `sciencethree`, `sciencetotal`, `scienceremark`, `sstudiesone`, `sstudiestwo`, `sstudiesthree`, `sstudiestotal`, `sstudiesremark`, `created_by`) VALUES
(19, '2017', 'Term one', '150269', 'Class 1', 'blue', '45', '45', '0', '90', 'Very good', '45', '35', '0', '80', 'Very good', '50', '30', '0', '80', 'Very good', '90', '0', '0', '90', 'Very good', '89', '0', '0', '89', 'Very good', '13'),
(20, '2017', 'Term two', '150267', 'class 1', 'blue', '34', '0', '0', '56', 'yt  utyu', '43', '33', '0', '54', 'ty uut y', '34', '23', '0', '56', 'ut uty', '34', '0', '0', '67', 'ty yut y', '54', '0', '0', '56', 't yt tuty', '13'),
(21, '2017', 'Term two', '150269', 'Class 1', 'blue', '21', '32', '43', '67', 'n cv c', '34', '23', '12', '56', 'c b', '34', '54', '56', '65', 'cv b', '23', '34', '45', '67', 'cb', '35', '54', '65', '56', 'c b', '13'),
(22, '2017', 'Term two', '1505119750', 'Class 1', 'blue', '98', '78', '67', '98', 'yas  lash', '87', '87', '87', '87', 'kasy lw ld', '87', '87', '87', '76', 'wue wuer l', '67', '80', '87', '87', 'wueyf kwye', '87', '87', '98', '67', 'weu iweu ywue', '13'),
(23, '2017', 'Term two', '1505119750', 'Class 1', 'blue', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13');

-- --------------------------------------------------------

--
-- Table structure for table `schoolsession`
--

CREATE TABLE `schoolsession` (
  `schoolsession_id` int(5) NOT NULL,
  `term` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolsession`
--

INSERT INTO `schoolsession` (`schoolsession_id`, `term`, `year`) VALUES
(3, 'Term two', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(225) NOT NULL,
  `country_name` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_name`, `state`, `created_by`) VALUES
(1, 'Kenya', 'Nairobi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `studentfeepayment`
--

CREATE TABLE `studentfeepayment` (
  `studentfeepayment_id` int(225) NOT NULL,
  `studentid` int(225) NOT NULL,
  `classname` varchar(15) NOT NULL,
  `term` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `amountpaid` int(10) NOT NULL,
  `receiptnumber` varchar(50) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `paymentmethod` varchar(20) NOT NULL,
  `created_by` int(10) NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentfeepayment`
--

INSERT INTO `studentfeepayment` (`studentfeepayment_id`, `studentid`, `classname`, `term`, `year`, `amountpaid`, `receiptnumber`, `bank`, `paymentmethod`, `created_by`) VALUES
(7, 150269, 'Class 1', 'Term one', '2017', 12000, 'esr45ty', 'equity', 'Check', 1),
(8, 150269, 'Class 1', 'Term one', '2017', 12000, 'AS57HIH78', 'Backlays', 'Check', 1),
(9, 150269, 'Class 1', 'Term one', '2017', 9000, 'LDMT8OIJT', 'Equity', 'Check', 1),
(10, 150269, 'Class 1', 'Term two', '2017', 500, 'LDMT8OIJT', 'Backlays', 'Check', 1),
(11, 150269, 'Class 1', 'Term two', '2017', 3576, 'JSKK78JKD', 'Equity', 'Check', 1),
(12, 150269, 'Class 1', 'Term two', '2017', 4566, 'LDMT8OIJT', 'Equity', 'Check', 1),
(13, 150267, 'class 1', 'Term two', '2017', 3265, 'LDMT8OIJT', 'Equity', 'Check', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `students_id` int(225) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `studenttitle` varchar(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `studentemail` varchar(225) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `class` varchar(20) NOT NULL,
  `classdetails` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_by` int(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`students_id`, `studentid`, `studenttitle`, `firstname`, `middlename`, `lastname`, `gender`, `studentemail`, `mobilenumber`, `dateofbirth`, `nationality`, `class`, `classdetails`, `level`, `created_by`) VALUES
(7, '150266', 'mr', 'James', 'Morris', 'Heirley', 'male', 'hale@gmail.com', '0721000000', '21/02/1993', 'american', 'class eight', 'blue', '', 1),
(9, '150267', 'mr', 'sad', 'asd', 'asd', 'male', 'jayisaac0@gmail.com', '+254770396785', '346', 'ad', 'class 1', 'blue', 'primary', 1),
(10, '150269', 'miss', 'jane', 'anne', 'wai', 'female', 'jayrtg@gmail.com', '+254770396785', '21/02/1993', 'kenyan', 'Class 1', 'blue', 'primary', 1),
(11, '1505119750', 'mr', 'Amos', 'Muriuki', 'maina', 'male', 'amos@gmail.com', '9776894665', '12/12/12', 'kenyan', 'Class 1', 'blue', 'primary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjectallocation`
--

CREATE TABLE `subjectallocation` (
  `subjectallocation_id` int(225) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectallocation`
--

INSERT INTO `subjectallocation` (`subjectallocation_id`, `studentid`, `subject`, `created_by`) VALUES
(2, '150266', 'Mathematics', '1'),
(9, '150266', 'English', '1'),
(11, '150266', 'Kiswahili', '1'),
(13, '150266', 'Science', '1'),
(14, '150266', 'social studies', '1'),
(15, '150269', 'Mathematics', '1'),
(16, '150269', 'English', '1'),
(17, '150269', 'Kiswahili', '1'),
(18, '150269', 'Science', '1'),
(19, '150269', 'social studies', '1'),
(21, '150267', 'English', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjects_id` int(225) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `subjectcode` varchar(5) NOT NULL,
  `subjectaliase` varchar(10) NOT NULL,
  `created_by` int(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjects_id`, `subject`, `subjectcode`, `subjectaliase`, `created_by`) VALUES
(1, 'Mathematics', '12345', 'math', 1),
(2, 'English', '12345', 'language', 1),
(3, 'Kiswahili', '12345', 'lugha', 1),
(4, 'Science', '1211', 'science', 1),
(5, 'social studies', '2345', 'social stu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachingsubjectallocation`
--

CREATE TABLE `teachingsubjectallocation` (
  `teachingsubjectallocation_id` int(225) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `employeeid` varchar(20) NOT NULL,
  `classdetails` varchar(20) NOT NULL,
  `subjectname` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachingsubjectallocation`
--

INSERT INTO `teachingsubjectallocation` (`teachingsubjectallocation_id`, `classname`, `employeeid`, `classdetails`, `subjectname`, `created_by`) VALUES
(1, 'Class 1', '150268', 'blue', 'English', '1'),
(2, 'Class 1', '150275', 'blue', 'Mathematics', '1'),
(3, 'Class 1', '150275', 'blue', 'Science', '1'),
(4, 'Class 2', '150275', 'blue', 'Mathematics', '1');

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE `town` (
  `town_id` int(225) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `created_by` int(50) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`town_id`, `country_name`, `state`, `town`, `created_by`) VALUES
(1, 'Kenya', 'Nairobi', 'Nairobi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `access_level` varchar(20) NOT NULL,
  `responsibility` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `access_level`, `responsibility`, `user_pass`) VALUES
(1, 'admin', 'admin@gmail.com', 'master_admin', '', '$2y$10$zWvT5Dg3jnwmOqbtuLsgPuUPyaAxdfgS/32yn1qIuLlZlS9bJpbSe'),
(3, '150266', 'hale@gmail.com', 'student', '', '$2y$10$sAE0ZLpof1ZORjpcomUo/.qvuAsaqRM9iWT3iE/s5y1WXAjjqNiTi'),
(4, '150267', 'finannda@gmail.com', 'student', '', '$2y$10$8Hr1U0.e/XX4xEc0f53VZ.dvWiQvvjKzMtmdFHR/mtWbACDG.xzku'),
(19, '1505119750', 'amos@gmail.com', 'student', '', '$2y$10$ispKBF5fjc9L44i1oey5G.P4KKpjh1NfOUGJPOXWFh58twGvqkNiW'),
(17, '1504288820', 'jone@gmai.com', 'library', '', '$2y$10$m07Up0JJf9ryJWiSPx11weWZYFteWg09IXCFpyk03BbKdBHoMh..q'),
(13, '150268', 'jayis@gmail.com', 'employee', '', '$2y$10$Dftc9Qx7I4VbdfNpu0cLQuTYkA55E6jXFwma2Chd5NOywxLDvVj.O'),
(15, '150269', 'jayrtg@gmail.com', 'student', '', '$2y$10$1KbocEsTsatIW/TGUkaFo.9w8zlfSjalRoM1S0kx3P2VjHlEZ1.1K'),
(18, '1504289704', 'jone@gmai.com', 'library', '', '$2y$10$EhF7uaqzPdIt64ge9vmhMurNgWwQYJsTQ/uaMY.Xx7yoJTA0AZ1SO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admisioncategory`
--
ALTER TABLE `admisioncategory`
  ADD PRIMARY KEY (`admisioncategory_id`);

--
-- Indexes for table `assignmentreplies`
--
ALTER TABLE `assignmentreplies`
  ADD PRIMARY KEY (`assignmentreplies_id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignments_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`books_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`book_category_id`);

--
-- Indexes for table `book_sub_category`
--
ALTER TABLE `book_sub_category`
  ADD PRIMARY KEY (`book_sub_category_id`);

--
-- Indexes for table `borrowed`
--
ALTER TABLE `borrowed`
  ADD PRIMARY KEY (`borrowed_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classes_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `employeeresponsibility`
--
ALTER TABLE `employeeresponsibility`
  ADD PRIMARY KEY (`employeeresponsibility_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employees_id`);

--
-- Indexes for table `feeref`
--
ALTER TABLE `feeref`
  ADD PRIMARY KEY (`feeref_id`);

--
-- Indexes for table `highschoolmarks`
--
ALTER TABLE `highschoolmarks`
  ADD PRIMARY KEY (`highschoolmarks_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`librarian_id`);

--
-- Indexes for table `messageoftheday`
--
ALTER TABLE `messageoftheday`
  ADD PRIMARY KEY (`messageoftheday_id`);

--
-- Indexes for table `myreportcard`
--
ALTER TABLE `myreportcard`
  ADD PRIMARY KEY (`myreportcard_id`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `primaryschoolmarks`
--
ALTER TABLE `primaryschoolmarks`
  ADD PRIMARY KEY (`primaryschoolmarks_id`);

--
-- Indexes for table `schoolsession`
--
ALTER TABLE `schoolsession`
  ADD PRIMARY KEY (`schoolsession_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `studentfeepayment`
--
ALTER TABLE `studentfeepayment`
  ADD PRIMARY KEY (`studentfeepayment_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`students_id`);

--
-- Indexes for table `subjectallocation`
--
ALTER TABLE `subjectallocation`
  ADD PRIMARY KEY (`subjectallocation_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjects_id`);

--
-- Indexes for table `teachingsubjectallocation`
--
ALTER TABLE `teachingsubjectallocation`
  ADD PRIMARY KEY (`teachingsubjectallocation_id`);

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`town_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admisioncategory`
--
ALTER TABLE `admisioncategory`
  MODIFY `admisioncategory_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignmentreplies`
--
ALTER TABLE `assignmentreplies`
  MODIFY `assignmentreplies_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignments_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `books_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `book_category_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_sub_category`
--
ALTER TABLE `book_sub_category`
  MODIFY `book_sub_category_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `borrowed`
--
ALTER TABLE `borrowed`
  MODIFY `borrowed_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classes_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employeeresponsibility`
--
ALTER TABLE `employeeresponsibility`
  MODIFY `employeeresponsibility_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employees_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feeref`
--
ALTER TABLE `feeref`
  MODIFY `feeref_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `highschoolmarks`
--
ALTER TABLE `highschoolmarks`
  MODIFY `highschoolmarks_id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `librarian_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messageoftheday`
--
ALTER TABLE `messageoftheday`
  MODIFY `messageoftheday_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `myreportcard`
--
ALTER TABLE `myreportcard`
  MODIFY `myreportcard_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nationality_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `primaryschoolmarks`
--
ALTER TABLE `primaryschoolmarks`
  MODIFY `primaryschoolmarks_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `schoolsession`
--
ALTER TABLE `schoolsession`
  MODIFY `schoolsession_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentfeepayment`
--
ALTER TABLE `studentfeepayment`
  MODIFY `studentfeepayment_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `students_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subjectallocation`
--
ALTER TABLE `subjectallocation`
  MODIFY `subjectallocation_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjects_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachingsubjectallocation`
--
ALTER TABLE `teachingsubjectallocation`
  MODIFY `teachingsubjectallocation_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `town_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
