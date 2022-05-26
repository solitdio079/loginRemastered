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
                            <button class="nav-link active" id="pills-signIn-tab" data-bs-toggle="pill" data-bs-target="#pills-signIn" type="button" role="tab" aria-controls="pills-signIn" aria-selected="true">Reset Password</button>
                        </li>


                    </ul>
                    <!-- End Nav Pills buttons -->

                    <!-- Tabs Content -->
                    <div class="tab-content mt-5 col-lg-12 centered" id="signInContent">

                        <!-- Sign In Content -->
                        <div class="tab-pane fade show active" id="pills-signIn" role="tabpanel" aria-labelledby="pills-signIn-tab">
                            <!-- Sign in Tab -->
                            <form id="resetPwdForm">
                                <?php
                                if (isset($_GET["selector"]) && isset($_GET["validator"])) {
                                    $selector = $_GET["selector"];
                                    $validator = $_GET["validator"];

                                    if (empty($selector) || empty($validator)) {
                                        echo "<script>alert('Could not validate your request');</script>";
                                        header("location: index.html");
                                        exit();
                                    } else {
                                        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                                ?>

                                            <div class="inputs-container col-lg-12">
                                                <input type="hidden" id="selector" value="<?php echo $selector ?>">
                                                <input type="hidden" id="validator" value="<?php echo $validator ?>">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="resetPwd" placeholder="Nouveau Mot de Passe" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="resetPwd-repeat" placeholder="Confirmez le nouveau Mot de Passe" required>
                                                </div>
                                            </div>



                                            <button type="submit" class="btn btn-primary btnGradientYellow mt-5">Reset</button>
                                <?php


                                        } else {
                                            header("location: index.php");
                                            exit();
                                        }
                                    }
                                } else {
                                    header("location: index.php");
                                    exit();
                                }
                                ?>

                            </form>

                        </div>
                        <!-- End Sign In Content -->


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

    <div id="popup" style="display:none;">
        <img src="assets/images/loader.gif" alt="">

    </div>

    <div id="overlay" style="display:none;"></div>


    <!-- JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            //Function to show Error

            function showErrorMessage(data) {
                $("#popup").html('<img src="assets/images/errorInfo.png" alt=""> <p>' + data + '</p>');


                setTimeout(function() {
                    $("#popup").hide();
                    $("#overlay").hide();
                    $("#popup").html(' <img src="assets/images/loader.gif" alt=""> ');
                    $.magnificPopup.close();
                }, 3000);

            }

            function showSuccessMessage(data) {
                $("#popup").html('<img src="assets/images/success.png" alt=""> <p>' + data + '</p>');


                setTimeout(function() {
                    $("#popup").hide();
                    $("#overlay").hide();
                    $("#popup").html(' <img src="assets/images/loader.gif" alt=""> ');
                    $.magnificPopup.close();
                }, 3000);

            }

            /*
             *Reset Password Reset Process
             */
            $("#resetPwdForm").submit(function(e) {
                e.preventDefault();
                $("#popup").show();
                $("#overlay").show();
                var selector = $("#selector").val();
                var validator = $("#validator").val();
                var pwd = $("#resetPwd").val();
                var pwdRepeat = $("#resetPwd-repeat").val();
                if (pwd.length < 8) {
                    showErrorMessage("Mot de passe doit etre au moins 8 characteres!");
                } else if (pwd != pwdRepeat) {
                    showErrorMessage("Mots de passes ne correspondent pas!!");
                } else {
                    $.post("php/reset_password.inc.php", {
                        resetPasswordSubmit: "action",
                        selector: selector,
                        validator: validator,
                        pwd: pwd,
                        pwdRepeat: pwdRepeat
                    }, function(data) {
                        if (data == "Success!") {
                            showSuccessMessage("Mot de passe change avec success");
                            window.location.href = "index.php";

                        } else {
                            showErrorMessage(data);
                        }

                    });

                }

            });

        });
    </script>

</body>

</html>