<?php

//initialisation page.php
require_once('Class/Medecin.class.php');
require_once('Class/Patient.class.php');
require_once('Class/Creneaux.class.php');
require_once('Class/Db.class.php');
require_once('Class/Insert.class.php');
//echo "right <br>";
//initialisation à la base de données
$db = new Db;

$dbCon =$db->get();

$testMedecin = new Insertion($dbCon);

//$testMedecin->insert("Mr", "POISSON", "Guy", "46", "Ophtalmologue", 1);
//$testMedecin->insert("Mr", "NERISSON", "Louis", "35", "Dentiste", 1);
//$testMedecin->insert("Mr", "TIREMOILOSS", "Josiane", "55", "Dermatologue", 1);
//testMedecin->insert("Mme", "BOITEUX", "Céline", "57", "Kinésithérapeute", 1);
//$testMedecin->insert("Mr", "BIZAR", "Françoise", "30", "Rhumatologue", 1);
//$testMedecin->insert("Mme", "BARGEOT", "Roselyne", "31", "Orthophoniste", 1);
//$testMedecin->insert("Mme", "MOT-FOTIF", "Annabelle", "46", "Ophtalmologue", 1);
//$testMedecin->insert("Mr", "CONTENT", "Patrice", "40", "Rhumatologue", 1);
//$testMedecin->insert("Mr", "MOROSE", "Didier", "38", "Orthophoniste", 1);
$testMedecin->insert("Mme", "BEBEOUIN-OUIN", "Annah", "54", "Dentiste", 1);


//initialisation médecin : "ID", "Civilité", "Nom", "Prénom", "Âge", "Spécialité", "Disponibilité '0/1'";
$medecin = new Medecin(0, "Mr", "POISSON", "Guy", "46", "Ophtalmologue", 1);
//$medecin0 -> affiche();

$medecin1 = new Medecin(1, "Mr", "NERISSON", "Louis", "35", "Dentiste", 1);
//$medecin1 -> affiche();

$medecin2 = new Medecin(2, "Mr", "TIREMOILOSS", "Josiane", "55", "Dermatologue", 1);
//$medecin2 -> affiche();

$medecin3 = new Medecin(3, "Mme", "BOITEUX", "Céline", "57", "Kinésithérapeute", 1);
//$medecin3 -> affiche();

$medecin4 = new Medecin(4, "Mr", "BIZAR", "Françoise", "30", "Rhumatologue", 1);
//$medecin4 -> affiche();

$medecin5 = new Medecin(5, "Mme", "BARGEOT", "Roselyne", "31", "Orthophoniste", 1);
//$medecin5 -> affiche();

$medecin6 = new Medecin(6, "Mme", "MOT-FOTIF", "Annabelle", "46", "Ophtalmologue", 1);
//$medecin6 -> affiche();

$medecin7 = new Medecin(7, "Mr", "CONTENT", "Patrice", "40", "Rhumatologue", 1);
//$medecin7 -> affiche();

$medecin8 = new Medecin(8, "Mr", "MOROSE", "Didier", "38", "Orthophoniste", 1);
//$medecin8 -> affiche();

$medecin9 = new Medecin(9, "Mme", "BEBEOUIN-OUIN", "Annah", "54", "Dentiste", 1);
//$medecin9 -> affiche();

//initialisation patient : "ID", "Civilité", "Nom", "Prénom", "Âge", "Problème", "Créneaux";
//$patient0 = new Patient(0, "Mr", "LEDUC", "Sébastien", "19", "Yeux", "matin");
//$patient0 -> affiche();

//initialisation créneaux
//$creneaux0 = $patient0->getCreneaux();

//initialisation rendez-vous
//$rdv0 = new RendezVous(0, $medecin0, $patient0, $creneaux0);
//$rdv0 -> affiche();

//phase de test
$nbMedecinDisponible = Medecin::afficheNbMedecin() - Medecin::countDisponible();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title>RDV A LA GARE | 1v1</title>
    </head>

    <body>
        <div class="content">
            <h3>Prendre un rendez-vous :</h3>
            <span class="nbMedecin">Il y a actuellement <?php echo $nbMedecinDisponible; ?> médecins spécialistes disponibles</span>
            <form id="formulaire" action="" method="post">
                <!-- formulaire de récupération des informations du patient -->
                <select name="civilite">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="date" name="date">
                <select name="probleme">
                    <option disabled selected value="noValue">...</option>
                    <option value="Yeux">Yeux</option>
                    <option value="Dents">Dents</option>
                    <option value="Peau">Peau</option>
                    <option value="Articulation">Articulation</option>
                    <option value="Dos">Dos</option>
                    <option value="Audition">Audition</option>
                </select>
                <select name="creneaux">
                    <option disabled selected value="noValue">...</option>
                    <option value="Matin">Matin</option>
                    <option value="Soir">Soir</option>
                </select>
                <button type="submit" name="getRdv">Prendre Rendez-Vous</button>
            </form>
            <div class="test"><?php include('Class/Traitement.class.php'); ?></div>
        </div>
    </body>

    </html>
