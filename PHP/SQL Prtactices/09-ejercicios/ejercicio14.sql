/*Media sueldo de los Vendedores por grupo*/

select AVG(sueldo) as Media_Salarial, g.nombre from vendedores v inner join grupo g on v.id_grupo=g.id group by g.nombre;
