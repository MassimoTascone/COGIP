-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 31 oct. 2019 à 09:48
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `COGIP`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `TVA` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `fk_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id_company`, `name`, `TVA`, `country`, `fk_type`) VALUES
(1, 'Raviga', 'US456 654 342', 'United States', 2),
(2, 'Dunder Mifflin', 'US678 765 765', 'United States', 2),
(3, 'Jouets Jean-Michel', 'FR 677 544 000', 'France', 2),
(4, 'Bob Vance Refrig.', 'US456 654 687', 'United States', 2),
(5, 'Belgalol', 'BE0876 654 665', 'Belgique', 1),
(6, 'Pierre Cailloux', 'FR 678 908 654', 'France', 1),
(7, 'Proximdr', 'BE0876 985 665', 'Belgique', 1),
(8, 'ElectricPower', 'IT 256 852 542', 'Italie', 1),
(9, 'Mutiny', 'IT 256 823 517', 'Italie', 1);

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `fk_company` int(11) NOT NULL,
  `fk_people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `number`, `date`, `fk_company`, `fk_people`) VALUES
(1, 'F20190404-005', '2019-04-04', 3, 1),
(2, 'F20190404-004', '2019-04-04', 1, 2),
(3, 'F20190404-003', '2019-04-04', 2, 3),
(4, 'F20190404-002', '2019-04-04', 5, 5),
(5, 'F20190404-001', '2019-04-04', 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

CREATE TABLE `people` (
  `id_people` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `people`
--

INSERT INTO `people` (`id_people`, `first_name`, `last_name`, `email`) VALUES
(1, 'Peter', 'Gregory', 'peter.gregory@raviga.com'),
(2, 'Cameron', 'Howe', 'cam.howe@mutiny.net'),
(3, 'Gavin', 'Belson', 'gavin@hooli.com'),
(4, 'Jian', 'Yang', 'jian.yang@phoque.off'),
(5, 'Bertram', 'Gilfoyle', 'gilfoyle@piedpiper.com');

-- --------------------------------------------------------

--
-- Structure de la table `people_has_company`
--

CREATE TABLE `people_has_company` (
  `id_fk_people` int(11) NOT NULL,
  `id_fk_company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `people_has_company`
--

INSERT INTO `people_has_company` (`id_fk_people`, `id_fk_company`) VALUES
(1, 1),
(1, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_company`
--

CREATE TABLE `type_company` (
  `id_type` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_company`
--

INSERT INTO `type_company` (`id_type`, `type`) VALUES
(1, 'Fournisseur'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD KEY `fk_type` (`fk_type`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `fk_company` (`fk_company`),
  ADD KEY `fk_people` (`fk_people`);

--
-- Index pour la table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id_people`);

--
-- Index pour la table `people_has_company`
--
ALTER TABLE `people_has_company`
  ADD KEY `id_people` (`id_fk_people`),
  ADD KEY `id_company` (`id_fk_company`);

--
-- Index pour la table `type_company`
--
ALTER TABLE `type_company`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `people`
--
ALTER TABLE `people`
  MODIFY `id_people` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type_company`
--
ALTER TABLE `type_company`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`fk_type`) REFERENCES `type_company` (`id_type`);

--
-- Contraintes pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_company` FOREIGN KEY (`fk_company`) REFERENCES `company` (`id_company`),
  ADD CONSTRAINT `fk_people` FOREIGN KEY (`fk_people`) REFERENCES `people` (`id_people`);

--
-- Contraintes pour la table `people_has_company`
--
ALTER TABLE `people_has_company`
  ADD CONSTRAINT `id_company` FOREIGN KEY (`id_fk_company`) REFERENCES `company` (`id_company`),
  ADD CONSTRAINT `id_people` FOREIGN KEY (`id_fk_people`) REFERENCES `people` (`id_people`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
