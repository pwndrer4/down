<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass_stats`;");
E_C("CREATE TABLE `phome_enewsclass_stats` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0',
  `pvall` int(10) unsigned NOT NULL DEFAULT '0',
  `pvyear` int(10) unsigned NOT NULL DEFAULT '0',
  `pvhalfyear` int(10) unsigned NOT NULL DEFAULT '0',
  `pvquarter` int(10) unsigned NOT NULL DEFAULT '0',
  `pvmonth` int(10) unsigned NOT NULL DEFAULT '0',
  `pvweek` int(10) unsigned NOT NULL DEFAULT '0',
  `pvday` int(10) unsigned NOT NULL DEFAULT '0',
  `pvyesterday` int(10) unsigned NOT NULL DEFAULT '0',
  `ipall` int(10) unsigned NOT NULL DEFAULT '0',
  `ipyear` int(10) unsigned NOT NULL DEFAULT '0',
  `iphalfyear` int(10) unsigned NOT NULL DEFAULT '0',
  `ipquarter` int(10) unsigned NOT NULL DEFAULT '0',
  `ipmonth` int(10) unsigned NOT NULL DEFAULT '0',
  `ipweek` int(10) unsigned NOT NULL DEFAULT '0',
  `ipday` int(10) unsigned NOT NULL DEFAULT '0',
  `ipyesterday` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsclass_stats` values('1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('2','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('3','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('4','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('5','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('6','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('7','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('8','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('9','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('10','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('11','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('12','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('13','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('14','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('15','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('16','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('17','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('18','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('19','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('20','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('21','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('22','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('23','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('24','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('25','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('26','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('27','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('28','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('29','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('30','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('31','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('32','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('33','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('34','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('35','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('36','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('37','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('38','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('39','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('40','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('41','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('42','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('43','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('44','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('45','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('46','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('47','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('48','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('49','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('51','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('52','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('53','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('54','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('55','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('56','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('57','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('58','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('59','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('60','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('61','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('62','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('63','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('64','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('65','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('66','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('67','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('68','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('69','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('70','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('71','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('72','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('73','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('74','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('75','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('76','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('77','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('78','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('79','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('80','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('81','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('82','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('83','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('84','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('85','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('86','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('87','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('88','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('89','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('90','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('91','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('92','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('93','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('94','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('95','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('96','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('97','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('98','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('99','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('100','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('101','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('102','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('103','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('104','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('105','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('106','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('107','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('108','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('109','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('110','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('111','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('112','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('113','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('114','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('115','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('116','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('117','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('118','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('119','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('120','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('121','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('122','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('123','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('124','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('125','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('126','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('127','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('128','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('129','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('130','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('131','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('132','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('133','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('134','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('135','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('136','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('137','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('138','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('139','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('140','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('141','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('142','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('143','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('144','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('145','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('146','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('147','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('148','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('149','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('150','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('151','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('152','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('153','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('154','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('155','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('156','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('157','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `phome_enewsclass_stats` values('158','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");

@include("../../inc/footer.php");
?>