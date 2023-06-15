<h1>Exercice 15</h1>

<p>En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

    $email = "elan@elan-formation.fr";
    $mail = "contact@elan";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "l'adresse $email est une adresse valide"."<br>";
    } else {
        echo "l'adresse $email  non valide"."<br>";
    }

    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo "l'adresse $mail est une adresse valide"."<br>";
    } else {
        echo "l'adresse $mail  non valide"."<br>";
    }









?>