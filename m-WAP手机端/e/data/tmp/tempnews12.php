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
<title><?=$ecms_gr[title]?>安卓版官方下载|<?=$ecms_gr[title]?>安卓版手机版下载_<?=$ecms_gr[title]?>安卓版手机软件下载</title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/statics/m_v2/skin_css/m_xpgod.css" type="text/css" rel="stylesheet">
<script src="/statics/m_v2/skin_js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/statics/m_v2/skin_js/TouchSlide.1.1.js"></script>
<link href="/statics/m_v2/skin_css/detail.css" type="text/css" rel="stylesheet">
<script src="/statics/m_v2/skin_js/m_xpgod.js?v=3"></script>
</head>
<body>
<div class="top">
  <div class="logo"><a href="/"><img src="/statics/m_v2/skin_img/logo.png" alt="<?=$public_r['add_webname']?>" /></a></div>
</div>
<div class="menu">
  <ul>
    <li><a href="/">首页</a></li>
    <li><a href="/fjyx/">游戏</a></li>
    <li><a href="/sjrj/" class="last">软件</a></li>
    <li><a href="/news/">资讯</a></li>
  </ul>
</div>
<div class="zx_list">
  <div class="list_div clearfix">
    <div class="list_div_lf">
      <div class="game_icon"><a href="javascript:void(0);"><img src="<?=$public_r['add_weburl']?><?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>" /></a></div>
      <div class="game_intro">
        <p class="p_title"><a href="javascript:void(0);"><?=$ecms_gr[title]?></a><span><em><?=$ecms_gr[pingfen]?>分</em></span></p>
        <p class="p_intro">下载：<?=$ecms_gr[onclick]?>次</p>
        <p class="p_intro"><span>类型：<?=$class_r[$ecms_gr[classid]][classname]?></span><span>大小：<?=$ecms_gr[daxiao]?></span></p>
      </div>
    </div>
    <div class="list_div_rg">
      <a href="javascript:void(0);" onclick="downloads();">立即下载</a>
    </div>
  </div>
</div>
<div class="main_intro">
  <div class="div_intro" id="soft-intro-wrap">游戏简介：<?=$ecms_gr[newstext]?>
</div>
  <div id="more-intro"><a id="more-intro-btn" href="javascript:;">查看详细</a></div>
    <div class="bg_list">
    <div class="mrd_pic horizontal" id="shotCont">
      <ul id="shotUl" class="shot-ul clearfix">
	  <?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);

for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
<li><img data-original="<?=$public_r['add_weburl']?><?=$spicr[1]?>" src="<?=$public_r['add_weburl']?><?=$spicr[1]?>" alt="<?=$ecms_gr[title]?>" /></li>
<?php
}
?>
              </ul>
    </div>
  </div>
  <!--截图相关-->
  <div id="first-view" class="pic-mask">
    <div class="slider-wrap pic-wrap" id="sliderWrap">
      <ul class="pic-main">

      </ul>
    </div>
    <div class="pic-cover"></div>
    <div id="picNav" class="slide-nav">
    </div>
  </div>
  </div>
<div class="main_tlyx">
  <div class="tlyx_title">同类软件</div>
  <div class="tlyx_list">
    <ul class="clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<li><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em><?=$bqr['title']?></em></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 3,1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<li class="br0"><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em><?=$bqr['title']?></em></a></li>
<?php
}
}
?>
                      </ul>
  </div>
</div>
<div class="cmt_box">
<div id="SOHUCS"></div>
<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=cyrbiKxmG&conf=prod_8e11cfb50c20f2a0b31d59926e9e42c7">
</script></div>
<div class="footer">
  <a href="javascript:void(0);" class="back_top"><span><img src="/statics/m_v2/skin_img/top.png" alt="" /></span><em>返回顶部</em></a>
