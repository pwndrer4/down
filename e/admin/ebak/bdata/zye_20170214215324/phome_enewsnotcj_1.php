<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsnotcj`;");
E_C("CREATE TABLE `phome_enewsnotcj` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `word` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsnotcj` values('1','<input type=hidden value=''��ӭʹ�õ۹���վ����ϵͳ��www.phome.net''>');");
E_D("replace into `phome_enewsnotcj` values('2','<phome �۹���վ����ϵͳ,phome.net>');");
E_D("replace into `phome_enewsnotcj` values('3','<!--�۹�CMS,phome.net-->');");
E_D("replace into `phome_enewsnotcj` values('4','<table style=display:none><tr><td>\r\nEmpire CMS,phome.net\r\n</td></tr></table>');");
E_D("replace into `phome_enewsnotcj` values('5','<div style=display:none>\r\nӵ�е۹�һ�У����п��ܡ���ӭ����phome.net\r\n</div>');");

@include("../../inc/footer.php");
?>