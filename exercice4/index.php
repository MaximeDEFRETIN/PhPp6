<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p><a href="index.php?langage=PHP&amp;serveur=LAMP&amp;">Langage et serveur :</a></p>

        <?php
        if ((isset($_GET['langage'])) && (isset($_GET['serveur']))) {
                echo $_GET['langage'] . ' et ' . $_GET['serveur'];
        }
        ?>
    </body>
</html>




