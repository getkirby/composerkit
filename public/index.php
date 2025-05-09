<?php

use Kirby\Cms\App as Kirby;

require dirname(__DIR__) . '/vendor/autoload.php';

$kirby = new Kirby([
	'roots' => [
		'index' => __DIR__,
		'base' => $base = dirname(__DIR__),
		'content' => $base . '/content',
		'site' => $base . '/site',
	]
]);

echo $kirby->render();
