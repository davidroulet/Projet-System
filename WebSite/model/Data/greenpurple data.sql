-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: greenpurple
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Dumping data for table `abonment`
--

LOCK TABLES `abonment` WRITE;
/*!40000 ALTER TABLE `abonment` DISABLE KEYS */;
INSERT INTO `abonment` VALUES (5,6,2,'2020-12-10','Nina'),(6,6,3,'2020-12-10','Non'),(7,7,2,'2020-12-10',''),(14,7,2,'2020-12-10','dsadsa'),(16,8,2,'2020-12-10','dsa'),(27,5,4,'2020-12-11','Paul'),(28,4,2,'2020-12-11','Blabla'),(29,4,3,'2020-12-11','200'),(30,4,12,'2020-12-11','Machine a papa');
/*!40000 ALTER TABLE `abonment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'baisc pack','Windows 10 pro',16,'I7'),(3,'Very basic pack','Linux Ubunut',4,'I3'),(4,'Premium pack','Winodws 7',32,'I9 9900KX'),(12,'Ultra Premium','Winodws 11.2',512,'2x Xeon Platinium'),(13,'Poor Machin','Debian',2,'Atom 260x');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Fabien@Email.ch','pass'),(2,'David@Email.ch','pass'),(3,'Xavier@Email.ch','pass'),(4,'David@email.com','Pa$$w0rd'),(5,'admin','admin'),(6,'Fabien@Masson.Vodka','Pa$$w0rd'),(7,'Billy','Billy'),(8,'Roy','Roy');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-11 14:38:44
