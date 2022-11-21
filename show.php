<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';
require_once __DIR__.'/models/FlyRepository.php';

$id = $_POST['id'];

if(isset($id))
{
    try
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
    catch (Error $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('show.html.php');