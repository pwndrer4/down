<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>������Ѷ - <?=$public_r['add_webname']?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/statics/skin_css/news_xpgod.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/skin_js/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="/statics/js/searchword.js"></script>
</head>
<body>
<a href="#top" class="go_top"><span>���ض���</span></a>
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
			<option value="news" class="sedsa">��Ѷ</option>
			<option value="soft" class="sedsa">���</option>
			<option value="phone" class="sedsa">�ֻ�</option>
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
	<div class="top_r"><script src="/d/js/acmsd/thea15.js"></script></div>
   </div>
   <div class="nav">
      <div class="nav_box">
	  <a href="/" ><span>��ҳ</span><em></em></a>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid=1 order by myorder asc limit 9",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<?php  
$classurl=sys_ReturnBqClassname($bqr,9);//ȡ����Ŀ��ַ  
$class="";
if($GLOBALS[navclassid]){
if($bqr[classid]==$GLOBALS[navclassid])
{
$class="on";
}}
?>
		<a href="<?=$bqsr[classurl]?>" class="<?=$class?>"><span><?=$bqr[classname]?></span><em></em></a> 
<?php
}
}
?>
	  	   	   	   	   	   	   	   	   	   	   	   	    
      </div>
   </div>
   <div class="nav_menu">
    <div class="menu">
      <a href="/soft/yyrj/wzsr/" target="_blank">���뷨</a>
      <a href="/soft/wlrj/wlll/" target="_blank">�����</a>
	  <a href="/soft/mtbf/wlds/" target="_blank">�칫���</a>
      <a href="/soft/yyrj/bgrj/" target="_blank">�칫���</a>
      <a href="/soft/xtrj/yjqd/" target="_blank">��������</a>
      <a href="/soft/safe/xtaq/" target="_blank">ϵͳ��ȫ</a>
      <a href="/soft/mtbf/wlds/" target="_blank">�������</a>
      <a href="/soft/mtbf/spbf/" target="_blank">��Ƶ����</a>
      <a href="/soft/mtbf/yybf/" target="_blank">���ֲ���</a>
      <a href="/soft/sjwj/sjgl/" target="_blank">�ֻ�����</a>
      <a href="/soft/txtx/tpcl/" target="_blank">ͼ�����</a>
      <a href="/soft/txtx/3dzz/" target="_blank">������</a>
      <a href="/soft/yxzj/yxgj/" target="_blank">��Ϸ����</a>
   </div>
  </div>
</div>	
	<div id="main">
    <div class="art_lm_gg">
     <div class="ggl"><script src="/d/js/acmsd/thea1.js"></script></div>
     <div class="ggr"><script src="/d/js/acmsd/thea2.js"></script></div>
    </div>
   <div class="location">
       λ�ã�
       <a href="/">��ҳ</a><em>&gt;</em><a href="/article/">������Ѷ</a><em>&gt;</em></div><div class="art_main1">
      <div class="left">
         <div id="artfocus">
            <a href="javascript:void(0)" class="btn-prev" onclick="return false;" hidefocus="" id="art_prev"></a>
            <a href="javascript:void(0)" class="btn-next" onclick="return false;" hidefocus="" id="art_next"></a>
           <div class="hd">
             <div class="artfocus_tit" id="artfocus_tit">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and pcid<>'' and firsttitle=4 order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			                <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a><?php
}
}
?>
             			             </div>
        </div>
        <div class="artfocus_box" id="artfocus_box">
           <div class="artfocus_bar">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and pcid<>'' and firsttitle=4 order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="kk">
                <div class="top"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
				<?php 
$tsql2=$empire->query("select * from phome_ecms_soft where id='$bqr[pcid]' limit 1");
while($tr=$empire->fetch($tsql2)){
$aaa=$tr['title'];
$ccc=$tr['titlepic'];
$ddd=$tr['titleurl'];
$eee=$tr['daxiao'];
$fff=$tr['pingfen'];
?>
               			   			   			   <div class="bod">
                   <div class="pic"><a href="<?=$ddd?>" target="_blank"><img src="<?=$ccc?>" alt="<?=$aaa?>"><span class="cover_60"></span></a></div>
                   <div class="info">
                      <p class="bt"><a href="<?=$ddd?>" target="_blank"><?=$aaa?></a></p>
                      <p class="dx">��С��<?=$eee?></p>
                      <p class="stars star<?=$fff?>"></p>
                   </div>
                   <a class="down" href="<?=$ddd?>" target="_blank">��������</a>
                </div>
<?php
}
?>   
              </div><?php
}
}
?>
			             </div>
        </div>
        <div class="ft">
           <div class="ftbg"></div>
           <div id="artfocus_num" class="change">
		   	                 <a class="on"></a>
                          <a ></a>
                          <a ></a>
                          <a ></a>
                       </div>
          </div>
         <script src="/statics/skin_js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
         </div>
         <div class="list">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2,3,4,5,6,7,8,9,10,11,12,13) and pcid<>'' and firsttitle=4 order by newstime desc limit 4,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			               <li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><p><span><?=$bqr['title']?></span></p></a></li><?php
}
}
?>
             			             </ul>
         </div>
      </div>
      <div class="right">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 2",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<div class="news_t">
            <p class="hd"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
            <div class="bd"><?=esub($bqr[smalltext],185)?></div>
         </div>
