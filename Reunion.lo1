DROP DATABASE IF EXISTS gestionreunion;
CREATE DATABASE gestionreunion DEFAULT CHARACTER SET utf8;
Use gestionreunion;


DROP TABLE IF EXISTS Roles;
CREATE TABLE Roles(
   idRole INT AUTO_INCREMENT PRIMARY KEY, 
   libelleRole VARCHAR(50)
  
)ENGINE=InnoDB;



DROP TABLE IF EXISTS ComptesRendu;
CREATE TABLE ComptesRendu(
   idCompteRendu INT AUTO_INCREMENT PRIMARY KEY,
   libelleCompteRendu VARCHAR(50),
   contenuCompteRendu TEXT
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Salles;
CREATE TABLE Salles(
   idSalle INT AUTO_INCREMENT PRIMARY KEY,
   libelleSalle VARCHAR(50),
   tailleMaxSalle INT
) ENGINE=InnoDB;


DROP TABLE IF EXISTS PrioritesTaches;
CREATE TABLE PrioritesTaches(
   idPrioriteTache INT AUTO_INCREMENT PRIMARY KEY,
   libellePrioriteTache VARCHAR(50)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS EtatsAvancements;
CREATE TABLE EtatsAvancements(
   idEtatAvancement INT AUTO_INCREMENT PRIMARY KEY,
   libelleEtatAvancement VARCHAR(50)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS FichiersAnnexes;
CREATE TABLE FichiersAnnexes(
   idFichierAnnexe INT AUTO_INCREMENT PRIMARY KEY,
   titreFichierAnnexe VARCHAR(50),
   lienFichierAnnexe VARCHAR(50)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS StatutsReunions;
CREATE TABLE StatutsReunions(
   idStatutReunion INT AUTO_INCREMENT PRIMARY KEY,
   libelleStatutReunion VARCHAR(50)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Sujets;
CREATE TABLE Sujets(
   idSujet INT AUTO_INCREMENT PRIMARY KEY,
   libelleSujet VARCHAR(150),
   tempsAlloue TIME, 
   idOrateur INT 
)ENGINE=InnoDB;



DROP TABLE IF EXISTS StatutsPresences;
CREATE TABLE StatutsPresences(
   idStatutPresence INT AUTO_INCREMENT PRIMARY KEY,
   libelleStatutPresence VARCHAR(50)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Utilisateurs;
CREATE TABLE Utilisateurs(
   idUtilisateur INT AUTO_INCREMENT PRIMARY KEY,
   nomUtilisateur VARCHAR(50),
   prenomUtilisateur VARCHAR(50),
   emailUtilisateur VARCHAR(50),
   motDePasseUtilisateur VARCHAR(50),
   validationUtilisateur BOOLEAN,
   idRole INT NOT NULL
)ENGINE=InnoDB;


DROP TABLE IF EXISTS Reunions;
CREATE TABLE Reunions(
   idReunion INT AUTO_INCREMENT PRIMARY KEY,
   titreReunion VARCHAR(50),
   dateReunion DATE,
   lieuReunion VARCHAR(50),
   horaireDebut TIME,
   horaireFin TIME,
   nbMaxParticipants INT,
   idCreateur INT NOT NULL,
   idAnimateur INT NOT NULL,
   idSecretaire INT NOT NULL,
   idCompteRendu INT NOT NULL,
   idStatutReunion INT NOT NULL,
   idEtatAvancement INT NOT NULL,
   idSalle INT NOT NULL
)ENGINE=InnoDB;



DROP TABLE IF EXISTS Taches;
CREATE TABLE Taches(
   idTache INT AUTO_INCREMENT PRIMARY KEY,
   libelleTache TEXT,
   dateEcheanceTache DATE,
   idEtatAvancement INT NOT NULL,
   idUtilisateur INT NOT NULL,
   idPrioriteTache INT NOT NULL
)ENGINE=InnoDB;


DROP TABLE IF EXISTS Participations;
CREATE TABLE Participations(
   idParticipation INT AUTO_INCREMENT PRIMARY KEY,
   idUtilisateur INT,
   idReunion INT,
   idStatutPresence INT,
   obligationPresence BOOLEAN
)ENGINE=InnoDB;


DROP TABLE IF EXISTS OrdresDuJour;
CREATE TABLE OrdresDuJour(
   idOrdreDuJour INT AUTO_INCREMENT PRIMARY KEY,
   idReunion INT,
   idSujet INT
)ENGINE=InnoDB;


DROP TABLE IF EXISTS GestionsTaches;
CREATE TABLE GestionsTaches(
   idGestionTache INT AUTO_INCREMENT PRIMARY KEY,
   idReunion INT,
   idTache INT
)ENGINE=InnoDB;


DROP TABLE IF EXISTS GestionsAnnexes;
CREATE TABLE GestionsAnnexes(
idGestionAnnexe INT AUTO_INCREMENT PRIMARY KEY,
   idReunion INT,
   idFichierAnnexe INT
)ENGINE=InnoDB;

  ALTER TABLE Utilisateurs
  ADD CONSTRAINT FK_Utilisateurs_Roles FOREIGN KEY(idRole) REFERENCES Roles(idRole);

     ALTER TABLE Reunions 
   ADD CONSTRAINT FK_Reunions_Createur FOREIGN KEY(idCreateur) REFERENCES Utilisateurs(idUtilisateur),
   ADD CONSTRAINT FK_Reunions_Secretaire  FOREIGN KEY(idSecretaire) REFERENCES Utilisateurs(idUtilisateur),
   ADD CONSTRAINT FK_Reunions_Animateur  FOREIGN KEY(idAnimateur) REFERENCES Utilisateurs(idUtilisateur),
   ADD CONSTRAINT FK_Reunions_ComptesRendu  FOREIGN KEY(idCompteRendu) REFERENCES ComptesRendu(idCompteRendu),
   ADD CONSTRAINT FK_Reunions_StatutsReunions  FOREIGN KEY(idStatutReunion) REFERENCES StatutsReunions(idStatutReunion),
   ADD CONSTRAINT FK_Reunions_EtatsAvancements  FOREIGN KEY(idEtatAvancement) REFERENCES EtatsAvancements(idEtatAvancement),
   ADD CONSTRAINT FK_Reunions_Salles  FOREIGN KEY(idSalle) REFERENCES Salles(idSalle);

    ALTER TABLE Taches
   ADD CONSTRAINT FK_Taches_EtatsAvancements  FOREIGN KEY(idEtatAvancement) REFERENCES EtatsAvancements(idEtatAvancement),
   ADD CONSTRAINT FK_Taches_Utilisateurs  FOREIGN KEY(idUtilisateur) REFERENCES Utilisateurs(idUtilisateur),
   ADD CONSTRAINT FK_Taches_PrioritesTaches  FOREIGN KEY(idPrioriteTache) REFERENCES PrioritesTaches(idPrioriteTache);

     ALTER TABLE Participations 
   ADD CONSTRAINT FK_Participations_Utilisateurs  FOREIGN KEY(idUtilisateur) REFERENCES Utilisateurs(idUtilisateur),
   ADD CONSTRAINT FK_Participations_Reunions  FOREIGN KEY(idReunion) REFERENCES Reunions(idReunion),
   ADD CONSTRAINT FK_Participations_StatutsPresences  FOREIGN KEY(idStatutPresence) REFERENCES StatutsPresences(idStatutPresence);

    ALTER TABLE OrdresDuJour
   ADD CONSTRAINT FK_OrdresDuJour_Reunions  FOREIGN KEY(idReunion) REFERENCES Reunions(idReunion),
   ADD CONSTRAINT FK_OrdresDuJour_Sujets  FOREIGN KEY(idSujet) REFERENCES Sujets(idSujet);

 ALTER TABLE GestionsTaches
   ADD CONSTRAINT FK_GestionsTaches_Reunions  FOREIGN KEY(idReunion) REFERENCES Reunions(idReunion),
   ADD CONSTRAINT FK_GestionsTaches_Taches  FOREIGN KEY(idTache) REFERENCES Taches(idTache);

      ALTER TABLE GestionsAnnexes 
   ADD CONSTRAINT FK_GestionsAnnexes_Reunions  FOREIGN KEY(idReunion) REFERENCES Reunions(idReunion),
   ADD CONSTRAINT FK_GestionsAnnexes_FichiersAnnexes  FOREIGN KEY(idFichierAnnexe) REFERENCES FichiersAnnexes(idFichierAnnexe);
  
  ALTER TABLE Sujets 
ADD CONSTRAINT FK_Sujets_Orateur FOREIGN KEY(idOrateur) REFERENCES Utilisateurs(idUtilisateur); 
