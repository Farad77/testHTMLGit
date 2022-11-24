<?php
class Vehicule{

   protected $couleur;
   private $modele;
   private $puissance;

   function getCouleur(){
    return $this->couleur;
   }
   function setCouleur($valeur){
        $this->couleur=$valeur;
   }

   function __construct($valeurCouleur,$valeurModele,$valeurPuissance)
   {
    $this->couleur=$valeurCouleur;
    $this->modele=$valeurModele;
    $this->puissance=$valeurPuissance;
   }

   function __toString()
   {
     return $this->modele." (".$this->couleur.") :".$this->puissance." CHOVO";
   }


   /**
    * Get the value of modele
    */ 
   public function getModele()
   {
      return $this->modele;
   }

   /**
    * Set the value of modele
    *
    * @return  self
    */ 
   public function setModele($modele)
   {
      $this->modele = $modele;

      return $this;
   }

   /**
    * Get the value of puissance
    */ 
   public function getPuissance()
   {
      return $this->puissance;
   }

   /**
    * Set the value of puissance
    *
    * @return  self
    */ 
   public function setPuissance($puissance)
   {
      $this->puissance = $puissance;

      return $this;
   }
}

?>