-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: bdhappybaby
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `contacto_ID` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `mensaje` varchar(300) DEFAULT NULL,
  `tipoUsuario_ID` int DEFAULT NULL,
  PRIMARY KEY (`contacto_ID`),
  KEY `tipoUsuario_ID` (`tipoUsuario_ID`),
  CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`tipoUsuario_ID`) REFERENCES `tipousuario` (`tipoUsuario_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (1,'Juan','Pérez','juan.perez@example.com','555-1234','Interesado en servicios',2),(2,'María','García','maria.garcia@example.com','555-5678','Consulta sobre precios',2),(3,'Carlos','López','carlos.lopez@example.com','555-8765','Problema con un pedido',2),(4,'Ana','Martínez','ana.martinez@example.com','555-4321','Consulta técnica',2),(5,'Luis','Hernández','luis.hernandez@example.com','555-6789','Propuesta de colaboración',2),(6,'wewe','sdsd','artu2264@gmail.com','929292929','wwdww',2),(7,'diego','qwq','artu2264@gmail.com','929292929','ere',NULL),(8,'diego','wwee','artu2264@gmail.com','929292929','wewew',NULL),(9,'qqqqqqqqq','qqqqqqqqqq','wwwwwww@sd','3333333333','sdsd',NULL),(10,'DIEGO ','MARTINEZ','DM@GFFGF','999999999','ASAS',NULL),(11,'AAAAAAAAAAAAAAAAA','AAAAAAAAAAAAA','aaaaaaaaaaaaaaaaaaaa@S','122222','11111',NULL);
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-08 12:04:04
