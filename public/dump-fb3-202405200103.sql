-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: fb3
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `campaign_product_assignments`
--

DROP TABLE IF EXISTS `campaign_product_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campaign_product_assignments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `campaign_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `result` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign_product_assignments`
--

LOCK TABLES `campaign_product_assignments` WRITE;
/*!40000 ALTER TABLE `campaign_product_assignments` DISABLE KEYS */;
INSERT INTO `campaign_product_assignments` VALUES (3,3,1,'2024-03-29 20:24:15','2024-03-29 20:24:15',2,NULL,NULL),(4,4,1,'2024-03-29 20:24:15','2024-03-29 20:24:15',2,NULL,NULL),(5,4,3,'2024-03-29 20:26:58','2024-03-29 20:26:58',2,NULL,NULL),(6,3,12,'2024-04-06 05:45:13','2024-04-06 05:45:48',2,'2024-04-06 05:45:48',NULL),(7,4,12,'2024-04-06 05:45:15','2024-04-06 05:45:48',2,'2024-04-06 05:45:48',NULL),(8,3,12,'2024-04-06 05:45:50','2024-04-06 05:47:47',2,'2024-04-06 05:47:47',NULL),(9,4,12,'2024-04-06 05:45:52','2024-04-06 05:47:47',2,'2024-04-06 05:47:47',NULL),(10,3,12,'2024-04-06 05:47:50','2024-04-06 05:48:31',2,'2024-04-06 05:48:31',NULL),(11,4,12,'2024-04-06 05:47:52','2024-04-06 05:48:31',2,'2024-04-06 05:48:31',NULL),(12,3,12,'2024-04-06 05:50:47','2024-04-06 05:52:43',2,'2024-04-06 05:52:43',NULL),(13,4,12,'2024-04-06 05:50:59','2024-04-06 05:52:43',2,'2024-04-06 05:52:43',NULL),(14,1,11,'2024-04-06 11:43:08','2024-04-06 11:45:37',2,'2024-04-06 11:45:37',NULL),(15,1,11,'2024-04-06 11:49:26','2024-04-06 11:49:26',2,NULL,NULL),(16,1,13,'2024-04-06 13:42:43','2024-04-06 13:42:43',2,NULL,NULL),(17,6,13,'2024-04-06 13:42:46','2024-04-06 13:42:46',2,NULL,NULL),(18,1,14,'2024-04-06 13:45:47','2024-04-06 13:45:47',2,NULL,NULL),(19,6,14,'2024-04-06 13:45:51','2024-04-06 13:45:51',2,NULL,NULL),(20,1,15,'2024-04-06 13:48:57','2024-04-06 13:48:57',2,NULL,NULL),(21,6,15,'2024-04-06 13:49:00','2024-04-06 13:49:00',2,NULL,NULL),(22,1,17,'2024-04-06 13:48:57','2024-04-06 13:48:57',2,NULL,NULL),(23,6,17,'2024-04-06 13:49:00','2024-04-06 13:49:00',2,NULL,NULL),(24,4,18,'2024-04-12 06:45:40','2024-04-12 06:45:40',2,NULL,NULL),(25,6,18,'2024-04-12 06:45:44','2024-04-12 06:45:44',2,NULL,NULL),(26,4,19,'2024-04-12 06:47:12','2024-04-12 06:47:12',2,NULL,NULL),(27,6,19,'2024-04-12 06:47:19','2024-04-12 06:47:19',2,NULL,NULL),(29,1,23,'2024-04-14 05:00:09','2024-04-14 05:00:09',2,NULL,NULL),(30,3,24,'2024-04-14 06:06:49','2024-04-14 06:06:49',2,NULL,NULL),(31,6,24,'2024-04-14 06:06:53','2024-04-14 06:06:53',2,NULL,NULL),(32,3,25,'2024-04-14 06:07:00','2024-04-14 06:07:00',2,NULL,NULL),(33,6,25,'2024-04-14 06:07:04','2024-04-14 06:07:04',2,NULL,NULL);
/*!40000 ALTER TABLE `campaign_product_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campaigns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fil` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `campaign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stream_url` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_inbox` int DEFAULT NULL,
  `streamID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_item_ids` text COLLATE utf8mb4_unicode_ci,
  `is_live_processed` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
