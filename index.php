<?php

require_once './vendor/autoload.php';

/* use Eclair\Routing\Route;
use Eclair\Routing\Middleware;
use Eclair\Database\Adaptor;

Adaptor::setup('mysql:dbname=phpblog', 'root', 'Rlawngur12@');

class HelloMiddleware extends Middleware
{
    public static function process()
    {
        return true;
    }
}

Route::add('get', '/', function () {
    echo 'Hello, world';
}, [ HelloMiddleware::class ]);

Route::add('get', '/posts/{id}', function ($id) {
    if ($post = Adaptor::getAll('SELECT * FROM posts  WHERE `id` = ?', [ $id ])) {
        return var_dump($post);
    }
    http_response_code(404);
});

Route::run(); */

/* use Eclair\Session\DatabaseSessionHandler;
use Eclair\Database\Adaptor;

Adaptor::setup('mysql:dbname=myapp_test', 'root', 'Rlawngur12@');

session_set_save_handler(new DatabaseSessionHandler());

session_start();

$_SESSION['message'] = 'Hello, world';
$_SESSION['foo'] = new stdClass(); */

use Eclair\Support\ServiceProvider;
use Eclair\Application;

class SessionServiceProvider extends ServiceProvider
{
    public static function register()
    {

    }

    public static function boot()
    {
        session_start();
    }
}

$app = new Application([
    SessionServiceProvider::class
]);

$app->boot();