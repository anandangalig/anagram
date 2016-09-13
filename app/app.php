<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/results", function() use($app) {
        $anagram = new Anagram($_GET['input'], $_GET['target_input']);
        $anagram->anagram_check();
        return $app['twig']->render('index.html.twig', array('anagram' => $anagram));
    });

    return $app;
 ?>
