<?php
class Formulaire{
  private $_form;


  public function __construct($action,$method){


    $this->_form .= '<form action="'.$action.'" method="'.$method.'">';

  }
  public function setH($h1){
     $this->_form .= '<h1>' .$h1. '</h1>';
   }

  public function setTexte($titre,$name,$id,$label)
  {
    $this->_form.='<fieldset><legend> '.$titre. '</legend><input type="text" name="'.$name.'" id="'.$id.'"<label for="'.$label.'">"Veuillez saisir du texte" </label></fieldset>';
  }

  public function setSubmit($value){
    $this->_form .='<input type="submit" value="'.$value.'"></form>';
  }

public function getForm(){
  return $this->_form;
}
// class Formulaire{
//
//   private $_form;
//
//
//   public function __construct($action,$method){
//       // ajouter dans $_form le code html debut de formulaire
//       $this->_form .= '<form action="'. $action . '" method="' .$method. '" > ' . "\n";
//   }
//
//   public function setH($h1){
//     $this->_form .= '<h1>'.$h1.'</h1>';
//   }
//
//   public function setTexte($label,$name,$fieldset)
//   {
//     $this->_form .= '<fieldset ><legend>' . $fieldset . '</legend><label> ' .$label . '</label><input type="text" name="' .$name . '" /></fieldset>'. "\n";
//   }
//
//   public function setSubmit($value)
//   {
//     $this->_form .= '<br/><input type="submit" value="' .$value . '" /></form>';
//   }
// // getters
//
//   public function form(){
//     return $this->_form;
//   }
}
