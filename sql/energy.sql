DROP DATABASE IF EXISTS energy;
CREATE DATABASE energy COLLATE utf8_general_ci DEFAULT CHARACTER SET utf8;
USE energy;


CREATE TABLE aanbiedingen (
	aanbiedingen_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	titel VARCHAR(50),
	begindatum DATETIME,
	einddatum DATETIME,
	omschrijving VARCHAR(100),
	afbeelding VARCHAR(50),
	artiest_id INT
);


CREATE TABLE artiesten(
	artiest_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	naam VARCHAR(50),
	achternaam VARCHAR(50),
	voornaam VARCHAR(50),
	tussenvoegsel VARCHAR(10),
	statement VARCHAR(100),
	telefoon VARCHAR(20),
	actief BOOLEAN
);

CREATE TABLE locaties(
	locatie_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	plaatsnaam VARCHAR(50),
	gebouw VARCHAR(50),
	adres VARCHAR(50),
	postcode VARCHAR(10)
);


CREATE TABLE evenementen (
	evenement_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	datum DATETIME,
	artiest_id INT,
	locatie_id INT,
	max_bezoekers INT
);

CREATE TABLE gebruikers (
	gebruiker_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) UNIQUE NOT NULL,
	password VARCHAR(50),
	permission INT 
);

CREATE TABLE reacties (
	reactie_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	evenement_id INT,
	titel VARCHAR(50),
	inhoud VARCHAR(1000),
	auteur VARCHAR(50)
);

ALTER TABLE aanbiedingen ADD FOREIGN KEY (artiest_id) REFERENCES artiesten (artiest_id);
ALTER TABLE evenementen ADD FOREIGN KEY (artiest_id) REFERENCES artiesten (artiest_id);
ALTER TABLE evenementen ADD FOREIGN KEY (locatie_id) REFERENCES locaties (locatie_id);
ALTER TABLE reacties ADD FOREIGN KEY (evenement_id) REFERENCES evenementen (evenement_id);


INSERT INTO locaties VALUES(51, 'Den Haag', 'Kurhaus', NULL, NULL);
INSERT INTO locaties VALUES(52, 'Den Haag', 'Strand Scheveningen', NULL, NULL);
INSERT INTO locaties VALUES(53, 'Den Haag', 'Malieveld', NULL, NULL);
INSERT INTO locaties VALUES(54, 'Voorburg', 'St Maartenscollege', NULL, NULL);
INSERT INTO locaties VALUES(55, 'Leiden', 'ROC Leiden', NULL, NULL);
INSERT INTO locaties VALUES(56, 'Leiden', 'Centraal Station', NULL, NULL);
INSERT INTO locaties VALUES(57, 'Alphen a/d Rijn', 'Winkelcentrum Ridderhof', NULL, NULL);
INSERT INTO locaties VALUES(58, 'Lisse', 'Veilinghallen', NULL, NULL);
INSERT INTO locaties VALUES(59, 'Rotterdam', 'Erasmusbrug', NULL, NULL);
INSERT INTO locaties VALUES(60, 'Delft', 'Grote Markt', NULL, NULL);

INSERT INTO artiesten VALUES(101, 'Stromae', 'Haver', 'Paul', 'van', 'Energy!... c est formidable!','+31 6 28271134', TRUE);
INSERT INTO artiesten VALUES(102, 'Pharrell', 'Williams', 'Pharell', '', 'Energy!. makes me so happy....','+31 6 28271134',TRUE);
INSERT INTO artiesten VALUES(103, 'Amy Whinehouse', 'Whinehouse', 'Amy', '', 'I would still have been alive if I had used Energy!....','+31 6 28271134',TRUE);
INSERT INTO artiesten VALUES(104, 'Leonardo di Caprio', 'Caprio', 'Leonardo', 'di', 'Before the Titanic went down we all drank X...','+31 6 28271134',TRUE);
INSERT INTO artiesten VALUES(105, 'Ali B.', 'B.', 'Ali', '', 'Zonder produkkie X voel ik me helemaal niet chill','+31 6 28271134',TRUE);
INSERT INTO artiesten VALUES(121, 'Sam Smith', 'Smith', 'Sam', '', 'I am Sam and I drink Product X.', '+31 6 28271134', TRUE);
INSERT INTO artiesten VALUES(122, 'Douwe Bob', 'Posthuma', 'Douwe Bob', '', 'Met Product X win ik het Songfestival', '+31 6 28271134', TRUE);
INSERT INTO artiesten VALUE (123, 'Dotan', 'Harpenau', 'Dotan', '', 'At home I drink Product X.', '+31 6 28271134', TRUE);

