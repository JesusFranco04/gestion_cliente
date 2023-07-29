create database Gestion_clientes;
use Gestion_clientes;

CREATE TABLE `gestion_clientes`.`usuarios` (
  `id_usur` INT NOT NULL AUTO_INCREMENT,
  `usuario` TEXT NOT NULL,
  `contraseña` VARCHAR(500) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `telefono` INT(10) NOT NULL,
  `date_creation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usur`));
  

  
  CREATE TABLE `gestion_clientes`.`regis_cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `telefono` INT(10) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `operadora` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `direccion` VARCHAR(100) NOT NULL,
  `date_creation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_cliente`));
  


  CREATE TABLE `gestion_clientes`.`contacto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cedula` VARCHAR(50) NOT NULL,
  `nomape` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `operadora` VARCHAR(20) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  `date_creation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `gestion_clientes`.`administradores` (
  `id_admin` INT NOT NULL AUTO_INCREMENT,
  `usuario` TEXT NOT NULL,
  `contraseña` VARCHAR(500) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `date_creation` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_admin`));


INSERT INTO administradores (id_admin, usuario, contraseña, nombre, date_creation)
VALUES (1, 'admin@gmail.com', SHA2('gestioncliente', 512), 'jesus franco', NOW());





  