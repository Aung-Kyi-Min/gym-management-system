$(document).ready(function () {
    $('a').on('click', function (e) {

        // Define variable of the clicked »a« element (»this«) and get its href value.
        var box = $(this).attr('href');

        // Run a scroll animation to the position of the element which has the same id like the href value.
        $('html, body').animate({
            scrollTop: $(box).offset().top
        }, '300');

        // Prevent the browser from showing the attribute name of the clicked link in the address bar
        e.preventDefault();

    });
});