<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Exercice 3</title>
    </head>
    <body>
        <?php
        //date de debut et de fin
        if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) { 
            echo $_GET['dateDebut'] . ' ' . $_GET['dateFin'] . ' !';
        } else { 
        // Il manque des paramètres, on avertit le visiteur
            echo 'Merci de renseigner des dates valides.';
        }
        ?>
    </body>
</html>