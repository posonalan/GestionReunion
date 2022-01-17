DROP DATABASE IF EXISTS gestionreunion;
CREATE DATABASE gestionreunion DEFAULT CHARACTER SET utf8;
Use gestionreunion;


-- --------------------------------------------------------

--
-- Structure de la table `etatsavancements`
--

DROP TABLE IF EXISTS `etatsavancements`;
CREATE TABLE IF NOT EXISTS `etatsavancements` (
  `idEtatAvancement` int(11) NOT NULL AUTO_INCREMENT,
  `libelleEtatAvancement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEtatAvancement`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etatsavancements`
--

INSERT INTO `etatsavancements` (`idEtatAvancement`, `libelleEtatAvancement`) VALUES
(1, 'En attente'),
(2, 'En cours'),
(3, 'Terminer');

-- --------------------------------------------------------

--
-- Structure de la table `fichiersannexes`
--

DROP TABLE IF EXISTS `fichiersannexes`;
CREATE TABLE IF NOT EXISTS `fichiersannexes` (
  `idFichierAnnexe` int(11) NOT NULL AUTO_INCREMENT,
  `titreFichierAnnexe` varchar(50) DEFAULT NULL,
  `lienFichierAnnexe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idFichierAnnexe`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fichiersannexes`
--

INSERT INTO `fichiersannexes` (`idFichierAnnexe`, `titreFichierAnnexe`, `lienFichierAnnexe`) VALUES
(1, 'Historique entreprise', 'https://fr.wikipedia.org/wiki/Histoire'),
(2, 'Diagramme coups production', 'https://fr.wikipedia.org/wiki/Histoire');

-- --------------------------------------------------------

--
-- Structure de la table `gestionsannexes`
--

DROP TABLE IF EXISTS `gestionsannexes`;
CREATE TABLE IF NOT EXISTS `gestionsannexes` (
  `idGestionAnnexe` int(11) NOT NULL AUTO_INCREMENT,
  `idReunion` int(11) DEFAULT NULL,
  `idFichierAnnexe` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGestionAnnexe`),
  KEY `FK_GestionsAnnexes_Reunions` (`idReunion`),
  KEY `FK_GestionsAnnexes_FichiersAnnexes` (`idFichierAnnexe`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionsannexes`
--

INSERT INTO `gestionsannexes` (`idGestionAnnexe`, `idReunion`, `idFichierAnnexe`) VALUES
(1, 2, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `gestionstaches`
--

DROP TABLE IF EXISTS `gestionstaches`;
CREATE TABLE IF NOT EXISTS `gestionstaches` (
  `idGestionTache` int(11) NOT NULL AUTO_INCREMENT,
  `idReunion` int(11) DEFAULT NULL,
  `idTache` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGestionTache`),
  KEY `FK_GestionsTaches_Reunions` (`idReunion`),
  KEY `FK_GestionsTaches_Taches` (`idTache`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestionstaches`
--

INSERT INTO `gestionstaches` (`idGestionTache`, `idReunion`, `idTache`) VALUES
(1, 2, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ordresdujour`
--

DROP TABLE IF EXISTS `ordresdujour`;
CREATE TABLE IF NOT EXISTS `ordresdujour` (
  `idOrdreDuJour` int(11) NOT NULL AUTO_INCREMENT,
  `idReunion` int(11) DEFAULT NULL,
  `idSujet` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOrdreDuJour`),
  KEY `FK_OrdresDuJour_Reunions` (`idReunion`),
  KEY `FK_OrdresDuJour_Sujets` (`idSujet`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ordresdujour`
--

INSERT INTO `ordresdujour` (`idOrdreDuJour`, `idReunion`, `idSujet`) VALUES
(1, 1, 3),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `participations`
--

DROP TABLE IF EXISTS `participations`;
CREATE TABLE IF NOT EXISTS `participations` (
  `idParticipation` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) DEFAULT NULL,
  `idReunion` int(11) DEFAULT NULL,
  `idStatutPresence` int(11) DEFAULT NULL,
  `obligationPresence` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idParticipation`),
  KEY `FK_Participations_Utilisateurs` (`idUtilisateur`),
  KEY `FK_Participations_Reunions` (`idReunion`),
  KEY `FK_Participations_StatutsPresences` (`idStatutPresence`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participations`
--

INSERT INTO `participations` (`idParticipation`, `idUtilisateur`, `idReunion`, `idStatutPresence`, `obligationPresence`) VALUES
(1, 1, 2, 1, 1),
(2, 3, 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `prioritestaches`
--

DROP TABLE IF EXISTS `prioritestaches`;
CREATE TABLE IF NOT EXISTS `prioritestaches` (
  `idPrioriteTache` int(11) NOT NULL AUTO_INCREMENT,
  `libellePrioriteTache` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPrioriteTache`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prioritestaches`
--

INSERT INTO `prioritestaches` (`idPrioriteTache`, `libellePrioriteTache`) VALUES
(1, 'Faible importance '),
(2, 'Moyenne importance '),
(3, 'Forte importance');

-- --------------------------------------------------------

--
-- Structure de la table `reunions`
--

DROP TABLE IF EXISTS `reunions`;
CREATE TABLE IF NOT EXISTS `reunions` (
  `idReunion` int(11) NOT NULL AUTO_INCREMENT,
  `titreReunion` varchar(50) DEFAULT NULL,
  `dateReunion` date DEFAULT NULL,
  `lieuReunion` varchar(50) DEFAULT NULL,
  `horaireDebut` time DEFAULT NULL,
  `horaireFin` time DEFAULT NULL,
  `nbMaxParticipants` int(11) DEFAULT NULL,
  `contenuCompteRendu` text,
  `idCreateur` int(11) NOT NULL,
  `idAnimateur` int(11) NOT NULL,
  `idSecretaire` int(11) NOT NULL,
  `idTypeReunion` int(11) NOT NULL,
  `idEtatAvancement` int(11) NOT NULL,
  `idSalle` int(11) NOT NULL,
  PRIMARY KEY (`idReunion`),
  KEY `FK_Reunions_Createur` (`idCreateur`),
  KEY `FK_Reunions_Secretaire` (`idSecretaire`),
  KEY `FK_Reunions_Animateur` (`idAnimateur`),
  KEY `FK_Reunions_TypesReunions` (`idTypeReunion`),
  KEY `FK_Reunions_EtatsAvancements` (`idEtatAvancement`),
  KEY `FK_Reunions_Salles` (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reunions`
--

INSERT INTO `reunions` (`idReunion`, `titreReunion`, `dateReunion`, `lieuReunion`, `horaireDebut`, `horaireFin`, `nbMaxParticipants`, `contenuCompteRendu`, `idCreateur`, `idAnimateur`, `idSecretaire`, `idTypeReunion`, `idEtatAvancement`, `idSalle`) VALUES
(1, 'financiere', '2022-01-13', 'dunkerque ', '06:30:30', '07:30:30', 50, 'la reunion portera sur les comptes de l\'entreprise , on verra l\'intégralités des projet réalisés en 2021', 1, 2, 3, 1, 1, 1),
(2, 'compte rendu operation noel ', '2022-01-19', 'maubeuge', '15:36:30', '20:36:30', 150, 'projet noel , compte rendu de l\'operation', 3, 1, 2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRole` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES
(1, 'Secretaire '),
(2, 'Animateur'),
(3, 'Participant'),
(4, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `idSalle` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSalle` varchar(50) DEFAULT NULL,
  `tailleMaxSalle` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`idSalle`, `libelleSalle`, `tailleMaxSalle`) VALUES
(1, 'coluche', 50),
(2, 'Charles de gaulle', 150);

-- --------------------------------------------------------

--
-- Structure de la table `statutspresences`
--

DROP TABLE IF EXISTS `statutspresences`;
CREATE TABLE IF NOT EXISTS `statutspresences` (
  `idStatutPresence` int(11) NOT NULL AUTO_INCREMENT,
  `libelleStatutPresence` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idStatutPresence`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statutspresences`
--

INSERT INTO `statutspresences` (`idStatutPresence`, `libelleStatutPresence`) VALUES
(1, 'Present'),
(2, 'Absent'),
(3, 'Excuse');

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

DROP TABLE IF EXISTS `sujets`;
CREATE TABLE IF NOT EXISTS `sujets` (
  `idSujet` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSujet` varchar(150) DEFAULT NULL,
  `tempsAlloue` time DEFAULT NULL,
  `idOrateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSujet`),
  KEY `FK_Sujets_Orateur` (`idOrateur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujets`
--

INSERT INTO `sujets` (`idSujet`, `libelleSujet`, `tempsAlloue`, `idOrateur`) VALUES
(3, 'cout', '09:33:14', 1),
(4, 'temps', '00:18:40', 2),
(5, 'structure', '00:33:22', 3);

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `idTache` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTache` text,
  `dateEcheanceTache` date DEFAULT NULL,
  `idEtatAvancement` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idPrioriteTache` int(11) NOT NULL,
  PRIMARY KEY (`idTache`),
  KEY `FK_Taches_EtatsAvancements` (`idEtatAvancement`),
  KEY `FK_Taches_Utilisateurs` (`idUtilisateur`),
  KEY `FK_Taches_PrioritesTaches` (`idPrioriteTache`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`idTache`, `libelleTache`, `dateEcheanceTache`, `idEtatAvancement`, `idUtilisateur`, `idPrioriteTache`) VALUES
(1, 'Structure des ducuments', '2022-01-19', 1, 4, 1),
(2, 'Calcule des couts ', '2022-01-12', 2, 2, 2),
(3, 'Mise en production', '2022-01-12', 3, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `typesreunions`
--

DROP TABLE IF EXISTS `typesreunions`;
CREATE TABLE IF NOT EXISTS `typesreunions` (
  `idTypeReunion` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTypeReunion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTypeReunion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typesreunions`
--

INSERT INTO `typesreunions` (`idTypeReunion`, `libelleTypeReunion`) VALUES
(1, 'Presentiel'),
(2, 'Distanciel ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `prenomUtilisateur` varchar(50) DEFAULT NULL,
  `emailUtilisateur` varchar(50) DEFAULT NULL,
  `motDePasseUtilisateur` varchar(50) DEFAULT NULL,
  `validationUtilisateur` tinyint(1) DEFAULT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  KEY `FK_Utilisateurs_Roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `motDePasseUtilisateur`, `validationUtilisateur`, `idRole`) VALUES
(1, 'Poson', 'Alan', 'Alan@gmail.com', 'test', 1, 4),
(2, 'Mayeux', 'Bruno', 'Bruno@gmail.com', 'test', 1, 2),
(3, 'Terki', 'Moktar', 'Moktar@gmail.com', 'test', 1, 1),
(4, 'Bolt', 'Usain', 'usain@gmail.com', 'test', 1, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gestionsannexes`
--
ALTER TABLE `gestionsannexes`
  ADD CONSTRAINT `FK_GestionsAnnexes_FichiersAnnexes` FOREIGN KEY (`idFichierAnnexe`) REFERENCES `fichiersannexes` (`idFichierAnnexe`),
  ADD CONSTRAINT `FK_GestionsAnnexes_Reunions` FOREIGN KEY (`idReunion`) REFERENCES `reunions` (`idReunion`);

--
-- Contraintes pour la table `gestionstaches`
--
ALTER TABLE `gestionstaches`
  ADD CONSTRAINT `FK_GestionsTaches_Reunions` FOREIGN KEY (`idReunion`) REFERENCES `reunions` (`idReunion`),
  ADD CONSTRAINT `FK_GestionsTaches_Taches` FOREIGN KEY (`idTache`) REFERENCES `taches` (`idTache`);

--
-- Contraintes pour la table `ordresdujour`
--
ALTER TABLE `ordresdujour`
  ADD CONSTRAINT `FK_OrdresDuJour_Reunions` FOREIGN KEY (`idReunion`) REFERENCES `reunions` (`idReunion`),
  ADD CONSTRAINT `FK_OrdresDuJour_Sujets` FOREIGN KEY (`idSujet`) REFERENCES `sujets` (`idSujet`);

--
-- Contraintes pour la table `participations`
--
ALTER TABLE `participations`
  ADD CONSTRAINT `FK_Participations_Reunions` FOREIGN KEY (`idReunion`) REFERENCES `reunions` (`idReunion`),
  ADD CONSTRAINT `FK_Participations_StatutsPresences` FOREIGN KEY (`idStatutPresence`) REFERENCES `statutspresences` (`idStatutPresence`),
  ADD CONSTRAINT `FK_Participations_Utilisateurs` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Contraintes pour la table `reunions`
--
ALTER TABLE `reunions`
  ADD CONSTRAINT `FK_Reunions_Animateur` FOREIGN KEY (`idAnimateur`) REFERENCES `utilisateurs` (`idUtilisateur`),
  ADD CONSTRAINT `FK_Reunions_Createur` FOREIGN KEY (`idCreateur`) REFERENCES `utilisateurs` (`idUtilisateur`),
  ADD CONSTRAINT `FK_Reunions_EtatsAvancements` FOREIGN KEY (`idEtatAvancement`) REFERENCES `etatsavancements` (`idEtatAvancement`),
  ADD CONSTRAINT `FK_Reunions_Salles` FOREIGN KEY (`idSalle`) REFERENCES `salles` (`idSalle`),
  ADD CONSTRAINT `FK_Reunions_Secretaire` FOREIGN KEY (`idSecretaire`) REFERENCES `utilisateurs` (`idUtilisateur`),
  ADD CONSTRAINT `FK_Reunions_TypesReunions` FOREIGN KEY (`idTypeReunion`) REFERENCES `typesreunions` (`idTypeReunion`);

--
-- Contraintes pour la table `sujets`
--
ALTER TABLE `sujets`
  ADD CONSTRAINT `FK_Sujets_Orateur` FOREIGN KEY (`idOrateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `FK_Taches_EtatsAvancements` FOREIGN KEY (`idEtatAvancement`) REFERENCES `etatsavancements` (`idEtatAvancement`),
  ADD CONSTRAINT `FK_Taches_PrioritesTaches` FOREIGN KEY (`idPrioriteTache`) REFERENCES `prioritestaches` (`idPrioriteTache`),
  ADD CONSTRAINT `FK_Taches_Utilisateurs` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `FK_Utilisateurs_Roles` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`);
COMMIT;


