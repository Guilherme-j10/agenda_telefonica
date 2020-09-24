<?php

    $load = parse_ini_file('.env');

    $production_mode = false;
    $name_project  = $load['NAME_PROJECT'];

    if($production_mode){
        define('SITE_NAME', 'http://'.$_SERVER['HTTP_HOST']);
    }else{
        define('SITE_NAME', 'http://'.$_SERVER['HTTP_HOST'].'/'.$name_project);
    }

    //GLOBAIS
    define('IMAGES', SITE_NAME.'/public/assets/img/');
    define('STYLESHEET', SITE_NAME.'/public/style');
    define('JS_FILE', SITE_NAME.'/public/assets/js/');