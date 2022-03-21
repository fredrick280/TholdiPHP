<?php

function gestionnaireDeConnexion() 
{
    try {
        $pdo = new PDO(
                'mysql:dbhost=localhost;dbname=tholdi',
                'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) 
    {
        var_dump($err);
        die;
    }
    return $pdo;
}

function obtenirVille() 
{
    $pdo = gestionnaireDeConnexion();
    $req = "SELECT * FROM ville ";
    $pdoStatement = $pdo->query($req);
    $lesVilles = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesVilles;
}

function obtenirPays() 
{
    $pdo = gestionnaireDeConnexion();
    $req = "SELECT codePays FROM pays";
    $pdoStatement = $pdo->query($req);
    $lesCodesPays = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesCodesPays;
}


function obtenirTypeContainer()
 {
    $pdo = gestionnaireDeConnexion();
    $req = "SELECT * FROM typecontainer ";
    $pdoStatement = $pdo->query($req);
    $lesContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesContainers;
}

function ajouterUneReservation($dateDebutReservation, $dateFinReservation,$dateReservation, $volumeEstime, $codeVilleMiseDisposition, $codeVilleRendre, $codeUtilisateur,$etat) {

    $pdo = gestionnaireDeConnexion() ;
    $dateReservation = time();
    $dateDebutReservation = strtotime($dateDebutReservation);
    $dateFinReservation = strtotime($dateFinReservation);
    $req = "insert into reservation"
        . " (dateDebutReservation,dateFinReservation,dateReservation,"
        . " volumeEstime,codeVilleMiseDisposition,"
        . " codeVilleRendre,codeUtilisateur,etat)"
        . " values ($dateDebutReservation,$dateFinReservation,$dateReservation
                        ,$volumeEstime,$codeVilleMiseDisposition,$codeVilleRendre,"
        . "$codeUtilisateur,'EnCours')";
    $pdo->exec($req);
    $lastInsertId = $pdo->lastInsertId();
    return $lastInsertId;
}

function ajouterLigneDeReservation($codeReservation,$numTypeContainer,$qteReserver){
    $pdo = gestionnaireDeConnexion();
    $req = "insert into reserver (codeReservation,numTypeContainer,qteReserver) "
        . " values ($codeReservation,$numTypeContainer,$qteReserver)" ;
    $pdo->exec($req);
}




 function ajouterUtilisateur($raisonSociale,$adresse,$cp,$ville,$adrMel,$telephone,$contact,$login,$mdp,$pays)
  {
        if (isset($_POST['contact']) && isset($_POST['raisonSociale']))
        {
 
    $pdo = gestionnaireDeConnexion();
    $sql = "SELECT *, count(*) as nb FROM utilisateur "
            . " WHERE adrMel='$adrMel' GROUP BY code";
    $prep = $pdo->prepare($sql);
    
    $prep->execute();
    $resultat = $prep->fetch();
         
    if ($resultat["nb"] == 1)
     {
 
          header("Location: connexionmauvaise.php");
        
    } else 
    {
         $sql = "INSERT INTO utilisateur(raisonSociale,adresse,cp,ville,adrMel,telephone,contact,login,mdp,codePays)
     VALUES ('$raisonSociale','$adresse','$cp','$ville','$adrMel','$telephone','$contact','$login','$mdp','$pays')";
    
        $pdo->exec($sql);
        header("location:connexion.php");
    }
}
  }

  

      function afficherReservation() {
        $pdo = gestionnaireDeConnexion();
                    $req = "SELECT * FROM reservation";
          $pdoStatement = $pdo->query($req);
          $lesReservations = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
          return $lesReservations;
          $lesReservations = array();
          return $lesReservations;
      }
          
          