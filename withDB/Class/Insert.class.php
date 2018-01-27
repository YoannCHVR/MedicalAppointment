<?php

class Insertion
{
    private $tableName= 'medecin';
    private $dbCon;

  	function __construct($dbCon)
  	{
  		$this->dbCon =$dbCon;
  	}

    function insert()
    {
        //The insert query.
        $sql="INSERT INTO {$this->tableName}
        (`civilite`, `nom`, `prenom`, `age`, `specialite`, `disponibilite`)
        VALUES
        (:civilite,:nom,:prenom,:age,:specialite,:disponibilite)";

        //Bind and filter.
        $query= $this->dbCon->prepare($sql);

        $query->bindParam(':civilite',$civilite,PDO::PARAM_STR);
        $query->bindParam(':nom',$nom,PDO::PARAM_STR);
        $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
        $query->bindParam(':age',$age,PDO::PARAM_STR);
        $query->bindParam(':specialite',$specialite,PDO::PARAM_STR);
        $query->bindParam(':disponibilite',$disponibilite,PDO::PARAM_STR);

        $medecinData = array(
            array("Mr.", "POISSON", "Guy", "46", "Ophtalmologue", 1),
            array("Mr", "NERISSON", "Louis", "35", "Dentiste", 1),
            array("Mr", "TIREMOILOSS", "Josiane", "55", "Dermatologue", 1),
            array("Mme", "BOITEUX", "Céline", "57", "Kinésithérapeute", 1),
            array("Mr", "BIZAR", "Françoise", "30", "Rhumatologue", 1),
            array("Mme", "BARGEOT", "Roselyne", "31", "Orthophoniste", 1),
            array("Mme", "MOT-FOTIF", "Annabelle", "46", "Ophtalmologue", 1),
            array("Mr", "CONTENT", "Patrice", "40", "Rhumatologue", 1),
            array("Mr", "MOROSE", "Didier", "38", "Orthophoniste", 1),
            array("Mme", "BEBEOUIN-OUIN", "Annah", "54", "Dentiste", 1),
          );

        $test = 0;

        $query1= $this->dbCon->prepare("SELECT * FROM medecin ORDER BY id DESC LIMIT 1");
        $query1->execute();

        $result = $query1->fetchAll();
        var_dump($result);

        $lastName = $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);

        echo $result[0]['nom'];

        if ($lastName != $result[0]['nom'])
            foreach ($medecinData as $key => $value)
            {
              $civilite = $value[0];
              $nom = $value[1];
              $prenom = $value[2];
              $age = $value[3];
              $specialite = $value[4];
              $disponibilite = $value[5];

              $query->execute();

              $lastInsertId= $this->dbCon->lastInsertId();

              //if($lastInsertId>0)
                //	echo $lastInsertId;
                //else
                //	echo 'echec';

              $test++;
            }                    //echo $test;
    }
}

?>
