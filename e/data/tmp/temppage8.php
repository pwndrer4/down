<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>�������</title>
<meta name="description" content="<?=$public_r['add_webname']?>�Ǹ�רҵ�����������վ,��ɱ�����,�����,������Ϸ,�ֻ����Ϊ��,Ϊ�����������ߴ���������غ�ѧϰ����԰!">
<meta name="keywords" content="�������">
<link href="/statics/skin_css/fb_xpgod.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/css/hySoftPub.css" />
<script type="text/javascript" src="/statics/skin_js/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="/statics/js/searchword.js"></script>
</head>
<body>
<a href="#top" class="go_top"><span>���ض���</span></a> <div class="top_bg">
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
<div id="wrap" class="w960">
  <div id="header" class="cf"> </div>
  <div class="location"> λ�ã�<a href="/">��ҳ</a><em>&gt;</em><a href="/support/rjfb.html">�������</a><em>&gt;</em> </div>
  <div id="container">
    <div id="mainBody" class="clearfix">
      <div class="main">
        <h2>�������</h2>
        <div class="hySpIn">
          <div class="hySpMsg">��ʾ��<span>*</span>��Ϊ���� </div>
          <form name="add" method="POST" enctype="multipart/form-data" action="/e/DoInfo/ecms.php" onSubmit="return EmpireCMSQInfoPostFun(document.add,'9');">
            <input type="hidden" name="ecmsfrom" value="/support/rjfb.html">
            <input type="hidden" value="MAddInfo" name="enews">
            <input id="ww" type="hidden" value="" name="classid">
            <input name="id" type="hidden" id="id" value="0">
            <input type="hidden" value="1464404742" name="filepass">
            <input name="mid" type="hidden" id="mid" value="9">
            <ul class="hySoftForm">
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>������ƣ�</div>
                  <div class="hySfText">
                    <input type="text" name="title" class="text1 wenBen">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="������Ʋ���Ϊ��"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">�� �� �⣺</div>
                  <div class="hySfText">
                    <input type="text" name="ftitle" class="text1">
                  </div>
                </div>
              </li>
			  <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">�� �� �ʣ�</div>
                  <div class="hySfText">
                    <input type="text" name="keyboard" class="text1">
                  </div>
				 <div style="clear:both; margin-left:203px; padding:5px;">����ö��š�,�����������磺QQ,��ѶQQ,��ѶQQ����</div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">��д���ƣ�</div>
                  <div class="hySfText">
                    <input type="text" name="rjjx" class="text1">
                  </div>
                  <div style="clear:both; margin-left:203px; padding:5px;">���磺���°�ǧţ�ٷ����أ���д�ɣ�ǧţ</div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">�� �� �ţ�</div>
                  <div class="hySfText">
                    <input type="text" name="banben" class="text1">
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">һ�仰������</div>
                  <div class="hySfText">
                    <input type="text" name="dianping" class="text1">
                  </div>
                </div>
              </li>
              <li style="display:none;">
                <div class="hySoftFormIn">
                  <div class="hySfTitle">���л�����</div>
                  <div class="hySfText">
                    <input type="text" name="pingtai" class="text1" value="Vista/winXP/win7/win8">
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>�������ͣ�</div>
                  <div class="hySfRadio"> <span>
                    <label>
                    <input type="radio" name="yuyan" value="��������" class="radio1">
                    ��������</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="yuyan" checked="checked" value="Ӣ��" class="radio1">
                    Ӣ��</label>
                    </span> </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>������֣�</div>
                  <div class="hySfRadio"> <span>
                    <label>
                    <input type="radio" name="pingfen" value="1" class="radio1">
                    1��</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="2" class="radio1">
                    2��</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="3" class="radio1" checked="checked">
                    3��</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="4" class="radio1">
                    4��</label>
                    </span> <span>
                    <label>
                    <input type="radio" name="pingfen" value="5" class="radio1">
                    5��</label>
                    </span> </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>�����Ȩ��</div>
                  <div class="hySfRadio"> <span>
                    <label>
                    <input name="shouquan" type="radio" checked="checked" value="��Ѱ�" class="radio1">
                    ��Ѱ�</label>
                    </span> <span>
                    <label>
                    <input name="shouquan" type="radio" value="�ٷ���" class="radio1">
                    �ٷ���</label>
                    </span> <span>
                    <label>
                    <input name="shouquan" type="radio" value="��ɫ��" class="radio1">
                    ��ɫ��</label>
                    </span> <span>
                    <label>
                    <input name="shouquan" type="radio" value="�ƽ��" class="radio1">
                    �ƽ��</label>
                    </span> </div>
                </div>
              </li>
              <script>
