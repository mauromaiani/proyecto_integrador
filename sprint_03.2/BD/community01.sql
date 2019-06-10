-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: community01
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'hola','hola@hola.com','5cfe999274bd2.png','$2y$10$dVrREihkBQyjk8CoJo0u7usoKjFiJN7bZ7/UHO.IAfuvUOEkzpMAu',1),(5,'chau','chau@chau.com','5cfe9a912fa09.png','$2y$10$F4uAxHs6qC8nnsQVJQ8DW.tvqaqkc7nl7YU9YrvEIki.fwFtNkst6',1),(6,'Jose','jose@gmail.com','5cfea19a8646e.png','$2y$10$PBkfPb.qWP4riRcuFUfs1eIReW5rhK3H1.lWVxPk783MkD.1txZbW',1),(7,'Cacho','cacho@gmail.com','5cfea31b08431.png','$2y$10$gV0J9f/y7aCQlghiHxlOBO74JCf8eYlAL65C0nA4n2fA4CKeMdz0i',1),(8,'messi','messi@gmail.com','5cfea73d971af.jpg','$2y$10$owL.IuBannk9apdXKUOHueydRoe.OvVT0LVOOLtaZs0NGBKXaT5Wq',1),(10,'herni','hb@hb.com','5cfea8f6a2576.jpg','$2y$10$PYmiCbQ0Gs7KcPXTepY7Wui.RFsAl4AikKYElHMVrC8.Jj3v7Uc7O',1),(11,'her','hbaravalle@dh.com','5cfeaa3af2805.jpg','$2y$10$a894udqPuyZmIq1DsAiIw.uLG8asErQ0isk9SKUF2VAC4YjCsDKWS',1),(12,'Leonel Messi','leonelmessi@gmail.com','5cfeaa9d78e6e.jpg','$2y$10$3HGm69xetmpiwecgR1gAIe/BaMaWupDYzmoqEM78a07njSRXEzNeq',9);
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

-- Dump completed on 2019-06-10 16:18:04
