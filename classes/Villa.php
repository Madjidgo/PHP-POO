<?php
/**
 *
 */
class Villa{

  private $_city;
  private $_departement;

  public function  __construct($city,$departement){

    if(!is_string($city))
    {
      trigger_error('Verifier vos infos' ,E_USER_WARNING);
      return;
    }
    else{
      $this->_city= $city;
    }

    if(!is_string($departement))
    {
      trigger_error('Verifier vos infos' ,E_USER_WARNING);
      return;
    }
    else{
      $this->_departement= $departement;
    }
}
    public function city(){
      return $this->_city;
    }

    public function departement(){
      return $this->_departemet;
    }

    public function show(){
      echo 'la Villa est située la de '.$this->_city. 'du département'.$this->_departement.'<br>';
    }
  }
