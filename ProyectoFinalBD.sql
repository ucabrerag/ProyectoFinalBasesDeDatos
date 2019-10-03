drop database proyectofinal;
create database proyectofinal;
use proyectofinal;


create table escalera(
pasos_escalera varchar(50),
precio_esc int,
cantidad_esc_disponible int,
constraint pkescalera primary key (pasos_escalera)
);

insert into escalera values
("10 P", 8, 100),
("12 P", 8, 100),
("14 P", 8, 100),
("16 P", 8, 100);
				
create table canasto(
peso_canasto varchar(50),
precio_can int,
cantidad_can_disponible int,
constraint pkcanasto primary key (peso_canasto)
);

insert into canasto values
("40 KG", 8, 100),
("50 KG", 8, 100),
("60 KG", 8, 100);



create table cuadrilla (
id_cuadrilla int auto_increment,
lider varchar(50) not null,
personas int,
pasos_escalera1 varchar(50),
cantidad_escaleras int,
peso_canasto1 varchar(50),
cantidad_canastos int,
total_pagar int,
fecha_salida varchar(50),
hora_salida varchar(50), 
escaleras_danadas int,
canastos_danados int,
constraint pkcuadrilla primary key (id_cuadrilla),
constraint fkesc foreign key (pasos_escalera1) references escalera (pasos_escalera),
constraint fkcan foreign key (peso_canasto1) references canasto (peso_canasto)
);

create table balance(
registro int,
mes varchar(50)
);


                        
				


create table empleado (
id_empleado int auto_increment,
nombre_empleado varchar(50) not null,
telefono_empleado long,
direccion_empleado varchar(50),
mes_trabajado varchar(50),
dias_trabajados_mes int,
seguridad_social varchar(50),
salario_diario int,
constraint pkempleado primary key (id_empleado)
);


insert into empleado values
(1, "Alejandro Cabrera", 2211890854, "Gabino González #23 Col. La Unión", "Mayo", 20, "1829340594", 200),
(2, "Carlos Rodriguez", 7658391483, "Guadalajara #5 Col. Heroica", "Febrero", 10, "9128324053", 300),
(3, "Oscar Vergara", 9923439832, "19 Sur #2720 Col. Los Volcanes", "Marzo", 5, "0193842345",200);



create table proveedores (
id_proveedor int auto_increment,
nombre_proveedor varchar(50),
telefono_proveedor long,
tipo_herramienta varchar(50),
constraint pkprov primary key (id_proveedor)

);

insert into proveedores values
(1, "Rodriguez SA de CV", 7658129834, "Escalera"),
(2, "Alamo Inc.", 7828430923, "Canasto");

insert into proveedores values 
(5, "DulceAndUli INC", 2221906441, "Escalera"),
(6, "SONY", 2464635354, "Canasto"),
(7, "HAAGEN DASZ", 7658129832, "Escalera"),
(8, "WD-40", 7828430913, "Canasto");


