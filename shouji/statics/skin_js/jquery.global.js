/*
 *	sGallery 1.0 - simple gallery with jQuery
 *	made by bujichong 2009-11-25
 *	���ߣ����  2009-11-25
 * http://hi.baidu.com/bujichong/
 *	��ӭ����ת�أ��������������Ͷ��ɹ������������Դ������
 */

(function ($) {
$.fn.sGallery = function (o) {
    return  new $sG(this, o);
			//alert('do');
    };

	var settings = {
		thumbObj:null,//Ԥ������
		titleObj:null,//����
		botLast:null,//��ť��һ��
		botNext:null,//��ť��һ��
		thumbNowClass:'now',//Ԥ������ǰ��class,Ĭ��Ϊnow
		slideTime:800,//ƽ������ʱ��
		autoChange:true,//�Ƿ��Զ��л�
		changeTime:5000,//�Զ��л�ʱ��
		delayTime:100//��꾭��ʱ��Ӧ���ӳ�ʱ��
	};

 $.sGalleryLong = function(e, o) {
    this.options = $.extend({}, settings, o || {});
	var _self = $(e);
	var set = this.options;
	var thumb;
	var size = _self.size();
	var nowIndex = 0; //����ȫ��ָ��
	var index;//����ȫ��ָ��
	var startRun;//Ԥ�����Զ����в���
	var delayRun;//Ԥ�����ӳ����в���

//��ʼ��
	_self.eq(0).show();

//���л�����
function fadeAB () {
	if (nowIndex != index) {
		if (set.thumbObj!=null) {
		$(set.thumbObj).removeClass().eq(index).addClass(set.thumbNowClass);}
		_self.eq(nowIndex).stop(false,true).fadeOut(set.slideTime);
		_self.eq(index).stop(true,true).fadeIn(set.slideTime);
		$(set.titleObj).eq(nowIndex).hide();//������title
		$(set.titleObj).eq(index).show();//������title
		nowIndex = index;
		if (set.autoChange==true) {
		clearInterval(startRun);//�����Զ��л�����
		startRun = setInterval(runNext,set.changeTime);}
		}
}

//�л�����һ��
function runNext() {
	index =  (nowIndex+1)%size;
	fadeAB();
}

//�����һͼƬ
	if (set.thumbObj!=null) {
	thumb = $(set.thumbObj);
//��ʼ��
	thumb.eq(0).addClass(set.thumbNowClass);
		thumb.bind("mousemove",function(event){
			index = thumb.index($(this));
			fadeAB();
			delayRun = setTimeout(fadeAB,set.delayTime);
			clearTimeout(delayRun);
			event.stopPropagation();
		})
	}

//�����һ��
	if (set.botNext!=null) {
		var botNext = $(set.botNext);
		botNext.mousemove(function () {
			runNext();
			return false;
		});
	}

//�����һ��
	if (set.botLast!=null) {
		var botLast = $(set.botLast);
		botLast.mousemove(function () {
			index = (nowIndex+size-1)%size;
			fadeAB();
			return false;
	});
	}

//�Զ�����
	if (set.autoChange==true) {
	startRun = setInterval(runNext,set.changeTime);
	}

}

var $sG = $.sGalleryLong;

})(jQuery);

function slide(Name,Class,Width,Height,fun){
	$(Name).width(Width);
	$(Name).height(Height);
	
	if(fun == true){
		$(Name).append('<div class="title-bg"></div><div class="title"></div><div class="change"></div>')
		var atr = $(Name+' div.changeDiv a');
		var sum = atr.length;
		for(i=1;i<=sum;i++){
			var title = atr.eq(i-1).attr("title");
			var href = atr.eq(i-1).attr("href");
			$(Name+' .change').append('<i>'+i+'</i>');
			$(Name+' .title').append('<a href="'+href+'" target="_blank">'+title+'</a>');
		}
		$(Name+' .change i').eq(0).addClass('cur');
	}
	$(Name+' div.changeDiv a').sGallery({//����ָ��㣬���ڰ���ͼƬ������
		titleObj:Name+' div.title a',
		thumbObj:Name+' .change i',
		thumbNowClass:Class
	});
	$(Name+" .title-bg").width(Width);
}

//����ͼ
jQuery.fn.LoadImage=function(scaling,width,height,loadpic){
    if(loadpic==null)loadpic="../images/msg_img/loading.gif";
return this.each(function(){
   var t=$(this);
   var src=$(this).attr("src")
   var img=new Image();
   img.src=src;
   //�Զ�����ͼƬ
   var autoScaling=function(){
    if(scaling){
     if(img.width>0 && img.height>0){ 
           if(img.width/img.height>=width/height){ 
               if(img.width>width){ 
                   t.width(width); 
                   t.height((img.height*width)/img.width); 
               }else{ 
                   t.width(img.width); 
                   t.height(img.height); 
               } 
           } 
           else{ 
               if(img.height>height){ 
                   t.height(height); 
                   t.width((img.width*height)/img.height); 
               }else{ 
                   t.width(img.width); 
                   t.height(img.height); 
               } 
           } 
       } 
    } 
   }
   //����ff�»��Զ���ȡ����ͼƬ
   if(img.complete){
    autoScaling();
      return;
   }
   $(this).attr("src","");
   var loading=$("<img alt=\"������...\" title=\"ͼƬ������...\" src=\""+loadpic+"\" />");
  
   t.hide();
   t.after(loading);
   $(img).load(function(){
    autoScaling();
    loading.remove();
    t.attr("src",this.src);
    t.show();
	//$('.photo_prev a,.photo_next a').height($('#big-pic img').height());
   });
  });
}

//���Ϲ�������
function startmarquee(elementID,h,n,speed,delay){
 var t = null;
 var box = '#' + elementID;
 $(box).hover(function(){
  clearInterval(t);
  }, function(){
  t = setInterval(start,delay);
 }).trigger('mouseout');
 function start(){
  $(box).children('ul:first').animate({marginTop: '-='+h},speed,function(){
   $(this).css({marginTop:'0'}).find('li').slice(0,n).appendTo(this);
  })
 }
}

//TAB�л�
function SwapTab(name,title,content,Sub,cur){
  $(name+' '+title).mouseover(function(){
	  $(this).addClass(cur).siblings().removeClass(cur);
	  $(content+" > "+Sub).eq($(name+' '+title).index(this)).show().siblings().hide();
  });
}


////////////////////////////////////////////////////////////////////////////////////////��������

function html_ubb(str) {
	str = str.replace(/\r/g,"");
	str = str.replace(/\t/g,"");
	str = str.replace(/on(load|click|dbclick|mouseover|mousedown|mouseup)="[^"]+"/ig,"");
	str = str.replace(/<script[^>]*?>([\w\W]*?)<\/script>/ig,"");
	str = str.replace(/<a[^>]+href="([^"]+)"[^>]*>(.*?)<\/a>/ig,"[url=$1]$2[/url]");
	str = str.replace(/<font[^>]+color=([^ >]+)[^>]*>(.*?)<\/font>/ig,"[color=$1]$2[/color]");
	str = str.replace(/<img[^>]+src="([^"]+)"[^>]*>/ig,"[img]$1[/img]");
	str = str.replace(/<([\/]?)b>/ig,"[$1b]");
	str = str.replace(/<([\/]?)strong>/ig,"[$1b]");
	str = str.replace(/<([\/]?)u>/ig,"[$1u]");
	str = str.replace(/<([\/]?)i>/ig,"[$1i]");
	str = str.replace(/&nbsp;/g," ");
	str = str.replace(/&/g,"&");
	str = str.replace(/"/g,"\"");
	str = str.replace(/</g,"<");
	str = str.replace(/>/g,">");
	str = str.replace(/<br>/ig,"\n");
	str = str.replace(/<[^>]*?>/g,"");
	str = str.replace(/\[url=([^\]]+)\]\n(\[img\]\1\[\/img\])\n\[\/url\]/g,"$2");
	str = str.replace(/\n+/g,"\n");
	str = str.replace(/\n/g,"\n");
	return str;
}


function copyBBS(type){
	if(type=='soft'){
		var id ='<b>�������: </b><a href="'+location.href+'">'+$("#view_name").text()+'</a><br>';
		var ljdx ='<b>�����С: </b>'+$("#ljdx").html()+'<br>';
		var ljyy ='<b>�������: </b>'+$("#ljyy").html()+'<br>';
		var ljsq ='<b>�����Ȩ: </b>'+$("#ljsq").html()+'<br>';
		var body = '<b>�������: </b><br>'+$("#soft-intro-wrap").html()+'<br />';
		var pic = (typeof($(".ad-thumb-list").html()) == 'undefined' || $(".ad-thumb-list").html() == null) ? '' : $(".ad-thumb-list").html().replace(/_thumb/g,'_big') +'<br>';
		var url = '<b>���ص�ַ: </b><a href="'+location.href+'">'+location.href+'</a><br>';
	}else{
		return false;
	}
	if(copy2Clipboard(html_ubb(id+ljdx+ljyy+ljsq+body+pic+url))!=false) {
		var str = id+url;
		msg_div(str.replace(/<a[^>]+href="([^"]+)"[^>]*>(.*?)<\/a>/ig,"$2"),'��̳���븴�Ƴɹ�');
	}else{
		msg_div('<b>��ʹ��Ctrl+C������Ҽ���</b><br><br><textarea style="font-size:12px;" onclick="this.select();" readonly>'+html_ubb(id+ljdx+ljyy+ljsq+body+pic+url)+'</textarea>','��ַ����ʧ��');
	}
}

