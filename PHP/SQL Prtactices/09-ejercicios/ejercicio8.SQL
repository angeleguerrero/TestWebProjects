/*Empleados con sueldo y cargo de vendedores*/

select nombre, sueldo, cargo from vendedores v inner join  cargo c on v.id_cargo=c.id where id_cargo=1;