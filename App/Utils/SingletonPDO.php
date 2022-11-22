<?php

namespace App\Utils;

use PDO;
use PDOException;

class SingletonPDO
{
    private static ?PDO $instance = null;
    const serveur = 'localhost';
    const db = 'esimed_php_exo2';
    const port = '3306';
    const utilisateur = 'root';
    const mot_de_passe = '';

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            try
            {
                self::$instance = new PDO("mysql:host=".self::serveur.";dbname=".self::db.";port=".self::port,self::utilisateur,self::mot_de_passe);
            }
            catch (PDOException $event)
            {
                die('Erreur : ' . $event->getMessage());
            }
        }
        return self::$instance;
    }
}