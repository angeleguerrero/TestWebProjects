
/*vendedores mas viejos en la empresa*/
select * from vendedores order by fec_reg asc limit 1;

/*Vehiculo con mas unidades vendidas*/
select ce.id,ma.marca, count(ce.cantidad) as Cantidad_Vendida from compras_encargos ce inner join autos au on au.id=ce.id_autos inner join marca ma on au.id_marca=ma.id group by ce.id_autos order by cantidad_vendida desc limit 1;