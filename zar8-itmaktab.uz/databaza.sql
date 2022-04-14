-- MySQL dump 10.19  Distrib 10.3.32-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: alex_earnest200
-- ------------------------------------------------------
-- Server version	10.3.32-MariaDB

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'Akmalov','abubakirtotliboyev735@uzemailuz.com','hech narsa','oybolta....','2021-12-13 19:34:38'),(2,'nsakjbdkasdfnaskjb','shahzodaktamov8102003@gmail.com','asf aksjfkjas','as fdkjasbfkjsa','2021-12-21 10:35:29');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langs_tests`
--

DROP TABLE IF EXISTS `langs_tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `langs_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sec` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `savol` text NOT NULL,
  `v1` text NOT NULL,
  `v2` text NOT NULL,
  `v3` text NOT NULL,
  `v4` text NOT NULL,
  `answer` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langs_tests`
--

LOCK TABLES `langs_tests` WRITE;
/*!40000 ALTER TABLE `langs_tests` DISABLE KEYS */;
INSERT INTO `langs_tests` VALUES (1,1,1,'savol 1','1','1','1','1','a'),(2,1,2,'savol 2','2','2','2','2','b'),(3,1,3,'3-savol','3','3','3','3','c'),(4,3,1,'savol 1','1','1','1','1','a'),(5,3,2,'savol 2','2','2','2','2','b');
/*!40000 ALTER TABLE `langs_tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `image` text NOT NULL,
  `date_inserted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Abdulla Avloniy haftaligi','2021 yil 5-oktabr kuni Abdulla Avloniy haftaligi munosabati bilan &quot;Maktab-eng uliģ dargoh &quot; mavzusida 4 -&quot;B&quot; sinf òquvchilari  G.Haqberdiyeva ustoz tomonidan ochiq dars soati òtkazildi. Darsda òquvchilar Abdulla Avloniy hayoti haqida, adibning asarlari, hikmatlari va baytlari mazmun mohiyati haqida tushunchaga ega bòldilar. Darsda turli metodlardan foydalanildi. Bundan tashqari 5 ta partiyaga bòlindi va nomlandi. Savollarga tòģri javob bergan har bir partiya ovoz yiģdi, eng kòp ovoz tòplagan guruh ģolib deb topildi.','rasm.jpg','2021-12-16 12:43:47'),(2,'&quot;Kitobxonlikni targ`ib qilish&quot;','Joriy yilning 17-dekabr kuni Zarafshon shahar 8-sonli IATCHO\'IDU maktabida kitobxonlikni keng targ\'ib qilish maqsadida &quot;Har haftada bir kitob&quot; loyihasi asosida 7-&quot;A&quot;,&quot;B&quot;,&quot;V&quot;,&quot;G&quot; sinflar o\'rtasida &quot;Ravshan&quot; dostoni yuzasidan Zakovat intellektual o\'yini bo\'lib o\'tdi. Natijalarga ko\'ra 7-&quot;G&quot; sinf o\'quvchilari g\'oliblikni qo\'lga kiritishdi.','photo_2021-12-18_22-05-24.jpg','2021-12-21 07:17:29'),(3,'&quot;Kitobxonlikni targ`ib qilish&quot;','Joriy yilning 17-dekabr kuni Zarafshon shahar 8-sonli IATCHO\'IDU maktabida kitobxonlikni keng targ\'ib qilish maqsadida &quot;Har haftada bir kitob&quot; loyihasi asosida 7-&quot;A&quot;,&quot;B&quot;,&quot;V&quot;,&quot;G&quot; sinflar o\'rtasida &quot;Ravshan&quot; dostoni yuzasidan Zakovat intellektual o\'yini bo\'lib o\'tdi. Natijalarga ko\'ra 7-&quot;G&quot; sinf o\'quvchilari g\'oliblikni qo\'lga kiritishdi.','photo_2021-12-18_22-05-24.jpg','2021-12-21 07:17:43'),(4,'Har bir haftada bitta kitob loyihasi','Joriy yilning 17-dekabr kuni Zarafshon shahar 8-sonli IATCHO\'IDU maktabida kitobxonlikni keng targ\'ib qilish maqsadida &quot;Har haftada bir kitob&quot; loyihasi asosida 7-&quot;A&quot;,&quot;B&quot;,&quot;V&quot;,&quot;G&quot; sinflar o\'rtasida &quot;Ravshan&quot; dostoni yuzasidan Zakovat intellektual o\'yini bo\'lib o\'tdi. Natijalarga ko\'ra 7-&quot;G&quot; sinf o\'quvchilari g\'oliblikni qo\'lga kiritishdi.','photo_2021-12-18_22-05-22.jpg','2021-12-21 07:19:23'),(5,'Maktablarda yo‘l harakati qoidalari bilan shug‘ullanuvchi katta inspektor lavozimi joriy qilinadi','Maktablarda yo‘l harakati qoidalari bilan shug‘ullanuvchi katta inspektor lavozimi joriy qilinadi  ▪️Tegishli qonun loyihasiga ko‘ra (https://regulation.gov.uz/uz/d/54482), katta inspektor lavozimi amaldagi shtat birligi doirasida joriy etiladi.   Katta inspektorlar targ‘ibot olib borish, tadbirlar tashkillashtirish, ularni OAVda yoritish, yo‘l harakati qoidalarining o‘qitilishini monitoring qilib borish bilan shug‘ullanadi.','photo_2021-12-21_09-58-00.jpg','2021-12-21 07:20:51'),(6,'Maktablarda yo‘l harakati qoidalari bilan shug‘ullanuvchi katta inspektor lavozimi joriy qilinadi','Maktablarda yo‘l harakati qoidalari bilan shug‘ullanuvchi katta inspektor lavozimi joriy qilinadi  ▪️Tegishli qonun loyihasiga ko‘ra (https://regulation.gov.uz/uz/d/54482), katta inspektor lavozimi amaldagi shtat birligi doirasida joriy etiladi.   Katta inspektorlar targ‘ibot olib borish, tadbirlar tashkillashtirish, ularni OAVda yoritish, yo‘l harakati qoidalarining o‘qitilishini monitoring qilib borish bilan shug‘ullanadi.','photo_2021-12-21_09-58-00.jpg','2021-12-21 07:21:31'),(7,'5 ta muhim tashabbus','Zarafshon shahar ta\'lim tizimida O‘zbekiston Respublikasi Prezidenti Shavkat Mirziyoyev  2019-yilning 19-mart kuni ilgari surgan 5 ta muhim tashabbusining Uchinchi tashabbus – aholi va yoshlar o‘rtasida kompyuter texnologiyalari va internetdan samarali foydalanishni tashkil etishga qaratilgan bo‘lib, ushbu tashabbus doirasida umumta\'lim, ixtisoslashtirilgan umumta\'lim  muassasalarining o‘qituvchilari va o‘quvchilari o‘rtasida “HAKATON” ko‘rik-tanloviga start berildi.','photo_2021-12-20_14-25-54.jpg','2021-12-21 07:21:52'),(8,'salom','abdfkjasbjkdf','bozorova.jpg','2021-12-21 10:37:26');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,2,1,1),(2,2,1,0),(3,7,1,0),(4,7,1,0),(5,7,1,0),(6,7,1,0),(7,7,1,0),(8,7,1,0),(9,7,1,0),(10,1,1,0);
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `theme` text NOT NULL,
  `class` int(11) NOT NULL,
  `number_test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (1,'ona_tili','1-5-dars',9,3),(2,'algebra','1-5-dars',10,2),(3,'fizika','5-10-dars',10,2);
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `other_information` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Abdullayeva','Salomat','Fizika fani o`qituvchisi','Oliy malakali o`qituvchi','salomat ustoz.jpg'),(2,'Zilola','Bozorova','Biologiya fani o`qituvchisi','Oliy malakali o`qituvchi, 2006-yil O`zbekiston Respublikasi Xalq ta`limi a`lochisi unvoni sohibi','bozorova.jpg');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `class` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Diyorbek','shokirovdiyorbek2004@gmail.com','df10ef8509dc176d733d59549e7dbfaf',0,1),(2,'Temurbek','temurbekboymurodov03@gmail.com','df10ef8509dc176d733d59549e7dbfaf',1,0),(3,'Timur','temurbekboymurodov02@gmail.com','df10ef8509dc176d733d59549e7dbfaf',5,0),(4,'Sherzod','pnew14267@gmail.com','0ef72ff8b37121812acea35688b8922f',11,0),(5,'shoxzod','konfutsiygerodot@gmail.com','d5d4ff228fd004f52528645c62d551bf',0,0),(6,'Alex_Earnest','sherniyozov2004@gmail.com','df10ef8509dc176d733d59549e7dbfaf',11,0),(7,'Shaha','shahzodaktamov8102003@gmail.com','df10ef8509dc176d733d59549e7dbfaf',0,1),(8,'Wild Wolf','pochta@gmail.sum','83422503bcfc01d303030e8a7cc80efc',0,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `class` int(11) NOT NULL,
  `subject` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (3,'https://youtu.be/X6Uc1pQ_H8I?list=PLNCH61HGRotxTAZn98iGOHcAzIwsZqSmX',9,'algebra');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-25 16:49:18
