/* Apellidos de los vendedores, su fecha y numero de grupo, ordenados por fecha desc, mostrar 4 ultimos*/


 select  v.apellidos,  v.fec_reg, g.nombre  from vendedores v inner join grupo g on v.id_grupo=g.id order by fec_reg desc;