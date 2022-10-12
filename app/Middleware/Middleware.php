<?php

namespace Laeawa\Belajar\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}