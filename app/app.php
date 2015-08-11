<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('anagram_input.html.twig');
    });

    $app->get("/anagram_results", function() use ($app) {
      $new_anagram = new Anagram;
      $anagram_return = $new_anagram->findAnagram($_GET['input_word']);
      return $app['twig']->render('anagram_results.html.twig', array('result' => $anagram_return));
    });

    return $app;

?>
