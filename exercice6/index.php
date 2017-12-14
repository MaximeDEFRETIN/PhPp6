<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <p><a href="index.php?batiment=12&salle=101">Lieu :</a></p>

        <?php
        if ((isset($_GET['batiment'])) && ((isset($_GET['salle'])))) {
                echo 'Batiment : ' . $_GET['batiment'] . ', Salle : ' . $_GET['salle'];
        }
        ?>
    </body>
</html>