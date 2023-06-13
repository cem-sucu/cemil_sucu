<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.Exemple:$elements = array("Monsieur","Madame","Mademoiselle");alimenterListeDeroulante($elements);</p>

<h2>Résultat</h2>

<?php
//le tableau
$elements = array("Madame", "Monsieur", "Mademoiselle");
alimenterListeDeroulante($elements);
//on créé la fubnction
function alimenterListeDeroulante($elements){ ?>
    <select>
        <option selected="selected">Sélectionner</option>
        <?php
        foreach($elements as $value){ ?>
            <option value="<?= $value?>"><?=$value?></option>
            <?php
        } ?>
    </select>
    <?php
}
?>