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
E_D("replace into `phome_enewsztadd` values('1','','minecraft pe_minecraft����_minecraft mod');");
E_D("replace into `phome_enewsztadd` values('2','','lol�����ĸ���_lol��������_Ӣ�����˺����޸����ĸ���');");
E_D("replace into `phome_enewsztadd` values('3','','2016�ٷ�����ʮ�����������');");
E_D("replace into `phome_enewsztadd` values('4','','�ٶ��Ŀ����������ɫ��_�ٶ��Ŀ��������ⰲװ��_�����Ŀ��������ƽ��');");
E_D("replace into `phome_enewsztadd` values('5','','��Ѷ�ֻ�qq2016�ٷ��������');");
E_D("replace into `phome_enewsztadd` values('6','','�ṷ2016�ٷ��������');");
E_D("replace into `phome_enewsztadd` values('7','','��Ʊ����ĸ���_ʲô��Ʊ��������');");
E_D("replace into `phome_enewsztadd` values('8','','360�ֻ���ʿ���ش�ȫ');");
E_D("replace into `phome_enewsztadd` values('9','','�����ղ������ٷ����ص��԰�_������Ӱ��������_������2016_�������ֻ���');");
E_D("replace into `phome_enewsztadd` values('10','','����õ�ƴ�����뷨_ƴ�����뷨�ĸ�����_����ƴ�����뷨����');");
E_D("replace into `phome_enewsztadd` values('11','','uc��������԰� uc������ֻ��� uc���������');");
E_D("replace into `phome_enewsztadd` values('12','','��׿ģ�����ٷ�����_��׿ģ�������а�_�ĸ�����_bluestacks���İ�');");

@include("../../inc/footer.php");
?>