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
(762, '483405435', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '6560648963', 'Pay', '2023/05/18'),
(763, '501444698', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(764, '501444698', 'BOOSTER COLA-JIN', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(765, '501444698', 'CASTEL', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(766, '501444698', 'KADJI', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(767, '501444698', 'TONIC', '300', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(768, '501444698', 'COCA PALETTE 6', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(769, '501444698', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'DF', '', 'Pay', '2023/05/18'),
(770, '404449676', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', 'POUM - TB05', '6566064153', 'Close', '2023/05/19'),
(771, '404449676', 'BOOSTER COLA-JIN', '650', '1', 'POUM', 'POUM - TB05', '6566064153', 'Close', '2023/05/19'),
(772, '613998641', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(773, '613998641', 'CASTEL', '650', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(774, '613998641', 'TONIC', '300', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(775, '613998641', 'BEAUF LIGHT ORDI-TANGO', '650', '1', 'POUM', '1234', '', 'Pay', '2023/05/19'),
(776, '613998641', 'BOOSTER COLA-JIN', '650', '1', 'POUM', '1234', '', 'Pay', '2023/05/19');

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

CREATE TABLE Ristourne(
   `vRistourne` VARCHAR(50),
   `st_id` int(10) NOT NULL,
   `idRistourne` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`idRistourne`),
    FOREIGN KEY(`st_id`) REFERENCES `tsb_stocks`(`st_id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
