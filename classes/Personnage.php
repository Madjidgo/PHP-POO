
<?php


class Personnage

{
  private $_db; //PDO

  private $_id;

  private $_nom;

  private $_forcePerso;

  private $_degats;

  private $_niveau;

  private $_experience;




// public function __construct($db){
// $this->_db = $db;
// }

public function hydrate(array $donnees){
  
}

// Liste des getters
  public function id()

  {

    return $this->_id;

  }


    public function nom()

    {

      return $this->_nom;

    }

    public function degats()
    {

      return $this->_degats;

    }

      public function forcePerso()

      {

        return $this->_forcePerso;

      }
        public function niveau()

        {

          return $this->_niveau;

        }
          public function experience()

          {

            return $this->_experience;

          }
//
//   // les setters
//
    public function setId($id){
    $id = (int)$id;
    if($id>0){
      $this->_id = $id;
    }

  }


  public function setNom($nom){
    if(is_string($nom)){
      $this->_nom = $nom;
    }
  }


  public function setForcePerso($forcePerso){
  if(!is_int($id)){
    echo'vérifier vos infos';
  }
    else if($forcePerso >=1 AND $forcePerso<=100){
      $this->_forcePerso = $forcePerso;
    }
  }

  public function setDegats($degats){
    $degats = (int)$degats;
    if($degats >=0 && $degats <=100){
      $this->_degats= $degats;
    }
  }

  public function setNiveau($_niveau){
    $niveau = (int)$niveau;

    if($niveau >=1 && $niveau <=100){
      $this->_niveau = $niveau;
    }
  }

  public function setExperience($experience){
    $experience  = (int)$experience;
    if($experience >=1 && $experience <=100){
      $this->_exeperience = $experience;
    }
  }






}
