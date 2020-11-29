<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title><?=$ecms_gr[ftitle]?>|<?=$ecms_gr[title]?> <?=$ecms_gr[banben]?> - <?=$public_r['add_webname']?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/statics/skin_css/news_xpgod.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/statics/skin_js/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="/statics/js/searchword.js"></script>
</head>

<body>
<a href="#top" class="go_top"><span>返回顶部</span></a>
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
			<option value="news" class="sedsa">资讯</option>
			<option value="soft" class="sedsa">软件</option>
			<option value="phone" class="sedsa">手机</option>
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
<div class="top_r"><script type="text/javascript" src="/d/js/acmsd/thea15.js"></script></div> 
   </div>
   <div class="nav">
      <div class="nav_box">
	 <a href="/"><span>首页</span><em></em></a>
	 <a href="/soft/" class="on"><span>软件下载</span><em></em></a>
         <a href="/rjzt/"><span>软件专题</span><em></em></a>
         <a href="/yxzt/"><span>游戏专题</span><em></em></a>
         <a href="/article/"><span>文章教程</span><em></em></a>
	 <a href="/sjrj/" target="_blank"><span>手机软件</span><em></em></a>
	 <a href="/fjyx/" target="_blank"><span>手机游戏</span><em></em></a>
	 <a href="/news/gonglue/" target="_blank"><span>手游攻略</span><em></em></a>
	 <a href="/shouji/phb.html" class="last" target="_blank"><span>手游排行榜</span><em></em></a>
		 
      </div>
   </div>
   <div class="nav_menu">
    <div class="menu">
      <a href="/soft/yyrj/wzsr/" target="_blank">输入法</a>
      <a href="/soft/wlrj/wlll/" target="_blank">浏览器</a>
	  <a href="/soft/mtbf/wlds/" target="_blank">办公软件</a>
      <a href="/soft/yyrj/bgrj/" target="_blank">办公软件</a>
      <a href="/soft/xtrj/yjqd/" target="_blank">驱动下载</a>
      <a href="/soft/safe/xtaq/" target="_blank">系统安全</a>
      <a href="/soft/mtbf/wlds/" target="_blank">网络电视</a>
      <a href="/soft/mtbf/spbf/" target="_blank">视频播放</a>
      <a href="/soft/mtbf/yybf/" target="_blank">音乐播放</a>
      <a href="/soft/sjwj/sjgl/" target="_blank">手机助手</a>
      <a href="/soft/txtx/tpcl/" target="_blank">图形软件</a>
      <a href="/soft/txtx/3dzz/" target="_blank">设计软件</a>
      <a href="/soft/yxzj/yxgj/" target="_blank">游戏工具</a>
   </div>
  </div>
