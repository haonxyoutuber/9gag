<?php
$route = function () {
    route('gags.create', function () {
        echo input();
    });
};
return $route;
