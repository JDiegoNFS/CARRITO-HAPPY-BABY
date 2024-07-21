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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `usuario_ID` int NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(50) NOT NULL DEFAULT '',
  `celular` int unsigned NOT NULL,
  `correo` varchar(100) NOT NULL DEFAULT '',
  `provincia` varchar(50) NOT NULL DEFAULT '',
  `distrito` varchar(50) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL DEFAULT '',
  `tipoUsuario_ID` int DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`usuario_ID`),
  KEY `tipoUsuario_ID` (`tipoUsuario_ID`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipoUsuario_ID`) REFERENCES `tipousuario` (`tipoUsuario_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (54,'Diego Roldan',959595959,'diego@gmail.com','ewe','wewe','ewew',1,''),(57,'sasas',959595966,'diego2024@gmail.com','wewe','we','as',1,''),(59,'Juan Pérez',987654321,'juan@example.com','Lima','Miraflores','Av. Larco 123',1,''),(60,'Juaaaan Pérez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',2,''),(61,'Juaaaan Pérez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',1,''),(62,'Juaaaan Pérez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',2,''),(63,'Juaaaan Pérez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',1,''),(65,'Juaaaan Pérez lopez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',1,''),(66,'Juaaaan Pérez dededededed',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',2,''),(67,'Juaaaan Pérez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',1,''),(68,'Juaaaan Pérez',98744321,'juan@example.com','Lima','Miraflores','Av. sssss 123',2,''),(69,'fffff Pérez gomez',98744321,'dfd@example.com','Lima','Miraflores','Av. sssss 123',1,''),(70,'adas',959595959,'diego2024@gmail.com','wewe','we','we',1,''),(71,'root',950548785,'artu226S4@gmail.com','sas','asas','s',NULL,'0412'),(72,'root',950548785,'artu226S4@gmail.com','sas','asas','s',NULL,'0412'),(73,'root',920616484,'asasa@utp','asa','sasa','das',NULL,'0412'),(74,'root',962658418,'asa@utp.com','sas','asas','asas',NULL,'0412'),(75,'root',920616484,'asasa@utpsss','Lima','asas','asasa',NULL,'0412'),(76,'root',920615655,'artu226S4@gmail.com','Lima','asas','lima',NULL,'0412'),(77,'root',878787875,'f@utp','dsd','sds','sds',NULL,'0412'),(78,'root',920615484,'sass@utp','asa','as','ass',NULL,'0412'),(79,'root',920616585,'carlos@utp.com','lima','surco','jr cusco',NULL,'0412'),(80,'root',999999999,'diana@utp.com','CUSCO','CUSCO','SUCDD',NULL,'0412'),(81,'',920616485,'brandom@utp.cpm','asa','asa','as',NULL,'0412'),(82,'yyyy',959595955,'sass@utp','as','as','as',NULL,'0412'),(83,'kathy guzman',920616589,'kathy@utp.com','lima','lima','lima',NULL,'0412'),(84,'diego solano',959595959,'diego@utp.pe','aa','aaaa','aa',NULL,'0412');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
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
