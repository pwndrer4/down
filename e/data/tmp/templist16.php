<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
	<head>
		<meta charset="GBK">
		<title>[!--pagetitle--] - <?=$public_r['add_webname']?></title>
		<meta name="keywords" content="[!--pagekey--]" />
		<meta name="description" content="[!--pagedes--]" />
		<link type="text/css" rel="stylesheet" href="/shouji/statics/skin_css/index.css?sd" />
		<script  type="text/javascript" src="/shouji/statics/skin_js/jquery-1.8.3.min.js"></script>
		<script  type="text/javascript" src="/shouji/statics/skin_js/searchword.js"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/jquery.global.js"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/homeindex.js"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/tupqh.js"></script>
		<script src="/shouji/statics/skin_js/common.js" type="text/javascript"></script>
		<base target="_blank" />
	</head>
	<body>
<div class="top_bj">
  <div class="top">
    <div class="top_lf">
      <ul>
        <li><a href="<?=$public_r['add_weburl']?>" class="top_menu_a">首页</a></li>
        <li onmouseover="show('quanzdh');" onmouseout="hide('quanzdh');" id="bj_hover" class=""> <a href="javascript:void(0)" target="_self" class="top_menu_a dh_bj">全站导航</a>
          <div id="quanzdh" style="display: none;">
            <div class="qh_top">
              <div class="qh_top_title">下载专区</div>
              <div class="qh_top_list"> <a href="/fjyx/" class="dh_a">游戏库</a> <a href="/sjrj/" class="dh_a">软件库</a> </div>
              <div class="qh_top_title">资讯中心</div>
              <div class="qh_top_list zx"> <a href="/news/gonglue/" class="dh_a">手游攻略</a> <a href="/news/yueyu/" class="dh_a">越狱教程</a> <a href="/news/shuaji/" class="dh_a">刷机教程</a> <a href="/news/video/" class="dh_a">精彩视频</a> <a href="/news/zixun/" class="dh_a">新闻资讯</a> </div>
            </div>
            <div class="qh_bottom">
              <div class="qh_bottom_title">热门游戏</div>
              <div class="qh_bottom_list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) order by onclick desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			  <a href="<?=$bqsr['titleurl']?>" class="qhbt_a"><?=$bqr['title']?></a> 
<?php
}
}
?>
			  </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="top_rg"> <a onclick="SetHome(this,window.location)" class="top_menu_a a_pad">设为首页</a> <a class="top_menu_a a_pad" onclick="shoucang(document.title,window.location)">收藏本站</a> </div>
  </div>
</div>
<div class="daohang_bj">
  <div class="daohang">
    <div class="search-box">
      <form class="search-form" action="/e/search/index.php" method="post" name="searchform" id="searchform" target="_blank">
        <input class="search-text" type="text" name="keyboard" id="keyboard">
        <input type="image" class="search-btn" src="/shouji/statics/skin_img/search-btn.png">
        <div class="search-select">
          <div class="search-type">
            <select name="tbname">
              <option value="news" class="sedsa">资讯</option>
              <option value="soft" class="sedsa">软件</option>
              <option value="phone" class="sedsa">手机</option>
            </select>
          </div>
        </div>
        <input type="hidden" name="show" value="title">
        <input type="hidden" name="tempid" value="1">
      </form>
    </div>
    <div class="dh_logo"><a href="/" target="_self"><img src="/shouji/statics/skin_img//logo.png" alt="logo" target="_self"></a></div>
    <div class="dh_menu dh_menu_paih">
      <ul>
        <li class="paihb_menu_li"><a href="/fjyx/" class="d_manu_a">下游戏</a><a href="/fjyx/xxyz/" class="x_menu_a">休闲</a><a href="/fjyx/sjqz/" class="x_menu_a">射击</a><a href="/shouji/phb.html" class="x_menu_a">排行</a></li>
        <li class="paihb_menu_li"><a href="/sjrj/" class="d_manu_a">装应用</a><a href="/sjrj/xtgj/" class="x_menu_a">系统</a><a href="/sjrj/sjdh/" class="x_menu_a">导航</a><a href="/sjrj/sjyd/" class="x_menu_a">阅读</a></li>
        <li class="paihb_menu_li"><a href="/news/" class="d_manu_a">看资讯</a><a href="/news/gonglue/" class="x_menu_a">攻略</a><a href="/news/yueyu/" class="x_menu_a">越狱</a><a href="/news/zixun/" class="x_menu_a">新闻</a></li>
        <li class="paihb_menu_li"><a href="/news/video/" class="d_manu_a">看视频</a><a href="/news/shuaji/" class="x_menu_a">刷机</a><a href="/article/hardware/" class="x_menu_a">硬件</a><a href="/article/wljs/" class="x_menu_a">技术</a></li>
      </ul>
    </div>
    <div class="dh_rmss"> 热门搜索:<? @sys_ShowSearchKey(6,6,0,0);?> </div>
  </div>
