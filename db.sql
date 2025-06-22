DROP DATABASE IF EXISTS `contact`;

CREATE DATABASE IF NOT EXISTS `contact`;

USE `contact`;

CREATE TABLE contacts (
    id_contact INT AUTO_INCREMENT,
    nom VARCHAR(100),
    email VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY(`id_contact`)
);