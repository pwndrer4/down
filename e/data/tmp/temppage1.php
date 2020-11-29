<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
	<head>
		<meta charset="GBK">
		<title>[!--pagetitle--]</title>
		<meta name="keywords" content="[!--pagekeywords--]">
		<meta name="description" content="[!--pagedescription--]">
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
				<div class="rank_bj">
					<div class="main_lf main_lfs">
						<div class="main_lf_weizhi">
							����λ�ã�<a href="http://www.xpgod.com/shouji">��ҳ</a>&gt;<a href="http://www.xpgod.com/shouji/phb.html" class="pad8">���а�</a>
						</div>
						<div class="main_rank">
							<div class="wangy">
								<div class="wangy_title">
									<span class="rank_top"><b>����</b>���а�</span>
									<ul class="rank_top_ul" id="test_indexT_product_texts">
										<li class="rank_top_li last"><a href="javascript:void(0);"  target="_blank" >��</a></li>
										<li class="rank_top_li"><a href="javascript:void(0);"  target="_blank" >��</a></li>
									</ul>
								</div>
								<div class="wangy_rank indexT_product_texts indexT_product_texts_1">
									<ul class="rank_ul_title">
										<li class="rank_li_title w79">����</li>
										<li class="rank_li_title w84">��Ϸ</li>
										<li class="rank_li_title w70">����</li>
										<li class="rank_li_title w25">����</li>
									</ul>
									<ul class="rank_ul_main rank_ul_main1">
																			    																						                                                                                                                                                        														<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>" target="_blank">����</a></span>
											</div>
										</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3,33",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li><?php
}
}
?>                                                                                                              																							                                                                                                                                                        														                                                                                                                                      																							                                                                                                                                                        														        																																																								</ul>
								</div>
								<div class="wangy_rank indexT_product_texts indexT_product_texts_2 hide">
									<ul class="rank_ul_title">
										<li class="rank_li_title w79">����</li>
										<li class="rank_li_title w84">��Ϸ</li>
										<li class="rank_li_title w70">����</li>
										<li class="rank_li_title w25">����</li>
									</ul>
									<ul class="rank_ul_main rank_ul_main2">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3,33",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li><?php
}
}
?>          																													                                                                                                                                                        																									                                                                                                                                                        																									                                                                                                                                                        																									                                                                                                                                                        																									                                                                                                                                                        																									                                                                                                                                                        																																													</ul>
								</div>
							</div>
							
							<div class="danji">
								<div class="danji_title">
									<span class="rank_top"><b>����</b>���а�</span>
									<ul class="rank_top_ul" id="test_chongzhiBoxs">
										<li class="rank_top_li last"><a href="javascript:void(0);"  target="_blank" >��</a></li>
										<li class="rank_top_li"><a href="javascript:void(0);"  target="_blank" >��</a></li>
									</ul>
								</div>
								<div class="wangy_rank chongzhiBoxs chongzhiBoxs_1">
									<ul class="rank_ul_title">
										<li class="rank_li_title w79">����</li>
										<li class="rank_li_title w84">��Ϸ</li>
										<li class="rank_li_title w70">����</li>
										<li class="rank_li_title w25">����</li>
									</ul>
									<ul class="rank_ul_main rank_ul_main3">
																			    																						                                                                                                                                                        																									<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3,33",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li><?php
}
}
?>                                                                                                																									                                                                                                                                                        																									                                                                                                                                                        																									                                                                                                                                                        																																													</ul>
								</div>
								<div class="wangy_rank chongzhiBoxs chongzhiBoxs_2 hide">
									<ul class="rank_ul_title">
										<li class="rank_li_title w79">����</li>
										<li class="rank_li_title w84">��Ϸ</li>
										<li class="rank_li_title w70">����</li>
										<li class="rank_li_title w25">����</li>
									</ul>
									<ul class="rank_ul_main rank_ul_main4">
																			    																						                                                                                                                                                        																									<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) and yxlx like '%����%' order by onclick desc limit 3,33",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li><?php
}
}
?>                                                                                                          																									                                                                                                                                                        																									                                                                                                                                          																									                                                                                                                                                        														          																																							                                                                                                                                                        																									                                                                                                                                                        																									                                                                                                                                                        																																													</ul>
								</div>
							</div>
							<div class="ruanjian">
								<div class="ruanjian_title">
									<span class="rank_top"><b>���</b>���а�</span>
									<ul class="rank_top_ul" id="test_indexTs">
										<li class="rank_top_li last"><a href="javascript:void(0);"  target="_blank" >��</a></li>
										<li class="rank_top_li"><a href="javascript:void(0);"  target="_blank" >��</a></li>
									</ul>
								</div>
								<div class="wangy_rank indexTs indexTs_1">
									<ul class="rank_ul_title">
										<li class="rank_li_title w79">����</li>
										<li class="rank_li_title w84">��Ϸ</li>
										<li class="rank_li_title w70">����</li>
										<li class="rank_li_title w25">����</li>
									</ul>
									<ul class="rank_ul_main rank_ul_main5">

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by onclick desc limit 3,33",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li><?php
}
}
?>                                                                                                                                                  														    																																							                                                                                                                                                        														    																																																											</ul>
								</div>
								<div class="wangy_rank indexTs indexTs_2 hide">
									<ul class="rank_ul_title">
										<li class="rank_li_title w79">����</li>
										<li class="rank_li_title w84">��Ϸ</li>
										<li class="rank_li_title w70">����</li>
										<li class="rank_li_title w25">����</li>
									</ul>
									<ul class="rank_ul_main rank_ul_main6">
																			    																						                                                                                                                                                        										<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by onclick desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co13"><?=$bqno?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (136,137,138,139,140,141,142,143,144,145,146) order by onclick desc limit 3,33",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
										<li class="rank_li_main">
											<div class="rank_li_top">
												<span class="rank co410"><?=$bqno+3?></span>
												<span class="rank_name"><a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['rjjx']?>"><?=$bqr['rjjx']?></a></span>
												<span class="rank_renqi"><?=$bqr['onclick']?></span>
												<span class="rank_download jiang"><a href="<?=$bqsr['titleurl']?>"  target="_blank" >����</a></span>
											</div>
										</li><?php
}
}
?>                                                                                               										   																																																											</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="main_rg main_rgs">
						<div class="main_rg_yxtj">
								<div class="yxtj_title"><span class="titles">С���Ƽ�</span></div>
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
							<div class="main_rg_yxtj main_rg_wztj">
								<div class="yxtj_title"><span class="titles">�����Ƽ�</span></div>
								<div class="yxtj_list">
									<ul class="wztj_list_ul">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (129,130,131,132,133,134) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 10",6,24,0);
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
								<div class="yxtj_title"><span class="titles">��������</span></div>
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
					</div>
				</div>
			</div>
		</div>
<div class="footer">
			<p class="footer_top"><a href="/support/about.html">���ڱ�վ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/help.html">��վ����</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/advertise.html">������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/rjfb.html">�������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">��������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/support/declare.html">��������</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemap.html">��վ��ͼ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/sitemaps.xml">��վRSS</a></p>
			<p class="footer_md">�ֻ������ǹ�����רҵ���ֻ�������ֻ���Ϸ��������,�ֻ������Է����û�Ϊ���Ŭ������ɹ�������ȫ���ٵ��ֻ�������ֻ���Ϸ����ƽ̨��</p>
		</div>
<?=$public_r['add_tongji']?>
 
		<script type="text/javascript" src="/shouji/statics/skin_js/homeindex.js"></script>
		<script src="/shouji/statics/skin_js/common.js" type="text/javascript"></script>
	</body>
</html>