<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>ϵͳ���� - �ֻ��������,�����������,������Ϸ����,��������,����ǽֽ - <?=$public_r['add_webname']?></title>
<meta name="keywords" content="�ֻ��������,�����������,������Ϸ����,��������,����ǽֽ" />
<meta name="description" content="ϵͳ�����Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!" />
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
    <li><a href="/" class="last">��ҳ</a></li>
    <li><a href="/fjyx/">��Ϸ</a></li>
    <li><a href="/sjrj/">���</a></li>
    <li><a href="/news/">��Ѷ</a></li>
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
  <div class="main_title"><span>�ر�����</span><a href="/fjyx/" class="more">����>></a></div>
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
  <div class="main_title"><span>�ر����</span><a href="/sjrj/" class="more">����>></a></div>
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
      <li class="gl last" data="gl"><a href="javascript:;"><span></span><em>����</em></a><div class="li_bj"></div></li>
      <li class="xw" data="xw"><a href="javascript:;"><span></span><em>����</em></a><div class="li_bj"></div></li>
      <li class="sp" data="sp"><a href="javascript:;"><span></span><em>��Ƶ</em></a><div class="li_bj"></div></li>
      <li class="jc" data="jc"><a href="javascript:;"><span></span><em>�̳�</em></a></li>
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
      <li class="last" type="1">��������</li>
      <li type="2">�������</li>
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
          <p class="p_intro">���أ�<em class="red"><?=$bqr['onclick']?></em>��</p>
          <p class="p_intro"><span>���ͣ�<?=$class_r[$bqr[classid]][bname]?></span></p>
        </div>
      </div>
      <div class="list_div_rg">
         <a href="<?=$bqsr['titleurl']?>">��������</a>
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
          <p class="p_intro">���أ�<em class="red"><?=$bqr['onclick']?></em>��</p>
          <p class="p_intro"><span>���ͣ�<?=$class_r[$bqr[classid]][bname]?></span></p>
        </div>
      </div>
      <div class="list_div_rg">
         <a href="<?=$bqsr['titleurl']?>">��������</a>
      </div>
    </div>
<?php
}
}
?>
  </div>
</div>
<div class="game_more"><a href="/fjyx/" id="loadmore">�鿴����</a></div>
<div class="footer">
  <a href="javascript:void(0);" class="back_top"><span><img src="/statics/m_v2/skin_img/top.png" alt="" /></span><em>���ض���</em></a>
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
      //����ͼ�л�
        TouchSlide({
          slideCell:"#slideBox",
          titCell:".hd ul", //�����Զ���ҳ autoPage:true ����ʱ���� titCell Ϊ����Ԫ�ذ�����
          mainCell:".bd ul",
          effect:"leftLoop",
          autoPage:true,//�Զ���ҳ
          autoPlay:true //�Զ�����
        });
    });
  </script>
</div>
</body>
</html>