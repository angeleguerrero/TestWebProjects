/*Listar todos los vendedores, mostrar nombres sin apellidos y dias de registro en consesionario*/

select nombre , datediff(curdate(), fec_reg) as Dias_en_Empresa from vendedores;