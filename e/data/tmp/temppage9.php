<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?='<?xml version="1.0" encoding="gb2312"?>'?>

<rss version="2.0">
  <channel>
    <title>网站RSS-<?=$public_r['add_webname']?></title>
    <link><?=$public_r['add_weburl']?></link>
    <description>Latest 50 infos of <?=$public_r['add_webname']?></description>
    <copyright>Copyright(C) <?=$public_r['add_weburl']?></copyright>
    <lastBuildDate><?=gmdate('r',time())?></lastBuildDate>
    <ttl>60</ttl>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from phome_ecms_soft order by newstime desc limit 200",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>	
 <item>
      <title><![CDATA[<?=$bqr[title]?>]]></title>
      <link><?=$public_r['add_weburl']?><?=$bqr[titleurl]?></link>
      <guid><?=$public_r['add_weburl']?><?=$bqr[titleurl]?></guid>
      <category><?=$class_r[$bqr[classid]]['classname'] ?></category>
      <pubDate><?=gmdate('r',$bqr['newstime'])?></pubDate>
    </item>
<?php
}
}
?>
  </channel>
</rss>