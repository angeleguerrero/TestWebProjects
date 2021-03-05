/*Visualizar el nombre y apellidos de los  vendedores en una misma columna y fecha de registro y que dia 
de la semana cuando se registraron*/

SELECT CONCAT(NOMBRE,' ',APELLIDOS) AS NOMBRE_COMPLETO , FEC_REG AS FECHA_REGISTRO, DAYOFWEEK(FEC_REG) AS DIA_DE_REGISTRO FROM VENDEDORES ;