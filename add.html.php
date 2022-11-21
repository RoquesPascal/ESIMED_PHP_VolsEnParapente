<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exo2 - Add</title>
    </head>
    <body>
        <a href="index.php"><button>menu principal</button></a>

        <form action="add.php" method="post">
            date : <input type="date" name="date" value="<?php echo date('Y-m-d') ?>" required><br/>
            location : <input type="text" name="location" maxlength="200" required><br/>
            from : <input type="number" name="altitude_from" required><br/>
            to : <input type="number" name="altitude_to" required><br/>
            time : <input type="text" name="time" required><br/>
            comment : <textarea name="comment" rows="5" cols="33"></textarea><br/>
            <input type="submit" value="Enregistrer">
        </form>
    </body>
</html>