<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
$date = new DateTime();


$dateDeNaissance = new DateTime("1994-07-07");



$interval = $date->diff($dateDeNaissance);
echo $interval->format(' Age de la personne : %Y ans, %M mois et %D jours');


?>