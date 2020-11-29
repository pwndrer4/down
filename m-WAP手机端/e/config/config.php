<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
define('EmpireCMSConfig',TRUE);
$ecms_config=array();

//数据库设置
$ecms_config['db']['usedb']='mysql';	//数据库类型
$ecms_config['db']['dbver']='5.0';	//数据库版本
$ecms_config['db']['dbserver']='127.0.0.1';	//数据库登录地址
$ecms_config['db']['dbport']='3306';	//端口，不填为按默认
$ecms_config['db']['dbusername']='zye';	//数据库用户名
$ecms_config['db']['dbpassword']='suibianlu.com';	//数据库密码
$ecms_config['db']['dbname']='zye';	//数据库名
$ecms_config['db']['setchar']='gbk';	//设置默认编码
$ecms_config['db']['dbchar']='gbk';	//数据库默认编码
$ecms_config['db']['dbtbpre']='phome_';	//数据表前缀
$dbtbpre=$ecms_config['db']['dbtbpre'];	//数据表前缀
$ecms_config['db']['showerror']=1;	//显示SQL错误提示(0为不显示,1为显示)


//页面编码设置
$ecms_config['sets']['pagechar']='gb2312';	//安装帝国CMS的编码版本
$ecms_config['sets']['setpagechar']=1;	//页面默认字符集,0=关闭 1=开启
$ecms_config['sets']['elang']='gb';	//语言包

//后台相关配置
$ecms_config['esafe']['openonlinesetting']=3;	//开启后台在线配置参数(0为关闭,1为开启防火墙配置,2为开启安全配置,3为全开启)
$ecms_config['esafe']['openeditdttemp']=1;	//开启后台在线修改动态模板(0为关闭,1为开启)

//易通行系统配置
$ecms_config['epassport']['open']=0;	//是否开启易通行系统(1为开启，0为关闭)

//其它配置
$ecms_config['sets']['txtpath']=ECMS_PATH.'d/txt/';	//文本型数据存放目录
$ecms_config['sets']['saveurlimgclearurl']=0;	//远程保存图片自动去除图片的链接(0为保留,1为去除)
$ecms_config['sets']['deftempid']=2;	//默认模板组ID
$ecms_config['sets']['selfmoreportid']=2;	//当前网站访问端ID,0为主访问端



//-------EmpireCMS.Seting.member-------

//会员系统相关配置
$ecms_config['member']['tablename']="{$dbtbpre}enewsmember";	//会员表
$user_tablename=$ecms_config['member']['tablename'];	//会员表
$ecms_config['member']['changeregisterurl']="ChangeRegister.php";    //多会员组中转注册地址
$ecms_config['member']['registerurl']="";							//会员注册地址
$ecms_config['member']['loginurl']="";								//会员登录地址
$ecms_config['member']['quiturl']="";								//会员退出地址
$ecms_config['member']['chmember']=0;//是否使用原版会员表信息,0为原版,1为非原版
$ecms_config['member']['pwtype']=2;//密码保存形式,0为md5,1为明码,2为双重加密,3为16位md5
$ecms_config['member']['regtimetype']=1;//注册时间保存格式,0为正常时间,1为数值型
$ecms_config['member']['regcookietime']=0;//注册后登录保存时间(秒)
$ecms_config['member']['defgroupid']=0;//注册时会员组ID(ecms的会员组,0为后台默认)
$ecms_config['member']['saltnum']=6;//SALT随机码字符数
$ecms_config['member']['utfdata']=0;//数据是否是UTF8编码,0为正常数据,1为UTF8编码

$ecms_config['memberf']['userid']='userid';//用户ID字段
$ecms_config['memberf']['username']='username';//用户名字段
$ecms_config['memberf']['password']='password';//密码字段
$ecms_config['memberf']['rnd']='rnd';//随机密码字段
$ecms_config['memberf']['email']='email';//邮箱字段
$ecms_config['memberf']['registertime']='registertime';//注册时间字段
$ecms_config['memberf']['groupid']='groupid';//会员组字段
$ecms_config['memberf']['userfen']='userfen';//积分字段
$ecms_config['memberf']['userdate']='userdate';//有效期字段
$ecms_config['memberf']['money']='money';//帐户余额字段
$ecms_config['memberf']['zgroupid']='zgroupid';//到期转向会员组字段
$ecms_config['memberf']['havemsg']='havemsg';//提示短消息字段
$ecms_config['memberf']['checked']='checked';//审核状态字段
$ecms_config['memberf']['salt']='salt';//SALT加密字段
$ecms_config['memberf']['userkey']='userkey';//用户密钥字段

