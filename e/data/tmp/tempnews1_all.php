<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title><?=$grpagetitle?>_1000s����վ</title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
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
       λ�ã�<?=$grurl?><em>&gt;</em><?=$ecms_gr[title]?></div>
   <div class="art_lm">
      <div class="art_lml artny">
         <div class="artny_top">
			<div class="top_title"><?=$ecms_gr[title]?></div>
			<div class="top_others">
			  		  	   <p class="xx">����ʱ�䣺<span><?=date('Y-m-d',$ecms_gr[newstime])?></span></p><p class="xx">��Դ��<span><?
if($navinfor['befrom']=="") {
echo "��վ����";
}
else{
echo $navinfor[befrom];
}
?></span></p>
               <div class="share">
                 <p>������</p>
                 <div class="bdsharebuttonbox bdshare-button-style2-24" data-bd-bind="1450661209165">
                 <a href="#" class="bds_tsina" data-cmd="tsina" title="��������΢��"></a>
                 <a href="#" class="bds_qzone" data-cmd="qzone" title="����QQ�ռ�"></a>
                 <a href="#" class="bds_tqq" data-cmd="tqq" title="������Ѷ΢��"></a>
                 <a href="#" class="bds_bdhome" data-cmd="bdhome" title="�����ٶ�����ҳ"></a>
                 <a href="#" class="bds_renren" data-cmd="renren" title="����������"></a>
                 </div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
          </div>
			</div>
		</div>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where id='$navinfor[pcid]' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		<div class="rj">
          <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover110"></span></a></div>
          <div class="info">
             <div class="toub">
			    <a class="bnt pc" href="<?=$bqsr['titleurl']?>" target="_blank"><em></em>���԰�����</a>
                <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
             </div>
             <div class="cen">���ͣ�<span><?=$class_r[$bqr[classid]][bname]?></span>��С��<span><?=$bqr['daxiao']?></span>�汾��<span><?=$bqr['banben']?></span></div>
             <div class="dib"><?=$bqr['dianping']?></div>
          </div>
        </div>
<?php
}
}
?>
		        <div class="artny_main"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
				<div class="page" style="margin:25px auto;">[!--page.url--]</div>
				   <div style="margin-top:20px;"><script src="/d/js/acmsd/thea3.js"></script></div>
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
      <div class="art_lmr">


	  <div class="gg">
         <script src="/d/js/acmsd/thea4.js"></script>
		 </div>
         <div class="bg_w">
            <div class="gy_tit4"><em></em>�����б�</div>
            <div class="fllb">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname from {$dbtbpre}enewsclass where bclassid=1 order by myorder,classid asc",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							<a href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqr[classname]?></a>
<?php
}
}
?>
                            <a href="/article/zuijinlist/" target="_blank">�������</a>
                            <a href="/article/bestlist/" target="_blank">�Ƽ�����</a>
                            <a href="/article/hotlist/" target="_blank">��������</a>
                          </div>
            <div class="gy_tit4">
               <a class="tj_hyp" href="javascript:void(0);" id="anzhuo_huan" onclick="show_anzhuo('anzhuo_B')">��һ��</a>
               <em></em>�����Ƽ�
            </div>
            <div class="sytj">
		  	
               <ul id="anzhuo_A" style="display:block;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 6",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
                 <a href="<?=$bqsr['titleurl']?>" target="_blank">
                  <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                  <p class="t1"><span><?=$bqr['title']?></span></p>
                  <span class="cover85"></span>
                 </a>
                 <a class="down" href="<?=$bqsr['titleurl']?>" target="_blank">��������</a>
                 </li>
<?php
}
}
?>
				  				                </ul>
               <ul id="anzhuo_B" style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where isgood in (1,2,3,4,5,6,7,8,9) order by newstime desc limit 6,6",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
                 <a href="<?=$bqsr['titleurl']?>" target="_blank">
                  <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
                  <p class="t1"><span><?=$bqr['title']?></span></p>
                  <span class="cover85"></span>
                 </a>
                 <a class="down" href="<?=$bqsr['titleurl']?>" target="_blank">��������</a>
                 </li>
<?php
}
}
?>
				                 </ul>
            </div>
			<script src="/d/js/acmsd/thea5.js"></script>
         </div>
         <div class="bg_w mt15">
            <div class="gy_tit4 ls"><em></em>�������а�</div>
            <div class="game_ph">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where classid in (148,149,150,151,152,153,154,155,156,157,158) order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="nr">
               <em class="n<?=$bqno?>"></em>
               <div class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover_80"></span></a></div>
               <div class="info">
                  <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
				                    <p class="dj"><span class="stars star<?php echo floor($bqr['pingfen']/2); ?>"></span><span class="score"><?=$bqr['pingfen']?>��</span></p>
                  <a class="down" href="<?=$bqsr['titleurl']?>" target="_blank">��������</a>
               </div>
            </div>
<?php
}
}
?>
			           </div>
           <div class="gy_tit4"><em></em>�Ƽ�����</div>
           <div class="news_ph">
              <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 3",6,24,0);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 3,7",6,24,0);
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

<script type="text/javascript" src="/statics/skin_js/comment.js"></script>
<script type="text/javascript" src="/statics/skin_js/news_xpgod.js"></script>
</body>
</html>