delete from asesor;
LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/profe.csv' INTO TABLE asesor
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
;