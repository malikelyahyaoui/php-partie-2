<h1>Exercice 1</h1>

<p>Créer une fonction permettant de convertir en majuscule et en rouge un texte passé en argument</p>

<h2>Resultat</h2>
<style> 
.red{
    color: red;
}
</style>

<?php

$texte =" mon texte en paramètre";

echo convertirMajRouge($texte);
echo convertirMajColor($texte,'blue');

function convertirMajRouge($texte) {
    $result = mb_strtoupper($texte);
    $result= "<p class='red'>$result</p>";
    return $result;
    

}

function convertirMajRouge2($texte){
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

function convertirMajColor($texte,$color){
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";

}