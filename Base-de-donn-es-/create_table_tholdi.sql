
create table devis
  (codeDevis INT NOT NULL,
  dateDevis bigint(20),
  montantDevis DECIMAL (6,2),
  volume  DECIMAL(4),
  nbContainers DECIMAL (11),
  valider INT (5),
  primary key (`codeDevis`)
  ) engine = innodb ;



create table duree
	( codeDuree   VARCHAR (20) NOT NULL,
	 nbjours     INT (6),
  primary key (`codeDuree`)
	)engine = innodb ;



create table pays
  (codePays CHAR(4) NOT NULL,
  nomPays CHAR (30),
  primary key (`codePays`)
  )engine = innodb ;



create table reservation
  (codeReservation INT (100) NOT NULL,
  dateDebutReservation BIGINT(20),
  dateFinReservation  BIGINT(20),
  dateReservation BIGINT(20),
  volumeEstime DECIMAL (4),
  codeDevis INT,
  codeVilleMiseDisposition INT(10),
  codeVilleRendre INT(10),
  codeUtilisateur INT(6) NOT NULL,
  numeroDeReservation DECIMAL (11),
  etat CHAR (10),
  primary key (`codeReservation`)
  ) engine = innodb ;


create table reserver
  (codeReservation INT (100) NOT NULL,
   numTypeContainer INT(6)NOT NULL,
   qteReserver   INT(10)
   )engine = innodb ;


create table tarificationContainer
  (codeDuree VARCHAR (20),
    numTypeContainer INT(6),
    tarif DECIMAL(10,2)
   )engine = innodb ;


create table typeContainer
	(numTypeContainer INT(6) NOT NULL,
	 codeTypeContainer  CHAR  (4),
	libelleTypeContainer CHAR (50),
	longueurCont DECIMAL(5),
  largeurCont DECIMAL(5),
  hauteurCont DECIMAL(4),
  poidsCont DECIMAL(5),
  tare  DECIMAL(4),
  capaciteDeCharge FLOAT (8,2),
  primary key (`numTypeContainer`)
	)engine = innodb ;



create table utilisateur
  (code INT(6) NOT NULL,
  raisonSociale CHAR (50),
  adresse CHAR (50),
  cp CHAR (5) check(cp like'[0-9][0-9][0-9][0-9][0-9]'),
  ville CHAR (40),
  adrMel CHAR (50),
  telephone CHAR (20),
  contact CHAR (50),
  codePays CHAR(4) NOT NULL,
  login CHAR (10),
  mdp CHAR(10),
  primary key (`code`)
  )engine = innodb ;



create table ville
  (codeVille DECIMAL (6) NOT NULL,
  nomVille CHAR (30),
  codePays CHAR(4) NOT NULL,
  primary key (`codeVille`),
  FOREIGN KEY (codePays)REFERENCES pays(codePays)
  ) engine = innodb ;