copy2Clipboard = function(txt) {
    if (window.clipboardData) {
        window.clipboardData.clearData();
        window.clipboardData.setData("Text", txt);
    } else if (navigator.userAgent.indexOf("Opera") != -1) {
        alert("��ʹ�õ��������֧�ָ��ƣ���ʹ��Ctrl+C������Ҽ���");
        return false;
    } else if (navigator.userAgent.indexOf("WebKit") != -1) {
        alert("��ʹ�õ��������֧�ָ��ƣ���ʹ��Ctrl+C������Ҽ���");
        return false;
    } else if (window.netscape) {
        try {
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
        } catch(e) {
            alert("����firefox��ȫ�������������м������������� about:config ��signed.applets.codebase_principal_support ����Ϊtrue ֮�����ԣ����·��Ϊfirefox��Ŀ¼/greprefs/all.js");
            return false;
        }
        var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
        if (!clip) return;
        var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
        if (!trans) return;
        trans.addDataFlavor('text/unicode');
        var str = new Object();
        var len = new Object();
        var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
        var copytext = txt;
        str.data = copytext;
        trans.setTransferData("text/unicode", str, copytext.length * 2);
        var clipid = Components.interfaces.nsIClipboard;
        if (!clip) return false;
        clip.setData(trans, null, clipid.kGlobalClipboard);
    }
}
function showMask(show) {
    var mask = document.getElementById('dmask');
    var frmmask = document.getElementById('frmmask');
    var frmDialog = document.getElementById('frmDialog');
    if (mask && frmmask) {
        var width = document.body.scrollWidth;
        if (width < document.body.clientWidth) width = document.body.clientWidth;
        if (width < document.documentElement.clientWidth) width = document.documentElement.clientWidth;
        if (width < document.documentElement.scrollWidth) width = document.documentElement.scrollWidth;
        var height = document.body.scrollHeight;
        if (height < document.body.clientHeight) height = document.body.clientHeight;
        if (height < document.documentElement.clientHeight) height = document.documentElement.clientHeight;
        if (height < document.documentElement.scrollHeight) height = document.documentElement.scrollHeight;
        if (window.XMLHttpRequest) {
            mask.style.position = "fixed";
            frmmask.style.position = "fixed";
        }

        mask.style.top = '0px';
        mask.style.left = '0px';
        mask.style.width = width + 'px';
        mask.style.height = height + 'px';
        frmmask.style.top = '0px';
        frmmask.style.left = '0px';
        frmmask.style.width = width + 'px';
        frmmask.style.height = height + 'px';
        if (show) {
            mask.style.visibility = 'visible';
            frmmask.style.visibility = 'visible';
            frmDialog.style.visibility = 'visible';
        } else {
            mask.style.visibility = 'hidden';
            frmmask.style.visibility = 'hidden';
            frmDialog.style.visibility = 'hidden';
        }
    }
    var width = frmDialog.scrollWidth;
    var height = frmDialog.scrollHeight;
    var top = (window.screen.height / 2 + (document.body.scrollTop > document.documentElement.scrollTop ? document.body.scrollTop: document.documentElement.scrollTop) - height / 2) > 0 ? (window.screen.height / 2 + (document.body.scrollTop > document.documentElement.scrollTop ? document.body.scrollTop: document.documentElement.scrollTop) - height / 2 - 100) : 0;
    var left = (window.screen.width / 2 + (document.body.scrollLeft > document.documentElement.scrollLeft ? document.body.scrollLeft: document.documentElement.scrollLeft) - width / 2) > 0 ? (window.screen.width / 2 + (document.body.scrollLeft > document.documentElement.scrollLeft ? document.body.scrollLeft: document.documentElement.scrollLeft) - width / 2 - 10) : 0;
    frmDialog.style.top = top + 'px';
    frmDialog.style.left = left + 'px';
    frmDialog.style.width = width + 'px';
    frmDialog.style.height = height + 'px';
    frmDialog.style.opacity = '0';
    $('#frmDialog').animate({
        opacity: 1
    },
    500);
}
function hideOrShowSelect(v) {
    var allselect = document.getElementsByTagName("select");
    for (var i = 0; i < allselect.length; i++) {
        allselect[i].style.width = (v == true) ? "0px": "auto";
    }
}
function closeForm() {
    hideOrShowSelect(false);
    var objF = document.getElementById("filter");
    if (objF) {
        objF.parentNode.removeChild(objF);
    }
}
function msg_div(id, title) {
    var obj = document.createElement("div");
    obj.id = "filter";
    obj.innerHTML = '<div id="dmask" style="z-index:10000;display:block;position:absolute;visibility:hidden;background:#000;filter:alpha(opacity=20);-moz-opacity:0.2;opacity:0.2;"></div><div id="frmmask" style="z-index:9999;display:block;position:absolute;visibility:hidden;background:#000;filter:alpha(opacity=0);-moz-opacity:0;opacity:0;"></div><div id="frmDialog" style="z-index:10001;display:block;position:absolute;visibility:hidden;vertical-align:middle;"><table cellpadding="0" cellspacing="0" class="fwin"><tr><td class="t_l"></td><td class="t_c"></td><td class="t_r"></td></tr><tr><td class="m_l">&nbsp;&nbsp;</td><td class="m_c"><h3 class="flb"><em>' + title + '</em><span><a title="�ر�" class="flbc" onclick="closeForm();" href="javascript:;">�ر�</a></span></h3><div class="c"><p style="font-size:12px;">' + id + '</p></div><p class="o"><button class="c_btn" onclick="closeForm();">ȷ��</button></p></td><td class="m_r"></td></tr><tr><td class="b_l"></td><td class="b_c"></td><td class="b_r"></td></tr></table></div>';
    document.body.appendChild(obj);
    showMask(true);
    hideOrShowSelect(true);
}


//////////////////////////////////////////////////////////////////////////6688



var XZB = {};

XZB.namespace = function(str){
    var arr = str.split("."),o = XZB;
    for(var i=(arr[0] == "XZB")?1:0;i<arr.length;i++){
        o[arr[i]] = o[arr[i]] || {};
        o = o[arr[i]];
    }
    return o;
}

Function.prototype.method = function(name,fn){
	if(typeof this.prototype[name] == "undefined") this.prototype[name] = fn;
	return this;
}

String.method('encode',function(noCom) {
    return noCom ? encodeURI(this) : encodeURIComponent(this)
}).method('decode',function(noCom) {
    return noCom ? decodeURI(this) : decodeURIComponent(this)
});
XZB.copyText = function(pStr, hasReturn) {
	var result = false;
	if (window.clipboardData) {
		window.clipboardData.clearData();
		result = window.clipboardData.setData("Text", pStr);
	} else if (window.netscape) {
		try {
			netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
		} catch(e) {
			alert("����firefox��ȫ�������������м�������������'about:config'��signed.applets.codebase_principal_support'����Ϊtrue'֮������");
			return result
		};
		var clip = Components.classes["@mozilla.org/widget/clipboard;1"].createInstance(Components.interfaces.nsIClipboard);
		if (!clip) return result;
		var trans = Components.classes["@mozilla.org/widget/transferable;1"].createInstance(Components.interfaces.nsITransferable);
		if (!trans) return result;
		trans.addDataFlavor('text/unicode');
		var str = new Object();
		var len = new Object();
		var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
		var copytext = pStr;
		str.data = copytext;
		trans.setTransferData("text/unicode", str, copytext.length * 2);
		var clipid = Components.interfaces.nsIClipboard;
		if (!clip) return result;
		clip.setData(trans, null, clipid.kGlobalClipboard);
		result = true
	};
	if (hasReturn) return result;
	else if (result) alert("�����Ѹ�����������!");
	else alert("����ʧ��! ��ʹ�õ��������֧�ָ��ƹ���.")
}

//ת������̳
var setcopy_gettext = function(id){
    if(!id) return;
    var url = "?ac=post2bbs&softid="+id;
    $.get(url,function(s){
      window.document.clipboardswf.SetVariable('str', s);
    })
}
var floatwin = function(){
    alert("�Ѿ��ɹ�����!");
}

// �������ݼ��
/// my-placeholder
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
	}).delegate('input[my-placeholder],textarea[my-placeholder]', "blur", function(){
		this.isFocus = false;
		var placeholder = $(this).attr('my-placeholder');
		if (this.value == "" || this.value == placeholder) {
			this.value = placeholder;
			$(this).attr('o-color', this.style.color||"");
			this.style.color = "#888";
		}
	});
	
	setInterval(function(){
		$('input[my-placeholder],textarea[my-placeholder]').each(function(){
			if (this.isFocus) return;
			var placeholder = $(this).attr('my-placeholder');
			if (!!placeholder && (this.value == "" || this.value==placeholder)) {
				this.value = placeholder;
				$(this).attr('o-color', this.style.color||"");
				this.style.color = "#888";
			}
		});
	}, 1000);

});

// �������ݼ��
$(function() {
	$('form.comment-form').submit(function(event){
		if ($.trim(this.nick.value) == "") {
			this.nick.value = $(this.nick).attr('my-placeholder');	
		};
		if ($.trim($(this.content).val())==""){
			alert('����һ�°�!');
			event.preventDefault();
			return false;
		}
	});		   
});

/////////////////����
//��ȫ��js

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



/*function show_search()
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
}*/


/*function drop_hide(pos){
	document.getElementById(pos+"Sel").style.display="none";
}*/
function drop_mouseover(pos){
	try{window.clearTimeout(timer);}catch(e){}
}


