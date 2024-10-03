<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.</p>

<h2>Resultat</h2>



<?php
function alimenterListeDeroulante($elements) {
    echo '<select>';
    foreach ($elements as $element) {
        echo '<option value="'.htmlspecialchars($element).'">'.htmlspecialchars($element).'</option>';
    }
    echo '</select>';
}

// Exemple d'utilisation
$elements = ["Monsieur", "Madame", "Mademoiselle"];
alimenterListeDeroulante($elements);
?>
