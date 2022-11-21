<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';
require_once __DIR__.'/models/FlyRepository.php';

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
            $vol = FlyRepository::Find($id);

            $id = $vol->getId();
            $date = $vol->getDate();
            $location = $vol->getLocation();
            $altitude_from = $vol->getAltitudeFrom();
            $altitude_to = $vol->getAltitudeTo();
            $time = $vol->getTime();
            $comment = $vol->getComment();
        }
    }
    catch (Error $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('edit.html.php');