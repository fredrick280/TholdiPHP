<?php

session_start();
require_once '_gestionBase_inc.php';

$codeReservation = $_SESSION["codeReservation"];
foreach ($_SESSION["ligneDeReservation"] as $key => $value) {
    ajouterLigneDeReservation($codeReservation, $key, $value);
}

var_dump($_SESSION) ;

header("location:reservation.php"); 