<?php
/**
 *
 */
class Ville
{
  private $_ville = 'X';
  private $_dep = 'Y';

public function getDescription()
  {
    # code...
    return 'La Ville de '. $this->_ville . ' est dans le departement ' . $this->_dep;

  }

}

 ?>
