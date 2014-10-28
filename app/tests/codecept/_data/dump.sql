-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: easy_wine_testing
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Australia','2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,'Chile','2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,'France','2014-10-28 04:32:27','2014-10-28 04:32:27'),(4,'Italy','2014-10-28 04:32:27','2014-10-28 04:32:27'),(5,'New Zealand','2014-10-28 04:32:27','2014-10-28 04:32:27'),(6,'Spain','2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_27_064158_create_types_table',1),('2014_10_27_064339_create_countries_table',1),('2014_10_27_064536_create_regions_table',1),('2014_10_27_064656_create_varieties_table',1),('2014_10_27_064738_create_wines_table',1),('2014_10_27_064856_create_wine_details_table',1),('2014_10_27_065006_create_users_table',1),('2014_10_27_065056_create_user_details_table',1),('2014_10_27_065231_create_password_reminders_table',1),('2014_10_27_065348_create_variety_wine_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reminders`
--

DROP TABLE IF EXISTS `password_reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reminders`
--

LOCK TABLES `password_reminders` WRITE;
/*!40000 ALTER TABLE `password_reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `regions_country_id_index` (`country_id`),
  CONSTRAINT `regions_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Adelaide Hills',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,'Barossa Valley',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,'Bordeaux',3,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(4,'Champagne',3,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(5,'Clare Valley',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(6,'Coonawarra',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(7,'Eden Valley',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(8,'Hunter Valley',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(9,'Langhorne Creek',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(10,'Limestone Coast',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(11,'Margaret River',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(12,'Marlborough',5,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(13,'McLaren Vale',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(14,'South Australia',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(15,'South East Australia',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(16,'Tasmania',1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(17,'Yarra Valley',1,'2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'red','2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,'white','2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,'sparkling','2014-10-28 04:32:27','2014-10-28 04:32:27'),(4,'others','2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subscribed` tinyint(1) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_details_user_id_index` (`user_id`),
  CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (1,'Mr','Yaokun','Pan','18 - 29','178 Belmore Rd North','Riverwood','2210','NSW','UTS','0468588570',1,1,'2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` enum('administrator','normal customer','V.I.P. customer') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'myron.yk.pan@gmail.com','$2y$10$VYMApu4nLkevet1T/.nBEeQA1NckDx85eOgDPl4Sek1SjVfozG2me',NULL,'administrator','2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `varieties`
--

DROP TABLE IF EXISTS `varieties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `varieties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `variety_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `varieties`
--

LOCK TABLES `varieties` WRITE;
/*!40000 ALTER TABLE `varieties` DISABLE KEYS */;
INSERT INTO `varieties` VALUES (1,'Cabernet Blends','2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,'Cabernet Sauvignon','2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,'Grenache','2014-10-28 04:32:27','2014-10-28 04:32:27'),(4,'Merlot','2014-10-28 04:32:27','2014-10-28 04:32:27'),(5,'Pinot Noir','2014-10-28 04:32:27','2014-10-28 04:32:27'),(6,'Red Blends','2014-10-28 04:32:27','2014-10-28 04:32:27'),(7,'Rosé','2014-10-28 04:32:27','2014-10-28 04:32:27'),(8,'Shiraz','2014-10-28 04:32:27','2014-10-28 04:32:27'),(9,'Shiraz Blends','2014-10-28 04:32:27','2014-10-28 04:32:27'),(10,'Chardonnay','2014-10-28 04:32:27','2014-10-28 04:32:27'),(11,'Moscato','2014-10-28 04:32:27','2014-10-28 04:32:27'),(12,'Pinot Gris','2014-10-28 04:32:27','2014-10-28 04:32:27'),(13,'Riesling','2014-10-28 04:32:27','2014-10-28 04:32:27'),(14,'Sauvignon Blanc','2014-10-28 04:32:27','2014-10-28 04:32:27'),(15,'Semillon','2014-10-28 04:32:27','2014-10-28 04:32:27'),(16,'Sem Sauv Blends','2014-10-28 04:32:27','2014-10-28 04:32:27'),(17,'Verdelho','2014-10-28 04:32:27','2014-10-28 04:32:27'),(18,'White Blends','2014-10-28 04:32:27','2014-10-28 04:32:27'),(19,'Champagne','2014-10-28 04:32:27','2014-10-28 04:32:27'),(20,'Sparkling Whites','2014-10-28 04:32:27','2014-10-28 04:32:27'),(21,'Sparkling Reds','2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `varieties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variety_wine`
--

DROP TABLE IF EXISTS `variety_wine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `variety_wine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `variety_id` int(10) unsigned NOT NULL,
  `wine_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `variety_wine_variety_id_index` (`variety_id`),
  KEY `variety_wine_wine_id_index` (`wine_id`),
  CONSTRAINT `variety_wine_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE CASCADE,
  CONSTRAINT `variety_wine_variety_id_foreign` FOREIGN KEY (`variety_id`) REFERENCES `varieties` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variety_wine`
--

