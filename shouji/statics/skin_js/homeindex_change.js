
    var $slider = $('.slider ul');
	var $slider_li=$('.slider ul li');
	var $slider_xiao=$('.slider').width();
    var $slider_child_l = $('.slider ul li').length;
    var $slider_width = $('.slider ul li').width()+30;
	var $slider_img=$('.slider ul li img').width()+30;
    $slider.width($slider_child_l * $slider_width);
	//$slider_li.width($slider_img-30);
    var slider_count = 0;
    if ($slider_child_l <= 1) {
        $('#btn-right').css({ cursor: 'auto' });
        $('#btn-right').addClass("dasabled");
    }

    $('#btn-right').click(function () {
        if ($slider_child_l <= 1 || slider_count >= $slider_child_l - 1) {
            return false;
        }

        slider_count++;
        $slider.animate({ left: '-=' + $slider_width + 'px' }, 'slow');
        slider_pic();
    });

    $('#btn-left').click(function () {
        if (slider_count <= 0) {
            return false;
        }

        slider_count--;
        $slider.animate({ left: '+=' + $slider_width + 'px' }, 'slow');
        slider_pic();
    });

    function slider_pic() {
        if (slider_count >= $slider_child_l - 1) {
            $('#btn-right').css({ cursor: 'auto' });
            $('#btn-right').addClass("dasabled");
            $('#btn-left').css({ cursor: 'pointer' });
            $('#btn-left').removeClass("dasabled");
        }
        else if (slider_count > 0 && slider_count <= $slider_child_l - 1) {
            $('#btn-right').css({ cursor: 'pointer' });
            $('#btn-right').removeClass("dasabled");
            $('#btn-left').css({ cursor: 'pointer' });
            $('#btn-left').removeClass("dasabled");
        }
        else if (slider_count <= 0 && slider_count <= $slider_child_l - 1) {
            $('#btn-left').css({ cursor: 'auto'});
            $('#btn-left').addClass("dasabled");
            $('#btn-right').css({ cursor: 'pointer' });
            $('#btn-right').removeClass("dasabled");
        }
    }

    $('.slider a').hover(function () {
        if ($(this).find('img:animated').length) return;
        $(this).animate({ marginTop: '0px' }, 200);
        //$(this).find('img').animate({ width: '70px' }, 200);
    }, function () {

        $(this).animate({ marginTop: '0' }, 200);
        //$(this).find('img').animate({ width: '70px' }, 200);
    });

    var t = n = 0, count = $(".content a").size();
    $(function () {
        var play = ".play";
        var playText = ".play .text";
        var playNum = ".play .num a";
        var playConcent = ".play .content a";

        $(playConcent + ":not(:first)").hide();
        $(playText).html($(playConcent + ":first").find("img").attr("alt"));
        $(playNum + ":first").addClass("on");
        $(playText).mouseover(function () { window.open($(playConcent + ":first").attr('href'), "_blank") });
        $(playNum).mouseover(function () {
            var i = $(this).text() - 1;
            n = i;
            if (i >= count) return;
            $(playText).html($(playConcent).eq(i).find("img").attr('alt'));
            $(playText).unbind().click(function () { window.open($(playConcent).eq(i).attr('href'), "_blank") });
            $(playConcent).filter(":visible").hide().parent().children().eq(i).show();
            $(this).removeClass("on").siblings().removeClass("on");
            $(this).removeClass("on2").siblings().removeClass("on2");
            $(this).addClass("on").siblings().addClass("on2");
        });
        t = setInterval("showAuto()", 5000);
        $(playConcent).hover(function () { clearInterval(t) }, function () { t = setInterval("showAuto()", 5000); });
    });
    function showAuto() {
        n = (n >= count - 1) ? 0 : ++n;

        $(".num a").eq(n).trigger('mouseover');
    }