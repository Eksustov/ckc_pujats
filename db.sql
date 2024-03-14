CREATE DATABASE ckc_pujats;

USE ckc_pujats;

CREATE TABLE kolektivi(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(80) NOT NULL,
description VARCHAR(500) NOT NULL
);

CREATE TABLE events(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
date DATETIME NOT NULL,
event VARCHAR(80) NOT NULL,
location VARCHAR(80) NOT NULL
);

INSERT INTO events
(date, event, location)
VALUES
('2024-03-31 13:00:00',"Lieldienas Cēsīs", "Rožu laukums"),
('2024-04-04 18:00:00',"Leļļu teātra izrāde ''Gangsteromīte''", "Koncertzāle ''Cēsis''"),
('2024-07-19 08:00:00',"Cēsu pilsētas svētki 818", "Cēsis")
;

INSERT INTO kolektivi
(name, description)
VALUES
("Cēsis","Pūtēju orķestris"),
("Raitais solis", "Tautu deju ansamblis"),
("Vidzeme", "Jauktais koris"),
("Dzieti", "Tautas vērtes kopa");