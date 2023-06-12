<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
$date = new DateTime('2018-05-21');


$dateDeNaissance = new DateTime("1985-01-17");



$interval = $date->diff($dateDeNaissance);
echo $interval->format(' Age de la personne : %Y ans, %M mois et %D jours');


?>