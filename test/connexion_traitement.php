<?php
include_once '_gestionBase_inc.php';
//include_once '_head_inc.php';

$conlogin=$_POST["login"];
$conmdp=$_POST["mdp"];

if (isset($_POST["login"]) && isset($_POST["mdp"]))
{
    $pdo = gestionnaireDeConnexion();
    $sql = "SELECT *, count (*) as nb FROM utilisateur WHERE LOGIN='$conlogin' AND MDP='$conmdp' GROUP BY code";

    $prep = $pdo->prepare($sql);

    $prep-> execute();
    $resultat  = $prep->fetch();

    if ($resultat["nb"] == 1)
    {
        $compteExistant = true;
        header("location:index.php");
        $_SESSION = $_SESSION($conlogin);
    }
    else {
        header("location:connexionmauvaise.php");
        $prep->closeCursor();
    }


}
?>