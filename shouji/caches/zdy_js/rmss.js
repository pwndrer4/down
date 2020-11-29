function PCMSAD(PID) {
  this.ID        = PID;
  this.PosID  = 0; 
  this.ADID		  = 0;
  this.ADType	  = "";
  this.ADName	  = "";
  this.ADContent = "";
  this.PaddingLeft = 0;
  this.PaddingTop  = 0;
  this.Wspaceidth = 0;
  this.Height = 0;
  this.IsHitCount = "N";
  this.UploadFilePath = "";
  this.URL = "";
  this.SiteID = 0;
  this.ShowAD  = showADContent;
  this.Stat = statAD;
}

function statAD() {
	var new_element = document.createElement("script"); 
	new_element.type = "text/javascript";
	new_element.src="http://www.xpgod.com/shouji/index.php?m=poster&c=index&a=show&siteid="+this.SiteID+"&spaceid="+this.ADID+"&id="+this.PosID; 
	document.body.appendChild(new_element);
}

function showADContent() {
  var content = this.ADContent;
  str = '<a href="http://www.xpgod.com/shouji/index.php?q=ÂÒ¶·Î÷ÓÎ&catdir=game&m=search&c=index&a=xpdsearch" class="rmss_a">ÂÒ¶·Î÷ÓÎ</a><a href="http://www.xpgod.com/shouji/index.php?q=ÃÎ»ÃÎ÷ÓÎ&catdir=soft&m=search&c=index&a=xpdsearch" class="rmss_a">ÃÎ»ÃÎ÷ÓÎ</a><a href="http://www.xpgod.com/shouji/index.php?q=ÎÒ½Ðmt2&catdir=game&m=search&c=index&a=xpdsearch" class="rmss_a">ÎÒ½Ðmt2</a><a href="http://www.xpgod.com/shouji/index.php?q=È¥°ÉÆ¤¿¨Çð&catdir=game&m=search&c=index&a=xpdsearch" class="rmss_a">È¥°ÉÆ¤¿¨Çð</a><a href="http://www.xpgod.com/shouji/index.php?q=µ¶Ëþ´«Ææ&catdir=game&m=search&c=index&a=xpdsearch" class="rmss_a">µ¶Ëþ´«Ææ</a>';
  document.write(str);
}
 
var cmsAD_1 = new PCMSAD('cmsAD_1'); 
cmsAD_1.PosID = 1; 
cmsAD_1.ADID = 11; 
cmsAD_1.ADType = ""; 
cmsAD_1.ADName = ""; 
cmsAD_1.ADContent = ""; 
cmsAD_1.URL = ""; 
cmsAD_1.SiteID = 1; 
cmsAD_1.Width = 570; 
cmsAD_1.Height = 260; 
cmsAD_1.UploadFilePath = ''; 
cmsAD_1.ShowAD();

var isIE=!!window.ActiveXObject; 
if (isIE){

	if (document.readyState=="complete"){
		cmsAD_1.Stat();
	} else {
		document.onreadystatechange=function(){
			if(document.readyState=="complete") cmsAD_1.Stat();
		}
	}
} else {
	cmsAD_1.Stat();
}