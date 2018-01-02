<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <p><a href="index.php?nom=Nemare&amp;prenom=Jean&amp">Tu me salues ?</a></p>

        <?php
        //On vérife que la variable nom et la variable prenom existe dans l'URL
        if (isset($_GET['nom']) && isset($_GET['prenom'])) {
                //On affiche les 2 variables
                echo 'Bonjour, ' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' !';
            }
        ?>
    </body>
</html>