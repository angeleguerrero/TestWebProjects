/*Clientes con mas pedidos*/

select  cl. nombre as Nombre,sum(cantidad) as Cantidad from compras_encargos ce inner join clientes cl on cl.id=ce.id_clientes group by id_clientes order by cantidad desc;