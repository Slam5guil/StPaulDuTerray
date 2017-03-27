<?php
$app->get('/ping', function() use ($app) {
    return 'ping';
});

$app->get('/hello', function() use ($app) {
    return 'Hello world';
});

$app->get('/', function () {
    require '/model.php';
    $sejours = getSejours();

    ob_start();                 // start buffering HTML output
    require '/view.php';
    $view = ob_get_clean();      // assign HTML output to $view
    return $view;
	
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

?>