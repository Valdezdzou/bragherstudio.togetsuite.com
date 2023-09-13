-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 06 juil. 2023 à 07:46
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `togetsuite_bar`
--

-- --------------------------------------------------------

--
-- Structure de la table `tsb_factures`
--
CREATE DATABASE togetsuite_bar;
use togetsuite_bar;

CREATE TABLE `tsb_factures` (
  `fa_id` int(10) NOT NULL,
  `fa_code` varchar(100) NOT NULL,
  `pr_designation` varchar(100) NOT NULL,
  `pr_prix_vente` varchar(50) NOT NULL,
  `fa_quantite` varchar(50) NOT NULL,
  `us_name` varchar(200) NOT NULL,
  `fa_client` varchar(100) NOT NULL,
  `fa_phone` varchar(100) NOT NULL,
  `fa_status` varchar(100) NOT NULL,
  `fa_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_factures`
--

INSERT INTO `tsb_factures` (`fa_id`, `fa_code`, `pr_designation`, `pr_prix_vente`, `fa_quantite`, `us_name`, `fa_client`, `fa_phone`, `fa_status`, `fa_date`) VALUES
(562, '483415435', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '6560648963', 'Pay', '2023/05/18'),
(563, '511444698', 'BEAUF LIGHT ORDI-TANGO', '650', '10', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(564, '101444698', 'BOOSTER COLA-JIN', '650', '9', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(568, '511444698', 'COCA PALETTE 6', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(569, '501444698', 'BEAUF LIGHT ORDI-TANGO', '650', '4', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(570, '404149676', 'BEAUF LIGHT ORDI-TANGO', '650', '7', 'POUM', 'POUM - TB05', '6566064153', 'Close', '2023/05/19'),
(571, '404419676', 'BOOSTER COLA-JIN', '650', '6', 'POUM', 'POUM - TB05', '6566064153', 'Close', '2023/05/19'),
(572, '613991641', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(573, '613998141', 'CASTEL', '650', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(574, '613998611', 'TONIC', '300', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(575, '113958641', 'BEAUF LIGHT ORDI-TANGO', '650', '16', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(662, '453405435', 'BEAUF LIGHT ORDI-TANGO', '650', '6', 'POUM', 'DF', '6560648963', 'Pay', '2023/06/18'),
(663, '501444698', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(664, '551444698', 'BOOSTER COLA-JIN', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(665, '505444698', 'CASTEL', '650', '3', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(666, '501544698', 'KADJI', '650', '5', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(667, '501454698', 'TONIC', '300', '8', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(668, '501445698', 'COCA PALETTE 6', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(669, '501444598', 'BEAUF LIGHT ORDI-TANGO', '650', '4', 'POUM', 'DF', '', 'Pay', '2023/06/18'),
(670, '404449656', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'POUM - TB05', '6566064153', 'Close', '2023/06/19'),
(671, '504449676', 'BOOSTER COLA-JIN', '650', '3', 'POUM', 'POUM - TB05', '6566064153', 'Close', '2023/06/19'),
(672, '613998641', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', '1234', '', 'Pay', '2023/06/19'),
(673, '613988641', 'CASTEL', '650', '1', 'POUM', '1234', '', 'Pay', '2023/06/19'),
(674, '683998641', 'TONIC', '300', '10', 'POUM', '1234', '', 'Pay', '2023/06/19'),
(675, '813998641', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', '1234', '', 'Pay', '2023/06/19'),
(762, '483405435', 'BEAUF LIGHT ORDI-TANGO', '650', '4', 'POUM', 'DF', '6560648963', 'Pay', '2023/07/8'),
(763, '508444698', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/07/8'),
(764, '501844698', 'BOOSTER COLA-JIN', '650', '5', 'POUM', 'DF', '', 'Pay', '2023/07/9'),
(765, '501484698', 'CASTEL', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/07/10'),
(766, '501448698', 'KADJI', '650', '8', 'POUM', 'DF', '', 'Pay', '2023/07/13'),
(767, '501444898', 'TONIC', '300', '1', 'POUM', 'DF', '', 'Pay', '2023/07/18'),
(768, '501444688', 'COCA PALETTE 6', '650', '9', 'POUM', 'DF', '', 'Pay', '2023/07/18'),
(769, '801444698', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/07/18'),
(770, '404459676', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'POUM - TB07', '6566064153', 'Close', '2023/07/19'),
(771, '454449676', 'BOOSTER COLA-JIN', '650', '1', 'POUM', 'POUM - TB07', '6566064153', 'Close', '2023/07/19'),
(772, '513998641', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', '1234', '', 'Pay', '2023/07/19'),
(773, '653998641', 'CASTEL', '650', '1', 'POUM', '1234', '', 'Pay', '2023/07/19'),
(774, '615998641', 'TONIC', '300', '1', 'POUM', '1234', '', 'Pay', '2023/07/19'),
(775, '613598641', 'BEAUF LIGHT ORDI-TANGO', '650', '10', 'POUM', '1234', '', 'Pay', '2023/07/20'),
(776, '613958641', 'TONIC', '850', '10', 'POUM', '1234', '', 'Pay', '2023/07/20'),
(777, '613995641', 'BOOSTER COLA-JIN', '650', '1', 'POUM', '1234', '', 'Pay', '2023/07/21');

-- --------------------------------------------------------

--
-- Structure de la table `tsb_fournisseurs`
--

CREATE TABLE `tsb_fournisseurs` (
  `fo_id` int(10) NOT NULL,
  `fo_name` varchar(50) NOT NULL,
  `fo_contact` varchar(100) NOT NULL,
  `fo_ville` varchar(50) NOT NULL,
  `fo_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_fournisseurs`
--

INSERT INTO `tsb_fournisseurs` (`fo_id`, `fo_name`, `fo_contact`, `fo_ville`, `fo_date`) VALUES
(3, 'Brassérie du Cameroun', '+237 656064159 / Mr ZANGA', 'Yaoundé', '2023-04-09'),
(4, 'UBC', 'Yolande / 656064153', 'Maroua', '2023-04-13'),
(5, 'Alino', '691687992', 'Yaoundé', '2023-04-17');

-- --------------------------------------------------------

--
-- Structure de la table `tsb_produits`
--

CREATE TABLE `tsb_produits` (
  `pr_id` int(11) NOT NULL,
  `pr_type` varchar(50) NOT NULL,
  `pr_volume` varchar(50) NOT NULL,
  `pr_designation` varchar(50) NOT NULL,
  `pr_prix_vente` varchar(50) NOT NULL,
  `pr_categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_produits`
--

INSERT INTO `tsb_produits` (`pr_id`,`pr_type`, `pr_designation`,`pr_categorie`,`pr_volume`) VALUES
(1,'CASIER','CASTEL','Alcoolisé','50 CL'),
(2,'CASIER', 'MUTZIG','Alcoolisé','50 CL'),
(3,'CASIER', 'CASTEL','Alcoolisé','50 CL'),
(4,'CASIER', '33 EXPORT','Alcoolisé','65 CL'),
(5,'CASIER', 'MANYAN','Alcoolisé','50 CL'),
(6,'CASIER', 'CHILL','Alcoolisé','50 CL'),
(8,'CASIER', 'BEAUFORT LAGER','Alcoolisé','50 CL'),
(10,'CASIER', 'BEAUFORT TANGO','Alcoolisé','50 CL'),
(11,'CASIER','DOPEL MUNICH','Alcoolisé','50 CL'),
(12,'CASIER', 'CASTLE MILK STOUT','Alcoolisé','65 CL'),
(13,'CASIER',' MUTZIG', 'Alcoolisé','65 CL'),
(14,'CASIER',' CASTEL', 'Alcoolisé','65 CL'),
(15,'CASIER',' DOPPEL MUNICH ', 'Alcoolisé','65 CL'),
(16,'CASIER',' JAPAP ', 'Alcoolisé','65 CL'),
(17,'CASIER',' PELFORTH EXTRA STOUT ', 'Alcoolisé','65 CL'),
(18,'CASIER',' ISENBECK  ', 'Alcoolisé','50 CL'),
(19,'CASIER',' CASTEL', 'Alcoolisé','33 CL'),
(20,'CASIER',' 33 EXPORT ', 'Alcoolisé','33 CL'),
(21,'CASIER',' CHILL', 'Alcoolisé','33 CL'),
(22,'CASIER',' BEAUFORT LIGHT', 'Alcoolisé','33 CL'),
(23,'CASIER',' BEAUFORT LAGER', 'Alcoolisé','33 CL' ),
(24,'CASIER',' PELFORTH EXTRA STOUT', 'Alcoolisé','33 CL'),
(25,'CASIER',' CASTLE MILK STOUT', 'Alcoolisé','33 CL'),
(26,'CASIER',' DOPEL MUNICH', 'Alcoolisé','33 CL'),
(27,'CASIER',' MUTZIG', 'Alcoolisé','33 CL'),
(28,'CASIER',' ISENBECK', 'Alcoolisé','33 CL' ),
(29,'CARTON', '33 EXPORT BOITE', 'Alcoolisé','33 CL'),
(30,'CARTON', 'MÜTZIG BOITE', 'Alcoolisé','33 CL'),
(31,'CARTON', 'CASTEL BOITE', 'Alcoolisé','33 CL'),
(32,'CARTON', 'MANYAN BOITE', 'Alcoolisé','50 CL'),
(33,'CARTON', 'CHILL BOITE', 'Alcoolisé','50 CL'),
(34,'CARTON', 'BEAUFORT LIGHT', 'Alcoolisé','50 CL' ),
(35,'CARTON', 'BEAUFORT LAGER BOITE', 'Alcoolisé','50 CL'),
(36,'CARTON', '33 EXPORT BOITE', 'Alcoolisé','50CL'),
(37,'CARTON', 'MÜTZIG BOITE', 'Alcoolisé','50 CL'),
(38,'CARTON', 'CASTEL BOITE', 'Alcoolisé','50 CL'),
(39,'CARTON', 'ISENBECK BOITE', 'Alcoolisé','50 CL'),
(40,'CARTON', 'HEINEKEN BOITES ', 'Alcoolisé','50 CL'),
(41,'CARTON', 'HEINEKEN BOUTEILLES', 'Alcoolisé','33 CL'),
(42,'A','FUT ISENBECK', 'Alcoolisé','20L'),
(43,'A','FUT BEAUFORT LIGHT', 'Alcoolisé','20L' ),
(44,'A','FUT BEAUFORT LAGER', 'Alcoolisé','20L'),
(45,'A','FUT CASTLE MILF STOUT', 'Alcoolisé','30L'),
(46,'A','FUT BEAUFORT LIGHT', 'Alcoolisé','30L'),
(47,'A','FUT BEAUFORT LAGER	', 'Alcoolisé','20L' ),
(48,'A','FUT ISENBECK', 'Alcoolisé','30L'),
(49,'A','FUT MANYAN', 'Alcoolisé','50L'  ),
(50,'A','FUT BEAUFORT LIGHT', 'Alcoolisé','50L'),
(51,'A','FUT BEAUFORT LAGER', 'Alcoolisé','50L' ),
(52,'A','FUT CASTEL BEER', 'Alcoolisé','50L'),
(53,'A','FUT "33" EXPORT', 'Alcoolisé','50L' ),
(54,'A','FUT ISENBECK', 'Alcoolisé','50L'  ),
(55,'CASIER','BOOSTER GIN TONIC', 'Alcoolisé','50 Cl'),
(56,'CASIER','BOOSTER RHUM GINGER', 'Alcoolisé','50 Cl'),
(57,'CASIER',' BOOSTER RACINE', 'Alcoolisé','50 Cl' ),
(58, 'CASIER',' BOOSTER CARAMEL', 'Alcoolisé','30 CL'),
(59, 'CASIER',' BOOSTER WHISKY COLA', 'Alcoolisé', '50 CL'),   
(60, 'CARTON',' BOOSTER WHISKY COLA BOITES', 'Alcoolisé', '50 CL'),
(61, 'CASIER',' BOOSTER CIDER', 'Alcoolisé', '30CL'),   
(62, 'CASIER',' BOOSTER CIDER', 'Alcoolisé', '50CL'),   
(63, 'CASIER',' BOOSTER WHISKY COLA', 'Alcoolisé', '33 CL'),   
(64, 'CASIER',' SODA WATER', 'Non Alcoolisé', '60 CL'),	  
(65, 'CASIER',' COCA-COLA', 'Non Alcoolisé', '60 CL'),
(66, 'CASIER',' COCA-COLA ZERO ', 'Non Alcoolisé', '60 CL'),	    
(67, 'CASIER',' FANTA POMME', 'Non Alcoolisé', '60 CL'),   
(68, 'CASIER',' FANTA ORANGE', 'Non Alcoolisé', '60 CL'),	  
(69, 'CASIER',' SPRITE', 'Non Alcoolisé', '60 CL'), 	  
(70, 'CASIER',' SPRITE ZERO ', 'Non Alcoolisé',	'60 CL'),   
(71, 'CASIER',' SCHWEPPES AGRUME ', 'Non Alcoolisé',	'60 CL'),   
(72, 'CASIER',' DJINO COCKTAIL ', 'Non Alcoolisé',	'60 CL'),   
(73, 'CASIER',' VIMTO ', 'Non Alcoolisé',	'60 CL'),   
(74, 'CASIER',' TOP ANANAS', 'Non Alcoolisé',	'60 CL'),   
(75, 'CASIER',' TOP GRENADINE', 'Non Alcoolisé',	'60 CL'),   
(76, 'CASIER',' TOP ORANGE', 'Non Alcoolisé',	'60 CL'),   
(77, 'CASIER',' TOP PAMPLEMOUSSE', 'Non Alcoolisé',	'60 CL'),   
(78, 'CASIER',' TOP COLA', 'Non Alcoolisé',	'60 CL'),   
(79, 'CASIER',' TOP LEMON', 'Non Alcoolisé',	'60 CL'),   
(80, 'CASIER',' ORANGINA', 'Non Alcoolisé',	'60 CL'),   
(81, 'CASIER',' COCA-COLA', 'Non Alcoolisé', '30 CL'),  
(82, 'CASIER',' COCA-COLA ZERO', 'Non Alcoolisé',	'30 CL'),   
(83, 'CASIER',' FANTA POMME', 'Non Alcoolisé',	'30 CL'),   
(84, 'CASIER',' FANTA ORANGE', 'Non Alcoolisé',	'30 CL'),   
(85, 'CASIER',' SPRITE', 'Non Alcoolisé',	'30 CL'),
(86, 'CASIER',' SCHWEPPES AGRUME', 'Non Alcoolisé',	'30 CL'),   
(87, 'CASIER',' TOP ANANAS', 'Non Alcoolisé',	'30 CL'),   
(88, 'CASIER',' TOP GRENADINE', 'Non Alcoolisé',	'30 CL'),   
(89, 'CASIER',' TOP ORANGE', 'Non Alcoolisé',	'30 CL'),   
(90, 'CASIER',' TOP PAMPLEMOUSSE', 'Non Alcoolisé',	'30 CL'),  
(91, 'CASIER',' ORANGINA', 'Non Alcoolisé',	'30 CL'),   
(92, 'CASIER',' VIMTO', 'Non Alcoolisé',	'30 CL'),   
(93, 'CASIER',' TOPTONIC', 'Non Alcoolisé',	'30 CL'),   
(94, 'CASIER',' TOPSODA', 'Non Alcoolisé',	'30 CL'),   
(95, 'CASIER',' MALTA TONIC', 'Non Alcoolisé','30CL'),   
(96, 'CASIER',' XXL', 'Non Alcoolisé',	'30 CL'),   
(97, 'CASIER',' XXL LOVE', 'Non Alcoolisé',	'30 CL'),   
(98, 'PACK 12', 'COCA-COLA PET', 'Non Alcoolisé',	'35 CL'),   
(99, 'PACK 12', 'FANTA POMME PET', 'Non Alcoolisé',	'35 CL'),    
(100, 'PACK 12', 'FANTA ORANGE PET', 'Non Alcoolisé',	'35 CL'),    
(101, 'PACK 12', 'COCA-COLA ZERO PET', 'Non Alcoolisé',	'35 CL'),    
(102, 'PACK 12', 'SPRITE  PET', 'Non Alcoolisé',	'35 CL'),    
(103, 'PACK 12', 'SPRITE  ZERO PET', 'Non Alcoolisé',	'35 CL'),    
(104, 'PACK 12', 'SCHWEPPES AGRUME PET', 'Non Alcoolisé',	'35 CL'),    
(105, 'PACK 12', 'TOP ANANAS PET', 'Non Alcoolisé',	'35 CL'),    
(106, 'PACK 6', 'TOP GRENADINE PET', 'Non Alcoolisé',	'35 CL'),

(107,'PACK 6',' TOP ORANGE PET', 'Non Alcoolisé', 	'35 CL'),    
(108,'PACK 12',' TOP PAMPLEMOUSSE PET', 'Non Alcoolisé', 	'5CL'),    
(109,'PACK 12',' TOP COLA PET', 'Non Alcoolisé', 	'35 CL'),    
(110,'PACK 12',' TOP LEMON PET', 'Non Alcoolisé', 	'35 CL'),    
(111, 'PACK 12',' DJINO COCKTAIL FRUITS', 'Non Alcoolisé','RAS'),    
(112, 'PACK 12',' ORANGINA PET', 'Non Alcoolisé', 	'35CL'),    
(113, 'PACK 12',' VIMTO PET', 'Non Alcoolisé', 	'35CL'),    
(114, 'PACK 12',' XXL  PET', 'Non Alcoolisé', 	'35 CL'),    
(115, 'PACK 12',' XXL LOVE  PET', 'Non Alcoolisé', 	'35 CL'),    
(116, 'PACK 12',' TOPTONIC', 'Non Alcoolisé', 	'35 CL'),    
(117, 'PACK 12',' SODA WATER', 'Non Alcoolisé', 	'35 CL'),    
(118, 'PACK',' SIROP MENTHE', 'Non Alcoolisé', 	'50 CL'),    
(119, 'PACK',' SIROP ORANGE', 'Non Alcoolisé', 	'50 CL'),    
(120, 'CARTON',' MALTA TONIC BOITES', 'Non Alcoolisé', 	'33 CL'),    
(121, 'CARTON',' XXL BOITES', 'Non Alcoolisé', 	'33 CL'),       
(122, 'PACK DE 6',' FANTA ORANGE BOITES', 'Non Alcoolisé', 	'33 CL'),    
(123, 'PACK',' SPRITE BOITES', 'Non Alcoolisé', 	'33 CL'),    
(124, 'CARTON',' VIMTO BOITES', 'Non Alcoolisé', 	'33 CL'),    
(125, 'CARTON',' ORANGINA BOITES', 'Non Alcoolisé', 	'33 CL'),    
(126, 'CARTON',' MALTA TONIC BOITES', 'Non Alcoolisé', 	'50 CL'),    
(127, 'PACK',' SPRITE ZERO PET', 'Non Alcoolisé', 	'100 CL'),    
(128, 'PACK DE 6',' COCA-COLA PET', 'Non Alcoolisé', 	'100 CL'),    
(129, 'PACK DE 6',' FANTA POMME PET', 'Non Alcoolisé', 	'100 CL'),    
(130, 'PACK DE 6',' COCA-ZERO PET', 'Non Alcoolisé', 	'100 CL'),    
(131, 'PACK DE 6 ','FANTA ORANGE PET', 'Non Alcoolisé', 	'100'),    
(132, 'PACK',' SPRITE PET', 'Non Alcoolisé', 'RAS'),    
(133, 'PACK',' SCHWEPPES AGRUME PET', 'Non Alcoolisé', 	'100 CL'),    
(134, 'PACK',' TOPANANAS PET', 'Non Alcoolisé', 	'100 CL'),    
(135, 'PACK',' TOPGRENADINE PET', 'Non Alcoolisé', 	'100 CL'),    
(136, 'PACK',' TOPAMPLEMOUSSE PET', 'Non Alcoolisé', 	'100 CL'),    
(137, 'PACK',' TOPORANGE PET', 'Non Alcoolisé', 	'100 CL'),    
(138, 'PACK',' TOPCOLA PET', 'Non Alcoolisé', 	'100 CL'),    
(139, 'PACK',' TOPLEMON PET', 'Non Alcoolisé',	'100 CL'),    
(140, 'PACK 6', 'DJINO COCKTAIL FRUITS PET', 'Non Alcoolisé',	'100 CL'),
(141, 'PACK DE 6', 'COCA-COLA BOITES', 'Non Alcoolisé',	'33 CL'),
(142, 'PACK 6',' ORANGINA PET', 'Non Alcoolisé',	'100CL'),    
(143, 'PACK 6',' VIMTO PET', 'Non Alcoolisé',	'100CL'),    
(144, 'PACK',' SOURCE TANGUI', 'Non Alcoolisé',	'50 CL'),    
(145, 'PACK',' SOURCE VITALE', 'Non Alcoolisé',	'50 CL'),    
(146, 'PACK',' SOURCE TANGUI', 'Non Alcoolisé',	'33 CL'),    
(147, 'PACK',' SOURCE TANGUI', 'Non Alcoolisé',	'100 CL'),    
(148, 'PACK',' SOURCE TANGUI', 'Non Alcoolisé',	'150 CL'),    
(149, 'A','EAU VITALE', 'Non Alcoolisé',	'150 CL'),    
(150, 'PACK',' EAU VITALE CD EXT', 'Non Alcoolisé',	' 150 CL '),    
(151, 'A','EAU VITALE ', 'Non Alcoolisé',	'150 CL PROMO'),    
(152, 'PACK',' SOURCE TANGUI ', 'Non Alcoolisé',	'180 CL PROMO'),    
(153, 'BIDON',' SOURCE TANGUI ', 'Non Alcoolisé',	'5L PROMO'),    
(154, 'BIDON',' SOURCE TANGUI ', 'Non Alcoolisé',	'10L PROMO'),    
(155, 'BIDON',' EAU VITALE', 'Non Alcoolisé',	'10L'),    
(156, 'BIDON',' EAU VITALE CD EXTER', 'Non Alcoolisé',	' 10L'),    
(157, 'BIDON',' EAU VITALE PROMO', 'Non Alcoolisé',	'10L'),    
(158, 'PACK',' SOURCE TANGUI AROMATISEES', 'Non Alcoolisé',	'0.5L'),   
(159, 'PACK',' SOURCE TANGUI AROMATISEES', 'Non Alcoolisé',	'33 CL'),  
(160, 'PACK',' SOURCE TANGUI AROMATISEES', 'Non Alcoolisé',	'1.0L'),   
(161, 'PACK',' SOURCE TANGUI AROMATISEES', 'Non Alcoolisé',	'1.5L');

-- --------------------------------------------------------

--
-- Structure de la table `tsb_stocks`
--

CREATE TABLE `tsb_stocks` (
  `st_id` int(10) NOT NULL,
  `pr_id_fk` int(10) NOT NULL,
  `fo_id` int(10) NOT NULL,
  `st_quantite` int(10) NOT NULL,
  `stc_quantite` int(10) DEFAULT NULL,
  `st_status` varchar(100) NOT NULL,
  `stc_quantite_vente` int(10) DEFAULT NULL,
  `st_prix_achat` int(10) NOT NULL,
  `st_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_stocks`
--

INSERT INTO `tsb_stocks` (`st_id`, `pr_id_fk`, `fo_id`, `st_quantite`, `stc_quantite`, `stc_quantite_vente`, `st_prix_achat`,`st_status`, `st_date`) VALUES
(299, 1, 3, 15, 0, 0, 650,'comptoir', '2023/05/24'),
(300, 2, 3, 15, 0, 0, 650,'magasin', '2023/05/24'),
(301, 3, 3, 15, 0, 0, 650,'magasin', '2023/05/24'),
(302, 4, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(303, 5, 3, 0, 0, 0, 0,'magasin', '2023/05/24'),
(304, 6, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(306, 8, 3, 0, 0, 0, 0,'magasin', '2023/05/24'),
(308, 10, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(309, 11, 3, 0, 0, 0, 0,'magasin', '2023/05/24'),
(310, 12, 3, 0, 0, 0, 0,'magasin', '2023/05/24'),
(311, 13, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(312, 14, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(313, 15, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(314, 16, 3, 0, 0, 0, 0,'magasin', '2023/05/24'),
(315, 17, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(316, 18, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(317, 19, 3, 0, 0, 0, 0,'magasin','2023/05/24'),
(318, 20, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(319, 21, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(321, 23, 3, 0, 0, 0, 0,'magasin', '2023/05/24'),
(322, 24, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(323, 25, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(324, 26, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(325, 27, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(326, 28, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(327, 29, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(328, 30, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(329, 31, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(330, 32, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(331, 33, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(332, 34, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(333, 35, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(334, 36, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(335, 37, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(336, 38, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(337, 39, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(338, 40, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(339, 41, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(340, 42, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(341, 43, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(342, 44, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(343, 45, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(344, 46, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(345, 47, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(346, 48, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(347, 49, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(348, 50, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(349, 51, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(350, 52, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(351, 53, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(352, 54, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(353, 55, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(354, 56, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(355, 57, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(356, 58, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(357, 59, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(358, 60, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(359, 61, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(360, 62, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(361, 63, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(362, 64, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(363, 65, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(364, 66, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(365, 67, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(366, 68, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(367, 69, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(368, 70, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(369, 71, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(370, 72, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(371, 73, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(372, 74, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(373, 75, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(374, 76, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(375, 77, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(376, 78, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(377, 79, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(378, 80, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(379, 81, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(380, 82, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(381, 83, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(382, 84, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(383, 85, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(384, 86, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(385, 87, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(386, 88, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(387, 89, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(388, 90, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(389, 91, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(390, 92, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(391, 93, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(392, 94, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(393, 95, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(394, 96, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(395, 97, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(396, 98, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(397, 99, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(398, 100, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(399, 101, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(400, 102, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(401, 103, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(402, 104, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(403, 105, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(404, 106, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(405, 107, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(406, 108, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(407, 109, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(408, 110, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(409, 111, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(410, 112, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(411, 113, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(412, 114, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(413, 115, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(414, 116, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(415, 117, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(416, 118, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(417, 119, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(418, 120, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(419, 121, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(420, 122, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(421, 123, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(422, 124, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(423, 125, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(424, 126, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(425, 127, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(426, 128, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(427, 129, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(428, 130, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(429, 131, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(430, 132, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(431, 133, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(432, 134, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(433, 135, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(434, 136, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(435, 137, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(436, 138, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(437, 139, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(438, 140, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(439, 141, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(440, 142, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(441, 143, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(442, 144, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(443, 145, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(444, 146, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(445, 147, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(446, 148, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(447, 149, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(448, 150, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(449, 151, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(450, 152, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(451, 153, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(452, 154, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(453, 155, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(454, 156, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(455, 157, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(456, 158, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(457, 159, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(458, 160, 3, 0, 0, 0, 0,'comptoir', '2023/05/24'),
(459, 161, 3, 0, 0, 0, 0,'comptoir', '2023/05/24');

-- -------------------------------------------------------


CREATE TABLE `tsb_bar`(
  `bar_id` int(11) NOT NULL AUTO_INCREMENT,
  `bar_nom` varchar(50) NOT NULL,
  `bar_phone` varchar(50) NOT NULL UNIQUE,
  `bar_regime` varchar(50) NOT NULL,
  `bar_pwd` varchar(50) NOT NULL,
  `bar_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 
  PRIMARY KEY (`bar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tsb_bar` (`bar_id`,`bar_nom`,`bar_phone`,`bar_regime`,`bar_pwd`) VALUES
(1,'LE MIMOSA','677899009','régime 1','b1d5781111d84f7b3fe45a0852e59758cd7a87e5'),
(2,'LE MIMO','677899007','régime 2','b1d5781111d84f7b3fe45a0852e59758cd7a87e5'),
(3,'LE MIM','677899006','régime 10','b1d5781111d84f7b3fe45a0852e59758cd7a87e5');




--
-- Structure de la table `tsb_users`
--


CREATE TABLE `tsb_users` (
  `us_id` int(10) NOT NULL AUTO_INCREMENT,
  `us_name` varchar(50) NOT NULL,
  `us_phone` varchar(50) NOT NULL,
  `us_password` varchar(50) NOT NULL,
  `us_type` varchar(50) NOT NULL,
  `us_status` varchar(100) NOT NULL,
  `bar_id` int(10) NOT NULL,
   PRIMARY KEY (`us_id`),
   FOREIGN KEY (`bar_id`) REFERENCES `tsb_bar` (`bar_id`)
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_users`
--

INSERT INTO `tsb_users` (`us_id`, `us_name`, `us_phone`, `us_password`, `us_type`, `us_status`,`bar_id`) VALUES
(6, 'POUM', '656064153', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Admin', 'Active',1),
(18, 'Pauline', '656064154', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Service','Active',1),
(19, 'Valdez', '656064155', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'magasinier','Active',1),
(20, 'Anita', '656064156', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Caisse','Active',1);

--
-- Index pour les tables déchargées
--



--
-- Index pour la table `tsb_factures`
--
ALTER TABLE `tsb_factures`
  ADD PRIMARY KEY (`fa_id`),
  ADD KEY `fa_code` (`fa_code`);

--
-- Index pour la table `tsb_fournisseurs`
--
ALTER TABLE `tsb_fournisseurs`
  ADD PRIMARY KEY (`fo_id`);

--
-- Index pour la table `tsb_produits`
--
ALTER TABLE `tsb_produits`
  ADD PRIMARY KEY (`pr_id`);

--
-- Index pour la table `tsb_stocks`
--
ALTER TABLE `tsb_stocks`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `fk_st_fo` (`fo_id`),
  ADD KEY `fk_st_pr_kf` (`pr_id_fk`);

--

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tsb_factures`
--
ALTER TABLE `tsb_factures`
  MODIFY `fa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=777;

--
-- AUTO_INCREMENT pour la table `tsb_fournisseurs`
--
ALTER TABLE `tsb_fournisseurs`
  MODIFY `fo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tsb_produits`
--
ALTER TABLE `tsb_produits`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `tsb_stocks`
--
ALTER TABLE `tsb_stocks`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;


--
-- AUTO_INCREMENT pour la table `tsb_users`
--
ALTER TABLE `tsb_users`
  MODIFY `us_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tsb_stocks`
--
ALTER TABLE `tsb_stocks`
  ADD CONSTRAINT `fk_st_fo` FOREIGN KEY (`fo_id`) REFERENCES `tsb_fournisseurs` (`fo_id`),
  ADD CONSTRAINT `fk_st_pr_kf` FOREIGN KEY (`pr_id_fk`) REFERENCES `tsb_produits` (`pr_id`);
COMMIT;


CREATE TABLE `tsb_ristourne`(
   `id_ristourne` INT NOT NULL AUTO_INCREMENT,
   `regime` varchar(50),
   `pr_designation` varchar(50),
   `v_ristourne` int(10),
    PRIMARY KEY(`id_ristourne`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tsb_ristourne (regime, pr_designation, v_ristourne)
VALUES 
   ('A', 'BEAUF LIGHT ORDI-TANGO', 10), 
   ('A', 'BOOSTER COLA-JIN', 20), 
   ('A', 'CASTEL', 30),
   ('A', 'DOPPEL', 40),
   ('A', 'GRANDE GUINNESS', 50),
   ('A', 'EXPORT 33', 60),
   ('A', 'INSENBECK', 70),
   ('A', 'MANYAN', 80),
   ('A', 'PETIT GUINNESS', 90),
   ('A', 'RACINE-CHILL-K44', 100),
   ('B', 'BEAUF LIGHT ORDI-TANGO', 10), 
   ('B', 'BOOSTER COLA-JIN', 20), 
   ('B', 'CASTEL', 30),
   ('B', 'DOPPEL', 40),
   ('B', 'GRANDE GUINNESS', 50),
   ('B', 'EXPORT 33', 60),
   ('B', 'INSENBECK', 70),
   ('B', 'MANYAN', 80),
   ('B', 'PETIT GUINNESS', 90),
   ('B', 'RACINE-CHILL-K44', 100),
   ('C', 'BEAUF LIGHT ORDI-TANGO', 10), 
   ('C', 'BOOSTER COLA-JIN', 20), 
   ('C', 'CASTEL', 30),
   ('C', 'DOPPEL', 40),
   ('C', 'GRANDE GUINNESS', 50),
   ('C', 'EXPORT 33', 60),
   ('C', 'INSENBECK', 70),
   ('C', 'MANYAN', 80),
   ('C', 'PETIT GUINNESS', 90),
   ('C', 'RACINE-CHILL-K44', 100);


CREATE TABLE `impot`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dte_initiale` date NOT NULL,
  `dte_finale` date NOT NULL,
  `montant` varchar(50) NOT NULL,
  `type_impot` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `impot` (`id`,`dte_initiale`,`dte_finale`,`montant`,`type_impot`) VALUES
(1,'2023/10/12','2023/11/12','120000','IS'),
(2,'2023/05/20','2023/06/20','150000','IRPP'),
(3,'2023/08/06','2023/09/06','180000','IRPP'),
(4,'2023/12/30','2023/01/30','200000','IS');


CREATE TABLE `tsb_historique_stocks` (
  `hi_id` int(10) NOT NULL,
  `st_id_1` int(10) NOT NULL,
  `pr_id_fk` int(10) NOT NULL,
  `fo_id` int(10) NOT NULL,
  `st_quantite` int(10) NOT NULL,
  `stc_quantite` int(10) DEFAULT NULL,
  `stc_quantite_add` int(10) DEFAULT NULL,
  `st_status` varchar(100) NOT NULL,
  `stc_quantite_vente` int(10) DEFAULT NULL,
  `st_prix_achat` int(10) NOT NULL,
  `st_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(`hi_id`),
  FOREIGN KEY(`st_id_1`) REFERENCES `tsb_stocks`(`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tsb_historique_stocks`
  MODIFY `hi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


CREATE TABLE `tsb_superadmin` (
  `us_id` int(10) NOT NULL AUTO_INCREMENT,
  `us_phone` varchar(50) NOT NULL,
  `us_password` varchar(50) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tsb_superadmin` (`us_id`,`us_phone`, `us_password`) VALUES
(1,'696727991','b1d5781111d84f7b3fe45a0852e59758cd7a87e5'),
(2,'696727993','b1d5781111d84f7b3fe45a0852e59758cd7a87e5'),
(3,'696727995','b1d5781111d84f7b3fe45a0852e59758cd7a87e5');


 CREATE TABLE `avarie_depense`(
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `pr_prix_vente` int(11) NOT NULL,
   `quantite` int(11) NOT NULL, 
   `valeur` int(10) NOT NULL,
   `motif` varchar(50) NOT NULL,
   `date` date NOT NULL,
   `type` varchar(50) NOT NULL,
   `pr_designation` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
    

)ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tsb_casier`(
  `id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `regime` varchar(50) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tsb_casier` (`id`,`designation`,`categorie`,`regime`,`volume`,`prix`) VALUES
(1,'CASIER CASTEL', 'Alcoolisé','regime 1','50 CL',5275),
(2,'CASIER MUTZIG ', 'Alcoolisé','regime 1','50 CL',5275),
(3,'CASIER 33 EXPORT', 'Alcoolisé','regime 1','50 CL',5275),
(4,'CASIER MANYAN', 'Alcoolisé','regime 1','65 CL',5226),
(5,'CASIER CHILL ', 'Alcoolisé','regime 1','50 CL',5226),
(7,'CASIER BEAUFORT LAGER ', 'Alcoolisé','regime 1','50 CL',6315),
(8,'CASIER BEAUFORT TANGO', 'Alcoolisé','regime 1','50 CL',6315),
(9,'CASIER DOPEL MUNICH ', 'Alcoolisé','regime 1','50 CL', 5855),
(10,'CASIER CASTLE MILK STOUT', 'Alcoolisé','regime 1','50 CL', 6896),
(11,'CASIER 33 EXPORT', 'Alcoolisé','regime 1','65 CL', 6968 ),
(12,'CASIER AMSTEL', 'Alcoolisé','regime 1','65 CL', 6968),
(13,'CASIER MUTZIG', 'Alcoolisé','regime 1','65 CL', 6968),
(14,'CASIER CASTEL', 'Alcoolisé','regime 1','65 CL', 6968),
(15,'CASIER DOPPEL MUNICH ', 'Alcoolisé','regime 1','65 CL', 6968),
(16,'CASIER JAPAP ', 'Alcoolisé','regime 1','65 CL', 6431),
(17,'CASIER PELFORTH EXTRA STOUT ', 'Alcoolisé','regime 1','65 CL', 7452),
(18,'CASIER ISENBECK  ', 'Alcoolisé','regime 1','50 CL',8033),
(19,'CASIER CASTEL', 'Alcoolisé','regime 1','33 CL',8517),
(20,'CASIER "33" EXPORT ', 'Alcoolisé','regime 1','33 CL',8517 ),
(21,'CASIER CHILL', 'Alcoolisé','regime 1','33 CL',7452),
(22,'CASIER BEAUFORT LIGHT', 'Alcoolisé','regime 1','33 CL',8517),
(23,'CASIER BEAUFORT LAGER', 'Alcoolisé','regime 1','33 CL',8517 ),
(24,'CASIER PELFORTH EXTRA STOUT', 'Alcoolisé','regime 1','33 CL', 9194 ),
(25,'CASIER CASTLE MILK STOUT', 'Alcoolisé','regime 1','33 CL',9194 ),
(26,'CASIER DOPEL MUNICH', 'Alcoolisé','regime 1','33 CL',9194 ),
(27,'CASIER MUTZIG', 'Alcoolisé','regime 1','33 CL',8517 ),
(28,'CASIER ISENBECK', 'Alcoolisé','regime 1','33 CL',9194 ),
(29,'CARTON "33" EXPORT BOITE', 'Alcoolisé','regime 1','33 CL',9291 ),
(30,'CARTON MÜTZIG BOITE', 'Alcoolisé','regime 1','33 CL',9291 ),
(31,'CARTON CASTEL BOITE', 'Alcoolisé','regime 1','33 CL',9291 ),
(32,'CARTON MANYAN BOITE', 'Alcoolisé','regime 1','50 CL',11227  ),
(33,'CARTON CHILL BOITE', 'Alcoolisé','regime 1','50 CL',11761 ),
(34,'CARTON BEAUFORT LIGHT', 'Alcoolisé','regime 1','50 CL',13936 ),
(35,'CARTON BEAUFORT LAGER BOITE', 'Alcoolisé','regime 1','50 CL',13936  ),
(36,'CARTON "33" EXPORT BOITE', 'Alcoolisé','regime 1','50CL', 13936   ),
(37,'CARTON MÜTZIG BOITE', 'Alcoolisé','regime 1','50 CL',13936   ),
(38,'CARTON CASTEL BOITE', 'Alcoolisé','regime 1','50 CL',13936),
(39,'CARTON ISENBECK BOITE', 'Alcoolisé','regime 1','50 CL',15872),
(40,'CARTON HEINEKEN BOITES ', 'Alcoolisé','regime 1','50 CL',18001),
(41,'CARTON HEINEKEN BOUTEILLES', 'Alcoolisé','regime 1','33 CL',15582),
(42,'FUT DE 20 LITRES ISENBECK	', 'Alcoolisé','regime 1','20 LITRES', 24794   ),
(43,'FUT DE 20 LITRES BEAUFORT LIGHT', 'Alcoolisé','regime 1','20 LITRES', 16860 ),
(44,'FUT DE 20 LITRES BEAUFORT LAGER', 'Alcoolisé','regime 1','20 LITRES', 16860),
(45,'FUT DE 30 LITRES CASTLE MILF STOUT', 'Alcoolisé','regime 1','30 LITRES', 21819),
(46,'FUT DE 30 LITRES BEAUFORT LIGHT', 'Alcoolisé','regime 1','30 LITRES', 24794),
(47,'FUT DE 30 LITRES BEAUFORT LAGER	', 'Alcoolisé','regime 1','20 LITRES',  24794 ),
(48,'FUT DE 30 LITRES ISENBECK', 'Alcoolisé','regime 1','30 LITRES', 29753),
(49,'FUT DE 50 LITRES MANYAN', 'Alcoolisé','regime 1','50 LITRES',  32728 ),
(50,'FUT DE 50 LITRES BEAUFORT LIGHT', 'Alcoolisé','regime 1','50 LITRES',40662),
(51,'FUT DE 50 LITRES BEAUFORT LAGER', 'Alcoolisé','regime 1','50 LITRES',  40662),
(52,'FUT DE 50 LITRES CASTEL BEER', 'Alcoolisé','regime 1','50 LITRES',40662),
(53,'FUT DE 50 LITRES "33" EXPORT', 'Alcoolisé','regime 1','50 LITRES',40662 ),
(54,'FUT DE 50 LITRES ISENBECK', 'Alcoolisé','regime 1','50 LITRES', 49588 ),
(55,'CASIER BOOSTER GIN TONIC', 'Alcoolisé','regime 1','50 Cl',6775),
(56,'CASIER BOOSTER RHUM GINGER', 'Alcoolisé','regime 1','50 Cl', 6775),
(57,'CASIER BOOSTER RACINE', 'Alcoolisé','regime 1','50 Cl', 5211 ),
(58, 'CASIER BOOSTER CARAMEL', 'Alcoolisé', 'regime 1' ,'30 CL',7162),
(59, 'CASIER BOOSTER WHISKY COLA', 'Alcoolisé', 'regime 1', '50 CL',6775),   
(60, 'CARTON BOOSTER WHISKY COLA BOITES', 'Alcoolisé', 'regime 1', '50 CL',14517),   
(61, 'CASIER BOOSTER CIDER', 'Alcoolisé', 'regime 1', '30CL',9194),   
(62, 'CASIER BOOSTER CIDER', 'Alcoolisé', 'regime 1', '50CL',6775),   
(63, 'CASIER BOOSTER WHISKY COLA', 'Alcoolisé', 'regime 1', '33 CL',9485),   
(64, 'CASIER SODA WATER', 'Non Alcoolisé', 'regime 1', '60 CL',2516  ),	  
(65, 'CASIER COCA-COLA', 'Non Alcoolisé', 'regime 1', '60 CL',3920 ), 
(66, 'CASIER COCA-COLA ZERO ', 'Non Alcoolisé', 'regime 1', '60 CL',3920),	    
(67, 'CASIER FANTA POMME', 'Non Alcoolisé', 'regime 1', '60 CL	 ',3920),   
(68, 'CASIER FANTA ORANGE', 'Non Alcoolisé', 'regime 1', '60 CL',3920  ),	  
(69, 'CASIER SPRITE', 'Non Alcoolisé', 'regime 1', '60 CL',3920  ), 	  
(70, 'CASIER SPRITE ZERO ', 'Non Alcoolisé','regime 1',	'60 CL', 3920),   
(71, 'CASIER SCHWEPPES AGRUME ', 'Non Alcoolisé','regime 1',	'60 CL ', 4887),   
(72, 'CASIER DJINO COCKTAIL ', 'Non Alcoolisé', 'regime 1',	'60 CL', 4742),   
(73, 'CASIER VIMTO ', 'Non Alcoolisé','regime 1',	'60 CL', 4742),   
(74, 'CASIER TOP ANANAS', 'Non Alcoolisé','regime 1',	'60 CL', 3550),   
(75, 'CASIER TOP GRENADINE', 'Non Alcoolisé','regime 1',	'60 CL', 3550),   
(76, 'CASIER TOP ORANGE', 'Non Alcoolisé','regime 1',	'60 CL', 3550),   
(77, 'CASIER TOP PAMPLEMOUSSE', 'Non Alcoolisé','regime 1',	'60 CL', 3550),   
(78, 'CASIER TOP COLA', 'Non Alcoolisé','regime 1',	'60 CL', 3550),   
(79, 'CASIER TOP LEMON', 'Non Alcoolisé','regime 1',	'60 CL', 3550),   
(80, 'CASIER ORANGINA', 'Non Alcoolisé','regime 1',	'60 CL', 4742),   
(81, 'CASIER COCA-COLA', 'Non Alcoolisé', 'regime 1', '30 CL',	 4936),  
(82, 'CASIER COCA-COLA ZERO', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4936),   
(83, 'CASIER FANTA POMME', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4936),   
(84, 'CASIER FANTA ORANGE', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4936),   
(85, 'CASIER SPRITE', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4936),   
(86, 'CASIER SCHWEPPES AGRUME', 'Non Alcoolisé', 'regime 1',	'30 CL', 	 5904),   
(87, 'CASIER TOP ANANAS', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4065),   
(88, 'CASIER TOP GRENADINE', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4065),   
(89, 'CASIER TOP ORANGE', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4065),   
(90, 'CASIER TOP PAMPLEMOUSSE', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4065 ),  
(91, 'CASIER ORANGINA', 'Non Alcoolisé', 'regime 1',	'30 CL',	 6000),   
(92, 'CASIER VIMTO', 'Non Alcoolisé', 'regime 1',	'30 CL',	 6000),   
(93, 'CASIER TOPTONIC', 'Non Alcoolisé', 'regime 1',	'30 CL',	 5081),   
(94, 'CASIER TOPSODA', 'Non Alcoolisé', 'regime 1',	'30 CL',	 4258),   
(95, 'CASIER MALTA TONIC', 'Non Alcoolisé', 'regime 1','30CL',	 7162),   
(96, 'CASIER XXL', 'Non Alcoolisé', 'regime 1',	'30 CL', 	 6581),   
(97, 'CASIER XXL LOVE', 'Non Alcoolisé', 'regime 1',	'30 CL', 	 6581),   
(98, 'PACK 12 COCA-COLA PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),   
(99, 'PACK 12 FANTA POMME PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(100, 'PACK 12 FANTA ORANGE PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(101, 'PACK 12 COCA-COLA ZERO PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(102, 'PACK 12 SPRITE  PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(103, 'PACK 12 SPRITE  ZERO PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(104, 'PACK 12 SCHWEPPES AGRUME PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 3871),    
(105, 'PACK 12 TOP ANANAS PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(106, 'PACK 6 TOP GRENADINE PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),

(107,'PACK 6 TOP ORANGE PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(108,'PACK 12 TOP PAMPLEMOUSSE PET', 'Non Alcoolisé', 'regime 1',	'5CL', 2903),    
(109,'PACK 12 TOP COLA PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(110,'PACK 12 TOP LEMON PET', 'Non Alcoolisé', 'regime 1',	'35 CL',	 2903 ),    
(111, 'PACK 12 DJINO COCKTAIL FRUITS', 'Non Alcoolisé', 'regime 1',	'', 3484),    
(112, 'PACK 12 ORANGINA PET', 'Non Alcoolisé', 'regime 1',	'35CL', 4065),    
(113, 'PACK 12 VIMTO PET', 'Non Alcoolisé', 'regime 1',	'35CL', 4065),    
(114, 'PACK 12 XXL  PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 3939),    
(115, 'PACK 12 XXL LOVE  PET', 'Non Alcoolisé', 'regime 1',	'35 CL', 3939),    
(116, 'PACK 12 TOPTONIC', 'Non Alcoolisé', 'regime 1',	'35 CL', 2903),    
(117, 'PACK 12 SODA WATER', 'Non Alcoolisé', 'regime 1',	'35 CL', 2420),    
(118, 'PACK SIROP MENTHE', 'Non Alcoolisé', 'regime 1',	'50 CL', 3678),    
(119, 'PACK SIROP ORANGE', 'Non Alcoolisé', 'regime 1',	'50 CL ', 3678),    
(120, 'CARTON MALTA TONIC BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 9426),    
(121, 'CARTON XXL BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 8265),       
(122, 'PACK DE 6 FANTA ORANGE BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 7232),    
(123, 'PACK SPRITE BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 7232),    
(124, 'CARTON VIMTO BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 8265),    
(125, 'CARTON ORANGINA BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 8265),    
(126, 'CARTON MALTA TONIC BOITES', 'Non Alcoolisé', 'regime 1',	'50 CL', 10507),    
(127, 'PACK SPRITE ZERO PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3111),    
(128, 'PACK DE 6 COCA-COLA PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3111),    
(129, 'PACK DE 6 FANTA POMME PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3111),    
(130, 'PACK DE 6 COCA-ZERO PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3111),    
(131, 'PACK DE 6 FANTA ORANGE PET', 'Non Alcoolisé', 'regime 1',	'100', 3111),    
(132, 'PACK SPRITE PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3111),    
(133, 'PACK SCHWEPPES AGRUME PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3629),    
(134, 'PACK TOPANANAS PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 2516),    
(135, 'PACK TOPGRENADINE PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 2516),    
(136, 'PACK TOPAMPLEMOUSSE PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 2516),    
(137, 'PACK TOPORANGE PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 2516),    
(138, 'PACK TOPCOLA PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 2516),    
(139, 'PACK TOPLEMON PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 2516),    
(140, 'PACK 6 DJINO COCKTAIL FRUITS PET', 'Non Alcoolisé', 'regime 1',	'100 CL', 3402),
(141, 'PACK DE 6 COCA-COLA BOITES', 'Non Alcoolisé', 'regime 1',	'33 CL', 7232),
(142, 'PACK 6 ORANGINA PET', 'Non Alcoolisé', 'regime 1',	'100CL', 3983),    
(143, 'PACK 6 VIMTO PET', 'Non Alcoolisé', 'regime 1',	'100CL', 3949),    
(144, 'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 1',	'50 CL', 	968),    
(145, 'PACK SOURCE VITALE', 'Non Alcoolisé', 'regime 1',	'50 CL', 1452),    
(146, 'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 1',	'33 CL', 1065),    
(147, 'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 1',	'100 CL', 1113),    
(148, 'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 1',	'150 CL', 1403),    
(149, 'EAU VITALE', 'Non Alcoolisé', 'regime 1',	'150 CL', 1161),    
(150, 'PACK EAU VITALE CD EXT', 'Non Alcoolisé', 'regime 1',	' 150 CL ', 1161),    
(151, 'EAU VITALE ', 'Non Alcoolisé', 'regime 1',	'150 CL PROMO', 1065),    
(152, 'PACK SOURCE TANGUI ', 'Non Alcoolisé', 'regime 1',	'180 CL PROMO', 1355),    
(153, 'BIDON SOURCE TANGUI ', 'Non Alcoolisé', 'regime 1',	'5L PROMO', 533),    
(154, 'BIDON SOURCE TANGUI ', 'Non Alcoolisé', 'regime 1',	'10L PROMO', 1016),    
(155, 'BIDON EAU VITALE', 'Non Alcoolisé', 'regime 1',	'10L', 919),    
(156, 'BIDON EAU VITALE CD EXTER', 'Non Alcoolisé', 'regime 1',	' 10L',919),    
(157, 'BIDON EAU VITALE PROMO', 'Non Alcoolisé', 'regime 1',	'10L', 	 847),    
(158, 'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 1',	'0.5L', 1210),   
(159, 'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 1',	'33 CL',1409),  
(160, 'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 1',	'1.0L', 1652),   
(161, 'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 1',	'1.5L', 2483),

(162,'CASIER CASTEL', 'Alcoolisé','regime 2.5', '50 CL',	 5340 ),  
(163,'CASIER "33" EXPORT ', 'Alcoolisé','regime 2.5',',50 CL', 5340),   
(164,'CASIER MUTZIG', 'Alcoolisé','regime 2.5', '50 CL',	5340) ,  
(165,'CASIER MANYAN', 'Alcoolisé','regime 2.5', '65 CL',	 5291),   
(166,'CASIER CHILL ', 'Alcoolisé','regime 2.5','50 CL', 5291),   
(167,'CASIER BEAUFORT LIGHT', 'Alcoolisé','regime 2.5', '50 CL',	6394 ),  
(168,'CASIER BEAUFORT LAGER ', 'Alcoolisé','regime 2.5','50 CL', 6394),   
(169,'CASIER BEAUFORT TANGO ', 'Alcoolisé','regime 2.5','50 CL', 6394),   
(170,'CASIER DOPEL MUNICH', 'Alcoolisé',      'regime 2.5','50 CL', 5928),   
(171,'CASIER CASTLE MILK STOUT ', 'Alcoolisé','regime 2.5', '50 CL', 6982),   
(172,'CASIER "33" EXPORT ', 'Alcoolisé','regime 2.5','65 CL',7055 ),  
(173,'CASIER AMSTEL', 'Alcoolisé','regime 2.5', '65 CL',	 7055) ,  
(174,'CASIER MUTZIG', 'Alcoolisé','regime 2.5', '65 CL',	 7055),   
(175,'CASIER CASTEL', 'Alcoolisé','regime 2.5', '65 CL',	 7055),   
(176,'CASIER DOPPEL MUNICH ', 'Alcoolisé','regime 2.5','65 CL',7055),   
(177,'CASIER JAPAP ', 'Alcoolisé','regime 2.5','65 CL', 6511),   
(178,'CASIER PELFORTH EXTRA STOUT ', 'Alcoolisé','regime 2.5','65 CL',7545),  
(179,'CASIER ISENBECK', 'Alcoolisé','regime 2.5', '65CL', 8133) ,  
(180,'CASIER "33" EXPORT', 'Alcoolisé','regime 2.5','33 CL',	 8623),   
(181,'CASIER CASTEL', 'Alcoolisé','regime 2.5', '33 CL',	 8623),   
(182,'CASIER CHILL', 'Alcoolisé','regime 2.5', '33 CL',	 7545),   
(183,'CASIER BEAUFORT LIGHT', 'Alcoolisé','regime 2.5', '33 CL',	 8623),   
(184,'CASIER BEAUFORT LAGER', 'Alcoolisé','regime 2.5', '33 CL',	 8623),   
(185,'CASIER PELFORTH EXTRA STOUT', 'Alcoolisé','regime 2.5', '33 CL',  9309),   
(186,'CASIER CASTLE MILK STOUT', 'Alcoolisé','regime 2.5', '33 CL',	 9309),   
(187,'CASIER DOPEL MUNICH', 'Alcoolisé','regime 2.5', '33 CL',	 9309),   
(188,'CASIER MUTZIG', 'Alcoolisé','regime 2.5', '33 CL',	 8623),   
(189,'CASIER ISENBECK', 'Alcoolisé','regime 2.5', '33 CL',	 9309), 

(190,'CARTON 33 EXPORT BOITE', 'Alcoolisé','regime2.5', '33 CL', 9407 ),  
(191,'CARTON MÜTZIG BOITE', 'Alcoolisé','regime2.5', '33 CL', 9407 ),  
(192,'CARTON CASTEL BOITE', 'Alcoolisé','regime2.5', '33 CL', 9407 ),  
(193,'CARTON MANYAN BOITE', 'Alcoolisé','regime2.5', '50 CL', 11367),   
(194,'CARTON CHILL BOITE', 'Alcoolisé','regime2.5', '50 CL', 11908),   
(195,'CARTON BEAUFORT LIGHT', 'Alcoolisé','regime2.5', '50 CL', 14110),   
(196,'CARTON BEAUFORT LAGER BOITE', 'Alcoolisé','regime2.5', '50 CL', 14110),   
(197,'CARTON 33 EXPORT BOITE', 'Alcoolisé','regime2.5', '50 CL', 14110),   
(198,'CARTON MÜTZIG BOITE', 'Alcoolisé','regime2.5', '50 CL', 14110),   
(199,'CARTON CASTEL BOITE', 'Alcoolisé','regime2.5', '50 CL', 14110),   
(200,'CARTON ISENBECK BOITE', 'Alcoolisé','regime2.5', '50 CL', 16070),   
(201,'CARTON HEINEKEN BOITES', 'Alcoolisé','regime2.5', '50 CL', 18226),   
	
	
(202,'CARTON HEINEKEN BOUTEILLES', 'Alcoolisé','regime 2.5','33CL', 15776),
(203,'FUT DE 20 LITRES ISENBECK', 'Alcoolisé','regime 2.5','20 LITRES',  25103 ),  
(204,'FUT DE 20 LITRES BEAUFORT LIGHT', 'Alcoolisé','regime 2.5',	'20 LITRES',  17070),   
(205,'FUT DE 20 LITRES BEAUFORT LAGER', 'Alcoolisé','regime 2.5','20 LITRES',  17070), 
(206,'FUT DE 30 LITRES CASTLE MILF STOUT', 'Alcoolisé','regime 2.5','30 LITRES', 22091),   
(207,'FUT DE 30 LITRES BEAUFORT LIGHT', 'Alcoolisé','regime 2.5','30 LITRES', 25103),   
(208,'FUT DE 30 LITRES BEAUFORT LAGER', 'Alcoolisé',',regime 2.5','30 LITRES', 25103),   
(209,'FUT DE 30 LITRES ISENBECK', 'Alcoolisé'	,'regime 2.5','30 LITRES',  30124), 
(210,'FUT DE 50 LITRES MANYAN', 'Alcoolisé','regime 2.5',	'50 LITRES',  33136),   
(211,'FUT DE 50 LITRES BEAUFORT LIGHT' , 'Alcoolisé' ,'regime 2.5',	'50 LITRES',  41169 ),  
(212,'FUT DE 50 LITRES BEAUFORT LAGER', 'Alcoolisé' ,'regime 2.5',	'50 LITRES',  41169 ), 
(213,'FUT DE 50 LITRES CASTEL BEER', 'Alcoolisé','regime 2.5',	'50 LITRES',  41169),   
(214,'FUT DE 50 LITRES "33" EXPORT', 'Alcoolisé','regime 2.5','50 LITRES', 	 41169 ), 
(215,'FUT DE 50 LITRES ISENBECK', 'Alcoolisé'	,'regime 2.5','50 LITRES',  50206 ),

	
(216,'CASIER BOOSTER GIN TONIC', 'Alcoolisé', 'regime 2.5', '50 CL',	 6859  ), 
(217,'CASIER BOOSTER RHUM GINGER', 'Alcoolisé', 'regime 2.5', '50 CL',	 6859  ), 
(218,'CASIER BOOSTER RACINE', 'Alcoolisé', 'regime 2.5', '50 CL PROMO	',  5276 ),   
(219,'CASIER BOOSTER CARAMEL', 'Alcoolisé', 'regime 2.5', '30 CL',	 7251  ), 
(220,'CASIER BOOSTER WHISKY COLA', 'Alcoolisé', 'regime 2.5', '50 CL',	 6859  ), 
(221,'CARTON BOOSTER WHISKY COLA BOITES', 'Alcoolisé', 'regime 2.5', '50 CL',	 14698 ),  
(222,'CASIER BOOSTER CIDER', 'Alcoolisé', 'regime 2.5', '30CL	',  9309 ),   
(223,'CASIER BOOSTER CIDER', 'Alcoolisé', 'regime 2.5', '50CL	', 6859   ),
(224,'CASIER BOOSTER WHISKY COLA', 'Alcoolisé', 'regime 2.5', '33 CL',	 9603  ),
	
	
	
(225,'CASIER SODA WATER       ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,2548),   
(226,'CASIER COCA-COLA        ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3969),   
(227,'CASIER COCA-COLA ZERO   ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3969),   
(228,'CASIER FANTA POMME      ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3969),   
(229,'CASIER FANTA ORANGE     ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3969),   
(230,'CASIER SPRITE           ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3969),   
(231,'CASIER SPRITE ZERO      ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3969),   
(232,'CASIER SCHWEPPES AGRUME  ', 'Non Alcoolisé','regime 2.5','60 CL '	,4948),   
(233,'CASIER DJINO COCKTAIL   ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,4801),   
(234,'CASIER VIMTO            ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,4801),   
(235,'CASIER TOP ANANAS       ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3594),   
(236,'CASIER TOP GRENADINE    ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3594),   
(237,'CASIER TOP ORANGE       ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3594),   
(238,'CASIER TOP PAMPLEMOUSSE ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3594),   
(239,'CASIER TOP COLA         ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3594),   
(240,'CASIER TOP LEMON        ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,3594),   
(241,'CASIER ORANGINA         ', 'Non Alcoolisé','regime 2.5',' 60 CL'	,4801),   
(242,'CASIER COCA-COLA        ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4997),   
(243,'CASIER COCA-COLA ZERO   ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4997),   
(244,'CASIER FANTA POMME      ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4997),   
(245,'CASIER FANTA ORANGE     ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4997),   
(246,'CASIER SPRITE           ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4997),   
(247,'CASIER SCHWEPPES AGRUME ', 'Non Alcoolisé','regime 2.5',' 30 CL'  ,5977),   
(248,'CASIER TOP ANANAS       ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4115),   
(249,'CASIER TOP GRENADINE    ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4115),   
(250,'CASIER TOP ORANGE       ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4115),   
(251,'CASIER TOP PAMPLEMOUSSE ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4115),   
(252,'CASIER ORANGINA         ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,6075),   
(253,'CASIER VIMTO            ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,6075),   
(254,'CASIER TOPTONIC         ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,5144),   
(255,'CASIER TOPSODA          ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,4311),   
(256,'CASIER MALTA TONIC      ', 'Non Alcoolisé','regime 2.5',' 30 CL'	,7251),   
(257,'CASIER XXL               ', 'Non Alcoolisé','regime 2.5','30 CL '	,6663),   
(258,'CASIER XXL LOVE          ', 'Non Alcoolisé','regime 2.5','30 CL ' ,6663),
(259,'PACK 12 COCA-COLA PET       ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(260,'PACK 12 FANTA POMME PET     ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(261,'PACK 12 FANTA ORANGE PET    ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(262,'PACK 12 COCA-COLA ZERO PET  ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(263,'PACK 12 SPRITE  PET         ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(264,'PACK 12 SPRITE  ZERO PET     ', 'Non Alcoolisé','regime 2.5','35 CL  ' ,2940),   
(265,'PACK 12 SCHWEPPES AGRUME PET', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,3920),   
(266,'PACK 12 TOP ANANAS PET      ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(267,'PACK 6 TOP GRENADINE PET    ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(268,'PACK 6 TOP ORANGE PET       ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(269,'PACK 12 TOP PAMPLEMOUSSE PET ', 'Non Alcoolisé','regime 2.5','35CL	  ' ,2940),   
(270,'PACK 12 TOP COLA PET        ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(271,'PACK 12 TOP LEMON PET       ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(272,'PACK 12 DJINO COCKTAIL FRUITS', 'Non Alcoolisé','regime 2.5','35 CL  ' ,3528),   
(273,'PACK 12 ORANGINA PET         ', 'Non Alcoolisé','regime 2.5','35CL	  ' ,4115),   
(274,'PACK 12 VIMTO PET            ', 'Non Alcoolisé','regime 2.5','35CL	  ' ,4115),   
(275,'PACK 12 XXL  PET             ', 'Non Alcoolisé','regime 2.5','35 CL  ' ,3988),   
(276,'PACK 12 XXL LOVE  PET        ', 'Non Alcoolisé','regime 2.5','35 CL  ' ,3988),   
(277,'PACK 12 TOPTONIC            ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2940),   
(278,'PACK 12 SODA WATER          ', 'Non Alcoolisé','regime 2.5',' 35 CL ' ,2450),



	
(279,'PACK SPRITE ZERO PET', 'Non Alcoolisé','regime 2.5', '100 CL',3150),  
(280,'PACK DE 6 COCA-COLA PET', 'Non Alcoolisé','regime 2.5', '100 CL',3150),   
(281,'PACK DE 6 FANTA POMME PET', 'Non Alcoolisé','regime 2.5', '100 CL',3150),   
(282,'PACK DE 6 COCA-ZERO PET', 'Non Alcoolisé','regime 2.5', '100 CL',3150),   
(283,'PACK DE 6 FANTA ORANGE PET', 'Non Alcoolisé','regime 2.5', '100 CL' ,3150),   
(284,'PACK SPRITE PET', 'Non Alcoolisé','regime 2.5', '100 CL',3150),   
(285,'PACK SCHWEPPES AGRUME PET', 'Non Alcoolisé','regime 2.5', '100 CL',3675),   
(286,'PACK TOPANANAS PET', 'Non Alcoolisé','regime 2.5', '100 CL' ,2548),   
(287,'PACK TOPGRENADINE PET', 'Non Alcoolisé','regime 2.5', '100 CL' ,2548),   
(288,'PACK TOPAMPLEMOUSSE PET', 'Non Alcoolisé','regime 2.5', '100 CL' ,2548),   
(289,'PACK TOPORANGE PET              ', 'Non Alcoolisé','regime 2.5', '100 CL' ,2548),   
(290,'PACK TOPCOLA PET                ', 'Non Alcoolisé','regime 2.5', '100 CL' ,2548),   
(291,'PACK TOPLEMON PET               ', 'Non Alcoolisé','regime 2.5', '100 CL' ,2548),   
(292,'PACK 6 DJINO COCKTAIL FRUITS PET', 'Non Alcoolisé','regime 2.5', '100 CL' ,3444),   
(293,'PACK 6 ORANGINA PET             ', 'Non Alcoolisé','regime 2.5', '100 CL' ,4032),   
(294,'PACK 6 VIMTO PET                ', 'Non Alcoolisé','regime 2.5', '100 CL' ,3998),   
	
	
(295,'PACK SOURCE TANGUI ', 'Non Alcoolisé','regime 2.5','50 CL 	      '   ,  980),   
(296,'PACK SOURCE VITALE ', 'Non Alcoolisé','regime 2.5','50 CL 	      '   ,1470),   
(297,'PACK SOURCE TANGUI ', 'Non Alcoolisé','regime 2.5','33 CL 	      '   ,1078),   
(298,'PACK SOURCE TANGUI ', 'Non Alcoolisé','regime 2.5','100 CL 	     '  ,1127),   
(299,'PACK SOURCE TANGUI ', 'Non Alcoolisé','regime 2.5','150 CL	      '   ,1421),   
(300,'EAU VITALE         ', 'Non Alcoolisé','regime 2.5','150 CL	      '   ,1176),   
(301,'PACK EAU VITALE    ', 'Non Alcoolisé','regime 2.5','150 CL CD EXT'	 ,1176),   
(302,'EAU VITALE         ', 'Non Alcoolisé','regime 2.5','150 CL PROMO	'   ,1078),   
(303,'PACK SOURCE TANGUI ', 'Non Alcoolisé','regime 2.5','180 CL PROMO	'   ,1372),   
(304,'BIDON SOURCE TANGUI', 'Non Alcoolisé','regime 2.5','5L PROMO	    '   ,  539),   
(305,'BIDON SOURCE TANGUI', 'Non Alcoolisé','regime 2.5','10L PROMO	   '  ,1029),   
(306,'BIDON EAU VITALE   ', 'Non Alcoolisé','regime 2.5','10L 	        '   ,  931),   
(307,'BIDON EAU VITALE   ', 'Non Alcoolisé','regime 2.5','10L CD EXTER	'   ,  931),   
(308,'BIDON EAU VITALE   ', 'Non Alcoolisé','regime 2.5','10L PROMO	   '  ,  857),   
	
	
(309,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 2.5', '0.5L ', 1225),   
(310,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 2.5', '33 CL', 1427),   
(311,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 2.5', '1.0L ', 1673),   
(312,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 2.5', '1.5L ', 2514),   



	
(313,'CASIER CASTEL               ', 'Alcoolisé','regime 2','50 CL	',5318),   
(314,'CASIER MUTZIG               ', 'Alcoolisé','regime 2','50 CL	',5318),   
(315,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 2','50 CL	',5318),   
(316,'CASIER MANYAN               ', 'Alcoolisé','regime 2','65 CL	',5270),   
(317,'CASIER CHILL                ', 'Alcoolisé','regime 2','50 CL	',5270),   
(318,'CASIER BEAUFORT LIGHT       ', 'Alcoolisé','regime 2','50 CL	',6367),   
(319,'CASIER BEAUFORT LAGER       ', 'Alcoolisé','regime 2','50 CL	',6367),   
(320,'CASIER BEAUFORT TANGO       ', 'Alcoolisé','regime 2','50 CL	',6367),   
(321,'CASIER DOPEL MUNICH         ', 'Alcoolisé','regime 2','50 CL	',5904),   
(322,'CASIER CASTLE MILK STOUT    ', 'Alcoolisé','regime 2','50 CL	',6953),   
(323,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 2','65 CL	',7026),   
(324,'CASIER AMSTEL               ', 'Alcoolisé','regime 2','65 CL	',7026),   
(325,'CASIER MUTZIG               ', 'Alcoolisé','regime 2','65 CL	',7026),   
(326,'CASIER CASTEL               ', 'Alcoolisé','regime 2','65 CL	',7026),   
(327,'CASIER DOPPEL MUNICH        ', 'Alcoolisé','regime 2','65 CL	',7026),   
(328,'CASIER JAPAP                ', 'Alcoolisé','regime 2','65 CL	',6485),   
(329,'CASIER PELFORTH EXTRA STOUT', 'Alcoolisé','regime 2',' 65	CL  ',7514 ), 
(330,'CASIER ISENBECK             ', 'Alcoolisé','regime 2','65 CL	',8100),   
	
(331,'CASIER CASTEL               ', 'Alcoolisé','regime 2','33 CL	',8588),   
(332,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 2','33 CL	',8588),   
(333,'CASIER CHILL                ', 'Alcoolisé','regime 2','33 CL	',7514),   
(334,'CASIER BEAUFORT LIGHT       ', 'Alcoolisé','regime 2','33 CL	',8588),   
(335,'CASIER BEAUFORT LAGER       ', 'Alcoolisé','regime 2','33 CL	',8588),   
(336,'CASIER PELFORTH EXTRA STOUT ', 'Alcoolisé','regime 2','33 CL ',9271 ),  
(337,'CASIER CASTLE MILK STOUT    ', 'Alcoolisé','regime 2','33 CL	',9271),   
(338,'CASIER DOPEL MUNICH         ', 'Alcoolisé','regime 2','33 CL	',9271),   
(339,'CASIER MUTZIG               ', 'Alcoolisé','regime 2','33 CL	',8588),   
(340,'CASIER ISENBECK             ', 'Alcoolisé','regime 2','33 CL	',9271),   
	
	
(341,'CARTON "33" EXPORT BOITE   ', 'Alcoolisé','regime 2', '33 CL',	 9368 ),  
(342,'CARTON MÜTZIG BOITE        ', 'Alcoolisé','regime 2', '33 CL',	 9368 ),  
(343,'CARTON CASTEL BOITE        ', 'Alcoolisé','regime 2', '33 CL', 9368  ), 
(344,'CARTON MANYAN BOITE        ', 'Alcoolisé','regime 2', '50 CL',	 11320),   
(345,'CARTON CHILL BOITE         ', 'Alcoolisé','regime 2', '50 CL',	 11859),   
(346,'CARTON BEAUFORT LIGHT      ', 'Alcoolisé','regime 2', '50 CL', 14052 ),  
(347,'CARTON BEAUFORT LAGER BOITE', 'Alcoolisé','regime 2', '50 CL',	 14052),   
(348,'CARTON "33" EXPORT BOITE   ', 'Alcoolisé','regime 2', '50 CL', 14052 ),  
(349,'CARTON MÜTZIG BOITE        ', 'Alcoolisé','regime 2', '50 CL',	 14052),   
(350,'CARTON CASTEL BOITE        ', 'Alcoolisé','regime 2', '50 CL',	 14052),   
(351,'CARTON ISENBECK BOITE      ', 'Alcoolisé','regime 2', '50 CL',	 16004),   
(352,'CARTON HEINEKEN BOITES     ', 'Alcoolisé','regime 2', '50 CL',	 18151),   
	
	
(353,'CARTON HEINEKEN BOUTEILLES', 'Alcoolisé','regime 2', '33 CL', 15711),   
	
(354,'FUT DE 20 LITRES ISENBECK	        ' , 'Alcoolisé' ,'regime 2', '20 LITRES', 25000 ), 
(355,'FUT DE 20 LITRES BEAUFORT LIGHT	  ' , 'Alcoolisé' ,'regime 2', '20 LITRES', 17000 ),  
(356,'FUT DE 20 LITRES BEAUFORT LAGER	  ' , 'Alcoolisé' ,'regime 2', '20 LITRES', 17000 ),  
(357,'FUT DE 30 LITRES CASTLE MILF STOUT', 'Alcoolisé'	,'regime 2',  '30 LITRES',22000 ),  
(358,'FUT DE 30 LITRES BEAUFORT LIGHT	  ', 'Alcoolisé'  ,'regime 2', '30 LITRES', 25000 ),  
(359,'FUT DE 30 LITRES BEAUFORT LAGER	  ', 'Alcoolisé'  ,'regime 2', '30 LITRES', 25000 ),  
(360,'FUT DE 30 LITRES ISENBECK	        ', 'Alcoolisé'  ,'regime 2', '30 LITRES', 30000 ),  
(361,'FUT DE 50 LITRES MANYAN	          ', 'Alcoolisé'  ,'regime 2', '50 LITRES', 33000 ),  
(362,'FUT DE 50 LITRES BEAUFORT LIGHT	  ', 'Alcoolisé'  ,'regime 2', '50 LITRES', 41000 ),  
(363,'FUT DE 50 LITRES BEAUFORT LAGER	  ' , 'Alcoolisé' ,'regime 2', '50 LITRES', 41000 ),  
(364,'FUT DE 50 LITRES CASTEL BEER	     ' , 'Alcoolisé','regime 2',  '50 LITRES',41000 ),  
(365,'FUT DE 50 LITRES "33" EXPORT	     ', 'Alcoolisé' ,'regime 2',  '50 LITRES',41000 ),  
(366,'FUT DE 50 LITRES ISENBECK	        ' , 'Alcoolisé' ,'regime 2', '50 LITRES', 50000 ),  
	
	
(367,'CASIER BOOSTER GIN TONIC         ', 'Alcoolisé','regime 2', '50 CL	     ' , 6831),  
(368,'CASIER BOOSTER RHUM GINGER       ', 'Alcoolisé','regime 2', '50 CL	     ' , 6831),  
(369,'CASIER BOOSTER RACINE            ', 'Alcoolisé','regime 2', '50 CL PROMO'	, 5255),  
(370,'CASIER BOOSTER CARAMEL           ', 'Alcoolisé','regime 2', '30 CL	     ' , 7221),  
(371,'CASIER BOOSTER WHISKY COLA       ', 'Alcoolisé','regime 2', '50 CL	     ' , 6831),  
(372,'CARTON BOOSTER WHISKY COLA BOITES', 'Alcoolisé','regime 2', '50 CL	     ' ,14638),   
(373,'CASIER BOOSTER CIDER             ', 'Alcoolisé','regime 2', '30 CL	     ' , 9271),   
(374,'CASIER BOOSTER CIDER             ', 'Alcoolisé','regime 2', '50 CL	     ' , 6831),   
(375,'CASIER BOOSTER WHISKY COLA       ', 'Alcoolisé','regime 2', '33 CL	     ' , 9563),   
	
	
	
(376,'CASIER SODA WATER      ', 'Non Alcoolisé','regime 2','60 CL ',2537),   
(377,'CASIER COCA-COLA       ', 'Non Alcoolisé','regime 2','60 CL ',3952),   
(378,'CASIER COCA-COLA ZERO  ', 'Non Alcoolisé','regime 2','60 CL ',3952),   
(379,'CASIER FANTA POMME     ', 'Non Alcoolisé','regime 2','60 CL ',3952),   
(380,'CASIER FANTA ORANGE    ', 'Non Alcoolisé','regime 2','60 CL ',3952),   
(381,'CASIER SPRITE          ', 'Non Alcoolisé','regime 2','60 CL ',3952),   
(382,'CASIER SPRITE ZERO     ', 'Non Alcoolisé','regime 2','60 CL ',3952),   
(383,'CASIER SCHWEPPES AGRUME', 'Non Alcoolisé','regime 2','60 CL ',4928),   
(384,'CASIER DJINO COCKTAIL  ', 'Non Alcoolisé','regime 2','60 CL ',4782),   
(385,'CASIER VIMTO           ', 'Non Alcoolisé','regime 2','60 CL ',4782),   
(386,'CASIER TOP ANANAS      ', 'Non Alcoolisé','regime 2','60 CL ',3579),   
(387,'CASIER TOP GRENADINE   ', 'Non Alcoolisé','regime 2','60 CL ',3579),   
(388,'CASIER TOP ORANGE      ', 'Non Alcoolisé','regime 2','60 CL ',3579),   
(389,'CASIER TOP PAMPLEMOUSSE', 'Non Alcoolisé','regime 2','60 CL ',3579),   
(390,'CASIER TOP COLA        ', 'Non Alcoolisé','regime 2','60 CL ',3579),   
(391,'CASIER TOP LEMON       ', 'Non Alcoolisé','regime 2','60 CL ',3579),   
(392,'CASIER ORANGINA        ', 'Non Alcoolisé','regime 2','60 CL ',4782),   

(393,'CASIER COCA-COLA       ', 'Non Alcoolisé','regime 2','30 CL', 4977),   
(394,'CASIER COCA-COLA ZERO  ', 'Non Alcoolisé','regime 2','30 CL', 4977),   
(395,'CASIER FANTA POMME     ', 'Non Alcoolisé','regime 2','30 CL', 4977),   
(396,'CASIER FANTA ORANGE    ', 'Non Alcoolisé','regime 2','30 CL', 4977),   
(397,'CASIER SPRITE          ', 'Non Alcoolisé','regime 2','30 CL', 4977),   
(398,'CASIER SCHWEPPES AGRUME', 'Non Alcoolisé','regime 2','30 CL', 5953),   
(399,'CASIER TOP ANANAS      ', 'Non Alcoolisé','regime 2','30 CL', 4099),   
(400,'CASIER TOP GRENADINE   ', 'Non Alcoolisé','regime 2','30 CL', 4099),   
(401,'CASIER TOP ORANGE      ', 'Non Alcoolisé','regime 2','30 CL', 4099),   
(402,'CASIER TOP PAMPLEMOUSSE', 'Non Alcoolisé','regime 2','30 CL', 4099),   
(403,'CASIER ORANGINA        ', 'Non Alcoolisé','regime 2','30 CL', 6050),   
(404,'CASIER VIMTO           ', 'Non Alcoolisé','regime 2','30 CL', 6050),   
(405,'CASIER TOPTONIC        ', 'Non Alcoolisé','regime 2','30 CL', 5123),   
(406,'CASIER TOPSODA         ', 'Non Alcoolisé','regime 2','30 CL', 4294),   
(407,'CASIER MALTA TONIC     ', 'Non Alcoolisé','regime 2','30 CL', 7221),   
(408,'CASIER XXL             ', 'Non Alcoolisé','regime 2','30 CL', 6636),   
(409,'CASIER XXL LOVE        ', 'Non Alcoolisé','regime 2','30 CL', 6636),   
	
	
(410,'PACK 12 FANTA POMME PET      ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(411,'PACK 12 COCA-COLA PET        ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(412,'PACK 12 FANTA ORANGE PET     '  , 'Non Alcoolisé','regime 2' ,'35 CL ',2928),   
(413,'PACK 12 COCA-COLA ZERO PET   ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(414,'PACK 12 SPRITE  PET          ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(415,'PACK 12 SPRITE  ZERO PET     ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(416,'PACK 12 SCHWEPPES AGRUME PET ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',3903),   
(417,'PACK 12 TOP ANANAS PET       ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(418,'PACK 6 TOP GRENADINE PET     ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(419,'PACK 6 TOP ORANGE PET        ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(420,'PACK 12 TOP PAMPLEMOUSSE PET ', 'Non Alcoolisé'  ,'regime 2' ,'35 CL ',2928),   
(421,'PACK 12 TOP COLA PET         ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(422,'PACK 12 TOP LEMON PET        ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(423,'PACK 12 DJINO COCKTAIL FRUITS' , 'Non Alcoolisé' ,'regime 2' ,'35 CL  ',3513),   
(424,'PACK 12 ORANGINA PET         ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',4099),   
(425,'PACK 12 VIMTO PET            '  , 'Non Alcoolisé','regime 2' ,'35 CL ',4099),   
(426,'PACK 12 XXL  PET             '  , 'Non Alcoolisé','regime 2' ,'35 CL ',3972),   
(427,'PACK 12 XXL LOVE  PET        '  , 'Non Alcoolisé','regime 2' ,'35 CL ',3972),   
(428,'PACK 12 TOPTONIC             ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2928),   
(429,'PACK 12 SODA WATER           ' , 'Non Alcoolisé' ,'regime 2' ,'35 CL ',2440),   
	
(430,'PACK SIROP GRENADINE         ' , 'Non Alcoolisé' ,'regime 2' ,'50 CL ',3708),   
(431,'PACK SIROP MENTHE            ' , 'Non Alcoolisé' ,'regime 2' ,'50 CL ',3708),   
(432,'PACK SIROP ORANGE            ' , 'Non Alcoolisé' ,'regime 2' ,'50 CL ',3708),   
	
(433,'CARTON MALTA TONIC BOITES   '  , 'Non Alcoolisé','regime 2' ,'33 CL ',9505),   
(434,'CARTON XXL BOITES           '  , 'Non Alcoolisé','regime 2' ,'33 CL ',8334), 
(435,'PACK DE 6 COCA-COLA BOITES   ', 'Non Alcoolisé','regime 2','33 CL', 7292 ),  
(436,'PACK DE 6 FANTA ORANGE BOITES', 'Non Alcoolisé','regime 2','33 CL', 7292 ),  
(437,'PACK SPRITE BOITES           ', 'Non Alcoolisé','regime 2','33 CL', 7292 ),  
(438,'CARTON VIMTO BOITES          ', 'Non Alcoolisé','regime 2','33 CL', 8334 ),  
(439,'CARTON ORANGINA BOITES       ', 'Non Alcoolisé','regime 2','33 CL', 8334 ),  
(440,'CARTON MALTA TONIC BOITES    ', 'Non Alcoolisé','regime 2','50 CL', 10595),   
	
	
(441,'PACK SPRITE ZERO PET      ', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3137) ,  
(442,'PACK DE 6 COCA-COLA PET   ', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3137) ,  
(443,'PACK DE 6 FANTA POMME PET ', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3137) ,  
(444,'PACK DE 6 COCA-ZERO PET   ', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3137) ,  
(445,'PACK DE 6 FANTA ORANGE PET', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3137) ,  
(446,'PACK SPRITE PET           ', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3137) ,  
(447,'PACK SCHWEPPES AGRUME PET ', 'Non Alcoolisé','regime 2' ,' 100 CL' ,3659) ,  
(448,'PACK TOPANANAS PET         ', 'Non Alcoolisé','regime 2' ,'100 CL	' ,2537),   
(449,'PACK TOPGRENADINE PET      ', 'Non Alcoolisé','regime 2' ,'100 CL	' ,2537),   
(450,'PACK TOPAMPLEMOUSSE PET    ', 'Non Alcoolisé','regime 2' ,'100 CL	' ,2537),   
(451,'PACK TOPORANGE PET         ', 'Non Alcoolisé','regime 2' ,'100 CL	' ,2537),   
(452,'PACK TOPCOLA PET           ', 'Non Alcoolisé','regime 2' ,'100 CL	' ,2537),   
(453,'PACK TOPLEMON PET          ', 'Non Alcoolisé','regime 2' ,'100 CL	' ,2537),   
(454,'PACK 6 DJINO COCKTAIL FRUITS PET', 'Non Alcoolisé', 'regime 2','100 CL',3430),  
(455,'PACK 6 ORANGINA PET ', 'Non Alcoolisé' , 'regime 2','100 CL ',4016),   
(456,'PACK 6 VIMTO PET    ', 'Non Alcoolisé' , 'regime 2','100 CL',3981),   
(457,'PACK SOURCE TANGUI  ', 'Non Alcoolisé' , 'regime 2','50 CL ', 976 ),  
(458,'PACK SOURCE VITALE  ', 'Non Alcoolisé' , 'regime 2','50 CL ',1464),   
(459,'PACK SOURCE TANGUI  ', 'Non Alcoolisé' , 'regime 2','33 CL ',1073),   
(460,'PACK SOURCE TANGUI ' , 'Non Alcoolisé', 'regime 2',' 100 CL ',1122),   
(461,'PACK SOURCE TANGUI  ', 'Non Alcoolisé' , 'regime 2','150 CL	',1415),   
(462,'EAU VITALE          ', 'Non Alcoolisé' , 'regime 2','150 CL ',1171),   
(463,'PACK EAU VITALE    ', 'Non Alcoolisé' , 'regime 2',' 150 CL CD EXT',1171),   
(464,'EAU VITALE          ', 'Non Alcoolisé' , 'regime 2','150 CL PROMO	 ',1073),   
(465,'PACK SOURCE TANGUI  ', 'Non Alcoolisé' , 'regime 2','180 CL PROMO	 ',1366),   
(466,'BIDON SOURCE TANGUI ' , 'Non Alcoolisé', 'regime 2','5L PROMO	     ',537  ), 
(467,'BIDON SOURCE TANGUI', 'Non Alcoolisé' , 'regime 2',' 10L PROMO	   ',1025),   
(468,'BIDON EAU VITALE    ' , 'Non Alcoolisé', 'regime 2','10L 	         ',927  ), 
(469,'BIDON EAU VITALE    ', 'Non Alcoolisé' , 'regime 2','10L CD EXTER	 ',927  ), 
(470,'BIDON EAU VITALE   ', 'Non Alcoolisé' , 'regime 2',' 10L PR  ',854  ), 
(471,'PACK SOURCE TANGUI AROMATISEES' , 'Non Alcoolisé', 'regime 2',' 0.5L',1220),   
(472,'PACK SOURCE TANGUI AROMATISEES' , 'Non Alcoolisé', 'regime 2',' 33 CL',1421),   
(473,'PACK SOURCE TANGUI AROMATISEES' , 'Non Alcoolisé', 'regime 2',' 1.0L',1666),   
(474,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé' , 'regime 2',' 1.5L',2504), 

	
(475,'CASIER MUTZIG               ', 'Alcoolisé','regime 5','50 CL',5450),   
(476,'CASIER CASTEL               ', 'Alcoolisé','regime 5','50 CL',5450),  
(477,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 5','50 CL',5450),   
(478,'CASIER MANYAN               ', 'Alcoolisé','regime 5','65 CL',5400),   
(479,'CASIER CHILL                ', 'Alcoolisé','regime 5','50 CL',5400),   
(480,'CASIER BEAUFORT LIGHT       ', 'Alcoolisé','regime 5','50 CL',6525),   
(481,'CASIER BEAUFORT LAGER       ', 'Alcoolisé','regime 5','50 CL',6525),   
(482,'CASIER BEAUFORT TANGO       ', 'Alcoolisé','regime 5','50 CL',6525),   
(483,'CASIER DOPEL MUNICH         ', 'Alcoolisé','regime 5','50 CL',6050),   
(484,'CASIER CASTLE MILK STOUT    ', 'Alcoolisé','regime 5','50 CL',7125),   
(485,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 5','65 CL',7200),   
(486,'CASIER AMSTEL               ', 'Alcoolisé','regime 5','65 CL',7200),   
(487,'CASIER MUTZIG               ', 'Alcoolisé','regime 5','65 CL',7200),   
(488,'CASIER CASTEL               ', 'Alcoolisé','regime 5','65 CL',7200),   
(489,'CASIER DOPPEL MUNICH        ', 'Alcoolisé','regime 5','65 CL',7200),   
(490,'CASIER JAPAP                ', 'Alcoolisé','regime 5','65 CL',6645),   
(491,'CASIER PELFORTH EXTRA STOUT ', 'Alcoolisé','regime 5','65 CL',7700),   
(492,'CASIER ISENBECK             ', 'Alcoolisé','regime 5','65 CL',8300),   
	
(493,'CASIER CASTEL              ', 'Alcoolisé','regime 5','33 CL', 8800),   
(494,'CASIER "33" EXPORT         ', 'Alcoolisé','regime 5','33 CL', 8800),   
(495,'CASIER CHILL               ', 'Alcoolisé','regime 5','33 CL', 7700),   
(496,'CASIER BEAUFORT LIGHT      ', 'Alcoolisé','regime 5','33 CL', 8800),   
(497,'CASIER BEAUFORT LAGER      ', 'Alcoolisé','regime 5','33 CL', 8800),   
(498,'CASIER PELFORTH EXTRA STOUT', 'Alcoolisé','regime 5','33 CL', 9500),   
(499,'CASIER CASTLE MILK STOUT   ', 'Alcoolisé','regime 5','33 CL', 9500),   
(500,'CASIER DOPEL MUNICH        ', 'Alcoolisé','regime 5','33 CL', 9500), 
(501,'CASIER MUTZIG              ', 'Alcoolisé','regime 5','33 CL', 8800),   
(502,'CASIER ISENBECK            ', 'Alcoolisé','regime 5','33 CL', 9500),   
(503,'CARTON "33" EXPORT BOITE   ', 'Alcoolisé','regime 5','33 CL', 9600),   
(504,'CARTON MÜTZIG BOITE        ', 'Alcoolisé','regime 5','33 CL', 9600),   
(505,'CARTON CASTEL BOITE        ', 'Alcoolisé','regime 5','33 CL', 9600),   
(506,'CARTON MANYAN BOITE        ', 'Alcoolisé','regime 5','50 CL',11600),   
(507,'CARTON CHILL BOITE         ', 'Alcoolisé','regime 5','50 CL',12152),   
(508,'CARTON BEAUFORT LIGHT      ', 'Alcoolisé','regime 5','50 CL',14400),   
(509,'CARTON BEAUFORT LAGER BOITE', 'Alcoolisé','regime 5','50 CL',14400),   
(510,'CARTON "33" EXPORT BOITE   ', 'Alcoolisé','regime 5','50 CL',14400),   
(511,'CARTON MÜTZIG BOITE        ', 'Alcoolisé','regime 5','50 CL',14400),   
(512,'CARTON CASTEL BOITE        ', 'Alcoolisé','regime 5','50 CL',14400),   
(513,'CARTON ISENBECK BOITE      ', 'Alcoolisé','regime 5','50 CL',16400),   
(514,'CARTON HEINEKEN BOITES     ', 'Alcoolisé','regime 5','50 CL',18600),   	
(515,'CARTON HEINEKEN BOUTEILLES', 'Alcoolisé','regime 5','33	CL', 16100),  
	
(516,'FUT DE 20 LITRES ISENBECK	        ', 'Alcoolisé','regime 5','   20 LITRES', 25619),   
(517,'FUT DE 20 LITRES BEAUFORT LIGHT	  ', 'Alcoolisé','regime 5','   20 LITRES', 17421),   
(518,'FUT DE 20 LITRES BEAUFORT LAGER	  ', 'Alcoolisé','regime 5','   20 LITRES', 17421),   
(519,'FUT DE 30 LITRES CASTLE MILF STOUT', 'Alcoolisé','regime 5','	 30 LITRES', 22544),   
(520,'FUT DE 30 LITRES BEAUFORT LIGHT	  ', 'Alcoolisé','regime 5','   30 LITRES', 25619),   
(521,'FUT DE 30 LITRES BEAUFORT LAGER	  ', 'Alcoolisé','regime 5','   30 LITRES', 25619),   
(522,'FUT DE 30 LITRES ISENBECK	        ', 'Alcoolisé','regime 5','   30 LITRES', 30742),   
(523,'FUT DE 50 LITRES MANYAN	          ', 'Alcoolisé','regime 5','   50 LITRES', 33816),   
(524,'FUT DE 50 LITRES BEAUFORT LIGHT	  ', 'Alcoolisé','regime 5','   50 LITRES', 42014),   
(525,'FUT DE 50 LITRES BEAUFORT LAGER	  ', 'Alcoolisé','regime 5','   50 LITRES', 42014),   
(526,'FUT DE 50 LITRES CASTEL BEER	    ', 'Alcoolisé','regime 5','   50 LITRES', 42014),   
(527,'FUT DE 50 LITRES "33" EXPORT	    ', 'Alcoolisé','regime 5','   50 LITRES', 42014),   
(528,'FUT DE 50 LITRES ISENBECK	        ', 'Alcoolisé','regime 5','   50 LITRES', 51237),   
(529,'CASIER BOOSTER GIN TONIC          ', 'Alcoolisé','regime 5','50 CL	      ', 7000 ),  
(530,'CASIER BOOSTER RHUM GINGER        ', 'Alcoolisé','regime 5','50 CL	      ', 7000 ),  
(531,'CASIER BOOSTER RACINE             ', 'Alcoolisé','regime 5','50 CL PROMO	', 5385 ),  
(532,'CASIER BOOSTER CARAMEL            ', 'Alcoolisé','regime 5','30 CL	      ', 7400 ),  
(533,'CASIER BOOSTER WHISKY COLA        ', 'Alcoolisé','regime 5','50 CL	      ', 7000 ),  
(534,'CARTON BOOSTER WHISKY COLA BOITES ', 'Alcoolisé','regime 5','50 CL	      ',15000 ),  
(535,'CASIER BOOSTER CIDER              ', 'Alcoolisé','regime 5','30 CL	      ', 9500 ),  
(536,'CASIER BOOSTER CIDER              ', 'Alcoolisé','regime 5','50 CL	      ', 7000 ),  
(537,'CASIER BOOSTER WHISKY COLA        ', 'Alcoolisé','regime 5','33 CL	      ', 9800 ),  	
(538,'CASIER SODA WATER       ', 'Non Alcoolisé','regime 5','60 CL',2600 ),  
(539,'CASIER COCA-COLA        ', 'Non Alcoolisé','regime 5','60 CL',4050 ),  
(540,'CASIER COCA-COLA ZERO   ', 'Non Alcoolisé','regime 5','60 CL',4050 ),  
(541,'CASIER FANTA POMME      ', 'Non Alcoolisé','regime 5','60 CL',4050 ),  
(542,'CASIER FANTA ORANGE     ', 'Non Alcoolisé','regime 5','60 CL',4050 ),  
(543,'CASIER SPRITE           ', 'Non Alcoolisé','regime 5','60 CL',4050 ),  
(544,'CASIER SPRITE ZERO      ', 'Non Alcoolisé','regime 5','60 CL',4050 ),  
(545,'CASIER SCHWEPPES AGRUME ', 'Non Alcoolisé','regime 5','60 CL', 5050),   
(546,'CASIER DJINO COCKTAIL   ', 'Non Alcoolisé','regime 5','60 CL',4900 ),  
(547,'CASIER VIMTO            ', 'Non Alcoolisé','regime 5','60 CL',4900 ),  
(548,'CASIER TOP ANANAS       ', 'Non Alcoolisé','regime 5','60 CL',3668 ),  
(549,'CASIER TOP GRENADINE    ', 'Non Alcoolisé','regime 5','60 CL',3668 ),  
(550,'CASIER TOP ORANGE       ', 'Non Alcoolisé','regime 5','60 CL',3668 ),  
(551,'CASIER TOP PAMPLEMOUSSE ', 'Non Alcoolisé','regime 5','60 CL',3668 ),  
(552,'CASIER TOP COLA         ', 'Non Alcoolisé','regime 5','60 CL',3668 ),  
(553,'CASIER TOP LEMON        ', 'Non Alcoolisé','regime 5','60 CL',3668 ),  
(554,'CASIER ORANGINA         ', 'Non Alcoolisé','regime 5','60 CL',4900 ),  	
(555,'CASIER COCA-COLA ', 'Non Alcoolisé','regime 5','30 CL'	, 5100  ), 
(556,'CASIER COCA-COLA ZERO ', 'Non Alcoolisé','regime 5','30 CL'	, 5100  ), 
(557,'CASIER FANTA POMME ', 'Non Alcoolisé','regime 5','30 CL'	, 5100  ), 
(558,'CASIER FANTA ORANGE ', 'Non Alcoolisé','regime 5','30 CL'	, 5100  ), 
(559,'CASIER SPRITE ', 'Non Alcoolisé','regime 5','30 CL'	, 5100  ), 
(560,'CASIER SCHWEPPES AGRUME ', 'Non Alcoolisé','regime 5','30 CL', 	 6100  ), 
(561,'CASIER TOP ANANAS', 'Non Alcoolisé','regime 5',' 30 CL',	 4200 ),  
(562,'CASIER TOP GRENADINE ', 'Non Alcoolisé','regime 5','30 CL'	, 4200  ), 
(563,'CASIER TOP ORANGE', 'Non Alcoolisé','regime 5',' 30 CL',	 4200 ),  
(564,'CASIER TOP PAMPLEMOUSSE ', 'Non Alcoolisé','regime 5','30 CL'	, 4200  ), 
(565,'CASIER ORANGINA ', 'Non Alcoolisé','regime 5','30 CL'	, 6200  ), 
(566,'CASIER VIMTO ', 'Non Alcoolisé','regime 5','30 CL'	, 6200  ), 
(567,'CASIER TOP TONIC', 'Non Alcoolisé','regime 5',' 30 CL',	 5250 ),  
(568,'CASIER TOP SODA ', 'Non Alcoolisé','regime 5','30 CL'	, 4400  ), 
(569,'CASIER MALTA TONIC ', 'Non Alcoolisé','regime 5','30 CL	' ,7400   ),
(570,'CASIER XXL ', 'Non Alcoolisé','regime 5','30 CL' ,	 6800 ),  
(571,'CASIER XXL LOVE ', 'Non Alcoolisé','regime 5','30 CL' ,	 6800 ),
(572,'PACK 12 COCA-COLA PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(573,'PACK 12 FANTA POMME PET', 'Non Alcoolisé','regime 5',' 35 CL',	 3000),   
(574,'PACK 12 FANTA ORANGE PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(575,'PACK 12 COCA-COLA ZERO PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(576,'PACK 12 SPRITE  PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(577,'PACK 12 SPRITE  ZERO PET ', 'Non Alcoolisé','regime 5','35 CL 	', 3000 ),  
(578,'PACK 12 SCHWEPPES AGRUME PET ', 'Non Alcoolisé','regime 5','35 CL	', 4000 ),  
(579,'PACK 12 TOP ANANAS PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(580,'PACK 6 TOP GRENADINE PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(581,'PACK 6 TOP ORANGE PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(582,'PACK 12 TOP PAMPLEMOUSSE PE', 'Non Alcoolisé','regime 5','T35CL	', 3000 ),  
(583,'PACK 12 TOP COLA PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(584,'PACK 12 TOP LEMON PET ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),
(585,'PACK 12 DJINO COCKTAIL FRUITS	', 'Non Alcoolisé','regime 5','35 CL', 3600 ),  
(586,'PACK 12 ORANGINA PET', 'Non Alcoolisé','regime 5',' 35CL	', 4200 ),  
(587,'PACK 12 VIMTO PET', 'Non Alcoolisé','regime 5',' 35CL	', 4200 ),  
(588,'PACK 12 XXL  PET ', 'Non Alcoolisé','regime 5','35 CL 	', 4070 ),  
(589,'PACK 12 XXL LOVE  PET ', 'Non Alcoolisé','regime 5','35 CL 	', 4070 ),  
(590,'PACK 12 TOPTONIC ', 'Non Alcoolisé','regime 5','35 CL	', 3000 ),  
(591,'PACK 12 SODA WATER ', 'Non Alcoolisé','regime 5','35 CL	', 2500 ),  
(592,'PACK SIROP GRENADINE ', 'Non Alcoolisé','regime 5','50 CL	', 3800 ),  
(593,'PACK SIROP MENTHE ', 'Non Alcoolisé','regime 5','50 CL	', 3800 ),  
(594,'PACK SIROP ORANGE', 'Non Alcoolisé','regime 5','50 CL	', 3800 ),  
(595,'CARTON MALTA TONIC BOITES ', 'Non Alcoolisé','regime 5','33 CL	', 9740 ),  
(596,'CARTON XXL BOITES ', 'Non Alcoolisé','regime 5','33 CL	 ',8540  ), 
(597,'PACK DE 6 COCA-COLA BOITES ', 'Non Alcoolisé','regime 5','33 CL	', 7472 ),  
(598,'PACK DE 6 FANTA ORANGE BOITES', 'Non Alcoolisé','regime 5',' 33 CL',	 7472),   
(599,'PACK SPRITE BOITES ', 'Non Alcoolisé','regime 5','33 CL	', 7472 ),  
(600,'CARTON VIMTO BOITES ', 'Non Alcoolisé','regime 5','33 CL	', 8540 ),
(601,'CARTON ORANGINA BOITES ', 'Non Alcoolisé','regime 5','33 CL	', 8540 ),  
(602,'CARTON MALTA TONIC BOITES ', 'Non Alcoolisé','regime 5','50 CL	 ',10857 ),  
	
	
(603,'PACK SPRITE ZERO PET ', 'Non Alcoolisé','regime 5','100 CL 	', 3215 ),  
(604,'PACK DE 6 COCA-COLA PET ', 'Non Alcoolisé','regime 5','100 CL 	', 3215 ),  
(605,'PACK DE 6 FANTA POMME PET ', 'Non Alcoolisé','regime 5','100 CL 	', 3215 ),  
(606,'PACK DE 6 COCA-ZERO PET ', 'Non Alcoolisé','regime 5','100 CL 	', 3215 ),  
(607,'PACK DE 6 FANTA ORANGE PET ', 'Non Alcoolisé','regime 5','100 	', 3215 ),  
(608,'PACK SPRITE PET ', 'Non Alcoolisé','regime 5','100 CL 	', 3215 ),  
(609,'PACK SCHWEPPES AGRUME PET ', 'Non Alcoolisé','regime 5','100 CL 	', 3750 ),  
(610,'PACK TOPANANAS PET ', 'Non Alcoolisé','regime 5','100 CL	', 2600 ),  
(611,'PACK TOPGRENADINE PET ', 'Non Alcoolisé','regime 5','100 CL	', 2600 ),  
(612,'PACK TOPAMPLEMOUSSE PET ', 'Non Alcoolisé','regime 5','100 CL	', 2600 ),  
(613,'PACK TOPORANGE PET', 'Non Alcoolisé','regime 5',' 100 CL	', 2600 ),  
(614,'PACK TOPCOLA PET ', 'Non Alcoolisé','regime 5','100 CL	', 2600 ),  
(615,'PACK TOPLEMON PET ', 'Non Alcoolisé','regime 5','100 CL	', 2600 ),  
(616,'PACK 6 DJINO COCKTAIL FRUITS PET ', 'Non Alcoolisé','regime 5','100CL	', 3515 ),  
(617,'PACK 6 ORANGINA PET ', 'Non Alcoolisé','regime 5','100CL	', 4115 ),  
(618,'PACK 6 VIMTO PET ', 'Non Alcoolisé','regime 5','100CL	', 4080 ),  
	
	
(619,'PACK SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 50 CL 	 ',1000   ),
(620,'PACK SOURCE VITALE', 'Non Alcoolisé','regime 5',' 50 CL 	 ',1500   ),
(621,'PACK SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 33 CL 	 ',1100   ),
(622,'PACK SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 100 CL 	 ',1150   ),
(623,'PACK SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 150 CL	 ',1450   ),
(624,'EAU VITALE ', 'Non Alcoolisé','regime 5','150 CL	', 1200  ), 
(625,'PACK EAU VITALE ', 'Non Alcoolisé','regime 5',' 150 CL CD EXT',	 1200 ),  
(626,'EAU VITALE ', 'Non Alcoolisé','regime 5','150 CL PROMO	', 1100  ), 
(627,'PACK SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 180 CL PROMO',	 1400 ),  
(628,'BIDON SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 5L PROMO',	 550   ),
(629,'BIDON SOURCE TANGUI', 'Non Alcoolisé','regime 5',' 10L PROMO',	 1050 ),  
(630,'BIDON EAU VITALE ', 'Non Alcoolisé','regime 5','10L ',	 950   ),
(631,'BIDON EAU VITALE ', 'Non Alcoolisé','regime 5',' 10L CD EXTER	', 950),
 (632,'BIDON EAU VITALE ', 'Non Alcoolisé','regime 5','10L PROMO',	 875   ),
	
	
(633,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 5','0.5L ', 1250),   
(634,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 5','33 CL', 1456),   
(635,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 5','1.0L ', 1707),   
(636,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé', 'regime 5','1.5L ', 2566),   



	
(637,'CASIER CASTEL               ', 'Alcoolisé','regime 10','50 CL ', 5669),   
(638,'CASIER MUTZIG               ', 'Alcoolisé','regime 10','50 CL ', 5669),   
(639,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 10','50 CL ', 5669),   
(640,'CASIER MANYAN               ', 'Alcoolisé','regime 10','65 CL ', 5617),   
(641,'CASIER CHILL                ', 'Alcoolisé','regime 10','50 CL ', 5617),   
(642,'CASIER BEAUFORT LIGHT       ', 'Alcoolisé','regime 10','50 CL ', 6788),   
(643,'CASIER BEAUFORT LAGER       ', 'Alcoolisé','regime 10','50 CL ', 6788),   
(644,'CASIER BEAUFORT TANGO       ', 'Alcoolisé','regime 10','50 CL ', 6788),   
(645,'CASIER DOPEL MUNICH         ', 'Alcoolisé','regime 10','50 CL ', 6293),   
(646,'CASIER CASTLE MILK STOUT    ', 'Alcoolisé','regime 10','50 CL ', 7412),   
(647,'CASIER "33" EXPORT          ', 'Alcoolisé','regime 10','65 CL ', 7490),   
(648,'CASIER AMSTEL               ', 'Alcoolisé','regime 10','65 CL ', 7490),   
(649,'CASIER MUTZIG               ', 'Alcoolisé','regime 10','65 CL ', 7490),   
(650,'CASIER CASTEL               ', 'Alcoolisé','regime 10','65 CL ', 7490),   
(651,'CASIER DOPPEL MUNICH        ', 'Alcoolisé','regime 10','65 CL ', 7490),   
(652,'CASIER JAPAP                ', 'Alcoolisé','regime 10','65 CL ', 6913),   
(653,'CASIER PELFORTH EXTRA STOUT ', 'Alcoolisé','regime 10','65 CL ',8010 ),  
(654,'CASIER ISENBECK             ', 'Alcoolisé','regime 10','65 CL ', 8634),   
	
(655,'CASIER CASTEL              ', 'Alcoolisé','regime 10', '33 CL'	, 9154 ),  
(656,'CASIER "33" EXPORT         ', 'Alcoolisé','regime 10', '33 CL'	, 9154 ),  
(657,'CASIER CHILL               ', 'Alcoolisé','regime 10', '33 CL'	, 8010 ),  
(658,'CASIER BEAUFORT LIGHT      ', 'Alcoolisé','regime 10', '33 CL'	, 9154 ),  
(659,'CASIER BEAUFORT LAGER      ', 'Alcoolisé','regime 10', '33 CL'	, 9154 ),  
(660,'CASIER PELFORTH EXTRA STOUT', 'Alcoolisé','regime 10', '33 CL'	, 9882 ),  
(661,'CASIER CASTLE MILK STOUT   ', 'Alcoolisé','regime 10', '33 CL'	, 9882 ),  
(662,'CASIER DOPEL MUNICH        ', 'Alcoolisé','regime 10', '33 CL'	, 9882 ),  
(663,'CASIER MUTZIG              ', 'Alcoolisé','regime 10', '33 CL'	, 9154 ),  
(664,'CASIER ISENBECK            ', 'Alcoolisé','regime 10', '33 CL'	, 9882 ),  
	
	
(665,'CARTON "33" EXPORT BOITE   ', 'Alcoolisé','regime 10', '33 CL'	, 9986 ),  
(666,'CARTON MÜTZIG BOITE        ', 'Alcoolisé','regime 10', '33 CL'	, 9986 ),  
(667,'CARTON CASTEL BOITE        ', 'Alcoolisé','regime 10', '33 CL'	, 9986 ),  
(668,'CARTON MANYAN BOITE        ', 'Alcoolisé','regime 10', '50 CL' ,12067 ),  
(669,'CARTON CHILL BOITE         ', 'Alcoolisé','regime 10', '50 CL'	, 12641),   
(670,'CARTON BEAUFORT LIGHT      ', 'Alcoolisé','regime 10', '50 CL'	, 14979),   
(671,'CARTON BEAUFORT LAGER BOITE', 'Alcoolisé','regime 10', '50 CL' ,14979 ),  
(672,'CARTON "33" EXPORT BOITE   ', 'Alcoolisé','regime 10', '50 CL' ,14979 ),  
(673,'CARTON MÜTZIG BOITE        ', 'Alcoolisé','regime 10', '50 CL'	, 14979),   
(674,'CARTON CASTEL BOITE        ', 'Alcoolisé','regime 10', '50 CL'	, 14979),   
(675,'CARTON ISENBECK BOITE      ', 'Alcoolisé','regime 10', '50 CL'	, 17060),   
(676,'CARTON HEINEKEN BOITES     ', 'Alcoolisé','regime 10', '50 CL'	, 19348),   
	
	
(677,'CARTON HEINEKEN BOUTEILLES         ', 'Alcoolisé','regime 10','    33 CL ',16748),   
	
(678,'FUT DE 20 LITRES ISENBECK	         ', 'Alcoolisé','regime 10','20 LITRES ',26649),   
(679,'FUT DE 20 LITRES BEAUFORT LIGHT	   ', 'Alcoolisé','regime 10','20 LITRES ',18122),   
(680,'FUT DE 20 LITRES BEAUFORT LAGER	   ', 'Alcoolisé','regime 10','20 LITRES ',18122),     
(681,'FUT DE 30 LITRES CASTLE MILF STOUT', 'Alcoolisé','regime 10','30 LITRES ',23452),   
(682,'FUT DE 30 LITRES BEAUFORT LIGHT	   ', 'Alcoolisé','regime 10','30 LITRES ',26649),   
(683,'FUT DE 30 LITRES BEAUFORT LAGER	   ', 'Alcoolisé','regime 10','30 LITRES ',26649),   
(684,'FUT DE 30 LITRES ISENBECK	         ', 'Alcoolisé','regime 10','30 LITRES ',31979),   
(685,'FUT DE 50 LITRES MANYAN	           ', 'Alcoolisé','regime 10','50 LITRES ',35177),
(686,'FUT DE 50 LITRES BEAUFORT LIGHT	   ', 'Alcoolisé','regime 10','50 LITRES ',43705),   
(687,'FUT DE 50 LITRES BEAUFORT LAGER	   ', 'Alcoolisé','regime 10','50 LITRES ',43705),   
(688,'FUT DE 50 LITRES CASTEL BEER	     ', 'Alcoolisé','regime 10','50 LITRES ',43705),   
(689,'FUT DE 50 LITRES "33" EXPORT	     ', 'Alcoolisé','regime 10','50 LITRES ',43705),   
(690,'FUT DE 50 LITRES ISENBECK	         ', 'Alcoolisé','regime 10','50 LITRES ',53299),   
	
	
(691,'CASIER BOOSTER GIN TONIC         ', 'Alcoolisé','regime 10','50 CL	     ', 7282),  
(692,'CASIER BOOSTER RHUM GINGER       ', 'Alcoolisé','regime 10','50 CL	     ', 7282),   
(693,'CASIER BOOSTER RACINE            ', 'Alcoolisé','regime 10','50 CL PROMO', 5601),   
(694,'CASIER BOOSTER CARAMEL           ', 'Alcoolisé','regime 10','30 CL	     ', 7698),   
(695,'CASIER BOOSTER WHISKY            ', 'Alcoolisé','regime 10','50 CL	     ', 7282),   
(696,'CARTON BOOSTER WHISKY COLA BOITES', 'Alcoolisé','regime 10','50 CL	     ',15604),   
(697,'CASIER BOOSTER CIDER             ', 'Alcoolisé','regime 10','30 CL	     ', 9882),   
(698,'CASIER BOOSTER CIDER             ', 'Alcoolisé','regime 10','50 CL	     ', 7282),   
(699,'CASIER BOOSTER WHISKY COLA       ', 'Alcoolisé','regime 10','33 CL	     ',10194),   
	
	
	
(700,'CASIER SODA WATER      ', 'Non Alcoolisé','regime 10','60 CL',2705 ),  
(701,'CASIER COCA-COLA       ', 'Non Alcoolisé','regime 10','60 CL',4213 ),  
(702,'CASIER COCA-COLA ZERO  ', 'Non Alcoolisé','regime 10','60 CL',4213 ),  
(703,'CASIER FANTA POMME     ', 'Non Alcoolisé','regime 10','60 CL',4213 ),  
(704,'CASIER FANTA ORANGE    ', 'Non Alcoolisé','regime 10','60 CL',4213 ),  
(705,'CASIER SPRITE          ', 'Non Alcoolisé','regime 10','60 CL',4213 ),  
(706,'CASIER SPRITE ZERO     ', 'Non Alcoolisé','regime 10','60 CL',4213 ),  
(707,'CASIER SCHWEPPES AGRUME', 'Non Alcoolisé','regime 10','60 CL',5253 ),  
(708,'CASIER DJINO COCKTAIL  ', 'Non Alcoolisé','regime 10','60 CL',5097 ),  
(709,'CASIER VIMTO           ', 'Non Alcoolisé','regime 10','60 CL',5097 ),  
(710,'CASIER TOP ANANAS      ', 'Non Alcoolisé','regime 10','60 CL',3816 ),  
(711,'CASIER TOP GRENADINE   ', 'Non Alcoolisé','regime 10','60 CL',3816 ),  
(712,'CASIER TOP ORANGE      ', 'Non Alcoolisé','regime 10','60 CL',3816 ),  
(713,'CASIER TOP PAMPLEMOUSSE', 'Non Alcoolisé','regime 10','60 CL',3816 ),  
(714,'CASIER TOP COLA        ', 'Non Alcoolisé','regime 10','60 CL',3816 ),  
(715,'CASIER TOP LEMON       ', 'Non Alcoolisé','regime 10','60 CL',3816 ),  
(716,'CASIER ORANGINA        ', 'Non Alcoolisé','regime 10','60 CL',5097 ),  
	
(717,'CASIER COCA-COLA       ', 'Non Alcoolisé','regime 10','30 CL',5305 ),
(718,'CASIER COCA-COLA ZERO  ', 'Non Alcoolisé','regime 10','30 CL',5305 ),
(719,'CASIER FANTA POMME     ', 'Non Alcoolisé','regime 10','30 CL',5305 ),
(720,'CASIER FANTA ORANGE    ', 'Non Alcoolisé','regime 10','30 CL',5305 ),
(721,'CASIER SPRITE          ', 'Non Alcoolisé','regime 10','30 CL',5305 ),
(722,'CASIER SCHWEPPES AGRUME', 'Non Alcoolisé','regime 10','30 CL',6345 ),
(723,'CASIER TOP ANANAS      ', 'Non Alcoolisé','regime 10','30 CL',4369 ),
(724,'CASIER TOP GRENADINE   ', 'Non Alcoolisé','regime 10','30 CL',4369 ),
(725,'CASIER TOP ORANGE      ', 'Non Alcoolisé','regime 10','30 CL',4369 ),
(726,'CASIER TOP PAMPLEMOUSSE', 'Non Alcoolisé','regime 10','30 CL',4369 ),
(727,'CASIER ORANGINA        ', 'Non Alcoolisé','regime 10','30 CL',6449 ),
(728,'CASIER VIMTO           ', 'Non Alcoolisé','regime 10','30 CL',6449 ),
(729,'CASIER TOPTONIC        ', 'Non Alcoolisé','regime 10','30 CL',5461 ),
(740,'CASIER TOPSODA         ', 'Non Alcoolisé','regime 10','30 CL',4577 ),
(741,'CASIER MALTA TONIC     ', 'Non Alcoolisé','regime 10','30 CL',7698 ),
(742,'CASIER XXL             ', 'Non Alcoolisé','regime 10','30 CL',7074 ),
(743,'CASIER XXL LOVE        ', 'Non Alcoolisé','regime 10','30 CL',7074 ),
(744,'PACK 12 COCA-COLA PET        ', 'Non Alcoolisé','regime 10','35 CL', 3121),       
(745,'PACK 12 FANTA POMME PET      ', 'Non Alcoolisé','regime 10','35 CL', 3121),       
(746,'PACK 12 FANTA ORANGE PET     ', 'Non Alcoolisé','regime 10','35 CL', 3121),         
(747,'PACK 12 COCA-COLA ZERO PET   ', 'Non Alcoolisé','regime 10','35 CL', 3121),         
(748,'PACK 12 SPRITE  PET          ', 'Non Alcoolisé','regime 10','35 CL', 3121),         
(749,'PACK 12 SPRITE  ZERO PET     ', 'Non Alcoolisé','regime 10','35 CL',	 3121 ),        
(750,'PACK 12 SCHWEPPES AGRUME PET ', 'Non Alcoolisé','regime 10','35 CL', 4161   ),      
(751,'PACK 12 TOP ANANAS PET       ', 'Non Alcoolisé','regime 10','35 CL', 3121   ),      
(752,'PACK 6 TOP GRENADINE PET     ', 'Non Alcoolisé','regime 10','35 CL', 3121   ),      
(753,'PACK 6 TOP ORANGE PET        ', 'Non Alcoolisé','regime 10','35 CL', 3121 ),   
(754,'PACK 12 TOP PAMPLEMOUSSE PET ', 'Non Alcoolisé','regime 10','35 CL', 3121 ),   
(755,'PACK 12 TOP COLA PET         ', 'Non Alcoolisé','regime 10','35 CL', 3121 ),   
(756,'PACK 12 TOP LEMON PET        ', 'Non Alcoolisé','regime 10','35 CL', 3121 ),   
(757,'PACK 12 DJINO COCKTAIL FRUITS', 'Non Alcoolisé','regime 10',' 35 CL', 3745    ),     
(758,'PACK 12 ORANGINA PET         ', 'Non Alcoolisé','regime 10','35 CL', 4369    ),     
(759,'PACK 12 VIMTO PET            ', 'Non Alcoolisé','regime 10','35 CL', 4369    ),     
(760,'PACK 12 XXL  PET             ', 'Non Alcoolisé','regime 10','35 CL',	 4234  ),       
(761,'PACK 12 XXL LOVE  PET        ', 'Non Alcoolisé','regime 10','35 CL',	 4234     ),    
(762,'PACK 12 TOPTONIC             ', 'Non Alcoolisé','regime 10','35 CL', 3121       ),  
(763,'PACK 12 SODA WATER           ', 'Non Alcoolisé','regime 10','35 CL', 2601       ),  
(764,'PACK SIROP GRENADINE          ', 'Non Alcoolisé','regime 10','  50 CL',3953 ),
(765,'PACK SIROP MENTHE             ', 'Non Alcoolisé','regime 10','  50 CL',3953 ),
(766,'PACK SIROP ORANGE             ', 'Non Alcoolisé','regime 10','  50 CL',3953 ),
(767,'CARTON MALTA TONIC BOITES     ', 'Non Alcoolisé','regime 10','  33 CL',10132), 
(768,'CARTON XXL BOITES             ', 'Non Alcoolisé','regime 10','  33 CL',8884 ),
(769,'PACK DE 6 COCA-COLA BOITES    ', 'Non Alcoolisé','regime 10','  33 CL',7773 ),
(770,'PACK DE 6 FANTA ORANGE BOITES ', 'Non Alcoolisé','regime 10','  33 CL',7773 ),
(771,'PACK SPRITE BOITES            ', 'Non Alcoolisé','regime 10','  33 CL',7773 ),
(772,'CARTON VIMTO BOITES           ', 'Non Alcoolisé','regime 10','  33 CL',8884 ),
(773,'CARTON ORANGINA BOITES        ', 'Non Alcoolisé','regime 10','  33 CL',8884 ),
(774,'CARTON MALTA TONIC BOITES     ', 'Non Alcoolisé','regime 10','  50 CL',11294), 
(775,'PACK SPRITE ZERO PET          ', 'Non Alcoolisé','regime 10','100 CL ',3344 ),
(776,'PACK DE 6 COCA-COLA PET       ', 'Non Alcoolisé','regime 10','100 CL ',3344 ),
(777,'PACK DE 6 FANTA POMME PET     ', 'Non Alcoolisé','regime 10','100 CL ',3344 ),
(778,'PACK DE 6 COCA-ZERO PET       ', 'Non Alcoolisé','regime 10','100 CL ',3344 ),
(779,'PACK DE 6 FANTA ORANGE PET    ', 'Non Alcoolisé','regime 10','100 CL ',3344 ),
(780,'PACK SPRITE PET               ', 'Non Alcoolisé','regime 10','100 CL ',3344 ),
(781,'PACK SCHWEPPES AGRUME PET     ', 'Non Alcoolisé','regime 10','100 CL ',3901 ),  
(782,'PACK TOPANANAS PET           ', 'Non Alcoolisé','regime 10',' 100 CL',2705 ),  
(783,'PACK TOPGRENADINE PET        ', 'Non Alcoolisé','regime 10',' 100 CL',2705 ),  
(784,'PACK TOPAMPLEMOUSSE PET      ', 'Non Alcoolisé','regime 10',' 100 CL',2705 ),  
(785,'PACK TOPORANGE PET           ', 'Non Alcoolisé','regime 10',' 100 CL',2705 ),  
(786,'PACK TOPCOLA PET             ', 'Non Alcoolisé','regime 10',' 100 CL',2705 ),  
(787,'PACK TOPLEMON PET            ', 'Non Alcoolisé','regime 10',' 100 CL',2705 ),  

(788,'PACK 6 DJINO COCKTAIL FRUITS PET', 'Non Alcoolisé','regime 10','100 CL',3656),   
(789,'PACK 6 ORANGINA PET             ', 'Non Alcoolisé','regime 10','100 CL',4281),   
(790,'PACK 6 VIMTO PET                ', 'Non Alcoolisé','regime 10','100 CL',4244),   
	
	
(791,'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 10','  50 CL 	        ',1040),   
(792,'PACK SOURCE VITALE', 'Non Alcoolisé', 'regime 10','  50 CL 	        ',1560),   
(793,'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 10','  33 CL 	        ',1144),   
(794,'PACK SOURCE TANGUI', 'Non Alcoolisé', 'regime 10',' 100 CL 	        ',1196),   
(795,'PACK SOURCE TANGUI ', 'Non Alcoolisé', 'regime 10','150 CL	          ',1508),   
(796,'EAU VITALE         ', 'Non Alcoolisé', 'regime 10','150 CL	          ',1248),   
(797,'PACK EAU VITALE   ', 'Non Alcoolisé', 'regime 10',' 150 CL CD EXT	  ',1248),   
(798,'EAU VITALE         ', 'Non Alcoolisé', 'regime 10','150 CL PROMO	    ',1144),   
(800,'PACK SOURCE TANGUI ', 'Non Alcoolisé', 'regime 10','180 CL PROMO	    ',1456),   
(801,'BIDON SOURCE TANGUI', 'Non Alcoolisé', 'regime 10','   5 L PROMO	    ',  573),   
(802,'BIDON SOURCE TANGUI', 'Non Alcoolisé', 'regime 10','  10 L PROMO	    ',1092),   
(803,'BIDON EAU VITALE  ', 'Non Alcoolisé', 'regime 10','   10 L 	        ', 988),   
(804,'BIDON EAU VITALE  ', 'Non Alcoolisé', 'regime 10','   10 L CD EXTER ',	988),   
(805,'BIDON EAU VITALE   ', 'Non Alcoolisé', 'regime 10','  10 L PROMO	    ', 910),   
	
	
(806,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 10','0.5L ',1300),   
(807,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 10','33 CL',1515),   
(809,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 10','1.0L ',1776),   
(810,'PACK SOURCE TANGUI AROMATISEES', 'Non Alcoolisé','regime 10','1.5L ',2669),
(811, 'PACK SIROP GRENADINE', 'Non Alcoolisé', 'regime 1',	'50 CL', 3678),
(812,'PACK SIROP GRENADINE', 'Non Alcoolisé','regime 2.5', '50 CL',	 3724),   
(813,'PACK SIROP MENTHE   ', 'Non Alcoolisé','regime 2.5', '50 CL',	 3724),   
(814,'PACK SIROP ORANGE   ', 'Non Alcoolisé','regime 2.5', '50 CL',	 3724),   

(815,'CARTON MALTA TONIC BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 9544 ),  
(816,'CARTON XXL BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 8368 ),  
(817,'PACK DE 6 COCA-COLA BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 7322 ),  
(818,'PACK DE 6 FANTA ORANGE BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 7322 ),  
(819,'PACK SPRITE BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 7322 ),  
(820,'CARTON VIMTO BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 8368 ),  
(821,'CARTON ORANGINA BOITES', 'Non Alcoolisé','regime 2.5','33 CL', 8368 ),  
(822,'CARTON MALTA TONIC BOITES', 'Non Alcoolisé','regime 2.5','50 CL', 10639);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
