<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $data = [
            "title" => "Daftar Komik";
        ]
        return view("komik/index", $data);
    }
}
