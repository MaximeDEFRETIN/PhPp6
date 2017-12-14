<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <p><a href="index.php?semaine=12&amp;">Semaine :</a></p>

        <?php
        if (isset($_GET['semaine'])) {
                echo $_GET['semaine'];
        }
        ?>
    </body>
</html>
