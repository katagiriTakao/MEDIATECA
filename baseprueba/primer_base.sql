drop database prueba_preguntas;
create database prueba_preguntas;
use prueba_preguntas;


create table modulo
	(no_cta varchar(10),
	id_sesiones int(3),
	id_diagnostico int(3),
	comen_alum int(3),
	id_comen_prof int(3)
	);



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



create table califica
	(no_cta varchar(10) NOT NULL PRIMARY KEY,
	PLT varchar(5),
	PLAN varchar(6),
	CLAVEASIGN varchar(30),
	GRUPO varchar(6),
	CALBIM1 varchar(4),
	CALBIM2 varchar(4),
	CALBIM3 varchar(4),
	Fal1 int(3),
	Fal2 int(3),
	Fal3 int(3),
	ApPat  varchar(50),
	ApMat  varchar(50),
	Nombre  varchar(50),
	Obs varchar(2),
	fecha varchar(10),
	hora varchar(14),
	usu varchar(10)
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
	id_ingles char(2),
	id_frances char(2),
	id_tipo_aleman char(2),
	id_italiano char(2)
		);


create table chequeoIN

	(id_ingles char(2) NOT NULL PRIMARY KEY,
	result varchar(400),
	registro_res int(3),
	id_respues char(2),
	id_preg int(3)
	
		);
create table chequeoFR

	(id_frances char(2) NOT NULL PRIMARY KEY,
	result varchar(400),
	registro_res int(3),
	id_respues int(3),
	id_preg int(3)
	
		);
create table chequeoIT

	(id_italiano char(2) NOT NULL PRIMARY KEY,
	result varchar(230),
	registro_res int(3),
	id_respues char(2),
	id_preg int(3)
	
		);
create table tipoAL
	(id_tipo_aleman char(2) NOT NULL PRIMARY KEY,
	tipo char(2)

		);
create table chequeoAL
	(tipo char(2) NOT NULL PRIMARY KEY,
	result varchar(230),
	registro_res int(3),
	id_respues char(2),
	id_preg int(3)

		);


create table respuIN

	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(500)

		);
create table respuIT

	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(300)

		);
create table respuAL 
	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(480)
		);




create table registroRespIN
	(registro_res int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	alumno varchar(10),
	registros varchar(500)

		);
create table registroRespFR
	(registro_res int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	alumno varchar(10),
	registros longblob

		);
create table registroRespAL
	(registro_res int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	alumno varchar(10),
	registros longblob

		);
create table registroRespIT
	(registro_res int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	alumno varchar(10),
	registros longblob

		);




create table preguntasIN
	(id_preg int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	preguntas varchar(100),
	in_A varchar(30),
	in_B varchar(30),
	in_C varchar(30),
	in_D varchar(30),
	id_tema varchar(10)

		);
create table preguntasIT
	(id_preg int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	preguntas varchar(120)

		);
create table preguntasAL
	(id_preg int(3) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
	preguntas varchar(100)

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
ALTER TABLE modulo ADD FOREIGN KEY (id_comen_prof) REFERENCES profe_comen(id_comen_prof);

ALTER TABLE sesiones ADD FOREIGN KEY (no_cta) REFERENCES califica(no_cta);
ALTER TABLE sesiones ADD FOREIGN KEY (id_mat_sesi) REFERENCES materi_sesio(id_mat_sesi);


ALTER TABLE materi_sesio ADD FOREIGN KEY (clasificacion) REFERENCES catalogo(clasificacion);


ALTER TABLE catalogo ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE examenes ADD FOREIGN KEY (id_ingles) REFERENCES chequeoIN(id_ingles);
ALTER TABLE examenes ADD FOREIGN KEY (id_frances) REFERENCES chequeoFR(id_frances);
ALTER TABLE examenes ADD FOREIGN KEY (id_italiano) REFERENCES chequeoIT(id_italiano);



ALTER TABLE chequeoIN ADD FOREIGN KEY (id_preg) REFERENCES preguntasIN(id_preg);
ALTER TABLE chequeoIT ADD FOREIGN KEY (id_preg) REFERENCES preguntasIT(id_preg);
ALTER TABLE chequeoAL ADD FOREIGN KEY (id_preg) REFERENCES preguntasAL(id_preg);

ALTER TABLE preguntasIN ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE chequeoIN ADD FOREIGN KEY (id_respues) REFERENCES respuIN(id_respues);
ALTER TABLE chequeoIT ADD FOREIGN KEY (id_respues) REFERENCES respuIT(id_respues);
ALTER TABLE chequeoAL ADD FOREIGN KEY (id_respues) REFERENCES respuAL(id_respues);

ALTER TABLE chequeoIN ADD FOREIGN KEY (registro_res) REFERENCES registroRespIN(registro_res);
ALTER TABLE chequeoIT ADD FOREIGN KEY (registro_res) REFERENCES registroRespIT(registro_res);
ALTER TABLE chequeoAL ADD FOREIGN KEY (registro_res) REFERENCES registroRespAL(registro_res);




