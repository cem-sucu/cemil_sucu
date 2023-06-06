<h1>Exercice 12</h1>

<p>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2>Résultat</h2>

<?php 



    $francais = "Pierre";
    $anglais = "Jon";
    $espagnol = "Iniesta";

if("Pierre" === $francais){
    echo "Salut Pierre";
} else if("Pierre" === $anglais){
    echo "Hello Pierre";
} else if("Pierre" === $espagnol){
    echo "Hola Pierre";
}

if("Jon" === $anglais){
    echo "<br>Hello Jon";
} else if("Jon" === $francais){
    echo "Bonjour Pierre";
} else if("Jon" === $espagnol){
    echo "Hola Jon";
}

if("Iniesta" === $espagnol){
    echo "<br>Hola Iniesta";
} else if("Jon" === $francais){
    echo "Bonjour Iniesta";
} else if("Jon" === $espagnol){
    echo "Hello Iniesta";
}






?>