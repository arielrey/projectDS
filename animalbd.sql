CREATE TABLE animal (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  especie varchar(45) NOT NULL,
  raza varchar(255) NOT NULL,
  color varchar(200) NOT NULL,
  nombreanimal varchar(200) NOT NULL,
  imagen VARCHAR(255) NOT NULL DEFAULT 'generico.jpg',
  fecha DATE NOT NULL,
  zona varchar(200) NOT NULL,
  nombrepersona varchar(200) NOT NULL,
  telefono int(200) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1;


INSERT INTO animal (especie, raza, color, nombreanimal, imagen, fecha, zona, nombrepersona, telefono) 
VALUES ('perro','labrador','negro','Fulano','generico.jpg', '','sur', 'lionel', '342343342');




-- DROP TABLE animal
-- DROP TABLE animal;
-- CREATE TABLE animal (
--id int unsigned NOT NULL AUTO_INCREMENT,
--  especie varchar(45) NOT NULL,
--  raza varchar(255) NOT NULL,
--  color varchar(200) NOT NULL,
--  nombreanimal varchar(200) NOT NULL,
--  imagen VARCHAR(255) NOT NULL,
--  fecha DATE NOT NULL,
--  zona varchar(200) NOT NULL,
--  nombrepersona varchar(200) NOT NULL,
--  telefono VARCHAR(200) NOT NULL,
--  PRIMARY KEY (id)
--) ENGINE=InnoDB AUTO_INCREMENT=1;

-- INSERT INTO animal (especie, raza, color, nombreanimal, imagen, fecha, zona, nombrepersona, telefono) 
-- VALUES ('perro','labrador','negro','Fulano','generico.jpg', '2022-10-17','sur', 'lionel', '342343342');
