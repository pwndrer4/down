//评论
//回复
$(".comment_box .hud .hf").live('click', function() {
$(".comment_box .hfk").html("");
$(".comment_box .hfk").hide();
var cosh = $(this).attr("i");
if(cosh==1){
$(this).attr("i",0);
return false;
}else{
$(this).attr("i",1);
}
var id = $(this).attr("data");
var html = ' <textarea id="hftext" my-placeholder="回复：" name="content" o-color="rgb(153, 153, 153)" style="color: rgb(153, 153, 153);"></textarea>';
    html += ' <div class="sub_comment">';
    html += ' <p class="bq" id="qqface" onclick="faceqq(\'hftext\',this,\'qqfaces\')"></p>';
    html += ' <p class="bnt"><button class="button" onclick="comment(\'hftext\','+id+')">回复评论</button></p>';
    html += ' </div>';
$(".comment_box .hf_"+id).html(html);
$(".comment_box .hf_"+id).show();
})
//发表评论
function comment(cont,id){
var commentid = $("#commentid").val();
 if(commentid==''||typeof(commentid)=='undefined'){
     alert('回复出错啦,刷新页面重试!');
     return false;
 }
var content = $('#'+cont).val();
if(content==""){
alert('请输入你要评论的内容!');
return false;
}
$.ajax({
	dataType:'json',
	url:'/index.php?m=comment&c=index&a=post&commentid='+commentid+'&id='+id+'&format=json',
	type:"POST",
	data:{content:content},
	success: function(data){
	$('#'+cont).val("");
	alert(data.msg);
	}
});	
}
$("*").click(function(e){
 if(e.target.className!="bq"){ 
$("#qqfaces").remove();
$("#qq_cdsd").remove();
 }
})

function faceqq(cont,obj,ty){
/*var flag = $(obj).attr("face");
if(flag==1){
$("#"+ty).remove();
$(obj).attr("face",0);
return false;
}
$(obj).attr("face",1);*/
$("#"+ty).remove();
var strFace = '<div id="'+ty+'" style="position:absolute;z-index:1000;" class="qqFace">' +
				'<table border="0" cellspacing="0" cellpadding="0"><tr>';
				for(var i=1; i<=75; i++){
					labFace = '[em_'+i+']';
					strFace += '<td><img src="/statics/arclist/'+i+'.gif" onclick="sethtml(\''+cont+'\',\''+labFace+'\',\''+ty+'\');" /></td>';
					if( i % 15 == 0 ) strFace += '</tr><tr>';
				}
				strFace += '</tr></table></div>';
			$(obj).parent().append(strFace);
			var offset = $(obj).position();
			var top = offset.top + $(obj).outerHeight() - 183;
			$('#'+ty).css('top',top);
			$('#'+ty).css('left',offset.left);
			$('#'+ty).show();
			e.stopPropagation();
}
function sethtml(id,text,ty){
$("#"+ty).remove();
$("#"+id).focus();
var cont = $("#"+id).val();
if(cont=="")
{
$("#"+id).val(text);
}else{
var leng  = cont.length;
var sit = getCursorPos(id);//获取光标位置
if(leng==sit){
$("#"+id).val(cont+text);
}else{
var t = cont.substr(0,sit)+text+cont.substr(sit);
var tl = text.length;
$("#"+id).val(t);
setCursorPos(id, sit+tl);
}
}
}



//定位光标
 function setCursorPos(inputId, pos){
     var inpObj = document.getElementById(inputId);
     if(navigator.userAgent.indexOf("MSIE") > -1){
          var textRange=inpObj.createTextRange();
		textRange.moveStart("character",pos);
		textRange.moveEnd("character",0);
		textRange.select();
     }else{
         inpObj.setSelectionRange(pos,pos);
     }
 }
//获取光标位置
function getCursorPos(inputId){
    var inpObj = document.getElementById(inputId);
     if(navigator.userAgent.indexOf("MSIE") > -1) { // IE
	   var range = document.selection.createRange();
            range.moveStart("character",-inpObj.value.length);
           return range.text.length;
    } else {
        return inpObj.selectionStart;
    }
}

