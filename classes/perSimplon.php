<?php
class perSimplon{
  private $_nom,
          $_prenom,
          $_adresse;

  public function __construct($nom,$prenom,$adresse){

    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setAdresse($adresse);
  }
// getters
  public function getNom(){
    return $this->_nom;
  }

  public function getPrenom(){
    return $this->_prenom;
  }

  public function getAdresse(){
    return $this->_adresse;
  }

// setterrs

public function setNom($nom){
  $this->_nom=$nom;
}

public function setPrenom($prenom){
  $this->_prenom=$prenom;
}

public function setAdresse($adresse){
  $this->_adresse=$adresse;
}

function __destruct() {
  echo "Destruction de " . $this->_nom . "\n" .
                                  $this->_prenom . "\n" .
                                  $this->_adresse . "\n";

    }


public function getPersonne(){
  echo'nom : ' .$this->_nom. ' le Prenom : '.$this->_prenom. 'adresse :'.$this->_adresse.'<br>';
}
}
 ?>
