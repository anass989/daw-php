<?php
spl_autoload_register('autoloading');
spl_autoload_register('autoloading_abstract');

function autoloading($className) {
    $path = "classes/";
    $extension = ".class.php";
    $full_path = $path . $className . $extension;

    include_once $full_path;
}

function autoloading_abstract($className) {
    $path = "abstract/";
    $extension = ".abtract.php";
    $full_path = $path . $className . $extension;
    include_once $full_path;
}


?>