</div>
<script type="text/javascript" src="/statics/js/dxzq.js"></script>
<div id="main">
   <div class="location">位置：<?=$grurl?><em>&gt;</em><?=$ecms_gr[title]?></div>
   <div class="softny1">
      <div class="name">
         <div id="view_name"><?=$ecms_gr[title]?> <?=$ecms_gr[banben]?></div>
         <div class="share">
             <p>分享到：</p>
             <div class="bdsharebuttonbox bdshare-button-style2-24" data-bd-bind="1450677490657">
             <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
             <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
             <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
             <a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a>
             <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
              </div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
         </div>
      </div>
      <div class="box">
        <div class="box_l">
           <div class="tbu">
		   <div class="soft_snap">
            <script src="/d/js/acmsd/thea7.js"></script>
			</div>
              <div class="info">
                  <ul>
				                      <li><p class="tit">软件大小：</p><p class="nr" id="ljdx"><?=$ecms_gr[daxiao]?></p></li>
                    <li><p class="tit">更新时间：</p><p class="nr" id="gxsj"><?=date('Y-m-d',$ecms_gr[newstime])?></p></li>
                    <li><p class="tit">软件授权：</p><p class="nr" id="rjsq"><?=$ecms_gr[shouquan]?></p></li>
                    <li><p class="tit">应用平台：</p><p class="nr"><?=$ecms_gr[pingtai]?></p></li>
                    <li><p class="tit">软件等级：</p><p class="stars star<?=$ecms_gr[pingfen]?>"></p></li>
                    <li><p class="tit">官方主页：</p><p class="nr">
					<?php if($navinfor[guanwang]==''|| $navinfor[guanwang]==null){ ?><a href="<?=$public_r['add_weburl']?>" target="_blank"><?=$public_r['add_weburl2']?></a><?php }else{ ?><a href="<?=$ecms_gr[guanwang]?>" target="_blank"><?=$ecms_gr[guanwang]?></a><?php } ?></p></li>
                    <li class="last">
                      <p class="tit">安全检测：</p>
                      <p class="nr">
                         <span></span><a>360安全卫士</a><em></em>
                      </p>
                      <p class="nr">
                         <span class="sd"></span><a>360杀毒</a><em></em>
                      </p>
                      <p class="nr">
                         <span class="dn"></span><a>电脑管家</a><em></em>
                      </p>
                    </li>
                  </ul>
                  <div class="bottom">
				                           <a class="bnt" href="#downdizhi"><em>本地下载</em><span class="count"><script src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1"></script></span></a>
                	   <div class="gg">
				<script src="/d/js/acmsd/thea10.js"></script>> 
                  </div>
                  </div>
              </div>
           </div>
           <div class="button">
             <a href="#wyplt" id="wypl"><span class="pl"></span>网友评论</a>
              <a href="/article/1041.html" target="_blank"><span class="down"></span>下载教程</a>
              <a href="javascript:;" onClick="AddFavorite('<?=$ecms_gr[title]?>');"><span class="sc"></span>收藏该页</a>
              <a href="javascript:;" onClick="copyBBS('soft');return false;" ><span class="zt"></span>一键转帖</a>
           </div>
           <div class="soft_rmsy">
             <div class="hd"><p class="icon"></p><p class="tit">热门手游</p></div>
             <div class="bd">
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_phone where  isgood in (1,2,3,4,5,6,7,8,9) and classid in (148,149,150,151,152,153,154,155,156,157,158) order by onclick desc limit 9",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><em class="cover_70"></em><span><?=$bqr['title']?></span></a></li>
<?php
}
}
?>
                           </ul>
            </div>
          </div>
        </div>
		  <div class="box_r">
		  	   <div class="soft_snap">
		 <script src="/d/js/acmsd/thea8.js"></script>
		          </div>
				  	   <div class="gg">
		 <script src="/d/js/acmsd/thea9.js"></script>
		   </div>
		   </div>
      </div>
   </div>
   <div class="softny3">
      <div class="softny3_l">
	        <div class="softny_main">
         <div class="tabs">
            <p class="cur" id="tab_1" onclick="tabs('1');"><span class="jianj"></span>软件简介</p>
            <?php if($navinfor['morepic']==null && $navinfor['morepic']==''){}else{ ?><p id="tab_2" onclick="tabs('2');"><span class="jiet"></span>软件截图</p><?php } ?><?php if($navinfor['newstext']==null && $navinfor['newstext']==''){}else{ ?><p id="tab_3" onclick="tabs('3');"><span class="anz"></span>安装教程</p><?php } ?></div>
         <link href="/statics/skin_css/common.css" type="text/css" rel="stylesheet">
         <div class="box" id="tab_a1" style="display:block;">
            <div class="scrollbar">
               <div class="track">
                 <div class="thumb">
                    <div class="end"></div>
                 </div>
              </div>
            </div>
           <div class="viewport">
           <div class="con overview" style="top:0px;" id="soft-intro"><?=$ecms_gr[ruanjianjieshao]?>
           </div>
          </div>
           <div class="xbtx"><?=$ecms_gr[tishi]?>
		   <p><em>【关键词】</em>
		   <? @sys_eShowTags('selfinfo',10,0,'',0,'','',0,'','tagname');?>
			  </p>
           </div>
          </div><?php if($navinfor['morepic']==null && $navinfor['morepic']==''){}else{ ?>

		            <div class="box" id="tab_a2">
          <script type="text/javascript" src="/statics/skin_js/jquery.scrollbar.js"></script>
          <script type="text/javascript" src="/statics/skin_js/jquery.slider.js"></script>
              <div class="showcase" id="showcase">
               <div class="scrollbar">
               <div class="s-box">
               <ul class="s-content">
                               <li class="picture active">
							   <?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);

