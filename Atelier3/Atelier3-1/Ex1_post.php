<?php
    try{
        $conn = new PDO("mysql:host=localhost ; dbname = test ; chaset = utf-8" , "root" ,"");
    }
    catch(Exception $e){
        die('Erreur' . $e -> getMessage());
    }

    $request = $conn -> prepare('INSERT INTO minichat(pseudo , message) VALUES(?,?)');
    $request -> execute(array( $_POST['pseudo'], $_POST['message'] ));

header('location : Ex1.php ')

?>