<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsshopps`;");
E_C("CREATE TABLE `phome_enewsshopps` (
  `pid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(60) NOT NULL DEFAULT '',
  `price` float(11,2) NOT NULL DEFAULT '0.00',
  `otherprice` text NOT NULL,
  `psay` text NOT NULL,
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsshopps` values('1','�ͻ�����','10.00','','�ͻ�����','0','0');");
E_D("replace into `phome_enewsshopps` values('2','�ؿ�ר�ݣ�EMS��','25.00','','�ؿ�ר�ݣ�EMS��','0','0');");
E_D("replace into `phome_enewsshopps` values('3','��ͨ�ʵ�','5.00','','��ͨ�ʵ�','0','1');");
E_D("replace into `phome_enewsshopps` values('4','�ʾֿ���','12.00','','�ʾֿ���','0','0');");

@include("../../inc/footer.php");
?>