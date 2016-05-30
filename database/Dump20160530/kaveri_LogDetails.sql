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
-- Table structure for table `LogDetails`
--

DROP TABLE IF EXISTS `LogDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LogDetails` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserAgent` varchar(45) DEFAULT NULL,
  `IpAddress` varchar(45) DEFAULT NULL,
  `BrowserName` varchar(45) DEFAULT NULL,
  `Version` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Platform` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LogDetails`
--

LOCK TABLES `LogDetails` WRITE;
/*!40000 ALTER TABLE `LogDetails` DISABLE KEYS */;
INSERT INTO `LogDetails` VALUES (1,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 06:38:59','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 06:38:59'),(2,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 06:40:36','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 06:40:36'),(3,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 06:43:44','pawankumar.s@karmanya.co.in','linux','2016-05-28 06:43:44'),(4,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 06:44:22','pawankumar.s@karmanya.co.in','linux','2016-05-28 06:44:22'),(5,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 06:47:28','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 06:47:28'),(6,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 06:48:21','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 06:48:21'),(7,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 07:23:32','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 07:23:32'),(8,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 08:28:28','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 08:28:28'),(9,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-28 08:32:41','kaveri.nagunuri@karmanya.co.in','linux','2016-05-28 08:32:41'),(10,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 04:54:15','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 04:54:15'),(11,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 05:39:21','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 05:39:21'),(12,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 06:51:43','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 06:51:43'),(13,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 06:53:39','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 06:53:39'),(14,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 07:03:43','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 07:03:43'),(15,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 07:05:53','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 07:05:53'),(16,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-29 07:08:36','kaveri.nagunuri@karmanya.co.in','linux','2016-05-29 07:08:36'),(17,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-30 04:25:06','kaveri.nagunuri@karmanya.co.in','linux','2016-05-30 04:25:06'),(18,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Ubuntu; Linu','192.168.100.1','Mozilla Firefox','46.0','2016-05-30 04:50:08','kaveri.nagunuri@karmanya.co.in','linux','2016-05-30 04:50:08'),(19,'{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64','192.168.100.1','Google Chrome','50.0.2661.94','2016-05-30 04:55:22','kaveri.nagunuri@karmanya.co.in','linux','2016-05-30 04:55:22');
/*!40000 ALTER TABLE `LogDetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-30 11:46:06
