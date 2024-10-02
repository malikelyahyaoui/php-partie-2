<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>


<h2>Resultat</h2>
<?php
function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nom) {
        echo '<label>';
        echo '<input type="radio" name="civilite" value="'.htmlspecialchars($nom).'">'.htmlspecialchars($nom);
        echo '</label><br>';
    }
}

// Exemple d'utilisation
$nomsRadio = ["Monsieur", "Madame", "Autre"];
afficherRadio($nomsRadio);
?>
