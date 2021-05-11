/*Sacar vendedores con jefes y nombre de jefes*/

select concat(ve2.nombre," " ,ve2.apellidos) as Vendedor, concat(ve1.nombre," ", ve1.apellidos) as Jefe_Inmediato from vendedores ve1  inner join vendedores ve2 on ve1.id=ve2.id_jefe  ;