<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewslog` values('1','admin','2016-05-16 14:55:20','113.109.30.141','1','','0','0');");
E_D("replace into `phome_enewslog` values('2','admin','2016-05-16 17:33:36','113.109.30.141','1','','0','0');");
E_D("replace into `phome_enewslog` values('3','admin','2016-05-17 08:28:52','113.109.31.82','1','','0','0');");
E_D("replace into `phome_enewslog` values('4','admin','2016-05-17 12:59:46','58.63.157.62','1','','0','0');");
E_D("replace into `phome_enewslog` values('5','admin','2016-05-17 15:31:30','113.109.29.195','1','','0','0');");
E_D("replace into `phome_enewslog` values('6','admin','2016-05-18 08:53:54','183.5.61.112','1','','0','0');");
E_D("replace into `phome_enewslog` values('7','admin','2016-05-18 15:41:34','119.131.218.212','1','','0','0');");
E_D("replace into `phome_enewslog` values('8','admin','2016-05-19 09:43:36','183.53.242.7','1','','0','0');");
E_D("replace into `phome_enewslog` values('9','admin','2016-05-20 08:44:23','116.22.249.217','1','','0','0');");
E_D("replace into `phome_enewslog` values('10','admin','2016-05-20 17:49:59','116.22.249.217','1','','0','0');");
E_D("replace into `phome_enewslog` values('11','admin','2016-05-20 21:09:35','113.109.72.178','1','','0','0');");
E_D("replace into `phome_enewslog` values('12','admin','2016-05-21 10:30:57','116.22.248.190','1','','0','0');");
E_D("replace into `phome_enewslog` values('13','admin','2016-05-21 14:15:22','116.22.248.190','1','','0','0');");
E_D("replace into `phome_enewslog` values('14','admin','2016-05-22 11:17:17','113.109.29.135','1','','0','0');");
E_D("replace into `phome_enewslog` values('15','admin','2016-05-23 09:27:57','113.109.29.135','0','','0','0');");
E_D("replace into `phome_enewslog` values('16','admin','2016-05-23 09:28:04','113.109.29.135','1','','0','0');");
E_D("replace into `phome_enewslog` values('17','admin','2016-05-23 14:16:19','113.65.195.154','1','','0','0');");
E_D("replace into `phome_enewslog` values('18','admin','2016-05-24 09:35:58','113.65.195.154','1','','0','0');");
E_D("replace into `phome_enewslog` values('19','admin','2016-05-24 12:42:10','113.65.195.154','1','','0','0');");
E_D("replace into `phome_enewslog` values('20','admin','2016-05-24 17:20:43','113.65.122.82','1','','0','0');");
E_D("replace into `phome_enewslog` values('21','admin','2016-05-25 09:14:28','119.131.217.252','1','','0','0');");
E_D("replace into `phome_enewslog` values('22','admin','2016-05-25 09:24:48','119.131.217.252','1','','0','0');");
E_D("replace into `phome_enewslog` values('23','admin','2016-05-25 10:56:40','119.131.217.252','1','','0','0');");
E_D("replace into `phome_enewslog` values('24','admin','2016-05-25 15:20:48','119.131.217.250','1','','0','0');");
E_D("replace into `phome_enewslog` values('25','admin','2016-05-25 19:02:14','218.19.156.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('26','admin','2016-05-25 19:30:18','218.19.156.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('27','admin','2016-05-26 12:31:23','218.19.156.90','1','','0','0');");
E_D("replace into `phome_enewslog` values('28','admin','2016-05-26 12:36:29','218.19.156.90','1','','0','0');");
E_D("replace into `phome_enewslog` values('29','admin','2016-05-26 16:15:07','113.109.30.191','0','','0','0');");
E_D("replace into `phome_enewslog` values('30','admin','2016-05-26 16:15:14','113.109.30.191','1','','0','0');");
E_D("replace into `phome_enewslog` values('31','admin','2016-05-26 23:56:50','113.109.30.219','0','','0','0');");
E_D("replace into `phome_enewslog` values('32','admin','2016-05-26 23:57:00','113.109.30.219','1','','0','0');");
E_D("replace into `phome_enewslog` values('33','admin','2016-05-27 10:44:59','113.65.128.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('34','admin','2016-05-27 13:11:21','113.65.128.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('35','admin','2016-05-27 16:32:06','113.65.128.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('36','admin','2016-05-27 17:17:42','113.65.128.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('37','admin','2016-05-27 18:10:02','113.65.128.101','1','','0','0');");
E_D("replace into `phome_enewslog` values('38','admin','2016-05-28 21:50:00','113.109.74.170','1','','0','0');");
E_D("replace into `phome_enewslog` values('39','admin','2016-05-29 09:20:33','119.131.218.25','0','','0','0');");
E_D("replace into `phome_enewslog` values('40','admin','2016-05-29 09:20:41','119.131.218.25','0','','0','0');");
E_D("replace into `phome_enewslog` values('41','admin','2016-05-29 09:20:48','119.131.218.25','1','','0','0');");
E_D("replace into `phome_enewslog` values('42','admin','2016-05-29 21:37:37','113.109.74.169','0','','0','0');");
E_D("replace into `phome_enewslog` values('43','admin','2016-05-29 21:37:44','113.109.74.169','1','','0','0');");
E_D("replace into `phome_enewslog` values('44','admin','2016-05-30 11:58:48','183.5.70.0','1','','0','0');");
E_D("replace into `phome_enewslog` values('45','admin','2016-05-30 14:43:21','218.19.156.69','1','','0','0');");
E_D("replace into `phome_enewslog` values('46','admin','2016-05-30 21:56:11','218.19.156.69','1','','0','0');");
E_D("replace into `phome_enewslog` values('47','admin','2016-05-31 08:22:13','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('48','admin','2016-05-31 08:22:20','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('49','admin','2016-05-31 08:22:27','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('50','admin','2016-05-31 10:59:32','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('51','admin','2016-05-31 10:59:39','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('52','admin','2016-05-31 14:02:49','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('53','admin','2016-05-31 16:41:12','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('54','admin','2016-05-31 16:43:25','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('55','admin','2016-05-31 19:37:41','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('56','admin','2016-05-31 19:37:46','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('57','admin','2016-05-31 19:37:52','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('58','admin','2016-05-31 20:00:07','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('59','admin','2016-05-31 20:21:00','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('60','admin','2016-05-31 20:23:13','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('61','admin','2016-05-31 21:15:10','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('62','admin','2016-05-31 21:21:22','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('63','admin','2016-05-31 21:27:14','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('64','admin','2016-05-31 22:07:02','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('65','admin','2016-05-31 22:07:09','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('66','admin','2016-05-31 22:07:15','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('67','admin','2016-05-31 22:07:23','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('68','admin','2016-05-31 22:18:00','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('69','admin','2016-05-31 22:18:06','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('70','admin','2016-05-31 22:36:54','116.22.251.166','0','','0','0');");
E_D("replace into `phome_enewslog` values('71','admin','2016-05-31 22:48:22','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('72','admin','2016-05-31 22:50:50','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('73','admin','2016-05-31 22:51:25','116.22.251.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('74','admin','2016-06-01 12:10:17','39.67.117.174','0','','0','0');");
E_D("replace into `phome_enewslog` values('75','admin','2016-06-01 12:10:30','39.67.117.174','0','','0','0');");
E_D("replace into `phome_enewslog` values('76','admin','2016-06-01 19:19:49','113.109.29.116','1','','0','0');");
E_D("replace into `phome_enewslog` values('77','admin','2016-06-02 11:35:48','116.22.184.17','1','','0','0');");
E_D("replace into `phome_enewslog` values('78','admin','2016-06-02 11:36:22','116.22.184.17','0','','0','0');");
E_D("replace into `phome_enewslog` values('79','admin','2016-06-02 12:29:00','113.109.72.139','1','','0','0');");
E_D("replace into `phome_enewslog` values('80','admin','2016-06-02 18:44:37','113.65.130.100','0','','0','0');");
E_D("replace into `phome_enewslog` values('81','admin','2016-06-02 18:44:42','113.65.130.100','0','','0','0');");
E_D("replace into `phome_enewslog` values('82','admin','2016-06-02 18:44:48','113.65.130.100','1','','0','0');");
E_D("replace into `phome_enewslog` values('83','admin','2016-06-03 11:06:52','122.226.125.226','0','','0','0');");
E_D("replace into `phome_enewslog` values('84','admin','2016-06-03 11:06:57','122.226.125.226','0','','0','0');");
E_D("replace into `phome_enewslog` values('85','admin','2016-06-03 11:07:00','122.226.125.226','0','','0','0');");
E_D("replace into `phome_enewslog` values('86','admin','2016-06-06 14:33:06','113.109.30.208','1','','0','0');");
E_D("replace into `phome_enewslog` values('87','admin','2016-06-07 16:02:20','58.63.157.114','1','','0','0');");
E_D("replace into `phome_enewslog` values('88','admin','2016-06-08 15:04:28','58.63.156.152','1','','0','0');");
E_D("replace into `phome_enewslog` values('89','admin','2016-06-08 15:51:51','58.63.156.152','1','','0','0');");
E_D("replace into `phome_enewslog` values('90','admin','2016-06-10 18:20:13','119.131.218.107','1','','0','0');");
E_D("replace into `phome_enewslog` values('91','admin','2016-06-11 11:39:24','119.131.218.11','1','','0','0');");
E_D("replace into `phome_enewslog` values('92','admin','2016-06-11 12:22:07','119.131.218.11','1','','0','0');");
E_D("replace into `phome_enewslog` values('93','admin','2016-06-11 19:35:44','113.109.30.85','1','','0','0');");
E_D("replace into `phome_enewslog` values('94','admin','2016-06-12 12:47:50','183.5.66.231','1','','0','0');");
E_D("replace into `phome_enewslog` values('95','admin','2016-06-12 15:22:37','183.5.66.231','1','','0','0');");
E_D("replace into `phome_enewslog` values('96','admin','2016-06-12 19:45:47','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('97','admin','2016-06-12 19:45:56','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('98','admin','2016-06-12 19:46:04','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('99','admin','2016-06-12 19:46:09','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('100','admin','2016-06-12 19:46:57','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('101','admin','2016-06-12 19:48:05','183.5.66.231','1','','0','0');");
E_D("replace into `phome_enewslog` values('102','admin','2016-06-12 20:49:07','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('103','admin','2016-06-12 20:49:15','183.5.66.231','1','','0','0');");
E_D("replace into `phome_enewslog` values('104','admin','2016-06-12 21:50:25','183.5.66.231','0','','0','0');");
E_D("replace into `phome_enewslog` values('105','admin','2016-06-12 21:50:36','183.5.66.231','1','','0','0');");
E_D("replace into `phome_enewslog` values('106','admin','2016-06-14 11:23:47','119.131.218.111','1','','0','0');");
E_D("replace into `phome_enewslog` values('107','admin','2016-06-15 16:44:52','113.109.29.132','1','','0','0');");
E_D("replace into `phome_enewslog` values('108','admin','2016-06-15 18:58:32','116.22.184.222','1','','0','0');");
E_D("replace into `phome_enewslog` values('109','admin','2016-06-19 11:42:27','113.109.31.166','1','','0','0');");
E_D("replace into `phome_enewslog` values('110','admin','2016-06-19 17:14:29','183.53.242.36','1','','0','0');");
E_D("replace into `phome_enewslog` values('111','admin','2016-06-19 19:21:13','183.53.242.36','1','','0','0');");
E_D("replace into `phome_enewslog` values('112','admin','2016-06-19 23:03:18','183.53.242.36','1','','0','0');");
E_D("replace into `phome_enewslog` values('113','admin','2016-06-20 10:47:56','113.109.31.162','1','','0','0');");
E_D("replace into `phome_enewslog` values('114','admin','2016-06-20 12:24:02','113.109.31.162','1','','0','0');");
E_D("replace into `phome_enewslog` values('115','admin','2016-06-20 13:19:39','113.65.146.91','1','','0','0');");
E_D("replace into `phome_enewslog` values('116','admin','2016-06-21 10:17:31','113.109.30.255','1','','0','0');");
E_D("replace into `phome_enewslog` values('117','admin','2016-06-22 22:40:18','113.99.35.172','1','','0','0');");
E_D("replace into `phome_enewslog` values('118','admin','2016-06-25 14:09:36','113.65.130.225','0','','0','0');");
E_D("replace into `phome_enewslog` values('119','admin','2016-06-25 14:09:44','113.65.130.225','1','','0','0');");
E_D("replace into `phome_enewslog` values('120','admin','2016-06-27 21:41:55','116.22.248.163','0','','0','0');");
E_D("replace into `phome_enewslog` values('121','admin','2016-06-27 21:42:01','116.22.248.163','1','','0','0');");
E_D("replace into `phome_enewslog` values('122','admin','2016-06-28 22:12:16','116.22.248.180','1','','0','0');");
E_D("replace into `phome_enewslog` values('123','admin','2016-06-29 19:04:28','113.109.30.95','1','','0','0');");
E_D("replace into `phome_enewslog` values('124','admin','2016-06-30 12:53:14','113.65.144.140','1','','0','0');");
E_D("replace into `phome_enewslog` values('125','admin','2016-07-01 10:35:07','113.109.31.177','1','','0','0');");
E_D("replace into `phome_enewslog` values('126','admin','2016-07-01 12:24:32','113.109.31.177','1','','0','0');");
E_D("replace into `phome_enewslog` values('127','admin','2016-07-01 19:35:56','113.109.31.177','1','','0','0');");
E_D("replace into `phome_enewslog` values('128','admin','2016-07-04 10:52:10','183.5.68.24','1','','0','0');");
E_D("replace into `phome_enewslog` values('129','admin','2016-07-05 21:06:14','183.5.64.149','1','','0','0');");
E_D("replace into `phome_enewslog` values('130','admin','2016-07-06 14:46:37','183.5.64.159','1','','0','0');");
E_D("replace into `phome_enewslog` values('131','admin','2016-07-10 23:04:39','113.109.73.154','1','','0','0');");
E_D("replace into `phome_enewslog` values('132','admin','2016-07-16 16:49:24','113.109.28.27','1','','0','0');");
E_D("replace into `phome_enewslog` values('133','admin','2016-07-16 18:00:32','183.5.62.212','1','','0','0');");
E_D("replace into `phome_enewslog` values('134','admin','2016-07-19 11:30:18','183.5.73.59','0','','0','0');");
E_D("replace into `phome_enewslog` values('135','admin','2016-07-19 11:30:25','183.5.73.59','1','','0','0');");
E_D("replace into `phome_enewslog` values('136','admin','2016-07-19 11:30:48','183.5.73.59','1','','0','0');");
E_D("replace into `phome_enewslog` values('137','admin','2017-02-14 21:44:32','::1','0','','0','52092');");
E_D("replace into `phome_enewslog` values('138','admin','2017-02-14 21:44:39','::1','0','','0','52098');");
E_D("replace into `phome_enewslog` values('139','admin','2017-02-14 21:44:51','::1','0','','0','52101');");
E_D("replace into `phome_enewslog` values('140','admin','2017-02-14 21:51:08','::1','1','','0','52297');");

@include("../../inc/footer.php");
?>