//-------EmpireCMS.Seting.member-------




//-------EmpireCMS.Seting.area-------

//后台安全设置
$ecms_config['esafe']['loginauth']='';	//登录认证码,如果设置登录需要输入此认证码才能通过
$ecms_config['esafe']['ecookiernd']='www.phome.net';	//后台登录COOKIE认证码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['esafe']['ckhloginip']=0;	//后台是否验证登录IP,0为不验证,1为验证
$ecms_config['esafe']['ckhsession']=0;	//后台是否启用SESSION验证,0为不验证,1为验证
$ecms_config['esafe']['ckhanytime']=0;	//后台随时认证码变更周期,单位:秒(0为不启用)
$ecms_config['esafe']['theloginlog']=0;	//是否记录登陆日志(0为记录,1为不记录)
$ecms_config['esafe']['thedolog']=0;		//是否记录操作日志(0为记录,1为不记录)
$ecms_config['esafe']['ckfromurl']=2;	//是否启用来源地址验证,0为不验证,1为全部验证,2为后台验证,3为前台验证
$ecms_config['esafe']['ckhash']=0;	//启用后台来源认证码,0为金刚模式验证,1为刺猬模式验证,2为关闭验证

//COOKIE设置
$ecms_config['cks']['ckdomain']='';		//cookie作用域
$ecms_config['cks']['ckpath']='/';		//cookie作用路径
$ecms_config['cks']['ckvarpre']='ecms';		//前台cookie变量前缀
$ecms_config['cks']['ckadminvarpre']='adminecms';		//后台cookie变量前缀
$ecms_config['cks']['ckrnd']='www.phome.net';	//COOKIE验证随机码(填写10~50个任意字符，最好多种字符组合)
$ecms_config['cks']['ckrndtwo']='www.phome.net';	//COOKIE验证随机码2(填写10~50个任意字符，最好多种字符组合)

//网站防火墙配置
$ecms_config['fw']['eopen']=0;	//开启防火墙(0为关闭,1为开启)
$ecms_config['fw']['epass']='';	//防火墙加密密钥(填写10~50个任意字符，最好多种字符组合)
$ecms_config['fw']['adminloginurl']='';	//允许后台登陆的域名,设置后必须通过这个域名才能访问后台
$ecms_config['fw']['adminhour']='';	//允许登陆后台的时间：0~23小时，多个时间点用半角逗号格开
$ecms_config['fw']['adminweek']='';	//允许登陆后台的星期：星期0~6，多个星期用半角逗号格开
$ecms_config['fw']['adminckpassvar']='';	//后台预登陆验证变量名
$ecms_config['fw']['adminckpassval']='';	//后台预登陆认证码
$ecms_config['fw']['cleargettext']='';	//屏蔽提交敏感字符，多个用半角逗号格开

//-------EmpireCMS.Seting.area-------


//文件类型
$ecms_config['sets']['tranpicturetype']=',.jpg,.gif,.png,.bmp,.jpeg,';	//图片
$ecms_config['sets']['tranflashtype']=',.swf,.flv,.dcr,';	//FLASH
$ecms_config['sets']['mediaplayertype']=',.wmv,.asf,.wma,.mp3,.asx,.mid,.midi,';	//mediaplayer
$ecms_config['sets']['realplayertype']=',.rm,.ra,.rmvb,.mp4,.mov,.avi,.wav,.ram,.mpg,.mpeg,';	//realplayer




//***************** 以下部分为缓存，不用设置 **************

//-------EmpireCMS.Public.Cache-------

