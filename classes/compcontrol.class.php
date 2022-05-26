<?php
include_once "comp.class.php";

class Compcontrol extends Comp{
    public function createComp($compLogo, $compName){
        $this->setComp($compLogo, $compName);
    }

    public function removeComp($compId){
        $this->deleteComp($compId);
    }
}