/*Listado clientes atendidos por x vendedor*/

select * from clientes where id_vendedor in (select id from vendedores where nombre='Angel' );


select v.nombre as Vendedor, c.nombre as Cliente  from clientes c inner join vendedores v on v.id=c.id_vendedor where v.nombre like '%Angel%';