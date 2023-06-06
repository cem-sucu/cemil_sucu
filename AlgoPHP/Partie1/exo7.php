<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:<br>Poussin: entre 6 et 7 ans<br>Pupille: entre 8 et 9 ans<br>Minime: entre 10 et 11 ans<br>Cadet: à partir de 12 ans<br>Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<h2>Résultat</h2>

<?php

$age = 1;

if($age <= 6 || $age >=7 ){
    echo "Poussin";
} elseif($age <=8 || $age >=9){
    echo "Pupille";
} elseif($age <=10 || $age >=11){
    echo "Minimime";
} elseif($age <=12){
    echo "Cadet";
} else{
    echo "La catégorie n'est pas géré";
}


?>