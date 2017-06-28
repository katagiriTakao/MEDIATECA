drop database prueba_preguntas;
create database prueba_preguntas;
use prueba_preguntas;


create table modulo
	(no_cta varchar(10),
	id_sesiones int(3),
	id_diagnostico int(3)
	);

describe modulo;

create table sesiones
	(id_sesiones int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	no_cta varchar(10) ,
	hora_entrada varchar(5),
	hora_salida varchar(5),
	id_mat_sesi int(3),
	id_asesor varchar(7) 
		);

describe sesiones;

create table califica
	(no_cta varchar(10) NOT NULL PRIMARY KEY,
	nombre  varchar(50),
	idioma varchar(30),
	calificaciones varchar(40)

		);

create table materi_sesio
	(id_mat_sesi int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_materiales varchar(10)
		);

create table catalogo
	(id_materiales varchar(10) NOT NULL PRIMARY KEY,
	nombre_mat varchar(50),
	descripc varchar(200),
	id_tema varchar(10) 

		);
create table temas
	(id_tema varchar(10) NOT NULL PRIMARY KEY,
	tema varchar(50)
		);

create table examenes
	(id_diagnostico int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	id_tipo char(2) 
		);

create table chequeo

	(id_tipo char(2) NOT NULL PRIMARY KEY,
	result varchar(400),
	registro_res char(2),
	id_respues char(2),
	id_preg int(3)
	
		);
create table respu

	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(500)

		);

create table registroResp
	(registro_res char(2) NOT NULL PRIMARY KEY,
	registros varchar(500)

		);

create table preguntas
	(id_preg int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	preguntas varchar(50),
	inA varchar(20),
	inB varchar(20),
	inC varchar(20),
	inD varchar(20),
	id_tema varchar(10) 
		);

create table asesor 
	(id_asesor varchar(7) NOT NULL PRIMARY KEY,
	nombre varchar(40),
	grupos varchar (30)

		);

ALTER TABLE modulo ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE modulo ADD FOREIGN KEY (id_sesiones) REFERENCES sesiones(id_sesiones);
ALTER TABLE modulo ADD FOREIGN KEY (id_diagnostico) REFERENCES examenes(id_diagnostico);

ALTER TABLE sesiones ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE sesiones ADD FOREIGN KEY (id_mat_sesi) REFERENCES materi_sesio(id_mat_sesi);
ALTER TABLE sesiones ADD FOREIGN KEY (id_asesor) REFERENCES asesor(id_asesor);


ALTER TABLE materi_sesio ADD FOREIGN KEY (id_materiales) REFERENCES catalogo(id_materiales);


ALTER TABLE catalogo ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE examenes ADD FOREIGN KEY (id_tipo) REFERENCES chequeo(id_tipo);



ALTER TABLE chequeo ADD FOREIGN KEY (id_preg) REFERENCES preguntas(id_preg);
ALTER TABLE preguntas ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE chequeo ADD FOREIGN KEY (id_respues) REFERENCES respu(id_respues);

ALTER TABLE chequeo ADD FOREIGN KEY (registro_res) REFERENCES registroResp(registro_res);
