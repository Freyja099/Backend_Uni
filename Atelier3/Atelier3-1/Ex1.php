<?php 
    try{
        $conn = new PDO('mysql:host=localhost ; dbname=test ; charset=utf-8 ' , 'root' ,'');
    }
    catch(Exception $e){
        die('Erreur' .$e -> getMessage());
    }
    $request = $conn -> prepare('SELECT pseudo,message FROM minichat ');
    $res = $conn -> query($request);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="Ex1_post.php" method="post">
        <label for="pseudo">Pseudo</label>
        <input name = "pseudo" type="text" id="pseudo">
        <label for="mss">Message</label>
        <input name = "mss" type="text" id="mss">
        <input type="submit" value="Envoyer" name="submit_button">
    </form>
    <?php
    while($row = $res -> fetch(PDO :: FETCH_BOTH)){
    ?>
    <p>
        <strong>
            <?php echo $row[1] ?>
        </strong>
        <?php echo $row[2]?>
    </p>
    <?php }?>
</body>
</html>

 <?php
/*     try{
        $conn = new PDO('mysql:host=localhost ; dbname=test ; charset=utf-8' , 'root' , '');
    }
    catch(Exception $e){
        die("Erreur" . $e -> getMessage());
    }
    $request = $conn -> query('SELECT pseudo,message FROM minichat ORDER BY id DESC LIMIT 0, 10');
    while($data = $request -> fetch(PDO :: FETCH_BOTH)){
        echo ' <p><strong> ' . htmlspecialchars($data['pseudo']) . ' </strong> : ' . htmlspecialchars($data['message']) . '</p>' ;
    }
 
    
    $request -> closeCursor();  */
?>
 