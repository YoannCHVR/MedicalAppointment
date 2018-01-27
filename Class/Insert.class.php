<?php

class Insertion
{
    private $tableName= 'medecin';
    private $dbCon;

  	function __construct($dbCon)
  	{
  		$this->dbCon =$dbCon;
  	}

    function insert($civilite,$nom,$prenom,$age,$specialite,$disponibilite)
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


        //foreach ($userData as $key => $value)
      //  {
          //$civilite = $value[1];
          //$nom = $value[2];
          //$prenom = $value[3];
          //$age = $value[4];
          //$specialite = $value[5];
          //$disponibilite = $value[6];

          $query->execute();

      //  }
    }
}

/*$sql="INSERT INTO medecin
  (`id`, `civilite`, `nom`, `prenom`, `age`, `specialite`, `disponibilite`)
  VALUES
  (:id,:civilite,:nom,:prenom,:age,:specialite,:disponibilite)";

  $query = $dbc->prepare($sql);

  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->bindParam(':civilite',$civilite,PDO::PARAM_STR);
  $query->bindParam(':nom',$nom,PDO::PARAM_STR);
  $query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
  $query->bindParam(':age',$age,PDO::PARAM_STR);
  $query->bindParam(':specialite',$specialite,PDO::PARAM_STR);
  $query->bindParam(':disponibilite',$disponibilite,PDO::PARAM_STR);

  $userData = array(
    array($id,"Mr.", "POISSON", "Guy", "46", "Ophtalmologue", 1),
  );

  foreach ($userData as $key => $value)
  {
    $id = $value[0];
    $civilite = $value[1];
    $nom = $value[2];
    $prenom = $value[3];
    $age = $value[3];
    $specialite = $value[3];
    $disponibilite = $value[3];

    $query->execute();

  }
*/
  ?>
