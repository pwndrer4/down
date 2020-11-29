
<? 
header("Content-type: text/html; charset=utf-8"); 
$url=$_GET["url"];
if($url==''){echo "无下载地址";}
$urll=base64_decode($url);
header("Location:".$urll);?>