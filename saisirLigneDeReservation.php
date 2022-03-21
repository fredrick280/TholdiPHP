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
        <title>Reservation</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>

<body>
     <div class="lignereservation-form">

<form action="saisirLigneDeReservation_traitement.php" method="post">

<h2 class="text-center">Reservation</h2>

<div class="form-group">

    Type Container 
    <select name="typeContainer" class="form-control" placeholder="login" required="required" autocomplete="off" >
        <?php
        $collectionTypeContainer = obtenirTypeContainer();
        foreach ($collectionTypeContainer as $typeContainer):
            ?>

            <option value="<?php echo $typeContainer["numTypeContainer"]; ?>">
                <?php echo $typeContainer["libelleTypeContainer"]; ?>
            </option>

        <?php endforeach; ?>
    </select>

 Quantite
 <br>
    <input type="text" name="quantite" class="form-control" placeholder="Quantite" required="required" autocomplete="off">


    <input type="submit" value="Ajouter une ligne de réservation" class="form-control" placeholder="Volume estimé" required="required" autocomplete="off">


</form>


<form action="finaliserReservation_traitement.php" method="post">

    <input type="submit" value="Finaliser la réservation" class="form-control" placeholder="Volume estimé" required="required" autocomplete="off">
    
</form>
</body>
</html>

   <style>
        .lignereservation-form {
            width: 340px;
            margin: 50px auto;
        }
        .lignereservation-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .lignereservation-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }

        body
        {
            
            background-image:url(../tholdi02/images/portreservations2.jpg) ;
            
        }

    </style>

<?php 



