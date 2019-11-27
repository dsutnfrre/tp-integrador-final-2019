-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: registrar_Llamada
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` smallint(4) NOT NULL AUTO_INCREMENT,
  `nombre_apellido` varchar(60) NOT NULL,
  `dni` int(8) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `dni` (`dni`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `llamadas` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Duarte Ezequiel',129405123,'432555676','asd@gmail.com','juanirro 123'),(3,'Messi',345233345,'309450935','messi@gmail.com','barcelona 1221'),(4,'Oscar',54894598,'239849','jonas@gmail.com','dulce 344'),(6,'Jose',54894598,'456667','asd@gmail.com','popo de perro 123'),(7,'gomez',123456789,'12355566','asd@gmail.com','popo de perro 456'),(8,'gomez',123456789,'21543455','asd@gmail.com','popo de perro 456'),(9,'gomez',123456789,'32545','asd@gmail.com','popo de perro 456'),(10,'gomez',123456789,'2342355','asd@gmail.com','popo de perro 456'),(11,'gomez',123456789,'34234234','asd@gmail.com','popo de perro 456');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inicio_sesion`
--

DROP TABLE IF EXISTS `inicio_sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inicio_sesion` (
  `id_sesion` smallint(4) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_sesion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inicio_sesion`
--

LOCK TABLES `inicio_sesion` WRITE;
/*!40000 ALTER TABLE `inicio_sesion` DISABLE KEYS */;
INSERT INTO `inicio_sesion` VALUES (1,'exequiel86','123456'),(2,'dario778','abcde');
/*!40000 ALTER TABLE `inicio_sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `llamadas`
--

DROP TABLE IF EXISTS `llamadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `llamadas` (
  `id_llamada` smallint(4) NOT NULL AUTO_INCREMENT,
  `dni` int(8) NOT NULL,
  `duracion_llamada` smallint(3) NOT NULL,
  `motivo` varchar(300) DEFAULT NULL,
  `fecha_llamada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_llamada`),
  KEY `idx_dni_llamada` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `llamadas`
--

LOCK TABLES `llamadas` WRITE;
/*!40000 ALTER TABLE `llamadas` DISABLE KEYS */;
INSERT INTO `llamadas` VALUES (1,129405123,5,'nose, vino asi de fabrica xD','2019-11-27 06:10:32'),(2,129405123,5,'nose, vino asi de fabrica xD','2019-11-27 06:13:28'),(3,129405123,5,'nose, vino asi de fabrica xD','2019-11-27 06:21:56'),(4,345233345,23,'No sabe porque no gana en la seleccion xD','2019-11-27 06:30:31'),(5,345233345,23,'No sabe porque no gana en la seleccion xD','2019-11-27 06:33:32'),(6,54894598,322,'se equivoco de numero jajas','2019-11-27 06:38:21'),(8,54894598,23,'algo','2019-11-27 10:34:32'),(9,123456789,322,'no entendi','2019-11-27 10:37:59'),(10,123456789,23,'asdggg','2019-11-27 11:26:22'),(11,123456789,322,'sdfsdfsdf','2019-11-27 11:27:19'),(12,123456789,5,'asdasdf','2019-11-27 11:46:06'),(13,123456789,23,'asdasdasd','2019-11-27 11:46:42');
/*!40000 ALTER TABLE `llamadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `usuario` varchar(30) DEFAULT NULL,
  `fechaingreso` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idlogin` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('exequiel86',NULL,1),('demo','2019-11-27 04:54:48',2),('exequiel86','2019-11-27 04:55:20',3);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-27 11:32:14
