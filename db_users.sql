-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_users
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `db_users`
--

DROP TABLE IF EXISTS `db_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `vorname` char(25) DEFAULT NULL,
  `nachname` char(25) DEFAULT NULL,
  `geburtsdatum` date DEFAULT NULL,
  `studiengang` varchar(64) DEFAULT NULL,
  `partei` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_users`
--

LOCK TABLES `db_users` WRITE;
/*!40000 ALTER TABLE `db_users` DISABLE KEYS */;
INSERT INTO `db_users` VALUES (1,'Hanswalter','Cohen','1979-05-30','Computer Science',1),(2,'Odilo','Schmid','1949-02-23','Informatik',2),(3,'Innozenz','Bartling','1919-11-30','Medieninformatik',3),(4,'Maurice','Pruefer','1933-08-20','Mobile Computing',4),(5,'Debora','Cruz','1944-01-01','Wirtschaftsinformatik',5),(6,'Lieselotte','Griesbach','1950-07-13','Master Informatik',6),(7,'Trinchen','Lohmeier','1906-02-24','Master Applied Research in Computer Science',1),(8,'Olga','Feller','1981-08-14','Master Software Engineering for Industrial Applications',2),(9,'Edeltraud','Sparks','1917-02-19','Verwaltungsinformatik',3),(10,'Thorsten','Kahnert','1952-09-30','andere Fakultät',4),(11,'Karlpeter','Nadler','2010-03-03','Computer Science',5),(12,'Rosalie','Eiselt','2011-10-12','Informatik',6),(13,'Ullrich','Mies','2012-07-07','Medieninformatik',1),(14,'Dietmar','Messner','2008-05-10','Mobile Computing',2),(15,'Annegret','Egle','2010-01-05','Wirtschaftsinformatik',3),(16,'Rosemarie','Reiser','2013-09-21','Master Informatik',4),(17,'Alois','Feldmeier','2008-10-02','Master Applied Research in Computer Science',5),(18,'Manfred','Schreiter','2007-08-07','Master Software Engineering for Industrial Applications',6),(19,'Gerhard','Buettner','2007-10-30','Verwaltungsinformatik',1),(20,'Ian','Niebel','2010-01-11','andere Fakultät',2),(21,'Anouk','Utrech','2000-01-04','Computer Science',3),(22,'Annika','Ganz','1999-10-04','Informatik',4),(23,'Anneliese','Metzen','1998-03-06','Medieninformatik',5),(24,'Betty','Puhl','1995-08-14','Mobile Computing',6),(25,'Eckhardt','Dillinger','1996-07-15','Wirtschaftsinformatik',1),(26,'Franzpeter','Kinkel','1997-02-13','Master Informatik',2),(27,'Thilo','Knapp','1998-06-09','Master Applied Research in Computer Science',3),(28,'Pascal','Erolf','1994-04-09','Master Software Engineering for Industrial Applications',4),(29,'Brunhilde','Ammermann','1999-09-16','Verwaltungsinformatik',5),(30,'Friedrich','Kutscher','1996-01-14','andere Fakultät',6);
/*!40000 ALTER TABLE `db_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-13 18:37:06
