<?php

/**--
 * Admin Page 
 */

//Company Add Function

if (isset($_POST["compSubmit"])) {
    include_once "../classes/compcontrol.class.php";
    if (isset($_FILES["compLogo"])) {
        $image = $_FILES["compLogo"];
        $uploadFolder = "../assets/img/companies/";
        if ($image['error'] !== 0) {
            echo "error in image";
            exit();
        } elseif ($image['size'] > 5000000) {
            echo "Image lourde";
            exit();
        } else {
            $extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'PNG'];
            $file_extension = explode('.', $image['name']);
            $file_extension = end($file_extension);
            if (!in_array($file_extension, $extensions)) {
                echo "Type d'image non supporte!";
                exit();
            } else {
                $imageTemp = $image['tmp_name'];
                $imageNewName = $_POST["compName"] . "." . $file_extension;
                $destination = $uploadFolder . $imageNewName;
                if (move_uploaded_file($imageTemp, $destination)) {
                    $compLogo = "assets/img/companies/" . $imageNewName;
                    $compName = $_POST["compName"];


                    $comp = new Compcontrol();
                    $comp->createComp($compLogo, $compName);
                    echo "Success!";
                    exit();
                } else {
                    echo "Image non Enregistre!";
                    exit();
                }
            }
        }
    } else {
        echo "Pas d'image!";
    }
}
//All Companies Fetch function

elseif(isset($_POST["compFetchSubmit"])){
    include_once("../classes/compview.class.php");

    $allComp = new Compview();
    $allComp = $allComp->takeComp();
    if($allComp == null){
        echo "Pas de Compagnie!Ajoutez des compagnies s'il vous plait!";
        exit();

    }else{
        echo json_encode($allComp);
        exit();
    }

}
//All Companies Fetch function
elseif(isset($_POST["addTicketSubmit"])){
    include_once("../classes/av_ticketscontrol.class.php");
    $company= (int)$_POST["company"];
    $destination = $_POST["destination"];
    $departure_place = $_POST["departure_place"];
    $departure_hour = $_POST["departure_hour"];
    $departure_date = $_POST["departure_date"]; 
    $bus_type = $_POST["bus_type"]; 
    $price = $_POST["price"]; 
    $total_number = $_POST["total_number"];

    $ticket = new Av_ticketscontrol();
    
    $ticket-> createAvTicket($company, $destination, $departure_place, $departure_hour, $departure_date, $bus_type, $price, $total_number);
    echo "Success!";
    exit();


}
/**--
 * clientIndex Page 
 */

 // Get Ticket from search
else if(isset($_POST["ticketCheckSubmit"])){
    $destination= $_POST["destination"];
    $departure_place = $_POST["departure_place"];
    $departure_date = $_POST["departure_date"];
    include_once "../classes/av_ticketsview.class.php";
    $foundTickets = new Av_ticketsview();
    $foundTickets = $foundTickets->takeAvTicketSearch($destination, $departure_place, $departure_date);
    if($foundTickets == null){
        echo "Pas de billet pour cette recherche!";
        exit();

    }else{
        echo json_encode($foundTickets);
        exit();
    }

}

//Get companies from ticket search
elseif(isset($_POST["compGroupSubmit"])){
    include_once "../classes/compview.class.php";
    $companies = new Compview();
    $companies = $companies->takeCompSearch($_POST["companies"]);
    if($companies == null){
        echo "Erreur inconnue!";
        exit();


    }else{
        echo json_encode($companies);
        exit();
    }
}

else {
    echo "Acces Refuse";
    exit();
}
