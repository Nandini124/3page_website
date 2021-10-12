<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title> DASHBOARD SCREEN </title>
        <?php include "includes\header.php"; ?>
        <style>
           

            .navbar-nav {
                flex-direction: row;
            }
            
          
            .nav-item{
               padding-left: 10px !important
           }
           .navigation-section-bg{
                background-color: #C4C4C4;
            }
            .homesection{
                background-size: cover;
                background-repeat: no-repeat;
            }
            .top-medium-spacing{
                padding-top: 50px;
                padding-left: 350px;
            }
            .bottom-medium-spacing{
                padding-bottom:50px;
            }
            .top1-medium-spacing{
                padding-top: 10px;
            }
            .bottom1-medium-spacing{
                padding-bottom:10px
            }
            .icon-spacing{
                padding-left: 10px;
                padding-right: 10px;
            }
            .background{
                background-color: #C4C4C4;
                padding-top: 20px;
                padding-bottom: 10px;
                padding-left: 20px;
                padding-right: 20px;

            }
            .heading-space{
                padding-top: 23px;
            }
            .content-space{
                padding-top:50px;
            }
            .content-spacing-bottom{
                padding-bottom: 60px;
            }
            
            .footer-section-bg{
                background-color: grey;
            }
            .copyrights-section{
                padding-top: 20px;
                padding-bottom: 15px;
                background-color: blue;
                color: white;
            }
            .custom-font-color{
                color:white;
                text-decoration: none;
            }
            .custom-font-color:hover{
                color:white;
                text-decoration: none;
            }
            .contact-us-spacing{
                padding-top: 10px;
            }
            .submit-bg{
                background-color: white;
            }
        </style>

    </head>

    <body> 
        <header>
        <?php include "includes\landing_nav.php"; ?>
        </header>
        <div class="container heading-space">
                <div class="card">     
                <form method = "GET" class="container top-medium-spacing bottom-medium-spacing" >
                    <div class="row content-space content-spacing-bottom">
                        <div class="background">
                            <a href="#">
                                <center><img src="assets/images/cbit-logo.jpeg" height="50px" alt="logo" ></center>
                            </a>
                            <center><p>USER LOGIN FORM</P></center>
                            <center><p>Please fill in your credentials to continue</P></center>
                            <br>
                            <div class="form-group text-center">
                                <p><input class="form-control" type ="text" name ="email" id="user_email" placeholder ="Email" >
                                <span id="email-err" class="text-danger"></span>
                            </div>
                            <div class="form-group text-center">
                                <p><input class="form-control" type ="text" name ="password" id="user_password" placeholder ="Password">
                                <span id="password-err" class="text-danger"></span>
                            </div>
                            <div>
                            <input type="checkbox"><lable> Keep me Signed in</lable>
                            </div>
                            <div class="form-group text">
                            <p><input  class="btn btn-outline-primary submit-bg form-control" type ="submit" onclick="validateForm()" value ="Login">
                            </div>
                            <p>Don't have an account?<a href="registration.php">Sign up now</a></p>
                            <p>Forget Password?<a href="reset_password.php">Click to reset</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>


            
       

       <?php include "includes\\footer.php"; ?>
       <script>
           //$("#user_email").on('keyup',function(){
              //  if($("#user_email").val()==''){
                //    $("#email-err").text('Email is Required');
               // }
               // else{
                //    $("#email-err").text('');
                //}
           // });


            
           // $("#user_password").on('keyup',function(){
              //  if($("#user_password").val()==''){
               //     $("#password-err").text('password is Required');
               // }
               // else{
               //     $("password-err").text('');
               // }
           // });
       


           function printError(elemId, hintMsg){
    document.getElementById(elemId).innerHTML = hintMsg;
           }

           function validateForm() {
                event.preventDefault();

                var email = document.getElementById('user_email').value;

                var password=document.getElementById('user_password').value;

                var emailErr = passwordErr= true;


                //Validate email address
                if(email == "") {
                    printError("email-err", "Please enter your email");
                } else {
                    var regex = /^\S+@\S+\.\S+$/;
                    if(regex.test(email) == false) {
                        printError("email-err", "Please enter a valid email");
                    } else {
                        printError("email-err", "");
                        user_emailErr = false;
                    }
                }

                //validate password
                if(password==""){
                    printError("password-err", "Please enter your password");
                }else {
                    printError("password-err", "");
                    user_passwordErr = false;
                }
                

    //return false;

    //cosole.log(email+password);
}
            </script>



    </body>
</html>