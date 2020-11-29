<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>[!--pagetitle--] - <?=$public_r['add_webname']?></title>
  <meta name="keywords" content="[!--pagekey--]" />
  <meta name="description" content="[!--pagedes--]" />
  <link href="/statics/m_v2/skin_css/app_xpgod.css" type="text/css" rel="stylesheet">
  <script src="/statics/m_v2/skin_js/jquery-1.8.3.min.js" type="text/javascript"></script>
</head>
<body>
<div class="top">
  <div class="logo"><a href="/"><img src="/statics/m_v2/skin_img/logo.png" alt="" /></a></div>
</div>
<div class="menu">
  <ul>
    <li><a href="/">首页</a></li>
    <li><a href="/fjyx/" class="last">游戏</a></li>
    <li><a href="/sjrj/">软件</a></li>
    <li><a href="/news/">资讯</a></li>
  </ul>
</div>
<div class="game_list">
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--]
    </div>
<div class="pagess"><div class="page">[!--show.listpage--]</div></div>
<div class="footer">
  <a href="javascript:void(0);" class="back_top"><span><img src="/statics/m_v2/skin_img/top.png" alt="" /></span><em>返回顶部</em></a>
</div>
<script src="/statics/m_v2/skin_js/m_xpgod.js"></script>
<script type="text/javascript" src="/statics/skin2_js/m_Desk_DownLoading.js"></script>
<script type="text/javascript" src="/statics/skin2_js/new_ad.js"></script>
<div style="display: none">
<script>
  $(function(){
    $("#sortNav li").each(function(){
      var $this = $(this);
      var id = $this.attr('data-type');
      var sort = $this.attr('data-sort');
      $this.click(function(){
        $("#sortNav li").removeClass('last');
        $this.addClass('last');
        $(".game_list").hide();
        $("#"+id).show();
        $("#loadmore").attr('data-type',id);
        $("#loadmore").attr('data-sort',sort);
      });
    });
    $("#loadmore").click(function() {
      var page = $(this).attr("data");
      var wrap = $(this).attr('data-type');
      var order = $(this).attr('data-sort');
      autoLoad2("/shouji/index.php?m=content&c=phone_index&a=getgamesoftlist&pagesize=10&order="+order,wrap,"4",page);
    });
  });
</script>
</div>
</body>
</html>