<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exo2 - Edit</title>
    </head>
    <body>
        <a href="index.php"><button>menu principal</button></a>
        
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            date : <input type="date" name="date" value="<?php echo $date ?>" required><br/>
            location : <input type="text" name="location" maxlength="200" value="<?php echo $location ?>" required><br/>
            from : <input type="number" name="from" value="<?php echo $altitude_from ?>" required><br/>
            to : <input type="number" name="to" value="<?php echo $altitude_to ?>" required><br/>
            time : <input type="text" name="time" value="<?php echo $time ?>" required><br/>
            comment : <textarea name="comment" rows="5" cols="33"><?php echo $comment ?></textarea><br/>
            <input type="submit" value="Enregistrer">
        </form>
    </body>
</html>