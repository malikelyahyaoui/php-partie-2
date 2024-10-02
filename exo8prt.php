<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);</p>

<h2>Resultat</h2>


<?php
function repeterImage($url, $nbFois) {
    for ($i = 0; $i < $nbFois; $i++) {
        echo '<img src="'.htmlspecialchars($url).'" alt="Image '.$i.'"><br>';
    }
}

// Exemple d'utilisation
$url = "http://my.mobirise.com/data/userpic/764.jpg";
repeterImage($url, 4);
?>