for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
			<img src="<?=$spicr[1]?>"  alt="<?=$ecms_gr[title]?><?=$p+1?>"/>
<?php
}
?>
               <span class="bg"></span><span class="info"></span>
               </li>
                                </ul>
               </div>
               <div class="track" style="display: block;"><div style="position: absolute; width: 220.5263157894737px; left: 0px;"></div></div>
               </div>
               <div class="slider" style="">
               <a class="trigger" href="javascript:void(0);">切换</a>
               <a class="prev" href="javascript:void(0);">上一页</a>
               <a class="next" href="javascript:void(0);">下一页</a>
               <div class="s-box" itemprop="screenshots">
               <ul class="s-content">
			   <?php
$picr=explode(egetzy('rn'),$navinfor[morepic]);
$tushu =count($picr);

for($p=0;$p<count($picr);$p++)
{
$spicr=explode("::::::",$picr[$p]);
?>
			<li><img alt="" src="<?=$spicr[1]?>"  alt="<?=$ecms_gr[title]?><?=$p+1?>"/></li>
<?php
}
?>
                              </ul>
               </div>
               <div class="s-nav">
			                   <span class="picture"><span></span></span>
                              </div>
               </div>
               </div>
<script type="text/javascript" src="/statics/skin_js/content.js"></script>
          </div><?php } ?><?php if($navinfor['newstext']==null && $navinfor['newstext']==''){}else{ ?>
		  		  	           <div class="box" id="tab_a3" style="display:none;">
             <div class="scrollbar">
               <div class="track">
                 <div class="thumb">
                    <div class="end"></div>
                 </div>
              </div>
            </div>
            <div class="viewport">
             <div class="zzjc overview" style="top: 0px;">  
                <?=$ecms_gr[newstext]?>
             </div>
            </div>
          </div><?php } ?>
		          <script src="/statics/skin_js/tinyscrollbar.js"></script>
      </div>
         <div class="rmzt">
            <div class="gy_tit"><a href="http://www.xpgod.com/zhuanti/" target="_blank">更多&gt;&gt;</a> 热门专题</div>
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewszt limit 3',10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="/<?=$bqr['ztpath']?>/" target="_blank"><img src="<?=$bqr['ztimg']?>" alt="<?=$bqr['ztname']?>"><span class="tit"><?=$bqr['ztname']?></span><span class="bnt"><em>进入专题</em></span></a></li>
<?php
}
}
?>
			               </ul>
         </div>
		 <div class="gg" id="downdizhi">
		   <script src="/d/js/acmsd/thea11.js"></script>
		    </div>
		          <div class="down_box" id="con_dxz" data="1" softid="18301" name="qq">
            <div class="hd">
               <p class="cur" id="d1"><?=$ecms_gr[rjjx]?>下载地址</p>
              <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_phone where rjjx like '%$navinfor[rjjx]%' and (down<>'' or bendidown<>'') order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?> <p id="d2">Android版</p> <?php
}
}
?>              <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_phone where rjjx like '%$navinfor[rjjx]%' and (itunes<>'' or iosyy<>'' or iosyybendi<>'') order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?> <p id="d3">Ios版</p> <?php
}
}
?>           </div>
            <div class="bd">
               <div class="down_l" style="display:block;" id="d1d">   	
