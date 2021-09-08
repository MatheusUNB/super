CREATE DATABASE super;
USE super;

CREATE TABLE `super`.`contato` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `mci` INT NOT NULL,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));