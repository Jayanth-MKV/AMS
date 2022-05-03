-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.2:3307
-- Generation Time: May 03, 2022 at 12:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `uploadby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `description`, `path`, `uploadby`) VALUES
(1, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (136).png', ''),
(2, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (140).png', ''),
(3, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (141).png', ''),
(4, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (142).png', ''),
(5, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (143).png', ''),
(6, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (144).png', ''),
(7, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (145).png', ''),
(8, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (146).png', ''),
(9, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (147).png', ''),
(10, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (148).png', ''),
(11, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (149).png', ''),
(12, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (150).png', ''),
(13, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (151).png', ''),
(14, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (152).png', ''),
(15, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (153).png', ''),
(16, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (154).png', ''),
(17, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (176).png', ''),
(18, 'Lorem Ipsum', 'What is Lorem Ipsum?\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (177).png', ''),
(27, 'This is default value in title', 'asc', 'Screenshot (183).png', 'Hello'),
(28, 'This is default value in title', 'asc', 'Screenshot (183).png', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `aid` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` text DEFAULT 'ncs',
  `email` text DEFAULT 'ncs@gmail.com',
  `about` text DEFAULT 'ncs',
  `phone` text DEFAULT '0',
  `type` int(2) NOT NULL DEFAULT 1,
  `insta` text DEFAULT 'ncs',
  `fb` text DEFAULT 'ncs',
  `linkedin` text DEFAULT 'ncs',
  `website` text DEFAULT 'ncs',
  `experience` text DEFAULT 'ncs',
  `year` year(4) DEFAULT NULL,
  `work` text DEFAULT 'ncs',
  `img` varchar(255) NOT NULL DEFAULT '../img/default.png',
  `place` text DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`aid`, `id`, `name`, `email`, `about`, `phone`, `type`, `insta`, `fb`, `linkedin`, `website`, `experience`, `year`, `work`, `img`, `place`, `dob`) VALUES
(5, 1, 'cccc', 'cccc@c.com', 'Hello This is cccc indiansss', '9875632545', 0, 'https://www.instagram.com/profile_name', 'https://www.facebook.com/profile_name', 'https://www.linkedin.com/in/profile_name', 'github.com', '          hello aksncnac a ckn\r\nasc jna\r\nascjcnlanscnoao', 2025, 'Student', 'profilepic/1651238352_', 'kkd', '2022-04-15'),
(12, 4, 'zee', 'z@z.com', 'Hello This is Zee', '9876543256', 0, 'www.adsf.com', 'www.adsfdgf.com', 'www.sdafj.com', 'www.dsfg.com', '          This is zee in the tv', 2005, 'student', '../img/default.png', 'kkd', '2022-04-17'),
(13, 5, 'y', 'y@y.com', 'ncs', '0', 1, 'ncs', 'ncs', 'ncs', 'ncs', '          ncs', 0000, 'ncs', 'profilepic/1651250311_Screenshot (179).png', '', '1970-01-01'),
(14, 6, 'w', 'w@w.com', 'hello this /is w', '9876543234', 1, 'ncsqedACZ', 'ncsadsfcfa', 'ncsQFWGARESHBTRN', 'ncsqrEGWARD', '          ncsQWDAX\r\nWDSC;HWFSC\r\nFC;NS\r\n;BSC', 2007, 'techie', 'profilepic/1651251410_Screenshot (315).png', 'kkd', '2022-04-05'),
(15, 7, 'v', 'v@v.com', 'xcgvhabjsnkxvsd', '6789546789', 0, 'awdbsiuxgugwa', 'jaBSDIDgga', 'aWDBUIxgua', 'awbdxgyuawgusch', '          ncagcxuaHDbJASF\r\nfsckufubua', 2003, 'hardware', 'profilepic/1651251687_Screenshot (235).png', 'hyd', '2022-04-30'),
(16, 8, 'u', 'u@u.com', 'ncs', '08842345671', 0, 'ncsCASDC', 'ncsASCASC', 'ncsADSXADSC', 'ncsAWDCADSC', '          ncssbcygsc CBba43567az.\r\nfwfij\r\neuiuiocsn', 2015, 'Ai eNG', 'profilepic/1651252139_Screenshot (295).png', 'VIZ', '1970-01-01'),
(17, 9, 't@t.com', 't@t.com', 'ncs', '0234567890', 0, 'ncsjhfds', 'ncsawdsc', 'ncsrhtsbavecax', 'ncseagrefsACwxaz', '          ncsafsC aszv ascz ', 2017, 'stu', 'profilepic/1651252320_Screenshot (322).png', 'vjy', '2021-08-19'),
(18, 10, 's', 's@s.com', 'ncs', '0231456', 0, 'ncswqadsc', 'ncsqwdax', 'ncsdwasx', 'ncsadsc', '          ncsdwasdvf', 2011, 'associate', 'profilepic/1651252442_Screenshot (323).png', 'chennai', '1970-01-01'),
(19, 11, 'r', 'r@r.com', 'ncsasfcacs', '876132456', 1, 'ascz ascaC', 'ncsascasc', 'facsZ CSZ ', 'AFSZgdh', '          ncsaszcascz', 2019, 'stu', 'profilepic/1651252591_Screenshot (274).png', 'kol', '2022-04-24'),
(20, 12, 'q', 'q@q.com', 'ncs', '0', 1, 'ncs', 'ncs', 'ncs', 'ncs', 'ncs', 0000, 'ncs', '../img/default.png', NULL, NULL),
(21, 13, 'p', 'p@p.com', 'ncsawfceafsv', '7345678923', 0, 'ncssezfsvsegdv', 'ncssfzvsgdv', 'ncsesgdesgdv', 'ncsesggesd', '          ncsafsvesgdv', 2018, 'police', 'profilepic/1651253021_Screenshot (286).png', 'delhi', '2020-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` int(2) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `year`) VALUES
(5, 'cccc', 'cccc@c.com', 'ccccccccc', 0, 2025),
(12, 'zee', 'z@z.com', 'zzzzzzzz', 0, 2005),
(13, 'y', 'y@y.com', 'yyyyyyyy', 1, 0000),
(14, 'w', 'w@w.com', 'wwwwwwww', 1, 0000),
(15, 'v', 'v@v.com', 'vvvvvvvv', 0, 0000),
(16, 'u', 'u@u.com', 'uuuuuuuu', 0, 0000),
(17, 't@t.com', 't@t.com', 'tttttttt', 1, 0000),
(18, 's', 's@s.com', 'ssssssss', 0, 0000),
(19, 'r', 'r@r.com', 'rrrrrrrr', 1, 2019),
(20, 'q', 'q@q.com', 'qqqqqqqq', 1, 0000),
(21, 'p', 'p@p.com', 'pppppppp', 0, 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aid` (`aid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