</div>
<div class="fade"></div>
<div  class="login_box" id="loadContent">
<div class="login_k">
<div class="login_bj">
<div class="close"><a href="javascript:void(0);"><em></em></a>
</div>
<div class="login_icon">
<img src="<?=$public_r['add_weburl']?><?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>"><em><?=$ecms_gr[title]?></em>
</div>
<div class="login_intro">
<?php if($navinfor[bendidown]=='' && $navinfor[down]==''){}else{ ?>
<div class="az_ios">
<p class="bt_xz "><a class="az" id="azad"><span class="span_icon"></span><span class="span_txt">安卓版本下载</span></a></p>
<p class="bt_txt none"><a href="<?php
if($navinfor[bendidown]=='' && $navinfor[down]==''){
echo "javascript:void(0);";
}else if($navinfor[bendidown]==''){
echo "\\/url.php?url=".base64_encode($navinfor[down]);
}else{
echo "\\/url.php?url=".base64_encode($navinfor[bendidown]);
}
?>"><?=$ecms_gr[title]?>安卓版下载</a></p>
</div>
<?php } ?>
<?php if($navinfor[itunes]=='' && $navinfor[iosyybendi]=='' && $navinfor[iosyy]==''){}else{ ?>
<div class="az_ios last" id="pgdown">
<p class="bt_xz "><a class="ios" id="iosad"><span class="span_icon"></span><span class="span_txt">苹果版本下载</span></a></p>
<?php if($navinfor[itunes]==''){}else{ ?>
<p class="bt_txt none"><a href="<?php
if($navinfor[itunes]==''){
echo "javascript:void(0);";
}else{
echo "\\/url.php?url=".base64_encode($navinfor[itunes]);
}
?>" target="_blank"><?=$ecms_gr[title]?>正版</a></p>
<?php } ?>
<?php if($navinfor[iosyybendi]=='' && $navinfor[iosyy]==''){}else{ ?>
<p class="bt_txt none"><a href="<?php
if($navinfor[iosyybendi]=='' && $navinfor[iosyy]==''){
echo "javascript:void(0);";
}else if($navinfor[iosyybendi]==''){
echo "\\/url.php?url=".base64_encode($navinfor[iosyy]);
}else{
echo "\\/url.php?url=".base64_encode($navinfor[iosyybendi]);
}
?>" target="_blank"><?=$ecms_gr[title]?>越狱版</a></p>
<?php } ?>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
<script src="/statics/m_v2/skin_js/sliderNew.js"></script>
<div style="display: none">
  <script>
  //下载
function downloads(){
 var ua=navigator.userAgent.toLowerCase();
 
 var bIsIpad=ua.match(/ipad/i)=="ipad";
 
 var bIsIphoneOs=ua.match(/iphone os/i)=="iphone os";
 
 var bIsAndroid=ua.match(/android/i)=="android";
 var bIsWM=ua.match(/windows mobile/i)=="windows mobile";
 if(bIsIpad||bIsIphoneOs||bIsWM){
$("#azdown").hide();
$("#pgdown").show();
$(".fade").show();
$("#loadContent").show();
}else if(bIsAndroid){
$("#pgdown").hide();
$("#azdown").show();
$(".fade").show();
$("#loadContent").show();
}else{
$("#pgdown").show();
$("#azdown").show();
$(".fade").show();
$("#loadContent").show();
}
}
    function support(id, commentid) {
      $.getJSON('http://www.xpgod.com/shouji/index.php?m=comment&c=index&a=support&format=jsonp&commentid='+commentid+'&id='+id+'&callback=?', function(data){
        if(data.status == 1) {
          $('#support_'+id).html(parseInt($('#support_'+id).html())+1);
        } else {
          alert(data.msg);
        }
      });

    }
    function reply(i,id,commentid) {
      if(commentid==''||typeof(commentid)=='undefined'){
        alert('回复出错啦！');
        return false;
      }
      var content   = $('#com_'+i+'text').val();
      console.log('#com_'+i+'text');
      if(content==''||content=='评论一下吧'){
        alert('请填写回复内容！');
        $('#com_'+i+'text').select();
        return false;
      }
      $.getJSON("http://www.xpgod.com/shouji/index.php?m=comment&c=index&a=post&commentid="+commentid+"&id="+id+"&format=jsonp&list=2&callback=?",{content:content,username:'手机天堂网'},   function(data){
        if(data.status!=1){
          alert(data.msg);
          $('#com_'+i+'text').val('');
          $("#replydiv"+i).hide();
        }else{
          alert(data.msg);
        }
      });
    }
  </script>
</div>
</body>
</html>