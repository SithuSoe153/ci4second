<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        // return view('shop');
        echo "<h2>This is an admin shop.</h2>";
    }

    public function product()
    {
        // return view('product');
        echo "<h2>This is a product:. With an id </h2>";
    }
}
