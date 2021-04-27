/*Grupo de vendedor con mayor salario*/

select * from grupo where id in (select id_grupo from vendedores where sueldo = (select max(sueldo) from vendedores) );