/*Crear tabla*/

CREATE TABLE usuarios(

    id int(11) auto_increment not null,
    nombre varchar(100) not null,
    apellido varchar(255) default 'Perez',
    email  varchar(100) not null,
    contrasena varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);