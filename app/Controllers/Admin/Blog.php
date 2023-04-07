<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        // return view('shop');
        echo "<h2>A list of blog post.</h2>";
    }

    public function createNew()
    {
        return view('blog_form');
        // echo "<h2>Show All Users</h2>";
    }

    public function saveBlog()
    {
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";

        // return view('blog_form');
        // echo "<h2>Show All Users</h2>";
    }
}
