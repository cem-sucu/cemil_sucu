<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations: <br>
        nom, prénom et âge.<br>
        $p1 = new Personne("DUPONT","Michel", "1980-02-19");<br>
        $p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");</p>

<h2>Résultat</h2>

<?php 

Class Personne{
    // creer les clé privéé
   private string $_nom;
   private string $_prenom;
   private DateTime $_dateDeNaissance;
   
   //on instancie pour creer objet
   public function __construct($nom, $prenom,$dateDeNaissance){
    $this->_nom=$nom;
    $this->_prenom = $prenom;
    $this->_dateDeNaissance = new DateTime($dateDeNaissance);
   }

   public function __toString(){
       return $this->_prenom . " " . $this->_nom . " a " . $this->calcAge() . " ans";
   }

   public function getNom(){
    return $this->_nom;
   }

   public function getDatedeNaissance(){
    return $this->_dateDeNaissance;
    
   }

   //la fonction pour calculer l'age
   private function calcAge(){
        $date = new DateTime();
        $dateDeNaissance = $this->_dateDeNaissance ;
        $interval = $date->diff($dateDeNaissance);
        return $interval->format('%Y');
   }


   public function setNom(string $nom, string $_prenom, DateTime $_dateDeNaissance ){
     $this->_nom = $nom;
     $this->_prenom = $_prenom;
     $this->_dateDeNaissance = $_dateDeNaissance;
   }

}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");

echo $p1 ."<br>";
echo $p2;
// echo $p1->getNom() ." " .$p1->__toString() ." a " .$p1->getDatedeNaissance()->format('Y') ;


?>
