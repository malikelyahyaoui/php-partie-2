<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");</p>

<h2>Resultat</h2>

<?php
function formaterDateFr($date) {
    // Tableau des noms des mois en français
    $mois = [
        1 => "janvier", 
        2 => "février", 
        3 => "mars", 
        4 => "avril", 
        5 => "mai", 
        6 => "juin", 
        7 => "juillet", 
        8 => "août", 
        9 => "septembre", 
        10 => "octobre", 
        11 => "novembre", 
        12 => "décembre"
    ];

    // Transformer la chaîne de caractères en un objet DateTime
    $dateObj = DateTime::createFromFormat('Y-m-d', $date);
    if (!$dateObj) {
        return "Date invalide"; // Si la date n'est pas correcte
    }

    // Extraire les parties de la date (jour, mois, année)
    $jour = $dateObj->format('d');
    $moisNumero = (int)$dateObj->format('m');
    $annee = $dateObj->format('Y');

    // Formater la date en français
    $dateEnFrancais = $jour . ' ' . $mois[$moisNumero] . ' ' . $annee;

    return $dateEnFrancais;
}

// Exemple d'utilisation
echo formaterDateFr("2018-02-23");
?>
