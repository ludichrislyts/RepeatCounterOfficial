<?php
	require_once __DIR__./../vendor/autoload.php";
	require_once __DIR__./../src/Class.php";

	 = new Silex\Application();

	->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__./../views'
	));

	->get("/", function() use (){
		return ['twig']->render('home.html.twig');
	});

	return 
?>
