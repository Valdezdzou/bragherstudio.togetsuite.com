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
  `pr_designation` varchar(50) NOT NULL,
  `pr_prix_vente` varchar(50) NOT NULL,
  `pr_categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_produits`
--

INSERT INTO `tsb_produits` (`pr_id`, `pr_designation`, `pr_prix_vente`, `pr_categorie`) VALUES
(1, 'BEAUF LIGHT ORDI-TANGO', '650', 'Alcoolisé'),
(2, 'BOOSTER COLA-JIN', '650', 'Alcoolisé'),
(3, 'CASTEL', '650', 'Alcoolisé'),
(4, 'DOPPEL', '650', 'Alcoolisé'),
(5, 'GRANDE GUINNESS', '1200', 'Alcoolisé'),
(6, 'EXPORT 33', '650', 'Alcoolisé'),
(8, 'SUPERMONT DETAIL 1,5L', '400', 'Non Alcoolisé'),
(10, 'GUINNESS SMOOTH GM', '750', 'Alcoolisé'),
(11, 'GUINNESS SMOOTH PM', '500', 'Alcoolisé'),
(12, 'HARP', '750', 'Alcoolisé'),
(13, 'ICE', '700', 'Alcoolisé'),
(14, 'INSENBECK', '750', 'Alcoolisé'),
(15, 'KADJI', '650', 'Alcoolisé'),
(16, 'MALTA GUINNESS', '600', 'Alcoolisé'),
(17, 'MANYAN', '500', 'Alcoolisé'),
(18, 'MUTZIG', '650', 'Alcoolisé'),
(19, 'ORIGIN', '750', 'Alcoolisé'),
(20, 'PETIT GUINNESS', '650', 'Alcoolisé'),
(21, 'RACINE-CHILL-K44', '500', 'Alcoolisé'),
(23, 'TOP PALETTE 6', '500', 'Non Alcoolisé'),
(24, 'COCA PALETTE 6', '650', 'Non Alcoolisé'),
(31, 'MALK789', '100', 'Autre'),
(32, 'MALK78998', '100', 'Autre'),
(33, 'MPOPY', '1520', 'Autre');

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
(322, 24, 3, 0, 0, 0, 0,'comptoir', '2023/05/24');

-- -------------------------------------------------------

--
-- Structure de la table `tsb_users`
--

CREATE TABLE `tsb_users` (
  `us_id` int(10) NOT NULL,
  `us_name` varchar(50) NOT NULL,
  `us_phone` varchar(50) NOT NULL,
  `us_password` varchar(50) NOT NULL,
  `us_type` varchar(50) NOT NULL,
  `us_status` varchar(100) NOT NULL,
  `us_Dateimpots` DATE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tsb_users`
--

INSERT INTO `tsb_users` (`us_id`, `us_name`, `us_phone`, `us_password`, `us_type`,`us_Dateimpots`, `us_status`) VALUES
(6, 'POUM', '656064153', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Admin', '2023-08-08', 'Active'),
(18, 'Pauline', '656064154', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Service','2023-08-08','Active'),
(19, 'Valdez', '656064155', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'magasinier','2023-08-08','Active'),
(20, 'Anita', '656064156', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Caisse', '2023-08-08', 'Active');

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
-- Index pour la table `tsb_users`
--
ALTER TABLE `tsb_users`
  ADD PRIMARY KEY (`us_id`);

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

CREATE TABLE `ristourne`(
   `v_ristourne` VARCHAR(50),
   `st_id` int(10) NOT NULL,
   `id_ristourne` INT NOT NULL AUTO_INCREMENT,
   `date_ristourne` date NOT NULL,
    PRIMARY KEY(`id_ristourne`),
    FOREIGN KEY(`st_id`) REFERENCES `tsb_stocks`(`st_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


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


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
