var shortResultTimeOut ="";
function genshortresult(){
  var el=$("#searchfield");
  if(shortResultTimeOut == ""){
    setTimeout('shortResultTime()', 100);
  }
  return false;
}
function stopEvent(e){
      e = e || window.event;
    if(e.preventDefault) {
      e.preventDefault();
      e.stopPropagation();
    }else{
      e.returnValue = false;
      e.cancelBubble = true;
    }
}
	function shortResultTime(){
	
  shortResultTimeOut = "";
  var el=$("#searchfield");
  var keyWord = el.val();
   var typeid = $("#typeid").val();
  if($.trim(keyWord).length >0){
 keyWord =  encodeURIComponent(keyWord);

     var url="/shouji/api.php?op=searchWord&action=searchword&typeid="+typeid+"&q="+keyWord;
    $.ajax({
     type: "GET",
     url: url,
     dataType:'json',  
     cache : false,  
     async : false,  
     success: function(data){

    var html="";
    if(data.data && data.count>0){
	     
    $.each(data.data, function(ind, obj){
        html +='<li role="presentation" class="ui-menu-item"><a tabindex="-1"  id = "li-u-'+ind+'" class="ui-corner-all " href="'+obj.url+'" >'+obj.title+'</a></li>';
    });
    }

 var srEl=$("#searchlist");
    srEl.html(html);
    initSelect();
    if(html!=""){
    srEl.show();
    }else{
    srEl.hide();
    }
    },     error: function(){

     }
    });
  }else{
    $("#searchlist").fadeOut();
   genshortresult();
  }
} 
function clearSelectedOptBgColor(target){
    if (target.seletedIndex >= 0){
	 $(".ui-menu li a").removeClass("ui-state-focus");
	 		var inputval=$("#li-u-"+target.seletedIndex).text();
        inputval = inputval.replace(/<[^>].*?>/g,"");   
		$("#searchfield").val(inputval);
    }
  }

  function setSelectedOptBgColor(target){
    $("#li-u-"+target.seletedIndex).addClass("ui-state-focus");
			var inputval=$("#li-u-"+target.seletedIndex).text();
        inputval = inputval.replace(/<[^>].*?>/g,"");   
		$("#searchfield").val(inputval);
  }
function initSelect(){
    var upKeyCode = 38;
    var downKeyCode = 40;
    var enterKeyCode = 13;
    oInput = document.getElementById("searchfield");
    oInput.options = $(".ui-menu li")
    oInput.seletedIndex = -1;
    oInput.onkeyup = function(event){
    if (event == undefined){
    event = window.event;
    }

    switch (event.keyCode){
      case upKeyCode:
        clearSelectedOptBgColor(this);
        this.seletedIndex--;
        if (this.seletedIndex < 0)
        this.seletedIndex = this.options.length - 1;
        setSelectedOptBgColor(this);
        break;

      case downKeyCode:
      clearSelectedOptBgColor(this);
        this.seletedIndex++;
        if (this.seletedIndex >= this.options.length)
        this.seletedIndex = -1;
        setSelectedOptBgColor(this);
        break;

      case enterKeyCode:
        break;
		default:
        genshortresult();
        clearSelectedOptBgColor(this);
        break;

    }
	
    };
    oInput.onblur = function(){
      clearSelectedOptBgColor(this);
      this.seletedIndex = -1;
      clearHover();
    };
}
$(".ui-menu li").live('click',function(){
	var inputval=$(this).text();
     inputval = inputval.replace(/<[^>].*?>/g,"");   
		$("#searchfield").val(inputval);

	});
 $(".ui-menu li a").live('hover',function(){
 $(".ui-menu li a").removeClass("ui-state-focus");
   $(this).addClass("ui-state-focus");
  })
$(function() {
  $(document).click(hideshortresult);
})	
function hideshortresult() {
  $(".ui-menu").hide()
}

$(function() {
var searchword ="µ¶Ëþ´«Ææ";
$("#searchfield").val(searchword);
$("#searchfield").focus(function(){
if($(this).val()==searchword){
$(this).val("");
}
               $(this).addClass('bkeyword');
            }).blur(function(){
                $(this).removeClass('bkeyword');
				if($(this).val()==""){
				$("#searchfield").val(searchword);
				}
            });
            });