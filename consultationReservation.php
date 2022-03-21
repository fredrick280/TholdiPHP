<?php
session_start();
include_once "_head_inc.php";
require_once '_gestionBase_inc.php';
$pdo = gestionnaireDeConnexion() ;
 
?>

<?php
               $collectionReservation = afficherReservation();
?>
                <?php 
                foreach ($collectionReservation as $lesReservation):
                    ?>
                    <p>Date Debut Reservation : <?php echo date('d/m/Y',$lesReservation["dateDebutReservation"]) ;?><p>
                    <p> Date fin Reservation : <?php echo date('d/m/Y',$lesReservation["dateFinReservation"]) ;?> </p>
                    <p> volume Estime : <?php echo $lesReservation["volumeEstime"] ;?> </p>
                    <p> code Ville MiseDisposition : <?php echo $lesReservation["codeVilleMiseDisposition"] ;?> </p>
                    <p> code Ville Rendre : <?php echo $lesReservation["codeVilleRendre"] ;?> </p>

            <?php endforeach; ?>