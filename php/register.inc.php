<?php
if(isset($_POST["registerSubmit"])){
    if(strlen($_POST["full_name"]) <4){
        echo "Pas assez de characteres dans le nom complet!";
        exit();
    }else if(strlen($_POST["user_name"]) <2){
        echo "Pas assez de characteres dans le nom d'utilisateur!";
        exit();

    }else if((int)$_POST["user_age"] <18){
        echo "Interdit au moins de 18 ans!";
        exit();
    }

    else if(!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)){
        echo "Entrez un e-mail valide s'il vous plait!";
        exit();

    }else if(strlen($_POST["user_phone"]) <5){
        echo "Numero de telephone invalide!";
        exit();

    }
    else{
        include_once "../classes/usersview.class.php";
        $checkUser= new Usersview();
        $checkUser = $checkUser->takeOneUser($_POST["user_email"]);

        if($checkUser != null){
            echo "Un compte existe deja avec cet email!";
            exit();
        }else{
            include_once "../classes/userscontrol.class.php";
            $newUser = new Userscontrol();

            $full_name = $_POST["full_name"];
            $user_name = $_POST["user_name"];
            $user_email = $_POST["user_email"];
            $user_phone = $_POST["user_phone"];
            $user_pwd = password_hash($_POST["user_pwd"], PASSWORD_DEFAULT);
            $user_age = $_POST["user_age"];

            $newUser->createUser($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age);

            echo "Success!";
        }
    }
}