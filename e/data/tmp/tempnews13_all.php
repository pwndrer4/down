<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?> <!doctype html>
<html>
	<head>
		<meta charset="GBK">
		<title><?=$ecms_gr[ftitle]?>|<?=$grpagetitle?>����_<?=$grpagetitle?>�ֻ���_<?=$grpagetitle?>���԰�����_1000s����վ</title>
		<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
		<meta name="description" content="<?=$grpagetitle?>" />
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
        <li><a href="<?=$public_r['add_weburl']?>" class="top_menu_a">��ҳ</a></li>
        <li onmouseover="show('quanzdh');" onmouseout="hide('quanzdh');" id="bj_hover" class=""> <a href="javascript:void(0)" target="_self" class="top_menu_a dh_bj">ȫվ����</a>
          <div id="quanzdh" style="display: none;">
            <div class="qh_top">
              <div class="qh_top_title">����ר��</div>
              <div class="qh_top_list"> <a href="/fjyx/" class="dh_a">��Ϸ��</a> <a href="/sjrj/" class="dh_a">�����</a> </div>
              <div class="qh_top_title">��Ѷ����</div>
              <div class="qh_top_list zx"> <a href="/news/gonglue/" class="dh_a">���ι���</a> <a href="/news/yueyu/" class="dh_a">Խ���̳�</a> <a href="/news/shuaji/" class="dh_a">ˢ���̳�</a> <a href="/news/video/" class="dh_a">������Ƶ</a> <a href="/news/zixun/" class="dh_a">������Ѷ</a> </div>
            </div>
            <div class="qh_bottom">
              <div class="qh_bottom_title">������Ϸ</div>
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
    <div class="top_rg"> <a onclick="SetHome(this,window.location)" class="top_menu_a a_pad">��Ϊ��ҳ</a> <a class="top_menu_a a_pad" onclick="shoucang(document.title,window.location)">�ղر�վ</a> </div>
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
              <option value="news" class="sedsa">��Ѷ</option>
              <option value="soft" class="sedsa">���</option>
              <option value="phone" class="sedsa">�ֻ�</option>
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
        <li class="paihb_menu_li"><a href="/fjyx/" class="d_manu_a">����Ϸ</a><a href="/fjyx/xxyz/" class="x_menu_a">����</a><a href="/fjyx/sjqz/" class="x_menu_a">���</a><a href="/shouji/phb.html" class="x_menu_a">����</a></li>
        <li class="paihb_menu_li"><a href="/sjrj/" class="d_manu_a">װӦ��</a><a href="/sjrj/xtgj/" class="x_menu_a">ϵͳ</a><a href="/sjrj/sjdh/" class="x_menu_a">����</a><a href="/sjrj/sjyd/" class="x_menu_a">�Ķ�</a></li>
        <li class="paihb_menu_li"><a href="/news/" class="d_manu_a">����Ѷ</a><a href="/news/gonglue/" class="x_menu_a">����</a><a href="/news/yueyu/" class="x_menu_a">Խ��</a><a href="/news/zixun/" class="x_menu_a">����</a></li>
        <li class="paihb_menu_li"><a href="/news/video/" class="d_manu_a">����Ƶ</a><a href="/news/shuaji/" class="x_menu_a">ˢ��</a><a href="/article/hardware/" class="x_menu_a">Ӳ��</a><a href="/article/wljs/" class="x_menu_a">����</a></li>
      </ul>
    </div>
    <div class="dh_rmss"> ��������:<? @sys_ShowSearchKey(6,6,0,0);?> </div>
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
						<div class="main_lf_weizhi">
							����λ�ã�<?=$grurl?>&gt;<span><?=$ecms_gr[title]?></span>
						</div>
						<div class="yxny_lf_first">
							<div class="yxny_first_img">
								<img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>" /><span></span>
								<div class="like_hate" id="digg">
										<a href="JavaScript:makeRequest('/e/public/digg?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" target="_self" class="like"><p class="lh_a">ϲ��</p><p class="lh_a green">��<script src=/e/public/ViewClick?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script>��</p></a>
										<a href="JavaScript:makeRequest('/e/public/digg?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=0&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');" target="_self" class="hate"><p class="lh_a">��ϲ��</p><p class="lh_a red">��<script src=/e/public/ViewClick?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=6></script>��</p></a>
								</div>
							</div>
							<div class="yxny_first_md">
								<p class="yxny_first_name"><?=$ecms_gr[title]?><span><?=$ecms_gr[banben]?></span></p>
								<p class="yxny_first_infro">
                                   									�����С��<span class="infort_sort"><?=$ecms_gr[daxiao]?></span>������ͣ�<span class="infort_sort"><?=$class_r[$ecms_gr[classid]][classname]?></span>���ش�����<span class="infort_sort"><script src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1"></script></span>ƽ̨��<span class="andriod"></span><span class="apple"></span>								</p>
								<div class="bdsharebuttonbox">
									<span class="fl">������</span>
									<a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="����QQ�ռ�"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="��������΢��"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="������Ѷ΢��"></a><a href="#" class="bds_renren" data-cmd="renren" title="����������"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="����΢��"></a>
								</div>
                                                                                    
				<div class="yxny_first_down new_down">
	                 <ul>
					<li class="yxny_li anz">
						<a href="javascript:void(0);" target="_self" class="andriod_down">
							<span class="icon"></span><b>��׿������</b><span class="yj"></span>
						</a>
						<ul class="xlcd az">
