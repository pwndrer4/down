<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewsfile_1` values('34','1000010000001038','9d135105a6899d6e8e61954cc4e89f16.jpg','150757','2016-05-24','admin','1464055857','129','[URL]9d135105a6899d6e8e61954cc4e89f16.jpg','1','0','1038','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('33','1000010000001038','10a655efcd255a7c33faa6a607934078.jpg','142539','2016-05-24','admin','1464055857','129','[URL]10a655efcd255a7c33faa6a607934078.jpg','1','0','1038','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('32','1000010000001038','49333732b98dd0f7af28fe1e740ea327.jpg','170312','2016-05-24','admin','1464055857','129','[URL]49333732b98dd0f7af28fe1e740ea327.jpg','1','0','1038','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('31','1000010000001038','7565d001fa63c4bdd373459f2b444f9e.jpg','298069','2016-05-24','admin','1464055811','129','5.jpg','1','0','1038','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('30','1000010000001037','94b5462cf9c86738bbdfedddb584d38b.jpg','53649','2016-05-24','admin','1464055746','129','4.jpg','1','0','1037','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('29','1000010000001036','c7e467a1fcc9f330848b3eb881f7b0e4.jpg','158964','2016-05-24','admin','1464055728','129','[URL]c7e467a1fcc9f330848b3eb881f7b0e4.jpg','1','0','1036','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('28','1000010000001036','8b5499b12cddf92bc3c835145e4f9b2a.jpg','80725','2016-05-24','admin','1464055709','129','3.jpg','1','0','1036','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('27','1000010000001035','53886c2cd2b5a713e8c925f519c2620f.jpg','157758','2016-05-24','admin','1464055586','130','[URL]53886c2cd2b5a713e8c925f519c2620f.jpg','1','0','1035','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('26','1000010000001035','66ad7b6efc3c8885ce3de43606efda2f.png','136254','2016-05-24','admin','1464055585','130','[URL]66ad7b6efc3c8885ce3de43606efda2f.png','1','0','1035','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('25','1000010000001035','0f7f65fcef360011bdbbadd2b2e2503f.jpg','68981','2016-05-24','admin','1464055580','130','2.jpg','1','0','1035','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('24','1000010000001034','e20012778d144203938f35c6c7215c71.jpg','65215','2016-05-24','admin','1464055510','129','1.jpg','1','0','1034','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('23','1000010000000211','f557435d852d722335613f3ca3669601.jpg','76533','2016-05-23','admin','1463979916','10','未标题-1.jpg','1','0','211','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('35','1000010000001039','40cfebb57a74175c6107af9f8751b1d3.jpg','50625','2016-05-26','admin','1464254416','3','未标题-1.jpg','1','0','1039','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('36','1000010000001039','09c0402dd9e0862b4292e60fb920cd9c.png','104428','2016-05-26','admin','1464254507','3','[URL]09c0402dd9e0862b4292e60fb920cd9c.png','1','0','1039','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('37','1000010000001039','f53c4021d803fa49b486e56dfcf7637f.png','32652','2016-05-26','admin','1464254507','3','[URL]f53c4021d803fa49b486e56dfcf7637f.png','1','0','1039','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('38','1000010000001039','8b54ad6ee7f073ee28056c05768234c7.png','39946','2016-05-26','admin','1464254507','3','[URL]8b54ad6ee7f073ee28056c05768234c7.png','1','0','1039','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('39','1000010000001039','2f7bacf8b848ecad094c39ead475de9e.png','143754','2016-05-26','admin','1464254508','3','[URL]2f7bacf8b848ecad094c39ead475de9e.png','1','0','1039','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('40','1000100000006340','ad433f81b2f9242140ea1cfdcf950dc5.png','4672','2016-05-29','admin','1464493207','139','0.png','1','0','6340','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('41','1000100000006340','6a90435b56e3a8218d57326250f966e8.png','237430','2016-05-29','admin','1464493324','139','6a90435b56e3a8218d57326250f966e8.png','1','0','6340','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('42','1000100000006340','68881eb21a7ca919846fa5e35efbf52b.jpeg','31373','2016-05-29','admin','1464493324','139','68881eb21a7ca919846fa5e35efbf52b.jpeg','1','0','6340','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('43','1000100000006340','44e9e2afbc0c456cb65e6b3c544b4c2a.jpeg','36091','2016-05-29','admin','1464493324','139','44e9e2afbc0c456cb65e6b3c544b4c2a.jpeg','1','0','6340','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('44','1000100000006341','1a57bde885074747c7d5581a2c4a05a2.png','9494','2016-05-29','admin','1464493576','136','0.png','1','0','6341','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('45','1000100000006341','e4026813020f3fa171ffd64430caf1f4.png','104883','2016-05-29','admin','1464493703','136','e4026813020f3fa171ffd64430caf1f4.png','1','0','6341','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('46','1000100000006341','fb73de9d21d9078940ac2fcb82555f33.png','92931','2016-05-29','admin','1464493703','136','fb73de9d21d9078940ac2fcb82555f33.png','1','0','6341','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('47','1000100000006341','496a95148acdfdd7c7881ed06d6751fd.png','93055','2016-05-29','admin','1464493703','136','496a95148acdfdd7c7881ed06d6751fd.png','1','0','6341','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('48','1000090000001904','e9ac66e68b85e4a214bb08bc419e7676.png','95463','2016-05-29','admin','1464495097','74','mp27973770_1439862263605_1_th.png','1','0','1904','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('49','1000090000001904','0099c16edabe4ca04147c35729f4454f.jpg','59995','2016-05-29','admin','1464495125','74','0099c16edabe4ca04147c35729f4454f.jpg','1','0','1904','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('50','1000090000001905','24de0cefcf32f6a07f5263389aff435d.png','124145','2016-05-29','admin','1464495414','16','1.png','1','0','1905','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('51','1000090000001905','59c185bd30d1ca06037085d1de4742c5.jpg','40798','2016-05-29','admin','1464495428','16','59c185bd30d1ca06037085d1de4742c5.jpg','1','0','1905','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('52','1000090000001906','feb874d07b44081eb471a481640a89fc.jpg','26495','2016-05-29','admin','1464495632','16','20140925065515331.jpg','1','0','1906','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('53','1000090000001906','95ab89f9bee40218e7100cb8de269cf8.jpg','15964','2016-05-29','admin','1464495639','16','95ab89f9bee40218e7100cb8de269cf8.jpg','1','0','1906','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('54','1000090000001907','63aac6d733510dc8ef3f0c010df3a47b.jpg','23962','2016-05-29','admin','1464497271','18','1.jpg','1','0','1907','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('55','1000090000001907','13472608435efe3f970d6d5041ddbe8f.png','35593','2016-05-29','admin','1464497276','18','13472608435efe3f970d6d5041ddbe8f.png','1','0','1907','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('56','1000090000001908','c76aa1a9f3835777bad5c717874f9b90.png','17077','2016-05-29','admin','1464497547','18','21df6eaf5a441e9c84b945c843881783_256_256.png','1','0','1908','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('57','1000090000001908','a7a8429d4e73aa0e6318e53855e692fd.png','400807','2016-05-29','admin','1464497574','18','a7a8429d4e73aa0e6318e53855e692fd.png','1','0','1908','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('58','1000090000001909','fb9cfaa8f2a7b5791936b2221e899bf6.png','32875','2016-05-29','admin','1464497835','63','t011cc74cd953634c8e.png','1','0','1909','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('59','1000090000001909','434a85101cc51f7f190ed4679451bc25.png','35793','2016-05-29','admin','1464497838','63','434a85101cc51f7f190ed4679451bc25.png','1','0','1909','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('60','1000090000001910','0e3f5af9276daedc1f246a414663e7c9.jpg','43766','2016-05-29','admin','1464498118','63','9213b07eca8065388b774b1d90dda144ad34821b_看图王.jpg','1','0','1910','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('61','1000090000001910','3550c411fe6a770ed0b2ff3945591f54.png','206496','2016-05-29','admin','1464498141','63','3550c411fe6a770ed0b2ff3945591f54.png','1','0','1910','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('62','1000090000001911','4979b3889e18a1dccc0f775802bc1a5c.png','5875','2016-05-29','admin','1464498466','81','logo.png','1','0','1911','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('63','1000090000001911','35fc4f02e79a56b1253504580479dc86.jpg','53427','2016-05-29','admin','1464498470','81','35fc4f02e79a56b1253504580479dc86.jpg','1','0','1911','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('64','1000090000001912','09b08164b77b2333a6dd49ea48ae542e.jpg','5494','2016-05-29','admin','1464498695','39','ooYBAFSFbxiIQ2o4AAAVdpuubRUAACJHQEBcJkAABWO308.jpg','1','0','1912','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('65','1000090000001912','af8046db27314c965e2cafc36640bd1d.jpg','42713','2016-05-29','admin','1464498715','39','af8046db27314c965e2cafc36640bd1d.jpg','1','0','1912','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('67','1000010000001041','a5d07ed6a4b95affe5a63a4d8822334f.png','95628','2016-05-30','admin','1464622920','2','1.png','1','0','1041','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('68','1000010000001041','7586ac011b1b2767209ff3bfde5418f5.png','141363','2016-05-30','admin','1464622920','2','2.png','1','0','1041','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('69','1000010000001041','e33ca70b7497d44807da5657310dd520.png','9411','2016-05-30','admin','1464622920','2','3.png','1','0','1041','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('70','1000010000001041','d14de77b45ff2c786488676ebc3114b3.png','17312','2016-05-30','admin','1464622920','2','4.png','1','0','1041','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('71','1000010000001041','4f4d8dd6dc492c0d669be20fe5b708a4.png','31227','2016-05-30','admin','1464622920','2','5.png','1','0','1041','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('72','1000100000006346','4c8ff296d8f6d257d02535b27756854c.png','25415','2016-05-31','admin','1464684057','137','20150604092031858.png','1','0','6346','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('73','1000100000006345','240b9e69e5ccf02b26b7815b7a6d4f59.png','11109','2016-05-31','admin','1464684112','137','20141219100402117.png','1','0','6345','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('74','1000100000006343','99b82d2a13adbbb30bd4fc48bccb62ff.png','40232','2016-05-31','admin','1464684137','137','20150429021849933.png','1','0','6343','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('75','1000100000006344','3e254e9b5c4b34e6d934443b4937402f.jpeg','3315','2016-05-31','admin','1464684168','137','20150120014814138.jpeg','1','0','6344','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('76','1000100000006342','a6a14dde4a6d834c280c9fc41ae80c03.png','20856','2016-05-31','admin','1464684193','137','20141223011527247.png','1','0','6342','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('77','1000100000006346','7482830923c382876e7bc31e4e0bd297.jpg','63331','2016-05-31','admin','1464694776','137','7482830923c382876e7bc31e4e0bd297.jpg','1','0','6346','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('78','1000100000006346','69f0224b3a21a4a0fee9a4004909a4c3.jpg','70727','2016-05-31','admin','1464694776','137','69f0224b3a21a4a0fee9a4004909a4c3.jpg','1','0','6346','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('79','1000100000006346','2589ec283849896eefa5e3b968bb093a.jpg','69435','2016-05-31','admin','1464694776','137','2589ec283849896eefa5e3b968bb093a.jpg','1','0','6346','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('80','1000100000006346','cb68109a01caf29a8ffdd852928cd89e.jpg','117601','2016-05-31','admin','1464694776','137','cb68109a01caf29a8ffdd852928cd89e.jpg','1','0','6346','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('81','1000100000006346','1f46dcaa052c433092df500ed196d7f6.jpg','97215','2016-05-31','admin','1464694776','137','1f46dcaa052c433092df500ed196d7f6.jpg','1','0','6346','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('82','1000100000006345','2cccdc23aeb5b0c6e4b1fa9601f7c64d.jpeg','43832','2016-05-31','admin','1464694944','137','2cccdc23aeb5b0c6e4b1fa9601f7c64d.jpeg','1','0','6345','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('83','1000100000006345','4e5b2ba9ca6583c98f70cf282047d993.jpeg','37580','2016-05-31','admin','1464694944','137','4e5b2ba9ca6583c98f70cf282047d993.jpeg','1','0','6345','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('84','1000100000006344','b32cddceb6a110e87838c20b6d6cf298.jpg','238228','2016-05-31','admin','1464695091','137','b32cddceb6a110e87838c20b6d6cf298.jpg','1','0','6344','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('85','1000100000006344','9e9578a8566f36391180474d13743846.jpg','245250','2016-05-31','admin','1464695091','137','9e9578a8566f36391180474d13743846.jpg','1','0','6344','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('86','1000100000006344','f63b049b7dd5b1d3896bf2eb29143b77.jpg','238634','2016-05-31','admin','1464695091','137','f63b049b7dd5b1d3896bf2eb29143b77.jpg','1','0','6344','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('87','1000100000006344','a9db58f773f52633c3f8b0fbfe627a42.jpg','203392','2016-05-31','admin','1464695091','137','a9db58f773f52633c3f8b0fbfe627a42.jpg','1','0','6344','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('88','1000100000006344','6f4f038de629515f2a4059b412e7c4be.jpg','114819','2016-05-31','admin','1464695091','137','6f4f038de629515f2a4059b412e7c4be.jpg','1','0','6344','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('89','1000100000006343','32bcec682e9127f1958b591edf50583e.jpg','66026','2016-05-31','admin','1464695185','137','32bcec682e9127f1958b591edf50583e.jpg','1','0','6343','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('90','1000100000006343','493be41d5442f4772e446b8f4bef74ba.jpg','55751','2016-05-31','admin','1464695185','137','493be41d5442f4772e446b8f4bef74ba.jpg','1','0','6343','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('91','1000100000006343','9f02356ed7b339a5e25cd32ab953be14.jpg','62228','2016-05-31','admin','1464695185','137','9f02356ed7b339a5e25cd32ab953be14.jpg','1','0','6343','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('92','1000100000006343','58eda06e31df44eea33d90158cd6990a.jpg','53820','2016-05-31','admin','1464695185','137','58eda06e31df44eea33d90158cd6990a.jpg','1','0','6343','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('93','1000100000006343','a333004ca5e6fcbcbc612651634a793e.jpg','40297','2016-05-31','admin','1464695185','137','a333004ca5e6fcbcbc612651634a793e.jpg','1','0','6343','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('94','1000100000006342','409f036892088927d72370698aefe665.jpg','162733','2016-05-31','admin','1464695277','137','409f036892088927d72370698aefe665.jpg','1','0','6342','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('95','1000100000006342','c9ffffcdfa74a425668374f701609f39.jpg','73640','2016-05-31','admin','1464695277','137','c9ffffcdfa74a425668374f701609f39.jpg','1','0','6342','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('96','1000100000006342','a8c81a9bf8897d06840b7d06fb887ba5.jpg','149687','2016-05-31','admin','1464695277','137','a8c81a9bf8897d06840b7d06fb887ba5.jpg','1','0','6342','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('97','1000100000006342','5aeb3a9155fa511fca5cc5a5fc897a4f.png','161113','2016-05-31','admin','1464695277','137','5aeb3a9155fa511fca5cc5a5fc897a4f.png','1','0','6342','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('98','1000100000006342','8fc7e6c555f82bf5d5b39a5d24c104f0.png','135387','2016-05-31','admin','1464695277','137','8fc7e6c555f82bf5d5b39a5d24c104f0.png','1','0','6342','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('99','1000090000001915','b1945e73ec385971f5cbb9ab89925108.png','6390','2016-07-01','[Member]','1467342608','17','[titlepic]122323','1','0','1915','0','0','0');");

@include("../../inc/footer.php");
?>