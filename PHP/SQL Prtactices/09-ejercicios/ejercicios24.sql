/*Compras realizadas con marca del auto y nombre del cliente*/

select ce.id as NO_ENCARGO, cl.nombre as CLIENTES, ma.marca as MARCA from compras_encargos ce inner join clientes cl on cl.id=ce.id_clientes inner join autos au on au.id=ce.id_autos inner join marca ma on ma.id=au.id_marca;