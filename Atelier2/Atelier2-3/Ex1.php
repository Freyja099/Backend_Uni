<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <form action="Ex1.php" method="post">
            <div>
                <label for="log">Login :</label>
                <input type="text" id="log" name ="log">
            </div>
            <div>
                <label for="mdp">Password :</label>
                <input type="text" id="mdp" name ="mdp">
            </div>
            <input type ="submit" value="Identifier" id="submit">
        </form>
    </body>
</html>

<?php
    $conn = mysqli_connect("localhost", "root" , "" , "atelier2-3-1");
    if(mysqli_connect_error()){
        echo 'Error connexion';
        exit();
    }
    if ( $_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $login = $_POST['log'];
        $password = $_POST['mdp'];

        $query1 = 'SELECT * FROM utilisateurs';
        $result = mysqli_query($conn , $query1);
        $temp = 0;
        while($row = mysqli_fetch_array($result)){
            if($row[0] == $login && $row[1] == $password)
                $temp = 1;
        }

        if ($temp == 1)
        echo 'Bievenue au site';
        else 
        echo 'wrong username or password';
    }
    
?>