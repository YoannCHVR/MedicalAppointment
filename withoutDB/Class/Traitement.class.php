<?php

if(isset($_POST["getRdv"]))
{

      echo "<script> document.getElementById('formulaire').style.display = 'None'; </script>";

      $civilite = $_POST["civilite"];
      $nom = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $date = $_POST["date"];
      $probleme = $_POST["probleme"];
      $creneaux = $_POST["creneaux"];

      $actuallyDate = date("Y"); //get l'année actuelle

      $patient = new Patient(0, $civilite, $nom, $prenom, $actuallyDate - $date, $probleme, $creneaux);
      $patient -> affiche();

      $creneaux = $patient->getCreneaux();

      $probleme = $patient->getProbleme();

//traitement et recherche d'un médecin spécialistes

      if($probleme == "Yeux") {
          $dispoMedecin = $medecin0->getDisponibilite();
          if($dispoMedecin != 0) {
              $rdv = new RendezVous(0, $medecin0, $patient, $creneaux);
              $rdv -> affiche();
          }
          else {
              $dispoMedecin = $medecin6->getDisponibilite();
              if($dispoMedecin != 0) {
                  $rdv = new RendezVous(0, $medecin6, $patient, $creneaux);
                  $rdv -> affiche();
              }
              else {
                  echo "Aucun Ophtalmo n'est disponible pour le moment.";
              }
          }
      }
      else {
          if($probleme == "Dents") {
              $dispoMedecin = $medecin1->getDisponibilite();
              if($dispoMedecin != 0) {
                  $rdv = new RendezVous(0, $medecin1, $patient, $creneaux);
                  $rdv -> affiche();
              }
              else {
                  $dispoMedecin = $medecin9->getDisponibilite();
                  if($dispoMedecin != 0) {
                      $rdv = new RendezVous(0, $medecin9, $patient, $creneaux);
                      $rdv -> affiche();
                  }
                  else {
                      echo "Aucun Dentiste n'est disponible pour le moment.";
                  }
              }
          }
          else {
              if($probleme == "Peau") {
                  $dispoMedecin = $medecin2->getDisponibilite();
                  if($dispoMedecin != 0) {
                      $rdv = new RendezVous(0, $medecin2, $patient, $creneaux);
                      $rdv -> affiche();
                  }
                  else {
                      echo "Aucun Dermatologue n'est disponible pour le moment.";
                  }
              }
              else {
                  if($probleme == "Articulation") {
                      $dispoMedecin = $medecin3->getDisponibilite();
                      if($dispoMedecin != 0) {
                          $rdv = new RendezVous(0, $medecin3, $patient, $creneaux);
                          $rdv -> affiche();
                      }
                      else {
                          echo "Aucun Kinésithérapeute n'est disponible pour le moment.";
                      }
                  }
                  else {
                      if($probleme == "Dos") {
                          $dispoMedecin = $medecin4->getDisponibilite();
                          if($dispoMedecin != 0) {
                              $rdv = new RendezVous(0, $medecin4, $patient, $creneaux);
                              $rdv -> affiche();
                          }
                          else {
                              $dispoMedecin = $medecin7->getDisponibilite();
                              if($dispoMedecin != 0) {
                                  $rdv = new RendezVous(0, $medecin7, $patient, $creneaux);
                                  $rdv -> affiche();
                              }
                              else {
                                  echo "Aucun Rhumatologue n'est disponible pour le moment.";
                              }
                          }
                      }
                      else {
                          if($probleme == "Audition") {
                              $dispoMedecin = $medecin6->getDisponibilite();
                              if($dispoMedecin != 0) {
                                  $rdv = new RendezVous(0, $medecin6, $patient, $creneaux);
                                  $rdv -> affiche();
                              }
                              else {
                                  $dispoMedecin = $medecin8->getDisponibilite();
                                  if($dispoMedecin != 0) {
                                      $rdv = new RendezVous(0, $medecin8, $patient, $creneaux);
                                      $rdv -> affiche();
                                  }
                                  else {
                                      echo "Aucun Orthophoniste n'est disponible pour le moment.";
                                  }
                              }
                          }
                          else {
                              echo "Aucun médecin n'est actuellement disponible.";
                          }
                      }
                  }
              }
          }
      }

}

?>
