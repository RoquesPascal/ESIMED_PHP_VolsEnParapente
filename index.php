<?php

use App\Controllers\FlyController;

require_once __DIR__.'/autoload.php';

try
{
    $view = $_POST['view'];

    $id = $_POST['id'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $altitude_from = $_POST['altitude_from'];
    $altitude_to = $_POST['altitude_to'];
    $time = $_POST['time'];
    $comment = $_POST['comment'];

    switch($view)
    {
        case 'add' :
            FlyController::Add(false, $date, $location, $altitude_from, $altitude_to, $time, $comment);
            break;
        case 'addDisplay' :
            FlyController::Add(true, $date, $location, $altitude_from, $altitude_to, $time, $comment);
            break;
        case 'edit' :
            FlyController::Edit(false, $id, $date, $location, $altitude_from, $altitude_to, $time, $comment);
            break;
        case 'editDisplay' :
            FlyController::Edit(true, $id, $date, $location, $altitude_from, $altitude_to, $time, $comment);
            break;
        case 'show' :
            FlyController::Show($id);
            break;
        case 'delete' :
            FlyController::Delete($id);
            break;
        default :
            FlyController::Index();
            break;
    }
}
catch (Error $event)
{
    die('Erreur : ' . $event->getMessage());
}