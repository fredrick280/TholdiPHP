<?php
session_start();

$quantite = $_POST["quantite"] ;
$numTypeContainer = $_POST["typeContainer"] ;

$_SESSION["ligneDeReservation"][$numTypeContainer] = $quantite ;

header("location:saisirLigneDeReservation.php");

