<?php
require_once __DIR__.'/models/FlyRepository.php';

$id = $_POST['id'];

if(isset($id))
{
    try
    {
        FlyRepository::Delete($id);
        header("Location: index.php");
        exit();
    }
    catch (Error $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('delete.html.php');