<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewspl_set`;");
E_C("CREATE TABLE `phome_enewspl_set` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pltime` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plsize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plincludesize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `plface` text NOT NULL,
  `plfacenum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `plgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plclosewords` text NOT NULL,
  `plf` text NOT NULL,
  `plmustf` text NOT NULL,
  `pldatatbs` text NOT NULL,
  `defpltempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pl_num` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pldeftb` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plurl` varchar(200) NOT NULL DEFAULT '',
  `plmaxfloor` smallint(5) unsigned NOT NULL DEFAULT '0',
  `plquotetemp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewspl_set` values('1','20','500','0','0','||[em_1]##1.gif||[em_2]##2.gif||[em_3]##3.gif||[em_4]##4.gif||[em_5]##5.gif||[em_6]##6.gif||[em_7]##7.gif||[em_8]##8.gif||[em_9]##9.gif||[em_10]##10.gif||[em_11]##11.gif||[em_12]##12.gif||[em_13]##13.gif||[em_14]##14.gif||[em_15]##15.gif||[em_16]##16.gif||[em_17]##17.gif||[em_18]##18.gif||[em_19]##19.gif||[em_20]##20.gif||[em_21]##21.gif||[em_22]##22.gif||[em_23]##23.gif||[em_24]##24.gif||[em_25]##25.gif||[em_26]##26.gif||[em_27]##27.gif||[em_28]##28.gif||[em_29]##29.gif||[em_30]##30.gif||[em_31]##31.gif||[em_32]##32.gif||[em_33]##33.gif||[em_34]##34.gif||[em_35]##35.gif||[em_36]##36.gif||[em_37]##37.gif||[em_38]##38.gif||[em_39]##39.gif||[em_40]##40.gif||[em_41]##41.gif||[em_42]##42.gif||[em_43]##43.gif||[em_44]##44.gif||[em_45]##45.gif||[em_46]##46.gif||[em_47]##47.gif||[em_48]##48.gif||[em_49]##49.gif||[em_50]##50.gif||[em_51]##51.gif||[em_52]##52.gif||[em_53]##53.gif||[em_54]##54.gif||[em_55]##55.gif||[em_56]##56.gif||[em_57]##57.gif||[em_58]##58.gif||[em_59]##59.gif||[em_60]##60.gif||[em_61]##61.gif||[em_62]##62.gif||[em_63]##63.gif||[em_64]##64.gif||[em_65]##65.gif||[em_66]##66.gif||[em_67]##67.gif||[em_68]##68.gif||[em_69]##69.gif||[em_70]##70.gif||[em_71]##71.gif||[em_72]##72.gif||[em_73]##73.gif||[em_74]##74.gif||[em_75]##75.gif||','10','0','','','',',1,','1','12','1','/e/pl/','0','<div class=\\\\\"ecomment\\\\\">\r\n<span class=\\\\\"ecommentauthor\\\\\">ÍøÓÑ [!--username--] µÄÔ­ÎÄ£º</span>\r\n<p class=\\\\\"ecommenttext\\\\\">[!--pltext--]</p>\r\n</div>');");

@include("../../inc/footer.php");
?>