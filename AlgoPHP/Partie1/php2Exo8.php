<h1>Exercice 8</h1>

<p>Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpgCréer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.Exemple:repeterImage($url,4);</p>

<h2>Résultat</h2>

<?php
$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nbreDeFois = 4;

function repeterImage($url, $nbreDeFois){
    for($i =0; $i < $nbreDeFois; $i++){?>
    <img src="<?=$url?>" alt="image">
    <?php
    }
    
}

repeterImage($url, $nbreDeFois);



?>