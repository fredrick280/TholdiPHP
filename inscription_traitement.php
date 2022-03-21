<?php 
    session_start();
    require_once '_gestionBase_inc.php';
    include_once "_head_inc.php";
    ?>

    
    <?php
        $raisonSociale = htmlspecialchars($_POST['raisonSociale']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $cp = htmlspecialchars($_POST['cp']);
    $ville = htmlspecialchars($_POST['ville']);
    $adrMel = htmlspecialchars($_POST['adrMel']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $contact = htmlspecialchars($_POST['contact']);
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $pays = htmlspecialchars($_POST['codePays']);
    
    ajouterUtilisateur($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $pays);
