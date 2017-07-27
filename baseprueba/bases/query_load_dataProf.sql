delete from asesor;
LOAD DATA INFILE 'C:/Users/MEDIATECA23/Downloads/Bases1/Bases2/profe.csv' INTO TABLE asesor
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\r\n'
;