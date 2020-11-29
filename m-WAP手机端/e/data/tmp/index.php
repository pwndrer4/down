<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>系统天堂 - 手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸 - <?=$public_r['add_webname']?></title>
<meta name="keywords" content="手机软件下载,电脑软件下载,单机游戏下载,桌面主题,电脑墙纸" />
<meta name="description" content="系统天堂是个专业的软件下载网站,以杀毒软件,浏览器,单机游戏,手机软件为主,为广大软件爱好者打造软件下载和学习的乐园!" />
  <link href="/statics/m_v2/skin_css/m_xpgod.css" type="text/css" rel="stylesheet">
  <script src="/statics/m_v2/skin_js/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="/statics/m_v2/skin_js/TouchSlide.1.1.js"></script>
</head>
<body>
<div class="top">
  <div class="logo"><a href="/"><img src="/statics/m_v2/skin_img/logo.png" alt="" /></a></div>
</div>
<div class="menu">
  <ul>
    <li><a href="/" class="last">首页</a></li>
    <li><a href="/fjyx/">游戏</a></li>
    <li><a href="/sjrj/">软件</a></li>
    <li><a href="/news/">资讯</a></li>
  </ul>
</div>
<div id="slideBox" class="slideBox">
  <div class="bd">
    <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and titlepic <> '' and isgood=2 order by newstime desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<li>
        <a class="pic" href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a>
        <a class="tit" href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a>
      </li>
<?php
}
}
?>
          </ul>
  </div>
  <div class="hd">
    <ul></ul>
  </div>
</div>
<div class="main1">
  <div class="main_title"><span>必备手游</span><a href="/fjyx/" class="more">更多>></a></div>
  <div class="main_list">
    <ul class="clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and firsttitle in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqno%4==0){$sead="br0";}else{$sead="";} ?>
	 <li class="<?=$sead?>"><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><em><?=$bqr['title']?></em></a></li>
<?php
}
}
?>
                      </ul>
  </div>
</div>
<div class="main2">
  <div class="main_title"><span>必备软件</span><a href="/sjrj/" class="more">更多>></a></div>
  <div class="main_list">
    <ul class="clearfix">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) and firsttitle in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php if($bqno%4==0){$sead="br0";}else{$sead="";} ?>
	 <li class="<?=$sead?>"><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /><em><?=$bqr['title']?></em></a></li>
<?php
}
}
?>
                      </ul>
  </div>
</div>
<div class="main3">
  <div class="main3_title" id="main3Nav">
    <ul class="clearfix">
      <li class="gl last" data="gl"><a href="javascript:;"><span></span><em>攻略</em></a><div class="li_bj"></div></li>
      <li class="xw" data="xw"><a href="javascript:;"><span></span><em>新闻</em></a><div class="li_bj"></div></li>
      <li class="sp" data="sp"><a href="javascript:;"><span></span><em>视频</em></a><div class="li_bj"></div></li>
      <li class="jc" data="jc"><a href="javascript:;"><span></span><em>教程</em></a></li>
    </ul>
  </div>
  <div class="main3_list" id="main3List">
    <div class="gl_list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129) and titlepic <> '' order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
      <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></dt>
      <dd>
        <p class="p_title"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
        <p class="p_intro"><?=esub($bqr[smalltext],30)?></p>
        <p class="p_time"><span></span><em><?=date('Y-m-d',$bqr[newstime])?></em></p>
      </dd>
    </dl>
<?php
}
}
?>
            </div>
    <div class="xw_list" style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (134) and titlepic <> '' order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
      <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></dt>
      <dd>
        <p class="p_title"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
        <p class="p_intro"><?=esub($bqr[smalltext],30)?></p>
        <p class="p_time"><span></span><em><?=date('Y-m-d',$bqr[newstime])?></em></p>
      </dd>
    </dl>
<?php
}
}
?>
                </div>
    <div class="sp_list" style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (133) and titlepic <> '' order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
      <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></dt>
      <dd>
        <p class="p_title"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
        <p class="p_intro"><?=esub($bqr[smalltext],30)?></p>
        <p class="p_time"><span></span><em><?=date('Y-m-d',$bqr[newstime])?></em></p>
      </dd>
    </dl>
