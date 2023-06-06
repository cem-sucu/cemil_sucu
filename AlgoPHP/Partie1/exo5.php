<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php 

$valeur = 100;

$conversionFranc = ($valeur / 6.55);
$conversionEuro = ($valeur * 6.55);
echo "100 euro en franc égale à $conversionFranc<br>";
echo "100 franc en euro égale à $conversionEuro";

?>