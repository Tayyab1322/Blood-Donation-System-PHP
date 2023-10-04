-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 09:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(11) NOT NULL,
  `donor_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bgroup` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `longitude` varchar(250) NOT NULL,
  `accuracy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `donor_id`, `name`, `email`, `bgroup`, `password`, `latitude`, `longitude`, `accuracy`) VALUES
(138, 'bhola3190', 'bhola', 'bhola@gmail.com', 'B-', '5690d363233fab288d51e9b4b4c70edb', '29.3951083', '71.6956625', '21.739'),
(139, 'M Tayyab4869', 'M Tayyab', 'tayyab@gmail.com', 'O+', 'c5801728121f2135e4c756adb4e201b7', '29.395227', '71.695122', '23'),
(140, 'sohaib8869', 'sohaib', 'sohaib@gmail.com', 'A-', '5690d363233fab288d51e9b4b4c70edb', '29.3951109', '71.6956445', '12.826'),
(141, 'adil1225', 'Adil', 'adil@gmail.com', 'O+', '5690d363233fab288d51e9b4b4c70edb', '29.3951109', '71.6956445', '12.826'),
(142, 'qayyum6176', 'qayyum', 'qayyum@gmail.com', 'A+', 'f5bb0c8de146c67b44babbf4e6584cc0', '29.3951109', '71.6956445', '12.826'),
(143, 'adil8584', 'adil', 'adil@gmail.com', 'A-', 'f5bb0c8de146c67b44babbf4e6584cc0', '29.3951084', '71.6956519', '20'),
(144, 'burhan4221', 'burhan', 'burhan@gmail.com', 'B-', 'f5bb0c8de146c67b44babbf4e6584cc0', '29.3951109', '71.6956445', '12.826'),
(145, 'jalan1471', 'jalan', 'jalan@gmail.com', 'AB+', '5690d363233fab288d51e9b4b4c70edb', '29.3951084', '71.6956519', '20'),
(149, 'abdullah2126', 'abdullah', 'abdullah@gmail.com', 'AB-', 'f5bb0c8de146c67b44babbf4e6584cc0', '29.3951109', '71.6956502', '13.305'),
(150, 'manan5956', 'manan', 'manan@gmail.com', 'O-', '5690d363233fab288d51e9b4b4c70edb', '29.3951038', '71.695641', '13.705'),
(151, 'arham5615', 'arham', 'arham@gmail.com', 'AB-', '5690d363233fab288d51e9b4b4c70edb', '29.3951016', '71.6956451', '12.702'),
(152, 'Umar6177', 'Umar', 'Qayyumch235@gmail.com', 'B+', 'caeffde9a16bce9f4766a53b38a8dc1d', '29.395103', '71.6956435', '12.688'),
(153, 'sumair2192', 'sumair', 'sumair@gmail.com', 'O+', 'd7f590ff70503b9627193ed977a1d9b5', '29.3950943', '71.6956444', '20'),
(154, 'Mudasir7702', 'Mudasir', 'mudasir@gmail.com', 'B+', '8d237f3fb8837558e21a161f7eb0938c', '29.202673', '72.8529938', '36.9'),
(155, 'tayyab4193', 'tayyab', 'tayyab@gmail.com', 'A-', '347b7927ca86761f626d6a4c4ee01e84', '', '', ''),
(156, 'Sufyan8479', 'Sufyan', 'aha@gmail.com', 'A-', 'c5801728121f2135e4c756adb4e201b7', '29.2026489', '72.8527088', '20');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_info`
--

