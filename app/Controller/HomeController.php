<?php

namespace Laeawa\Belajar\PHP\MVC\Controller;

use Laeawa\Belajar\PHP\MVC\App\View;

class HomeController{

    public function index(): void
    {
        $model = [
            "tittle" => "Belajar PHP MVC",
            "content" => "Semangat Belajar PHP MVC"
        ];
        // require __DIR__ . '/../View/Home/index.php';
        View::renderView('index', $model);
    }
    public function login(): void
    {
        echo "HomeController .login";
    }
    public function register(): void
    {
        echo "HomeController .register";
    }
    public function about(): void
    {
        require_once __DIR__ . '/../View/index.php';
    }
}
?>