<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> List of Voiture </title>
    </head>
   
    <body>
      <ul>
        <?php
          class Voiture {
   
            private $marque;
            private $couleur;
            private $immatriculation;
      
            // a getter
            public function getMarque() {
              return $this->marque;  
            }
     
            // a setter 
            public function setMarque($marque2) {
              $this->marque = $marque2;
            }

            public function getCouleur() {
              return $this->couleur;
            }

            public function setCouleur($couleur2){
              $this->couleur = $couleur2;
            }

            public function getImmatriculation() {
              return $this->immatriculation;
            }

            public function setImmatriculation($immatriculation2){
              if (strlen($immatriculation2==8)){
                $this->immatriculation = $immatriculation2;
              }
            }


      
            // a constructor
            public function __construct($m, $c, $i)  {
              $this->marque = $m;
              $this->couleur = $c;
              $this->immatriculation = $i;
            } 
           
            // a display method
            public function afficher() {
              // À compléter dans le prochain exercice
            }
          }
        ?>
      </ul>
    </body>
</html> 