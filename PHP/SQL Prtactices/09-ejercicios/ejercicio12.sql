/*Visualizar todos lo cargos y numero de vendedores que hay en cada cargo*/

 select v.nombre, v.apellidos,c.cargo ,  count(c.cargo) as Cantidad_Cargos from vendedores v inner join cargo c where v.id_cargo=c.id group by c.cargo;