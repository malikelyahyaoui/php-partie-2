<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>

<h2>Resultat</h2>


<?php
function afficherInput($nomsInput) {
    // Commence le formulaire
    echo '<form method="post" action="">';
    
    // Parcourt le tableau de noms d'input
    foreach ($nomsInput as $nom) {
        // Affiche le label et le champ de texte
        echo '<label for="' . strtolower($nom) . '">' . htmlspecialchars($nom) . ':</label>';
        echo '<input type="text" id="' . strtolower($nom) . '" name="' . strtolower($nom) . '" required><br><br>';
    }
    

    
    // Termine le formulaire
    echo '</form>';
}

// Exemple d'utilisation
$nomsInput = ["Nom", "Prénom", "Ville"];
afficherInput($nomsInput);
?>
