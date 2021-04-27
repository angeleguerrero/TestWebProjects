/* nombre y ciudad de clientes con mas de 3 encargos*/

select cl.nombre as NOMBRE_CLIENTE, ci.ciudad as CIUDAD, cantidad as CANTIDAD from compras_encargos ce inner join clientes cl on cl.id=ce.id_clientes inner join ciudad ci on ci.id=cl.id_ciudad where cantidad>=3;