<?php
//Vous devez créer une variable qui contient un nombre aléatroire entre 1 et 12. Ce nombre correspondra à un mois (1 = janvier, 2 = février, etc...). Puis affichez le nombre aléatoire et le mois associé à celui-ci (utilisez un switch !).

//Code à faire ici
$rand = rand(1, 12);
$month = "";

switch ($rand) {
    case 1:
        $month = "Janvier";
        break;
    case 2:
        $month = "Fevrier";
        break;
    case 3:
        $month = "Mars";
        break;
    case 4:
        $month = "Avril";
        break;   
    case 5:
        $month = "Mai";
        break;
    case 6:
        $month = "Juin";
        break;
    case 7:
        $month = "Juillet";
        break;
    case 8:
        $month = "Aout";
        break;
    case 9:
        $month = "Septembre";
        break;
    case 10:
        $month = "Octobre";
        break;
    case 11:
        $month = "Novembre";
        break;
    case 12:
        $month = "Decembre";
        break;
}
echo $rand . ' = ' . $month;