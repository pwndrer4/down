<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>软件发布</title>
<meta name="description" content="<?=$public_r['add_webname']?>是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!">
<meta name="keywords" content="软件发布">
<link href="/statics/skin_css/fb_xpgod.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/css/hySoftPub.css" />
<script type="text/javascript" src="/statics/skin_js/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="/statics/js/searchword.js"></script>
</head>
<body>
<a href="#top" class="go_top"><span>返回顶部</span></a> <div class="top_bg">
   <div class="inner">
           	
		      <div class="logo"><a href="/"><img src="/statics/skin_img/logo.png" alt="<?=$public_r['add_webname']?>"></a></div>
      <div class="tips"></div>
      <div class="cen">
         <div class="serachs">
	   	<div id="search">
		<div id="search_1">
		<form action="/e/search/index.php" method="post" name="searchform" id="searchform" target="_blank">
		  <div class="schsel">
            <div class="schsel-now">
			<select name="tbname">
			<option value="news" class="sedsa">资讯</option>
			<option value="soft" class="sedsa">软件</option>
			<option value="phone" class="sedsa">手机</option>
			</select>
            </div>
            <div class="clear"></div>
          </div>
			<input class="keyword_input" type="text" name="keyboard" id="keyboard">
			<input type="hidden" name="show" value="title">
			<input type="hidden" name="tempid" value="1">
			<input class="schbtn" type="image" src="/statics/skin_img/yinxing.png">
		</form>
 		 <div class="clear"></div>
	     </div>
		 </div>
	    </div>
         <div class="gjc">
		                             <? @sys_ShowSearchKey(5,5,0,0);?>
                              </div>
      </div>
	<div class="top_r"><script src="/d/js/acmsd/thea15.js"></script></div>
   </div>
   <div class="nav">
      <div class="nav_box">
	  <a href="/" ><span>首页</span><em></em></a>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=1 order by myorder asc limit 9",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<?php  
$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址  
$class="";
if($GLOBALS[navclassid]){
if($bqr[classid]==$GLOBALS[navclassid])
{
$class="on";
}}
?>
		<a href="<?=$bqsr[classurl]?>" class="<?=$class?>"><span><?=$bqr[classname]?></span><em></em></a> 
<?php
}
}
?>
	  	   	   	   	   	   	   	   	   	   	   	   	    
      </div>
   </div>
   <div class="nav_menu">
    <div class="menu">
      <a href="/soft/yyrj/wzsr/" target="_blank">输入法</a>
      <a href="/soft/wlrj/wlll/" target="_blank">浏览器</a>
	  <a href="/soft/mtbf/wlds/" target="_blank">办公软件</a>
      <a href="/soft/yyrj/bgrj/" target="_blank">办公软件</a>
      <a href="/soft/xtrj/yjqd/" target="_blank">驱动下载</a>
      <a href="/soft/safe/xtaq/" target="_blank">系统安全</a>
      <a href="/soft/mtbf/wlds/" target="_blank">网络电视</a>
      <a href="/soft/mtbf/spbf/" target="_blank">视频播放</a>
      <a href="/soft/mtbf/yybf/" target="_blank">音乐播放</a>
      <a href="/soft/sjwj/sjgl/" target="_blank">手机助手</a>
      <a href="/soft/txtx/tpcl/" target="_blank">图形软件</a>
      <a href="/soft/txtx/3dzz/" target="_blank">设计软件</a>
      <a href="/soft/yxzj/yxgj/" target="_blank">游戏工具</a>
   </div>
  </div>
