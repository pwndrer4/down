<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>下载中心_<?=$public_r['add_webname']?></title>
<meta name="keywords" content="机软件下载,电脑软件下载,单机游戏下载,桌面主题下载" />
<meta name="description" content="专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和电脑教程学习的乐园!" />
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
<div class="top_r"><script type="text/javascript" src="/d/js/acmsd/thea15.js"></script></div> 
   </div>
   <div class="nav">
      <div class="nav_box">
	 <a href="/"><span>首页</span><em></em></a>
	 <a href="/soft/" class="on"><span>软件下载</span><em></em></a>
         <a href="/rjzt/"><span>软件专题</span><em></em></a>
         <a href="/yxzt/"><span>游戏专题</span><em></em></a>
         <a href="/article/"><span>文章教程</span><em></em></a>
	 <a href="/sjrj/" target="_blank"><span>手机软件</span><em></em></a>
	 <a href="/fjyx/" target="_blank"><span>手机游戏</span><em></em></a>
	 <a href="/news/gonglue/" target="_blank"><span>手游攻略</span><em></em></a>
	 <a href="/shouji/phb.html" class="last" target="_blank"><span>手游排行榜</span><em></em></a>
		 
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
<div id="main">
   <div class="location">
       位置：
       <a href="/">首页</a><em>&gt;</em><a href="/soft/">下载中心</a><em>&gt;</em>   </div>   <div class="qdtj">
      <div class="hd"><p class="icon"></p><p class="tit">强档推荐</p></div>
      <div class="bd">
        <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where  firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 11",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em class="cover_80"></em><span><?=$bqr['title']?></span></a></li>
<?php
}
}
?>	 
        </ul>
      </div>
   </div>	
   <div class="rjfl_main">
      <div class="hd">
	         						        <a target="_blank" href="/soft/bestlist/">热门推荐</a>
							          		<a target="_blank" href="/soft/hotlist/">下载排行</a>
							          		<a target="_blank" href="/soft/zuijinlist/">最近更新</a>
			               </div>
      <div class="bd">
		 		 		   		              <div class="box wlrj">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/wlrj/" target="_blank">网络软件</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=15 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box yyrj">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/yyrj/" target="_blank">应用软件</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=28 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box xtrj">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/xtrj/" target="_blank">系统软件</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=41 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box aqrj">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/safe/" target="_blank">安全软件</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=51 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box mtbf">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/mtbf/" target="_blank">媒体播放</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=60 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box txtx">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/txtx/" target="_blank">图形图像</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=72 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box sjwj">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/sjwj/" target="_blank">手机玩家</a></p>
            </div>

            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=82 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box yxzj">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/yxzj/" target="_blank">游戏之家</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=92 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box ztbz">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/ztbz/" target="_blank">主题壁纸</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=105 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		          <div class="box dnjc">
            <div class="left">
               <p class="icon"></p>
               <p class="tit"><a href="/soft/dnjc/" target="_blank">电脑教程</a></p>
            </div>
            <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=118 order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                         </div>
         </div>
		 		                </div>
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