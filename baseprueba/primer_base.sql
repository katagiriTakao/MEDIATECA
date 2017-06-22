drop database prueba_preguntas;
create database prueba_preguntas;
use prueba_preguntas;


create table modulo
	(no_cta varchar(10) FOREIGN KEY,
	id_sesiones int(3) FOREIGN KEY,
	diagnostico int(3) FOREIGN KEY);

describe modulo;

create table sesiones
	(id_sesiones int(3) PRIMARY KEY,
	no_cta varchar(10) FOREIGN KEY,
	hora_entrada varchar(5),
	hora_salida varchar(5),
	id_materiales varchar(10) FOREIGN KEY,
	asesor varchar(7) FOREIGN KEY

		);

describe sesiones;

create table califica
	(no_cta varchar(10) PRIMARY KEY,
	nombre  varchar(50),
	idioma varchar(30),
	calificaciones varchar(40)

		);
create table catalogo
	(id_materiales varchar(10) PRIMARY KEY,
	nombre_mat varchar(50),
	descripc varchar(200),
	id_tema varchar(10) FOREIGN KEY

		);
create table temas
	(id_tema varchar(10) PRIMARY KEY
	tema varchar(50)
		);


create table preguntas
	(id_preg int(3) PRIMARY KEY,
	preguntas varchar(50),
	inA varchar(20),
	inB varchar(20),
	inC varchar(20),
	inD varchar(20),
	id_tema varchar(10)
		);
