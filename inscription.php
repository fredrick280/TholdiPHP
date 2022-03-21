<?php
session_start();
require_once '_gestionBase_inc.php';
include_once "_head_inc.php";
?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">

            <link rel="stylesheet" href="css/connexion.css" media="screen">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        
            <title>Connexion</title>
        </head>
        <body>
        <div class="login-form">
  
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">

                <!-- Saisir la raison sociale -->

                <div class="form-group">
                    <input type="raisonSociale" name="raisonSociale" class="form-control" placeholder="raisonSociale" required="required" autocomplete="off">
                </div>

                <!-- Saisir l'adresse -->

                <div class="form-group">
                    <input type="adresse" name="adresse" class="form-control" placeholder="adresse" required="required" autocomplete="off">
                </div>

                <!-- Saisir le code postale -->

                <div class="form-group">
                    <input type="cp" name="cp" class="form-control" placeholder="cp" required="required" autocomplete="off">
                </div>

                 <!-- Saisir la ville -->
                
                <div class="form-group">
                    <input type="ville" name="ville" class="form-control" placeholder="ville" required="required" autocomplete="off">
                </div>

                 <!-- Saisir l'adresse mail -->

                <div class="form-group">
                    <input type="adrMel" name="adrMel" class="form-control" placeholder="Adresse mail" required="required" autocomplete="off">
                </div>


                 <!-- Saisir le numéro de téléphone -->

                <div class="form-group">
                    <input type="telephone" name="telephone" class="form-control" placeholder="telephone" required="required" autocomplete="off">
                </div>

                 <!-- Saisir le contact -->

                 <div class="form-group">
                    <input type="contact" name="contact" class="form-control" placeholder="contact" required="required" autocomplete="off">
                </div>

                <!-- Permet d'afficher la liste des codes de Pays et d'en selection un -->
                <?php
            $collectionPays = obtenirPays();
            ?>
                <select name="codePaysDisposition" class="form-control"  required="required" autocomplete="off" >
                <?php
                foreach ($collectionPays as $pays) :
                    ?>
                    <option value="<?php echo $pays["codePays"]; ?>">
                        <?php echo $pays["codePays"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
                
            <br/>

             <!-- Saisit du login -->

                <div>
                    <input type="text" name="login" class="form-control" placeholder="Identifiant" required="required" autocomplete="off">
                </div>
                <br/>

                 <!-- Saisit du mot de passe -->

                <div class="form-group">
                    <input type="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>

                 <!-- Bouton valider -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   



           </form>
            
        </div>

        </body>
</html>