<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infotmp_soft`;");
E_C("CREATE TABLE `phome_ecms_infotmp_soft` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `oldurl` char(200) NOT NULL DEFAULT '',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `tmptime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `keyboard` char(100) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `banben` varchar(255) NOT NULL DEFAULT '',
  `daxiao` varchar(255) NOT NULL DEFAULT '',
  `shouquan` varchar(255) NOT NULL DEFAULT '',
  `pingtai` varchar(255) NOT NULL DEFAULT '',
  `pingfen` varchar(255) NOT NULL DEFAULT '',
  `guanwang` varchar(255) NOT NULL DEFAULT '',
  `morepic` mediumtext NOT NULL,
  `rjjx` text NOT NULL,
  `down` text NOT NULL,
  `bendidown` text NOT NULL,
  `tishi` mediumtext NOT NULL,
  `ruanjianjieshao` mediumtext NOT NULL,
  `ftitle` text NOT NULL,
  `newstext` mediumtext NOT NULL,
  `dianping` text NOT NULL,
  `yuyan` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

@include("../../inc/footer.php");
?>