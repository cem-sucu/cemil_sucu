<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:
    Affichage(pour la table de 8):Table de 8:1 x 8 = 82 x 8 = 163 x 8 = 24 ...
</p>

<h2>Résultat</h2>


<p> Table de 8 :</p>

<?php



$arr = array(1,2,3,4,5,6,7,8,9);
foreach ($arr as $value){
    echo "<p>$value*8 =".($value *8)."</p>";
}



?>