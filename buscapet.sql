/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 11.1.0-MariaDB : Database - buscapet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`buscapet` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `buscapet`;

/*Table structure for table `anuncio_adocao` */

DROP TABLE IF EXISTS `anuncio_adocao`;

CREATE TABLE `anuncio_adocao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `especie` varchar(80) NOT NULL,
  `raca` varchar(80) NOT NULL,
  `sexo` varchar(80) NOT NULL,
  `raiva_vacinado_em` date NOT NULL,
  `cor` varchar(80) NOT NULL,
  `tamanho` varchar(80) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `observacoes` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_anuncio_adocao` (`id_usuario`),
  CONSTRAINT `fk_usuario_anuncio_adocao` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `anuncio_adocao` */

insert  into `anuncio_adocao`(`id`,`especie`,`raca`,`sexo`,`raiva_vacinado_em`,`cor`,`tamanho`,`data_de_nascimento`,`observacoes`,`id_usuario`) values 
(1,cachorro,vira- lata ,macho,2023-08-24,caramelo,grande ,2023-08-24,docil e gentil,3),
(2,gato,radgoll,femea,2023-08-24,branco amarronzado,medio,2023-08-24,gentil e amavel,3),
(3,cachorro,vira- lata,femea,2023-08-24,preta ,grande ,2023-08-24,tranquilo,3),
(4,gato,radgoll,macho,2023-08-24,branco com listras laranjas ,pequeno,2023-08-24,amigavel,3),
(5,cachorro,vira-lata,macho ,2023-08-24,branco com laranja,medio,2023-08-24,prestativo,3),
(6,gato,radgoll,femea,2023-08-24,ruiva,pequeno,2023-08-24,amigavel,3);

/*Table structure for table `foto_anuncios` */

DROP TABLE IF EXISTS `foto_anuncios`;

CREATE TABLE `foto_anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(200) NOT NULL,
  `id_anuncio_adocao` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_anuncio_adocao_foto_anuncios` (`id_anuncio_adocao`),
  CONSTRAINT `fk_anuncio_adocao_foto_anuncios` FOREIGN KEY (`id_anuncio_adocao`) REFERENCES `anuncio_adocao` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `foto_anuncios` */

insert  into `foto_anuncios`(`id`,`imagem`,`id_anuncio_adocao`) values 
(3,/imagens/1cachorro.png,1),
(5,/imagens/2gato.png,2),
(6,/imagens/3cachorro.png,3),
(7,/imagens/4gato.png,4),
(8,/imagens/5cachorro.png,5),
(9,/imagens/6gato.png,6);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,2023_05_18_133635_buscapet,1);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nome`,`login`,`senha`) values 
(3,aline ,aline,aline);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
