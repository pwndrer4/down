<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberform`;");
E_C("CREATE TABLE `phome_enewsmemberform` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) NOT NULL DEFAULT '',
  `ftemp` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `imgf` varchar(255) NOT NULL DEFAULT '0',
  `tobrf` text NOT NULL,
  `viewenter` text NOT NULL,
  `searchvar` varchar(255) NOT NULL DEFAULT '',
  `canaddf` text NOT NULL,
  `caneditf` text NOT NULL,
  `checkboxf` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsmemberform` values('1','����ע���','<table width=\\\\''100%\\\\'' align=\\\\''center\\\\'' cellpadding=3 cellspacing=1 bgcolor=\\\\''#DBEAF5\\\\''>\r\n<tr><td width=\\\\''25%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ʵ����</td><td bgcolor=\\\\''ffffff\\\\''>[!--truename--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>QQ����</td><td bgcolor=\\\\''ffffff\\\\''>[!--oicq--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>MSN</td><td bgcolor=\\\\''ffffff\\\\''>[!--msn--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ϵ�绰</td><td bgcolor=\\\\''ffffff\\\\''>[!--mycall--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>�ֻ�</td><td bgcolor=\\\\''ffffff\\\\''>[!--phone--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��վ��ַ</td><td bgcolor=\\\\''ffffff\\\\''>[!--homepage--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��Աͷ��</td><td bgcolor=\\\\''ffffff\\\\''>[!--userpic--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ϵ��ַ</td><td bgcolor=\\\\''ffffff\\\\''>[!--address--]&nbsp;�ʱ�: [!--zip--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>���˽���</td><td bgcolor=\\\\''ffffff\\\\''>[!--saytext--]</td></tr>\r\n</table>','','��ʵ����<!--field--->truename<!--record-->��ϵ�绰<!--field--->mycall<!--record-->�ֻ�<!--field--->phone<!--record-->QQ����<!--field--->oicq<!--record-->MSN<!--field--->msn<!--record-->��վ��ַ<!--field--->homepage<!--record-->��Աͷ��<!--field--->userpic<!--record-->��ϵ��ַ<!--field--->address<!--record-->�ʱ�<!--field--->zip<!--record-->���<!--field--->saytext<!--record-->','',',',',userpic,',',saytext,','��ʵ����<!--field--->truename<!--record-->��ϵ�绰<!--field--->mycall<!--record-->�ֻ�<!--field--->phone<!--record-->QQ����<!--field--->oicq<!--record-->MSN<!--field--->msn<!--record-->��վ��ַ<!--field--->homepage<!--record-->��Աͷ��<!--field--->userpic<!--record-->��ϵ��ַ<!--field--->address<!--record-->�ʱ�<!--field--->zip<!--record-->���<!--field--->saytext<!--record-->','',',truename,mycall,phone,oicq,msn,homepage,userpic,address,zip,saytext,',',truename,mycall,phone,oicq,msn,homepage,userpic,address,zip,saytext,',',');");
E_D("replace into `phome_enewsmemberform` values('2','��Աע���','<table width=\\\\''100%\\\\'' align=\\\\''center\\\\'' cellpadding=3 cellspacing=1 bgcolor=\\\\''#DBEAF5\\\\''><tr><td width=\\\\''25%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��˾����</td><td bgcolor=\\\\''ffffff\\\\''>[!--company--](*)</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ϵ��</td><td bgcolor=\\\\''ffffff\\\\''>[!--truename--](*)</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ϵ�绰</td><td bgcolor=\\\\''ffffff\\\\''>[!--mycall--](*)</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>����</td><td bgcolor=\\\\''ffffff\\\\''>[!--fax--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>�ֻ�</td><td bgcolor=\\\\''ffffff\\\\''>[!--phone--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>QQ����</td><td bgcolor=\\\\''ffffff\\\\''>[!--oicq--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>MSN</td><td bgcolor=\\\\''ffffff\\\\''>[!--msn--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ַ</td><td bgcolor=\\\\''ffffff\\\\''>[!--homepage--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��Աͷ��</td><td bgcolor=\\\\''ffffff\\\\''>[!--userpic--]</td></tr>\r\n<tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��ϵ��ַ</td><td bgcolor=\\\\''ffffff\\\\''>[!--address--]&nbsp;�ʱ�: [!--zip--]</td></tr><tr><td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''>��˾����</td><td bgcolor=\\\\''ffffff\\\\''>[!--saytext--]</td></tr></table>','','��˾����<!--field--->company<!--record-->��ϵ��<!--field--->truename<!--record-->��ϵ�绰<!--field--->mycall<!--record-->����<!--field--->fax<!--record-->�ֻ�<!--field--->phone<!--record-->QQ����<!--field--->oicq<!--record-->MSN<!--field--->msn<!--record-->��ַ<!--field--->homepage<!--record-->��Աͷ��<!--field--->userpic<!--record-->��ϵ��ַ<!--field--->address<!--record-->�ʱ�<!--field--->zip<!--record-->��˾����<!--field--->saytext<!--record-->',',company,truename,mycall,',',',',userpic,',',saytext,','��˾����<!--field--->company<!--record-->��ϵ��<!--field--->truename<!--record-->��ϵ�绰<!--field--->mycall<!--record-->����<!--field--->fax<!--record-->�ֻ�<!--field--->phone<!--record-->QQ����<!--field--->oicq<!--record-->MSN<!--field--->msn<!--record-->��ַ<!--field--->homepage<!--record-->��Աͷ��<!--field--->userpic<!--record-->��ϵ��ַ<!--field--->address<!--record-->�ʱ�<!--field--->zip<!--record-->��˾����<!--field--->saytext<!--record-->',',company,',',company,truename,mycall,fax,phone,oicq,msn,homepage,userpic,address,zip,saytext,',',company,truename,mycall,fax,phone,oicq,msn,homepage,userpic,address,zip,saytext,',',');");

@include("../../inc/footer.php");
?>