/*function search_show(pos,sType,href){
	var fm = document.topForm;
	
	//document.getElementById('keyword').name="keyword";
	//fm.target="_self";
	
    	fm.typeid.value=sType;
	if(sType=="down") {
		fm.attributes['action'].value="/index.php";
	} 
	if(sType=="self") {
		fm.attributes['action'].value="/index.php";
	} 
	
    	document.getElementById(pos+"Sel").style.display="none";
    	document.getElementById(pos+"Slected").innerHTML=href.innerHTML;
	try{window.clearTimeout(timer);}catch(e){}
	return false;
}*/

function search_show(pos,sType,href){ 
	var fm = document.topForm; 
    	fm.typeid.value=sType; 
	if(sType=="2") { 
		document.getElementById('down1').style.display='none'; 
		document.getElementById('self1').style.display='block'; 
        document.getElementById('typeid').val='1'; 
	}  
	if(sType=="1") { 
		document.getElementById('self1').style.display='none'; 
		document.getElementById('down1').style.display='block'; 
         document.getElementById('typeid').val='2'; 
	}  
	document.getElementById(pos+"Sel").style.display="none"; 
	document.getElementById(pos+"Slected").innerHTML=href.innerHTML; 
	try{window.clearTimeout(timer);}catch(e){} 
	return false; 
}





///////////////
var t = t2 = n = n2 = 0, count,count2;
	$(document).ready(function(){
	
	      //fl_h1 span�л�(�Ƽ����)
		$(".fl_h1 span").mouseover(function(){
			$(".fl_h1 span").removeClass("fl_hover");
			$(".fl_tb").css("display","none");
			$(this).addClass("fl_hover");
			var zz=$(this).attr('id') + "z";
			$("#" + zz).css("display","block");
		});
		
	
		//phb�л�
		$(".phb em").mouseover(function(){
			$(".phb em").removeClass("current");
			$(".sjphb").css("display","none");
			$(this).addClass("current");
			var a =$(this).attr('id') + "a";
			$("#" + a).css("display","block");
		});
	
		//.phb2 ul�л�
		$(".phb2 em").mouseover(function(){
			$(".phb2 em").removeClass("current");
			$(".dnphb").css("display","none");
			$(this).addClass("current");
			var b =$(this).attr('id') + "b";
			$("#" + b).css("display","block");
		});
		//.phb3 ul�л�
		$(".phb3 em").mouseover(function(){
			$(".phb3 em").removeClass("current");
			$(".blph").css("display","none");
			$(this).addClass("current");
			var e =$(this).attr('id') + "e";
			$("#" + e).css("display","block");
		});
		
		//.phb4 ul�л�
		$(".phb4 em").mouseover(function(){
			$(".phb4 em").removeClass("current");
			$(".wzsy_qp2").css("display","none");
			$(this).addClass("current");
			var z =$(this).attr('id') + "z";
			$("#" + z).css("display","block");
		});
		//.phb5 ul�л�
		$(".phb5 em").mouseover(function(){
			$(".phb5 em").removeClass("current");
			$(".wzsy_qp3").css("display","none");
			$(this).addClass("current");
			var zz =$(this).attr('id') + "z";
			$("#" + zz).css("display","block");
		});
		//.phb6 ul�л�
		$(".phb6 em").mouseover(function(){
			$(".phb6 em").removeClass("current");
			$(".wzsy_qp4").css("display","none");
			$(this).addClass("current");
			var zzz =$(this).attr('id') + "z";
			$("#" + zzz).css("display","block");
		});
		
		//.ny_qp�л�
		$(".ny_qp li").mouseover(function(){
			$(".ny_qp li").removeClass("dq");
			$(".qp1").css("display","none");
			$(this).addClass("dq");
			var c =$(this).attr('id') + "c";
			$("#" + c).css("display","block");
		});
		//.ny_qp2�л�
		$(".ny_qp2 li").mouseover(function(){
			$(".ny_qp2 li").removeClass("dq");
			$(".qp2").css("display","none");
			$(this).addClass("dq");
			var d =$(this).attr('id') + "d";
			$("#" + d).css("display","block");
		});
		
		//.ny_qp�л�
		$(".wzsyqp li").mouseover(function(){
			$(".wzsyqp li").removeClass("dq");
			$(".wzsy_qp1").css("display","none");
			$(this).addClass("dq");
			var g =$(this).attr('id') + "g";
			$("#" + g).css("display","block");
		});
		
		
	})
	

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


// JavaScript Document author:penglijun; time:2011.07.15
function showDangqian(n)
{
	var li1=document.getElementById("li1");
	var li2=document.getElementById("li2");
	var li3=document.getElementById("li3");
	var li4=document.getElementById("li4");
	var li5=document.getElementById("li5");
	var li6=document.getElementById("li6");
	var li7=document.getElementById("li7");
	var li8=document.getElementById("li8");
	var li9=document.getElementById("li9");
	var li10=document.getElementById("li10");
	var li11=document.getElementById("li11");
	if(n==1)
	{
		li1.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==2)
	{
		li2.className="dangqian";
		li1.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==3)
	{
		li3.className="dangqian";
		li2.className="notdangqian"
		li1.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==4)
	{
		li4.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li1.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==5)
	{
		li5.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li1.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==6)
	{
		li6.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li1.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==7)
	{
		li7.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li1.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==8)
	{
		li8.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li1.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==9)
	{
		li9.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li1.className="notdangqian"
		li10.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==10)
	{
		li10.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li1.className="notdangqian"
		li11.className="notdangqian"
		}
		if(n==11)
	{
		li11.className="dangqian";
		li2.className="notdangqian"
		li3.className="notdangqian"
		li4.className="notdangqian"
		li5.className="notdangqian"
		li6.className="notdangqian"
		li7.className="notdangqian"
		li8.className="notdangqian"
		li9.className="notdangqian"
		li10.className="notdangqian"
		li1.className="notdangqian"
		}
	}
	





	//ͼƬ����
var Speed_1 = 10; //�ٶ�(����)
var Space_1 = 20; //ÿ���ƶ�(px)
var PageWidth_1 = 113 * 3; //��ҳ���
var interval_1 = 3000; //��ҳ���ʱ��
var fill_1 = 0; //������λ
var MoveLock_1 = false;
var MoveTimeObj_1;
var MoveWay_1="right";
var Comp_1 = 0;
var AutoPlayObj_1=null;
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
function AutoPlay_1(){clearInterval(AutoPlayObj_1);AutoPlayObj_1=setInterval('ISL_GoDown_1();ISL_StopDown_1();',interval_1)}
function ISL_GoUp_1(){if(MoveLock_1)return;clearInterval(AutoPlayObj_1);MoveLock_1=true;MoveWay_1="left";MoveTimeObj_1=setInterval('ISL_ScrUp_1();',Speed_1);}
function ISL_StopUp_1(){if(MoveWay_1 == "right"){return};clearInterval(MoveTimeObj_1);if((GetObj('ISL_Cont_1').scrollLeft-fill_1)%PageWidth_1!=0){Comp_1=fill_1-(GetObj('ISL_Cont_1').scrollLeft%PageWidth_1);CompScr_1()}else{MoveLock_1=false}
AutoPlay_1()}
function ISL_ScrUp_1(){if(GetObj('ISL_Cont_1').scrollLeft<=0){GetObj('ISL_Cont_1').scrollLeft=GetObj('ISL_Cont_1').scrollLeft+GetObj('List1_1').offsetWidth}
GetObj('ISL_Cont_1').scrollLeft-=Space_1}
function ISL_GoDown_1(){clearInterval(MoveTimeObj_1);if(MoveLock_1)return;clearInterval(AutoPlayObj_1);MoveLock_1=true;MoveWay_1="right";ISL_ScrDown_1();MoveTimeObj_1=setInterval('ISL_ScrDown_1()',Speed_1)}
function ISL_StopDown_1(){if(MoveWay_1 == "left"){return};clearInterval(MoveTimeObj_1);if(GetObj('ISL_Cont_1').scrollLeft%PageWidth_1-(fill_1>=0?fill_1:fill_1+1)!=0){Comp_1=PageWidth_1-GetObj('ISL_Cont_1').scrollLeft%PageWidth_1+fill_1;CompScr_1()}else{MoveLock_1=false}
AutoPlay_1()}
function ISL_ScrDown_1(){if(GetObj('ISL_Cont_1').scrollLeft>=GetObj('List1_1').scrollWidth){GetObj('ISL_Cont_1').scrollLeft=GetObj('ISL_Cont_1').scrollLeft-GetObj('List1_1').scrollWidth}
GetObj('ISL_Cont_1').scrollLeft+=Space_1}
function CompScr_1(){if(Comp_1==0){MoveLock_1=false;return}
var num,TempSpeed=Speed_1,TempSpace=Space_1;if(Math.abs(Comp_1)<PageWidth_1/2){TempSpace=Math.round(Math.abs(Comp_1/Space_1));if(TempSpace<1){TempSpace=1}}
if(Comp_1<0){if(Comp_1<-TempSpace){Comp_1+=TempSpace;num=TempSpace}else{num=-Comp_1;Comp_1=0}
GetObj('ISL_Cont_1').scrollLeft-=num;setTimeout('CompScr_1()',TempSpeed)}else{if(Comp_1>TempSpace){Comp_1-=TempSpace;num=TempSpace}else{num=Comp_1;Comp_1=0}
GetObj('ISL_Cont_1').scrollLeft+=num;setTimeout('CompScr_1()',TempSpeed)}}
function picrun_ini(){
GetObj("List2_1").innerHTML=GetObj("List1_1").innerHTML;
GetObj('ISL_Cont_1').scrollLeft=fill_1>=0?fill_1:GetObj('List1_1').scrollWidth-Math.abs(fill_1);
GetObj("ISL_Cont_1").onmouseover=function(){clearInterval(AutoPlayObj_1)}
GetObj("ISL_Cont_1").onmouseout=function(){AutoPlay_1()}
AutoPlay_1();
}


