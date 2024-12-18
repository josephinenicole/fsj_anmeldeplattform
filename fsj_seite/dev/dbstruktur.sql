-- create database fsj_anmeldungen;


-- CREATE TABLE bewerber (
--     bewerber_id INT AUTO_INCREMENT PRIMARY KEY,
--     vorname VARCHAR(100) NOT NULL,
--     nachname VARCHAR(100) NOT NULL
-- );

-- CREATE TABLE anmeldungen (
--     anmeldung_id INT AUTO_INCREMENT PRIMARY KEY,
--     bewerber_id INT,
--     einsatzbereich VARCHAR(255) NOT NULL,
--     anmeldedatum DATE NOT NULL,
--     FOREIGN KEY (bewerber_id) REFERENCES bewerber(bewerber_id)
-- );



CREATE DATABASE fsj_anmeldungen;

USE fsj_anmeldungen;

CREATE TABLE bewerber (
    bewerber_id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(100) NOT NULL,
    nachname VARCHAR(100) NOT NULL,
    alter_kategorie ENUM('unter_15', '15_25') NOT NULL,
    herkunft ENUM('inland', 'ausland') NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE anmeldungen (
    anmeldung_id INT AUTO_INCREMENT PRIMARY KEY,
    bewerber_id INT NOT NULL,
    einsatzbereich ENUM('sozial', 'politik', 'umwelt') NOT NULL,
    anmeldedatum DATE NOT NULL,
    FOREIGN KEY (bewerber_id) REFERENCES bewerber(bewerber_id)
);
