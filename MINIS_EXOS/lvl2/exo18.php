<?php
$notes1 = [15, 16, 17, 18, 16, 19];
$notes2 = [5, 11, 12, 13, 7, 10];

//Vous avez à votre disposition 2 tableaux. Afffichez la moyenne des 2 tableaux !


//Code à faire ici !
function calculMoyenne($tab) {
    $moyenne = 0;
    $count = count($tab);

    for($i = 0; $i < $count; $i++) {
        $moyenne += $tab[$i];
    }
    $moyenne /= $count;

    return $moyenne;
}

echo 'moyenne notes1: ' . calculMoyenne($notes1) . '<br/>';
echo 'moyenne notes2: ' . calculMoyenne($notes2) . '<br/>';
echo 'moyenne totale: ' . calculMoyenne([calculMoyenne($notes1), calculMoyenne($notes2)]);
