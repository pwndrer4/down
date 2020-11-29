<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no;">
<title><?=$ecms_gr[title]?>-<?=$public_r['add_webname']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/statics/m_v2/skin_css/m_xpgod.css" type="text/css" rel="stylesheet">
<script>
window.onload = function(){
    document.getElementById("contentTextsss").innerHTML = document.getElementById("contentTextsss").innerHTML.replace(/src=\\"\\/d\\/file\\//g,"src=\\"http:\\/\\/xpgod.zuseng.com\\/d\\/file\\/");
}
</script>
</head>
<body>
<div class="top">
  <div class="logo"><a href="/"><img src="/statics/m_v2/skin_img/logo.png" alt="<?=$public_r['add_webname']?>" /></a></div>
</div>
<div class="menu">
  <ul>
    <li><a href="/">首页</a></li>
    <li><a href="/fjyx/">游戏</a></li>
    <li><a href="/sjrj/">软件</a></li>
    <li><a href="/news/" class="last">资讯</a></li>
  </ul>
</div>
<div class="article_title">
  <div class="title"><?=$ecms_gr[title]?></div>
  <div class="au_time">
    <span class="span_auti"><span class="author"></span><em>作者：<?php if($navinfor[writer]=='' || $navinfor[writer]==null){echo "佚名";}else{echo $navinfor[writer];} ?></em></span>
    <span class="span_auti ml55"><span class="time"></span><em>时间：<?=date('Y-m-d',$ecms_gr[newstime])?></em></span>
  </div>
</div>
<div class="intro_txt" id="contentTextsss"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
<div class="pagesss">[!--page.url--]</div>
<div class="line"></div>
<div class="main_xgyx">
  <div class="xgyx_title">相关资讯</div>
  <div class="xgyx_list">
    <ul class="clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a href="<?=$bqsr['titleurl']?>"><span></span><?=$bqr['title']?></a></li>
<?php
}
}
?>	
          </ul>
  </div>
</div>
<div id="SOHUCS"></div>
<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" 
	src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=cyrbiKxmG&conf=prod_8e11cfb50c20f2a0b31d59926e9e42c7">
</script>
<div class="footer">
  <a href="javascript:void(0);" class="back_top"><span><img src="/statics/m_v2/skin_img/top.png" alt="" /></span><em>返回顶部</em></a>
</div>
<div class="fade"></div>
<script src="/statics/m_v2/skin_js/jquery-1.8.3.min.js" type="text/javascript"></script>
<div style="display: none">
  <script>
$(function(){
	$('.game_list .list_div:last,.rank_list .list_div:last,.zx_list .list_div').css('border-bottom-width',0);
	$(".back_top").click(function(){
		$('body,html').animate({scrollTop:0},100);
		return false;
	});
	$('.paih_list').each(function(index, element) {
		$(this).find('.list_div:last').css('border-bottom-width',0);
	});
	/*var imhwd=$('.mrd_pic').width();
	$('.mrd_pic ul li').css('width',imhwd);
	var imght=$('.mrd_pic li img').height();
	$('.mrd_pic').css('height',imght);*/	
	
	$('.az_ios:last,.news_list dl:last').addClass('last');
	
	/*$('.zx_list .list_div_rg a').click(function() {
		$('.fade').show();
		$('.login_box').show();
	});*/
	$('.close').live('click',function() {
		$('.fade').hide();
		$('.login_box').hide();
	});
	
	//
	$('.span_close').click(function() {
		$('.bt_gg').hide();
		$('.footer').css('margin-bottom',0);
	});
})
  </script>
</div>
</body>
</html>