-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: kaveri
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `FileUpload`
--

DROP TABLE IF EXISTS `FileUpload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FileUpload` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `File` varchar(100) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Size` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileUpload`
--

LOCK TABLES `FileUpload` WRITE;
/*!40000 ALTER TABLE `FileUpload` DISABLE KEYS */;
INSERT INTO `FileUpload` VALUES (1,'success.jpg','image/jpeg','56331','kaveri.nagunuri@karmanya.co.in'),(2,'bg.jpg','image/jpeg','169128','kaveri.nagunuri@karmanya.co.in'),(3,'bg.jpg','image/jpeg','169128','kaveri.nagunuri@karmanya.co.in'),(4,'bg.jpg','image/jpeg','169128','kaveri.nagunuri@karmanya.co.in'),(5,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384','kaveri.nagunuri@karmanya.co.in'),(6,'commands for laravel','application/octet-stream','272','kaveri.nagunuri@karmanya.co.in'),(7,'Effil.jpeg','image/jpeg','6773','yuvashree.b@karmanya.co.in'),(8,'header.blade.php','application/x-php','13068','kaveri.nagunuri@karmanya.co.in'),(9,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384','kaveri.nagunuri@karmanya.co.in'),(10,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(11,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(12,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(13,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(14,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(15,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(16,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(17,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384',NULL),(18,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384','kaveri.nagunuri@karmanya.co.in'),(19,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384','kaveri.nagunuri@karmanya.co.in'),(20,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384','kaveri.nagunuri@karmanya.co.in'),(21,'Screenshot from 2016-03-13 11:36:58.png','image/png','124384','kaveri2710@gmail.com'),(22,'Templateengine.blade.php','application/x-php','145','kaveri.nagunuri@karmanya.co.in'),(23,'test_callback.php','application/x-php','2680','kaveri.nagunuri@karmanya.co.in'),(24,'java.odt','application/vnd.oasis.opendocument.text','53424','kaveri.nagunuri@karmanya.co.in'),(25,'java.odt','application/vnd.oasis.opendocument.text','53424','kaveri.nagunuri@karmanya.co.in'),(26,'karmanya.jpg','image/jpeg','6177','nagunuriuday@gmail.com');
/*!40000 ALTER TABLE `FileUpload` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-05 21:04:31