<?php
if($navinfor[bendidown]==''){
$downurll="\\/url.php?url=".base64_encode($navinfor[down]);
}else{
$downurll="\\/url.php?url=".base64_encode($navinfor[bendidown]);
}
?>
                  <ul class="clearfix">
                     <p><em></em>专用网络</p>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
                  <ul class="clearfix">
                     <p><em></em>电信下载</p>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
                  <ul class="clearfix">
                     <p><em></em>网通下载</p>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$downurll?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
               </div>
			   
			   
			   
			   
			   

			   
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_phone where rjjx like '%$navinfor[rjjx]%' and (down<>'' or bendidown<>'') order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[bendidown]==''){
$azzdd="\\/url.php?url=".base64_encode($bqr[down]);
}else{
$azzdd="\\/url.php?url=".base64_encode($bqr[bendidown]);
}
?>
<div class="down_l" style="display:none;" id="d2d">
                  <div class="yx">
                    <p class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt=""><span class="cover_65"></span></a></p>
                    <p class="info">
                       <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['rjjx']?>Android版</a>
                       <a class="bnt" href="<?=$bqsr['titleurl']?>" target="_blank">查看详情</a>
                    </p>
                  </div>
                  <ul class="clearfix">
                     <p><em></em>专用网络</p>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
                  <ul class="clearfix">
                     <p><em></em>电信下载</p>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
				    <ul class="clearfix">
                     <p><em></em>网通下载</p>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$azzdd?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
               </div><?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_phone where rjjx like '%$navinfor[rjjx]%' and (itunes<>'' or iosyy<>'' or iosyybendi<>'') order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr[itunes]=='' && $bqr[iosyy]==''){
$iossdd="\\/url.php?url=".base64_encode($bqr[iosyybendi]);
}else if($bqr[iosyybendi]=='' && $bqr[itunes]==''){
$iossdd="\\/url.php?url=".base64_encode($bqr[iosyy]);
}else{
$iossdd="\\/url.php?url=".base64_encode($bqr[itunes]);
}
?>
<div class="down_l" style="display:none;" id="d3d">
                  <div class="yx">
                    <p class="pic"><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt=""><span class="cover_65"></span></a></p>
                    <p class="info">
                       <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['rjjx']?>Ios版</a>
                       <a class="bnt" href="<?=$bqsr['titleurl']?>" target="_blank">查看详情</a>
                    </p>
                  </div>
                  <ul class="clearfix">
                     <p><em></em>专用网络</p>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
                  <ul class="clearfix">
                     <p><em></em>电信下载</p>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
				    <ul class="clearfix">
                     <p><em></em>网通下载</p>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>迅雷高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>旋风高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>电信高速下载</a></li>
                     <li><a href="<?=$iossdd?>" target="_blank"><span></span>网通高速下载</a></li>
                  </ul>
               </div><?php
}
}
?>	   
			   			   <div class="down_r">
			   	   <div class="gg1">
			   <script src="/d/js/acmsd/thea12.js"></script>
			   </div>
			     <div class="gg2">
			   <script src="/d/js/acmsd/thea13.js"></script>
               </div>
               </div>
            </div>
         </div>
         <div class="bottom">
		 <?php $nume=$empire->gettotal("select count(*) as total from phome_ecms_news where pcid=".$navinfor['id']); if($nume==0){}else{ ?>
            <div class="gy_tit">相关文章</div>
			 			                     				             <div class="xgwz">
               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where pcid='$navinfor[id]' order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<dl>
                 <dt><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"></a></dt>
                 <dd>
                   <p class="tit"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
                   <p class="xx">
                   <span class="time"><?=date('Y-m-d',$bqr[newstime])?></span>
                   </p>
                   <div class="info"><?=esub($bqr[smalltext],30)?></div>
                 </dd>
               </dl>
			<?php
}
}
?>
               <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_news where pcid='$navinfor[id]' order by newstime desc limit 1,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<li><span><?=date('Y-m-d',$bqr[newstime])?></span><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></li>
<?php
}
}
?>
               			                 </ul>
            </div><?php } ?>
<div class="comment" style="margin-top:0px;">
<!--高速版-->
<div id="SOHUCS"></div>
<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
    window.changyan.api.config({
        appid: 'cyrbiKxmG',
        conf: 'prod_8e11cfb50c20f2a0b31d59926e9e42c7'
    });
</script> 
            </div>
         </div>
      </div>
      <div class="softny3_r">
	        <div class="art_lmr softny2_r">
         <div class="gy_tit">分类导航</div>
         <div class="fllb">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_enewsclass where bclassid='".$class_r[$GLOBALS[navclassid]][bclassid]."' order by myorder,classid asc ",0,24,0);
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
                        </div>
          <div class="gy_tit">
               <a class="tj_hyp" href="javascript:void(0);" id="anzhuo_huan" onclick="show_anzhuo('anzhuo_B')">换一批</a>
               热门下载
          </div>
          <div class="sytj">

           		                  <ul id="anzhuo_A" style="display:block;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where  isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 9",6,24,0);
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
                 <a class="down" href="<?=$bqsr['titleurl']?>" target="_blank">立即下载</a>
                 </li>
