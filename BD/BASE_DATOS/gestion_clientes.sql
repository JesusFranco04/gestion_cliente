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
  `new_tablecol` DATE NOT NULL,
  PRIMARY KEY (`id_usur`));
  
  select * from usuarios;
