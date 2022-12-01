create or replace database PHPProsjektet;
use PHPProsjektet;


CREATE TABLE Medlem
(
    Medlem_ID              SMALLINT UNIQUE AUTO_INCREMENT,
    Fornavn                 VARCHAR(30)     NOT NULL,
    Etternavn               VARCHAR(30)     NOT NULL,
    Brukernavn              VARCHAR(50)     NOT NULL,
    Mobilnummer             INTEGER         NOT NULL,
    Epost                   VARCHAR(255)    NOT NULL,
    Passord                 VARCHAR(255)    NOT NULL,
    Adresse                 VARCHAR(100)     NOT NULL,
    Postnummer              SMALLINT        NOT NULL,
    CONSTRAINT PRIMARY KEY (Medlem_ID)
);


CREATE TABLE Annonse
(
    Annonse_ID              SMALLINT UNIQUE AUTO_INCREMENT,
    Annonse_Navn            VARCHAR(100)    NOT NULL,
    Annonse_Beskrivelse     VARCHAR(500)    NOT NULL,
    Medlem_ID              SMALLINT         NOT NULL,
    CONSTRAINT PRIMARY KEY (Annonse_ID),
    CONSTRAINT FOREIGN KEY (Medlem_ID) REFERENCES Medlem(Medlem_ID) ON DELETE CASCADE
);


CREATE TABLE Meldinger
(
    Meldinger_ID          SMALLINT UNIQUE AUTO_INCREMENT,
    Melding_Beskrivelse   VARCHAR(1000)       NOT NULL,
    Medlem_ID             SMALLINT         NOT NULL,
    CONSTRAINT PRIMARY KEY (Meldinger_ID),
    CONSTRAINT FOREIGN KEY (Medlem_ID) REFERENCES Medlem(Medlem_ID) ON DELETE CASCADE

);


CREATE TABLE Foresporsel
(
    Foresporsel_ID          SMALLINT UNIQUE AUTO_INCREMENT,
    Medlem_ID             SMALLINT        NOT NULL,
    Bolig_ID                SMALLINT         NOT NULL,
    Annonse_ID              SMALLINT         NOT NULL,
    Meldinger_ID            SMALLINT        NOT NULL,
    CONSTRAINT PRIMARY KEY (Foresporsel_ID),
    CONSTRAINT FOREIGN KEY (Medlem_ID) REFERENCES Medlem(Medlem_ID) ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (Annonse_ID) REFERENCES Annonse(Annonse_ID) ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (Meldinger_ID) REFERENCES Meldinger(Meldinger_ID) ON DELETE CASCADE
);

CREATE TABLE Annonse_Status
(
    Annonse_Status_ID       SMALLINT UNIQUE AUTO_INCREMENT,
    Annonse_ID              SMALLINT         NOT NULL,
    Foresporsel_ID          SMALLINT         NOT NULL,
    Akseptert               BOOLEAN          NOT NULL,
    CONSTRAINT PRIMARY KEY (Annonse_Status_ID),
    CONSTRAINT FOREIGN KEY (Annonse_ID) REFERENCES Annonse(Annonse_ID) ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (Foresporsel_ID) REFERENCES Foresporsel(Foresporsel_ID) ON DELETE CASCADE
);


CREATE TABLE Bolig
(
    Bolig_ID                SMALLINT UNIQUE AUTO_INCREMENT,
    Bolig_Navn              VARCHAR(100)     NOT NULL,
    Bolig_Adresse           VARCHAR(100)     NOT NULL,
    Byen                    VARCHAR(100)     NOT NULL,
    Bydel                   VARCHAR(100)     NOT NULL,
    Annonse_ID              SMALLINT         NOT NULL,
    CONSTRAINT PRIMARY KEY (Bolig_ID),
    CONSTRAINT FOREIGN KEY (Annonse_ID) REFERENCES Annonse(Annonse_ID) ON DELETE CASCADE
);

CREATE TABLE Varslinger
(
    Varslinger_ID            SMALLINT UNIQUE AUTO_INCREMENT,
    Brukere                 VARCHAR(30)      NOT NULL,
    Annonse_Status_ID       SMALLINT         NOT NULL,
    Medlem_ID              SMALLINT         NOT NULL,
    CONSTRAINT PRIMARY KEY (Varslinger_ID),
    CONSTRAINT FOREIGN KEY (Annonse_Status_ID) REFERENCES Annonse_Status(Annonse_Status_ID) ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (Medlem_ID) REFERENCES Medlem(Medlem_ID) ON DELETE CASCADE
);


CREATE TABLE Rettigheter
(
    Rettigheter_ID          SMALLINT UNIQUE AUTO_INCREMENT,
    Bolig_Adresse           VARCHAR(100)        NOT NULL,
    Rettighet               VARCHAR(100)     NOT NULL,
    CONSTRAINT PRIMARY KEY (Rettigheter_ID)
);





INSERT INTO Medlem(Fornavn,Etternavn,Brukernavn,Mobilnummer,Epost,Passord,Adresse,Postnummer)

VALUES ('Berat','Gunes','beratg',96741021,'beratg12@hotmail.com','  ','Wolframveien 32C',4629),
       ('Omer','Fener','omercik',19070709,'omerf19@hotmail.com','omerpassord','Moenshagen 2',1810),
       ('Abdul Rahman','aposh','Kasim',19051905,'abdulrk12@hotmail.com','abdulpassord','Marnardalveien 12',8907),
       ('Sena Eda','senaeda','Gundogar',12345678,'senaed@hotmail.com','senapassord','Kanziveien 31',1234);


INSERT INTO Annonse(Annonse_Navn, Annonse_Beskrivelse, Medlem_ID)

VALUES ('SLETTHEIAS HJERTE', 'DFGXCGVHJDKLWELDGFKHSDBVFGJKHSDJKFHSJKD',1),
       ('Gøtdenverenbolig til salgs', 'Den har 4 rom men kan gjøres om til 5', 2),
       ('Amcikbolig til salgs', 'Boligen er for studenter', 3),
       ('Zencibolig til salgs', 'Boligen har en fabelaktig utsikt', 4);

INSERT INTO Bolig(Bolig_Navn, Bolig_Adresse, Byen, Bydel, Annonse_ID)

VALUES ('Rom i leilighet - 12m2', 'Byhavnen 12','Kristiansand','Slettheia',1),
       ('Gøtdenverenbolig', 'Gøtveien 35','Kristiansand','Tinnheia',2),
       ('Amcikbolig', 'Amcikveien 57','Kristiansand','Lund',3),
       ('Zencibolig', 'Zenciveien 69','Kristiansand', 'Hellemyr',4);

INSERT INTO Meldinger(Melding_Beskrivelse, Medlem_ID)

VALUES('Lorem ipsum dolorsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur' ,1),
      ('Ingen liker smerte for smertens skyld, eller søker den og ønsker den, bare fordi den er smerte…', 2),
      ('Det er laget mange variasjoner av den opprinnelige versjonen for å inkludere tegn som er lite eller ubrukt i latin.', 3),
      ('Siden betydningen av teksten er uforståelig for de fleste, egner den seg godt, fordi man har påvist at man blir påvirket av innholdet i teksten når man skal se på skriftsnitt eller design.', 4);

COMMIT;