//tab 2011.07.26
function showINF(n){
	var sp1=document.getElementById("sp1");
	var sp2=document.getElementById("sp2");
	var in_rjjs=document.getElementById("in_rjjs");
	var in_rjjs2=document.getElementById("in_rjjs2");
	if(n==1)
	{
		sp1.className="newdtitleyes1";
		sp2.className="newdtitleno";
		in_rjjs.style.display="block";
		in_rjjs2.style.display="none";
		}
		else{
			sp1.className="newdtitleno";
		    sp2.className="newdtitleyes2";
			in_rjjs.style.display="none";
		    in_rjjs2.style.display="block";
			}
	
	}
/////////////////6686
var XZB = {};

XZB.namespace = function(str){
    var arr = str.split("."),o = XZB;
    for(var i=(arr[0] == "XZB")?1:0;i<arr.length;i++){
        o[arr[i]] = o[arr[i]] || {};
        o = o[arr[i]];
    }
    return o;
}

Function.prototype.method = function(name,fn){
	if(typeof this.prototype[name] == "undefined") this.prototype[name] = fn;
	return this;
}

String.method('encode',function(noCom) {
    return noCom ? encodeURI(this) : encodeURIComponent(this)
}).method('decode',function(noCom) {
    return noCom ? decodeURI(this) : decodeURIComponent(this)
});


//�����ǩ
XZB.add_bookmark = function(title,url) {
	var title = title || document.title;
	var url = url || window.location.href;
	if(document.all){  
        try{  
            window.external.addFavorite(url,title);  
        }catch(e){  
            alert("�����ղ�ʧ�ܣ���ʹ��Ctrl+D�������");  
        }  
    }
	else if(window.sidebar){  
        window.sidebar.addPanel(title, url, "");  
	}
	else{  
		alert("�����ղ�ʧ�ܣ���ʹ��Ctrl+D�������");  
	}  
}

//���ֹ���
XZB.tipsUp = function(o){
	var opt = {
		outerWrap:"#outerBox",
		innerWrap:"#innerBox",
		upHeight:"12px",
		fontSize:"12px",
		intervalTime:2000
	}
	var o = $.extend(opt,o);
	var outerWrap = $(o.outerWrap);
	var innerWrap = $(o.innerWrap);
	var upHeightNum = o.upHeight.slice(0,-2)-0;
	outerWrap.css({"position":"relative","lineHeight":o.upHeight,"overflow":"hidden","height":o.upHeight,"fontSize":o.fontSize});
	innerWrap.css({"height":o.upHeight,"position":"absolute"});
	if($(o.innerWrap).children().length>1){
		window.setInterval(function(){
			innerWrap.animate({top:-upHeightNum+"px"},"slow",function(){
				$(o.innerWrap).children().eq(0).appendTo(innerWrap);
				innerWrap.css({"top":"0px"});
			})
		},o.intervalTime);
	}
};

//�õ�ƬЧ��
XZB.ppt = function(o){
    o = $.extend({
       imageWrap : '',
       btnWrap : '',
       introWarp : '.ppt-intro',
       autoTrigger : '',
       activeEvent : 'click',
       intervalTime : '',
       durationTime : 'fast'
    },o||{});

    if(!o.imageWrap || !o.btnWrap ){
        alert("����ϸ��дimageWrap��btnWrap");
    }

    var imgs = $(o.imageWrap).find("img");
    var imgNums = imgs.size();
    var wrapWidth = $(o.imageWrap).width();
    var pt;

    for(var i = 0; i< imgNums;i++){
        $(o.btnWrap).append("<div>"+i+"</div>");
        $(o.introWarp).append("<a href='"+imgs.eq(i).parent("a").attr("href")+"'>"+imgs.eq(i).attr("alt")+"</a>");
    }
    var btns = $(o.btnWrap).find("div");
    var cur = 0;

    //�󶨵���¼�
    btns.click(function() {
        if($(this).index()!=cur) play($(this).index());
        clearInterval(pt);
        auto();
    });

    //���ŷ���
    var play = function(i){
        if(i==imgNums)i=0;
        imgs.eq(cur).fadeOut(o.durationTime,function(){
            imgs.eq(i).fadeIn(o.durationTime);
        });
        btns.eq(i).addClass("ppt-cur").siblings().removeClass("ppt-cur");
        $(o.introWarp).find("a").eq(i).show().siblings().hide();
        cur = i;
    }

   //���ź�һ��
    var next = function(){
        play(cur+1);
    }

    //����ǰһ��
    var prev = function(){
        play(cur-1);
    }

    //�Զ��ֲ�
    var auto = function(){
        if(o.intervalTime){
            pt = setInterval(function(){
                next();
            },o.intervalTime);
        }
        return;
    }

    //��ʼ��
    var init = function(){
        $(o.imageWrap).find("img:not(:first)").hide();
        $(o.introWarp).find("a:not(:first)").hide();
        btns.eq(0).addClass("ppt-cur");
        auto();
    }
    init();
}

//Tab�л�Ч��
XZB.tab = function(obj){
	$.map(obj,function(o){
		o = $.extend({
			menuWrap : '',
			contentWrap : '',
			menuActiveClassName : 'active',
			contentActiveClassName : 'showOn',
                        activeEvent: 'mouseover',
			//activeEvent : 'click',
			menuMouseOutRemoveClass : false,
			contentMouseHover: false,
			autoTrigger : true,
			callback:''
		},o||{});

        if(!o.menuWrap || !o.contentWrap ){
            alert("����ϸ��дmenuWrap��contentWrap");
        }

		var menus = $(o.menuWrap).children();
		var contents = $(o.contentWrap).children();

		menus.each(function(i){
            $(this).bind(o.activeEvent,function(){
                _i = i;
                $(this).addClass(o.menuActiveClassName).siblings().removeClass(o.menuActiveClassName);
                contents.eq(i).show().siblings().hide();
				if(o.callback){
					o.callback.call(window,null);
				}
            });
            if(o.menuMouseOutRemoveClass){
                menus.mouseout(function(){
                    $(this).removeClass(o.menuActiveClassName);
                    contents.eq(_i).hide();
                })
            }
            if(o.contentMouseHover){
                contents.each(function(){
                    $(this).hover(function(){
                        menus.eq(_i).addClass(o.menuActiveClassName);
                        $(this).show();
                    },function(){
                        menus.eq(_i).removeClass(o.menuActiveClassName);
                        $(this).hide();
                    })
                })
            }
		});
		//��ʼ������һ��
		if(o.autoTrigger){
			menus.first().trigger(o.activeEvent);
		}
	})
}

XZB.namespace("XZB.Cookie");
//д��cookie
XZB.Cookie.Set = function(name,value,hours){
      var expire = "";
      if(hours != null){
        expire = new Date((new Date()).getTime() + hours * 3600000);
        expire = "; expires=" + expire.toGMTString();
      }
      document.cookie = name + "=" + escape(value) + expire;
}

//��ȡcookie
XZB.Cookie.Get = function(Name){
    var search = Name + "=";
    var returnvalue = "";
    if (document.cookie.length > 0) {
        offset = document.cookie.indexOf(search)
        if (offset != -1) {
            offset += search.length
            end = document.cookie.indexOf(";", offset);
            if (end == -1)
                end = document.cookie.length;
            returnvalue=unescape(document.cookie.substring(offset, end))
        }
    }
    return returnvalue;
}

//���ͳ��
XZB.clickCount = function(sid,type){
   countimg=document.createElement('img');
	if (!XZB.Cookie.Get(type+'_'+sid)) {
	     var gettime = new Date().getTime();
         var url = _PHP_URL+'/?ct=stat&ac=stat_softdown&softid='+sid+'&gettime='+gettime;
         countimg.src=url;
	}
}

//�����ͳ��
XZB.logad = function logad(id){
       gettime=new Date().getTime();
       url=_PHP_URL+'/countjs.php?id='+id+'&gettime='+gettime;
       countimg.src=url;
}

//�������ͶƱ
XZB.addVote = function(type,softid){
	if(!XZB.Cookie.Get(type+'_'+softid)){
        $.ajax({
            type: "POST",
            url: "?ct=index&ac=vote",
            data: "softid="+softid+"&type="+type,
            cache:false,
            success: function(msg){
                if(msg==1)
				{
					alert('ͶƱ�ɹ���');
				}
				else if(msg==-2)
				{
					alert('���������');
				}
				else if(msg==-1)
				{
					alert("���Ѿ�ͶƱ��");
				}
				else
				{
					alert('ͶƱʧ��');
				}
                //�ı���ص�����
                if(msg == 1){
                    //ԭʼֵ
                    var up = document.getElementById('goodvalue') ;
                    var down = document.getElementById('badvalue');

                    if(!up.innerHTML){
                      up.innerHTML = 0;
                    }
                    if(!down.innerHTML){
                      down.innerHTML = 0;
                    }
                    //����
                    var good = parseInt(up.innerHTML,10);
                    var bad = parseInt(down.innerHTML,10);
                    if(type == 'good'){
                        good +=  1;
                    }else{
                        bad += 1 ;
                    }
                    up.innerHTML = good;
                    down.innerHTML  = bad;
                }
            }
        });
        XZB.Cookie.Set(type+'_'+softid,"1");
    }else{
        alert("���Ѿ�ͶƱ��");
    }
}

