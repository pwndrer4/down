<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>网站帮助</title>
<meta name="description" content="<?=$public_r['add_webname']?>是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!">
<meta name="keywords" content="网站帮助">
<link href="/statics/skin_css/news_xpgod.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/skin_js/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="/statics/js/searchword.js"></script>
</head>

<body>
<a href="#top" class="go_top"><span>返回顶部</span></a>
<div class="top_bg">
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
<div id="wrap" class="w960">	<div id="header" class="cf"> </div>
   <div class="location">
       位置：<a href="/">首页</a><em>&gt;</em><a href="/support/help.html">网站帮助</a><em>&gt;</em>   </div>      
<div id="container">
  		<div id="mainBody" class="clearfix">
        	<div class="main">
            	<h2>网站帮助</h2>
                <p><font color="#ff8c00" face="Webdings">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">一、如何下载软件？</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1、请直接点击<?=$public_r['add_webname']?>所提供的下载点，或鼠标右键选择“目标另存为”然后选择所需下载至的文件夹，即可以下载该软件。</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2、为了达到最快的下载速度，我们推荐用户使用“网际快车[Flashget]”等多线程下载工具。使用方法：鼠标右键点击要下载的文件，选择使用“网际快车”下载。<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">二、下载软件的扩展名是.ASP用什么打开？</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1、我在这里说一下,<?=$public_r['add_webname']?>上所有软件都不会以".ASP"为扩展名的,如果你下回去的是这样的就是出错了,这个问题我在用“网际快车”下载时发现了,现在很多网友也有这个问题.解决问题:在添加新下载任务时里面有一项"重命名(E)",您不要修改它,这样下载回去的软件文件名就不会有错的了!<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">三、为什么无法下载软件？</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1、由于该下载服务器此时负担较重，无法承受更多的下载用户。请稍后重试一次或者更换其它的下载点进行下载。</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2、您所需要下载的软件正在更新中，请退回到该软件介绍页，重新刷新后再进入或者稍后再下载。</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;3、如果以上办法均无法正常下载，烦请进入该软件介绍页并点击相关链接通知管理员。<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">四、如何进行下载压缩包的解压？</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1、请确保你下载完整,文件大小应该跟网页上写的一样.</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2、[<?=$public_r['add_webname']?>]内很多软件都是ZIP或RAR格式的文件，大家可以下载安装 WinRAR3.0以上版本 等解压缩软件后进行解压缩。.iso文件用虚拟光驱打开!</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;3、站内提供的软件如需要解压密码未注明时全部为:newasp.net</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;4、关于分卷文件的解压缩:首先将所有分卷文件下载到同一个文件夹,找到***.part01.rar双击解压即可.<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">五、我下载的软件为什么无法正确安装或使用？</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1、关于软件的安装、使用方面问题请直接进入该软件的介绍页，我们提供了该软件作者的联系Email或主页地址。<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">六、有的软件下载后为什么会提示有病毒或木马？</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1、[<?=$public_r['add_webname']?>]保证站内提供的所有可下载资源（软件等等）都是按“原样”提供，本站未做过任何改动。</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2、有些软件如“QQ密码侦探”、“网络神偷”等，其软件本身的功能决定了其就是木马类软件，病毒防火墙报警属于正常现象，因此用户在下载使用前请三思。同时[<?=$public_r['add_webname']?>]也不承担用户因使用这些下载资源对自己和他人造成任何形式的损失或伤害。</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, 宋体, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;3、注意:下载软件后请第一时间查毒!软件包太多,站长没可能都查过的,请自己小心点!谢谢合作!</span></p>
            </div>
            <div class="side">
            	<ul>
                	<li><a href="/support/about.html">关于本站</a></li>
                    <li><a href="/support/help.html" class="cur">网站帮助</a></li>
                    <li><a href="/support/advertise.html">广告合作</a></li>
                    <li><a href="/support/rjfb.html">软件发布</a></li>
                    <li><a href="/support/declare.html">下载声明</a></li>
                    <li><a href="/support/link.html">友情链接</a></li>
                    <li><a href="/sitemap.html">网站地图</a></li>
                    
                    
                </ul>
            </div>
                        
        </div><!--end mainBody-->  
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