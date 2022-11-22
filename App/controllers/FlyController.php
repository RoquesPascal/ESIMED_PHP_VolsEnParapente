<?php

namespace App\Controllers;

use Couchbase\View;
use Error;
use App\models\FlyRepository;

require_once __DIR__ . '/../../autoload.php';

class FlyController
{
    public static function Index() : void
    {
        try
        {
            $listeVols = FlyRepository::FindAll();
            include('index.html.php');
        }
        catch (Error $event)
        {
            die('Erreur : '.$event->getMessage());
        }
    }

    public static function Add($displayView, $date, $location, $altitude_from, $altitude_to, $time, $comment) : void
    {
        $date = $_POST['date'];
        $location = $_POST['location'];
        $altitude_from = $_POST['altitude_from'];
        $altitude_to = $_POST['altitude_to'];
        $time = $_POST['time'];
        $comment = $_POST['comment'];

        if($displayView)
        {
            include('add.html.php');
        }
        else
        {
            try
            {
                FlyRepository::Save(null, $date, $location, $altitude_from, $altitude_to, $time, $comment);
                self::Index();
            }
            catch (Error $event)
            {
                die('Erreur : ' . $event->getMessage());
            }
        }
    }

    public static function Edit() : void
    {

    }

    public static function Show($id) : void
    {
        try
        {
            $vol = FlyRepository::Find($id);

            $date = $vol->getDate();
            $location = $vol->getLocation();
            $altitude_from = $vol->getAltitudeFrom();
            $altitude_to = $vol->getAltitudeTo();
            $time = $vol->getTime();
            $comment = $vol->getComment();

            include('show.html.php');
        }
        catch (Error $event)
        {
            die('Erreur : ' . $event->getMessage());
        }
    }

    public static function Delete() : void
    {

    }
}