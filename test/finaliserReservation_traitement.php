<?php

session_start();
include_once '_gestonBase.inc.php';

$codeReservation = $_SESSION["codeReservation"];
foreach ($_SESSION["ligneDeReservation"] as $key => $value) {
    ajouterLigneDeReservation($codeReservation, $key, $value);
}

