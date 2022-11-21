<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';

$date = $_POST['date'];
$location = $_POST['location'];
$altitude_from = $_POST['altitude_from'];
$altitude_to = $_POST['altitude_to'];
$time = $_POST['time'];
$comment = $_POST['comment'];

if(isset($date) && isset($location) && isset($altitude_from) && isset($altitude_to) && isset($time))
{
    try
    {
        $connexion = SingletonPDO::getInstance();

        $sql = "INSERT INTO fly VALUES (DEFAULT, '$date', '$location', '$altitude_from', '$altitude_to', '$time', '$comment');";
        $liste = $connexion->query($sql);
        header("Location: index.php");
        exit();
    }
    catch (Error $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('add.html.php');