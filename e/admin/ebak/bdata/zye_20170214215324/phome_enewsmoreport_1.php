<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmoreport`;");
E_C("CREATE TABLE `phome_enewsmoreport` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` char(60) NOT NULL DEFAULT '',
  `purl` char(255) NOT NULL DEFAULT '',
  `ppath` char(255) NOT NULL DEFAULT '',
  `postpass` char(120) NOT NULL DEFAULT '',
  `postfile` char(255) NOT NULL DEFAULT '',
  `tempgid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mustdt` tinyint(1) NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `closeadd` tinyint(1) NOT NULL DEFAULT '0',
  `headersign` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `isclose` (`isclose`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsmoreport` values('1','主访问端','/','D:/wwwroot/xpgod/xpgod.com/','6kp3ba9TMMIcbQ5mObHC6lP3xaBoQb6p1uPd3TSQaxXgAT2uvubzWlWsCqN4','','0','0','0','0','');");
E_D("replace into `phome_enewsmoreport` values('2','手机访问端','http://m-xpgod.zuseng.com/','D:/wwwroot/xpgod/m.xpgod.com/','7as239Ah9FayyK1NP4WJl3y7uAnRbKdRHz8RzHnxqwiOAsebJmW79M7iXtPZ','','2','0','0','0','');");

@include("../../inc/footer.php");
?>