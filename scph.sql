-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2024 at 04:39 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scph`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int NOT NULL,
  `activity_name` varchar(200) NOT NULL,
  `activity_date` date NOT NULL,
  `club_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_date`, `club_id`) VALUES
(1, 'Program Solat Hajat', '2023-12-30', 1),
(3, 'SCPH Induction', '2023-12-12', 2),
(5, 'Gotong-royong ', '2023-03-05', 3),
(6, 'Mendaki bukit Keluang', '2023-08-04', 4),
(7, 'Bual bicara bersama tokoh silat', '2023-06-07', 5),
(8, 'Explorace game', '2023-07-31', 6),
(9, 'Majlis makan malam', '2023-05-20', 7),
(10, 'Perjumpaan bersama ahli', '2023-11-11', 8),
(11, 'Majlis berbuka puasa', '2023-03-22', 9),
(12, 'Pertandingan sepakan penalti', '2023-11-15', 10),
(13, 'Perkhemahan bersama ahli', '2023-10-23', 11),
(14, 'Program save committy', '2023-10-27', 12),
(15, 'Pertunjukan Seni Bela Diri', '2023-12-23', 13),
(16, 'Bacaan Yassin', '2023-11-13', 14),
(17, 'Pertandingan Silat', '2024-01-06', 15);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int NOT NULL,
  `club_name` varchar(200) NOT NULL,
  `club_owner` varchar(200) NOT NULL,
  `club_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_owner`, `club_type`) VALUES
(1, 'Society of Information System Management (SISMA)', 'Information Science Studies', 'Academic Club'),
(2, 'Association of Information Scientist (AIS)', 'Information Science Studies', 'Academic Club'),
(3, 'Kelab Keusahawanan', 'MASMED', 'Non-Academic Club'),
(4, 'Persatuan Ekonomi Perniagaan', 'Business Administration', 'Academic Club'),
(5, 'Kelab Intellectual Members of Muslim Nation', 'IMAN', 'Non-Academic Club'),
(6, 'Kelab Silat Cekak Pusaka Hanafi (SCPUH)', 'SCPUH UiTMCK', 'Non-Academic Club'),
(7, ' City Campus Badminton Club (CCBC)', 'CCBC UiTMCK', 'Non-Academic Club'),
(8, 'Kelab Rekreasi (RE-X)', 'RE-X UiTMCK', 'Non-Academic Club'),
(9, 'Association of Finance Club (FINCEPTIVE)', 'Business Administration', 'Academic Club'),
(10, ' Marketing Association Club (D’MAKERS)', 'Business Administration', 'Academic Club'),
(11, 'Kelab Inspirasi', 'Kelab Inspirasi UiTMCK', 'Non-Academic Club'),
(12, 'Kelab Taekwondo GTF', 'Kelab Taekwondo GTF UiTMCK', 'Non-Academic Club'),
(13, 'Kelab Evolusis', 'Kelab Evolusis UiTMCK', 'Non-Academic Club'),
(14, 'Kelab D’Lensa', 'Business Administration', 'Non-Academic Club'),
(15, 'Community of Bachelor in Statistics (COMOBISTA)', 'Statistics Studies', 'Academic Club');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_studid` int NOT NULL,
  `contact_desc` longtext NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `contact_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_studid`, `contact_desc`, `contact_email`, `contact_phone`) VALUES