//------------e_public
$public_r=array('sitename'=>'系统天堂 - 手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸',
'newsurl'=>'/',
'filetype'=>'|.gif|.jpg|.swf|.rar|.zip|.mp3|.wmv|.txt|.doc|.png|.jpeg|',
'filesize'=>2048,
'relistnum'=>8,
'renewsnum'=>10,
'min_keyboard'=>2,
'max_keyboard'=>20,
'search_num'=>20,
'search_pagenum'=>10,
'newslink'=>0,
'checked'=>0,
'searchtime'=>1,
'loginnum'=>5,
'logintime'=>60,
'addnews_ok'=>0,
'register_ok'=>0,
'indextype'=>'.html',
'goodlencord'=>0,
'goodtype'=>'',
'searchtype'=>'.html',
'exittime'=>40,
'smalltextlen'=>160,
'defaultgroupid'=>1,
'fileurl'=>'/d/file/',
'install'=>0,
'phpmode'=>0,
'dorepnum'=>300,
'loadtempnum'=>50,
'bakdbpath'=>'bdata',
'bakdbzip'=>'zip',
'downpass'=>'VI5c2DsJaDst1lIHnMbV',
'filechmod'=>1,
'loginkey_ok'=>0,
'tbname'=>'news',
'limittype'=>0,
'redodown'=>1,
'downsofttemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'onlinemovietemp'=>'[ <a href=\"#ecms\" onclick=\"window.open(\'[!--down.url--]\',\'\',\'width=300,height=300,resizable=yes\');\">[!--down.name--]</a> ]',
'lctime'=>1222406370,
'candocode'=>1,
'opennotcj'=>0,
'listpagetemp'=>'页次：[!--thispage--]/[!--pagenum--]&nbsp;每页[!--lencord--]&nbsp;总数[!--num--]&nbsp;&nbsp;&nbsp;&nbsp;[!--pagelink--]&nbsp;&nbsp;&nbsp;&nbsp;转到:[!--options--]',
'reuserpagenum'=>50,
'revotejsnum'=>100,
'readjsnum'=>100,
'qaddtran'=>1,
'qaddtransize'=>50,
'ebakthisdb'=>1,
'delnewsnum'=>300,
'markpos'=>5,
'markimg'=>'../data/mark/maskdef.gif',
'marktext'=>'',
'markfontsize'=>'5',
'markfontcolor'=>'',
'markfont'=>'../data/mark/cour.ttf',
'adminloginkey'=>1,
'php_outtime'=>0,
'listpagefun'=>'sys_ShowListPage',
'textpagefun'=>'sys_ShowTextPage',
'adfile'=>'thea',
'notsaveurl'=>'',
'rssnum'=>50,
'rsssub'=>300,
'savetxtf'=>',',
'dorepdlevelnum'=>300,
'listpagelistfun'=>'sys_ShowListMorePage',
'listpagelistnum'=>6,
'infolinknum'=>100,
'searchgroupid'=>0,
'opencopytext'=>0,
'reuserjsnum'=>100,
'reuserlistnum'=>8,
'opentitleurl'=>1,
'searchtempvar'=>1,
'showinfolevel'=>0,
'navfh'=>'>',
'spicwidth'=>105,
'spicheight'=>118,
'spickill'=>1,
'jpgquality'=>80,
'markpct'=>65,
'redoview'=>24,
'reggetfen'=>0,
'regbooktime'=>30,
'revotetime'=>30,
'fpath'=>0,
'filepath'=>'Y-m-d',
'nreclass'=>',',
'nreinfo'=>',',
'nrejs'=>',',
'nottobq'=>',',
'defspacestyleid'=>1,
'canposturl'=>'',
'openspace'=>0,
'defadminstyle'=>1,
'realltime'=>0,
'closeip'=>'',
'openip'=>'',
'hopenip'=>'',
'textpagelistnum'=>6,
'memberlistlevel'=>0,
'ebakcanlistdb'=>0,
'keytog'=>2,
'keytime'=>30,
'keyrnd'=>'Zjdqtpuk4hmzMG6pmyfSBKSdXwBEMC',
'checkdorepstr'=>',0,0,0,0,',
'regkey_ok'=>0,
'opengetdown'=>0,
'gbkey_ok'=>0,
'fbkey_ok'=>0,
'newaddinfotime'=>0,
'classnavs'=>'<a href=\"/sjrj/\">软件库</a>&nbsp;|&nbsp;<a href=\"/fjyx/\">游戏库</a>&nbsp;|&nbsp;<a href=\"/article/\">文章资讯</a>&nbsp;|&nbsp;<a href=\"/soft/\">下载中心</a>&nbsp;|&nbsp;<a href=\"/news/\">资讯</a>',
'adminstyle'=>',1,2,',
'docnewsnum'=>300,
'openschall'=>0,
'schallfield'=>1,
'schallminlen'=>3,
'schallmaxlen'=>20,
'schallnum'=>20,
'schallpagenum'=>10,
'dtcanbq'=>1,
'dtcachetime'=>43200,
'repkeynum'=>0,
'regacttype'=>0,
'opengetpass'=>0,
'hlistinfonum'=>30,
'qlistinfonum'=>25,
'dtncanbq'=>1,
'dtncachetime'=>43200,
'readdinfotime'=>0,
'qeditinfotime'=>0,
'onclicktype'=>0,
'onclickfilesize'=>10,
'onclickfiletime'=>60,
'schalltime'=>0,
'defprinttempid'=>1,
'opentags'=>1,
'tagstempid'=>25,
'usetags'=>',9,',
'chtags'=>'',
'tagslistnum'=>1000,
'closeqdt'=>0,
'settop'=>0,
'qlistinfomod'=>0,
'gb_num'=>20,
'member_num'=>20,
'space_num'=>25,
'infolday'=>0,
'filelday'=>0,
'dorepkey'=>0,
'dorepword'=>0,
'onclickrnd'=>'',
'indexpagedt'=>0,
'keybgcolor'=>'',
'keyfontcolor'=>'',
'keydistcolor'=>'',
'indexpageid'=>0,
'closeqdtmsg'=>'',
'openfileserver'=>0,
'fs_purl'=>'',
'closemods'=>'',
'fieldandtop'=>0,
'fieldandclosetb'=>'',
'filedatatbs'=>',1,',
'filedeftb'=>1,
'pldeftb'=>1,
'plurl'=>'/e/pl/',
'plkey_ok'=>0,
'plface'=>'||[em_1]##1.gif||[em_2]##2.gif||[em_3]##3.gif||[em_4]##4.gif||[em_5]##5.gif||[em_6]##6.gif||[em_7]##7.gif||[em_8]##8.gif||[em_9]##9.gif||[em_10]##10.gif||[em_11]##11.gif||[em_12]##12.gif||[em_13]##13.gif||[em_14]##14.gif||[em_15]##15.gif||[em_16]##16.gif||[em_17]##17.gif||[em_18]##18.gif||[em_19]##19.gif||[em_20]##20.gif||[em_21]##21.gif||[em_22]##22.gif||[em_23]##23.gif||[em_24]##24.gif||[em_25]##25.gif||[em_26]##26.gif||[em_27]##27.gif||[em_28]##28.gif||[em_29]##29.gif||[em_30]##30.gif||[em_31]##31.gif||[em_32]##32.gif||[em_33]##33.gif||[em_34]##34.gif||[em_35]##35.gif||[em_36]##36.gif||[em_37]##37.gif||[em_38]##38.gif||[em_39]##39.gif||[em_40]##40.gif||[em_41]##41.gif||[em_42]##42.gif||[em_43]##43.gif||[em_44]##44.gif||[em_45]##45.gif||[em_46]##46.gif||[em_47]##47.gif||[em_48]##48.gif||[em_49]##49.gif||[em_50]##50.gif||[em_51]##51.gif||[em_52]##52.gif||[em_53]##53.gif||[em_54]##54.gif||[em_55]##55.gif||[em_56]##56.gif||[em_57]##57.gif||[em_58]##58.gif||[em_59]##59.gif||[em_60]##60.gif||[em_61]##61.gif||[em_62]##62.gif||[em_63]##63.gif||[em_64]##64.gif||[em_65]##65.gif||[em_66]##66.gif||[em_67]##67.gif||[em_68]##68.gif||[em_69]##69.gif||[em_70]##70.gif||[em_71]##71.gif||[em_72]##72.gif||[em_73]##73.gif||[em_74]##74.gif||[em_75]##75.gif||',
'plf'=>'',
'pldatatbs'=>',1,',
'defpltempid'=>1,
'pl_num'=>12,
'plgroupid'=>0,
'closelisttemp'=>'',
'chclasscolor'=>'#99C4E3',
'timeclose'=>'',
'timeclosedo'=>'',
'ipaddinfonum'=>0,
'ipaddinfotime'=>0,
'rewriteinfo'=>'',
'rewriteclass'=>'',
'rewriteinfotype'=>'',
'rewritetags'=>'',
'rewritepl'=>'',
'memberconnectnum'=>0,
'closehmenu'=>'',
'indexaddpage'=>0,
'modmemberedittran'=>0,
'modinfoedittran'=>0,
'deftempid'=>0,'add_weburl'=>'http://xpgod.zuseng.com','add_murl'=>'http://m-xpgod.zuseng.com','add_weburl2'=>'xpgod.zuseng.com','add_beianhao'=>'粤ICP备15093131号-1','add_tongji'=>'','add_webname'=>'仿飞翔下载');
//------------e_public

//moreports
$emoreport_r=array();
$emoreport_r['1']=Array('pid'=>'1',
'pname'=>'主访问端',
'purl'=>'/',
'ppath'=>'D:/wwwroot/xpgod/xpgod.com/',
'postpass'=>'6kp3ba9TMMIcbQ5mObHC6lP3xaBoQb6p1uPd3TSQaxXgAT2uvubzWlWsCqN4',
'postfile'=>'',
'tempgid'=>'0',
'isclose'=>'0',
'closeadd'=>'0',
'mustdt'=>'0');
$emoreport_r['2']=Array('pid'=>'2',
'pname'=>'手机访问端',
'purl'=>'http://m-xpgod.zuseng.com/',
'ppath'=>'D:/wwwroot/xpgod/m.xpgod.com/',
'postpass'=>'7as239Ah9FayyK1NP4WJl3y7uAnRbKdRHz8RzHnxqwiOAsebJmW79M7iXtPZ',
'postfile'=>'',
'tempgid'=>'2',
'isclose'=>'0',
'closeadd'=>'0',
'mustdt'=>'0');

//moreports


//-------EmpireCMS.Public.Cache-------

$emod_pubr=Array('linkfields'=>'|');

$etable_r=array();
$etable_r['news']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>1);
$etable_r['soft']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>9);
$etable_r['phone']=Array('deftb'=>'1',
'yhid'=>0,
'intb'=>0,
'mid'=>10);


