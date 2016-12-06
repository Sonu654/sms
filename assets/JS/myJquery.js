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
        $(this).css('margin-top', '40px');
        $.ajax({
            method: 'post',
            url: site_url + '/Home/getSearchResult',
            data: {'content': $(this).val()}
        })
                .done(function (data) {
                    $('#searchResult').html(data);
                });
    });

    $(document).on('change blur', '#roll_name', function () {
        //  alert('ok');
      //  var course;
        $.ajax({
            method: 'post',
            url: site_url + '/Addministration/getStdName',
            data: {'roll': $(this).val()}
        })
                .done(function (data) {
                    $('#stdName').html(data)
                });

        $.ajax({
            method: 'post',
            url: site_url + '/Addministration/getStdCourse',
            data: {'roll': $(this).val()}
        })
                .done(function (crs) {
                    $('#stdCrs').html(crs)
                });
            
                
        $.ajax({
            method: 'post',
            url: site_url + '/Addministration/getStdSubject',
            data: {'sem': $('#stdSem').val(),'roll':$(this).val()}

        })

                .done(function (subject) {
                    $('#stdSub').html(subject);
                });
    });
    
    $(document).on('change','#stdSem',function(){
         $.ajax({
            method: 'post',
            url: site_url + '/Addministration/getStdSubject',
            data: {'sem': $('#stdSem').val(),'roll':$('#roll_name').val()}

        })

                .done(function (subject) {
                    $('#stdSub').html(subject);
                });
    });
});