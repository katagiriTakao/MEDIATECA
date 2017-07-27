DELETE FROM preguntasit;
ALTER TABLE preguntasit AUTO_INCREMENT=1;
LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/exam_ital.csv' INTO TABLE preguntasit
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
;
SELECT * FROM preguntasit;