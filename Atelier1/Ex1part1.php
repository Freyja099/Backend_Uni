<?php
function dire_text($qui ,&$texte)
{
    $texte = "Bienvenue $qui";
}

$chaine = "Bonjour";
dire_text("Monsieur" , $chaine);
echo $chaine;

?>

