<?php
//Générer un nombre aléatoire entre 1 et 100, si celui-ci est inférieur à 75 affichez la valeur du nombre aléatoire et un compteur d'essais de nombre jusqu'à ce que le nombre aléatoire soit supérieur strictement à 75 ! (Utilisez une boucle ! Mais quelle boucle prendre lorsque que l'on ne sait pas le nombre d'itération nécessaire ?)

//Code à faire ici
$rand = rand(1, 100);
$count = 1;

while($rand < 75) {
    echo 'nombre aléatoire généré: ' . $rand . "\t" . 'nombre d\'essai = ' . $count . '<br/>';
    $rand = rand(1, 100);
    $count++;
}

echo 'nombre final: ' . $rand;