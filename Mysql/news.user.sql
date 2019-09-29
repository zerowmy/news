-- MySQL dump 10.13  Distrib 5.6.35, for Win64 (x86_64)
--
-- Host: localhost    Database: news
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `userpsd` varchar(20) NOT NULL,
  `usesex` enum('0','1') NOT NULL DEFAULT '0',
  `borndate` int(4) NOT NULL DEFAULT '1999',
  `email` varchar(20) NOT NULL DEFAULT 'xxxxxxx@gmail.com',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'魏明遥','wmy1992','1',1992,'771698522@qq.com'),(2,'魏明焱','wmy1994','1',1994,'xxxxxxx@gmail.com'),(3,'魏明慧','wmh1991','0',1991,'xxxxxxx@gmail.com'),(4,'zero','zero123456','0',1995,'zero_wmy@163.com'),(5,'月弦心','yxx1992','0',1992,'yuexianxin@gmail.com'),(6,'bird','bird123','0',2017,'yyyyyy@gmail.com'),(7,'Jerry','Jerry','1',1992,'xxxxxxx@gmail.com'),(8,'陈锋','123456','1',1999,'chenfeng@gmail.com'),(9,'小可','xk123456','0',1995,'yyyyyy@gmail.com'),(10,'小弦','xx123456','1',1995,'xxxxxxx@gmail.com'),(11,'嘉儿','jiaer','0',1995,'jiaer@126.com'),(12,'小魏','xw123456','1',1992,'xw@gmail.com'),(23,'啊哦额咦唔喻','aoeiuv','0',1997,'1314520@qq.com'),(14,'喵喵','mm123456','0',1999,'miaomiao@qq.com'),(15,'去问问武器','qqqqqq','0',1999,'adfqewq@qq.com'),(16,'恰似你的温柔','qsndwr','0',1987,'qsndwr@126.com'),(27,'qqqq','qqqqqq','0',1992,'asdsf@gmail.com'),(28,'wwwwww','wwwwwwww','0',1999,'wwwwwww@gmail.com'),(29,'qwer','qwer','0',1933,'qwer@zero.com'),(30,'嗷嗷嗷啊','aaaaa','0',1992,'qqqq@qq.com'),(31,' 张三丰','zhang','1',1970,'hang@123.com'),(32,'weimingyao','weimingyao','0',1992,'weimingyao@111.com'),(33,'恰似你的抢我的','恰似你的抢我的','0',1992,'qwrew@dfs.com'),(34,'phpstudy','phpstudy','0',1992,'phpstudy@php.com'),(35,'javaStudy','javaStudy','1',1992,'javaStudy@php.com'),(36,'qqqqqq','qqqqqq','1',1997,'qqqqqq@qq.com'),(37,'就就试试','111111','1',1998,'111111@qqq.com'),(38,'newbied','newbied','0',1992,'newbied@qq.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-24 10:09:57
