<?php

use App\Utils\SingletonPDO;
require_once __DIR__.'/../autoload.php';
require_once __DIR__.'/Fly.php';

class FlyRepository
{
    /**
     * @return Fly[]
     */
    public static function FindAll() : array
    {
        $connexion = SingletonPDO::getInstance();
        $sql = "SELECT * FROM fly ORDER BY id ASC;";
        return $connexion->query($sql)->fetchAll();
    }

    public static function Find($id)
    {

    }

    public static function Save($id, $date, $location, $altitude_from, $altitude_to, $time, $comment)
    {

    }
}