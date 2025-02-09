<?php
    try{
        $conn = new PDO('mysql : host = localhost ; dbname =test ; charset = utf-8', 'root' , '');
    }
    catch(Exception $e)
    {
        die("Erreur" . $e->getMessage());
    }
    $response = $conn -> query('SELECT nom FROM jeux_video');

    while($data = $response -> fetch())
    {
        echo $date['nom'] . "</br>";
    }
$response -> closeCursor();
?>