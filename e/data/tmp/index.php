<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>1000s分享站 - 最新手机软件下载,电脑软件下载,单机游戏下载,电脑墙纸</title>
<meta name="keywords" content="绿色软件,免费软件,手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸" />
<meta name="description" content="1000s分享站提供国内外最新最全的绿色软件、免费软件、电脑软件、手机软件极速下载服务。为互联网用户提供优质、便捷、安全的软件下载平台，是您的首选软件下载网站。" />
<link href="/statics/skin_css/news_xpgod.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/skin_js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    (function(){var ua=navigator.userAgent.toLowerCase();var bIsIpad=ua.match(/ipad/i)=="ipad";var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";var bIsAndroid=ua.match(/android/i)=="android";var bIsWM=ua.match(/windows mobile/i)=="windows mobile";if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsWM){window.location.href="<?=$public_r['add_murl']?>"}})();
</script>
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
         <div class="gjc"><? @sys_ShowSearchKey(5,5,0,0);?></div>
      </div>
	<div class="top_r"><script type="text/javascript" src="/d/js/acmsd/thea15.js"></script></div> 
   </div>
   <div class="nav">
      <div class="nav_box">
	  <a href="/" class="on"><span>首页</span><em></em></a>
	            <a href="/soft/" ><span>软件下载</span><em></em></a>
         <a href="/rjzt/" ><span>软件专题</span><em></em></a>
         <a href="/yxzt/" ><span>游戏专题</span><em></em></a>
         <a href="/article/" ><span>文章教程</span><em></em></a>
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
   <div class="feilei">
      <div class="hd rmsy">
         <p class="icon"></p>
         <p class="tit">热门手游</p>
      </div>
      <div class="bd rmsy">
         <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and firsttitle=2 order by onclick desc limit 12",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<li><a  href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em ></em></a></li>
<?php
}
}
?>
           	         </ul>
      </div>
      <div class="hd cyrj">
         <p class="icon"></p>
         <p class="tit">常用软件</p>
      </div>
      <div class="bd cyrj">
         <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where firsttitle=2 order by onclick desc limit 12",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<li><a  href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em ></em></a></li>
<?php
}
}
?>				 
         </ul>
      </div>
      <div class="hd zttj">
         <p class="icon"></p>
         <p class="tit">专题推荐</p>
      </div>
      <div class="bd zttj">
         <ul>				 
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewszt order by addtime desc limit 12',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	 
            <li><a  href="/<?=$bqr['ztpath']?>/" target="_blank"><?=$bqr['ztname']?><em></em></a></li>
<?php
}
}
?>		 
         </ul>
      </div>
   </div>
   <div class="laymain">
      <div class="laymain1">
         <div id="focus">
            <a href="javascript:void(0)" class="btn-prev" onClick="return false;" hidefocus="" id="focus-prev"></a>
            <a href="javascript:void(0)" class="btn-next" onClick="return false;" hidefocus="" id="focus-next"></a>
		 	 
			          
		 <div class="hd">
             <div class="focus-title" id="focus-title">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
<?php
}
}
?>
                           </div>
        </div>
        <div class="focus-bar-box" id="focus-bar-box">
           <ul class="focus-bar">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></li>
<?php
}
}
?>
                        </ul>
        </div>
        <div class="ft">
           <div class="ftbg"></div>
           <div id="focus-num" class="change">
		                  <a class="on"></a>
                         <a ></a>
                         <a ></a>
                         <a ></a>
                         <a ></a>
                      </div>
         </div>
         <script src="/statics/skin_js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
        </div>
        <div class="laymain1_2">
		 
		 		            <div class="box">
              <div class="top">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 5,1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a  href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span></a>
<?php
}
}
?>
              </div>
              <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 6,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
              </ul>
           </div>
		   
		 		            <div class="box">
              <div class="top">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 8,1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a  href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span></a>
<?php
}
}
?>
              </div>
              <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 9,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
              </ul>
           </div>
		   
		 		            <div class="box">
              <div class="top">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 11,1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a  href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span></a>
<?php
}
}
?>
              </div>
              <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 12,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
              </ul>
           </div>
		   
		 		            <div class="box">
              <div class="top">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 14,1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<a  href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span></a>
