<?php
use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Middleware\Middleware;
use App\Support\Routes;
use Slim\Csrf\Guard;
use Symfony\Component\HttpFoundation\Session\Session;
use League\Flysystem\Local\LocalFilesystemAdapter;
use League\Flysystem\Filesystem;
use MatthiasMullie\Scrapbook\Adapters\Flysystem;

/**
 * Start session.
 */
$session = new Session();
$session->start();

$container = new Container;
$app = SlimAppFactory::create($container);

$container->set('session', $session);

$responseFactory = $app->getResponseFactory();
$container->set('csrf', function () use ($responseFactory) {
    return new Guard($responseFactory);
});

$middleware = new Middleware;
$middleware->init($app);

/**
 * Defining routes.
 */
$routes = new Routes($app);
$routes->init();

/**
 * Initialize Cache.
 */
$adapter = new LocalFilesystemAdapter(config('app.cache.path'));
$filesystem = new Filesystem($adapter);
$cache = new Flysystem($filesystem);
$container->set('cache', $cache);

/**
 * Initialize Illuminate Database Connection.
 */
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => config('database.driver'),
    // 'host' => config('database.host'),
    'database' => config('database.database'),
    // 'username' => config('database.username'),
    // 'password' => config('database.password'),
    'charset' => config('database.charset')
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

return $app;