</div>

 		<script type="text/javascript" src="/shouji/statics/skin_js/1141.js"></script>
		<script type='text/javascript' src='/shouji/statics/skin_js/script.js'></script>
		<div class="main_bj main_bjs">
			<div class="w1204">
				<div class="main_bpic">
					<div class="bpic1"><script src="/d/js/acmsd/thea1.js"></script></div>
    				<div class="bpic2"><script src="/d/js/acmsd/thea2.js"></script></div>
				</div>
				<div class="main_lf">
					<div class="slide_bj">
						<div class="slide" id="Slide">
							<div class="slide-hd">	<h2 class="title">		
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and firsttitle=3 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<a href="<?=$bqsr['titleurl']?>" style="opacity: 1;"><?=$bqr['title']?></a>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and firsttitle=3 order by newstime desc limit 1,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<a href="<?=$bqsr['titleurl']?>" style="opacity: 1; display: none;"><?=$bqr['title']?></a>
<?php
}
}
?></h2>	
							<div class="thumb" id="slidePagination">	<ul class="gclearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and firsttitle=3 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<li class="w177 selected"><a class="bo"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and firsttitle=3 order by newstime desc limit 1,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<li class="w177"><a class="bo"><?=$bqr['title']?></a></li>
<?php
}
}
?></ul></div><div class="slide-hd-bg"></div></div>
							
							<div class="slide-bd" id="slideWrapper">	<div class="pic-list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and firsttitle=3 order by newstime desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<a href="<?=$bqsr['titleurl']?>" class="J-pic-node"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a>
<?php
}
}
?>
							</div></div>
							<div class="slide-btn">
								<a href="javascript:void(0);" class="prev"  target="_self" >上一页</a>
								<a href="javascript:void(0);" class="next"  target="_self" >下一页</a>
							</div>
						</div>
					</div>
					<div class="main_lf_main">
						<div class="lf_main_weizhi">
							您的位置：<a href="http://www.xpgod.com/shouji">首页</a>&gt;<a href="http://www.xpgod.com/shouji/news/"  class="pad8">资讯</a> > <a href="http://www.xpgod.com/shouji/news/gonglue.html"  class="pad8">手游攻略</a>						</div>
						<div class="lf_main_zixun">
							<div class="zixun_top">
								<span class="zixun_title">资讯中心</span>
								<ul class="zixun_title_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=128 order by myorder asc",0,24,0);
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
$class="last";
}}
?>
									<li class="zixun_title_li <?=$class?>"><a href="<?=$bqsr[classurl]?>" class="zixun_a" target="_self"><?=$bqr[classname]?></a><span></span></li>
<?php
}
}
?>
								</ul>
							</div>
							<div class="zixun_main indexT_product_text indexT_product_text_1">
																<ul class="zixun_main_ul">
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--] 
								</ul>
								<div class="fenye">
									<ul class="fenye_ul">[!--show.listpage--]</ul>
								</div>
															</div>
						</div>
					</div>
				</div>
				<div class="main_rg">
					<div class="main_rg_yxtj">
						<div class="yxtj_title"><span class="titles">游戏推荐</span></div>
						<div class="yxtj_list">
							<ul class="yxtj_list_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 9",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="yxtj_list_li">
									<a href="<?=$bqsr['titleurl']?>" class="list_a" title="<?=$bqr['title']?>">
										<img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" />
										<span></span>
										<b><?=$bqr['title']?></b>
									</a>
								</li>
