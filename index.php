<?php
$tableau = [
    "Prenom" => "Théo",
    "Nom" => "Da Costa",
    "Adresse" => "Rue du bec",
    "Code Postale" => "76000",
    "Ville" => "Rouen",
    "Email" => "theo.dacos@gmail.com",
    "Téléphone" => "06.67.72.04.19",
    "Date de naissance" => "13/11/1997"
];
foreach ($tableau as $key => $valeur){
    echo  $key." = " . $valeur ." <br>";
}
?>