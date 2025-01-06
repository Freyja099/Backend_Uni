<?php
require_once('conn.php');
if(isset($_SERVER['idCat'])){
    $idCat = $_SERVER['idCat'];
}
else 
$idCat = '1';

$request = "SELECT * FROM produits WHERE ID_CAT = $idCat";
$res = mysqli_query($conn , $request);

?>

<table>
    <tr>
        <th> ID </th>
        <th> DES </th>
        <th> PRIX </th>
        <th> QUANTITE </th>
        <th> PROMO </th>
    </tr>
    <?php
        while($data = mysqli_fetch_assoc($res)) {
    ?>
    <tr>
        <td> <?php echo ($data['ID_PROD']) ?> </td>
        <td> <?php echo ($data['DESIGNATION']) ?> </td>
        <td> <?php echo ($data['PRIX']) ?> </td>
        <td> <?php echo ($data['QUANTITE']) ?> </td>
        <td> <?php echo ($data['PROMO']) ?> </td>
    </tr>
    <?php } ?>
</table>