<?php
}
}
?>
                </div>
    <div class="jc_list" style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (130) and titlepic <> '' order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<dl>
      <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></dt>
      <dd>
        <p class="p_title"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
        <p class="p_intro"><?=esub($bqr[smalltext],30)?></p>
        <p class="p_time"><span></span><em><?=date('Y-m-d',$bqr[newstime])?></em></p>
      </dd>
    </dl>
<?php
}
}
?>
                </div>
  </div>
</div>
<div class="main4">
  <div class="main4_title">
    <ul id="test_paih_list">
      <li class="last" type="1">手游排行</li>
      <li type="2">软件排行</li>
    </ul>
  </div>
  <div class="paih_list paih_list_1" id="syTopList">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and titlepic <> '' order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="list_div clearfix">
      <div class="list_div_lf">
        <div class="game_icon"><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></div>
        <div class="game_intro">
          <p class="p_title"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
          <p class="p_intro">下载：<em class="red"><?=$bqr['onclick']?></em>次</p>
          <p class="p_intro"><span>类型：<?=$class_r[$bqr[classid]][bname]?></span></p>
        </div>
      </div>
      <div class="list_div_rg">
         <a href="<?=$bqsr['titleurl']?>">立即下载</a>
      </div>
    </div>
<?php
}
}
?>
          </div>
  <div class="paih_list paih_list_2 hide" id="ljTopList">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) and titlepic <> '' order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="list_div clearfix">
      <div class="list_div_lf">
        <div class="game_icon"><a href="<?=$bqsr['titleurl']?>"><img src="<?=$public_r['add_weburl']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></div>
        <div class="game_intro">
          <p class="p_title"><a href="<?=$bqsr['titleurl']?>"><?=$bqr['title']?></a></p>
          <p class="p_intro">下载：<em class="red"><?=$bqr['onclick']?></em>次</p>
          <p class="p_intro"><span>类型：<?=$class_r[$bqr[classid]][bname]?></span></p>
        </div>
      </div>
      <div class="list_div_rg">
         <a href="<?=$bqsr['titleurl']?>">立即下载</a>
      </div>
    </div>
<?php
}
}
?>
  </div>
</div>
<div class="game_more"><a href="/fjyx/" id="loadmore">查看更多</a></div>
<div class="footer">
  <a href="javascript:void(0);" class="back_top"><span><img src="/statics/m_v2/skin_img/top.png" alt="" /></span><em>返回顶部</em></a>
</div>
<script src="/statics/m_v2/skin_js/m_xpgod.js"></script>
<script type="text/javascript" src="/statics/skin2_js/m_Desk_DownLoading.js"></script>
<div style="display:none;">
  <script type="text/javascript">
    $(function(){
      $("#main3Nav li").each(function(){
        var $this = $(this);
        var id = $this.attr('data');
        $this.click(function(){
          $("#main3Nav li").removeClass('last');
          $this.addClass('last');
          $("#main3List div").hide();
          $("."+id+"_list").show();
        });
      });
      $("#test_paih_list li").each(function(){
          var $this = $(this);
          var type = $this.attr('type');
          $this.click(function(){
            var href = "/fjyx/";
            if(type==2){
                href = "/sjrj/";
            }
            $("#loadmore").attr('href',href);

          });
      });
      /*$("#loadmore").click(function() {
        var page = $(this).attr("data");
        var type = $(this).attr("type");
        var wrap = type==2?'ljTopList':'syTopList';
        autoLoad2("/shouji/index.php?m=content&c=phone_index&a=getgamesoftlist&type="+type,wrap,"3",page);

      });*/
      //焦点图切换
        TouchSlide({
          slideCell:"#slideBox",
          titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
          mainCell:".bd ul",
          effect:"leftLoop",
          autoPage:true,//自动分页
          autoPlay:true //自动播放
        });
    });
  </script>
</div>
</body>
</html>