<?php
}
}
?>	
				 				  				                </ul>
               <ul id="anzhuo_B" style="display:none;">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where  isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 9,9",6,24,0);
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
                 <a class="down" href="<?=$bqsr['titleurl']?>" target="_blank">立即下载</a>
                 </li>
<?php
}
}
?>					                 </ul>
           </div>
      </div>
         <div class="blph">
            <div class="gy_tit">本类排行</div>
            <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="hover">
                  <p class="top">
                     <a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover52"></span></a>
                     <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                     <span class="stars star5"></span>
                     <span class="time">更新于<?=date('Y-m-d',$bqr[newstime])?></span>	
                     <a class="bnt" href="<?=$bqsr['titleurl']?>" target="_blank">点击下载</a>
                  </p>
                  <p class="text"><?=$bqr['dianping']?></p>
               </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid='".$GLOBALS[navclassid]."' order by onclick desc limit 1,4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li>
                  <p class="top">
                     <a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span class="cover52"></span></a>
                     <a class="tit" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
                     <span class="stars star5"></span>
                     <span class="time">更新于<?=date('Y-m-d',$bqr[newstime])?></span>	
                     <a class="bnt" href="<?=$bqsr['titleurl']?>" target="_blank">点击下载</a>
                  </p>
                  <p class="text"><?=$bqr['dianping']?></p>
               </li>
<?php
}
}
?>
			                                   </ul>
         </div>
		 	   <div class="gg">
		    <script src="/d/js/acmsd/thea14.js"></script>
         </div>
         <div class="rmrj">
            <div class="gy_tit">热门软件</div>
            <ul class="clearfix">	 
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft where classid='".$GLOBALS[navclassid]."' and isgood in (1,2,3,4,5,6,7,8,9) order by onclick desc limit 10",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<li><a href="<?=$bqsr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>"><span><?=$bqr['title']?></span><em class="cover24"></em></a></li>
<?php
}
}
?>               			   
            </ul>
         </div>
         <div class="rmgjc">
            <div class="gy_tit">热门关键词</div>
            <div class="box">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewstags order by num desc limit 20",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
	 if($bqno==1){$tagno=1;}
else if($bqno==2){$tagno=2;}
else if($bqno==3){$tagno=3;}
else if($bqno==4){$tagno=1;}
else if($bqno==5){$tagno=2;}
else if($bqno==6){$tagno=3;}
else if($bqno==6){$tagno=1;}
else if($bqno==7){$tagno=2;}
else if($bqno==8){$tagno=3;}
else if($bqno==9){$tagno=1;}
else if($bqno==10){$tagno=2;}
else if($bqno==11){$tagno=3;}
else if($bqno==12){$tagno=1;}
else if($bqno==13){$tagno=2;}
else if($bqno==14){$tagno=3;}
else if($bqno==15){$tagno=1;}
else if($bqno==16){$tagno=2;}
else if($bqno==17){$tagno=3;}
else if($bqno==18){$tagno=1;}
else if($bqno==19){$tagno=2;}
else if($bqno==20){$tagno=3;}
?>
<a class="ys<?=$tagno?>" href="/e/tags/?tagname=<?=$bqr['tagname']?>" target="_blank"><?=$bqr['tagname']?></a>
<?php
}
}
?>
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
			<a href="/support/about.html" rel="nofollow" target="_blank" >关于本站</a><span>|</span>
			<a href="/support/help.html" rel="nofollow" target="_blank" >网站帮助</a><span>|</span>
			<a href="/support/advertise.html" rel="nofollow" target="_blank" >广告合作</a><span>|</span>
			<a href="/support/rjfb.html" rel="nofollow" target="_blank" >软件发布</a><span>|</span>
			<a href="/support/declare.html" rel="nofollow" target="_blank" >下载声明</a><span>|</span>
			<a href="/support/link.html" target="_blank">友情连接</a><span>|</span>
			<a href="/sitemap.html" target="_blank" >网站地图</a><span>|</span>
			<a href="/sitemaps.xml" target="_blank" >网站RSS</a>
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
<script type="text/javascript" src="/statics/skin_js/reprint.js"></script>
</body>
</html>