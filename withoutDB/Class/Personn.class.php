<?php

class Personne {

  private $id;
  private $civilite;
  private $nom;
  private $prenom;
  private $age;

  public function __construct($id, $civilite, $nom, $prenom, $age) {
        $this->id = $id;
        $this->civilite = $civilite;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
	}

  public function getId() {
        return $this->id;
  }

  public function getCivilite() {
        return $this->civilite;
  }

  public function getNom() {
        return $this->nom;
  }

  public function getPrenom() {
        return $this->prenom;
  }

  public function getAge() {
        return $this->age;
  }

  public function setId($i) {
        return $this->id = $i;
  }

  public function setCivilite($c) {
        return $this->civilite = $c;
  }

  public function setNom($n) {
        return $this->nom = $n;
  }

  public function setPrenom($p) {
        return $this->nom = $p;
  }

  public function setAge($a) {
        return $this->nom = $a;
  }

  public function affiche() {
    echo "<br>" . $this->getCivilite() . ". " . $this->getNom() . ", " . $this->getPrenom() . ", " . $this->getAge(). " ans";
  }

}




?>
