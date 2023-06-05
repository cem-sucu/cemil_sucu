<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commmence aujourd'hui";
$longueur = strlen($phrase);
echo "La phrase $phrase contient $longueur caractères<br>";
echo "La phrase $phrase contient". strlen($phrase). "caractère<br>";