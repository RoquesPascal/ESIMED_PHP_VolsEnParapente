<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';

$id = $_POST['id'];

if(isset($id))
{
    try
    {
        $connexion = SingletonPDO::getInstance();

        $date = $_POST['date'];
        $location = $_POST['location'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        $time = $_POST['time'];
        $comment = $_POST['comment'];

        if(isset($date) && isset($location) && isset($from) && isset($to) && isset($time))
        {
            $sql="UPDATE fly 
                  SET date='$date', location='$location', altitude_from=$from, altitude_to=$to, time=$time, comment='$comment'
                  WHERE id=$id;";
            $connexion->exec($sql);

            header("Location: index.php");
            exit();
        }
        else
        {
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
    }
    catch (PDOException $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('edit.html.php');