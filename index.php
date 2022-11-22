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
            FlyController::Add();
            break;
        case 'edit' :
            FlyController::Edit();
            break;
        case 'show' :
            FlyController::Show($id);
            break;
        case 'delete' :
            FlyController::Delete();
            break;
        default :
            FlyController::Home();
            break;
    }
}
catch (Error $event)
{
    die('Erreur : ' . $event->getMessage());
}