<?php if($navinfor[bendidown]=='' && $navinfor[down]==''){$azclass="unuse";}else{$azclass="az_d_yx";} ?>
							<li class="<?=$azclass?>" id="<?=$azclass?>"><a href="<?php
if($navinfor[bendidown]=='' && $navinfor[down]==''){
echo "javascript:void(0);";
}else if($navinfor[bendidown]==''){
echo "\\/url.php?url=".base64_encode($navinfor[down]);
}else{
echo "\\/url.php?url=".base64_encode($navinfor[bendidown]);
}
?>">���ص�����</a></li>
							<li class="<?=$azclass?>"><a href="<?php
if($navinfor[bendidown]=='' && $navinfor[down]==''){
echo "javascript:void(0);";
}else if($navinfor[bendidown]==''){
echo "\\/url.php?url=".base64_encode($navinfor[down]);
}else{
echo "\\/url.php?url=".base64_encode($navinfor[bendidown]);
}
?>" id="down_to_sj">���ص��ֻ�</a></li>
							<span></span>
						</ul>
					</li>
					<li class="yxny_li io">
						<a href="javascript:void(0);" target="_self" class="iphone_down">
							<span class="icon"></span><b>iOS������</b><span class="yj"></span>
						</a>
						<ul class="xlcd ios">
							<?php if($navinfor[iosyy]=='' && $navinfor[iosyybendi]==''){$azclass3="unuse";}else{$azclass3="";} ?>
							<li class="<?=$azclass3?>"><a href="<?php
if($navinfor[iosyybendi]=='' && $navinfor[iosyy]==''){
echo "javascript:void(0);";
}else if($navinfor[iosyybendi]==''){
echo "\\/url.php?url=".base64_encode($navinfor[iosyy]);
}else{
echo "\\/url.php?url=".base64_encode($navinfor[iosyybendi]);
}
?>"   target="_black" >Խ��������</a></li>
							<?php if($navinfor[itunes]==''){$azclass2="unuse";}else{$azclass2="";} ?>
							<li class="<?=$azclass2?>"><a href="<?php
if($navinfor[itunes]==''){
echo "javascript:void(0);";
}else{
echo "\\/url.php?url=".base64_encode($navinfor[itunes]);
}
?>"  target="_black"  >iTunes����</a></li>
						<span></span>
						</ul>
					</li>
<?php
if($navinfor[pcdown]=='' || $navinfor[pcdown]==null){
?>
					<li class="yxny_li"><a href="<?php $num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_soft where rjjx like '%$navinfor[rjjx]%' and (ftitle like '%�ٷ�%' or ftitle like '%��ʽ��%')"); if($num==0){ echo "javascript:void(0);";} ?><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_soft where rjjx like '%$navinfor[rjjx]%' and (ftitle like '%�ٷ�%' or ftitle like '%��ʽ��%') order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><?=$bqsr['titleurl']?><?php
}
}
?>"   target="_black" id="down_to_pc" class="iTnues_down"><span class="icon"></span><b>���԰�����</b></a></li>
<?php
}else{
?>
<li class="yxny_li"><a href="<?=$ecms_gr[pcdown]?>" target="_black" id="down_to_pc" class="iTnues_down"><span class="icon"></span><b>���԰�����</b></a></li>
<?php
}
?>
					</ul>
				</div>
                                     							</div>
																
<?php
$id=$navinfor[id];
$tiurl=$navinfor[titleurl];
$weburl=$public_r['add_weburl'];
$murl=$public_r['add_murl'];
$url=$weburl."/phpqrcode/index.php?url=".$murl.$tiurl."&pat=phone&id=".$id;file_get_contents($url);
?>													
							<div class="yxny_first_ewm"><img src="/phpqrcode/temp/<?=$ecms_gr[id]?>phone.png"><span>��ά�����ص�ַ</span></div>
						</div>
						<div class="yxny_lf_second" id="soft-intro-wrap">
							<?=$ecms_gr[newstext]?>
						</div>
						<div id="more-intro"><a id="more-intro-btn" href="javascript:;" target="_self">չ��</a></div>
						<script type="text/javascript" language="javascript">
						<!--
							if($("#soft-intro-wrap").height() < 322){
								$("#more-intro").hide();
							}else{
								$("#soft-intro-wrap").css({"height":"322px","overflow":"hidden"});
							}
							//��������չ
							$("#more-intro-btn").toggle(function(){
									$(this).html("����");
									$("#soft-intro-wrap").css({"height":"auto","overflow":"visible"});
									$("#more-intro").addClass("changebj");
								},function(){
									$(this).html("չ��");
									$("#soft-intro-wrap").css({"height":"322px","overflow":"hidden"});
									$("#more-intro").removeClass("changebj");
							});
						//-->
						</script>
						<div class="yxny_lf_yxjt">
							<div class="yxjt_title">�����ͼ</div>
							<script type="text/javascript" src="/shouji/statics/skin_js/jquery.fancybox-1.3.4.pack.js"></script>
							<link href="/shouji/statics/skin_css/jquery.fancybox-1.3.4.css" type="text/css" rel="stylesheet">
							<div class="sliderbox">
								<div class="btn_bj lfbd"><div id="btn-left" class="arrow-btn dasabled" style="cursor: auto;"></div></div>
								<div class="slider">
									<ul> 
