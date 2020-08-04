-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2020 at 11:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13055173_lifedonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bgroup` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` double NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `profilepic` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`username`, `name`, `password`, `bgroup`, `address`, `phone`, `gender`, `profilepic`, `email`) VALUES
('ab450358@gmail.com', 'Akash batham', 'Admin@123', 'O+', 'Fatehgarh', 7991252331, 'M', 'images/Screenshot_2020-04-12-08-31-00-633_com.whatsapp.png', 'ab450358@gmail.com'),
('Abhay', 'Abhay', '234567890', 'O+', 'Jawala nagar rampur', 8881110337, 'Male', 'images/pic1.jpg', '8881110337@gmail.com'),
('Abhinav', 'Abhay ', '234567890', 'A+', 'Jawala nagar rampur', 8881110337, 'Male', 'images/pic1.jpg', '8881110337@gmail.com'),
('Adil', 'Adil mansoori', 'Adil', 'O+', 'Fatehgarh', 77852464564, 'gender', 'images/IMG-20200603-WA0007.jpg', 'adilmansoori777@gmail.com'),
('ajeetkaran99@gmail.com', 'Ajeet Kumar Choubey ', 'Ajeetk@ran24', 'B+', 'varanasi', 7233932038, 'Male', 'images/IMG-20171105-WA0011-390x520.jpg', 'ajeetkaran99@gmail.com'),
('akg.galgotiad', 'Awanish kumar', 'Awanishji@123', 'A+', 'SUREMAN PUR,BALLIA', 8114153449, 'Male', 'images/pic1.jpg', 'akg.galgotias@gmail.com'),
('Allu', 'Allu', '1234', 'B+', 'Skksjsjshshsh', 9876255273, 'Jejejej', 'images/pic1.jpg', 'alluu@123.gmail.com'),
('Allu123', 'Allu ', 'Allu123', 'B+', 'Delhi', 88478493939, 'gender', 'images/IMG-20200417-WA0008.jpg', 'allu@123gmail.com'),
('Anamika', 'Anamika', 'anamika99', 'O+', 'Tirwa kannauj', 59640000, 'gender', 'images/pic1.jpg', 'anamikaberiya512@gmail.com'),
('Anwar ansari', 'Mohd anwar', 'muktdir@0786', 'O+', 'Diat jail farrukhabad', 8855246321, 'Male', 'images/VID-20200327-WA0040.mp4', 'mohdanwar1998@gmail.com'),
('Arif', 'Arif bhai', 'arif', 'A+', 'Bholepur', 82964838388, 'gender', 'images/pic1.jpg', 'arif@gmail.com'),
('Ashi', 'Ashi', 'urfi', 'A+', 'Bareilly', 9865443312, 'Female', 'images/pic1.jpg', 'urfi21@gmail.com'),
('Awanishji@123', 'Awanish Kumar', 'Awanishji@123', 'A+', 'SUREMAN PUR,BALLIA', 814153449, 'Male', 'images/pic1.jpg', 'awanishkumar123456@gmail.com'),
('Ayankhan', 'Ayan', '234567890', 'O+', 'Mdarbadi', 8318545879, 'Male', 'images/pic1.jpg', 'Ayankhan@gmail.com'),
('Ayush', 'Ayush', 'Dushyant', 'A-', 'kanpur', 9404209211, 'Male', 'images/04.png', 'asas123@gmail.com'),
('Ayuuu', 'Ayankhan', '234567890', 'O+', 'Mdarbadi', 8318545879, 'Male', 'images/pic1.jpg', '8318545879@gmail.com'),
('Elbert Einstein', 'Elbert Einstein', 'akeelqrshi1920', 'AB+', 'Kannauj', 9580416828, 'gender', 'images/pic1.jpg', 'akeelarshi1920@gmail.com'),
('Gabbar07', 'Anshul Yadav', 'gabbar@09', 'A+', 'RKGIT 5th km stone, Delhi-Meerut highway, Raj nagar extension, Ghaziabad', 7014862793, 'gender', 'images/pic1.jpg', 'bossanshulsingh786@gmail.com'),
('Gaurav ', 'Gaurav Gangwar', 'Abcd@1234', 'A+', 'Baheri, Ramleele mohalla', 7302607678, 'Male', 'images/Screenshot_2020-04-14-20-09-54-50.jpg', 'iamgauravgangwar@gmail.com'),
('gautam', 'GAUTAM KUMAR SINGH', '12345', 'O+', 'Kanpur', 8887853459, 'gender', 'images/pic1.jpg', 'krgautamsingh01@gmail.com'),
('Ifra', 'Ifra ansari', '786786', 'B+', 'Farrukhabad', 9260974611, 'Female', 'images/pic1.jpg', 'ifraansari786@gmail.com'),
('Kanoon', 'Kanoon', 'kanoon', 'O+', 'Bijnair', 7788584545, 'M', 'images/pic1.jpg', 'kanoon777@gmail.com'),
('khan', 'ayan', '23121999', 'B+', 'mdarbadi', 8318545879, 'male', 'images/pic1.jpg', 'ayankhan@gmail.com'),
('malik', 'arhan', '24121999', 'O-', 'madarbadi', 9044200336, 'male', 'images/pic1.jpg', 'arhanmalik77866@gmail.com'),
('mohdtalib', 'Mohd Talib Mansuri ', 'kannauj', 'B+', 'Balarpur Kannauj UP', 8318057891, 'Male', 'images/images (7).jpeg', 'mohdtalib4010@gmail.com'),
('mohdumair', 'Umair', 'kannauj', 'AB+', 'Kannauj', 9721300397, 'gender', 'images/pic1.jpg', 'umair@gmail.com'),
('Mohi', 'mohihero', 'kannauj', 'A+', 'Kannauj', 7377328288273, 'gender', 'images/pic1.jpg', 'mohi@gmail.com'),
('mohimansuri', 'Mohi', 'kannauj', 'O-', 'Kannauj', 9721300396, 'gender', 'images/pic1.jpg', 'mohimansuri060@gmail.com'),
('Mohitmishra', 'Mohit', 'kannauj', 'A-', 'Kannauj', 9721300396, 'gender', 'images/pic1.jpg', 'mohit@gmail.com'),
('mtm4010', 'Host', 'mtm', 'A+', 'Kanpur, UP', 9721300396, 'gender', 'images/IMG_20191215_002024_276.jpg', 'mtm060@gmail.com'),
('noobcoder24', 'noobcoder24', 'noob', 'B+', 'Kannauj', 8318057891, 'gender', 'images/pic1.jpg', 'noobcoder@gmail.com'),
('Rahat', 'Rahat', '12345', 'A-', 'Bholepur', 73864927392, 'gender', 'images/IMG-20200605-WA0001.jpg', 'rahat@gmail.com'),
('Ritesh', 'Ritesh Kumar ', '@7842', 'O+', 'New Delhi', 7842871295, 'Male', 'images/pic1.jpg', 'milanarpit786@gmail.com'),
('Rohit', 'Rohit parihar ', '12345', 'O+', 'Agra', 9458261619, 'Male', 'images/indiawinsworldcup2_1559805295_684x384.jpg', 'rohitparihar07125@gmail.com'),
('Sanya_akeel', 'Sanya ', 'gun19gun20', 'A+', 'Kanpur', 6306531713, 'gender', 'images/IMG_20200617_200105_957.jpg', 'gungun@gmail.com'),
('Shikha', 'Shikha', '805060', 'O+', 'Gwalior', 9399186161, 'Female', 'images/pic1.jpg', '9399186161@gmail.com'),
('Shikha singh', 'Shikha', '987654321', 'A+', 'Gwalior', 9399186161, 'Female', 'images/pic1.jpg', '939918161@gmail.com'),
('Shikhathakur', 'Shikha', '805060', 'O+', 'Gwalior', 7399186161, 'Female', 'images/pic1.jpg', '9198713728@gmail.com'),
('sonu28sharma99@gmail.com', 'Sonu Sharma', 'sonu123', 'O+', 'Noida sec -62', 8810673621, 'Male', 'images/pic1.jpg', 'sonu28sharma99@gmail.com'),
('virat tiwari', 'aditya', 'happylife', 'O+', '127', 6387468404, 'gender', 'images/anshu pic.jfif', 'anshutiwari607@gmail.com'),
('wasim', 'zara', '20122020', 'O+', 'delhi ', 9044200336, 'female', 'images/pic1.jpg', 'zarawasim44566@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