<?php
}
}
?>	
         <div class="news_list">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news order by newstime desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
                 <p class="lm"><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a><em></em></p>
                 <span>2016-05-17</span>
                 <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
               </li>
<?php
}
}
?>
			   			               </ul>
         </div>
      </div>
   </div>
   <div class="art_main2 clearfix">
      <div class="zxbk">
         <div class="gy_tit2">
            <p class="icon"></p>
           <p class="tit"><a href="/article/pcbk/"  target="_blank">��Ѷ�ٿ�</a></p>
         </div>
																						        	
         <div class="list">
           <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2) and titlepic <> '' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="hd">
              <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
              <div class="info">
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                 <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
                 <div class="txt"><?=esub($bqr[smalltext],30)?></div>
              </div>
           </div>
<?php
}
}
?>
           <ul class="bd">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2) order by newstime desc limit 1,5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
                 <a class="lm" href="<?=$bqsr[classurl]?>" target="_blank">��<?=$class_r[$bqr[classid]][bname]?>��</a>
                 <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
              </li>
<?php
}
}
?>
			   			              </ul>
         </div>
      </div>
      <div class="cen">
         <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (2) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><p><span><?=$bqr['title']?></span></p></a></li><?php
}
}
?>
         </ul>
      </div>
      <div class="news">
         <div class="gy_tit3 select_tab">
            <ul>
               <li class="cur">��</li>
               <li>��</li>
               <li>��</li>
            </ul>
           ��Ѷ���а�
         </div>
         <div class="news_ph">
            <ul style="display:block;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where newstime > UNIX_TIMESTAMP()-86400*30 order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where newstime > UNIX_TIMESTAMP()-86400*30 order by newstime desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno+3?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
				</ul>
            <ul style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where newstime > UNIX_TIMESTAMP()-86400*365 order by newstime desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno+3?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
								            </ul>
            <ul id="p3p" style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news order by newstime desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno+3?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
								            </ul>
         </div>
     </div>
   </div>
   <div class="art_main3 clearfix">
      <div class="gy_tit2">
         <p class="icon"></p>
         <p class="tit">���<span>/</span>Ӳ��</p>
		 				        	
         <p class="menu">
		              <a href="/article/hardware/" target="_blank">Ӳ�����</a>
                    <a href="/article/design/" target="_blank">�������</a>
                    <a href="/article/safe/" target="_blank">���԰�ȫ</a>
                    <a href="/article/pc/" target="_blank">�칫���</a>
                  </p>
      </div>
      <div class="box">
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (3,6,8,9) order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="left">
            <div class="hd">
              <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></div>
              <div class="info">
                <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                 <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
                 <div class="bott">
                    <div class="txt"><?=esub($bqr[smalltext],30)?></div>
                    <a class="bnt" href="<?=$bqsr['titleurl']?>" target="_blank">�Ķ���ϸ</a>
                 </div>
              </div>
            </div>
<?php
}
}
?>
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (3,6,8,9) order by newstime desc limit 1,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
                 <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
                 <p class="lm"><em></em><a href="<?=$bqsr[classurl]?>" target="_blank"><?=$class_r[$bqr[classid]][bname]?></a></p>
                 <p class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                </li>
<?php
}
}
?>

 </ul>
         </div>
         <div class="right">
            <div id="arttu">
              <div class="hd">
                 <div class="arttu_tit" id="arttu_tit">	
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (3,6,8,9) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<div class="nr">
                    <div class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></div>
                    <div class="wb"><?=esub($bqr[smalltext],30)?></div>
                  </div>
<?php
}
}
?>
	                            </div>
             </div>
            <div class="arttu_box" id="arttu_box">
              <ul class="arttu_bar">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (3,6,8,9) and isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></li>
<?php
}
}
?>
	           </ul>
            </div>
           <div class="ft">
             <div class="ftbg"></div>
             <div id="arttu_num" class="change">
			                 <a class="on"></a>
                              <a ></a>
                              <a ></a>
                            </div>
            </div>
           </div>
           <div class="r_db">
                          <div class="box">
                 <p class="tit">Ӳ�����</p>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (6) and firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			       <div class="info">
                   <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                   <p><?=esub($bqr[smalltext],80)?></p>
                 </div><?php
}
}
?>
				 				               </div>
			                <div class="box">
                 <p class="tit">�������</p>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (8) and firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			       <div class="info">
                   <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                   <p><?=esub($bqr[smalltext],80)?></p>
                 </div><?php
}
}
?>
				 				               </div>
			                <div class="box">
                 <p class="tit">���԰�ȫ</p>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (9) and firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			       <div class="info">
                   <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                   <p><?=esub($bqr[smalltext],80)?></p>
                 </div><?php
}
}
?>
				 				               </div>
			                <div class="box">
                 <p class="tit">�칫���</p>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (3) and firsttitle in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			       <div class="info">
                   <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                   <p><?=esub($bqr[smalltext],80)?></p>
                 </div><?php
}
}
?>
				 				               </div>
			             </div>
         </div>
      </div>
   </div>
   <div class="art_main4">
      <div class="global_tit">
         <p class="tit">ϵͳ/����</p>
		         <p class="menu">
		           <a href="/article/win10/" target="_blank">win10�̳�</a>
                    <a href="/article/win8/" target="_blank">win8�̳�</a>
                    <a href="/article/win7/" target="_blank">win7�̳�</a>
                    <a href="/article/xp/" target="_blank">X P �̳�</a>
                    <a href="/article/wljs/" target="_blank">���缼��</a>
                  </p>
      </div>
      <div class="bd">
         <div class="list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=10 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="top">
             <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
             <p><span>��ժҪ��</span><?=esub($bqr[smalltext],110)?>...</p>
           </div>