<?php
}
}
?>
							 							 							</ul>
						</div>
					</div>
					<div class="main_rg_yxtj">
						<div class="yxtj_title"><span class="titles">软件推荐</span></div>
						<div class="yxtj_list">
							<ul class="yxtj_list_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 9",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="yxtj_list_li">
									<a href="<?=$bqsr['titleurl']?>" class="list_a" title="<?=$bqr['title']?>">
										<img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" />
										<span></span>
										<b><?=$bqr['title']?></b>
									</a>
								</li>
<?php
}
}
?>
							 							 							</ul>
						</div>
					</div>
					<div class="main_rg_yxtj main_rg_wztj">
						<div class="yxtj_title"><span class="titles">文章推荐</span></div>
						<div class="yxtj_list">
							<ul class="wztj_list_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 11",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<li class="wztj_list_li"><span><a href="<?=$bqsr[classurl]?>">[<?=$class_r[$bqr[classid]][bname]?>]</a></span><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
<?php
}
}
?>
							 							 							</ul>
						</div>
					</div>
					<div class="main_rg_yxtj">
						<div class="yxtj_title"><span class="titles">文章排行</span></div>
						<div class="yxtj_list">
							<ul class="rank_list_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="rank_list_li"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><span class="list_rank rank13"><?=$bqno?></span><span class="rank_title"><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) order by onclick desc limit 3,2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="rank_list_li"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><span class="list_rank rank<?=$bqno+3?>"><?=$bqno+3?></span><span class="rank_title"><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) order by onclick desc limit 5,5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="rank_list_li"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><span class="list_rank rank610"><?=$bqno+5?></span><span class="rank_title"><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
							 							 							</ul>
						</div>
					</div>
                                    <div class="main_rg_rmzt">
					                                        <div class="rmzt_top">热门专题</div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewszt limit 1',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="rmzt_main">
								<a href="/<?=$bqr['ztpath']?>/" class="rmzt_a" title="<?=$bqr['ztname']?>">
									<img src="<?=$bqr['ztimg']?>" alt="<?=$bqr['ztname']?>">
									<b><?=$bqr['ztname']?></b>	
								</a>
							</div>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewszt limit 1,1',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="rmzt_main">
								<a href="/<?=$bqr['ztpath']?>/" class="rmzt_a" title="<?=$bqr['ztname']?>">
									<img src="<?=$bqr['ztimg']?>" alt="<?=$bqr['ztname']?>">
									<b><?=$bqr['ztname']?></b>	
								</a>
							</div>
<?php
}
}
?>
							                                                      					</div>
				</div>
			</div>
		</div>
<div class="footer">
			<p class="footer_top"><a href="/support/about.html">关于本站</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/help.html">网站帮助</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/advertise.html">广告合作</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/rjfb.html">软件发布</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">下载声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">友情链接</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemap.html">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemaps.xml">网站RSS</a></p>
			<p class="footer_md">手机天堂是国内最专业的手机软件、手机游戏下载中心,手机天堂以服务用户为理念，努力打造成国内最大、最安全快速的手机软件、手机游戏下载平台。</p>
		</div>
<?=$public_r['add_tongji']?>
		<script src="/shouji/statics/skin_js/common.js" type="text/javascript"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/script_index2.js"></script>
		<script type="text/javascript">
			function digg(digg_id,key) {
				$.getJSON('http://www.xpgod.com/shouji/index.php?m=digg&c=index&a=post&id='+digg_id+'&k='+key+'&'+Math.random()+'&callback=?', function(data){
					if(data.status==1)	{
						$('[_for="'+digg_id+'"]').find('.focus_rg').remove();
						$('[_for="'+digg_id+'"]').append(data.data);
					}else {
						alert(data.data);
					}
				})
			}
</script>
	</body>
</html>