-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: db_teb
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumni` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(20) DEFAULT NULL,
  `alumni` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumni`
--

LOCK TABLES `alumni` WRITE;
/*!40000 ALTER TABLE `alumni` DISABLE KEYS */;
INSERT INTO `alumni` VALUES (1,'Google Inc.','110'),(2,'Amazon.com Inc.','40'),(3,'Apple Inc.','66'),(4,'Microsoft Corporatio','23'),(5,'Airbnb, Inc.','300');
/*!40000 ALTER TABLE `alumni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `karir`
--

DROP TABLE IF EXISTS `karir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `karir` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(40) DEFAULT NULL,
  `jabatan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `karir`
--

LOCK TABLES `karir` WRITE;
/*!40000 ALTER TABLE `karir` DISABLE KEYS */;
INSERT INTO `karir` VALUES (1,'Google Inc.','Chief Executive Officer (CEO)'),(2,'Amazon.com Inc.','Chief Financial Officer (CFO)'),(3,'Facebook, Inc.','Chief Operating Officer (COO)'),(4,'Apple Inc.','Chief Marketing Officer (CMO)'),(5,'Microsoft Corporation','Chief Marketing Officer (CMO)'),(6,'Alibaba Group Holding Limited','Chief Information Officer (CIO)'),(7,'Netflix, Inc.','Chief Human Resources Officer (CHRO)'),(8,'Uber Technologies, Inc.','Director of Marketing'),(9,'Airbnb, Inc.','Director of Finance'),(10,'Tesla, Inc.','Director of Operations'),(11,'Shopify Inc.','Director of Sales'),(12,'PayPal Holdings, Inc.','Digital Marketing Manager'),(13,'Zoom Video Communications, Inc.','E-commerce Manager'),(14,'Twitter, Inc.','Financial Analyst'),(15,'LinkedIn Corporation','Business Development Manager'),(16,'Salesforce.com, Inc.','Product Manager'),(17,'TikTok Inc.','Project Manager'),(18,'Square, Inc.','Supply Chain Manager'),(19,'Spotify Technology S.A.','Accounting Manager'),(20,'\r\nSnap Inc.','Risk Manager');
/*!40000 ALTER TABLE `karir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magang`
--

DROP TABLE IF EXISTS `magang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `magang` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Perusahaan` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `program` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magang`
--

LOCK TABLES `magang` WRITE;
/*!40000 ALTER TABLE `magang` DISABLE KEYS */;
INSERT INTO `magang` VALUES (1,'Google Inc.','Chief Executive Officer','Bisnis Digital'),(2,'Amazon.com Inc.','Chief Financial Officer','Ilmu Ekonomi'),(3,'Facebook, Inc.','Chief Marketing Officer','Manajemen'),(4,'Apple Inc.','Chief Technology Officer','Akuntansi'),(5,'Microsoft Corporation','Director of Operations','Ekonomi Islam'),(6,'Alibaba Group Holding Ltd.','Digital Marketing Manager','Akuntansi Perpajakan'),(7,'Netflix, Inc.','Business Development Manager','Pemasaran Digital'),(8,'Uber Technologies, Inc.','Product Manager','Akuntansi Sektor Publik'),(9,'Airbnb, Inc.','Supply Chain Manager','Bisnis International'),(10,'Tesla, Inc.','Risk Manager','Akuntansi Sektor Publik');
/*!40000 ALTER TABLE `magang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `npm` varchar(12) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (4,'Agtan','1234','Agtan Dwi Putra Permadi','120510220081','Agtan22001@mail.unpad.ac.id'),(5,'Ica','1234','Aisyah','120510220017','Aisyah22001@mail.unpad.ac.id');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_teb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-12 18:24:54
