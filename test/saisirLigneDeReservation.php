<?php 
session_start();
include_once '_gestionBase_inc.php';

?>

<form action="saisirLigneDeReservation_traitement.php" method="post">

    Type Container 
    <select name="typeContainer">
        <?php
        $collectionTypeContainer = obtenirTypeContainer();
        foreach ($collectionTypeContainer as $typeContainer):
            ?>

            <option value="<?php echo $typeContainer["numTypeContainer"]; ?>">
                <?php echo $typeContainer["libelleTypeContainer"]; ?>
            </option>

        <?php endforeach; ?>
    </select>


    <input type="text" name="quantite">


    <input type="submit" value="Ajouter une ligne de réservation" >



</form>


<form action="finaliserReservation_traitement.php" method="post">
    <input type="submit" value="Finaliser la réservation">
    
</form>
<?php 

var_dump($_SESSION) ;
