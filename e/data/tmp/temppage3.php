<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>��վ����</title>
<meta name="description" content="<?=$public_r['add_webname']?>�Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!">
<meta name="keywords" content="��վ����">
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
<div id="wrap" class="w960">	<div id="header" class="cf"> </div>
   <div class="location">
       λ�ã�<a href="/">��ҳ</a><em>&gt;</em><a href="/support/help.html">��վ����</a><em>&gt;</em>   </div>      
<div id="container">
  		<div id="mainBody" class="clearfix">
        	<div class="main">
            	<h2>��վ����</h2>
                <p><font color="#ff8c00" face="Webdings">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">һ��������������</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1����ֱ�ӵ��<?=$public_r['add_webname']?>���ṩ�����ص㣬������Ҽ�ѡ��Ŀ�����Ϊ��Ȼ��ѡ���������������ļ��У����������ظ������</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2��Ϊ�˴ﵽ���������ٶȣ������Ƽ��û�ʹ�á����ʿ쳵[Flashget]���ȶ��߳����ع��ߡ�ʹ�÷���������Ҽ����Ҫ���ص��ļ���ѡ��ʹ�á����ʿ쳵�����ء�<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">���������������չ����.ASP��ʲô�򿪣�</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1����������˵һ��,<?=$public_r['add_webname']?>�����������������".ASP"Ϊ��չ����,������»�ȥ���������ľ��ǳ�����,������������á����ʿ쳵������ʱ������,���ںܶ�����Ҳ���������.�������:���������������ʱ������һ��"������(E)",����Ҫ�޸���,�������ػ�ȥ������ļ����Ͳ����д����!<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">����Ϊʲô�޷����������</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1�����ڸ����ط�������ʱ�������أ��޷����ܸ���������û������Ժ�����һ�λ��߸������������ص�������ء�</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2��������Ҫ���ص�������ڸ����У����˻ص����������ҳ������ˢ�º��ٽ�������Ժ������ء�</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;3��������ϰ취���޷��������أ����������������ҳ������������֪ͨ����Ա��<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">�ġ���ν�������ѹ�����Ľ�ѹ��</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1����ȷ������������,�ļ���СӦ�ø���ҳ��д��һ��.</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2��[<?=$public_r['add_webname']?>]�ںܶ��������ZIP��RAR��ʽ���ļ�����ҿ������ذ�װ WinRAR3.0���ϰ汾 �Ƚ�ѹ���������н�ѹ����.iso�ļ������������!</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;3��վ���ṩ���������Ҫ��ѹ����δע��ʱȫ��Ϊ:newasp.net</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;4�����ڷ־��ļ��Ľ�ѹ��:���Ƚ����з־��ļ����ص�ͬһ���ļ���,�ҵ�***.part01.rar˫����ѹ����.<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">�塢�����ص����Ϊʲô�޷���ȷ��װ��ʹ�ã�</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1����������İ�װ��ʹ�÷���������ֱ�ӽ��������Ľ���ҳ�������ṩ�˸�������ߵ���ϵEmail����ҳ��ַ��<span class="Apple-converted-space">&nbsp;</span></span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<font color="#ff8c00" face="Webdings" style="font-weight: normal; font-size: 12px; word-spacing: 0px; text-transform: none; word-break: break-all; text-indent: 0px; line-height: 16px; font-style: normal; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); font-variant: normal; word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">8</font><span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">�����е�������غ�Ϊʲô����ʾ�в�����ľ��</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;1��[<?=$public_r['add_webname']?>]��֤վ���ṩ�����п�������Դ������ȵȣ����ǰ���ԭ�����ṩ����վδ�����κθĶ���</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;2����Щ����硰QQ������̽������������͵���ȣ����������Ĺ��ܾ����������ľ�����������������ǽ��������������������û�������ʹ��ǰ����˼��ͬʱ[<?=$public_r['add_webname']?>]Ҳ���е��û���ʹ����Щ������Դ���Լ�����������κ���ʽ����ʧ���˺���</span><br style="word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); word-break: break-all; text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); word-wrap: break-word; orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">
<span style="display: inline! important; float: none; word-spacing: 0px; font: 12px/16px verdana, arial, ����, sans-serif; text-transform: none; color: rgb(101,109,119); text-indent: 0px; white-space: normal; letter-spacing: normal; background-color: rgb(255,255,255); orphans: 2; widows: 2; webkit-text-size-adjust: auto; webkit-text-stroke-width: 0px">&nbsp;&nbsp;&nbsp;&nbsp;3��ע��:������������һʱ��鶾!�����̫��,վ��û���ܶ������,���Լ�С�ĵ�!лл����!</span></p>
            </div>
            <div class="side">
            	<ul>
                	<li><a href="/support/about.html">���ڱ�վ</a></li>
                    <li><a href="/support/help.html" class="cur">��վ����</a></li>
                    <li><a href="/support/advertise.html">������</a></li>
                    <li><a href="/support/rjfb.html">�������</a></li>
                    <li><a href="/support/declare.html">��������</a></li>
                    <li><a href="/support/link.html">��������</a></li>
                    <li><a href="/sitemap.html">��վ��ͼ</a></li>
                    
                    
                </ul>
            </div>
                        
        </div><!--end mainBody-->  
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