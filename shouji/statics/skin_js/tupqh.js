// JavaScript Document
$(function(){
					var $banner=$('.banner');
					var $banner_ul=$('.banner-img');
					var $btn=$('.banner-btn');
					var $btn_a=$btn.find('a')
					var v_width=$banner.width();
					
					var page=1;
					
					var timer=null;
					var btnClass=null;
			
					var page_count=$banner_ul.find('li').length;//把这个值赋给小圆点的个数
					
					var banner_cir="<li class='selected'><a href='#'></a></li>";
					for(var i=1;i<page_count;i++){
							//动态添加小圆点
							banner_cir+="<li><a href='#'></a></li>";
							}
					$('.banner-circle').append(banner_cir);
					
					var cirLeft=$('.banner-circle').width()*(-0.5);
					$('.banner-circle').css({'marginLeft':cirLeft});
					
					$banner_ul.width(page_count*v_width);
					
					function move(obj,classname){
							//手动及自动播放
					if(!$banner_ul.is(':animated')){
							if(classname=='prevBtn'){
									if(page==1){
													$banner_ul.animate({left:-v_width*(page_count-1)});
													page=page_count; 
													cirMove();
									}
									else{
													$banner_ul.animate({left:'+='+v_width},"slow");
													page--;
													cirMove();
									}        
							}
							else{
									if(page==page_count){
													$banner_ul.animate({left:0});
													page=1;
													cirMove();
											}
									else{
													$banner_ul.animate({left:'-='+v_width},"slow");
													page++;
													cirMove();
											}
									}
							}
					}
					
					function cirMove(){
							//检测page的值，使当前的page与selected的小圆点一致
							$('.banner-circle li').eq(page-1).addClass('selected')
																											.siblings().removeClass('selected');
					}
					
					$banner.mouseover(function(){
							$btn.css({'display':'block'});
							clearInterval(timer);
											}).mouseout(function(){
							$btn.css({'display':'none'});                
							clearInterval(timer);
							timer=setInterval(move,3000);
											}).trigger("mouseout");//激活自动播放
			
					$btn_a.mouseover(function(){
							//实现透明渐变，阻止冒泡
									$(this).animate({opacity:0.8},'fast');
									$btn.css({'display':'block'});
									 return false;
							}).mouseleave(function(){
									$(this).animate({opacity:0.7},'fast');
									$btn.css({'display':'none'});
									 return false;
							}).click(function(){
									//手动点击清除计时器
									btnClass=this.className;
									clearInterval(timer);
									timer=setInterval(move,3000);
									move($(this),this.className);
							});
							
					$('.banner-circle li').live('mouseover',function(){
									var index=$('.banner-circle li').index(this);
									$banner_ul.animate({left:-v_width*index},'slow');
									page=index+1;
									cirMove();
							});
			});
			
			

//排行榜经过显示大图
			$(document).ready(function(){
			$(".third_ul_main .third_li_main").mouseover(function(){
			$(".third_ul_main .third_li_main .third_li_img").css("display","none");
				$(this).find(".third_li_img").css("display","block");
				});
			$(".forth_ul_main .forth_li_main").mouseover(function(){
			$(".forth_ul_main .forth_li_main .forth_li_img").css("display","none");
				$(this).find(".forth_li_img").css("display","block");
				});
			$(".rank_ul_main1 .rank_li_main:first .rank_li_img").css("display","block");
				$(".rank_ul_main1 .rank_li_main").mouseover(function(){
				$(".rank_ul_main1 .rank_li_main .rank_li_img").css("display","none");
					$(this).find(".rank_li_img").css("display","block");
				});
				$(".rank_ul_main2 .rank_li_main:first .rank_li_img").css("display","block");
				$(".rank_ul_main2 .rank_li_main").mouseover(function(){
				$(".rank_ul_main2 .rank_li_main .rank_li_img").css("display","none");
					$(this).find(".rank_li_img").css("display","block");
				});
				$(".rank_ul_main3 .rank_li_main:first .rank_li_img").css("display","block");
				$(".rank_ul_main3 .rank_li_main").mouseover(function(){
				$(".rank_ul_main3 .rank_li_main .rank_li_img").css("display","none");
					$(this).find(".rank_li_img").css("display","block");
				});
				$(".rank_ul_main4 .rank_li_main:first .rank_li_img").css("display","block");
				$(".rank_ul_main4 .rank_li_main").mouseover(function(){
				$(".rank_ul_main4 .rank_li_main .rank_li_img").css("display","none");
					$(this).find(".rank_li_img").css("display","block");
				});
				$(".rank_ul_main5 .rank_li_main:first .rank_li_img").css("display","block");
				$(".rank_ul_main5 .rank_li_main").mouseover(function(){
				$(".rank_ul_main5 .rank_li_main .rank_li_img").css("display","none");
					$(this).find(".rank_li_img").css("display","block");
				});
				$(".rank_ul_main6 .rank_li_main:first .rank_li_img").css("display","block");
				$(".rank_ul_main6 .rank_li_main").mouseover(function(){
				$(".rank_ul_main6 .rank_li_main .rank_li_img").css("display","none");
					$(this).find(".rank_li_img").css("display","block");
				});
			$(".forth_ul_main .forth_li_main:first .forth_li_img").css("display","block");
			$(".third_ul_main .third_li_main").mouseover(function(){
			$(".third_ul_main .third_li_main .third_li_img").css("display","none");
				$(this).find(".third_li_img").css("display","block");
				});
			$(".forth_ul_main .forth_li_main").mouseover(function(){
			$(".forth_ul_main .forth_li_main .forth_li_img").css("display","none");
				$(this).find(".forth_li_img").css("display","block");
				});
			})


