<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfeedbackclass`;");
E_C("CREATE TABLE `phome_enewsfeedbackclass` (
  `bid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(60) NOT NULL DEFAULT '',
  `btemp` mediumtext NOT NULL,
  `bzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `checkboxf` text NOT NULL,
  `usernames` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsfeedbackclass` values('1','Ĭ�Ϸ�������','[!--cp.header--]\r\n<table width=100% align=center cellpadding=3 cellspacing=1 class=\\\\\"tableborder\\\\\">\r\n  <form name=\\\\''feedback\\\\'' method=\\\\''post\\\\'' enctype=\\\\''multipart/form-data\\\\'' action=\\\\''../../enews/index.php\\\\''>\r\n    <input name=\\\\''enews\\\\'' type=\\\\''hidden\\\\'' value=\\\\''AddFeedback\\\\''>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��������:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''name\\\\'' type=\\\\''text\\\\'' size=\\\\''42\\\\''>\r\n        (*)</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">ְ��:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''job\\\\'' type=\\\\''text\\\\'' size=\\\\''42\\\\''></td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��˾����:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''company\\\\'' type=\\\\''text\\\\'' size=\\\\''42\\\\''></td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��ϵ����:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''email\\\\'' type=\\\\''text\\\\'' size=\\\\''42\\\\''></td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��ϵ�绰:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''mycall\\\\'' type=\\\\''text\\\\'' size=\\\\''42\\\\''>\r\n        (*)</td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��վ:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''homepage\\\\'' type=\\\\''text\\\\'' size=\\\\''42\\\\''></td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��ϵ��ַ:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''address\\\\'' type=\\\\''text\\\\'' size=\\\\\"42\\\\\"></td>\r\n    </tr>\r\n    <tr>\r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��Ϣ����:</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input name=\\\\''title\\\\'' type=\\\\''text\\\\'' size=\\\\\"42\\\\\"> (*)</td>\r\n    </tr>\r\n    <tr> \r\n      <td width=\\\\''16%\\\\'' height=25 bgcolor=\\\\''ffffff\\\\''><div align=\\\\\"right\\\\\">��Ϣ����(*):</div></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><textarea name=\\\\''saytext\\\\'' cols=\\\\''60\\\\'' rows=\\\\''12\\\\''></textarea> \r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td bgcolor=\\\\''ffffff\\\\''></td>\r\n      <td bgcolor=\\\\''ffffff\\\\''><input type=\\\\''submit\\\\'' name=\\\\''submit\\\\'' value=\\\\''�ύ\\\\''></td>\r\n    </tr>\r\n  </form>\r\n</table>\r\n[!--cp.footer--]','','��������<!--field--->name<!--record-->ְ��<!--field--->job<!--record-->��˾����<!--field--->company<!--record-->��ϵ����<!--field--->email<!--record-->��ϵ�绰<!--field--->mycall<!--record-->��վ<!--field--->homepage<!--record-->��ϵ��ַ<!--field--->address<!--record-->��Ϣ����<!--field--->title<!--record-->��Ϣ����<!--field--->saytext<!--record-->',',name,mycall,title,saytext,',',','0','','');");

@include("../../inc/footer.php");
?>