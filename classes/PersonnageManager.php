<?php

class PersonnagesManager

{

  private $_db; // Instance de PDO.


  public function __construct($db)

  {

    $this->setDb($db);

  }


    /**
     * @param Personnage $perso
     */
    public function add(Personnage $perso)


  {

    // Préparation de la requête d'insertion.
    $q = $this->$_db->prepare('INSERT INTO Personnage(nom, forcePerso, degats, niveau, experience) VALUES (:nom, :forcePerso, :degats, :niveau, :experience');

    // Assignation des valeurs pour le nom, la force, les dégâts, l'expérience et le niveau du personnage.

    //  Associe une valeur à un nom correspondant ou à un point d'interrogation (comme paramètre fictif) dans la requête SQL qui a été utilisé pour préparer la requête.
    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);

    $q->execute();
    // Exécution de la requête.

  }


  public function delete(Personnage $perso)

  {
    $q->$this->$_db->prepare('DELETE FROM Personnage WHERE id = :id');
    // Exécute une requête de type DELETE.
    $q->bindValue(':id',$perso->id(), PDO::PARAM_INT);
    $q->execute();
  }


  public function get($id)

  {

    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
    $q->$this->$_db->prepare('SELECT * FROM Personne WHERE id = :id');
    $q->bindValue(':id',$perso->id(), PDO::PARAM_INT);
    
     $donnnes= $q->fetch(PDO::FETCH_ASSOC);
     return new Personnage($donnnes);

  }


  public function getList()

  {

    // Retourne la liste de tous les personnages.
    $q->$this->$_db->query('SELECT * FROM Personnage  ORDER BY nom');
      foreach ($donnees as $key => $value) {
        
       $personnage= $q->fetchAll(PDO::FETCH_ASSOC);
       return new Personnage($value);
      
      }
        
  }


  public function update(Personnage $perso)

  {
    $q->$this->$_db->prepare('UPDATE Personnage SET nom=:nom, forcePerso=:forcePerso, degats=:degats, niveau=:niveau, experience=:experience');

    // Prépare une requête de type UPDATE.

    // Assignation des valeurs à la requête.
    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);

    // Exécution de la requête.
       $q->execute();

  }


  public function setDb(PDO $db)

  {

    $this->_db = $db;

  }

}
