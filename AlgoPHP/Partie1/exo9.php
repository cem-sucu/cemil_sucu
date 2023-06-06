<h1>Exercice 9</h1>

<p>
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).
</p>

<h2>Résultat</h2>

<?php

$nomF = "Manon";
$sexeF = "Femme";
$ageF = 20;
$nomH = "Pierre";
$sexeH = "Homme";
$ageH = 5;

if($sexeF === "Femme" && $ageF <=18 && $ageF>=35 || $sexeH === "Homme" && $ageH <20){
    echo "$nomF est imposable <br>";
} 
    echo "$nomH Vous n'est pas imposable";


?>