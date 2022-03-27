create database login_register_db;
use login_register_db;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Estructura de tabla para la tabla `cargo`
--

 CREATE TABLE cargo (
 id_cargo int not null primary key,
 nombre_cargo varchar (20)
 );
 
 
 --
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE usuarios(
  id_usuarios int   primary key auto_increment,
  nombre varchar (45)  NOT NULL,
  apellidos varchar (45)  NOT NULL,
  correo varchar(45)  NOT NULL,
  usuario varchar(45)  NOT NULL,
  contraseña varchar (45) NOT NULL,
  cargoid int,
  foreign key (cargoid) references cargo (id_cargo)
);
  

 
--
-- Estructura de tabla para la tabla `carrito`
--
CREATE TABLE carrito (
id_carrito int primary key,
cantidad_produc varchar (45),
subtotal_produc float (45),
usuarioid int,
foreign key (usuarioid) references usuarios (id_usuarios)
);

-- Estructura de tabla para la tabla `transporte`
--
CREATE TABLE transporte (
id_transporte int primary key,
nombre_conductor varchar (45)
);

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE factura (
  Id_factura int primary key auto_increment,
  fecha DATETIME,
  carritoid int,
  idtransporte int,
  FOREIGN KEY (carritoid) references carrito (id_carrito),
    FOREIGN KEY (idtransporte) references transporte (id_transporte)
);
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE productos (
  id_porducto int(20) NOT NULL,
  Nombre varchar(20) NOT NULL,
  precio int(10) NOT NULL,
  categoria varchar(20) NOT NULL
);

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE proveedores (
  Id_prove int(20) NOT NULL,
  Nombre varchar(20) NOT NULL,
  telefono int(15) NOT NULL,
  dirección varchar(25) NOT NULL
);


select*from usuarios;
select*from cargo;

insert into cargo (id_cargo,nombre_cargo)
values ("1", "administrador");
insert into cargo (id_cargo,nombre_cargo)
values ("2", "cliente");
insert into cargo (id_cargo,nombre_cargo)
values ("3", "empleado");

INSERT INTO usuarios (nombre, apellidos, correo, usuario, contraseña, cargoid) 
VALUES ('hayder', 'arenas', 'hayder@gmail.com', 'hayder', 'hayder123', '2');

INSERT INTO usuarios (nombre, apellidos, correo, usuario, contraseña, cargoid) 
VALUES ('santiago', 'ladino', 'santiago@gmail.com', 'santiago', 'santiago123', '2');

INSERT INTO usuarios (nombre, apellidos, correo, usuario, contraseña, cargoid) 
VALUES ('alex', 'arenas', 'arbey@gmail.com', 'arbey', 'alex123', '1');

show tables;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