$emod_r=array();
$emod_r[1]=Array('mid'=>1,
'mname'=>'新闻系统模型',
'qmname'=>'新闻',
'defaulttb'=>1,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,pcid,phoneid,smalltext,writer,befrom,newstext,diggtop,',
'qenter'=>',title,ftitle,special.field,newstime,titlepic,pcid,phoneid,smalltext,writer,befrom,newstext,diggtop,',
'listtempf'=>',title,ftitle,newstime,titlepic,pcid,phoneid,smalltext,writer,diggtop,',
'tempf'=>',title,ftitle,newstime,titlepic,pcid,phoneid,smalltext,writer,befrom,newstext,diggtop,',
'mustqenterf'=>',title,newstext,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,smalltext,',
'cj'=>',title,ftitle,newstime,titlepic,pcid,phoneid,smalltext,writer,befrom,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,pcid,phoneid,smalltext,writer,befrom,newstext,diggtop,',
'caneditf'=>',title,ftitle,newstime,titlepic,pcid,phoneid,smalltext,writer,befrom,newstext,diggtop,',
'tbmainf'=>',title,titlepic,newstime,ftitle,smalltext,writer,diggtop,pcid,phoneid,',
'tbdataf'=>',befrom,newstext,',
'tobrf'=>',smalltext,newstext,',
'dohtmlf'=>',ftitle,smalltext,writer,befrom,newstext,diggtop,pcid,phoneid,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'newstext',
'smalltextf'=>',smalltext,',
'filef'=>',',
'imgf'=>',titlepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|2|3|4|5|6|7|8|9|10|11|12|13|129|130|131|132|133|134|',
'tid'=>1,
'tbname'=>'news');
$emod_r[10]=Array('mid'=>10,
'mname'=>'手机应用系统模型',
'qmname'=>'手机应用',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,morepic,rjjx,banben,daxiao,yxlx,shouquan,pingfen,dianping,down,bendidown,itunes,iosyy,iosyybendi,pcdown,newstext,diggtop,diggdown,',
'qenter'=>',',
'listtempf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,daxiao,yxlx,shouquan,pingfen,dianping,down,bendidown,itunes,iosyy,iosyybendi,pcdown,diggtop,diggdown,',
'tempf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,daxiao,yxlx,shouquan,pingfen,dianping,down,bendidown,itunes,iosyy,iosyybendi,pcdown,newstext,diggtop,diggdown,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,',
'cj'=>',title,',
'canaddf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,daxiao,yxlx,shouquan,pingfen,dianping,down,bendidown,itunes,iosyy,iosyybendi,pcdown,newstext,diggtop,diggdown,',
'caneditf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,daxiao,yxlx,shouquan,pingfen,dianping,down,bendidown,itunes,iosyy,iosyybendi,pcdown,newstext,diggtop,diggdown,',
'tbmainf'=>',title,titlepic,newstime,banben,daxiao,shouquan,pcdown,pingfen,iosyybendi,morepic,rjjx,down,bendidown,itunes,iosyy,ftitle,dianping,diggtop,diggdown,yxlx,',
'tbdataf'=>',newstext,',
'tobrf'=>',',
'dohtmlf'=>',banben,daxiao,shouquan,pcdown,pingfen,iosyybendi,morepic,rjjx,down,bendidown,itunes,iosyy,ftitle,newstext,dianping,diggtop,diggdown,yxlx,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',newstext,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',iosyybendi,bendidown,',
'imgf'=>',titlepic,morepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|136|137|138|139|140|141|142|143|144|145|146|148|149|150|151|152|153|154|155|156|157|158|',
'tid'=>10,
'tbname'=>'phone');
$emod_r[9]=Array('mid'=>9,
'mname'=>'电脑软件系统模型',
'qmname'=>'电脑软件',
'defaulttb'=>0,
'datatbs'=>',1,',
'deftb'=>'1',
'enter'=>',title,ftitle,special.field,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,newstext,',
'qenter'=>',title,ftitle,special.field,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,newstext,',
'listtempf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,',
'tempf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,newstext,',
'mustqenterf'=>',title,',
'listandf'=>'',
'setandf'=>0,
'searchvar'=>',title,',
'cj'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,newstext,',
'canaddf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,newstext,',
'caneditf'=>',title,ftitle,newstime,titlepic,morepic,rjjx,banben,yuyan,daxiao,shouquan,pingtai,pingfen,guanwang,dianping,down,bendidown,ruanjianjieshao,tishi,newstext,',
'tbmainf'=>',dianping,title,titlepic,newstime,banben,daxiao,shouquan,pingtai,pingfen,guanwang,morepic,rjjx,down,bendidown,tishi,ruanjianjieshao,ftitle,yuyan,',
'tbdataf'=>',newstext,',
'tobrf'=>',',
'dohtmlf'=>',dianping,banben,daxiao,shouquan,pingtai,pingfen,guanwang,morepic,rjjx,down,bendidown,tishi,ruanjianjieshao,ftitle,newstext,yuyan,',
'checkboxf'=>',',
'savetxtf'=>'',
'editorf'=>',tishi,ruanjianjieshao,newstext,',
'ubbeditorf'=>',',
'pagef'=>'',
'smalltextf'=>',',
'filef'=>',bendidown,',
'imgf'=>',titlepic,morepic,',
'flashf'=>',',
'linkfields'=>'|',
'morevaluef'=>'|',
'onlyf'=>',',
'adddofunf'=>'||',
'editdofunf'=>'||',
'qadddofunf'=>'||',
'qeditdofunf'=>'||',
'definfovoteid'=>0,
'orderf'=>'',
'sonclass'=>'|16|17|18|19|20|21|22|23|24|25|26|27|29|30|31|32|33|34|35|36|37|38|39|40|42|43|44|45|46|47|48|49|52|53|54|55|56|57|58|59|61|62|63|64|65|66|67|68|69|70|71|73|74|75|76|77|78|79|80|81|83|84|85|86|87|88|89|90|91|93|94|95|96|97|98|99|100|101|102|103|104|106|107|108|109|110|111|112|113|114|115|116|117|119|120|121|122|123|124|125|126|127|',
'tid'=>9,
'tbname'=>'soft');


//-------EmpireCMS.Public.Cache-------

?>