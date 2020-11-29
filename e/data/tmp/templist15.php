<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>[!--pagetitle--] - <?=$public_r['add_webname']?></title>
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
   <div class="location">
       位置：
       <a href="/">首页</a><em>&gt;</em><a href="/soft/">下载中心</a><em>&gt;</em><a href="/soft/hotlist/">下载排行</a><em>&gt;</em>   </div><div id="wrap" class="w960"><div id="header" class="cf"> </div>
<div class="letter-index s-yellow morelist">
<ul><li><a href="/soft/zuijinlist/">最近更新</a> </li><li><a href="/soft/bestlist/">热门推荐</a> </li><li><a href="/soft/hotlist/">下载排行</a> </li></ul>
<div style="clear:both;"></div>
</div>
        <div class="newsoft-warp">
            <div class="newsoft-list s-green s-greens mt5">
                <div class="s-hd">
                    <div class="soft-xzzx">
                        <div class="s-name">软件名称</div>
                        <div class="s-lang">软件授权</div>
                        <div class="s-star">软件等级</div>
                        <div class="s-update">更新日期</div>
                        <div class="s-size ">软件大小</div>
                        
                    </div>
                </div>
                                                  <div class="s-bd">
				
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]                     
	 </div>
	 	 <div class="page">[!--show.listpage--]</div>
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