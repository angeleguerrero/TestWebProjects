/*Visualizar todos los autos en cuya marca exista la letra A y que el modelo inicie con F*/

select marca,modelo from autos a inner join marca m on a.id_marca=m.id inner join modelo mo on a.id_modelo=mo.id where marca like '%A%' and modelo like '%F%';