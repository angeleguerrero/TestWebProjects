#Renombrar tabla

#ALTER TABLE `usuarios` RENAME TO `usuarios_renom`;

#Cambiar nombre de una columna

#ALTER TABLE `usuarios_renom` CHANGE apellido apellidos varchar(100) null;

#SELECT * FROM `usuarios_renom`;

#Modificar columna

#ALTER TABLE `usuarios_renom` MODIFY apellidos char(50) not null;

#DESC `usuarios_renom`;

#Agregar nueva columna

#ALTER TABLE `usuarios_renom` ADD website varchar(100) NOT NULL; 

#Añadir restriccion a columna
#ALTER TABLE `usuarios_renom` ADD CONSTRAINT uq_email UNIQUE (email);

#Borrar una columna
ALTER TABLE `usuarios_renom` DROP  website;