<?php
include_once "users.class.php";

class Userscontrol extends Users{

    public function createUser($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age){
        $this->setUser($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age);
    }

    public function changePwd($new_pwd, $user_email){
        $this->updatePwd($new_pwd, $user_email);
    }
    public function changeUserInfos($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age){
        $this->updateUserInfos($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age);
    }

      //
        // Methods For pwdReset Table
    //

    public function removepwdReset($email){
        $this->deletepwdReset($email);
    } 

    public function createpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires){
        $this->setpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires);
    }
   


 }