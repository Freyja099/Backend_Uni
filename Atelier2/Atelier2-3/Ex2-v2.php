<?php
    $conn = mysqli_connect("localhost" , "root" , "" , "atelier2-3-2");
    if (mysqli_connect_error()){
        echo "not connected to the database";
    }
    $query1 = 'SELECT id_cat, nom_cat FROM categories' ;
    $res1 = mysqli_query($conn , $query1);

    if(!$res1)
    {
        die("Erreur dans la 1er requete" . mysqli_error($conn));
    }
    $idCat = 1;
    if(isset($_POST['idCat']))
    {
        $idCat = $_POST['idCat'];
    }

    $query2 = "SELECT * FROM Produits Where ID_CAT = $idCat";
    $res2 = mysqli_query($conn , $query2);
    if(!$res2)
    {
        die("Erreur dans la 2eme requete" . mysqli_error($conn)); 
    }

?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action ="Ex2-v2.php" method = "post">
            <select name = "idCat" size = "1">
                <?php
                    while($row = mysqli_fetch_assoc($res1)){
                        $selected = ($row['ID_CAT'] == $idCat) ? 'selected' : "";
                    echo " <option value =' " . $row['ID_CAT'] ." ' $selected>" . $row['NOM_CAT'] . "</option>";
                    }
                ?>
            </select>
        </form>
    </body>
</html>

<?php
    


?>  