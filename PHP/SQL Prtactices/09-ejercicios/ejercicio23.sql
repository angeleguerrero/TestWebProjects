/*Listado de clientes (numero y nombre) (Vendedor y nombre)*/

 select cl.id as NUMERO_ID,cl.nombre as CLIENTE, ve.id as ID_VENDEDOR, concat(ve.nombre,' ', apellidos) as VENDEDOR from clientes cl inner join vendedores ve on ve.id=cl.id_vendedor;