<h1>Exercice 2</h1>

<p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultats</h2>


<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

afficherTableHTML($capitales);

function afficherTableHTML(array $tableau){

    // mauvaise pratique
    //echo "<table><tr><th>.$capitales</th></tr></table>";
    // fin mauvaise pratique
    $key = "Pays";
    $value = "Capital";

?>
    <table border="2" style="border:black 1px solid">
        <tr >
            <th >
            <?= $key ?>
            </th>
            <th >
                <?= $value ?>
            </th>
        </tr>
        <?php foreach($tableau as $pays => $capitales){
?>
            <tr>
            <td><?= $pays?></td>
            <td><?= $capitales?></td>
        </tr>
<?php
    }
?>
    </table>
<?php
    
}


?>