<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';

$date = $_POST['date'];
$location = $_POST['location'];
$from = $_POST['from'];
$to = $_POST['to'];
$time = $_POST['time'];
$comment = $_POST['comment'];

if(isset($date) && isset($location) && isset($from) && isset($to) && isset($time))
{
    try
    {
        $connexion = SingletonPDO::getInstance();

        $sql = "INSERT INTO fly VALUES (DEFAULT, '$date', '$location', '$from', '$to', '$time', '$comment');";
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