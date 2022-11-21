<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';

$id = $_POST['id'];

if(isset($id))
{
    try
    {
        $connexion = SingletonPDO::getInstance();

        $sql = "SELECT * FROM fly WHERE id=$id;";
        $liste = $connexion->query($sql);

        $donnee = $liste->fetch();
        $id = $donnee['id'];
        $date = $donnee['date'];
        $location = $donnee['location'];
        $altitude_from = $donnee['altitude_from'];
        $altitude_to = $donnee['altitude_to'];
        $time = $donnee['time'];
        $comment = $donnee['comment'];
    }
    catch (PDOException $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('show.html.php');