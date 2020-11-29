<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
	<head>
		<meta charset="GBK">
		<title><?=$grpagetitle?>_1000s分享站</title>
		<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
		<meta name="description" content="<?=$grpagetitle?>" />
		<link type="text/css" rel="stylesheet" href="/shouji/statics/skin_css/index.css" />
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

		<div class="main_bj main_bjs">
			<div class="w1204">
				<div class="main_bpic">
					<div class="bpic1"><script src="/d/js/acmsd/thea1.js"></script></div>
    				<div class="bpic2"><script src="/d/js/acmsd/thea2.js"></script></div>
				</div>
				<div class="main_lf youxizt_main_lf">
					<div class="main_lf_main main_lf_youxizt">
						<div class="lf_main_weizhi lf_main_youxizt">
							您的位置：<?=$grurl?></div>
						<div class="youxizt_main_top zxxq_main_top">
							<div class="youxizt_top_title"><?=$ecms_gr[title]?></div>
							<div class="youxizt_top_others">
								<div class="yxzt_others_bj">
									<div class="top_others_lf">发表时间：<?=date('Y-m-d',$ecms_gr[newstime])?>&nbsp;|&nbsp;来源：<?
if($navinfor['befrom']=="") {
echo "本站整理";
}
else{
echo $navinfor[befrom];
}
?></div>
									<div class="bdsharebuttonbox">
										<span class="fl">分享到：</span>
										<a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="zxxq_main_jianjie"><?=nl2br($ecms_gr[smalltext])?></div>
							<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where id='$navinfor[phoneid]' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						<div class="zxxq_main_dl">
								<div class="zxxq_dl_lf">
								<div class="zxxq_lf_img">
								<div class="dl_lf_img"><a href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['rjjx']?>" /><span class="span_bj"></span><span class="lijixz">立即下载</span></a></div>
								</div>
								<div class="zxxq_lf_intro">
									<p>名称：<?=$bqr['rjjx']?></p>
									<p>类型：<?=$class_r[$bqr[classid]][bname]?></p>
								
									<p>版本：</p>
									<p>更新：<?=date('Y-m-d',$bqr[newstime])?></p>
									<p class="li20">平台：<a class="zxxq_android">Android</a><a class="zxxq_iphone">Ipnone</a></p>
								</div>
							</div>
							<div class="zxxq_dl_rg">
								<p class="blue">简要介绍</p>
								<p class="txtindent"><?=$bqr['dianping']?><a href="<?=$bqsr['titleurl']?>"><详情></a></p>
							</div></div><?php
}
}
?>									
								<div class="zxxq_main_txt"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
								<div class="page">[!--page.url--]</div>
						<div class="yxny_lf_xgwz zxxq_lf_xgwz">
							<span class="xgwz_title">相关文章</span>
                        <ul class="xgwz_ul">                           
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 6",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
								<li class="xgwz_li"> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></li>
<?php
}
}
?>							                                                         
							</ul>
							 							 						</div>
						<div style="width:836px; margin:0 auto;">
<div class="comment">

<div id="SOHUCS" sid="<?=$ecms_gr[id]?>" ></div>
<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: 'cys1c4WXo',
conf: 'prod_bfd5efee4a397937332a72908df20da9'
});
</script>
</div>




						</div>
						</div>
				</div>
				<div class="main_rg search_main_rgs pad5">
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
?>							 							 							</ul>
							
						</div>
					</div>
					 					 					<div class="main_rg_rmzt main_rg_search">
						<div class="yxtj_title"><span class="titles">热门专题</span></div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewszt limit 1',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="rmzt_main mt14">
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
					<div class="main_rg_rmzt main_rg_search pad10">
						<div class="yxtj_title"><span class="titles">精彩视频</span></div>
						<div class="jcsp_list">
							<ul class="jcsp_list_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=133 and titlepic<>'' order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqno==1||$bqno==3){$ccss="pad20";}else{$ccss="";}
?>
<li class="jcsp_list_li <?=$ccss?>">
									<a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
										<img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" />
										<span class="name_span"><?=$bqr['title']?></span>
										<span class="md_main_bj"></span>
									</a>
								</li><?php
}
}
?>							 							 							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="footer">
			<p class="footer_top"><a href="/support/about.html">关于本站</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/help.html">网站帮助</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/advertise.html">广告合作</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/rjfb.html">软件发布</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">下载声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">友情链接</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemap.html">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemaps.xml">网站RSS</a></p>
			<p class="footer_md">手机天堂是国内最专业的手机软件、手机游戏下载中心,手机天堂以服务用户为理念，努力打造成国内最大、最安全快速的手机软件、手机游戏下载平台。</p>
		</div>
<?=$public_r['add_tongji']?>
		<script type="text/javascript" src="/shouji/statics/skin_js/script_index2.js"></script>
		<script language="JavaScript" src="http://www.xpgod.com/shouji/api.php?op=count&id=12878&modelid=1"></script>
		<script>
		window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
		</script>
	</body>
</html>