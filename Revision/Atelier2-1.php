<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{ display: inline-block;}
    </style>
</head>
<body>
    <form action = "Atelier2-1.php" method="post">
    <div>
        <label for ="placeholder1"> Opérande 1 :</label>
        <br>
        <input type="text"  id ="placeholder1" name="placeholder1">
    </div>
    <div>
        <label for="choice">Operation</label>
        <br>
        <select id="choice" name="choice" size = "1">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </div>
    <div>
        <label for ="placeholder2"> Opérande : </label>
        <br>
        <input type="text" id ="placeholder2" name="placeholder2">
    </div>
    <br>
    <div>
        <label for ="buttonRes"></label>
        <input type="submit" value="Résultat" id ="buttonRes">
    </div>
    </form>    
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_operande = $_POST['placeholder1'];
        $second_operande = $_POST['placeholder2'];
        $operator = $_POST['choice'];
    
        switch($operator){
            case '+':
                $result = $first_operande + $second_operande;
                break;
            case '-':
                $result = $first_operande - $second_operande;
                break;
            case '*':
                $result = $first_operande * $second_operande;
                break;
            case '/':
                if($second_operande !=0)
                $result = $first_operande / $second_operande;
                else{
                    echo 'Error' ;
                    exit;
                }
                break;

            default:
            echo 'Invalid oprator';
        }
        echo $result;
    }
?>