var browser={
    versions:function(){
        var u = navigator.userAgent, app = navigator.appVersion;
        return {
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
            iPhone: u.indexOf('iPhone') > -1 ,
            iPad: u.indexOf('iPad') > -1,
        };
    }(),
}
function autoLoad2(url, wrapId,type,page) {
    var $wraper = $("#" + wrapId);
    loadStart();
    function loadStart() {
        $.ajax({
            type: "GET",
            async:false,
            url: url,
            dataType : "jsonp",
            jsonp: "jsoncallback",
            jsonpCallback:"success_jsonpCallback",
            data: {page:page},
            success: function(msg) {
                $("#loadmore").show();
                if(msg){
                    showHtml(msg.data||[]);
                    page++;
                    $("#loadmore").attr("data",page);
                    if(msg.data == ""){
                        $("#loadmore").hide();
                    }else{$("#loadmore").show();}
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $("#loadmore").hide();
            }
        })
    }


    function showHtml(list) {
        if(list.length!=0){
            for (var i = 0; i<list.length; i++) {
                if(type == '1'){
                    zHtml(list[i]);
                }
                else if(type == '3'){
                    aHtml(list[i]);
                } else if(type == '4'){
                    dHtml(list[i]);
                } else if(type == '5'){
                    eHtml(list[i]);
                }else{
                    cHtml(list[i]);
                }

            }

        }else{
            $(".loading").hide();
        }
    }
    function cHtml(list) {
        var addmore="";
        if(list.addmore==1){
            addmore = 'onclick="countdown(2)"';
            var ltitle = "苹果助手";
        }else if(list.addmore==2){
            addmore = 'onclick="countdown(2)"';
            var ltitle = "安卓助手";
        }else{
            var ltitle = "免费下载";
        }
        if(browser.versions.ios || browser.versions.iPhone || browser.versions.iPad){
            var addclass = "down_an iosxz";
        }else{
            var addclass = "down_an azxz";
        }
        var htm = ["<li>",
            "<a href='",list.p_url,"' class='pic'><img src='",list.thumb,"' width='48' height='48' alt='",list.title,"'></a>",
            "<a href='",list.p_url,"'>",
            "<h3 class='name'>",list.title,"</h3>",
            "<div class='info'>",
            "<p class='stars star",list.stars,"'></p>",
            "<span class='soft-size'>",list.filesize2,"</span>",
            "</div>",
            "</a>",
            "<a href='"+list.downurl+"' "+addmore+" class='"+addclass+"'>"+ltitle+"</a>",
            "</li> "
        ].join('');
        $wraper.append(htm);
    }
    function zHtml(list){
        var htm = "<li><span>></span><a href='article/"+list.id+".html'>"+list.title+"</a></li>";
        $wraper.append(htm);
    }

    function aHtml(list){
        var htm = ['<div class="list_div clearfix">',
            '<div class="list_div_lf">',
            '<div class="game_icon"><a href="'+list.m_url+'"><img src="'+list.thumb+'" alt="'+list.title+'" /></a></div>',
            '<div class="game_intro">',
            '<p class="p_title"><a href="'+list.m_url+'">'+list.title+'</a></p>',
            '<p class="p_intro">下载：<em class="red">'+list.downloads+'</em>次</p>',
            '<p class="p_intro"><span>类型：'+list.classtype+'</span></p>',
            '</div>',
            '</div>',
            '<div class="list_div_rg">',
            '<a href="'+list.m_url+'">立即下载</a>',
            '</div>',
            '</div>',
        ].join('');
        $wraper.append(htm);
    }

    function dHtml(list){
        var htm = ['<div class="list_div clearfix">',
            '<div class="list_div_lf">',
            '<div class="game_icon"><a href="'+list.m_url+'"><img src="'+list.thumb+'" alt="'+list.title+'" /></a></div>',
            '<div class="game_intro">',
            '<p class="p_title"><a href="'+list.m_url+'">'+list.title+'</a><span><em>'+list.pingfen+'分</em></span></p>',
            '<p class="p_intro">下载：'+list.downloads+'次</p>',
            '<p class="p_intro">类型：'+list.classtype+'</p>',
            '</div>',
            '</div>',
            '<div class="list_div_rg">',
            '<a href="'+list.m_url+'">立即下载</a>',
            '</div>',
            '</div>',
        ].join('');
        $wraper.append(htm);
    }

    function eHtml(list){
        var htm = ['<dl>',
            '<dt><a href="'+list.m_url+'"><img src="'+list.thumb+'" alt="'+list.title+'" /></a></dt>',
            '<dd>',
                '<p class="title"><a href="'+list.m_url+'">'+list.title+'</a></p>',
                '<p class="p_time"><span></span><em>'+list.updatetime+'</em></p>',
            '</dd>',
        '</dl>',
        ].join('');
        $wraper.append(htm);
    }
}