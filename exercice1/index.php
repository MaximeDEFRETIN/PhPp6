<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <p><a href="index.php?nom=Nemare&amp;prenom=Jean&amp">Tu me salues ?</a></p>

        <?php
        if (isset($_GET['nom'])) {
            if (isset($_GET['nom'])) {
                echo 'Bonjour, ' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' !';
            }
        }
        ?>
    </body>
</html>