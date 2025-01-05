<!DOCTYPE html>
<html>


<body>
<form method = "post" action="Ex1.php">
    <div style = "display : flex;" >
        <div>
            <label for ="firstNumber"> First Number</label>
            <input type="firstNumber" placeholder=" " id = "firstNumber" name = "firstNumber" required>
        </div>
        <div style = "margin : 0px 12px ;">
            <label for ="operator" >Operation </label>
                <select  id = "operator" name ="operator" required>
                    <option value = "+"> + </option>
                    <option value ="-"> - </option>
                    <option value ="/"> / </option>
                    <option value ="*"> * </option>
                </select>

        </div>
        <div>
            <label for ="secondNumber"> Second Number</label>
            <input type = "secondNumber" placeholder=" " id ="secondNumber" name = "secondNumber" required>
        </div>

    </div>
    
    <button style="margin-top : 10px;" id = "result" name = "result">Result</button>
</form>

</body>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firsNumber = $_POST['firstNumber'];
        $secondNumber = $_POST ['secondNumber'];
        $operator = $_POST['operator'];

        $result = 0 ;

        switch ($operator)
        {
            case '+':
            $result = $firstNumber + $secondNumber ;
            break ;

            case '-':
            $result = $firstNumber - $secondNumber ;
            break ;

            case '*':
            $result = $firstNumber * $secondNumber ;
            break ;

            case '/':
                if ($secondNumber != 0)
                $result = $firsNumber / $secondNumber;

                else
                {
                    $Error = "Error" ;
                    echo $Error ;
                    exit ;
                }
            break;

            default : 
            $InvalidChar = "Error Enter a number";
            echo $InvalidChar ;
            break ;
        }

        echo $result ;
    }

?>

</html>