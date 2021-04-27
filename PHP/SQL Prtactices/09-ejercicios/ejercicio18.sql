/*Listado de encargos por cliente*/
select ce.id as No_Encargo,ce.id_autos,ce.fec_reg, cl.nombre from compras_encargos ce inner join clientes cl on cl.id=ce.id_clientes  where id_clientes in (select id from clientes where nombre='MARINO P') ;


