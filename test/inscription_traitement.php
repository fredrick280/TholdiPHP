<?php 
    require_once '_gestionBase_inc.php';

    if(!empty($_POST['login']) && !empty($_POST['adrMel']) && !empty($_POST['mdp']) && !empty($_POST['mdp_retype']))
    {
        $login = htmlspecialchars($_POST['login']);
        $adrMel = htmlspecialchars($_POST['adrMel']);
        $mdp = htmlspecialchars($_POST['mdp']);
        $mdp_retype = htmlspecialchars($_POST['mdp_retype']);

        $check = $bdd->prepare('SELECT login, adrMel, mdp FROM utilisateur');
        $check->execute(array($adrMel));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($login) <= 100){
                if(strlen($adrMel) <= 100){
                    if(filter_var($adrMel, FILTER_VALIDATE_adrMel)){
                        if($mdp === $mdp_retype){

                            $cost = ['cost' => 12];
                            $mdp = mdp_hash($mdp, mdp_BCRYPT, $cost);
                            
                            $ip = $_SERVER['REMOTE_ADDR'];

                            /*
                                Pour ceux qui souhaite mettre en place un système de mot de passe oublié, pensez à mettre le champ token dans votre requête
                                $insert = $bdd->prepare('INSERT INTO utilisateurs(login, adrMel, mdp, ip, token) VALUES(:login, :adrMel, :mdp, :ip, :token)');
                                $insert->execute(array(
                                    'login' => $login,
                                    'adrMel' => $adrMel,
                                    'mdp' => $mdp,
                                    'ip' => $ip,
                                    'token' =>  bin2hex(openssl_random_login_bytes(24))
                                ));
                              */
                            
                            $insert = $bdd->prepare('INSERT INTO utilisateur(login, adrMel, mdp, ip) VALUES(:login, :adrMel, :mdp, :ip)');
                            $insert->execute(array(
                                'login' => $login,
                                'adrMel' => $adrMel,
                                'mdp' => $mdp,
                                'ip' => $ip
                            ));

                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=mdp'); die();}
                    }else{ header('Location: inscription.php?reg_err=adrMel'); die();}
                }else{ header('Location: inscription.php?reg_err=adrMel_length'); die();}
            }else{ header('Location: inscription.php?reg_err=login_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
