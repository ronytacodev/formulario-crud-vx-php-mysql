create database formulario_crud_vx;
use formulario_crud_vx;

create table usuario(
  codigo int auto_increment primary key,
  nombre varchar(50),
  apellido varchar(50),
  correo varchar(50),
  dni int(8)
);

INSERT INTO usuario(nombre, apellido, correo, dni) VALUES 
('Roger','Torres','roger.torres@gmail.com','73435910'),
('Luis','Perez','luis.perez@gmail.com','73435911'),
('Maria','Jimenez','maria.jimenez@gmail.com','73435912')