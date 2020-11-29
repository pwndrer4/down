// JavaScript Document


$(document).ready(function(){
	$("#cs_right_bottom").css("z-index","9999");
	});
function show_search()

{
	if(document.getElementById('headSel').style.display=='none')
	{
		document.getElementById('headSel').style.display='block';
	}
	else
	{
		document.getElementById('headSel').style.display='none';
		};
	return false;
}
function drop_mouseout(pos){
	var posSel=document.getElementById(pos+"Sel").style.display;
	if(posSel=="block"){
		timer = setTimeout("drop_hide('"+pos+"')", 1000);
	}
}

function drop_hide(pos){
	document.getElementById(pos+"Sel").style.display="none";
}
function drop_mouseover(pos){
	try{window.clearTimeout(timer);}catch(e){}
}

function search_show(pos,sType,obj){
	var fm = document.topForm;	
	if(sType=="soft") {
		fm.nsid.value="9";
	} 
	if(sType=="news") {
		fm.nsid.value="1";
	}
	if(sType=="phone") {
		fm.nsid.value="10";
	}
    document.getElementById(pos+"Sel").style.display="none";
	document.getElementById(pos+"Slected").innerHTML=obj.innerHTML;
    fm.q.focus();
	try{window.clearTimeout(timer);}catch(e){}
	return false;
}

$(document).ready(function(){
	$(".laymain3 .list .box:first").addClass("hover");
	$(".laymain3 .list .box").mouseover(function(){
		$(".laymain3 .list .box").removeClass("hover");
		$(this).addClass("hover");
		});

	$(".softny3_r .blph ul li").mouseover(function(){
		$(".sytj ul li,.softny3_r .blph ul li").removeClass("hover");
		$(this).addClass("hover");
		});
    
	$(".soft_tab p").mouseover(function(){
        $(".soft_tab p").removeClass("cur");
        $(".se-table").hide();
        $(this).addClass("cur");
        var a= "se"+$(this).attr('id') + "a";
        $("." + a).show();
    });
	//分类更新
	$(".flgx_box .tabs ul li").mouseover(function(){
        $(".flgx_box .tabs ul li").removeClass("cur");
        $(".flgx_nr").css("display","none");
        $(this).addClass("cur");
        var g=$(this).attr('id') + "g";
        $("#" + g).css("display","block");
    });
	//热门新闻
	$(".laymain2 .hd ul li").mouseover(function(){
        $(".laymain2 .hd ul li").removeClass("cur");
        $(".news-list").css("display","none");
        $(this).addClass("cur");
        var n=$(this).attr('id') + "n";
        $("#" + n).css("display","block");
    });
	//文章首页资讯排行
	$(".art_main2 .gy_tit3 ul li").mouseover(function(){
        $(".art_main2 .gy_tit3 ul li").removeClass("cur");
        $(".art_main2 .news_ph ul").css("display","none");
        $(this).addClass("cur");
        var p=$(this).attr('id') + "p";
        $("#" + p).css("display","block");
    });

	 // 
	$(".rjlm_box .left dl,.zt_ny .rjk,.sytj ul li,.soft_box .soft").hover(function(){
	   $(this).addClass("hover");
	   },function(){
		$(this).removeClass("hover");
	   });
	   
	
	   $("#gy_tit4 ul li,#gy_tit3 ul li,#bt ul li,#bt2 ul li").mouseover(function(){
       var lid = $(this).index();
	   var s=$(this).parent().parent();
	   var par_class = $(s).attr("id");
	   $("#"+par_class+" ul li").removeClass("cur");
	   $(this).addClass("cur");
	   $("#"+par_class+"b" +" ul").hide();
	   lid++;
	   $("#"+par_class+"b" +" ul:nth-child("+lid+")").show(); 
	   });
	   
	   $(".select_tab ul li").mouseover(function(){
       var lid = $(this).index();
	   var s=$(this).parent().parent();
	   var n = $(s).next(); ;
	   $(s).find('li').removeClass("cur");
	   $(this).addClass("cur");
	   $(n).find("ul").hide();
	   lid++;
	   $(n).find("ul:nth-child("+lid+")").show(); 
	   });

	
	//
      $("#d1d,#d2d").each(function(i){
		$(this).find('ul:last').css("border","none");
	  });
	  $(" .softny3_r .blph ul").each(function(i){
		$(this).find('li:last').css("border","none");
	  });
	 

    $(".softny3_l .down_box .hd p").click(function(){
        $(".softny3_l .down_box .hd p").removeClass("cur");
        $(".softny3_l .down_box .down_l").css("display","none");
        $(this).addClass("cur");
        var d=$(this).attr('id') + "d";
        $("#" + d).css("display","block");
     });
	 
	 var tiet=document.getElementById("jietu");
      if(tiet!=null){
	  addLoadEvent(Focus());
      }
});

//返回顶部
window.onload = window.onscroll = window.onresize = function () {
    var zk=document.documentElement.clientWidth,
	    zw = (zk-1200)/2,
		top= $('.go_top');
		var left_w=zw-80;
	   top.css('right', left_w+'px');
	

};
        jQuery(function top(){
                //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
                jQuery(function () {
                    jQuery(window).scroll(function(){
                        if (jQuery(window).scrollTop()>150){
                            jQuery(".go_top").fadeIn(1000);
                        }
                        else
                        {
                            jQuery(".go_top").fadeOut(1000);
                        }
                    });
        
                    //当点击跳转链接后，回到页面顶部位置
        
                    jQuery(".go_top").click(function(){
                        jQuery('body,html').animate({scrollTop:0},500);
                        return false;
                    });
                });
            });


