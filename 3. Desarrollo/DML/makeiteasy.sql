create database MAKEITEASY;
use MAKEITEASY;


CREATE TABLE Tipo_Documento (
Id_Tipo_Documento int(5) NOT NULL, 
Siglas varchar(5) NOT NULL, 
Descripcion varchar(25) NOT NULL, 
PRIMARY KEY (Id_Tipo_Documento));

/*Datos*/

insert into Tipo_Documento (Id_Tipo_Documento, Siglas, Descripcion)
values (01, 'CC', 'Cedula de Ciudadania'),
(02, 'CE', 'Cedula de Extranjeria'),
(03, 'PA', 'Pasaporte');



CREATE TABLE Tipo_Pago (
Id_TPago int(5) NOT NULL AUTO_INCREMENT, 
Tipo_Pago varchar(5) NOT NULL, 
PRIMARY KEY (Id_TPago));

alter table Tipo_Pago modify Tipo_Pago varchar(25);

/*Datos*/

insert into Tipo_Pago (Id_TPago, Tipo_Pago)
values (10, 'Efectivo'),
(11, 'Tarjeta Debito'),
(12, 'Tarjeta Credito');

CREATE TABLE Efectivo (
Id_Efectivo int(10) NOT NULL, 
Valor_Producto int(15) NOT NULL, 
Id_TPago int(5) NOT NULL, 
PRIMARY KEY (Id_Efectivo, Id_TPago));

/*Datos*/

insert into Efectivo (Id_Efectivo, Valor_Producto, Id_TPago)
values (20, 1200000, 10),
(21, 1400000, 10),
(22, 1500000, 10),
(23, 1100000, 10),
(24, 1800000, 10);


CREATE TABLE Tarjeta_Credito (
Id_Tarjeta_Credito int(5) NOT NULL, 
Titular_Tarjeta_Credito varchar(25) NOT NULL, 
Numero_Tarjeta varchar(15) NOT NULL, 
Id_TPago int(5) NOT NULL, 
PRIMARY KEY (Id_Tarjeta_Credito, Id_TPago));


/*Datos*/

insert into Tarjeta_Credito (Id_Tarjeta_Credito, Titular_Tarjeta_Credito, Numero_Tarjeta, Id_TPago)
values (30, 'Maria Camila Rojas Rojas', '1234567654', 12),
(31, 'Rodolfo Benites Roa', '2342135687', 12),
(32, 'Paula Carolina Perez', '9867542356', 12),
(33, 'Kevin Raul Santa Nieto', '5432123456', 12),
(34, 'Carlos Suarez Perez', '7645883212', 12);



CREATE TABLE Tarjeta_Debito (
Id_Tarjeta_Debito int(5) NOT NULL, 
Titular_Tarjeta_Debito varchar(25) NOT NULL, 
Numero_Tarjeta varchar(15) NOT NULL, 
Id_TPago int(5) NOT NULL, 
PRIMARY KEY (Id_Tarjeta_Debito, Id_TPago));

/*Datos*/

insert into Tarjeta_Debito (Id_Tarjeta_Debito, Titular_Tarjeta_Debito, Numero_Tarjeta, Id_TPago)
values (40, 'Pablo Andres Perez Rojas', '4567864987', 11),
(41, 'Marlon Cardenas Cardenas', '2009812345', 11),
(42, 'Susana Sandoval Tellez', '1212345676', 11),
(43, 'Andres Felipe Santa Soto', '2345543212', 11),
(44, 'Juan Castro Mendez', '1000076543', 11);



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

/*Datos*/

insert into Producto (Id_Producto, Almacenamiento, Negocio, Tipo_Diseño, Bases_Datos, Mantenimiento_Sitio, Observaciones, Cantidad_Producto)
values (50, '3GB', 'Lavanderia', 'Adaptativo', 'False', 'True', 'Ninguna', 1),
(51, '5GB', 'Venta de Ropa', 'Responsivo', 'True', 'True', 'Agregar mas detalles', 1),
(52, '7GB', 'Venta de Zapatos', 'Adaptativo', 'False', 'True', 'Ninguna', 1),
(53, '4GB', 'Venta de Accesorios', 'Responsivo', 'True', 'True','Mantenimiento en un mes',1),
(54, '6GB', 'Venta de Comida', 'Adaptativo', 'False', 'False','Ninguna', 1);



CREATE TABLE Rol (
Id_Rol int(5) NOT NULL AUTO_INCREMENT,
Nombre_Rol varchar(15) NOT NULL, 
PRIMARY KEY (Id_Rol));

/*Datos*/

insert into Rol (Id_Rol, Nombre_Rol)
values (80, 'Administrador'),
(81, 'Usuario');


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

/*Datos*/

