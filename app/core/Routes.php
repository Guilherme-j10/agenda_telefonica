<?php

    use elevenstack\expressphp\Express as express;

    $app = new express(false);

    $app->namespace('app/controller/');
    $app->type_aplication('web');

    $app->get('/', function($req, $res){
        $res['redirect']('agenda');
    });

    $app->get('/agenda', 'agendaController:index');
    $app->post('/salve_contact', 'agendaController:save_contact');

    $app->error($app->getRoute_request(), function($response){
        $response['send']('Page not found');
    });