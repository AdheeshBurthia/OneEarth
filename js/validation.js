$(document).ready(function(){

   $("#username").keyup(function(){

      var username = $(this).val().trim();

      if(username != ''){

         $.ajax({
            url: 'includes/register.php',
            type: 'post',
            data: {username: username},
            success: function(response){

                $('#uname_response').html(response);

             }
         });
      }else{
         $("#uname_response").html("");
      }

    });
    
    $("#email").keyup(function(){

      var email = $(this).val().trim();

      if(email != ''){

         $.ajax({
            url: 'includes/register.php',
            type: 'post',
            data: {email: email},
            success: function(response){

                $('#ename_response').html(response);

             }
         });
      }else{
         $("#ename_response").html("");
      }

    });
    
    $("#password-1").keyup(function(){

      var password = $(this).val().trim();

      if(password != ''){

         $.ajax({
            url: 'includes/register.php',
            type: 'post',
            data: {password: password},
            success: function(response){

                $('#pass_response').html(response);

             }
         });
      }else{
         $("#pass_response").html("");
      }

    });
    
    $('#btnSignup').click(function(e){
        e.preventDefault();

        var user_name = $(this).closest('.form__content').find('#username').val();
        var user_email = $(this).closest('.form__content').find('#email').val();
        var user_password = $(this).closest('.form__content').find('#password-1').val();

        $.ajax({
            method: "POST",
            url: "includes/register.php",
            data: {
                "user_name" : user_name,
                "user_email" : user_email,
                "user_password" : user_password,
                "scope" : "signup"
            },
            success: function(response){
                if(response == "verification"){
                    window.location.href = "../verification.php";
                }else{
                    $('#error_response').html(response);
                }
            }
        });
        
        
    });
    
    $('#btnLogin').click(function(e){
        e.preventDefault();

        var log_username = $(this).closest('.form__content').find('#log_username').val();
        var log_password = $(this).closest('.form__content').find('#password-1').val();

        $.ajax({
            method: "POST",
            url: "includes/register.php",
            data: {
                "log_username" : log_username,
                "log_password" : log_password,
                "scope" : "login"
            },
            success: function(response){
                if(response == "index"){
                    window.location.href = "../index.php";
                }else if(response == "verification"){
                    window.location.href = "../verification.php";
                }else{
                    $('#error').html(response);
                }
            }
        });
        
        
    });

 });