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
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_users`
--

LOCK TABLES `db_users` WRITE;
/*!40000 ALTER TABLE `db_users` DISABLE KEYS */;
INSERT INTO `db_users` VALUES (1,'Hanswalter','Cohen','1979-05-30','Computer Science',1),(2,'Odilo','Schmid','1949-02-23','Informatik',2),(3,'Innozenz','Bartling','1919-11-30','Medieninformatik',3),(4,'Maurice','Pruefer','1933-08-20','Mobile Computing',4),(5,'Debora','Cruz','1944-01-01','Wirtschaftsinformatik',5),(6,'Lieselotte','Griesbach','1950-07-13','Master Informatik',6),(7,'Trinchen','Lohmeier','1906-02-24','Master Applied Research in Computer Science',1),(8,'Olga','Feller','1981-08-14','Master Software Engineering for Industrial Applications',2),(9,'Edeltraud','Sparks','1917-02-19','Verwaltungsinformatik',3),(10,'Thorsten','Kahnert','1952-09-30','andere Fakultät',4),(11,'Karlpeter','Nadler','2010-03-03','Computer Science',5),(12,'Rosalie','Eiselt','2011-10-12','Informatik',6),(13,'Ullrich','Mies','2012-07-07','Medieninformatik',1),(14,'Dietmar','Messner','2008-05-10','Mobile Computing',2),(15,'Annegret','Egle','2010-01-05','Wirtschaftsinformatik',3),(16,'Rosemarie','Reiser','2013-09-21','Master Informatik',4),(17,'Alois','Feldmeier','2008-10-02','Master Applied Research in Computer Science',5),(18,'Manfred','Schreiter','2007-08-07','Master Software Engineering for Industrial Applications',6),(19,'Gerhard','Buettner','2007-10-30','Verwaltungsinformatik',1),(20,'Ian','Niebel','2010-01-11','andere Fakultät',2),(21,'Anouk','Utrech','2000-01-04','Computer Science',3),(22,'Annika','Ganz','1999-10-04','Informatik',4),(23,'Anneliese','Metzen','1998-03-06','Medieninformatik',5),(24,'Betty','Puhl','1995-08-14','Mobile Computing',6),(25,'Eckhardt','Dillinger','1996-07-15','Wirtschaftsinformatik',1),(26,'Franzpeter','Kinkel','1997-02-13','Master Informatik',2),(27,'Thilo','Knapp','1998-06-09','Master Applied Research in Computer Science',3),(28,'Pascal','Erolf','1994-04-09','Master Software Engineering for Industrial Applications',4),(29,'Brunhilde','Ammermann','1999-09-16','Verwaltungsinformatik',5),(30,'Friedrich','Kutscher','1996-01-14','andere Fakultät',6),(31,'Ingrid','Falk','1908-05-23','Computer Science',1),(32,'Reinhard','Boger','2002-09-13','Computer Science',2),(33,'Reimar','Steinecke','0000-00-00','Computer Science',3),(34,'Engelhard','Lohe','2013-05-15','Computer Science',4),(35,'Karlgünter','Werle','1928-09-18','Computer Science',5),(36,'Torben','Koops','1919-11-09','Computer Science',6),(37,'Baerbel','Tesch','1940-09-03','Informatik',1),(38,'Kreszenzia','Meuter','1984-04-07','Informatik',2),(39,'Senta','Guel','1974-08-08','Informatik',3),(40,'Siglinde','Cichon','1966-12-27','Informatik',4),(41,'Katrin','Kopplin','1968-12-04','Informatik',5),(42,'Siegbert','Brechtel','1976-02-19','Informatik',6),(43,'Irmgard','Clement','1911-10-09','Medieninformatik',1),(44,'Helmtraud','Herold','2010-12-22','Medieninformatik',2),(45,'Elise','Pluta','1984-12-21','Medieninformatik',3),(46,'Jamie','Kahnt','1990-06-06','Medieninformatik',4),(47,'Mark','Luther','1934-07-22','Medieninformatik',5),(48,'Patrizia','Belitz','1903-10-31','Medieninformatik',6),(49,'Lisa','Huber','2002-05-04','Mobile Computing',1),(50,'Alina','Grassl','1905-04-28','Mobile Computing',2),(51,'Helga','Baerwald','2016-02-11','Mobile Computing',3),(52,'Waltraud','Bluhm','1904-12-02','Mobile Computing',4),(53,'Alfred','Haupenthal','1910-01-23','Mobile Computing',5),(54,'Karsten','Welz','1989-11-18','Mobile Computing',6),(55,'Roland','Alt','1918-06-28','Wirtschaftsinformatik',1),(56,'Christel','Siegmund','1990-11-11','Wirtschaftsinformatik',2),(57,'Guenther','Gibbs','1917-06-23','Wirtschaftsinformatik',3),(58,'Christian','Baumert','2004-01-01','Wirtschaftsinformatik',4),(59,'Ricardo','Boch','1966-01-31','Wirtschaftsinformatik',5),(60,'Edwina','Rautenberg','1953-02-22','Wirtschaftsinformatik',6),(61,'Regina','Gajewski','2011-05-26','Master Informatik',1),(62,'Wilfried','Schettler','1965-12-13','Master Informatik',2),(63,'Theodor','Deppisch','1982-04-04','Master Informatik',3),(64,'Karsten','Feustel','1940-08-14','Master Informatik',4),(65,'Rosalinde','Eller','1942-10-11','Master Informatik',5),(66,'Rudolph','Juraschek','1970-11-12','Master Informatik',6),(67,'Ken','Pfisterer','1967-03-07','Master Applied Research in Computer Science',1),(68,'Resi','Rick','1989-03-13','Master Applied Research in Computer Science',2),(69,'Hildegard','Stoll','1985-08-25','Master Applied Research in Computer Science',3),(70,'Sepp','Smith','1972-02-12','Master Applied Research in Computer Science',4),(71,'Siegfried','Riester','1996-08-22','Master Applied Research in Computer Science',5),(72,'Sarah','Brendler','1950-03-29','Master Applied Research in Computer Science',6),(73,'Cornelius','Koether','1932-06-04','Master Software Engineering for Industrial Applications',1),(74,'Wilhelmine','Narr','1996-10-24','Master Software Engineering for Industrial Applications',2),(75,'Nora','Wild','1920-05-07','Master Software Engineering for Industrial Applications',3),(76,'Sven','Thiessen','1962-07-08','Master Software Engineering for Industrial Applications',4),(77,'Franziska','Umlauf','1930-04-04','Master Software Engineering for Industrial Applications',5),(78,'Thilo','Guzmann','1925-04-02','Master Software Engineering for Industrial Applications',6),(79,'Janik','Brieger','1921-10-31','Verwaltungsinformatik',1),(80,'Edwina','Goldschmidt','1978-01-28','Verwaltungsinformatik',2),(81,'Reinhardt','Schier','1939-02-13','Verwaltungsinformatik',3),(82,'Dominikus','Kampf','2014-08-07','Verwaltungsinformatik',4),(83,'Brigitte','Lederer','1996-03-12','Verwaltungsinformatik',5),(84,'Alex','Nowotny','2017-12-14','Verwaltungsinformatik',6),(85,'Ansgar','Hartmann','1958-09-30','andere Fakultät',1),(86,'Ulf','Steinhauer','1974-05-12','andere Fakultät',2),(87,'Matteo','Barilovic','1994-01-02','andere Fakultät',3),(88,'Gerhard','Dabrowski','2005-12-17','andere Fakultät',4),(89,'Daniel','Schurr','1986-06-26','andere Fakultät',5),(90,'Lukas','Scenk','1978-09-16','andere Fakultät',6);
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

-- Dump completed on 2022-06-14  8:22:38
