<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztf`;");
E_C("CREATE TABLE `phome_enewsztf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsztf` values('1','ftitle','ИББъЬт','text','\r\n<input name=\\\\\"ftitle\\\\\" type=\\\\\"text\\\\\" id=\\\\\"ftitle\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[ftitle])?>\\\\\" size=\\\\\"47\\\\\">\r\n','','0','TEXT','','','47');");

@include("../../inc/footer.php");
?>