//加载评论
$(".comment_box .more a").live('click', function() {
var commentid = $("#commentid").val();
var page = $(this).attr("page");
$.ajax({
	dataType:'json',
	url:'/api.php?op=comment&action=lits',
	type:"GET",
	data:{page:page,commentid:commentid},
	success: function(data){
	if(data.status==1){
	 show_comment(data);
	}
	}
});	
})
function show_comment(data){
var html = "";
var htmls = "";
var datas = data.data;
var reply_data_num,support,comments,recomment;
var flag = "";
var sup_flag,_support,sclass;
var page = $(".comment_box .more a").attr("page");
for (var i = 0; i<datas.length; i++) {
   comments = datas[i].data;
   recomment = "";
  if(comments.reply_data!=""){
  recomment = show_recomment(comments.reply_data);
  }
  reply_data_num = "";
if(comments.reply_data_num>0){
reply_data_num = "("+comments.reply_data_num+")";
}
  support = sclass = "";
  sup_flag = getCookie("sup_commentid_"+datas[i].id);
if(datas[i].support>0){
 _support = "("+datas[i].support+")";
}else{
 _support = "";
}
support = "<span>支持<em>"+_support+"</em></span>";
if(sup_flag){
support = '<span>已支持'+'<em>'+'('+datas[i].support+')'+'</em></span>';
sclass = "none";
}
  html = ['<dl>',
'    <dt><img src="/statics/skin_img/tx.png"></dt>',
'    <dd>',
'       <p class="name">'+comments.username+'</p>',
'       <p class="time">'+comments.time+'</p>',
'       <div class="text">',
     comments.content,
'       </div>',
'       <div class="hud">',
'          <a class="hf" data="'+datas[i].id+'" href="javascript:void(0)"><span>回复<em>'+reply_data_num+'</em></span><em class="icon"></em></a>',
'          <a class="zc '+sclass+'" href="javascript:void(0)" onclick="support('+datas[i].id+',this)" id="supp_'+datas[i].id+'" data="'+datas[i].support+'">'+support+'<em class="icon"></em><p class="add">+1</p></a>',
'       </div>',
'       <div class="hfk hf_'+datas[i].id+'">',
'       </div>',
recomment,
'    </dd>',
' </dl>'].join('');
htmls += html;
}

$("#comment_show_data").append(htmls);
if(data.mpage==1){
page++;
$(".comment_box .more a").attr("page",page);
}else{
$(".comment_box .more").hide();
}
}
function show_recomment(data){
var htm = "";
for (var i = 0; i<data.length; i++) {
	htm +='<div class="hfnr">'+
         '<p>'+data[i].username+'</p>（'+data[i].time+'）：'+data[i].content+
         '</div>';
   }
   return htm;
}
//点赞
function support(id,obj) {
    var flag = getCookie("sup_commentid_"+id);
	if(flag) return false;
   var times = parseInt(Math.random() * 10000); 
   var commentid = $("#commentid").val();
	$.getJSON('/index.php?m=comment&c=index&a=support&format=json&commentid='+commentid+'&id='+id+'&time='+times, function(data){
		if(data.status == 1) {
		zan(obj,id);
		} else {
			alert(data.msg);
		}
	});
}
$(function() {
	var commentids = $("#commentids").val();
   if(commentids=="") return;	
   var comids = new Array();  
   comids  =   commentids.split(",");
   var num;
       for (i=0;i<comids.length ;i++ )   
    {   
	showSupport(comids[i],"",1);	
    } 
});
function showSupport(id){
var flag = getCookie("sup_commentid_"+id);
if(flag){
var num = $("#supp_"+id).attr("data");
num++;
if(num!=flag){
num--;
}
html = '已支持'+'<em>'+'('+num+')'+'</em>';
$("#supp_"+id).find('span').html(html);
$("#supp_"+id).addClass("none");
}
}

//赞
function zan(obj,id){
			var cl=$(obj).find('.add').css('top');
			if( cl=='0px'){
				$(obj).find('.add').css('display','block');
				$(obj).find('.add').stop(true, false).animate({
					top :-22
				}, 200);
				setTimeout(function () {yc1(obj);},1500);
				//setTimeout(yc1(obj),1500);
				$(obj).addClass("none");
				}
				var num = $(obj).attr("data");
				num++;
			    $(obj).find('span').html('已支持'+'<em>'+'('+num+')'+'</em>');
				SetCookie("sup_commentid_"+id,num);
	}
				 function yc1(obj){
				$(obj).find('.add').fadeOut('slow');
				}
function SetCookie(name, value)
    {
        var expire = "";
            expire = new Date ((new Date ()).getTime () + 24*3600000);
            expire = "; expires=" + expire.toGMTString ();
        document.cookie = name + "=" + escape (value) + expire;
    }
function getCookie(name) {
    var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
    if (arr != null)
        return unescape(arr[2]);
    return null;
}