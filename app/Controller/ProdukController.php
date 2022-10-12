<?php

namespace Laeawa\Belajar\PHP\MVC\Controller;

class ProdukController{

    public function category(string $produkId, string $categoryId): void
    {
        echo "PRODUCT $produkId, CATEGORY $categoryId";
    }
}