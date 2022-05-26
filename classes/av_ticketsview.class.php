<?php
include_once "av_tickets.class.php";

class Av_ticketsview extends Av_tickets{
    public function takeAvTicket(){
        $result=$this->getAvTicket();
        return $result;
    }

    public function takeAvTicketId($id){
        $result = $this->getAvTicketId($id);
        return $result;
    }

    public function takeAvTicketCompany($company){
        $result = $this->getAvTicketCompany($company);
        return $result;
    }

    public function takeAvTicketSearch($destination, $departue_place, $departure_date){
        $result = $this->getAvTicketSearch($destination, $departue_place, $departure_date);
        return $result;
    }
}