(1, 'Mohd Zafian Bin Mohd Zawawi', 186322, 'This system is helpful bro!', 'zaffian@gmail.com', '0128088040'),
(2, 'Muhamad Jamil Md Nasir', 897958, 'Impressive display of Silat Cekak Pusaka Hanafi (SCPH) at UiTMCK!', 'jamilnasir31@gmail.com', '0133330000'),
(3, 'Nur Fatehah Md Nor', 794566, 'UiTMCK\'s SCPH team truly represents the spirit of martial arts', 'fatehahnor@gmail.com', '0143637899'),
(4, 'Wan Atiah', 980764, 'Their performances leave a lasting impression.', 'atiahwan@gmail.com', '0187636098'),
(5, 'Muhamad Adam', 465235, 'UiTMCK\'s SCPH team embodies the essence of this martial art', 'adam@gmail.com', '0187738099'),
(6, 'Nur Suraiya Yusri', 660731, 'The precision and fluidity of their movements are captivating', 'nursuraiya@gmail.com', '0143317066'),
(7, 'Nur Arissa', 589321, 'Their performances leave a lasting impression', 'arissa@gmail.com', '0138078044'),
(8, 'Nur Sofea Anuar', 409788, 'I admire the discipline and skill of the practitioners', 'nursofea@gmail.com', '0143057765'),
(9, 'Nur Aleeya Helena', 756765, 'he precision and fluidity of their movements are captivating', 'aleeyahelena@gmail.com', '0195663344'),
(10, 'Naemah Muhammad', 316044, 'he heritage of SCPH is evident in every movement', 'naemah@gmail.com', '0124569876'),
(11, 'Mohd Nasir ', 626457, 'UiTMCK\'s SCPH team exemplifies the essence of traditional Malay martial arts', 'mohdnasir@gmail.com', '0195643377'),
(12, 'Mohd Marzuki Ali', 803465, 'The grace and power of SCPH techniques are awe-inspiring', 'marzuki@gmail.com', '0126554478'),
(13, 'Nur Aida Mat', 574658, 'Each move tells a story of heritage and resilience', 'nuraida@gmail.com', '0194673997'),
(14, 'Muhd Hilal', 509872, 'UiTMCK\'s SCPH practitioners showcase the beauty of our cultural traditions', 'hilal@gmail.com', '013453986'),
(15, 'Nur Arissa ', 341019, 'Their dedication to mastering SCPH reflects a deep respect for their roots', 'nurarissa@gmail.com', '0131911195');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`) VALUES
(6, 'Jamil', 'Nasir', 'muhamadjamilnasir2000@gmail.com', 'male', 'jamel', '31'),
(7, 'Mohd Zafian', 'Mohd Zawawi', 'zaffian@gmail.com', 'male', 'zaffian', '123'),
(8, 'Nurul Wahida', 'Md Nasir', 'wahidanasir@gmail.com', 'female', 'Nurul', '89'),
(9, 'Nur Fatin Alawiah', 'Mat', 'fatinalawiahmat@gmail.com', 'female', 'Alawiah', '000'),
(10, 'Nur Atikah', 'Mohamad', 'atikahmohamad@gmail.com', 'female', 'Atikah', '94'),
(11, 'Nur Fatin Nazifah', 'Mohamad', 'nazifahmohamad@gmail.com', 'female', 'Nazifah', '01'),
(13, 'Sumayyah', 'Zaid', 'Sumayyah@gmail.com', 'female', 'Sumayyah', '10'),
(14, 'Nur Fatin', 'Mat', 'fatinmat@gmail.com', 'female', 'Fatin', '22'),
(15, 'Nur Mawarni', 'Mohd Nor', 'nurmawarni@gmail.com', 'female', 'Mawarni', '003'),
(16, 'Wadihan', 'Shah', 'wadihanshah@gmail.com', 'female', 'Wadihan', '02'),
(17, 'Finaz', 'Fuat', 'finatfuat@gmail.com', 'female', 'Finaz', '001'),
(18, 'Daud', 'Salleh', 'daudsalleh@gmail.com', 'male', 'Daud', '2006'),
(19, 'Adam ', 'Daniel', 'adamdaniel@gmail.com', 'male', 'Adam', '17'),
(20, 'Yusri ', 'Anuar', 'yusrianuar@gmail.com', 'male', 'Yusri', '88'),
(21, 'Wan Naimah', 'Muhammad', 'naimah@gmail.com', 'female', 'Naimah', '64');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
