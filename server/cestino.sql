DROP DATABASE IF EXISTS sito;
CREATE DATABASE sito;
USE sito;

CREATE TABLE utente(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pwd VARCHAR(200) NOT NULL,
    card VARCHAR(8) UNIQUE
)ENGINE=INNODB;
        
CREATE TABLE cestino(
    id INT NOT NULL PRIMARY KEY,
    tipo VARCHAR(25) NOT NULL 
)ENGINE=INNODB;

CREATE TABLE netturbino(
    id INT NOT NULL PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    card VARCHAR(8) UNIQUE
)ENGINE=INNODB;

CREATE TABLE possiede(
   idUtente INT NOT NULL,
   idCestino INT NOT NULL,
   PRIMARY KEY (idUtente, idCestino),
   CONSTRAINT u FOREIGN KEY(idUtente) REFERENCES utente(id),
   CONSTRAINT c FOREIGN KEY(idCestino) REFERENCES cestino(id)
)ENGINE=INNODB;

CREATE TABLE buttare(
    orario DATETIME,
    idUtente INT NOT NULL,
    idCestino INT NOT NULL,
    peso FLOAT NOT NULL,
    PRIMARY KEY (idUtente, idCestino, orario),
    CONSTRAINT f FOREIGN KEY(idUtente) REFERENCES utente(id),
    CONSTRAINT g FOREIGN KEY(idCestino) REFERENCES cestino(id)
)ENGINE=INNODB;

CREATE TABLE svuota(
    orario DATE,
    idNetturbino INT,
    idCestino INT,
    PRIMARY KEY (idCestino, idNetturbino, orario),
    CONSTRAINT d FOREIGN KEY(idCestino) REFERENCES cestino(id),
    CONSTRAINT e FOREIGN KEY(idNetturbino) REFERENCES netturbino(id) 
)ENGINE=INNODB;
