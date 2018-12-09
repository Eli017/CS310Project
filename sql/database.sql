--Please run these SQL statements to create the database for this forum.
--
-- Host: localhost:8889
-- Generation Time: Dec 09, 2018 at 11:01 PM
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
                       `Media` blob NOT NULL,
                       `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                       `userID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `Post_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `fk_posts_user_id` FOREIGN KEY (`userID`) REFERENCES `LoginInfo` (`userID`);
