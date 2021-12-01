CREATE DATABASE productos;

CREATE TABLE IF NOT EXISTS `productos`.`Productos` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `referencia` VARCHAR(45) NOT NULL,
  `precio` INT NOT NULL,
  `peso` INT NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `stock` INT NOT NULL,
  `fechaCreacion` DATE NOT NULL,
  `fechaUltVenta` DATE NOT NULL);


