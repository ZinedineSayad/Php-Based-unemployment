-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2019 at 01:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apptestnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_emp`
--

DROP TABLE IF EXISTS `client_emp`;
CREATE TABLE IF NOT EXISTS `client_emp` (
  `id_emploi` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `client_comp` varchar(255) NOT NULL,
  `date_crt` datetime NOT NULL,
  PRIMARY KEY (`id_emploi`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_emp`
--

INSERT INTO `client_emp` (`id_emploi`, `id_client`, `domain`, `titre`, `discription`, `client_comp`, `date_crt`) VALUES
(4, 4, 'sdfg', 'sd', 'sdqg', 'sddfg', '2019-06-16 00:00:00'),
(5, 1, 'ghjk', 'ghj', 'hjk', 'ghjk', '2019-06-16 15:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `client_services`
--

DROP TABLE IF EXISTS `client_services`;
CREATE TABLE IF NOT EXISTS `client_services` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `domaine` varchar(255) DEFAULT NULL,
  `descri` varchar(255) NOT NULL,
  `client` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `client` (`client`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_services`
--

INSERT INTO `client_services` (`Id`, `titre`, `domaine`, `descri`, `client`) VALUES
(1, 'ùlpjo', 'ompjkhb', 'lpùkojk', 1),
(2, 'kjuhgyt', 'ljkhu', 'lm,kjbhvg', 1),
(3, 'kjuyjhtg', 'lihjg', 'mkjhgmùlkjhbgvlmk,jhubygmùlkjg', 1),
(4, 'fghjkl', 'ghjklm', 'ghjklmù', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_user`
--

DROP TABLE IF EXISTS `client_user`;
CREATE TABLE IF NOT EXISTS `client_user` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date_cr` datetime NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_user`
--

INSERT INTO `client_user` (`id_client`, `name`, `p_name`, `email`, `pass`, `date_cr`) VALUES
(1, 'Khimouzi', 'ferhat', 'f@g.fr', '1100', '2019-06-13 01:50:49'),
(2, 'Basset', 'Ke', 'bassetgueddou@gmail.com', '123123', '2019-06-13 08:50:03'),
(3, 'Wissam', 'Djidjeli', 'wissam@gmail.com', 'wissam', '2019-06-13 13:01:00'),
(4, 'Assia', 'hhhhhh', 'hh@gmail.om', 'hhhhh', '2019-06-16 02:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `intitul` varchar(255) DEFAULT NULL,
  `niveau` varchar(200) DEFAULT NULL,
  `cv` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_emp`),
  KEY `emploi_ibfk_1` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entreprise_users`
--

DROP TABLE IF EXISTS `entreprise_users`;
CREATE TABLE IF NOT EXISTS `entreprise_users` (
  `Ent_name` varchar(30) NOT NULL,
  `Ent_email` varchar(255) NOT NULL,
  `Ent_Contact` varchar(20) DEFAULT 'Not required',
  `Ent_pays` varchar(40) NOT NULL,
  `Ent_Adresse` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `date_De_creation` datetime NOT NULL,
  PRIMARY KEY (`Ent_name`),
  KEY `Ent_name` (`Ent_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entreprise_users`
--

INSERT INTO `entreprise_users` (`Ent_name`, `Ent_email`, `Ent_Contact`, `Ent_pays`, `Ent_Adresse`, `Password`, `date_De_creation`) VALUES
('aaa', 'aaa@aaa.om', '', 'aaa', 'mmmm', '123', '2019-06-13 12:10:28'),
('Bosh', 'Bosh@gmail.com', '', 'Italy', 'Italy', 'bosh', '2019-06-12 19:04:07'),
('Condor', 'condor@gmail.com', '', 'algeria', 'Bordj_Bouaririj', '123123', '2019-06-12 01:50:29'),
('Deseign gouraya', 'gouraya@gmail.com', '', 'Algérie', 'Bejaia', 'gouraya', '2019-06-13 12:52:21'),
('ivital', 'aaaaa@fff.om', '', 'algtri', 'bjaia', '123', '2019-06-13 12:09:25'),
('Labelle', 'Labelle@alg.dz', '', 'Algérie', 'bejaia', '00000000', '2019-06-11 11:56:53'),
('Sonatrach', 'Sonatrach@gmail.com', '', 'Algeria', 'Bejaia centr vil', '1231231234', '2019-05-29 02:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_users`
--

DROP TABLE IF EXISTS `freelance_users`;
CREATE TABLE IF NOT EXISTS `freelance_users` (
  `Free_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Free_name` varchar(30) NOT NULL,
  `Free_LastN` varchar(30) NOT NULL,
  `Free_BirthDate` date NOT NULL,
  `Free_sex` varchar(20) NOT NULL,
  `Free_email` varchar(255) NOT NULL,
  `Free_pays` varchar(80) NOT NULL,
  `Free_adress` varchar(255) DEFAULT 'Not _required',
  `Free_contact` varchar(20) DEFAULT NULL,
  `Free_password` varchar(255) NOT NULL,
  `date_De_creation` datetime NOT NULL,
  PRIMARY KEY (`Free_id`),
  KEY `Free_id` (`Free_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_users`
--

INSERT INTO `freelance_users` (`Free_id`, `Free_name`, `Free_LastN`, `Free_BirthDate`, `Free_sex`, `Free_email`, `Free_pays`, `Free_adress`, `Free_contact`, `Free_password`, `date_De_creation`) VALUES
(6, 'Keddou', 'Abdelbaset', '1995-12-11', 'Masculin', 'bassetgueddou@gmail.com', 'Algérie', 'Bejaia', '', 'basset', '2019-06-12 19:00:01'),
(7, 'Khellal', 'Assia', '1996-07-26', 'Feminin', 'assia@gmail.com', 'Algérie', 'Bejaia', '', 'assia', '2019-06-12 19:00:53'),
(8, 'Djidjeli', 'Wissam', '1998-01-12', 'Feminin', 'wissam@gmail.com', 'Algérie', 'bejaia', '', 'wissam', '2019-06-12 19:01:33'),
(9, 'Beldjoudi', 'Lamine', '1995-02-11', 'Masculin', 'lamine@gmail.com', 'Algérie', 'Bejaia', '', 'lamine', '2019-06-12 19:02:38'),
(10, 'Amirouche', 'Gueddoudj', '2000-01-01', 'Masculin', 'amirouche@gmail.com', 'Algérie', 'Bejaia', '', 'amirouche', '2019-06-12 19:03:16'),
(11, 'ferhat', 'khimouzi', '1993-02-02', 'Feminin', 'ferhatkhim@gmail.com', 'Algerie', 'Guendouza Akbou', '', 'ferhat1', '2019-06-13 01:45:49'),
(12, 'brahim', 'ao', '1996-01-09', 'Masculin', 'h@h.fr', 'binglaish', 'boooooooooo3oooo', '', '1230', '2019-06-16 02:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `Id_job` int(11) NOT NULL AUTO_INCREMENT,
  `ent` varchar(30) NOT NULL,
  `Intut` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `t_contrat` varchar(60) DEFAULT NULL,
  `Descreiption` text NOT NULL,
  `date_cre` datetime NOT NULL,
  PRIMARY KEY (`Id_job`),
  KEY `ent` (`ent`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Id_job`, `ent`, `Intut`, `comp`, `adr`, `secteur`, `t_contrat`, `Descreiption`, `date_cre`) VALUES
(7, 'Bosh', 'Ingénieur mécanique', 'Solidworks', 'Italy', 'Mécanique', 'CDI', 'On cherche un ingénieur, master 2 ou équivalent.....', '2019-06-12 22:09:48'),
(8, 'Condor', 'On cherche un ingénieur en développement.', 'dev, c++, c#..', 'Bba..', 'Informatique', 'CDI', 'On cherche un ingénieur en développement capable de ....', '2019-06-12 22:16:08'),
(9, 'Deseign gouraya', 'Deseigner', 'Photoshop', 'bejaia', 'Infographie', 'CDI', 'besoin d\'un deseigner....', '2019-06-13 12:57:27'),
(10, 'Sonatrach', 'fghjk', 'fghjkl', 'fghjkl', 'ghjkl', 'ghjkl', 'fghjklm', '2019-06-16 15:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(80) NOT NULL,
  `descr` text NOT NULL,
  `prix` varchar(70) DEFAULT 'Not required',
  `date_a` datetime NOT NULL,
  PRIMARY KEY (`id_service`),
  KEY `id_service` (`id_service`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id_service`, `name`, `type`, `descr`, `prix`, `date_a`) VALUES
(12, 'Fabrication de freins à main pour les automobiles sur commande.', 'Mécanique, electronique', 'Bosh vous propose la fabrication de freins à main pour les automobiles sur commande.', '', '2019-06-12 19:24:49'),
(21, 'Des flyer à un prix exceptionnel', 'Infographie', 'Des flyer à un prix exceptionnel  chez gouraya deseign....', '300', '2019-06-13 12:54:33'),
(30, 'je fais ...........', 'info', 'hkkj', '', '2019-06-16 12:05:14'),
(31, 'ghjkj', 'hjk', 'gjovjfihg', '1000', '2019-06-16 15:04:20'),
(32, 'jeghehkj', 'ghjkl', 'fghjklm', '1000', '2019-06-16 15:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `services_added_by`
--

DROP TABLE IF EXISTS `services_added_by`;
CREATE TABLE IF NOT EXISTS `services_added_by` (
  `Ent` varchar(30) DEFAULT NULL,
  `user` smallint(6) DEFAULT NULL,
  `id_service` int(11) NOT NULL,
  KEY `Ent` (`Ent`),
  KEY `id_service` (`id_service`),
  KEY `services_added_by_ibfk_3` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_added_by`
--

INSERT INTO `services_added_by` (`Ent`, `user`, `id_service`) VALUES
('Bosh', NULL, 12),
('Deseign gouraya', NULL, 21),
(NULL, 6, 30),
('Sonatrach', NULL, 31),
(NULL, 6, 32);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_emp`
--
ALTER TABLE `client_emp`
  ADD CONSTRAINT `client_emp_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client_user` (`id_client`) ON DELETE CASCADE;

--
-- Constraints for table `client_services`
--
ALTER TABLE `client_services`
  ADD CONSTRAINT `client_services_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client_user` (`id_client`) ON DELETE CASCADE;

--
-- Constraints for table `emploi`
--
ALTER TABLE `emploi`
  ADD CONSTRAINT `emploi_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client_user` (`id_client`) ON DELETE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`ent`) REFERENCES `entreprise_users` (`Ent_name`) ON DELETE CASCADE;

--
-- Constraints for table `services_added_by`
--
ALTER TABLE `services_added_by`
  ADD CONSTRAINT `services_added_by_ibfk_1` FOREIGN KEY (`Ent`) REFERENCES `entreprise_users` (`Ent_name`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_added_by_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_added_by_ibfk_3` FOREIGN KEY (`user`) REFERENCES `freelance_users` (`Free_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
