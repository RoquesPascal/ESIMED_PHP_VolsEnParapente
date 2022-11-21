<!doctype html>
<html lang="fr">
    <head>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exo2 - Menu principal</title>
    </head>
    <body>
        <a href="add.php"><button>Ajouter un saut</button></a>

        <table>
            <tr>
                <th>id</th>
                <th>date</th>
                <th>location</th>
                <th>from</th>
                <th>to</th>
                <th>time</th>
                <th>comment</th>
                <th>Voir / Modifier / Supprimer</th>
            </tr>
            <?php
                while($donnees=$liste->fetch())
                {
                    $html = '';

                    $html .= '
                        <tr>
                            <td>'.$donnees['id'].'</td>
                            <td>'.$donnees['date'].'</td>
                            <td>'.$donnees['location'].'</td>
                            <td>'.$donnees['altitude_from'].'</td>
                            <td>'.$donnees['altitude_to'].'</td>
                            <td>'.$donnees['time'].'</td>
                            <td>'.$donnees['comment'].'</td>
                            <td>
                                <form action="show.php" method="post">
                                    <input type="hidden" name="id" value="'.$donnees['id'].'" />
                                    <input type="submit" value="Voir">
                                </form>
                                <form action="edit.php" method="post">
                                    <input type="hidden" name="id" value="'.$donnees['id'].'" />
                                    <input type="submit" value="Modifier">
                                </form>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="'.$donnees['id'].'" />
                                    <input type="submit" value="Supprimer">
                                </form>
                              </td>
                        </tr>
                    ';
                    echo $html;
                }

            ?>
        </table>
    </body>
</html>