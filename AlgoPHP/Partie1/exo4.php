<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php 

$str = "Engage le jeu que je le gagne";
function palindrome($str){
    // echo $str . "<br>";
    //on enlève les majuscule avec methode native a php 
    $new_str = str_replace(" ","",$str);
    // echo $new_str . "<br>";
    // on elnve les majuscule
    $new_str = strtolower($new_str);
    // echo $new_str . "<br>";
    // on en
    $revStr = strrev($new_str);
    // echo $revStr;
    
    if ($new_str == $revStr){
        echo "palindrome";
    } else {
        echo "pas palindrome";
    }
    echo $new_str;
}

 palindrome($str);

?>