//�������֧��
XZB.comup = function(obj,softid,comupid){
	if(!XZB.Cookie.Get(softid+'_comup_'+comupid)){
        $.ajax({
            type: "POST",
            url: "?ac=review_vote",
            data: "softid="+softid+"&comup="+comupid,
            cache:false,
            success: function(msg){
                //�ı���ص�����
                if(msg == 1){
                    var upnum = $(obj).find(".upnum")[0];
                    if(!upnum.innerHTML){
                      upnum.innerHTML = 0;
                    }
                    //����
                    var good = parseInt(upnum.innerHTML,10)+1;
                    upnum.innerHTML = good;
                }else if(msg==-1)
				{
					 alert("���Ѿ�������������");
				}
                XZB.Cookie.Set(softid+'_comup_'+comupid,"1");
            }
        });
    }else{
        alert("���Ѿ�������������");
    }
}

//��ȡajax����
XZB.getAjaxContent = function(url,callback){
	$.get(url,function(data){
		if(data!=-1){
			callback(data)
		}else{
			return false;
		}
	})
};

//��������б��л�Ч��
XZB.ShowListByType = function(type){
	type = type-0;
    switch(type){
        case 1 :
        $("#js_display_btn").removeClass("display-abb");
        $(".list-main .list-data-bd").hide();
        break
        case 0:
        $("#js_display_btn").addClass("display-abb");
        $(".list-main .list-data-bd").show();
        break
    }
    XZB.Cookie.Set("ShowListByType",type);
}

var ResultControl = {};
var ylmf_screen_manager_class;
ResultControl.ShowScreen = function(box_id,isshow){
	if(ylmf_screen_manager_class == undefined){
		ylmf_screen_manager_class = new ScreenManager();
	}
	ylmf_screen_manager_class.Display(document.getElementById(box_id),isshow);
}

var ScreenManager = function(){
	var screenbox;
	var init = function(){
		screenbox = document.getElementById("screen");
		if(!screenbox){
			screenbox  = document.createElement("div");
			screenbox.style.position="absolute";
			screenbox.style.top=0;
			screenbox.style.left=0;
			screenbox.style.display = "none";
			screenbox.className = "screen-style";
			$(screenbox).insertBefore($(document.body).children()[0]);
		}
		//document.body.appendChild(screenbox);
	}
	var activeBox = null;
	var oldBox = null;
	var isShow = false;
	this.Display = function(box,isshow){
		var obj=$(screenbox);
		var hei=$(document).height()<$(window).height()?$(window).height():$(document).height();
		obj.width("100%")
			 .height(hei);
		var showBox = $(box);
		if(isshow){
			if(oldBox == null){
				oldBox = showBox;
			}
			else{
				oldBox = activeBox;
			}
			activeBox = showBox;
			if(oldBox){
				oldBox.hide();
			}
			showBox.show();
			if(!isShow){
				obj.show();
				isShow = true;
			}
		}
		else{
			activeBox = null;
			oldBox = null;
			obj.hide()
			showBox.hide();
			isShow = false;
		}
	}
	init();
}

var hideReplyBox = function(ele){
	ResultControl.ShowScreen("com_alert",false);
}

var focusName = function(){
    document.getElementById("your_name").focus();
}

//LoadJs
XZB.isloadjs = false;
XZB.loadjs = function(jsList,callback){
	var jsListLen,jsList,i=0;
	
	if(jsList instanceof Array){
		jsListLen = jsList.length;
	}else{
		var a = new Array();
		a.push(jsList);
		jsList = a;
		jsListLen = jsList.length;
	}
	
	function createjs(uri){
		if(!XZB.isloadjs){
			var script  = document.createElement("script");
			script.setAttribute('type', 'text/javascript');         
			script.setAttribute('src', uri);
			document.getElementsByTagName("head")[0].appendChild(script);
			script.onreadystatechange = script.onload = function(){
				clearTimeout(t);
				if(this.readyState == "loaded" || this.onload){
					i++;
					if(i<jsListLen){
						createjs(jsList[i]);
					}else{
						if(callback){
							XZB.isloadjs = true;
							setTimeout(function(){callback()},0);
						}
					}
				}	
			}
		}
		if(!XZB.isloadjs){
			var t = setTimeout(function(){
				alert("����JS�ļ�ʧ��");
			},5000);
		}else{
			setTimeout(function(){callback()},0);
		}
	}	
	createjs(jsList[i]);
}

//autoComplete
;(function($){
	$.fn.autoComplete = function(opt){
		opt = $.extend({
			source : "undefined",
			delay : 100,
			resultsClass : 'ac_results',
			selectClass : 'hover',
			matchClass : 'kw',
			minchars : 2,
			delimiter : '\n',
			onSelect : false
		},opt || {});

        var $resultes,$t,$active;
        var $selectCur=0;
        var that=this;
        var theForm = that.parent("form");
        var formAction = theForm.attr("action");
        opt.dataCache = {};
		
		if(opt.source == "undefined") return;
		that[0].onclick = function(){
			 //���ݻ�������뷨�µ�BUG
			that[0].oninput = function(){
				activeAutoComplete();
			}
			//����IE�����뷨�µ�BUG
			that[0].onpropertychange = function(){
				activeAutoComplete();
			}
		}

        //���α��س��ύ.�����ťģ���ύ;
        theForm.submit(function(){return false});
		theForm.find("input[type='submit']").click(function(){
           if(opt.resultList.children().hasClass("hover")){
               selectCurrent();
               return;
           }
		   if(that[0].value==""){
				alert("����������Ҫ������!");
				return false;
			}else{
            	location.href = formAction + "&i=i&q=" + that[0].value ;
			}
        });

		//����input�ؼ����ԣ��Լ���ʼ������б�
		(function getInput(obj){
			obj.attr("autocomplete","off");
			opt.resultList = $('<ul id="sug_normal"></ul>');
			$("#search_sug").append(opt.resultList.addClass(opt.resultsClass));
		})(this);

		
		//���ý���б�λ��
		function resetPosition(){
			var inputOffset = that.offset();
			opt.resultList.css({
				"top":(inputOffset.top + that.height()) + 'px',
				"left": (inputOffset.left) + 'px'
			});
		}
        resetPosition();
        $(window).load(resetPosition).resize(resetPosition);

        that.blur(function(){
            finish();
        });

        //������ʼ
        that.keydown(function(e){
            var lastKey = e.keyCode;
            switch(lastKey){
                case 38:
                    //up
                    e.preventDefault();
                    if($active){
                        focusPrev();
                    }
                    break;
                case 40:
                    //down
                    e.preventDefault();
                    if($active){
                        focusNext();
                    }
                    break;
                case 9:
                case 13:
                    //enter
                    e.preventDefault();
                    if ($active) {
                        selectCurrent();
                    }else{
						if(that[0].value==""){
							alert("����������Ҫ������!!");
							return;
						}else{
                        	location.href = formAction + "&i=i&q=" + that[0].value ;
						}
                    }
                    break;
                case 27:
                    //esc
                    e.preventDefault();
                    if ($active) {
                        finish();
                    }
                    break;
                default:
                    activeAutoComplete();
            }
        });

        function activeAutoComplete(){
            opt.keywords = $.trim(that.val());
            if(opt.keywords.length<opt.minchars){
                finish();
            }else{
                getData();
                $selectCur = 0;
            }

        }

		//��ȡ����
		function getData(){
            if(opt.dataCache[opt.keywords]){
                $("#sug_normal").empty();
                $("#sug_normal").append(opt.dataCache[opt.keywords]);
                opt.resultList.show();
                $active = true;
            }else{
                $.ajax({
                    type : "GET",
                    url : opt.source,
                    data : "&i=i&q="+ opt.keywords.encode(true),
                    success : function(msg){
                        var itemList = hightLight(msg,opt.keywords);
                        if(itemList.length==0){
                            $("#sug_normal").empty();
                            return;
                        }
                        if(itemList.length!=0){
                            $("#sug_normal").empty();
                            $("#sug_normal").append(itemList);
                            opt.dataCache[opt.keywords] = itemList;
                            opt.resultList.show();
                            $active = true;
                        }
                    }
                });
            }
		}

		//�����ؼ���
		function hightLight(data,q){
			var items = '<span style="display: none" onclick="location.href=\''+formAction+'&i=i&q='+q+'\'"></span>';
			var tokens = data.split(opt.delimiter);
			for(var i = 0; i<tokens.length; i++){
				var token = $.trim(tokens[i]);
				if(token){
					var tmp = token.split("[id]");
					tmp[0] = tmp[0].replace(
						new RegExp(q,'ig'),
						function(q){
							return '<span class="'+opt.matchClass + '">' +q+'</span>';
						}
					);
					items += '<li id="'+tmp[1]+'" class="com'+tmp[2]+'" onclick="location.href=\''+'http://www.6686.com/html/'+tmp[1]+'.html\'">'+tmp[0]+'</li>';
				}
			}
			return items;
		}

        //��꾭��
        opt.resultList.hover(function(){
            opt.resultList.children().each(function(i,n){
                $(n).mouseover(function(){
                    $(n).addClass("hover").siblings().removeClass("hover");
                    focus(i+1)
                })
            });
            that.unbind("blur");
        },function(){
            that.blur(function(){
                finish();
            });
        })


		//�ر�����
        function finish(){
            $active = false;
            opt.resultList && opt.resultList.hide();
        }

        //down
        function focusNext(){
            $selectCur++;
            focus($selectCur);
        }

        //up
        function focusPrev(){
            $selectCur--;
            focus($selectCur);
        }

        //focus
        function focus(cur){
            cur = cur%opt.resultList.children().length;
            if(!opt.resultList.children().hasClass("hover")){
                if(cur==1){cur=2;$selectCur=2;}
            }
            opt.resultList.children().eq(cur-1).addClass("hover").siblings().removeClass("hover");
            $selectCur = cur;
        }
        //selectCurrent
        function selectCurrent(){
            if(opt.resultList.children().hasClass("hover")){
                opt.resultList.children(".hover").trigger("click");
            }else{
                location.href = formAction + "&i=i&q=" + opt.keywords ;
            }

        }

	}
})(jQuery);

