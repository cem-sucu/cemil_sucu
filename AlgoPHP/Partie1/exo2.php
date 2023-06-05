<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php 
$str = "Notre formation Dl commence aujourd'hui";
echo str_word_count($str);
echo "La phrase $str contient". str_word_count($str). "caractères<br>"

?>