<?php
}
}
?> 
		   		              <div class="news_ph">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=10 order by newstime desc limit 1,3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=10 order by newstime desc limit 4,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
              			            </ul>
         </div>
         </div>
         <div class="list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (11,12,13) order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="top">
             <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
             <p><span>��ժҪ��</span><?=esub($bqr[smalltext],110)?>...</p>
           </div>
<?php
}
}
?> 
		   		              <div class="news_ph">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (11,12,13) order by newstime desc limit 1,3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid in (11,12,13) order by newstime desc limit 4,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>              			            </ul>
         </div>
         </div>
         <div class="list">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=7 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="top">
             <a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
             <p><span>��ժҪ��</span><?=esub($bqr[smalltext],110)?>...</p>
           </div>
<?php
}
}
?> 
		   		              <div class="news_ph">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=7 order by newstime desc limit 1,3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=7 order by newstime desc limit 4,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><em><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>              			            </ul>
         </div>
         </div>
      </div>
   </div>
   <div class="art_main5">
      <div class="list">
         <div class="gy_tit">  <a href="/article/sj/" target="_blank">�ֻ��̳�</a></div>	
		 	
		 		          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=4 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="top">
            <div class="hd">
              <p class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></p>
              <div class="info">
                 <div class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></div>
                 <div class="b">
                    <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
					                    <p class="count"><?=$bqr['onclick']?>��</p>
                 </div>
              </div>
            </div>
            <div class="bd">
               <span>��ժҪ��<?=esub($bqr[smalltext],110)?>...</div>
         </div>
<?php
}
}
?>
		 		            <div class="news_ph">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=4 order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><span><?=date('m/d',$bqr[newstime])?></span><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li><?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=4 order by newstime desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><span><?=date('m/d',$bqr[newstime])?></span><em><?=$bqno+3?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li><?php
}
}
?>
                			            </ul>
         </div>
      </div>
      <div class="list">
         <div class="gy_tit"> <a href="/article/game/" target="_blank">��Ϸ����</a></div>	
		 	
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=5 order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div class="top">
            <div class="hd">
              <p class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></p>
              <div class="info">
                 <div class="bt"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></div>
                 <div class="b">
                    <p class="time"><?=date('Y-m-d',$bqr[newstime])?></p>
					                    <p class="count"><?=$bqr['onclick']?>��</p>
                 </div>
              </div>
            </div>
            <div class="bd">
               <span>��ժҪ��<?=esub($bqr[smalltext],110)?>...</div>
         </div>
<?php
}
}
?>		 		            <div class="news_ph">
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=5 order by newstime desc limit 3",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><span><?=date('m/d',$bqr[newstime])?></span><em class="em<?=$bqno?>"><?=$bqno?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li><?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid=5 order by newstime desc limit 3,7",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><span><?=date('m/d',$bqr[newstime])?></span><em><?=$bqno+3?></em><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li><?php
}
}
?>                			            </ul>
         </div>
      </div>
	  <div class="gg"><script src="/d/js/acmsd/thea6.js"></script></div>
   </div>
</div>
<div class="footer">
   <div class="menu">
      <a class="logo_foot" href="/"><img src="/statics/skin_img/logo_foot.png" alt="<?=$public_r['add_webname']?>"></a>
      <div class="menu_r">
        <ul>
			<a href="/support/about.html" rel="nofollow" target="_blank" >���ڱ�վ</a><span>|</span>
			<a href="/support/help.html" rel="nofollow" target="_blank" >��վ����</a><span>|</span>
			<a href="/support/advertise.html" rel="nofollow" target="_blank" >������</a><span>|</span>
			<a href="/support/rjfb.html" rel="nofollow" target="_blank" >�������</a><span>|</span>
			<a href="/support/declare.html" rel="nofollow" target="_blank" >��������</a><span>|</span>
			<a href="/support/link.html" target="_blank">��������</a><span>|</span>
			<a href="/sitemap.html" target="_blank" >��վ��ͼ</a><span>|</span>
			<a href="/sitemaps.xml" target="_blank" >��վRSS</a>
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