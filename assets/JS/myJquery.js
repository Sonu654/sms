$(document).ready(function () {
    $(document).on('keyup', '#searchBox', function () {
        if ($(this).val() == '') {
            $('#suggest').css('display', 'none');
        } else {
            $.ajax({
                method: 'post',
                url: site_url + '/Home/Search',
                data: {'content': $(this).val()}
            })
                    .done(function (data) {
                        $('#suggest').html(data);
                        $('#suggest').css('display', 'block');
                    });




        }
    });

    $(document).on('click', '#sugresult', function () {
        $('#searchBox').val($(this).text());
        $('#suggest').css('display', 'none');
    });
    
     $(document).on('focusout blur submit select', '#searchBox', function () {
         $(this).css('margin-top','40px');
         $.ajax({
             method:'post',
             url:site_url+'/Home/getSearchResult',
             data: {'content':$(this).val()}
         })
                 .done(function(data){
                     $('#searchResult').html(data);
                 });
     });
});