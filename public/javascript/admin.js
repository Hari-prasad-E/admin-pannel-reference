$(document).ready(function () {
    $("li.menus > a").click(function () {
        $("li.menus > a").removeClass("active");
        $(this).addClass("active");
    });
    $("li#catalog-menu").click(function () {
        $("").show();
        $(".catalog").show();
    });
    // $('.selectall').click(function () {
    //     if ($(this).is(':checked')) {
    //         $('table input').attr('checked', true);
    //     } else {
    //         $('table input').attr('checked', false);
    //     }
    // });
    $('nav a').each(function() {
        if ($(this).attr('href') === currentUrl) {
            $(this).addClass('active');
            $(this).closest('ul').css('display', 'block');
        }
    });
});