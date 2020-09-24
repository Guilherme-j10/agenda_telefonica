<?php

    use elevenstack\expressphp\Express as express;

    $app = new express(false);

    $app->namespace('app/controller/');
    $app->type_aplication('web');

    $app->get('/', 'defaultController:index');

    $app->error($app->getRoute_request(), function($response){
        $response['send']('Page not found');
    });