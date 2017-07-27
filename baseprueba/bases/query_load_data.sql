DELETE FROM preguntasin;
ALTER TABLE preguntasin AUTO_INCREMENT=1;
LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/exam_ingles_preg2.csv' INTO TABLE preguntasin
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
ignore 1 lines
;