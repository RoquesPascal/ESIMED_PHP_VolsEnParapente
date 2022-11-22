<?php

namespace App\Controllers;

use Couchbase\View;
use Error;
use App\models\FlyRepository;

require_once __DIR__ . '/../../autoload.php';

class FlyController
{
    public static function Home() : void
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

    public static function Add() : void
    {

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