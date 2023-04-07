<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type, $productid)
    {
        // return view('product');
        echo "<h2>This is a product: $type. With an id ($productid)</h2>";
    }
}
