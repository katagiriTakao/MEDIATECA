LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/exam_ingles_preg2.csv' INTO TABLE preguntas
INTO preguntas
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES
;