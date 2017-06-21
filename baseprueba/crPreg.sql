create database prueba_preguntas;
use prueba_preguntas;


create table preguntas
(preguntas varchar(50) PRIMARY KEY,
id varchar(3),
inA varchar(20),
inB varchar(20),
inC varchar(20),
inD varchar(20));



insert into preguntas (preguntas,inA,inB,inC,inD) values ('goku es el padre de ','gohan','piccolo','krillin');


select * from preguntas;


