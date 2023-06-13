<h1>Exercice 9</h1>

<p>Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").Exemple:afficherRadio($nomsRadio);</p>

<h2>Résultat</h2>

<?php

$nomsRadio = array("Masculin", "Feminin", "Autre");


function afficherRadio($nomsRadio){
    foreach($nomsRadio as $genre){?>
    <input type="radio" name="genre" value="<?=$genre?> ">
        <?=$genre?><br>
        <?php
    }
}
afficherRadio($nomsRadio);


?>