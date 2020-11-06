-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cadastro_informa
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `cadastro_informa` ;

-- -----------------------------------------------------
-- Schema cadastro_informa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cadastro_informa` DEFAULT CHARACTER SET utf8 ;
USE `cadastro_informa` ;

-- -----------------------------------------------------
-- Table `cadastro_informa`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cadastro_informa`.`marca` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cadastro_informa`.`modelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cadastro_informa`.`modelo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(45) NULL,
  `ano` YEAR NOT NULL,
  `memoria` INT NULL,
  `nacionalidade` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `cadastro_informa`.`marca`
-- -----------------------------------------------------
START TRANSACTION;
USE `cadastro_informa`;
INSERT INTO `cadastro_informa`.`marca` (`id`, `marca`) VALUES (DEFAULT, 'Sansung');

COMMIT;


-- -----------------------------------------------------
-- Data for table `cadastro_informa`.`modelo`
-- -----------------------------------------------------
START TRANSACTION;
USE `cadastro_informa`;
INSERT INTO `cadastro_informa`.`modelo` (`id`, `modelo`, `ano`, `memoria`, `nacionalidade`) VALUES (DEFAULT, 'A10s', 2020, 64, 'nacional');

COMMIT;

