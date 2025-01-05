<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <div>
        <form id="form1" method="get" action = "ch2.php">
          <input type = "text" name ="nom_champ" id="nom_champ_id" value = "chaine">
          <label for = "nom_champ_id"> Champ </label>
        </form>
        <form>
          <input type = "submit" name ="submit_button" value = "Envoyer">
          <input type = "reset" name ="reset_button" value = "Effacer" >
        </form>
        <form>
            <input type = "radio" name = "radio_name" id="radio_id" value = "radio">
            <label for = "radio_id"> Radio </label>
        </form>
        <form>
            <input type="checkbox" name = "checkbox_name" id = "checkbox_id" value = "check">
            <label for = "checkbox">Checkbox</label>
        </form>
        <form>
            <select name = "select_name" size="1">
                <option> Choix 1 </option>
                <option> Choix 2 </option>
                <option> Choix 3 </option>
            </select>
        </form>
    </div>
    </body>
</html>
<?php

?>

