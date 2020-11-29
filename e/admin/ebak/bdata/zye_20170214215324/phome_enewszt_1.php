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
E_D("replace into `phome_enewszt` values('1','minecraft����','0','100','21','zhuanti/minecraft','.html','','92','1','0','newstime DESC','minecraft��ʵ���Ǵ����Ϥ��ɳ����Ϸ�ҵ����磬С���ڴ�Ϊ���ṩminecraft���ذ汾����1.4.x��1.5.x��1.6.x��1.7.x��1.8.x��1.9.x�����а汾����λ��ҿ��Ը����Լ�����Ҫѡ���Ӧ�汾���أ�ͬ�»��ṩminecraft mod��Ϊ��������ṩ����mod���ϰ���','/d/file/p/2016-05-24/495c6d743bed4645b18edf9e114315c2.png','0','0','minecraft���� minecraft pe minecraft����','1','0','0','0','0','0','0','1','','1464103077','0');");
E_D("replace into `phome_enewszt` values('2','Ӣ�����˸�����ȫ','0','255','21','zhuanti/yxlmfzdq','.html','','92','1','0','newstime DESC','Ӣ�����˺����޸����ĸ��ã�lol���������ĸ����ã��ܶ�ո���Ӣ�����������Ϸ����Ҷ���֪��Ҫ���Ǹ���Ϸ�������ߣ�С�����Ϊ���Ƽ�����ø������������lol���ӡ�tgplol���֡�����Ӣ�����˺��ӡ�lolƤ���޸����ȣ�����ĸ������Ե���վ�´κ����ء�','/d/file/p/2016-05-25/1a5050ecad80a1413dd27821a14790ef.png','0','0','lol�����ĸ��� Ӣ�����˸�����ȫ lol��������','4','0','0','0','0','0','0','1','','1464152268','0');");
E_D("replace into `phome_enewszt` values('3','���������2016','0','255','23','zhuanti/llqpx','.html','','14','1','0','newstime DESC','ϵͳ���ù������ݻ�����������������������ܻ�ӭ��2016��������а����ش�ȫ��360��ȫ���������ռ��һλ���ٶ�������ڶ�λ��2345������������أ�qq��������أ��ѹ���������أ�ie��������أ��ȸ���������أ��Ա���������أ�������������صȵȡ�','/d/file/p/2016-05-25/3964d187a2539670715935a18713f6b1.png','0','0','','1','0','0','0','0','0','0','1','','1464158012','0');");
E_D("replace into `phome_enewszt` values('4','�ٶ��Ŀ�������2016','0','255','23','zhuanti/bdwk','.html','','14','1','0','newstime DESC','2016���������ˣ�С���ڴ�Ϊ���ṩ�ٶ��Ŀ�������2016�����ص�ַ���ù����û�������Ѳ��û��ֻ�ٶ��Ŀ�Ƹ������������ظ����ĵ����ٶȱ����Ŀ��������ⰲװ������򵥷ţ��û�ֻ��Ҫֱ�ӽ�Ҫ���ص��Ŀ��ַճ��������������ؾͿ����ˣ������¼������Ҫ���ֲƸ�ֵ��һ���������ء�','/d/file/p/2016-05-30/5ca57591f0e2dbd29838e4c59339a01b.png','0','0','�ٶ��Ŀ��������,�ٶ��Ŀ�������,�ٶ��Ŀ��������ⰲװ��','1','0','0','0','0','0','0','1','','1464610608','0');");
E_D("replace into `phome_enewszt` values('5','qq2016','0','25','23','zhuanti/sjqq2016','.html','','14','1','0','newstime DESC','ϵͳ���ù���QQ����ר���ṩ��Ѷ�ֻ�qq2016�ٷ����������ʽ�棬�ֻ�qq2016�ٷ���׿��ʽ�棬�ֻ�qq2016�ٷ�iPhone�����ء�qq�Ѿ������������ճ�����У���ƽʱ��������ȱ�ٵ�һ������ͨѶ�ʺ򹤾ߣ�������ʵ����Ƶ���������Ľ��������������Ѵ�ȥһ���ʺ�ƽ����','/d/file/p/2016-05-30/fb5d89a0b312d1b24e6ce4922432f383.png','0','0','qq2016,�ֻ�qq2016����,��Ѷqq2016�ٷ��������','1','0','0','0','0','0','0','1','','1464610940','0');");
E_D("replace into `phome_enewszt` values('6','�ṷ����','0','25','23','zhuanti/kwyy','.html','','14','1','0','newstime DESC','�ṷ����ר���ṩ���¿ṷ2016�ٷ�������أ��������ÿṷ���ֺУ�����MV���ţ�ʱʱ�Ȱ�������£�ʱ�г��������Ƽ�����Ů����ֱ�����ֳ��ݳ������ֱ���ȵȡ�2016�������ֺ�8���������ֿ�MV��Ů�ֳ�ֱ�������ѡ��','/d/file/p/2016-05-30/1e001cd0181dadf100d6eb94b79cb316.png','0','0','�ṷ����,�ṷ2016,�ṷ����2016�ٷ��������','1','0','0','0','0','0','0','1','','1464611321','0');");
E_D("replace into `phome_enewszt` values('7','��Ʊ�����ȫ','0','25','23','zhuanti/qprj','.html','','14','1','0','newstime DESC','һ���ڼ��մ���뵽�Ĳ������ȥhappy������Ʊ�ɣ���Ʊ���������Ʊ�������ţë����Щ����û�а���������Ʊ�������������ѵ�ʱ�䣬��Ʊ����ĸ����أ�С�������Ƽ�һЩ�Ƚϰ�ȫ����Ч����Ʊ����������������������������ؼҵĻ�Ʊ��','/d/file/p/2016-05-30/cc7478558bc6030fa0698bace49749b5.jpg','0','0','','1','0','0','0','0','0','0','1','','1464612224','0');");
E_D("replace into `phome_enewszt` values('8','360��ȫ��ʿ���عٷ����°�','0','255','23','zhuanti/360aqws','.html','','14','1','0','newstime DESC','��ר���ṩ360��ȫ��ʿ���ص��Թٷ����°棬360�ֻ���ʿ��׿��ٷ����°����أ�360��ȫ��ʿwin10ר�����ء��ṩ���°�360��ȫ��ʿ�¹���ʹ�ý̳̣�360�ֻ���ʿ��ɫ����ʹ�÷�������ӭ��ʹ������ר���ṩ��360��ȫ��ʿ�������������ĵ��Ժ��ֻ��İ�ȫ�������ø��˵İ�ȫ��˽��','/d/file/p/2016-05-30/0275ff46169c2db9b15569ba256d5291.png','0','0','','1','0','0','0','0','0','0','1','','1464612503','0');");
E_D("replace into `phome_enewszt` values('9','������ppsӰ��','0','255','23','zhuanti/aqypps','.html','','14','1','0','newstime DESC','��վ�ṩ������ppsӰ�������������ǰ����պ�pps���Ϸ����ģ������ղ�������ȫ���һ�Ҽ�P2Pֱ���㲥��һ����������������ܹ������տ���Ӱ���Ӿ硢����ֱ������Ϸ���������������ա����š��ƾ���Ѷ�����ӽ�Ŀֱ���ȡ�','/d/file/p/2016-05-30/ca739894b3a03822a5f773be42fd9d22.png','0','0','','1','0','0','0','0','0','0','1','','1464612764','0');");
E_D("replace into `phome_enewszt` values('10','2016���뷨���а�','0','255','23','zhuanti/znpy','.html','','14','1','0','newstime DESC','2016ƴ�����뷨�ĸ����ã�����õ����뷨��ʲô�����������ұȽϹ�ע�Ļ��⣬С�����������ʹ�ҷ�����Ŀǰ�Ƚϳ��õ�ƴ�����뷨�������˽�Ŀǰ���ڵ��������뷨��ƴ�����뷨��Ҫ�У��ѹ�ƴ�����뷨��qqƴ�����뷨���ٶ�ƴ�����뷨����Ӧƴ�����뷨�ȼ��������������뷨��','/d/file/p/2016-05-30/ae75b08d678a23a299f6b9a187c035ca.png','0','0','','1','0','0','0','0','0','0','1','','1464613083','0');");
E_D("replace into `phome_enewszt` values('11','uc���������2016','0','255','23','zhuanti/uc','.html','','14','1','0','newstime DESC','��վ�ṩuc��������԰���ֻ������ص�ַ��uc�������һ��Դ���ֻ�������������ܹ�����ѵ�ϲ������ȫ��5���û���ͬѡ��������ֻ������,��Ҫ�뵽ϵͳ����uc�����ר������UC�������׿��/iPhone��/ipad��/TV��,UC��������԰漫����Ϯ,��������е���������!','/d/file/p/2016-05-30/3d5b26dc08d6b92d5c0edef6ec3b3333.png','0','0','','1','0','0','0','0','0','0','1','','1464613439','0');");
E_D("replace into `phome_enewszt` values('12','��׿ģ�������԰�2016','0','255','23','zhuanti/bluestacks','.html','','14','1','0','newstime DESC','��վ�ṩ��׿ģ�������԰����غͰ�׿ģ������װ�̳̣�2016��׿ģ�������İ��ǹȸ�ר��Ϊ��󰮺��ֻ���Ϸ������������Ƴ��ģ����û�����ֱ��ͨ���������pc�����������и����ֻ�apk��Ϸ��������ﵽ�����ֻ���Ӧ�õ�Ч����bluestacks��׿ģ������һ��������Android Ӧ�ó���������Windowsϵͳ������������ֻ��ϵ�Ӧ����Windows��Mac����ϵͳ�Ͽ��ٲ�ȫ�����С�','/d/file/p/2016-05-30/0ae6b974875f1ddc5068eb4814db9e4e.png','0','0','','1','0','0','0','0','0','0','1','','1464613612','0');");

@include("../../inc/footer.php");
?>