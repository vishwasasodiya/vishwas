<?php
    include "include/header.php";
    include "sign_up-db.php";
?>
<html>
    <head>
        <script src="js/jquery.min.js"></script>
        <style>
            #error_user_email {color:red;}
            #error_user_name {color:red;}
            #error_user_password {color:red;}
            #error_con_password {color:red;}
            #error_user_image {color:red;}
            #error_same_password {color:red;}
        </style>
    </head>
            <body>
<form method="post" id="form" style="margin-top:50px; margin-bottom:50px;" class="text-center">
    <input type="text" name="user_email" id="user_email" class="text-left" placeholder="Enter Your E-Mail" style="width:300px;"/> 
    <span id="error_user_email"></span><br> <br>

    <input type="text" name="user_name" id="user_name" class="text-left" placeholder="Enter Your User Name" style="width:300px;"> 
    <span id="error_user_name"></span> <br> <br>
    
    <input type="password" name="user_password" id="user_password" class="text-left" placeholder="Enter Your Password" style="width:300px;"/>
    <span id="error_user_password"></span>  <br> <br>
    
    <input type="password" name="user_con_password" id="user_con_password" class="text-left" placeholder="Enter Your Confirm Password" style="width:300px;"/>
    <span id="error_con_password"> </span> <br> <span id="error_same_password"> </span> <br> <br>

    <input type="file" name="user_image" id="user_image" style="width:300px;"/>
    <span id="error_user_image"></span> <br> <br>

    <input type="submit" name="submit" id="submit" value="SIGN UP" style="width:100px; background-color:rgb(219 68 55); color:white; border:white;"/>
    
    </body>
</form>
<script>
    //validation using jquery...
    $("#form").submit(function() {
                var user_email           = $("#user_email").val();
                var user_name            = $("#user_name").val();
                var user_password        = $("#user_password").val();
                var user_con_password    = $("#user_con_password").val();
                var user_image           = $("#user_image").val();
                
                var flag = true;

				if(user_email == "")
				{   
					$("#error_user_email").html("*email is required");
					flag = false;
				}
				else
				{
					$("#error_user_email").html("");
                }

                if(user_name == "")
                {
                    $("#error_user_name").html("*User Name Is Required");
                    flag = false;
                }
                else
                {
                    alert("Hello");            
                    $("#error_user_name").html("");
                }

                if(user_password == "")
                {
                    $("#error_user_password").html("*Password Is Required");
                    flag = false;
                }
                else
                {
                    $("#error_user_password").html("");
                }

                if(user_con_password == "")
                {
                    $("#error_con_password").html("*Confirm Password Is Required");
                    flag = false;
                }

                else
                {
                    $("#error_con_password").html("");
                }

                if(user_image == "")
                {
                    $("#error_user_image").html("*Image Is Required");
                    flag = false;
                }
                else
                {
                    $("#error_user_image").html("");
                }

                if(user_password !== user_con_password)
                {
                    $("#error_same_password").html("*Ur confirm password does not match with your password");
                    flag = false;
                }
                else
                {
                    $("#error_same_password").html("");
                }

                return flag;
			});
</script>
<?php
    include "include/footer.php";
?>