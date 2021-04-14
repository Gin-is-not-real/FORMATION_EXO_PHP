<?php
$a = 1;
function test()
{ 
    echo $a;
}

test();

//Trouver quel concept fait qu'il y a une erreur dans ce code. Trouvez un moyen d'afficher 1.
echo "L'erreur est du au fait que la fonction ne voit pas la variable a, elle n'est pas dans sa portée. Pour afficher 1 on va lui passer la variable en parametre" . '<br/>';
$b = 1;
function test2($var)
{ 
    echo $var;
}

test2($b);
