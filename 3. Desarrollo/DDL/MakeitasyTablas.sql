create database MAKEITEASY1;
use MAKEITEASY1;



CREATE TABLE Tipo_Documento (
Id_Tipo_Documento int(5) NOT NULL AUTO_INCREMENT, 
Siglas varchar(5) NOT NULL, 
Descripcion varchar(25) NOT NULL, 
PRIMARY KEY (Id_Tipo_Documento));


CREATE TABLE Tipo_Pago (
Id_TPago int(5) NOT NULL AUTO_INCREMENT, 
Tipo_Pago varchar(5) NOT NULL, 
PRIMARY KEY (Id_TPago));

alter table Tipo_Pago modify Tipo_Pago varchar(25);


CREATE TABLE Efectivo (
Id_Efectivo int(10) NOT NULL, 
Valor_Producto int(15) NOT NULL, 
Id_TPago int(5) NOT NULL, 
PRIMARY KEY (Id_Efectivo, Id_TPago));


CREATE TABLE Tarjeta_Credito (
Id_Tarjeta_Credito int(5) NOT NULL, 
Titular_Tarjeta_Credito varchar(25) NOT NULL, 
Numero_Tarjeta varchar(15) NOT NULL, 
Id_TPago int(5) NOT NULL, 
PRIMARY KEY (Id_Tarjeta_Credito, Id_TPago));



CREATE TABLE Tarjeta_Debito (
Id_Tarjeta_Debito int(5) NOT NULL, 
Titular_Tarjeta_Debito varchar(25) NOT NULL, 
Numero_Tarjeta varchar(15) NOT NULL, 
Id_TPago int(5) NOT NULL, 
PRIMARY KEY (Id_Tarjeta_Debito, Id_TPago));


CREATE TABLE Producto (
Id_Producto int(5) NOT NULL, 
Almacenamiento varchar(15) NOT NULL, 
Negocio varchar(300) NOT NULL,
Tipo_Diseño varchar(300) NOT NULL, 
Bases_Datos boolean NULL, 
Mantenimiento_Sitio boolean NULL, 
Observaciones varchar(300) NOT NULL, 
Cantidad_Producto int(15) NOT NULL, 
PRIMARY KEY (Id_Producto));


CREATE TABLE Rol (
Id_Rol int(5) NOT NULL AUTO_INCREMENT,
Nombre_Rol varchar(15) NOT NULL, 
PRIMARY KEY (Id_Rol));



CREATE TABLE Usuario (
Id_Usuario int(5) not null,
Numero_Documento varchar(15) NOT NULL, 
Primer_Nombre varchar(10) NOT NULL, 
Segundo_Nombre varchar(10), 
Primer_Apellido varchar(10) NOT NULL, 
Segundo_Apellido varchar(10), 
Fecha_Nacimiento date NOT NULL, 
Edad int(10) NOT NULL, 
Correo varchar(25) NOT NULL UNIQUE, 
Contraseña varchar(10) NOT NULL, 
Tipo_DocumentoId_Tipo_Documento int(5) NOT NULL, 
RolId_Rol int(5) NOT NULL, 
PRIMARY KEY (Id_Usuario, Tipo_DocumentoId_Tipo_Documento, RolId_Rol));


CREATE TABLE Factura (
Id_Factura int(5) NOT NULL AUTO_INCREMENT, 
Fecha_Compra date NOT NULL, 
Hora_Compra time NOT NULL, 
Valor_Compra int(10) NOT NULL,
Tipo_PagoId_TPago int(5) NOT NULL,
Usuario_Id_Usuario int(5) NOT NULL,
PRIMARY KEY (Id_Factura, Usuario_Id_Usuario),

CONSTRAINT fk_Factura_usuario
FOREIGN KEY (Usuario_Id_Usuario)
REFERENCES usuario(Id_Usuario));



CREATE TABLE Detalle_Factura (
IdFacturaDetalle int(5) NOT NULL auto_increment,
Id_Factura int(5) NOT NULL, 
Id_Producto int(5) NOT NULL,
PRIMARY KEY (IdFacturaDetalle, Id_Producto),

CONSTRAINT fk_Detalle_Factura_Id_Factura
FOREIGN KEY (Id_Factura)
REFERENCES Factura(Id_Factura),

CONSTRAINT fk_Detalle_Factura_Id_Producto
FOREIGN KEY (Id_Producto)
REFERENCES Producto(Id_Producto));

 

ALTER TABLE Usuario
ADD CONSTRAINT FKUsuario418937 
FOREIGN KEY (Tipo_DocumentoId_Tipo_Documento) 
REFERENCES Tipo_Documento (Id_Tipo_Documento);


ALTER TABLE Usuario 
ADD CONSTRAINT FKUsuario467782 
FOREIGN KEY (RolId_Rol) 
REFERENCES Rol (Id_Rol);


ALTER TABLE Tarjeta_Debito 
ADD CONSTRAINT FKTarjeta_De730092 
FOREIGN KEY (Id_TPago) 
REFERENCES Tipo_Pago (Id_TPago);


ALTER TABLE Tarjeta_Credito 
ADD CONSTRAINT FKTarjeta_Cr763937 
FOREIGN KEY (Id_TPago) 
REFERENCES Tipo_Pago (Id_TPago);


ALTER TABLE Efectivo 
ADD CONSTRAINT FKEfectivo126614 
FOREIGN KEY (Id_TPago) 
REFERENCES Tipo_Pago (Id_TPago);



ALTER TABLE Factura 
ADD CONSTRAINT FKFactura798179 
FOREIGN KEY (Tipo_PagoId_TPago) 
REFERENCES Tipo_Pago (Id_TPago);



