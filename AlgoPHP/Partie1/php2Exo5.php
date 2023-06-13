<h1>Exercice 5</h1>

<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.Exemple:$nomsInput = array("Nom","Prénom","Ville");afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php
$nomsInput = array("Nom", "Prénom", "Ville");
afficherInput($nomsInput);

function afficherInput(array $nomsInput) {
    ?>
    <form>
        <?php foreach ($nomsInput as $nom) { 
            ?>
            <label>
                <?= $nom  ?>
            </label><br>
            <input type="text" name="<?= $nom ?>"><br>
        <?php } ?>
        <input type="submit" value="Envoyer">
    </form>
    <?php
}
?>