</div>	
<div id="wrap" class="w960">
  <div id="header" class="cf"> </div>
  <div class="location"> 位置：<a href="/">首页</a><em>&gt;</em><a href="/support/rjfb.html">软件发布</a><em>&gt;</em> </div>
  <div id="container">
    <div id="mainBody" class="clearfix">
      <div class="main">
        <h2>软件发布</h2>
        <div class="hySpIn">
          <div class="hySpMsg">提示：<span>*</span>号为必填 </div>
          <form name="add" method="POST" enctype="multipart/form-data" action="/e/DoInfo/ecms.php" onSubmit="return EmpireCMSQInfoPostFun(document.add,'9');">
            <input type="hidden" name="ecmsfrom" value="/support/rjfb.html">
            <input type="hidden" value="MAddInfo" name="enews">
            <input id="ww" type="hidden" value="" name="classid">
            <input name="id" type="hidden" id="id" value="0">
            <input type="hidden" value="1464404742" name="filepass">
            <input name="mid" type="hidden" id="mid" value="9">
            <ul class="hySoftForm">
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>软件名称：</div>
                  <div class="hySfText">
                    <input type="text" name="title" class="text1 wenBen">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="软件名称不能为空"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">副 标 题：</div>
                  <div class="hySfText">
                    <input type="text" name="ftitle" class="text1">
                  </div>
                </div>
              </li>
			  <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">关 键 词：</div>
                  <div class="hySfText">
                    <input type="text" name="keyboard" class="text1">
                  </div>
				 <div style="clear:both; margin-left:203px; padding:5px;">多个用逗号“,”隔开，例如：QQ,腾讯QQ,腾讯QQ下载</div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">简写名称：</div>
                  <div class="hySfText">
                    <input type="text" name="rjjx" class="text1">
                  </div>
                  <div style="clear:both; margin-left:203px; padding:5px;">例如：最新版千牛官方下载，简写成：千牛</div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">版 本 号：</div>
                  <div class="hySfText">
                    <input type="text" name="banben" class="text1">
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">一句话点评：</div>
                  <div class="hySfText">
                    <input type="text" name="dianping" class="text1">
                  </div>
                </div>
              </li>
              <li style="display:none;">
                <div class="hySoftFormIn">
                  <div class="hySfTitle">运行环境：</div>
                  <div class="hySfText">
                    <input type="text" name="pingtai" class="text1" value="Vista/winXP/win7/win8">
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>语言类型：</div>
                  <div class="hySfRadio"> <span>
                    <label>
                    <input type="radio" name="yuyan" value="简体中文" class="radio1">
                    简体中文</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="yuyan" checked="checked" value="英文" class="radio1">
                    英文</label>
                    </span> </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>软件评分：</div>
                  <div class="hySfRadio"> <span>
                    <label>
                    <input type="radio" name="pingfen" value="1" class="radio1">
                    1分</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="2" class="radio1">
                    2分</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="3" class="radio1" checked="checked">
                    3分</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="4" class="radio1">
                    4分</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="5" class="radio1">
                    5分</label>
                    </span> </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>软件授权：</div>
                  <div class="hySfRadio"> <span>
                    <label>
                    <input name="shouquan" type="radio" checked="checked" value="免费版" class="radio1">
                    免费版</label>
                    </span> <span>
                    <label>
                    <input name="shouquan" type="radio" value="官方版" class="radio1">
                    官方版</label>
                    </span> <span>
                    <label>
                    <input name="shouquan" type="radio" value="绿色版" class="radio1">
                    绿色版</label>
                    </span> <span>
                    <label>
                    <input name="shouquan" type="radio" value="破解版" class="radio1">
                    破解版</label>
                    </span> </div>
                </div>
              </li>
              <script>
