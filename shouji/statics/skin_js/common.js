
$(document).ready(function() {
    var $selectlist = $('.js-type-list', '.search-box'),
            $searchtype = $('.search-type span');
    $('.search-select').hover(function() {
        $selectlist.find('li').show();
        $selectlist.find('a:contains("' + $searchtype.text() + '")').parent('li').hide();
        $('.type-box', $(this)).show();
    }, function() {
        $('.type-box', $(this)).hide();
    });
    $selectlist.delegate('a', 'click',
            function() {
                if ($('input[type=text]:visible').val()) {
                    var inputVal = $('input[type=text]:visible').val();
                }
                $('.search-type span', '.search-box').text($(this).text());
                $('input.search_type', '.search-box').val($(this).data('type'));
                $('input:text', '.search-box').removeAttr('name').removeAttr('id').hide();
                $('input[data-v=' + $(this).data('id') + ']', '.search-box').attr('name', 'q').attr('id', 'search_word').show();
              
                $("#catid").val($(this).data('id'));
                $('.type-box', '.search-box').hide();
                $('input[type=text]:visible').val(inputVal)
            });
});

function check_search() {
    var v = $("#search_word").val();
    len = strlen(v);
    if (len == 0) {
        alert("«Î ‰»ÎÀ—À˜¥ ");
        return false;
    } else {
        return true;
    }
}
//???????????
function strlen(str) {
    return ($.browser.msie && str.indexOf('\n') != -1) ? str.replace(/\r?\n/g, '_').length : str.length;
}
document.writeln("<script src=\"http://www.xpgod.com/shouji/statics/skin_js/searchkey.js\" type=\"text/javascript\"></script>");
