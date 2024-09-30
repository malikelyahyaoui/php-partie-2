<h1>Exercice 4 partie 2</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>

<h2>RESULTAT</h2>



<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    //Ordre
    asort($capitales);
    
    $result = "<table border=1>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
            <th>Lien Wiki</th>
        </tr>
    </thead>
    <tbody>";

    foreach ($capitales as $pays => $capitale) {
        // Lien wikipedia
        $url = "https://fr.wikipedia.org/wiki/" . urlencode($capitale);
        
        $result .= "<tr>
                        <td>" . mb_strtoupper($pays) . "</td>
                        <td>" . ucfirst($capitale) . "</td>
                        <td><a href='$url' target='_blank'>Lien</a></td>
                    </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
}
?>
