/*DISEÑO BBDD CONCESIONARIO*/


/*CREANDO DATABASE */
CREATE DATABASE IF NOT EXISTS concesionariodb;
USE concesionariodb;


/*CREANDO TABLAS*/

CREATE TABLE Ciudad(
id INT(10) AUTO_INCREMENT NOT NULL ,
ciudad VARCHAR (100) NOT  NULL ,
CONSTRAINT pk_ciudad PRIMARY KEY (id) 
)ENGINE=InnoDB;


CREATE  TABLE Cargo (
 id INT(10) AUTO_INCREMENT NOT NULL ,
cargo VARCHAR(100) NOT NULL ,
CONSTRAINT pk_cargo PRIMARY KEY (id)
)ENGINE = InnoDB;


CREATE TABLE Modelo(
id INT (10) AUTO_INCREMENT NOT NULL,
modelo VARCHAR (100) NOT NULL ,
CONSTRAINT pk_modelo PRIMARY KEY (id) 
)ENGINE=InnoDB;

CREATE TABLE Marca(
id int AUTO_INCREMENT NOT NULL, 
marca VARCHAR (100) NOT NULL ,
CONSTRAINT pk_marca PRIMARY KEY (id)
)ENGINE=InnoDB;


CREATE TABLE Grupo(
id int(10) AUTO_INCREMENT NOT NULL,
nombre VARCHAR (100) NOT NULL ,
id_ciudad INT (10),
CONSTRAINT pk_grupo PRIMARY KEY (id),
CONSTRAINT fk_grupo_ciudad FOREIGN KEY (id_ciudad) REFERENCES Ciudad(id)
)ENGINE=InnoDB;

CREATE TABLE Autos(
id INT (10) AUTO_INCREMENT NOT NULL, 
id_modelo INT (10),
id_marca INT (10),
stock INT (50),
CONSTRAINT pk_autos PRIMARY KEY (id),
CONSTRAINT fk_autos_modelos FOREIGN KEY (id_modelo) REFERENCES Modelo(id),
CONSTRAINT fk_autos_marca FOREIGN KEY (id_marca) REFERENCES Marca(id)
)ENGINE InnoDB;




CREATE TABLE Vendedores(
id int(10) AUTO_INCREMENT NOT NULL ,
nombre VARCHAR (100) NOT NULL ,
apellidos VARCHAR (100) NOT NULL ,
id_cargo INT (10),
id_grupo INT (10),
id_jefe INT (10),
fec_reg DATETIME,
sueldo DECIMAL (20,2),
comision DECIMAL (20,2),
CONSTRAINT pk_vendedores PRIMARY  KEY (id),
CONSTRAINT fk_vendedores_cargo FOREIGN KEY (id_cargo) REFERENCES Cargo(id),
CONSTRAINT fk_vendedores_grupo FOREIGN KEY (id_grupo) REFERENCES Grupo(id),
CONSTRAINT fk_clientes_jefe FOREIGN KEY (id_jefe) REFERENCES Vendedores(id)

)ENGINE =Innodb;




CREATE TABLE Clientes(
id INT (10) AUTO_INCREMENT NOT NULL,
id_vendedor INT  (10),
nombre VARCHAR (100),
id_ciudad INT (10),
tot_gastado DECIMAL (20,2),
fec_reg DATETIME,
CONSTRAINT pk_clientes PRIMARY KEY (id),
CONSTRAINT fk_clientes_vendedor FOREIGN KEY (id_vendedor) REFERENCES Vendedores(id), 
CONSTRAINT fk_clientes_ciudad FOREIGN KEY (id_ciudad) REFERENCES Ciudad(id)

)ENGINE InnoDB;


CREATE TABLE Compras_Encargos(
id INT (10) AUTO_INCREMENT NOT NULL ,
id_clientes INT(10) NOT NULL   ,
id_autos INT (10) NOT  NULL ,
cantidad INT (100),
fec_reg DATETIME,
CONSTRAINT pk_compra_encargos PRIMARY KEY (id),
CONSTRAINT fk_compra_encargos_clientes  FOREIGN KEY (id_clientes) REFERENCES Clientes(id),
CONSTRAINT fk_compra_encargos_autos  FOREIGN KEY (id_autos) REFERENCES Autos(id)
 
)ENGINE InnoDB;