<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "hello gan";
    }
    public function about($umur = 0)
    {
        echo "hallo $this->nama. berumur $umur";
    }
}
