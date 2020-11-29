<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>媒体播放_<?=$public_r['add_webname']?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
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
   <div class="location">位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="/soft/">下载中心</a>&nbsp;>&nbsp;<a href="/soft/mtbf/">媒体播放</a><em>&gt;</em>   </div>   <div class="qdtj">
      <div class="hd"><p class="icon"></p><p class="tit">强档推荐</p></div>
      <div class="bd">
        <ul>
<?php
     if($GLOBALS[navclassid]==15){$classidd2="16,17,18,19,20,21,22,23,24,25,26,27";}
else if($GLOBALS[navclassid]==28){$classidd2="29,30,31,32,33,34,35,36,37,38,39,40";}
else if($GLOBALS[navclassid]==41){$classidd2="42,43,44,45,46,47,48,49";}
else if($GLOBALS[navclassid]==51){$classidd2="52,53,54,55,56,57,58,59";}
else if($GLOBALS[navclassid]==60){$classidd2="61,62,63,64,65,66,67,68,69,70,71";}
else if($GLOBALS[navclassid]==72){$classidd2="73,74,75,76,77,78,79,80,81";}
else if($GLOBALS[navclassid]==82){$classidd2="83,84,85,86,87,88,89,90,91";}
else if($GLOBALS[navclassid]==92){$classidd2="93,94,95,96,97,98,99,100,101,102,103,104";}
else if($GLOBALS[navclassid]==105){$classidd2="106,107,108,109,110,111,112,113,114,115,116,117";}
else if($GLOBALS[navclassid]==118){$classidd2="119,120,121,122,123,124,125,126,127";}
?>		  
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in ('$classidd2') and firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 11",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr[classurl]?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em class="cover_80"></em><span><?=$bqr['title']?></span></a></li>
 <?php
}
}
?>
      		 
        </ul>
      </div>
   </div>   <div class="rjlm_mian">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid='".$GLOBALS[navclassid]."' order by myorder,classid asc ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="rjlm_box">
        <div class="hd"><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a><a href="<?=$bqsr[classurl]?>" target="_blank"><span>更多</span></a></div>
        <div class="bd">
          <div class="left">
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' and isgood in (1,2,3,4,5,6,7,8,9) limit 5");
while($tr=$empire->fetch($tsql2)){
$aaa=$tr['title'];
$ccc=$tr['titlepic'];
$ddd=$tr['titleurl'];
$eee=$tr['daxiao'];
$fff=$tr['newstime'];
?>
		  		  					             <dl>
               <dt><a href="<?=$ddd?>" target="_blank"><img src="<?=$ccc?>" alt="<?=$aaa?>"></a></dt>
               <dd>
                 <p class="tit"><a href="<?=$ddd?>" target="_blank"><?=$aaa?></a></p>
                 <p class="xx"><span class="time"><?php echo date('Y-m-d',$fff)?></span><span class="count"><?=$eee?></span></p>
                 <p class="down"><a href="<?=$ddd?>" target="_blank">立即下载</a></p>
               </dd>
             </dl>
<?php
}
?>      			 			 
          </div>
          <div class="right">
             <div class="bt select_tab">
                <ul>
                 <li class="cur">周</li>
                 <li class="">月</li>
                 <li class="">总</li>
                </ul>
                <span>本类排行</span>
             </div>
             <div class="news_ph ">
               <ul style="display: block;">
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' and newstime >  UNIX_TIMESTAMP()-86400*150  limit 3");
$i=0;
while($tr=$empire->fetch($tsql2)){
$aaa2=$tr['title'];
$ddd2=$tr['titleurl'];
$i++;
?>
			                   <li><em class="em<?=$i?>"><?=$i?></em><a href="<?=$ddd2?>" target="_blank"><?=$aaa2?></a></li>
<?php
}
?>
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' and newstime >  UNIX_TIMESTAMP()-86400*150  limit 3,5");
$i=3;
while($tr=$empire->fetch($tsql2)){
$aaa3=$tr['title'];
$ddd3=$tr['titleurl'];
$i++;
?>
			                   <li><em><?=$i?></em><a href="<?=$ddd3?>" target="_blank"><?=$aaa3?></a></li>
<?php
}
?>					   
								               </ul>
               <ul style="display: none;">
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' and newstime >  UNIX_TIMESTAMP()-86400*365  limit 3");
$i=0;
while($tr=$empire->fetch($tsql2)){
$aaa2=$tr['title'];
$ddd2=$tr['titleurl'];
$i++;
?>
			                   <li><em class="em<?=$i?>"><?=$i?></em><a href="<?=$ddd2?>" target="_blank"><?=$aaa2?></a></li>
<?php
}
?>
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' and newstime >  UNIX_TIMESTAMP()-86400*365  limit 3,5");
$i=3;
while($tr=$empire->fetch($tsql2)){
$aaa3=$tr['title'];
$ddd3=$tr['titleurl'];
$i++;
?>
			                   <li><em><?=$i?></em><a href="<?=$ddd3?>" target="_blank"><?=$aaa3?></a></li>
<?php
}
?>	
								               </ul>
               <ul style="display: none;">
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' limit 3");
$i=0;
while($tr=$empire->fetch($tsql2)){
$aaa2=$tr['title'];
$ddd2=$tr['titleurl'];
$i++;
?>
			                   <li><em class="em<?=$i?>"><?=$i?></em><a href="<?=$ddd2?>" target="_blank"><?=$aaa2?></a></li>
<?php
}
?>
<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where classid='$bqr[classid]' limit 3,5");
$i=3;
while($tr=$empire->fetch($tsql2)){
$aaa3=$tr['title'];
$ddd3=$tr['titleurl'];
$i++;
?>
			                   <li><em><?=$i?></em><a href="<?=$ddd3?>" target="_blank"><?=$aaa3?></a></li>
<?php
}
?>
								               </ul>
            </div>
          </div>
        </div>
      </div>
<?php
}
}
?>
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