function ok(ss){
var elm=document.getElementById('ww')
elm.value=ss.value
}
</script>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>������</div>
                  <div class="hySfSelect">
                    <select name="class1" onChange="ok(this)" style="width:130px" class="wenBen" id="softtype">
                      <option value="0">ѡ�����</option>
                      <option value="15">&nbsp;&nbsp;|-�������</option>
                      <option value="16" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�����罻</option>
                      <option value="17" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�������</option>
                      <option value="18" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���ع���</option>
                      <option value="19" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�������</option>
                      <option value="20" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���̹���</option>
                      <option value="21" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-������</option>
                      <option value="22" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Զ�̿���</option>
                      <option value="23" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�����ʼ�</option>
                      <option value="24" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��վ����</option>
                      <option value="25" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="26" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���縨��</option>
                      <option value="27" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="28">&nbsp;&nbsp;|-Ӧ�����</option>
                      <option value="29" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���湤��</option>
                      <option value="30" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�����Ķ�</option>
                      <option value="31" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="32" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-����ת��</option>
                      <option value="33" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ı��༭</option>
                      <option value="34" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ļ�����</option>
                      <option value="35" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-������</option>
                      <option value="36" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ƾ����</option>
                      <option value="37" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���ݻָ�</option>
                      <option value="38" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�칫���</option>
                      <option value="39" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ѹ����ѹ</option>
                      <option value="40" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Ӧ������</option>
                      <option value="41">&nbsp;&nbsp;|-ϵͳ���</option>
                      <option value="42" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Ӳ������</option>
                      <option value="43" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ϵͳ����</option>
                      <option value="44" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���ݻ�ԭ</option>
                      <option value="45" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ϵͳ�Ż�</option>
                      <option value="46" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ж������</option>
                      <option value="47" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-����ʱ��</option>
                      <option value="48" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-PE������</option>
                      <option value="49" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ϵͳ����</option>
                      <option value="51">&nbsp;&nbsp;|-��ȫ���</option>
                      <option value="52" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ɱ�����</option>
                      <option value="53" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-����ǽ��</option>
                      <option value="54" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ϵͳ��ȫ</option>
                      <option value="55" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���簲ȫ</option>
                      <option value="56" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���빤��</option>
                      <option value="57" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���ܽ���</option>
                      <option value="58" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-רɱ����</option>
                      <option value="59" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��ȫ����</option>
                      <option value="60">&nbsp;&nbsp;|-ý�岥��</option>
                      <option value="61" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�������</option>
                      <option value="62" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ƶ����</option>
                      <option value="63" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���ֲ���</option>
                      <option value="64" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ƶת��</option>
                      <option value="65" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ƶת��</option>
                      <option value="66" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���̿�¼</option>
                      <option value="67" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Ӱ������</option>
                      <option value="68" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-¼�����</option>
                      <option value="69" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ļ¼��</option>
                      <option value="70" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="71" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ý������</option>
                      <option value="72">&nbsp;&nbsp;|-ͼ��ͼ��</option>
                      <option value="73" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ͼƬ���</option>
                      <option value="74" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ͼƬ����</option>
                      <option value="75" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�������</option>
                      <option value="76" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ͼƬת��</option>
                      <option value="77" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="78" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ͼ���ͼ</option>
                      <option value="79" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-3D������</option>
                      <option value="80" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ͼ�깤��</option>
                      <option value="81" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ͼ������</option>
                      <option value="82">&nbsp;&nbsp;|-�ֻ����</option>
                      <option value="83" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ֻ�����</option>
                      <option value="84" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ˢ������</option>
                      <option value="85" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ֻ�����</option>
                      <option value="86" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��׿��Ϸ</option>
                      <option value="87" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ƻ����Ϸ</option>
                      <option value="88" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-WP ��Ϸ</option>
                      <option value="89" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��׿���</option>
                      <option value="90" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ƻ�����</option>
                      <option value="91" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-WP ���</option>
                      <option value="92">&nbsp;&nbsp;|-��Ϸ֮��</option>
                      <option value="93" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ϸƽ̨</option>
                      <option value="94" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-������Ϸ</option>
                      <option value="95" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="96" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�������</option>
                      <option value="97" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��ɫ����</option>
                      <option value="98" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-����ð��</option>
                      <option value="99" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="100" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Ȥζ����</option>
                      <option value="101" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-������Ϸ</option>
                      <option value="102" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ֻ�ģ��</option>
                      <option value="103" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Flash��Ϸ</option>
                      <option value="104" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ϸ����</option>
                      <option value="105">&nbsp;&nbsp;|-�����ֽ</option>
                      <option value="106" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-win8����</option>
                      <option value="107" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-XP ����</option>
                      <option value="108" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-win7����</option>
                      <option value="109" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-˧����Ů</option>
                      <option value="110" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ȼ���</option>
                      <option value="111" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��������</option>
                      <option value="112" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-������ֽ</option>
                      <option value="113" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-Ӱ�ӱ�ֽ</option>
                      <option value="114" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��ͨ����</option>
                      <option value="115" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ʊ�ֽ</option>
                      <option value="116" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��Ϸ��ֽ</option>
                      <option value="117" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ϵͳ����</option>
                      <option value="118">&nbsp;&nbsp;|-���Խ̳�</option>
                      <option value="119" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�ڿͼ���</option>
                      <option value="120" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-������־</option>
                      <option value="121" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-�칫����</option>
                      <option value="122" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��̳̽�</option>
                      <option value="123" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��ҳ���</option>
                      <option value="124" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ϵͳ��װ</option>
                      <option value="125" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-ʹ��˵��</option>
                      <option value="126" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-���簲ȫ</option>
                      <option value="127" style="background:#99C4E3">&nbsp;&nbsp;&nbsp;&nbsp;|-��ѧ��Ʒ</option>
                    </select>
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="��ѡ��������"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle">����ٷ���վ��</div>
                  <div class="hySfText">
                    <input type="text" name="guanwang" class="text1">
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>�ٷ����ص�ַ��</div>
                  <div class="hySfText">
                    <input type="text" name="down" class="text1 wenBen">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="�ٷ����ص�ַ����Ϊ��"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span></span>�����С��</div>
                  <div class="hySfText">
                    <input type="text" name="daxiao" class="text2">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" title="�����С����Ϊ��"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>������ܣ�</div>
                  <div class="hySfEditor">
                    <textarea id="newstext" name="ruanjianjieshao" style="width:600px;height:228px;"></textarea>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span></span>���Logo��</div>
                  <div class="hySfText">
                    <input type="file" name="titlepicfile" size="45">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" name="qq" title="���Logo����Ϊ��"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span></span>�����ͼ��</div>
                  <div class="hySfText">
                    <input type="file" name="morepic" size="45">
                  </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" name="qq" title="�����ͼ����Ϊ��"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySoftFormIn">
                  <div class="hySfTitle"><span>*</span>��֤�룺</div>
                  <div class="hySfText">
                    <input type="text" name="key" yz="1" class="text2 wenBen">
                  </div>
                  <div class="hySfYzm"> <span><img src="/e/ShowKey/?v=info" name="infoKeyImg" id="infoKeyImg" onClick="infoKeyImg.src='/e/ShowKey/?v=info&amp;t='+Math.random()" title="�������,���ˢ��"> </span> </div>
                  <div class="hySfError">
                    <div class="hySfMsg1"><b></b><span class="tishi" name="qq" title="��֤�����"></span></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hySfSubmit">
                  <input class="tgfabu" type="submit" name="addnews" value="��������">
                </div>
              </li>
              <div class="clear"></div>
            </ul>
          </form>
        </div>
      </div>
      <div class="side">
        <ul>
          <li><a href="/support/about.html">���ڱ�վ</a></li>
          <li><a href="/support/help.html">��վ����</a></li>
          <li><a href="/support/advertise.html">������</a></li>
          <li><a href="/support/rjfb.html" class="cur">�������</a></li>
          <li><a href="/support/declare.html">��������</a></li>
          <li><a href="/support/link.html">��������</a></li>
          <li><a href="/sitemap.html">��վ��ͼ</a></li>
        </ul>
      </div>
    </div>
    <!--end mainBody-->
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