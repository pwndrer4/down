////////////////////////////////////////

xpMap = window.xpMap || {};

function xpViaJs(locationId) {

    var _f = undefined;
    var _fconv = 'xpMap[\"' + locationId + '\"]';
    try {
        _f = eval(_fconv);
        if (_f != undefined) {
            _f()
        }
    } catch(e) {}
}

function xpLoader(closetag) {

    var xpTest = null,

    xpTestPos = document.getElementsByTagName("span");

    for (var i = 0; i < xpTestPos.length; i++) {

        if (xpTestPos[i].className == "xpTestPos") {

            xpTest = xpTestPos[i];

            break

        }

    }

    if (xpTest == null) return;

    if (!closetag) {

        document.write("<span id=xpTestPos_" + xpTest.id + " style=display:none>");

        xpViaJs(xpTest.id);

        return

    }

    document.write("</span>");

    var real = document.getElementById("xpTestPos_" + xpTest.id);

    for (var i = 0; i < real.childNodes.length; i++) {

        var node = real.childNodes[i];

        if (node.tagName == "SCRIPT" && /closetag/.test(node.className)) continue;

        xpTest.parentNode.insertBefore(node, xpTest);

        i--;

    }

    xpTest.parentNode.removeChild(xpTest);

   real.parentNode.removeChild(real)

}
//�����Ҳ���
xpMap['1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/8.js\"></script>");
};
//��ҳС���Ƽ��·�
xpMap['2'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/9.js\"></script>");
};
//�����Ŀ���
xpMap['3'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/10.js\"></script>");
};
//��Ŀ��ҳ�Ҳ�
xpMap['4'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/11.js\"></script>");
};
//����Ƶ���������
xpMap['5'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16.js\"></script>");
};
//����Ƶ���������
xpMap['5_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16_1.js\"></script>");
};
//����Ƶ���ײ����
xpMap['6'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/14.js\"></script>");
};
//����Ƶ������
xpMap['7'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/15.js\"></script>");
};
//����Ƶ������
xpMap['7_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/15_1.js\"></script>");
};
//������Ŀ����2���
xpMap['8'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16.js\"></script>");
};
//������Ŀ����2���
xpMap['8_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16_1.js\"></script>");
};
//������ҳ1
xpMap['9'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/17.js\"></script>");
};
//������ҳ2
xpMap['10'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/18.js\"></script>");
};
//������ҳ3
xpMap['11'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/19.js\"></script>");
};
//������ҳ4
xpMap['23'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/20.js\"></script>");
};
//������ҳ5
xpMap['13'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/21.js\"></script>");
};
//������ҳ6
xpMap['14'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/22.js\"></script>");
};
//������ҳ7
xpMap['15'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/23.js\"></script>");
};
//������ҳ8
xpMap['21'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/29.js\"></script>");
};
//������ҳ�������1 ��������Ŀʹ��һ��
xpMap['12'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16.js\"></script>");
};
//������ҳ�������1 ��������Ŀʹ��һ��
xpMap['12_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16_1.js\"></script>");
};
//������ҳ�Ҳ�
xpMap['16'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/11.js\"></script>");
};
//������ҳ�ײ� ��������Ŀһ��
xpMap['17'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/24.js\"></script>");
};
//ר���������·�
xpMap['18'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/25.js\"></script>");
};
//����ҳ�Ҳ�
xpMap['19'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/27.js\"></script>");
};
//ר�����
xpMap['20'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/28.js\"></script>");
};
//������ҳ�����·�
xpMap['24'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/30.js\"></script>");
};
//������ҳͼƬ��
xpMap['25'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/31.js\"></script>");
};
//������ҳͼƬ��
xpMap['26'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/12.js\"></script>");
};
//�������
xpMap['27'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/32.js\"></script>");
};
//�������
xpMap['28'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://rwq.youle55.com/r/er_17279_6780.js\"></script>");
};