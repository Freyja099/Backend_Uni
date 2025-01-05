<!Doctype html>
<html>
    <head>
        <meta chaset="utf-8">
    </head>
    <body>
    <form action="Atelier2-2.php" method="post">
        <div>
            <label for = "nom" >Nom : </label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for = "prenom" >Prenom : </label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        <div>
            <label for = "salaire" >Salaire : </label>
            <input type="text" name="salaire" id="salaire" required>
        </div>
        
            <label>Etat civil : </label>
        <div style="display: block;">
            <input type = "radio" name ="single" id="single" value="celibataire" >
            <label for="single">Célibataire</label>
            <br>
            <input type = "radio" name ="married" id="married" value="marie">
            <label for="married">Marié</label>
        </div>
        <div>
            <input type ="submit" value="Envoyer" id="envoyer">
            <input type="reset" value="Effacer" id="effacer">
        </div>
    </form>
    </body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_name = $_POST['prenom'];
        $seconde_name = $_POST['nom'];
        $salaire = $_POST['salaire'];

        if($salaire < 3000 && $salaire > 0)
        $salaire *= 0.05;
        elseif($salaire >= 3000 && $salaire <= 6000)
        $salaire *= 0.1;
        elseif($salaire >= 6000 && $salaire <= 10000)
        $salaire *= 0.15;
        elseif($salaire > 10000)
        $salaire *= 0.4;
        else
        {
            echo "Entrer un salaire positifs";
            $salaire = 0;
        }
        
        echo " $first_name $seconde_name , votre salaire après impôt est de $salaire €";
    }
?>