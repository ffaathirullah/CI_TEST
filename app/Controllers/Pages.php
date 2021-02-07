<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $data = ["title" => "Home"];
        echo view("layouts/header", $data);
        echo view("pages/home");
        echo view("layouts/footer");
    }
    public function about()
    {
        $data = ["title" => "About Me"];
        echo view("layouts/header", $data);
        echo view("pages/about");
        echo view("layouts/footer");
    }
}
