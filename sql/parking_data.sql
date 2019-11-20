INSERT INTO MEMBRE VALUES
(1, "admin", "admin", "Admin", "Admin", "admin", "aaaa@aaa.com", "ABC1234", 0),
(2, "orianne", "orianne", "Gruber", "Orianne", "vice", "orianne@orianne.com", "DEF5678", 0),
(3, "deborah", "deborah", "Ganin", "Deborah", "pdg", "deborah@deborah.com", "GHI9102", 0);

INSERT INTO RESERVATION VALUES
(1, "05/10/19","08/10/2019" ),
(2, "10/10/19","14/10/2019" ),
(3, "23/10/19","31/10/2019" ),
(4, "01/11/19","06/11/2019" ),
(5, "25/11/19","08/11/2019" );

INSERT INTO PLACE VALUES 
("A12","1","Standard",0 ),
("B22","2","Standard",0 ),
("C70","3","Standard",0 ),
("D37","4","Standard",0 ),
("E17","5","PMR",1 ),
("F12","5","Standard",0 ),
("G15","6","PMR",1 ),
("H45","7","PMR",0),
("I14","8","Standard",0 );

INSERT INTO ATTENTE VALUES 
("P1","14/09/2019","Non Prioritaire"),
("P2","19/09/2019","Non Prioritaire"),
("P3","20/10/2019","Prioritaire"),
("P4","02/11/19","Prioritaire");
