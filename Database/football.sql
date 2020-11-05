/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.1.52-community : Database - football
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `football`;

USE `football`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `coach` */

DROP TABLE IF EXISTS `coach`;

CREATE TABLE `coach` (
  `clicenceno` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `teamid` varchar(20) NOT NULL,
  `picc` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `coach` */

insert  into `coach`(`clicenceno`,`name`,`nationality`,`teamid`,`picc`) values ('1','suresh','indai','1','pic/football-tournament-banner_94250-89.jpg');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `uname` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `remarks` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`uname`,`mobile`,`email`,`remarks`) values ('rahul','1212121212','ra@gmail.com','dkdkdkdkd\r\nddddd\r\nddkdkdkd');

/*Table structure for table `goals` */

DROP TABLE IF EXISTS `goals`;

CREATE TABLE `goals` (
  `goalid` varchar(20) DEFAULT NULL,
  `gameid` varchar(20) DEFAULT NULL,
  `teamid` varchar(20) DEFAULT NULL,
  `playerid` varchar(20) DEFAULT NULL,
  `minute` varchar(20) DEFAULT NULL,
  `half` varchar(20) DEFAULT NULL,
  `goaltype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `goals` */

insert  into `goals`(`goalid`,`gameid`,`teamid`,`playerid`,`minute`,`half`,`goaltype`) values ('1','1','1','1','15','2','www');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `utype` varchar(20) DEFAULT 'user',
  `loginid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`utype`,`loginid`,`password`) values ('admin','admin','admin'),('user','ra@gmail.com','123456'),('user','an@gmail.com','123456');

/*Table structure for table `matches` */

DROP TABLE IF EXISTS `matches`;

CREATE TABLE `matches` (
  `matchid` varchar(10) NOT NULL,
  `hometeam` varchar(20) NOT NULL,
  `awayteam` varchar(20) NOT NULL,
  `homescore` varchar(20) NOT NULL,
  `awayscore` varchar(20) NOT NULL,
  `stadiumname` varchar(20) NOT NULL,
  `matchtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matches` */

insert  into `matches`(`matchid`,`hometeam`,`awayteam`,`homescore`,`awayscore`,`stadiumname`,`matchtime`) values ('1','kkk','kkk','78','67','jkkk','12.00');

/*Table structure for table `players` */

DROP TABLE IF EXISTS `players`;

CREATE TABLE `players` (
  `pid` varchar(10) NOT NULL,
  `plicenceno` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `contractstatedate` varchar(20) NOT NULL,
  `contractenddate` varchar(20) NOT NULL,
  `placeofbirth` varchar(20) NOT NULL,
  `dateofbirth` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teamid` varchar(20) NOT NULL,
  `picc` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `players` */

insert  into `players`(`pid`,`plicenceno`,`nationality`,`contractstatedate`,`contractenddate`,`placeofbirth`,`dateofbirth`,`name`,`teamid`,`picc`) values ('1','121','rahul','india','18-06-2020','01-11-2020','sss','29-11-2001','1','pic/istockphoto-961254322-1024x1024.jpg');

/*Table structure for table `referee` */

DROP TABLE IF EXISTS `referee`;

CREATE TABLE `referee` (
  `rlicenceno` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `picc` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `referee` */

insert  into `referee`(`rlicenceno`,`city`,`name`,`picc`) values ('1','ankit','nagpur','pic/102174391-football-tournament-banner-with-information-vector-illustration-graphic-design.jpg');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `uid` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`uid`,`mob`,`email`,`password`) values ('ruchir','3232323232','r@gmail.com','123456'),('rahul','1515151515','dd@gmail.com','123456'),('rahul','1212121212','ra@gmail.com','123456'),('aniket','3232323232','an@gmail.com','123456');

/*Table structure for table `stadium` */

DROP TABLE IF EXISTS `stadium`;

CREATE TABLE `stadium` (
  `stadiumid` varchar(20) DEFAULT NULL,
  `stadiumname` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `surfacetype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stadium` */

insert  into `stadium`(`stadiumid`,`stadiumname`,`city`,`capacity`,`surfacetype`) values ('1','rahul','bhilai','23','sd');

/*Table structure for table `team` */

DROP TABLE IF EXISTS `team`;

CREATE TABLE `team` (
  `teamid` int(10) NOT NULL,
  `licenceno` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `managername` varchar(20) NOT NULL,
  `shortname` varchar(20) NOT NULL,
  `countrycode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `team` */

insert  into `team`(`teamid`,`licenceno`,`location`,`name`,`managername`,`shortname`,`countrycode`) values (1,'223323','ss','das','saf','ss','aaa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
