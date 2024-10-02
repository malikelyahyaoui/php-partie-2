<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<h2>Resultat</h2>

<?php
// Tableau contenant différentes valeurs
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];

// Boucle pour parcourir chaque élément du tableau et afficher ses informations
foreach ($tableauValeurs as $valeur) {
    var_dump($valeur);
    echo "<br>"; // Ajouter une ligne pour une meilleure lisibilité
}
?>
