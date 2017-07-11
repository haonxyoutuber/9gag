<?php
function route($name = 'default', $callback)
{
    if (isset($_GET['route'])) {
        $currentRouteName = $_GET['route'];
    }else{
        $currentRouteName = 'default';
    }
    if ($name === $currentRouteName) {
        $callback();
        echo '<!--Route Name: '.$currentRouteName.'-->';
    }
}

$indexFunctionName = function () {
    echo '
       <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Title</title>
            </head>
            <body>
                 webstart 2
            </body>
       </html>
        ';
};
route('users.index', function(){
    echo 'Route for users.index';
});
route('users.show', function(){
    echo 'Route for users.show';
});
route('default', $indexFunctionName);
?>
