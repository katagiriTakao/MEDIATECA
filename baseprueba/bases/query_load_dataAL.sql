DELETE FROM preguntasal;
ALTER TABLE preguntasal AUTO_INCREMENT=1;
LOAD DATA INFILE 'C:/xampp/htdocs/MEDIATECA/baseprueba/bases/exam_alem.csv' INTO TABLE preguntasal
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
ignore 1 lines
;