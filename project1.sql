-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `patients` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactnum` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `patients` (`fname`, `lname`, `email`, `password`, `contactnum`, `gender`) VALUES
('srinidhi', 'bhat', 'srinidhi@gmail.com', 'srinidhi', '7406974801', 'FEMALE'),
('sonal', 'sengupta', 'sonal@gmail.com', 'sonal', '6264714665', 'FEMALE'),
('neeta', 'sengupta', 'neeta@gmail.com', 'neeta', '9685248083', 'FEMALE'),
('tejas', 'shah', 'tejas@gmail.com', 'tejas', '7300409215', 'MALE'),
('rahul', 'sen', 'rahul@gmail.com', 'rahul', '8982500172', 'MALE'),
('srihari', 'bhat', 'srihari@gmail.com', 'srihari', '9113653764', 'MALE'),
('sri', 'bhat', 'sri@gmail.com', 'sri', '9916310298', 'FEMALE');


CREATE TABLE `plasma_donation` (
  `pname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `plasma_donation` (`pname`, `gender`, `blood_group`, `mobileno`, `address`) VALUES
('sri', 'Female', 'O+', '9916310298', 'Bangalore');


CREATE TABLE `quarantine_center` (
  `centerid` int(10) NOT NULL,
  `centername` varchar(100) NOT NULL,
  `genbeds` int(11) NOT NULL,
  `vipbeds` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contactnum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `quarantine_center` (`centerid`, `centername`, `genbeds`, `vipbeds`, `address`, `district`, `contactnum`) VALUES
(101, 'Treebo Trend Hotel', 24, 8, '84 Hosur Rd, Madiwala 1st Stage BTM Layout', 'Bengaluru Urban 560068', 26592096),
(102, 'Haj Bhavan', 24, 13, 'Kannuru Bellahalli BBMP Yelahanka Zone', 'Bangalore Urban 560064', 23679876),
(103, 'OYO Rajmahal comforts', 16, 3, 'New BEL Rd, Chikamanahalli Sadashiv Nagar', 'Bangalore Urban 560094', 27634233),
(104, 'Keys Hotel', 6, 12, 'Plot No 6 1st Phase ITPL Main Rd', 'Bangalore Urban 560048', 20887546),
(105, 'MVJ MC and RH', 50, 13, 'Kolar Road Dandupalya Hosakote Town', 'Bangalore Rural 	\r\n562114', 29983422),
(106, 'Akash Hospital', 71, 43, 'Prasannahalli Devanahalli Taluk', 'Bangalore Rural 562110', 25445676);



CREATE TABLE `reg_quarantine` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactnum` varchar(10) NOT NULL,
  `centerid` int(11) NOT NULL,
  `centername` varchar(100) NOT NULL,
  `datein` date NOT NULL,
  `bedtype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_quarantine`
--

INSERT INTO `reg_quarantine` (`pid`, `fname`, `lname`, `address`, `contactnum`, `centerid`, `centername`, `datein`, `bedtype`) VALUES
(7, 'srinidhi', 'bhat', 'bangalore', '7406974801', 102, 'haj bhavan', '2020-12-25', 'vip'),
(8, 'rahul', 'sen', 'mumbai', '8982500172', 106, 'Akash hospital', '2021-01-06', 'general'),
(9, 'srihari', 'bhat', 'bangalore', '9113653064', 104, 'Keys Hotel', '2021-01-13', 'general'),
(10, 'neeta', 'sengupta', 'jp nagar', '9685248083', 106, 'Akash Hospital', '2021-01-04', 'general'),
(11, 'tejas', 'shah', 'kanakapura', '7300409215', 101, 'treebo trend', '2021-01-13', 'vip'),
(12, 'sonal', 'sengupta', 'bellary', '6264714665', 101, 'treebo trend', '2021-01-19', 'general');

--
-- Triggers `reg_quarantine`
--
DELIMITER $$
CREATE TRIGGER `decr_beds_vip` AFTER UPDATE ON `reg_quarantine` FOR EACH ROW BEGIN
IF(NEW.bedtype='vip') THEN
UPDATE quarantine_center SET vipbeds=vipbeds-1 WHERE centerid=NEW.centerid;
ELSE
UPDATE quarantine_center SET genbeds=genbeds-1 WHERE centerid=NEW.centerid;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reg_testing`
--

CREATE TABLE `reg_testing` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contactnum` varchar(10) NOT NULL,
  `stat` varchar(20) NULL,
  `centerid` int(11) NOT NULL,
  `centername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_testing`
--

INSERT INTO `reg_testing` (`pid`, `fname`, `lname`, `gender`, `age`, `address`, `contactnum`, `centerid`, `centername`) VALUES
(7, 'srinidhi', 'bhat', 'FEMALE', 20, 'bangalore', '7406974801', 704, 'Sagar Hospital'),
(8, 'rahul', 'sen', 'MALE', 15, 'mumbai', '8982500172',  703, 'SRL limited Fortis'),
(9, 'srihari', 'bhat', 'MALE', 16, 'bangalore', '9113653064', 702, 'Lab Services Apollo Hospitals'),
(10, 'neeta', 'sengupta', 'FEMALE', 44, 'jp nagar', '9685248083', 702, 'Lab Services Apollo Hospitals'),
(11, 'tejas', 'shah', 'MALE', 33, 'kanakapura', '7300409215', 701, 'jayadeva'),
(12, 'sonal', 'sengupta', 'FEMALE', 20, 'bellary', '6264714665', 701, 'sagar'),
(13, 'sri','bhat', 'FEMALE', 18, 'jayanagar', '9916310298', 705, 'Urban Primary Health Centre');


-- --------------------------------------------------------

--
-- Table structure for table `testing_center`
--

CREATE TABLE `testing_center` (
  `centerid` int(11) NOT NULL,
  `centername` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contactnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing_center`
--

INSERT INTO `testing_center` (`centerid`, `centername`, `address`, `district`, `contactnum`) VALUES
(701, 'Sri Jayadeva Institute of Cardiovascular Sciences and Research', 'Heart hospital, Bannerghatta Main Rd', 'Bangalore 560065', 27666755),
(702, 'Lab Services Apollo Hospitals', 'Medical laboratory,154, 11, Bannerghatta Main', 'Bangalore 560065', 20989889),
(703, 'SRL Limited at Fortis hospitals', '154, 9, Bannerghatta Main Rd, opposite IIM, Sahyadri Layout, Panduranga Nagar', 'Bengaluru 560076', 27676554),
(704, 'Sagar Hospitals', '#44, 54, 30th Cross Rd, Jayanagara', 'Bangalore 560072', 42888888),
(705, 'Urban Primary Health Centre', '78, 4th Main Rd, Arekere MICO Layout 2nd stage, Lakshmi Layout', 'Bangalore 560076', 45090090);

-- ---------------------------------------------------------


--
-- Table structure for table `admin`
--

CREATE TABLE `admin`(
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contactNum` varchar(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `password`, `gender`, `contactnum`) VALUES 
('admin', 'sri', 'adminsri@gmail.com', 'adminsri', 'female', '7070707070'),
('admin', 'sonal', 'adminsonal@gmail.com', 'adminsonal', 'female', '6060606060');

-- ---------------------------------------------------------


--
-- Table structure for table `discharge`
--

CREATE TABLE `discharge`(
  `pid` int(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `extra_charges` int(20) NOT NULL,
  `bedtype` varchar(20) NOT NULL,
  `no_of_days_of_stay` int(10) NOT NULL,
  `totamt` int(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`contactnum`);

--
-- Indexes for table `quarantine_center`
--
ALTER TABLE `quarantine_center`
  ADD PRIMARY KEY (`centerid`);

--
-- Indexes for table `reg_quarantine`
--
ALTER TABLE `reg_quarantine`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reg_testing`
--
ALTER TABLE `reg_testing`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `testing_center`
--
ALTER TABLE `testing_center`
  ADD PRIMARY KEY (`centerid`);


--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);


--
-- Indexes for table `discharge`
--
ALTER TABLE `discharge`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_testing`
--
ALTER TABLE `reg_testing`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
