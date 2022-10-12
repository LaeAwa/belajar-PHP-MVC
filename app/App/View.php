<?php

namespace Laeawa\Belajar\PHP\MVC\App;

class View{

    public static function renderView(string $view, $model){
        require __DIR__ . '/../View/Home/'. $view . '.php';
    }
}