//选项卡鼠标经过切换效果---通用
			function shows(c) {
				$('#test_' + c + '>li').mouseover(function () {
					$(this).siblings().removeClass('last').end().addClass('last');
					var i = $(this).index() + 1;
					$('.' + c).addClass('hide');
					$('.' + c + '_' + i).removeClass('hide');
				});
			}
			$(function () {
				shows('zuixinyx');   //推荐栏目
				shows('indexT_product_text');   //推荐栏目
				shows('chongzhiBox');   //手机充值
				shows('indexT');          //新闻资讯
				shows('score');          //新闻资讯
				shows('scores');          //新闻资讯
				shows('change');          //新闻资讯
			});
//选项卡鼠标点击过切换效果---通用
			function showc(c) {
				$('#test_' + c + '>li').click(function () {
					$(this).siblings().removeClass('last').end().addClass('last');
					var i = $(this).index() + 1;
					$('.' + c).addClass('hide');
					$('.' + c + '_' + i).removeClass('hide');
				});
			}
			$(function () {
				showc('indexT_product_texts');   //推荐栏目
				showc('chongzhiBoxs');   //手机充值
				showc('indexTs');          //新闻资讯
			});
			
			
			
			
//首页大图隐藏
			$(function hides(){
					$('.close_a').click(function(){
							$('.main_top').hide();
							$('.main_datu').hide();
						});
				});
				
				
				
//经过显示
			$(function moves(){
				$('.sort_li').hover(function(){
				$(this).find('.sort_hover').show().stop(true,true).animate({ bottom:0,left:0},250);},
				function(){$(this).find('.sort_hover').hide().stop(true,true).animate({ bottom:0, left:0},250);});
				$('.main_zxzx_pic').hover(function(){
				$(this).find('.main_zxzx_picbj').show().stop(true,true).animate({ bottom:0,left:17},250);},
				function(){$(this).find('.main_zxzx_picbj').hide().stop(true,true).animate({ bottom:-3, left:17},250);});
				$('.main_zxzx_pic').hover(function(){
				$(this).find('.main_zxzx_picwzbj').show().stop(true,true).animate({ bottom:0,left:17},250);},
				function(){$(this).find('.main_zxzx_picwzbj').hide().stop(true,true).animate({ bottom:-3, left:17},250);});
				$('.jp_lf_top').hover(function(){
				$(this).find('.a_bj').show().stop(true,true).animate({ bottom:0,left:0},250);},
				function(){$(this).find('.a_bj').hide().stop(true,true).animate({ bottom:-3, left:0},250);});
				$('.slides1').hover(function(){
				$(this).find('.a_bj').show().stop(true,true).animate({ bottom:0,left:0},250);},
				function(){$(this).find('.a_bj').hide().stop(true,true).animate({ bottom:-3, left:0},250);});
				$('.slides2').hover(function(){
				$(this).find('.a_bj').show().stop(true,true).animate({ bottom:0,left:0},250);},
				function(){$(this).find('.a_bj').hide().stop(true,true).animate({ bottom:-3, left:0},250);});
				});


//点击显示回复框
function showr(id){
				if(document.getElementById(id).style.display.match('block')){
					document.getElementById(id).style.display='none';
					}
				else{
					document.getElementById(id).style.display='block';
					}
			}
//设置高度
$(function setht(){
	var $ht=$('.rjtj_rg').height()+6;
	var $ht1=$('.sytj_rg').height()+6;
	$('.rjtj_lf').css('height',$ht);
	$('.sytj_lf').css('height',$ht1);
	})
	
	
	
// 设置为主页 
function SetHome(obj,vrl){ 
try{ 
obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl); 
} 
catch(e){ 
if(window.netscape) { 
try { 
netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
} 
catch (e) { 
alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 
} 
var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 
prefs.setCharPref('browser.startup.homepage',vrl); 
}else{ 
alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。"); 
} 
} 
} 
// 加入收藏 兼容360和IE6 
function shoucang(sTitle,sURL) 
{ 
try 
{ 
window.external.addFavorite(sURL, sTitle); 
} 
catch (e) 
{ 
try 
{ 
window.sidebar.addPanel(sTitle, sURL, ""); 
} 
catch (e) 
{ 
alert("加入收藏失败，请使用Ctrl+D进行添加"); 
} 
} 
};


//下拉菜单
                     function show(id){
                            document.getElementById(id).style.display='block';
							document.getElementById('bj_hover').className='stayf60';
                        }
                     function hide(id){
                            document.getElementById(id).style.display='none';
							document.getElementById('bj_hover').className=document.getElementById('bj_hover').className.replace(/stayf60/,'');
                        }
                
				
//


$(document).ready(function(){
	$('.yxny_li').click(function(){
		$(this).addClass('hover');
		$(this).find('.xlcd').show();
		})
	$('.yxny_li').mouseleave(function() {
		$(this).removeClass('hover');
		$(this).find('.xlcd').hide();
	});
	
	
})

