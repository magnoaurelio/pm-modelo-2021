<?php

function getFile($dir, $class){
    return "app/$dir/$class.class.php";
}

function autoload($class)
{

    $filename = getFile('model', $class);
    if (!file_exists($filename)){
        $filename = getFile('database', $class);
    }
    if (!file_exists($filename)){
        $filename = getFile('auxiliar', $class);
    }

    include  $filename;
}

spl_autoload_register('autoload');
?>