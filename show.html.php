<!doctype html>
<html lang="fr">
    <head>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exo2 - Show</title>
    </head>
    <body>
        <a href="index.php"><button>menu principal</button></a>

        <table>
            <tr>
                <th>id</th>
                <th>date</th>
                <th>location</th>
                <th>from</th>
                <th>to</th>
                <th>time</th>
                <th>comment</th>
                <th>Modifier / Supprimer</th>
            </tr>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo $location; ?></td>
                <td><?php echo $altitude_from; ?></td>
                <td><?php echo $altitude_to; ?></td>
                <td><?php echo $time; ?></td>
                <td><?php echo $comment; ?></td>
                <td>
                    <form action="edit.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                        <input type="submit" value="Modifier">
                    </form>
                    <form action="index.php" method="post">
                        <input type="hidden" name="view" value="delete" />
                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>