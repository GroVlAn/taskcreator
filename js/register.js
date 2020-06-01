$(document).ready(function () {
    $('#regsubmit').on('click',function () {
        var name = $('#regName').val();
        var email = $('#regEmail').val();
        var password = $('#regPassword').val();
        var repeatPassword = $('#regRepeatPassword').val();
        if(!name&&!email&&!password&&!repeatPassword) {
            $('#error1').css('display','block');
            $('#error2').css('display','block');
            $('#error3').css('display','block');
            $('#error4').css('display','block');
        }else if(!name&&!email&&!password&&repeatPassword){
            $('#error1').css('display','block');
            $('#error2').css('display','block');
            $('#error3').css('display','block');
        }else if(!name&&!email&&password&&!repeatPassword){
            $('#error1').css('display','block');
            $('#error2').css('display','block');
            $('#error4').css('display','block');
        }else if(!name&&email&&!password&&!repeatPassword){
            $('#error1').css('display','block');
            $('#error3').css('display','block');
            $('#error4').css('display','block');
        }else if(name&&!email&&!password&&!repeatPassword){
            $('#error2').css('display','block');
            $('#error3').css('display','block');
            $('#error4').css('display','block');
        }else if(!name&&!email&&password&&repeatPassword){
            $('#error1').css('display','block');
            $('#error2').css('display','block');
        }else if(!name&&email&&password&&!repeatPassword){
            $('#error1').css('display','block');
            $('#error4').css('display','block');
        }else if(name&&email&&!password&&!repeatPassword){
            $('#error3').css('display','block');
            $('#error4').css('display','block');
        }else if(name&&!email&&!password&&repeatPassword){
            $('#error2').css('display','block');
            $('#error3').css('display','block');
        }else if(!name&&email&&password&&repeatPassword){
            $('#error1').css('display','block');
        }else if(name&&!email&&password&&repeatPassword){
            $('#error2').css('display','block');
        }else if(name&&email&&!password&&repeatPassword){
            $('#error3').css('display','block');
        }else if(name&&email&&password&&!repeatPassword){
            $('#error4').css('display','block');
        }
        if(password!=repeatPassword){
            $('#errorPassword').css('display','block');
        }
        if(name==''||email==''|| password==''||repeatPassword ==''){

            if($(".error").length==0) {
                $("<span class='error'>Не все поля заполнены</span>").insertBefore($("#regsubmit"));
            }
            $("#regsubmit").prop("disabled", true);
        }

    });

    $('#loginsubmit').on('click',function () {
        var login = $('#login').val();
        var password = $('#loginPassword').val();
        if(!login&&!password) {
            $('#error1').css('display','block');
            $('#error2').css('display','block');
        }else if(!login){
            $('#error1').css('display','block');
        }else if(!password){
            $('#error2').css('display','block');
        }
        if(login==''|| password==''){

            $("#loginsubmit").prop("disabled", true);
        }

    });


    $('#login').change(function () {
        $('#error1').css('display','none');
        $("#loginsubmit").prop("disabled", false);
    });
    $('#loginPassword').change(function () {
        $('#error2').css('display','none');
        $("#loginsubmit").prop("disabled", false);
    });

});