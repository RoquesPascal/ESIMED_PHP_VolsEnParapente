<?php
require_once __DIR__.'/models/FlyRepository.php';

try
{
    $listeVols = FlyRepository::FindAll();
}
catch (Error $event)
{
    die('Erreur : '.$event->getMessage());
}

include('index.html.php');