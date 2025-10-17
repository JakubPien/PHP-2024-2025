-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 17, 2025 at 11:15 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3p_02_pracownicy_w_kolorze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `color`) VALUES
(1, 'Hillel', 'Sirr', 'hsirr0@ovh.net', 'Male', '177.182.5.224', '#c2b7f3'),
(2, 'Mickie', 'Carlaw', 'mcarlaw1@microsoft.com', 'Male', '64.172.178.46', '#c151e4'),
(3, 'Estrella', 'Mercik', 'emercik2@wikispaces.com', 'Bigender', '77.251.83.212', '#2fef68'),
(4, 'Alexandro', 'Swanwick', 'aswanwick3@prnewswire.com', 'Male', '95.218.148.200', '#95e980'),
(5, 'Freddi', 'Sherry', 'fsherry4@usda.gov', 'Female', '24.23.171.184', '#c99064'),
(6, 'Burr', 'Haley', 'bhaley5@who.int', 'Male', '130.139.58.98', '#e8d47f'),
(7, 'Clotilda', 'Gossipin', 'cgossipin6@freewebs.com', 'Female', '196.45.173.32', '#9696fb'),
(8, 'Ilysa', 'Slimming', 'islimming7@reddit.com', 'Female', '137.164.213.165', '#0f8984'),
(9, 'Law', 'Gunstone', 'lgunstone8@smh.com.au', 'Male', '250.51.136.72', '#443f2e'),
(10, 'Elijah', 'Piborn', 'epiborn9@springer.com', 'Male', '134.176.114.250', '#5765f5'),
(11, 'Orella', 'Galgey', 'ogalgeya@privacy.gov.au', 'Female', '198.143.82.124', '#f5b4a5'),
(12, 'Darryl', 'Whitfield', 'dwhitfieldb@mediafire.com', 'Female', '229.102.55.36', '#f566d6'),
(13, 'Cilka', 'Dittson', 'cdittsonc@google.pl', 'Female', '155.85.162.13', '#60af54'),
(14, 'Jae', 'Chessor', 'jchessord@vkontakte.ru', 'Male', '210.245.10.77', '#e6e60e'),
(15, 'Leda', 'Bunney', 'lbunneye@liveinternet.ru', 'Genderqueer', '231.108.182.44', '#fa3689'),
(16, 'Carmelita', 'Coulthard', 'ccoulthardf@google.com', 'Female', '70.119.198.94', '#22ff98'),
(17, 'Keriann', 'Groves', 'kgrovesg@bravesites.com', 'Female', '209.135.224.6', '#e54caf'),
(18, 'Eldredge', 'Nutter', 'enutterh@jimdo.com', 'Male', '2.214.187.203', '#e8912d'),
(19, 'Hort', 'Conibere', 'hconiberei@1und1.de', 'Male', '146.36.191.205', '#f50b4a'),
(20, 'Nilson', 'Dod', 'ndodj@google.com.au', 'Male', '226.119.55.41', '#a9448e'),
(21, 'Nehemiah', 'Dunsmore', 'ndunsmorek@instagram.com', 'Male', '78.193.175.173', '#856844'),
(22, 'Klaus', 'Upstell', 'kupstelll@unesco.org', 'Male', '148.170.133.79', '#7233ce'),
(23, 'Laural', 'Neild', 'lneildm@bluehost.com', 'Female', '145.183.248.215', '#05c4f2'),
(24, 'Timothy', 'Watford', 'twatfordn@a8.net', 'Non-binary', '174.156.39.19', '#f96bd6'),
(25, 'Shauna', 'Maplesden', 'smaplesdeno@bbb.org', 'Female', '0.76.138.18', '#591041'),
(26, 'Nara', 'Chazelle', 'nchazellep@addthis.com', 'Female', '63.84.13.85', '#f6e479'),
(27, 'Ursulina', 'Twyford', 'utwyfordq@delicious.com', 'Female', '76.97.150.154', '#d6dd41'),
(28, 'Binnie', 'Guys', 'bguysr@soup.io', 'Female', '138.120.167.56', '#470b04'),
(29, 'Erl', 'Espinet', 'eespinets@whitehouse.gov', 'Male', '187.152.163.94', '#8f87f0'),
(30, 'Cheri', 'Cazalet', 'ccazalett@google.ru', 'Female', '191.209.125.159', '#fa28b4'),
(31, 'Charin', 'Elener', 'celeneru@artisteer.com', 'Female', '172.243.3.180', '#03a27a'),
(32, 'Ginger', 'Cheatle', 'gcheatlev@stanford.edu', 'Male', '74.23.126.229', '#e2ddc9'),
(33, 'Bibbie', 'Delap', 'bdelapw@soundcloud.com', 'Female', '57.210.10.65', '#8bd6d6'),
(34, 'Arnie', 'Vidyapin', 'avidyapinx@tinypic.com', 'Male', '102.205.214.94', '#aa63f2'),
(35, 'Andriette', 'Mileham', 'amilehamy@scientificamerican.com', 'Female', '102.19.111.97', '#9532be'),
(36, 'Whitney', 'Shemwell', 'wshemwellz@mozilla.com', 'Female', '95.154.226.167', '#a2ae93'),
(37, 'Brennan', 'McCrow', 'bmccrow10@sourceforge.net', 'Male', '165.131.47.31', '#c42bf9'),
(38, 'Elinore', 'Klugman', 'eklugman11@unc.edu', 'Female', '156.92.6.249', '#a89744'),
(39, 'Megan', 'Rembrant', 'mrembrant12@webnode.com', 'Polygender', '247.169.58.88', '#14d68e'),
(40, 'Philis', 'Smalecombe', 'psmalecombe13@wiley.com', 'Female', '8.127.159.78', '#c000ca'),
(41, 'Romeo', 'Searchwell', 'rsearchwell14@lulu.com', 'Male', '195.136.89.243', '#5d15f9'),
(42, 'Early', 'Woltering', 'ewoltering15@princeton.edu', 'Non-binary', '6.205.183.172', '#0eea48'),
(43, 'Marve', 'Shelborne', 'mshelborne16@bloomberg.com', 'Male', '130.2.221.123', '#3f699d'),
(44, 'Bram', 'Bosward', 'bbosward17@phoca.cz', 'Male', '182.149.76.76', '#6afc19'),
(45, 'Rhys', 'Dumphries', 'rdumphries18@mlb.com', 'Male', '98.104.254.226', '#350e8a'),
(46, 'Solly', 'McCadden', 'smccadden19@cnn.com', 'Male', '239.139.87.145', '#d17b97'),
(47, 'Lucias', 'Bartkowiak', 'lbartkowiak1a@youku.com', 'Male', '125.70.225.223', '#c10a21'),
(48, 'Saunders', 'Croser', 'scroser1b@dion.ne.jp', 'Male', '55.49.159.31', '#080af4'),
(49, 'Quentin', 'Battie', 'qbattie1c@admin.ch', 'Polygender', '145.141.49.214', '#ed505c'),
(50, 'Birk', 'Cotter', 'bcotter1d@yelp.com', 'Male', '240.15.161.113', '#0238cc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
