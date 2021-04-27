/*Vendedore con dos o mas clientes */

select count(cl.id_vendedor) as CANTIDAD, ve.nombre from clientes cl inner join vendedores ve on cl.id_vendedor=ve.id group by id_vendedor having count(id_vendedor)>=2 ;