<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>广告合作</title>
<meta name="description" content="<?=$public_r['add_webname']?>是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!">
<meta name="keywords" content="广告合作">
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
       位置：<a href="/">首页</a><em>&gt;</em><a href="/support/advertise.html">广告合作</a><em>&gt;</em>   </div>      
<div id="container">
  		<div id="mainBody" class="clearfix">
        	<div class="main">
            	<h2>广告合作</h2>
                <p>　　<?=$public_r['add_webname']?>(www.xpgod.com)始建于2009年6月份，是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!</p>
<p>　　PC端合作/下载器合作QQ:21617372</p>
<p>　　移动端合作QQ:21617372</p>
<p>　　注意事项：</p>
<p>　　1.广告不提供试用，先付款并款到帐后开始投放广告。</p>
<p>　　2.本站不负责广告图片的制作，请自备图片!</p>
<p>　　3.广告价格会不定期做适当调整，以当日所示价格为准。</p>
<p>　　4.上面所示广告价格以1个月为单位，多月投放可适当优惠，投放日期最多不超过3个月。</p>
<p>　　5.本站为个人网站，投放广告不开具发票!</p>
<p>　　6.本站不接受色情，赌博，政治等违反法律的广告!</p>
<p>　　7.广告到期请提前5天续费，现有广告位本站有权接受预定，预定需付款确认，口头约定无效!</p>
            </div>
            <div class="side">
            	<ul>
                	<li><a href="/support/about.html">关于本站</a></li>
                    <li><a href="/support/help.html">网站帮助</a></li>
                    <li><a href="/support/advertise.html" class="cur">广告合作</a></li>
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