/*Clientes y cantidad de encargos y clientes que no han realizado encargos*/

select cl.nombre as Cliente, count(ce.cantidad) as Cantidad_Encargo from compras_encargos ce right join clientes cl on cl.id=ce.id_clientes group by cl.id;