DROP DATABASE IF EXISTS PARKING;
CREATE DATABASE PARKING;
USE PARKING;
DROP TABLE IF EXISTS LIGUE;
DROP TABLE IF EXISTS UTILISATEUR;
DROP TABLE IF EXISTS RESERVATION;
DROP TABLE IF EXISTS PLACE;
DROP TABLE IF EXISTS ATTENTE;



/*CREATE TABLE PERSONNE(
   id_membre VARCHAR(50),
   pseudo VARCHAR(50),
   mdp VARCHAR(50),
   PRIMARY KEY(id_membre)
);*/

/*CREATE TABLE ADMIN(
   id_membre VARCHAR(50),
   PRIMARY KEY(id_membre),
   FOREIGN KEY(id_membre) REFERENCES PERSONNE(id_membre)
);*/ 

CREATE TABLE LIGUE
(
   id_ligue int(2),
   nom_ligue varchar(50),
   constraint pk_LIGUE PRIMARY KEY(id_ligue)
)
ENGINE=INNODB;

CREATE TABLE UTILISATEUR
(
   id_membre int(2) not null,
   nom_membre VARCHAR(50) not null,
   prenom_membre VARCHAR(50) not null,
   poste_membre VARCHAR(50),
   email_membre VARCHAR(50) not null,
   mdp_membre VARCHAR(100) not null,
   plaque_vehicule VARCHAR(8) not null,
   voiture_pmr boolean not null,
   access_level boolean not null,
   constraint pk_UTILISATEUR PRIMARY KEY(id_membre)
)
ENGINE=INNODB;

CREATE TABLE RESERVATION
(
   id_reserv int(2) not null,
   date_debut_reserv date,
   date_fin_reserv date,
   id_membre int(2) NOT NULL,
   constraint pk_RESERVATION PRIMARY KEY(id_reserv)
)
ENGINE=INNODB;

CREATE TABLE PLACE
(
   id_place int(2) not null,
   num_place int(2),
   type_place VARCHAR(30),
   etat_place boolean,
   id_reserv int(2) NOT NULL,
   constraint pk_PLACE PRIMARY KEY(id_place)
)
ENGINE=INNODB;

CREATE TABLE ATTENTE
(
   rang int(2) not null,
   priorite_attente boolean,
   id_membre int(2) NOT NULL,
   constraint pk_ATTENTE PRIMARY KEY(rang)
)
ENGINE=INNODB;
