/*
SQLyog Community v10.3 
MySQL - 5.1.50-community : Database - hrbestpick
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hrbestpick` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hrbestpick`;

/*Table structure for table `answers` */

DROP TABLE IF EXISTS `answers`;

CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) unsigned NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `answers` */

insert  into `answers`(`id`,`question_id`,`answer`,`created`,`modified`,`user_id`) values (1,1,'good one guys','2013-02-21 16:43:04','2013-02-21 16:43:04',1);

/*Table structure for table `citiessearches` */

DROP TABLE IF EXISTS `citiessearches`;

CREATE TABLE `citiessearches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `city_state` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `citiessearches` */

insert  into `citiessearches`(`id`,`city_name`,`city_state`) values (1,'Chennai','Tamil Nadu'),(2,'Mumbai','Maharashtra'),(3,'Kolkatta','West Bengal'),(4,'New Delhi','Uttar Pradesh'),(5,'Bangalore','Karnataka'),(6,'Hyderabad','Andhra Pradesh');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `content` text,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`id`,`name`,`content`,`post_id`) values (1,'Senthil','This is a good comment',1),(2,'Harihar','This is also good one\r\n	',1);

/*Table structure for table `contactuss` */

DROP TABLE IF EXISTS `contactuss`;

CREATE TABLE `contactuss` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `emailid` varchar(1000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contactuss` */

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `telephone` varchar(10000) NOT NULL,
  `confirmed` varchar(1) NOT NULL DEFAULT '0',
  `confirm_code` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

insert  into `employees`(`id`,`firstname`,`lastname`,`email`,`password`,`city`,`telephone`,`confirmed`,`confirm_code`) values (37,'Senthil','kumar','senthil090680@gmail.com','716dedbea148381325b82206c2c11aaf1dfd8be7','Chennai','044-48250000','1','51406ecd-3530-4af6-bc10-035ccd6442f8'),(38,'senthil','kumar','senthil090681@gmail.com','0a10a416d619ec78f7c84b12f8458151705f2714','Chennai','044-26585000','1','51419e87-409c-4bc1-b904-096ccd6442f8'),(39,'Senthil','kumar','senthilsang24@gmail.com','716dedbea148381325b82206c2c11aaf1dfd8be7','Chennai','044-58898989','1','514d66bc-4ce0-4dda-bb53-0908cd6442f8'),(40,'Rajesh','Kumar','senthilraj@gmail.com','4dd72b625bfc25eccef5cbeb83196c1175fedb1f','chennai','044-20008000','1','515ab656-d0c0-471d-b325-13c4cd6442f8');

/*Table structure for table `employers` */

DROP TABLE IF EXISTS `employers`;

CREATE TABLE `employers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(1000) NOT NULL,
  `emailid` varchar(1000) NOT NULL,
  `pswd` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `contactperson` varchar(1000) NOT NULL,
  `telephone` varchar(1000) NOT NULL,
  `website` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employers` */

/*Table structure for table `hrpostresumes` */

DROP TABLE IF EXISTS `hrpostresumes`;

CREATE TABLE `hrpostresumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_year` varchar(11) NOT NULL DEFAULT '0',
  `exp_month` varchar(10) NOT NULL,
  `joblocation` varchar(250) NOT NULL,
  `myname` varchar(100) DEFAULT NULL,
  `companyname` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `categoryrole` varchar(250) DEFAULT NULL,
  `rolesel` text,
  `keyskills` varchar(250) NOT NULL,
  `joblocation_pre` varchar(250) DEFAULT NULL,
  `jobpresel` text,
  `jobtype` varchar(250) NOT NULL,
  `ug_qualification` varchar(250) NOT NULL,
  `pg_qualification` varchar(250) DEFAULT NULL,
  `resumetitle` varchar(250) NOT NULL,
  `resume` varchar(250) DEFAULT NULL,
  `emailid` varchar(250) NOT NULL,
  `mobileno` varchar(10) NOT NULL DEFAULT '0',
  `phoneno` varchar(12) NOT NULL DEFAULT '0',
  `employee_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `hrpostresumes` */

insert  into `hrpostresumes`(`id`,`exp_year`,`exp_month`,`joblocation`,`myname`,`companyname`,`category`,`categoryrole`,`rolesel`,`keyskills`,`joblocation_pre`,`jobpresel`,`jobtype`,`ug_qualification`,`pg_qualification`,`resumetitle`,`resume`,`emailid`,`mobileno`,`phoneno`,`employee_id`) values (1,'6','6','Mumbai','unkdsf','sw4ekdsfwer','7',NULL,'13,14','kjweklrwe','','Chennai,Mumbai,Kolkatta','Part Time','B.B.A','M.com','wretwlrwelrw','26787_SenthilKumarCV_india.doc','rewrw@dasfdsf.com','3423432432','044-88787878',37);

/*Table structure for table `jobcategories` */

DROP TABLE IF EXISTS `jobcategories`;

CREATE TABLE `jobcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `jobcategories` */

insert  into `jobcategories`(`id`,`category_name`) values (1,'Accounting / Finance'),(2,'Call Center & BPO'),(3,'Education & Teaching'),(4,'Engineering'),(5,'IT'),(6,'Office, Admin & HR'),(7,'Marketing'),(8,'Medical & Health Care'),(9,'Sales'),(10,'Apprentice & Intership'),(11,'Advertising & PR'),(12,'Garments / Merchandising'),(13,'Others');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

/*Table structure for table `posts_tags` */

DROP TABLE IF EXISTS `posts_tags`;

CREATE TABLE `posts_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) unsigned DEFAULT NULL,
  `tag_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `posts_tags` */

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

/*Table structure for table `rolecategories` */

DROP TABLE IF EXISTS `rolecategories`;

CREATE TABLE `rolecategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  `jobcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `rolecategories` */

insert  into `rolecategories`(`id`,`role_name`,`jobcategory_id`) values (1,'Accounts Executive / Accountant',1),(2,'Accounts Manager',1),(3,'Account Services Executive',2),(4,'Data Processing Executive',2),(5,'Prep / Baby Sitting',3),(6,'Primary School',3),(7,'Civil Engineer',4),(8,'Electrical Engineer',4),(9,'Program Manager',5),(10,'Trainee',5),(11,'Admin - Executive',6),(12,'Admin - Head / Manager',6),(13,'Advertising - Manager',7),(14,'Brand Manager',7),(15,'Cardiologist',8),(16,'Consultant',8),(17,'Branch Manager',9),(18,'Other Sales',9),(19,'Content Writer',11),(20,'Journalist',11),(21,'Accessory Designer',12),(22,'Footwear Designer',12),(23,'Legal',13),(24,'Biotech & Pharma',13);

/*Table structure for table `tags` */

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `longname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tags` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `confirmed` varchar(1) NOT NULL DEFAULT '0',
  `confirm_code` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