// 数据列表区滑动

$(function () {
    var arr_span = $("#k-spano span");
    var arr_ol = $("#xgrj .list");
    var n = 0, j = 0,i = 0, Timer_ol = {}, Timer_a = {},Timer_b = {};
    k1();
    // 页面加载之后自动运行滑动效果
    function k1() {
        if (arr_ol.length <= 1) {
            return;
        }
        Timer_ol = setInterval(function () {
            n++;
            if (n >arr_ol.length - 1) {

                n = 0;
            }
            chan(arr_span, n);
            startMove("xgrj", n);
        }, 5000);
    }
  
    // 控制滑动
    $(arr_span).mouseover(function () {
        clearInterval(Timer_ol);
        $(arr_span).removeClass("t");
        $(this).addClass("t");
        n = $(this).index();
        startMove("xgrj", n);
    }).mouseout(function () {
            k1();
        });
    $("#xgrj").mouseover(function () {
        clearInterval(Timer_ol);
    }).mouseout(function () {
            k1();
        });
    function chan(obj, n) {
        $(obj).removeClass("t");
        $(obj[n]).addClass("t");
    }
    function startMove(str, n) {
        $("#"+str).stop(true, true).animate({ left: -(1230*n)+"px", speed: 500 });
    }

});


// my-placeholder

$(function(){
	var val = $.fn.val;
	$.fn.val = function(){
		var x = val.apply(this, arguments);
		if (!!x && x==this.attr('my-placeholder')){
			return "";
		}
		return x;
	};
	$(document.body).delegate('input[my-placeholder],textarea[my-placeholder]', "focus", function(){
		this.isFocus = true;
		var placeholder = $(this).attr('my-placeholder');
		if (this.value == placeholder) this.value = "";
		this.style.color = $(this).attr('o-color');
		if (this.value != placeholder|| this.value != ""){
		this.style.color = "#333";
	}
	}).delegate('input[my-placeholder],textarea[my-placeholder]', "blur", function(){
		this.isFocus = false;
		var placeholder = $(this).attr('my-placeholder');
		if (this.value == "" || this.value == placeholder) {
			this.value = placeholder;
			$(this).attr('o-color', this.style.color||"");
			this.style.color = "#999";
		}
	});
	setInterval(function(){
		$('input[my-placeholder],textarea[my-placeholder]').each(function(){
			if (this.isFocus) return;
			var placeholder = $(this).attr('my-placeholder');
			if (!!placeholder && (this.value == "" || this.value==placeholder)) {
				this.value = placeholder;
				$(this).attr('o-color', this.style.color||"");
				this.style.color = "#999";
			}
		});
	}, 1000);

});
// 评论内容检测
$(function() {
		if ($(this.content).val()!==""){
			$(this).attr('my-placeholder','');
		}	   
});


$(document).ready(function(){
//表情
$(function(){
var d=document.getElementById("say");
if(d!=null){
	$('#say').qqFace({
		id : 'facebox', 
		assign:'saytext', 
		path:'arclist/'	//表情存放的路径
	});
}
var dd=document.getElementById("hfd");
if(dd!=null){
	$('#hfd').qqFace({
		id : 'facebox2', 
		assign:'hftext', 
		path:'arclist/'//表情存放的路径
	});
}
});

});

// 回复
$(function(){

  $(".comment_box dl .hud a.hf").live("click", function(){
	$(".comment_box dl .hfk").hide();
	$(this).parent().parent().find(".hfk").show();
	
	})		
				

});

//换一批
function show_anzhuo(id)

{

if(id=='anzhuo_A')
{
document.getElementById('anzhuo_B').style.display="none";
document.getElementById('anzhuo_A').style.display="block";
document.getElementById('anzhuo_huan').onclick=function(){
show_anzhuo('anzhuo_B');
};

}

else if(id=='anzhuo_B')
{
document.getElementById('anzhuo_A').style.display="none";
document.getElementById('anzhuo_B').style.display="block";
document.getElementById('anzhuo_huan').onclick=function(){
show_anzhuo('anzhuo_A');
};
}
}

function tabs(n){
         var len = 3;
         for (var i = 1; i <= len; i++)
         {
          document.getElementById('tab_a' + i).style.display = (i == n) ? 'block' : 'none';
          document.getElementById('tab_' + i).className = (i == n) ? 'cur' : 'none';
		  if(n==3){
			$('#tab_a3').tinyscrollbar();
			}
			if(n==2){
			$("#tab_a2").addClass("cur");
			}
         }
		 
		  
		
         }

$(document).ready(function(e) {
	var tab1=document.getElementById("tab_a1"),
	    tab2=document.getElementById("tab_a3");
       if(tab1!=null){
        $('#tab_a1').tinyscrollbar();
	   }
	   if(tab2!=null){
        $('#tab_a3').tinyscrollbar();
	   }
    });

//定位
 jQuery(document).ready(function($){
  $('#wypl').click(function(){$('html,body').animate({scrollTop:$('.comment').offset().top-10}, 100);});
  $('.softny1 .info .bnt').click(function(){$('html,body').animate({scrollTop:$('.softny3_l .down_box').offset().top-110}, 100);});
 });
 
 //收藏页面
  function AddFavorite(title, url) {
	var title = title || document.title;
	var url = url || window.location.href;
  try {
      window.external.addFavorite(url, title);
  }
  catch (e) {
     try {
      window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}

//百度统计代码
 var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0fa22e9186a72beac524bec07a296671";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();