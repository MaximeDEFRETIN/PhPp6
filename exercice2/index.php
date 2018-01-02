<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Exerice 2</title>
    </head>
    <body>
        <?php

        if (isset($_GET['age']))
        {
            echo 'Tu as ' . $_GET['age'];
        }
        else
        {
            echo 'Il faut renseigner un age !';
        }
        ?>    

    </body>
</html>