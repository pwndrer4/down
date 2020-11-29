<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewssearch` values('18','浏览器','1464607310','title','61','218.19.156.69','','1','newstime','0','52936d27b512ccf59bd4b101663d7ac3','soft','1','0',' and ((title LIKE ''%浏览器%''))','0');");
E_D("replace into `phome_enewssearch` values('17','天天背单词','1464603743','title','2','218.19.156.69','','1','newstime','0','fef04a953d07c1393293054965084bf6','phone','1','0',' and ((title LIKE ''%天天背单词%''))','0');");
E_D("replace into `phome_enewssearch` values('16','新仙剑奇侠传怎','1464603717','title','1','218.19.156.69','','1','newstime','0','2b4e7ca68a70c2ceceeeaf4ca3d5ad10','news','1','0',' and ((title LIKE ''%新仙剑奇侠传怎%''))','0');");
E_D("replace into `phome_enewssearch` values('15','新仙剑奇侠','1464603093','title','1','218.19.156.69','','1','newstime','0','4c7f51be557f65eb6cbb455b470d3124','news','1','0',' and ((title LIKE ''%新仙剑奇侠%''))','0');");
E_D("replace into `phome_enewssearch` values('14','新仙剑奇','1464601729','title','1','218.19.156.69','','1','newstime','0','8765ea30cfcd91aaffb73bdbd34cc852','news','1','0',' and ((title LIKE ''%新仙剑奇%''))','0');");
E_D("replace into `phome_enewssearch` values('13','搜狗拼音','1464600130','title','5','218.19.156.69','','1','newstime','0','3debf9e78b532a0cbe4dc37d0176c628','soft','1','0',' and ((title LIKE ''%搜狗拼音%''))','0');");
E_D("replace into `phome_enewssearch` values('8','梦幻西游','1464599961','title','1','218.19.156.69','','1','newstime','0','b300f1550487b4c3291a1087279400d8','soft','1','0',' and ((title LIKE ''%梦幻西游%''))','0');");
E_D("replace into `phome_enewssearch` values('9','qq2016','1464603729','title','2','218.19.156.69','','2','newstime','0','03022228e7d2fced68d2401490230cb2','soft','1','0',' and ((title LIKE ''%qq2016%''))','0');");
E_D("replace into `phome_enewssearch` values('10','电脑管家','1464599977','title','14','218.19.156.69','','1','newstime','0','90cae36d563e9c6cf96069f7a54910b0','soft','1','0',' and ((title LIKE ''%电脑管家%''))','0');");
E_D("replace into `phome_enewssearch` values('11','抢票软件','1464599980','title','1','218.19.156.69','','1','newstime','0','fb2e919cd66eb8626d81fa7f8d92429d','soft','1','0',' and ((title LIKE ''%抢票软件%''))','0');");
E_D("replace into `phome_enewssearch` values('12','360杀毒','1464599991','title','7','218.19.156.69','','1','newstime','0','ea02f6f04fac0a48343e1919cffe33cc','soft','1','0',' and ((title LIKE ''%360杀毒%''))','0');");
E_D("replace into `phome_enewssearch` values('19','腾讯','1464608480','title','6','218.19.156.69','','1','newstime','0','9d80d6a0d1b67f2d1fd104a38dfe6ce5','news','1','0',' and ((title LIKE ''%腾讯%''))','0');");
E_D("replace into `phome_enewssearch` values('20','百度地图','1464609048','title','1','218.19.156.69','','1','newstime','0','8e26837a094e1671af6d5467164275ca','phone','1','0',' and ((title LIKE ''%百度地图%''))','0');");
E_D("replace into `phome_enewssearch` values('21','梦幻西游','1466642925','title','3','36.4.48.83','','2','newstime','0','1c9356d398185f026afe8da8c5959ee6','news','1','0',' and ((title LIKE ''%梦幻西游%''))','0');");
E_D("replace into `phome_enewssearch` values('22','360','1467604092','title','42','27.159.35.111','','2','newstime','0','8bacd918d1b009f650dac5c7de7b0fdd','soft','1','0',' and ((title LIKE ''%360%''))','0');");
E_D("replace into `phome_enewssearch` values('23','qq','1467730852','title','27','182.244.35.120','','2','newstime','0','67fe9267f63f2b7bd025b4b684cd4dc6','news','1','0',' and ((title LIKE ''%qq%''))','0');");
E_D("replace into `phome_enewssearch` values('24','皇室战争','1466237521','title','1','36.4.97.5','','1','newstime','0','a671bce51b8a489b36cd2dfac68b8023','news','1','0',' and ((title LIKE ''%皇室战争%''))','0');");
E_D("replace into `phome_enewssearch` values('25','我的世界','1466945101','title','11','36.233.187.233','','1','newstime','0','27a15577fe9cc1d7cbc4d716c8584748','news','1','0',' and ((title LIKE ''%我的世界%''))','0');");
E_D("replace into `phome_enewssearch` values('26','360卫士','1467604082','title','2','111.10.255.36','','1','newstime','0','59575562eff9318dd6f8b60e9470f865','news','1','0',' and ((title LIKE ''%360卫士%''))','0');");
E_D("replace into `phome_enewssearch` values('27','西游','1467728538','title','4','183.5.64.149','','1','newstime','0','4a6c0975ddd8cf0be182cbea0b63fc0f','news','1','0',' and ((title LIKE ''%西游%''))','0');");
E_D("replace into `phome_enewssearch` values('28','西游','1467728546','title','26','183.5.64.149','','1','newstime','0','68fa95801e5ffbb84908d185ee8bf63b','phone','1','0',' and ((title LIKE ''%西游%''))','0');");
E_D("replace into `phome_enewssearch` values('29','2016','1468057388','title','24','1.86.7.44','','1','newstime','0','0f0340155ce559fe67cfb6f4810ce6b0','news','1','0',' and ((title LIKE ''%2016%''))','0');");
E_D("replace into `phome_enewssearch` values('30','搜狗','1468208981','title','2','125.84.220.223','','1','newstime','0','1f70c7b600f25a91ff0a00d0371be6cb','news','1','0',' and ((title LIKE ''%搜狗%''))','0');");
E_D("replace into `phome_enewssearch` values('31','111','1468509631','title','1','1.80.43.192','','1','newstime','0','4ffe781793c1d213136b4229cdc4b69e','news','1','0',' and ((title LIKE ''%111%''))','0');");
E_D("replace into `phome_enewssearch` values('32','谷歌','1468847097','title','8','113.65.146.10','','1','newstime','0','f7596d86c4bf9e529ad5f3282146f765','soft','1','0',' and ((title LIKE ''%谷歌%''))','0');");

@include("../../inc/footer.php");
?>