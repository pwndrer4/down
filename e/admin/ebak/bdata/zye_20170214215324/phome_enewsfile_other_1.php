<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_other`;");
E_C("CREATE TABLE `phome_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsfile_other` values('1','0','495c6d743bed4645b18edf9e114315c2.png','105078','2016-05-24','admin','1464102954','0','20160520093011495.png','1','0','1','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('2','0','1a5050ecad80a1413dd27821a14790ef.png','114289','2016-05-25','admin','1464152122','0','20160304031313931.png','1','0','2','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('3','0','3964d187a2539670715935a18713f6b1.png','79807','2016-05-25','admin','1464157996','0','20160504030000858.png','1','0','3','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('4','0','5ca57591f0e2dbd29838e4c59339a01b.png','49755','2016-05-30','admin','1464610570','0','20160119110032329.png','1','0','4','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('5','0','fb5d89a0b312d1b24e6ce4922432f383.png','96412','2016-05-30','admin','1464610900','0','20160504102604923.png','1','0','5','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('6','0','1e001cd0181dadf100d6eb94b79cb316.png','103778','2016-05-30','admin','1464611139','0','20151126033354856.png','1','0','6','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('7','0','cc7478558bc6030fa0698bace49749b5.jpg','97121','2016-05-30','admin','1464612180','0','20151126033354856.jpg','1','0','7','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('8','0','0275ff46169c2db9b15569ba256d5291.png','71713','2016-05-30','admin','1464612463','0','1.png','1','0','8','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('9','0','ca739894b3a03822a5f773be42fd9d22.png','77217','2016-05-30','admin','1464612702','0','20150821093233994.png','1','0','9','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('10','0','ae75b08d678a23a299f6b9a187c035ca.png','72564','2016-05-30','admin','1464612946','0','20150206040630681.png','1','0','10','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('11','0','3d5b26dc08d6b92d5c0edef6ec3b3333.png','104582','2016-05-30','admin','1464613423','0','20141013115336232.png','1','0','11','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('12','0','0ae6b974875f1ddc5068eb4814db9e4e.png','126467','2016-05-30','admin','1464613576','0','20140922105109907.png','1','0','12','0','0','2');");

@include("../../inc/footer.php");
?>