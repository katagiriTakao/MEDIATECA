delete from asesor;
LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/directorio_fracc' INTO TABLE asesor
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
;