<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/Le tableau passé en argument sera le suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>


<h2>Résultat</h2>

<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

afficherTableHTML($capitales);

function afficherTableHTML(array $tableau){
    asort($tableau);
    
    $key = "Pays";
    $value = "Capital";
    $lien = "Lien Wiki"

?>
    <table border="2" style="border:black 1px solid">
        <tr >
            <th >
            <?= $key ?>
            </th>
            <th >
                <?= $value ?>
            </th>
            <th >
                <?= $lien ?>
            </th>
        </tr>
        <?php foreach($tableau as $pays => $capitales){
?>
            <tr>
            <td><?= $pays?></td>
            <td><?= $capitales?></td>
            <td><a href="https://fr.wikipedia.org/wiki/<?= urlencode($pays) ?>">Lien</a></td>
        </tr>
<?php
    }
?>
    </table>
<?php
    
}


?>