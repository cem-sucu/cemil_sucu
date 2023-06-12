<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);</p>

<h2>Résultat</h2>


<?php 

$text = "Mon texte en paramètre";
function convertirMajRouge(string $text){
   echo "<p style='color:red'>".mb_strtoupper($text)."</p>"  ;
}
  
convertirMajRouge($text);

?>