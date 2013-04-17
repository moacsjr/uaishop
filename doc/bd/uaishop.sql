SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `uaishop` ;
CREATE SCHEMA IF NOT EXISTS `uaishop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `uaishop` ;

-- -----------------------------------------------------
-- Table `uaishop`.`tipo_dados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`tipo_dados` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`tipo_dados` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`caracteristicas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`caracteristicas` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`caracteristicas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_dado_id` INT UNSIGNED NOT NULL ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_caracteristicas_tipo_dados_idx` (`tipo_dado_id` ASC) ,
  CONSTRAINT `fk_caracteristicas_tipo_dados`
    FOREIGN KEY (`tipo_dado_id` )
    REFERENCES `uaishop`.`tipo_dados` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`categorias` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`categorias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`classes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`classes` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`classes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `categoria_id` INT UNSIGNED NOT NULL ,
  `caracteristica_id` INT UNSIGNED NOT NULL ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_classes_caracteristicas1_idx` (`caracteristica_id` ASC) ,
  INDEX `fk_classes_categorias1_idx` (`categoria_id` ASC) ,
  CONSTRAINT `fk_classes_caracteristicas1`
    FOREIGN KEY (`caracteristica_id` )
    REFERENCES `uaishop`.`caracteristicas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_classes_categorias1`
    FOREIGN KEY (`categoria_id` )
    REFERENCES `uaishop`.`categorias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`marcas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`marcas` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`marcas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`produtos` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`produtos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `classe_id` INT UNSIGNED NOT NULL ,
  `marca_id` INT UNSIGNED NOT NULL ,
  `nome` VARCHAR(45) NULL ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_produtos_classes1_idx` (`classe_id` ASC) ,
  INDEX `fk_produtos_marcas1_idx` (`marca_id` ASC) ,
  CONSTRAINT `fk_produtos_classes1`
    FOREIGN KEY (`classe_id` )
    REFERENCES `uaishop`.`classes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtos_marcas1`
    FOREIGN KEY (`marca_id` )
    REFERENCES `uaishop`.`marcas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`valores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`valores` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`valores` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `caracteristica_id` INT UNSIGNED NOT NULL ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_valores_caracteristicas1_idx` (`caracteristica_id` ASC) ,
  CONSTRAINT `fk_valores_caracteristicas1`
    FOREIGN KEY (`caracteristica_id` )
    REFERENCES `uaishop`.`caracteristicas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uaishop`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `uaishop`.`users` ;

CREATE  TABLE IF NOT EXISTS `uaishop`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `role` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `uaishop` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