CREATE TABLE `receiver_info` (
  `id` int(11) NOT NULL,
  `receiverid` varchar(250) NOT NULL,
  `receiver_name` varchar(250) NOT NULL,
  `receiver_email` varchar(250) NOT NULL,
  `bgroup` varchar(250) NOT NULL,
  `latitude` varchar(1000) NOT NULL,
  `longitude` varchar(1000) NOT NULL,
  `accuracy` varchar(1000) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver_info`
--

INSERT INTO `receiver_info` (`id`, `receiverid`, `receiver_name`, `receiver_email`, `bgroup`, `latitude`, `longitude`, `accuracy`, `phone`) VALUES
(196, 'sdfsdfdf3231', 'sdfsdfdf', 'Tayyab@gmail.com', 'A-', '29.377253', '71.759323', '31', '03424776111'),
(197, 'Tayyab5065', 'Tayyab', 'nkjbkj@gmail.com', 'B+', '29.377253', '71.759323', '31', '778978978954'),
(198, 'Tayyab1193', 'Tayyab', 'Tayyab@gmail.com', 'A+', '29.377039', '71.759331', '70', '03424776111'),
(199, 'sdfsdfdf7589', 'sdfsdfdf', '31465@gmail.copm', 'A+', '29.377134', '71.7593', '36', '03424776111'),
(200, 'sd1822', 'sd', 'sds@gmail.com', 'A+', '29.377016', '71.759392', '30', '0342477611114'),
(201, 'Bajwa6667', 'Bajwa', 'bajwa@gmail.com', 'AB+', '29.3951128', '71.6956429', '13.584', '03424776111'),
(202, 'ADil5371', 'ADil', 'adil@gmail.com', 'A-', '29.395222', '71.695114', '24', '03424776111'),
(203, 'sdfdsf7101', 'sdfdsf', 'sdfd@sdfd.com', 'AB+', '29.395222', '71.695114', '24', '48421842154514'),
(204, 'Tayyab6342', 'Tayyab', 'Tayyab@gmail.com', 'AB+', '29.3951062', '71.6956463', '13.73', '78978978954'),
(205, 'Tayyab4727', 'Tayyab', '789789@gmail.com', 'B-', '29.3951062', '71.6956463', '13.73', '794515786168484'),
(206, 'Tayyab@gmaiol.com6777', 'Tayyab@gmaiol.com', 'Tayyab@ali.com', 'AB-', '', '', '', '789789789788'),
(207, 'Tayyab@gmaiol.com8757', 'Tayyab@gmaiol.com', 'Tayyab@gmail.com', 'AB-', '', '', '', '03424776111'),
(208, 'Tayyab@gmaiol.com6876', 'Tayyab@gmaiol.com', 'Tayyab@gmail.com', 'B-', '', '', '', '03424776111'),
(209, 'Abdul Qayyum9354', 'Abdul Qayyum', 'qayyumch235@gmail.com', 'O+', '29.3951098', '71.6956515', '20', '03441720926'),
(210, 'qayyum9417', 'qayyum', 'qayyum@gmail.com', 'AB+', '', '', '', '03424776111'),
(211, 'qayyum9546', 'qayyum', 'qayyum@gmail.com', 'O+', '', '', '', '03424776111'),
(212, 'qayyum6725', 'qayyum', 'qayyum@gmail.com', 'O+', '', '', '', '03424776111'),
(213, 'qayyum1940', 'qayyum', 'qayyum@gmail.com', 'O+', '', '', '', '03424776111'),
(214, 'qayyum8731', 'qayyum', 'qayyum@gmail.com', 'O+', '', '', '', '03424776111'),
(215, 'qayyum5588', 'qayyum', 'qayyum@gmail.com', 'O+', '', '', '', '03424776111'),
(216, 'qayyum2108', 'qayyum', 'qayyum@gmail.com', 'O+', '', '', '', '03424776111'),
(217, 'zdfdsf6969', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(218, 'zdfdsf2484', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(219, 'zdfdsf5206', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(220, 'zdfdsf4805', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(221, 'zdfdsf9526', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(222, 'zdfdsf3554', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(223, 'zdfdsf7281', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(224, 'zdfdsf4500', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(225, 'zdfdsf5814', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(226, 'zdfdsf9829', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(227, 'zdfdsf8863', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(228, 'zdfdsf8448', 'zdfdsf', 'sdfs@gmail.com', 'O+', '', '', '', '48465415488'),
(229, '4563240', '456', '456465@gmail.com', 'AB+', '', '', '', '4564564564564'),
(230, '4563240', '456', '456465@gmail.com', 'AB+', '', '', '', '4564564564564'),
(231, '4561956', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(232, '4561956', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(233, '4563697', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(234, '4563697', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(235, '4566929', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(236, '4566929', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(237, '4564679', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(238, '4564679', '456', '456465@gmail.com', 'O+', '', '', '', '4564564564564'),
(239, '4546424931', '454642', 'dfsf@gmail.com', 'O+', '', '', '', '23154548487'),
(240, '4546429798', '454642', 'dfsf@gmail.com', 'O+', '', '', '', '23154548487'),
(241, '4546422297', '454642', 'dfsf@gmail.com', 'O+', '', '', '', '23154548487'),
(242, '4546423857', '454642', 'dfsf@gmail.com', 'O+', '', '', '', '23154548487'),
(243, 'asd3457', 'asd', 'sadq@gmail.com', 'B-', '', '', '', '45454545454545'),
(244, 'tayyayb2204', 'tayyayb', 'gahah@gmail.com', 'AB+', '', '', '', '456456456456'),
(245, 'tayyayb5693', 'tayyayb', 'gahah@gmail.com', 'A+', '', '', '', '456456456456'),
(246, 'tayyayb8837', 'tayyayb', 'gahah@gmail.com', 'B-', '', '', '', '456456456456'),
(247, 'Mukhtar8901', 'Mukhtar', 'taimoor@gmail.com', 'AB+', '', '', '', '034247776111'),
(248, 'Mukhtar4595', 'Mukhtar', 'taimoor@gmail.com', 'O-', '', '', '', '034247776111'),
(249, 'Mukhtar9261', 'Mukhtar', 'taimoor@gmail.com', 'B+', '', '', '', '034247776111'),
(250, 'Mukhtar1216', 'Mukhtar', 'taimoor@gmail.com', 'A+', '', '', '', '034247776111'),
(251, '8978949070', '897894', 'sadasd@gmail.com', 'O+', '', '', '', '03424776114'),
(252, 'alyaan5897', 'alyaan', 'alyaan@gmail.com', 'O+', '', '', '', '034244776111'),
(253, 'hassan7780', 'hassan', 'hassan@gmail.com', 'A-', '', '', '', '03424761115645'),
(254, 'falak1274', 'falak', 'falak@gmail.com', 'AB+', '', '', '', '123456789963'),
(255, 'falak6449', 'falak', 'falak@gmail.com', 'O+', '', '', '', '123456789963'),
(256, 'galan5716', 'galan', 'agal@gmail.com', 'O+', '', '', '', '03424476442844'),
(257, 'jahan9768', 'jahan', 'jahan@gmail.com', 'AB-', '29.3951083', '71.6956625', '21.739', '034247761111'),
(258, 'jahan9412', 'jahan', 'jahan@gmail.com', 'O+', '29.3951083', '71.6956625', '21.739', '034247761111'),
(259, 'khalid7779', 'khalid', 'khalid@gmail.com', 'AB+', '', '', '', '456123789123456'),
(260, 'khalid4967', 'khalid', 'khalid@gmail.com', 'AB+', '', '', '', '1234656789524'),
(261, 'khalid2915', 'khalid', 'khalid@gmail.com', 'AB+', '', '', '', '1234656789524'),
(262, '877896708', '87789', '78979@gmnia.com', 'AB+', '', '', '', '235598959265'),
(263, '456451913', '45645', '5465464@gmail.com', 'AB+', '', '', '', '262565154154'),
(264, 'farukh8888', 'farukh', 'farukh@gmail.com', 'B-', '', '', '', '456456456456'),
(265, 'karan4804', 'karan', 'karan@gmail.com', 'B-', '', '', '', '7897897897545'),
(266, 'karanaujla7976', 'karanaujla', 'karan@gmail.com', 'B-', '', '', '', '7897897897545'),
(267, 'galam6166', 'galam', 'galam@gmail.com', 'B-', '', '', '', '111111111111111111111'),
(268, 'hamaza9587', 'hamaza', 'hamza@gmail.com', 'B+', '', '', '', '123456789456'),
(269, 'malak2968', 'malak', 'malak@gmail.com', 'AB-', '', '', '', '4545'),
(270, '456454554', '45645', '54564@gmail.com', 'A+', '', '', '', '7777777777777'),
(271, 'kalam6513', 'kalam', 'kalam@gmail.com', 'O-', '', '', '', '12354687987'),
(272, 'falak4961', 'falak', 'falak@gmail.com', 'B-', '29.3951109', '71.6956502', '13.305', '12312364587'),
(273, 'qadir5262', 'qadir', 'qadir@gmail.com', 'AB-', '', '', '', '77777777772'),
(274, 'hakim5982', 'hakim', 'hakim@gmail.com', 'AB-', '', '', '', '444444444444444'),
(275, 'hakim3228', 'hakim', 'hakim@gmail.com', 'A-', '29.3951038', '71.695641', '13.705', '456456456456'),
(276, 'hraaam2890', 'hraaam', 'hraam@gmail.com', 'AB-', '', '', '', '1234587571111'),
(277, 'khalid4735', 'khalid', 'khalid@gmail.com', 'AB-', '29.3951095', '71.6956546', '20', '789789789445'),
(278, 'asdas2219', 'asdas', 'zz@gmail.com', 'B-', '', '', '', '789456456121'),
(279, 'asdas3122', 'asdas', 'zz@gmail.com', 'AB-', '', '', '', '789456456121'),
(280, 'adnana1055', 'adnana', 'adnana@gmail.com', 'AB-', '', '', '', '03424776111'),
(281, 'qaayum2959', 'qaayum', 'qayyum@gmail.com', 'AB-', '', '', '', '456789789456'),
(282, 'tayyanb8123', 'tayyanb', 'tayyab@gmail.com', 'AB-', '', '', '', '034258458487878'),
(283, 'tayyanb2320', 'tayyanb', 'tayyab@gmail.com', 'AB-', '', '', '', '034258458487878'),
(284, 'receiv2631', 'receiv', 'sdfs@gmail.com', 'AB-', '', '', '', '034248787487485'),
(285, '4567899351', '456789', '789456@gmail.com', 'AB-', '', '', '', '4561234845484'),
(286, 'tayyayb7844', 'tayyayb', 'taimoor@gmail.com', 'B+', '29.395103', '71.6956435', '12.688', '03441720926'),
(287, 'hadi2968', 'hadi', 'hadi@gmail.com', 'A-', '29.395088', '71.6956448', '15.89', '03424776111'),
(288, 'hadi2858', 'hadi', 'hadi@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '45678979975214111'),
(289, 'aadil2756', 'aadil', 'aadil@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '111111111111'),
(290, 'aadil2432', 'aadil', 'aadil@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '111111111111'),
(291, 'aadil7739', 'aadil', 'aadil@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '111111111111'),
(292, 'aadil9759', 'aadil', 'aadil@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '111111111111'),
(293, 'aadil4579', 'aadil', 'aadil@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '111111111111'),
(294, 'yaaho9811', 'yaaho', 'yaahho@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '456789111111'),
(295, 'yaaho7028', 'yaaho', 'yaahho@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '456789111111'),
(296, 'yaaho2124', 'yaaho', 'yaahho@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '456789111111'),
(297, 'yaaho6778', 'yaaho', 'yaahho@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '456789111111'),
(298, 'yaaho4090', 'yaaho', 'yaahho@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '456789111111'),
(299, 'yaaho9923', 'yaaho', 'yaahho@gmail.com', 'AB-', '29.395088', '71.6956448', '15.89', '456789111111'),
(300, '7897858', '789', '789@gmail.com', 'AB-', '29.3951037', '71.6956419', '20', ''),
(301, 'qayyum2750', 'qayyum', 'qayum@gmail.com', 'AB-', '29.3951037', '71.6956419', '20', '03424776111'),
(302, '4787', '', '', 'B+', '29.3951037', '71.6956419', '20', ''),
(303, '15asa3051', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(304, '15asa4802', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(305, '15asa1362', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(306, '15asa9363', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(307, '15asa3487', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(308, '15asa6314', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(309, '15asa7327', '15asa', 'sdfs@ghsdf.com', 'A+', '29.39521', '71.695114', '25', '789789789789789'),
(310, '9969', '', '', 'B+', '29.395298', '71.695159', '64', ''),
(311, 'hamaza8782', 'hamaza', 'hamza@gmail.com', 'AB+', '29.395121', '71.695488', '22', '456789456123456'),
(312, 'sdfsdfdf3624', 'sdfsdfdf', 'asdds@gmail.com', 'AB+', '29.395121', '71.695488', '22', '45645645645646'),
(313, 'asas8886', 'asas', 'sadsa@gmail.com', 'AB+', '29.395121', '71.695488', '22', '65656565656565'),
(314, '4569444', '456', '456@gmail.com', 'AB-', '29.395121', '71.695488', '22', '789456123456789'),
(315, 'sadsad8881', 'sadsad', 'dsad@gmail.com', 'AB+', '29.395231', '71.695122', '20', '454654644623'),
(316, 'asdasd@2744', 'asdasd@', 'sdasd@gmail.com', 'B-', '29.395231', '71.695122', '20', '58448446456464'),
(317, '848487438', '84848', '4848@gmdi.com', 'AB-', '29.395231', '71.695122', '20', '231321312313'),
(318, 'Tayyab6821', 'Tayyab', 'tayyab@gmail.com', 'AB-', '29.395231', '71.695122', '20', '545448454154'),
(319, 'Tayyab6405', 'Tayyab', 'tayyab@gmail.com', 'AB-', '29.395231', '71.695122', '20', '545448454154'),
(320, 'sdasd5001', 'sdasd', 'sdas@gmail.com', 'B-', '29.395231', '71.695122', '20', '4564545646546'),
(321, '78978798233', '7897879', 'sdsd@gmail.com', 'O-', '29.395231', '71.695122', '20', '03424447484547'),
(322, 'Tayyab@gmail.com3475', 'Tayyab@gmail.com', '41567891546587@gmail.com', 'O-', '29.3950921', '71.695639', '14.424', '00000000000000000000000'),
(323, '789796750', '78979', 'tayyab@gmail.com', 'AB+', '29.395231', '71.695122', '20', '0342477611111'),
(324, '4s6ds6d7145', '4s6ds6d', 'sdsd@gmail.com', 'AB+', '29.395231', '71.695122', '20', '034244776111'),
(325, 'asdsd6378', 'asdsd', 'adssa@gmail.com', 'B+', '29.395231', '71.695122', '20', '484844448484'),
(326, '7897897897899445', '789789789789', '78978979@gmail.com', 'A-', '29.3951001', '71.6956407', '13.774', '034244766111'),
(327, 'haddd3675', 'haddd', 'hass@gmail.com', 'A-', '29.3951001', '71.6956407', '13.774', '1111111111111111111'),
(328, 'haddd2394', 'haddd', 'hass@gmail.com', 'A-', '29.3951001', '71.6956407', '13.774', '1111111111111111111'),
(329, '48775341', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(330, '48773188', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(331, '48771022', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(332, '48774113', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(333, '48777059', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(334, '48778796', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(335, '48773734', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(336, '48776670', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(337, '48772778', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(338, '48774754', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(339, '48774551', '4877', 'sdsd@gmail.com', 'AB+', '29.395121', '71.695488', '22', '15451545154'),
(340, '45454@gmail.com3349', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(341, '45454@gmail.com1267', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(342, '45454@gmail.com5956', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(343, '45454@gmail.com8663', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(344, '45454@gmail.com2041', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(345, '45454@gmail.com1553', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(346, '45454@gmail.com4457', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(347, '45454@gmail.com7862', '45454@gmail.com', '8789@gmail.com', 'B-', '29.395121', '71.695488', '22', '1234567895545'),
(348, '4564644645', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(349, '4564645961', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(350, '4564648927', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(351, '4564642658', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(352, '4564643732', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(353, '4564641783', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(354, '4564649009', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(355, '4564645947', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(356, '4564648184', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(357, '4564648764', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(358, '4564644637', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(359, '4564646650', '456464', '4546@gmail.com', 'B+', '29.395121', '71.695488', '22', '5655484848484'),
(360, '56653091', '5665', '5454@gmail.com', 'B-', '29.395298', '71.695159', '64', '034247776111'),
(361, '56653563', '5665', '5454@gmail.com', 'B-', '29.395298', '71.695159', '64', '034247776111'),
(362, 'asdsad4019', 'asdsad', 'sds@gmail.com', 'A+', '29.395298', '71.695159', '64', '4545454545454'),
(363, 'asdsad4038', 'asdsad', 'sds@gmail.com', 'A+', '29.395298', '71.695159', '64', '4545454545454'),
(364, 'asdsad7101', 'asdsad', 'sds@gmail.com', 'A+', '29.395298', '71.695159', '64', '4545454545454'),
(365, 'asdsad3782', 'asdsad', 'sds@gmail.com', 'A+', '29.395298', '71.695159', '64', '4545454545454'),
(366, 'asdsad9549', 'asdsad', 'sds@gmail.com', 'A+', '29.395298', '71.695159', '64', '4545454545454'),
(367, '78978976863', '7897897', '7879@gmail.com', 'B+', '29.395298', '71.695159', '64', '0342447761111'),
(368, '454644971', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(369, '454649355', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(370, '454648146', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(371, '454649845', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(372, '454643253', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(373, '454648119', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(374, '454646446', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(375, '454642482', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(376, '454645584', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(377, '454645726', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(378, '454642299', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(379, '454643083', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(380, '454648874', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(381, '454649682', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(382, '454644383', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(383, '454649878', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(384, '454645744', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(385, '454648470', '45464', 'sdfds@gmail.com', 'B+', '29.395298', '71.695159', '64', '1545454545454'),
(386, 'dfsd@6215', 'dfsd@', 'sdf@gmail.com', 'B+', '29.395298', '71.695159', '64', '456123789789'),
(387, 'sds@gmail.com6756', 'sds@gmail.com', '45678915484@gmail.com', 'O+', '29.395298', '71.695159', '64', '1234568484845454'),
(388, 'asdsa5470', 'asdsa', 'dfs@gmail.com', 'A-', '29.395298', '71.695159', '64', '777777777777777777'),
(389, 'sdsd@2059', 'sdsd@', 'sdfs@gmail.com', 'A+', '29.395298', '71.695159', '64', '454541545454'),
(390, 'sdsd@1742', 'sdsd@', 'sdfs@gmail.com', 'A+', '29.395298', '71.695159', '64', '454541545454'),
(391, 'sdfds9276', 'sdfds', 'df@gmail.com', 'AB+', '29.395298', '71.695159', '64', '1235454848454815'),
(392, 'sdfsd5672', 'sdfsd', 'dfsf@gmail.com', 'O-', '29.395298', '71.695159', '64', '12345645855554'),
(393, 'saddf6940', 'saddf', 'sdfdf@gmail.com', 'AB+', '29.395298', '71.695159', '64', '0342447641111'),
(394, 'saddf5151', 'saddf', 'sdfdf@gmail.com', 'AB+', '29.395298', '71.695159', '64', '0342447641111'),
(395, 'sfsd4397', 'sfsd', 'fg@fefsf.com', 'A+', '29.395298', '71.695159', '64', '23232323232'),
(396, 'sfsd9163', 'sfsd', 'fg@fefsf.com', 'A+', '29.395298', '71.695159', '64', '23232323232'),
(397, 'sfsd2262', 'sfsd', 'fg@fefsf.com', 'A+', '29.395298', '71.695159', '64', '23232323232'),
(398, '7893045', '789', '789789@gmail.com', 'O+', '29.395298', '71.695159', '64', '034247761111'),
(399, '7891930', '789', '789789@gmail.com', 'O+', '29.395298', '71.695159', '64', '034247761111'),
(400, '4546464239', '454646', '45464@gmail.com', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(401, 'sdfdf1076', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(402, 'sdfdf6441', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(403, 'sdfdf2786', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(404, 'sdfdf7592', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(405, 'sdfdf2383', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(406, 'sdfdf3941', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(407, 'sdfdf6928', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(408, 'sdfdf4507', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(409, 'sdfdf9912', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(410, 'sdfdf7644', 'sdfdf', 'sddsfd@gmail.co', 'B+', '29.395206', '71.695107', '24', '03424776111'),
(411, 'Tayyab9603', 'Tayyab', 'qayyum@gmail.com', 'B-', '29.395206', '71.695107', '24', '11111111111'),
(412, 'adil6443', 'adil', 'adil@gmail.com', 'B+', '29.395298', '71.695159', '64', '45678456789'),
(413, 'adil3259', 'adil', 'adil@gmail.com', 'B+', '29.395298', '71.695159', '64', '45678456789'),
(414, 'Mukhtar3554', 'Mukhtar', 'tayyab@gmail.com', 'B+', '29.3951037', '71.6956419', '20', '034247761111'),
(415, 'asdas7456', 'asdas', 'ADan@gmail.com', 'O+', '29.3951037', '71.6956419', '20', '03424776111'),
(416, 'asdas4279', 'asdas', 'ADan@gmail.com', 'O+', '29.3951037', '71.6956419', '20', '03424776111'),
(417, 'asdas3895', 'asdas', 'ADan@gmail.com', 'O+', '29.3951037', '71.6956419', '20', '03424776111'),
(418, 'arham6519', 'arham', 'arham@gmail.com', 'O+', '29.395206', '71.695107', '24', '03424776111'),
(419, 'abdullah2836', 'abdullah', 'abdullah@gmail.com', 'AB-', '29.3951016', '71.6956451', '12.702', '033369375111'),
(420, 'jalal4770', 'jalal', 'jalal@gmail.com', 'AB-', '29.3951016', '71.6956451', '12.702', '033545778541'),
(421, 'javed2398', 'javed', 'javed@gmail.com', 'AB-', '29.3951016', '71.6956451', '12.702', '03427788641'),
(422, 'adnan4067', 'adnan', 'adnan@gmail.com', 'O+', '29.3950943', '71.6956444', '20', '034247761111'),
(423, 'tayyab6649', 'tayyab', 'tayyab@gmail.com', 'AB-', '', '', '', '03424776111'),
(424, 'Tayyab1000', 'Tayyab', 'Tayyab@gmail.com', 'B+', '', '', '', '03424776111'),
(425, 'qayyum9308', 'qayyum', 'qayum@gmail.com', 'A-', '', '', '', '03424776111'),
(426, 'asasa9015', 'asasa', 'Tayyab@gmaiol.com', 'A-', '', '', '', '789789789789');

-- --------------------------------------------------------

--
-- Table structure for table `request _received`
--

CREATE TABLE `request _received` (
  `id` int(11) NOT NULL,
  `donor_id` varchar(250) NOT NULL,
  `receiver_id` varchar(250) NOT NULL,
  `receiver_name` varchar(250) NOT NULL,
  `receiver_email` varchar(250) NOT NULL,
  `receiver_phone` varchar(250) NOT NULL,
  `status` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request _received`
--

INSERT INTO `request _received` (`id`, `donor_id`, `receiver_id`, `receiver_name`, `receiver_email`, `receiver_phone`, `status`) VALUES
(14, 'sohaib8869', 'hakim3228', 'hakim', 'hakim@gmail.com', '2147483647', NULL),
(15, 'gh11', 'rh22', 'hakddd', 'haka@gamil.com', '2147483647', NULL),
(16, 'kka22', '33mds', 'kalam', 'kaalam@gmail.com', '789545445641111', NULL),
(17, 'arham5615', 'hraaam2890', 'hraaam', 'hraam@gmail.com', '1234587571111', 1),
(20, 'arham5615', 'adnana1055', 'adnana', 'adnana@gmail.com', '03424776111', 1),
(25, 'Umar6177', 'tayyayb7844', 'tayyayb', 'taimoor@gmail.com', '03441720926', 0),
(27, 'jalan1471', 'hamaza8782', 'hamaza', 'hamza@gmail.com', '456789456123456', 2),
(28, 'jalan1471', 'sdfsdfdf3624', 'sdfsdfdf', 'asdds@gmail.com', '45645645645646', 2),
(29, 'Umar6177', 'asdsd6378', 'asdsd', 'adssa@gmail.com', '484844448484', 2),
(30, 'adil8584', '7897897897899445', '789789789789', '78978979@gmail.com', '034244766111', 2),
(31, 'qayyum6176', 'asdsad9549', 'asdsad', 'sds@gmail.com', '4545454545454', 2),
(32, 'Umar6177', '78978976863', '7897897', '7879@gmail.com', '0342447761111', 2),
(33, 'jbjj8997', '7891930', '789', '789789@gmail.com', '034247761111', 2),
(34, 'Umar6177', '4546464239', '454646', '45464@gmail.com', '03424776111', 2),
(35, 'Umar6177', 'sdfdf7644', 'sdfdf', 'sddsfd@gmail.co', '03424776111', 2),
(36, 'Umar6177', 'adil3259', 'adil', 'adil@gmail.com', '45678456789', 2),
(37, 'arham5615', 'abdullah2836', 'abdullah', 'abdullah@gmail.com', '033369375111', 0),
(38, 'arham5615', 'jalal4770', 'jalal', 'jalal@gmail.com', '033545778541', 1),
(39, 'arham5615', 'javed2398', 'javed', 'javed@gmail.com', '03427788641', 1),
(40, 'sumair2192', 'adnan4067', 'adnan', 'adnan@gmail.com', '034247761111', 0),
(41, 'arham5615', 'tayyab6649', 'tayyab', 'tayyab@gmail.com', '03424776111', 0),
(42, 'Mudasir7702', 'Tayyab1000', 'Tayyab', 'Tayyab@gmail.com', '03424776111', 0),
(43, 'Sufyan8479', 'qayyum9308', 'qayyum', 'qayum@gmail.com', '03424776111', 1),
(44, 'Sufyan8479', 'asasa9015', 'asasa', 'Tayyab@gmaiol.com', '789789789789', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver_info`
--
ALTER TABLE `receiver_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request _received`
--
ALTER TABLE `request _received`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `receiver_info`
--
ALTER TABLE `receiver_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `request _received`
--
ALTER TABLE `request _received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