insert into Usuario (Id_Usuario, Numero_Documento, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Fecha_Nacimiento, Edad, Correo, Contraseña, Tipo_DocumentoId_Tipo_Documento, RolId_Rol)
values (100, '1019134572', 'Andrea', 'Carolina', 'Gil', 'Maladonado', '1997-10-31', 21, 'caro.gil@gmail.com', 'Caro0009', 01, 81),
(101, '101913', 'Andre', 'Stiven', 'Gomez', 'Martinez', '1987-11-30', 31, 'Stive23@gmail.com', 'Magodeoz01', 02, 81),
(102, '1045674572', 'Mauricio', 'Antonio', 'Parra', 'Ortiz', '1982-10-31', 37, 'Mauro3133@gmail.com', 'Zaraki990', 01, 81),
(103, '675423', 'Pedro', 'Andres', 'Torres', 'Andrade', '1993-05-13', 26, 'pedro.torres@hotmail.com', 'Pedri2309', 02, 81),
(104, '7654234567', 'Santiago', 'Andres', 'Pulido', '', '1998-08-23', 20, 'andre34@hotmail.com', 'Andrew12', 01, 81),
(105, '5675435324', 'Ludy', 'Stella', 'Ortiz', 'Velazco', '1995-12-24', 23, 'ortilus@gmail.com', 'Acrania09', 01, 81),
(106, 'CO191345', 'Julian', 'Andrey', 'Ovalle', 'Perez', '1987-06-11', 32, 'julian.ovalle@gmail.com', 'Aura1234', 03, 81),
(107, '897654', 'Juan', 'Augusto', 'Aguilera', 'Roa', '1984-03-21', 35, 'ja.aguilera@gmail.com', 'Aguilju9', 02, 81),
(108, '2345678765', 'Cecilia', 'Patricia', 'Cortez', 'Montez', '1992-11-30', 27, 'Patico@gmail.com', 'Contelo07', 01, 81),
(109, 'JY134572', 'Rafael', 'Antonio', 'Vivas', 'Roa', '1980-03-13', 39, 'vivasror@hotmail.com', 'Oleachi09', 03, 81),
(110, '2789878900', 'Paula', 'Carolina', 'Vega', 'Rojas', '1977-10-02', 42, 'roapao1@gmail.com', 'Patiuma98', 01, 81),
(111, '231234', 'Adrian', 'Camilo', 'Gonzalez', 'Martinez', '1990-01-31', 29, 'adri.gonza@hotmail.com', 'Adrian2312', 02, 81),
(112, '7898672351', 'Miguel', 'Angel', 'Ardila', 'Ardila', '1990-05-23', 29, 'migue34@gmail.com', 'Carito89', 01, 81),
(113, '8978096728', 'Cristian', 'Stiven', 'Gomez', 'Beltran', '1989-07-12', 30, 'Stivensgo@hotmail.com', 'Martiniu67', 01, 81),
(114, '109876', 'Antonia', 'Carolina', 'Ortiz', 'Rojas', '1997-10-31', 21, 'antoniaortiz@gmail.com', 'Antonia10', 02, 81);


CREATE TABLE Factura (
Id_Factura int(5) NOT NULL AUTO_INCREMENT, 
Fecha_Compra date NOT NULL, 
Hora_Compra time NOT NULL, 
Valor_Compra int(10) NOT NULL,
Tipo_PagoId_TPago int(5) NOT NULL,
Usuario_Id_Usuario int(5) NOT NULL,
Usuario_Id_producto int(5) NOT NULL,
PRIMARY KEY (Id_Factura, Usuario_Id_Usuario),

CONSTRAINT fk_Factura_usuario
FOREIGN KEY (Usuario_Id_Usuario)
REFERENCES usuario(Id_Usuario),

CONSTRAINT fk_Factura_producto
FOREIGN KEY (Usuario_Id_producto)
REFERENCES producto(Id_producto));


/*Datos*/

insert into Factura (Id_Factura,  Usuario_Id_Usuario, Fecha_Compra, Hora_Compra, Valor_Compra, Usuario_Id_producto, Tipo_PagoId_TPago)
values (60, 100, '2019-04-23', '11:23:17', 1300000, 50, 10),
(61, 101, '2019-05-15', '14:45:56', 1500000, 51, 11),
(62, 102, '2019-06-02', '10:24:43', 1800000, 52, 12),
(63, 103, '2019-03-26', '09:20:34', 1250000, 53, 11),
(64, 104, '2019-05-11', '16:26:20', 1550000, 54, 10),
(65, 105, '2019-04-20', '12:23:17', 1300000, 50, 11),
(66, 106, '2019-05-15', '14:45:56', 1500000, 51, 11),
(67, 107, '2019-03-02', '10:24:43', 1800000, 50, 12),
(68, 108, '2019-03-26', '09:20:34', 1250000, 54, 12),
(69, 109, '2019-05-11', '13:26:20', 1750000, 52, 10),
(70, 110, '2019-04-25', '17:23:17', 1320000, 53, 12),
(71, 111, '2019-05-15', '14:45:56', 1500000, 51, 11),
(72, 112, '2019-06-02', '10:24:43', 1800000, 52, 12),
(73, 113, '2019-03-26', '09:20:34', 130000, 53, 11),
(74, 114, '2019-05-11', '14:26:20', 1650000, 52, 10);


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

insert into Detalle_Factura (Id_Factura, Id_Producto)
values ( 60, 50),
( 61, 51),
( 62, 52),
( 63, 53),
( 64, 54);
 

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