//����������ͼ�Ŵ�Ч��
XZB.showBigPic = function(picUrl){
	var e = document.createElement("div");
	e.id="mask";
	e.style.width = document.documentElement.clientWidth+"px";
	e.style.height = $(document).height()+"px";
	e.style.backgroundColor = "black";
	e.style.position="absolute";
	e.style.zIndex="99990";
	e.style.top="0";
	e.style.left="0";
	if(/msie/i.test(navigator.userAgent)){  
    	e.style.filter = 'alpha(opacity=' + (50) + ')'; 
    }else{  
    	e.style.opacity = 0.5;  
    }
	
	var p = document.createElement("div");
	p.id="bigPicBox";
	p.innerHTML="ͼƬ�����У����Ե�..."
	p.style.position="absolute";
	p.style.top = document.documentElement.clientHeight/2+document.documentElement.scrollTop+document.body.scrollTop+"px";
	p.style.left = "50%";
	p.style.padding = "3px";
	p.style.border = "1px solid #D8D8D8";
	p.style.background = "#FFF";
	p.style.zIndex="99999";
	
	var closeBtn = document.createElement("div");
	closeBtn.style.width = "20px";
	closeBtn.style.height = "20px";
	closeBtn.style.background = "url(../static/images/closePic.gif) no-repeat";
	closeBtn.style.position = "absolute";
	closeBtn.style.top = "0";
	closeBtn.style.right = "0";
	closeBtn.style.cursor = "pointer";
	closeBtn.onclick = hideBigPic;
	
	document.getElementsByTagName("body")[0].appendChild(e);
	document.getElementsByTagName("body")[0].appendChild(p);
	
	var imageLoader = new Image();
	imageLoader.onload = function(){
		p.innerHTML = "<img src='"+picUrl+"'>";
		p.style.width = imageLoader.width+"px";
		p.style.height = imageLoader.height+"px";
		p.style.marginLeft = -imageLoader.width/2+"px";
		p.style.marginTop = -imageLoader.height/2+"px";
		p.appendChild(closeBtn);
	}
	imageLoader.src = picUrl;

	window.onscroll = function(){
			p.style.top = document.documentElement.clientHeight/2 + document.documentElement.scrollTop + document.body.scrollTop + "px";
	}
	
	function hideBigPic(){
		e.onclick = null;
		e.parentNode.removeChild(e);
		p.onclick = null;
		p.parentNode.removeChild(p);
		imageLoader = null;
	}
	e.onclick = hideBigPic;
}

//softHitsJsonp
XZB.softHitsJsonp = function(num){
	$("#down_num").html("���� "+num+" ������");
}
	

//ִ��

$(document).ready(function(){

	//Tab�л�Ч��ִ��
	XZB.tab([{
		menuWrap : '.nav ul',
		contentWrap : '#sub-category',
		activeEvent : 'mouseover',
		menuMouseOutRemoveClass : true,
		contentMouseHover : true,
		autoTrigger : false,
		callback:function(){$('#sug_normal').hide()}
	},{
		menuWrap : '.newest-tab',
		contentWrap : '.newest .s-bd',
		callback:function(){ $('#news_first_bd').hide(); $('#news_list_bd').show(); },
		activeEvent : 'mouseover'
	},{
	    menuWrap : '.pc-soft-tab',
		contentWrap : '.pc-soft-tab-content',
		activeEvent : 'mouseover'
	},{
		menuWrap : '.hot-soft-list ul',
		contentWrap : '.hot-soft-wrap',
		activeEvent : 'mouseover'
	},{
		menuWrap : '.rank-soft-menu',
		contentWrap : '.rank-soft-content',
		activeEvent : 'mouseover'
	},{
        menuWrap : '.soft-comment-tab',
        contentWrap : '.softcom-content',
		activeEvent : 'mouseover'
    },{
        menuWrap : '.sub-newest-tab',
        contentWrap : 'sub-newest-tab',
		activeEvent : 'mouseover',
        callback:function(){
            var more = $('#phone_more'),
                active = $('.sub-newest-tab').find('.active');
            more.attr('href',active.attr('rel'));
        }
    }]);
    
    //news_first�����
    $('#news_first').click(function(){
        var contents = $('.newest-tab').children();
        $('#news_list_bd').hide();
        $('#news_first_bd').show();
        contents.each(function(i){
            $(this).removeClass('active');
        });
    });
    //��ʾnews��һ��
    if( $('#news_first').get(0) ) {
        $('#news_first_bd').show();
        $('#news_list_bd').hide();
    }
	
	//�������Ϲ���
	//XZB.tipsUp({
	//	innerWrap:".notice-lis",
	//	outerWrap:".notice-icon",
	//	upHeight:"21px"
	//});
	XZB.tipsUp({
		innerWrap:".adsLis",
		outerWrap:".adsUp",
		upHeight:"20px"
	})
	
	//ģ������չִ��
	$(".zhuanti li,.newest .s-bd li,.recommend li,.page-recommend li").hover(function(){
		$(this).addClass('onhover')
	},function(){
		$(this).removeClass('onhover')
	}).click(function(){
        var linkto = $(this).find("a").attr("href");
		if(linkto) window.open(linkto);
		return false;
	});

    //������۱�����
    var changeImgState = true;
    $("#code,#code2").bind("click",function(){
        var imgBox = $("#js_img_code");
        imgBox.appendTo("#" + this.id + "_imgbox");
    }).bind("blur",function(){
        if(changeImgState){
            var imgBox = $("#js_img_code");
            imgBox.appendTo("#js_cache_box");
        }
    });
    
    $("#js_img_code").bind("mouseover",function(){
		changeImgState = false;
	}).bind("mouseout",function(){
		changeImgState = true;
	}).bind("click",function(){
		this.src = _PHP_URL + "/?ac=validate_code&t=" + new Date();
	});

});
/*
Сƪ�Ƽ�
*/
var cTab=function(opt){
	//settings
	var settings=jQuery.extend(true,{
		tabHandleList:"#tabHnadle > li",//��ǩͷ
		tabBodyList:"#tabBody > li",//��ǩ����������
		isAutoPlay:{
			time:3000
		},//�Ƿ��Զ�����
		bind:"click",//��ǩ���¼�
		defIndex:0,//Ĭ��ѡ�б�ǩ�±�
		tabOnCssList:"#tabHnadle > li",//��ǩon��ʽ��ӵ�
		tabOnCssName:"tabon"//ѡ�б�ǩ��ʽ
	},opt);
	var isAutoPlay=settings.isAutoPlay,
		bind=settings.bind,
		defIndex=settings.defIndex,
		$tabHandleList=$(settings.tabHandleList),
		tabOnCssName=settings.tabOnCssName,
		$tabOnCssList=$(settings.tabOnCssList),
		$tabBodyList=$(settings.tabBodyList);
	var maxSize=$tabHandleList.size();
	var gotoIndex=function(i){
		if(i>=maxSize){i=0;}else if(i<0){i=maxSize-1;}
		$tabOnCssList.eq(defIndex).removeClass(tabOnCssName);
		$tabOnCssList.eq(i).addClass(tabOnCssName);
		$tabBodyList.eq(defIndex).hide();
		$tabBodyList.eq(i).show();
		defIndex=i;
		return false;
	};
	gotoIndex(defIndex);
	$tabHandleList.each(function(i){
		$(this).bind(bind,function(){gotoIndex(i);});
	});
	//auto
	var timerID;
	var autoPlay=function(){
		timerID=window.setInterval(function(){
			var temp=defIndex+1;
			gotoIndex(temp);
		},isAutoPlay.time);
	};
	var autoStop=function(){
		window.clearInterval(timerID);
	};
	if(isAutoPlay){
		autoPlay();
		$tabHandleList.hover(autoStop,autoPlay);
		$tabBodyList.hover(autoStop,autoPlay);
	}
	//return
	return {gotoIndex:gotoIndex,defIndex:defIndex};
};


/**
 *jsChangeHtml
 */
