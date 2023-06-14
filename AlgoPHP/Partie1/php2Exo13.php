<h1>Exercice 13</h1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.</p>

<h2>Résultat</h2>

<?php


class Voiture {
// on créer les propriét"é
    private string $marque;
    private string $modele;
    private int $nbrPortes;
    private int $vitesseActuelle;
    private bool $estDemarree = false;


//ensuite il faut creer le constructor avec public function __construct
    public function __construct(string $marque, string $modele, int $nbrPortes){
        $this-> marque = $marque;
        $this-> modele = $modele;
        $this-> nbrPortes = $nbrPortes;
        $this-> vitesseActuelle = 0;
    }

//Les méthode demarrer, accelerer et stopper
    public function demarrer(){
        $this->estDemarree = true;
        return "Le véhicule " .$this->marque ." " .$this->modele ." démarre";
    }
// methode accelerer
    public function accelerer($vitesse){
        if($this->estDemarree === true){
            $this->vitesseActuelle = $vitesse + $this->vitesseActuelle;
            return "Le véhicule " .$this->marque ." " .$this->modele ." accélère de ".$vitesse." km/h ";
        } else { return "Le véhicule " .$this->marque ." " .$this->modele ."veut " ." accélèrer de ".$vitesse." km/h";
            "Pour accéléré, il faut démarrer le véhicule" .$this->marque;
        }
// methode stopper 
    }
    public function stopper(){
        echo "le véhicule".$this->marque ." " .$this->modele." est stoppé" ;
    }

//tout les getter et setter pour accelerer, model,  nbrPortes et vitesseActuelle
//get et set pour marque
    public function getMarque(){
        return $this->marque;
    }
    public function setMarque($marque){
        return $this-> marque = $marque;
    }

//get et set pour model
    public function getModele(){
        return $this-> modele;
    }
    public function setModele($modele){
        return $this-> modele = $modele;
    }

//get et set pour nbrPortes
    public function getNbrPortes(){
        return $this-> nbrPortes;
    }
    public function setNbrPortes($nbrPortes){
        return $this-> nbrPortes = $nbrPortes;
    }

// get et set pour vitesseActuelle
    public function getVitesseActuelle(){
        return $this-> vitesseActuelle;
    
    }
    public function setVitesseActuelle($vitesseActuelle){
        return $this-> vitesseActuelle = $vitesseActuelle;
    }

//mzethode créer en plus pour utiliser la $vitesse 
    public function afficherVitesse($vitesse){
        echo "La vitesse du véhicule " .$this->marque ." " .$this->modele ." est de " .$vitesse ." km/h" ."<br>";
    }
// permet de convertir en string 
    public function __toString(){
       return "Le véhicule ".$this->marque ." " .$this->modele ." possède " .$this->nbrPortes ." portes " .$this->vitesseActuelle ."et sa vitesse est de" .$vitesse ." km/h" ."<br>";
    }


    /**
     * Get the value of estDemarree
     */ 
    public function getEstDemarree()
    {
        return $this->estDemarree;
    }

    /**
     * Set the value of estDemarree
     *
     * @return  self
     */ 
    public function setEstDemarree($estDemarree)
    {
        $this->estDemarree = $estDemarree;

        return $this;
    }
}

$V1 = new Voiture("Peugeot", "408", 5);
$V2 = new Voiture("Citroën", "C4", 3);


// var_dump($V1->getEstDemarree());
// $V1->demarrer() ."<br>";
// echo $V1->accelerer(10) ."<br>";
// echo $V1->getVitesseActuelle() ."<br>";
// echo $V1->accelerer(30) ."<br>";
// echo $V1->getVitesseActuelle() ."<br>";
// $V1->getVitesseActuelle();
// var_dump($V1->getEstDemarree());
// echo $V2 ."<br>";

echo $V1->demarrer() ."<br>";
echo $V1->accelerer(50) ."<br>";

echo $V2->demarrer() ."<br>";
echo $V2->stopper() ."<br>";
echo $V2->accelerer(20) ."<br>";

echo $V1->afficherVitesse(50);
echo $V2->afficherVitesse(0);






?>