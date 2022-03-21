<?php
session_start();
require_once '_gestionBase_inc.php';


$dateDebutReservation = $_POST["dateDebutReservation"]; //Date début
$dateFinReservation = $_POST["dateFinReservation"]; // Date Fin
$dateReservation = time(); 
$volumeEstime = $_POST["volumeEstime"]; // Volume Estimé 
$codeVilleMiseDisposition = $_POST["codeVilleMiseDisposition"]; // Code Ville Mise à Disposition 
$codeVilleRendre = $_POST["codeVilleRendre"]; //Code Ville Rendre
$codeUtiliseur = 1  ; // $_SESSION["client"]["codeUtilisateur"] ;
$etat = '' ; 


$codeReservation = ajouterUneReservation($dateDebutReservation, $dateFinReservation,$dateReservation,
        $volumeEstime, $codeVilleMiseDisposition, 
        $codeVilleRendre, $codeUtiliseur,$etat);

$_SESSION["codeReservation"] = $codeReservation ;




header("location:saisirLigneDeReservation.php");

