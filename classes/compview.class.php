<?php
include_once "comp.class.php";

class Compview extends Comp{
    public function takeComp(){
        $result = $this->getComp();
        return $result;
    }

    public function takeOneComp($compId){
        $result = $this->getOneComp($compId);
        return $result;
    }
}