function jsChangeHtml(a,b){
	document.writeln("<style type=\"text\/css\">");
	document.writeln("#control_size {position:relative;float:left;overflow:hidden; font-family:Tahoma, Geneva, sans-serif,����}");
	document.writeln(".flashNews  a{color:#FFFFFF; text-decoration:none}");
	document.writeln(".flashNews  a:hover{color:#F20000;}");
	document.writeln(".flashNews img{ width:720px; height:260px;}");
	document.writeln(".flashNews .bg {width:100%; height:70px; background:#000000; filter:alpha(opacity=80); -moz-opacity:0.8; opacity:0.49; position:absolute; bottom:0}");
	document.writeln(".flashNews h3 { position:absolute; z-index:10; padding:0px 5px 0 10px; margin:0; font-size:15px; line-height:40px;}");
	document.writeln(".flashNews h3 p { padding:0 0 0 0 ; margin:0; font-weight:normal; font-size:14px}");
	document.writeln(".flashNews .t_s{ height:70px; position:absolute; width:100%; bottom:0px; left:0}");
	document.writeln(".flashNews #SwitchNav { position:absolute; right:7px; bottom:7px; width:75px;  z-index:20;line-height:18px;}");
	document.writeln(".flashNews ul,li{ margin:0; padding:0}");
	document.writeln(".flashNews ul li {text-align:center; list-style-type:none; margin:1px; width:13px; background:url(http://image.hiapk.com/news/icon/flash_li.jpg) no-repeat;float:left; height:13px; cursor:pointer;_display:inline; }");
	document.writeln(".flashNews ul li a {display:block;height:13px;width:13px;text-indent:-9999px; overflow:hidden;}");
	document.writeln(".flashNews ul li a:hover, .flashNews ul li a.sel {background:url(http://image.hiapk.com/news/icon/flash_on.jpg) no-repeat;}");
	document.writeln("<\/style>");
	
	var flash_id_html = "", title = [], fpic = document.getElementById("flashid").getElementsByTagName("img"), controlSize = document.getElementById("control_size"), temp, switcher = [], CurScreen = 0, refreshSwitchTimer, nav = document.getElementById("SwitchNav"), strTemp = "", info = document.getElementById("SwitchTitle"), stime;
	controlSize.style.width = a + "px"; controlSize.style.height = b + "px";
	
	for(var i = 0; i < fpic.length; i++){
		flash_id_html += ((i > 0) ? "<div id=\"switch_" + (i + 1) + "\" style=\"display:none;\" >" : "<div id=\"switch_" + (i + 1) + "\">") + "<a href=" + fpic[i].parentNode.href + " target=\"_blank\" title=\"" + fpic[i].alt + "\"><img src=\"" + fpic[i].src + "\" title=\"" + fpic[i].alt + "\" ><\/a><\/div>";
		temp = fpic[i].alt.split("��");
		switcher.push({ url:fpic[i].parentNode.href, alt:temp[0], stitle:(temp.length == 1) ? " " : temp[1] });
		strTemp += "<li class=\"" + i + "\"><a href=\"javascript:;\" target=\"_self\">" + (i + 1) + "<\/a><\/li>";
	}
	nav.innerHTML = strTemp;
	document.write(flash_id_html);
	
	var divs = [], time, lis = document.getElementById("SwitchNav").getElementsByTagName("a");
	for(var i = 0; i < fpic.length; i++){
		divs.push(document.getElementById("switch_" + (i + 1)));
		lis[i].onmouseover = limouseover;
		lis[i].onmouseout = mouseout;
	}
	temp = divs[0];strTemp = lis[0];strTemp.className = "sel"
	function switchPic(){
		temp.style.display = "none"; strTemp.className = "";
		temp = divs[CurScreen];strTemp = lis[CurScreen];
		temp.style.display = "block";strTemp.className = "sel";
		info.innerHTML = "<h3><a href=\"" + switcher[CurScreen].url + "\" target=\"_blank\">" + switcher[CurScreen].alt + "<\/a><p><a href=\"" + switcher[CurScreen].url + "\" target=\"_blank\">" + switcher[CurScreen].stitle + "<\/a><\/p><\/h3>";
		CurScreen = (++CurScreen == fpic.length) ? 0 : CurScreen;
		time = setTimeout(switchPic, 3000);
	}switchPic();
	info.onmouseover = mouseover; info.onmouseout = mouseout; 
	function mouseover(){ clearTimeout(time); clearTimeout(stime); }
	function limouseover(){ clearTimeout(time); clearTimeout(stime); CurScreen = this.parentNode.className; switchPic(); clearTimeout(time); }
	function mouseout(){ clearTimeout(stime); stime = setTimeout(switchPic, 3000); }
}

//��ҳ�ö����
function TopAdInit() {

   $(".ad ul").find("li").css("visibility", "visible");

    //��ҳ���Ч��
    var jqLi = $(".num > li");
    var len = jqLi.length;
    var index = 0;
    var adTimer;
    jqLi.mouseover(function () {
        index = jqLi.index(this);
        showImg(index);
    }).eq(0).mouseover();
    //���� ֹͣ������������ʼ����.
    $('.ad').hover(function () {
        clearInterval(adTimer);
    }, function () {
        adTimer = setInterval(function () {
            showImg(index)
            index++;
            if (index == len) { index = 0; }
        }, 5000);
    }).trigger("mouseleave");

}

//���Ч��,ͨ������top ������ʾ��ͬ�Ļõ�Ƭ
function showImg(index) {
    var adHeight = $(".content_right .ad").height(),title_info = $("#title_info");
    $(".slider").stop(true, false).find('li').hide().eq(index).fadeIn('slow');
	$(".num li").removeClass("on").eq(index).addClass("on");
	title_info.html($(".slider li").eq(index).find("a").attr("title"));
    
}
if (self.location != top.location) {
    top.location.href = "/";
}


/*
function:   RescrollGapLevelSlide
author:     jin
depends:    jquery.js(1.2.6~1.4.0)
			
firstTime:  2009-11-19
lastTime:   2010-05-24
*/
(function($) {
	$.fn.rglSlide=function(opt){
		//settings
		var settings=jQuery.extend(true,{
			productScrollWitch:"ul",//���thisѡ�����������������Ĵ�div
			list:"ul > li",//���thisѡ������list����
			row:1,//���飬����������ֱ�����ĵط��õ���֮��ֻΪ���ִ���ͬ�������������޸Ĵ�ֱ������
			seeColumn:1,//���ӷ�Χ������Ŀ
			step:1,//��������
			speed:"normal",//�����ٶ�
			orientation:"left",//�Զ��ֲ�����ʱ�����趨�������������ֻ��Ϊ������λ��ֻ�����ң�left,right
			isAutoPlay:{
				timer:3000,//���ʱ��
				rescrollTime:2000,//�ع�ʱ��
				reboundState:true//�ص�״̬��Ĭ�ϻع�����ʱ�Զ��رջص��¼����ع��ر�ʱ�Զ������ص��¼������Ҫͬʱ�ر����ֹ��ر�
			},//�Զ����������ã�falseʱ�����Զ����Ź���
			isBtn:{
				step:1,//������ֵ
				left:"#left",//����ť
				right:"#right",//���Ұ�ť
				disableCss:"disable",//��ťʧЧcss
				isChangeState:true//��ť�¼��Ƿ񴥷���������״̬
			},//��ť�����ã�falseʱ���ð�ť���ƹ���
			bugD1Width:0,//table��������¾�����ȡ����widthֵ�������Դ˿ɽ��еĲ�������,����������������øò���
			callback:false//callback:function($this,sTop,splitWidth,d1Width,d2Width){}
		},opt);
		//settings
		var productScrollWitch=settings.productScrollWitch,
			list=settings.list,
			row=settings.row,
			seeColumn=settings.seeColumn,
			step=settings.step,
			speed=settings.speed,
			orientation=settings.orientation,
			aut=settings.isAutoPlay,
			autTimer=aut.timer,
			autRescrollTime=aut.rescrollTime,
			autReboundState=aut.reboundState,
			btn=settings.isBtn,
			btnStep=btn.step,
			btnLeft=$(btn.left),
			btnRight=$(btn.right),
			btnDisableCss=btn.disableCss,
			btnIsChangeState=btn.isChangeState,
			bugD1Width=settings.bugD1Width,
			callback=settings.callback;
		//div
		var $this=$(this);
		var thisselector=$this.selector;
		var d1=$this,
			d2=d1.find(productScrollWitch),
			d3=d1.find(list);
		//d1Width
		var d1Width=d1.width();
		if(bugD1Width!=0){
			d1Width=bugD1Width;
		}else{
			if(d1Width==0){
				alert("Err:d1Width==0");
			}
		}
		//other width size ...
		var d3Size=d3.size();
		var splitWidth=d1Width/seeColumn;
		var stepWidth=step*splitWidth;
		var stepWidthBtn=btnStep*splitWidth;
		var d2Width=splitWidth*Math.ceil(d3Size/row);
		//fall short of nmuber,return false
		if(d2Width<d1Width)return false;
		//bear with
		d2.width(d2Width+100);
		//
		var flag=true;
		//left
		var left=function(e){
			if(!flag)return false;
			flag=false;
			if(btnIsChangeState){
				orientation="left";
			}
			var _stepWidth=stepWidth;
			if(e){
				_stepWidth=stepWidthBtn;
			}else{
				_stepWidth=stepWidth;
			}
			if((d1Width+d1.scrollLeft())==d2Width){
				btnLeft.addClass(btnDisableCss);
				if(e){
					flag=true;
				}else{
					if(autRescrollTime){
						d1.animate({scrollLeft:0},autRescrollTime,function(){
							btnLeft.removeClass(btnDisableCss);
							btnRight.addClass(btnDisableCss);
							if(callback)callback($this,0,splitWidth,d1Width,d2Width);
							flag=true;
						});
					}else{
						if(autReboundState){
							orientation="right";
							if(aut){
								autoStop();
								autoPlay();
							}
						}
						flag=true;
					}
				}
			}else if(_stepWidth+d1.scrollLeft()>=d2Width-d1Width){
				d1.animate({scrollLeft:d2Width-d1Width},speed,function(){
					btnLeft.addClass(btnDisableCss);
					btnRight.removeClass(btnDisableCss);
					if(callback)callback($this,d2Width-d1Width,splitWidth,d1Width,d2Width);
					flag=true;
				});
			}else{
				d1.animate({scrollLeft:d1.scrollLeft()+_stepWidth},speed,function(){
					btnRight.removeClass(btnDisableCss);
					if(callback)callback($this,d1.scrollLeft(),splitWidth,d1Width,d2Width);
					flag=true;
				});
			}
			return false;
		};
		//right
		var right=function(e){
			if(!flag)return false;
			flag=false;
			if(btnIsChangeState){
				orientation="right";
			}
			var _stepWidth=stepWidth;
			if(e){
				_stepWidth=stepWidthBtn;
			}else{
				_stepWidth=stepWidth;
			}
			if(d1.scrollLeft()==0){
				btnRight.addClass(btnDisableCss);
				if(e){
					flag=true;
				}else{
					if(autRescrollTime){
						d1.animate({scrollLeft:d2Width-d1Width},autRescrollTime,function(){
							btnRight.removeClass(btnDisableCss);
							btnLeft.addClass(btnDisableCss);
							if(callback)callback($this,d2Width-d1Width,splitWidth,d1Width,d2Width);
							flag=true;
						});
					}else{
						if(autReboundState){
							orientation="left";
							if(aut){
								autoStop();
								autoPlay();
							}
						}
						flag=true;
					}
				}
			}else if((d1.scrollLeft())<=_stepWidth){
				d1.animate({scrollLeft:0},speed,function(){
					btnRight.addClass(btnDisableCss);
					btnLeft.removeClass(btnDisableCss);
					if(callback)callback($this,0,splitWidth,d1Width,d2Width);
					flag=true;
				});
			}else{
				d1.animate({scrollLeft:d1.scrollLeft()-_stepWidth},speed,function(){
					btnLeft.removeClass(btnDisableCss);
					if(callback)callback($this,d1.scrollLeft(),splitWidth,d1Width,d2Width);
					flag=true;
				});
			}
			return false;
		};
		//gotoscroll
		var gotoscroll=function(xy){
			if(!flag)return false;
			flag=false;
			d1.animate({scrollLeft:xy},speed,function(){
				if(callback)callback($this,xy,splitWidth,d1Width,d2Width);
				if(xy==0){
					btnRight.addClass(btnDisableCss);
					btnLeft.removeClass(btnDisableCss);
				}else if(xy==(d2Width-d1Width)){
					btnRight.removeClass(btnDisableCss);
					btnLeft.addClass(btnDisableCss);
				}else{
					btnRight.removeClass(btnDisableCss);
					btnLeft.removeClass(btnDisableCss);
				}
				flag=true;
			});
			return false;
		};
		//timer
		var timerID;
		var autoPlay=function(){
			switch(orientation)
			{
				case "left":timerID=window.setInterval(left,autTimer);break;
				case "right":timerID=window.setInterval(right,autTimer);break;
			}
			return false;
		};
		var autoStop = function(){
			window.clearInterval(timerID);
			return false;
		};
		if(aut){
			//ready autoPlay
			autoPlay();
			//
			$this.hover(autoStop,autoPlay);
			if(btn){
				btnLeft.hover(autoStop,autoPlay);
				btnRight.hover(autoStop,autoPlay);
			}
		}
		//btn
		if(btn){
			btnLeft.click(left);
			btnRight.click(right);
			switch(orientation)
			{
				case "left":
					//���⶯����ͬʱ��ʼ��callback
					d1.scrollLeft(0);gotoscroll(0);
					btnRight.addClass(btnDisableCss);
					break;
				case "right":
					//���⶯����ͬʱ��ʼ��callback
					d1.scrollLeft(d2Width-d1Width);gotoscroll(d2Width-d1Width);
					btnLeft.addClass(btnDisableCss);
					break;
			}
		}
		if(!aut){
			return {$this:$this,autoStop:false,autoPlay:false,gotoscroll:gotoscroll};
		}
		return {$this:$this,autoStop:autoStop,autoPlay:autoPlay,gotoscroll:gotoscroll};
	};
})(jQuery);



