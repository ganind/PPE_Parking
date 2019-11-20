DROP DATABASE IF EXISTS PARKING;
CREATE DATABASE PARKING;
USE PARKING;
DROP TABLE IF EXISTS MEMBRE;
DROP TABLE IF EXISTS RESERVATION;
DROP TABLE IF EXISTS PLACE;
DROP TABLE IF EXISTS ATTENTE;


CREATE TABLE MEMBRE
(
   id_membre VARCHAR(2) NOT NULL,
   pseudo_membre VARCHAR(30),
   mdp_membre VARCHAR(100),
   nom_membre VARCHAR(30),
   prenom_membre VARCHAR(30),
   poste_membre VARCHAR(30),
   email_membre VARCHAR(50),
   plaque_vehicule VARCHAR(8),
   voiture_pmr BOOLEAN,
   constraint pk_MEMBRE PRIMARY KEY(id_membre)
)
ENGINE=INNODB; 

CREATE TABLE RESERVATION
(
   id_reserv VARCHAR(2) NOT NULL,
   date_debut_reserv DATE,
   date_fin_reserv DATE,
   constraint pk_RESERVATION PRIMARY KEY(id_reserv)
)
ENGINE=INNODB; 

CREATE TABLE PLACE
(
   id_place VARCHAR(3) NOT NULL,
   num_place INT(2),
   type_place VARCHAR(30),
   etat_place BOOLEAN,
   constraint pk_PLACE PRIMARY KEY(id_place)
)
ENGINE=INNODB; 

CREATE TABLE ATTENTE
(
   id_attente VARCHAR(3) NOT NULL,
   date_debut_attente VARCHAR(50),
   priorite_attente VARCHAR(50),
   constraint pk_ATTENTE PRIMARY KEY(id_attente)
)
ENGINE=INNODB;