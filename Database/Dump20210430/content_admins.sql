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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time_slot` varchar(400) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gym_name` varchar(100) NOT NULL,
  `cost_per_month` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Nakarda','Richards','Los Angeles, California','Mon: 12:30 pm - 3 pm, Tue: 10:20 pm - 1 pm, Wed: 1:25 pm - 4 pm, Thur: 5:00 pm- 8 pm, Friday: 8:00 am - 12 pm ','nakardarichards3@gmail.com','Quantum Fitness ','$1234','quantum',''),(2,'Stipe','Miocic','Cleveland, Ohio','Mon: 10:30 pm - 3 pm, Tue: 11:20 pm - 2 pm, Wed: 3:25 pm - 6 pm, Thur: 4:00 pm- 8 pm, Friday: 7:00 am - 11 pm ','stipe@gmail.com','StipeStrong','$399.43','stipe2','Stipe Welcomes all '),(4,'Brock','Lesnar','Los Angeles, California','Mon: 12:30 pm - 3 pm, Tue: 10:20 pm - 1 pm, Wed: 1:25 pm - 4 pm, Thur: 5:00 pm- 8 pm, Friday: 8:00 am - 12 pm ','brocklesnar@gmail.com','F5 Fitness','$1234','f5',''),(5,'Dead','Pool','California, Los Angeles','Mon: 10:30 pm - 3 pm, Tue: 11:20 pm - 2 pm, Wed: 3:25 pm - 6 pm, Thur: 4:00 pm- 8 pm, Friday: 7:00 am - 11 pm ','deadpool@gmail.com','Dead Pool Merc Fitness','$10000000','wolverine',''),(6,'Bruce','Banner','New Berry, Massachusetts','Mon: 10:30 pm - 3 pm, Tue: 11:20 pm - 2 pm, Wed: 3:25 pm - 6 pm, Thur: 4:00 pm- 8 pm, Friday: 7:00 am - 11 pm ','hulkout@gmail.com','Hulkout Fitness','$10000000','smash',''),(7,'Scott','Williams','Mandeville, Jamaica','Mon: 10:30 pm - 3 pm, Tue: 11:20 pm - 2 pm, Wed: 3:25 pm - 6 pm, Thur: 4:00 pm- 8 pm, Friday: 7:00 am - 11 pm ','scottwilliams3@gmail.com','Fusion Fitness','$999.43','fusion12',''),(8,'Cristiano','Ronaldo','California, Los Angeles','Mon: 9:30 pm - 2 pm, Tue: 10:20 pm - 2 pm, Wed: 3:25 pm - 6 pm, Thur: 4:00 pm- 8 pm, Friday: 7:00 am - 11 pm ','cr7@gmail.com','CR7','$10000000','cr7','Cristiano Welcomes all');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-30 11:28:23
