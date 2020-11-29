
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
		var ljyy ='<b>����ʱ��: </b>'+$("#gxsj").html()+'<br>';
		var ljsq ='<b>�����Ȩ: </b>'+$("#rjsq").html()+'<br>';
		var body = '<b>�������: </b><br>'+$("#soft-intro").html()+'<br />';
		var pic = (typeof($("#jietu-pic").html()) == 'undefined' || $("#jietu-pic").html() == null) ? '' : $("#jietu-pic").html().replace(/_thumb/g,'_big') +'<br>';
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