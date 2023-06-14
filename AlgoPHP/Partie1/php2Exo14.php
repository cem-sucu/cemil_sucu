<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:Peugeot 408: $v1 = new Voiture("Peugeot","408");BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: echo $v1->getInfos()."<br/>";echo $ve1->getInfos()."<br/>";</p>

<h2>Résultat</h2>

<?php

// creer la classe Voiture
class Voiture {
    private string $voiture;
    private string $modele;
    
//on creer le constructor
    public function __construct(string $voiture, string $modele){
        $this->voiture = $voiture;
        $this->modele = $modele;
    }


}

// creer la class Voiture avec extends qui signifie s'étendre sur une autre classe comme ici
class Voiture extends VoitureElec{
    private int $autonomie;

    public function __construct(int $autonomie){
        $this->autonomie = $autonomie;
    }
}


$v1

?>