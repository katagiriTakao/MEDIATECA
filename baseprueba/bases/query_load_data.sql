DELETE FROM preguntasin;
ALTER TABLE preguntasin AUTO_INCREMENT=1;
LOAD DATA INFILE 'C:/Users/MEDIATECA/Downloa/Bases1/Bases2/profe.csv' INTO TABLE asesor
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
ignore 1 lines
;