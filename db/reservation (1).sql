-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 03:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `image`, `date`) VALUES
(1, 'bola', 'bola', 'images/IMG_20180723_125957.jpg', '2018-11-29 03:54:04'),
(2, 'tomiwa', 'tomiwa', 'images/IMG-20180728-WA0034.jpg', '2018-11-29 04:26:57'),
(3, 'tomiwa', 'tomiwa', 'images/IMG-20180728-WA0034.jpg', '2018-11-29 04:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `complete_reserve`
--

CREATE TABLE `complete_reserve` (
  `complete_reserve_id` int(200) NOT NULL,
  `rooms_id` int(11) NOT NULL,
  `receipt` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `no_room` varchar(100) NOT NULL,
  `no_adult` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `strt_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `paid` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'processing',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complete_reserve`
--

INSERT INTO `complete_reserve` (`complete_reserve_id`, `rooms_id`, `receipt`, `name`, `email`, `address`, `phone`, `no_room`, `no_adult`, `country`, `strt_date`, `end_date`, `days`, `price`, `paid`, `msg`, `status`, `date`) VALUES
(1, 5, 'JAYJAY-79902258', 'olajide ', 'olajidejoshua4real@gmail.com', 'elelu alakia/adegbayi ibadan', '08136023230', '1', '2', 'Nigeria', '12/01/2018', '12/03/2018', '2', '5000', '10000', 'For travelling purpose', 'PAID', '2018-12-03 17:46:38'),
(2, 3, 'JAYJAY-34111040', 'joshua tomiwa', 'joshuatomiwa@gmail.com', 'Apete Ibadan', '08100083561', '3', '3', 'Nigeria', '12/17/2018', '12/22/2018', '5', '7000', '35000', 'For tourism purpose', 'PAID', '2018-12-03 17:46:43'),
(9, 2, 'JAYJAY-369261013', 'ajeigbe', 'slimmjohn4real@gmail.com', 'elelu alakia/adegbayi ibadan', '08136023230', '1', '2', 'Nigeria', '12/01/2018', '12/22/2018', '21', '5000', '105000', 'For travelling purpose', 'PAID', '2018-12-04 08:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua And Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas The'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CD', 'Congo The Democratic Republic Of The'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)'),
(54, 'HR', 'Croatia (Hrvatska)'),
(55, 'CU', 'Cuba'),
(56, 'CY', 'Cyprus'),
(57, 'CZ', 'Czech Republic'),
(58, 'DK', 'Denmark'),
(59, 'DJ', 'Djibouti'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'TP', 'East Timor'),
(63, 'EC', 'Ecuador'),
(64, 'EG', 'Egypt'),
(65, 'SV', 'El Salvador'),
(66, 'GQ', 'Equatorial Guinea'),
(67, 'ER', 'Eritrea'),
(68, 'EE', 'Estonia'),
(69, 'ET', 'Ethiopia'),
(70, 'XA', 'External Territories of Australia'),
(71, 'FK', 'Falkland Islands'),
(72, 'FO', 'Faroe Islands'),
(73, 'FJ', 'Fiji Islands'),
(74, 'FI', 'Finland'),
(75, 'FR', 'France'),
(76, 'GF', 'French Guiana'),
(77, 'PF', 'French Polynesia'),
(78, 'TF', 'French Southern Territories'),
(79, 'GA', 'Gabon'),
(80, 'GM', 'Gambia The'),
(81, 'GE', 'Georgia'),
(82, 'DE', 'Germany'),
(83, 'GH', 'Ghana'),
(84, 'GI', 'Gibraltar'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'XU', 'Guernsey and Alderney'),
(92, 'GN', 'Guinea'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HT', 'Haiti'),
(96, 'HM', 'Heard and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HK', 'Hong Kong S.A.R.'),
(99, 'HU', 'Hungary'),
(100, 'IS', 'Iceland'),
(101, 'IN', 'India'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'JM', 'Jamaica'),
(109, 'JP', 'Japan'),
(110, 'XJ', 'Jersey'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea North'),
(116, 'KR', 'Korea South'),
(117, 'KW', 'Kuwait'),
(118, 'KG', 'Kyrgyzstan'),
(119, 'LA', 'Laos'),
(120, 'LV', 'Latvia'),
(121, 'LB', 'Lebanon'),
(122, 'LS', 'Lesotho'),
(123, 'LR', 'Liberia'),
(124, 'LY', 'Libya'),
(125, 'LI', 'Liechtenstein'),
(126, 'LT', 'Lithuania'),
(127, 'LU', 'Luxembourg'),
(128, 'MO', 'Macau S.A.R.'),
(129, 'MK', 'Macedonia'),
(130, 'MG', 'Madagascar'),
(131, 'MW', 'Malawi'),
(132, 'MY', 'Malaysia'),
(133, 'MV', 'Maldives'),
(134, 'ML', 'Mali'),
(135, 'MT', 'Malta'),
(136, 'XM', 'Man (Isle of)'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'YT', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia'),
(144, 'MD', 'Moldova'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'MS', 'Montserrat'),
(148, 'MA', 'Morocco'),
(149, 'MZ', 'Mozambique'),
(150, 'MM', 'Myanmar'),
(151, 'NA', 'Namibia'),
(152, 'NR', 'Nauru'),
(153, 'NP', 'Nepal'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NL', 'Netherlands The'),
(156, 'NC', 'New Caledonia'),
(157, 'NZ', 'New Zealand'),
(158, 'NI', 'Nicaragua'),
(159, 'NE', 'Niger'),
(160, 'NG', 'Nigeria'),
(161, 'NU', 'Niue'),
(162, 'NF', 'Norfolk Island'),
(163, 'MP', 'Northern Mariana Islands'),
(164, 'NO', 'Norway'),
(165, 'OM', 'Oman'),
(166, 'PK', 'Pakistan'),
(167, 'PW', 'Palau'),
(168, 'PS', 'Palestinian Territory Occupied'),
(169, 'PA', 'Panama'),
(170, 'PG', 'Papua new Guinea'),
(171, 'PY', 'Paraguay'),
(172, 'PE', 'Peru'),
(173, 'PH', 'Philippines'),
(174, 'PN', 'Pitcairn Island'),
(175, 'PL', 'Poland'),
(176, 'PT', 'Portugal'),
(177, 'PR', 'Puerto Rico'),
(178, 'QA', 'Qatar'),
(179, 'RE', 'Reunion'),
(180, 'RO', 'Romania'),
(181, 'RU', 'Russia'),
(182, 'RW', 'Rwanda'),
(183, 'SH', 'Saint Helena'),
(184, 'KN', 'Saint Kitts And Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'PM', 'Saint Pierre and Miquelon'),
(187, 'VC', 'Saint Vincent And The Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'XG', 'Smaller Territories of the UK'),
(200, 'SB', 'Solomon Islands'),
(201, 'SO', 'Somalia'),
(202, 'ZA', 'South Africa'),
(203, 'GS', 'South Georgia'),
(204, 'SS', 'South Sudan'),
(205, 'ES', 'Spain'),
(206, 'LK', 'Sri Lanka'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syria'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad And Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks And Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States Minor Outlying Islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State (Holy See)'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (US)'),
(241, 'WF', 'Wallis And Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'YU', 'Yugoslavia'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `pin` varchar(200) NOT NULL,
  `serial_no` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'unused',
  `receipt_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `pin`, `serial_no`, `status`, `receipt_date`) VALUES
(1, 'JAYJAY-79902258', 'JAYJAY-943161126', 'used', '2018-12-03 21:08:11'),
(2, 'JAYJAY-34111040', 'JAYJAY-1108988515', 'used', '2018-12-03 21:08:16'),
(3, 'JAYJAY-369261013', 'JAYJAY-1023683497', 'used', '2018-12-04 08:53:39'),
(4, 'JAYJAY-626135400', 'JAYJAY-1282729011', 'unused', '2018-12-04 09:07:33'),
(5, 'JAYJAY--389229430', 'JAYJAY-300025638', 'unused', '2018-11-27 02:44:13'),
(6, 'JAYJAY-203708146', 'JAYJAY-1075249120', 'unused', '2018-11-27 02:44:13'),
(7, 'JAYJAY-1344574834', 'JAYJAY-864725727', 'unused', '2018-11-27 02:44:13'),
(8, 'JAYJAY-703889150', 'JAYJAY-798203465', 'unused', '2018-11-27 02:44:13'),
(9, 'JAYJAY--507686485', 'JAYJAY-1248554829', 'unused', '2018-11-27 02:44:13'),
(10, 'JAYJAY-857570220', 'JAYJAY-1475600091', 'unused', '2018-11-27 02:44:13'),
(11, 'JAYJAY-629396882', 'JAYJAY-377939294', 'unused', '2018-11-29 03:36:32'),
(12, 'JAYJAY-287202106', 'JAYJAY-707941886', 'unused', '2018-11-29 03:36:32'),
(13, 'JAYJAY--575786246', 'JAYJAY-764551027', 'unused', '2018-11-29 03:36:32'),
(14, 'JAYJAY--14158906', 'JAYJAY-252807876', 'unused', '2018-11-29 03:36:32'),
(15, 'JAYJAY-1045301171', 'JAYJAY-970291773', 'unused', '2018-11-29 03:36:33'),
(16, 'JAYJAY-1077655080', 'JAYJAY-1112901589', 'unused', '2018-12-03 22:36:49'),
(17, 'JAYJAY--369073466', 'JAYJAY-1262076674', 'unused', '2018-12-03 22:51:34'),
(18, 'JAYJAY-595216543', 'JAYJAY-457070350', 'unused', '2018-12-04 00:14:17'),
(19, 'JAYJAY-38024819', 'JAYJAY-1447947700', 'unused', '2018-12-04 00:14:17'),
(20, 'JAYJAY-1180978856', 'JAYJAY-373417519', 'unused', '2018-12-04 00:14:17'),
(21, 'JAYJAY--309257871', 'JAYJAY-1479774037', 'unused', '2018-12-04 00:14:17'),
(22, 'JAYJAY-117735459', 'JAYJAY-420548324', 'unused', '2018-12-04 00:14:17'),
(23, 'JAYJAY--669064655', 'JAYJAY-996813721', 'unused', '2018-12-04 00:14:17'),
(24, 'JAYJAY--123092432', 'JAYJAY-553940676', 'unused', '2018-12-04 00:14:17'),
(25, 'JAYJAY--173058349', 'JAYJAY-1023074797', 'unused', '2018-12-04 00:14:17'),
(26, 'JAYJAY--276251665', 'JAYJAY-1441425910', 'unused', '2018-12-04 00:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserve_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `no_room` varchar(200) NOT NULL,
  `no_adult` varchar(200) NOT NULL,
  `strt_date` varchar(200) NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `reserve_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`reserve_id`, `name`, `email`, `phone`, `no_room`, `no_adult`, `strt_date`, `end_date`, `msg`, `reserve_date`) VALUES
(1, 'ola', 'obaphemmy@gmail.com', '090', '1', '1', '11/29/2018', '11/30/2018', 'travelling', '2018-11-28 21:41:54'),
(2, 'tomiwa', 'tomiwa@gmail.com', '08136023230', '1', '2', '11/29/2018', '11/29/2018', 'For travelling purposes', '2018-11-29 05:38:00'),
(3, 'olajide', 'olajide@gmail.com', '0901292872', '2', '2', '11/29/2018', '11/30/2018', 'For travelling purposes', '2018-11-29 05:39:16'),
(4, 'olajide joshua', 'olajidejoshua4real@gmail.com', '08136023230', '1', '2', '11/30/2018', '12/01/2018', 'Travelling, then will branch at the hotel then take my leave the following day', '2018-11-29 17:28:09'),
(5, 'olope', 'olope@gmail.com', '0901982989', '1', '2', '11/30/2018', '12/08/2018', 'Olope lope ye o Jesu', '2018-11-29 19:49:37'),
(6, 'Bankole Obafemi', 'obahphemmy@gmail.com', '08136023230', '1', '1', '11/30/2018', '12/02/2018', 'For Honey moon, between i and my wife', '2018-11-29 20:06:37'),
(7, 'joshua', 'joshua@gmail.com', '0901901922', '1', '1', '11/30/2018', '12/02/2018', 'Travelling nani', '2018-11-30 00:02:06'),
(8, 'bonfreejoe', 'bonfreejoe@gmail.com', '08136023230', '1', '2', '11/30/2018', '12/03/2018', 'Travelling purpose nani', '2018-11-30 00:04:14'),
(9, 'a', 'a@gmail.com', '99999999', '1', '2', '11/30/2018', '12/01/2018', 'a', '2018-11-30 00:08:55'),
(10, 'ola', 'ola@gmail.com', '00', '1', '3', '11/30/2018', '12/02/2018', 'rrr', '2018-11-30 00:11:01'),
(11, 'a', 'o@gmail.com', '4', '1', '2', '11/30/2018', '12/01/2018', '4444', '2018-11-30 00:12:37'),
(12, 'oop', 'oop@gmail.com', '44', '1', '3', '11/30/2018', '12/02/2018', 'desktop', '2018-11-30 00:15:09'),
(13, 'b', 'b@gmail.com', '2222', '2', '4', '11/30/2018', '12/02/2018', 'nfnfnf', '2018-11-30 00:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `rooms_id` int(200) NOT NULL,
  `room_name` varchar(200) NOT NULL,
  `room_slug` varchar(200) NOT NULL,
  `room_price` varchar(200) NOT NULL,
  `room_size` varchar(200) NOT NULL,
  `room_image` varchar(300) NOT NULL,
  `room_description` text NOT NULL,
  `room_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rooms_id`, `room_name`, `room_slug`, `room_price`, `room_size`, `room_image`, `room_description`, `room_date`) VALUES
(2, 'double', 'doble', '5000', '55q', '../images/8.jpg', 'A room assigned to two people. May have one or more beds.\n\nThe room size or area of Double Rooms are generally between 40 m² to 45 m².', '2018-11-29 21:48:52'),
(3, 'Triple ', 'Triple ', '7000', '60q', '../images/9.jpg', ' A room that can accommodate three persons and has been fitted with three twin beds, one double bed and one twin bed or two double beds', '2018-11-29 21:48:58'),
(4, 'Quad', 'Triple ', '7000', '70q', '../images/9.jpg', 'A room with a queen-sized bed. May be occupied by one or more people.\n\nThe room size or area of Queen Rooms are generally between 32 m² to 50 m².', '2018-11-29 21:49:02'),
(5, 'Single', 'Single', '1500', '30q * 30q', '../images/11.jpg', 'A room assigned to one person. May have one or more beds.\r\n\r\nThe room size or area of Single Rooms are generally between 37 mÂ² to 45 m. Room Type In hotel - Single Room ', '2018-11-29 23:07:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete_reserve`
--
ALTER TABLE `complete_reserve`
  ADD PRIMARY KEY (`complete_reserve_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`rooms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `complete_reserve`
--
ALTER TABLE `complete_reserve`
  MODIFY `complete_reserve_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserve_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `rooms_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
