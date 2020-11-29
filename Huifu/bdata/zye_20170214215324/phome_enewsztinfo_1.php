<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztinfo`;");
E_C("CREATE TABLE `phome_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsztinfo` values('1','1','0','93','574','1463583704','9','0');");
E_D("replace into `phome_enewsztinfo` values('2','1','0','93','624','1463583712','9','0');");
E_D("replace into `phome_enewsztinfo` values('3','1','0','86','727','1463583834','9','0');");
E_D("replace into `phome_enewsztinfo` values('4','1','0','86','743','1463583839','9','0');");
E_D("replace into `phome_enewsztinfo` values('5','1','0','86','753','1463583841','9','0');");
E_D("replace into `phome_enewsztinfo` values('6','1','0','86','756','1463583845','9','0');");
E_D("replace into `phome_enewsztinfo` values('7','1','0','86','760','1463583847','9','0');");
E_D("replace into `phome_enewsztinfo` values('8','1','0','86','771','1463583853','9','0');");
E_D("replace into `phome_enewsztinfo` values('9','1','0','93','609','1463583708','9','0');");
E_D("replace into `phome_enewsztinfo` values('10','1','0','93','615','1463583709','9','0');");
E_D("replace into `phome_enewsztinfo` values('11','2','0','94','659','1463583761','9','0');");
E_D("replace into `phome_enewsztinfo` values('12','2','0','94','665','1463583765','9','0');");
E_D("replace into `phome_enewsztinfo` values('13','2','0','86','770','1463583852','9','0');");
E_D("replace into `phome_enewsztinfo` values('14','2','0','19','1767','1463585148','9','0');");
E_D("replace into `phome_enewsztinfo` values('15','3','0','17','145','1463582289','9','0');");
E_D("replace into `phome_enewsztinfo` values('16','3','0','17','146','1463582289','9','0');");
E_D("replace into `phome_enewsztinfo` values('17','3','0','17','147','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('18','3','0','17','148','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('19','3','0','17','149','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('20','3','0','17','150','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('21','3','0','17','151','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('22','3','0','17','152','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('23','3','0','17','153','1463582291','9','0');");
E_D("replace into `phome_enewsztinfo` values('24','3','0','17','154','1463582291','9','0');");
E_D("replace into `phome_enewsztinfo` values('25','3','0','17','155','1463582291','9','0');");
E_D("replace into `phome_enewsztinfo` values('26','3','0','17','156','1463582291','9','0');");
E_D("replace into `phome_enewsztinfo` values('27','3','0','17','157','1463582291','9','0');");
E_D("replace into `phome_enewsztinfo` values('28','3','0','17','158','1463582292','9','0');");
E_D("replace into `phome_enewsztinfo` values('29','3','0','17','159','1463582292','9','0');");
E_D("replace into `phome_enewsztinfo` values('30','3','0','17','160','1463582292','9','0');");
E_D("replace into `phome_enewsztinfo` values('31','3','0','17','161','1463582292','9','0');");
E_D("replace into `phome_enewsztinfo` values('32','3','0','17','162','1463582292','9','0');");
E_D("replace into `phome_enewsztinfo` values('33','3','0','17','163','1463582293','9','0');");
E_D("replace into `phome_enewsztinfo` values('34','3','0','17','164','1463582293','9','0');");
E_D("replace into `phome_enewsztinfo` values('35','3','0','17','165','1463582293','9','0');");
E_D("replace into `phome_enewsztinfo` values('36','3','0','17','166','1463582293','9','0');");
E_D("replace into `phome_enewsztinfo` values('37','3','0','17','167','1463582293','9','0');");
E_D("replace into `phome_enewsztinfo` values('38','3','0','17','168','1463582294','9','0');");
E_D("replace into `phome_enewsztinfo` values('39','3','0','17','169','1463582294','9','0');");
E_D("replace into `phome_enewsztinfo` values('40','3','0','17','170','1463582294','9','0');");
E_D("replace into `phome_enewsztinfo` values('41','3','0','17','171','1463582294','9','0');");
E_D("replace into `phome_enewsztinfo` values('42','3','0','17','172','1463582294','9','0');");
E_D("replace into `phome_enewsztinfo` values('43','3','0','17','173','1463582295','9','0');");
E_D("replace into `phome_enewsztinfo` values('44','3','0','17','174','1463582295','9','0');");
E_D("replace into `phome_enewsztinfo` values('45','4','0','18','1822','1463585158','9','0');");
E_D("replace into `phome_enewsztinfo` values('46','5','0','83','827','1463584058','9','0');");
E_D("replace into `phome_enewsztinfo` values('47','5','0','16','1868','1463585253','9','0');");
E_D("replace into `phome_enewsztinfo` values('48','6','0','63','1135','1463584419','9','0');");
E_D("replace into `phome_enewsztinfo` values('49','6','0','63','1138','1463584419','9','0');");
E_D("replace into `phome_enewsztinfo` values('50','6','0','63','1140','1463584420','9','0');");
E_D("replace into `phome_enewsztinfo` values('51','6','0','63','1160','1463584426','9','0');");
E_D("replace into `phome_enewsztinfo` values('52','6','0','63','1161','1463584426','9','0');");
E_D("replace into `phome_enewsztinfo` values('53','6','0','63','1171','1463584430','9','0');");
E_D("replace into `phome_enewsztinfo` values('54','6','0','63','1172','1463584431','9','0');");
E_D("replace into `phome_enewsztinfo` values('55','6','0','137','4834','1463807576','10','0');");
E_D("replace into `phome_enewsztinfo` values('56','7','0','17','149','1463582290','9','0');");
E_D("replace into `phome_enewsztinfo` values('57','7','0','17','154','1463582291','9','0');");
E_D("replace into `phome_enewsztinfo` values('58','7','0','52','1296','1463584602','9','0');");
E_D("replace into `phome_enewsztinfo` values('59','7','0','54','1326','1463584691','9','0');");
E_D("replace into `phome_enewsztinfo` values('60','7','0','54','1331','1463584692','9','0');");
E_D("replace into `phome_enewsztinfo` values('61','7','0','54','1358','1463584705','9','0');");
E_D("replace into `phome_enewsztinfo` values('62','7','0','29','1678','1463585045','9','0');");
E_D("replace into `phome_enewsztinfo` values('63','7','0','143','4593','1463807506','10','0');");
E_D("replace into `phome_enewsztinfo` values('64','7','0','139','4598','1463807507','10','0');");
E_D("replace into `phome_enewsztinfo` values('65','7','0','143','4744','1463807550','10','0');");
E_D("replace into `phome_enewsztinfo` values('66','8','0','109','360','1463583130','9','0');");
E_D("replace into `phome_enewsztinfo` values('67','8','0','54','1316','1463584686','9','0');");
E_D("replace into `phome_enewsztinfo` values('68','8','0','54','1318','1463584687','9','0');");
E_D("replace into `phome_enewsztinfo` values('69','8','0','54','1320','1463584688','9','0');");
E_D("replace into `phome_enewsztinfo` values('70','8','0','54','1332','1463584693','9','0');");
E_D("replace into `phome_enewsztinfo` values('71','8','0','54','1335','1463584694','9','0');");
E_D("replace into `phome_enewsztinfo` values('72','8','0','54','1338','1463584695','9','0');");
E_D("replace into `phome_enewsztinfo` values('73','8','0','54','1362','1463584708','9','0');");
E_D("replace into `phome_enewsztinfo` values('74','9','0','64','1113','1463584379','9','0');");
E_D("replace into `phome_enewsztinfo` values('75','9','0','61','1243','1463584494','9','0');");
E_D("replace into `phome_enewsztinfo` values('76','9','0','61','1262','1463584499','9','0');");
E_D("replace into `phome_enewsztinfo` values('77','9','0','64','1106','1463584377','9','0');");
E_D("replace into `phome_enewsztinfo` values('78','9','0','18','1834','1463585161','9','0');");
E_D("replace into `phome_enewsztinfo` values('79','9','0','137','4109','1463807361','10','0');");
E_D("replace into `phome_enewsztinfo` values('80','9','0','137','4709','1463807538','10','0');");
E_D("replace into `phome_enewsztinfo` values('81','9','0','137','6342','1464494440','10','0');");
E_D("replace into `phome_enewsztinfo` values('82','10','0','31','1568','1463584925','9','0');");
E_D("replace into `phome_enewsztinfo` values('83','10','0','31','1569','1463584925','9','0');");
E_D("replace into `phome_enewsztinfo` values('84','10','0','31','1572','1463584926','9','0');");
E_D("replace into `phome_enewsztinfo` values('85','10','0','31','1574','1463584927','9','0');");
E_D("replace into `phome_enewsztinfo` values('86','10','0','31','1576','1463584928','9','0');");
E_D("replace into `phome_enewsztinfo` values('87','10','0','31','1582','1463584930','9','0');");
E_D("replace into `phome_enewsztinfo` values('88','10','0','31','1587','1463584931','9','0');");
E_D("replace into `phome_enewsztinfo` values('89','10','0','31','1589','1463584932','9','0');");
E_D("replace into `phome_enewsztinfo` values('90','10','0','31','1590','1463584932','9','0');");
E_D("replace into `phome_enewsztinfo` values('91','10','0','31','1591','1463584932','9','0');");
E_D("replace into `phome_enewsztinfo` values('92','10','0','31','1592','1463584934','9','0');");
E_D("replace into `phome_enewsztinfo` values('93','10','0','31','1594','1463584935','9','0');");
E_D("replace into `phome_enewsztinfo` values('94','10','0','31','1595','1463584935','9','0');");
E_D("replace into `phome_enewsztinfo` values('95','10','0','31','1597','1463584936','9','0');");
E_D("replace into `phome_enewsztinfo` values('96','10','0','31','1601','1463584939','9','0');");
E_D("replace into `phome_enewsztinfo` values('97','10','0','31','1602','1463584940','9','0');");
E_D("replace into `phome_enewsztinfo` values('98','10','0','31','1603','1463584940','9','0');");
E_D("replace into `phome_enewsztinfo` values('99','10','0','31','1558','1463584922','9','0');");
E_D("replace into `phome_enewsztinfo` values('100','10','0','31','1563','1463584923','9','0');");
E_D("replace into `phome_enewsztinfo` values('101','10','0','31','1564','1463584924','9','0');");
E_D("replace into `phome_enewsztinfo` values('102','10','0','31','1565','1463584924','9','0');");
E_D("replace into `phome_enewsztinfo` values('103','10','0','31','1566','1463584925','9','0');");
E_D("replace into `phome_enewsztinfo` values('104','10','0','145','3519','1463807188','10','0');");
E_D("replace into `phome_enewsztinfo` values('105','10','0','145','3534','1463807192','10','0');");
E_D("replace into `phome_enewsztinfo` values('106','10','0','145','3810','1463807273','10','0');");
E_D("replace into `phome_enewsztinfo` values('107','10','0','145','4272','1463807409','10','0');");
E_D("replace into `phome_enewsztinfo` values('108','10','0','145','4534','1463807486','10','0');");
E_D("replace into `phome_enewsztinfo` values('109','10','0','145','4690','1463807534','10','0');");
E_D("replace into `phome_enewsztinfo` values('110','11','0','17','169','1463582294','9','0');");
E_D("replace into `phome_enewsztinfo` values('111','12','0','83','790','1463584047','9','0');");
E_D("replace into `phome_enewsztinfo` values('112','12','0','83','794','1463584048','9','0');");
E_D("replace into `phome_enewsztinfo` values('113','12','0','83','809','1463584052','9','0');");
E_D("replace into `phome_enewsztinfo` values('114','12','0','83','820','1463584056','9','0');");

@include("../../inc/footer.php");
?>