<?php
    require('Film.php');
    require('Calculatrice.php');
    require('Animal.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>exercices POO</h1>
    </header>

    <main>
        <div class="hidden" id="films">
            <p>instance de 2 Films:</p>
            <?php
            $film = new Film('Pi', 'Darren Arnosofsky', 'je sais pas');
            echo 'id: ' .$film->getId(). '<br>';
            echo 'nom: ' .$film->getNom(). '<br>';
            echo 'realisateur: ' .$film->getRealisateur(). '<br>';
            echo 'annee: ' .$film->getAnnee(). '<br><br>';
            
            $film = new Film('a', 'a', 'a');
            echo 'id: ' .$film->getId(). '<br>';
            echo 'nom: ' .$film->getNom(). '<br>';
            echo 'realisateur: ' .$film->getRealisateur(). '<br>';
            echo 'annee: ' .$film->getAnnee(). '<br>';
            ?>
        </div>

        <div class="hidden" id="calculatrice">
            <p>calculatrice:</p>
            <?php
                $ch1 = 5;
                $ch2 = 5;
                echo '<p>' . $ch1 . ' ? ' . $ch2 . '</p><br><br>';

                $calc->addition($ch1, $ch2);
                $calc->soustraction($ch1, $ch2);
                $calc->multiplication($ch1, $ch2);
                $calc->division($ch1, $ch2);
                $calc->modulo($ch1, $ch2);
            ?>
        </div>

        <div class="" id="animaux">
            <p>animaux:</p>
            <?php
                $aigle = new Aigle('eagle', '12');
                echo 'nom: ' . $aigle->nom . ', age: ' . $aigle->age . '<br>';
                $aigle->voler();
                echo '<br>';

                $faucon = new Faucon('faucon', '15');
                echo 'nom: ' . $faucon->nom . ', age: ' . $faucon->age . '<br>';
                $faucon->respire();
                echo '<br>';

                $tortue = new Tortue('tortue', '10');
                echo 'nom: ' . $tortue->nom . ', age: ' . $tortue->age . '<br>';
                $tortue->ramper();
                echo '<br>';
            ?>
        </div>
    </main>

    <style>
        .hidden {
            display: none;
        }
    </style>
</body>

</html>