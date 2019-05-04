//сравнить значение из инпута с значенем из datalist, и тогда дела выводы

$(".input-city").bind('change', function () {
    var result =  $(this).siblings(".form-validator");
    var input = $(this).val();
    var select =$("#city-list option").val();
    // console.log(input);
    // console.log(select);
    if (input.toLowerCase() != select.toLowerCase()){
        result.text("Не выбран город");
        $(this).addClass("error");
    }else{
        result.text("");
        $(this).removeClass("error");
    }

});
