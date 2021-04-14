<?php
//Créer une fonction qui retourne la chaîne de caractère qui lui est envoyé sans voyelle (a, e, i, o, u, y) et affichez ce mot avant et après le changement ! Vous pouvez utiliser n'importe qu'elle mot pour cela comme girafe (ce qui donnerait grf) par exemple, peut-importe

//Code à faire ici
function sansVoyelles($word) {
    echo 'mot à modifier: ' . $word . '<br/>';
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    $str = $word;

    foreach($voyelles as $elt) {
        $str = str_replace($elt, "", $str);
    }

    echo 'mot aprés retrait des voyelles: ' .  $str . '<br/>';
}

echo sansVoyelles('pas facile sans les dents');