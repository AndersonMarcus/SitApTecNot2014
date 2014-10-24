SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sitap` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sitap` ;

-- -----------------------------------------------------
-- Table `sitap`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`Usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `senha` VARCHAR(12) NULL,
  `endereco` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `foto` VARCHAR(45) NULL,
  `dtNascmento` DATE NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `celular` VARCHAR(45) NULL,
  `dtCriacao` DATETIME NULL,
  `dtAtualizacao` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitap`.`Noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`Noticia` (
  `titulo` VARCHAR(45) NULL,
  `texto` TEXT NULL,
  `dtCriacao` VARCHAR(45) NULL,
  `idnoticia` DATETIME NOT NULL,
  `dtatualizacao` DATETIME NULL,
  `positivo` INT NULL,
  `negativo` INT NULL,
  `idusuario` INT NOT NULL,
  PRIMARY KEY (`idnoticia`),
  INDEX `fk_Noticia_Usuario1_idx` (`idusuario` ASC),
  CONSTRAINT `fk_Noticia_Usuario1`
    FOREIGN KEY (`idusuario`)
    REFERENCES `sitap`.`Usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitap`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`Categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitap`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitap`.`Comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`Comentario` (
  `idcomentario` TEXT NOT NULL,
  `dtcriacao` DATETIME NULL,
  `dtatualizacao` DATETIME NULL,
  `positivo` VARCHAR(45) NULL,
  `negativo` VARCHAR(45) NULL,
  `comentario` TEXT NULL,
  `idusuario` INT NOT NULL,
  PRIMARY KEY (`idcomentario`),
  INDEX `fk_Comentario_Usuario1_idx` (`idusuario` ASC),
  CONSTRAINT `fk_Comentario_Usuario1`
    FOREIGN KEY (`idusuario`)
    REFERENCES `sitap`.`Usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitap`.`Categoria_tem_Noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`Categoria_tem_Noticia` (
  `idcategoria` INT NOT NULL,
  `idnoticia` INT NOT NULL,
  PRIMARY KEY (`idcategoria`, `idnoticia`),
  INDEX `fk_Categoria_has_Artigo_Artigo1_idx` (`idnoticia` ASC),
  INDEX `fk_Categoria_has_Artigo_Categoria1_idx` (`idcategoria` ASC),
  CONSTRAINT `fk_Categoria_has_Artigo_Categoria1`
    FOREIGN KEY (`idcategoria`)
    REFERENCES `sitap`.`Categoria` (`idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Categoria_has_Artigo_Artigo1`
    FOREIGN KEY (`idnoticia`)
    REFERENCES `sitap`.`Noticia` (`idnoticia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sitap`.`Foto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sitap`.`Foto` (
  `idfoto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `url` VARCHAR(45) NULL,
  `Noticia_data` DATE NOT NULL,
  PRIMARY KEY (`idfoto`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
