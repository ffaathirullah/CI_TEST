<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $data = ["title" => "Home"];
        return view("pages/home", $data);
    }
    public function about()
    {
        $data = ["title" => "About Me"];
        echo view("pages/about", $data);
    }
}