INSERT INTO aanbiedingen VALUES(1,'Knalkorting', '2019-02-01','2019-02-31', 'Met deze knalkorting ga je helemaal knallen','knal.png',101);
INSERT INTO aanbiedingen VALUES(2,'Volle voor lege','2019-03-04','2019-03-10', 'Bij inlevering van 12 lege blikjes krijg je 1 volle','cheap.png',102);
INSERT INTO aanbiedingen VALUES(3,'Vroegdrinkkorting','2019-03-11','2019-03-24', 'Voor 9 uur in de ochtend 50% korting!','clock.png',104);
INSERT INTO aanbiedingen VALUES(4,'Grote X knaller','2019-04-01','2019-04-30', 'Met deze knalkorting ga je helemaal knallen','knal.png',101);
INSERT INTO aanbiedingen VALUES(5,'Voorjaarsaanbieding','2019-03-01','2019-04-01', 'Bij inlevering van 11 lege blikjes krijg je 1 volle','cheap.png',103);
INSERT INTO aanbiedingen VALUES(6,'Doldwaze dagen','2019-04-01','2019-04-30', 'Elk 2e blikje gratis','dwaas.png',105);
INSERT INTO aanbiedingen VALUES(7,'Lenteactie','2019-05-01','2019-05-31', 'Nieuwe energie voor halve prijs','lente.png',102);

INSERT INTO evenementen VALUES(501, '2019-03-01', 101, 51, 1000);
INSERT INTO evenementen VALUES(502, '2019-03-04', 105, 53, 3000);
INSERT INTO evenementen VALUES(503, '2019-03-09', 102, 54, 1000);
INSERT INTO evenementen VALUES(504, '2019-03-11', 101, 55, 3000);
INSERT INTO evenementen VALUES(505, '2019-03-15', 101, 51, 1000);
INSERT INTO evenementen VALUES(506, '2019-03-16', 103, 53, 3000);
INSERT INTO evenementen VALUES(507, '2019-03-20', 104, 52, 2000);
INSERT INTO evenementen VALUES(508, '2019-03-22', 101, 51, 1000);
INSERT INTO evenementen VALUES(509, '2019-03-24', 102, 56, 5000);
INSERT INTO evenementen VALUES(510, '2019-03-25', 103, 53, 3000);
INSERT INTO evenementen VALUES(511, '2019-03-30', 102, 52, 2000);
INSERT INTO evenementen VALUES(512, '2019-03-31', 101, 51, 5000);
INSERT INTO evenementen VALUES(513, '2019-04-01', 102, 54, 5000);
INSERT INTO evenementen VALUES(514, '2019-04-05', 103, 59, 3000);
INSERT INTO evenementen VALUES(515, '2019-04-12', 102, 52, 2000);
INSERT INTO evenementen VALUES(516, '2019-03-13', 101, 55, 5000);


INSERT INTO gebruikers VALUES 
	(NULL, 'admin', 'welkom', 2), 
	(NULL, 'user1', 'welkom',1), 
	(NULL, 'user2', 'welkom',1);

INSERT INTO reacties VALUES 
	(NULL, 501, 'Leuk event', 'Ik vond het een fantastische dag.', 'Anoniem'),
	(NULL, 503, 'Waste of time', 'Wat een complete verspilling van tijd.', 'Zeurkous'),
	(NULL, 505, 'Pharell was top', 'Jammer dat Lady Gaga niet is gekomen.', 'Anoniem');








