<?php
include_once "dbh.class.php";
class Users extends Dbh{

    protected function setUser($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age){
        $sql="INSERT INTO `users`(`full_name`, `user_name`, `user_email`, `user_phone`, `user_pwd`, `user_age`) VALUES (?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function getAllUsers(){
        $sql="SELECT * FROM `users` WHERE 1";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute()  or die(print_r($stmt->errorInfo(), true)); 
        $result=$stmt->fetchAll();
        return $result;
    }

    protected function getOneUser($user_name){
        $sql="SELECT * FROM `users` WHERE `user_name`=? OR `user_email`=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$user_name, $user_name])  or die(print_r($stmt->errorInfo(), true)); 
        $result=$stmt->fetchAll();
        return $result;

    }

    protected function updatePwd($new_pwd,$user_email){
        $sql="UPDATE `users` SET `user_pwd`=? WHERE `user_email`=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$new_pwd,$user_email]) or die(print_r($stmt->errorInfo(), true));

    }

    protected function updateUserInfos($full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age){
        $sql="UPDATE `users` SET `full_name`=?,`user_name`=?,`user_email`=?,`user_phone`=?,`user_pwd`=?,`user_age`=? WHERE 1";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$full_name, $user_name, $user_email, $user_phone, $user_pwd, $user_age]) or die(print_r($stmt->errorInfo(), true));

    }

    //
        // Methods For pwdReset Table
    //

    protected function deletepwdReset($email){
        $sql="DELETE FROM pwdReset WHERE pwdResetEmail=?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]) or die(print_r($stmt->errorInfo(), true));

    }

    protected function setpwdReset($pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires){
        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector,pwdResetValidator, pwdResetExpires) VALUES (?,?,?,?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$pwdResetEmail, $pwdResetSelector, $pwdResetToken, $pwdResetExpires]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function getpwdResetSelector($pwdResetSelector,$currentDate){
        $sql="SELECT * FROM pwdReset WHERE pwdResetSelector = ? AND pwdResetExpires >=$currentDate;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$pwdResetSelector]) or die(print_r($stmt->errorInfo(), true));

        $result=$stmt->fetchAll();

        return $result;
    }

}