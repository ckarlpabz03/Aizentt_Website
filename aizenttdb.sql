-- MySqlBackup.NET 2.0.9.2
-- Dump Time: 2020-07-29 16:17:14
-- --------------------------------------
-- Server version 5.7.26-log MySQL Community Server (GPL)

-- 
-- Create schema aizenttdb
-- 

CREATE DATABASE IF NOT EXISTS `aizenttdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
Use `aizenttdb`;



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 
-- Definition of feedback_users
-- 

DROP TABLE IF EXISTS `feedback_users`;
CREATE TABLE IF NOT EXISTS `feedback_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `messages` text NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table feedback_users
-- 

/*!40000 ALTER TABLE `feedback_users` DISABLE KEYS */;
INSERT INTO `feedback_users`(`id`,`fullname`,`email_address`,`subject`,`messages`,`created_at`) VALUES
(1,'Carl Angelo Pablea','carlangelo.pablea@gmail.com','Sample','Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"','2019-05-28'),
(2,'Arvin Medina','arvinmedina@gmail.com','sampleArvin','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit debitis obcaecati, non architecto tenetur corporis.','2019-05-28'),
(3,'JOWIN CUETO','jowin@qstrike.com','DISQONEQ','TANGNA MO PABS, BAT PURO MODAL!','2020-07-23'),
(4,'John Doe','jd@gmail.com','SAample','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','2020-07-23'),
(5,'JOWIN CUETO','jowin@qstrike.com','USE GRAMMARLY DAMO!','\"GIS'' registration system allows school registrar to organize student records and reports in compliance to DepEd. It also keeps records of students'' profile and personal information. The printing of report cards, registration of new students are organized and convenient to use and on demand anytime anywhere via the internet. \"\r\n\r\nTANGNA MO PABS, MALI MALI GRAMMAR MO','2020-07-23');
/*!40000 ALTER TABLE `feedback_users` ENABLE KEYS */;

-- 
-- Definition of headers
-- 

DROP TABLE IF EXISTS `headers`;
CREATE TABLE IF NOT EXISTS `headers` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table headers
-- 

/*!40000 ALTER TABLE `headers` DISABLE KEYS */;

/*!40000 ALTER TABLE `headers` ENABLE KEYS */;

-- 
-- Definition of pages
-- 

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `labels` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table pages
-- 

/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages`(`id`,`name`,`labels`) VALUES
(1,'About','About'),
(2,'Services','Services'),
(3,'Company','Company');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- 
-- Definition of pages_informations
-- 

DROP TABLE IF EXISTS `pages_informations`;
CREATE TABLE IF NOT EXISTS `pages_informations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table pages_informations
-- 

/*!40000 ALTER TABLE `pages_informations` DISABLE KEYS */;
INSERT INTO `pages_informations`(`id`,`page_id`,`title`,`body`,`image_name`) VALUES
(1,1,'Our Vision','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-vision.jpg'),
(2,1,'Our Mission','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-mission.jpg'),
(3,2,'System1','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-vision.jpg'),
(4,2,'System2','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\ndummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-mission.jpg'),
(5,2,'System3','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-plan.jpg'),
(6,2,'System4','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-vision.jpg'),
(7,2,'System5','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-mission.jpg'),
(8,2,'System6','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-plan.jpg'),
(9,2,'System7','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','about-vision.jpg'),
(11,3,'Company','dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','');
/*!40000 ALTER TABLE `pages_informations` ENABLE KEYS */;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2020-07-29 16:17:15
-- Total time: 0:0:0:0:453 (d:h:m:s:ms)
