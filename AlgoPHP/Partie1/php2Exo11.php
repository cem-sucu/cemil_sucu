<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.Exemple:formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>

<?php

function formaterDateFr($date) {
    $dateTime = new DateTime($date);
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $formatter->setPattern('EEEE d MMMM Y');
    $dateFormatee = $formatter->format($dateTime);
    echo $dateFormatee;
}

$date = "2018-02-23";
formaterDateFr($date);


?>