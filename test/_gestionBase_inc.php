<?php

function gestionnaireDeConnexion() {
    try {
        $pdo = new PDO(
                'mysql:host=localhost;dbname=tholdi_reservation',
                'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        var_dump($err);
        die;
    }
    return $pdo;
}

function obtenirVille() {
    $pdo = gestionnaireDeConnexion();
    $req = "select * from ville ";
    $pdoStatement = $pdo->query($req);
    $lesVilles = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesVilles;
}

function obtenirTypeContainer() {
    $pdo = gestionnaireDeConnexion();
    $req = "select * from typeContainer ";
    $pdoStatement = $pdo->query($req);
    $lesContainers = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    return $lesContainers;
}

function ajouterUneReservation($dateDebutReservation, $dateFinReservation, $volumeEstime, $codeVilleMiseDisposition, $codeVilleRendre, $codeUtiliseur) {

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
            . "$codeUtiliseur,'enCours')";
    $pdo->exec($req);
    $lastInsertId = $pdo->lastInsertId();
    return $lastInsertId ;
}

function ajouterLigneDeReservation($codeReservation,$numTypeContainer,$quantite){
    $pdo = gestionnaireDeConnexion();
    $req = "insert into reserver (codeReservation,numTypeContainer,quantite) "
            . " values ($codeReservation,$numTypeContainer,$quantite)" ;
    $pdo->exec($req);
}
