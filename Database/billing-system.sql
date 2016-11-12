-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema billing-system
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `billing-system` ;

-- -----------------------------------------------------
-- Schema billing-system
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `billing-system` DEFAULT CHARACTER SET utf8 ;
USE `billing-system` ;

-- -----------------------------------------------------
-- Table `billing-system`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `billing-system`.`User` ;

CREATE TABLE IF NOT EXISTS `billing-system`.`User` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`email`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `billing-system`.`BillDocument`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `billing-system`.`BillDocument` ;

CREATE TABLE IF NOT EXISTS `billing-system`.`BillDocument` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `pdf` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `email`
    FOREIGN KEY (`email`)
    REFERENCES `billing-system`.`User` (`email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `email_idx` ON `billing-system`.`BillDocument` (`email` ASC);


-- -----------------------------------------------------
-- Table `billing-system`.`BillCriteria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `billing-system`.`BillCriteria` ;

CREATE TABLE IF NOT EXISTS `billing-system`.`BillCriteria` (
  `id` INT NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `format` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