function ok(ss){
var elm=document.getElementById('ww')
elm.value=ss.value
}
</script>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>软件类别：</div>
                  <div class="hySfSelect">
                    <select name="class1" onChange="ok(this)" style="width:130px" class="wenBen" id="softtype">
                      <option value="0">选择分类</option>
                      <option value="15">&nbsp;&nbsp;|-网络软件</option>
                      <option value="16" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-聊天社交</option>
                      <option value="17" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络浏览</option>
                      <option value="18" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-下载工具</option>
                      <option value="19" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络加速</option>
                      <option value="20" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网盘工具</option>
                      <option value="21" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络监控</option>
                      <option value="22" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-远程控制</option>
                      <option value="23" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-电子邮件</option>
                      <option value="24" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网站工具</option>
                      <option value="25" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络设置</option>
                      <option value="26" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络辅助</option>
                      <option value="27" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络其他</option>
                      <option value="28">&nbsp;&nbsp;|-应用软件</option>
                      <option value="29" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-桌面工具</option>
                      <option value="30" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-电子阅读</option>
                      <option value="31" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-文字输入</option>
                      <option value="32" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-翻译转换</option>
                      <option value="33" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-文本编辑</option>
                      <option value="34" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-文件处理</option>
                      <option value="35" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-编程软件</option>
                      <option value="36" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-财经软件</option>
                      <option value="37" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-数据恢复</option>
                      <option value="38" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-办公软件</option>
                      <option value="39" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-压缩解压</option>
                      <option value="40" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-应用其他</option>
                      <option value="41">&nbsp;&nbsp;|-系统软件</option>
                      <option value="42" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-硬件驱动</option>
                      <option value="43" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-系统下载</option>
                      <option value="44" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-备份还原</option>
                      <option value="45" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-系统优化</option>
                      <option value="46" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-卸载清理</option>
                      <option value="47" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-运行时库</option>
                      <option value="48" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-PE工具箱</option>
                      <option value="49" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-系统其他</option>
                      <option value="51">&nbsp;&nbsp;|-安全软件</option>
                      <option value="52" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-杀毒软件</option>
                      <option value="53" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-防火墙类</option>
                      <option value="54" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-系统安全</option>
                      <option value="55" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络安全</option>
                      <option value="56" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-密码工具</option>
                      <option value="57" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-加密解密</option>
                      <option value="58" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-专杀工具</option>
                      <option value="59" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-安全其它</option>
                      <option value="60">&nbsp;&nbsp;|-媒体播放</option>
                      <option value="61" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络电视</option>
                      <option value="62" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-视频播放</option>
                      <option value="63" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-音乐播放</option>
                      <option value="64" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-视频转换</option>
                      <option value="65" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-音频转换</option>
                      <option value="66" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-光盘刻录</option>
                      <option value="67" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-影音处理</option>
                      <option value="68" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-录音软件</option>
                      <option value="69" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-屏幕录像</option>
                      <option value="70" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-解码器类</option>
                      <option value="71" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-媒体其他</option>
                      <option value="72">&nbsp;&nbsp;|-图形图像</option>
                      <option value="73" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-图片浏览</option>
                      <option value="74" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-图片处理</option>
                      <option value="75" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-电子相册</option>
                      <option value="76" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-图片转换</option>
                      <option value="77" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-动画制作</option>
                      <option value="78" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-图像截图</option>
                      <option value="79" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-3D类制作</option>
                      <option value="80" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-图标工具</option>
                      <option value="81" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-图像其他</option>
                      <option value="82">&nbsp;&nbsp;|-手机玩家</option>
                      <option value="83" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-手机管理</option>
                      <option value="84" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-刷机解锁</option>
                      <option value="85" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-手机驱动</option>
                      <option value="86" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-安卓游戏</option>
                      <option value="87" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-苹果游戏</option>
                      <option value="88" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-WP 游戏</option>
                      <option value="89" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-安卓软件</option>
                      <option value="90" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-苹果软件</option>
                      <option value="91" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-WP 软件</option>
                      <option value="92">&nbsp;&nbsp;|-游戏之家</option>
                      <option value="93" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-游戏平台</option>
                      <option value="94" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络游戏</option>
                      <option value="95" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-赛车竞速</option>
                      <option value="96" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-动作射击</option>
                      <option value="97" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-角色扮演</option>
                      <option value="98" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-策略冒险</option>
                      <option value="99" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-体育竞技</option>
                      <option value="100" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-趣味益智</option>
                      <option value="101" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-棋牌游戏</option>
                      <option value="102" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-街机模拟</option>
                      <option value="103" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Flash游戏</option>
                      <option value="104" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-游戏工具</option>
                      <option value="105">&nbsp;&nbsp;|-主题壁纸</option>
                      <option value="106" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-win8主题</option>
                      <option value="107" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-XP 主题</option>
                      <option value="108" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-win7主题</option>
                      <option value="109" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-帅哥靓女</option>
                      <option value="110" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-自然风光</option>
                      <option value="111" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-动物世界</option>
                      <option value="112" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-汽车壁纸</option>
                      <option value="113" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-影视壁纸</option>
                      <option value="114" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-卡通动漫</option>
                      <option value="115" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-设计壁纸</option>
                      <option value="116" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-游戏壁纸</option>
                      <option value="117" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-系统屏保</option>
                      <option value="118">&nbsp;&nbsp;|-电脑教程</option>
                      <option value="119" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-黑客技术</option>
                      <option value="120" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-报刊杂志</option>
                      <option value="121" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-办公技巧</option>
                      <option value="122" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-编程教程</option>
                      <option value="123" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网页设计</option>
                      <option value="124" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-系统封装</option>
                      <option value="125" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-使用说明</option>
                      <option value="126" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-网络安全</option>
                      <option value="127" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-文学作品</option>
                    </select>
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="请选择软件类别"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">软件官方网站：</div>
                  <div class="hySfText">
                    <input type="text" name="guanwang" class="text1">
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>官方下载地址：</div>
                  <div class="hySfText">
                    <input type="text" name="down" class="text1 wenBen">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="官方下载地址不能为空"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span></span>软件大小：</div>
                  <div class="hySfText">
                    <input type="text" name="daxiao" class="text2">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="软件大小不能为空"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>软件介绍：</div>
                  <div class="hySfEditor">
                    <textarea id="newstext" name="ruanjianjieshao" style="width:600px;height:228px;"></textarea>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span></span>软件Logo：</div>
                  <div class="hySfText">
                    <input type="file" name="titlepicfile" size="45">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" name="qq" title="软件Logo不能为空"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span></span>软件截图：</div>
                  <div class="hySfText">
                    <input type="file" name="morepic" size="45">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" name="qq" title="软件截图不能为空"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>验证码：</div>
                  <div class="hySfText">
                    <input type="text" name="key" yz="1" class="text2 wenBen">
                  </div>
                  <div class="hySfYzm"> <span><img src="/e/ShowKey/?v=info" name="infoKeyImg" id="infoKeyImg" onClick="infoKeyImg.src='/e/ShowKey/?v=info&amp;t='+Math.random()" title="看不清楚,点击刷新"> </span> </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" name="qq" title="验证码错误"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySfSubmit">
                  <input class="tgfabu" type="submit" name="addnews" value="立即发布">
                </div>
              </li>
              <div class="clear"></div>
            </ul>
          </form>
        </div>
      </div>
      <div class="side">
        <ul>
          <li><a href="/support/about.html">关于本站</a></li>
          <li><a href="/support/help.html">网站帮助</a></li>
          <li><a href="/support/advertise.html">广告合作</a></li>
          <li><a href="/support/rjfb.html" class="cur">软件发布</a></li>
          <li><a href="/support/declare.html">下载声明</a></li>
          <li><a href="/support/link.html">友情链接</a></li>
          <li><a href="/sitemap.html">网站地图</a></li>
        </ul>
      </div>
    </div>
    <!--end mainBody-->
  </div>
