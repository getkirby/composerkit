<?php

use Kirby\Cms\App as Kirby;

require dirname(__DIR__) . '/vendor/autoload.php';

$kirby = new Kirby([
	'roots' => [
		'index'     => __DIR__,
		'base'      => $base = dirname(__DIR__),
		'site'      => $base . '/site',
		'data'      => $data = $base . '/data',
		'content'   => $data . '/storage/content',
		'accounts'  => $data . '/storage/accounts',
		'languages' => $data . '/storage/languages',
		'license'   => $data . '/storage/.license',
		'cache'     => $data . '/runtime/cache',
		'logs'      => $data . '/runtime/logs',
		'sessions'  => $data . '/runtime/sessions',
	]
]);

echo $kirby->render();
