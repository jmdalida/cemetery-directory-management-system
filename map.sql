-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 10:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `map`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `block_name` varchar(255) NOT NULL,
  `block_lat1` float NOT NULL,
  `block_long1` float NOT NULL,
  `block_lat2` float NOT NULL,
  `block_long2` float NOT NULL,
  `block_lat3` float NOT NULL,
  `block_long3` float NOT NULL,
  `block_lat4` float NOT NULL,
  `block_long4` float NOT NULL,
  `block_coordinates` longtext,
  `garden_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `burial_type`
--

CREATE TABLE `burial_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burial_type`
--

INSERT INTO `burial_type` (`type_id`, `type_name`) VALUES
(10, 'Family State');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `occupant_country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `occupant_country`) VALUES
(1, 'Select'),
(2, 'Afghanistan'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Antigua and Barbuda'),
(8, 'Argentina'),
(9, 'Armenia'),
(10, 'Australia'),
(11, 'Austria'),
(12, 'Azerbaijan'),
(13, 'Bahamas'),
(14, 'Bahrain'),
(15, 'Bangladesh'),
(16, 'Barbados'),
(17, 'Belarus'),
(18, 'Belgium'),
(19, 'Belize'),
(20, 'Benin'),
(21, 'Bhutan'),
(22, 'Bolivia'),
(23, 'Bosnia and Herzegovina'),
(24, 'Botswana'),
(25, 'Brazil'),
(26, 'Brunei'),
(27, 'Bulgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Côte d\\\'Ivoire'),
(31, 'Cabo Verde'),
(32, 'Cambodia'),
(33, 'Cameroon'),
(34, 'Canada'),
(35, 'Central African Republic'),
(36, 'Chad'),
(37, 'Chile'),
(38, 'China'),
(39, 'Colombia'),
(40, 'Comoros'),
(41, 'Congo (Congo-Brazzaville)'),
(42, 'Costa Rica'),
(43, 'Croatia'),
(44, 'Cuba'),
(45, 'Cyprus'),
(46, 'Czechia (Czech Republic)'),
(47, 'Democratic Republic of Congo'),
(48, 'Denmark'),
(49, 'Djibouti'),
(50, 'Dominica'),
(51, 'Dominican Republic'),
(52, 'Ecuador'),
(53, 'Egypt'),
(54, 'El Salvador'),
(55, 'Equatorial Guinea'),
(56, 'Eritrea'),
(57, 'Estonia'),
(58, 'Eswatini'),
(59, 'Ethiopia'),
(60, 'Fiji'),
(61, 'Finland'),
(62, 'France'),
(63, 'Gabon'),
(64, 'Gambia'),
(65, 'Georgia'),
(66, 'Germany'),
(67, 'Ghana'),
(68, 'Greece'),
(69, 'Grenada'),
(70, 'Guatemala'),
(71, 'Guinea'),
(72, 'Guinea-Bissau'),
(73, 'Guyana'),
(74, 'Haiti'),
(75, 'Holy See'),
(76, 'Honduras'),
(77, 'Hungary	'),
(78, 'Iceland'),
(79, 'India'),
(80, 'Indonesia'),
(81, 'Iran'),
(82, 'Iraq'),
(83, 'Ireland'),
(84, 'Israel'),
(85, 'Italy'),
(86, 'Jamaica'),
(87, 'Japan'),
(88, 'Jordan'),
(89, 'Kazakhstan'),
(90, 'Kenya'),
(91, 'Kiribati'),
(92, 'Kuwait'),
(93, 'Kyrgyzstan'),
(94, 'Laos'),
(95, 'Latvia'),
(96, 'Lebanon'),
(97, 'Lesotho'),
(98, 'Liberia'),
(99, 'Libya'),
(100, 'Liechtenstein'),
(101, 'Lithuania'),
(102, 'Luxembourg'),
(103, 'Madagascar'),
(104, 'Malawi'),
(105, 'Malaysia'),
(106, 'Maldives'),
(107, 'Mali'),
(108, 'Malta'),
(109, 'Marshall Islands'),
(110, 'Mauritania'),
(111, 'Mauritius'),
(112, 'Mexico'),
(113, 'Micronesia'),
(114, 'Moldova'),
(115, 'Monaco'),
(116, 'Mongolia'),
(117, 'Montenegro'),
(118, 'Morocco'),
(119, 'Mozambique'),
(120, 'Myanmar (formerly Burma)'),
(121, 'Namibia'),
(122, 'Nauru'),
(123, 'Nepal'),
(124, 'Netherlands'),
(125, 'New Zealand'),
(126, 'Nicaragua'),
(127, 'Niger'),
(128, 'Nigeria'),
(129, 'North Korea'),
(130, 'North Macedonia'),
(131, 'Norway'),
(132, 'Oman'),
(133, 'Pakistan'),
(134, 'Palau'),
(135, 'Palestine State'),
(136, 'Panama'),
(137, 'Papua New Guinea'),
(138, 'Paraguay'),
(139, 'Peru'),
(140, 'Philippines'),
(141, 'Poland'),
(142, 'Portugal'),
(143, 'Qatar'),
(144, 'Romania'),
(145, 'Russia'),
(146, 'Rwanda'),
(147, 'Saint Kitts and Nevis'),
(148, 'Saint Lucia'),
(149, 'Saint Vincent '),
(150, 'Samoa'),
(151, 'San Marino'),
(152, 'Sao Tome and Principe'),
(153, 'Saudi Arabia'),
(154, 'Senegal'),
(155, 'Serbia'),
(156, 'Seychelles'),
(157, 'Sierra Leone'),
(158, 'Singapore'),
(159, 'Slovakia'),
(160, 'Slovenia'),
(161, 'Solomon Islands'),
(162, 'Somalia'),
(163, 'South Africa'),
(164, 'South Korea'),
(165, 'South Sudan'),
(166, 'Spain'),
(167, 'Sri Lanka'),
(168, 'Sudan'),
(169, 'Suriname'),
(170, 'Sweden'),
(171, 'Switzerland'),
(172, 'Syria'),
(173, 'Tajikistan'),
(174, 'Tanzania'),
(175, 'Thailand'),
(176, 'Timor-Leste'),
(177, 'Togo'),
(178, 'Tonga'),
(179, 'Trinidad and Tobago'),
(180, 'Tunisia'),
(181, 'Turkey'),
(182, 'Turkmenistan'),
(183, 'Tuvalu'),
(184, 'Uganda'),
(185, 'Ukraine'),
(186, 'United Arab Emirates'),
(187, 'United Kingdom'),
(188, 'United States of America'),
(189, 'Uruguay'),
(190, 'Uzbekistan'),
(191, 'Vanuatu'),
(192, 'Venezuela'),
(193, 'Vietnam'),
(194, 'Yemen'),
(195, 'Zambia'),
(196, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `garden`
--

CREATE TABLE `garden` (
  `garden_id` int(11) NOT NULL,
  `garden_name` varchar(255) NOT NULL,
  `garden_lat1` float NOT NULL,
  `garden_long1` float NOT NULL,
  `garden_lat2` float NOT NULL,
  `garden_long2` float NOT NULL,
  `garden_lat3` float NOT NULL,
  `garden_long3` float NOT NULL,
  `garden_lat4` float NOT NULL,
  `garden_long4` float NOT NULL,
  `garden_lat5` float NOT NULL,
  `garden_long5` float NOT NULL,
  `garden_lat6` float NOT NULL,
  `garden_long6` float NOT NULL,
  `garden_lat7` float NOT NULL,
  `garden_long7` float NOT NULL,
  `garden_lat8` float NOT NULL,
  `garden_long8` float NOT NULL,
  `garden_lat9` float NOT NULL,
  `garden_long9` float NOT NULL,
  `garden_lat10` float NOT NULL,
  `garden_long10` float NOT NULL,
  `garden_lat11` float NOT NULL,
  `garden_long11` float NOT NULL,
  `garden_lat12` float NOT NULL,
  `garden_long12` float NOT NULL,
  `garden_lat13` float NOT NULL,
  `garden_long13` float NOT NULL,
  `garden_lat14` float NOT NULL,
  `garden_long14` float NOT NULL,
  `garden_lat15` float NOT NULL,
  `garden_long15` float NOT NULL,
  `garden_lat16` float NOT NULL,
  `garden_long16` float NOT NULL,
  `garden_coordinates` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE `lot` (
  `lot_id` int(11) NOT NULL,
  `lot_name` varchar(255) NOT NULL,
  `lot_lat` float DEFAULT NULL,
  `lot_long` float DEFAULT NULL,
  `block_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `lot_coordinates` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `occupant`
--

CREATE TABLE `occupant` (
  `occupant_id` int(11) NOT NULL,
  `occupant_firstname` varchar(250) NOT NULL,
  `occupant_middlename` varchar(250) NOT NULL,
  `occupant_lastname` varchar(250) NOT NULL,
  `occupant_gender` enum('female','male') NOT NULL,
  `occupant_dateofbirth` date NOT NULL,
  `occupant_dateofdeath` date NOT NULL,
  `occupant_birthplace` varchar(500) NOT NULL,
  `occupant_deathplace` varchar(250) NOT NULL,
  `occupant_causeofdeath` varchar(250) NOT NULL,
  `birth_country_id` int(11) NOT NULL,
  `death_country_id` int(11) NOT NULL,
  `owner_lot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(11) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `owner_contactno` varchar(50) NOT NULL,
  `owner_firstname` varchar(50) NOT NULL,
  `owner_middlename` varchar(50) NOT NULL,
  `owner_lastname` varchar(50) NOT NULL,
  `owner_street&brgy` varchar(50) NOT NULL,
  `owner_city/municipality` varchar(50) NOT NULL,
  `owner_province` varchar(50) NOT NULL,
  `owner_gender` enum('female','male') NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner_lot`
--

CREATE TABLE `owner_lot` (
  `owner_lot_id` int(11) NOT NULL,
  `date_avail` date NOT NULL,
  `lot_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `date_transfered` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `middlename` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `address` varchar(500) NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_level` enum('admin','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `contact_no`, `address`, `post_image`, `created_on`, `user_level`) VALUES
(16, 'admin', 'admin', 'admin', 'admin', 'admin', '09324371311', 'iligan city', NULL, '2020-01-15 15:13:02', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`),
  ADD KEY `garden_id` (`garden_id`);

--
-- Indexes for table `burial_type`
--
ALTER TABLE `burial_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `garden`
--
ALTER TABLE `garden`
  ADD PRIMARY KEY (`garden_id`);

--
-- Indexes for table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`lot_id`),
  ADD KEY `block_id` (`block_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `occupant`
--
ALTER TABLE `occupant`
  ADD PRIMARY KEY (`occupant_id`),
  ADD KEY `country_id` (`birth_country_id`),
  ADD KEY `countries_id` (`death_country_id`),
  ADD KEY `owner_lot_id` (`owner_lot_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `owner_lot`
--
ALTER TABLE `owner_lot`
  ADD PRIMARY KEY (`owner_lot_id`),
  ADD KEY `lot_id` (`lot_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `burial_type`
--
ALTER TABLE `burial_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `garden`
--
ALTER TABLE `garden`
  MODIFY `garden_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lot`
--
ALTER TABLE `lot`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `occupant`
--
ALTER TABLE `occupant`
  MODIFY `occupant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `owner_lot`
--
ALTER TABLE `owner_lot`
  MODIFY `owner_lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `block_ibfk_1` FOREIGN KEY (`garden_id`) REFERENCES `garden` (`garden_id`);

--
-- Constraints for table `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `lot_ibfk_1` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`),
  ADD CONSTRAINT `lot_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `burial_type` (`type_id`);

--
-- Constraints for table `occupant`
--
ALTER TABLE `occupant`
  ADD CONSTRAINT `occupant_ibfk_1` FOREIGN KEY (`owner_lot_id`) REFERENCES `owner_lot` (`owner_lot_id`),
  ADD CONSTRAINT `occupant_ibfk_2` FOREIGN KEY (`birth_country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `occupant_ibfk_3` FOREIGN KEY (`death_country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `owner_lot`
--
ALTER TABLE `owner_lot`
  ADD CONSTRAINT `owner_lot_ibfk_1` FOREIGN KEY (`lot_id`) REFERENCES `lot` (`lot_id`),
  ADD CONSTRAINT `owner_lot_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`),
  ADD CONSTRAINT `owner_lot_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
