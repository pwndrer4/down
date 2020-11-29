<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztadd`;");
E_C("CREATE TABLE `phome_enewsztadd` (
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ftitle` text NOT NULL,
  PRIMARY KEY (`ztid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsztadd` values('1','','minecraft pe_minecraft官网_minecraft mod');");
E_D("replace into `phome_enewsztadd` values('2','','lol辅助哪个好_lol辅助工具_英雄联盟盒子修改器哪个好');");
E_D("replace into `phome_enewsztadd` values('3','','2016官方最新十大浏览器下载');");
E_D("replace into `phome_enewsztadd` values('4','','百度文库免费下载绿色版_百度文库下载器免安装版_冰点文库下载器破解版');");
E_D("replace into `phome_enewsztadd` values('5','','腾讯手机qq2016官方免费下载');");
E_D("replace into `phome_enewsztadd` values('6','','酷狗2016官方免费下载');");
E_D("replace into `phome_enewsztadd` values('7','','抢票软件哪个好_什么抢票软件最好用');");
E_D("replace into `phome_enewsztadd` values('8','','360手机卫士下载大全');");
E_D("replace into `phome_enewsztadd` values('9','','爱奇艺播放器官方下载电脑版_爱奇艺影音播放器_爱奇艺2016_爱奇艺手机版');");
E_D("replace into `phome_enewsztadd` values('10','','最好用的拼音输入法_拼音输入法哪个好用_智能拼音输入法下载');");
E_D("replace into `phome_enewsztadd` values('11','','uc浏览器电脑版 uc浏览器手机版 uc浏览器官网');");
E_D("replace into `phome_enewsztadd` values('12','','安卓模拟器官方下载_安卓模拟器排行榜_哪个好用_bluestacks中文版');");

@include("../../inc/footer.php");
?>