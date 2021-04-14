<?php
$weirdArray = [
    ["prenom" => "Justine"], 
    "chat",
    ["prenom" => "Julien"], 
    "chien", 
    ["prenom" => "Damien"], 
    "poisson"];

//Voici un tableau particulier, je veux que vous le parcouriez et que vous m'affichiez la paire clé/valeur si l'élément du tableau est un tableau associatif, sinon juste la valeur de l'élément.

//Code à faire ici
foreach ($weirdArray as $key => $value) {
    if(is_array($value)) {
        echo key($value) . " => " . $value[key($value)] . "<br/>";
    }
    else {
        echo $value . '<br/>';
    }
}