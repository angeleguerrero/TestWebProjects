#CONSULTA AGRUPAMIENTO

SELECT COUNT(TITULO) AS 'NUMERO ENTRADA', CATEGORIAS_ID  FROM ENTRADAS GROUP BY CATEGORIAS_ID;

#AGRUPAMIENTO CON CONDICIONES

SELECT COUNT(TITULO) AS 'NUMERO ENTRADA', CATEGORIAS_ID  FROM ENTRADAS GROUP BY CATEGORIAS_ID HAVING COUNT(TITULO)>=4 ;

/*
AVG Avegrage (Media)
COUNT Contar numero elementos
MAX Devuelve valor maximo del grupo
SUM Suma contenido del grupo
*/

select avg(id) as 'Media entradas' from entradas;

select max(id) as 'Maximo ID', titulo from entradas;

select min(id) as 'Maximo ID', titulo from entradas;
 SELECT sum(id) as 'Suma de ID' from entradas;

