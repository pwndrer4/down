<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>[!--pagetitle--]|<?php
$ztvalue=ReturnZtAddField($GLOBALS[ztid],'ztid,ftitle');
echo $ztvalue[ftitle];
?>-<?=$public_r['add_webname']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
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
	 <a href="/soft/"><span>软件下载</span><em></em></a>
         <a href="/rjzt/"><span>软件专题</span><em></em></a>
         <a href="/yxzt/" class="on"><span>游戏专题</span><em></em></a>
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
   <div class="location">位置：[!--newsnav--]&gt;</em>[!--pagetitle--]</div>
   <div class="qdtj">
      <div class="hd"><p class="icon"></p><p class="tit">强档推荐</p></div>
      <div class="bd">
        <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid in (93,94,95,96,97,98,99,100,101,102,103,104) and firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 11",6,24,0);
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
   <script src="/statics/skin_js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
   <div class="zt_ny">
      <div class="ztny_top">
	      
         <div id="ztfocus">
        <div class="ztfocus_box" id="ztfocus_box">
           <ul class="ztfocus_bar" style="position: relative; width: 385px; height: 175px;">
		      <li><a><img src="[!--class.classimg--]" alt="[!--pagetitle--]"></a></li>
            </ul>
        </div>
        </div>
        <div class="ztjj">
           <p class="bqzt"></p>
           <a href="/zhuanti/" class="more" target="_blank"><em>更多</em></a>
           <div class="tit">[!--pagetitle--]</div>
           <div class="txt">[!--class.intro--]</div>
        </div>
      </div>
      <div class="xgrj">
          <div class="share">
             <p>分享到：</p>
             <div class="bdsharebuttonbox">
             <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
             <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
             <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
             <a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a>
             <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
              </div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
          </div>	 			 			 			 			 			 																																																																																																																		           <div class="hd"><em></em><span>相关游戏</span><em></em></div>
          <div class="control" id="k-spano">
		              <span class="t"></span>
					  <?php $num=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsztinfo where ztid=".$GLOBALS[navclassid]); $num2=ceil($num/9); for ($x=1; $x<$num2; $x++) {echo "<span></span>";} if(is_int($num2/9)){}else{$num3="</div>";} ?>
          </div>
          <div class="xgrj_box">
            <div class="m-animate-a" id="xgrj">
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]
				<?=$num3?>
            </div>
          </div>
      </div>
	  <div class="ztcy"><!--高速版-->
<div id="SOHUCS"></div>
<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
    window.changyan.api.config({
        appid: 'cyrbiKxmG',
        conf: 'prod_8e11cfb50c20f2a0b31d59926e9e42c7'
    });
</script></div>
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
