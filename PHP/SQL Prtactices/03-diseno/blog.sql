
#engine=Innodb, EFICIANCIA MAYOR, FORMA DE ALMACENAR DATOS EN MYSQL, INTEGRIDAD REFERECNIAL SE RESPETA, SOPORTES TRANSACCIONES ETC
CREATE TABLE usuarios(
id INT (255) AUTO_INCREMENT NOT NULL,
nombre VARCHAR (100) NOT NULL,  
email VARCHAR (100) NOT NUll,
password VARCHAR (100) NOT NULL,
fecha_reg DATE NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY (id),
CONSTRAINT uq_email UNIQUE (email)


)ENGINE=Innodb;



CREATE TABLE categorias(
    id INT (255) AUTO_INCREMENT  NOT NULL,
    nombre VARCHAR (100) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=Innodb;



#TABLA CON CLAVE AjENA FOREIGN KEY (fk)

CREATE TABLE entradas(
    id INT (255) AUTO_INCREMENT NOT NULL, 
    usuarios_id INT (255) NOT NULL , 
    categorias_id INT (255) NOT NULL,
    titulo VARCHAR (255),
    descripcion MEDIUMTEXT, 
    fecha_reg DATE NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entada_usuario FOREIGN KEY (usuarios_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categorias FOREIGN KEY(categorias_id) REFERENCES  categorias(id)
)ENGINE=Innodb;