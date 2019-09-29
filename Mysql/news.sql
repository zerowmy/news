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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `ad_id` int(4) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(24) NOT NULL,
  `ad_psd` varchar(16) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin'),(2,'wmy','wmy1992');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_tb`
--

DROP TABLE IF EXISTS `news_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_tb` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_type` enum('title','car','edu','finance','science','history','social','video','sport','military') NOT NULL,
  `n_title` varchar(90) NOT NULL,
  `n_content` longtext NOT NULL COMMENT '新闻主表内容',
  `n_date` date NOT NULL,
  `n_author` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_tb`
--

LOCK TABLES `news_tb` WRITE;
/*!40000 ALTER TABLE `news_tb` DISABLE KEYS */;
INSERT INTO `news_tb` VALUES (1,'title','大学生的未来何去何从','现在的大学生是越来越多了，就业面临这巨大压力，但是，这也提高了社会的竞争力，能推动社会进步！','2017-05-13','Zero'),(2,'science','外星离地球多远有外星人','我们大家都想知道，在地球之外有没有外星人，特别是在离地球很近的地方有生命吗？人类正在一步一步的探索者……','2017-05-13','zero'),(3,'science','外星离地球多远有外星人','我们大家都想知道，在地球之外有没有外星人，特别是在离地球很近的地方有生命吗？人类正在一步一步的探索者……','2017-05-13','zero'),(4,'science','外星离地球多远有外星人','外星离地球多远有外星人？我们大家都想知道，在地球之外有没有外星人，特别是在离地球很近的地方有生命吗？人类正在一步一步的探索者……','2017-05-13','Jerry'),(5,'social','现在行骗都快成一个行业了','究竟是社会的人心太冷漠还是骗子太多，让人都不敢伸出援助之手…………','2017-05-13','知心'),(6,'social','现在行骗都快成一个行业了','唉！究竟是社会的人心太冷漠还是骗子太多，让人都不敢伸出援助之手…………','2017-05-13','知心'),(7,'social','现在行骗都快成一个行业了','唉！究竟是社会的人心太冷漠还是骗子太多，让人都不敢伸出援助之手…………','2017-05-13','知心'),(8,'social','现在行骗都快成一个行业了','唉！究竟是社会的人心太冷漠还是骗子太多，让人都不敢伸出援助之手…………','2017-05-13','知心'),(9,'social','惹我？','方法各位如果我跟他让人提高我；而冷静客观为了克服就够了，无非岗位； 我二哥v','2017-05-13','魏月弦'),(10,'title','热天','我热高温热过分的温热岗位，我如果问题温热他温热感温热岗位如果问过我干不完我听过；无人同我热天波尔；wrowoio-iqryyr请问分开了唱Kv就跑了看到飞机篇课文加热。其二为让妻儿v妻儿；期待欺负恶化v……','2017-05-13','wer'),(11,'title','测试字数','啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀一一一一一去去去去去','2017-05-13','www'),(12,'edu','增加字数','啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等等等烦烦烦烦烦啪啪啪啪啪哦哦哦哦哦一一一一一去去去去去啊啊啊啊啊杀杀杀杀杀等等等等一一一一去去去去去我热高温热过分的温热岗位，我如果问题温热他温热感温热岗位如果问过我干不完我听过；无人同我热天波尔；wrowoio-iqryyr请问分开了唱Kv就跑了看到飞机篇课文加热。其二为让妻儿v妻儿；期待欺负恶化v……方法各位如果我跟他让人提高我；而冷静客观为了克服就够了，无非岗位； 我二哥v唉！究竟是社会的人心太冷漠还是骗子太多，让人都不敢伸出援助之手…………外星离地球多远有外星人？我们大家都想知道，在地球之外有没有外星人，特别是在离地球很近的地方有生命吗？人类正在一步一步的探索者……','2017-05-13','月弦'),(13,'title','好好学习天天向上','按当时发生的vas分爱上孚日股份深V阿斯顿玩儿通过我二哥v地方v','2017-05-13','wmy'),(14,'title','中国人啊','这世界，怎么了？不同的人经历不同，所以对这个社会的态度就会不一样！','2017-05-13','Jerry'),(15,'military','核武器的危害','我们大多数恩都知道，二战首例在战争中使用过核武器----原子弹；是的，听到这个词，大多数人都感到害怕，它的爆炸会使某些地方是今年寸草不生，还持续的对周放出有放射性的物质，被人体吸收不是基因突变就是重病更甚者是直接死亡，完全不合适人类生存！','2017-05-13','小弦'),(16,'science','未来的能源会枯竭吗？','未来的能源会枯竭吗?当然会啦！不过那个时候还会发现新能源的！','2017-05-13','Zero'),(17,'social','母亲节到了，如何表达心意','母亲节到了，如何表达心意？哎呀，怎么说了！此时，心里想了很多，不知如何去说，好吧，到这里暂时省略5000字…………','2017-05-14','侠名'),(18,'finance','如何学会理财','学会理财，有很多好处哦！','2017-05-14','沃力本掐'),(19,'sport','世界杯，中国何去何从？','曾经听到这么一句对联，形容中国足球的：“试问中国男足能有几多愁，恰似一群太监上青楼；横批：无人能射”，由此可以看到当今的中国男足的水平了！','2017-05-14','网络发布者'),(20,'history','观天今夜星象，知天下大事---诸葛亮','曾经在三国时期，有个名叫诸葛亮的谋士，天下事无所不知，只要他掐指一算，基本没有他算不出来的事情，更精准的是，它可以夜观天上的星象，就能预测未来的大事，他的木流牛马到现在还没有人弄清楚是什么原理，他的奇门遁甲更是精妙深奥！现在被好多人研究者呢！','2017-05-14','历史爱好者'),(21,'car','汽车，方便者人们的出行','以前，汽车很少，能用的人也屈指可数，但是，现在，在马路上到处都是汽车，搞不好这个出行方便的汽车太多，堵在路上，却阻了人们的行驶，这个可笑吗?','2017-05-14','无极剑圣');
/*!40000 ALTER TABLE `news_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_type`
--

DROP TABLE IF EXISTS `news_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('sport','video','social','science','history','military','finance','edu','car','title') NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_type`
--

LOCK TABLES `news_type` WRITE;
/*!40000 ALTER TABLE `news_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_type` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `user` VALUES (1,'魏明遥','wmy1992','1',1992,'771698522@qq.com'),(2,'魏明焱','wmy1994','1',1994,'xxxxxxx@gmail.com'),(3,'魏明慧','wmh1991','0',1991,'xxxxxxx@gmail.com'),(4,'zero','zero123456','0',1995,'zero_wmy@163.com'),(5,'月弦心','yxx1992','0',1992,'yuexianxin@gmail.com'),(6,'bird','bird123','0',2017,'yyyyyy@gmail.com'),(7,'Jerry','Jerry','1',1992,'xxxxxxx@gmail.com'),(8,'陈锋','123456','1',1999,'chenfeng@gmail.com'),(9,'小可','xk123456','0',1995,'yyyyyy@gmail.com'),(10,'小弦','xx123456','1',1995,'xxxxxxx@gmail.com'),(11,'嘉儿','jiaer','0',1995,'jiaer@126.com'),(12,'小魏','xw123456','1',1992,'xw@gmail.com'),(13,'啊哦额咦唔喻','aoeiuv','0',1997,'1314520@qq.com'),(14,'喵喵','mm123456','0',1999,'miaomiao@qq.com'),(15,'去问问武器','qqqqqq','0',1999,'adfqewq@qq.com'),(16,'恰似你的温柔','qsndwr','0',1987,'qsndwr@126.com'),(17,'qqqq','qqqqqq','0',1992,'asdsf@gmail.com'),(18,'wwwwww','wwwwwwww','0',1999,'wwwwwww@gmail.com'),(19,'qwer','qwer','0',1933,'qwer@zero.com'),(20,'嗷嗷嗷啊','aaaaa','0',1992,'qqqq@qq.com'),(21,' 张三丰','zhang','1',1970,'hang@123.com'),(22,'weimingyao','weimingyao','0',1992,'weimingyao@111.com'),(23,'恰似你的抢我的','恰似你的抢我的','0',1992,'qwrew@dfs.com'),(24,'phpstudy','phpstudy','0',1992,'phpstudy@php.com'),(25,'javaStudy','javaStudy','1',1992,'javaStudy@php.com'),(26,'qqqqqq','qqqqqq','1',1997,'qqqqqq@qq.com'),(27,'就就试试','111111','1',1998,'111111@qqq.com'),(28,'newbied','newbied','0',1992,'newbied@qq.com');
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

-- Dump completed on 2018-12-24 10:09:31
