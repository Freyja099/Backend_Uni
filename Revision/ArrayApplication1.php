<?php
$notes = array (
    "said" => 13,
    "badr" => 15,
    "Najat" => 16
);

$notes["Karim"] = 10;
unset($notes["badr"]);
$max_note = max($notes);
$min_note = min($notes);

ksort($notes); // tri par ordre alphabétique
arsort($notes);  // tri le etudiants par ordre de mérite 
$moyenne = $sum($notes) / count($notes);
echo "la moyenne est : $moyenne";
?>