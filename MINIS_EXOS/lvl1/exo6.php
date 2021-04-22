<?php
//Un grand classique mais que nous n'avons pas forcement fait auparavant. Intervertissez les valeurs des variables : $a à la valeur de $b, $b a la valeur de $c et $c a la valeur de $a puis afficher les.
$a = 10;
$b = 5;
$c = 3;

echo "\$a vaut $a.<br>";
echo "\$b vaut $b.<br>";
echo "\$c vaut $c.<br>";

//Code à faire ici 
$d = $a;
$a = $b;
$b = $c;
$c = $d;
//solution de tony
// [$a, $b, $c] = [$b, $c, $a];

echo "\$a vaut maintenant $a.<br>";
echo "\$b vaut maintenant $b.<br>";
echo "\$c vaut maintenant $c.<br>";