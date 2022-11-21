<?php
require_once __DIR__.'/models/FlyRepository.php';

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
        FlyRepository::Save(null, $date, $location, $altitude_from, $altitude_to, $time, $comment);
        header("Location: index.php");
        exit();
    }
    catch (Error $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('add.html.php');