LOCK TABLES `variety_wine` WRITE;
/*!40000 ALTER TABLE `variety_wine` DISABLE KEYS */;
INSERT INTO `variety_wine` VALUES (1,5,1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,10,1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,12,2,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(4,8,3,'2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `variety_wine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wine_details`
--

DROP TABLE IF EXISTS `wine_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wine_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wine_id` int(10) unsigned NOT NULL,
  `vintage` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drink_until` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alcohol` decimal(4,2) DEFAULT NULL,
  `food` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `colour` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nose` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background` text COLLATE utf8_unicode_ci,
  `palate` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `usp_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usp_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usp_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `award` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `wine_details_wine_id_index` (`wine_id`),
  CONSTRAINT `wine_details_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wine_details`
--

LOCK TABLES `wine_details` WRITE;
/*!40000 ALTER TABLE `wine_details` DISABLE KEYS */;
INSERT INTO `wine_details` VALUES (1,1,'2009','2015',12.00,'ideal as an aperitif, or whole baby snapper baked in rock salt.','unoaked','pale yellow with a tinge of green','delicately vinous, with an initial taste of both lime and vine blossom.','Moet Chandon began in 1743, beginning in the Royal Courts of Europe \n													and among the aristocracy. The first sparkling  wine was shipped in 1744. \n													The next generation, Jean-Remy Moet played  host to many prominent leaders \n													such as the Emperor Napoleon, the Duke of  Wellington. Alexandre 1 Tsar of all \n													the Russia\'s among them, as the  Mayor of Epernay. Today Moet Chandon is \n													present in more than 170  countries on 5 continents. Today Moet \n													Chandon recognized that Champagne was not going to be large enough \n													to provide for all the  sparkling wine needs of the world. As such they \n													looked to other countries for viticultural areas that would be able to\n													provide premium  grapes for these styles. They have plantings in Brazil, Argentina, \n													California, Spain and Australia.','Predominantly Pinot characteristics. Light, persistent sparkle. \n												Very ample in the mouth, with a discreet finish.','One of the few Champagne Houses to hold a Royal Warrant to be allowed supply Champagne to the Queen.','The world\'s most recognised Champagne','When only the best will do','Celebrate in style',NULL,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,2,'2009',NULL,12.00,'enjoy as an aperitif style','Moderate oak','pale gold with green hues','lifted tropical citrus aromas with hints of apple and fresh bread',NULL,'fresh creamy palate with a citrus finish','If you need a celebrate with a crowd, choose Cottonwood Grove \n													as the sparkling wine in everyone\'s glasses. It\'s a true all-rounder \n													that everyone will love. With soft, elegant tropical and citrus \n													flavours and a fine, elegant finish, it\'s the perfect party starter. \n													And just look at the bargain price!','Entertain a crowd with Cottonwood Grove!','Delicate and stylish sparkling','Perfect for parties and celebrations',NULL,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,3,'2009','2016',13.50,'Any casual occasion - BBQs, pizza and pasta nights, Mexican food.','Subtly oaked','bright ruby red with purple hues','fragrant blackberry fruit with subtle vanillin characters','Stonyfell dates back to 1858, when Henry Clarke established a winery in what is now suburban Adelaide. In 1920 an association began between the Martin family, the then owners of Stonyfell and the Salter family of the Saltram winery. The outcome was the transfer of winery operations to the Barossa where it remains today.','The attractive, \'sweet\' berry fruit is impeccably balanced by natural acidity and soft oak flavours. Ideal for immediate enjoyment (or another couple of years in the cellar) this Shiraz is designed to please no matter when it\'s opened.','If you love Shiraz, and you love Sparkling, what better way to celebrate a special occasion than with a stunning Sparkling Shiraz!? Sweet and rich, velvety and soft, Sparkling Shiraz is the ultimate in vinous indulgence. This one from Stonyfell is spectacular - enjoy!','Sparkling red - try it and see how good it is!','Sweet and rich, velvety and soft','Chill it down, then pop the cork and enjoy!',NULL,'2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `wine_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wines`
--

DROP TABLE IF EXISTS `wines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wine_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `package_size` int(11) NOT NULL,
  `discount_price` decimal(8,2) NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `availability` enum('InStock','LimitedStock','OutOfStock','Pre-order') COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `region_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `wines_product_code_unique` (`product_code`),
  KEY `wines_type_id_index` (`type_id`),
  KEY `wines_region_id_index` (`region_id`),
  KEY `wines_country_id_index` (`country_id`),
  CONSTRAINT `wines_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wines_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wines_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wines`
--

LOCK TABLES `wines` WRITE;
/*!40000 ALTER TABLE `wines` DISABLE KEYS */;
INSERT INTO `wines` VALUES (1,'Moet Chandon Brut Imperial (6-bottle Case) NV','C601XA',79.99,6,59.99,'C601XA.png','InStock',1,2,1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(2,'Cottonwood Grove Brut Cuvee NV','C190X',13.99,12,7.99,'C190X.png','InStock',1,2,1,'2014-10-28 04:32:27','2014-10-28 04:32:27'),(3,'Stonyfell Selection Shiraz Cuvee NV','C988X',15.99,12,8.99,'C988X.png','InStock',1,2,1,'2014-10-28 04:32:27','2014-10-28 04:32:27');
/*!40000 ALTER TABLE `wines` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-28  4:36:33
