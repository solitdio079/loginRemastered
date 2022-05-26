<!--
Sign in & Sign up Template
Author: Ciuca Cristian (Criatix)
Author URL: https://www.ciucacristi.tk/
Framework: Bootstrap v5.0
Version: v2.0
Demo: https://ciucacristi.tk/signin
-->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Viewport -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css?v='<?php echo time(); ?>'">

    <!--Magnific Popup CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Owl Carousel CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css?v='<?php echo time(); ?>'">
    <!-- FontAwesome Icons -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <title>Sign in - Style 5 HTML5 Template</title>
</head>

<body>

    <div class="container-full">
        <div class="row">
            <div class="col-lg-6 leftContainer">
                <!-- Main Left Container -->
                <div class="signPanel">
                    <!-- Container with Sign In & Sign Up -->
                    <p class="nameTitle">Sign In</p>
                    <p class="mainDescription">No quo sale ferri concludaturque, ea eius</p>

                    <ul class="nav nav-pills mb-3 mt-5 justify-content-center" id="pills-tab" role="tablist">
                        <!-- Nav Pills buttons -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-signIn-tab" data-bs-toggle="pill" data-bs-target="#pills-signIn" type="button" role="tab" aria-controls="pills-signIn" aria-selected="true">Sign in</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-signUp-tab" data-bs-toggle="pill" data-bs-target="#pills-signUp" type="button" role="tab" aria-controls="pills-signUp" aria-selected="false">Sign Up</button>
                        </li>
                    </ul>
                    <!-- End Nav Pills buttons -->

                    <!-- Tabs Content -->
                    <div class="tab-content mt-5 col-lg-12 centered" id="signInContent">

                        <!-- Sign In Content -->
                        <div class="tab-pane fade show active" id="pills-signIn" role="tabpanel" aria-labelledby="pills-signIn-tab">
                            <!-- Sign in Tab -->
                            <form id="loginForm">
                                <div class="inputs-container col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="login-email" placeholder="Email Adress" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" id="login-password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberCheck">
                                    <label class="form-check-label" for="rememberCheck">Remember me</label>
                                </div>

                                <button type="submit" class="btn btn-primary btnGradientYellow mt-5">Sign In</button>

                            </form>
                            <p class="links mt-5"><a href="#" data-bs-toggle="modal" data-bs-target="#forgotPassModal">Forgot Password?</a></p>

                            <!-- Modal -->
                            <div class="modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form id="resetPwdForm">
                                            <div class="modal-body">
                                                <p class="modal-title">Reset Password</p>
                                                <p class="modal-icon"><i class="far fa-envelope-open"></i></p>
                                                <p class="modal-description">We will send you an email with password reset link.</p>

                                                <div class="form-group standardInput">
                                                    <input type="email" class="form-control" id="forgotPass-email" placeholder="Email" required>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary mt-5 btnGradientYellow centered">Send Link</button>
                                                    </div>

                                                    <div class="col">
                                                        <button type="button" data-bs-dismiss="modal" class="btn btn-light mt-5 btnGradientLight centered">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                            <!-- End Modal -->
                        </div>
                        <!-- End Sign In Content -->

                        <!-- Sign Up Tab Content -->
                        <div class="tab-pane fade" id="pills-signUp" role="tabpanel" aria-labelledby="pills-signUp-tab">
                            <form id="registerForm" href="#popup">
                                <div class="inputs-container col-lg-12">
                                    <!-- Container with inputs -->
                                    <div class="row g-0">
                                        <div class="form-group col">
                                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                        </div>

                                        <div class="form-group col">
                                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="user_phone" placeholder="Phone Number" required>
                                    </div>


                                    <div class="row g-0">
                                        <div class="form-group col">
                                            <input type="text" class="form-control" id="user_name" placeholder="User Name" required>
                                        </div>

                                        <div class="form-group col">
                                            <input type="number" class="form-control" id="user_age" placeholder="Age" required>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <input type="email" class="form-control" id="user_email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" id="user-pwd" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="user-repeatPwd" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <!-- End Container with inputs -->

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeCheck" required>
                                    <label class="form-check-label" for="agreeCheck">I accept the <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a></label>
                                </div>

                                <button type="submit" id="registerFormBtn" class="btn btn-primary btnGradientYellow mt-4">Sign Up</button>
                            </form>

                        </div>
                        <!-- End Sign Up Tab Content -->
                    </div>
                    <!-- End Tabs Content -->

                </div>
                <!-- End Container with Sign In & Sign Up -->
            </div>
            <!-- End Main Left Container -->

            <div class="col-lg-6 rightContainer">
                <!-- Main Right Container -->

                <div class="rightPanel">
                    <!-- Vertical centered container with the content -->
                    <p class="main-title">Consectetur</p>
                    <p class="main-title">adipiscing</p>
                    <p class="main-title">elit</p>

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p class="description">Lorem ipsum dolor sit amet, suscipit concludaturque est cu, eam ut malorum eripuit delicatissimi. No quo sale ferri concludaturque, ea eius mazim omittantur sed. Pri porro tation ocurreret ea.</p>
                        </div>

                        <div class="item">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae lorem libero. Suspendisse eleifend lorem nec quam malesuada, vitae convallis leo feugiat. Curabitur rutrum nisl in tincidunt suscipit. Fusce eu mauris vel ex
                                eleifend viverra in in lacus. Donec egestas, mauris tincidunt convallis mattis</p>
                        </div>

                    </div>

                </div>
                <!-- End Vertical centered container with the content -->
            </div>
            <!-- Main Right Container -->
        </div>
    </div>

    <div id="popup" style="display:none;" >
        <img src="assets/images/loader.gif" alt="">

    </div>

    <div id="overlay" style="display:none;" ></div>


    <!-- JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {

            //Function to show Error

            function showErrorMessage(data){
                $("#popup").html('<img src="assets/images/errorInfo.png" alt=""> <p>'+ data +'</p>');
                   

                   setTimeout(function() {
                       $("#popup").hide();
                       $("#overlay").hide();
                       $("#popup").html(' <img src="assets/images/loader.gif" alt=""> ');
                       $.magnificPopup.close();
                   }, 3000);

            }

            function showSuccessMessage(data){
                $("#popup").html('<img src="assets/images/success.png" alt=""> <p>'+ data +'</p>');
                   

                   setTimeout(function() {
                       $("#popup").hide();
                       $("#overlay").hide();
                       $("#popup").html(' <img src="assets/images/loader.gif" alt=""> ');
                       $.magnificPopup.close();
                   }, 3000);

            }




            //Register Form  Data Submit
          
           
            $("#registerForm").submit(function(e) {


                e.preventDefault();
                e.stopPropagation();
                $("#popup").show();
                $("#overlay").show();
               
                console.log("Submitted");
                if($("#user-pwd").val().length < 8 ){
                    showErrorMessage("Mot de passe doit avoir au moins 8 characteres!");

                }
                else if ($("#user-pwd").val() != $("#user-repeatPwd").val()) {
                   showErrorMessage("Mots de passses ne correspondent pas!")
                } 

                else {
                    
                    var user_pwd = $("#user-pwd").val();
                    var user_age = $("#user_age").val();
                    var full_name = $("#firstName").val() + " " + $("#lastName").val();
                    var user_name = $("#user_name").val();
                    var user_email = $("#user_email").val();
                    var user_phone = $("#user_phone").val();


                    $.post("php/register.inc.php",{
                        registerSubmit:"action",
                        full_name: full_name,
                        user_name: user_name,
                        user_pwd:user_pwd,
                        user_age:user_age,
                        user_email:user_email,
                        user_phone:user_phone
                        },
                        function(data){
                            if(data != "Success!"){
                              showErrorMessage(data);
                            }else{
                                showSuccessMessage("Compte Cree avec succes!");
                            }

                        } );


                }









            });
            /*
             *** End of Register Part
            */

            $("#loginForm").submit(function(e){
                e.preventDefault();
                e.stopPropagation();

                $("#overlay").show();
                $("#popup").show();

                var login_email = $("#login-email").val();
                var login_password = $("#login-password").val();

                $.post("php/login.inc.php", {
                    loginSubmit:"action",
                    login_email:login_email, 
                    login_password:login_password
                },

                function(data){
                    if(data != "Success!"){
                        showErrorMessage(data);
                    }else{
                        showSuccessMessage("Logged in with Success!");
                    }
                }
                
                );
            });

            /*
                * Reset Passsword Request 
            */
            $("#resetPwdForm").submit(function(e){
                e.preventDefault();


                var email = $("#forgotPass-email").val();

                $.post("php/reset_request.inc.php", {
                    resetRequestSubmit: "action",
                    email:email
                },
                
                function(data){
                    if(data != "Success"){
                       alert(data);

                    }else{
                       alert("Verifiez votre email pour le lien!");

                    }
                }
                );
            });

            
           

        });
    </script>
</body>

</html>