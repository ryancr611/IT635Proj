-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: IT635Proj
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
INSERT INTO `Admin` VALUES ('Admin','password');
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Plants`
--

DROP TABLE IF EXISTS `Plants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Plants` (
  `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Plant_Name` varchar(30) NOT NULL,
  `DATE_ARRIVED` date DEFAULT NULL,
  `IN_STOCK` int(6) DEFAULT NULL,
  `DEAD` int(6) DEFAULT NULL,
  `SOLD` int(6) DEFAULT NULL,
  `ORDERED` int(6) DEFAULT NULL,
  `LOCATION` varchar(30) DEFAULT NULL,
  `MAINTENANCE` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Plants`
--

LOCK TABLES `Plants` WRITE;
/*!40000 ALTER TABLE `Plants` DISABLE KEYS */;
INSERT INTO `Plants` VALUES (1,'Arbor Vitae','2017-02-15',40,1,10,0,'Front of Store','Water Twice a day'),(2,'Marigold','2017-02-20',100,0,7,20,'Back Of Store','Water Once a Day'),(3,'Dawn Redwood','2017-02-22',5,0,0,20,'Back Of Lot','Water Three Times a Day'),(4,'White Dogwood','2017-02-22',45,2,30,15,'Back Of Lot','Water Twice A Day'),(5,'Forsythia','2017-02-10',5,0,2,10,'Back Of Lot','Water Twice A Day'),(6,'Magnolia','2017-02-10',150,0,15,20,'Back Of Lot','Water Twice A Day'),(7,'Japanese Maple','2017-02-01',30,0,10,20,'Back Of Lot','Water Twice A Day'),(8,'Blue Spruce','2017-01-14',50,10,40,50,'Back Of Lot','Water Twice A Day'),(9,'Black Pine','2017-01-10',20,0,10,5,'Back Of Lot','Water Twice A Day'),(10,'Dragon Lily','2017-03-15',30,5,15,30,'Front of Store','Water Twice A Day'),(11,'Alder','2017-03-10',5,0,1,0,'Back Left Corner of Lot','Water Twice A Day'),(12,'Hemlock','2017-03-20',10,0,5,5,'Back Right Corner of Lot','Water Twice A Day'),(13,'Holly','2017-03-20',15,5,20,5,'Back Right Corner of Lot','Water Twice A Day'),(14,'Apple Tree','2017-03-15',15,0,25,5,'Back Right Corner of Lot','Water Daily and Pick Apples'),(15,'Cypress','2017-03-01',10,2,3,0,'Back Right Corner of Lot','Water Daily');
/*!40000 ALTER TABLE `Plants` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-21 19:09:57
