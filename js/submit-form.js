$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'controller/submitform.php',
            dataType: "json",
            data: "email="+$(this).find(".mail").val()+"&type="+$(this).attr("name")+"&phone="+$(this).find(".phone").val()+"&city="+$(this).find(".input-city").val()+"&rubrics="+$(this).find(".select2").val(),
            success: function (response) {
                $("#city-list").empty();
                $(".mail").val('');
                $(".phone").val('');
                $(".input-city").val('');
                $(".select2").val('').trigger('change');

                $("#info-doer").load(document.URL +" #info-doer"+" > *");
                $("#info-customer").load(document.URL +" #info-customer"+" > *");

                $("#modal-message").modal('show');
                //alert(response);

                //!ЛИКБЕЗ!
                //$("#block").load("/current.html #block > *");
                // Селектор со знаком больше ( >) указывает на дочерний элемент,
                // а селектор со знаком звездочки (*) указывает на все элементы.
                // Таким образом, идет указание на все дочерние элементы блока с id – block.

            }
        });
    });
});

