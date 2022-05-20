-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 07:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtechserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_infos`
--

-- CREATING Lectural SCHOOL TABLE

CREATE TABLE IF NOT EXISTS `Lecturals`(
  `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
  `Professor__id` VARCHAR(200) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Middle__name` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Othername` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accesscode` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` VARCHAR(60) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_of_Birth` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place__of__birth` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Relationship_sts` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Civil_status` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Citizenship` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIN` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Height` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Religion` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Blood_Type` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` text,
  `Qualification` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
  `Profile__Picture` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active__time` DATETIME
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATING Student Table 

CREATE TABLE IF NOT EXISTS `Student__Account`(
    `No` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `student__Id` VARCHAR(220) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Roll__No` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Application__Type` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Department__Type` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Program__Type` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `NIN` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Entrylevel` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Surname` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `othername` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `password` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Date__of__birth` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `gender` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `relationship` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `telephone` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `image` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `session` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `settings` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- CREATING Non staff TABLE

CREATE TABLE IF NOT EXISTS `Non__Staffs`(
  `#` TINYINT(11) PRIMARY KEY AUTO_INCREMENT,
  `Staff___id` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Othername` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Joining___Date` DATE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation`  VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date__of__birth` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Religion` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Qualification` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` TEXT,
  `Last__Seen` DATETIME,
  `Profile___Picture` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Education__Degree` TEXT COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATING HUMAN RESOURCES TABLE [HR TABLE]

CREATE TABLE IF NOT EXISTS `human_resources`(
    `#` MEDIUMINT(10) PRIMARY KEY AUTO_INCREMENT,
    `Hr__id` VARCHAR(220) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Surname` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Middel__name` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Othername` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Accesscode` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Email` VARCHAR(60)UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Telephone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Date_of_Birth` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Place__of__birth` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Cellphone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Relationship_sts` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Civil_status` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Citizenship` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `NIN` VARCHAR(50)UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Department` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Height` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Weight` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Religion` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Qualification` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Blood_Type` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Address` text,
    `Profile__Picture` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Registration_Date` DATETIME
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

--  INSERT INTO human_resources TABLE

INSERT INTO `human_resources`(`#`, `Hr__id`, `Surname`, `Middel__name`, `Othername`, `Accesscode`, `Password`, `Email`, `Telephone_No`, `Date_of_Birth`, `Place__of__birth`, `Gender`, `Cellphone_No`, `Relationship_sts`, `Civil_status`, `Citizenship`, `NIN`, `Department`, `Height`, `Weight`, `Blood_Type`, `Address`,  `Profile__Picture`, `Registration_Date`) VALUES ('1', 'Hr0001', 'Mark', 'Alex', 'Lio', 'MUC.STHR3701817', '$2y$10$NtvbJ12gsZzLsa/sIC1Vde4ap1nWl7gEaddovt0MkiYqCpT6Fcoue', 'staff@hotmail.com', '+1234567890', '04-10-1111', 'Oyo state, ibadan', 'Male', '212-455-655', 'Married', 'Null', 'Nigeria', '24075663446', '[HR]', '1.65 m', '76 kg', 'AA', 'House 22, Kudety crescent, Onireke', 'http://localhost/school/public/assets/img/avatar/avatarC.PNG', '2021-03-09 14:17:39');
 
-- CREATING STAFF TABLE

CREATE TABLE IF NOT EXISTS `Staff`(
    `#` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `Staff__id` VARCHAR(220) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Surname` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Middel__name` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Othername` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Accesscode` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Email` VARCHAR(60)UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Telephone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Date_of_Birth` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Place__of__birth` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Cellphone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Relationship_sts` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Civil_status` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Citizenship` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `NIN` VARCHAR(50)UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Department` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Height` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Weight` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Religion` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Qualification` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Blood_Type` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Address` text,
    `Profile__Picture` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Registration_Date` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--  INSERT INTO STAFF TABLE

INSERT INTO `Staff`(`#`, `Staff__id`, `Surname`, `Middel__name`, `Othername`, `Accesscode`, `Password`, `Email`, `Telephone_No`, `Date_of_Birth`, `Place__of__birth`, `Gender`, `Cellphone_No`, `Relationship_sts`, `Civil_status`, `Citizenship`, `NIN`, `Department`, `Height`, `Weight`, `Blood_Type`, `Address`,  `Profile__Picture`, `Registration_Date`) VALUES ('1', 'RIOH001', 'Deco', 'Albert', 'Mmicheal', 'MUC.ST72802082', '$2y$10$NtvbJ12gsZzLsa/sIC1Vde4ap1nWl7gEaddovt0MkiYqCpT6Fcoue', 'staff@hotmail.com', '+1234567890', '04-10-1111', 'Oyo state, ibadan', 'Male', '212-455-655', 'Married', 'Null', 'Nigeria', '24075663446', 'Staff', '1.65 m', '76 kg', 'AA', 'House 22, Kudety crescent, Onireke', 'http://localhost/school/public/assets/img/avatar/avatarC.PNG', '2021-03-09 14:17:39');
 
 -- CREATING ACCOUNTANT TABLE 

CREATE TABLE IF NOT EXISTS `accountant`(
  `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
  `Accountant__id` VARCHAR(200) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Middle__name` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Othername` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accesscode` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` VARCHAR(60)UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_of_Birth` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place__of__birth` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cellphone_No` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Relationship_sts` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Civil_status` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Citizenship` VARCHAR (250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIN` VARCHAR(50)UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Height` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Blood_Type` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Religion` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Qualification` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` text,
  `Profile__Picture` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATING Non Parent TABLE(NOTE::)the parent id is a unique id that reference student__tb > Parent__OR__Guadian__ID that way we an able to find or filter parent and student details when needed.

CREATE TABLE IF NOT EXISTS `Parent__tb`(
  `No` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
  `Parent___id` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` TEXT,
  `Last__Seen` DATETIME,
  `Profile___Picture` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATING Library table

CREATE TABLE IF NOT EXISTS `Library__tb`(
  `No` TINYINT(11) PRIMARY KEY AUTO_INCREMENT,
  `Object__ID` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Auther__Name` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Publisher` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Asset__Type` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Purchase__Date` DATE,
  `Price` DECIMAL(10, 2) NOT NULL,
  `Status` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Asset__Details` TEXT
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATING HOLIDAY TABLE

CREATE TABLE IF NOT EXISTS `Holiday__tb`(
  `No` TINYINT(11) PRIMARY KEY AUTO_INCREMENT,
  `Holiday__Id` VARCHAR(220) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Holiday__Type` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Holiday__Start__Date` DATE,
  `Holiday__End__Date` DATE,
  `Holiday__Details` TEXT 
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATING ADMIN TABLE

CREATE TABLE IF NOT EXISTS `Super__administrator`(
  `No` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
  `Admin__id` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Othername` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_level` TINYINT(10) COLLATE utf8mb4_unicode_ci UNIQUE NOT NULL,
  `last_login` DATETIME, 
  `permission` VARCHAR(255) COLLATE utf8mb4_unicode_ci UNIQUE NOT NULL,
  `Profile___Picture` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- INSERT INTO superadmin table

INSERT INTO `Super__administrator` (`No`, `Admin__id`, `Surname`, `Othername`, `Email`, `username`, `password`, `Gender`, `Mobile`,  `admin_level`, `last_login`, `permission`, `Profile___Picture`)
 VALUES('1', 'Qz8kM9sQk90j92J0is', 'David', 'Akpele', 'admin@aol.com', 'Admin', '$argon2id$v=19$m=65536,t=4,p=1$SW91dkNXZkVVTFYuNE52SQ$vSEyPtRqsTwYiMspuOly3244f6fPW0qwdaGyrWFOltA', 'Male', '+(234) 906-9888-05', '1', '2021-04-3 00:00:00', 'Admin,Editor,Manager', 'http://localhost/school/public/assets/img/profile.jpg');


-- CREATING OND STUDENT REQUIREMENT FOR THIS UNIVERSITY

CREATE TABLE IF NOT EXISTS `Required__Subjects`(
  `No` INT(11) PRIMARY KEY UNIQUE AUTO_INCREMENT,
  `Subject__Id` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Compulsory__Sub_Id` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject__name` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grade` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Updated__date` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- CREATE COMPUSLSORY SUBJECTS TABLE THAT MATCHES THE REQUIREMENT SUBJECT

-- CREATING APPOINTMENT TABLE FOR PROFESSORS

CREATE TABLE IF NOT EXISTS `Management__Role`(
  `#` INT (10) PRIMARY KEY AUTO_INCREMENT,
  `ID` VARCHAR(200) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIN` VARCHAR(200) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Faculty__ref__id` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Base` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

ALTER TABLE `Management__Role` ADD INDEX (`Role`);

CREATE TABLE IF NOT EXISTS `Entry_year`(
  `No` TINYINT(10) AUTO_INCREMENT PRIMARY KEY,
  `Session` VARCHAR(200) NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO `Entry_year`(`No`, `Session`) 
        VALUES('1','2018/2019'),
              ('2', '2019/2020'),
              ('3', '2020/2021'),
              ('4', '2021/2022'),
              ('5', '2022/2023'),
              ('6', '2023/2024'),
              ('7', '2024/2025'),
              ('8', '2025/2026'),
              ('9', '2026/2027'),
              ('10', '2027/2028');
-- CREATING FACULTY TABLE

CREATE TABLE IF NOT EXISTS `Faculty__tb`(
  `No` TINYINT(11) AUTO_INCREMENT PRIMARY KEY,
  `Faculty__ID` MEDIUMINT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Faculty__name` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Parent__ID` INT(10) DEFAULT '0' NOT NULL,
  `Created_date` DATETIME 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERTING INTO FACULTY TABLE

INSERT INTO `Faculty__tb`(`No`, `Faculty__ID`, `Faculty__name`, `Created_date`) 
VALUES('1', '10092', 'Faculty of Basic Medical Science (BMS)', '1232-02-12 06:40:21'),
    ('2', '19034', 'Faculty of Environmental Science', '1232-02-12 06:40:21'),
    ('3', '18053', 'Faculty of Management Science', '1232-02-12 06:40:21'),
    ('4', '11043', 'Faculty of Social Science', '1232-02-12 06:40:21'),
    ('5', '10406', 'Faculty of Engineering', '1232-02-12 06:40:21'),
    ('6', '10987', 'Faculty of Pharmacy', '1232-02-12 06:40:21'),
    ('7', '13023', 'Faculty of Education', '1232-02-12 06:40:21'),
    ('8', '10293', 'Faculty of Science', '1232-02-12 06:40:21'),
    ('9', '10227', 'Faculty of Art', '1232-02-12 06:40:21'),
    ('10', '74768', 'Faculty of Agriculture', '1232-02-12 06:40:21'),
    ('11', '10992', 'Faculty of Law', '1232-02-12 06:40:21');

CREATE TABLE `Examination__Center` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `Courseid` VARCHAR(255) NOT NULL,
    `question` text NOT NULL,
    `answer` text NOT NULL,
    `Student__answer` text NOT NULL,
    `option 1` text NOT NULL,
    `option 2` text NOT NULL,
    `option 3` text NOT NULL,
    `option 4` text NOT NULL,
    `Ansbutton` VARCHAR (200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Examination__Timeset`(
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `Department` VARCHAR(255) NOT NULL,
    `StartTime` VARCHAR(222) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- NOTE::the UTME has a reference id that connect and fetch the conresponding data from umte table
-- Two or more table need to be created else you can as well do it in a Pseudo way 

CREATE TABLE IF NOT EXISTS `RequirementOutLines`(
    `#` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `Id` VARCHAR(250) UNIQUE NOT NULL,
    `Duration` text,
    `headerone` text,
    `Subtext` text,
    `UTME` text,
    `WASSCE` text,
    `NECO_SSCE` text,
    `IGCSE` text,
    `GCSE` text
);

insert into RequirementOutLines (Id, Duration, headerone, Subtext, UTME, WASSCE, NECO_SSCE, IGCSE, GCSE)
values('7803984023', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (ACCOUNTING, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, LITERATURE IN ENGLISH and BIOLOGY) and in MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, BUSINESS MANAGEMENT, Data Processing and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, BUSINESS MANAGEMENT, Data Processing and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, ADDITIONAL MATHEMATICS, GEOGRAPHY, BIOLOGY, BUSINESS STUDIES, COMPUTER SCIENCE and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ADDITIONAL MATHEMATICS, ACCOUNTING, GEOGRAPHY, BIOLOGY, BUSINESS STUDIES, COMPUTER SCIENCE and LITERATURE IN ENGLISH)'),
    ('6749098340', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (ACCOUNTING, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, LITERATURE IN ENGLISH and BIOLOGY) and in MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, BUSINESS MANAGEMENT, Data Processing and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, BUSINESS MANAGEMENT, Data Processing and LITERATURE IN ENGLISH)',  'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, ADDITIONAL MATHEMATICS, GEOGRAPHY, BIOLOGY, BUSINESS STUDIES, COMPUTER SCIENCE and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ADDITIONAL MATHEMATICS, ACCOUNTING, GEOGRAPHY, BIOLOGY, BUSINESS STUDIES, COMPUTER SCIENCE and LITERATURE IN ENGLISH)'),
    ('8742398330', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (GEOGRAPHY, GOVERNMENT, BIOLOGY, CHEMISTRY, PHYSICS and COMMERCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, Data Processing, CHRISTIAN RELIGIOUS STUDIES, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, CHEMISTRY, PHYSICS, COMMERCE, Civic Education and INSURANCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, Data Processing, CHRISTIAN RELIGIOUS STUDIES, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, CHEMISTRY, PHYSICS, COMMERCE, Civic Education and INSURANCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (ACCOUNTING, RELIGIOUS STUDIES, ISLAMIYAT, ADDITIONAL MATHEMATICS, GEOGRAPHY, BIOLOGY, CHEMISTRY and PHYSICS) and Any 1 subject(s) in (PHYSICS, CHEMISTRY, BIOLOGY, GEOGRAPHY, ADDITIONAL MATHEMATICS, ISLAMIYAT, RELIGIOUS STUDIES and ACCOUNTING)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (ACCOUNTING, RELIGIOUS STUDIES, ISLAMIYAT, ADDITIONAL MATHEMATICS, GEOGRAPHY, BIOLOGY, CHEMISTRY and PHYSICS) and Any 1 subject(s) in (PHYSICS, CHEMISTRY, BIOLOGY, GEOGRAPHY, ADDITIONAL MATHEMATICS, ISLAMIYAT, RELIGIOUS STUDIES and ACCOUNTING)'),
    ('2562023923', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (ACCOUNTING, GEOGRAPHY, GOVERNMENT, BIOLOGY, CHEMISTRY, PHYSICS and COMMERCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, Data Processing, CHRISTIAN RELIGIOUS STUDIES, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, CHEMISTRY, PHYSICS, COMMERCE, Civic Education and INSURANCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, Data Processing, CHRISTIAN RELIGIOUS STUDIES, FURTHER MATHEMATICS, GEOGRAPHY, GOVERNMENT, BIOLOGY, CHEMISTRY, PHYSICS, COMMERCE, Civic Education and INSURANCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ACCOUNTING, RELIGIOUS STUDIES, ISLAMIYAT, ADDITIONAL MATHEMATICS, GEOGRAPHY, BIOLOGY, CHEMISTRY and PHYSICS) and in ECONOMICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (ACCOUNTING, RELIGIOUS STUDIES, ISLAMIYAT, ADDITIONAL MATHEMATICS, GEOGRAPHY, BIOLOGY, CHEMISTRY and PHYSICS) and Any 1 subject(s) in (PHYSICS, CHEMISTRY, BIOLOGY, GEOGRAPHY, ADDITIONAL MATHEMATICS, ISLAMIYAT, RELIGIOUS STUDIES and ACCOUNTING)'),
    ('9923798834', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH, GEOGRAPHY, MATHEMATICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, ECONOMICS, COMMERCE, Civic Education, ACCOUNTING, BIOLOGY and FOODS & NUTRITION) , in ENGLISH LANGUAGE and Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, MATHEMATICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, ECONOMICS, FRENCH, COMMERCE, Civic Education, ACCOUNTING, BIOLOGY and FOODS & NUTRITION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, NIGERIAN LANGUAGE Subjects, FRENCH, CHRISTIAN RELIGIOUS STUDIES, Civic Education, COMMERCE, BIOLOGY, ACCOUNTING and FOODS & NUTRITION) and Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, FRENCH, Civic Education, COMMERCE, BIOLOGY, ACCOUNTING and FOODS & NUTRITION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, FRENCH, Civic Education, COMMERCE, BIOLOGY, ACCOUNTING, FOODS & NUTRITION and BUSINESS MANAGEMENT) and Any 1 subject(s) in (NIGERIAN LANGUAGE Subjects, Civic Education, ECONOMICS, CHRISTIAN RELIGIOUS STUDIES, LITERATURE IN ENGLISH, FRENCH, GEOGRAPHY, HISTORY, COMMERCE, BIOLOGY, ACCOUNTING, FOODS & NUTRITION and BUSINESS MANAGEMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, RELIGIOUS STUDIES, ISLAMIYAT and BUSINESS STUDIES) and Any 1 subject(s) in (FRENCH, RELIGIOUS STUDIES, ISLAMIYAT and BUSINESS STUDIES)', ''),
    ('1289532302', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 1 subject(s) in (GEOGRAPHY, ECONOMICS, BIOLOGY, CHEMISTRY and FINE ART)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, Any 1 subject(s) in (FINE ART and TECHNICAL DRAWING) and Any 1 subject(s) in (ECONOMICS, GEOGRAPHY, CHEMISTRY, BIOLOGY and PAINTING & DECORATION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, Any 1 subject(s) in (FINE ART and TECHNICAL DRAWING) and Any 1 subject(s) in (ECONOMICS, GEOGRAPHY, CHEMISTRY, BIOLOGY and PAINTING & DECORATION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, Any 1 subject(s) in (ART & DESIGN and DESIGN TECHNOLOGY) and Any 1 subject(s) in (ECONOMICS, GEOGRAPHY, CHEMISTRY and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, Any 1 subject(s) in (ART & DESIGN and DESIGN TECHNOLOGY) and Any 1 subject(s) in (ECONOMICS, GEOGRAPHY, CHEMISTRY and BIOLOGY)'),
    ('2918921891', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH, GEOGRAPHY, MATHEMATICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, ECONOMICS, COMMERCE, Civic Education, ACCOUNTING, BIOLOGY and FOODS & NUTRITION) , in ENGLISH LANGUAGE and Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, MATHEMATICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, ECONOMICS, FRENCH, COMMERCE, Civic Education, ACCOUNTING, BIOLOGY and FOODS & NUTRITION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, NIGERIAN LANGUAGE Subjects, FRENCH, CHRISTIAN RELIGIOUS STUDIES, Civic Education, COMMERCE, BIOLOGY, ACCOUNTING and FOODS & NUTRITION) and Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, FRENCH, Civic Education, COMMERCE, BIOLOGY, ACCOUNTING and FOODS & NUTRITION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES, FRENCH, Civic Education, COMMERCE, BIOLOGY, ACCOUNTING, FOODS & NUTRITION and BUSINESS MANAGEMENT) and Any 1 subject(s) in (NIGERIAN LANGUAGE Subjects, Civic Education, ECONOMICS, CHRISTIAN RELIGIOUS STUDIES, LITERATURE IN ENGLISH, FRENCH, GEOGRAPHY, HISTORY, COMMERCE, BIOLOGY, ACCOUNTING, FOODS & NUTRITION and BUSINESS MANAGEMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS, RELIGIOUS STUDIES, ISLAMIYAT and BUSINESS STUDIES) and Any 1 subject(s) in (FRENCH, RELIGIOUS STUDIES, ISLAMIYAT and BUSINESS STUDIES)', ''),
    ('8734983044', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (SCIENCE Subjects, ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', ''),
    ('1256879329', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in HISTORY and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in HISTORY and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in HISTORY and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', ''),
    ('8756182120', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS and in ENGLISH LANGUAGE, and any other 3subject(s)', ''),
    ('8745674982', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', ''),
    ('9473948430', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH and NIGERIAN LANGUAGE Subjects) and in CHRISTIAN RELIGIOUS STUDIES', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHRISTIAN RELIGIOUS STUDIES and Any 2 subject(s) in (LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects, HISTORY, FRENCH, ECONOMICS, GEOGRAPHY and Civic Education)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHRISTIAN RELIGIOUS STUDIES and Any 2 subject(s) in (LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects, HISTORY, FRENCH, ECONOMICS, GEOGRAPHY and Civic Education)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH, ECONOMICS, NIGERIAN LANGUAGE Subjects and GEOGRAPHY) and in RELIGIOUS STUDIES', ''),
    ('5237879230', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE and Any 3 subject(s) in (GEOGRAPHY, LITERATURE IN ENGLISH, HISTORY, FRENCH, MATHEMATICS, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (SOCIAL SCIENCES Subjects and SCIENCE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (SOCIAL SCIENCES Subjects and SCIENCE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH, ECONOMICS, BIOLOGY and CHEMISTRY)', ''),
    ('4537433874', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, in ISLAMIC STUDIES and Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH, GEOGRAPHY, MATHEMATICS, YORUBA LANGUAGE, CHRISTIAN RELIGIOUS STUDIES and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ISLAMIC STUDIES and Any 2 subject(s) in (LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects, HISTORY, FRENCH, Civic Education and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ISLAMIC STUDIES, Any 1 subject(s) in (LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects, HISTORY, FRENCH, Civic Education and ECONOMICS) and Any 1 subject(s) in (LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects, Civic Education, FRENCH, ECONOMICS and HISTORY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ISLAMIYAT and Any 2 subject(s) in (LITERATURE IN ENGLISH, ECONOMICS, HISTORY, FRENCH and NIGERIAN LANGUAGE Subjects)', ''),
    ('7473947364', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (GEOGRAPHY, HISTORY and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, GOVERNMENT, ACCOUNTING, LITERATURE IN ENGLISH and Civic Education)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, GOVERNMENT, ACCOUNTING, Civic Education and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, HISTORY, LITERATURE IN ENGLISH and ACCOUNTING)', ''),
    ('5945845854', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and Data Processing)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and Data Processing)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 1 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)'),
    ('8433480443', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and in', ''),
    ('1312012212', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GOVERNMENT, GEOGRAPHY, COMMERCE, ACCOUNTING, PHYSICS, CHEMISTRY, BIOLOGY, BUSINESS MANAGEMENT and BOOK KEEPING)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GOVERNMENT, GEOGRAPHY, COMMERCE, ACCOUNTING, PHYSICS, CHEMISTRY, BIOLOGY, BUSINESS MANAGEMENT and BOOK KEEPING)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, ACCOUNTING, PHYSICS, CHEMISTRY, BIOLOGY and BUSINESS STUDIES)', 'Minimum of 1 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (GEOGRAPHY, ACCOUNTING, PHYSICS, CHEMISTRY, BIOLOGY and BUSINESS STUDIES) and Any 1 subject(s) in (BUSINESS STUDIES, BIOLOGY, CHEMISTRY, PHYSICS, ACCOUNTING and GEOGRAPHY)'),
    ('1208923823', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 1 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY'),
    ('4290121983', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in BIOLOGY, in CHEMISTRY and in PHYSICS'),
    ('3967871823', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and in CHEMISTRY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BUILDING CONSTRUCTION, TECHNICAL DRAWING and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BUILDING CONSTRUCTION, TECHNICAL DRAWING and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (DESIGN TECHNOLOGY and ECONOMICS)', ''),
    ('8379830911', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 1 subject(s) in (CHEMISTRY, ECONOMICS and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (GEOGRAPHY, CHEMISTRY, TECHNICAL DRAWING and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (GEOGRAPHY, CHEMISTRY, TECHNICAL DRAWING and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (ECONOMICS, GEOGRAPHY, CHEMISTRY and DESIGN TECHNOLOGY)', ''),
    ('6428798303', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (SCIENCE Subjects, SOCIAL SCIENCES Subjects and ART Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GOVERNMENT, GEOGRAPHY, CHRISTIAN RELIGIOUS STUDIES and BUSINESS MANAGEMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GOVERNMENT, GEOGRAPHY, CHRISTIAN RELIGIOUS STUDIES and BUSINESS MANAGEMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GEOGRAPHY, RELIGIOUS STUDIES, ISLAMIYAT and BUSINESS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GEOGRAPHY, RELIGIOUS STUDIES, ISLAMIYAT and BUSINESS STUDIES)'),
    ('5386792189', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in BIOLOGY, in CHEMISTRY and in PHYSICS'),
    ('9386238329', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in ADDITIONAL MATHEMATICS, in PHYSICS and in CHEMISTRY'),
    ('1212121121', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in ADDITIONAL MATHEMATICS and in PHYSICS'),
    ('1232394723', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (MATHEMATICS and BIOLOGY) , in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY'),
    ('9843803493', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in PHYSICS and in CHEMISTRY'),
    ('2478200232', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 1 subject(s) in (CHEMISTRY and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in FURTHER MATHEMATICS, in PHYSICS and Any 1 subject(s) in (CHEMISTRY and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in FURTHER MATHEMATICS, in PHYSICS and Any 1 subject(s) in (CHEMISTRY and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in PHYSICS and Any 1 subject(s) in (CHEMISTRY and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in ADDITIONAL MATHEMATICS and Any 1 subject(s) in (CHEMISTRY and BIOLOGY)'),
    ('4758029302', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (FINE ART, LITERATURE IN ENGLISH and MUSIC) , in ENGLISH LANGUAGE, in and Any 1 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (LITERATURE IN ENGLISH, FINE ART and VISUAL ART) , in and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (LITERATURE IN ENGLISH, FINE ART and VISUAL ART) , in and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (LITERATURE IN ENGLISH and ART & DESIGN) , in and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', ''),
    ('7123461319', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (BIOLOGY, ACCOUNTING, GEOGRAPHY and GOVERNMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (BIOLOGY, GEOGRAPHY, ACCOUNTING and GOVERNMENT) and Any 1 subject(s) in (GOVERNMENT, BIOLOGY, ACCOUNTING and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (BIOLOGY, ACCOUNTING, GEOGRAPHY and GOVERNMENT) and Any 1 subject(s) in (GOVERNMENT, BIOLOGY, ACCOUNTING and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (BIOLOGY, ACCOUNTING and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES (Without Commerce) Subjects and SCIENCE Subjects)'),
    ('7295715675', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, NIGERIAN LANGUAGE Subjects, CHRISTIAN RELIGIOUS STUDIES and ECONOMICS) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, NIGERIAN LANGUAGE Subjects and CHRISTIAN RELIGIOUS STUDIES) and Any 1 subject(s) in (CHRISTIAN RELIGIOUS STUDIES, NIGERIAN LANGUAGE Subjects, HISTORY, GEOGRAPHY and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, CHRISTIAN RELIGIOUS STUDIES and NIGERIAN LANGUAGE Subjects) and Any 1 subject(s) in (LITERATURE IN ENGLISH, GEOGRAPHY, HISTORY, NIGERIAN LANGUAGE Subjects and CHRISTIAN RELIGIOUS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects, HISTORY and GEOGRAPHY) and Any 1 subject(s) in (NIGERIAN LANGUAGE Subjects, HISTORY, LITERATURE IN ENGLISH and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (LITERATURE IN ENGLISH, HISTORY, ECONOMICS, GEOGRAPHY, RELIGIOUS STUDIES and ISLAMIYAT)'),
    ('4061884454', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (LITERATURE IN ENGLISH, HISTORY, FRENCH, GEOGRAPHY, YORUBA LANGUAGE, CHRISTIAN RELIGIOUS STUDIES, ECONOMICS, GOVERNMENT and Civic Education) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GOVERNMENT, GEOGRAPHY, ECONOMICS, YORUBA LANGUAGE, CHRISTIAN RELIGIOUS STUDIES, FRENCH and Civic Education) and Any 1 subject(s) in (FRENCH, CHRISTIAN RELIGIOUS STUDIES, YORUBA LANGUAGE, Civic Education, LITERATURE IN ENGLISH, HISTORY, GOVERNMENT, GEOGRAPHY and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GOVERNMENT, GEOGRAPHY, ECONOMICS, YORUBA LANGUAGE, CHRISTIAN RELIGIOUS STUDIES, FRENCH and Civic Education) , Any 1 subject(s) in (LITERATURE IN ENGLISH, GOVERNMENT, HISTORY, GEOGRAPHY, ECONOMICS, YORUBA LANGUAGE, CHRISTIAN RELIGIOUS STUDIES, FRENCH and Civic Education) and Any 1 subject(s) in (GEOGRAPHY, GOVERNMENT, HISTORY, LITERATURE IN ENGLISH, YORUBA LANGUAGE, CHRISTIAN RELIGIOUS STUDIES, Civic Education, FRENCH and ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY, ECONOMICS and FRENCH) and Any 1 subject(s) in (FRENCH, LITERATURE IN ENGLISH, HISTORY, GEOGRAPHY and ECONOMICS)', ''),
    ('9427774501', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ADDITIONAL MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS'),
    ('1940588197', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in CHEMISTRY and in PHYSICS'),
    ('1621958941', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in LITERATURE IN ENGLISH, in ENGLISH LANGUAGE and Any 2 subject(s) in (FRENCH, HISTORY, GOVERNMENT, CHRISTIAN RELIGIOUS STUDIES and NIGERIAN LANGUAGE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ART Subjects and HISTORY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (HISTORY and ART Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (HISTORY and ART Subjects) and in LITERATURE IN ENGLISH', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in LITERATURE IN ENGLISH, Any 1 subject(s) in (FRENCH, RELIGIOUS STUDIES, ISLAMIYAT, HISTORY and NIGERIAN LANGUAGE Subjects) and Any 1 subject(s) in (HISTORY, ISLAMIYAT, RELIGIOUS STUDIES, FRENCH and NIGERIAN LANGUAGE Subjects)'),
    ('5610854108', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (CHEMISTRY, PHYSICS, BIOLOGY, GEOGRAPHY and ACCOUNTING', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, GEOGRAPHY, AGRICULTURAL SCIENCE, TECHNICAL DRAWING and ACCOUNTING)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, GEOGRAPHY, AGRICULTURAL SCIENCE, TECHNICAL DRAWING and ACCOUNTING)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, GEOGRAPHY, AGRICULTURAL SCIENCE, ACCOUNTING and DESIGN TECHNOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (PHYSICS and CHEMISTRY) and Any 1 subject(s) in (BIOLOGY, GEOGRAPHY, AGRICULTURAL SCIENCE and ACCOUNTING)'),
    ('4543201199', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and COMPUTER STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and COMPUTER STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and COMPUTER SCIENCE) and Any 1 subject(s) in (SOCIAL SCIENCES Subjects, ART Subjects and COMPUTER SCIENCE)', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and COMPUTER SCIENCE) and Any 1 subject(s) in (SOCIAL SCIENCES Subjects, ART Subjects and COMPUTER SCIENCE)'),
    ('8239603000', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and COMPUTER STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and COMPUTER STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (COMPUTER SCIENCE, ART Subjects and SOCIAL SCIENCES Subjects)', ''),
    ('2273169435', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in GEOGRAPHY, in ENGLISH LANGUAGE and Any 2 subject(s) in (BIOLOGY, PHYSICS, CHEMISTRY, MATHEMATICS, ECONOMICS and GOVERNMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY, Any 1 subject(s) in (ECONOMICS, ADDITIONAL MATHEMATICS, CHEMISTRY, PHYSICS and BIOLOGY) and Any 1 subject(s) in (BIOLOGY, PHYSICS, CHEMISTRY, ADDITIONAL MATHEMATICS and ECONOMICS)'),
    ('9566253164', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and in CHEMISTRY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in BIOLOGY'),
    ('9618908133', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and in CHEMISTRY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', ''),
    ('8324768023', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (HISTORY and GOVERNMENT) , in ENGLISH LANGUAGE and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (HISTORY and GOVERNMENT) and Any 2 subject(s) in (LITERATURE IN ENGLISH, CHRISTIAN RELIGIOUS STUDIES, Civic Education, NIGERIAN LANGUAGE Subjects and ISLAMIC STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (HISTORY and GOVERNMENT) and Any 2 subject(s) in (LITERATURE IN ENGLISH, CHRISTIAN RELIGIOUS STUDIES, Civic Education, NIGERIAN LANGUAGE Subjects and ISLAMIC STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in HISTORY and Any 2 subject(s) in (LITERATURE IN ENGLISH, RELIGIOUS STUDIES and ISLAMIYAT)', ''),
    ('7829119620', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (BIOLOGY, HEALTH SCIENCE and PHYSICAL EDUCATION) , in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (BIOLOGY, HEALTH SCIENCE and PHYSICAL EDUCATION) , in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects, SOCIAL SCIENCES Subjects and TECHNICAL/VOCATIONAL Subjects)'),
    ('4753506460', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GEOGRAPHY, GOVERNMENT, Data Processing, BIOLOGY and BUSINESS MANAGEMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GEOGRAPHY, GOVERNMENT, Data Processing, BIOLOGY and BUSINESS MANAGEMENT)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (ACCOUNTING, GEOGRAPHY, BIOLOGY and BUSINESS STUDIES) and Any 1 subject(s) in (BUSINESS STUDIES, BIOLOGY, GEOGRAPHY and ACCOUNTING)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, GEOGRAPHY, BIOLOGY and BUSINESS STUDIES)'),
    ('7844029834', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', ''),
    ('9312439616', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects, SOCIAL SCIENCES Subjects and Civic Education)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects, SOCIAL SCIENCES Subjects and Civic Education)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects) and Any 2 subject(s) in (SOCIAL SCIENCES Subjects, ART Subjects and SCIENCE Subjects)', ''),
    ('3362752475', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE and Any 3 subject(s) in (ART (Without Music & Fine Art) Subjects and SOCIAL SCIENCES (Without Accounting) Subjects)', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH, Any 1 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects) and Any 1 subject(s) in (SOCIAL SCIENCES Subjects and ART Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)'),
    ('2219749016', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY'),
    ('7242434927', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in BIOLOGY, in CHEMISTRY and in PHYSICS'),
    ('3258273011', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in LITERATURE IN ENGLISH, in ENGLISH LANGUAGE and Any 2 subject(s) in (ART Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ECONOMICS, HISTORY, GEOGRAPHY, NIGERIAN LANGUAGE Subjects, Civic Education and CHRISTIAN RELIGIOUS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ECONOMICS, HISTORY, GEOGRAPHY, NIGERIAN LANGUAGE Subjects, Civic Education and CHRISTIAN RELIGIOUS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ECONOMICS, HISTORY, GEOGRAPHY, RELIGIOUS STUDIES, ISLAMIYAT and NIGERIAN LANGUAGE Subjects)', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in LITERATURE IN ENGLISH and Any 2 subject(s) in (ECONOMICS, HISTORY, GEOGRAPHY, RELIGIOUS STUDIES and ISLAMIYAT)'),
    ('2806937154', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 1 subject(s) in (CHEMISTRY, ECONOMICS, GEOGRAPHY and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in FURTHER MATHEMATICS, in PHYSICS and Any 1 subject(s) in (ECONOMICS, CHEMISTRY and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in FURTHER MATHEMATICS, in PHYSICS and Any 1 subject(s) in (ECONOMICS, CHEMISTRY and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in PHYSICS and Any 1 subject(s) in (ECONOMICS, CHEMISTRY and GEOGRAPHY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in PHYSICS and Any 1 subject(s) in (ECONOMICS, CHEMISTRY and GEOGRAPHY)'),
    ('5589983068', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in CHEMISTRY and in PHYSICS'),
    ('4291704424', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in CHEMISTRY and in PHYSICS'),
    ('3825286787', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in BIOLOGY, in CHEMISTRY and in PHYSICS'),
    ('9316835851', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in , in ENGLISH LANGUAGE and Any 2 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in , Any 1 subject(s) in (SCIENCE Subjects, ART Subjects and SOCIAL SCIENCES Subjects) and Any 1 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in and Any 2 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and SCIENCE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in and Any 2 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)'),
    ('3999239485', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and in CHEMISTRY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in PHYSICS, in CHEMISTRY and in ADDITIONAL MATHEMATICS'),
    ('3602386163', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in GOVERNMENT, in ENGLISH LANGUAGE, in ECONOMICS and Any 1 subject(s) in (HISTORY, LITERATURE IN ENGLISH and CHRISTIAN RELIGIOUS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GOVERNMENT, in ECONOMICS and Any 1 subject(s) in (HISTORY, LITERATURE IN ENGLISH and CHRISTIAN RELIGIOUS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GOVERNMENT, in ECONOMICS and Any 1 subject(s) in (HISTORY, LITERATURE IN ENGLISH and CHRISTIAN RELIGIOUS STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS, Any 1 subject(s) in (HISTORY, LITERATURE IN ENGLISH, RELIGIOUS STUDIES and ISLAMIYAT) and in GOVERNMENT', 'Minimum of 5 Subjects Passes in GOVERNMENT, in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (ECONOMICS and GEOGRAPHY) and Any 1 subject(s) in (HISTORY, LITERATURE IN ENGLISH, RELIGIOUS STUDIES and ISLAMIYAT)'),
    ('4108540477', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (MATHEMATICS, BIOLOGY, PHYSICS, CHEMISTRY, ECONOMICS, GOVERNMENT and LITERATURE IN ENGLISH) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY and Any 2 subject(s) in (ART (Without CRS/IRS) Subjects, SCIENCE Subjects and SOCIAL SCIENCES (Without Accounting/Commerce) Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY and Any 2 subject(s) in (ART (Without CRS/IRS) Subjects, SCIENCE Subjects and SOCIAL SCIENCES (Without Accounting/Commerce) Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, Any 1 subject(s) in (ART (Without CRS/IRS) Subjects, SCIENCE Subjects and SOCIAL SCIENCES (Without Accounting/Commerce) Subjects) and Any 1 subject(s) in (ART (Without CRS/IRS) Subjects, SCIENCE Subjects and SOCIAL SCIENCES (Without Accounting) Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, Any 1 subject(s) in (SOCIAL SCIENCES (Without Accounting) Subjects, SCIENCE Subjects and ART (Without CRS/IRS) Subjects) and Any 1 subject(s) in (SCIENCE Subjects, SOCIAL SCIENCES (Without Accounting) Subjects and ART (Without CRS/IRS) Subjects)'),
    ('7233555441', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE and Any 2 subject(s) in (CHEMISTRY, MATHEMATICS and PHYSICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS, AGRICULTURAL SCIENCE and HEALTH SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS, AGRICULTURAL SCIENCE and HEALTH SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS and AGRICULTURAL SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS and AGRICULTURAL SCIENCE)'),
    ('2653137522', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, Any 1 subject(s) in (PHYSICS, BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (PHYSICS, AGRICULTURAL SCIENCE and BIOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and Any 2 subject(s) in (PHYSICS, BIOLOGY and AGRICULTURAL SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and Any 2 subject(s) in (PHYSICS, BIOLOGY and AGRICULTURAL SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, Any 1 subject(s) in (PHYSICS, BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (AGRICULTURAL SCIENCE, BIOLOGY and PHYSICS)', ''),
    ('1171009214', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 1 subject(s) in (CHEMISTRY, BIOLOGY, COMPUTER STUDIES and Data Processing)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, Any 1 subject(s) in (CHEMISTRY, BIOLOGY, FURTHER MATHEMATICS, COMPUTER STUDIES and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (CHEMISTRY, FURTHER MATHEMATICS, COMPUTER STUDIES, BIOLOGY and AGRICULTURAL SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (CHEMISTRY, BIOLOGY, AGRICULTURAL SCIENCE, FURTHER MATHEMATICS and COMPUTER STUDIES)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (CHEMISTRY, BIOLOGY, AGRICULTURAL SCIENCE, ADDITIONAL MATHEMATICS and INFORMATION & COMMUNICATION TECHNOLOGY)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, Any 1 subject(s) in (CHEMISTRY, BIOLOGY, AGRICULTURAL SCIENCE, ADDITIONAL MATHEMATICS and INFORMATION & COMMUNICATION TECHNOLOGY) and Any 1 subject(s) in (ADDITIONAL MATHEMATICS, INFORMATION & COMMUNICATION TECHNOLOGY, BIOLOGY, CHEMISTRY and AGRICULTURAL SCIENCE)'),
    ('6000491727', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (PHYSICS, FOODS & NUTRITION, MATHEMATICS, HOME MANAGEMENT and CLOTHING & TEXTILES)', 'Minimum of 5 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, in MATHEMATICS, Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (ECONOMICS, PHYSICS, FOODS & NUTRITION, CLOTHING & TEXTILES, GARMENT MAKING and HOME ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (CLOTHING & TEXTILES, GARMENT MAKING, FOODS & NUTRITION, ECONOMICS, HOME ECONOMICS and PHYSICS)', 'Minimum of 5 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, in MATHEMATICS, Any 1 subject(s) in (FOODS & NUTRITION, BIOLOGY, ECONOMICS and PHYSICS) and Any 1 subject(s) in (ECONOMICS, PHYSICS, BIOLOGY and FOODS & NUTRITION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, Any 1 subject(s) in (ECONOMICS, BIOLOGY, PHYSICS and FOODS & NUTRITION) and Any 1 subject(s) in (FOODS & NUTRITION, ECONOMICS, BIOLOGY and PHYSICS)'),
    ('1159640153', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in PHYSICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (MATHEMATICS and CHEMISTRY) and Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, AGRICULTURAL SCIENCE, FURTHER MATHEMATICS, COMPUTER STUDIES, Data Processing and Integrated Science)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, AGRICULTURAL SCIENCE, FURTHER MATHEMATICS, COMPUTER STUDIES, Data Processing and Integrated Science)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, AGRICULTURAL SCIENCE, ADDITIONAL MATHEMATICS and COMPUTER SCIENCE)', ''),
    ('2519153043', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (TECHNICAL DRAWING and PHYSICS) and Any 1 subject(s) in (SCIENCE Subjects and TECHNICAL/VOCATIONAL Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (TECHNICAL DRAWING and PHYSICS) and Any 2 subject(s) in (SCIENCE Subjects and TECHNICAL/VOCATIONAL Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (TECHNICAL DRAWING and PHYSICS) and Any 2 subject(s) in (SCIENCE Subjects and TECHNICAL/VOCATIONAL Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (TECHNICAL DRAWING and PHYSICS) and Any 2 subject(s) in (SCIENCE Subjects and TECHNICAL/VOCATIONAL Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (TECHNICAL/VOCATIONAL Subjects and SCIENCE Subjects) and Any 1 subject(s) in (ART & DESIGN and PHYSICS)'),
    ('7108878858', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (PHYSICS, FOODS & NUTRITION, MATHEMATICS, HOME MANAGEMENT and CLOTHING & TEXTILES)', 'Minimum of 5 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, in MATHEMATICS, Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (ECONOMICS, PHYSICS, FOODS & NUTRITION, CLOTHING & TEXTILES, GARMENT MAKING and HOME ECONOMICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, Any 1 subject(s) in (BIOLOGY and AGRICULTURAL SCIENCE) and Any 1 subject(s) in (CLOTHING & TEXTILES, GARMENT MAKING, FOODS & NUTRITION, ECONOMICS, HOME ECONOMICS and PHYSICS)', 'Minimum of 5 Subjects Passes in CHEMISTRY, in ENGLISH LANGUAGE, in MATHEMATICS, Any 1 subject(s) in (FOODS & NUTRITION, BIOLOGY, ECONOMICS and PHYSICS) and Any 1 subject(s) in (ECONOMICS, PHYSICS, BIOLOGY and FOODS & NUTRITION)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, Any 1 subject(s) in (ECONOMICS, BIOLOGY, PHYSICS and FOODS & NUTRITION) and Any 1 subject(s) in (FOODS & NUTRITION, ECONOMICS, BIOLOGY and PHYSICS)'),
    ('3318805366', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (MATHEMATICS, CHEMISTRY, PHYSICS and AGRICULTURAL SCIENCE) , in ENGLISH LANGUAGE, Any 1 subject(s) in (CHEMISTRY, PHYSICS, AGRICULTURAL SCIENCE and MATHEMATICS) and in BIOLOGY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in BIOLOGY and Any 1 subject(s) in (AGRICULTURAL SCIENCE, Integrated Science and PHYSICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in BIOLOGY and Any 1 subject(s) in (AGRICULTURAL SCIENCE, Integrated Science and PHYSICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in BIOLOGY and in', ''),
    ('5214463313', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 2 subject(s) in (SOCIAL SCIENCES Subjects and MATHEMATICS) , in ENGLISH LANGUAGE and Any 1 subject(s) in (ART Subjects and MATHEMATICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, GOVERNMENT, Civic Education and GEOGRAPHY) and Any 1 subject(s) in (LITERATURE IN ENGLISH, CHRISTIAN RELIGIOUS STUDIES and NIGERIAN LANGUAGE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, GOVERNMENT, Civic Education and GEOGRAPHY) and Any 1 subject(s) in (LITERATURE IN ENGLISH, CHRISTIAN RELIGIOUS STUDIES and NIGERIAN LANGUAGE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, HISTORY and GEOGRAPHY) and Any 1 subject(s) in (RELIGIOUS STUDIES, ISLAMIYAT and LITERATURE IN ENGLISH)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, HISTORY and GEOGRAPHY) and Any 1 subject(s) in (RELIGIOUS STUDIES and ISLAMIYAT)'),
    ('6772825758', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (ART Subjects and MATHEMATICS) , in ENGLISH LANGUAGE and Any 2 subject(s) in (SOCIAL SCIENCES Subjects and MATHEMATICS)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, GOVERNMENT, Civic Education and GEOGRAPHY) and Any 1 subject(s) in (LITERATURE IN ENGLISH, CHRISTIAN RELIGIOUS STUDIES, BIOLOGY and NIGERIAN LANGUAGE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, GOVERNMENT, Civic Education and GEOGRAPHY) and Any 1 subject(s) in (LITERATURE IN ENGLISH, CHRISTIAN RELIGIOUS STUDIES, BIOLOGY and NIGERIAN LANGUAGE Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 2 subject(s) in (ECONOMICS, HISTORY and GEOGRAPHY) and Any 1 subject(s) in (RELIGIOUS STUDIES, ISLAMIYAT, LITERATURE IN ENGLISH, NIGERIAN LANGUAGE Subjects and BIOLOGY)', ''),
    ('4236689684', 'The programme runs for 10 semesters.', 'UTME Entry Requirements','The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in ADDITIONAL MATHEMATICS'),
    ('2251651743', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in FURTHER MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS and in ADDITIONAL MATHEMATICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in ADDITIONAL MATHEMATICS'),
    ('4597377139', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 1 subject(s) in (CHEMISTRY, PHYSICS, BIOLOGY and FINE ART)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (PHYSICS, BIOLOGY, CHEMISTRY, ECONOMICS and FINE ART)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (PHYSICS, BIOLOGY, CHEMISTRY, ECONOMICS and FINE ART)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (PHYSICS, BIOLOGY, CHEMISTRY, ECONOMICS and ART & DESIGN)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in GEOGRAPHY and Any 2 subject(s) in (PHYSICS, BIOLOGY, CHEMISTRY and ECONOMICS)'),
    ('9917651889', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in BIOLOGY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in BIOLOGY and in PHYSICS', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and in PHYSICS', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in BIOLOGY, in CHEMISTRY and in PHYSICS'),
    ('2794264804', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects) and in ENGLISH LANGUAGE', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE and Any 3 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)'),
    ('2487508159', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, Any 1 subject(s) in (LITERATURE IN ENGLISH, MUSIC and FINE ART) , in and Any 1 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (LITERATURE IN ENGLISH and MUSIC) and Any 2 subject(s) in (ART Subjects, SCIENCE Subjects and SOCIAL SCIENCES Subjects)'),
    ('1417402343', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (FINE ART, LITERATURE IN ENGLISH and MUSIC) , in ENGLISH LANGUAGE, in and Any 1 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (FINE ART, VISUAL ART, PHOTOGRAPHY, DYEING & BLEACHING, PRINTING CRAFT PRACTICE, PAINTING & DECORATION and ART Subjects) , in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (FINE ART, VISUAL ART, PHOTOGRAPHY, DYEING & BLEACHING, PRINTING CRAFT PRACTICE and ART Subjects) , in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (ART & DESIGN and ART Subjects) , in and in', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, Any 1 subject(s) in (LITERATURE IN ENGLISH and ART & DESIGN) , in and Any 1 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects and SCIENCE Subjects)'),
    ('6450483218', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in BIOLOGY, in ENGLISH LANGUAGE and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (BIOLOGY, HEALTH SCIENCE and PHYSICAL EDUCATION) , in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, Any 1 subject(s) in (BIOLOGY, HEALTH SCIENCE and PHYSICAL EDUCATION) , in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in and in', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in BIOLOGY, in and Any 1 subject(s) in (SCIENCE Subjects, ART Subjects, SOCIAL SCIENCES Subjects and TECHNICAL/VOCATIONAL Subjects)'),
    ('7439407281', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (FINE ART, LITERATURE IN ENGLISH and MUSIC) , in ENGLISH LANGUAGE, in and Any 1 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 4 Subjects Passes Any 1 subject(s) in (FINE ART, LITERATURE IN ENGLISH and MUSIC) , in ENGLISH LANGUAGE, in and Any 1 subject(s) in (SCIENCE Subjects and SOCIAL SCIENCES Subjects)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH, in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH, in and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH, in and in'),
    ('2446585395', 'The programme runs for 10 semesters.', 'UTME Entry Requirements','The Applicant must have:', 'Minimum of 4 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and in CHEMISTRY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in PHYSICS and in CHEMISTRY', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and in BIOLOGY', 'Minimum of 6 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY, in PHYSICS, in ADDITIONAL MATHEMATICS and in BIOLOGY', 'Minimum of 6 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ADDITIONAL MATHEMATICS, in CHEMISTRY, in PHYSICS and in BIOLOGY'),
    ('6732155828', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, in CHRISTIAN RELIGIOUS STUDIES and Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GOVERNMENT, FRENCH, VISUAL ART, ECONOMICS, COMMERCE, YORUBA LANGUAGE, IGBO LANGUAGE and HAUSA LANGUAGE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHRISTIAN RELIGIOUS STUDIES and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in CHRISTIAN RELIGIOUS STUDIES and in', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in RELIGIOUS STUDIES and in', ''),
    ('7169056540', 'The programme runs for 8 semesters.', 'UTME Entry Requirements', 'The Applicant must have:', 'Minimum of 4 Subjects Passes in ENGLISH LANGUAGE, in ISLAMIC STUDIES and Any 2 subject(s) in (LITERATURE IN ENGLISH, HISTORY, GOVERNMENT, FRENCH, VISUAL ART, ECONOMICS, COMMERCE, IGBO LANGUAGE and YORUBA LANGUAGE)', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ISLAMIC STUDIES and in', 'Minimum of 5 Subjects Passes in MATHEMATICS, in ENGLISH LANGUAGE, in ISLAMIC STUDIES and in', 'Minimum of 5 Subjects Passes in ENGLISH LANGUAGE, in MATHEMATICS, in ISLAMIYAT and in', ''),
    ('280012564508', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil degree in Theatre Arts, Performing Arts or Creative Arts with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('499732042680', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', 'The programme is open to candidates with Master’s or Master of Philosophy (M.Phil.) degree in English with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.', '', '', '', ''),
    ('825255675125', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s / M.Phil. Degree Electrical and Electronics Engineering with minimum CGPA of 4.00.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('831582359497', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed./M.Phil. degree in Adult Education with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Candidate may also be required to satisfy the department in a selection process.</li></ul>', '', '', '', ''),
    ('200207923226', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', 'The programme is open to candidates with Master’s or Master of Philosophy (M.Phil.) degree in English with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.', '', '', '', ''),
    ('728320200670', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Microbiology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process including Oral interview.</li></ul>', '', '', '', ''),
    ('761380880955', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Anatomy with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>M.Phil. degree in Anatomy with a minimum CGPA 4.00 from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in an interview or examination or both. </li></ul>', '', '', '', ''),
    ('688615335552', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Mass Communication, Journalism or Communication and Language Arts with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates may be required to satisfy the Department in a selection process;</li></ul>', '', '', '', ''),
    ('183176507148', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Mathematics and/or Statistics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process..</li></ul>', '', '', '', ''),
    ('309922138401', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.A./M.Phil.in History, History and Strategic Studies or related disciplines (including Political Science, International Relations, International/Diplomatic Studies) with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('489509536554', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('348143450354', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('269368849448', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('353232427060', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Physiology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li> <li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('438406715656', 'The programme runs for 20 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Geography or equivalent with minimum GPA of 4.00 from Mercy College University or any other recognised university..</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('164507887130', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('487928778250', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Clinical Pharmacy with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University;</li></ul>', '', '', '', ''),
    ('179621293987', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('323696621328', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. degree in Educational Administration and Planning with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University</li></ul>', '', '', '', ''),
    ('337538808569', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>M.Sc. degree in Marine Biology, Marine Pollution and Management, Physical Oceanography and Coastal Management, Aquaculture, Fisheries Biology and Management, Fisheries Technology Zoology, Botany and Biological Sciences with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li> <li>M.Phil. Degree in Marine Biology, Marine Pollution and Management, Physical Oceanography and Coastal Management, Aquaculture, Fisheries Biology and Management and Fisheries Technology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('926638847154', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Chemical Engineering with a minimum CGPA of 4.00 from the Mercy College University or its equivalent from any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('765900119547', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('778838701556', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', 'The programme is open to candidates with M.Sc./M.Phil. degree in Pharmaceutics and Pharmaceutical Technology or its equivalent with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.', '', '', '', ''),
    ('453863478960', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Computer Science with First Class division from the Mercy College University or any other recognized University.</li><li>Master’s degree with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Admission to the Ph.D. programme is subject to the availability of relevant supervisors</li><li>Candidates may be required to satisfy the Department in a selection process.</li>', '', '', '', ''),
    ('164848305179', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. in Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>M.Phil. in Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('845317129372', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ul><li>M.Sc./M.Phil. in Psychology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('723880001556', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ul><li>M.Sc./M.Phil. degree in Surveying and Geoinformatics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>.', '', '', '', ''),
    ('568560854166', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:',  '...', '', '', '', '', ''),
    ('413203938604', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree in Metallurgical and Materials Engineering with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('837403436963', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s or Master of Philosophy (M.Phil.) degree in Medical Microbiology or Medical Parasitology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('547470288212', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil degree in Pharmacology with a minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('903092531466', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree with a minimum CGPA of 4.00 in Botany from the Mercy College University or any other recognised University.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('425500500122', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Political Science, International Relations and Public Administration with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('672783232975', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Political Science, International Relations and Public Administration with minimum of Second Class Upper from the Mercy College University or any other recognised University; or</li><li>Master’s degree in Political Science, International Relations and Public Administration with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('474827098818', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.A./M.Phil. degree in Philosophy with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('952061894059', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:',  '<ul><li>M.Phil. or M.Sc. degree in Biochemistry with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Candidate must present a research proposal and will be required to satisfy the Department in an interview.</li></ul>', '', '', '', ''),
    ('797384709835', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('412188077200', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('344128986776', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master of Science (M.Sc.) or Master of Philosophy (M.Phil.) degree in Estate Management or its equivalent from the Mercy College University or other recognised University with minimum CGPA of 4.00.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('597813436196', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', 'The programme is open to candidates with M.Sc./M.Phil. degree in Pharmaceutics and Pharmaceutical Microbiology or its equivalent with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.', '', '', '', ''),
    ('188447778636', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('861510012504', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s or M.Phil. degree in Finance or related field with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('300563540165', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Cell Biology and Genetics or related courses and with a minimum of CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>M.Phil. degree with a minimum CGPA of 4.00 in the course works in Cell Biology and Genetics or related courses like Botany, Microbiology, Biochemistry, Biotechnology, Zoology, Marine Biology, Anatomy and Physiology from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('596986397087', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Mathematics and/or Statistics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('406184470102', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree in Pharmaceutical or Medicinal Chemistry with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('478538244930', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Master of Science (M.Sc.) degree in Estate Management or academic masters (M.Sc.) in allied courses such as Facilities Management, Housing Development and Management, Construction Management, Land Appraisal and Land Economics with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any recognised University; or</li><li>Bachelor’s degree in Estate Management or allied disciplines such as Urban and Regional Planning, Building and Quantity Surveying with minimum of Second Class Upper Division from the Mercy College University or any recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('111315139644', 'The programme runs for 6 semesters.',  'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s degree in Architecture with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University; or</li><li>Master of Philosophy (M.Phil.) degree in Architecture with a minimum CGPA of 4.00 or its equivalent from the University or any other recognized University.</li><li>Master of Architecture (M.Arch. Post-Professional) degree with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Satisfy all existing requirements of the regulations of the School of Postgraduate Studies.</li></ul>', '', '', '', ''),
    ('111975631828', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Medical Physics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('931869491157', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Medical Physics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('588356580546', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('974069448257', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ol type="a"><li>Bachelor’s degree in Education with minimum of Second Class Upper from the Mercy College University or any other recognised University; or</li><li>Master’s degree in Education with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University</li></ul>', '', '', '', ''),
    ('991610801310', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>M.A. French, M.Ed. French, MTFFL or its equivalent Francophone Master`s degree in languages/linguistics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University; or</li><li> M.Phil. in French with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('257374739813', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>M.Sc. degree in Marine Biology, Marine Pollution and Management, Physical Oceanography and Coastal Management, Aquaculture, Fisheries Biology and Management, Fisheries Technology Zoology, Botany and Biological Sciences with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>M.Phil. Degree in Marine Biology, Marine Pollution and Management, Physical Oceanography and Coastal Management, Aquaculture, Fisheries Biology and Management and Fisheries Technology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('808227667829', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree in Economics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('977714257470', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Cell Biology and Genetics or related courses and with a minimum of CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>M.Phil. degree with a minimum CGPA of 4.00 in the course works in Cell Biology and Genetics or related courses like Botany, Microbiology, Biochemistry, Biotechnology, Zoology, Marine Biology, Anatomy and Physiology from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('934766891819', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed./M.Phil. in Science Education and Mathematics Education with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('753315949418', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Physics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('340940623474', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li></li>Bachelor of Arts degree in Philosophy with minimum of Second Class Upper from the Mercy College University or any other recognised University; or<li>Master’s degree in Philosophy with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.<li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('778939167347', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Physics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('125985625482', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Human Kinetics and Health Education with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('219256533379', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Human Kinetics and Health Education with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('133866309350', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Finance with minimum of Second Class Upper Division from the Mercy College University or any recognised University</li><li>Master’s degree in Finance or related field with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('269194439222', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> Bachelor’s honours degree in English Language/Literature, English Linguistics, English Education with minimum of Second Class Upper from the Mercy College University or any other recognised University</li><li>Master’s degree in English Language/Literature, English Linguistics, English Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li></ol>', '', '', '', ''),
    ('872405831925', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> Bachelor’s honours degree in English Language/Literature, English Linguistics, English Education with minimum of Second Class Upper from the Mercy College University or any other recognised University</li><li>Master’s degree in English Language/Literature, English Linguistics, English Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li></ol>', '', '', '', ''),
    ('807469858868', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Master’s / M.Phil. Degree Electrical and Electronics Engineering with minimum CGPA of 4.00.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('115088414633', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol><li>Bachelor’s degree in Electrical and Electronics Engineering with minimum of Second Class Upper Division from the Mercy College University or any other recognized University; or</li><li>Master of Science in Electrical and Electronics Engineering with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></', '', '', '', ''),
    ('331530239380', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol><li>Bachelor’s degree with minimum of Second Class Upper division from the Mercy College University or any other recognised University</li><li>Master degree in Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or </li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('888090816288', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li></li><li>Bachelor’s degree with minimum of Second Class Upper division from the Mercy College University or any other recognised University</li><li>Master degree in Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or </li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('422829727692', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', 'The programme is open to candidates with M.Sc. or M.Phil. degree in Visual Arts, Fine Arts, Applied Arts or Creative Arts (Visual) with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.', '', '', '', ''),
    ('251645578023', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Civil Engineering with a minimum of Second Class Upper Division or its equivalent from Mercy College University or any other recognized University; or</li><li>M.Sc. degree in Civil Engineering with a minimum CGPA of 3.50 or its equivalent from Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('535010396882', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master degree in Theatre Arts, Performing Arts or Creative Arts with a minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or</li><li>Bachelor’s degree with a First Class division in Theatre, Dramatic or Creative Arts from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('457495953208', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree with a minimum CGPA of 4.00 with relevant specialized programme in Business Administration from the Mercy College University or any other recognized University.</li><li>Candidates must clear with the respective Departments as to the availability of vacancies/supervisors before applying.</li><li>All candidates may be required to undergo a selection process as that is determined by the Department.</li></ul>', '', '', '', ''),
    ('508711668196', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s (M.Sc.) degree with a minimum CGPA of 3.50 in any Business Administration area of specialization or its equivalent from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree with a minimum of Second Class Upper in Business Administration or its equivalent from the Mercy College University or any other recognized University.</li><li>At the completion of the M.Phil. degree coursework, students with a minimum CGPA of 4.00 may proceed to Ph.D. degree programme.</li><li>Candidates may be required to attend an interview and Proposal Presentation session conducted by the Department.</li></ul>', '', '', '', ''),
    ('797931629134', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s (M.Sc.) degree with a minimum CGPA of 3.50 in any Business Administration area of specialization or its equivalent from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree with a minimum of Second Class Upper in Business Administration or its equivalent from the Mercy College University or any other recognized University.</li><li>At the completion of the M.Phil. degree coursework, students with a minimum CGPA of 4.00 may proceed to Ph.D. degree programme.</li><li>Candidates may be required to attend an interview and Proposal Presentation session conducted by the Department.</li></ul>', '', '', '', ''),
    ('417915847359', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree with a minimum CGPA of 4.00 or its equivalent in Building (in any of the specialized options: Construction Management, Construction Technology, Building Services, Building Maintenance Management, etc) from the Mercy College University or any other recognized University</li><li>M.Phil. degree with a minimum CGPA of 4.00 or its equivalent in Building from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy any other selection process</li></ul>', '', '', '', ''),
    ('838496256482', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>A Bachelors degree with minimum of Second Class Honours in Building or its equivalent from the Mercy College University or any other recognized University.</li><li>M.Sc. Building (in any of the specialized options: Construction Management, Construction Technology, etc) or its equivalent with a minimum</li><li>Candidates may be required to satisfy any other selection process.</li></ul>', '', '', '', ''),
    ('215554290884', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Biochemistry with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University; or</li><li>B.Sc. degree in Biochemistry with a minimum of Second Class Upper from the Mercy College University or any other recognized University. </li><li>Candidate must present a research proposal and will be required to satisfy the Department in an interview.</li></ul>', '', '', '', ''),
    ('991479329282', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('595673484060', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('149196452605', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.A./M.Phil. degree in relevant language/course with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('715866999558', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Accounting with a minimum GPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Membership of a recognised professional accounting body will be an advantage.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('719920115284', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Urban and Regional Planning, Architecture, Estate Management, Civil Engineering, Surveying, Geography, Landscape Architecture and Geographic Information Systems with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('359616131671', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Physiotherapy with minimum of Second Class Upper from the Mercy College University or any other recognised University; or</li><li>Master’s degree in Physiotherapy with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('951628106067', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Physiotherapy with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('116903341838', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li></li><li>Bachelor’s degree in Microbiology with minimum of Second Class Upper Division from the Mercy College University or any other recognised University</li><li>Master degree in Microbiology with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or </li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('687680925776', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree with a minimum CGPA of 4.00 or its equivalent in Building (in any of the specialized options: Construction Management, Construction Technology, Building Services, Building Maintenance Management, etc) from the Mercy College University or any other recognized University</li><li>M.Phil. degree with a minimum CGPA of 4.00 or its equivalent in Building from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy any other selection process.</li></ul>', '', '', '', ''),
    ('160744726407', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree with a minimum CGPA of 4.00 with relevant specialized programme in Business Administration from the Mercy College University or any other recognized University.</li><li>Candidates must clear with the respective Departments as to the availability of vacancies/supervisors before applying.</li><li>All candidates may be required to undergo a selection process as that is determined by the Department.</li></ul>', '', '', '', ''),
    ('129478897130', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Sociology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('221197802505', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Sociology, Anthropology, Demography, Social Work, or other related disciplines in the Humanities, Administrative and Social Sciences with minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognised University;</li><li>Master degree in Sociology Anthropology, Demography, Social Work, or other related disciplines in the Humanities, Administrative and Social Sciences with minimum CGPA of 3.50 from the Mercy College University or any other recognised University;</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('101558613912', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s degree (M.Sc.) in Accounting with a minimum GPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Membership of a recognised professional accounting body will be an advantage.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('922942829374', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s (M.Sc.) degree with a minimum CGPA of 3.50 in any Business Administration area of specialization or its equivalent from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree with a minimum of Second Class Upper in Business Administration or its equivalent from the Mercy College University or any other recognized University.</li><li>At the completion of the M.Phil. degree coursework, students with a minimum CGPA of 4.00 may proceed to Ph.D. degree programme.</li><li>Candidates may be required to attend an interview and Proposal Presentation session conducted by the Department.</li></ul>', '', '', '', ''),
    ('241834422740', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '---', '', '', '', ''),
    ('845588530266', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s (M.Sc.) degree with a minimum CGPA of 3.50 in any Business Administration area of specialization or its equivalent from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree with a minimum of Second Class Upper in Business Administration or its equivalent from the Mercy College University or any other recognized University.</li><li>At the completion of the M.Phil. degree coursework, students with a minimum CGPA of 4.00 may proceed to Ph.D. degree programme.</li><li>Candidates may be required to attend an interview and Proposal Presentation session conducted by the Department.</li></ul>', '', '', '', ''),
    ('965429900744', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> M.Sc. degree in Mass Communication, Journalism or Communication and Language Art with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Bachelor’s degree in Mass Communication, Journalism or Communication and Language Arts with minimum of Second Class Upper Division from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('237796715863', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil degree in Music with a minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('586753506068', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Clinical Pathology/Chemical Pathology with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('662295199856', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Human Kinetics and Health Education with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('658770925770', 'The programme runs for 20 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Industrial Relations and Personnel Management, Human Resource Management, Industrial and Labour Relations or Organisational Behaviour with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('954523867955', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree with a minimum CGPA of 4.00 with relevant specialized programme in Business Administration from the Mercy College University or any other recognized University.</li><li>Candidates must clear with the respective Departments as to the availability of vacancies/supervisors before applying.</li><li>All candidates may be required to undergo a selection process as that is determined by the Department.</li></ul>', '', '', '', ''),
    ('394699193970', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree with a minimum CGPA of 4.00 with relevant specialized programme in Business Administration from the Mercy College University or any other recognized University.</li><li>Candidates must clear with the respective Departments as to the availability of vacancies/supervisors before applying.</li><li>All candidates may be required to undergo a selection process as that is determined by the Department.</li></ul>', '', '', '', ''),
    ('418522842454', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed./M.Phil. in Science Education and Mathematics Education with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('593924104726', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Systems Engineering with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('255231770509', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. or M.Phil. with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('981051363508', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Biological Sciences or other related disciplines – Fisheries and Wildlife, Aquaculture, Animal Science, Hydrobiology, Water Resources Management, Environmental Biology and Fisheries, Food Science and Marine Biology with minimum of Second Class Upper Division from the Mercy College University or any other recognised University may apply for M.Phil. in Aquaculture and Fisheries Biology & Management; or</li><li>Master of Science (M.Sc.) in Aquaculture, Fisheries Biology and Management, Fisheries Technology or equivalent in Biological Sciences or other related disciplines – Fisheries and Wildlife, Aquaculture, Animal Science, Hydrobiology, Water Resources Management/Environmental Biology and Fisheries, Biology, Zoology, Microbiology, Food Science and Marine Biology with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li> Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('527044667804', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master degree in Economics with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('913204131282', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil. degree in Mechanical Engineering with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('537333691432', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Computer Science with a minimum of Second Class (Upper division) from the Mercy College University or any other recognized University</li><li>Master’s degree with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University.</li><li>Admission to the M.Phil. programme is subject to the availability of relevant supervisors</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('498947604220', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The study areas include:', '<ol><li>Architectural History and Theory</li><li>Architectural Science, Technology and Management</li><li>Housing and Human Settlement</li><li>Urban and Landscape Architecture</li><li>Any other areas as may be approved by the Departmental Academic Programmes Committee</li></ol><br/><span>The programme is open to candidates with:</span><ul><li>Bachelor’s degree in Architecture with minimum of Second Class Upper Division or its equivalent from the Mercy College University or any other recognized University; or</li><li>Masters’ degree at the appropriate level or equivalent provided the Degree is not below the CPGA of 4.00 from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree in any other relevant disciplines such as Urban & Regional Planning, Estate Management, Quantity Surveying, Building, Fine Arts, Economics, Geography, Botany, Forestry, Agriculture, Landscape Architecture, Urban Design, Engineering or any other programme as approved by the Department with a minimum of Second Class Upper Division or its equivalent from the Mercy College University or any other recognized University; or</li><li>Master of Arts (M.A.) degree in Architecture with a minimum CGPA of 4.00 or equivalent from the Mercy College University or any other recognized University.</li><li>Satisfy the special admission requirement of the department of Architecture.</li><li>Satisfy all other requirements of School of Post-Graduate Studies</li></ul>', '', '', '', ''),
    ('603280086141', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Civil Engineering with a minimum CGPA of 4.00 or its equivalent from Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('265170476096', 'The programme runs for 20 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '---', '', '', '', ''),
    ('852051453311', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in History and Strategic Studies, History Education and related disciplines (including International Relations, International/Diplomatic Studies) with minimum of Second Class Upper Division from the Mercy College University or any other recognised University</li><li>M.A. in History, History and Strategic Studies or related disciplines (including Political Science, International Relations, International/Diplomatic Studies) with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('658517342416', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master / M.Phil. of Laws with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('657897816020', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('371583405960', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type=""><li>Master degree in Pharmacology with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or</li><li> Bachelor degree in Pharmacology, Dentistry, Veterinary Medicine, Physiology and Biochemistry with minimum of Second Class Upper from the Mercy College University or any other recognised University</li><li>Bachelor’s degree in Medicine or Bachelor of Pharmacy with minimum CGPA of 3.50 from the University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('677789419046', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed./M.Phil. in Science Education and Mathematics Education with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('584808072965', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Medical Microbiology and Parasitology with minimum of Second Class Upper division from Mercy College University or any other recognised University; or</li><li> Master’s degree in Medical Microbiology and Medical Parasitology with minimum CGPA of 3.50 from the Mercy College University or any recognised University.</li></ol>', '', '', '', ''),
    ('198977354943', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Civil Engineering with a minimum CGPA of 4.00 or its equivalent from Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('341659930933', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('551043712050', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. or M.Phil degree in Music with a minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('856201430498', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Master’s degree (LL.M) in Law with minimum CGPA of 4.00 from the Mercy College University or any other recognised University; or</li><li>M.Phil. in Law with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('993066897570', 'The programme runs for 8 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s or Master of Philosophy (M.Phil.) degree in Medical Microbiology or Medical Parasitology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('892154011035', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Actuarial Science with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('381368852017', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.A./M.Phil. degree in relevant language/course with minimum CGPA of 4.00 from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('506014227052', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Ed. degree in Adult Education with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree in Adult Education with a minimum of Second Class Honours Upper from the Mercy College University or any other recognized University.</li><li>Candidate may also be required to satisfy the department in a selection process.</li></ul>', '', '', '', ''),
    ('587836792449', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Electrical and Electronics Engineering with minimum of Second Class Upper Division from the Mercy College University or any other recognized University; or</li><li>Master of Science in Electrical and Electronics Engineering with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('946407696406', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> Bachelor’s degree in Science Education (Education Biology, Education Chemistry, Education Physics) and Mathematics Education with minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognised University</li><li> Master degree in Science and Mathematics Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University;</li></ol>', '', '', '', ''),
    ('676805789367', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> Bachelor’s degree (B.Sc., B.Eng., B.Tech. or Baccalaureate Technologiae) in Mechanical Engineering with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>Master’s degree in Mechanical Engineering with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or </li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('809337748960', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li><li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('363643463242', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s (M.Sc.) degree with a minimum CGPA of 3.50 in any Business Administration area of specialization or its equivalent from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree with a minimum of Second Class Upper in Business Administration or its equivalent from the Mercy College University or any other recognized University.</li><li>At the completion of the M.Phil. degree coursework, students with a minimum CGPA of 4.00 may proceed to Ph.D. degree programme.</li><li>Candidates may be required to attend an interview and Proposal Presentation session conducted by the Department.</li></ul>', '', '', '', ''),
    ('7654616577872', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor (honours) Degree in Geography, Surveying, any field of Environmental or Earth-related Sciences including Transportation Studies, Water Resource Management, Meteorology, Landscape Architecture, Ecology, Natural Resource Management, Demography/Population Studies, Agronomy and related Natural Sciences or Social Sciences from the Mercy College University or any other recognised university. Candidates must obtain a minimum of Second Class Upper Division degree.</li><li>A master’s degree in Geography or related disciplines with a GPA not below 3.50. Candidates must have obtained a Bachelor’s Degree as specified for the Master’s degree admission requirements. </li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('724285449143', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('667797728408', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('803144253737', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '....', '', '', '', ''),
    ('993105791266', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Science Education (Education Biology, Education Chemistry, Education Physics) and Mathematics Education with minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognised University</li><li>Master degree in Science and Mathematics Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University</li></ol>', '', '', '', ''),
    ('712199189460', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree with a minimum of Second Class Upper or its equivalent in Biology, Biology Education, Botany, Microbiology, Biochemistry, Biotechnology, Zoology, Medicine, Anatomy, Physiology and Marine Biology from the Mercy College University or any other recognized University.</li><li>M.Sc. degree in Cell Biology and Genetics or related courses as stated above with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('892771912041', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Actuarial Science, Mathematics/Statistics, or Economics with a minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognised University; or</li><li>Master’s degree (M.Sc.) in Actuarial Science, Mathematics/Statistics, or Economics with a minimum CPGA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('389810887607', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Physiology with Second Class Upper from the Mercy College University or any other recognised University; or</li><li>Master’s degree in Physiology with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('519831510038', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelors honours degree in Chemical Engineering with a minimum of Second Class Upper division from the Mercy College University or any other recognized University; or</li><li>M.Sc. degree in Chemical Engineering with a minimum CGPA of 3.50 from the Mercy College University or its equivalent from any other recognized University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('288131802832', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree with a minimum of Second Class Upper in Botany, Biology, Microbiology, Plant Science, Crop Science, Agricultural Biology, Crop Protection, Agronomy, and Horticulture from the Mercy College University or any other recognised University; or</li><li>M.Sc. degree with a minimum CGPA of 3.50 in Botany, Biology, Microbiology, Plant Science, Crop Science, Agricultural Biology, Crop Protection, Agronomy, and Horticulture from the Mercy College University or any other recognised University.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('660386801019', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Human Kinetics and Health Education with minimum of Second Class Upper Division from the Mercy College University or any other recognised University.</li><li>M.Sc. degree in Human Kinetics and Health Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li></ol>', '', '', '', ''),
    ('893170073178', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Civil Engineering with a minimum of Second Class Upper Division or its equivalent from Mercy College University or any other recognized University; or</li><li>M.Sc. degree in Civil Engineering with a minimum CGPA of 3.50 or its equivalent from Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('254611035362', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li><li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('421076823848', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s degree in Clinical Pharmacy with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University.</li><li>Bachelor’s degree in Pharmacy with a minimum of Second Class Upper Division or its equivalent from the Mercy College University or any other recognized University</li><li>M.Pharm degree from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('351935079716', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('206817245449', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('508951241699', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Human Kinetics and Health Education with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('457044323707', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Chemistry with a minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognized University.</li><li>M.Sc. in Chemistry with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('811079357342', 'The programme runs for 10 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '.....', '', '', '', ''),
    ('139523761782', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Civil Engineering with minimum of Second Class Upper Division or its equivalent from Mercy College University or any other recognised University; or</li><li>M.Sc. degree in Civil Engineering with minimum CGPA of 3.50 or its equivalent from Mercy College University or any other recognised University.</li></ol>', '', '', '', ''),
    ('247072919353', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Chemistry or Industrial Chemistry with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>M.Sc. in Chemistry or Industrial Chemistry with minimum CGPA of 3.50 from the Mercy College University or any other recognised University. </li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('104339434619', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Insurance, Actuarial Science, Risk Management or Finance with a minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognized University; or</li><li>M.Sc. degree in Risk Management and Insurance with a minimum CPGA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('258317892365', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree with minimum of Second Class Upper division from the Mercy College University or any other recognised University</li><li>Master degree in Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or </li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('410655376326', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '....', '', '', '', ''),
    ('778805367026', 'The programme runs for 8 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. degree in Risk Management and Insurance with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('910547557854', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Physics with minimum of Second class upper from the Mercy College University or any other recognised University; or</li><li>Master’s degree in Physics with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('799573667086', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> Bachelor’s degree in Human Kinetics and Health Education with minimum of Second Class Upper Division from the Mercy College University or any other recognised University.</li><li>M.Sc. degree in Human Kinetics and Health Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('410129327933', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Mathematics or Statistics with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>Master of Science degree in Mathematics and/or Statistics with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('621379139444', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Mathematics or Statistics with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>Master of Science degree in Mathematics and/or Statistics with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('139903296887', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('563860466241', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Biological Sciences, Botany, Zoology, Biochemistry, Marine Biology, Fisheries, Geology, and Biology with minimum of Second Class Upper Division from the Mercy College University or any other recognised University may apply for M.Phil. in Marine Biology and Marine Pollution & Management; or</li><li>Master of Science (M.Sc.) in Marine Biology, Marine Pollution and Management, Physical Oceanography and Coastal Management, Botany, Zoology, Biochemistry, or other related subject with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('431520535058', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Human Kinetics and Health Education with minimum of Second Class Upper Division from the Mercy College University or any other recognised University.</li><li>M.Sc. degree in Human Kinetics and Health Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('110312075894', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Civil Engineering with a minimum of Second Class Upper Division or its equivalent from Mercy College University or any other recognized University; or</li><li>M.Sc. degree in Civil Engineering with a minimum CGPA of 3.50 or its equivalent from Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('661713051265', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Master degree in Pharmacognosy with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or</li><li>B. Pharm with minimum of CGPA of 3.50.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('900875139779', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. in Environmental Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>M.Phil. in Environmental Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('842379765077', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('126055946748', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '-----', '', '', '', ''),
    ('248380414377', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('927185505878', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Science Education (Education Biology, Education Chemistry, Education Physics) and Mathematics Education with minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognised University</li><li>Master degree in Science and Mathematics Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University</li></ol>', '', '', '', ''),
    ('465804765718', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Surveying and Geoinformatics with minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognised University; or</li><li>Master degree in Surveying and Geoinformatics with minimum CGPA of 3.50 from the Mercy College University or any other recognised University;</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('218679750767', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', 'The programme is open to candidates with M.Sc./M.Phil. degree in Geology with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.', '', '', '', ''),
    ('662089598760', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '-----', '', '', '', ''),
    ('142770000113', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li><li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('410891980211', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc./M.Phil. in Mathematics and/or Statistics with minimum CGPA of 4.00 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('437160631600', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Cell Biology and Genetics or related courses and with a minimum of CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>M.Phil. degree with a minimum CGPA of 4.00 in the course works in Cell Biology and Genetics or related courses like Botany, Microbiology, Biochemistry, Biotechnology, Zoology, Marine Biology, Anatomy and Physiology from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('635637318614', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s degree in Architecture with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University; or</li><li>Master of Philosophy (M.Phil.) degree in Architecture with a minimum CGPA of 4.00 or its equivalent from the University or any other recognized University.</li><li>Master of Architecture (M.Arch. Post-Professional) degree with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Satisfy all existing requirements of the regulations of the School of Postgraduate Studies.</li></ul>', '', '', '', ''),
    ('399377752374', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li> Bachelor’s degree in Finance with minimum of Second Class Upper Division from the Mercy College University or any recognised University</li><li>Master’s degree in Finance or related field with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('719670618736', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Civil Engineering with a minimum of Second Class Upper Division or its equivalent from Mercy College University or any other recognized University; or</li><li>M.Sc. degree in Civil Engineering with a minimum CGPA of 3.50 or its equivalent from Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('415953323826', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '------', '', '', '', ''),
    ('697178397136', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Master’s (M.Sc.) degree with a minimum CGPA of 3.50 in any Business Administration area of specialization or its equivalent from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree with a minimum of Second Class Upper in Business Administration or its equivalent from the Mercy College University or any other recognized University.</li><li>At the completion of the M.Phil. degree coursework, students with a minimum CGPA of 4.00 may proceed to Ph.D. degree programme.</li><li>Candidates may be required to attend an interview and Proposal Presentation session conducted by the Department.</li></ul>', '', '', '', ''),
    ('359124595115', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The study areas include:', '<ol><li>Architectural History and Theory</li><li>Architectural Science, Technology and Management</li><li>Housing and Human Settlement</li><li>Urban and Landscape Architecture</li><li>Any other areas as may be approved by the Departmental Academic Programmes Committee</li></ol><br/><span>The programme is open to candidates with:</span><br/><ul><li>Bachelor’s degree in Architecture with minimum of Second Class Upper Division or its equivalent from the Mercy College University or any other recognized University; or</li><li>Masters’ degree at the appropriate level or equivalent provided the Degree is not below the CPGA of 4.00 from the Mercy College University or any other recognized University; or</li><li>Bachelor’s degree in any other relevant disciplines such as Urban & Regional Planning, Estate Management, Quantity Surveying, Building, Fine Arts, Economics, Geography, Botany, Forestry, Agriculture, Landscape Architecture, Urban Design, Engineering or any other programme as approved by the Department with a minimum of Second Class Upper Division or its equivalent from the Mercy College University or any other recognized University; or</li><li>Master of Arts (M.A.) degree in Architecture with a minimum CGPA of 4.00 or equivalent from the Mercy College University or any other recognized University.</li><li>Satisfy the special admission requirement of the department of Architecture.</li><li>Satisfy all other requirements of School of Post-Graduate Studies.</li></ul>', '', '', '', ''),
    ('161510279114', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ol type="a"<li>M.A. French, M.Ed. French, MTFFL or equivalent Francophone degree in languages/ linguistics with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li<li>B.A., B.A.(Ed.), B.Ed. in French or equivalent Francophone degree obtained via French language instruction degree in French with minimum of Second Class Upper division or its equivalent from the Mercy College University or any other recognised University.</li<li> Candidates may be required to satisfy the Department in a selection process.</li</ol>', '', '', '', ''),
    ('857478176599', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ul<li>Bachelor’s degree in Chemistry with a minimum of Second Class Upper or its equivalent from the Mercy College University or any other recognized University.</li<li>M.Sc. in Environmental Chemistry with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li<li>Candidates will be required to satisfy the Department in a selection process.</li</ul>', '', '', '', ''),
    ('353069548630', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:','<ol type="a"<li> Bachelor’s degree in Human Kinetics and Health Education with minimum of Second Class Upper Division from the Mercy College University or any other recognised University.</li<li>M.Sc. degree in Human Kinetics and Health Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li<li>Candidates may be required to satisfy the Department in a selection process</li</ol>', '', '', '', ''),
    ('426713935074', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:',  '<ol type="a"><li>Bachelor’s degree in any Engineering discipline with minimum of Second Class Upper from the Mercy College University or any other recognised University; or</li><li>Master’s degree in Systems Engineering with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li></ol>', '', '', '', ''),
    ('956006222283', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li><li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('559528191807', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:',  '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('161991988498', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:',  '<ol type="a"><li>Bachelor’s degree in Mathematics or Statistics with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>Master of Science degree in Mathematics and/or Statistics with minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('745023851045', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:',  '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('405010101667', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('990565579258', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Candidate with a Bachelor’s degree in Metallurgical and Materials Engineering with minimum of Second Class Upper from the Mercy College University and any other recognised University.</li><li>Master degree in Metallurgical and Materials Engineering with minimum CGPA of 3.50 from the Mercy College University or any other recognised University; or</li></ol>', '', '', '', ''),
    ('460431951221', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Human Kinetics and Health Education with minimum of Second Class Upper Division from the Mercy College University or any other recognised University.</li><li>M.Sc. degree in Human Kinetics and Health Education with minimum CGPA of 3.50 from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process</li></ol>', '', '', '', ''),
    ('916140069809', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li> <li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('220577752945', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li><li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('290476514861', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University.</li><li>Master’s degree in Biological Sciences, Life Sciences and related disciplines with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('369130429923', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('984626352491', 'The programme runs for 0 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Public Health with a minimum of Second Class Upper Division from the Mercy College University or any other recognized University; or</li><li>Master’s degree with a minimum CGPA of 3.50 from the Mercy College University or any other recognized University.</li><li>Admission to the M.Phil. programme is subject to the availability of relevant supervisors</li><li>Candidates may be required to satisfy the Department in a selection process</li></ul>', '', '', '', ''),
    ('975116253834', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>MBBS <b>and</b> an additional Bachelor of Science degree with a minimum of a Second Class Upper degree in Clinical Pathology/Chemical Pathology, Biochemistry or Physiology from the Mercy College University or any other recognized University.</li><li>M.Sc. degree in Clinical Pathology/Chemical Pathology with a minimum CGPA of 3.50 or its equivalent from the Mercy College University or any other recognized University</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('203794752765', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('962780845740', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'Candidates for admission into Ph.D. Programme in the Department are allowed to choose from the following options: Cell and Molecular Biology Option, Genetics Option, and Environmental Biology Option.', '<ul><li>M.Sc. degree in Cell Biology and Genetics or related courses and with a minimum of CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>M.Phil. degree with a minimum CGPA of 4.00 in the course works in Cell Biology and Genetics or related courses like Botany, Microbiology, Biochemistry, Biotechnology, Zoology, Marine Biology, Anatomy and Physiology from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('623406706917', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '----', '', '', '', ''),
    ('477110403092', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree in Quantity Surveying, Construction Economics or Building with minimum of Second Class Upper from the Mercy College University or any other recognised University; or</li><li>Master of Science/Technology (M.Sc./M.Tech.) degree in Quantity Surveying or Construction Management with minimum CGPA of 3.50 from Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('522481225004', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Master of Science/Technology (M.Sc./M.Tech.) degree in Quantity Surveying, Construction Management, Construction Economics or Building with minimum CGPA of 4.00 or its equivalent from Mercy College University or any other recognised University; or</li><li>M.Phil. in Quantity Surveying, Construction Management with minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('118187123885', 'The programme runs for 8 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('655022258725', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('965588570217', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. or M.Sc. degree in Biochemistry with a minimum CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>Candidate must present a research proposal and will be required to satisfy the Department in an interview.</li></ul>', '', '', '', ''),
    ('871831521000', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('537715969989', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('916099253098', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('300780216488', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('192907850702', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<span>The following areas of Specialization are available: Physical Metallurgy, Advanced Characterization, Metal forming and Fabrication, Electrochemistry and Corrosion, Fracture Mechanics, Transport Phenomena in Materials Processing, Polymeric Materials, Ceramic Materials, and Composite Materials</span><ul><li>M.Sc. or M.Phil degree in Metallurgical and Materials Engineering with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognised University.</li><li>Candidates may be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('207572889273', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. degree in Cell Biology and Genetics or related courses and with a minimum of CGPA of 4.00 from the Mercy College University or any other recognized University.</li><li>M.Phil. degree with a minimum CGPA of 4.00 in the course works in Cell Biology and Genetics or related courses like Botany, Microbiology, Biochemistry, Biotechnology, Zoology, Marine Biology, Anatomy and Physiology from the Mercy College University or any other recognized University.</li></ul>', '', '', '', ''),
    ('115564818143', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('796039160897', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Phil. degree or its equivalent in Arts & Social Sciences Education courses with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education subjects with a minimum GPA of 4.00 from the Mercy College University or any other recognized University</li><li>Candidates for Ph.D. Programme may be required to satisfy the Departmental selection before admission.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('571646283581', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('832267596993', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>Bachelor’s degree or its equivalent in Arts & Social Sciences Education subjects with a minimum of Second Class Upper from the Mercy College University or any other recognized University</li><li>Master’s degree in Arts & Social Sciences Education courses with a minimum GPA of 3.50 in course work from the Mercy College University or any other recognized University.</li><li>Candidates for M.Phil. Programme may be required to satisfy the Department in a selection process.</li><li>Candidates will be required to undergo a selection process.</li></ul>', '', '', '', ''),
    ('412068650451', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. in Analytical Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>M.Phil. in Analytical Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('190257403287', 'The programme runs for 6 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ul><li>M.Sc. in Analytical Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>M.Phil. in Analytical Chemistry with a minimum CGPA of 4.00 or its equivalent from the Mercy College University or any other recognized University.</li><li>Candidates will be required to satisfy the Department in a selection process.</li></ul>', '', '', '', ''),
    ('541887886449', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Chemistry or Industrial Chemistry with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>M.Sc. in Chemistry or Industrial Chemistry with minimum CGPA of 3.50 from the Mercy College University or any other recognised University. </li><li>Candidates will be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('383021190571', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="a"><li>Bachelor’s degree in Chemistry or Industrial Chemistry with minimum of Second Class Upper from the Mercy College University or any other recognised University.</li><li>M.Sc. in Chemistry or Industrial Chemistry with minimum CGPA of 3.50 from the Mercy College University or any other recognised University. </li><li>Candidates will be required to satisfy the Department in a selection process.</li></ol>', '', '', '', ''),
    ('686250738033', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must possess a Bachelor honours degree in Technology Education from Mercy College University or any other approved University with at least a Second Class (Lower Division) or possess Bachelor honours degree in Industrial Technical Education/Industrial Technology Education/Technical Education and PGDE or PGDTE or NCE from any other recognized University approved by Senate with a minimum of Second Class Lower Division.  Additionally, the candidates in this category are required to pass all M.Ed compulsory courses in their respective disciplines.</li><li>Candidates must possess a Master’s degree in Technology Education, Industrial Technical Education/Industrial Technology Education/Technical Education with a minimum CGPA of at least 3.50.</li><li> All candidates for the M.Phil. Programmes must contact the Department for availability of Supervisors before applying.</li><li>The candidate may be required to undergo a selection process as determined by the Department.</li><br/><br/><span>All candidates shall register for a minimum of 9 units of course work (codes 900 – 949)</span></ol>', '', '', '', ''),
    ('647646375087', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must possess a Bachelor honours degree in Technology Education from Mercy College University or any other approved University with at least a Second Class (Lower Division) or possess Bachelor honours degree in Industrial Technical Education/Industrial Technology Education/Technical Education and PGDE or PGDTE or NCE from any other recognized University approved by Senate with a minimum of Second Class Lower Division.  Additionally, the candidates in this category are required to pass all M.Ed compulsory courses in their respective disciplines.</li><li>Candidates must possess a Master’s degree in Technology Education, Industrial Technical Education/Industrial Technology Education/Technical Education with a minimum CGPA of at least 3.50.</li><li> All candidates for the M.Phil. Programmes must contact the Department for availability of Supervisors before applying.</li><li>The candidate may be required to undergo a selection process as determined by the Department.</li><br/><br/><span>All candidates shall register for a minimum of 9 units of course work (codes 900 – 949)</span></ol>', '', '', '', ''),
    ('373594718749', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must possess a Bachelor honours degree in Technology Education from Mercy College University or any other approved University with at least a Second Class (Lower Division) or possess Bachelor honours degree in Industrial Technical Education/Industrial Technology Education/Technical Education and PGDE or PGDTE or NCE from any other recognized University approved by Senate with a minimum of Second Class Lower Division.  Additionally, the candidates in this category are required to pass all M.Ed compulsory courses in their respective disciplines.</li><li>Candidates must possess a Master’s degree in Technology Education, Industrial Technical Education/Industrial Technology Education/Technical Education with a minimum CGPA of at least 3.50.</li><li> All candidates for the M.Phil. Programmes must contact the Department for availability of Supervisors before applying.</li><li>The candidate may be required to undergo a selection process as determined by the Department.</li><br/><br/><span>All candidates shall register for a minimum of 9 units of course work (codes 900 – 949)</span></ol>', '', '', '', ''),
    ('101246035197', 'The programme runs for 2 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>A candidate who has obtained the degree of Master of Philosophy in Technology Education from Mercy College University or holders of Industrial Technical Education/Industrial Technology Education and PGDTE, PGDTE or NCE from any other approved Universities must have a minimum CGPA of 4.0.</li><li>A candidate who has obtained the degree of M.Ed in Technology Education, Industrial Technical Education/Industrial Technology Education must have a minimum CGPA of 4.0.</li><li>Candidates must clear with the Department as to the availability of vacancies/Supervisors before applying.</li><li>All candidates may be required to undergo a selection process as may be determined by the Department.</li></ol>', '', '', '', ''),
    ('454424543165', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>A candidate who has obtained the degree of Master of Philosophy in Technology Education from Mercy College University or holders of Industrial Technical Education/Industrial Technology Education and PGDTE, PGDTE or NCE from any other approved Universities must have a minimum CGPA of 4.0.</li><li>A candidate who has obtained the degree of M.Ed in Technology Education, Industrial Technical Education/Industrial Technology Education must have a minimum CGPA of 4.0.</li><li>Candidates must clear with the Department as to the availability of vacancies/Supervisors before applying.</li><li> All candidates may be required to undergo a selection process as may be determined by the Department.</li></ol>', '', '', '', ''),
    ('358389526055', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>A candidate who has obtained the degree of Master of Philosophy in Technology Education from Mercy College University or holders of Industrial Technical Education/Industrial Technology Education and PGDTE, PGDTE or NCE from any other approved Universities must have a minimum CGPA of 4.0.</li><li>A candidate who has obtained the degree of M.Ed in Technology Education, Industrial Technical Education/Industrial Technology Education must have a minimum CGPA of 4.0.</li><li>Candidates must clear with the Department as to the availability of vacancies/Supervisors before applying.</li><li> All candidates may be required to undergo a selection process as may be determined by the Department.</li></ol>', '', '', '', ''),
    ('764837185336', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must possess a Bachelor honours degree in Technology Education from Mercy College University or any other approved University with at least a Second Class (Lower Division) or possess Bachelor honours degree in Industrial Technical Education/Industrial Technology Education/Technical Education and PGDE or PGDTE or NCE from any other recognized University approved by Senate with a minimum of Second Class Lower Division.  Additionally, the candidates in this category are required to pass all M.Ed compulsory courses in their respective disciplines.</li><li>Candidates must possess a Master’s degree in Technology Education, Industrial Technical Education/Industrial Technology Education/Technical Education with a minimum CGPA of at least 3.50.</li><li> All candidates for the M.Phil. Programmes must contact the Department for availability of Supervisors before applying.</li><li>The candidate may be required to undergo a selection process as determined by the Department.</li><br/<br/><span>All candidates shall register for a minimum of 9 units of course work (codes 900 – 949)</span></ol>', '', '', '', ''),
    ('165792474038', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must possess a Bachelor honours degree in Technology Education from Mercy College University or any other approved University with at least a Second Class (Lower Division) or possess Bachelor honours degree in Industrial Technical Education/Industrial Technology Education/Technical Education and PGDE or PGDTE or NCE from any other recognized University approved by Senate with a minimum of Second Class Lower Division.  Additionally, the candidates in this category are required to pass all M.Ed compulsory courses in their respective disciplines.</li><li>Candidates must possess a Master’s degree in Technology Education, Industrial Technical Education/Industrial Technology Education/Technical Education with a minimum CGPA of at least 3.50.</li><li> All candidates for the M.Phil. Programmes must contact the Department for availability of Supervisors before applying.</li><li>The candidate may be required to undergo a selection process as determined by the Department.</li><br/<br/><span>All candidates shall register for a minimum of 9 units of course work (codes 900 – 949)</span></ol>', '', '', '', ''),
    ('486351253207', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must possess a Bachelor honours degree in Technology Education from Mercy College University or any other approved University with at least a Second Class (Lower Division) or possess Bachelor honours degree in Industrial Technical Education/Industrial Technology Education/Technical Education and PGDE or PGDTE or NCE from any other recognized University approved by Senate with a minimum of Second Class Lower Division.  Additionally, the candidates in this category are required to pass all M.Ed compulsory courses in their respective disciplines.</li><li>Candidates must possess a Master’s degree in Technology Education, Industrial Technical Education/Industrial Technology Education/Technical Education with a minimum CGPA of at least 3.50.</li><li> All candidates for the M.Phil. Programmes must contact the Department for availability of Supervisors before applying.</li><li>The candidate may be required to undergo a selection process as determined by the Department.</li><br/<br/><span>All candidates shall register for a minimum of 9 units of course work (codes 900 – 949)</span></ol>', '', '', '', ''),
    ('700422651036', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidate who has obtained the degree of Master of Philosophy in Technology Education from Mercy College University or holders of Industrial Technical Education/Industrial Technology Education and PGDTE, PGDTE or NCE from any other approved Universities must have a minimum CGPA of 4.0.</li><li>A candidate who has obtained the degree of M.Ed in Technology Education, Industrial Technical Education/Industrial Technology Education must have a minimum CGPA of 4.0.</li><li>Candidates must clear with the Department as to the availability of vacancies/Supervisors before applying.</li><li>All candidates may be required to undergo a selection process as may be determined by the Department.</li></ol>', '', '', '', ''),
    ('146857733025', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>candidate who has obtained the degree of Master of Philosophy in Technology Education from Mercy College University or holders of Industrial Technical Education/Industrial Technology Education and PGDTE, PGDTE or NCE from any other approved Universities must have a minimum CGPA of 4.0.</li><li>A candidate who has obtained the degree of M.Ed in Technology Education, Industrial Technical Education/Industrial Technology Education must have a minimum CGPA of 4.0.</li><li>Candidates must clear with the Department as to the availability of vacancies/Supervisors before applying.</li><li>All candidates may be required to undergo a selection process as may be determined by the Department.</li></ol>', '', '', '', ''),
    ('229649777695', 'The programme runs for 4 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>candidate who has obtained the degree of Master of Philosophy in Technology Education from Mercy College University or holders of Industrial Technical Education/Industrial Technology Education and PGDTE, PGDTE or NCE from any other approved Universities must have a minimum CGPA of 4.0.</li><li>A candidate who has obtained the degree of M.Ed in Technology Education, Industrial Technical Education/Industrial Technology Education must have a minimum CGPA of 4.0.</li><li>Candidates must clear with the Department as to the availability of vacancies/Supervisors before applying.</li><li>All candidates may be required to undergo a selection process as may be determined by the Department.</li></ol>', '', '', '', ''),
    ('169306390548', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must be a holder of the Bachelor’s degree, with a minimum of Second class honours upper division, OR  a Master’s degree with a minimum CGPA of 4.0 from the Mercy College University or any other recognized university in any of the following disciplines:</li><p>- Sustainable Urbanisation</p><p>- Housing Development and Management </p><p>- Urban Management</p><p>- Facility Management</p><p>- Construction Management</p><p>- Project Management</p><p>- Built Environment Disciplines including Architecture, Urban and Regional Planning, Estate Management, Land Economy, Quantity Surveying, Building, Landscape Architecture, Land Surveying and Geographic Information Systems</p><p>- Social Science disciplines including Geography, Sociology, Political Science, Economics, Philosophy: and</p><p>- Interdisciplinary Studies including Urban Studies, International Relations/Development, History and Strategic Studies, Public Policy, Peace and Conflict Studies, Transport Studies and Sustainable Development</p><li>All other requirements as stipulated in the regulations of the School of Postgraduate Studies, Mercy College University.</li><li>All candidates for the programme are required to undergo a selection process to ensure that the candidate’s research meets the following criteria:</li><p>- Addresses one of the Sustainable Development Goals</p><p>- Is relevant to at least one of the eight research clusters of the Centre for Housing and Sustainable Development (i. African Urbanization Dynamics; ii. Housing and Urban Regeneration; iii. Sustainable Infrastructure and Urban Design; iv. Sustainable Construction and Construction skills development; v.  Land Administration and Management; vi. Spatial Data Infrastructure; vii. Urban Health and Livability; viii. Pro-poor Development and Urban Management - <?=ROOT?>)</p></ol>', '', '', '', ''),
    ('506923826864', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must be a holder of the Bachelor’s degree, with a minimum of Second class honours upper division, OR  a Master’s degree with a minimum CGPA of 4.0 from the Mercy College University or any other recognized university in any of the following disciplines:</li><p>- Sustainable Urbanisation</p><p>- Housing Development and Management </p><p>- Urban Management</p><p>- Facility Management</p><p>- Construction Management</p><p>- Project Management</p><p>- Built Environment Disciplines including Architecture, Urban and Regional Planning, Estate Management, Land Economy, Quantity Surveying, Building, Landscape Architecture, Land Surveying and Geographic Information Systems</p><p>- Social Science disciplines including Geography, Sociology, Political Science, Economics, Philosophy: and</p><p>- Interdisciplinary Studies including Urban Studies, International Relations/Development, History and Strategic Studies, Public Policy, Peace and Conflict Studies, Transport Studies and Sustainable Development</p><li>All other requirements as stipulated in the regulations of the School of Postgraduate Studies, Mercy College University.</li><li>All candidates for the programme are required to undergo a selection process to ensure that the candidate’s research meets the following criteria:</li><p>- Addresses one of the Sustainable Development Goals</p><p>- Is relevant to at least one of the eight research clusters of the Centre for Housing and Sustainable Development (i. African Urbanization Dynamics; ii. Housing and Urban Regeneration; iii. Sustainable Infrastructure and Urban Design; iv. Sustainable Construction and Construction skills development; v.  Land Administration and Management; vi. Spatial Data Infrastructure; vii. Urban Health and Livability; viii. Pro-poor Development and Urban Management - <?=ROOT?>)</p></ol>', '', '', '', ''),
    ('671896944858', 'The programme runs for 12 semesters.', 'ENTRY REQUIREMENTS:', 'The programme is open to candidates with:', '<ol type="i"><li>Candidates must be a holder of the Bachelor’s degree, with a minimum of Second class honours upper division, OR  a Master’s degree with a minimum CGPA of 4.0 from the Mercy College University or any other recognized university in any of the following disciplines:</li><p>- Sustainable Urbanisation</p><p>- Housing Development and Management </p><p>- Urban Management</p><p>- Facility Management</p><p>- Construction Management</p><p>- Project Management</p><p>- Built Environment Disciplines including Architecture, Urban and Regional Planning, Estate Management, Land Economy, Quantity Surveying, Building, Landscape Architecture, Land Surveying and Geographic Information Systems</p><p>- Social Science disciplines including Geography, Sociology, Political Science, Economics, Philosophy: and</p><p>- Interdisciplinary Studies including Urban Studies, International Relations/Development, History and Strategic Studies, Public Policy, Peace and Conflict Studies, Transport Studies and Sustainable Development</p><li>All other requirements as stipulated in the regulations of the School of Postgraduate Studies, Mercy College University.</li><li>All candidates for the programme are required to undergo a selection process to ensure that the candidate’s research meets the following criteria:</li><p>- Addresses one of the Sustainable Development Goals</p><p>- Is relevant to at least one of the eight research clusters of the Centre for Housing and Sustainable Development (i. African Urbanization Dynamics; ii. Housing and Urban Regeneration; iii. Sustainable Infrastructure and Urban Design; iv. Sustainable Construction and Construction skills development; v.  Land Administration and Management; vi. Spatial Data Infrastructure; vii. Urban Health and Livability; viii. Pro-poor Development and Urban Management - <?=ROOT?>)</p></ol>',  '', '', '', ''),
    ('4132514847', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and in
    <br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>',
    '<h2>WASSCE/NECO</h3>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS.<br/><br/><div><b>AND</b></div><br/>DEGREE Any 1 subject(s) in (Actuarial Science, Banking and Finance, Business Administration, ECONOMICS, Financial Studies, Insurance and Taxation)
    <br/><br/><div><b>OR</b></div><br/>HND Any 1 subject(s) in (ACCOUNTING, Actuarial Science, Banking and Finance, Business Administration, BUSINESS MANAGEMENT, ECONOMICS, Financial Studies, Insurance and Taxation)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications Any 1 subject(s) in (ACA, ACCA, ANAN, ACMA, ACIA and ACIB)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in ECONOMICS and Any 2 subject(s) in (ACCOUNTING, BUSINESS MANAGEMENT, GEOGRAPHY and GOVERNMENT)
    <br/><br/><div><b>OR</b></div><br/>OND Any 1 subject(s) in (ACCOUNTING, Actuarial Science, Banking and Finance, Business Administration, BUSINESS MANAGEMENT, ECONOMICS, Insurance, Taxation, Financial Studies and Marketing)
    <br/><br/><div><b>OR</b></div><br/>DEGREE Any 1 subject(s) in (Actuarial Science, Banking and Finance, Business Administration, BUSINESS MANAGEMENT, ECONOMICS, Insurance, Marketing, Taxation, ACCOUNTING and Financial Studies)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications in ICAN (ATSIII)
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (Accounting Education and Financial Education)
    <br/><br/><div><b>AND</b></div><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and in<br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),

    ('8777601916', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and in
    <br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>',
    '<h2>WASSCE/NECO</h3>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS.
    <br/><br/><div><b>AND</b></div><br/>DEGREE Any 1 subject(s) in (Marketing, ACCOUNTING, Banking and Finance, ECONOMICS, Estate Management, Financial Studies, Insurance, Taxation, Cooperative Economic Management, Employment Relations and Human Resource Management, Marine Transportation and Business Studies, Mass Communication, Office Technology and Management, Purchasing and Supply, Transportation Planning Management, Labour Studies, BUSINESS STUDIES and Human Resource Management
    <br/><br/><div><b>OR</b></div><br/>HND Any 1 subject(s) in (ACCOUNTING, Banking and Finance, Cooperative Economic Management, ECONOMICS, Estate Management, Employment Relations and Human Resource Management, Financial Studies, Insurance, Marketing, Marine Transportation and Business Studies, Mass Communication, Office Technology and Management, Purchasing and Supply, Taxation, Transportation Planning Management, Labour Studies, Business Administration, BUSINESS STUDIES and Human Resource Management)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications Any 1 subject(s) in (ACIA, ACIB, ACIS, ACMA and CII)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and in
    <br/><br/><div><b>AND</b></div><br/>DEGREE Any 1 subject(s) in (Marketing, ACCOUNTING, Banking and Finance, ECONOMICS, Estate Management, Financial Studies, Insurance, Taxation, Cooperative Economic Management, Employment Relations and Human Resource Management, Marine Transportation and Business Studies, Mass Communication, Office Technology and Management, Purchasing and Supply, Transportation Planning Management, Labour Studies, BUSINESS STUDIES and Human Resource Management)
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in ECONOMICS and Any 2 subject(s) in (BUSINESS MANAGEMENT, GEOGRAPHY and GOVERNMENT)
    <br/><br/><div><b>OR</b></div><br/>OND Any 1 subject(s) in (ACCOUNTING, Banking and Finance, Cooperative Economic Management, ECONOMICS, Estate Management, Employment Relations and Human Resource Management, Financial Studies, Insurance, Marketing, Marine Transportation and Business Studies, Mass Communication, Office Technology and Management, Purchasing and Supply, Taxation, Transportation Planning Management, Labour Studies, Business Administration and BUSINESS STUDIES)
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (Accounting Education, COMPUTER SCIENCE, BUSINESS STUDIES, ECONOMICS, Social Studies, Political Science, GOVERNMENT, Financial Studies and Secretarial Studies)<br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),
    ('4357387034', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and in
    <br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>',
    '<h2>WASSCE/NECO</h3>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS.
    <br/><br/><div><b>AND</b></div><br/>OND Any 1 subject(s) in (ACCOUNTING, Banking and Finance, Business Administration, Cooperative Economic Management, Home and Rural Economics, Insurance, Marketing, Purchasing and Supply, Statistics, Taxation and COMPUTER SCIENCE)
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in ECONOMICS and Any 2 subject(s) in (BUSINESS MANAGEMENT, MATHEMATICS and GOVERNMENT)
    <br/><br/><div><b>OR</b></div><br/>DEGREE Any 1 subject(s) in (ACCOUNTING, Banking and Finance, Business Administration, Cooperative Economic Management, Insurance, Marketing, Purchasing and Supply, Taxation, Home and Rural Economics and Statistics)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications in ICAN (ATSIII)
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (ECONOMICS and Business Education)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and in
    <br/><br/><div><b>AND</b></div><br/>HND Any 1 subject(s) in (ACCOUNTING, Banking and Finance, Business Administration, Cooperative Economic Management, Home and Rural Economics, Insurance, Marketing, Purchasing and Supply, Statistics and Taxation)
    <br/><br/><div><b>OR</b></div><br/>DEGREE Any 1 subject(s) in (ACCOUNTING, Banking and Finance, Business Administration, Cooperative Economic Management, Home and Rural Economics, Insurance, Marketing, Purchasing and Supply, Statistics and Taxation)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications Any 1 subject(s) in (ACIB, ACA, ANAN, ACCA, ACIS and CFA)
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),
    ('4959620773', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in ENGLISH LANGUAGE, in MATHEMATICS, in GOVERNMENT and in
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in ENGLISH LANGUAGE, in MATHEMATICS, in GOVERNMENT and in
    <br/><br/><div><b>AND</b></div><br/>OND Any 1 subject(s) in (Business Administration, ECONOMICS, Industrial and Labour Relations, Local Government Studies, Office Technology and Management, Political Science, Psychology, Public Administration, Social Work, Secretarial Studies, Mass Communication and Labour Studies)
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in GOVERNMENT and Any 2 subject(s) in (ECONOMICS and CHRISTIAN RELIGIOUS STUDIES)
    <br/><br/><div><b>OR</b></div><br/>DEGREE Any 1 subject(s) in (Business Administration, ECONOMICS, Industrial and Labour Relations, Political Science, Psychology, Social Work, Sociology, ART DEGREE Subjects, SCIENCE DEGREE Subjects, ENGINEERING DEGREE Subjects, Mass Communication and Labour Studies)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications in ICAN (ATSIII)
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (Political Science, Social Studies, ECONOMICS, Business Education and BUSINESS STUDIES)',
    '<br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/><h2>WASSCE/NECO</h2>in ENGLISH LANGUAGE, in MATHEMATICS, in GOVERNMENT and in
    <br/><br/><div><b>AND</b></div><br/>HND Any 1 subject(s) in (Business Administration, ECONOMICS, Industrial and Labour Relations, Local Government Studies, Mass Communication, Office Technology and Management, Political Science, Public Administration, Psychology, Social Work, Sociology, Secretarial Studies and Labour Studies)
    <br/><br/><div><b>OR</b></div><br/>DEGREE Any 1 subject(s) in (Business Administration, ECONOMICS, Mass Communication, Sociology, Political Science, Psychology, Social Work, ART DEGREE Subjects, SCIENCE DEGREE Subjects and ENGINEERING DEGREE Subjects)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications Any 1 subject(s) in (ACIB, ACA, ANAN, ACCA, ACIS and CFA)
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>63,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),
    ('3801684832', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS, AGRICULTURAL SCIENCE, Integrated Science and FISHERIES)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS, AGRICULTURAL SCIENCE, Integrated Science and FISHERIES)
    <br/><br/><div><b>AND</b></div><br/>OND
    <br/><br/><div><b>OR</b></div><br/>DEGREE     
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in BIOLOGY, in CHEMISTRY and in PHYSICS
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (BIOLOGY, PHYSICS, CHEMISTRY, MATHEMATICS and Integrated Science)',
    '<br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in BIOLOGY, in CHEMISTRY and Any 1 subject(s) in (PHYSICS, AGRICULTURAL SCIENCE, Integrated Science and FISHERIES)
    <br/><br/><div><b>AND</b></div><br/>HND 
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>', '', '', '', ''),
    ('8989864223', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and Any 2 subject(s) in (PHYSICS, BIOLOGY, Integrated Science and FISHERIES)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and Any 2 subject(s) in (PHYSICS, BIOLOGY, Integrated Science and FISHERIES)
    <br/><br/><div><b>AND</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in CHEMISTRY, in PHYSICS and in BIOLOGY
    <br/><br/><div><b>OR</b></div><br/>OND Any 1 subject(s) in (PHYSICS, CHEMISTRY and BIOLOGY)
    <br/><br/><div><b>OR</b></div><br/>DEGREE     
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (CHEMISTRY, PHYSICS, BIOLOGY and MATHEMATICS)',
    '<br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/><h2>in MATHEMATICS, in ENGLISH LANGUAGE, in CHEMISTRY and Any 2 subject(s) in (PHYSICS, BIOLOGY, Integrated Science and FISHERIES)
    <br/><br/><div><b>AND</b></div><br/>HND 
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>36,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>', '', '', '', ''),
    ('3233970531', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (CHEMISTRY, AGRICULTURAL SCIENCE and COMPUTER STUDIES)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (CHEMISTRY, AGRICULTURAL SCIENCE and COMPUTER STUDIES)
    <br/><br/><div><b>AND</b></div><br/>OND Any 1 subject(s) in (COMPUTER SCIENCE, Computer Engineering and Mechanical Engineering)
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in MATHEMATICS, in PHYSICS and in CHEMISTRY
    <br/><br/><div><b>OR</b></div><br/>DEGREE     
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (MATHEMATICS, CHEMISTRY, BIOLOGY, PHYSICS and AGRICULTURAL SCIENCE)',
    '<br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS and Any 2 subject(s) in (CHEMISTRY, AGRICULTURAL SCIENCE and COMPUTER STUDIES)
    <br/><br/><div><b>AND</b></div><br/>HND Any 1 subject(s) in (COMPUTER SCIENCE, Computer Engineering and Mechanical Engineering)
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),

    ('1214255102', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, FURTHER MATHEMATICS, Integrated Science, Data Processing and AGRICULTURAL SCIENCE)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, FURTHER MATHEMATICS, Integrated Science, Data Processing and AGRICULTURAL SCIENCE)
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (PHYSICS, BIOLOGY, MATHEMATICS and CHEMISTRY)
    <br/><br/><div><b>AND</b></div><br/>OND Any 1 subject(s) in (COMPUTER SCIENCE, Computer Engineering, Mechanical Engineering and Electrical and Electronics Engineering) 
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>in PHYSICS, in CHEMISTRY and in BIOLOGY
    <br/><br/><div><b>OR</b></div><br/>DEGREE',
    '<br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in PHYSICS, in CHEMISTRY and Any 1 subject(s) in (BIOLOGY, FURTHER MATHEMATICS, Integrated Science, Data Processing and AGRICULTURAL SCIENCE)
    <br/><br/><div><b>AND</b></div><br/>HND Any 1 subject(s) in (COMPUTER SCIENCE, Computer Engineering, Mechanical Engineering and Electrical and Electronics Engineering)
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,500
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),
    ('6462700976', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and in
    <br/><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and in
    <br/><br/><div><b>AND</b></div><br/>DEGREE  
    <br/><br/><div><b>OR</b></div><br/>HND
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications',
    '<br /><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>CAMBRIDGE A LEVELS/JUPEB</h2>, and any other 3subject(s)
    <br/><br/><div><b>AND</b></div><br/>OND 
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications
    <br/><br/><div><b>OR</b></div><br/>NCE
    <br/><br/><div><b>AND</b></div><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in LITERATURE IN ENGLISH and in
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),

    ('3956510285', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, HISTORY, LITERATURE IN ENGLISH, ACCOUNTING and Civic Education)
    <br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, HISTORY, LITERATURE IN ENGLISH, ACCOUNTING and Civic Education)
    <br/><br/><div><b>AND</b></div><br/>OND
    <br/><br/><div><b>OR</b></div><br/><h2>CAMBRIDGE A LEVELS/JUPEB</h2>, and any other 1subject(s)
    <br/><br/><div><b>OR</b></div><br/>DEGREE  
    <br/><br/><div><b>OR</b></div><br/>NCE in Economics Education',
    '<br /><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (GEOGRAPHY, HISTORY, LITERATURE IN ENGLISH, ACCOUNTING and Civic Education)
    <br/><br/><div><b>AND</b></div><br/>HND 
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications
    <br/><br/><div><b>OR</b></div><br/>NCE in Economics Education
    <br/><br/><br/><br/><h2>FEES:</h2>
   <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),

    ('6246998508', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE and in
    <br/><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE and in
    <br/><br/><div><b>AND</b></div><br/>DEGREE 
    <br/><br/><div><b>OR</b></div><br/>HND Any 1 subject(s) in (Social Work, Psychology and Philosophy)
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications',
    '<br /><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>CAMBRIDGE A LEVELS/JUPEB</h2>Any 1 subject(s) in (ART Subjects, SOCIAL SCIENCES (Without Commerce) Subjects and SCIENCE Subjects) , and any other 2subject(s)
    <br/><br/><div><b>OR</b></div><br/>OND
    <br/><br/><div><b>OR</b></div><br/>DEGREE
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications
    <br/><br/><div><b>OR</b></div><br/>NCE Any 1 subject(s) in (BIOLOGY, MATHEMATICS, PHYSICS, CHEMISTRY, Integrated Science and Social Studies)
    <br/><br/><div><b>OR</b></div><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE and in
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>', '', '', '', ''),

    ('7079566239', 'The programme runs for 10 semesters.', 'YR1 Entry Requirements', 'The Applicant must have: <br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects, Data Processing and ACCOUNTING)
    <br/><br/><h3 class="h-1">DE3 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects, Data Processing and ACCOUNTING)
    <br/><br/><div><b>AND</b></div><br/>DEGREE 
    <br/><br/><div><b>OR</b></div><br/>OND
    <br/><br/><div><b>OR</b></div><br/>Professional Qualifications',
    '<br/><br/><h3 class="h-1">DE2 Entry Requirements</h3></br>The Applicant must have:<br/><br/>
    <h2>CAMBRIDGE A LEVELS/JUPEB</h2>, and any other 3subject(s)
    <br/><br/><div><b>AND</b></div><br/>OND Any 1 subject(s) in (ECONOMICS, Finance, Business Administration, Banking and Finance and Insurance)
    <br/><br/><div><b>AND</b></div><br/>DEGREE
    <br/><br/><div><b>AND</b></div><br/>Professional Qualifications 
    <br/><br/><div><b>AND</b></div><br/>NCE Any 1 subject(s) in (ACCOUNTING and Office Technology and Management)
    <br/><br/><div><b>AND</b></div><br/><h2>WASSCE/NECO</h2>in MATHEMATICS, in ENGLISH LANGUAGE, in ECONOMICS and Any 2 subject(s) in (ART Subjects, SOCIAL SCIENCES Subjects, Data Processing and ACCOUNTING)
    <br/><br/><br/><br/><h2>FEES:</h2>
    <div class="panel-body" style="font-size: 14px; font-family: '"Bookman Old Style"'">
        <table class="table table-responsive table-bordered">
            
            <thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 1 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>42,000
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                
            </tbody><thead>
                <tr>
                    <th colspan="2">For Applicants coming in at Year 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Year 2 = </td>
                </tr>
                
                <tr>
                    <td>
                        Service Charge</td>
                    <td>37,750
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                </td></tr><tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 3 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 4 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 5 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Year 6 = </td>
                </tr>
                
                <tr>
                    <td>
                        Student Union Dues</td>
                    <td>1,200
                        
                </td></tr><tr>
                    <td>
                        Service Charge</td>
                    <td>35,250
                        
                </td></tr><tr>
                    <td>
                        Module Fees</td>
                    <td>15,000
                        
                </td></tr><tr>
                    <td>
                        Acceptance</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Registration</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        Verification of Certificate(s)</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Exam Charge</td>
                    <td>13,000
                        
                </td></tr><tr>
                    <td>
                        Accreditation</td>
                    <td>3,000
                        
                </td></tr><tr>
                    <td>
                        Endowment</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Student ID Card</td>
                    <td>2,000
                        
                </td></tr><tr>
                    <td>
                        Accommodation</td>
                    <td>6,000
                        
                </td></tr><tr>
                    <td>
                        TISHIP</td>
                    <td>5,000
                        
                </td></tr><tr>
                    <td>
                        Medical Screening Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Library Fees</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        ODL Fees</td>
                    <td>5,500
                        
                </td></tr><tr>
                    <td>
                        GST Materials</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Cleaning Fees</td>
                    <td>1,500
                        
                </td></tr><tr>
                    <td>
                        Matriculation Gown</td>
                    <td>2,500
                        
                </td></tr><tr>
                    <td>
                        Orientation Ceremony/CD</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        SMS</td>
                    <td>500
                        
                </td></tr><tr>
                    <td>
                        Lab/Workshop</td>
                    <td>10,000
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>', '', '', '', '');

CREATE TABLE IF NOT EXISTS `Sublist`(
  `No` INT(224) PRIMARY KEY AUTO_INCREMENT,
  `Cat_id` VARCHAR(23) NOT NULL,
  `Child_id` VARCHAR(50) UNIQUE NOT NULL,
  `Child_name` VARCHAR(250) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Sublist`(`Cat_id`, `Child_id`, `Child_name`)
    VALUES
        ('1', '4132514847', 'Bachelor of Science in Accounting (Full Time)'),
        ('1', '8777601916', 'Bachelor of Science in Business Administration'),
        ('1', '4357387034', 'Bachelor of Science in Economics'),
        ('1', '4959620773', 'Bachelor of Science in Public Administration'),
        ('1', '3801684832', 'Bachelor of Science (Education) in Biology'),
        ('1', '8989864223', 'Bachelor of Science (Education) in Chemistry'),
        ('1', '3233970531', 'Bachelor of Science (Education) in Mathematics'),
        ('1', '1214255102', 'Bachelor of Science (Education) in Physics'),
        ('1', '6462700976', 'Bachelor of Arts (Education) in English'),
        ('1', '3956510285', 'Bachelor of Science (Education) in Economics'),
        ('1', '6246998508', 'Bachelor of Science (Education) in Early Childhood Education'),
        ('1', '7079566239', 'Bachelor of Science (Education) in Business Studies'),
        ('2', '280012564508', 'Doctor of Philosophy in Theatre Arts (Full Time)'),
        ('2', '499732042680', 'Doctor of Philosophy in English Language (Full Time)'),
        ('2', '831582359497', 'Doctor of Philosophy in Adult Education'),
        ('2', '200207923226', 'Doctor of Philosophy in English Literature (Full Time)'),
        ('2', '728320200670', 'Doctor of Philosophy in Microbiology (Full Time)'),
        ('2', '761380880955', 'Doctor of Philosophy in Anatomy (Full Time)'),
        ('2', '688615335552', 'Doctor of Philosophy in Mass Communications (Full Time)'),
        ('2', '410891980211', 'Doctor of Philosophy in Mathematics (Full Time)'),
        ('2', '309922138401', 'Doctor of Philosophy in History and Strategic Studies (Full Time)'),
        ('2', '489509536554', 'Doctor of Philosophy in Measurement and Evaluation (Full Time)'),
        ('2', '353232427060', 'Doctor of Philosophy in Physiology (Full Time)'),
        ('2', '438406715656', 'Doctor of Philosophy in Geography and Planning (Full Time)'),
        ('2', '348143450354', 'Doctor of Philosophy in Guidance and Counselling (Full Time)'),
        ('2', '487928778250', 'Doctor of Philosophy in Clinical Pharmacy (Full Time)'),
        ('2', '825255675125', 'Doctor of Philosophy in Electrical/Electronics (Electronics Option) (Full Time)'),
        ('2', '179621293987', 'Doctor of Philosophy in Sociology of Education (Full Time)'),
        ('2', '269368849448', 'Doctor of Philosophy in Educational Psychology (Full Time)'),
        ('2', '323696621328', 'Doctor of Philosophy in Educational Administration and Planning (Full Time)'),
        ('2', '337538808569', 'Doctor of Philosophy in Fisheries (Full Time)'),
        ('2', '164507887130', 'Doctor of Philosophy in Applied Entomology and Pest Management (Full Time)'),
        ('2', '926638847154', 'Doctor of Philosophy in Chemical Engineering (Full Time)'),
        ('2', '765900119547', 'Doctor of Philosophy in Environmental Toxicology and Pollution Management (Full Time)'),
        ('2', '778838701556', 'Doctor of Philosophy in Pharmaceutics and Pharmaceutical Technology (Full Time)'),
        ('2', '453863478960', 'Doctor of Philosophy in Computer Science (Full Time)'),
        ('2', '164848305179', 'Doctor of Philosophy in Chemistry (Full Time)'),
        ('2', '845317129372', 'Doctor of Philosophy in Psychology (Full Time)'),
        ('2', '723880001556', 'Doctor of Philosophy in Surveying and Geoinformatics (Full Time)'),
        ('2', '568560854166', 'Doctor of Philosophy in Commercial and Industrial Law (Full Time)'),
        ('2', '413203938604', 'Doctor of Philosophy in Metallurgical and Materials Engineering (Full Time)'),
        ('2', '837403436963', 'Doctor of Philosophy in Medical Microbiology (Full Time)'),
        ('2', '547470288212', 'Doctor of Philosophy in Pharmacology (Full Time)'),
        ('2', '903092531466', 'Doctor of Philosophy in Botany (Full Time)'),
        ('2', '425500500122', 'Doctor of Philosophy in Political Science (Full Time)'),
        ('2', '672783232975', 'Master of Philosophy in Political Science (Full Time)'),
        ('2', '474827098818', 'Doctor of Philosophy in Philosophy (Full Time)'),
        ('2', '952061894059', 'Doctor of Philosophy in Biochemistry (Full Time)'),
        ('2', '797384709835', 'Doctor of Philosophy in Natural Resources Conservation (Full Time)'),
        ('2', '412188077200', 'Doctor of Philosophy in Comparative Education (Full Time)'),
        ('2', '344128986776', 'Doctor of Philosophy in Estate Management (Full Time)'),
        ('2', '597813436196', 'Doctor of Philosophy in Pharmaceutics and Pharmaceutical Microbiology (Full Time)'),
        ('2', '188447778636', 'Doctor of Philosophy in Parasitology and Bioinformatics (Full Time)'),
        ('2', '861510012504', 'Doctor of Philosophy in Finance (Full Time)'),
        ('2', '300563540165', 'Doctor of Philosophy in Cell Biology and Genetics (Environmental Biology) (Full Time)'),
        ('2', '596986397087', 'Doctor of Philosophy in Statistics (Full Time)'),
        ('2', '406184470102', 'Doctor of Philosophy in Pharmaceutical Chemistry (Full Time)'),
        ('2', '478538244930', 'Master of Philosophy in Estate Management (Full Time)'),
        ('2', '111315139644', 'Doctor of Philosophy in Architecture (Full Time)'),
        ('2', '111975631828', 'Doctor of Philosophy in Medical Physics (Full Time)'),
        ('2', '931869491157', 'Master of Science in Botany (Full Time)'),
        ('2', '588356580546', 'Doctor of Philosophy in Early Childhood Education (Full Time)'),
        ('2', '974069448257', 'Master of Philosophy in Educational Administration and Planning (Full Time)'),
        ('2', '991610801310', 'Doctor of Philosophy in French (Full Time)'),
        ('2', '257374739813', 'Doctor of Philosophy in Marine Biology (Full Time)'),
        ('2', '808227667829', 'Doctor of Philosophy in Economics (Full Time)'),
        ('2', '977714257470', 'Doctor of Philosophy in Cell Biology and Genetics (Cell and Molecular Biology) (Full Time)'),
        ('2', '753315949418', 'Doctor of Philosophy in Physics (Full Time)'),
        ('2', '340940623474', 'Master of Philosophy in Philosophy (Full Time)'),
        ('2', '778939167347', 'Doctor of Philosophy in Pharmacognosy (Full Time)'),
        ('2', '125985625482', 'Doctor of Philosophy in Sports Psychology (Full Time)'),
        ('2', '219256533379', 'Doctor of Philosophy in Health Education (Full Time)'),
        ('2', '133866309350', 'Master of Philosophy in Finance (Full Time)'),
        ('2', '269194439222', 'Master of Philosophy in English Language (Full Time)'),
        ('2', '807469858868', 'Doctor of Philosophy in Electrical/Electronics (Communications Option) (Full Time)'),
        ('2', '115088414633', 'Master of Philosophy in Electrical/Electronics (Communications Option) (Full Time)'),
        ('2', '331530239380', 'Master of Philosophy in Educational Psychology (Full Time)'),
        ('2', '888090816288', 'Master of Philosophy in Measurement and Evaluation (Full Time)'),
        ('2', '422829727692', 'Doctor of Philosophy in Visual Arts (Full Time)'),
        ('2', '535010396882', 'Master of Philosophy in Theatre Arts (Full Time)'),
        ('2', '251645578023', 'Master of Philosophy in Civil and Environmental Engineering (Structures Option) (Full Time)'),
        ('2', '457495953208', 'Doctor of Philosophy in Management (Full Time)'),
        ('2', '797931629134', 'Master of Philosophy in Marketing (Full Time)'),
        ('2', '417915847359', 'Doctor of Philosophy in Building (Full Time)'),
        ('2', '838496256482', 'Master of Philosophy in Building (Full Time)'),
        ('2', '215554290884', 'Master of Philosophy in Biochemistry (Full Time)'),
        ('2', '991479329282', 'Doctor of Philosophy in French Education (Full Time)'),
        ('2', '595673484060', 'Doctor of Philosophy in Social Studies Education (Full Time)'),
        ('2', '149196452605', 'Doctor of Philosophy in Igbo (Full Time)'),
        ('2', '715866999558', 'Doctor of Philosophy in Accounting (Full Time)'),
        ('2', '719920115284', 'Doctor of Philosophy in Urban &amp; Regional Planning (Full Time)'),
        ('2', '359616131671', 'Master of Philosophy in Physiotherapy (Full Time)'),
        ('2', '951628106067', 'Doctor of Philosophy in Physiotherapy (Full Time)'),
        ('2', '116903341838', 'Master of Philosophy in Microbiology (Full Time)'),
        ('2', '687680925776', 'Doctor of Philosophy in Construction Management (Full Time)'),
        ('2', '160744726407', 'Doctor of Philosophy in Marketing (Full Time)'),
        ('2', '129478897130', 'Doctor of Philosophy in Sociology (Full Time)'),
        ('2', '221197802505', 'Master of Philosophy in Sociology (Full Time)'),
        ('2', '922942829374', 'Master of Philosophy in Organisation Behaviour (Full Time)'),
        ('2', '241834422740', 'Doctor of Philosophy in Public Law (Full Time)'),
        ('2', '845588530266', 'Master of Philosophy in Operations Research (Full Time)'),
        ('2', '237796715863', 'Doctor of Philosophy in Music (Full Time)'),
        ('2', '586753506068', 'Doctor of Philosophy in Clinical Pathology (Full Time)'),
        ('2', '662295199856', 'Doctor of Philosophy in Exercise Physiology (Full Time)'),
        ('2', '658770925770', 'Doctor of Philosophy in Industrial Relations and Personnel Management (Full Time)'),
        ('2', '954523867955', 'Doctor of Philosophy in Organisation Behaviour (Full Time)'),
        ('2', '394699193970', 'Doctor of Philosophy in Operations Research (Full Time)'),
        ('2', '593924104726', 'Doctor of Philosophy in Systems Engineering (Full Time)'),
        ('2', '418522842454', 'Doctor of Philosophy in Physics Education (Full Time)'),
        ('2', '255231770509', 'Doctor of Philosophy in Philosophy of Education (Full Time)'),
        ('2', '981051363508', 'Master of Philosophy in Fisheries (Full Time)'),
        ('2', '527044667804', 'Master of Philosophy in Economics (Full Time)'),
        ('2', '913204131282', 'Doctor of Philosophy in Mechanical Engineering (Full Time)'),
        ('2', '537333691432', 'Master of Philosophy in Computer Science (Full Time)'),
        ('2', '498947604220', 'Master of Philosophy in Architecture (Full Time)'),
        ('2', '603280086141', 'Doctor of Philosophy in Civil and Environmental Engineering (Highway &amp; Traffic Option) (Full Time)'),
        ('2', '265170476096', 'Doctor of Philosophy in Geophysics (Full Time)'),
        ('2', '852051453311', 'Master of Philosophy in History and Strategic Studies (Full Time)'),
        ('2', '658517342416', 'Doctor of Philosophy in Private and Property Law (Full Time)'),
        ('2', '657897816020', 'Master of Philosophy in Religion Education (CRS/IRS) (Full Time)'),
        ('2', '371583405960', 'Master of Philosophy in Pharmacology (Full Time)'),
        ('2', '677789419046', 'Doctor of Philosophy in Chemistry Education (Full Time)'),
        ('2', '363643463242', 'Master of Philosophy in Production and Operations Management (Full Time) (FullTime)'),
        ('2', '7654616577872', 'Master of Philosophy in Geography and Planning (Full Time) (FullTime)'),
        ('2', '584808072965', 'Master of Philosophy in Medical Microbiology (Full Time)'),
        ('2', '198977354943', 'Doctor of Philosophy in Civil and Environmental Engineering (Structures Option) (Full Time)'),
        ('2', '341659930933', 'Master of Philosophy in Social Studies Education (Full Time)'),
        ('2', '551043712050', 'Doctor of Philosophy in Education Music (Full Time)'),
        ('2', '856201430498', 'Doctor of Philosophy in International Law (Full Time)'),
        ('2', '993066897570', 'Doctor of Philosophy in Medical Parasitology (Full Time)'),
        ('2', '962780845740', 'Doctor of Philosophy in Cell Biology and Genetics (Genetics) (Full Time)'),
        ('2', '892154011035', 'Doctor of Philosophy in Actuarial Science (Full Time)'),
        ('2', '381368852017', 'Doctor of Philosophy in Yoruba (Full Time)'),
        ('2', '506014227052', 'Master of Philosophy in Adult Education (Full Time)'),
        ('2', '587836792449', 'Master of Philosophy in Electrical/Electronics (Electrical Power Option) (Full Time)'),
        ('2', '946407696406', 'Master of Philosophy in Educational Technology (Full Time)'),
        ('2', '809337748960', 'Master of Philosophy in Environmental Toxicology and Pollution Management (From Masters)'),
        ('2', '724285449143', 'Doctor of Philosophy in Igbo Education (Full Time)'),
        ('2', '667797728408', 'Master of Philosophy in Igbo Education (Full Time)'),
        ('2', '803144253737', 'Master of Philosophy in Visual Arts (Full Time)'),
        ('2', '993105791266', 'Master of Philosophy in Mathematics Education (Full Time)'),
        ('2', '712199189460', 'Master of Philosophy in Cell Biology and Genetics (Environmental Biology) (Full Time)'),
        ('2', '892771912041', 'Master of Philosophy in Actuarial Science (Full Time)'),
        ('2', '389810887607', 'Master of Philosophy in Physiology (Full Time)'),
        ('2', '519831510038', 'Master of Philosophy in Chemical Engineering (Full Time)'),
        ('2', '288131802832', 'Master of Philosophy in Botany (Full Time)'),
        ('2', '660386801019', 'Master of Philosophy in Sports Psychology (Full Time)'),
        ('2', '893170073178', 'Master of Philosophy in Civil and Environmental Engineering (Geotechnics) (Full Time)'),
        ('2', '254611035362', 'Master of Philosophy in Parasitology and Bioinformatics (From Masters)'),
        ('2', '421076823848', 'Master of Philosophy in Clinical Pharmacy (Full Time)'),
        ('2', '351935079716', 'Master of Philosophy in Business Education (Full Time)'),
        ('2', '206817245449', 'Master of Philosophy in Education Music (Full Time)'),
        ('2', '508951241699', 'Doctor of Philosophy in Sports Administration/Mgt. (Full Time)'),
        ('2', '104339434619', 'Master of Philosophy in Risk Management and Insurance (Full Time)'),
        ('2', '258317892365', 'Master of Philosophy in Sociology of Education (Full Time)'),
        ('2', '410655376326', 'Doctor of Philosophy in Geology (Full Time)'),
        ('2', '778805367026', 'Doctor of Philosophy in Risk Management and Insurance (Full Time)'),
        ('2', '910547557854', 'Master of Philosophy in Physics (Full Time)'),
        ('2', '799573667086', 'Master of Philosophy in Health Education (Full Time)'),
        ('2', '410129327933', 'Master of Philosophy in Mathematics (Applied Option) (Full Time)'),
        ('2', '621379139444', 'Master of Philosophy in Mathematics (Pure Option) (Full Time)'),
        ('2', '139903296887', 'Master of Philosophy in History Education (Full Time)'),
        ('2', '563860466241', 'Master of Philosophy in Marine Biology (Full Time)'),
        ('2', '431520535058', 'Master of Philosophy in Sports Administration/Mgt. (Full Time)'),
        ('2', '110312075894', 'Master of Philosophy in Civil and Environmental Engineering (Water Resources Option) (Full Time)'),
        ('2', '661713051265', 'Master of Philosophy in Pharmacognosy (Full Time)'),
        ('2', '900875139779', 'Doctor of Philosophy in Environmental Chemistry (Full Time)'),
        ('2', '842379765077', 'Master of Philosophy in Early Childhood Education (Full Time)'),
        ('2', '126055946748', 'Master of Philosophy in Toxicology (Full Time)'),
        ('2', '248380414377', 'Doctor of Philosophy in Population Education (Full Time)'),
        ('2', '927185505878', 'Master of Philosophy in Physics Education (Full Time)'),
        ('2', '465804765718', 'Master of Philosophy in Surveying and Geoinformatics (Full Time)'),
        ('2', '218679750767', 'Master of Philosophy in Geology (Full Time)'),
        ('2', '662089598760', 'Master of Philosophy in Insurance (Full Time)'),
        ('2', '142770000113', 'Master of Philosophy in Applied Entomology and Pest Management (Full Time) (From Masters)'),
        ('2', '437160631600', 'Doctor of Philosophy in Cell Biology and Genetics (Environmental Biology) (Part Time)'),
        ('2', '635637318614', 'Doctor of Philosophy in Architecture (Part Time)'),
        ('2', '399377752374', 'Master of Philosophy in Finance (Part Time)'),
        ('2', '719670618736', 'Master of Philosophy in Civil and Environmental Engineering (Structures Option) (Part Time)'),
        ('2', '508711668196', 'Master of Philosophy in Management (Part Time)'),
        ('2', '415953323826', 'Doctor of Philosophy in Accounting (Part Time)'),
        ('2', '697178397136', 'Master of Philosophy in Organisation Behaviour (Part Time)'),
        ('2', '965429900744', 'Master of Philosophy in Mass Communications (Part Time)'),
        ('2', '353069548630', 'Master of Philosophy in Sports Administration/Mgt. (Part Time)'),
        ('2', '426713935074', 'Master of Philosophy in Systems Engineering (Full Time)'),
        ('2', '559528191807', 'Master of Philosophy in English Education (Full Time)'),
        ('2', '161991988498', 'Master of Philosophy in Statistics (Full Time)'),
        ('2', '745023851045', 'Master of Philosophy in Geography Education (Full Time)'),
        ('2', '990565579258', 'Master of Philosophy in Metallurgical and Materials Engineering (Full Time)'),
        ('2', '460431951221', 'Master of Philosophy in Exercise Physiology (Full Time)'),
        ('2', '916140069809', 'Master of Philosophy in Environmental Toxicology and Pollution Management (From First Degree)'),
        ('2', '220577752945', 'Master of Philosophy in Parasitology and Bioinformatics (From First Degree)'),
        ('2', '290476514861', 'Master of Philosophy in Applied Entomology and Pest Management (From First Degree)'),
        ('2', '956006222283', 'Master of Philosophy in Natural Resources Conservation (From First Degree)'),
        ('2', '369130429923', 'Master of Philosophy in Curriculum Theory (Full Time)'),
        ('2', '984626352491', 'Master of Philosophy in Public Health (Full Time)'),
        ('2', '203794752765', 'Master of Philosophy in Population Education (Full Time)'),
        ('2', '623406706917', 'Doctor of Philosophy in Toxicology (Full Time)'),
        ('2', '477110403092', 'Master of Philosophy in Quantity Surveying (Full Time)'),
        ('2', '522481225004', 'Doctor of Philosophy in Quantity Surveying (Full Time)'),
        ('2', '118187123885', 'Master of Philosophy in French Education (Full Time)'),
        ('2', '655022258725', 'Doctor of Philosophy in Economics Education (Full Time)'),
        ('2', '965588570217', 'Doctor of Philosophy in Biochemistry (Part Time)'),
        ('2', '871831521000', 'Doctor of Philosophy in English Literature Education (Full Time)'),
        ('2', '405010101667', 'Doctor of Philosophy in Geography Education (Full Time)'),
        ('2', '872405831925', 'Master of Philosophy in English Literature Education (Full Time)'),
        ('2', '537715969989', 'Doctor of Philosophy in Yoruba Education (Full Time)'),
        ('2', '916099253098', 'Master of Philosophy in Yoruba Education (Full Time)'),
        ('2', '300780216488', 'Doctor of Philosophy in History Education (Full Time)'),
        ('2', '192907850702', 'Doctor of Philosophy in Metallurgical and Materials Engineering (Part Time)'),
        ('2', '207572889273', 'Doctor of Philosophy in Cell Biology and Genetics (Genetics) (Part Time)'),
        ('2', '183176507148', 'Postgraduate Diploma in Risk Management'),
        ('2', '115564818143', 'Doctor of Philosophy in Religion Education (CRS) (Full Time)'),
        ('2', '796039160897', 'Doctor of Philosophy in Religion Education (IRS) (Full Time)'),
        ('2', '571646283581', 'Master of Philosophy in Religion Education (CRS) (Full Time)'),
        ('2', '832267596993', 'Master of Philosophy in Religion Education (IRS) (Full Time)'),
        ('2', '412068650451', 'Doctor of Philosophy in Analytical Chemistry (Full Time)'),
        ('2', '190257403287', 'Doctor of Philosophy in Analytical Chemistry (Part Time)'),
        ('2', '541887886449', 'Master of Philosophy in Analytical Chemistry (Part Time)'),
        ('2', '457044323707', 'Master of Philosophy in Chemistry (PartTime)'),
        ('2', '383021190571', 'Master of Science in Geophysics (Engineering Geophysics Option) (Full Time)'),
        ('2', '811079357342', 'Master of Philosophy in Civil and Environmental Engineering (Highways &amp; Traffic Option) (Full Time)'),
        ('2', '139523761782', 'Master of Philosophy in Civil and Environmental Engineering (Highways &amp; Traffic Option) (Part Time)'),
        ('2', '247072919353', 'Master of Philosophy in Analytical Chemistry (Full Time)'),
        ('2', '686250738033', 'Master of Philosophy in Technology Education (Automobile/Metal Work Technology Option) (Full Time)'),
        ('2', '647646375087', 'Master of Philosophy in Technology Education (Electrical/Electronic Technology Option) (Full Time)'),
        ('2', '373594718749', 'Master of Philosophy in Technology Education (Building/Woodwork Technology Option) (Full Time)'),
        ('2', '700422651036', 'Doctor of Philosophy in Technology Education (Automobile/Metal Work Technology Option) (Part Time)'),
        ('2', '146857733025', 'Doctor of Philosophy in Technology Education (Electrical/Electronic Technology Option) (Part Time)'),
        ('2', '229649777695', 'Doctor of Philosophy in Technology Education (Building/Woodwork Technology Option) (Part Time)'),
        ('2', '169306390548', 'Master of Philosophy in Sustainable Urbanization (Full Time)'),
        ('2', '506923826864', 'Master of Philosophy in Sustainable Urbanization (Part Time)'),
        ('2', '671896944858', 'Doctor of Philosophy in Sustainable Urbanization (Full Time)'),
        ('3', '7803984023', 'Bachelor of Science in Accounting'),
        ('3', '6749098340', 'Bachelor of Science in Actuarial Science '),
        ('3', '2562023923', 'Bachelor of Science in Insurance  (FullTime)'),
        ('3', '9923798834', 'Bachelor of Education in Adult Education'),
        ('3', '1289532302', 'Bachelor of Science in Architecture'),
        ('3', '2918921891', 'B.A. Ed. in English Education'),
        ('3', '8734983044', 'B.A. Ed. in French Education'),
        ('3', '1256879329', 'B.A. Ed. in History Education'),
        ('3', '8756182120', 'Bachelor of Arts in Igbo Education'),
        ('3', '8745674982', 'B.A. Ed. in Yoruba Education'),
        ('3', '9473948430', 'B.A. Ed. in Christian Religious Studies Education'),
        ('3', '5237879230', 'B.Sc Edu in Geography Education'),
        ('3', '4537433874', 'B.A. Ed. in Islamic Religious Studies Education'),
        ('3', '7473947364', 'Bachelor of Education in Economics Education'),
        ('3', '5945845854', 'Bachelor of Science Education in Business Education'),
        ('3', '8433480443', 'B.A. Ed. in Early Childhood Education'),
        ('3', '1312012212', 'Bachelor of Science in Finance'),
        ('3', '1208923823', 'Bachelor of Science in Biochemistry'),
        ('3', '4290121983', 'Bachelor of Science in Botany'),
        ('3', '3967871823', 'Bachelor of Science in Building'),
        ('3', '8379830911', 'Bachelor of Science in Quantity Surveying'),
        ('3', '6428798303', 'Bachelor of Science in Business Administration'),
        ('3', '5386792189', 'Bachelor of Science in Cell Biology and Genetics'),
        ('3', '9386238329', 'Bachelor of Science in Chemical Engineering'),
        ('3', '1212121121', 'Bachelor of Science in Petroleum and Gas Engineering'),
        ('3', '1232394723', 'Bachelor of Science in Chemistry'),
        ('3', '9843803493', 'Bachelor of Science in Civil Engineering'),
        ('3', '2478200232', 'Bachelor of Science in Computer Sciences'),
        ('3', '4758029302', 'Bachelor of Arts in Creative Arts'),
        ('3', '7123461319', 'Bachelor of Science in Economics'),
        ('3', '7295715675', 'B.A.ED.  in Educational  Administration'),
        ('3', '4061884454', 'Bachelor of Education in Guidance and Counselling'),
        ('3', '9427774501', 'Bachelor of Science in Electrical and Electronics Engineering'),
        ('3', '1940588197', 'Bachelor of Science in Computer Engineering'),
        ('3', '1621958941', 'Bachelor of Arts in English'),
        ('3', '5610854108', 'Bachelor of Science in Estate Management'),
        ('3', '4543201199', 'Bachelor of Arts in French'),
        ('3', '8239603000', 'Bachelor of Arts in Russian'),
        ('3', '2273169435', 'Bachelor of Science in Geography and Planning'),
        ('3', '9566253164', 'Bachelor of Science in Geology'),
        ('3', '9618908133', 'Bachelor of Science in Geophysics'),
        ('3', '8324768023', 'Bachelor of Arts in History and Strategic Studies'),
        ('3', '7829119620', 'Bachelor of Education in Human Kinetics'),
        ('3', '4753506460', 'Bachelor of Science in Industrial Relations &amp; Personnel Management'),
        ('3', '7844029834', 'Bachelor of Arts in Linguistics / Yoruba'),
        ('3', '9312439616', 'Bachelor of Arts in Linguistics / Igbo'),
        ('3', '3362752475', 'Bachelor of Laws'),
        ('3', '2219749016', 'Bachelor of Science in Marine Biology'),
        ('3', '7242434927', 'Bachelor of Science in Fisheries'),
        ('3', '3258273011', 'Bachelor of Science in Mass Communication'),
        ('3', '2806937154', 'Bachelor of Science in Mathematics'),
        ('3', '5589983068', 'Bachelor of Science in Mechanical Engineering'),
        ('3', '4291704424', 'Bachelor of Science in Metallurgical and Materials Engineering'),
        ('3', '3825286787', 'Bachelor of Science in Microbiology'),
        ('3', '9316835851', 'Bachelor of Arts in Philosoph'),
        ('3', '3999239485', 'Bachelor of Science in Physics'),
        ('3', '3602386163', 'Bachelor of Science in Political Science'),
        ('3', '4108540477', 'Bachelor of Science in Psychology'),
        ('3', '7233555441', 'Bachelor of Education in Biology Education'),
        ('3', '2653137522', 'Bachelor of Education in Chemistry'),
        ('3', '1171009214', 'Bachelor of Education in Mathematics Education'),
        ('3', '1159640153', 'Bachelor of Education in Physics Education'),
        ('3', '2519153043', 'Bachelor of Education in Technology Education'),
        ('3', '6000491727', 'Bachelor of Education in Home Economics'),
        ('3', '7108878858', 'Bachelor of Education in Integrated Science Education'),
        ('3', '3318805366', 'Bachelor of Science in Sociology'),
        ('3', '5214463313', 'Bachelor of Science in Social Work'),
        ('3', '6772825758', 'Bachelor of Science in Surveying and Geoinformatics'),
        ('3', '4236689684', 'Bachelor of Science in Systems Engineering'),
        ('3', '2251651743', 'Bachelor of Science in Urban and Regional Planning'),
        ('3', '4597377139', 'Bachelor of Science in Zoology'),
        ('3', '9917651889', 'Bachelor of Arts in Chinese Studies'),
        ('3', '2794264804', 'Bachelor of Arts in Creative Arts (Music)'),
        ('3', '2487508159', 'Bachelor of Arts in Creative Arts (Visual Arts)'),
        ('3', '1417402343', 'Bachelor of Education in Health Education'),
        ('3', '6450483218', 'Bachelor of Arts in Creative Arts (Theatre Arts)'),
        ('3', '2446585395', 'B.Sc Biomedical Engineering'),
        ('3', '6732155828', 'B.A. CHRISTIAN RELIGIOUS STUDIES'),
        ('3', '7169056540', 'B.A. ISLAMIC STUDIES');



-- CREATING CHILD OR SUB FACULTY

CREATE TABLE IF NOT EXISTS `Child__Faculty__tb`(
  `No` TINYINT(11) PRIMARY KEY AUTO_INCREMENT,
  `Product__id` VARCHAR(23) UNIQUE NOT NULL,
  `Child__faculty__ID` VARCHAR(50) NOT NULL,
  `Child__faculty__name` VARCHAR(250) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERTING INTO CHILD__FACULTY__TABLE

INSERT INTO `Child__Faculty__tb`(`No`, `Product__id`, `Child__faculty__ID`, `Child__faculty__name`) 
    VALUES('1', '98322', '10092', 'Anatomy'),
        ('2', '54485', '10092', 'Anatomic and Molecular Pathology'),
        ('3', '14342', '10092', 'Biochemistry'),
        ('4', '56965', '10092', 'Medical Laboratory Science (MEDLAB)'),
        ('5', '12103', '10092', 'Microbiology and Parasitology'),
        ('6', '84843', '10092', 'Pharmacology, Therapeutics and Toxicology'),
        ('7', '42602', '10092', 'Physiology'),
        ('8', '12108', '10227', 'European Language and Integration Studies'),
        ('9', '46379', '10227', 'Linguistics'),
        ('10', '28395', '10227', 'Philosophy'),
        ('11', '63493', '10227', 'Creative Arts'),
        ('12', '87329', '10227', 'English'),
        ('13', '52872', '10227', 'History and Strategic Studies'),
        ('14', '34034', '10406', 'Chemical Engineering'),
        ('15', '40393', '10406', 'Civil and Environmental Engineering'),
        ('16', '12120', '10406', 'Electrical & Electronics Engineering'),
        ('17', '93432', '10406', 'Mechanical Engineering'),
        ('18', '79240', '10406', 'System Engineering'),
        ('19', '48958', '10406', 'Surveying and Geo-informatics'),
        ('20', '23903', '10406', 'Metallurgical and Materials Engineering'),
        ('21', '35190', '13023', 'Adult Education'),
        ('22', '80231', '13023', 'Early Childhood Education'),
        ('23', '98509', '13023', 'Education Management'),
        ('24', '99643', '13023', 'Human Kinetics Education'),
        ('25', '99123', '13023', 'Arts and Social Science Education'),
        ('26', '90233', '13023', 'Science and Technology Education'),
        ('27', '79438', '19034', 'Architecture'), 
        ('28', '90823', '19034', 'Building'),
        ('29', '21849', '19034', 'Estate Management'),
        ('30', '54899', '19034', 'Quantity Surveying'),
        ('31', '56472', '19034', 'Urban and Regional Planning'),
        ('32', '73409', '10992', 'Commercial and Industrial Law'),
        ('33', '77832', '10992', 'Jurisprudence and International Law'),
        ('34', '74944', '10992', 'Private and Property Law'),
        ('35', '98445', '10992', 'Public Law'),
        ('36', '92814', '11043', 'Economics'),
        ('37', '40009', '11043', 'Geography'),
        ('38', '80943', '11043', 'Mass Communication'),
        ('39', '89845', '11043', 'Political Science'),
        ('40', '95845', '11043', 'Psychology'),
        ('41', '19857', '11043', 'Social Work'),
        ('42', '98544', '11043', 'Sociology'),
        ('43', '79803', '10293', 'Biochemistry'),
        ('44', '98948', '10293', 'Botany'),
        ('45', '32395', '10293', 'Cell Biology & Genetics'),
        ('46', '64358', '10293', 'Chemistry'),
        ('47', '76444', '10293', 'Computer Sciences'),
        ('48', '54892', '10293', 'Geoscience'),
        ('49', '67823', '10293', 'Marine Sciences'),
        ('50', '23984', '10293', 'Mathematics'),
        ('51', '67954', '10293', 'Microbiology'),
        ('52', '93488', '10293', 'Physics'),
        ('53', '88945', '10293', 'Zoology'),
        ('54', '83408', '18053', 'Accounting'),
        ('55', '65099', '18053', 'Actuarial Science and Insurance'),
        ('56', '86509', '18053', 'Banking and Finance'),
        ('57', '65980', '18053', 'Business Administration'),
        ('58', '54798', '18053', 'Industrial Relations & Personnel Management'),
        ('59', '14803', '10987', 'Pharmacy'),
        ('60', '91020', '74768', 'Agric Animal Science'),
        ('61', '18232', '74768', 'Agric Crop Science'),
        ('62', '12002', '74768', 'Agricultural Economics and Agro-Business'),
        ('63', '12923', '74768', 'Agricultural Extension and Rural Development'),
        ('64', '12777', '74768', 'Agric Soil and Land Resources Management'),
        ('65', '37843', '10987', 'Library and Information Science'),
        ('66', '96741', '74768', 'Health Education'),
        ('67', '67299', '74768', 'Business Education'),
        ('68', '28732', '74768', 'English'),
        ('69', '23700', '74768', 'French'),
        ('70', '78210', '10293', 'Statistics'),
        ('71', '68000', '10293', 'Information Technology'),
        ('72', '21673', '10293', 'Environmental Management and Toxicology'),
        ('73', '87388', '10293', 'Environmental Science and Resource Management');

-- CREATING PRODUCT TABLE WHICH REPRESENT COURSE__TABLE

CREATE TABLE IF NOT EXISTS `Categories`(
`Category__ID` TINYINT(11) PRIMARY KEY AUTO_INCREMENT, 
`Category__name` VARCHAR (255) NOT NULL,
`Parent` TINYINT(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERTING INTO COURSE CATEGORY

INSERT INTO `Categories` (`Category__ID`, `Category__name`, `Parent`) 
VALUES('1', 'Distance Learning Institute', '0'),
      ('2', 'Postgraduate', '0'),
      ('3', 'Undergraduate', '0');

      -- creating a programs table
CREATE TABLE IF NOT EXISTS `Program`(
  `No` MEDIUMINT(10) AUTO_INCREMENT PRIMARY KEY,
  `Program__ID` VARCHAR(70)  UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Program__name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Updated__On` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- inserting into Program table
INSERT INTO `Program` (`No`, `Program__ID`, `Program__name`, `Updated__On`) 
        VALUES('1', '10293', 'Master Degree (Ms)', '1620-04-13 12:11:30'),
              ('2', '10992', 'Bachelor Degree (BSc)', '2010-02-23 09:19:30'),
              ('3', '10406', 'College Degree (DC)', '1813-10-12 11:03:22');
              
CREATE TABLE IF NOT EXISTS `Mode__of__study`(
  `No` TINYINT(10) AUTO_INCREMENT PRIMARY KEY,
  `Mode__name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Updated__On` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Mode__of__study`(`No`, `Mode__name`, `Updated__On`) 
      VALUES('1', 'Full Time (FT)', '1710-04-13 12:11:30'),
            ('2', 'Part Time (PT)', '1890-02-23 09:19:30'),
            ('3', 'Online Program', '1940-10-12 11:03:22');

CREATE TABLE IF NOT EXISTS `Fees__Amount`(
  `No` TINYINT(11) AUTO_INCREMENT PRIMARY KEY,
  `Reg__Course__ID` VARCHAR(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` DECIMAL(10, 2) NOT NULL,
  `Updated__On` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Fees__Amount`(`No`, `Reg__Course__ID`, `Amount`, `Updated__On`) 
      VALUES('1', '10293', '75.000', '1710-04-13 12:11:30'),
            ('2', '10293', '55.000', '1710-04-13 12:11:30'),
            ('3', '10992', '63.000', '1710-04-13 12:11:30'),
            ('4', '10992', '70.000', '1710-04-13 12:11:30'),
            ('5', '10406', '60.000', '1710-04-13 12:11:30'),
            ('6', '10406', '90.000', '1710-04-13 12:11:30');


CREATE TABLE IF NOT EXISTS `Subject__Grade`(
  `No` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `Subject__ID` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject__name` VARCHAR (200) NOT NULL,
  `Min__Grade` VARCHAR(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Compulsory__ID` INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Updated__On` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Entry__Level__tb`(
`No` INT(11) PRIMARY KEY AUTO_INCREMENT,
`Entry__level__Name` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
`Update__On` DATETIME 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Entry__Level__tb`(`No`, `Entry__level__Name`, `Update__On`) 
          VALUES('1', '100 Level', '2020-08-13 07:11:30'),
                ('2', '200 Level (DIRECT ENTRY)', '1710-04-13 02:12:06');

CREATE TABLE IF NOT EXISTS `Session`(
  `No` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `session` VARCHAR(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `session` (`No`, `session`)
  VALUES
  ('1','2020/2021'),
  ('2', '2021/2022'),
  ('3', '2022/2023'),
  ('4', '2023/2024'),
  ('5', '2024/2025'),
  ('6', '2025/2026'),
  ('7', '2026/2027'),
  ('8', '2027/2028'),
  ('9', '2028/2029'),
  ('10', '2029/2030');


-- CREATE BLOGNEW FOR STUDENT
CREATE TABLE IF NOT EXISTS `midtechserver`.`schoolblog` ( 
    `#` INT(10) NOT NULL AUTO_INCREMENT , 
    `Post_id` VARCHAR(200) NOT NULL , 
    `User_id` VARCHAR(200) NOT NULL , 
    `img` VARCHAR(255) NOT NULL , 
    `body` TEXT NOT NULL , 
    `created_At` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`#`)
) ENGINE = InnoDB;

CREATE TABLE `midtechserver`.`blogcomments` ( 
    `#` INT (10)NOT NULL AUTO_INCREMENT , 
    -- `comment_id` INT (10)NOT NULL, 
    -- the c_token will serve as Comment ID.
    `c_token` VARCHAR(200) NOT NULL,
    `Post_id` VARCHAR(200) NOT NULL , 
    `User_id` VARCHAR(200) NOT NULL , 
    `body` TEXT NOT NULL , 
    `created_at` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`#`)
) ENGINE = InnoDB;

-- CREATE ZOOM TABLE 
 CREATE TABLE IF NOT EXISTS `ZoomSchedule`(
     `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
     `HosterID` VARCHAR (100) NOT NULL,
     `Zoom__Topic` TEXT NOT NULL,
     `Scheduled__TIME` VARCHAR (100) NOT NULL,
     `Duration` VARCHAR (200) NOT NULL,
     `Zoom_ID` VARCHAR (100) NOT NULL,
     `Zoom__link` VARCHAR (250) NOT NULL,
     `Zoom__Password` VARCHAR (70) NOT NULL,
     `time` DATETIME
 )ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `ZoomSchedule` ADD INDEX(`HosterID`);

ALTER TABLE `Super__administrator` ADD INDEX(`Email`);
ALTER TABLE `Super__administrator` ADD INDEX(`Username`);
ALTER TABLE `Super__administrator` ADD INDEX(`Gender`);

ALTER TABLE `Categories` ADD INDEX(`Parent`);
ALTER TABLE `Categories` ADD UNIQUE (`Category__ID`);

ALTER TABLE `Faculty__tb` ADD UNIQUE(`Faculty__ID`);

ALTER TABLE `Child__Faculty__tb` ADD INDEX(`Child__faculty__ID`);

ALTER TABLE `Subject__Grade` ADD INDEX (`Compulsory__ID`);

ALTER TABLE `Fees__Amount` ADD INDEX(`Reg__Course__ID`);

ALTER TABLE `Required__Subjects` ADD INDEX (`Subject__Id`);
ALTER TABLE `Required__Subjects` ADD INDEX (`Compulsory__Sub_Id`);

ALTER TABLE `Student__Account` ADD INDEX(`Surname`);
ALTER TABLE `Student__Account` ADD INDEX(`othername`);
ALTER TABLE `Student__Account` ADD INDEX(`email`);

ALTER TABLE `Lecturals` ADD INDEX(`Profile__Picture`);

ALTER TABLE `Lecturals` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;

ALTER TABLE `Non__Staffs` ADD INDEX(`Department`);
ALTER TABLE `Non__Staffs` ADD INDEX(`Profile___Picture`);
ALTER TABLE `Non__Staffs` ADD INDEX(`Joining___Date`);

ALTER TABLE `Library__tb` ADD INDEX(`Object__ID`);

ALTER TABLE `accountant` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `accountant` ADD `Department` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Accountant' AFTER `Religion`;

ALTER TABLE `Non__Staffs` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `Staff` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `human_resources` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `Student__Account` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `Parent__tb` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;