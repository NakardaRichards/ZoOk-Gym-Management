-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: content
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Nakarda','Richards',20,'Aenon Town District','2001-02-23','nakardarichards3@gmail.com','test2'),(2,'Dead','Pool',45,'Hell','6666-06-06','deadpool@gmail.com','wolverine'),(3,'John','Cena',43,'Aenon Town District','2111-12-12','johncena3@gmail.com','cenation'),(4,'Nakarda12','Richards',20,'Aenon Town District','2211-02-12','nakardarichards89@gmail.com','GtxRbB@J5CBePN8'),(5,'John','Wick',56,'Unknown','1111-11-11','wick@gmail.com','wick2'),(6,'Fuck','You',20,'Aenon Town District','6696-11-11','nakarda11@gmail.com','GtxRbB@J5CBePN8wqw'),(7,'Randy','Orton',43,'Unknown','2222-02-22','rko@gmail.com','rko'),(8,'Bob','Burr',57,'Aenon Town District','1111-11-11','bob@gmail.com','wqwqqwwqwqqw'),(9,'Tst','Lgs',1121,'Aenon Town District','1111-11-11','test@gmail.com','test'),(10,'Ben','Ten',29,'Aenon Town District','1111-11-11','benten@gmail.com','ten'),(11,'Will ','Smith',53,'Aenon Town District','1111-11-22','wsmith@gmail.com','smith'),(12,'Zack','Efron',31,'Aenon Town District','2111-12-12','zackef@gmail.com','zack'),(13,'Test1 ','Pass2',56,'Aenon Town District','1111-11-11','test@gmail.com','test');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-30 11:28:24
