<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
$date = new DateTime('2018-05-21');
echo $date->format('Y-m-d <br>');

$dateDeNaissance = new DateTime("1985-01-17");
echo $dateDeNaissance->format('Y-m-d');


?>