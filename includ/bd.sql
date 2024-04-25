--Creation de la base de données  bibliotheque
CREATE DATABASE IF NOT EXISTS  bibliotheque;

--Utilisation de la base de donnée  bibliotheque
USE  bibliotheque;

--Définition de la table livre
CREATE TABLE Livre(
 ISBN VARCHAR(255) PRIMARY KEY,
 Titre VARCHAR(255),
 Auteur VARCHAR(255)

 );

 --Définition de la table Membre
CREATE TABLE Membre(
 NumeroMembre VARCHAR(255) PRIMARY KEY,
 Nom VARCHAR(255),
 Prenom VARCHAR(255),
 INE VARCHAR(255),
 Filiere VARCHAR(255),
 Classe VARCHAR(255),
 DateNaissance VARCHAR(255)

 );

  --Définition de la table Inscrire
CREATE TABLE Inscrire(
 ID INT AUTO_INCREMENT PRIMARY KEY,
 Nom VARCHAR(255),
 Prenom VARCHAR(255),
 INE VARCHAR(255),
 Filiere VARCHAR(255),
 Classe VARCHAR(255),
 DateNaissance VARCHAR(255)

 );

  --Définition de la table Emprunt
CREATE TABLE Emprunt(
 IdEmprunt INT ,
 DateEmprunt DATE(20),
 DateRetour date(20),
 Statut Enum(emprunte, disponibilite),
 IdLivre INT,
 Classe VARCHAR(255),
CONSTRAINT FOREIGN KEY(IdLivre)References Livre(IdLivre)

 );