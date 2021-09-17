<?php
require_once '_gestionBase_inc.php';
session_start();


$codeReservation = $_SESSION["codeReservation"];
foreach ($_SESSION["ligneDeReservation"] as $key => $value) {
    ajouterLigneDeReservation($codeReservation, $key, $value);
}

// header("location:index.php");

        
        $pdo = gestionnaireDeConnexion() ;
        
        $collectionVilles = obtenirVille();
        
        var_dump($collectionVilles);
        
        ?>

