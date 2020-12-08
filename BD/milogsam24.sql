create database milogsam24;
use milogsam24;

create table t_usuarios (id_usuario int auto_increment,
                         nombre varchar (255),
                         apellido varchar (255), 
                         email varchar (255), 
						 usuario varchar(255),
						 password varchar(255),
						 primary key(id_usuario)
						 );
                         
create table t_gastos   (id_gastos int PRIMARY KEY AUTO_INCREMENT,
                         concepto varchar (225),
                         cantidad int,
                         fecha date);