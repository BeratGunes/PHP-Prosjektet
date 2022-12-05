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
            Postnummer              INTEGER        NOT NULL,
            CONSTRAINT PRIMARY KEY (Medlem_ID)
        );


        CREATE TABLE Annonse
        (
            Annonse_ID              SMALLINT UNIQUE AUTO_INCREMENT,
            Annonse_Navn            VARCHAR(500)    NOT NULL,
            Annonse_Beskrivelse     VARCHAR(500)    NOT NULL,
            CONSTRAINT PRIMARY KEY (Annonse_ID)

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
            Medlem_ID             SMALLINT        ,
            Bolig_ID                SMALLINT         ,
            Annonse_ID              SMALLINT         NOT NULL,
            Akseptert               SMALLINT        DEFAULT 0,

            CONSTRAINT PRIMARY KEY (Foresporsel_ID),
            CONSTRAINT FOREIGN KEY (Medlem_ID) REFERENCES Medlem(Medlem_ID) ON DELETE CASCADE,
            CONSTRAINT FOREIGN KEY (Annonse_ID) REFERENCES Annonse(Annonse_ID) ON DELETE CASCADE
        );



        CREATE TABLE Bolig
        (
            Bolig_ID                SMALLINT UNIQUE AUTO_INCREMENT,
            Bolig_Navn              VARCHAR(100)     NOT NULL,
            Bolig_Adresse           VARCHAR(100)     NOT NULL,
            Byen                    VARCHAR(100)     NOT NULL,
            Bydel                   VARCHAR(100)     NOT NULL,
            Annonse_ID              SMALLINT,         
            Pris                    INTEGER,
            Medlem_ID               SMALLINT,
            CONSTRAINT PRIMARY KEY (Bolig_ID),
            CONSTRAINT FOREIGN KEY (Annonse_ID) REFERENCES Annonse(Annonse_ID) ON DELETE CASCADE,
            CONSTRAINT FOREIGN KEY (Medlem_ID) REFERENCES Medlem(Medlem_ID) ON DELETE CASCADE
        );

       


        INSERT INTO Medlem(Fornavn,Etternavn,Brukernavn,Mobilnummer,Epost,Passord,Adresse,Postnummer)

        VALUES ('Berat','Gunes','beratg',96741021,'beratg12@hotmail.com','$2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm','Wolframveien 32C',4629),
               ('Ømer','Fener','omercik',19070709,'omerf19@hotmail.com','$2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm','Bjørndalssletta 12D',1810),
               ('Abdul Rahman','Kasim','aposh',19051905,'abdulrk12@hotmail.com','$2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm','Marnardalveien 12',8907),
               ('Sena Eda','Gundogar','senaeda',12345678,'senaed@hotmail.com','$2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm','Moenshagen 2',1234),
               ('Mehmet', 'Eksi', 'memo', 12345658, 'memo@hotmail.com','$2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm','UiAveien32c',4626),
               ('Keith', 'Morjan', 'keith', 12345658, 'keith@hotmail.com','$2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm','Osloveien2',4626),
               ('Magomed', 'Arsaev', 'mago',1234321,'mago@nordicbc.com', '2y$10$hbekrLQqqKeQ3KLpzdUiHeH938dd5C4oyJmJPyn3RxcU4qz3whHvm', 'Boxveien10,', 4627);



        INSERT INTO Annonse(Annonse_Navn, Annonse_Beskrivelse)

        VALUES ('Du vil ikke miste denne sjansen!', 'Et rom i leiligheten som er 12m2 er gunstig for studenter'),
               ('Studentbolig-Tinnheia', 'Den har 2 rom men kan gjøres om til 3'),
               ('Studentbolig-Lund, Rimelig pris!', 'Boligen er for studenter som vil bo nær campus'),
               ('Hellemyrs beste utsikt', 'Boligen har en fabelaktig utsikt'),
               ('Rimelig i byen!','Hybel i byen for studenter som er økonomisk!'),
               ('Studentbolig-Gimlekollen','Studentens favoritt bydel!'),
               ('2 min fra campus!','Du vil vel sove litt mer, og rekke skolen fint?');

        INSERT INTO Bolig(Bolig_Navn, Bolig_Adresse, Byen, Bydel, Annonse_ID, Pris, Medlem_ID)

        VALUES ('Rom i leilighet - 12m2', 'Byhavnen 12','Kristiansand','Slettheia',1,5000,1),
               ('2 roms hybel i Tinnheia', 'Natriumsveien 32','Kristiansand','Tinnheia',2,8000,2),
               ('Rimelig hybel 2-1 i Lund', 'Oddemarka 1','Kristiansand','Lund',3,7000,3),
               ('Hellemyr 3+1', 'Hellemyrveien 12','Kristiansand', 'Hellemyr',4,4500,4),
               ('Kvadraturen 1+1', 'Skippergata 2','Kristiansand', 'Sentrum',5,3000,5),
               ('2+1 i Gimlekollen', 'Gimlekollensveien 2','Kristiansand', 'Gimlekollen',6,5500,6),
               ('1+0 UiA Campus', 'Universitetsveien 4','Kristiansand', 'Campus UiA',7,7500,7);



        INSERT INTO Meldinger(Melding_Beskrivelse, Medlem_ID)

        VALUES('Lorem ipsum dolorsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur' ,1),
              ('Ingen liker smerte for smertens skyld, eller søker den og ønsker den, bare fordi den er smerte…', 2),
              ('Det er laget mange variasjoner av den opprinnelige versjonen for å inkludere tegn som er lite eller ubrukt i latin.', 3),
              ('Siden betydningen av teksten er uforståelig for de fleste, egner den seg godt, fordi man har påvist at man blir påvirket av innholdet i teksten når man skal se på skriftsnitt eller design.', 4),
              ('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nulla facilisi morbi tempus iaculis. Tortor id aliquet lectus proin nibh nisl.', 5),
              ('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio facilisis mauris sit amet.', 6),
              ('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 7);


        INSERT INTO Foresporsel(Medlem_ID,Bolig_ID,Annonse_ID,Akseptert)

        VALUES (1,1,1,0),
               (2,2,2,1),
               (3,3,3,1),
               (4,4,4,0),
               (5,5,5,1),
               (6,6,6,0),
               (7,7,7,1);