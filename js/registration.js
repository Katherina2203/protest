$(document).ready(function(){
            $('#register').click(function(){
                var name = $('#name').val();
             
                var email = $('#email').val();
                var password = $('#password').val();
                var cpassword = $('#cpassword').val();
                
                if(name == '' || email == '' || password == '' || cpassword == ''){
                    alert('Please fill all fields');
                }else if((password.length) <5){
                    alert('Password should at least 15 simbols');
                }else if(!(password).match(cpassword)){
                    alert('Please check. Your password dont match');
                }else{
                    $.post("register.php",{
                        name1:  name,
                        email1: email,
                        password1: password
                    }, function(data){
                        if(data == 'You have Successfully Registered..'){
                            $("form-register")[0].reset();
                        }
                        alert(data);
                    });
                }
            });
        });