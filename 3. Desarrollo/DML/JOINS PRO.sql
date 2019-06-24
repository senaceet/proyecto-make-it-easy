use MAKEITEASY;


/*1*/
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, Negocio, Valor_Compra, Fecha_Compra, Hora_Compra from usuario  
join factura as Fact on 
usuario.Id_usuario = Fact.Usuario_Id_Usuario
join Detalle_Factura on
Detalle_Factura.Id_Factura = Fact.Id_Factura
join producto on 
producto.Id_producto = Detalle_Factura.Id_producto;


/*2*/
Select Negocio, count(Negocio) as Producto_mas_vendido
from Detalle_Factura
inner join producto on
Detalle_Factura.Id_producto = producto.Id_producto;

/*3*/
SELECT primer_apellido, segundo_apellido, primer_nombre, segundo_nombre FROM usuario ORDER BY  primer_apellido ASC;

/*4*/
select count(Id_Usuario) 
as cant_usuario 
from usuario;

/*5*/
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, Valor_Compra
from usuario
join factura on
usuario.Id_usuario = Factura.Usuario_Id_Usuario
order by factura.Valor_Compra DESC;

/*6*/
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, Siglas 
from usuario 
inner join Tipo_Documento on Tipo_DocumentoId_Tipo_Documento = Tipo_Documento.Id_Tipo_Documento
where Siglas <> "CC";



/*7*/
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, Tipo_Pago 
from usuario
inner join Factura on factura.Usuario_ID_Usuario = usuario.ID_Usuario
inner join Tipo_Pago on Tipo_Pago.Id_TPago = factura.Tipo_PagoId_TPago;

/*8*/
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, count(Id_Factura)
from usuario
join Factura on
usuario.Id_Usuario = Factura.Usuario_Id_Usuario
group by usuario.Id_Usuario; 

/*9*/
select Negocio from producto;







