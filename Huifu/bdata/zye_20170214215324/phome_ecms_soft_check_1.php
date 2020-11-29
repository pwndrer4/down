<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_soft_check`;");
E_C("CREATE TABLE `phome_ecms_soft_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
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
  `dianping` text NOT NULL,
  `yuyan` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=1916 DEFAULT CHARSET=gbk");
E_D("replace into `phome_ecms_soft_check` values('1914','17','0','0','0','0','','1914','0','游客*','0','0','0','0','0','1','0','1465875344','1465875344','0','0','0','','/soft/1914.html','1','1','1','萌宝投票','萌宝投票','1465875344','','11','','官方版','Vista/winXP/win7/win8','3','萌宝投票','','萌宝投票','aaa.com','','','萌宝投票萌宝投票萌宝投票萌宝投票萌宝投票萌宝投票萌宝投票','萌宝投票','萌宝投票','英文');");
E_D("replace into `phome_ecms_soft_check` values('1915','17','0','0','0','0','','1915','0','游客*','0','0','1','0','0','1','0','1467342609','1467342609','0','0','0','','/soft/1915.html','1','1','1','123123','122323','1467342608','/d/file/soft/wlrj/wlll/2016-07-01/b1945e73ec385971f5cbb9ab89925108.png','21312','1.M','免费版','Vista/winXP/win7/win8','5','http://se.360.cn/','','213213','http://down.360safe.com/se/360se8.1.1.214.exe','','','基于全新Blink+IE内核的新版双核高速安全浏览器，极大的提高浏览性能，能秒开网页，且内存占用大幅下降。在网页打开速度、安全性、对国内政务银行等网页兼容性各方面都处于绝对领先。\r\n       7.1版本新增了加速器、聪明地址栏和云收藏功能：\r\n       1、加速器可以优化内存和缓存、通过预读技术加速网页打开速度\r\n       2、聪明地址栏可以让您在地址栏输入中文时，实时显示搜索结果\r\n       3、云收藏功能可以让您将网页中的图片、文字等便捷地收藏到360云盘','123123','3213','简体中文');");

@include("../../inc/footer.php");
?>