<?php
}
}
?>
              </div>
              <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=2 and titlepic <> '' order by onclick desc limit 15,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
		 		    </ul>
           </div>
                 </div>
      </div>
      <div class="laymain2">
         <div class="hd">
           <ul>
              <li class="cur" id="n1">软件</li>
              <li id="n2">手游</li>
              <li id="n3">攻略</li>
              <li id="n4">APP</li>
              <li id="n5">资讯</li>
           </ul>
         </div>
         <div class="news-list" id="n1n" style="display:block;">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where firsttitle=1 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<p class="top"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em></em></a></p>
			<?php
}
}
?>		 
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
		            </ul>
         </div>
         <div class="news-list" id="n2n" style="display:none;">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and firsttitle=1 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<p class="top"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em></em></a></p>
			<?php
}
}
?>
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
    				 		            </ul>
         </div>
         <div class="news-list" id="n3n" style="display:none;">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and firsttitle=1 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<p class="top"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em></em></a></p>
			<?php
}
}
?>
					            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
    				 		            </ul>
         </div>
         <div class="news-list" id="n4n" style="display:none;">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) and firsttitle=1 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<p class="top"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em></em></a></p>
			<?php
}
}
?>
					            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
    				 		            </ul>
         </div>
         <div class="news-list" id="n5n" style="display:none;">
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and firsttitle=1 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<p class="top"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?><em></em></a></p>
			<?php
}
}
?>		 
            <ul>
		       
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
		            </ul>
         </div>
      </div>
      <div class="laymain3">
         <div class="gy_tit">小编推荐</div>
         <div class="list">
		 	               			
           <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where isgood=1 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<div class="box hover">
               <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover"></span></a></div>
               <div class="info">
                  <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                  <p class="stars star4b"></p>
                  <p class="bm">
                     <a href="<?=$bqsr['titleurl']?>" target="_blank">立即下载</a>
                     软件大小：<?=$bqr['daxiao']?></br>下载次数：<?=$bqr['onclick']?></p>
               </div>
            </div>
<?php
}
}
?>	
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where isgood=1 order by newstime desc limit 1,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<div class="box">
               <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover"></span></a></div>
               <div class="info">
                  <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                  <p class="stars star4b"></p>
                  <p class="bm">
                     <a href="<?=$bqsr['titleurl']?>" target="_blank">立即下载</a>
                     软件大小：<?=$bqr['daxiao']?></br>下载次数：<?=$bqr['onclick']?></p>
               </div>
            </div>
<?php
}
}
?>	

              			           </div>
		 <div class="gg"><script src="/d/js/acmsd/thea17.js"></script></div>

      </div>
   </div>
   <div class="softmain clearfix">
      <div class="cysoft">
         <div class="global_tit">
            <div class="tit">常用软件</div>
				<div class="r_xx"><span>总软件：</span><em><? @sys_TotalData("soft",2,0);?></em><span>今日更新：</span><em><? @sys_TotalData('soft',2,1);?></em></div>
         </div>	 
		 
         <div class="soft_box sea1a se-table" id="a1a" style="display:block;">
		                  <div class="soft">
               <em class="icon wllt"></em>
               <span>网络聊天</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1883,1885,1868,1905,1906) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon wyll"></em>
               <span>网页浏览</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (171,187,146,191,170) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon xzgj"></em>
               <span>下载工具</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1804,1813,1826,1907,1908) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon wlds"></em>
               <span>网络电视</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1262,1336,1213,1261,1216) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon spbf"></em>
               <span>视频播放</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1053,1712,1205,1256,1071) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon yybf"></em>
               <span>音乐播放</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1167,1909,1171,1163,1910) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon ztsr"></em>
               <span>字体输入</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1591,1602,1568,1595,1566) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon bgyd"></em>
               <span>办公阅读</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1639,1621,1571,1869,1625) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon aqsd"></em>
               <span>安全杀毒</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1335,1328,1315,1298,1314) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon txcl"></em>
               <span>图像处理</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1012,1007,961,1031,1904) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon yxpt"></em>
               <span>游戏平台</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (608,589,580,590,570) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			               <div class="soft">
               <em class="icon qtyy"></em>
               <span>其他应用</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id in (1548,1540,727,1911,1912) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			            </div>
       
         <div class="soft_box sea2a se-table" id="a2a" style="display:none;">
		                  <div class="soft">
               <em class="icon wllt"></em>
               <span>网络聊天</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4613,3728,3936,4564,4831) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon wyll"></em>
               <span>网页浏览</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (3615,3700,3792,3849,4696) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon xzgj"></em>
               <span>下载工具</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4014,4581,4832,4552,6340) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon wlds"></em>
               <span>网络电视</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (6342,6343,6344,6345,6346) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon spbf"></em>
               <span>视频播放</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4304,4755,4370,4493,4831) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon yybf"></em>
               <span>音乐播放</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4834,3592,5988,4494,3748) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon ztsr"></em>
               <span>字体输入</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4690,4534,4272,3810,3519) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon bgyd"></em>
               <span>办公阅读</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4536,4395,3863,4036,4343) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon aqsd"></em>
               <span>安全杀毒</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4390,3742,6341,4437,3406) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon txcl"></em>
               <span>图像处理</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (3875,3718,4003,4273,4482) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon yxpt"></em>
               <span>手机助手</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (3777,3852,4148,4692,3560) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			              <div class="soft">
               <em class="icon qtyy"></em>
               <span>其他应用</span>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id in (4225,4788,4663,4812,4652) order by newstime asc",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['ftitle']?></a></li>
