-- MySQL Script generated by MySQL Workbench
-- 09/01/15 22:03:24
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`laboratorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`laboratorio` (
  `idlaboratorio` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `apellido` VARCHAR(45) NULL COMMENT '',
  `rut` INT NULL COMMENT '',
  PRIMARY KEY (`idlaboratorio`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`profesor` (
  `idprofesor` INT NOT NULL COMMENT '',
  `laboratorio_idlaboratorio` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idprofesor`)  COMMENT '',
  INDEX `fk_profesor_laboratorio1_idx` (`laboratorio_idlaboratorio` ASC)  COMMENT '',
  CONSTRAINT `fk_profesor_laboratorio1`
    FOREIGN KEY (`laboratorio_idlaboratorio`)
    REFERENCES `mydb`.`laboratorio` (`idlaboratorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`paciente` (
  `rut` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `apellido` VARCHAR(45) NULL COMMENT '',
  `profesor_idprofesor` INT NOT NULL COMMENT '',
  PRIMARY KEY (`rut`)  COMMENT '',
  INDEX `fk_paciente_profesor_idx` (`profesor_idprofesor` ASC)  COMMENT '',
  CONSTRAINT `fk_paciente_profesor`
    FOREIGN KEY (`profesor_idprofesor`)
    REFERENCES `mydb`.`profesor` (`idprofesor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`anamnesis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`anamnesis` (
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;