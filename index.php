<?php

declare(strict_types=1);

//spl_autoload_register(static function ($class_name) {
//    include 'Models/' . $class_name . '.php';
//});


spl_autoload_register('autoLoader');

function autoLoader($className): void
{
    $path = 'Models/';
    $extension = ".php";
    $fullpath = $path . $className . $extension;

    require_once $fullpath;
}

require 'Controllers/guestbookController.php';

require 'Views/page.php';

?>