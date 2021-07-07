<?php
// 2) Créez une classe Calculatrice qui pourra faire, pour deux chiffres qui lui seront passées en paramètres de ses méthodes :
// 	Une addition
// 	Une soustraction
// 	Une multiplication
// 	Une division
// 	Un modulo
// En revanche je dois pouvoir me servir de ses méthodes sans instancier la classe Calculatrice. Trouvez comment.

//CLASSE ANONYME
$calc = new class {
    public function addition($chiffre1, $chiffre2) {
        echo $chiffre1 . ' + ' . $chiffre2 . ' = ' . ($chiffre1 + $chiffre2) . '<br>';
        return $chiffre1 + $chiffre2;
    }
    public function soustraction($chiffre1, $chiffre2) {
        echo $chiffre1 . ' - ' . $chiffre2 . ' = ' . ($chiffre1 - $chiffre2) . '<br>';
        return $chiffre1 - $chiffre2;
    }
    public function multiplication($chiffre1, $chiffre2) {
        echo $chiffre1 . ' * ' . $chiffre2 . ' = ' . ($chiffre1 * $chiffre2) . '<br>';
        return $chiffre1 * $chiffre2;
    }
    public function division($chiffre1, $chiffre2) {
        echo $chiffre1 . ' / ' . $chiffre2 . ' = ' . ($chiffre1 / $chiffre2) . '<br>';
        return $chiffre1 / $chiffre2;
    }
    public function modulo($chiffre1, $chiffre2) {
        echo $chiffre1 . ' % ' . $chiffre2 . ' = ' . ($chiffre1 % $chiffre2) . '<br>';
        return $chiffre1 % $chiffre2;
    }
};

//statics
class Calculatrice2 {
    public static function addition($chiffre1, $chiffre2) {
        echo $chiffre1 . ' + ' . $chiffre2 . ' = ' . ($chiffre1 + $chiffre2) . '<br>';
        return $chiffre1 + $chiffre2;
    }
    public static function soustraction($chiffre1, $chiffre2) {
        echo $chiffre1 . ' - ' . $chiffre2 . ' = ' . ($chiffre1 - $chiffre2) . '<br>';
        return $chiffre1 - $chiffre2;
    }
    public static function multiplication($chiffre1, $chiffre2) {
        echo $chiffre1 . ' * ' . $chiffre2 . ' = ' . ($chiffre1 * $chiffre2) . '<br>';
        return $chiffre1 * $chiffre2;
    }
    public static function division($chiffre1, $chiffre2) {
        echo $chiffre1 . ' / ' . $chiffre2 . ' = ' . ($chiffre1 / $chiffre2) . '<br>';
        return $chiffre1 / $chiffre2;
    }
    public static function modulo($chiffre1, $chiffre2) {
        echo $chiffre1 . ' % ' . $chiffre2 . ' = ' . ($chiffre1 % $chiffre2) . '<br>';
        return $chiffre1 % $chiffre2;
    }
};