$(document).ready(function () {
    if ($(".input-city").length) {
        var xhr = null;
        $('.input-city').keyup(function () {
            if (xhr) {
                xhr.abort();
            }
            var typing = $(this).val();
            if (typing.length > 2) {
                xhr = $.ajax({
                    url: 'controller/searchcity.php',
                    dataType: "json",
                    data: $(this).serialize(),
                    success: function (response) {
                        $("#city-list").empty();
                        for (var city in response) {
                            $('#city-list').append($('<option>').attr('value', city).text(response[city]));
                        }
                    },
                    complete: function () {
                        xhr = null;
                    },
                });
            }
        });
    }
});
