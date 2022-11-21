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

    /**
     * @param $id
     * @return Fly
     */
    public static function Find($id) : Fly
    {
        $connexion = SingletonPDO::getInstance();
        $sql = "SELECT * FROM fly WHERE id=$id;";
        return $connexion->query($sql)->fetchObject('Fly');
    }

    /**
     * @param Int|null $id
     * @param $date
     * @param $location
     * @param $altitude_from
     * @param $altitude_to
     * @param $time
     * @param String|null $comment
     */
    public static function Save(?Int $id, $date, $location, $altitude_from, $altitude_to, $time, ?String $comment)
    {
        $connexion = SingletonPDO::getInstance();

        if($id)
        {
            $sql="UPDATE fly 
                  SET date='$date', location='$location', altitude_from=$altitude_from, altitude_to=$altitude_to, time=$time, comment=NULLIF('$comment','')
                  WHERE id=$id;";
            $connexion->exec($sql);
        }
        else
        {
            $sql = "INSERT INTO fly VALUES (DEFAULT, '$date', '$location', '$altitude_from', '$altitude_to', '$time', NULLIF('$comment',''));";
            $connexion->query($sql);
        }
    }
}