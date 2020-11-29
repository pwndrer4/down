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
E_D("replace into `phome_ecms_soft_check` values('1914','17','0','0','0','0','','1914','0','�ο�*','0','0','0','0','0','1','0','1465875344','1465875344','0','0','0','','/soft/1914.html','1','1','1','�ȱ�ͶƱ','�ȱ�ͶƱ','1465875344','','11','','�ٷ���','Vista/winXP/win7/win8','3','�ȱ�ͶƱ','','�ȱ�ͶƱ','aaa.com','','','�ȱ�ͶƱ�ȱ�ͶƱ�ȱ�ͶƱ�ȱ�ͶƱ�ȱ�ͶƱ�ȱ�ͶƱ�ȱ�ͶƱ','�ȱ�ͶƱ','�ȱ�ͶƱ','Ӣ��');");
E_D("replace into `phome_ecms_soft_check` values('1915','17','0','0','0','0','','1915','0','�ο�*','0','0','1','0','0','1','0','1467342609','1467342609','0','0','0','','/soft/1915.html','1','1','1','123123','122323','1467342608','/d/file/soft/wlrj/wlll/2016-07-01/b1945e73ec385971f5cbb9ab89925108.png','21312','1.M','��Ѱ�','Vista/winXP/win7/win8','5','http://se.360.cn/','','213213','http://down.360safe.com/se/360se8.1.1.214.exe','','','����ȫ��Blink+IE�ں˵��°�˫�˸��ٰ�ȫ���������������������ܣ����뿪��ҳ�����ڴ�ռ�ô���½�������ҳ���ٶȡ���ȫ�ԡ��Թ����������е���ҳ�����Ը����涼���ھ������ȡ�\r\n       7.1�汾�����˼�������������ַ�������ղع��ܣ�\r\n       1�������������Ż��ڴ�ͻ��桢ͨ��Ԥ������������ҳ���ٶ�\r\n       2��������ַ�����������ڵ�ַ����������ʱ��ʵʱ��ʾ�������\r\n       3�����ղع��ܿ�����������ҳ�е�ͼƬ�����ֵȱ�ݵ��ղص�360����','123123','3213','��������');");

@include("../../inc/footer.php");
?>