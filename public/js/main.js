$(document).ready(() => {
    $(function() {
        var header = $("header");
        var addSmall = false;

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll > 50) {
                if (!header.hasClass('stick')) {
                    header.addClass('stick');
                    header.removeClass('small');
                    addSmall = true;
                }
            } else if (addSmall) {
                if (header.hasClass('stick')) {
                    console.log('r' + scroll)
                    header.removeClass('stick');
                    header.addClass('small');
                }
            }
        });
    });
});
