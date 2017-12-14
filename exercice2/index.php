<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <p><a href="index.php?nom=Nemare&amp;prenom=Jean&amp;age=36000&amp;">Tu me salues ?</a></p>

        <?php
        if ((isset($_GET['nom'])) && (isset($_GET['prenom'])) && (isset($_GET['age']))) {
                echo 'Bonjour, ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '. Tu as ' . $_GET['age'] . ' ans !' ;
        }
        ?>
    </body>
</html>