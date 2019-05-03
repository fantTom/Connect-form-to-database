function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}


$(".mail").focusout(function(){
    var result =  $(this).siblings(".form-validator");
    var emailaddress = $(this).val();
    if( !validateEmail(emailaddress)) {
        result.text("Неккоректно введён e-mail");
        $(this).addClass("error");
    }else {
        $(this).removeClass("error");
    }
});

//$(".mail").focusin(function() {
$(".mail").focusin(function() {
    var result = $(this).siblings(".form-validator");
    result.text("");
});