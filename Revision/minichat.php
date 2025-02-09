<?php
    include('connection.php');

    $query = "SELECT * FROM minichat LIMIT 20";
    $res = $connect->query($query);

?>

<html>
    <form method='POST' onClick='' action = 'minichat_post.php'>
        <label for='name'>user</label>
        <input placeholder='name' name='name' />
        <label for='message'>message</label>
        <input placeholder='message' name='message' />
        <button type='submit'>submit</button>
    </form>

    <?php
    while($row = $res->fetch(PDO::FETCH_BOTH)){
    ?>
    <div>
        <strong><?php echo $row[1] ?></strong>
        <p><?php echo $row[2] ?></p>
    </div>
    <?php }?>
</html>