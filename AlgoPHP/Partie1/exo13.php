<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php




$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$sum = array_sum($notes);
$average = round($sum / count($notes), 2);
echo $average;

?>