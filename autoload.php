<?php

spl_autoload_register( function (string $className) {
    $className = str_replace('App', '', $className);
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    include_once __DIR__.DIRECTORY_SEPARATOR.'src'.$className.'.php';
} );