INSERT INTO `campaigns` VALUES (1,'asd','asd','02/02/2024','Live','image',NULL,'w',NULL,'2024-03-29 17:04:52',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(2,'Harriet Cohen','Rhonda Henson','03/02/2024','Est rerum veritatis','video','Do in sed aliquam pr','Consequatur Id enim','2024-03-29 17:04:33','2024-03-29 17:04:33',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(3,'Ralph Cherry','Orlando Goodman','04/02/2024','Et qui quia minim te','video','Distinctio Id volup','Cillum suscipit anim','2024-03-29 19:43:12','2024-03-29 19:43:12',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(4,'test ng','Test Now','2024-04-17',NULL,'image',NULL,NULL,'2024-04-02 05:02:48','2024-04-02 05:02:48',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(5,'test ng','Test Now','2024-04-17',NULL,'image',NULL,NULL,'2024-04-02 05:05:45','2024-04-02 05:05:45',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052345_DSC_0673.JPG',NULL,NULL,NULL,NULL,NULL,'0'),(6,'test 123','test 123','2024-04-17',NULL,'image',NULL,NULL,'2024-04-02 05:07:19','2024-04-02 05:07:19',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052439_DSC_0672.JPG',NULL,NULL,NULL,NULL,NULL,'0'),(7,'asdasd','Campaign 7','2024-05-09',NULL,'image',NULL,NULL,'2024-04-02 05:08:51','2024-04-02 05:08:51',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052531_free-standing-wardrobes-hpd316.jpg',NULL,NULL,NULL,NULL,NULL,'0'),(8,'adsad','Campaign 8','2024-05-01',NULL,'image','1',NULL,'2024-04-02 05:09:42','2024-04-02 05:09:42',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(9,'adsad','Campaign 9','2024-05-01',NULL,'image','1',NULL,'2024-04-02 05:10:47','2024-04-02 05:10:47',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052647_free-standing-wardrobes-hpd316.jpg',NULL,NULL,NULL,NULL,NULL,'0'),(10,'adsad','Campaign 10','2024-05-01',NULL,'image','1',NULL,'2024-04-02 05:12:53','2024-04-02 05:12:53',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052773_free-standing-wardrobes-hpd316.jpg',NULL,NULL,NULL,NULL,NULL,'0'),(11,'adsad','Campaign 11','2024-05-01',NULL,'image','1',NULL,'2024-04-02 05:12:57','2024-04-06 11:49:23',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052777_free-standing-wardrobes-hpd316.jpg','938920934570948',NULL,NULL,NULL,NULL,'0'),(12,'adsad','Campaign 12','2024-05-01',NULL,'image','1',NULL,'2024-04-02 05:13:13','2024-04-02 05:13:13',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1712052793_free-standing-wardrobes-hpd316.jpg',NULL,NULL,NULL,NULL,NULL,'0'),(13,'Guy Holder','Kylan Herring','2024-05-01',NULL,'live',NULL,NULL,'2024-04-06 13:42:36','2024-04-06 13:42:39',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713088803_1712924775_yt5s.mp4','421735213779974','rtmps://live-api-s.facebook.com:443/rtmp/443682508195439?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=Abyy123VMoHxdglg',NULL,NULL,NULL,'1'),(14,'Guy Holder','Kylan Herring','2024-05-01',NULL,'live',NULL,NULL,'2024-04-06 13:45:42','2024-04-06 13:45:45',NULL,2,NULL,'356731720090586',NULL,NULL,NULL,NULL,'1'),(15,'Guy Holder','Kylan Herring','2024-05-01',NULL,'live_video',NULL,NULL,'2024-04-06 13:48:51','2024-04-06 13:49:30',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713088803_1712924775_yt5s.mp4','780697844014103','rtmps://live-api-s.facebook.com:443/rtmp/443685174861839?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbxC8-5f6t_z2vkB',NULL,'443685174861839',NULL,'1'),(16,'Alexander Bird','Clementine Waters','2024-05-01',NULL,'live_video','1',NULL,'2024-04-07 03:26:53','2024-04-07 03:27:38',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713088803_1712924775_yt5s.mp4','762120629346460','rtmps://live-api-s.facebook.com:443/rtmp/443995931497430?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbyDgTIJqcN6asdS',NULL,'443995931497430','[\"7262487020536604\"]','1'),(17,'Alexander Bird 17','Clementine Waters 17','2024-05-01',NULL,'live','1',NULL,'2024-04-07 03:26:53','2024-04-07 03:27:38',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713088803_1712924775_yt5s.mp4','762120629346460','rtmps://live-api-s.facebook.com:443/rtmp/443995931497430?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbyDgTIJqcN6asdS',NULL,'443995931497430','[\"7262487020536604\"]','1'),(18,'Jeremy Mack','Orla Joyner','2025-02-15',NULL,'live',NULL,NULL,'2024-04-12 06:45:31','2024-04-12 06:45:35',NULL,2,NULL,'956845979359612',NULL,NULL,NULL,NULL,'1'),(19,'Jeremy Mack','Orla Joyner','2025-02-15',NULL,'live',NULL,NULL,'2024-04-12 06:47:03','2024-04-12 06:47:06',NULL,2,NULL,'2084741505244662',NULL,NULL,NULL,NULL,'1'),(23,'Zia Acosta','Gwendolyn Burch','2024-06-14',NULL,'live',NULL,NULL,'2024-04-14 05:00:03','2024-04-14 05:00:46',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713088803_1712924775_yt5s.mp4','422561300475596','rtmps://live-api-s.facebook.com:443/rtmp/448253834404973?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbzzZF6ejawjWPE3',NULL,'448253834404973','[]','1'),(24,'Hyacinth Richards','Clarke Benjamin','242025-12-20',NULL,'live',NULL,NULL,'2024-04-14 06:06:43','2024-04-14 06:07:32',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713092803_1712924775_yt5s.mp4','1142195043771488','rtmps://live-api-s.facebook.com:443/rtmp/448280581068965?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbzHgvTpH6dbsZs8',NULL,'448280581068965','[]','1'),(25,'Hyacinth Richards','Clarke Benjamin','2025-12-20',NULL,'live','1',NULL,'2024-04-14 06:06:53','2024-04-14 06:07:45',NULL,2,'https://localhost/jata_laravel_git/public/uploads/1713092813_1712924775_yt5s.mp4','1560603328124901','rtmps://live-api-s.facebook.com:443/rtmp/448280771068946?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbzDudTP4CQKFGwI',NULL,'448280771068946','[]','0'),(26,'Ulysses Gallagher','Ahmed Garner','1989-05-27',NULL,'image','1',NULL,'2024-05-19 11:40:40','2024-05-19 11:40:40',NULL,3,'https://localhost/jata_laravel_git/public/uploads/1716136840_440409014_845040200916140_2113712354395168914_n.jpg',NULL,NULL,NULL,NULL,NULL,'0'),(37,'Xanthus Boone','Brenna Wilder','2012-10-23',NULL,'video','1',NULL,'2024-05-19 12:28:37','2024-05-19 12:28:37',NULL,3,'https://localhost/jata_laravel_git/public/uploads/1716139717_440409014_845040200916140_2113712354395168914_n.jpg',NULL,NULL,NULL,NULL,NULL,'0'),(38,'Echo Hickman','Priscilla Mcintyre','1999-08-02',NULL,'live','1',NULL,'2024-05-19 14:24:52','2024-05-19 14:24:52',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(39,'Echo Hickman','Priscilla Mcintyre','1999-08-02',NULL,'live','1',NULL,'2024-05-19 14:32:20','2024-05-19 14:32:20',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(40,'Echo Hickman','Priscilla Mcintyre','1999-08-02',NULL,'live','1',NULL,'2024-05-19 14:40:26','2024-05-19 14:40:26',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(41,'Echo Hickman','Priscilla Mcintyre','1999-08-02',NULL,'live','1',NULL,'2024-05-19 14:45:00','2024-05-19 14:45:00',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,'0');
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `face_book_pages`
--

DROP TABLE IF EXISTS `face_book_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `face_book_pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `page_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_access_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `get_posts` enum('Y','N') DEFAULT 'N',
  `long_page_access_token` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `face_book_pages`
--

LOCK TABLES `face_book_pages` WRITE;
/*!40000 ALTER TABLE `face_book_pages` DISABLE KEYS */;
INSERT INTO `face_book_pages` VALUES (10,3,'302429626290045','Test page ibex','EAARR7LQi878BO7hQLP9WAC5eVIx8ZADKeROOJZAFEiwhkHn1XdWyScUWndYr0S7sSpr2io3LV6f1ICcEmH8HbPMuufUdA1O2zVYa0ZAd0cukEiVyh2DdhPWHFQyi1eyIYF4HiqMxSPBglpiUU6nDLpZA7PSX1sM1CygcsuLPYsnIahBAiZC47j8g9G8nxKpLK','2024-05-19 14:42:02',NULL,NULL,'N','EAARR7LQi878BO5YA4NYaH799zCJZAR83lAtlLf6ZCJDbXcHXpx6hGhulOpu3vkgZCAf8S1qWaCGtVHlasEQYvVqGEGBSbBIEeecbxGgvI7fqtGz8wStzB3FIkpfG1YGxcyNmvndM7I4sXuunDIdr1nc9DDuOiohBxIkJW5sKk6SA77CL2cV1uUFp8xTEFk3');
/*!40000 ALTER TABLE `face_book_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `face_book_posts`
--

DROP TABLE IF EXISTS `face_book_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `face_book_posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `post_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `graph_node_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(300) DEFAULT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `campaign_id` int DEFAULT NULL,
  `live_image_url` varchar(500) DEFAULT NULL,
  `post_url` varchar(200) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `created_time` varchar(100) DEFAULT NULL,
  `from_id` varchar(100) DEFAULT NULL,
  `from_name` varchar(100) DEFAULT NULL,
  `page_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `face_book_posts`
--

LOCK TABLES `face_book_posts` WRITE;
/*!40000 ALTER TABLE `face_book_posts` DISABLE KEYS */;
INSERT INTO `face_book_posts` VALUES (5,2,'405424445528187','439176245312732','Guy Holder','https://localhost/jata_laravel/public/uploads/1711785469_Aqiqah Editable Canva Inivitation Card Aesthetic Aqiqah Invitation Muslim Baby invitation card.jpg','2024-03-30 02:57:55',NULL,NULL,'jpg',16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t15.5256-10/434887972_960067255819823_8176957978605270675_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF-52JXOA_FyHmNPogAieX4cmmcC5ABj5hyaZwLkAGPmJhhNnroVdoEXdQe90QoQO7jhjOmL6TURzrcxCQDj3ps&_nc_ohc=ir-vVwSebScAb5nMmGW&_nc_oc=AdhH0FQZXzHDlpdM9pjbtrJ0rIa4gl9Uz_pACgyPxvjQ0JGbolT5qIXpS716n_4l0VE&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfDh54AW57eC-aLwO6RXJwkhd4OoRvyGeIgojDcKHiF_Tg&oe=66236328','https://www.facebook.com/437663125464044/videos/405424445528187','video_inline','2024-04-06T18:52:42+0000','102504132303710','Rizwan\'s Shop',NULL),(6,2,'443995931497430','rtmps://live-api-s.facebook.com:443/rtmp/443995931497430?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbyDgTIJqcN6asdS','Clementine Waters','https://jatak.artisticsheaven.com/public/uploads/1712478413_427684607_2687881944698649_1551787772646159423_n.mp4','2024-04-07 03:27:38',NULL,NULL,'mp4',16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/434877262_437985991927025_3074262470719223330_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeErE7o_IqjXXoyrYgF7dkQIi2YsRTXd-dGLZixFNd350bpxU3z15Xm_BdcFKgGOfNI83_QH_z8QLi3HQnlVX640&_nc_ohc=AVE2_pzmqYwAb6OHLBZ&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfCAwfpVtvNJsSEI5jfAibZx94HtgEcynnGeCkeRTtqswg&oe=6619C5AC','https://www.facebook.com/437663125464044/videos/447540200965350','video_inline','2024-04-07T08:54:28+0000','102504132303710','Rizwan\'s Shop',NULL),(7,2,'447540200965350',NULL,'Alexander Bird',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t15.5256-10/434877262_437985991927025_3074262470719223330_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeErE7o_IqjXXoyrYgF7dkQIi2YsRTXd-dGLZixFNd350bpxU3z15Xm_BdcFKgGOfNI83_QH_z8QLi3HQnlVX640&_nc_ohc=mqh3lxOYL00Ab4FOTaP&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDc3EP6lgcErVRDdHTrGecrI5_QO1R7jJYtG3hc81cCBQ&oe=6623386C','https://www.facebook.com/437663125464044/videos/447540200965350','video_inline','2024-04-07T08:54:28+0000','102504132303710','Rizwan\'s Shop',NULL),(8,2,'405424445528187',NULL,'Guy Holder',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/434887972_960067255819823_8176957978605270675_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF-52JXOA_FyHmNPogAieX4cmmcC5ABj5hyaZwLkAGPmJhhNnroVdoEXdQe90QoQO7jhjOmL6TURzrcxCQDj3ps&_nc_ohc=oSwcJmnSMLYAb6L4-Kt&_nc_oc=AdgioyY_gxUiP35XQW7UsaRNaB3WPUiYw9KjEUlnJaWxagbGD0txqD1tyFRj-DAl7FA&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDTn07AEWstkyP3lQ0An9JmnwB_tt176vs722fkiNUiTg&oe=6619F068','https://www.facebook.com/437663125464044/videos/405424445528187','video_inline','2024-04-06T18:52:42+0000','102504132303710','Rizwan\'s Shop',NULL),(9,2,'1164086428341009',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t15.5256-10/432179485_1633613760720122_7093671741826937185_n.jpg?stp=dst-jpg_s720x720&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEN6Cx8UWzvdKjCrT3FhouH6rmpRtz1Z7jqualG3PVnuNeYsmCkXdm7rAQvnx71O5Dg2tTfNf5nIdTSIqER8vh5&_nc_ohc=M3OK-ykJHSYAb7T6PlX&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfAkZ8OHJzH8FxzCVQEV6w482gUoMAI7B14Ny6BQ0jdYaQ&oe=66234D58','https://www.facebook.com/437663125464044/videos/1164086428341009','video_inline','2024-04-03T10:16:11+0000','102504132303710','Rizwan\'s Shop',NULL),(10,2,'335284679533741',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t15.5256-10/430012516_1108822750430522_3749635525764043318_n.jpg?stp=dst-jpg_s720x720&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFQ2xuDsb5p0eth-RqDnfYSobXOdJFmQTehtc50kWZBN4LXrMxlIYpTuPGi9ANJBSIkhD5988JNZbW5ApLZN1F4&_nc_ohc=nDKbyEM4g6QAb7uScfL&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfC2TiOmmisda95UkYae5y6cslRWZtzRc6qEzKWhbzEKVw&oe=662349B3','https://www.facebook.com/437663125464044/videos/335284679533741','video_inline','2024-04-03T09:15:05+0000','102504132303710','Rizwan\'s Shop',NULL),(11,2,'772367874838776',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t15.5256-10/409123598_971682850565071_115402111531694768_n.jpg?stp=dst-jpg_s720x720&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG2XWlyT1Ffe_66MV5ieFUUaOvWtPp8L2po69a0-nwvauxWhFtLV2zagPR8d1yBX8QeSkfCkuNgl0jiyIgQcIpP&_nc_ohc=ZeNYQ3V0wZ4Ab68xry7&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfAuhBPi-K1Ytpe_EWDtdR2iXXKlXH4LhCN9e0_uPemGuA&oe=66236898','https://www.facebook.com/437663125464044/videos/772367874838776','video_inline','2024-04-02T19:52:14+0000','102504132303710','Rizwan\'s Shop',NULL),(12,2,'799488455435838',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t15.5256-10/432034931_1174387923545358_4695911773167948148_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFmyDwMuCrslT_g7ji4wdBXWAQ4u8QHxNhYBDi7xAfE2BA4JXeXuPQZ0H6Q3vEzs0CctB5g5b5jg7vtatwSomM5&_nc_ohc=h5-kZrbrGEcAb5OUnOS&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfD3qBxesXN8hRU59jvT4FRNbPZTYd5NPmgn4TjPZp741g&oe=66233A37','https://www.facebook.com/437663125464044/videos/799488455435838','video_inline','2024-04-02T19:38:52+0000','102504132303710','Rizwan\'s Shop',NULL),(13,2,'447540200965350',NULL,'Alexander Bird',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/434877262_437985991927025_3074262470719223330_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeErE7o_IqjXXoyrYgF7dkQIi2YsRTXd-dGLZixFNd350bpxU3z15Xm_BdcFKgGOfNI83_QH_z8QLi3HQnlVX640&_nc_ohc=AVE2_pzmqYwAb6OHLBZ&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfCAwfpVtvNJsSEI5jfAibZx94HtgEcynnGeCkeRTtqswg&oe=6619C5AC','https://www.facebook.com/437663125464044/videos/447540200965350','video_inline','2024-04-07T08:54:28+0000','102504132303710','Rizwan\'s Shop',NULL),(14,2,'405424445528187',NULL,'Guy Holder',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/434887972_960067255819823_8176957978605270675_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF-52JXOA_FyHmNPogAieX4cmmcC5ABj5hyaZwLkAGPmJhhNnroVdoEXdQe90QoQO7jhjOmL6TURzrcxCQDj3ps&_nc_ohc=oSwcJmnSMLYAb6L4-Kt&_nc_oc=AdgioyY_gxUiP35XQW7UsaRNaB3WPUiYw9KjEUlnJaWxagbGD0txqD1tyFRj-DAl7FA&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDTn07AEWstkyP3lQ0An9JmnwB_tt176vs722fkiNUiTg&oe=6619F068','https://www.facebook.com/437663125464044/videos/405424445528187','video_inline','2024-04-06T18:52:42+0000','102504132303710','Rizwan\'s Shop',NULL),(15,2,'1164086428341009',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/432179485_1633613760720122_7093671741826937185_n.jpg?stp=dst-jpg_s720x720&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEN6Cx8UWzvdKjCrT3FhouH6rmpRtz1Z7jqualG3PVnuNeYsmCkXdm7rAQvnx71O5Dg2tTfNf5nIdTSIqER8vh5&_nc_ohc=3LzMjiuOP68Ab4mFtPB&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfBjrl9XICM1SVKyPRK7AcgIZri0for1u6ygEVqieNuw7w&oe=6619DA98','https://www.facebook.com/437663125464044/videos/1164086428341009','video_inline','2024-04-03T10:16:11+0000','102504132303710','Rizwan\'s Shop',NULL),(16,2,'335284679533741',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/430012516_1108822750430522_3749635525764043318_n.jpg?stp=dst-jpg_s720x720&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFQ2xuDsb5p0eth-RqDnfYSobXOdJFmQTehtc50kWZBN4LXrMxlIYpTuPGi9ANJBSIkhD5988JNZbW5ApLZN1F4&_nc_ohc=yBx69qw58ywAb4uwxZN&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfAUKJoSOPQOdfy3yVSz_jvJXsSRBmyxzVitz6NiLE9gBg&oe=6619D6F3','https://www.facebook.com/437663125464044/videos/335284679533741','video_inline','2024-04-03T09:15:05+0000','102504132303710','Rizwan\'s Shop',NULL),(17,2,'772367874838776',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/409123598_971682850565071_115402111531694768_n.jpg?stp=dst-jpg_s720x720&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG2XWlyT1Ffe_66MV5ieFUUaOvWtPp8L2po69a0-nwvauxWhFtLV2zagPR8d1yBX8QeSkfCkuNgl0jiyIgQcIpP&_nc_ohc=17ziVXJ5B0QAb6qheEc&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfA9WSa6pXF8-MfoO9CZxcWhfEDXmyDdxSta0_dyZrZl5g&oe=6619F5D8','https://www.facebook.com/437663125464044/videos/772367874838776','video_inline','2024-04-02T19:52:14+0000','102504132303710','Rizwan\'s Shop',NULL),(18,2,'799488455435838',NULL,'Your Live Video Title',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t15.5256-10/432034931_1174387923545358_4695911773167948148_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFmyDwMuCrslT_g7ji4wdBXWAQ4u8QHxNhYBDi7xAfE2BA4JXeXuPQZ0H6Q3vEzs0CctB5g5b5jg7vtatwSomM5&_nc_ohc=3er5qEWP7kUAb4O8xBw&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDE3GyaZ25wOIyBKPcKe6wR9ZICiQyIW6rLxOVCLFVVAg&oe=6619C777','https://www.facebook.com/437663125464044/videos/799488455435838','video_inline','2024-04-02T19:38:52+0000','102504132303710','Rizwan\'s Shop',NULL),(19,2,'441375161759507',NULL,'skinny shirt',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/435107206_441375158426174_3053311835094044667_n.jpg?stp=dst-jpg_p720x720&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHRb2rA7zFB67N-8BuOt2RNLd6Lvo1Ld2Yt3ou-jUt3Zsn7xRhFmTpTZbNcK2eX1LRUw3HKqihbQdS0gePrDkA_&_nc_ohc=Xlrq-lixkBAAb4geu9C&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfCQNGInxfXABlTu3pOwXFiJVWQnk6-MeiaKXufIja1cig&oe=6623428C','https://www.facebook.com/photo.php?fbid=441375161759507&set=a.433935852503438&type=3','photo','2024-04-02T18:54:57+0000','102504132303710','Rizwan\'s Shop',NULL),(20,2,'1392493178063602',NULL,'jeans',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t15.5256-10/433513115_469027232117045_6399421945903318268_n.jpg?stp=dst-jpg_s720x720&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHmwQGmT85O5y_EGue5AmHSpmwJPAdTDxSmbAk8B1MPFB2p8s5nmSi0I2wZ_tRu1VtFNAgyfX1q2omwmkfJT71N&_nc_ohc=41z0ooiWkxYAb5Q5a6S&_nc_oc=AdiJDOabSeRrVhirT7Lyzd-aq5O0NpYgqxM_wlPWw28gtj3Y8ZrbrciOGUwpOjtJCXg&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfA5yFuRFWSEaVtpL8uf6ztNKE5OlXrb1avMsiGYyT3wHg&oe=66234DE2','https://www.facebook.com/437663125464044/videos/1392493178063602','video_inline','2024-04-02T12:00:10+0000','102504132303710','Rizwan\'s Shop',NULL),(21,2,'441140628449627',NULL,'shirt',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/435334568_441140625116294_8860331318850962516_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEUvDSPthZ-5RqtRChmERd2Fxe2-TGk6ZgXF7b5MaTpmCGDAMeKb_8zqlPOsn6-UErVA3O0N2iuh_SQi3Zr2Gz5&_nc_ohc=RyebZBJ1Po0Ab5XFZKV&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDeo9ENW6x-tf_5IySChxaASDu1YUlGhkjsaOlXd7V-cA&oe=662340DB','https://www.facebook.com/photo.php?fbid=441140628449627&set=a.433935852503438&type=3','photo','2024-04-02T10:34:51+0000','102504132303710','Rizwan\'s Shop',NULL),(22,2,'1121095149097054',NULL,'test video',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t15.5256-10/434052987_948762339991983_6107635195901271691_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHNW7HdYLGReCAT_U1G0A_Xvkr2LDJJYkq-SvYsMkliSscEaP6HwKBd6yOFMvsGrl8LuC6eDHqVAimhE8TFNZh3&_nc_ohc=nlmjCVd8AX4Ab4rZrKG&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfChLd0Eo70VT2oyPGlHftGLhziI3-4Bt6fWthI3m_p65A&oe=66233A20','https://www.facebook.com/437663125464044/videos/1121095149097054','video_inline','2024-04-02T10:21:28+0000','102504132303710','Rizwan\'s Shop',NULL),(23,2,'441134835116873',NULL,'test 123',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t39.30808-6/433684679_441134831783540_4456264784808955383_n.jpg?stp=dst-jpg_p720x720&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF_COv2KIipmzerWRqAxiJVyAGjI1z_OZvIAaMjXP85m9rx_P31c_t7YweOcl5xF3qvbjtw91KPhtQaF1yptxUU&_nc_ohc=OQloc8shAFgAb5oC-uH&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfDixsbbkGvdtMknFo3MFrh0VjrSbbx7Dx96307PAuKjgQ&oe=66236D63','https://www.facebook.com/photo.php?fbid=441134835116873&set=a.433935852503438&type=3','photo','2024-04-02T10:19:55+0000','102504132303710','Rizwan\'s Shop',NULL),(24,2,'439810258582664',NULL,'test description to upload image',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t39.30808-6/434314819_439810255249331_1707927535916766306_n.jpg?stp=dst-jpg_p720x720&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG7f4rWw_KxUUCCy1KwZH7LVTrptM9GImVVOum0z0YiZWTVXT5j3dmzKmzSWjH0QPwRjVSs_suhJ3HZ833BRCMN&_nc_ohc=3EEfFIgvVpIAb5RJezE&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfClxsER5gsVFwu-UC7jqgePEC6SyjjBvZQZbahOE7gitw&oe=66235CD7','https://www.facebook.com/photo.php?fbid=439810258582664&set=a.433935852503438&type=3','photo','2024-03-31T08:34:43+0000','102504132303710','Rizwan\'s Shop',NULL),(25,2,'1380033152670297',NULL,'test video here',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t15.5256-10/433974937_287280914414056_6926998813058687528_n.jpg?stp=dst-jpg_s720x720&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHVGvUGBstm2_15NxxSE95vsZ9kmCzijESxn2SYLOKMRMyU83kcf_MqHtnXzUFmp_qIYUalwU8vgYF4QxMUEUbv&_nc_ohc=xnXEwKmTjz4Ab64P8xj&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfCGyy3ObYx_oziZVZwX1uZDxcMGL5liDiAzfVw3n5CG1w&oe=6623483B','https://www.facebook.com/437663125464044/videos/1380033152670297','video_inline','2024-03-30T09:16:11+0000','102504132303710','Rizwan\'s Shop',NULL),(26,2,'439205595309797',NULL,'this is for testing',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/434323084_439205591976464_8237562061218448432_n.jpg?stp=dst-jpg_p720x720&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFyN7rR-CUXtJ4MRhIitot8_R9U5sPfHo79H1Tmw98ejj9R2YAFq8TOBzRBEefDZOJnPn9vCLL4LmSGMiwKEvDw&_nc_ohc=fhQaMwGkF3cAb6WX2JJ&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfCSZHk6F-BJFg14srBMil2z8cG-Ge4W4eCVilP_amQAfw&oe=66235F33','https://www.facebook.com/photo.php?fbid=439205595309797&set=a.433935852503438&type=3','photo','2024-03-30T09:11:44+0000','102504132303710','Rizwan\'s Shop',NULL),(27,2,'439204771976546',NULL,'this is the description',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/433283240_439204768643213_3329200089017573995_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGYWdpBuoQ4xRt_l-VPpFlxBR7aqdrn8JUFHtqp2ufwlfqVYwecgOjRVJ6w947OS0hfbK3piTB4NBi3vvckavg-&_nc_ohc=F3NcPkpnnRMAb7qypst&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDbz_9wYRYtpVU0SGiHrKohTj8gxNhHmr12IBUGgLT1lw&oe=6623478E','https://www.facebook.com/photo.php?fbid=439204771976546&set=a.433935852503438&type=3','photo','2024-03-30T09:09:55+0000','102504132303710','Rizwan\'s Shop',NULL),(28,2,'387234744071038',NULL,'user test',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t15.5256-10/432281348_1548026742712324_2160804579468975981_n.jpg?stp=dst-jpg_s720x720&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG5kPnMb02Q3F-OrDmSXWX6Ux09U3hRertTHT1TeFF6u1LqRPJVvOQnmH6WcjWAuAno_F-yoj6Y8m3MEHEO1wF5&_nc_ohc=k3-KRQ_KudoAb5GsFVB&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfDDwOtQ0ResAcBK5yhVK_QJuTyxHhE5ZUcxxI1JDmzmrA&oe=66233E15','https://www.facebook.com/437663125464044/videos/387234744071038','video_inline','2024-03-30T08:38:11+0000','102504132303710','Rizwan\'s Shop',NULL),(29,2,'439189851978038',NULL,'this is the test description',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/434314520_439189848644705_6297475288788284777_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGV3WbHqDytNIhLzOleOQ8xCTKUCM1ljKcJMpQIzWWMp88vbz0vrT6_1oBHgCDEU-uJZaOPd_hF1A7KeZjoTXm3&_nc_ohc=Xeqg7UxJtEUAb44Bxpu&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfAYHmyel7YiVsIpmWYfBHIMbRM-lZ-FmUFqGbanYwwQ5w&oe=66233E26','https://www.facebook.com/photo.php?fbid=439189851978038&set=a.433935852503438&type=3','photo','2024-03-30T08:32:29+0000','102504132303710','Rizwan\'s Shop',NULL),(30,2,'439189141978109',NULL,'No title set',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t39.30808-6/433241712_439189138644776_6120776749009251968_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEoJix31E_eqViLFoiLujhAQ2MXNnHJxdpDYxc2ccnF2pYF40IjtPDeXA0AtL0hkyzC7UWyzDu2foUpHBxDdKhW&_nc_ohc=OOBULsP9ngEAb412PiN&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfBKf_yMxL0MuDhuOHZTcnneE33VmJVBybhBgTaRrf_hLQ&oe=6623446C','https://www.facebook.com/photo.php?fbid=439189141978109&set=a.433935852503438&type=3','photo','2024-03-30T08:30:49+0000','102504132303710','Rizwan\'s Shop',NULL),(31,2,'439176245312732',NULL,'test again est',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/434728000_439176241979399_8678932247887760206_n.jpg?stp=dst-jpg_p720x720&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHRxRcexNxWLz3LtHlPr89lm-eXPDwdw5ub55c8PB3Dm2zTLvlDUCdtRRtBF-po2pn-uKA9Qd8pkMJ8zp7rfMvQ&_nc_ohc=7X-Br7S9yqIAb656uRc&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfB_U0uGtBgUfcLm7aXEXpHFFtkcqMM_RMxwRHkIz3_ufQ&oe=662337A1','https://www.facebook.com/photo.php?fbid=439176245312732&set=a.433935852503438&type=3','photo','2024-03-30T07:57:49+0000','102504132303710','Rizwan\'s Shop',NULL),(32,2,'439176131979410',NULL,'test again est',NULL,NULL,NULL,NULL,NULL,16,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t39.30808-6/434737048_439176125312744_5133670899538619858_n.jpg?stp=dst-jpg_p720x720&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHzSZwr-n9X2yHuTN86LDjWVkzLrCb6idBWTMusJvqJ0FR1yBQpLOqbKhekd-te5poP9BcyAqUolmmF1AXGJL7l&_nc_ohc=XvI_eRjP-LYAb7kxUMk&_nc_oc=AdhmmOS7nOxNw4b4lV91M3k3DDibWTgcjqrwQmxKQkcKpvvf-UfMdHWZWJnTKv3tbLE&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfBPattqma22U56LhHadzfIhtU6r8iHArPmCCBwBqt8Abw&oe=66233AB7','https://www.facebook.com/photo.php?fbid=439176131979410&set=a.433935852503438&type=3','photo','2024-03-30T07:57:36+0000','102504132303710','Rizwan\'s Shop',NULL),(33,2,'439176005312756',NULL,'test again est',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe5-1.fna.fbcdn.net/v/t39.30808-6/434737037_439175991979424_4749284308235208779_n.jpg?stp=dst-jpg_p720x720&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGCNwpCerVvp6N0BzXPJdbwh6aFVZsf-liHpoVVmx_6WEm9w-lVZe3xDatRHW3Ht5KqqbmKbKKgaUnzTgeOUI-A&_nc_ohc=yodKSH3D3PEAb6Xx53q&_nc_ht=scontent.flhe5-1.fna&edm=AKIiGfEEAAAA&oh=00_AfC9STlrcsT9qA0sgVQfxxB5uwOrP1K1tm5_z4FnfHm__Q&oe=66234A75','https://www.facebook.com/photo.php?fbid=439176005312756&set=a.433935852503438&type=3','photo','2024-03-30T07:57:24+0000','102504132303710','Rizwan\'s Shop',NULL),(34,2,'439175971979426',NULL,'test again est',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-1.fna.fbcdn.net/v/t39.30808-6/434744097_439175965312760_6449348509316998085_n.jpg?stp=dst-jpg_p720x720&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEs2szSVJ4eoaBc18dukqEKnBGCWFe0gJCcEYJYV7SAkKvCofhIfpRABuJJQ9A4n02PRNN4z9IONnXC9M__U_S_&_nc_ohc=HkLIP3vT1xAAb6W0TZE&_nc_ht=scontent.flhe7-1.fna&edm=AKIiGfEEAAAA&oh=00_AfD_ION6KvBXEUMefmotWwm_sJKR904vvT1YNBcLpLUpqg&oe=6619E651','https://www.facebook.com/photo.php?fbid=439175971979426&set=a.433935852503438&type=3','photo','2024-03-30T07:57:23+0000','102504132303710','Rizwan\'s Shop',NULL),(35,2,'752571836967182',NULL,'post test','https://localhost/jata_laravel_git/public/uploads/1712924775_yt5s.io-Ve Haaniyaan - Official Video _ Ravi Dubey & Sargun Mehta _ Danny _ Avvy Sra _ Dreamiyata Music-(480p) (1).mp4',NULL,NULL,NULL,NULL,17,'https://scontent.flhe7-1.fna.fbcdn.net/v/t15.5256-10/433344397_789408929430960_1324769044212942217_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG5S8E8w_TE6yl8c5Ub3BnlWh8H3HNZ0ZVaHwfcc1nRlc59YdBxPuFD3RfGUl_MUPrxB9xHUmPkP2fwMO1Qxf_-&_nc_ohc=U0GTe7yPRAkAb7DV5lD&_nc_ht=scontent.flhe7-1.fna&edm=AKIiGfEEAAAA&oh=00_AfAt_ZvPhr1vER7xSZirKjc4Dd0e3o-siAhY2HElk51E5A&oe=6619E303','https://www.facebook.com/437663125464044/videos/752571836967182','video_inline','2024-03-30T07:53:36+0000','102504132303710','Rizwan\'s Shop',NULL),(36,2,'439161175314239',NULL,'image upload test',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-2.fna.fbcdn.net/v/t39.30808-6/434736907_439161171980906_4432957828892217595_n.jpg?stp=dst-jpg_p720x720&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHADGvs7yDthiQ__LXgLDo5vtkWdHw_qJu-2RZ0fD-om8Z_YThWTQnEv4ByGD0gztR3DEDhSCdbBuiQWojvwzka&_nc_ohc=-oYd1G1VddQAb6GC-GI&_nc_ht=scontent.flhe7-2.fna&edm=AKIiGfEEAAAA&oh=00_AfAXSydSITP07RfUNBdjRB0r0qCkf9oazZ0LLwUoTyFNKA&oe=6619E19E','https://www.facebook.com/photo.php?fbid=439161175314239&set=a.433935852503438&type=3','photo','2024-03-30T07:22:14+0000','102504132303710','Rizwan\'s Shop',NULL),(37,2,'439160968647593',NULL,'image upload test',NULL,NULL,NULL,NULL,NULL,16,'https://scontent.flhe7-1.fna.fbcdn.net/v/t39.30808-6/434729882_439160965314260_6131291869580060620_n.jpg?stp=dst-jpg_p720x720&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGCD0XmiV7DKoqClIoBE2A2S7kO8ywH3mZLuQ7zLAfeZj_jS-YtIDrtrIL2sWZC5sLkCWeFGdCbzqzoqakmSjS7&_nc_ohc=VhSxQ6a3KcsAb47o7E-&_nc_ht=scontent.flhe7-1.fna&edm=AKIiGfEEAAAA&oh=00_AfD3ABoj16kAYrnjPRq-omuo-9RZlAAPu2evvAB8zpg1Zg&oe=6619EF33','https://www.facebook.com/photo.php?fbid=439160968647593&set=a.433935852503438&type=3','photo','2024-03-30T07:21:46+0000','102504132303710','Rizwan\'s Shop',NULL),(38,2,'448253834404973','rtmps://live-api-s.facebook.com:443/rtmp/448253834404973?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbzzZF6ejawjWPE3','Gwendolyn Burch','https://localhost/jata_laravel_git/public/uploads/1713088803_1712924775_yt5s.mp4','2024-04-14 05:00:46',NULL,NULL,'mp4',23,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,2,'448280581068965','rtmps://live-api-s.facebook.com:443/rtmp/448280581068965?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbzHgvTpH6dbsZs8','Clarke Benjamin','https://localhost/jata_laravel_git/public/uploads/1713092803_1712924775_yt5s.mp4','2024-04-14 06:07:32',NULL,NULL,'mp4',24,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,2,'448280771068946','rtmps://live-api-s.facebook.com:443/rtmp/448280771068946?s_asc=1&s_bl=1&s_oil=2&s_psm=1&s_pub=1&s_spl=1&s_sw=0&s_tids=1&s_vt=api-s&a=AbzDudTP4CQKFGwI','Clarke Benjamin','https://localhost/jata_laravel_git/public/uploads/1713092813_1712924775_yt5s.mp4','2024-04-14 06:07:45',NULL,NULL,'mp4',25,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,2,'449043990992624',NULL,'Denise Byrd',NULL,NULL,NULL,NULL,NULL,NULL,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/437897749_449043984325958_3784518376367257528_n.jpg?stp=dst-jpg_p720x720&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFoPLEeD0RcIL202EV9IVrnCK-jWmP87g8Ir6NaY_zuD57YivhqfFCIj1VMD9yxwVCUBW2stWFDKFe5FzEuU1d8&_nc_ohc=45f5dEqbS2AAb7x7ycU&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfBqdlbeffjRj94leNuLhiBZ4sn11UPZgBKvNnMX2JHbAg&oe=66233D23','https://www.facebook.com/photo.php?fbid=449043990992624&set=a.433935852503438&type=3','photo','2024-04-15T18:25:36+0000','102504132303710','Rizwan\'s Shop',NULL),(42,2,'448757347687955',NULL,'Talon Pratt',NULL,NULL,NULL,NULL,NULL,NULL,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/438833425_448757344354622_2782676405298927663_n.jpg?stp=dst-jpg_p720x720&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGcWxHs3wxpvPtHV6_s-TZFuCwlFzIQTyu4LCUXMhBPK_Oz770YpUqzpI605W4qtR0Ewy1YcCybft8-BXRUmoJR&_nc_ohc=3TfLISbbWKAAb4H_Pz-&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfBz-y7u6WJRatJe7MDYncYozDIloyJ5ViTUkgmvZwtRgg&oe=66235F1F','https://www.facebook.com/photo.php?fbid=448757347687955&set=a.433935852503438&type=3','photo','2024-04-15T06:57:22+0000','102504132303710','Rizwan\'s Shop',NULL),(43,2,'2444434382428630',NULL,'Hyacinth Richards',NULL,NULL,NULL,NULL,NULL,NULL,'https://z-p3-scontent.flhe4-1.fna.fbcdn.net/v/t15.5256-10/426726796_959390178974733_1871542691081603873_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG7tBUT6DjceHpeik6Lp3YKoFFiWfjEIMugUWJZ-MQgy4z7O4oAOg5h2RqpeStqwbBk8B1T4t2wkarU2C23ToTU&_nc_ohc=1LeOsLzn8zsAb4sordC&_nc_ht=z-p3-scontent.flhe4-1.fna&edm=AKIiGfEEAAAA&oh=00_AfCscjXQEFj5u7VpTSAxJkWxpRZ_yAV44yjZdFYhesDClA&oe=66236290','https://www.facebook.com/437663125464044/videos/2444434382428630','video_inline','2024-04-14T11:09:56+0000','102504132303710','Rizwan\'s Shop',NULL),(44,2,'441281111611083',NULL,'Zia Acosta',NULL,NULL,NULL,NULL,NULL,NULL,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t15.5256-10/437536566_1286192946103042_1995357211857023787_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEf5Xh_PLBcwSq00HdmGQtk8yXjUH_bwbTzJeNQf9vBtAi6s-lImMN8v9POxOuhi7m4Q0PudylNgjIAvBgWudFW&_nc_ohc=NuhetwMj4lIAb6IJAc6&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfC7DlviHQjLbMIsBANglmc0AIKqNx4nfVG8PPR9pDEpYA&oe=66233F31','https://www.facebook.com/437663125464044/videos/441281111611083','video_inline','2024-04-14T10:02:36+0000','102504132303710','Rizwan\'s Shop',NULL),(45,2,'449068374323519',NULL,'Lacey Mullins',NULL,NULL,NULL,NULL,NULL,NULL,'https://z-p3-scontent.flhe4-2.fna.fbcdn.net/v/t39.30808-6/437942612_449068367656853_2959412475487273858_n.jpg?stp=dst-jpg_p720x720&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFk19olGTWJohqc0UNytitAvgTeHYPajBG-BN4dg9qMEU4UJlKQJJTOpxwdVLzYU8XrX02XY4BfDrTNsO9uMDnz&_nc_ohc=3UHKsMBXi8gAb5_h3Q_&_nc_zt=23&_nc_ht=z-p3-scontent.flhe4-2.fna&edm=AKIiGfEEAAAA&oh=00_AfBQtcSGwRHe37y5HIAZLeOuYJl8eLnd8ihYOxgfVtluVQ&oe=66236172','https://www.facebook.com/photo.php?fbid=449068374323519&set=a.433935852503438&type=3','photo','2024-04-15T19:22:48+0000','102504132303710','Rizwan\'s Shop',NULL),(46,3,'302429626290045_122108802290306925',NULL,'test post for me',NULL,NULL,NULL,NULL,NULL,NULL,'','','','2024-05-14T21:16:25+0000','302429626290045','Test page ibex',10),(47,3,'302429626290045_122109485444306925',NULL,'WEDNESDAY. SEASON 2. 2024.',NULL,NULL,NULL,NULL,NULL,NULL,'https://scontent.flhe7-1.fna.fbcdn.net/v/t39.30808-6/442409183_122109485390306925_8999922945114883093_n.jpg?stp=dst-jpg_p720x720&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=LGegfbeKzw4Q7kNvgHx8TOR&_nc_ht=scontent.flhe7-1.fna&edm=AKIiGfEEAAAA&oh=00_AYBFH53MENHZMHxEQOZOLEfgIRZKfxE7uxy9bk24ZIkeSw&oe=664BBF88','https://www.facebook.com/photo.php?fbid=122109485402306925&set=a.122109485438306925&type=3','photo','2024-05-16T08:25:38+0000','302429626290045','Test page ibex',10),(48,3,'122110882826306925','302429626290045_122110882850306925','Brenna Wilder','https://localhost/jata_laravel_git/public/uploads/1716139717_440409014_845040200916140_2113712354395168914_n.jpg','2024-05-19 12:28:42',NULL,NULL,'jpg',37,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `face_book_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facebook_posts_comments`
--

DROP TABLE IF EXISTS `facebook_posts_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facebook_posts_comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `post_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` varchar(500) DEFAULT NULL,
  `from_id` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `from_name` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `comment_created_at` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `campaign_id` int DEFAULT NULL,
  `is_process` int DEFAULT '0',
  `media_url` varchar(500) DEFAULT NULL,
  `comment_reply_post` enum('1','0') DEFAULT '0',
  `page_post_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facebook_posts_comments`
--

LOCK TABLES `facebook_posts_comments` WRITE;
/*!40000 ALTER TABLE `facebook_posts_comments` DISABLE KEYS */;
INSERT INTO `facebook_posts_comments` VALUES (79,2,'405424445528187','405424445528187_440529775204866','oad','7420888131308581','Muhammad Awais Zulifqar','2024-04-06T19:49:20+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(80,2,'405424445528187','405424445528187_384964994509897','','7420888131308581','Muhammad Awais Zulifqar','2024-04-08T13:28:22+0000',NULL,NULL,NULL,NULL,16,1,'https://scontent.flhe7-1.fna.fbcdn.net/v/t39.30808-6/420469951_7424730887647030_714045290577920561_n.jpg?stp=dst-jpg_p720x720&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHDIjtp2Acqlvq2gFCYTFS1ZLOeVi7Q4XFks55WLtDhcZaqqRsoa2VQ9XXqHPuej746XBm6kmxpIqVmZjijxB7N&_nc_ohc=F4V5UxrTQssAb5hU0CD&_nc_ht=scontent.flhe7-1.fna&edm=AIjQbYoEAAAA&oh=00_AfAykyo_ZF0pGbt2-0-NH6lNR7kp8WBIkJ0hYr27BI1ymw&oe=662215ED','0',NULL),(81,2,'443995931497430','447540200965350_448687507830092','test comment','102504132303710','Rizwan\'s Shop','2024-04-07T14:32:50+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(82,2,'443995931497430','447540200965350_1632038500882920','G','Unknown','Anonymous','2024-04-07T10:56:26+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(83,2,'443995931497430','447540200965350_409041715250192','Test comment for open','Unknown','Anonymous','2024-04-07T19:56:44+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(84,2,'443995931497430','447540200965350_3667224010233061','test commmmmmmmmm','7420888131308581','Muhammad Awais Zulifqar','2024-04-07T14:33:33+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(85,2,'443995931497430','447540200965350_881648407067474','Test cidjnd','Unknown','Anonymous','2024-04-07T10:55:54+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(86,2,'443995931497430','447540200965350_1026646119053401','My test comment','Unknown','Anonymous','2024-04-07T10:55:05+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(87,2,'447540200965350','447540200965350_448687507830092','test comment','102504132303710','Rizwan\'s Shop','2024-04-07T14:32:50+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(88,2,'447540200965350','447540200965350_1632038500882920','G','Unknown','Anonymous','2024-04-07T10:56:26+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(89,2,'447540200965350','447540200965350_409041715250192','Test comment for open','Unknown','Anonymous','2024-04-07T19:56:44+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(90,2,'447540200965350','447540200965350_3667224010233061','test commmmmmmmmm','7420888131308581','Muhammad Awais Zulifqar','2024-04-07T14:33:33+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(91,2,'447540200965350','447540200965350_881648407067474','Test cidjnd','Unknown','Anonymous','2024-04-07T10:55:54+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(92,2,'447540200965350','447540200965350_1026646119053401','My test comment','Unknown','Anonymous','2024-04-07T10:55:05+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(93,2,'335284679533741','335284679533741_455609760136535','Comment 2 onn','7420888131308581','Muhammad Awais Zulifqar','2024-04-04T19:57:04+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(94,2,'335284679533741','335284679533741_732564452366994','Comment 1','7420888131308581','Muhammad Awais Zulifqar','2024-04-04T19:56:59+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(95,2,'772367874838776','772367874838776_7481396998565931','wow','7420888131308581','Muhammad Awais Zulifqar','2024-04-02T19:52:43+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(96,2,'772367874838776','772367874838776_2823869041095256','Your comment here','102504132303710','Rizwan\'s Shop','2024-04-13T20:10:13+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(97,2,'772367874838776','772367874838776_1399810184748856','Your comment here','102504132303710','Rizwan\'s Shop','2024-04-13T20:10:52+0000',NULL,NULL,NULL,NULL,16,1,'','0',NULL),(98,2,'448253834404973','441281111611083_2320643158144419','nice','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T10:03:16+0000',NULL,NULL,NULL,NULL,23,1,'','0',NULL),(99,2,'448253834404973','441281111611083_1147991789869305','here','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T10:03:18+0000',NULL,NULL,NULL,NULL,23,1,'','0',NULL),(100,2,'448253834404973','441281111611083_938644067961027','video','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T10:03:19+0000',NULL,NULL,NULL,NULL,23,1,'','0',NULL),(101,2,'448253834404973','441281111611083_945143583767264','bro','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T10:03:20+0000',NULL,NULL,NULL,NULL,23,1,'','0',NULL),(102,2,'448280771068946','2444434382428630_774674374620829','adlasdma','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:26+0000',NULL,NULL,NULL,NULL,25,1,'','0',NULL),(103,2,'448280771068946','2444434382428630_950272929875623','ndadsad','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:26+0000',NULL,NULL,NULL,NULL,25,1,'','0',NULL),(104,2,'448280771068946','2444434382428630_411004545215353','adslasd','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:28+0000',NULL,NULL,NULL,NULL,25,1,'','0',NULL),(105,2,'448280771068946','2444434382428630_738052205150923','asdlsd','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:27+0000',NULL,NULL,NULL,NULL,25,1,'','0',NULL),(106,2,'448280771068946','2444434382428630_943873703875699','asdlad','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:28+0000',NULL,NULL,NULL,NULL,25,1,'','0',NULL),(107,2,'448280771068946','2444434382428630_448814030943186','anksdlasd','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:29+0000',NULL,NULL,NULL,NULL,25,1,'','0',NULL),(108,2,'448280771068946','2444434382428630_1647012629360420','nkasdnsa','7420888131308581','Muhammad Awais Zulifqar','2024-04-14T11:10:30+0000',NULL,'2024-04-14 15:08:30',NULL,NULL,25,1,'','1',NULL),(109,3,'302429626290045_122109485444306925','122109485444306925_1599922447524364','hm','8489961171030597','Muhammad Awais Zulifqar','2024-05-16T08:26:12+0000',NULL,'2024-05-18 14:43:03',NULL,NULL,NULL,0,'','1',47),(110,3,'302429626290045_122109485444306925','122109485444306925_460709053299082','testing','8489961171030597','Muhammad Awais Zulifqar','2024-05-16T08:26:16+0000',NULL,'2024-05-18 14:43:07',NULL,NULL,NULL,0,'','1',47),(111,3,'302429626290045_122109485444306925','122109485444306925_391383610545854','','8489961171030597','Muhammad Awais Zulifqar','2024-05-16T11:34:45+0000',NULL,'2024-05-18 14:43:12',NULL,NULL,NULL,0,'https://scontent.flhe7-2.fna.fbcdn.net/v/t39.30808-6/441162887_7594626977324086_8538217779500829232_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=gPzNIB6XHRQQ7kNvgHBhVp_&_nc_ht=scontent.flhe7-2.fna&edm=AOerShkEAAAA&oh=00_AYB05IP_-KavO--lNiJ0gf9iA9lwDZBEf2HJXixVWn2TDg&oe=664BC851','1',47);
/*!40000 ALTER TABLE `facebook_posts_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facebook_posts_comments_replies`
--

DROP TABLE IF EXISTS `facebook_posts_comments_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facebook_posts_comments_replies` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_comment_id` int NOT NULL,
  `post_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `campaign_id` int DEFAULT NULL,
  `new_comment_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facebook_posts_comments_replies`
--

LOCK TABLES `facebook_posts_comments_replies` WRITE;
/*!40000 ALTER TABLE `facebook_posts_comments_replies` DISABLE KEYS */;
INSERT INTO `facebook_posts_comments_replies` VALUES (1,108,'448280771068946','2444434382428630_1647012629360420','Here the Comment reply custom message here.',NULL,NULL,25,'2444434382428630_1632623260873738'),(2,109,'302429626290045_122109485444306925','122109485444306925_1599922447524364','Hi Muhammad Awais Zulifqar. Thank you for your interest 😊.If you want more, you can simply make a new comment with the desired additional number and wait for a reply ',NULL,NULL,NULL,'122109485444306925_436021925702745'),(3,110,'302429626290045_122109485444306925','122109485444306925_460709053299082','Hi Muhammad Awais Zulifqar. Thank you for your interest 😊.If you want more, you can simply make a new comment with the desired additional number and wait for a reply ',NULL,NULL,NULL,'122109485444306925_2453689008152316'),(4,111,'302429626290045_122109485444306925','122109485444306925_391383610545854','Hi Muhammad Awais Zulifqar. Thank you for your interest 😊.If you want more, you can simply make a new comment with the desired additional number and wait for a reply ',NULL,NULL,NULL,'122109485444306925_487177193738463');
/*!40000 ALTER TABLE `facebook_posts_comments_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_03_28_192543_create_products_table',2),(6,'2024_05_19_143812_create_sessions_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_id` int NOT NULL DEFAULT '0',
  `campaign_id` int DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_catlog`
--

DROP TABLE IF EXISTS `product_catlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_catlog` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `product_catlog_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `access_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_catlog`
--

LOCK TABLES `product_catlog` WRITE;
/*!40000 ALTER TABLE `product_catlog` DISABLE KEYS */;
INSERT INTO `product_catlog` VALUES (1,2,'3701091503438786','test',NULL,NULL,'aaa');
/*!40000 ALTER TABLE `product_catlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `stock` int NOT NULL DEFAULT '0',
  `campaign` tinyint(1) NOT NULL DEFAULT '0',
  `response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_information` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_price` double(10,2) DEFAULT NULL,
  `inventory` int DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_weight` double(10,2) DEFAULT NULL,
  `tags` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Penelope Carver',962.00,NULL,0,0,NULL,'2024-03-29 14:59:41','2024-03-29 14:59:41','875',489.00,867,'683','https://www.saqowu.cm',73.00,'[\"Voluptatum natus sed Remove\"]','public/images/o9nCt9o1Zo4PEYSuItY4tRinYju1tjnl9SPjfWmV.png',NULL,2),(2,'Penelope Carver',962.00,NULL,0,0,NULL,'2024-03-29 14:59:57','2024-03-29 15:15:05','875',489.00,867,'683','https://www.saqowu.cm',73.00,'[\"Voluptatum natus sed Remove\"]','public/images/NMJtADhzUI8IASdvQ9FtKYHAFIfJRf4ZJIaZotOI.png','2024-03-29 15:15:05',2),(3,'Yoshi Bartlett',121.00,NULL,0,0,NULL,'2024-03-29 15:15:55','2024-03-29 15:15:55','25',375.00,748,'216','https://www.fimoti.net',145.00,'[\"Dolor quibusdam enim Remove,g Remove\"]','public/images/MbOf9jpHUcep2huFCliUbbjLaycBFWd26uchkjFo.png',NULL,2),(4,'Travis Daniel',936.00,NULL,0,0,NULL,'2024-03-29 15:16:30','2024-03-29 15:16:30','861',640.00,366,'103','https://www.vilykel.org.uk',393.00,'[\"Sed cillum assumenda Remove\"]','public/images/lQ8sbtjLIDsGZDtqdGAMVeYHwvOCrgJh87jwaE1L.jpg',NULL,2),(5,'Penelope Carver',962.00,NULL,0,0,NULL,'2024-03-29 19:41:38','2024-03-29 19:41:38','875',489.00,867,'683','https://www.saqowu.cm',73.00,'[\"Voluptatum natus sed Remove\"]','public/images/jkSy8bMUdlUEWXBWMwCjQoBBLXCnTrcNOxN6torg.jpg',NULL,2),(6,'Martena Frye',41.00,NULL,0,0,NULL,'2024-04-01 15:40:39','2024-04-01 15:40:39','Inventore enim velit',947.00,3,'At magni corporis pe','https://www.kolujed.mobi',99.00,'[\"Cum veniam temporib\"]','public/images/QI2RIzQET1Zxk7scL91QEi3HvrIVPiRRUSS1auqM.jpg',NULL,2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_time_access_token` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_access_token` text COLLATE utf8mb4_unicode_ci,
  `long_token` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `pages_get` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Brianna Stark','loxyhab@mailinator.com',NULL,'$2y$12$IWOabkwzzEGSgrxDQXaZeee2CkEoBZqgJXFOrLsfWlljs680kfjZi',NULL,'2024-03-29 19:21:14','2024-03-29 19:21:14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'N','N'),(2,'awais','awais@gmail.com',NULL,'$2y$12$VOzt5nUQiCkB3kUD0ML82.xOZq07OiBAoLdwCpPoi/OusNTsFY4DW',NULL,'2024-03-29 19:23:14','2024-03-29 19:23:14',NULL,'3701091503438786','137873971954043','102504132303710','1453150808930055','2d468a4e90d951d79194786a5f219c15',NULL,NULL,'N','N'),(3,'awais','awaiszulifqar52@gmail.com',NULL,'$2y$12$nI91Lcg53o6ZSxTcIvrV5.Nb.wdbnjIgh5SksW/J.FJcmLhP5vqnq',NULL,'2024-05-14 15:04:01','2024-05-19 14:42:02','3597049000441446',NULL,NULL,NULL,NULL,NULL,'EAARR7LQi878BO95BtjjbZCzcEbdZB5AFFZBHMpNAZCgIBRZCALsZBnh4mdzE9pgkXsku3VJcyKvT1GKToclFcX7k4vuzNdW7RRDCJZAR6lF1dbUyd2hrdZAVweAGbf4hL7USTBXXulnkGHO4rAutC5ir0qjTySlN87F1i4ZCb0SlZBRo93AQ8GWNvuEEI9baRuPRYGbEBntZB6rS85CH2oNSgZDZD','EAARR7LQi878BO4lesT3qz2DNnEZAyQpZCmCxiYjl2UfgKBzLAVYESOZAKbawBZC5dCqWNEHp1qber9rfdDFP9jI7zDXeZBsZAtQ6AUs6STm7o2LGY3h39yWQ38CRUsuWggjoxYyrkauOMP2GMLkKCyfgXwyqKvGm5XO7E4GrdgcXbWl1zZBCQU5s6GX','Y','Y');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usersa`
--

DROP TABLE IF EXISTS `usersa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usersa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `guid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_guid_unique` (`guid`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersa`
--

LOCK TABLES `usersa` WRITE;
/*!40000 ALTER TABLE `usersa` DISABLE KEYS */;
INSERT INTO `usersa` VALUES (1,'59ffb69e-7057-48f3-8b22-a6a6bc14f723','awais','awais@gmail.com','2024-03-27 05:23:58','$2y$10$vT8VOXNXql1UUUgB4YrAlOicrle8qv8SdHul5m5qfuouTfMEi.M4W',NULL,'2024-03-27 05:23:58','2024-03-27 05:23:58',NULL,NULL,'{\"clientId\":\"1215976983163839\",\"clientSecret\":\"a889313ccf5fcd5263a408071a48c729\",\"authResponse\":{\"userID\":\"3597049000441446\",\"expiresIn\":5327,\"accessToken\":\"EAARR7LQi878BO95BtjjbZCzcEbdZB5AFFZBHMpNAZCgIBRZCALsZBnh4mdzE9pgkXsku3VJcyKvT1GKToclFcX7k4vuzNdW7RRDCJZAR6lF1dbUyd2hrdZAVweAGbf4hL7USTBXXulnkGHO4rAutC5ir0qjTySlN87F1i4ZCb0SlZBRo93AQ8GWNvuEEI9baRuPRYGbEBntZB6rS85CH2oNSgZDZD\",\"signedRequest\":\"OagVwg9vf2oofbTCJLy3bYyw-PTk0VAPjLAWgU5u7xA.eyJ1c2VyX2lkIjoiMzU5NzA0OTAwMDQ0MTQ0NiIsImNvZGUiOiJBUURCbEFkMmxiVjZkMXhCa1drMGdDeWJ0UXRnNGZRRkc2dG9fdlUxbWFqcFJUNGZMdklzeEszWWUzbkpINXRKME5sUEtnd2tKUUp2bWhsaVphcUpNbUJFTHZ4aWZ5eFJMQjRjZDVhWWRYNW9XTTRKRXh1bE5IVjhkMnJxYlprRTk4Z091Qi1Db2RudnJ3OXg4U2pPbDNnVDVoYjktNnhZM1pQV081Wm9rRm5KUVF1Y0NQOGU1ZWJZcTFJMW1YZzF0a19NbDEyY015OFpXMGIzTEVyY1RjRmhpTkFQRERLekxjdl9IcWlwNDFnX25UWDg5ZHpROExyQ2FzNG5qSUE4SXlkNDRWdDIycnlQMjUxUkl3UTFsaGkzMXE2TXZMcElBTFRFenkyZnpxM0NsWTJ2UWpNYXZpN2VjU3hXR3JzLWJCSzFiQ0p4LW03LTRPaTVNVHRjYzFGSCIsImFsZ29yaXRobSI6IkhNQUMtU0hBMjU2IiwiaXNzdWVkX2F0IjoxNzE2MTQ3MDczfQ\",\"graphDomain\":\"facebook\",\"grantedScopes\":\"email,read_insights,catalog_management,pages_show_list,ads_management,pages_messaging,instagram_basic,instagram_manage_comments,instagram_manage_insights,pages_read_engagement,pages_manage_metadata,pages_read_user_content,pages_manage_ads,pages_manage_posts,pages_manage_engagement\",\"data_access_expiration_time\":1723923073},\"response\":{\"authResponse\":{\"userID\":\"3597049000441446\",\"expiresIn\":5327,\"accessToken\":\"EAARR7LQi878BO95BtjjbZCzcEbdZB5AFFZBHMpNAZCgIBRZCALsZBnh4mdzE9pgkXsku3VJcyKvT1GKToclFcX7k4vuzNdW7RRDCJZAR6lF1dbUyd2hrdZAVweAGbf4hL7USTBXXulnkGHO4rAutC5ir0qjTySlN87F1i4ZCb0SlZBRo93AQ8GWNvuEEI9baRuPRYGbEBntZB6rS85CH2oNSgZDZD\",\"signedRequest\":\"OagVwg9vf2oofbTCJLy3bYyw-PTk0VAPjLAWgU5u7xA.eyJ1c2VyX2lkIjoiMzU5NzA0OTAwMDQ0MTQ0NiIsImNvZGUiOiJBUURCbEFkMmxiVjZkMXhCa1drMGdDeWJ0UXRnNGZRRkc2dG9fdlUxbWFqcFJUNGZMdklzeEszWWUzbkpINXRKME5sUEtnd2tKUUp2bWhsaVphcUpNbUJFTHZ4aWZ5eFJMQjRjZDVhWWRYNW9XTTRKRXh1bE5IVjhkMnJxYlprRTk4Z091Qi1Db2RudnJ3OXg4U2pPbDNnVDVoYjktNnhZM1pQV081Wm9rRm5KUVF1Y0NQOGU1ZWJZcTFJMW1YZzF0a19NbDEyY015OFpXMGIzTEVyY1RjRmhpTkFQRERLekxjdl9IcWlwNDFnX25UWDg5ZHpROExyQ2FzNG5qSUE4SXlkNDRWdDIycnlQMjUxUkl3UTFsaGkzMXE2TXZMcElBTFRFenkyZnpxM0NsWTJ2UWpNYXZpN2VjU3hXR3JzLWJCSzFiQ0p4LW03LTRPaTVNVHRjYzFGSCIsImFsZ29yaXRobSI6IkhNQUMtU0hBMjU2IiwiaXNzdWVkX2F0IjoxNzE2MTQ3MDczfQ\",\"graphDomain\":\"facebook\",\"grantedScopes\":\"email,read_insights,catalog_management,pages_show_list,ads_management,pages_messaging,instagram_basic,instagram_manage_comments,instagram_manage_insights,pages_read_engagement,pages_manage_metadata,pages_read_user_content,pages_manage_ads,pages_manage_posts,pages_manage_engagement\",\"data_access_expiration_time\":1723923073},\"status\":\"connected\"}}');
/*!40000 ALTER TABLE `usersa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'fb3'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-20  1:03:36
