/**
 * Created by msaka on 11/10/2016.
 */

$(function () {

    $(document).on('click', 'a.dropdown-toggle', function(){


        $(document).find('td.day').find('div.btn-group').removeClass('forceVisible');
        $(this).closest('div.btn-group').addClass('forceVisible');
    });

    $(document).on('click', 'a.changeDayState', function (e) {
        e.preventDefault();

        var topTD = $(this).closest('td.day');

        if (topTD.hasClass('working')) {
            topTD.find('input').val('H');
            topTD.removeClass('working notset').addClass('holyday');
           /* topTD.find('span.indicator').text('H');*/
            $(this).text('Changer en Workingday')
        } else {
            topTD.find('input').val('W');
            topTD.removeClass('holyday notset').addClass('working');
            $(this).text('Changer en Holyday')
        }
        topTD.find('div.btn-group').removeClass('forceVisible');
        if($(document).find('div.blockbutton').length>0){
            $(document).find('div.blockbutton').css('display','block');
        }
    });


    $('form#newCalendar').submit(function() {
        $(this).find("button[type='submit']").replaceWith('<i class="fa fa-spin fa-spinner" style="color:white; font-size: 2.5em;"></i>');
    });

    $('form#updateForm').submit(function() {

        $(this).find("button[type=submit]").replaceWith('<i class="fa fa-spin fa-spinner" style="color:lightgrey; font-size: 2.5em;"></i>');

    });

});