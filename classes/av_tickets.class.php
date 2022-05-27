<?php
include_once "dbh.class.php";

class Av_tickets extends Dbh{
    protected function setAvTicket($company, $destination, $departure_place, $departure_hour, $departure_date, $bus_type, $price, $total_number){
        $sql="INSERT INTO `av_tickets`(`company`, `destination`, `departure_place`, `departure_hour`, `departure_date`, `bus_type`, `price`, `total_number`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$company, $destination, $departure_place, $departure_hour, $departure_date, $bus_type, $price, $total_number]) or die(print_r($stmt->errorInfo(), true));
    } 

    protected function getAvTicket(){
        $sql="SELECT * FROM `av_tickets` WHERE 1";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(),true));
        $result=$stmt->fetchAll();
        return $result;
    }

    protected function getAvTicketId($id){
        $sql="SELECT * FROM `av_tickets` WHERE id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(),true));
        $result=$stmt->fetchAll();
        return $result;

    }

    protected function getAvTicketCompany($company){
        $sql="SELECT * FROM `av_tickets` WHERE company=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$company]) or die(print_r($stmt->errorInfo(),true));
        $result=$stmt->fetchAll();
        return $result;

    }

    protected function getAvTicketSearch($destination, $departure_place,$departure_date){
        $sql="SELECT * FROM `av_tickets` WHERE destination LIKE '%$destination%' AND departure_place LIKE '%$departure_place%'  AND departure_date=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$departure_date]) or die(print_r($stmt->errorInfo(),true));
        $result=$stmt->fetchAll();
        return $result;

    }

    protected function deleteAvTicket($id){
        $sql="DELETE FROM `av_tickets` WHERE id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id]) or die(print_r($stmt->errorInfo(),true));
    }
}