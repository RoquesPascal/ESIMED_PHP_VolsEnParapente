<?php

namespace App\Controllers;

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

    public static function Edit($displayView, $id, $date, $location, $altitude_from, $altitude_to, $time, $comment) : void
    {
        if($displayView)
        {
            $vol = FlyRepository::Find($id);
            $id = $vol->getId();
            $date = $vol->getDate();
            $location = $vol->getLocation();
            $altitude_from = $vol->getAltitudeFrom();
            $altitude_to = $vol->getAltitudeTo();
            $time = $vol->getTime();
            $comment = $vol->getComment();

            include('edit.html.php');
        }
        else if(isset($id) && isset($date) && isset($location) && isset($altitude_from) && isset($altitude_to) && isset($time))
        {
            FlyRepository::Save($id, $date, $location, $altitude_from, $altitude_to, $time, $comment);
            self::Index();
        }
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

    public static function Delete($id) : void
    {
        try
        {
            FlyRepository::Delete($id);
            self::Index();
        }
        catch (Error $event)
        {
            die('Erreur : ' . $event->getMessage());
        }
    }
}