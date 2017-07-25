drop database prueba_preguntas;
create database prueba_preguntas;
use prueba_preguntas;


create table modulo
	(no_cta varchar(10),
	id_sesiones int(3),
	id_diagnostico int(3),
	comen_alum int(3),
	comen_prof int(3)
	);

describe modulo;

create table sesiones
	(id_sesiones int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	fecha varchar(15),
	no_cta varchar(10),
	nombre varchar(40),
	hora_entrada varchar(15),
	hora_salida varchar(15),
	tiempo int(4),
	id_mat_sesi int(3)
	
		);

describe sesiones;

create table califica
	(no_cta varchar(10) NOT NULL PRIMARY KEY,
	ApPat  varchar(50),
	ApMat  varchar(50),
	Nombre  varchar(50),
	CLAVEASIGN varchar(30),
	CALBIM1 varchar(4),
	CALBIM2 varchar(4),
	CALBIM3 varchar(4),
	GRUPO varchar(6)

		);

create table materi_sesio
	(id_mat_sesi int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	clasificacion varchar(10)
		);

create table catalogo
	(clasificacion varchar(10) NOT NULL PRIMARY KEY,
	titulo varchar(50),
	descripc varchar(200),
	id_tema varchar(10) 

		);
create table temas
	(id_tema varchar(10) NOT NULL PRIMARY KEY,
	tema varchar(50)
		);

create table examenes
	(id_diagnostico int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	id_examRegistrado INT(3)
		);

create table chequeo

	(id_examRegistrado INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_tipo char(2),
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
	(grupo varchar (50),
	nombre varchar(40),
	numet varchar(5) NOT NULL PRIMARY KEY,
	clave varchar(5)
	

		);

create table alumno_comen 
	(comen_alum int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	comentario varchar(1000)

		);
create table profe_comen
	(id_comen_prof int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	prof varchar(5),
	alumno_destino varchar(10),	
	comentario varchar(1000)
		);

ALTER TABLE modulo ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE modulo ADD FOREIGN KEY (id_sesiones) REFERENCES sesiones(id_sesiones);
ALTER TABLE modulo ADD FOREIGN KEY (id_diagnostico) REFERENCES examenes(id_diagnostico);
ALTER TABLE modulo ADD FOREIGN KEY (comen_alum) REFERENCES alumno_comen(comen_alum);
ALTER TABLE modulo ADD FOREIGN KEY (comen_prof) REFERENCES profe_comen(comen_prof);

ALTER TABLE sesiones ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE sesiones ADD FOREIGN KEY (id_mat_sesi) REFERENCES materi_sesio(id_mat_sesi);


ALTER TABLE materi_sesio ADD FOREIGN KEY (clasificacion) REFERENCES catalogo(clasificacion);


ALTER TABLE catalogo ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE examenes ADD FOREIGN KEY (id_examRegistrado) REFERENCES chequeo(id_examRegistrado);



ALTER TABLE chequeo ADD FOREIGN KEY (id_preg) REFERENCES preguntas(id_preg);
ALTER TABLE preguntas ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE chequeo ADD FOREIGN KEY (id_respues) REFERENCES respu(id_respues);

ALTER TABLE chequeo ADD FOREIGN KEY (registro_res) REFERENCES registroResp(registro_res);




