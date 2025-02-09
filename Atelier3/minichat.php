<!DOCTYPE html>
<html>

<head></head>

<body>
<form action = "minichat_post.php" method = "post">
    <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/> <br/>
        <label for="message">Message</label> : <input type="text" name="message" id="message"/> <br/>
        <input type="submit" value="Envoyer"/>
    </p>
</form>

</body>


</html>


<?php
// Connecting to the database

try
{
    $bdd = new PDO ('mysql:host=localhost; dbname=test; charset=utf8', 'root' , '');
}
catch(Exception $e)
{
    die('Erreur :'.$e->getMessage());
}

//  Recap the 10 last messages
$response = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Display each message (all data is protected by htmlspecialchars)
// htmlspecialchars - Convert special characters to entity HTML

while ($donnees = $response->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> :' . htmlspecialchars($donnees['message']).'</p>';
}

$response->closeCursor();

?>