<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--title--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_title]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_title]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_title]" type="text" id="add[z_title]" value="<?=stripSlashes($r[z_title])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>����������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ftitle--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ftitle]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ftitle]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ftitle]" type="text" id="add[z_ftitle]" value="<?=stripSlashes($r[z_ftitle])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>����ʱ������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstime--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstime]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstime]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstime]" type="text" id="add[z_newstime]" value="<?=stripSlashes($r[z_newstime])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>���LOGO����</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--titlepic--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>����ǰ׺ 
        <input name="add[qz_titlepic]" type="text" id="add[qz_titlepic]" value="<?=stripSlashes($r[qz_titlepic])?>"> 
        <input name="add[save_titlepic]" type="checkbox" id="add[save_titlepic]" value=" checked"<?=$r[save_titlepic]?>>
        Զ�̱��� </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_titlepic]" cols="60" rows="10" id="add[zz_titlepic]"><?=ehtmlspecialchars(stripSlashes($r[zz_titlepic]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_titlepic]" type="text" id="titlepic5" value="<?=stripSlashes($r[z_titlepic])?>">
        (����д���������ֶε�ֵ)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�����ͼ����</strong><br>
      (
      <input name="textfield" type="text" id="textfield" value="[!--ecmsspicurl--]" size="20">
      <br>
      <input name="textfield2" type="text" id="textfield2" value="[!--ecmsbpicurl--]" size="20">
	  <br>
      <input name="textfield2" type="text" id="textfield2" value="[!--ecmspicname--]" size="20">
      )<br>
      ��ʽ:����ͼ[!empirecms!]��ͼ[!empirecms!]����</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_morepic]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_morepic]))?></textarea></td>
        </tr>
        <tr> 
          <td>��ַǰ׺:
<input name="add[qz_morepic]" type="text" id="add[qz_morepic]" value="<?=stripSlashes($r[qz_morepic])?>">
<input name="add[save_morepic]" type="checkbox" id="add[save_morepic]" value=" checked"<?=$r[save_morepic]?>>
        Զ�̱���
        </td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�����д�������磺ǧţ��QQ������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--rjjx--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_rjjx]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_rjjx]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_rjjx]" type="text" id="add[z_rjjx]" value="<?=stripSlashes($r[z_rjjx])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�汾����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--banben--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_banben]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_banben]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_banben]" type="text" id="add[z_banben]" value="<?=stripSlashes($r[z_banben])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--yuyan--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_yuyan]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_yuyan]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_yuyan]" type="text" id="add[z_yuyan]" value="<?=stripSlashes($r[z_yuyan])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��С����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--daxiao--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_daxiao]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_daxiao]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_daxiao]" type="text" id="add[z_daxiao]" value="<?=stripSlashes($r[z_daxiao])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��Ȩ����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--shouquan--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_shouquan]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_shouquan]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_shouquan]" type="text" id="add[z_shouquan]" value="<?=stripSlashes($r[z_shouquan])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>ƽ̨����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--pingtai--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_pingtai]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_pingtai]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_pingtai]" type="text" id="add[z_pingtai]" value="<?=stripSlashes($r[z_pingtai])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--pingfen--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_pingfen]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_pingfen]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_pingfen]" type="text" id="add[z_pingfen]" value="<?=stripSlashes($r[z_pingfen])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--guanwang--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_guanwang]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_guanwang]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_guanwang]" type="text" id="add[z_guanwang]" value="<?=stripSlashes($r[z_guanwang])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>һ�仰��������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--dianping--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_dianping]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_dianping]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_dianping]" type="text" id="add[z_dianping]" value="<?=stripSlashes($r[z_dianping])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�������ص�ַ����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--down--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_down]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_down]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_down]" type="text" id="add[z_down]" value="<?=stripSlashes($r[z_down])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�������ص�ַ����</strong><br>
      ( 
      <input name="textfield" type="text" id="textfield" value="[!--bendidown--]" size="20">
      )</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td>����ǰ׺ 
        <input name="add[qz_bendidown]" type="text" id="add[qz_bendidown]" value="<?=stripSlashes($r[qz_bendidown])?>"> 
        <input name="add[save_bendidown]" type="checkbox" id="add[save_bendidown]" value=" checked"<?=$r[save_bendidown]?>>
        Զ�̱��� </td>
    </tr>
    <tr> 
      <td><textarea name="add[zz_bendidown]" cols="60" rows="10" id="add[zz_bendidown]"><?=ehtmlspecialchars(stripSlashes($r[zz_bendidown]))?></textarea></td>
    </tr>
    <tr> 
      <td><input name="add[z_bendidown]" type="text" id="bendidown5" value="<?=stripSlashes($r[z_bendidown])?>">
        (����д���������ֶε�ֵ)</td>
    </tr>
  </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>�����������</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--ruanjianjieshao--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_ruanjianjieshao]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_ruanjianjieshao]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_ruanjianjieshao]" type="text" id="add[z_ruanjianjieshao]" value="<?=stripSlashes($r[z_ruanjianjieshao])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��ʾ����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--tishi--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_tishi]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_tishi]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_tishi]" type="text" id="add[z_tishi]" value="<?=stripSlashes($r[z_tishi])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>

  <tr bgcolor="#FFFFFF"> 
    <td height="22" valign="top"><strong>��װ�̳�����</strong><br>
      (<input name="textfield" type="text" id="textfield" value="[!--newstext--]" size="20">)</td>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><textarea name="add[zz_newstext]" cols="60" rows="10" id="textarea"><?=ehtmlspecialchars(stripSlashes($r[zz_newstext]))?></textarea></td>
        </tr>
        <tr> 
          <td><input name="add[z_newstext]" type="text" id="add[z_newstext]" value="<?=stripSlashes($r[z_newstext])?>">
            (����д�����Ϊ�ֶε�ֵ)</td>
        </tr>
      </table></td>
  </tr>
