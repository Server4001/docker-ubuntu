<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/name/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();
