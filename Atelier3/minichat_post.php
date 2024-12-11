<?php
// Connecting to the database

try 
{
    $bdd= new PDO ('mysql : host=localhost ; dbname = test ; charset = utf8', 'root', '');
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// Insert message using a prepared request 
$req = $bdd->prepare('INSERT INTO minichart (pseudo, message) VALUES (?, ?)');
$req->execute(array($_POST['pseudo'].$_POST ['message']));

// Redirecting the user to the minichat page
header('Location: minichat.php');
?>