<?php
require_once __DIR__.'/models/FlyRepository.php';

$id = $_POST['id'];

if(isset($id))
{
    try
    {
        $date = $_POST['date'];
        $location = $_POST['location'];
        $altitude_from = $_POST['altitude_from'];
        $altitude_to = $_POST['altitude_to'];
        $time = $_POST['time'];
        $comment = $_POST['comment'];

        if(isset($date) && isset($location) && isset($altitude_from) && isset($altitude_to) && isset($time))
        {
            FlyRepository::Save($id, $date, $location, $altitude_from, $altitude_to, $time, $comment);
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