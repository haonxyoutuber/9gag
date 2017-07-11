<?php
//absolute path
define('ABSPATH', __DIR__);
$route = require_once 'includes/routes.php';
require_once 'includes/helpers.php';
autoload(ABSPATH . '/Helpers/*');
$route();
