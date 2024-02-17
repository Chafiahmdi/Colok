-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2023 at 04:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colok_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_poste` date NOT NULL,
  `note` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(10) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `colocataire_responsable` int NOT NULL,
  `statut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idee`
--

CREATE TABLE `idee` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idee`
--

INSERT INTO `idee` (`id`, `titre`, `description`, `user_id`) VALUES
(2, 'Achetez un rideau', 'Svp', 1),
(3, 'yeahhh', 'j\'ai un truc génale a proposer !!! ', 1),
(4, 'helin ide', '...', 1),
(8, 'rajouter un meuble cuisine ', 'merci ', 25);

-- --------------------------------------------------------

--
-- Table structure for table `maison`
--

CREATE TABLE `maison` (
  `id` int NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code_postal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `superficie` float DEFAULT NULL,
  `nb_colocataire` int DEFAULT NULL,
  `nb_room` int DEFAULT NULL,
  `loyer` float DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isAdmin` varchar(10) DEFAULT NULL,
  `IscuisineEquipee` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Isjardin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `chambre_meuble` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Isclimatisation` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salleDeBainPartage` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maison`
--

INSERT INTO `maison` (`id`, `adresse`, `ville`, `code_postal`, `superficie`, `nb_colocataire`, `nb_room`, `loyer`, `description`, `photo`, `isAdmin`, `IscuisineEquipee`, `Isjardin`, `chambre_meuble`, `Isclimatisation`, `salleDeBainPartage`) VALUES
(1, '1030', 'Bruxelles', 'Schaerbeek', 120, 6, 8, 300, 'Bienvenue dans notre spacieuse maison de 8 pièces, parfaite pour la colocation. Nichée au cœur d\'un environnement paisible, elle offre une vue imprenable qui vous laissera sans voix. Chaque colocataire bénéficiera de salles de bains partagées modernes, conçues pour votre confort.\r\n\r\nNotre jardin luxuriant est un véritable havre de paix, idéal pour se détendre, organiser des barbecues ou simplement profiter du grand air.\r\n\r\nSi vous recherchez un endroit où la convivialité, le confort et la vue se rencontrent, ne cherchez plus. Notre maison est l\'endroit idéal pour vivre des moments inoubliables avec vos futurs colocataires. Rejoignez-nous et faites de cette maison votre chez-vous.', NULL, 'false', 'niet', 'oui', 'non', 'oui', 'oui'),
(2, '1030', 'efefee', 'Schaerbeek', 6, 2, 4, NULL, 'decdssdcezdcze', NULL, 'false', 'oui', 'oui', 'oui', 'oui', 'oui'),
(3, '1030', 'efefee', 'Schaerbeek', 6, 2, 4, NULL, 'decdssdcezdcze', NULL, 'false', 'oui', 'oui', 'oui', 'oui', 'oui'),
(4, 'rue de la sambre 6 ', 'Bruxelles', '1030', 70, 3, 4, NULL, 'maison amenagé ', NULL, 'false', 'oui', 'oui', 'oui', 'oui', 'oui'),
(5, 'vndgsfwxgbcvboln:', 'bruxelles', '1020', -2, -3, -2, NULL, 'QVBJ<QSDV?XCB.SD<', NULL, 'false', 'oui', 'oui', 'oui', 'oui', 'oui'),
(6, 'Rue des palais 52', 'Bruxelles', '1020', 2, 2, 2, NULL, 'belle apart', NULL, 'false', 'oui', 'oui', 'oui', 'oui', 'oui'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'false', NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'false', NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'false', NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'false', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `tache_id` int NOT NULL,
  `message` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id`, `user_id`, `tache_id`, `message`, `statut`) VALUES
(1, 47, 111, 'une tâche vous attend', 'non lu'),
(2, 47, 115, 'une tâche vous attend', 'lu'),
(3, 47, 120, 'cette tâche vous attend ', 'lu'),
(5, 51, 120, 'cette tâche vous attend ', 'lu');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int NOT NULL,
  `statut` varchar(255) NOT NULL,
  `type_tache` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`, `type`, `user_id`, `statut`, `type_tache`) VALUES
(77, 'COUCOU', 'HELLO', '2023-10-26 11:40:00', '2023-10-26 11:40:00', '', 41, '', ''),
(78, 'hh', 'lll', '2023-10-23 11:41:00', '2023-10-23 11:41:00', '', 23, '', ''),
(79, 'kiri', 'kik', '2023-10-25 11:43:00', '2023-10-25 11:43:00', '', 23, '', ''),
(111, 'Nettoyer la salle de bain', 'ma tache', '2023-10-16 10:20:00', '2023-10-16 10:20:00', 'tache', 47, 'Terminé', 'ma tache'),
(115, 'Faire aspi à la maison', 'nettoyer tout', '2023-10-27 18:11:00', '2023-10-28 23:11:00', 'tache', 47, 'Terminé', 'aspi'),
(120, 'Nettoyage cuisine', 'le sol et le plan de travail ', '2023-10-21 10:20:00', '2023-10-21 14:00:00', 'tache', 47, 'Terminé', 'nettoyer la cuisine'),
(122, 'chambre', 'nettoyage de primtemps mdr je sais plus comment sa s\'ecrit lolll ', '2023-10-21 10:20:00', '2023-10-21 11:40:00', 'tache', 47, 'Terminé', 'nettoyer la chambre '),
(123, 'nettoyage du salon', 'salon à nettoyer ', '2023-10-21 10:20:00', '2023-10-21 14:20:00', 'tache', 47, 'en suspens', 'nettoyer le salon'),
(125, 'cuisine', 'blblba', '2023-10-23 10:20:00', '2023-10-23 20:10:00', 'tache', 47, 'en cours', 'cuisine nettoyage '),
(126, 'anniversaire', 'anif', '2023-10-23 10:20:00', '2023-10-23 10:20:00', 'evenement', 47, 'en cours', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `taches`
--

CREATE TABLE `taches` (
  `id` int NOT NULL,
  `tache_id` int NOT NULL,
  `interval` int DEFAULT NULL,
  `occurence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `creat_date` date DEFAULT NULL,
  `start_date` datetime NOT NULL DEFAULT '2023-10-26 11:40:00',
  `end_date` datetime NOT NULL DEFAULT '2023-10-26 11:40:00',
  `statut` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int DEFAULT '1',
  `type_tâche` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taches`
--

INSERT INTO `taches` (`id`, `tache_id`, `interval`, `occurence`, `creat_date`, `start_date`, `end_date`, `statut`, `user_id`, `type_tâche`, `description`) VALUES
(1, 3, 2, 'semaine', '2006-10-23', '2023-10-26 11:40:00', '2023-10-26 11:40:00', 'en pause', 42, NULL, NULL),
(2, 1, 2, 'semaine', '2006-10-23', '2023-10-26 11:40:00', '2023-10-26 11:40:00', 'en cours', 23, NULL, NULL),
(3, 2, 2, 'semaine', '2023-12-10', '2023-10-26 11:40:00', '2023-10-26 11:40:00', 'terminé', 23, NULL, NULL),
(5, 3, 2, '5', '2018-10-23', '2023-10-26 11:40:00', '2023-10-26 11:40:00', 'a faire', 43, 'salon', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_taches`
--

CREATE TABLE `type_taches` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icons` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type_taches`
--

INSERT INTO `type_taches` (`id`, `nom`, `description`, `icons`) VALUES
(1, 'Faire la vaisselle', ' desc', 'icon'),
(2, 'Sortir les poubelles', ' desc', 'icon'),
(3, 'Passer l\'aspirateur', ' desc', 'icon'),
(4, 'Faire les poussières ', ' desc', 'icon');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `allergies` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maison_id` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `mdp`, `role`, `allergies`, `photo_profil`, `maison_id`) VALUES
(23, 'Amelia', 'jordan', '1995-11-10', 'zeronada@hotmail.fr', '$2y$10$yBo2z6G0N5YxNJyJYTMfOOfPoC2delw7HKFeC7m4oP0wt1rzhv4um', 'colocataire', 'allergies aux codes  ', 'inscription3-image4.jpg', 2),
(41, 'Ariana', 'Jordan', '2023-10-18', 'adminator@gmail.com', '$2y$10$278G13FOVynyAJ7GL6QwUOkiYR7D97NGbw5ZkJ2/dPfbdfqRdaj8m', 'colocataire', ' Kiwi', 'inscription-1-image3.jpg', 1),
(42, 'Nisrine', 'al amrani ', '2023-10-19', 'nis@gmail.com', '$2y$10$NNiAdZP/6sFImbsr5kpfdOeuYOhU/KRIjxErLrfXQUV8QNOF8hjZ.', 'colocataire', 'Je suis allergique à la poussière', NULL, 1),
(43, 'Yassine', 'Hajjaj', '2023-10-19', 'lala@gmail.com', '$2y$10$ynM7eELHtjj6lmiXtDZ6h.ZhzMrf4qaLWvSFxgaPN3XSbPP9CnrDG', 'colocataire', 'Animaux', NULL, 1),
(44, 'Sonia', 'Blasquez', '2021-12-10', 'boul@gmail.com', '$2y$10$dznseLg1re4kZtbCawN8kex6RqQE5zS.vTC5G0VwVSpFdFmiwmKSK', 'colocataire', 'Aux absences de mes élèves!', NULL, 1),
(47, 'Antoine', 'france', '2023-10-19', 'miss@gmail.com', '$2y$10$5pGDnloElTJmzJcahHDYlutuBS7AUJ.qCin2IjF8.NjC./wzHnb72', 'colocataire', 'Aucune', 'inscription3-image2.jpg', 1),
(50, 'Emilio ', 'Dilorenti', '2023-10-27', 'help@gmail.be', '$2y$10$YxSTx/r2wgDRF42xTZWmROn6eN3c0BQ3Wp8SF0vYsGAO6wYbL3cUq', 'colocataire', 'Allergique au css :p ', 'inscription3-image2.jpg', 1),
(51, 'chafia', 'hamdaoui', '2023-10-03', 'chafia@hotmail.com', '$2y$10$HRlp8ZxxU6V7mia5oq72OeXmkaIyJ4z2RGr2Wk6iKCWUM.2MV0RlS', 'colocataire', '', 'inscription3-image4.jpg', 1),
(52, 'Anissa', 'Anis', '2023-10-23', 'anis@gmail.com', '$2y$10$W5MeLmo5AQyFjKFc0sqLweh.nx6xMcNDHRCzs3UWG.bYyvUMg7GCS', 'colocataire', '', 'inscription3-image4.jpg', 1),
(53, 'lola', 'el ', '2023-10-23', 'lola@gmail.com', '$2y$10$MCyuag74xtqA1u/up0DRQ.F/59CdDxCB2n4/xtjnX/eRAqpfb8YKS', 'colocataire', '', 'inscription3-image4.jpg', 1),
(54, 'maria', 'lopez', '2023-10-23', 'maria@gmail.com', '$2y$10$csCD1CILnspBU8oFGOYIXeWSPE.EgCTdht9F3BRNIlDVIk9y7lL/6', 'colocataire', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colocataire_responsable` (`colocataire_responsable`);

--
-- Indexes for table `idee`
--
ALTER TABLE `idee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tache_notif` (`tache_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user->id` (`user_id`);

--
-- Indexes for table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_taches__type_taches` (`tache_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `type_taches`
--
ALTER TABLE `type_taches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maison_id` (`maison_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idee`
--
ALTER TABLE `idee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `maison`
--
ALTER TABLE `maison`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `tache_notif` FOREIGN KEY (`tache_id`) REFERENCES `schedule_list` (`id`),
  ADD CONSTRAINT `user_notif` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD CONSTRAINT `user->id` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `FK_taches__type_taches` FOREIGN KEY (`tache_id`) REFERENCES `type_taches` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `maison_id` FOREIGN KEY (`maison_id`) REFERENCES `maison` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
