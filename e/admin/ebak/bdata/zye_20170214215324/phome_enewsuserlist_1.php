<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserlist`;");
E_C("CREATE TABLE `phome_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsuserlist` values('1','文章最近更新','最近更新 - 手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸','../../article/zuijinlist/','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by newstime desc','0','30','9','手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸','系统天堂是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!','0');");
E_D("replace into `phome_enewsuserlist` values('2','推荐文章','推荐文章 - 手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸','../../article/bestlist/','.html','select count(*) as total from [!db.pre!]ecms_news where isgood in (1,2,3,4,5,6,7,8,9)','select * from [!db.pre!]ecms_news where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc','0','30','10','手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸','系统天堂是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!','0');");
E_D("replace into `phome_enewsuserlist` values('3','热门文章','热门文章 - 手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸','../../article/hotlist/','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by onclick desc','0','30','11','手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸','系统天堂是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!','0');");
E_D("replace into `phome_enewsuserlist` values('4','电脑软件最近更新','最近更新|今日更新','../../soft/zuijinlist/','.html','select count(*) as total from [!db.pre!]ecms_soft','select * from [!db.pre!]ecms_soft order by newstime desc','0','30','13','手机软件下载,电脑软件下载,单机游戏下载','是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!','0');");
E_D("replace into `phome_enewsuserlist` values('5','电脑软件热门推荐','推荐软件|精品软件','../../soft/bestlist/','.html','select count(*) as total from [!db.pre!]ecms_soft where isgood in (1,2,3,4,5,6,7,8,9)','select * from [!db.pre!]ecms_soft where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc','0','30','14','手机软件下载,电脑软件下载,单机游戏下载','是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!','0');");
E_D("replace into `phome_enewsuserlist` values('6','电脑软件下载排行','软件下载排行榜|单机游戏排行榜|手机软件排行榜 ','../../soft/hotlist/','.html','select count(*) as total from [!db.pre!]ecms_soft','select * from [!db.pre!]ecms_soft order by onclick desc','0','30','15','手机软件下载,电脑软件下载,单机游戏下载','是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!','0');");
E_D("replace into `phome_enewsuserlist` values('7','电脑游戏专题列表','热门游戏专题_手机游戏排行榜_热门手游专题-软件下载天堂','../../yxzt/','.html','select count(*) as total from phome_enewszt where classid in (92)','select ztid as id,ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,1 as classid from phome_enewszt where classid in (92) order by addtime desc','0','12','22','','软件下载天堂游戏专题为您提供各种热门游戏专题信息，包含单机游戏专题、安卓游戏专题、ios游戏专题、安卓游戏排行榜专题、ios游戏排行榜专题等等。','0');");
E_D("replace into `phome_enewsuserlist` values('8','电脑软件专题列表','热门软件专题_手机软件专题_常用软件专题','../../rjzt/','.html','select count(*) as total from phome_enewszt where classid not in (92) and classid in (14)','select ztid as id,ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,1 as classid from phome_enewszt where classid not in (92) and classid in (14) order by addtime desc','0','12','24','','软件下载天堂软件专题频道为您提供网络工具、系统软件、应用软件、下载软件等等常用的软件专题信息，例如迅雷软件专题、播放器专题、杀毒软件专题、浏览器专题等等。','0');");

@include("../../inc/footer.php");
?>