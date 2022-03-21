<?php 
    session_start();
    require_once '_gestionBase_inc.php';
    include_once "_head_inc.php";
?>


<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link rel="stylesheet" href="css/connexion_bootstrap.css" media="screen">
            <link rel="stylesheet" href="css/connexion.css" media="screen">
            


            <title>Connexion</title>
        </head>
        <body>
        
          <br/>   <br/>   <br/>   <br/>   <br/>   <br/>   <br/>   
        <div class="login-form">
            
            <form method="post" action="connexion_traitement.php">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="login" name="login" class="form-control" placeholder="login" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="mdp" name="mdp" class="form-control" placeholder="mdp" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
           <centre> <p class="text-center"><a href="inscription.php">Inscription</a></p> </centre>
        </div>


        </body>
</html>