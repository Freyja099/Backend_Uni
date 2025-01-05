<?php
    $conn = mysqli_connect("localhost" , "root" , "" , "atelier2-2-1");
    if(mysqli_connect_error()){
        echo "Echec de la connexion " . mysqli_connect_error();
        exit();
    }

    // ajouter
    
    $query = " INSERT INTO TABLE personnes ";
    $result = mysqli_query ($conn , $query);
?>