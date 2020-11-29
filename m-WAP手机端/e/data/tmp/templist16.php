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
<link href="/statics/m_v2/skin_css/m_xpgod.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="top">
  <div class="logo"><a href="/"><img src="/statics/m_v2/skin_img/logo.png" alt="" /></a></div>
</div>
<div class="menu">
  <ul>
    <li><a href="/">��ҳ</a></li>
    <li><a href="/fjyx/">��Ϸ</a></li>
    <li><a href="/sjrj/">���</a></li>
    <li><a href="/news/" class="last">��Ѷ</a></li>
  </ul>
</div>
<div class="news_list" id="newsList">
[!--empirenews.listtemp--]
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5-->
[!--empirenews.listtemp--] 
    </div>
<ul class="pages" style="display:none;">[!--show.listpage--]</ul>
<div class="footer">
  <a href="javascript:void(0);" class="back_top"><span><img src="/statics/m_v2/skin_img/top.png" alt="" /></span><em>���ض���</em></a>
</div>
<script src="/statics/m_v2/skin_js/m_xpgod.js"></script>
<script type="text/javascript" src="/statics/skin2_js/m_Desk_DownLoading.js"></script>
<div style="display: none">
<script type="text/javascript" src="/statics/skin2_js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/statics/skin2_js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="/statics/skin2_js/jquery.infinitescroll.min.js"></script>
<script type="text/javascript">
$(function(){
    var $container = $('.news_list');
	var tid=2471;
	var tongjiUrl = "";
	$('<iframe id="iframe" src="" style="display:none;"></iframe>').appendTo($('body'));
	var iframe=$('#iframe') , pagenum = $("#pagenum");
    $container.infinitescroll({
      navSelector  : '.pages',    // selector for the paged navigation 
      nextSelector : 'span + a',  // selector for the NEXT link (to page 2)
      itemSelector : '.middle_mode',     // selector for all items you'll retrieve
	  extraScrollPx: 50,
      loading: {
          finishedMsg: 'û��������.',
          msgText: '<em>�ף�����Ϊ�����ظ���...</em>',
		  img:'/resource/toutiao_web/static/pkg/load0.png'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
        var $newElems = $( newElements ).css({ opacity: 0 });
        $newElems.imagesLoaded(function(){
		 $container.append( $newElems );
         $container.masonry( 'appended', $newElems, true );
		 $newElems.animate({ opacity: 1 },"fast",function(){$("#infscr-loading").fadeOut('normal');});
		 var page;
		 page=pagenum.data("page")?pagenum.data("page"):1;
		 page++;
		 pagenum.data("page",page);
		 iframe.attr("src",tongjiUrl + "#tid=" + tid + "&amp;page=" + page);
		 setTimeout(function(){document.getElementById("iframe").contentWindow.location.reload()},3000);
		 pagenum.html(page);
        }); 
      }
    );
	$container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.middle_mode',
		columnWidth :0,
		isAnimated:true, //ʹ��jquery�Ĳ��ֱ仯���Ƿ����ö���Ч��
		gutterWidth:20,//�еļ�϶
		isFitWidth:true,//����Ӧ���
		isResizable:true
      });
      $container.css("visibility","visible");
    });
	nav(tid);
});
nav(2471);
//navcon(2471);
</script>

</div>
</body>
</html>