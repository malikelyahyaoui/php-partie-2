<h1> Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Resultat</h2>


<?php



function genererCheckbox($elements) {
    foreach ($elements as $label => $isChecked) {
        $checkedAttribute = $isChecked ? 'checked' : '';
        echo '<label>';
        echo '<input type="checkbox" name="'.htmlspecialchars($label).'" '.$checkedAttribute.'>';
        echo htmlspecialchars($label);
        echo '</label><br>';
    }
}

// utilisation
$elements = [
    "Option 1" => true,
    "Option 2" => false,
    "Option 3" => true
];

genererCheckbox($elements);
?>
