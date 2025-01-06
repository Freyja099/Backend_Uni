<?php 
require_once('conn.php');

$request = "SELECT * FROM categories";
$rs = mysqli_query($conn , $request);
?>
<select id="cat" name="cat" size="1">
    <?php
    while($data = mysqli_fetch_assoc($rs)){
    ?>
    <option value = "<?php echo($data['ID_CAT']) ?>" > 
        <?php echo ($data['NOM_CAT']) ?>
    </option>

<?php } ?>
</select>