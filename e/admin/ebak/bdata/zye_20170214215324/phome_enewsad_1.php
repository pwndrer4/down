<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsad`;");
E_C("CREATE TABLE `phome_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsad` values('1','','','468','60','0','1','1','���µ�������ID_1��','','','2016-05-16','2026-06-15','','','','<div style=\"background:#fff;width:698px;height:108px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_1���λ-700*110</div>','2','0','');");
E_D("replace into `phome_enewsad` values('2','','','468','60','0','1','1','���µ������ң�ID_2��','','','2016-05-16','2026-06-15','','','','<div style=\"background:#fff;width:483px;height:108px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_2���λ-485*110</div>','2','0','');");
E_D("replace into `phome_enewsad` values('3','','','468','60','0','1','1','�����б�ҳ/����ҳ�����£�ID_3��','','','2016-05-16','2026-06-15','','','','<div style=\"background:#fff;width:838px;height:98px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_3���λ-840*100</div>','2','0','');");
E_D("replace into `phome_enewsad` values('4','','','315','115','0','1','1','�����б�ҳ/����ҳ�����ϣ�ID_4��','','','2016-05-16','2026-06-15','','','','<div style=\"background:#fff;width:313px;height:153px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_4���λ-315*155</div>','2','0','');");
E_D("replace into `phome_enewsad` values('5','','','285','155','0','1','1','�����б�ҳ/����ҳ�����в���ID_5��','','','2016-05-16','2016-06-15','','','','<div style=\"background:#fff;width:283px;height:153px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_5���λ-285*155</div>','2','0','');");
E_D("replace into `phome_enewsad` values('6','','','468','60','0','1','1','���·���ҳ��棨ID_6��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:248px;height:573px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_6���λ-250*575</div>','2','0','');");
E_D("replace into `phome_enewsad` values('7','','','300','210','0','1','1','�����������ҳ�����£�ID_7��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:298px;height:208px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_7�յ����ع��λ-300*210</div>','2','0','');");
E_D("replace into `phome_enewsad` values('8','','','300','210','0','1','1','�����������ҳ�������Ҳ�1��ID_8��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:298px;height:208px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_8���λ-300*210</div>','2','0','');");
E_D("replace into `phome_enewsad` values('9','','','468','60','0','1','1','�����������ҳ�������Ҳ�2��ID_9��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:298px;height:183px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_9���λ-300*185</div>','2','0','');");
E_D("replace into `phome_enewsad` values('10','','','285','80','0','1','1','�����������ҳ�������Ҳ�3��ID_10��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:283px;height:78px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_10���λ-285*80</div>','2','0','');");
E_D("replace into `phome_enewsad` values('11','','','870','100','0','1','1','�����������ҳ�����£�ID_11��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:868px;height:98px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_11���λ-870*100</div>','2','0','');");
E_D("replace into `phome_enewsad` values('12','','','415','125','0','1','1','�����������ҳ���ص�ַ�ҲࣨID_12��','','','2016-05-17','2036-06-16','','','','<div style=\"background:#fff;width:413px;height:123px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_12���λ-415*125</div>','2','0','');");
E_D("replace into `phome_enewsad` values('13','','','415','245','0','1','1','�����������ҳ���ص�ַ�ҲࣨID_13��','','','2016-05-17','2036-06-16','','','','<div style=\"background:#fff;width:413px;height:243px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_13���λ-415*245</div>','2','0','');");
E_D("replace into `phome_enewsad` values('14','','','285','280','0','1','1','�����������ҳ�����в���ID_14��','','','2016-05-17','2036-06-16','','','','<div style=\"background:#fff;width:283px;height:278px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_14���λ-285*280</div>','2','0','');");
E_D("replace into `phome_enewsad` values('15','','','275','70','0','1','1','ȫվ����logo�ҲࣨID_15��','','','2016-05-17','2026-06-16','','','','<div style=\"background:#fff;width:273px;height:68px;border:1px #f60 dashed;text-align:center;overflow:hidden;margin:auto;\">id_15���λ-275*70</div>','2','0','');");
E_D("replace into `phome_enewsad` values('16','','','468','60','0','1','1','�ֻ�Ӧ������������ID_16��','','','2016-05-20','2026-06-19','','','','<div style=\"background:#fff;width:308px;height:198px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_16���λ-310*200</div>','2','0','');");
E_D("replace into `phome_enewsad` values('17','','','468','60','0','1','1','��ҳС���Ƽ��·���ID_17��','','','2016-05-23','2026-06-22','','','','<div style=\"background:#fff;width:298px;height:130px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_17���λ-300*132</div>','2','0','');");
E_D("replace into `phome_enewsad` values('18','','','468','60','0','1','1','ר���б�ҳ�����·���ID_18��','','','2016-05-25','2026-06-24','','','','<div style=\"background:#fff;width:263px;height:163px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;\">id_18���λ-265*165</div>','2','0','');");

@include("../../inc/footer.php");
?>