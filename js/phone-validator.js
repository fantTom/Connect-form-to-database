function validatePhone($phone) {
   // var phoneReg = /^(\+375\s[(](33|44|29|25)[)]\s([1-9]{3})\s(\d{2})\s(\d{2}))$/; //Беларусь
    var  phoneReg = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/; //
    return phoneReg.test( $phone );
}

$(".phone").focusout(function(){
    var result =  $(this).siblings(".form-validator");
    var numberphone = $(this).val();
    if( !validatePhone(numberphone)) {
        result.text("Неккоректно введён номер телефона");
        $(this).addClass("error");
    }else {
        $(this).removeClass("error");
    }
});

$(".phone").focusin(function() {
    var result = $(this).siblings(".form-validator");
    result.text("");
});