<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

</tbody>
</table>
<?php

$capitales = [
    "France" => "paris",
    "Allemagne" =>"berlin",
    "USA" => "washington",
    "Italie" =>"rome"
];


foreach($capitales as $pays => $capitale){
    echo "$pays a pour capitale : $capitale<br>";
}


echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);
    $result= "<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>

    <tbody>";

    foreach($capitales as $pays=> $capitale){
        $result .= "<tr>
                           <td>".mb_strtoupper($pays)."</td>
                           <td>".ucfirst($capitale)."</td>
                    </tr>";
    }

    $result.="</tbody></table>";
    return $result;


}