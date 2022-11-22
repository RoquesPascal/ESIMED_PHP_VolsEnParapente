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
        <form action="index.php" method="post">
            <input type="hidden" name="view" value="addDisplay" />
            <input type="submit" value="Ajouter un saut">
        </form>

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
                foreach($listeVols as $vol)
                {
                    $html = '';

                    $html .= '
                        <tr>
                            <td>'.$vol['id'].'</td>
                            <td>'.$vol['date'].'</td>
                            <td>'.$vol['location'].'</td>
                            <td>'.$vol['altitude_from'].'</td>
                            <td>'.$vol['altitude_to'].'</td>
                            <td>'.$vol['time'].'</td>
                            <td>'.$vol['comment'].'</td>
                            <td>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="view" value="show" />
                                    <input type="hidden" name="id" value="'.$vol['id'].'" />
                                    <input type="submit" value="Voir">
                                </form>
                                <form action="edit.php" method="post">
                                    <input type="hidden" name="id" value="'.$vol['id'].'" />
                                    <input type="submit" value="Modifier">
                                </form>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="'.$vol['id'].'" />
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