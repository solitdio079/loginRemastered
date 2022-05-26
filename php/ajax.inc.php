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
    echo "Received!";

}
else {
    echo "Acces Refuse";
    exit();
}
