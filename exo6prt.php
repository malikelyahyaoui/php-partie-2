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
