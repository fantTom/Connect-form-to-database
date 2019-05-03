$(document).ready(function() {
    //sign-up tabs
    if ($('.list-tabs').length) {
        $('.list-tabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $("#city-list").empty();

            $('.list-tabs a').parent("li").removeClass("active");
            $(this).parent("li").addClass("active");
        })
    }
});