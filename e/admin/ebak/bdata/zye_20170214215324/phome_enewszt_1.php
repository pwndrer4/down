<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewszt`;");
E_C("CREATE TABLE `phome_enewszt` (
  `ztid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `ztname` varchar(60) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `ztnum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ztpath` varchar(255) NOT NULL DEFAULT '',
  `zttype` varchar(10) NOT NULL DEFAULT '',
  `zturl` varchar(200) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `ztimg` varchar(255) NOT NULL DEFAULT '',
  `zcid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `showzt` tinyint(1) NOT NULL DEFAULT '0',
  `ztpagekey` varchar(255) NOT NULL DEFAULT '',
  `classtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `usezt` tinyint(1) NOT NULL DEFAULT '0',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `usernames` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `pltempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ztid`),
  KEY `classid` (`classid`),
  KEY `zcid` (`zcid`),
  KEY `usezt` (`usezt`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewszt` values('1','minecraft下载','0','100','21','zhuanti/minecraft','.html','','92','1','0','newstime DESC','minecraft其实就是大家熟悉的沙盒游戏我的世界，小编在此为您提供minecraft下载版本包括1.4.x、1.5.x、1.6.x、1.7.x、1.8.x、1.9.x等所有版本，各位玩家可以根据自己的需要选择对应版本下载；同事还提供minecraft mod，为懒人玩家提供各种mod整合包。','/d/file/p/2016-05-24/495c6d743bed4645b18edf9e114315c2.png','0','0','minecraft下载 minecraft pe minecraft官网','1','0','0','0','0','0','0','1','','1464103077','0');");
E_D("replace into `phome_enewszt` values('2','英雄联盟辅助大全','0','255','21','zhuanti/yxlmfzdq','.html','','92','1','0','newstime DESC','英雄联盟盒子修改器哪个好？lol辅助工具哪个好用？很多刚刚玩英雄联盟这款游戏的玩家都不知道要用那个游戏辅助工具，小编想此为您推荐几款常用辅助，比如多玩lol盒子、tgplol助手、乐派英雄联盟盒子、lol皮肤修改器等，更多的辅助可以到本站下次和下载。','/d/file/p/2016-05-25/1a5050ecad80a1413dd27821a14790ef.png','0','0','lol辅助哪个好 英雄联盟辅助大全 lol辅助工具','4','0','0','0','0','0','0','1','','1464152268','0');");
E_D("replace into `phome_enewszt` values('3','浏览器排行2016','0','255','23','zhuanti/llqpx','.html','','14','1','0','newstime DESC','系统天堂官网根据互联网最新数据整理出了最受欢迎的2016浏览器排行榜下载大全：360安全浏览器下载占第一位，百度浏览器第二位，2345王牌浏览器下载，qq浏览器下载，搜狗浏览器下载，ie浏览器下载，谷歌浏览器下载，猎豹浏览器下载，傲游浏览器下载等等。','/d/file/p/2016-05-25/3964d187a2539670715935a18713f6b1.png','0','0','','1','0','0','0','0','0','0','1','','1464158012','0');");
E_D("replace into `phome_enewszt` values('4','百度文库下载器2016','0','255','23','zhuanti/bdwk','.html','','14','1','0','newstime DESC','2016年马上来了！小编在此为您提供百度文库下载器2016版下载地址，让广大的用户可以免费不用积分或百度文库财富即可轻松下载各种文档；百度冰点文库下载器免安装版操作简单放，用户只需要直接将要下载的文库地址粘贴过来，点击下载就可以了；无需登录，不需要积分财富值，一切轻松下载。','/d/file/p/2016-05-30/5ca57591f0e2dbd29838e4c59339a01b.png','0','0','百度文库免费下载,百度文库下载器,百度文库下载器免安装版','1','0','0','0','0','0','0','1','','1464610608','0');");
E_D("replace into `phome_enewszt` values('5','qq2016','0','25','23','zhuanti/sjqq2016','.html','','14','1','0','newstime DESC','系统天堂官网QQ合作专区提供腾讯手机qq2016官方免费下载正式版，手机qq2016官方安卓正式版，手机qq2016官方iPhone版下载。qq已经融入了我们日常生活当中，是平时工作不可缺少的一款聊天通讯问候工具，用它来实现视频语音面对面的交流，给亲人朋友带去一声问候平安。','/d/file/p/2016-05-30/fb5d89a0b312d1b24e6ce4922432f383.png','0','0','qq2016,手机qq2016下载,腾讯qq2016官方免费下载','1','0','0','0','0','0','0','1','','1464610940','0');");
E_D("replace into `phome_enewszt` values('6','酷狗音乐','0','25','23','zhuanti/kwyy','.html','','14','1','0','newstime DESC','酷狗音乐专区提供最新酷狗2016官方免费下载：听音乐用酷狗音乐盒，高清MV播放，时时热榜歌曲更新，时尚潮流歌曲推荐，美女明星直播秀现场演唱会表演直播等等。2016酷我音乐盒8是你听音乐看MV美女现场直播的最好选择。','/d/file/p/2016-05-30/1e001cd0181dadf100d6eb94b79cb316.png','0','0','酷狗音乐,酷狗2016,酷狗音乐2016官方免费下载','1','0','0','0','0','0','0','1','','1464611321','0');");
E_D("replace into `phome_enewszt` values('7','抢票软件大全','0','25','23','zhuanti/qprj','.html','','14','1','0','newstime DESC','一到节假日大家想到的不是如何去happy而是抢票吧，抢票浏览器、抢票软件多如牛毛，有些不但没有帮自已抢到票反而耽误了自已的时间，抢票软件哪个好呢？小编给大家推荐一些比较安全并有效的抢票浏览器及软件来帮助大家轻松抢到回家的火车票。','/d/file/p/2016-05-30/cc7478558bc6030fa0698bace49749b5.jpg','0','0','','1','0','0','0','0','0','0','1','','1464612224','0');");
E_D("replace into `phome_enewszt` values('8','360安全卫士下载官方最新版','0','255','23','zhuanti/360aqws','.html','','14','1','0','newstime DESC','本专题提供360安全卫士下载电脑官方最新版，360手机卫士安卓版官方最新版下载，360安全卫士win10专版下载。提供最新版360安全卫士新功能使用教程，360手机卫士特色功能使用方法。欢迎你使用我们专题提供的360安全卫士下载来保护您的电脑和手机的安全，防护好个人的安全隐私。','/d/file/p/2016-05-30/0275ff46169c2db9b15569ba256d5291.png','0','0','','1','0','0','0','0','0','0','1','','1464612503','0');");
E_D("replace into `phome_enewszt` values('9','爱奇艺pps影音','0','255','23','zhuanti/aqypps','.html','','14','1','0','newstime DESC','本站提供爱奇艺pps影音播放器下载是爱奇艺和pps联合发布的，爱奇艺播放器是全球第一家集P2P直播点播于一身的网络电视软件，能够在线收看电影电视剧、体育直播、游戏竞技、动漫、综艺、新闻、财经资讯、电视节目直播等。','/d/file/p/2016-05-30/ca739894b3a03822a5f773be42fd9d22.png','0','0','','1','0','0','0','0','0','0','1','','1464612764','0');");
E_D("replace into `phome_enewszt` values('10','2016输入法排行榜','0','255','23','zhuanti/znpy','.html','','14','1','0','newstime DESC','2016拼音输入法哪个好用？最好用的输入法是什么？这是最近大家比较关注的话题，小编今天在这里和大家分享几款目前比较常用的拼音输入法，让你了解目前国内的热门输入法，拼音输入法主要有：搜狗拼音输入法、qq拼音输入法、百度拼音输入法、必应拼音输入法等即可热门智能输入法。','/d/file/p/2016-05-30/ae75b08d678a23a299f6b9a187c035ca.png','0','0','','1','0','0','0','0','0','0','1','','1464613083','0');");
E_D("replace into `phome_enewszt` values('11','uc浏览器下载2016','0','255','23','zhuanti/uc','.html','','14','1','0','newstime DESC','本站提供uc浏览器电脑版和手机版下载地址，uc浏览器是一款源于手机的浏览器，深受广大网友的喜爱，是全球5亿用户共同选择的智能手机浏览器,需要请到系统天堂uc浏览器专题下载UC浏览器安卓版/iPhone版/ipad版/TV版,UC浏览器电脑版极速来袭,给您超快感的上网体验!','/d/file/p/2016-05-30/3d5b26dc08d6b92d5c0edef6ec3b3333.png','0','0','','1','0','0','0','0','0','0','1','','1464613439','0');");
E_D("replace into `phome_enewszt` values('12','安卓模拟器电脑版2016','0','255','23','zhuanti/bluestacks','.html','','14','1','0','newstime DESC','本站提供安卓模拟器电脑版下载和安卓模拟器安装教程，2016安卓模拟器中文版是谷歌专门为广大爱好手机游戏和软件的网友推出的，让用户可以直接通过本软件在pc端完美的运行各种手机apk游戏或软件，达到和在手机上应用的效果，bluestacks安卓模拟器是一个可以让Android 应用程序运行在Windows系统软件，能让您手机上的应用在Windows和Mac操作系统上快速并全屏运行。','/d/file/p/2016-05-30/0ae6b974875f1ddc5068eb4814db9e4e.png','0','0','','1','0','0','0','0','0','0','1','','1464613612','0');");

@include("../../inc/footer.php");
?>