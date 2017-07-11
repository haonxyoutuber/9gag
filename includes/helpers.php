<?php
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
