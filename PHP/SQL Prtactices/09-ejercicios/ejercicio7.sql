/*Nombre y apellido de los vendedores en misma columna, fecha de registro y dia de la semana en que se 
registraron*/


SELECT CONCAT(NOMBRE,' ',APELLIDOS) AS NOMBRE_COMPLETO ,FEC_REG, DAYNAME(FEC_REG) FROM VENDEDORES;