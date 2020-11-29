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

		<div class="main_bj main_bjs">
			<div class="w1204">
				<div class="main_bpic">
					<div class="bpic1"><script src="/d/js/acmsd/thea1.js"></script></div>
    				<div class="bpic2"><script src="/d/js/acmsd/thea2.js"></script></div>
				</div>
				<div class="search_bj">
					<div class="main_lf search_main_lfs">
						<div class="main_lf_weizhi">您的位置：[!--newsnav--]</div>
						<div class="search_hd">
							<div class="sliderbox">
								<div class="btn_bj lfbd"><div id="btn-left" class="arrow-btn dasabled" style="cursor: auto;"></div></div>
								<div class="slider">
									<ul> 
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,145) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 16",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
										<li>
											<a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
												<img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" />
												<span></span>
												<b class="slider_name"><?=$bqr['title']?></b>
												<b class="slider_sort"><?=$class_r[$bqr[classid]][bname]?></b>
											</a>
										</li>
<?php
}
}
?>
								</div>
								<div class="btn_bj rgbd"><div id="btn-right" class="arrow-btn" style="cursor: pointer;"></div></div>
							  </div>
						</div>
						<div class="search_title">
							<span class="search_title_lf">分类筛选</span>
							<span class="search_title_rg">共计<b><? @sys_TotalData($GLOBALS[navclassid],0,0);?></b>款游戏</span>
						</div>
						<div class="search_sort">
							<div class="search_pingtai">
								<span class="search_tips">类别：</span>
								<ul class="search_sort_ul">
								<li class="search_sort_li  searc_cur"><a href="/sjrj/" target="_self">全部<span></span></a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=135 order by myorder asc",0,24,0);
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
$class="searc_cur";
}}
?>
								<li class="search_sort_li  <?=$class?>"><a href="<?=$bqsr[classurl]?>" target="_self"><?=$bqr[classname]?><span></span></a></li>
<?php
}
}
?>
																		
								</ul>
							</div>
						</div>
						<div class="sort_list">
							<ul class="sort_ul">
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]
																						</ul>
						</div>
						<div class="fenye">
							<ul class="fenye_ul">[!--show.listpage--]</ul>
						</div>
					</div>
					<div class="main_rg search_main_rgs">
						<script src="/d/js/acmsd/thea16.js"></script>
						<div class="main_rg_yxtj">
							<div class="yxtj_title"><span class="titles">热门推荐</span></div>
							<div class="yxtj_list">
								<ul class="search_yxtj_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,145) and isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>							
										<li class="search_yxtj_li">
											<div class="search_li_img"><a href="?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img src="<?=$bqr['titlepic']?>" /><span></span></a></div>
											<div class="search_li_rg">
												<p class="li_rg_name"><a href="?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></p>
												<p class="li_rg_other"><?=$bqr['daxiao']?>&nbsp;|&nbsp;<?=$bqr['onclick']?>次下载</p>
												<p class="li_rg_other"><?=$class_r[$bqr[classid]][bname]?></p>
											</div>
										</li>
<?php
}
}
?>																	
								</ul>
							</div>
						</div>
						<div class="main_rg_rmzt main_rg_search">
							<div class="yxtj_title"><span class="titles">软件专题</span></div>
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
                    								
						</div>
						<div class="main_rg_rmzt main_rg_search">
							<div class="yxtj_title"><span class="titles">软件排行榜</span></div>
								<div class="forth_rg_list">
									<ul class="forth_ul">
										<li class="forth_li w78">排名</li>
										<li class="forth_li w91">软件</li>
										<li class="forth_li w68">人气</li>
										<li class="forth_li w30">下载</li>
									</ul>
								</div>
								<div class="forth_rg_rank">
									<ul class="forth_ul_main">
									 							  									 							  
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="forth_li_main">
											<div class="forth_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>">下载</a></span>
											</div>
										</li><?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by onclick desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="forth_li_main">
											<div class="forth_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>">下载</a></span>
											</div>
										</li><?php
}
}
?>										                                                                           											    									</ul>
								</div>
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
		</div>
 
		<script type="text/javascript" src="/shouji/statics/skin_js/homeindex.js"></script>
		<script src="/shouji/statics/skin_js/common.js" type="text/javascript"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/script_index2.js"></script>
	</body>
</html>