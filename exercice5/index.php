<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <p><a href="index.php?batiment=12&salle=101">Lieu :</a></p>

        <?php
        //recupérétion du jour de la semaine
        if (!empty($_GET)) { 
        // affichage avec une phrase 
            echo $_GET['semaine'] . 'ème semaine après JC.';
        } else { 
        // affichage d'un message d'erreur en cas de probleme
            echo ' Problème !';
        }
        ?>
    </body>
</html>