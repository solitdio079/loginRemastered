<?php
session_start();
if($_POST["loginSubmit"]){
    include_once "../classes/usersview.class.php";

    $checkUser = new Usersview();
    $checkUser = $checkUser->takeOneUser($_POST["login_email"]);
    if($checkUser == null){
        echo "Pas d'utilisateur avec cet email!";
        exit();
    }else if (count($checkUser) > 1){
        echo "Erreur inattendue, reessayez plus tard!";
        exit();

    }else{
        $verifyPwd = password_verify($_POST["login_password"], $checkUser[0]["user_pwd"]);

        if($verifyPwd == false){
            echo "Mot de Passe incorrect!";
            exit();
        }else{
            $_SESSION["user"]=array($checkUser[0]["user_name"],$checkUser[0]["user_email"]);
            echo "Success!";
            exit();
        }
    }
}