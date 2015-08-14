<?php
	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/RepeatCounter.php';

	 $app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));

	$app->get("/", function() use ($app){
		return $app['twig']->render('home.html.twig');
	});

	$app->get("/word_count", function() use ($app){
		$word_finder = new RepeatCounter;
		$word = $_GET['word'];
		$text = $_GET['text'];
		$number_of_repeats = $word_finder->countRepeats($word, $text);
		return $app['twig']->render('word_count.html.twig', array('result' => $number_of_repeats));
	});



	return $app;
?>
