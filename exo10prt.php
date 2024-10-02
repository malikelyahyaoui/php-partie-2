<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>


<h2> Resultat</h2>


<?php
// Fonction  (sexe)
function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nom) {
        echo '<label>';
        echo '<input type="radio" name="sexe" value="'.htmlspecialchars($nom).'">'.htmlspecialchars($nom);
        echo '</label><br>';
    }
}

// Fonction  (intitulé de formation)
function alimenterListeDeroulante($elements) {
    echo '<select name="formation">';
    foreach ($elements as $element) {
        echo '<option value="'.htmlspecialchars($element).'">'.htmlspecialchars($element).'</option>';
    }
    echo '</select>';
}




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

   

    <form action="traitement.php" method="post">
        <!-- Champs de texte pour les informations personnelles -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <!-- Boutons radio pour le sexe -->
        <label>Sexe :</label><br>
        <?php
        $sexeOptions = ["Monsieur", "Madame", "Mademoiselle"];
        afficherRadio($sexeOptions);
        ?>
        <br>

        <!-- Liste déroulante pour le choix de formation -->
        <label for="formation">Intitulé de formation :</label><br>
        <?php
        $formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
        alimenterListeDeroulante($formations);
        ?>
        <br><br>

        <!-- Bouton de soumission -->
        <button type="submit">Soumettre</button>
    </form>

</body>
</html>
