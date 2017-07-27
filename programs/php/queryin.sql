DELETE FROM preguntas;
ALTER TABLE preguntas AUTO_INCREMENT=1;
LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/exam_ingles_preg2.csv' 
INTO TABLE preguntas
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
;