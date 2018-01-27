<?php

require_once('Personn.class.php');

class Patient extends Personne {

  private $probleme;

  public function __construct($id, $civilite, $nom, $prenom, $age, $probleme, $creneaux) {
    parent::__construct($id, $civilite, $nom, $prenom, $age);
    $this->probleme = $probleme;
    $this->creneaux = $creneaux;
  }

  public function getProbleme() {
    return $this->probleme;
  }

  public function getCreneaux() {
    return $this->creneaux;
  }

  public function setProbleme($pr) {
    return $this->probleme = $pr;
  }

  public function setCreneaux($c) {
    return $this->creneaux = $c;
  }

  public function affiche() {
    parent::affiche();
    echo " à un problème au " . $this->getProbleme() . " et souhaite prendre rendez-vous le " . $this->getCreneaux() . ".<br>";
  }

}




?>
