<?php 
    session_start();
    require_once '_gestionBase_inc.php';
    include_once "_head_inc.php";
    ?>

    
    <?php
    
          if(!empty($_POST['login']) && !empty($_POST['adrMel']) && !empty($_POST['mdp']))
    {

        $adrMel = htmlspecialchars($_POST['adrMel']);
        $login = htmlspecialchars($_POST['login']);
        $mdp = htmlspecialchars($_POST['mdp']);

            $pdo = gestionnaireDeConnexion();

            $data = [
                'adrMel' => $adrMel,
                'login' => $login,
                'mdp' => $mdp,
            ];
            $sql = "INSERT INTO utilisateur (adrMel, Login, mdp) VALUES (:adrMel, :login, :mdp)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute($data);


            if ($resultat["nb"] == 1) 
            {
                $compteExistant = true;
                header("location:index.php");
            }
            
            else 
            {
                $_SESSION[$login] = $_POST['login'];
                header("location:inscription.php?reussite.php"); die();
                $prep->closeCursor();
                exit();
            }

    }