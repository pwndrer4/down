<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstempdt`;");
E_C("CREATE TABLE `phome_enewstempdt` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempvar` char(30) NOT NULL DEFAULT '',
  `tempname` char(30) NOT NULL DEFAULT '',
  `tempsay` char(255) NOT NULL DEFAULT '',
  `tempfile` char(200) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `temptype` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`tempid`),
  UNIQUE KEY `tempvar` (`tempvar`),
  KEY `temptype` (`temptype`),
  KEY `myorder` (`myorder`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=gbk");
E_D("replace into `phome_enewstempdt` values('1','header','������ͷ��','������ͷ��','e/template/incfile/header.php','0','incfile');");
E_D("replace into `phome_enewstempdt` values('2','footer','������β��','������β��','e/template/incfile/footer.php','0','incfile');");
E_D("replace into `phome_enewstempdt` values('3','qDoInfo','����Ͷ����ҳ','����Ͷ����ҳ','e/template/DoInfo/DoInfo.php','0','doinfo');");
E_D("replace into `phome_enewstempdt` values('4','qChangeClass','Ͷ��ѡ����Ŀҳ','Ͷ��ѡ����Ŀҳ','e/template/DoInfo/ChangeClass.php','0','doinfo');");
E_D("replace into `phome_enewstempdt` values('5','qDoInfoTran','����Ͷ���ϴ�����ҳ��','����Ͷ���ϴ�����ҳ��','e/template/DoInfo/tran.php','0','doinfo');");
E_D("replace into `phome_enewstempdt` values('6','qAddInfo','����Ͷ��ҳ','����Ͷ��ҳ','e/template/DoInfo/AddInfo.php','0','doinfo');");
E_D("replace into `phome_enewstempdt` values('7','qListInfo','Ĭ�Ϲ���Ͷ���б�ҳ','Ĭ�Ϲ���Ͷ���б�ҳ','e/data/html/list/qlistinfo.php','0','doinfo');");
E_D("replace into `phome_enewstempdt` values('8','report','�ύ���󱨸�ҳ��','�ύ���󱨸�ҳ��','e/template/public/report.php','0','pubtemp');");
E_D("replace into `phome_enewstempdt` values('9','payapi','����֧��ҳ��','����֧��ҳ��','e/template/payapi/payapi.php','0','pubtemp');");
E_D("replace into `phome_enewstempdt` values('10','infovote','��ϢͶƱҳ��','��ϢͶƱҳ��','e/template/public/vote.php','0','pubtemp');");
E_D("replace into `phome_enewstempdt` values('11','vote','ͶƱ���ҳ��','ͶƱ���ҳ��','e/template/tool/vote.php','0','pubtemp');");
E_D("replace into `phome_enewstempdt` values('12','ShopBurcar','���ﳵҳ��','���ﳵҳ��','e/template/ShopSys/buycar.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('13','ShopOrder','�ύ����ҳ��','�ύ����ҳ��','e/template/ShopSys/order.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('14','ShopSubmitOrder','ȷ���ύ����ҳ��','ȷ���ύ����ҳ��','e/template/ShopSys/SubmitOrder.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('15','ShopListDd','�����б�ҳ��','�����б�ҳ��','e/template/ShopSys/ListDd.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('16','ShopShowDd','������ϸҳ��','������ϸҳ��','e/template/ShopSys/ShowDd.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('17','ShopBurcarForm','���ﳵ-�����ģ��','���ﳵ-�����ģ��','e/template/ShopSys/buycar/buycar_form.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('18','ShopBurcarOrder','���ﳵ-ȷ�϶���ģ��','���ﳵ-ȷ�϶���ģ��','e/template/ShopSys/buycar/buycar_order.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('19','ShopBurcarShowdd','���ﳵ-��ʾ����ģ��','���ﳵ-��ʾ����ģ��','e/template/ShopSys/buycar/buycar_showdd.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('20','ShopAddAddress','�������͵�ַҳ��','�������͵�ַҳ��','e/template/ShopSys/AddAddress.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('21','ShopListAddress','�������͵�ַҳ��','�������͵�ַҳ��','e/template/ShopSys/ListAddress.php','0','shopsys');");
E_D("replace into `phome_enewstempdt` values('22','MemberReg','��Աע��ҳ��','��Աע��ҳ��','e/template/member/register.php','0','member');");
E_D("replace into `phome_enewstempdt` values('23','MemberChangeReg','ѡ��ע������ҳ��','ѡ��ע������ҳ��','e/template/member/ChangeRegister.php','0','member');");
E_D("replace into `phome_enewstempdt` values('24','MemberRegsend','�ط�ע�ἤ���ʼ�ҳ��','�ط�ע�ἤ���ʼ�ҳ��','e/template/member/regsend.php','0','member');");
E_D("replace into `phome_enewstempdt` values('25','MemberLogin','��Ա��¼ҳ��','��Ա��¼ҳ��','e/template/member/login.php','0','member');");
E_D("replace into `phome_enewstempdt` values('26','MemberLoginopen','��Ա��¼����ҳ��','��Ա��¼����ҳ��','e/template/member/loginopen.php','0','member');");
E_D("replace into `phome_enewstempdt` values('27','MemberEditinfo','�޸Ļ�Ա��Ϣҳ��','�޸Ļ�Ա��Ϣҳ��','e/template/member/EditInfo.php','0','member');");
E_D("replace into `phome_enewstempdt` values('28','MemberEditsafeinfo','�޸Ļ�Ա��ȫ��Ϣҳ��','�޸Ļ�Ա��ȫ��Ϣҳ��','e/template/member/EditSafeInfo.php','0','member');");
E_D("replace into `phome_enewstempdt` values('29','MemberGetPassword','ȡ������ҳ��','ȡ������ҳ��','e/template/member/GetPassword.php','0','member');");
E_D("replace into `phome_enewstempdt` values('30','MemberGetResetPass','ȡ����������ҳ��','ȡ����������ҳ��','e/template/member/getpass.php','0','member');");
E_D("replace into `phome_enewstempdt` values('31','MemberCp','��Ա������ҳ','��Ա������ҳ','e/template/member/cp.php','0','member');");
E_D("replace into `phome_enewstempdt` values('32','MemberMy','��Ա״̬ҳ��','��Ա״̬ҳ��','e/template/member/my.php','0','member');");
E_D("replace into `phome_enewstempdt` values('33','MemberShowInfo','�鿴��Ա��Ϣҳ��','�鿴��Ա��Ϣҳ��','e/template/member/ShowInfo.php','0','member');");
E_D("replace into `phome_enewstempdt` values('34','MemberList1','Ĭ�ϻ�Ա�б�ҳ��','Ĭ�ϻ�Ա�б�ҳ��','e/template/member/memberlist/1.php','0','member');");
E_D("replace into `phome_enewstempdt` values('35','MemberAddMsg','����վ����Ϣҳ��','����վ����Ϣҳ��','e/template/member/AddMsg.php','0','membermsg');");
E_D("replace into `phome_enewstempdt` values('36','MemberMsg','վ����Ϣ�б�ҳ��','վ����Ϣ�б�ҳ��','e/template/member/msg.php','0','membermsg');");
E_D("replace into `phome_enewstempdt` values('37','MemberViewMsg','�鿴վ����Ϣҳ��','�鿴վ����Ϣҳ��','e/template/member/ViewMsg.php','0','membermsg');");
E_D("replace into `phome_enewstempdt` values('38','MemberAddFriend','���Ӻ���ҳ��','���Ӻ���ҳ��','e/template/member/AddFriend.php','0','memberfriend');");
E_D("replace into `phome_enewstempdt` values('39','MemberFriend','�����б�ҳ��','�����б�ҳ��','e/template/member/friend.php','0','memberfriend');");
E_D("replace into `phome_enewstempdt` values('40','MemberFriendClass','���ѷ���ҳ��','���ѷ���ҳ��','e/template/member/FriendClass.php','0','memberfriend');");
E_D("replace into `phome_enewstempdt` values('41','MemberChangeFriend','ѡ�����ҳ��','ѡ�����ҳ��','e/template/member/ChangeFriend.php','0','memberfriend');");
E_D("replace into `phome_enewstempdt` values('42','MemberAddFava','�����ղ���Ϣҳ��','�����ղ���Ϣҳ��','e/template/member/AddFava.php','0','memberfav');");
E_D("replace into `phome_enewstempdt` values('43','MemberFava','�����ղ�ҳ��','�����ղ�ҳ��','e/template/member/fava.php','0','memberfav');");
E_D("replace into `phome_enewstempdt` values('44','MemberFavaClass','�����ղط���ҳ��','�����ղط���ҳ��','e/template/member/FavaClass.php','0','memberfav');");
E_D("replace into `phome_enewstempdt` values('45','MemberBuybak','��ֵ��¼ҳ��','��ֵ��¼ҳ��','e/template/member/buybak.php','0','memberother');");
E_D("replace into `phome_enewstempdt` values('46','MemberDownbak','���ؼ�¼ҳ��','���ؼ�¼ҳ��','e/template/member/downbak.php','0','memberother');");
E_D("replace into `phome_enewstempdt` values('47','MemberBuygroup','�����Ա����ҳ��','�����Ա����ҳ��','e/template/member/buygroup.php','0','memberother');");
E_D("replace into `phome_enewstempdt` values('48','MemberCard','�㿨��ֵҳ��','�㿨��ֵҳ��','e/template/member/card.php','0','memberother');");
E_D("replace into `phome_enewstempdt` values('49','MemberChangeStyle','ѡ���Ա�ռ���ҳ��','ѡ���Ա�ռ���ҳ��','e/template/member/mspace/ChangeStyle.php','0','memberspace');");
E_D("replace into `phome_enewstempdt` values('50','MemberSetSpace','���û�Ա�ռ�ҳ��','���û�Ա�ռ�ҳ��','e/template/member/mspace/SetSpace.php','0','memberspace');");
E_D("replace into `phome_enewstempdt` values('51','MemberFeedback','�����Ա�ռ䷴��ҳ��','�����Ա�ռ䷴��ҳ��','e/template/member/mspace/feedback.php','0','memberspace');");
E_D("replace into `phome_enewstempdt` values('52','MemberShowFeedback','�鿴��Ա�ռ䷴��ҳ��','�鿴��Ա�ռ䷴��ҳ��','e/template/member/mspace/ShowFeedback.php','0','memberspace');");
E_D("replace into `phome_enewstempdt` values('53','MemberGbook','�����Ա�ռ�����ҳ��','�����Ա�ռ�����ҳ��','e/template/member/mspace/gbook.php','0','memberspace');");
E_D("replace into `phome_enewstempdt` values('54','MemberReGbook','�ظ���Ա�ռ�����ҳ��','�ظ���Ա�ռ�����ҳ��','e/template/member/mspace/ReGbook.php','0','memberspace');");
E_D("replace into `phome_enewstempdt` values('55','MemberConnectListBind','��¼�󶨹���ҳ��','��¼�󶨹���ҳ��','e/template/memberconnect/ListBind.php','0','memberconnect');");
E_D("replace into `phome_enewstempdt` values('56','MemberConnectTobind','�󶨵�¼�ʺ�ҳ��','�󶨵�¼�ʺ�ҳ��','e/template/memberconnect/tobind.php','0','memberconnect');");

@include("../../inc/footer.php");
?>