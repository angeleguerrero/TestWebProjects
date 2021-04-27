/*Visualizar unidades totales vendidas en cada auto a cada cliente
Mostrar nombre del auto, numero del cliente y la suma de las unidades
*/

 select ma.marca as Marca, cl.nombre, sum(cantidad) as Cantidad_Autos_Vendidos from compras_encargos ce inner join autos a on a.id=ce.id_autos inner join marca ma on ma.id=a.id_marca inner join clientes cl on cl.id=ce.id_clientes  group by id_clientes;

