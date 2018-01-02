<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p><a href="index.php?langage=PHP&amp;serveur=LAMP&amp;">Langage et serveur :</a></p>

        <?php
        //On vérifie que les variables existent, et on les affiche
        if ((!empty($_GET['langage'])) && (!empty($_GET['serveur']))) {
                echo 'Je ne comprend pas, c\'est du ' . $_GET['langage'] . '. Ça vient de ' . $_GET['serveur'];
        } else { 
        //On affiche le message d'erreur
            echo 'Problème !';
        }
        ?>
    </body>
</html>




