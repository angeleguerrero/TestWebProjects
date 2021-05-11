/*Vista llamada GrupoA, que incluya todos los vendedores del grupo que se llamen GrupoA*/

create view Grupo_A as select * from vendedores where id_grupo in (select id from grupo where nombre ="GRUPO A");