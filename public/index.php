<?php

require_once __DIR__. '/../vendor/autoload.php';

use Laeawa\Belajar\PHP\MVC\App\Router;
use Laeawa\Belajar\PHP\MVC\Controller\HomeController;
use Laeawa\Belajar\PHP\MVC\Controller\ProdukController;
use Laeawa\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/produk/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProdukController::class, 'category');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', HomeController::class, 'login');
Router::add('GET', '/register', HomeController::class, 'register', [AuthMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'about', [AuthMiddleware::class]);

Router::run();
?>
