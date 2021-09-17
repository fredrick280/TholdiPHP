<?php
include_once '_gestionBase.inc.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="reservation.traitement.php" method="post">
            Date de début de réservation
            <input type="date" name="dateDebutReservation">
            Date de fin de réservation
            <input type="date" name="dateFinReservation">
            Volume estimé
            <input type="text" name="volumeEstime">
           
            <?php
            $collectionVilles = obtenirVille();
            ?>
            <select name="codeVilleMiseDisposition">
                <?php
                foreach ($collectionVilles as $ville) :
                    ?>
                    <option value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <select name="codeVilleRendre">
                <?php
                foreach ($collectionVilles as $ville) :
                    ?>
                    <option value="<?php echo $ville["codeVille"]; ?>">
                        <?php echo $ville["nomVille"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            
             <input type="submit" value="valider">
        </form>



    </body>
</html>
