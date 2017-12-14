<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <p><a href="index.php?dateDebut=02/05/2016&amp;dateFin=27/11/2016&amp;">Quel période ?</a></p>

        <?php
        if ((isset($_GET['dateDebut'])) && (isset($_GET['dateFin']))) {
                echo $_GET['dateDebut'] . ' au ' . $_GET['dateFin'];
        }
        ?>
    </body>
</html>