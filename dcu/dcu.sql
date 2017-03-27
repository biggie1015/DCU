CREATE TABLE profesor(

id_profesor INT NOT NULL AUTO_INCREMENT,
	Correo VARCHAR(60),
	Contrasena VARCHAR(60),
	PRIMARY KEY (id_profesor)

);

INSERT INTO profesor 
VALUES(NULL,'Willys@itla.com','hola');



CREATE TABLE materias(

	id_materias INT NOT NULL AUTO_INCREMENT,
	nombre_materia VARCHAR(25),
	horario TIME,
	PRIMARY KEY (id_materias)

);

ALTER TABLE materias 
ADD id_profesor INT NOT NULL
AFTER horario;


INSERT INTO materias
VALUES(NULL,'Programacion Web','09:00:00',2);


CREATE TABLE estudiantes(

    id_estu INT NOT NULL AUTO_INCREMENT,
	nombre_estu VARCHAR(25),
	PRIMARY KEY (id_estu)
	
);


SELECT nombre_estu,nombre_materia
FROM estudiantes as est
INNER JOIN materias AS mat
ON est.id_materia = mat.id_materias WHERE id_materias =2;

ALTER TABLE estudiantes
ADD id_materia INT NOT NULL
AFTER nombre_estu;



ALTER TABLE estudiantes
ADD CONSTRAINT fk_estu
FOREIGN KEY(id_materia)
REFERENCES materias(id_materias);

INSERT INTO estudiantes
VALUES(NULL,'Ismel','1');
INSERT INTO estudiantes
VALUES(NULL,'Juan','1');
INSERT INTO estudiantes
VALUES(NULL,'Pedro','2');
-- agrgar foreign key a la tabla materias para que haga relacaion con la tabla profesor


ALTER TABLE materias
ADD CONSTRAINT fk_profe
FOREIGN KEY(id_profesor)
REFERENCES profesor(id_profesor);


SELECT nombre_estu
FROM estudiantes
WHERE id_estu = 1;


//