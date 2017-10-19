
<!DOCTYPE html>


<html>
  <head>
    <meta charset="utf-8">
    <title>Cours PHP</title>
  </head>
  <body>

    <?php

// autoload
function chargerClasse($classe)

{

  require 'classes/'.$classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}

spl_autoload_register('chargerClasse');

 // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

 // exercice1
// $city = new Ville;
// echo $city->getDescription().'<br>';
//
// // exercice2
// $country = new Villa('X','Y');
// $country->show();
//
// // exerce3
// $simplon = new perSimplon('X','Y','Z');
// $simplon ->getPersonne();

// tableaux
// $smath = new tableaux();
// foreach ($smath as $key => $value) {
//   print $key.'contient la valeur'.$value.'<br>';


// exercice4 avecMathieu
// $form = new Formulaire("index.php","post");
// $form->setH('Formuaire PHP en POO');
// $form->setTexte('nom', 'nom', "nom du l utisateur");
// $form->setTexte('prenom', 'prenom', "prenom du l utisateur");
// $form->setTexte('age', 'age', "age de l utisateur");
// $form->setSubmit('enregistrer');

// madexercice4 solo
// $form= new Formulaire("index.php","post");
// $form->setH("Formulaire POO");
// $form->setTexte('Formulaire','radio','radio','radio');
//
// $form->setSubmit('Envoyer');
// echo $form->getForm();


// exercice Personnage

 try {
     $db = new PDO('mysql:host=localhost;dbname=PersonnageManager;charset=utf8', 'phpmyadmin', 'maD24101975');
 }

 catch (Exception $e)

 {

     die('Erreur : ' . $e->getMessage());

 }

 $request= $db->query('SELECT * FROM Personnage');
  $perso= $request->fetchAll(PDO::FETCH_ASSOC);

 foreach ($perso as $key => $value)
  {
   # code...


  $personage = new Personnage($value);
// var_dump($personage);


 echo $personage->nom(), ' a ', $personage->forcePerso(), ' de force, ',$personage->degats(), ' de dégâts, ', $personage->experience(), ' d\'expérience et est au niveau ', $personage->niveau().'<br>';

}



?>
  </body>
</html>
