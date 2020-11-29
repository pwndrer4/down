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
//搜索右侧广告
xpMap['1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/8.js\"></script>");
};
//首页小编推荐下方
xpMap['2'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/9.js\"></script>");
};
//软件栏目横幅
xpMap['3'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/10.js\"></script>");
};
//栏目内页右侧
xpMap['4'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/11.js\"></script>");
};
//文章频道顶部横幅
xpMap['5'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16.js\"></script>");
};
//文章频道顶部横幅
xpMap['5_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16_1.js\"></script>");
};
//文章频道底部横幅
xpMap['6'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/14.js\"></script>");
};
//文章频道右下
xpMap['7'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/15.js\"></script>");
};
//文章频道右下
xpMap['7_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/15_1.js\"></script>");
};
//文章栏目顶部2横幅
xpMap['8'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16.js\"></script>");
};
//文章栏目顶部2横幅
xpMap['8_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16_1.js\"></script>");
};
//下载内页1
xpMap['9'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/17.js\"></script>");
};
//下载内页2
xpMap['10'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/18.js\"></script>");
};
//下载内页3
xpMap['11'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/19.js\"></script>");
};
//下载内页4
xpMap['23'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/20.js\"></script>");
};
//下载内页5
xpMap['13'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/21.js\"></script>");
};
//下载内页6
xpMap['14'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/22.js\"></script>");
};
//下载内页7
xpMap['15'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/23.js\"></script>");
};
//下载内页8
xpMap['21'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/29.js\"></script>");
};
//文章内页顶部横幅1 和文章栏目使用一样
xpMap['12'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16.js\"></script>");
};
//文章内页顶部横幅1 和文章栏目使用一样
xpMap['12_1'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/16_1.js\"></script>");
};
//文章内页右侧
xpMap['16'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/11.js\"></script>");
};
//文章内页底部 和文章栏目一致
xpMap['17'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/24.js\"></script>");
};
//专题详情右下方
xpMap['18'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/25.js\"></script>");
};
//评论页右侧
xpMap['19'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/27.js\"></script>");
};
//专题左侧
xpMap['20'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/28.js\"></script>");
};
//文章内页内容下方
xpMap['24'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/30.js\"></script>");
};
//文章内页图片上
xpMap['25'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/31.js\"></script>");
};
//文章内页图片上
xpMap['26'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/12.js\"></script>");
};
//对联广告
xpMap['27'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://www.xpgod.com/statics/skin_js/xpgod/32.js\"></script>");
};
//对联广告
xpMap['28'] = function() {
document.writeln("<script type=\"text/javascript\" src=\"http://rwq.youle55.com/r/er_17279_6780.js\"></script>");
};