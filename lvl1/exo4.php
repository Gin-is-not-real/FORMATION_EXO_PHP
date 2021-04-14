<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour !</h1>
    <p>Vous trouverez après ce paragraphe une div, je veux que vous affichiez dans cette div un paragraphe (balise p) avec le texte suivant dedans : Le PHP permet de générer du HTML</p>
    <div>
    <?php
    //Code à faire ici
    echo "Le PHP permet de générer du HTML";
    //Ici je dois utiliser la balise de fermeture de PHP car j'alterne entre HTML et PHP
    ?>
    </div>
</body>
</html>
