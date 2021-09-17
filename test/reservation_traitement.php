<?php
session_start();
include_once '_gestionBase_inc.php';

$dateDebutReservation = $_POST["dateDebutReservation"];
$dateFinReservation = $_POST["dateFinReservation"];
$volumeEstime = $_POST["volumeEstime"];
$codeVilleMiseDisposition = $_POST["codeVilleMiseDisposition"];
$codeVilleRendre = $_POST["codeVilleRendre"];
$codeUtiliseur = 1; // $_SESSION["client"]["codeUtilisateur"] ;

$codeReservation = ajouterUneReservation($dateDebutReservation, $dateFinReservation, 
        $volumeEstime, $codeVilleMiseDisposition, 
        $codeVilleRendre, $codeUtiliseur);

$_SESSION["codeReservation"] = $codeReservation ;

header("location:saisirLigneDeReservation.php");

