<?php
session_start();
require_once '_gestionBase_inc.php';

$quantite = $_POST["quantite"] ;
$numTypeContainer = $_POST["typeContainer"] ;

$_SESSION["ligneDeReservation"][$numTypeContainer] = $quantite ;

 ajouterLigneDeReservation($codeReservation,$numTypeContainer,$quantite);

header("location:saisirligneDeReservation.php");

