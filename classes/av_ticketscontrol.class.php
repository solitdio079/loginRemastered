<?php
include_once "av_tickets.class.php";

class Av_ticketscontrol extends Av_tickets{
    public function createAvTicket($company, $destination, $departure_place, $departure_hour, $departure_date, $bus_type, $price, $total_number){
        $this->setAvTicket($company, $destination, $departure_place, $departure_hour, $departure_date, $bus_type, $price, $total_number);
    }

    public function removeAvTicket($id){
        $this->deleteAvTicket($id);
    }
}