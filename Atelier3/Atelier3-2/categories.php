<?php 
require_once('conn.php');

$request = "SELECT * FROM categories";
$rs = mysqli_query($conn , $request);
?>
<select id="cats" name="cat" size="1">
    <?php
    while($cat = mysqli_fetch_assoc($rs)){
    ?>
    <option value = "<?php echo $cat['ID_CAT'] ; ?>" > 
        <?php echo $cat['NOM_CAT']; ?>
    </option>

<?php } ?>
</select>