<?php
}
}
?>
                              </ul>
            </div>
			           </div>
         <div class="soft_tab">
            <p class="cur" id="a1">电脑软件</p>
            <p class="sj" id="a2">手机软件</p>
         </div>
      </div>
      <div class="soft_ph sea1a se-table">

         <div class="gy_tit">软件下载排行</div>
         <div class="list">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft order by onclick desc limit 7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><em class="n<?=$bqno?>"></em><p><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_30"></span><span class="bt"><?=$bqr['title']?></span></a></p></li>
<?php
}
}
?>
		</div>
      </div>
	    <div class="soft_ph sea2a se-table" style="display:none">
         <div class="gy_tit">软件下载排行</div>
         <div class="list">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,142,142,143,144,145,146) order by onclick desc limit 7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><em class="n<?=$bqno?>"></em><p><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_30"></span><span class="bt"><?=$bqr['title']?></span></a></p></li>
<?php
}
}
?>
                           </ul>
         </div>
      </div>
   </div>
   <div class="game_main clearfix">
      <div class="sjgame">
         <div class="global_tit"><p class="tit">手机游戏</p></div>
         <div class="game_list">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 18",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em class="cover_100"></em><span><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
         </div>
      </div>
      <div class="soft_ph">
         <div class="gy_tit">游戏下载排行</div>
         <div class="game_ph">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="nr">
               <em class="n<?=$bqno?>"></em>
               <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_80"></span></a></div>
               <div class="info">
                  <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
				                    <p class="dj"><span class="stars star<?php echo floor($bqr['pingfen']/2); ?>"></span><span class="score"><?=$bqr['pingfen']?>分</span></p>
                  <a class="down" href="<?=$bqsr['titleurl']?>" target="_blank">立即下载</a>
               </div>
            </div>
