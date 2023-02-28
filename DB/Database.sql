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

CREATE TABLE IF NOT EXISTS `userManager`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `Id` INT(11) UNIQUE NOT NULL,
    `UserId` INT (10) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Level` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;
 
 INSERT INTO `userManager`(`Id`, `UserId`,`Level`)VALUE('1', '8798112', 'Super Admin');
 INSERT INTO `userManager`(`Id`, `UserId`, `Level`)VALUE('2','5327428', 'Admin');
 INSERT INTO `userManager`(`Id`, `UserId`, `Level`)VALUE('3','4358395', 'Accountant');

CREATE TABLE IF NOT EXISTS `SchoolEvent`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `EventId` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Title` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `EventTag` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `EventBody` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `EventDate` DATETIME COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATE ATTENDANCE TABLE
CREATE TABLE IF NOT EXISTS `Attendance`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    StudentID INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    DepartmentID INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    ClassID INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    SemesterID INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    CourseID INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Status` INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Date` Date,
	CONSTRAINT FK_Course FOREIGN KEY (CourseID)
    REFERENCES Courses(CourseID)
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- CREATE LECTURAL/PROFESSOR TABLE

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

-- CREATING ALL EMAIL MESSAGES TABLE 
CREATE TABLE IF NOT EXISTS `EmailBox`(
    `#` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
    `EmailID` VARCHAR(250) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `SenderID` VARCHAR(60) COLLATE utf8mb4_unicode_ci NOT NULL,
    `RecipientID` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `SenderName` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `SenderMail` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `RecipientEmail` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `RecipientName` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Subject` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `message` TEXT COLLATE utf8mb4_unicode_ci NOT NULL,
    `Time` DATETIME COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `EmailBox` ADD `parent` INT(10) NOT NULL DEFAULT '0' AFTER `message`;
-- CREATING Student Table 

CREATE TABLE IF NOT EXISTS `Student__Account`(
    `No` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `student__Id` VARCHAR(220) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Conid` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Roll__No` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
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
    `settings` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `active` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Onlinestatus` VARCHAR (100) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS StudentApp(
    `No` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `Conid` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Application_id` INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Faculty_id` INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Department_id` INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Program__Type` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `NIN` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
    `Entrylevel` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `Class` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    CONSTRAINT Cl_ClassConnection FOREIGN KEY (AppId)
    REFERENCES Student__Account(Conid)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE StudentApp ADD UNIQUE(Conid);

CREATE TABLE IF NOT EXISTS HEALTHDETAILS(
    counter INT(11) PRIMARY KEY AUTO_INCREMENT,
    ID VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Blood_Group VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Height VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Weight VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE HEALTHDETAILS ADD UNIQUE(ID);

CREATE TABLE IF NOT EXISTS Documents(
    # INT(11) PRIMARY KEY AUTO_INCREMENT,
    ID VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Doc_Category VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Document_Name VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Doc_File MEDIUMBLOB 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE Documents ADD UNIQUE(ID);

CREATE TABLE IF NOT EXISTS AcedemicDetails(
    # INT(11) PRIMARY KEY AUTO_INCREMENT,
    ID VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Standard VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Division VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Admission_No VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    Joining_Date DATE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE AcedemicDetails ADD UNIQUE(ID);

-- CREATING HUMAN RESOURCES TABLE [HR TABLE]

CREATE TABLE IF NOT EXISTS `humanresources`(
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

-- CREATING Non Parent TABLE(NOTE::)the parent id is a unique id that reference student__tb > Parent__OR__Guadian__ID that way we an able to find or filter parent and student details when needed.

CREATE TABLE IF NOT EXISTS `Parent__tb`(
  `No` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
  `Parent___id` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `child__id` VARCHAR(50) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentEmail` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Parentfeatured` INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentPassword` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentGender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentDOB` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` TEXT,
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

-- CREATING ADMIN TABLE

CREATE TABLE IF NOT EXISTS `users`(
  `No` TINYINT(10) PRIMARY KEY AUTO_INCREMENT,
  `Admin__id` VARCHAR(100) UNIQUE COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Othername` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_on` DATETIME, 
  `last_login` DATETIME, 
  `Role` INT(11) COLLATE utf8mb4_unicode_ci UNIQUE NOT NULL,
  `Profile___Picture` VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- INSERT INTO superadmin table

INSERT INTO `users` (`No`, `Admin__id`, `Surname`, `Othername`, `Email`, `username`, `password`, `Gender`, `Mobile`,  `last_login`, `Create_on`, `Role`, `Profile___Picture`)
 VALUES('1', '8798112', 'David', 'Akpele', 'admin@aol.com', 'Admin', '$argon2id$v=19$m=65536,t=4,p=1$SW91dkNXZkVVTFYuNE52SQ$vSEyPtRqsTwYiMspuOly3244f6fPW0qwdaGyrWFOltA', 'Male', '+(234) 906-9888-05', '2021-04-3 00:00:00', '2021-04-3 00:00:00', '1', 'http://localhost/school/public/assets/img/profile.jpg');
ALTER TABLE `users` ADD INDEX(`Email`);
ALTER TABLE `users` ADD INDEX(`Username`);
ALTER TABLE `users` ADD INDEX(`Gender`);

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
  `Cat_id` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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

-- CREATING FACULTY TABLE
CREATE TABLE IF NOT EXISTS `Faculties`(
  `FacultyID` INT AUTO_INCREMENT PRIMARY KEY,
  `Cat_id` VARCHAR (50) NOT NULL,
  `FacultyName` VARCHAR(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FacultyHead` INT(10), 
  `Parent` INT(10) DEFAULT '0' NOT NULL,
  `Created_date` DATETIME 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERTING INTO FACULTY TABLE
INSERT INTO `Faculties`(`Cat_id`, `FacultyName`, `FacultyHead`, `Created_date`) VALUES
('1', 'Faculty of Basic Medical Science (BMS)', NULL, '1232-02-12 06:40:21'),
-- ('2,3', 'Faculty of Veterinary Medicine', NULL, '1232-02-12 06:40:21'),
('1', 'Faculty of  Public Health', NULL, '1232-02-12 06:40:21'),
('1', 'Faculty of Social Science', NULL, '1232-02-12 06:40:21'),
('1', 'Faculty of Engineering/Env', NULL, '1232-02-12 06:40:21'),
-- ('2,3', 'Faculty of Pharmacy', NULL, '1232-02-12 06:40:21'),
('1', 'Faculty of Education', NULL, '1232-02-12 06:40:21'),
('1', 'Faculty of Science', NULL, '1232-02-12 06:40:21'),
('1', 'Faculty of Art', NULL, '1232-02-12 06:40:21'),
-- ('2,3', 'Faculty of Agriculture', NULL, '1232-02-12 06:40:21'),
-- ('2,3', 'Faculty of Law', NULL, '1232-02-12 06:40:21'),
('1','Faculty of Technology', NULL, '1232-02-12 06:40:21'),
('1','Faculty of Administrator', NULL, '1232-02-12 06:40:21'),

('2', 'Faculty of Basic Medical Science (BMS)', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Veterinary Medicine', NULL, '1232-02-12 06:40:21'),
-- ('1,3', 'Faculty of  Public Health', NULL, '1232-02-12 06:40:21'),
-- ('1,3', 'Faculty of Social Science', NULL, '1232-02-12 06:40:21'),
-- ('1,3', 'Faculty of Engineering/Env', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Pharmacy', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Education', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Science', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Art', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Agriculture', NULL, '1232-02-12 06:40:21'),
('2', 'Faculty of Law', NULL, '1232-02-12 06:40:21'),
-- ('1,3','Faculty of Physical Sciences', NULL, '1232-02-12 06:40:21'),
-- ('1,3','Faculty of Administrator', NULL, '1232-02-12 06:40:21');

('3', 'Faculty of Basic Medical Science (BMS)', NULL, '1232-02-12 06:40:21'),
-- ('3', 'Faculty of Veterinary Medicine', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Public Health', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Social Science', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Engineering/Env', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Pharmacy', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Education', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Science', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Art', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Agriculture', NULL, '1232-02-12 06:40:21'),
('3', 'Faculty of Law', NULL, '1232-02-12 06:40:21'),
('3','Faculty of Technology', NULL, '1232-02-12 06:40:21'),
('3','Faculty of Administrator', NULL, '1232-02-12 06:40:21');
CREATE TABLE Departments(
	DepartmentID INT AUTO_INCREMENT PRIMARY KEY,
	DepartmentName CHAR(100) NOT NULL,
	DepartmentHead INT(10),
	FacultyID INT(10),
	CONSTRAINT FK_Faculties FOREIGN KEY (FacultyID)
    REFERENCES Faculties(FacultyID)
);

INSERT INTO Departments(DepartmentName, DepartmentHead, FacultyID)VALUES
-- faculty of medical sciences
('Anatomy', NULL, 1),
('Anaesthesia', NULL, 1),
('Chemical Pathology', NULL, 1),
('Community Medicine', NULL, 1),
('Dermatology', NULL, 1),
('Haematology and Immunology', NULL, 1),
('Medical Biochemistry', NULL, 1),
('Medical Microbiology', NULL, 1),
('Medicine', NULL, 1),
('Morbid Anatomy', NULL, 1),
('Obstetrics and Gynaecology', NULL, 1),
('Ophathalmology', NULL, 1),
('Otalaryngology', NULL, 1),
('Paediatrics', NULL, 1),
('Pharmachology and Therapeutics', NULL, 1),
('Physiology', NULL, 1),
('Radiation Medicine', NULL, 1),
('Surgery', NULL, 1),
('Psychological Medicine', NULL, 1),
('Child Dental Health', NULL, 1),
-- faculty of medical sciences
('Anatomy', NULL, 14),
('Anaesthesia', NULL, 14),
('Chemical Pathology', NULL, 14),
('Community Medicine', NULL, 14),
('Dermatology', NULL, 14),
('Haematology and Immunology', NULL, 14),
('Medical Biochemistry', NULL, 14),
('Medical Microbiology', NULL, 14),
('Medicine', NULL, 14),
('Morbid Anatomy', NULL, 14),
('Obstetrics and Gynaecology', NULL, 14),
('Ophathalmology', NULL, 14),
('Otalaryngology', NULL, 14),
('Paediatrics', NULL, 14),
('Pharmachology and Therapeutics', NULL, 14),
('Physiology', NULL, 14),
('Radiation Medicine', NULL, 14),
('Surgery', NULL, 14),
('Psychological Medicine', NULL, 14),
('Child Dental Health', NULL, 14),
-- faculty of medical sciences
('Community Medicine', NULL, 2),
('Environmental Health Sciences', NULL, 2),
('Epidemiology and Medical Statistics', NULL, 2),
('Health Promotion and Education', NULL, 2),
('Health Policy & Management', NULL, 2),
('Institute of Child Health', NULL, 2),
('Human Nutrition', NULL, 2),
-- Faculty of Public Health
('Community Medicine', NULL, 20),
('Environmental Health Sciences', NULL, 20),
('Epidemiology and Medical Statistics', NULL, 20),
('Health Promotion and Education', NULL, 20),
('Health Policy & Management', NULL, 20),
('Institute of Child Health', NULL, 20),
('Human Nutrition', NULL, 20),
-- Veterinary
('Veterinary Physiology / Pharmacology', NULL, 11),
('Veterinary Anatomy', NULL, 11),
('Veterinary Parasitology and Entomology', NULL, 11),
('Veterianry Pathology and Microbiology', NULL, 11),
('Veterinary Public Health and Preventive Medicine', NULL, 11),
('Veterinary Surgery', NULL, 11),
('Veterinary Medicine', NULL, 11),
('Veterinary Obstetrics and Reproductive Diseases', NULL, 11),
('Veterinary Teaching Hospital', NULL, 11),
-- Veterinary
('Veterinary Physiology / Pharmacology', NULL, 20),
('Veterinary Anatomy', NULL, 20),
('Veterinary Parasitology and Entomology', NULL, 20),
('Veterianry Pathology and Microbiology', NULL, 20),
('Veterinary Public Health and Preventive Medicine', NULL, 20),
('Veterinary Surgery', NULL, 20),
('Veterinary Medicine', NULL, 20),
('Veterinary Obstetrics and Reproductive Diseases', NULL, 20),
('Veterinary Teaching Hospital', NULL, 20),
-- faculty of scocial sciences
('Economics', NULL, 3),
('Geography', NULL, 3),
('Philosophy', NULL, 3),
('Politica Science', NULL, 3),
('Phychology', NULL, 3),
('Public Administratin and Local Government', NULL, 3),
('Social Work', NULL, 3),
('Sociology / Anthropology', NULL, 3),
-- faculty of scocial sciences
('Economics', NULL, 21),
('Geography', NULL, 21),
('Philosophy', NULL, 21),
('Politica Science', NULL, 21),
('Phychology', NULL, 21),
('Public Administratin and Local Government', NULL, 21),
('Social Work', NULL, 21),
('Sociology / Anthropology', NULL, 21),
-- Engineering
('Agricultural and Bioresources Engineering', NULL, 4),
('Civil Engineering', NULL, 4),
('Chemical Engineering', NULL, 4),
('Computer Engineering', NULL, 4),
('Electrical Engineering', NULL, 4),
('Electronic Engineering', NULL, 4),
('Marine Engineering', NULL, 4),
('Mechanical Engineering', NULL, 4),
('Metallurgical And Materials Engineering', NULL, 4),
('Petroleum And Gass Engineering', NULL, 4),
('System Engineering', NULL, 4),
('Production And Industrial Engineering', NULL, 4),
-- Engineering
('Agricultural and Bioresources Engineering', NULL, 22),
('Civil Engineering', NULL, 22),
('Chemical Engineering', NULL, 22),
('Computer Engineering', NULL, 22),
('Electrical Engineering', NULL, 22),
('Electronic Engineering', NULL, 22),
('Marine Engineering', NULL, 22),
('Mechanical Engineering', NULL, 22),
('Metallurgical And Materials Engineering', NULL, 22),
('Petroleum And Gass Engineering', NULL, 22),
('System Engineering', NULL, 22),
('Production And Industrial Engineering', NULL, 22),
-- faculty of pharmaceutical sciences
('Clinical Pharmacy and Pharmacy Management', NULL, 12),
('Pharmaceutical Chemistry and Industrial Pharmacy', NULL, 12),
('Pharmaceutical Technology and Industrial Pharmacy', NULL, 12),
('Pharmaceutics', NULL, 12),
('Pharmacognosy', NULL, 12),
('Public Administratin and Local Government', NULL, 12),
('Department of Pharmacology and Toxicaology', NULL, 12),
-- faculty of pharmaceutical sciences
('Clinical Pharmacy and Pharmacy Management', NULL, 23),
('Pharmaceutical Chemistry and Industrial Pharmacy', NULL, 23),
('Pharmaceutical Technology and Industrial Pharmacy', NULL, 23),
('Pharmaceutics', NULL, 23),
('Pharmacognosy', NULL, 23),
('Public Administratin and Local Government', NULL, 23),
('Department of Pharmacology and Toxicaology', NULL, 23),
-- Education
('Adult Education and Extra-maural Studies', NULL, 5),
('Arts Education', NULL, 5),
('Education & Accountancy', NULL, 5),
('Educatin & Computer Science', NULL, 5),
('Educaiton & Economics', NULL, 5),
('Education & Mathematics', NULL, 5),
('Education & Physics', NULL, 5),
('Education & Relgious Studies', NULL, 5),
('Education and Biology', NULL, 5),
('Education and Chemisty', NULL, 5),
('Education and French', NULL, 5),
('Eduction and Geography / Physcics', NULL, 5),
('Education and Political Science', NULL, 5),
('Educational Foundation', NULL, 5),
('Eduacation / Phychlogy Guidance and Counselling', NULL, 5),
('Health adn Physical Education', NULL, 5),
('Library and Information Science', NULL, 5),
('Science Education', NULL, 5),
('Social Sciences Educaiton', NULL, 5),
('Vocational Teacher Education (Technical Education)', NULL, 5),
('Religion', NULL, 5),
('Igbo Linguistics', NULL, 5),
-- Education
('Adult Education and Extra-maural Studies', NULL, 13),
('Arts Education', NULL, 13),
('Education & Accountancy', NULL, 13),
('Educatin & Computer Science', NULL, 13),
('Educaiton & Economics', NULL, 13),
('Education & Mathematics', NULL, 13),
('Education & Physics', NULL, 13),
('Education & Relgious Studies', NULL, 13),
('Education and Biology', NULL, 13),
('Education and Chemisty', NULL, 13),
('Education and French', NULL, 13),
('Eduction and Geography / Physcics', NULL, 13),
('Education and Political Science', NULL, 13),
('Educational Foundation', NULL, 13),
('Eduacation / Phychlogy Guidance and Counselling', NULL, 13),
('Health adn Physical Education', NULL, 13),
('Library and Information Science', NULL, 13),
('Science Education', NULL, 13),
('Social Sciences Educaiton', NULL, 13),
('Vocational Teacher Education (Technical Education)', NULL, 13),
('Religion', NULL, 13),
('Igbo Linguistics', NULL, 13),
-- Education
('Adult Education and Extra-maural Studies', NULL, 25),
('Arts Education', NULL, 25),
('Education & Accountancy', NULL, 25),
('Educatin & Computer Science', NULL, 25),
('Educaiton & Economics', NULL, 25),
('Education & Mathematics', NULL, 25),
('Education & Physics', NULL, 25),
('Education & Relgious Studies', NULL, 25),
('Education and Biology', NULL, 25),
('Education and Chemisty', NULL, 25),
('Education and French', NULL, 25),
('Eduction and Geography / Physcics', NULL, 25),
('Education and Political Science', NULL, 25),
('Educational Foundation', NULL, 25),
('Eduacation / Phychlogy Guidance and Counselling', NULL, 25),
('Health adn Physical Education', NULL, 25),
('Library and Information Science', NULL, 25),
('Science Education', NULL, 25),
('Social Sciences Educaiton', NULL, 25),
('Vocational Teacher Education (Technical Education)', NULL, 25),
('Religion', NULL, 25),
('Igbo Linguistics', NULL, 25),
-- Faculty of science
('Chemical Science', NULL, 6),
('Zoology & Environmental Biology', NULL, 6),
('Earth Science', NULL, 6),
('Plant Science', NULL, 6),
-- Faculty of science
('Chemical Science', NULL, 14),
('Zoology & Environmental Biology', NULL, 14),
('Earth Science', NULL, 14),
('Plant Science', NULL, 14),
-- Faculty of science
('Chemical Science', NULL, 25),
('Zoology & Environmental Biology', NULL, 25),
('Earth Science', NULL, 25),
('Plant Science', NULL, 25),
-- faculty of Arts
('Archaeology and Tourism', NULL, 7),
('Arabic and lslamic Studies', NULL, 7),
('Christian Religious Studies', NULL, 7),
('English and Literary Studies', NULL, 7),
('Fine and Applied Arts (creative arts)', NULL, 7),
('Foreign Languageses and Literature', NULL, 7),
('History and International Studies', NULL, 7),
('Linguistics and Nigrian Languages', NULL, 7),
('Mass Communicatin (Communication and Language Arts)', NULL, 7),
('Music', NULL, 7),
('Theater and Film Studies', NULL, 7),
-- faculty of Arts
('Archaeology and Tourism', NULL, 15),
('Arabic and lslamic Studies', NULL, 15),
('Christian Religious Studies', NULL, 15),
('English and Literary Studies', NULL, 15),
('Fine and Applied Arts (creative arts)', NULL, 15),
('Foreign Languageses and Literature', NULL, 15),
('History and International Studies', NULL, 15),
('Linguistics and Nigrian Languages', NULL, 15),
('Mass Communicatin (Communication and Language Arts)', NULL, 15),
('Music', NULL, 15),
('Theater and Film Studies', NULL, 15),
-- faculty of Arts
('Archaeology and Tourism', NULL, 26),
('Arabic and lslamic Studies', NULL, 26),
('Christian Religious Studies', NULL, 26),
('English and Literary Studies', NULL, 26),
('Fine and Applied Arts (creative arts)', NULL, 26),
('Foreign Languageses and Literature', NULL, 26),
('History and International Studies', NULL, 26),
('Linguistics and Nigrian Languages', NULL, 26),
('Mass Communicatin (Communication and Language Arts)', NULL, 26),
('Music', NULL, 26),
('Theater and Film Studies', NULL, 26),
-- Agric
('Agriculture', NULL, 16),
('Agricultural Economics & Agricultual Extensions', NULL, 16),
('Agronomy', NULL, 16),
('Animal Science', NULL, 16),
('Fisheries', NULL, 16),
('Forest Resources Managemant (Forestry)', NULL, 16),
('Home Science, Nutrition and Dietetics', NULL, 16),
('Crop Science', NULL, 16),
('Food Science and Technology', NULL, 16),
('Soil Science', NULL, 16),
-- Agric
('Agriculture', NULL, 27),
('Agricultural Economics & Agricultual Extensions', NULL, 27),
('Agronomy', NULL, 27),
('Animal Science', NULL, 27),
('Fisheries', NULL, 27),
('Forest Resources Managemant (Forestry)', NULL, 27),
('Home Science, Nutrition and Dietetics', NULL, 27),
('Crop Science', NULL, 27),
('Food Science and Technology', NULL, 27),
('Soil Science', NULL, 27),
-- faculty of law
('Commercial and Property Law', NULL, 17),
('International an jurisprudence', NULL, 17),
('Private and Public Law', NULL, 17),
-- faculty of law
('Commercial and Property Law', NULL, 28),
('International an jurisprudence', NULL, 28),
('Private and Public Law', NULL, 28),

-- Faculty of Management Studies
('Accountancy', NULL, 9),
('Actuarial Science', NULL, 9),
('Business Administration', NULL, 9),
('Business Management', NULL, 9),
('Banking and Finance', NULL, 9),
('Hospitality and Tourism', NULL, 9),
('Marketing', NULL, 9),
('Insurance', NULL, 9),
('Industrial Relations and Personnel Management', NULL, 9),
-- FACULTY OF TECHNOLOGY
('Electrical And Electronic Engineering', NULL, 8),
('Mechanical Engineering', NULL, 8),
('Industrial And Production Engineering', NULL, 8),
-- FACULTY OF TECHNOLOGY
('Electrical And Electronic Engineering', NULL, 29),
('Mechanical Engineering', NULL, 29),
('Industrial And Production Engineering', NULL, 29),
-- Faculty of Management Studies
('Accountancy', NULL, 30),
('Actuarial Science', NULL, 30),
('Business Administration', NULL, 30),
('Business Management', NULL, 30),
('Banking and Finance', NULL, 30),
('Hospitality and Tourism', NULL, 30),
('Marketing', NULL, 30),
('Insurance', NULL, 30),
('Industrial Relations and Personnel Management', NULL, 30);

-- CREATING COURSE TABLE
CREATE TABLE IF NOT EXISTS Courses(
    CourseID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    DepartmentID INT (10) COLLATE utf8mb4_unicode_ci NOT NULL,
    ClassID INT (10) COLLATE utf8mb4_unicode_ci,
    SemesterID INT (10) COLLATE utf8mb4_unicode_ci,
    CourseCode VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    CourseTitle VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    CourseUnit INT(10) COLLATE utf8mb4_unicode_ci NOT NULL,
    CourseStatus VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO Courses(DepartmentID, ClassID, SemesterID, CourseCode, CourseTitle, CourseUnit, CourseStatus)
VALUES
-- 100 LEVEL
    ('1', '1', '1', 'GST 101', 'Use of English and Communication Skills I', '2', 'C'),
    ('1', '1', '1', 'CIT 101', 'Computers in Society', '2', 'C'),
    ('1', '1', '1', 'GST 121', 'Use of Library', '1', 'C'),
    ('1', '1', '1', 'GST 105', 'History and Philosophy of Science', '2', 'C'),
    ('1', '1', '1', 'BIO 101', 'General Biology I', '2', 'C'),
    ('1', '1', '1', 'BIO 191', 'Practical Biology', '1', 'C'),
    ('1', '1', '1', 'CHM 101', 'Introduction to Inorganic Chemistry I', '2', 'C'),
    ('1', '1', '1', 'CHM 191', 'Practical Chemistry I', '1', 'C'),
    ('1', '1', '1', 'AGR 101', 'Mathematics for Agriculture I', '2', 'C'),
    ('1', '1', '1', 'PHY 121', 'General Physics', '2', 'C'),
    ('1', '1', '1', 'PHY 191', 'General Physics I', '1', 'C'),
    ('1', '1', '1', 'CHM131', 'Organic Chemistry for Agriculture I', '2', 'C'),
-- Sub Total Credit Unit = 20
    ('1', '1', '2', 'GST 102', 'Use of English and Communication Skills II', '2', 'C'),
    ('1', '1', '2', 'CHM 132', 'Organic Chemistry for Agriculture II', '2', 'C'),
    ('1', '1', '2', 'BIO 102', 'General Biology II', '2', 'C'),
    ('1', '1', '2', 'CHM 192', 'ntroductory Practical Chemistry II', '1', 'C'),
    ('1', '1', '2', 'PHY 192', 'Practical Physics II', '1', 'C'),
    ('1', '1', '2', 'BIO 192', 'Practical Biology', '1', 'C'),
    ('1', '1', '2', 'AGR 102', 'Mathematics for Agriculture II', '2', 'C'),
    ('1', '1', '2', 'CHM 102', 'Physical Chemistry', '2', 'C'),
    ('1', '1', '2', 'GST 104', 'Introduction to Social Sciences', '2', 'C'),
-- Sub Total Credit Unit = 15
-- 
-- Total credit units for 100 level course = 35

-- 200 LEVEL
    ('1', '2', '1', 'ARD 201', 'Principles of Agricultural Extension', '2', 'C'),
    ('1', '2', '1', 'AEA 251', 'Introduction to Agricultural Economics', '2', 'C'),
    ('1', '2', '1', 'AGR 201', 'General Agriculture', '3', 'C'),
    ('1', '2', '1', 'ARD 203', 'Introduction to Home Economics', '2', 'C'),
    ('1', '2', '1', 'SLM 201', 'Principles of Soil Science', '2', 'C'),
    ('1', '2', '1', 'AGR 203', 'Principles of Crop Production', '2', 'C'),
    ('1', '2', '1', 'AGR 205', 'Introduction to Agro-Climatology', '2', 'C'),
    ('1', '2', '1', 'FRM 211', 'Forestry and Wildlife Management', '2', 'C'),
    ('1', '2', '1', 'ANP 201', 'Introduction to Biotechnology', '2', 'C'),
    ('1', '2', '1', 'AGR 207', 'Anatomy and Physiology of Farm Animals', '2', 'C'),
    ('1', '2', '1', 'GST 201', 'Nigerian People and Culture', '2', 'C'),
    ('1', '2', '1', 'CHM 131', 'Organic Chemistry for Agriculture I', '2', 'C'),
-- Sub Total Credit Unit = 23
    ('1', '2', '2', 'ARD 202', 'Introduction to Rural Sociology', '2', 'C'),
    ('1', '2', '2', 'ANP 202', 'Principles of Animal Production', '2', 'C'),
    ('1', '2', '2', 'ANP 204', 'Introduction to Agricultural Biochemistry', '3', 'C'),
    ('1', '2', '2', 'AGR 204', 'Computer Appreciation and Application to Agriculture', '2', 'C'),
    ('1', '2', '2', 'AGR 202', 'Introduction to Agric. Engineering', '2', 'C'),
    ('1', '2', '2', 'FST 202', 'Principles of Food Science and Technology', '3', 'C'),
    ('1', '2', '2', 'AFS 220', 'Introduction to Fisheries and Wildlife', '2', 'C'),
    ('1', '2', '2', 'ENT 204', 'Entrepreneurship and Change Management', '2', 'C'),
    ('1', '2', '2', 'AGR 206', 'Crop Anatomy, Taxonomy and Physiology', '3', 'C'),
-- Sub Total Credit Units 21
-- 
-- Total credit units for 200 level course = 44
-- 
-- All Courses are Core- Course for all programmes

-- 300 LEVEL
    ('1', '3', '1', 'AEA 303', 'Agricultural Production Economics and Resource Management', '3', 'C'),
    ('1', '3', '1', 'AEA 305', 'Introduction to Agricultural Insurance', '2', 'C'),
    ('1', '3', '1', 'ARD 301', 'Introduction to Agric. Extension and Rural Sociology', '2', 'C'),
    ('1', '3', '1', 'CRP 309', 'Arable Crop Production', '2', 'C'),
    ('1', '3', '1', 'AGR 301', 'Statistics and Field Experimentation', '3', 'E'),
    ('1', '3', '1', 'CRP 313', 'Permanent Crop Production', '2', 'C'),
    ('1', '3', '1', 'ANP 301', 'Introduction to Non-Ruminant Animal Production', '2', 'C'),
    ('1', '3', '1', 'SLM 303', 'Introduction to Pedology and Soil Physics', '2', 'C'),
    ('1', '3', '1', 'CRP 303', 'Principles of Crop Protection', '2', 'C'),
    ('1', '3', '1', 'CRP 305', 'Crop Genetics and Breeding', '2', 'C'),
    ('1', '3', '1', 'AGR 307', 'Environmental Impact Assessment', '2', 'C'),
    ('1', '3', '1', 'ARD 308', 'Principles of cooperative Practices', '2', 'C'),
-- Sub Total Credit Unit = 23
    ('1', '3', '2', 'CRP 312', 'Farm Power and Agric.Mechanisation', '3', 'E'),
    ('1', '3', '2', 'AEA 302', 'Agricultural Finance and Marketing', '3', 'C'),
    ('1', '3', '2', 'AEA 304', 'Agricultural Marketing and Price', '3', 'C'),
    ('1', '3', '2', 'ARD 304', 'Communication Audio Visual Techniques', '3', 'C'),
    ('1', '3', '2', 'AEA 310', 'Farm Business Organisation', '2', 'C'),
    ('1', '3', '2', 'AEA 306', 'Farm Records and Accounting', '2', 'C'),
    ('1', '3', '2', 'AEA 308', 'Principles of Farm Management', '2', 'C'),
    ('1', '3', '2', 'ANP 302', 'Intro to Ruminant Animal Production', '2', 'C'),
    ('1', '3', '2', 'ENT 310', 'Cultural Change and Entrepreneurship l', '2', 'C'),
-- Sub Total Credit Unit = 20
-- 
-- Total Credit Units for 300 Level = 43
-- 
-- 400 LEVEL
    ('1', '4', '-', 'AGR 400', 'Farm Practical Year/ Student Industrial Works Experience Scheme (SIWES)', '24', 'C');
-- Covers a period of 12 months and it is a compulsory requirement for graduation
-- Total Credit Units 400 Level = 24

-- Petroleum and Gass Engineering Course
-- 100L Semester 1
('23', '1', '1', 'GSP1201', 'Use of English I', '2', 'C'),
('23', '1', '1', 'MTH1301', 'Elementary Mathematics I', '3', 'C'),
('23', '1', '1', 'STA1311', 'Probability I', '3', 'C'),
('23', '1', '1', 'STA1311', 'Introduction to Computer Science', '2', 'C'),
('23', '1', '1', 'PHY1170', 'Physics Practical I', '1', 'C'),
('23', '1', '1', 'PHY1210', 'Mechanics', '2', 'C'),
('23', '1', '1', 'PHY1220', 'Electricity & Magnetism', '2', 'C'),
('23', '1', '1', 'CHM1231', 'Inorganic Chemistry', '2', 'C'),
('23', '1', '1', 'CHM1241', 'Organic Chemistry', '2', 'C'),
-- Sub Total Credit Unit = 19
-- 
--
-- 100L Semester 2
('23', '1', '2', 'MTH1302', 'Elementary Mathematics II', '3', 'C'),
('23', '1', '2', 'MTH1303', 'Elementary Mathematics III', '3', 'C'),
('23', '1', '2', 'PHY1230', 'Behavior of Matter', '2', 'C'),
('23', '1', '2', 'PHY1180', 'Physics Practical II', '1', 'C'),
('23', '1', '2', 'CHM1251', 'Physical Chemistry', '2', 'C'),
('23', '1', '2', 'CHM1261', 'Chemistry Practical', '2', 'C'),
('23', '1', '2', 'GSP1202', 'Use of Library, Study Skills & ICT', '2', 'E'),
-- Sub Total Credit Unit = 15
-- 
-- Total Credit Units for 100 Level = 43
--
-- 200L Semester 1
('23', '2', '1', 'EGR2204', 'Workshop Practice', '2', 'C'),
('23', '2', '1', 'EGR2205', 'Thermodynamics I', '2', 'C'),
('23', '2', '1', 'EGR2206', 'Materials Science I', '2', 'C'),
('23', '2', '1', 'EGR2207', 'Principles of Electrical Eng. I', '2', 'C'),
('23', '2', '1', 'EGR2207', 'Engineering Mathematics I', '3', 'C'),
('23', '2', '1', 'EGR2304', 'Laboratory A', '3', 'C'),
('23', '2', '1', 'EGR2306', 'Applied Mechanics', '3', 'E'),
('23', '2', '1', 'PEE2201', 'Introduction to Petroleum Eng. I', '2', 'C'),
('23', '2', '1', 'GSP2204', 'Foundation of Nigeria Culture, Government & Economy', '2', 'E'),
('23', '2', '1', 'GSP2206', 'Peace and Conflict Resolution', '2', 'E'),
('23', '2', '1', 'GSP2201', 'Use of English (DE students only)', '2', 'C'),
-- Sub Total Credit Unit = 25
-- 
-- 
-- 200L Semester 2
('23', '2', '2', 'EGR2101', 'Engineer in Society I', '1', 'C'),
('23', '2', '2', 'EGR2103', 'Experimental Methods & Analysis', '1', 'C'),
('23', '2', '2', 'EGR2201', 'Fluid Mechanics', '2', 'C'),
('23', '2', '2', 'EGR2202', 'Solid Mechanics I', '2', 'C'),
('23', '2', '2', 'EGR2203', 'Engineering Drawing I', '2', 'C'),
('23', '2', '2', 'EGR2302', 'Engineering Mathematics II', '3', 'C'),
('23', '2', '2', 'EGR2208', 'Principles of Electrical Eng II', '2', 'C'),
('23', '2', '2', 'EGR2305', 'Laboratory B', '3', 'C'),
('23', '2', '2', 'EGR2313', 'Computer Programming', '3', 'C'),
('23', '2', '2', 'PEE2202', 'Introduction to Petroleum Eng II', '2', 'C'),
('23', '2', '2', 'EGR2102', 'SWEP', '1', 'C'),
('23', '2', '2', 'GSP2205', 'Logic and Philosophy', '2', 'E'),
('23', '2', '2', 'GSP2202a', 'Use of Library, Study Skills & CIT (DE students only)', '2', 'C'),
-- Sub Total Credit Unit = 24
-- 
-- Total Credit Units for 200 Level = 48
--
-- 300L Semester 1
('23', '3', '1', 'EGR3302', 'Engineering Mathematics III', '3', 'E'),
('23', '3', '1', 'PEE3201', 'Industrial Studies I', '2', 'C'),
('23', '3', '1', 'PEE3308', 'Petroleum Geology', '3', 'C'),
('23', '3', '1', 'PEE3311', 'Strength of Materials', '3', 'C'),
('23', '3', '1', 'PEE3305', 'Fluid Mechanics II', '3', 'C'),
('23', '3', '1', 'PEE3407', 'Drilling Fluids Technology', '4', 'C'),
('23', '3', '1', 'PEE3409', 'Engineering Analysis I', '4', 'C'),
('23', '3', '1', 'EGR3101', 'Engineers in Society II', '1', 'C'),
-- Sub Ttal Credit Unit = 23

-- 300L Semester 2
('23', '3', '2', 'EGR3102', 'Technical Writing and Presentations', '1', 'C'),
('23', '3', '2', 'PEE3302', 'Drilling Technology I', '3', 'C'),
('23', '3', '2', 'PEE3204', 'Industrial Studies II', '2', 'C'),
('23', '3', '2', 'PEE3306', 'Petroleum Production Engineering I', '3', 'E'),
('23', '3', '2', 'PEE3503', 'Reservoir Engineering I', '5', 'C'),
('23', '3', '2', 'EEP3201', 'Entrepreneurship and Innovation', '2', 'C'),
('23', '3', '2', 'PEE3310', 'Engineering Analysis II', '3', 'C'),
('23', '3', '2', 'EGR3203', 'SIWES I', '2', 'E'),
('23', '3', '2', 'EGR3302', 'Computational Techniques', '3', 'E'),
('23', '3', '2', 'EGR3311', 'Computer Applications', '3', 'E'),
-- Sub Total Credit Unit = 27
-- 
-- Total Credit Units for 300 Level = 50
-- 400L Semester 1
('23', '4', '1', 'EGR4201', 'Engineering Statistics', '2', 'C'),
('23', '4', '1', 'PEE4201', 'Applied Geophysics & Petrol. Exploration', '2', 'C'),
('23', '4', '1', 'PEE4303', 'Drilling Technology II', '3', 'C'),
('23', '4', '1', 'PEE4305', 'Reservoir Engineering II', '3', 'C'),
('23', '4', '1', 'PEE4307', 'Petroleum Production Engineering II', '3', 'C'),
('23', '4', '1', 'EGR4101', 'Engineering in Society III (Law)', '1', 'C'),
('23', '4', '1', 'PEE4309', 'Well Logging', '3', 'C'),
('23', '4', '1', 'PEE4311', 'Laboratory Practical Course', '3', 'C'),
('23', '4', '1', 'PEE4213', 'Industrial Studies III', '2', 'C'),
('23', '4', '1', 'EEP4201', 'Venture Creation and Growth', '2', 'C'),
-- Sub Total Credit Unit = 24

-- 400L Semester 2
('23', '4', '2', 'EGR4401', 'Students Industrial Work Experience Scheme (SIWES II)', '4', 'C'),
-- Sub Total Credit Unit = 4
-- 
-- Total Credit Units for 400 Level = 28

-- 500L Semester 1
('23', '5', '1', 'PEE5301', 'Drilling Technology III', '3', 'C'),
('23', '5', '1', 'PEE5303', 'Reservoir Engineering III', '3', 'C'),
('23', '5', '1', 'PEE5305', 'Reservoir Modeling and Simulation', '3', 'E'),
('23', '5', '1', 'PEE5307', 'Petroleum Production Eng. III', '3', 'C'),
('23', '5', '1', 'PEE5313', 'Laboratory Practical course', '3', 'C'),
('23', '5', '1', 'PEE5415', 'Heat and Mass Transfer', '4', 'C'),
('23', '5', '1', 'PEE5317', 'Oil Pollution and Control', '3', 'E'),
('23', '5', '1', 'CEE5201', 'Engineering Management', '2', 'E'),
-- Sub Total Credit Unit = 24
-- 500L Semester 2
('23', '5', '2', 'PEE5202', 'Petrol. Product Transport & Storage', '2', 'C'),
('23', '5', '2', 'PEE5606', 'Research Project', '6', 'C'),
('23', '5', '2', 'PEE5208', 'Offshore Operations', '2', 'E'),
('23', '5', '2', 'PEE5310', 'Natural Gas Processing', '3', 'C'),
('23', '5', '2', 'PEE5212', 'Process Technology', '2', 'C'),
('23', '5', '2', 'PEE5314', 'Petroleum Refining Technology', '3', 'C'),
('23', '5', '2', 'PEE5316', 'Enhanced Oil Recovery', '2', 'E'),
('23', '5', '2', 'PEE5318', 'Petroleum Eng. Rock Mechanics', '2', 'E'),
('23', '5', '2', 'PEE5322', 'Multiple Phase Flow in Pipes', '2', 'E'),
-- Sub Total Credit Unit = 24
-- 
-- Total Credit Units for 500 Level = 28
-- 
INSERT INTO Courses(DepartmentID, ClassID, SemesterID, CourseCode, CourseTitle, CourseUnit, CourseStatus)VALUES
('23', '1', '1', 'GSP 1201', 'Use of English I', '2', 'C'),
('23', '1', '1', 'MTH 1301', 'Elementary Mathematics I', '3', 'C'),
('23', '1', '1', 'STA 1311', 'Probability I', '3', 'C'),
('23', '1', '1', 'CSC 1201', 'Introduction to Computer Science', '2', 'C');
 
-- CREATING CLASS TABLE
CREATE TABLE IF NOT EXISTS Class(
    ClassID INT (10)AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- INSERTING DATA INTO CLASS TABLE
INSERT INTO Class(Title)
VALUES('100 LEVEL'),
    ('200 LEVEL'),
    ('300 LEVEL'),
    ('400 LEVEL'),
    ('500 LEVEL');
 
CREATE TABLE IF NOT EXISTS Semester(
    SemesterID INT (10)AUTO_INCREMENT PRIMARY KEY,
    Parent INT(10),
    ClassID INT(100),
    Title VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- INSERTING DATA INTO SEMESTER TABLE
INSERT INTO Semester(ClassID, Parent, Title)VALUES
    ('1', '1', '(100L)FIRST SEMESTER'),
    ('1', '2', '(100L)SECOND SEMESTER'),
    ('2', '1', '(200L)FIRST SEMESTER'),
    ('2', '2','(200L)SECOND SEMESTER'),
    ('3', '1','(300L)FIRST SEMESTER'),
    ('3', '2','(300L)SECOND SEMESTER'),
    ('4', '1','(400L)FIRST SEMESTER'),
    ('4', '2','(400L)SECOND SEMESTER'),
    ('5', '1','(500L)FIRST SEMESTER'),
    ('5', '2','(500L)SECOND SEMESTER');


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
              ('3', '10406', 'Bachelor Degree [UD](BSc)', '1813-10-12 11:03:22');
              
CREATE TABLE IF NOT EXISTS `Mode__of__study`(
  `No` TINYINT(10) AUTO_INCREMENT PRIMARY KEY,
  `Mode__name` VARCHAR(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Updated__On` DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Mode__of__study`(`No`, `Mode__name`, `Updated__On`) 
      VALUES('1', 'Full Time (FT)', '1710-04-13 12:11:30'),
            ('2', 'Part Time (PT)', '1890-02-23 09:19:30'),
            ('3', 'Online Program', '1940-10-12 11:03:22');

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

CREATE TABLE IF NOT EXISTS `questions` (
    `no` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `examinationid` text NOT NULL,
    `questionid` text NOT NULL,
    `question` text NOT NULL,
    `choice` int(11) NOT NULL,
    `opt1` text NOT NULL,
    `opt2` text NOT NULL,
    `opt3` text NOT NULL,
    `opt4` text NOT NULL,
    `ansid` text NOT NULL,
    `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `answer` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `qid` text NOT NULL,
    `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `StudentAns` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `studentid` VAR(200) NOT NULL,
    `ReceivedAns` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `Monitor` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `examid` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `correctQuest` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `failQuest` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `defaultmark` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `score` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `grade` VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `studentid` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `monitor` ADD `examstatus` INT(10) NOT NULL DEFAULT '0' AFTER `studentid`;

CREATE TABLE IF NOT EXISTS `exam__timeset` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `eid` text NOT NULL,
    `title` varchar(100) NOT NULL,
    `total` int(11) NOT NULL,
    `time` varchar(20) NOT NULL,
    `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Backup` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `eid` text NOT NULL,
    `time` varchar(20) NOT NULL,
    `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `history` (
    `No` INT(10) PRIMARY KEY AUTO_INCREMENT,
    `email` varchar(50) NOT NULL,
    `eid` text NOT NULL,
    `score` int(11) NOT NULL,
    `level` int(11) NOT NULL,
    `sahi` int(11) NOT NULL,
    `wrong` int(11) NOT NULL,
    `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `attendance_list` (
  `#` int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `id` VARCHAR(100)  NOT NULL,
  `department` VARCHAR(100)  NOT NULL,
  `class` VARCHAR(100)  NOT NULL,
  `semester` VARCHAR(100) NOT NULL,
  `course` int(30) NOT NULL,
  `doc` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Table structure for table `attendance_record`
--
CREATE TABLE IF NOT EXISTS`attendance_record` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `attendance_id`VARCHAR(100)  NOT NULL,
  `student_id` int(30) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '0=absent,1=present,2=late',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `ZoomSchedule` ADD INDEX(`HosterID`);
ALTER TABLE `Categories` ADD INDEX(`Parent`);
ALTER TABLE `Categories` ADD UNIQUE (`Category__ID`);
ALTER TABLE `Faculty__tb` ADD UNIQUE(`Faculty__ID`);
ALTER TABLE `Child__Faculty__tb` ADD INDEX(`Child__faculty__ID`);
ALTER TABLE `Subject__Grade` ADD INDEX (`Compulsory__ID`);
ALTER TABLE `Required__Subjects` ADD INDEX (`Subject__Id`);
ALTER TABLE `Required__Subjects` ADD INDEX (`Compulsory__Sub_Id`);
ALTER TABLE `Student__Account` ADD INDEX(`Surname`);
ALTER TABLE `Student__Account` ADD INDEX(`othername`);
ALTER TABLE `Student__Account` ADD INDEX(`email`);
ALTER TABLE `Lecturals` ADD INDEX(`Profile__Picture`);
ALTER TABLE `Lecturals` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `Library__tb` ADD INDEX(`Object__ID`);
ALTER TABLE `Staff` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `humanresources` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`;
ALTER TABLE `Student__Account` ADD `featured` INT(10) NOT NULL DEFAULT '1' AFTER `Email`; 
ALTER TABLE `super__administrator` ADD `create_on` DATETIME NULL DEFAULT NULL AFTER `permission`;
ALTER TABLE `categories` ADD `Status` INT(10) NOT NULL AFTER `Category__name`;