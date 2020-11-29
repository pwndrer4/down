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
E_D("replace into `phome_enewspubvar` values('1','weburl','���԰���ַ','http://xpgod.zuseng.com','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('2','murl','�ֻ�����ַ','http://m-xpgod.zuseng.com','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('3','weburl2','��վ��������http','xpgod.zuseng.com','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('4','beianhao','������','��ICP��15093131��-1','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('5','tongji','��վͳ�ƴ���','','','0','0','1');");
E_D("replace into `phome_enewspubvar` values('6','webname','��վ����','��ϵͳ����','','0','0','1');");

@include("../../inc/footer.php");
?>