<?php
use App\Utils\SingletonPDO;
require_once __DIR__.'/autoload.php';

$id = $_POST['id'];

if(isset($id))
{
    try
    {
        $connexion = SingletonPDO::getInstance();

        $sql = "DELETE FROM fly WHERE id=$id;";
        $connexion->exec($sql);
        header("Location: index.php");
        exit();
    }
    catch (Error $event)
    {
        die('Erreur : ' . $event->getMessage());
    }
}

include('delete.html.php');