</div>
<div class="footer">
   <div class="menu">
      <a class="logo_foot" href="/"><img src="/statics/skin_img/logo_foot.png" alt="<?=$public_r['add_webname']?>"></a>
      <div class="menu_r">
        <ul>
			<a href="/support/about.html" rel="nofollow" target="_blank" >关于本站</a><span>|</span>
			<a href="/support/help.html" rel="nofollow" target="_blank" >网站帮助</a><span>|</span>
			<a href="/support/advertise.html" rel="nofollow" target="_blank" >广告合作</a><span>|</span>
			<a href="/support/rjfb.html" rel="nofollow" target="_blank" >软件发布</a><span>|</span>
			<a href="/support/declare.html" rel="nofollow" target="_blank" >下载声明</a><span>|</span>
			<a href="/support/link.html" target="_blank">友情连接</a><span>|</span>
			<a href="/sitemap.html" target="_blank" >网站地图</a><span>|</span>
			<a href="/sitemaps.xml" target="_blank" >网站RSS</a>
        </ul>
        <p><?=$public_r['add_beianhao']?></p>
      </div>
    </div>
<script type="text/javascript" src="/statics/skin_js/jquery.xpgod.js?1463388214"></script>
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>	</div>
<?=$public_r['add_tongji']?>
<script type="text/javascript" src="/statics/skin_js/news_xpgod.js"></script>
</body>
</html>