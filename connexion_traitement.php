<?php 
    session_start();
    require_once '_gestionBase_inc.php';
    include_once "_head_inc.php";
?>
      
<?php
                       
                       if(!empty($_POST['login']) && !empty($_POST['mdp'])) 
                       {
                           $login = htmlspecialchars($_POST['login']);
                           $mdp = htmlspecialchars($_POST['mdp']);
                   
                           $pdo = gestionnaireDeConnexion();
                               $sql = "SELECT *, count(*) as nb FROM utilisateur WHERE LOGIN='$login' AND MDP='$mdp' GROUP BY code";
                                echo $sql ;
                               $prep = $pdo->prepare($sql);
                   
                               $prep->execute();
                               $resultat = $prep->fetch();
                   
                               if ($resultat["nb"] == 1) 
                               {
                                   $compteExistant = true;
                                   header("location:index.php");
                                   $_SESSION = $_SESSION($login);
                               }
                               
                               else 
                               {

                                header("location:connexion?mauvaise.php");
                                echo"login ou mot de passe incorrect !";
                                   $prep->closeCursor();
                                   
                               }
                              }
                   ?>