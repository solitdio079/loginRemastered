<?php

include_once "users.class.php";

class Usersview extends Users{
    public function takeAllUsers(){
        $result = $this->getAllUsers();
        return $result;
    }

    public function takeOneUser($user_name){
        $result = $this->getOneUser($user_name);
        return $result;
    }

     /**
     * pwdReset Methods
     */

    public function takepwdResetSelector($pwdResetSelector,$currentDate){
        $result= $this->getpwdResetSelector($pwdResetSelector,$currentDate);
        return $result;

     }
}