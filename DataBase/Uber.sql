-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Uber
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_reference` varchar(1000) NOT NULL,
  `trip_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trips`
--

LOCK TABLES `trips` WRITE;
/*!40000 ALTER TABLE `trips` DISABLE KEYS */;
INSERT INTO `trips` VALUES (22,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(23,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(24,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(25,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(26,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(27,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(28,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(29,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(31,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(32,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(35,'906bb2f4-e58a-4bfb-82ca-8bf36cf306f0','2018-09-05'),(36,'f2cd6101-4952-4b0d-ab03-e724bc5feaec','2018-09-05'),(37,'a538c89a-3daa-4b28-aeac-63bac2866b19','2018-09-05'),(38,'b88f58e5-fef2-41b8-af4e-90fac13bd47b','2018-09-05'),(40,'cb05ea79-823b-4c88-8b5a-fea9efc43ab9','2018-09-05'),(41,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(42,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(43,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(44,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(45,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(46,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(47,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(48,'','2018-09-05'),(49,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(50,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05'),(51,'c4cc82ad-c6aa-44c5-8d20-ff1a420dd6be','2018-09-05'),(52,'a538c89a-3daa-4b28-aeac-63bac2866b19','2018-09-05'),(53,'a538c89a-3daa-4b28-aeac-63bac2866b19','2018-09-05'),(54,'a538c89a-3daa-4b28-aeac-63bac2866b19','2018-09-05'),(55,'b88f58e5-fef2-41b8-af4e-90fac13bd47b','2018-09-05'),(56,'b88f58e5-fef2-41b8-af4e-90fac13bd47b','2018-09-05'),(57,'b88f58e5-fef2-41b8-af4e-90fac13bd47b','2018-09-05'),(58,'574076db-bd02-437c-bb6b-94f7c8fcda8c','2018-09-05');
/*!40000 ALTER TABLE `trips` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-05 21:15:10
