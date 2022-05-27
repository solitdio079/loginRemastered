<?php
include_once "dbh.class.php";

class Comp extends Dbh {

    protected function setComp($compLogo, $compName){
        $sql="INSERT INTO `company`(`compLogo`, `compName`) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$compLogo, $compName]) or die(print_r($stmt->errorInfo(), true));
    }

    protected function getComp(){
        $sql="SELECT * FROM `company` WHERE 1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function getOneComp($compId){
        $sql="SELECT * FROM `company` WHERE compId=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$compId]) or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }
    protected function getCompSearch($compId){
        $compId = implode(",", $compId);
        $sql="SELECT * FROM `company` WHERE compId IN(?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$compId]) or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetchAll();
        return $result;
    }


    protected function deleteComp($compId){
        $sql="DELETE FROM `company` WHERE compId=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$compId]) or die(print_r($stmt->errorInfo(), true));
       
    }

}