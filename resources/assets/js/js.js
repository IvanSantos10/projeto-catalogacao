if($('#search').html()) {
    var page = 1;
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= (parseInt($(document).height()) - parseInt($('footer').height() * 5))) {

            page++;
            loadMoreData(page);
        }
    });
}

function loadMoreData(page){
    search = $('.col-lg-10').data('search');
    $.ajax(
        {
            url: '?search='+search+'&page=' + page,
            type: "get",
            beforeSend: function()
            {
                $('.ajax-load').show();
            }
        })
        .done(function(data)
        {
            if(data.html == " "){
                $('.ajax-load').html("Não há mais registros encontrados");
                return;
            }
            $('.ajax-load').hide();
            $("#post-data").append(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('servidor não responder...');
        });
}
