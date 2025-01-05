<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <form action = "Ex2.php" method="get">
            <select name ="choice" required>
                <option value="ordinateurs" > Oridnateurs </option>
                <option value="imprimantes" > Imprimantes </option>
                <option value="scanner"> Scanner </option>
            </select>

            <?php

                $conn =  mysqli_connect("localhost" , "root", "" ,"atelier2backend") or die(mysqli_connect_error()) ;

                require_once("Ex2.php");

                if(isset($_GET['idCat']))
                {
                    $idCat = $_GET['idCat'];
                }
                else
                {
                    $idCat ='1';
                }
                $req = "select * from produits where ID_CAT = $idCat";
                $rs = mysqli_query($conn , $req);

            ?>

            <table border = "1"> 
                <tr>
                    <th>ID</th>
                    <th>DES</th>
                    <th>PRIX</th>
                    <th>QUANTITE</th>
                    <th>PROMO</th>
                </tr>

                <?php
                    while($p = mysqli_fetch_assoc($rs)) {
                ?>
                    <tr>
                        <td> <?php echo($p['ID_PROD']) ?> </td>
                        <td> <?php echo($p['DESIGNATION']) ?> </td>
                        <td> <?php echo($p['PRIX']) ?> </td>
                        <td> <?php echo($p['QUANTITE']) ?> </td>
                        <td> <?php echo($p['PROMO']) ?> </td>
                    </tr>

                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>