<?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);

for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
<li><a  rel="example_group" href="<?=$spicr[1]?>" title="" target="_blank"><img src="<?=$spicr[1]?>" alt="<?=$ecms_gr[ftitle]?>" /></a></li>
<?php
}
?>
																			</ul> 
								</div>
								<div class="btn_bj rgbd"><div id="btn-right" class="arrow-btn" style="cursor: pointer;"></div></div>
							  </div>
						</div>
						<div class="yxny_lf_xgwz">						
							<span class="xgwz_title">�������</span>
							<?php
							 $num=$empire->gettotal("select count(*) as total from {$dbtbpre}ecms_news where phoneid='$navinfor[id]'");
							if($num==0){
							?>
							<span class="no_re">�����������</span>
							<?php } ?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where phoneid='$navinfor[id]' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							<ul class="xgwz_ul"><?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where phoneid='$navinfor[id]' order by newstime desc limit 6",6,24,0);
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
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where phoneid='$navinfor[id]' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?></ul><?php
}
}
?>                  													</div>
						<div class="yxny_lf_cnxh">
							<span class="cnxh_title">����ϲ��</span>
							<ul class="cnxh_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid='".$GLOBALS[navclassid]."' order by rand() desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="cnxh_li">
												<a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>" class="zxyx_a">
													<img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" >
													<span></span>
													<b><?=$bqr['title']?></b>
                                                  <b class="cnxh_sort"><?=$class_r[$bqr[classid]][bname]?></b>
												</a>
											</li>
<?php
}
}
?>					  											                        
							</ul>
						</div>
<div style="width:836px; margin:0 auto;"><div class="comment">

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
					<div class="main_rg search_main_rgs">
						<script src="/d/js/acmsd/thea16.js"></script>
						<div class="main_rg_yxtj">
							<div class="yxtj_title"><span class="titles">����Ƽ�</span></div>
							<div class="yxtj_list">
								<ul class="search_yxtj_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid='".$GLOBALS[navclassid]."' and isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 6",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>							
<li class="search_yxtj_li">
											<div class="search_li_img"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><img src="<?=$bqr['titlepic']?>" /><span></span></a></div>
											<div class="search_li_rg">
												<p class="li_rg_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"><?=$bqr['title']?></a></p>
												<p class="li_rg_other"><?=$bqr['daxiao']?>&nbsp;|&nbsp;<?=$bqr['onclick']?>������</p>
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
							<div class="yxtj_title"><span class="titles">���ר��</span></div>
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
							<div class="yxtj_title"><span class="titles">������а�</span></div>
								<div class="forth_rg_list">
									<ul class="forth_ul">
										<li class="forth_li w78">����</li>
										<li class="forth_li w91">���</li>
										<li class="forth_li w68">����</li>
										<li class="forth_li w30">����</li>
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
												<span class="rank_download"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>">����</a></span>
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
												<span class="rank_download"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>">����</a></span>
											</div>
										</li><?php
}
}
?>
																			</ul>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="footer">
			<p class="footer_top"><a href="/support/about.html">���ڱ�վ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/help.html">��վ����</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/advertise.html">������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/rjfb.html">�������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">��������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">��������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemap.html">��վ��ͼ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemaps.xml">��վRSS</a></p>
			<p class="footer_md">�ֻ������ǹ�����רҵ���ֻ�������ֻ���Ϸ��������,�ֻ������Է����û�Ϊ���Ŭ������ɹ�������ȫ���ٵ��ֻ�������ֻ���Ϸ����ƽ̨��</p>
		</div>
<?=$public_r['add_tongji']?>
<div style="display:none;" id="xpcontent_id" data="8177"></div>
<script type="text/javascript" src="/shouji/statics/skin_js/xp_48.js"></script> 
	 	<script type="text/javascript" src="/shouji/statics/skin_js/47.js"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/homeindex_change.js"></script>
		<script type="text/javascript" src="/shouji/statics/skin_js/script_index2.js"></script>
		<script language="JavaScript" src="http://www.xpgod.com/shouji/api.php?op=count&id=8177&modelid=2"></script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script src="/e/data/js/ajax.js"></script>
	</body>
</html>