<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations: <br>
        nom, prénom et âge.<br>
        $p1 = new Personne("DUPONT","Michel", "1980-02-19");<br>
        $p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");</p>

<h2>Résultat</h2>

<?php 

Class Personne{
   private string $_nom;
   private string $_prenom;
   private DateTime $_dateDeNaissance;
   
   public function __construct($nom, $prenom,$dateDeNaissance){
    $this->_nom=$nom;
    $this->_prenom = $prenom;
    $this->_dateDeNaissance = new DateTime($dateDeNaissance);
   }

   public function __toString(){
        return $this->_prenom;
   }

   public function getNom(){
    return $this->_nom;
   }
   public function setNom(string $nom){
     $this->_nom = $nom;
   }
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");

$p1->setNom("nouveauNom");
echo $p1;
echo $p2;

?>