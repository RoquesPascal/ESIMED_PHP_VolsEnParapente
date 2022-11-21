<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';

try
{
    $connexion = SingletonPDO::getInstance();
    $sql = "SELECT * FROM fly ORDER BY id ASC;";
    $liste = $connexion->query($sql);
}
catch (PDOException $event)
{
    die('Erreur : '.$event->getMessage());
}

include('index.html.php');