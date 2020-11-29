$(function(){
var opxzq = 1;//1¿ªÆô0¹Ø±Õ
var open = $("#con_dxz").attr("data");
var softid = $("#con_dxz").attr("softid");
var name = $("#con_dxz").attr("name");
if(opxzq==1 && open!=2){
var url = "http://url.tudown.com/down/"+name+"@134_"+softid+".exe";
$('.show_xzq a').attr('href',url);
$('.show_xzq a').attr('onclick',"count_down("+softid+",'xzq')");
}
})
	