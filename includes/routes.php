<?php
$route = function () {
    route('gags.create', function () {
        $input = input();
        $button = button();
        $form = form([$input, $button]);
        echo $form;
    });
};
return $route;
