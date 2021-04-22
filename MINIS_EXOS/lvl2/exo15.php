<?php
//Créer une fonction PHP qui retourne vraie ou faux si un nombre qui lui est passé en paramètre est pair ou impair (respectivement). Vous pouvez tester tout cela facilement.

//Code à faire ici
function peerOrOdd($nbr) {
    $bool = "";
    if($nbr % 2 === 0) {
        $bool = 'vrai';
    }
    else {
        $bool = 'faux';
    }
    return $bool;
}

$rand = rand(1, 100);
echo $rand . " est un nombre pair ? " . peerOrOdd($rand);