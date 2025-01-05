<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="get" action = "formulaireCH2.php" id = "form1">
        <div>
            <label for="nom_placeholder"> Nom : </label>
            <input type = "text" id = "nom_placeholder">
        </div>
        <div>
            <label for="prenom_placeholder"> Prenom : </label>
            <input type = "text" id = "prenom_placeholder">
        </div>
        <div>
            <label for="salaire_placeholder"> Salaire : </label>
            <input type = "text" id = "salaire_placeholder">
        </div>
        <div>
            <label> Etat Civil : </label><br>
            <input type = "radio" id = "etat-celib" value="Célibitaire">
            <label for="etat-celib">Celibataire</label>
            <input type = "radio" id = "etat-taken" value="Marié">
            <label for="etat-taken">Marie</label>
        </div>
        <div>
            <input type ="submit" id="button_submit" value="Envoyer">
            <input type="reset" id="button_reset" value="Effacer">
        </div>
    </form>
</body>
</html>

<?php
    $firstname = $_GET["prenom_placeholder"];
    echo $firstname;
?>