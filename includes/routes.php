<?php
$route = function () {
    route('gags.create', function () {
        $input = input();
        $button = button();
        $form = form([$input, $button]);
        $form->toRoute('gags.store');
        echo $form;
    });
};
return $route;
