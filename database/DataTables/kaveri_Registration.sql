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
-- Table structure for table `Registration`
--

DROP TABLE IF EXISTS `Registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(45) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `State` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `Mobile` varchar(45) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `CreditCard` varchar(255) DEFAULT NULL,
  `Token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registration`
--

LOCK TABLES `Registration` WRITE;
/*!40000 ALTER TABLE `Registration` DISABLE KEYS */;
INSERT INTO `Registration` VALUES (1,'Kaveri','Bapuji Nagar,Musheerabad,hyderabad','hyderabad','Telanagana','kaveri.nagunuri@karmanya.co.in','9908334108','2e0c7bd11ca09f9ebb81e632968a387b','eyJpdiI6Imt5TUZYM0RoSkRFXC9rQ1Z1UUk3YTFBPT0iLCJ2YWx1ZSI6IjhvS3dQVk1rS2RHNktXdVRIQjd0eU10N0E5amVUcXdaN0RcL0xcL0tEbkFXST0iLCJtYWMiOiI2M2IyMWJhNmU4Njk5ZDRlZTY3ODViYTUxYTY1MGY1NzU0ZTMwZmExNGEzNWVkMDM2MjI4ZjRkM2JjMzMxMzcxIn0=','115224441828278551441'),(2,'Nagunuri Kaveri','D.No:1-79,Valasapakala,kakinada','kakinada','Andhra Pradesh','nagunurikaveri@gmail.com','7097810836','8ead3ac240793b5e7a783368918e1af2',NULL,NULL),(3,'Uday Kumar','Bapuji nagar,musheerabad,hyderabad-500020','hyderabad','Telanagana','nagunuriuday@gmail.com','9000928851','110a377ff9a9ae9426443b0cb0aa384f','eyJpdiI6Ind5XC95QlFxK2hTaFB1XC9EV1UzMHllQT09IiwidmFsdWUiOiJOTXlRN09jKzlRbU1QbmRVT3ZVeEFOd1BHem93RFJoWWRqNHZjYWEyOTBnPSIsIm1hYyI6IjdlNzFjNTAwMjJjOTMyODExMDhlMDhjOThlMTZmYzI1YzgxMDRmZjI4ZWE2ZDAwZWYyZmQwNmIzZjcxYjFhNjkifQ==',NULL),(4,'kaveri','D.no:1-6-174/29,Bapuji Nagar,Musheerabad,Hyderabad','hyderabad','Telanagana','kaveri2710@gmail.com','7097810836',NULL,'eyJpdiI6Ik85YjBpazdyMlVKdzV1V2o2YTdqeGc9PSIsInZhbHVlIjoieVwveTVRXC9sT0E2SW0xRVhlbmpiVk5YWnYwYklDQWxWSkdtVnJsd2RtUFZ3PSIsIm1hYyI6ImM5NGUyZDYxOWYwMmFmODJmZjRiZWVkYzUzNzc1NDVlYzBlMmRhYjgxZjJhMTRjY2FhZTI0YzI0OGVhMWE3ZTkifQ==','906473922814718');
/*!40000 ALTER TABLE `Registration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-07 10:39:14