//����
function searchlist(obj,parentObj){
var x = $(obj).parents(parentObj).find(".s_box"),
		 value = x.attr("value");
		if(value ==""||value =="���������Ȥ�Ĺؼ���"){alert("������ؼ���");}
		else{
		 var value = 
		 window.open("http://www.baidu.com/s?q1="+ value +"&q2=&q3=&q4=&rn=10&lm=0&ct=0&ft=&q5=&q6=hiapk.com&tn=baiduadv");
			}
	
	}


//�����л�
function nav(id){
	//�л�Ч��
	id = "l_" + id ;
	if( $(document.getElementById(id)) ) {$(document.getElementById(id)).addClass("on");}
	//����Ч��
	$("#nav li").hover(function(){
		$(this).addClass("on")							 
	},function(){
		if( $(this).attr("id") != id ) {$(this).removeClass("on");}
	})
}

//�������¼�
function searchBox(){
	var s_box = $(".s_box")
	for(var i=0;i<s_box.length;i++){
	s_box.eq(i).focus(function(){
		if($(this).attr("value") =='���������Ȥ�Ĺؼ���')	{
			$(this).attr("value","");
			}
		$(this).addClass("selected");
	  });
	s_box.eq(i).blur(function(){
		if($(this).attr("value") =='')	{
			$(this).attr("value","���������Ȥ�Ĺؼ���");
			}	
		$(this).removeClass("selected");
	  });
	}
}


//������Ӧ�¼�
document.onkeydown=function(b){
	b=(b)?b:window.event;                     
	if(b.keyCode=="13"){
		$(".selected").nextAll().eq(0).click();
	}
}



//�����´��ڴ�
function newTarget(){
	var Obj = $(".wrapper").find("a");
	for(var i=0; i<Obj.length;i++){
	if(Obj.eq(i).attr("target")=="_blank")
	{ Obj.eq(i).attr("target","_blank")}
	else{
	Obj.eq(i).attr("target","_blank");	
		}
		}
	$(".nav_top,.search_con,.search").find("a").attr("target","_self")
	
	}





 $(document).ready(function(){	
		TopAdInit();
$(".P_Center_r dl:last").addClass("lasted");
/*
function:	rglSlide
depends:    jquery.js(1.2.6~1.4.0)
			rglSlide.js(rglSlide)
*/
$("#rglSlide").rglSlide({
	productScrollWitch:"ul",//���thisѡ�����������������Ĵ�div
	list:"ul > li",//���thisѡ������list����
	row:1,//���飬����������ֱ�����ĵط��õ���֮��ֻΪ���ִ���ͬ�������������޸Ĵ�ֱ������
	seeColumn:3,//���ӷ�Χ������Ŀ
	step:1,//��������
	isAutoPlay:{
		timer:3000,//���ʱ��
		rescrollTime:false,//�ع�ʱ�䣬�ع��ر�ʱ�Զ������ص�����ع�����Ҫ���ص�Ч������������reboundState:false
		orientation:"left"//Ĭ�Ϲ�������ֻ�����£�top,bottom
	},//�Զ����������ã�falseʱ�����Զ����Ź���
	isBtn:{
		step:1,//������ֵ
		left:"#rglSlideLeft",//����ť
		right:"#rglSlideRight",//���Ұ�ť
		disableCss:"disable"//��ťʧЧcss
	}//��ť�����ã�falseʱ���ð�ť���ƹ���
});


/*
function:	��ǩ�л�
depends:    jquery.js(1.2.6~1.4.0)
			ctab.js(cTab)
*/
cTab({
	tabHandleList:"#tab_title > li",//��ǩͷ
	tabBodyList:"#tab_con > ul",//��ǩ����������
	isAutoPlay:false,//�Ƿ��Զ�����
	bind:"mouseover",//��ǩ���¼�
	defIndex:0,//Ĭ��ѡ�б�ǩ�±�
	tabOnCssList:"#tab_title > li",//��ǩon��ʽ��ӵ�
	tabOnCssName:"on"//ѡ�б�ǩ��ʽ
});

cTab({
	tabHandleList:"#tab_2 > li",//��ǩͷ
	tabBodyList:"#necessary_con > .necessary_box",//��ǩ����������
	isAutoPlay:{time:3000},//�Ƿ��Զ�����
	bind:"mouseover",//��ǩ���¼�
	defIndex:0,//Ĭ��ѡ�б�ǩ�±�
	tabOnCssList:"#tab_2 > li",//��ǩon��ʽ��ӵ�
	tabOnCssName:"on"//ѡ�б�ǩ��ʽ
});

cTab({
	tabHandleList:"#tab_1 > li",//��ǩͷ
	tabBodyList:"#Featured_box > ul",//��ǩ����������
	isAutoPlay:{time:3000},//�Ƿ��Զ�����
	bind:"mouseover",//��ǩ���¼�
	defIndex:0,//Ĭ��ѡ�б�ǩ�±�
	tabOnCssList:"#tab_1 > li",//��ǩon��ʽ��ӵ�
	tabOnCssName:"on"//ѡ�б�ǩ��ʽ
});

$("#Channel_btn").click(function(){
	$("#Channel_list").slideToggle("fast");					 
	})
$(".nav_meun li").hover(function(){
	$(this)	.addClass("on")							 
	},function(){
	$(this)	.removeClass("on")		
	})
});
 
 var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0fa22e9186a72beac524bec07a296671";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

