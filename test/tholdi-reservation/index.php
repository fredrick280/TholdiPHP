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
        <a href="reservation.php">
            reservation
        </a>
        <?php
        
        $pdo = gestionnaireDeConnexion() ;
        
        $collectionVilles = obtenirVille();
        
        var_dump($collectionVilles);
        
        ?>
    </body>
</html>
