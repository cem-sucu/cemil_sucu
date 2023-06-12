<h1>Exercice 2</h1>

<p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultats</h2>

<table border="2" style="border:black 1px solid">
    <tr >
        <th >
            Pays
        </th>

        <th >
            Capital
        </th>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>

<?php


function afficherTableHTML(string $capitales){
    $capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

    echo "<table><tr><th>.$capitales</th></tr></table>";
    
}


?>