<?php
}
}
?>
         </div>
      </div>
   </div>
   <div class="flgx_m clearfix">
     <div class="flgx">
        <div class="global_tit"><p class="tit">分类更新</p></div>
        <div class="flgx_box">
          <div class="tabs">
             <ul>
			 			      <li class="cur" id="g1"><p><a href="/soft/wlrj/" target="_blank"><span>网络软件</span><em class="em1"></em></a></p><span class="jt"></span></li>
                              <li id="g2"><p><a href="/soft/yyrj/" target="_blank"><span>应用软件</span><em class="em2"></em></a></p><span class="jt"></span></li>
                              <li id="g3"><p><a href="/soft/xtrj/" target="_blank"><span>系统软件</span><em class="em3"></em></a></p><span class="jt"></span></li>
                              <li id="g4"><p><a href="/soft/safe/" target="_blank"><span>安全软件</span><em class="em4"></em></a></p><span class="jt"></span></li>
                              <li id="g5"><p><a href="/soft/mtbf/" target="_blank"><span>媒体播放</span><em class="em5"></em></a></p><span class="jt"></span></li>
                              <li id="g6"><p><a href="/soft/txtx/" target="_blank"><span>图形图像</span><em class="em6"></em></a></p><span class="jt"></span></li>
                              <li id="g7"><p><a href="/soft/sjwj/" target="_blank"><span>手机玩家</span><em class="em7"></em></a></p><span class="jt"></span></li>
                              <li id="g8"><p><a href="/soft/yxzj/" target="_blank"><span>游戏之家</span><em class="em8"></em></a></p><span class="jt"></span></li>
                              <li id="g9"><p><a href="/soft/ztbz/" target="_blank"><span>主题壁纸</span><em class="em9"></em></a></p><span class="jt"></span></li>
                              <li id="g10"><p><a href="/soft/dnjc/" target="_blank"><span>电脑教程</span><em class="em10"></em></a></p><span class="jt"></span></li>
                              <li id="g11"><p><a href="/article/" target="_blank"><span>文章资讯</span><em class="em11"></em></a></p><span class="jt"></span></li>
                           </ul>
          </div>

<div class="flgx_nr" style="display:block;" id="g1g">
             <a class="more" href="/soft/wlrj/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (16,17,18,19,20,21,22,23,24,25) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>

			 					               <li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g2g">
             <a class="more" href="/soft/yyrj/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (29,30,31,32,33,34,35,36,37,38,39,40) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>

			 					               <li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g3g">
             <a class="more" href="/soft/xtrj/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (42,43,44,45,46,47,48,49) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>

			 					               <li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g4g">
             <a class="more" href="/soft/safe/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (52,53,54,55,56,57,58,59) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g5g">
             <a class="more" href="/soft/mtbf/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (61,62,63,64,65,66,67,68,69,70,71) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g6g">
             <a class="more" href="/soft/txtx/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (73,74,75,76,77,78,79,80,81) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g7g">
             <a class="more" href="/soft/sjwj/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (83,84,85,86,87,88,89,90,91) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g8g">
             <a class="more" href="/soft/yxzj/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (93,94,95,96,97,98,99,100,101,102,103,104) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g9g">
             <a class="more" href="/soft/ztbz/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (106,107,108,109,110,111,112,113,114,115,116,117) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		            <div class="flgx_nr" style="display:none;" id="g10g">
             <a class="more" href="/soft/dnjc/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (119,120,121,122,123,124,125,126,127) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 	<li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>

		  		            <div class="flgx_nr" style="display:none;" id="g11g">
             <a class="more" href="/article/" target="_blank">更多&gt;&gt;</a>
             <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) order by newstime desc limit 20",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			 					               <li>
                 <p class="time"><?=date('m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
               </li>
<?php
}
}
?>
			   			               </ul>
          </div>
		  		  		          </div>
     </div>
     <div class="soft_ph">
         <div class="gy_tit">资讯排行榜</div>
         <div class="news_ph">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) order by onclick desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno+3?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
								            </ul>
         </div>
     </div>
   </div>
</div>
<div class="footer">
   <div class="linkbox">
     <div class="linktit">
       <em></em>
       <span>友情链接</span>
       <div class="link_arrow">
        <a class="link_left" href="javascript:void(0);" id="partnerNext">→</a>
        <a class="link_right disable" href="javascript:void(0);" id="partnerPrev">←</a>
      </div>
     </div>
     <div id="partner" class="partner_con">
			<ul>
			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and lpic="" order by lid',100,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<li><a href="<?=$bqr[lurl]?>"  target="_blank" title="<?=$bqr[lname]?>"><?=$bqr[lname]?></a></li>
<?php
}
}
?> 
			</ul> 
         <script type="text/javascript" src="/statics/skin_js/script_index2.js"></script>
       </div>
   </div>
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
	<script type="text/javascript" src="/facai/xpjq.js"></script>
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
<script>xpLoader()</script><script class="closetag">xpLoader(true)</script>		 
</div>
<script type="text/javascript" src="/statics/skin_js/news_xpgod.js"></script>
</body>
</html> 