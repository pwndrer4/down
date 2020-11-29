// JavaScript Document

$(function(){
	$('.game_list .list_div:last,.rank_list .list_div:last,.zx_list .list_div').css('border-bottom-width',0);
	$(".back_top").click(function(){
		$('body,html').animate({scrollTop:0},100);
		return false;
	});
	$('.paih_list').each(function(index, element) {
		$(this).find('.list_div:last').css('border-bottom-width',0);
	});
	/*var imhwd=$('.mrd_pic').width();
	$('.mrd_pic ul li').css('width',imhwd);
	var imght=$('.mrd_pic li img').height();
	$('.mrd_pic').css('height',imght);*/	
	
	$('.az_ios:last,.news_list dl:last').addClass('last');
	
	/*$('.zx_list .list_div_rg a').click(function() {
		$('.fade').show();
		$('.login_box').show();
	});*/
	$('.close').live('click',function() {
		$('.fade').hide();
		$('.login_box').hide();
	});
	
	//
	$('.span_close').click(function() {
		$('.bt_gg').hide();
		$('.footer').css('margin-bottom',0);
	});
})

//
$(document).ready(function(e) {
	var imght=$('.bt_gg img').height();
	if(imght!=0){
		$('.bt_gg').css('height',imght);
		
	}
	var imghs=$('.span_close').height()/2;
	$('.span_close').css('margin-bottom',-imghs);
});

//选项卡鼠标经过切换效果---通用
function shows(c) {
	$('#test_' + c + '>li').click(function () {
		$(this).siblings().removeClass('last').end().addClass('last');
		var i = $(this).index() + 1;
		$('.' + c).addClass('hide');
		$('.' + c + '_' + i).removeClass('hide');
	});
}
$(function () {
	shows('paih_list');   //推荐栏目
});


//游戏简介

$(document).ready(function() {

$(function(){

	if($(".div_intro").height() < 144){

		$("#more-intro").hide();

	}else{

		$("#soft-intro-wrap").addClass('last');

	}

	//软件简介收展

	$("#more-intro-btn").toggle(function(){

		$(this).html("收起查看");

		$("#soft-intro-wrap").removeClass('last');

		$("#more-intro").addClass("changebj");

	},function(){

		$(this).html("查看详细");

		$("#soft-intro-wrap").addClass('last');

		$("#more-intro").removeClass("changebj");

	});

})

});


$(document).ready(function(){	

$(".mrd_bl").addClass("mrd_blon");

//pageClass

var pageClass = 1; 

if(pageClass==null){

  var pageClass=0;

}

//如果是pageClass==1

if( pageClass==1){

 //首页左右切换滚动插件

  $(function(){

   var oPic=$('#scrollPic').find('ul');

   var oImg=oPic.find('li');

   var oLen=oImg.length;//获取数量

   var oLi=parseInt(oImg.width());

   var prev=$("#prev");

   var next=$("#next");

	//var lis=parseInt(oli);
   oPic.width(oLen*oLi);//计算总长度

   var iNow=0;

   var iTimer=null;
   if(oLen>1){
	  prev.click(function(){

   if(iNow>0){  

		iNow--;

	}

	 ClickScroll();

	})

	next.click(function(){

	   if(iNow<2){ 

		   iNow++

		 }

		 ClickScroll();

	 }) 
	
	}
	else{next.addClass("mrd_bron"); }

   

	 function ClickScroll(){

		 iNow==0? prev.addClass('mrd_blon'):prev.removeClass('mrd_blon');

		 iNow==2?next.addClass("mrd_bron"):next.removeClass("mrd_bron");

		oPic.animate({left:-iNow*oLi})

	 }

  })

}

});

//评论框
/*$(function(){



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



		//this.style.color = $(this).attr('o-color');



	}).delegate('input[my-placeholder],textarea[my-placeholder]', "blur", function(){



		this.isFocus = false;



		var placeholder = $(this).attr('my-placeholder');



		if (this.value == "" || this.value == placeholder) {



			this.value = placeholder;



			$(this).attr('o-color', this.style.color||"");



			//this.style.color = "#545353";



		}



	});



	



	setInterval(function(){



		$('input[my-placeholder],textarea[my-placeholder]').each(function(){



			if (this.isFocus) return;



			var placeholder = $(this).attr('my-placeholder');



			if (!!placeholder && (this.value == "" || this.value==placeholder)) {



				this.value = placeholder;



				$(this).attr('o-color', this.style.color||"");



				//this.style.color = "#545353";



			}



		});



	}, 1000);



});*/

//友情链接
/*$(function(){
	var box=document.getElementById("div1"),can=true; 
	var ht=$('#div1').height();
	box.innerHTML+=box.innerHTML; 
	box.onmouseover=function(){can=false}; 
	box.onmouseout=function(){can=true}; 
	new function (){ 
	var stop=box.scrollTop%ht==0&&!can; 
	if(!stop)box.scrollTop==parseInt(box.scrollHeight/2)?box.scrollTop=0:box.scrollTop++; 
	setTimeout(arguments.callee,box.scrollTop%ht?10:1500); 
	}; 	
})
*/
//
window.onload = window.onscroll = window.onresize = function () {
    var ggt = $('.bt_gg img').height();
	var sjgElem = $('.footer');
	var bbwt = $('.bt_gg');
	
	sjgElem.css('margin-bottom', ggt+'px');
};

$(function(){
    $('.cmt_list dl dd').each(function(ind, ele) {
        $(this).find('.p_button a.reback').live('click',function(){
            $(ele).find('.input_box').toggle();
        });
    });
    $(".search .delete").live('click',function(){
        $(this).parent().find("input[name='q']").val('');
    });
})

//
$(document).ready(function() {
	$('.intro_txt img').css({'max-width':'100%','height':'auto','width':'auto'});
});

//
$(function(){
	$('.jjbox_txt .sjzz span:first').addClass('fir');	
})
function showxpgod(t){
if(t==1)
document.writeln("<script type=\"text/javascript\" src=\"/statics/m_v2/skin_js/shouji.js\"></script>");
else if(t==5)
document.writeln("<script type=\"text/javascript\" src=\"/statics/m_v2/skin_js/shouji2.js\"></script>");
}
/*document.writeln("<script type=\"text/javascript\" src=\"http://bd.33lc.com/cpro/ui/dm.js\"></script>");
(window.slotbydup = window.slotbydup || []).push({
 container:'ad1',
 id:'u2469604',
 at:'3',hn:'3',wn:'3',imgRatio:"1.7",scale:"20.16",pat:"6",tn:"template_inlay_all_mobile_lu_native",rss1:"#FFFFFF",adp:"1",ptt:"1",ptc:"%E7%8C%9C%E4%BD%A0%E6%84%9F%E5%85%B4%E8%B6%A3",ptFS:"14",ptFC:"#000000",ptBC:"#FFFFFF",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#FFFFFF",titSU:"0",ptbg:"70",ptp:"1"
});*/