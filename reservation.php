<?php
session_start();
require_once '_gestionBase_inc.php';
include_once "_head_inc.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reservation_boostrap.css" media="screen">
        <link rel="stylesheet" href="css/reservation.css" media="screen">

        <title>Reservation</title>
      
    </head>
    <body>

        <br/> <br/> <br/>
        
        
    <div class="reservation-form">

        <form action="reservation_traitement.php" method="post">
            <h2 class="text-center">Reservation</h2>
            
            <div class="form-group">



             <!-- Selection de la date de début de reservation -->
            Date de début de réservation
            <input type="date" name="dateDebutReservation" class="form-control"  required="required" autocomplete="off" >

             <!-- Selection de la date de fin de reservation -->
            Date de fin de réservation
            <input type="date" name="dateFinReservation" class="form-control"  required="required" autocomplete="off" ">

             <!-- Saisit du volum estimé du container -->
            Volume estimé
            <input type="text" name="volumeEstime"  class="form-control" placeholder="Volume estimé" required="required" autocomplete="off" >
           
             <!-- Permet d'afficher la ville du port de départ et de la selectionner -->
            <?php
            $collectionVilles = obtenirVille();
            ?>
               Port de départ
            <select name="codeVilleMiseDisposition" class="form-control"  required="required" autocomplete="off">
                <?php
                foreach ($collectionVilles as $ville) :
                    ?>
                    <option value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>

             <!-- Permet d'afficher la ville du port de retour et de la selectionner -->
                Port de livraison
            <select name="codeVilleRendre" class="form-control"  required="required" autocomplete="off" >
                <?php
                foreach ($collectionVilles as $ville) :
                    ?>
                    <option value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>

<br>
             <!-- Valider la reservation -->
             <input type="submit" value="VALIDER" class="form-control"  required="required" autocomplete="off">
        </form>



    </body>

</html>
