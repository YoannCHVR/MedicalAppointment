<?php

class RendezVous {

  private $medecin;
  private $patient;
  private $creneaux;

public function __construct($id, $medecin, $patient, $creneaux) {
  $this->id = $id;
  $this->medecin = $medecin;
  $this->patient = $patient;
  $this->creneaux = $creneaux;
}

public function getId() {
  return $this->id;
}
    
public function getMedecin() {
  return $this->medecin;
}

public function getPatient() {
  return $this->patient;
}

public function getCreneaux() {
  return $this->creneaux;
}
    
public function setId($i) {
  return $this->id = $i;
}

public function setMedecin($m) {
  return $this->medecin = $m;
}

public function setPatient($p) {
  return $this->patient = $p;
}

public function setCreneaux($c) {
  return $this->creneaux = $c;
}

public function affiche() {
  echo "<br> Le rendez-vous de " . $this->getPatient()->getCivilite() . " " . $this->getPatient()->getNom() . " aura lieu avec le médecin " . $this->getMedecin()->getNom() . " au créneau du " . $this->getCreneaux() . ".<br>";
}


}

?>
