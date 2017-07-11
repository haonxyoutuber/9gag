<?php
use Helpers\Input;

/**
 * @param string $name
 * @param callable|string $callback
 */
function route($name, $callback)
{
    if (isset($_GET['route'])) {
        $currentRouteName = $_GET['route'];
    }else{
        $currentRouteName = 'default';
    }
    if ($name === $currentRouteName) {
        $callback();
    }
}
function autoload($pattern){
    $helper_files = (glob($pattern));
    foreach ($helper_files as $helper_file){
        $helper_file = realpath($helper_file);
        require_once $helper_file;
    }
}

function input(){
    return new Input();
}
