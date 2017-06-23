drop database prueba_preguntas;
create database prueba_preguntas;
use prueba_preguntas;


create table modulo
	(no_cta varchar(10) ,
	id_sesiones int(3),
	id_diagnostico int(3));

describe modulo;

create table sesiones
	(id_sesiones int(3) PRIMARY KEY,
	no_cta varchar(10) ,
	hora_entrada varchar(5),
	hora_salida varchar(5),
	id_materiales varchar(10) ,
	id_asesor varchar(7) ;
		);

describe sesiones;

create table califica
	(no_cta varchar(10) PRIMARY KEY,
	nombre  varchar(50),
	idioma varchar(30),
	calificaciones varchar(40)

		);
create table catalogo
	(id_materiales varchar(10) NOT NULL PRIMARY KEY,
	nombre_mat varchar(50),
	descripc varchar(200),
	id_tema varchar(10) 

		);
create table temas
	(id_tema varchar(10) NOT NULL PRIMARY KEY
	tema varchar(50)
		);

create table examenes
	(id_diagnostico int(3) NOT NULL PRIMARY KEY,
	id_tipo char(2) 
		);

create table chequeo

	(id_tipo char(2),
	result varchar(400),
	resgistro_res varchar(400),
	respues varchar(400),
	id_preg int(3) 
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
ALTER TABLE modulo ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE modulo ADD FOREIGN KEY (id_sesiones) REFERENCES sesiones(id_sesiones);
ALTER TABLE modulo ADD FOREIGN KEY (id_diagnostico) REFERENCES examenes(id_diagnostico);

ALTER TABLE sesiones ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE sesiones ADD FOREIGN KEY (id_materiales) REFERENCES catalogo(id_materiales);
ALTER TABLE sesiones ADD FOREIGN KEY (id id_asesor) REFERENCES asesor(id_asesor);

ALTER TABLE catalogo ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE examenes ADD FOREIGN KEY (id_tipo) REFERENCES chequeo(id_tipo);

ALTER TABLE chequeo ADD FOREIGN KEY (id_preg) REFERENCES preguntas(id_preg);

ALTER TABLE preguntas ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);