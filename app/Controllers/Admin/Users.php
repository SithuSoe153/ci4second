<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        // return view('shop');
        echo "<h2>This is an Users Area.</h2>";
    }

    public function getAllUsers()
    {
        // return view('product');
        echo "<h2>Show All Users</h2>";
    }
}
