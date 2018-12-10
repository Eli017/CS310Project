-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2018 at 01:19 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Agora`
--

-- --------------------------------------------------------

--
-- Table structure for table `LoginInfo`
--

CREATE TABLE `LoginInfo` (
                           `Username` varchar(15) NOT NULL,
                           `Password` varchar(15) NOT NULL,
                           `FirstName` varchar(15) NOT NULL,
                           `LastName` varchar(15) NOT NULL,
                           `userID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LoginInfo`
--

INSERT INTO `LoginInfo` (`Username`, `Password`, `FirstName`, `LastName`, `userID`) VALUES
('asbolles', '1234', 'Austin', 'Bolles', 1),
('jonDoe', '1234', 'Jon', 'Doe', 2),
('Skyrim4sql', '1234', 'Todd', 'Howard', 3),
('Dr.Shutters', '1234', 'brad', 'shutters', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
                       `Post_ID` int(255) NOT NULL,
                       `Text` text NOT NULL,
                       `Time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
                       `userID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`Post_ID`, `Text`, `Time`, `userID`) VALUES
(1282, 'My phone died. Contact me through a séance.', '2017-07-23 04:00:00', 1),
(1283, 'I contacted a nekomancer about my phone. It was not helpful', '2017-07-23 04:00:00', 1),
(1284, 'The Nekomancer gave me her number. It turned around this Cattastrophe', '2017-07-24 04:00:00', 1),
(1285, 'My mom says I need to apologize for the Cat puns. She said “they are freaking meowt.', '2017-07-24 04:00:00', 1),
(1286, 'MY boyfriend dumped me. Let’s get this tea girls.', '2017-03-31 04:00:00', 2),
(1287, 'BECKY WITH THE GOOD HAIR IS DATING MY BOYFRIEND. SPREAD THIS LIKE WILDFIRE!!!', '2017-04-10 04:00:00', 2),
(1288, 'BECKY LIVES AT 1600 WHITEHOUSE DRIVE IN CANADA. DOXX THIS POS.', '2017-04-11 04:00:00', 2),
(1289, ' I would Like to tell john that I am sorry for DOXXing his house. ', '2017-04-12 04:00:00', 2),
(1290, 'Follow Me at Twitstagram @youngDyke69420', '2017-01-01 05:00:00', 3),
(1291, 'Follow Me at Twitstagram @BeckywithGoodHair ', '2017-01-02 05:00:00', 3),
(1292, 'Follow Me at Twitstagram @xX69Presentation69Xx ', '2017-01-03 05:00:00', 3),
(1293, 'Follow Me at Twitstagram @PimpDaddyBrad ', '2017-01-04 05:00:00', 3),
(1294, 'Being a Parent is Hard. Do you agree?', '2017-02-24 05:00:00', 4),
(1295, 'Buy MY essential oils!! @VaccineFree', '2017-03-31 04:00:00', 4),
(1296, 'I’ve Told Carol for the past week that the red light is offensive for this good religious community. She has FLAGRANTLY and Repeatedly ignored my comments out of concern and I have no choice but to file a complaint with her. How dare she bring up memories of that horrible industry that has no business being in this group. I don’t care if it is a ‘holiday tradition for the ancient Semites and brings good luck to the household’, I won’t stand it! I have already told Medea to contact Bryson to tell Jordphan that I want to put an injunction on their house. I told Medea to contact Bryson to tell Jordphan that I will not except no for an answer. THEY WILL CONFORM OR THEY WILL LEAVE. ', '2017-11-29 05:00:00', 4),
(1297, 'GO Reds! hehehe', '2017-11-29 05:00:00', 4),
(1298, 'How does one post?', '2017-07-23 04:00:00', 1),
(1299, 'Star Wars was better before Disney took over #LUCASFILMS', '2017-07-25 04:00:00', 1),
(1300, 'Star Wars, The Last Jedi is the worst Star Wars movie ever', '2017-07-29 04:00:00', 1),
(1301, 'Why are things sent by ship called a cargo, but things sent by cars called shipments?', '2017-08-21 04:00:00', 1),
(1302, 'If you get scared half to death twice, do you die?', '2017-09-21 04:00:00', 4),
(1303, 'Do any of my family members suffer from mental illness? No, they all seem to enjoy it.', '2017-09-14 04:00:00', 4),
(1304, 'Finals week have me stressed.  Brothers here I come!', '2017-12-09 05:00:00', 4),
(1305, 'Just one the lottery!  Bahamas here I come!', '2017-12-12 05:00:00', 4),
(1306, 'The countdown is on until my birthday!  Looking for ideas!', '2017-11-11 05:00:00', 2),
(1307, 'Vacation in TN was great.  Can\'t wait to go back!', '2017-10-20 04:00:00', 2),
(1308, 'I waited and stayed up all night and tried to figure out where the sun was.\r\nThen it dawned on me.', '2017-10-21 04:00:00', 2),
(1309, 'What is red and smells like blue paint? Red paint.', '2017-09-23 04:00:00', 2),
(1310, 'How does NASA plan a party?  They planet.', '2017-11-17 05:00:00', 3),
(1311, 'My grandfather died peacefully, in his sleep…\r\n…not screaming like the passengers in his car.', '2017-05-20 04:00:00', 3),
(1312, 'What do you call a dangerous precipitation?  A reign of terror.', '2017-06-27 04:00:00', 3),
(1313, 'What do you call a computer that sings? A-Dell.', '2017-08-19 04:00:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LoginInfo`
--
ALTER TABLE `LoginInfo`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `fk_posts_user_id` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LoginInfo`
--
ALTER TABLE `LoginInfo`
  MODIFY `userID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `Post_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1314;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `fk_posts_user_id` FOREIGN KEY (`userID`) REFERENCES `LoginInfo` (`userID`);
