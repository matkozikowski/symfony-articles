-- MySQL dump 10.13  Distrib 5.6.10, for osx10.7 (x86_64)
--
-- Host: 127.0.0.1    Database: test_project
-- ------------------------------------------------------
-- Server version	5.6.10

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `deleted` smallint(6) NOT NULL,
  `sort_value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BFDD316812469DE2` (`category_id`),
  CONSTRAINT `FK_BFDD316812469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Lorem ipsum dolor sit amet, consectetur','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum elementum arcu, vel placerat dui sodales vitae. Aenean a sem et massa tincidunt sollicitudin at nec metus. Duis in sapien sem. Ut at ante vitae felis molestie venenatis a vel justo. Ut sed erat blandit, ultrices nibh ac, dignissim purus. Vestibulum ultrices eu nisl in ultricies. Nullam interdum ligula non nunc luctus rhoncus. Vestibulum in suscipit nulla. Curabitur vitae iaculis lectus. Cras rhoncus nibh sit amet risus bibendum venenatis. Suspendisse libero sem, malesuada imperdiet lectus eget, eleifend dictum risus. Maecenas commodo, odio et blandit volutpat, neque turpis gravida nunc, vitae porta elit leo id augue. Donec vitae gravida justo, a sollicitudin urna.','2014-12-01 23:00:08',0,3),(2,1,'test 2','test 2','0000-00-00 00:00:00',1,0),(3,2,'test 3','test 3','0000-00-00 00:00:00',0,5),(5,1,'test 4','test 4','0000-00-00 00:00:00',0,2),(6,2,'Lorem ipsum dolor sit amet, consectetur','Lorem ipsum dolor sit amet, consectetur.\r\nLorem ipsum dolor sit amet, consectetur\r\nLorem ipsum dolor sit amet, consectetur\r\nLorem ipsum dolor sit amet, consectetur','2009-01-02 00:00:00',0,0),(7,2,'Lorem ipsum dolor sit amet','Nullam in posuere elit. Sed egestas risus a nunc volutpat, eu iaculis leo suscipit. Morbi vel nunc quis elit rutrum vehicula ut quis libero. Ut eleifend ipsum efficitur, rutrum quam et, dignissim lacus. Mauris tristique odio id augue ullamcorper efficitur. Integer porta sodales ornare. Suspendisse potenti.','2014-12-01 23:00:08',0,3),(8,1,'Lorem ipsum dolor','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu fermentum quam, vel tempus felis. Morbi nunc mi, commodo a cursus vitae, faucibus sed arcu. Ut consequat elit non nulla mollis, vitae pretium lacus blandit. Praesent eu gravida risus, quis sollicitudin ipsum.','2014-12-03 10:00:57',0,1),(9,2,'Lorem ipsum dolor sit amet, consectetur','Lorem ipsum dolor sit amet, consectetur.\r\nLorem ipsum dolor sit amet, consectetur\r\nLorem ipsum dolor sit amet, consectetur\r\nLorem ipsum dolor sit amet, consectetur','2009-01-22 12:00:00',0,4),(10,2,'Lorem ipsum dolor','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu fermentum quam, vel tempus felis. Morbi nunc mi, commodo a cursus vitae, faucibus sed arcu. Ut consequat elit non nulla mollis, vitae pretium lacus blandit. Praesent eu gravida risus, quis sollicitudin ipsum.','2014-12-03 10:00:57',0,1),(11,2,'Pellentesque porta','sagittis fermentum velit euismod vel. Maecenas interdum hendrerit volutpat. Pellentesque sit amet rhoncus ipsum, nec iaculis erat. Proin mollis aliquet sagittis. Cras luctus elit vel quam suscipit porttitor. Quisque a auctor velit. Cras egestas mi at lacus rhoncus, sit a','2014-12-23 11:00:05',0,2);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'news'),(2,'important news');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ext_translations`
--

DROP TABLE IF EXISTS `ext_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ext_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lookup_unique_idx` (`locale`,`object_class`,`field`,`foreign_key`),
  KEY `translations_lookup_idx` (`locale`,`object_class`,`foreign_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ext_translations`
--

LOCK TABLES `ext_translations` WRITE;
/*!40000 ALTER TABLE `ext_translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `ext_translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'demo','demo','demo@demo.pl','demo@demo.pl',1,'1pwmf38xebdw0ggw4wkw04cgcssc8gs','h2DkpH8EeGMt6329JF878vD+H4rTdoA5mbi5rwFommHFvHz31BhDUZ4ANWDwcmcjtOeF+m8tQOwzvpEkwUafBw==','2014-12-01 23:04:33',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL);
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20141129190915');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-01 23:38:07
