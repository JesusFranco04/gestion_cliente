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
  
  select * from usuarios;
  
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
  
  select * from regis_cliente;
