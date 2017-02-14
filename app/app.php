<?php
    date_default_timezone_get('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Queen.php';

    $app= new Silex\Application();

    $app->register(new Silex\Provider\twigServiceProvider(), array('twig.path'=> __DIR__.'/../views'));
    $app['debug']= true;

    $app->get('/', function() use($app){

        return $app['twig']->render('index.html.twig');

    });

    $app->get('/result_hit', function() use($app){
        $new_move = new Queen($_GET["queen_x"], $_GET["queen_y"], $_GET["opponent_x"], $_GET["opponent_x"]);
        // $diagonal_difference = "";

        return $app['twig']->render('result_hit.html.twig', array('new_move'=> $new_move));

    });

    $app->get('/result_miss', function() use($app){
        $new_move = new Queen($_GET["queen_x"], $_GET["queen_y"], $_GET["opponent_x"], $_GET["opponent_x"]);
        // $diagonal_difference = "";

        return $app['twig']->render('result_miss.html.twig', array('new_move'=> $new_move));

    });

    return $app;

 ?>
