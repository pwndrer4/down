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
E_D("replace into `phome_enewsuserlist` values('1','�����������','������� - �ֻ��������,�����������,������Ϸ����,��������,����ǽֽ','../../article/zuijinlist/','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by newstime desc','0','30','9','�ֻ��������,�����������,������Ϸ����,��������,����ǽֽ','ϵͳ�����Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!','0');");
E_D("replace into `phome_enewsuserlist` values('2','�Ƽ�����','�Ƽ����� - �ֻ��������,�����������,������Ϸ����,��������,����ǽֽ','../../article/bestlist/','.html','select count(*) as total from [!db.pre!]ecms_news where isgood in (1,2,3,4,5,6,7,8,9)','select * from [!db.pre!]ecms_news where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc','0','30','10','�ֻ��������,�����������,������Ϸ����,��������,����ǽֽ','ϵͳ�����Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!','0');");
E_D("replace into `phome_enewsuserlist` values('3','��������','�������� - �ֻ��������,�����������,������Ϸ����,��������,����ǽֽ','../../article/hotlist/','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by onclick desc','0','30','11','�ֻ��������,�����������,������Ϸ����,��������,����ǽֽ','ϵͳ�����Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!','0');");
E_D("replace into `phome_enewsuserlist` values('4','��������������','�������|���ո���','../../soft/zuijinlist/','.html','select count(*) as total from [!db.pre!]ecms_soft','select * from [!db.pre!]ecms_soft order by newstime desc','0','30','13','�ֻ��������,�����������,������Ϸ����','�Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!','0');");
E_D("replace into `phome_enewsuserlist` values('5','������������Ƽ�','�Ƽ����|��Ʒ���','../../soft/bestlist/','.html','select count(*) as total from [!db.pre!]ecms_soft where isgood in (1,2,3,4,5,6,7,8,9)','select * from [!db.pre!]ecms_soft where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc','0','30','14','�ֻ��������,�����������,������Ϸ����','�Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!','0');");
E_D("replace into `phome_enewsuserlist` values('6','���������������','����������а�|������Ϸ���а�|�ֻ�������а� ','../../soft/hotlist/','.html','select count(*) as total from [!db.pre!]ecms_soft','select * from [!db.pre!]ecms_soft order by onclick desc','0','30','15','�ֻ��������,�����������,������Ϸ����','�Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!','0');");
E_D("replace into `phome_enewsuserlist` values('7','������Ϸר���б�','������Ϸר��_�ֻ���Ϸ���а�_��������ר��-�����������','../../yxzt/','.html','select count(*) as total from phome_enewszt where classid in (92)','select ztid as id,ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,1 as classid from phome_enewszt where classid in (92) order by addtime desc','0','12','22','','�������������Ϸר��Ϊ���ṩ����������Ϸר����Ϣ������������Ϸר�⡢��׿��Ϸר�⡢ios��Ϸר�⡢��׿��Ϸ���а�ר�⡢ios��Ϸ���а�ר��ȵȡ�','0');");
E_D("replace into `phome_enewsuserlist` values('8','�������ר���б�','�������ר��_�ֻ����ר��_�������ר��','../../rjzt/','.html','select count(*) as total from phome_enewszt where classid not in (92) and classid in (14)','select ztid as id,ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,1 as classid from phome_enewszt where classid not in (92) and classid in (14) order by addtime desc','0','12','24','','��������������ר��Ƶ��Ϊ���ṩ���繤�ߡ�ϵͳ�����Ӧ���������������ȵȳ��õ����ר����Ϣ������Ѹ�����ר�⡢������ר�⡢ɱ�����ר�⡢�����ר��ȵȡ�','0');");

@include("../../inc/footer.php");
?>