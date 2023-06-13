<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.Exemple:genererCheckbox($elements);//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Résultat</h2>

<?php 
//creer le tableau
$elements = array("Choix 1", "choix 2", "Choix 3");
// permet laffichage de la function créé
genererCheckbox($elements);

function genererCheckbox($elements){
    //on mets en place le foreach dans la function
    foreach($elements as $chek) { ?>
    <input type="checkbox" name="check" value="<?= $chek?>"><?= $chek?></input><br>
<?php }
}

?>