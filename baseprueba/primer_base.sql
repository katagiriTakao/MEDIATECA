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
	(NOCTA varchar(10),
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
	Obs varchar(2),
	fecha varchar(10),
	hora varchar(14),
	usu varchar(10)
		);

create table Directorio
	(
	ApPat varchar(40),
	ApMat varchar(40),
	Nombre varchar(50),
	Cuenta varchar(10),
	turno varchar(5),
	plan varchar(6),
	priming char(4),
	nacional varchar(3),
	sistema varchar(5),
	ingreso varchar(5),
	exregistro_res varchar(5),
	art22 varchar(6),
	historia varchar(6),
	sexo char(1),
	fechanac varchar(10),
	dir1 varchar(10),
	dir2 varchar(10),
	dir3 varchar(10),
	dir4 varchar(10),
	dir5 varchar(10),
	dir6 varchar(10),
	dir7 varchar(10),
	dir8 varchar(10),
	dir9 varchar(10)
		);

create table asesor 
	(grupo varchar (6),
	nombre varchar(100),
	numet varchar(5),
	clave varchar(5)
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
	id_aleman char(2),
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
	id_respues char(2),
	id_preg int(3)
	tipo char(2)
		);
create table chequeoIT

	(id_italiano char(2) NOT NULL PRIMARY KEY,
	result varchar(230),
	registro_res int(3),
	id_respues char(2),
	id_preg int(3)
	tipo char(2)
		);	
create table chequeoAL
	(id_aleman char(2) NOT NULL PRIMARY KEY,
	result varchar(230),
	registro_res int(3),
	id_respues char(2),
	id_preg int(3),
	tipo char(2)

		);





create table respuIN

	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(500)

		);
create table respuIT

	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(2000)

		);
create table respuAL 
	(id_respues char(2) NOT NULL PRIMARY KEY,
	respues varchar(480)
		);

create table respuFR 
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
	tipo char(4),
	registros varchar(10000)

		);
create table registroRespAL
	(registro_res int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	alumno varchar(10),
	tipo char(4),
	registros varchar(300)


		);
create table registroRespIT
	(registro_res int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	alumno varchar(10),
	tipo char(4),
	registros varchar(300)

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
	preguntas varchar(100),
	in_a varchar(100),
	in_b varchar(100),
	in_c varchar(100),
	in_d varchar(100)
		);








create table registro_res_comen 
	(no_cta varchar(10) NOT NULL,
	comen_alum int(3),
	plazo int(3),
	comentario varchar(1000)
		);
create table profe_comen
	(prof varchar(5),
	registro_res_destino varchar(10),	
	comentario varchar(1000)
		);


ALTER TABLE modulo ADD FOREIGN KEY (id_sesiones) REFERENCES sesiones(id_sesiones);
ALTER TABLE modulo ADD FOREIGN KEY (id_diagnostico) REFERENCES examenes(id_diagnostico);

ALTER TABLE sesiones ADD FOREIGN KEY (id_mat_sesi) REFERENCES materi_sesio(id_mat_sesi);


ALTER TABLE materi_sesio ADD FOREIGN KEY (clasificacion) REFERENCES catalogo(clasificacion);


ALTER TABLE catalogo ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE examenes ADD FOREIGN KEY (id_ingles) REFERENCES chequeoIN(id_ingles);
ALTER TABLE examenes ADD FOREIGN KEY (id_frances) REFERENCES chequeoFR(id_frances);
ALTER TABLE examenes ADD FOREIGN KEY (id_italiano) REFERENCES chequeoIT(id_italiano);
ALTER TABLE examenes ADD FOREIGN KEY (id_aleman) REFERENCES chequeoAL(id_aleman);



ALTER TABLE chequeoIN ADD FOREIGN KEY (id_preg) REFERENCES preguntasIN(id_preg);
ALTER TABLE chequeoIT ADD FOREIGN KEY (id_preg) REFERENCES preguntasIT(id_preg);
ALTER TABLE chequeoAL ADD FOREIGN KEY (id_preg) REFERENCES preguntasAL(id_preg);

ALTER TABLE preguntasIN ADD FOREIGN KEY (id_tema) REFERENCES temas(id_tema);

ALTER TABLE chequeoIN ADD FOREIGN KEY (id_respues) REFERENCES respuIN(id_respues);
ALTER TABLE chequeoIT ADD FOREIGN KEY (id_respues) REFERENCES respuIT(id_respues);
ALTER TABLE chequeoAL ADD FOREIGN KEY (id_respues) REFERENCES respuAL(id_respues);
ALTER TABLE chequeoFR ADD FOREIGN KEY (id_respues) REFERENCES respuFR(id_respues);

ALTER TABLE chequeoIN ADD FOREIGN KEY (registro_res) REFERENCES registroRespIN(registro_res);
ALTER TABLE chequeoIT ADD FOREIGN KEY (registro_res) REFERENCES registroRespIT(registro_res);
ALTER TABLE chequeoAL ADD FOREIGN KEY (registro_res) REFERENCES registroRespAL(registro_res);
ALTER TABLE chequeoFR ADD FOREIGN KEY (registro_res) REFERENCES registroRespFR(registro_res);