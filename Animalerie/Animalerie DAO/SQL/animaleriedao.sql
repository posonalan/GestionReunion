DROP DATABASE IF EXISTS animaleriedao;


CREATE DATABASE animaleriedao DEFAULT CHARACTER SET utf8;
Use animaleriedao;

USE animaleriedao;

DROP TABLE IF EXISTS `alimentations`;
CREATE TABLE IF NOT EXISTS `alimentations` (
  `idAliment` int(11) NOT NULL AUTO_INCREMENT,
  `libelleAliment` varchar(50) NOT NULL,
  PRIMARY KEY (`idAliment`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `alimentations`
--

INSERT INTO `alimentations` (`idAliment`, `libelleAliment`) VALUES
(1, 'vegetaux'),
(2, 'viandes');


--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `idAnimal` int(11) NOT NULL AUTO_INCREMENT,
  `libelleAnimal` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `idAliment` int(11) NOT NULL,
  `idMilieuVie` int(11) NOT NULL,
  PRIMARY KEY (`idAnimal`),
  KEY `FK_animaux_alimentations` (`idAliment`),
  KEY `FK_animaux_milieuvies` (`idMilieuVie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`idAnimal`, `libelleAnimal`, `prix`, `dateDeNaissance`, `idAliment`, `idMilieuVie`) VALUES
(1, 'lion', 2, '1899-11-30', 1, 1),
(2, 'vache', 1, '1958-11-30', 2, 1);



--
-- Structure de la table `milieuvies`
--

DROP TABLE IF EXISTS `milieuvies`;
CREATE TABLE IF NOT EXISTS `milieuvies` (
  `idMilieuVie` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMilieuVie` varchar(50) NOT NULL,
  `situationGeographique` varchar(50) NOT NULL,
  `climat` varchar(50) NOT NULL,
  PRIMARY KEY (`idMilieuVie`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `milieuvies`
--

INSERT INTO `milieuvies` (`idMilieuVie`, `libelleMilieuVie`, `situationGeographique`, `climat`) VALUES
(1, 'montagne', 'Asie', 'Chaud');



--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(50) NOT NULL,
  `fr` longtext NOT NULL,
  `en` longtext NOT NULL,
  PRIMARY KEY (`idTexte`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`idTexte`, `codeTexte`, `fr`, `en`) VALUES
(1, 'Pseudo', 'pseudo', 'pseudos'),
(2, 'MotDePasse', 'MotDePasse', 'MotDePasse'),
(3, 'Envoyer', 'Envoyer', 'Envoyer'),
(4, 'Inscription', 'Inscription', 'Inscription'),
(5, 'Nom', 'Nom', 'Name'),
(6, 'Prenom', 'prenom', 'surname'),
(7, 'ConfirmationMotDePasse', 'ConfirmationMotDePasse', 'ConfirmationPassword'),
(8, 'AdresseMail', 'AdresseMail', 'eMail'),
(9, 'Role', 'role', 'role');



--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `adresseMail` varchar(50) NOT NULL,
  `role` int(11) NOT NULL COMMENT '2 Admin 1 User',
  `pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nom`, `prenom`, `motDePasse`, `adresseMail`, `role`, `pseudo`) VALUES
(7, 'ad', 'ad', '11d437a3e6695447bd1bf2331651049e', 'ad', 2, 'ad'),
(8, 'u', 'u', '1d0a5a28d53430e7f2293a1f36682f23', 'u', 1, 'u');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `FK_animaux_alimentations` FOREIGN KEY (`idAliment`) REFERENCES `alimentations` (`idAliment`),
  ADD CONSTRAINT `FK_animaux_milieuvies` FOREIGN KEY (`idMilieuVie`) REFERENCES `milieuvies` (`idMilieuVie`);

