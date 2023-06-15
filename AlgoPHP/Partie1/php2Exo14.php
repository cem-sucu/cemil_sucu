<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle)
     ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture
      et qui a une propriété supplémentaire (autonomie).
      
      Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:
      Peugeot 408: $v1 = new Voiture("Peugeot","408");
      BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);
      
      Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: 
        
        echo $v1->getInfos()."<br/>";
        echo $ve1->getInfos()."<br/>";</p>

<h2>Résultat</h2>

<?php

// créé la classe Voiture
class Voiture {
    protected string $marque;
    protected string $modele;
    
//on créé le constructor
    public function __construct(string $marque, string $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }
//on créé les getter et setter pour marque
    public function getmarque(){
        return $this->marque = $marque;
    }
    public function setmarque($marque){
        return $this-> marque = $marque;
    }

// one créé les getter et setter pour modele
    public function getModele(){
        return $this->modele = $modele;
    }
    public function setModele($modele){
        return $this-> modele = $modele;
    }

//on créé la function getInfos qui permettra d'utiliser les infos por la marque et le modèle de Voiture
    public function getInfos(){
        return "La marque ".$this->marque ." et " ."le modèle" .$this->modele;
    }

    
}


// creer la class Voiture avec extends qui signifie s'étendre sur une autre classe comme ici
class VoitureElec extends Voiture{
    private int $autonomie;
    
// ici avec parent:: cela permet de récupérer les propriété parents de la classe mere
    public function __construct(string $marque, string $modele, int $autonomie){
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }
    // on créé le getter et setter de autonomie
    public function getAutonomie(){
        return $this-> autonomie = $autonomie;
    }
    public function setAutonomie($autonomie){
        return $this-> autonomie = $autonomie;
    }
    
//ici parent::getInfos() permet de récupérer la function getInfos dans la class parents
    public function getInfos(){
        return  parent::getInfos() ." l'autonomie est de ".$this->autonomie ;
    }

}

$v1 = new Voiture("Peugeot", 408);
echo $v1->getInfos()."<br/>";

$ve1 = new VoitureElec("BMW", "i3", 100);
echo $ve1->getInfos()."<br/>";


?>