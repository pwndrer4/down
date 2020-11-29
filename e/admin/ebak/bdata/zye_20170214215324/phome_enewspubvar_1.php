<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspubvar`;");
E_C("CREATE TABLE `phome_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewspubvar` values('1','weburl','电脑版网址','http://xpgod.zuseng.com','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('2','murl','手机版网址','http://m-xpgod.zuseng.com','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('3','weburl2','网站域名不带http','xpgod.zuseng.com','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('4','beianhao','备案号','粤ICP备15093131号-1','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('5','tongji','网站统计代码','','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('6','webname','网站名称','仿系统天堂','','0','0','1');");

@include("../../inc/footer.php");
?>