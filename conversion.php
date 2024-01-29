<?php

function convertirNombreEnChaine($nombre) {
    $chiffresEnLettres = [
        0 => 'zéro', 1 => 'un', 2 => 'deux', 3 => 'trois', 4 => 'quatre', 5 => 'cinq',
        6 => 'six', 7 => 'sept', 8 => 'huit', 9 => 'neuf', 10 => 'dix',
        11 => 'onze', 12 => 'douze', 13 => 'treize', 14 => 'quatorze', 15 => 'quinze',
        16 => 'seize', 17 => 'dix-sept', 18 => 'dix-huit', 19 => 'dix-neuf',
        20 => 'vingt', 30 => 'trente', 40 => 'quarante', 50 => 'cinquante',
        60 => 'soixante', 70 => 'soixante-dix', 80 => 'quatre-vingts', 90 => 'quatre-vingt-dix'
    ];

    if ($nombre <= 99) {
        if (isset($chiffresEnLettres[$nombre])) {
            return $chiffresEnLettres[$nombre];
        } else {
            $dizaine = $nombre - $nombre % 10;
            $unite = $nombre % 10;
            return $chiffresEnLettres[$dizaine] . '-' . $chiffresEnLettres[$unite];
        }
    } else {
        return "Le nombre doit être inférieur ou égal à 99.";
    }
}

// Exemple d'utilisation de la fonction
$nombre = 64;
echo convertirNombreEnChaine($nombre); // Affiche "cinquante-sept"
?>
