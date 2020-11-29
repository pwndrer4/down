<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 bgcolor=#DBEAF5><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'>
<input name="title" type="text" size="42" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'title',stripSlashes($r[title]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题</td><td bgcolor='ffffff'>
<input name="ftitle" type="text" id="ftitle" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'ftitle',stripSlashes($r[ftitle]))?>" size="45">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><input name="keyboard" type="text" size=42 value="<?=stripSlashes($r[keyboard])?>">
<font color="#666666">(多个请用&quot;,&quot;隔开)</font>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'>

</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件LOGO</td><td bgcolor='ffffff'><input type="file" name="titlepicfile" size="45">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件截图</td><td bgcolor='ffffff'>
<script>
function dopicadd()
{var i;
var str="";
var oldi=0;
var j=0;
oldi=parseInt(document.add.morepicnum.value);
for(i=1;i<=document.add.downmorepicnum.value;i++)
{
j=i+oldi;
str=str+"<tr><td width=7%><div align=center>"+j+"</div></td><td width=33%><div align=center><input name=msmallpic[] type=text size=28 id=msmallpic"+j+"></div></td><td width=30%><div align=center><input name=mbigpic[] type=text size=28 id=mbigpic"+j+"></div></td><td width=30%><div align=center><input name=mpicname[] type=text></div></td></tr>";
}
document.getElementById("addpicdown").innerHTML="<table width='100%' border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">
	图片地址前缀:
      <input name="mpicurl_qz" type="text" id="mpicurl_qz" size="32">
      &nbsp;</td>
  </tr>
  <tr> 
    <td><table width=100% border=0 align=center cellpadding=3 cellspacing=1>
  <tr bgcolor='#DBEAF5'> 
    <td width=7%><div align=center>编号</div></td>
    <td width=33%><div align=center>缩图</div></td>
    <td width=30%><div align=center>大图</div></td>
    <td width=30%><div align=center>图片说明</div></td>
  </tr>
</table></td>
  </tr>
  <tr> 
    <td id=defmorepicid> 
    <?php
    if($ecmsfirstpost==1)
    {
	?>
	<table width='100%' border=0 align=center cellpadding=3 cellspacing=1>
	<?php
	$morepicnum=3;
	for($mppathi=1;$mppathi<=$morepicnum;$mppathi++)
	{
	?>
	<tr> 
		<td width='7%'><div align=center><?=$mppathi?></div></td>
		<td width='33%'><div align=center>
		<input name=msmallpic[] type=text id=msmallpic[] size=28>
		</div></td>
		<td width='30%'><div align=center>
		<input name=mbigpic[] type=text id=mbigpic[] size=28>
		</div></td>
		<td width='30%'><div align=center>
		<input name=mpicname[] type=text id=mpicname[]>
		</div></td>
	</tr>
	<?php
	}
	?>
	</table>
	<?php
    }
    else
    {
	$morepicpath="";
	$morepicnum=0;
	if($r[morepic])
	{
		$r[morepic]=stripSlashes($r[morepic]);
		//地址
		$j=0;
		$pd_record=explode("\r\n",$r[morepic]);
		for($i=0;$i<count($pd_record);$i++)
		{
			$j=$i+1;
			$pd_field=explode("::::::",$pd_record[$i]);
			$morepicpath.="<tr> 
	<td width='7%'><div align=center>".$j."</div></td>
    <td width='33%'><div align=center>
        <input name=msmallpic[] type=text value='".$pd_field[0]."' size=28>
      </div></td>
    <td width='30%'><div align=center>
        <input name=mbigpic[] type=text value='".$pd_field[1]."' size=28>
      </div></td>
    <td width='30%'><div align=center>
        <input name=mpicname[] type=text value='".$pd_field[2]."'><input type=hidden name=mpicid[] value=".$j."><input type=checkbox name=mdelpicid[] value=".$j.">删
      </div></td></tr>";
		}
		$morepicnum=$j;
		$morepicpath="<table width='100%' border=0 cellspacing=1 cellpadding=3>".$morepicpath."</table>";
	}
	echo $morepicpath;
    }
    ?>
    </td>
  </tr>
  <tr> 
    <td height="25">地址扩展数量: <input name="morepicnum" type="hidden" id="morepicnum" value="<?=$morepicnum?>">
      <input name="downmorepicnum" type="text" value="1" size="6"> <input type="button" name="Submit5" value="输出地址" onclick="javascript:dopicadd();"></td>
  </tr>
  <tr> 
    <td id=addpicdown></td>
  </tr>
</table>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件简写名（例如：千牛、QQ）</td><td bgcolor='ffffff'>
<input name="rjjx" type="text" id="rjjx" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'rjjx',stripSlashes($r[rjjx]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>版本</td><td bgcolor='ffffff'>
<input name="banben" type="text" id="banben" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'banben',stripSlashes($r[banben]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>语言</td><td bgcolor='ffffff'><select name="yuyan" id="yuyan"><option value="简体中文"<?=$r[yuyan]=="简体中文"||$ecmsfirstpost==1?' selected':''?>>简体中文</option><option value="英文"<?=$r[yuyan]=="英文"?' selected':''?>>英文</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>大小</td><td bgcolor='ffffff'>
<input name="daxiao" type="text" id="daxiao" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'daxiao',stripSlashes($r[daxiao]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>授权</td><td bgcolor='ffffff'><select name="shouquan" id="shouquan"><option value="免费版"<?=$r[shouquan]=="免费版"||$ecmsfirstpost==1?' selected':''?>>免费版</option><option value="官方版"<?=$r[shouquan]=="官方版"?' selected':''?>>官方版</option><option value="绿色版"<?=$r[shouquan]=="绿色版"?' selected':''?>>绿色版</option><option value="破解版"<?=$r[shouquan]=="破解版"?' selected':''?>>破解版</option></select></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>平台</td><td bgcolor='ffffff'>
<input name="pingtai" type="text" id="pingtai" value="<?=$ecmsfirstpost==1?"/Win8/Win7/WinXP":DoReqValue($mid,'pingtai',stripSlashes($r[pingtai]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>评分</td><td bgcolor='ffffff'>
<input name="pingfen" type="text" id="pingfen" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'pingfen',stripSlashes($r[pingfen]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>官网</td><td bgcolor='ffffff'>
<input name="guanwang" type="text" id="guanwang" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'guanwang',stripSlashes($r[guanwang]))?>" size="">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>一句话点评</td><td bgcolor='ffffff'>
<textarea name="dianping" cols="60" rows="10" id="dianping"><?=$ecmsfirstpost==1?"":DoReqValue($mid,'dianping',stripSlashes($r[dianping]))?></textarea>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>盗链下载地址</td><td bgcolor='ffffff'>
<input name="down" type="text" id="down" value="<?=$ecmsfirstpost==1?"":DoReqValue($mid,'down',stripSlashes($r[down]))?>" size="45">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>本地下载地址</td><td bgcolor='ffffff'>
<input type="file" name="bendidownfile" size="45">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>软件介绍</td><td bgcolor='ffffff'>
<?=ECMS_ShowEditorVar("ruanjianjieshao",$ecmsfirstpost==1?"":DoReqValue($mid,'ruanjianjieshao',stripSlashes($r[ruanjianjieshao])),"Default","","300","100%")?>
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>提示</td><td bgcolor='ffffff'>
<?=ECMS_ShowEditorVar("tishi",$ecmsfirstpost==1?"":DoReqValue($mid,'tishi',stripSlashes($r[tishi])),"Default","","300","100%")?>
</td></tr><tr><td height=25 colspan=2 bgcolor='ffffff'><div align=left>安装教程</div></td></tr></table><div style='background-color:#D0D0D0'>
<?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":DoReqValue($mid,'newstext',stripSlashes($r[newstext])),"Default","","300","100%")?>
</div><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'></table>