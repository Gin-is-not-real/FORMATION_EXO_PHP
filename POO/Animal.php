<?php 
// 3) Créez une classe Animal qui ne contiendra qu'une méthode respire() qui fera un simple "echo".
// Ensuite créez une classe Oiseau et une classe Reptile qui hériteront de la classe Animal.
// Ces dernières auront comme attribut un nom et un âge et chacune aura une méthode spécifique qui fera un "echo" (comme voler() pour les oiseaux ou avoirDesEcailles() pour les reptiles). 
// Créez ensuite une classe Aigle et Faucon, ainsi qu'une classe Tortue et Crocodile. Ces classes hériteront respectivement d'Oiseau et de Reptile. 
// Vous instancierez un nouvel Aigle, Faucon, Tortue et Crocodile et ferez en sorte que leur constructeur appelle le constructeur de leur parent afin d'y préciser leur nom et âge. Vérifiez ensuite les méthodes de vos instances.

class Animal {
    public function __construct() {}
    public function respire() {
        echo 'Je respire !' . '<br>';
    }
}

class Oiseau extends Animal {
    public $nom;
    public $age;
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }
    public function voler() {
        echo 'Je vole !' . '<br>';
    }
}

class Aigle extends Oiseau {
}

class Faucon extends Oiseau {
}

class Reptile extends Animal {
    public $nom;
    public $age;
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }
    public function ramper() {
        echo 'Je rampe !' . '<br>';
    }
}

class Tortue extends Reptile {
}

class Crocodile extends Reptile {
}