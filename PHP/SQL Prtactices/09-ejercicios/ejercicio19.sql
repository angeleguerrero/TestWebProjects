/*Clientes que han encargado NISSAN*/

select * from compras_encargos where id_autos in (select a.id from autos a inner join marca ma on ma.id=a.id_marca where ma.marca='NISSAN');