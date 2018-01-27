<?php

require_once('Personn.class.php');

class Medecin extends Personne {

  private static $medecin = array();
  private static $nbrMedecin = 0;

  private $specialite;
  private $disponibilite;

  public function __construct($id, $civilite, $nom, $prenom, $age, $specialite, $disponibilite) {
    parent::__construct($id, $civilite, $nom, $prenom, $age);
    $this->specialite = $specialite;
    $this->disponibilite = $disponibilite;

    self::$medecin[self::$nbrMedecin] = $this;
    self::$nbrMedecin++;
  }

  public function getSpecialite() {
    return $this->specialite;
  }

  public function getDisponibilite() {
    return $this->disponibilite;
  }

  public function setSpecialite($s) {
    return $this->specialite = $s;
  }

  public function setDisponibilite($d) {
    return $this->disponibilite = $d;
  }

  public static function countDisponible()
  {
    $i = 0;
    $count = 0;

    while($i<self::$nbrMedecin)
    {
      if((self::$medecin[$i]->getDisponibilite()) == 0) {
        $count++;
      }
      //echo $i;
      //echo "<br />";
      $i++;
    }

    return $count; //=3
  }

  public static function afficheNbMedecin()
  {
    $i = 0;

    while($i<self::$nbrMedecin)
    {
      $i++;
    }

    return $i; //=10
  }

  public function affiche() {
    parent::affiche();
    echo " est spécialiste en " . $this->getSpecialite() . ".<br>";
  }

}




?>
